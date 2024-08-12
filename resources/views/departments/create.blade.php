<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alege departamentul tau ideal!!</title>
</head>
<body>
<form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Numele departamentului:</label>
            <input type="text" id="name" name="name" required>
        </div>
       
        <button type="submit">Adauga departament</button>
    </form>
</body>
</html>