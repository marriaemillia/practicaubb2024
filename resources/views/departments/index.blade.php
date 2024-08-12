<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatii despre departament</title>
</head>
<body>

<h1>Hai in departamentul tau ideal!</h1>
<p><a href="http://localhost:8000/departments/create">Click aici!!!Repede!</a></p>
  <h2> Lista departamentelor an 2024</h2>
  <table>
    <thead>
     <tr> 
        <th> id </th>
        <th> nume </th>
     </tr>
    </thead>
    <tbody>
        @foreach ($departments as $department)
        <tr>
            <td> {{$department->id}}</td>
            <td> {{$department->name}}</td>
            <td> <a href="{{ route('departments.update', ['department' => $department->id]) }}">Modifica</a></td>
            <td> <a href="{{ route('departments.delete', ['department' => $department->id]) }}">Sterge</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
</body>
</html>
