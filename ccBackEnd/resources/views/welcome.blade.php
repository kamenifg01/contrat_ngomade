<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            border-radius: 15px;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s;
            /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button2 {
            background-color: white;
            color: black;
            border: 2px solid #06F8E8;
        }

        .button2:hover {
            background-color: #06F8E8;
            color: white;
        }

        .button3 {
            background-color: white;
            color: black;
            border: 2px solid #09F243;
        }

        .button3:hover {
            background-color: #09F243;
            color: white;
        }
    </style>
</head>

<body class="antialiased">

    {{-- <div class="card img-fluid" style="width:500px">
        <img class="card-img-top" src="téléchargement.jpg" alt="Card image" style="width:100%">
        <div class="card-img-overlay">
            <div class="text-black text-center"
                style="background-image: url('téléchargement.jpg'); backggound-size: cover;">
                <h1>Elections </h1>
                <p>Parce que chaque voix compte </p>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Candidats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Electeurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Voter</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./csm_Login-Reg-Header_0c05a2a706.jpg" alt="Register" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3>Enregistrez - Vous</h3>
                    <p>Faites - nous part de qui vous êtes </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./../assets/vote-scrutin-election.jpg" alt="Choose" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3>Exprimez votre choix</h3>
                    {{-- <p>Thank you, Chicago!</p> --}}
                {{-- </div>
            </div>
            <div class="carousel-item">
                <img src="ny.jpg" alt="Change" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3>Réécrivez l'histoire !!</h3>
                    {{-- <p>We love the Big Apple!</p> --}}
                {{-- </div>
            </div>
        </div> --}}

        <!-- Left and right controls/icons -->
        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>  --}}
    <h1 class="pg-5 bg-primary text-black text-center">Client</h1>
    <br>

    <a href="/client"><button class="button button3">Liste des Clients</button></a>

</body>

</html>
