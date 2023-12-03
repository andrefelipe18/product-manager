<?php

namespace App\Livewire\Dash;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{   
    public $name = '';

    public function add()
    {
        $this->validate([
            'name' => 'required|min:3'
        ]);

        Product::create([
            'name' => $this->name
        ]);

        $this->name = '';
    }

    public function render()
    {
        return view('livewire.dash.products', [
            'products' => Product::all()
        ]);
    }
}
