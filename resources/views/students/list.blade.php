<div>
    <h1>Student List</h1>
    <table border="1">
        <tr>            
            <td>Sr #</td>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
        </tr>
        @foreach ($students as $std)
        <tr>            
            <td>{{ $loop->iteration }}</td>
            <td>{{$std->name}}</td>
            <td>{{$std->email}}</td>
            <td>{{$std->batch}}</td>
        </tr>
        @endforeach
    </table>
</div>
