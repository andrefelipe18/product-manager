<?php

namespace App\Livewire\Dashboard;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Product;

class ProductTable extends DataTableComponent
{
    protected $model = Product::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('dashboard', $row);
            }); 
        
        $this->setSearchEnabled();
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable(),
            Column::make("Nome", "name")
                ->sortable(),
            Column::make("Criado em", "created_at")
                ->sortable(),
        ];
    }
}
