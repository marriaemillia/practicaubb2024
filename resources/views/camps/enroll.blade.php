<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSCRIERE</title>
    <style> 
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    
    .heading1 {
        text-align: center;
        background-color:lightsalmon;

    }

    .heading2 {
        text-align: center;
        background-color:deeppink;

    }

    .heading3 {
        text-align: center;
        background-color:mediumpurple;
    }

    </style>
</head>

<body>
    <button type="button" onclick="alert('Gata Oricand!')">Gata Oricand!</button>
    <h1 class = "heading1"> Campul nostru va incepe in scurt timp, asa ca ti-am pregatit o lista sa te pregatesti cat mai bine din timp</h1>
    
    <h2 class = "heading2" >
        Click aici daca te-ai inscris ca participant!
    </h2>
    <a href="{{ route('camps.participant') }}"><img src="participant-logo-860-15786.png" alt="Participant" style="width:300px;height:300px;"></a>

    <h3 class = "heading3">
        Clcik aici daca te-ai inscris ca voluntar!
    </h3>
    <a href="{{ route('camps.voluntar') }}"><img src="EMBLEMA VOLUNTAR AMBUANTA-527x527.png" alt="Voluntar" style="width:300px;height:300px;text-align:center"></a>
    
</body>
</html>