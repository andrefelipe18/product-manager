<?php

namespace App\Livewire\Dash;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public function render()
    {
        return view('livewire.dash.products', [
            'products' => Product::all()
        ]);
    }
}
