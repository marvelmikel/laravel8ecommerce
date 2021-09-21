<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class AdminDashboardComponent extends Component
{
    public function render()

    {
        $category = Category::all();
        $product = Product::all();
        return view('livewire.admin.admin-dashboard-component', ['category' => $category, 'product' => $product])->layout('layouts.admin');
    }
}
