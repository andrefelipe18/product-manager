<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title ?? __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div role="tablist" class="tabs tabs-boxed">
                <button class="tab tab-active">Tab 1</button>
                <button class="tab">Tab 2</button>
                <button class="tab">Tab 3</button>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
                <div class="gap-3 m-5 mb-14">
                    
                    <livewire:dash.UserTable/>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
