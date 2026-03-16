<?php

namespace App\Livewire\Naturale\Storefront;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\ProductModel;
use Livewire\WithPagination;

#[Title('Products')]
#[Layout('components.layouts.app')]
class Products extends Component
{
    use WithPagination;

    public string $name = '';
    public string $type = '';
    public string $feature = '';
    public string $max_price = '25';
    public string $min_rating = '';
    public string $sort = '';

    public bool $isFiltered = false;

    public function mount()
    {
        if (str_contains(url()->previous() ?? '', '/product')) {
            
            $saved = session('products_filters', []);
            $this->name = $saved['name'] ?? '';
            $this->type = $saved['type'] ?? '';
            $this->feature = $saved['feature'] ?? '';
            $this->max_price = $saved['max_price'] ?? '25';
            $this->min_rating = $saved['min_rating'] ?? '';
            $this->sort = $saved['sort'] ?? '';
        } else {
            session()->forget('products_filters');
        }
    }

    public function updated()
    {
        session([
            'products_filters' => [
                'name' => $this->name,
                'type' => $this->type,
                'feature' => $this->feature,
                'max_price' => $this->max_price,
                'min_rating' => $this->min_rating,
                'sort' => $this->sort,
            ]
        ]);
    }

    public function resetFilters(): void
    {
        $this->reset(['name', 'type', 'feature', 'max_price', 'min_rating', 'sort']);
        session()->forget('products_filters');
    }

    public function getIsFilteredProperty(): bool
    {
        return $this->name !== ''
            || $this->type !== ''
            || $this->feature !== ''
            || $this->min_rating !== ''
            || $this->max_price !== '25'
            || $this->sort !== '';
    }

    public function render()
    {
        $query = ProductModel::query()
            ->withAvg('reviews', 'r_rating')
            ->where('p_category', '!=', 'shipping');

        $this->isFiltered = false;

        if (filled($this->name)) {
            $query->where('p_name', 'like', "%{$this->name}%");
            $this->isFiltered = true;
        }
        if (filled($this->type)) {
            $query->where('p_category', $this->type);
            $this->isFiltered = true;
        }
        if (filled($this->feature)) {
            $query->where('p_feature', $this->feature);
            $this->isFiltered = true;
        }
        if (filled($this->max_price)) {
            $query->where('p_price', '<=', $this->max_price);
            $this->isFiltered = true;
        }
        if (filled($this->min_rating)) {
            $query->having('reviews_avg_r_rating', '>=', $this->min_rating);
            $this->isFiltered = true;
        }

        match ($this->sort) {
            'price_asc' => $query->orderBy('p_price', 'asc'),
            'price_desc' => $query->orderBy('p_price', 'desc'),
            'rating' => $query->orderBy('reviews_avg_r_rating', 'desc'),
            'name_asc' => $query->orderBy('p_name', 'asc'),
            'name_desc' => $query->orderBy('p_name', 'desc'),
            default => null,
        };

        $products = $query->paginate(12);

        $categories = ProductModel::select('p_category')
            ->distinct()
            ->pluck('p_category')
            ->filter(fn($c) => $c !== 'shipping');

        $features = ProductModel::select('p_feature')
            ->distinct()
            ->pluck('p_feature');

        return view('livewire.naturale.storefront.products', compact('products', 'categories', 'features'));
    }
}
