<?php

ob_start();



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title><?= $title ?> </title>
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
            if(isset($_SESSION['connecter']))
           {
             echo '<a class="nav-link nav-a deco" href="deconnexion.php">Déconnexion</a> <a class="nav-link nav-a deco" href="">'.$_SESSION["connecter"].'</a> ';
            } else { echo '<a class="nav-link nav-a" href="connexion.php">Connexion</a>';
            } 
              ?>
                  <li class="nav-item">
                            <a class="nav-link nav-a" href="#"> <img class="panier" src="./images/panier.png" alt=""></a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="position-btn"> 
        <button type="button" class="btn btn-dark btn-commande mt-3 my-3"> Commande des clients </button>
        <button type="button" class="btn btn-dark btn-commande mt-3 my-3"> Historique des commandes </button>
        <button type="button" class="btn btn-dark bg-danger btn-commande mt-3 my-3"> Cloturer la commande en ligne </button>
    </div>

    
    <section class="panier-entier">

<article class="donnee-panier text-white">
    <p class="img-article"> <img src="" alt=""></p>
    <p class="taille-panier"> Titre </p>
    <p class="taille-panier"> Quantité </p>
    <div class="taille-panier">
    <img class="poubelle"src="./images/poubelle.png" alt="poubelle"> </button>
    </div>
    <p class="taille-panier"> Prix </p>
</article>



<article class="donnee-panier text-white">
    <img class="img-article" src="./images/coca.jpg" alt="">
    <p class="taille-panier"> cooca </p>
    <p> 1</p>
    <div class="taille-panier text-white">
        <button class="text-white btn-commande"> Validation commande </button>
    </div>
    <p class="taille-panier"> 1.50€ </p>
</article>


<article class="donnee-panier text-white"> 
    <img class="img-article" src="./images/coca.jpg" alt="">
    <p class="taille-panier"> cooca </p>
    <p> 1</p>
    <div class="taille-panier text-white">
        <button class="text-white btn-commande"> Validation commande </button>
    </div>
    <p class="taille-panier"> 1.50€ </p>
</article>



</section>

<div id="position-total-co"> 
<button type="button" class="btn btn-dark btn-commande total-co"> Total des commandes : 2 </button>
</div>

<?php 

$content = ob_get_clean();

$title = "Page d'administrateur";

require './Views/base.php';

?>