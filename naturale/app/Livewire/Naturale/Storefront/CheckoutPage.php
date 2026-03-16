<?php

namespace App\Livewire\Naturale\Storefront;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Title('Checkout')]
#[Layout('components.layouts.app')]

class CheckoutPage extends Component
{
    public string $currentPage = '';

    public function mount()
    {

        if (auth()->user()) {
            $this->currentPage = 'details';
        } else {

            $this->currentPage = 'account';

        }

    }

    public function render()
    {
        return view('livewire.naturale.storefront.checkout-page');
    }
}
