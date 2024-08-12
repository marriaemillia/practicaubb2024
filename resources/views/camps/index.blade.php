<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatii despre camp</title>
</head>
<body>

<h1>Creaza campul tau ideal!</h1>
<p><a href="http://localhost:8000/camps/create">Click aici!!!Repede!</a></p>
  <h2> Lista campurilor an 2024</h2>
  <table>
    <thead>
     <tr> 
        <th> id </th>
        <th> nume </th>
        <th> Data de inceput</th>
        <th> Data de final </th>
        <th> Numar maxim de participanti </th>
        <th> Echipament </th>
        <th> Tipul campului</th>
        <th> Actiuni</th>
     </tr>
    </thead>
    <tbody>
        @foreach ($camps as $camp)
        <tr>
            <td> {{$camp->id}}</td>
            <td> {{$camp->name}}</td>
            <td> {{$camp->start_date}}</td>
            <td> {{$camp->end_date}}</td>
            <td> {{$camp->max_members}}</td>
            <td> {{$camp->equipment}}</td>
            <td> {{$camp->type}}</td>
            <td> <a href="{{ route('camps.update', ['camp' => $camp->id]) }}">Modifica</a></td>
            <td> <a href="{{ route('camps.delete', ['camp' => $camp->id]) }}">Sterge</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
</body>
</html>
