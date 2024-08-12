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
    <h1 class = "heading1"> Campul nostru va incepe in scurt timp, asa ca ti-am pregatit o lista sa te pregatesti cat mai bine din timp</h1>

    
    <h2 class = "heading2">
        Felicitari! Te-ai inscris cu succes ca participant!
    </h2>

    <h3 class = "heading3">
        Aici gasesti lista cu echipamentul pe care trebuie sa il ai pregatit pentru camp:
    </h3>
    <a href="{{ route('camps.echipament') }}"><img src="images.png" alt="Voluntar" style="width:120px;height:120px;"></a>
    <br> 

</body>
</html>