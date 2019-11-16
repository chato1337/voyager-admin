<table>
    <thead>
        <th>ID</th>
        <th>Rol</th>
        <th>Nombre</th>
        <th>Email</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->role_id }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>