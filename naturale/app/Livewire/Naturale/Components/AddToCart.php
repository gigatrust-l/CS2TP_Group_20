<?php

namespace App\Livewire\Naturale\Components;

use Livewire\Component;
use App\Models\ProductModel;

class AddToCart extends Component
{
    public ProductModel $product;

    public int $quantity = 1;

    public bool $showWindow = false;

    public function mount($product)
    {

        $this->product = $product;

    }

    public function addToCart()
    {
        $this->validate([
            'quantity' => ['required', 'integer', 'min:1', "max:{$this->product->p_stock}"],
        ]);
        $cart = session()->get('cart', []);

        $existingQuantity = $cart[$this->product->pid]['quantity'] ?? 0;
        $newTotal = $existingQuantity + $this->quantity;

        if ($newTotal > $this->product->p_stock) {
            $remaining = $this->product->p_stock - $existingQuantity;

            if ($remaining <= 0) {
                $this->dispatch('notify', message: "You already have the maximum stock in your cart.");
                return;
            }

            $this->dispatch('notify', message: "Only {$remaining} more can be added (you already have {$existingQuantity} in your cart).");
            return;
        }
        $cart[$this->product->pid] = [
            'quantity' => $newTotal,
        ];
        session()->put('cart', $cart);

        $this->dispatch('cart-updated');
        $this->showWindow = true;
    }

    public function closeWindow()
    {
        $this->showWindow = false;
    }

    public function render()
    {
        return view('livewire.naturale.components.add-to-cart');
    }
}
