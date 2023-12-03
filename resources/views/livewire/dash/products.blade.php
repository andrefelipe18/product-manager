<div>
    <div>
        <label for="add-product">Adicionar produto</label>
        <input type="text" id="add-product" wire:model="name">
        <button wire:click="add">Adicionar</button>
    </div>
    <table class="p-6 text-gray-900 dark:text-gray-100">
        <thead>
            <tr class="bg-gray-100 dark:bg-gray-600">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr class="bg-gray-100 dark:bg-gray-700 border-b border-gray-200 dark:border-gray-600 hover:bg-gray-200 dark:hover:bg-gray-600">
                <td class="px-4 py-2">{{ $product->id }}</td>
                <td class="px-4 py-2">{{ $product->name }}</td>
                <td class="px-4 py-2">{{ $product->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>