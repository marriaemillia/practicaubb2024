<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despre departamente</title>
</head>
<body>
    <h1>Hai cu noi in {{$department->id}} si alege departamentul de {{$department->name}} !!!
    <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        <div>
            <label for="name">Numele departamentului:</label>
            <input type="text" id="name" name="name" value="{{$department->name}}" required>
        </div>
        <button type="submit">Modifica departamentul</button>
    </form>
</body>
</html>

