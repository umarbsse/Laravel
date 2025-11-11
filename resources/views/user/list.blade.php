<div>
    <h1>User List</h1>
    <table border="1">
        <tr>            
            <td>Sr #</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
        </tr>
        @foreach ($users as $user)
        <tr>            
            <td>{{ $loop->iteration }}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
        </tr>
        @endforeach
    </table>
</div>
