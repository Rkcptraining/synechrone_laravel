<html>
    <head>

    </head>
    <body>
        <h1>Update Employee Record</h1> 
        <form action="/updateEmployee/{{ $employee->id }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $employee->name }}" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $employee->email }}" required>
            <br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="{{ $employee->address }}" required>
            <br>
            <button type="submit">Update</button>
    </body>
</html>