<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5th ROMANIAN JAMBOREE</title>
    <style> 


    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

    p {
            text-align: center;
            background-color: hsl(152, 51%, 76%);
            margin: 40px;
            padding: 30px;
            border: 20px solid black;
            border-radius: 10px;
            border-color: hsl(152, 78%, 66%);
         
    }
    
    .no1 {
        text-align: center;
    
    }

    .login {
        text-align: center;
        background-color:  hsl(152, 51%, 76%);
    }

    .register {
        text-align: center;
        background-color:  hsl(152, 51%, 76%);
    }

    .logout {
        text-align: center;
        background-color:  hsl(152, 78%, 66%);
    }
    
    .going {
        text-align: center;
        border: 50px solid;
        border-color: hsl(152, 78%, 66%);
    }

    .heading1 {
        text-align: center;
        border: 10px solid;
        background-color: hsl(81, 60%, 59%);
        color: slateblue;
        padding: 100px;
        margin: 20px;
        border: 20px solid black;
        border-radius: 10px;
        border-color: #96D4D4;
    }

    .heading2 {
        background-color: hsl(81, 60%, 59%);
        color: #005312;
        border: 2px solid black;
        margin: 20px;
        padding: 20px;
        border: 20px solid black;
        border-radius: 10px;
        border-color: hsl(132, 93%, 28%);
        border-style: double;
        
    }

    .firstj {
        background-color: hsl(119, 81%, 81%);
        color: hsl(147, 52%, 34%);
        border: 2px solid black;
        margin: 20px;
        padding: 20px;
        border: 20px solid black;
        border-radius: 10px;
        border-color: hsl(147, 52%, 34%);
        border-style: dotted;
        }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%; 
    }

    .outdoor {
        text-align: center;
        border: 30px solid;
        background-color: hsl(223, 78%, 66%);
        color: black;
        padding: 100px;
        margin: 20px;
        border: 20px solid black;
        border-radius: 30px;
        border-color: hsl(223, 39%, 66%);
        border-style: dashed;
    }
    body {
        font-family: Montserrat;
    }

    </style>
</head>

<body>
    <h1 class ="no1"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"/>
    </svg>
               PACK YOUR TENTS!       
    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"/>
    </svg>
    </h1>
    <h2 class="going">               WE ARE GOING TO THE 5TH NATIONAL ROMANIAN JAMBOREE! </h2>
    <div class= "outdoor">
         <h2><b><i>The largest national outdoor youth event </i></b></h2>
     </div>
     @auth
        Salut
        {{Auth::user()->name}} click aici pentru a alege ce fel de pirat esti! 
        <a href="{{ route('camps.enroll') }}"><img src="clickhere.jpg" alt="Voluntar" style="width:120px;height:120px;"></a>
        <h5 class="logout"> <a href="http://localhost:8000/logout">Logout hereee!</a>  </h5>
     @else
        Please login or register here:
        <h3 class="login"> <a href="http://localhost:8000/login">Login hereee!</a> </h3>
        <h4 class="register" > <a href="http://localhost:8000/registration"> REGISTER hereee and start the adventure of your life!!</a>  </h4>
     @endauth
    
        <p><b>  The Romanian National Scout Jamboree is a major national event organised by the Organizatia Nationala Cercetasii Romaniei (ONCR). Held every four years, it brings together tens of thousands of Scouts, aged 14 to 17, from around the globe to promote cultural exchange, friendship, and adventure. The jamboree provides a unique opportunity for young people to learn from one another, develop leadership skills, and engage in outdoor activities while embracing the Scouting principles of community service, personal growth, and environmental stewardship.

            The jamboree's program is packed with a variety of educational, recreational, and community service activities, including workshops, team-building exercises, and outdoor pursuits. These experiences help Scouts build a strong sense of global citizenship and foster a deeper understanding of different cultures, ultimately contributing to a more peaceful and connected world.
            </b></p>

        <div class ="firstj">  
    <b> The first Romanian Jamboree </b> was held between 5 and 25 august in 1930 near Piatra Neamt at the foot of Mount Cârlomanu (617m). 
    The total audience was estimated at <b> 2,000 participants </b>. In addition to the romanian scouts and commanders, there were also commanders and scouts from <b> Germany </b>, as well as delegations from <b> Hungary, France, Poland, Czechoslovakia. </b>
    The program of the jamborea included: setting up the camp, the opening ceremony, trips and camp, competitions and awarding prizes, the closing ceremony, the setting up of the camp and the departure.
    All participants received a badge, cane badge and a diploma for a fee. It was the first scout event in the country at which personalized insignia were issued.
        </div>
    <style>
    img {
        width: 10%;
        }
    </style>

    <img src="assets/insigna-baston.jpg" style="width:300px;height:300px;" class = "center">

    <div class ="heading2" > <b>
        Locatie: Valea Iarului, Hunedoara
    </b> 
    <br> Anul acesta, ne dam intalnire in Valea Iarului, judetul Hunedoara pentru o aventura mistica in tinuturile de altadata ale tinutului Hasemphill. </br>
    <br>   Valea Iarului se află în inima Munților Retezat. </br> 
    </div>

</body>
</html>