<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despre departamente</title>
</head>
<body>
    <h1>Login</h1>
    <form action = "{{ route('login.post')}}" method="POST">
        @csrf
        <div>
            <label for="name">Login:</label>
            <input type="email" id="name" name="email">

            <label for="password">Password:</label>
            <input type="password" name="password">

        </div>
        <button type="submit">Autentificare</button>
    </form>
</body>
</html>

