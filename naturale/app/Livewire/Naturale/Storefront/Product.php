<?php

namespace App\Livewire\Naturale\Storefront;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\ProductModel;
use App\Models\Review;
use Livewire\WithPagination;


#[Layout('components.layouts.app')]
class Product extends Component
{
    use WithPagination;
    public $product;

    public string $sort = 'rid';
    public string $direction = 'asc';

    public function mount($slug)
    {
        $product = ProductModel::where('p_name', $slug)
            ->withAvg('reviews', 'r_rating')
            ->first();

        if (!$product || $product->p_category === 'shipping') {
            $this->redirect('/products');
            return;
        }

        $this->product = $product;

    }

    public function setSort(string $field): void
    {
        $sortable = ['rid', 'r_rating'];
        if (!in_array($field, $sortable))
            return;

        if ($this->sort === $field) {
            $this->direction = $this->direction === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sort = $field;
            $this->direction = $field === 'rid' ? 'asc' : 'desc';
        }

        $this->resetPage();
    }
    public function render()
    {

        $reviews = Review::with('customer')
            ->where('r_pid', $this->product->pid) // scope to this product
            ->orderBy($this->sort, $this->direction)
            ->paginate(10);

        return view('livewire.naturale.storefront.product', compact('reviews'))->title($this->product->p_name);
    }
}
