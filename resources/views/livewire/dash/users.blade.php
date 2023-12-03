<div>
  <table class="p-6 text-gray-900 dark:text-gray-100">
    <thead>
        <tr class="bg-gray-100 dark:bg-gray-600">
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Created At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr class="bg-gray-100 dark:bg-gray-700 border-b border-gray-200 dark:border-gray-600 hover:bg-gray-200 dark:hover:bg-gray-600">
            <td class="px-4 py-2">{{ $user->id }}</td>
            <td class="px-4 py-2">{{ $user->name }}</td>
            <td class="px-4 py-2">{{ $user->email }}</td>
            <td class="px-4 py-2">{{ $user->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
