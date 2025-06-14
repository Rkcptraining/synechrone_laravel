<html>
    <head>

    </head>
    <body>
       
          
        <h2>My Employee Record</h2>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
            @foreach($data as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->address }}</td>
                <td>
                    <form action="/delete/{{ $employee->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                                    </td>
                                    <td>
                                        <form action="/edit/{{ $employee->id }}" method="GET">
                                            @csrf
                                            <button type="submit">Edit</button>
                                            </form>

                                    </td>
            </tr>
            @endforeach
        </table>
        

      
    </body>
</html>