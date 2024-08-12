<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('camps.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Numele campului:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="start_date">Campul incepe in:</label>
            <input type="date" id="start_date" name="start_date" required>
        </div>
        <div>
            <label for="end_date">Campul se termina in</label>
            <input type="date" id="end_date" name="end_date" required>
        </div>
        <div>
            <label for="max_members">Numarul maxim de membri care se pot inscrie</label>
            <input type="number" id="max_members" name="max_members" required>
        </div>
        <div>
            <label for="equipment">Echipamentul necesar  este:</label>
            <input type="text" id="equipment" name="equipment" required>
        </div>
        <div>
            <label for="type">Campul e de tip </label>
            <select name="type" id="type">
                <option value="national">Camp National</option>
                <option value="international">Camp International</option>
                <option value="regional">Camp Regional</option>
            </select>
        </div>
        
        <button type="submit">Adauga camp</button>
    </form>
</body>
</html>