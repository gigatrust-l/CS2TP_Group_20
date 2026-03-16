<?php

namespace App\Livewire\Naturale\Storefront;

use Livewire\Component;
use App\Models\ProductModel;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Cart')]
#[Layout('components.layouts.app')]
class CartIndex extends Component
{

    public array $quantities = [];

    public function mount()
    {

        $cart = session()->get('cart', []);
        foreach ($cart as $productId => $value) {
            $this->quantities[$productId] = $value['quantity'];
        }

    }

    public function updateQuantity(int|string $productId, int $quantity): void
    {
        $cart = session()->get('cart', []);

        if (!isset($cart[$productId]))
            return;

        $maxStock = ProductModel::findOrFail($productId)->p_stock;

        if ($quantity > $maxStock) {

            $this->dispatch('notify', message: "You already have the maximum stock in your cart.");
            return;


        }

        $quantity = max(1, min($quantity, max(1, $maxStock)));

        $cart[$productId]['quantity'] = $quantity;
        $this->quantities[$productId] = $quantity;

        session()->put('cart', $cart);
    }

    public function removeItem(int|string $productId): void
    {
        $cart = session()->get('cart', []);
        unset($cart[$productId]);
        unset($this->quantities[$productId]);
        session()->put('cart', $cart);

        $p_name = ProductModel::findOrFail($productId)->p_name;

        $this->dispatch('success', message: "Item removed from cart: $p_name.");
    }

    public function clearCart()
    {
        session()->forget('cart');

    }



    public function toCheckout()
    {
        $cart = session()->get('cart', []);

        $stockError = false;

        $itemIssues = [];

        foreach ($cart as $key => $value) {

            $product = ProductModel::findOrFail($key);

            if ($product->p_stock < $value['quantity']) {

                $itemIssues[] = $product->p_name;

                $stockError = true;

            }

        }

        if ($stockError) {

            $this->dispatch('notify', message: ("There are stock issues for these items in your cart: " . implode($itemIssues)));
            return;

        }

        session()->flash('checkoutPage', 'account');

        redirect()->route('checkout');

    }

    public function render()
    {
        $tempCart = session()->get('cart', []);

        $cart = [];

        $runningTotal = 0;

        foreach ($tempCart as $key => $value) {

            $product = ProductModel::findOrFail($key);

            $runningTotal += (float) $product->p_price * $value['quantity'];

            $cart[] = [$product, $value['quantity']];

        }

        return view('livewire.naturale.storefront.cart-index', compact('cart', 'runningTotal'));
    }
}
