<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despre departamente</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{ route('registration.post')}}" method="POST">
        @csrf
        <div>
            <label for="name">Nume:</label>
            <input type="name" id="name" name="name">

            <label for="email">Login:</label>
            <input type="email" id="email" name="email">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <label for="password_confirm">Confirma parola</label>
            <input type="password" id="password_confirm" name="password_confirm">

        </div>
        <button type="submit">Inregistrare</button>
    </form>
</body>
</html>

