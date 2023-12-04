<div>
    <x-slot:title>
        Tabela
    </x-slot>
    <div role="tablist" class="tabs tabs-lifted">
        <button @class(['tab-active' => $table == 'Dashboard.UserTable', 'tab']) type="button" wire:click="changeTable('Dashboard.UserTable')">Usuários</button>
        <button type="button" class="tab" wire:click="changeTable('Dashboard.ProductTable')">Produtos</button>
        <button type="button" class="tab">Tab 3</button>
    </div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
        <div class="gap-3 m-5 mb-14">
            @switch($table)
                @case('Dashboard.UserTable')
                    <livewire:Dashboard.UserTable/>
                    @break
                @case('Dashboard.ProductTable')
                    <livewire:Dashboard.ProductTable/>
                    @break
            @endswitch
        </div>
    </div>
</div>
