<html>
    <head>

    </head>
    <body>
       <h1>DashBoard</h1>
         
         <a href="/logout">Logout</a>
         <h2>My Employee Record</h2>
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>
                        <form action="/deleteEmployee/{{ $employee->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                        <form action="/edit/{{ $employee->id }}" method="GET" style="display:inline;">
                            @csrf
                            <button type="submit">Edit</button>
                        </form>
                    </td>
                </tr>
                @endforeach

    </body>
</html>