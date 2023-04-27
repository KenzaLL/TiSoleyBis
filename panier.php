
<?php

session_start(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg nav-b">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="#"> </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-a" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Qui sommes nous ?
                        </a>
                        <ul class="dropdown-menu bg-black">
                            <li><a class="dropdown-item text-white" href="#"> Notre histoire</a></li>
                            <li><a class="dropdown-item text-white" href="#">Nos partenaires </a></li>
                            <li><a class="dropdown-item text-white" href="#"> Terre d'essences</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-a" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Commande en ligne
                        </a>
                        <ul class="dropdown-menu bg-black">
                            <li><a class="dropdown-item text-white" href="#"> Notre carte </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-a" href="#">Contact</a>
                    </li>
                    
                    <?php
                        if(isset($_SESSION['connecter'])) {
                            echo '<a class="nav-link nav-a deco" href="deconnexion.php">Déconnexion</a>
                            <a class="nav-link nav-a deco" href="">'.$_SESSION["connecter"].'</a>';
                        } else { echo '<a class="nav-link nav-a" href="connexion.php">Connexion</a>';} 
                        ?>
                        <li class="nav-item">
                            <a class="nav-link nav-a" href="#"> <img class="panier" src="./images/panier.png" alt=""></a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>

<h1 class="titre text-white pt-3 mt-3"> Votre panier </h1>


<section class="panier-entier">

<?php

    require_once "panierbis.php";

?>

<footer>

<div class="reseaux mt-5">
    <p> <img src="./images/tel.png" alt="" width="40px"> <a href="tel:0618728007"> Une question ? contactez nous
            !!</a> </p>
    <p> <img src="./images/fb.png" alt="" width="40px"> <a href="https://www.facebook.com/www.pizzatisoley.fr/">
            Ti'soley</a> </p>
    <p> <img src="./images/maps.png" alt="" width="40px"> <a
            href="https://www.google.com/maps/place/Pizza+Ti%E2%80%99Soley/@43.7284749,5.8098372,17z/data=!3m1!4b1!4m5!3m4!1s0x12cbd3b8286f69ad:0xca99ef3a40375879!8m2!3d43.728471!4d5.8120259?hl=fr">
            Où nous trouver </a></p>
</div>
</footer>

<script src="./formulaire.j"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" </script>
<script src="script.js"></script>
</body>
</html>