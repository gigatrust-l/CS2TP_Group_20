<?php

namespace App\Livewire\Naturale\Storefront;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

#[Title('Products')]
#[Layout('components.layouts.app')]
class Products extends Component
{
    use WithPagination;

    public string $name = '';
    public string $type = '';
    public string $max_price = '25';
    public string $min_rating = '';
    public string $sort = '';

    public function resetFilters(): void
    {
        $this->reset(['name', 'type', 'max_price', 'min_rating', 'sort']);
    }

    public function getIsFilteredProperty(): bool
    {
        return $this->name !== ''
            || $this->type !== ''
            || $this->min_rating !== ''
            || $this->max_price !== ''
            || $this->sort !== '';
    }

    public function render()
    {
        $query = Product::query()
            ->withAvg('reviews', 'r_rating')
            ->where('p_category', '!=', 'shipping');

        if (filled($this->name)) {
            $query->where('p_name', 'like', "%{$this->name}%");
        }
        if (filled($this->type)) {
            $query->where('p_category', $this->type);
        }
        if (filled($this->max_price)) {
            $query->where('p_price', '<=', $this->max_price);
        }
        if (filled($this->min_rating)) {
            $query->having('reviews_avg_r_rating', '>=', $this->min_rating);
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

        $categories = Product::select('p_category')
            ->distinct()
            ->pluck('p_category')
            ->filter(fn($c) => $c !== 'shipping');

        return view('livewire.naturale.storefront.products', compact('products', 'categories'));
    }
}
