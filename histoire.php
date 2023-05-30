<?php

session_start(); 

?>




<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="./mediaqueries.css">
        <title> Pizzeria Ti'Soley - notre histoire </title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg nav-b">
            <div class="container-fluid">
            <a class="navbar-brand logo" href="#"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <a class="p-3" href="./index.php"> Accueil </a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-a" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Qui sommes nous ?</a>
            <ul class="dropdown-menu bg-black">
                <li>
                    <a class="dropdown-item text-white" href="./histoire.php"> Notre histoire</a>
                </li>
                <li>
                    <a class="dropdown-item text-white" href="./partenaires.php">Nos partenaires </a>
                </li>
                <li>
                    <a class="dropdown-item text-white" href="./terredessences.php"> Terre d'essences</a>
                </li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-a" href="#" role="button" data-bs-toggle="dropdown"aria-expanded="false">Commande en ligne</a>
            <ul class="dropdown-menu bg-black">
                <li>
                    <a class="dropdown-item text-white" href="./commande.php"> Notre carte </a>
                </li>        
            </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-a" href="./contact.php">Contact</a>
                </li>
                    <?php
                if(isset($_SESSION['connecter']))
                {
                echo '<a class="nav-link nav-a deco" href="deconnexion.php">Déconnexion</a> <a class="nav-link nav-a deco" href="">'.$_SESSION["connecter"].'</a> ';
                } else  { echo '<a class="nav-link nav-a" href="connexion.php">Connexion</a>';
                    } 
                    ?>
                <li class="nav-item">
                    <a class="nav-link nav-a" href="./panier.php"> <img class="panier" src="./images/panier.png" alt="panier"></a>
                </li>
                </ul>
                <p class="text-white"><?php
                echo $_SESSION["number"]; ?> </p>
            </div>
        </div>
    </nav>

        <hr class="text-white m-0">
            <h1 class="text-white text-center p-3 m-4 titre-histoire"> Notre histoire </h1>
        <hr class="text-white m-1">

    <div class="text-center text-white m-0 p-2 text-histoire"> 
        <p class="m-0 p-histoire"> A l'époque où je travaillais chez Fleurs de Thym, petit restaurant familial à Greoux les bains où il faisait bon. </p>
        <p class="m-0 p-histoire"> Djuro, le propriétaire des lieux me taquinais et me disait souvent : "Tu es faites pour ouvrir ton commerce !" </p>
        <p class="m-0 p-histoire">L'idée a commencé à germer grâce à ses mots, si bien que je suis partie aux Antilles (en Martinique) y vivre une année.</p>
        <p class="m-0 p-histoire"> L'envie s'est amplifiée sur place, travaillant dans une pizzeria pour me perfectionner. </p>  
        <p class="m-0 p-histoire"> Ce voyage m'a mené au plus précieux de la vie : le contact humain, le partage, la solidarité et la communication !</p> 
        <p class="m-0 p-histoire">  Aimer son prochain , aimer sa vie et surtout faites ce qui vous fait vibrer, osez.</p>
        <p class="m-0 p-histoire">  Pas de peur, pas d'échec juste de la positivé et l'envie d'y croire. </p> 
        <p class="m-0 p-histoire"> N'allez jamais à contre courant car la vie ne revient jamais sur ses pas.</p>  
        <p class="m-0 p-histoire">   Je remercie la vie et tous ceux qui continue à croire en moi et j'adore ma vie !</p>
    </div>

    <div class="d-flex justify-content-center container-img"> 
        <img class="m-3 p-5"src="./images/cindy2.jpg" alt=""width="photo de la patronne" height="600px">
        <img class="m-3 p-5"src="./images/cindy.jpg" alt="photo de la patronne" width="400px" height="500px">
        <img class="m-3 p-5"src="./images/cindy3.jpg" alt="" width="photo de la patronne" height="600px">
    </div>



    <footer>
        <div class="reseaux mt-5">
            <p> <img src="./images/tel.png" alt="téléphone" width="40px"> <a href="tel:0618728007"> 06 18 72 80 07</a> </p>
            <p> <img src="./images/fb.png" alt="facebook" width="40px"> <a href="https://www.facebook.com/www.pizzatisoley.fr/">Ti'soley</a> </p>
            <p> <img src="./images/maps.png" alt="google maps" width="40px"> <a href="https://www.google.com/maps/place/Pizza+Ti%E2%80%99Soley/@43.7284749,5.8098372,17z/data=!3m1!4b1!4m5!3m4!1s0x12cbd3b8286f69ad:0xca99ef3a40375879!8m2!3d43.728471!4d5.8120259?hl=fr">Où nous trouver </a></p>
        </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"> </script>
<script src="script.js"></script>

</body>
</html>