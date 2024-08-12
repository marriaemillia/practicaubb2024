@php 

use App\Enums\CampType;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hai cu noi in {{$camp->id}} {{$camp->name}} !!!
        Calatoria incepe in {{$camp->start_date}} , si va dura pana in {{$camp->end_date}}.
        Hai cu inscrierea aia, ca sunt doar {{$camp->max_members}} locuri si se dau ca painea calda!!!
        Pentru a putea avea cea mai buna experienta ai nevoie de {{$camp->equipment}}.
        Vei avea ocazia sa te intalnesti cu prietenii tai de pretutindeni pentru ca acest camp este {{$camp->type}}
    <form action="{{ route('camps.update', $camp->id) }}" method="POST">
        @csrf
        <div>
            <label for="name">Numele campului:</label>
            <input type="text" id="name" name="name" value="{{$camp->name}}" required>
        </div>
        <div>
            <label for="start_date">Campul incepe in:</label>
            <input type="date" id="start_date" name="start_date" value="{{$camp->start_date->format('Y-m-d')}}" required>
        </div>
        <div>
            <label for="end_date">Campul se termina in</label>
            <input type="date" id="end_date" name="end_date" value="{{$camp->end_date->format('Y-m-d')}}" required>
        </div>
        <div>
            <label for="max_members">Numarul maxim de membri care se pot inscrie</label>
            <input type="number" id="max_members" name="max_members" value="{{$camp->max_members}}" required>
        </div>
        <div>
            <label for="equipment">Echipamentul necesar  este:</label>
            <input type="text" id="equipment" name="equipment" value="{{$camp->equipment}}" required>
        </div>
        <div>
            <label for="type">Campul e de tip </label>
            <select name="type" id="type">
                <option value="national" @if($camp->type == CampType::NATIONAL) selected  @endif>Camp National</option>
                <option value="international"  @if($camp->type == CampType::INTERNATIONAL) selected  @endif >Camp International</option>
                <option value="regional"  @if($camp->type == CampType::REGIONAL) selected  @endif >Camp Regional</option>
            </select>
        </div>
        
        
        <button type="submit">Modifica campul</button>
    </form>
</body>
</html>

