<?php

namespace App\Livewire\Components\Dashboard;

use Livewire\Component;
use App\Livewire\Dashboard;

class ShowTable extends Component
{

    public $components = [
        [   
            'name' => 'Usuários',
            'path' => 'Dashboard.UserTable',
        ],
        [
            'name' => 'Produtos',
            'path' => 'Dashboard.ProductTable',
        ],
    ];

    public $table;

    public function changeTable($table)
    {
        $this->table = $table;
    }

    public function mount()
    {
        $this->table = 0;
    }
    
    public function render()
    {
        return view('livewire.components.dashboard.show-table');
    }
}
