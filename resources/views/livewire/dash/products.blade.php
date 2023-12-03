<div>
    <table>
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Created At</th>
                <th class="px-4 py-2">Add</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td class="px-4 py-2">{{ $product->id }}</td>
                <td class="px-4 py-2">{{ $product->name }}</td>
                <td class="px-4 py-2">{{ $product->price }}</td>
                <td class="px-4 py-2">{{ $product->created_at }}</td>
                <td class="px-4 py-2">
                    <button wire:click="add">Add</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>