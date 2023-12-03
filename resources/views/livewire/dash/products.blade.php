<div class="flex flex-col">
    <div class="m-5">
        <label class="label-text" for="add-product">Adicionar produto</label>
        <input class="input input-sm input-bordered w-full max-w-xs" type="text" id="add-product" wire:model="name">
        <button class="btn btn-sm btn-neutral" wire:click="add">Adicionar</button>
    </div>
    <div class="overflow-x-auto">
        <table class="table table-lg table-pin-rows table-pin-cols">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>