<?php

namespace App\Livewire\naturale\storefront;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]
#[Layout('components.layouts.app')]
class Index extends Component
{
    public array $slides = [];

    public array $ingredientsCategories = ['Avocado Extract', 'Shea Butter', 'Pomegranate Seed Oil', 'Tea Tree Oil', 'Coconut Oil'];

    public function mount()
    {
        $carousel = [
            'media/ingredients/coconutOil.webp',
            'media/ingredients/teaTreeOil.webp',
            'media/ingredients/pomegranateOil.webp',
            'media/ingredients/sheaButter.webp',
            'media/ingredients/avocadoExtract.webp',
        ];
        $ingredients = [
            'media/ingredients/avocado.webp',
            'media/ingredients/shea.webp',
            'media/ingredients/pomegranate.webp',
            'media/ingredients/teatree.webp',
            'media/ingredients/coconut.webp',
        ];

        $all = [[], [], [], [], [], $carousel, $ingredients];

        $categories = ['Shampoo', 'Conditioner', 'Leave-In Conditioner', 'Hair Masks', 'Hair Accessories', 'carousel', 'ingredients'];

        

        for ($i = 0; $i < 5; $i++) {

            $cat = [];

            for ($x = 1; $x <= 5; $x++) {

                $val = ($i * 5) + $x;

                $cat[] = "media/products/product_$val.webp";

            }

            $all[$i] = $cat;


        }

        $product = array_shift($all);

        array_splice($all,3,0,[$product]);

        $this->slides = array_combine($categories, $all);


    }

    public function render()
    {
        return view('livewire.naturale.storefront.index');
    }
}