<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
                {{-- <x-dashboard.top-nav/> --}}

                <div class="grid grid-col-2 grid-flow-col gap-3 m-5 mb-14">
                    
                    {{-- <livewire:dash.users/>
                    
                    <livewire:dash.products/> --}}
                    
                    {{-- <livewire:dash.UserTable/> --}}

                    <livewire:dash.ProductTable/>

                </div>

                <x-dashboard.btm-nav/>
            </div>
        </div>
    </div>
</x-app-layout>
