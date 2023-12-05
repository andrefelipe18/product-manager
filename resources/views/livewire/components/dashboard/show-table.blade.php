<div>
    <div role="tablist" class="tabs tabs-lifted">
        @foreach ($components as $key => $component)
            <x-dashboard.tabs-button :component="$component" :id="$key" :table="$table"/>
        @endforeach
    </div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
        <div class="gap-3 m-5 mb-14">
            @switch($table)
                @case(0)
                    <livewire:Dashboard.UserTable/>
                    @break
                @case(1)
                    <livewire:Dashboard.ProductTable/>
                    @break
            @endswitch
        </div>
    </div>
</div>
