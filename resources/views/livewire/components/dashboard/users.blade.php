<div>
  <div class="overflow-x-auto">
    <table class="table table-md table-pin-rows table-pin-cols">
      <thead>
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Created At</th>
          </tr>
      </thead>
      <tbody>
          @foreach($users as $user)
          <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->created_at }}</td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
