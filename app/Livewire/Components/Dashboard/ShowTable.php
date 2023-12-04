<?php

namespace App\Livewire\Components\Dashboard;

use Livewire\Component;

class ShowTable extends Component
{
    public $showFormComponent;

    public $table = 'Dashboard.UserTable';

    protected $listeners = ['refreshComponent' => '$refresh'];

    protected $tables = [
        'Dashboard.UserTable',
        'Dashboard.ProductTable',
    ];

    public function changeTable($table)
    {
        $this->table = $table;
    }
    
    public function render()
    {
        return view('livewire.components.dashboard.show-table');
    }
}
