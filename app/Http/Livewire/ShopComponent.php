<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
//use Livewire\ShopComponent;
use Cart;
use App\Models\Category;


class ShopComponent extends Component
{

    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.shop-component', ['products' => $products])->layout('layouts.base');


    }
}
