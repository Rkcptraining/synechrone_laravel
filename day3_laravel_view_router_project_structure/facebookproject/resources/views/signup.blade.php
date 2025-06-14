<html>
    <head>

    </head>
    <body>
       <form action="/signup" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <button type="submit">Sign Up</button>
        </form>

       @if(isset($data))
           <h2>Submitted Data:</h2>
            <pre>{{print_r($data, true)}}</pre>
        @endif
    </body>
</html>