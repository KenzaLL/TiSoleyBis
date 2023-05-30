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
        <title> Pizzeria Ti'Soley - terre d'essences </title>
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
        <h1 class="titre"> Bienvenue chez Ti'Soley ! </h1>
            <div> 
                <a class="cta" href="commande.php"> Commandez en ligne ! </a>
            </div>

        <img class="container-logos" src="./images/background-pizza-cosy-values-ff188e68.svg" alt="image d'une pizza">
            <hr class="text-white">
                <h2 class="text-white p-2 m-2"> Qu'est-ce qu'on mange ? </h2>

            <div class="position-article">
                <div class="test"> 
                    <a class="btn-test"href=""> pizzas </a>
                </div>
                <div class="test">
                    <a class="btn-test"href=""> desserts </a>
                </div>
            </div>
            <div class="position-article2"> 
                <div class="test"> 
                    <a class="btn-test"href=""> pizzas </a>
                </div>
                <div class="test">
                    <a class="btn-test"href=""> desserts </a>
                </div>
            </div>
            <hr class="text-white">
            <div class="text-white">
                <h2> Un savoir faire artisanal </h2> 
                    <p> Nous préparons toutes nos pizzas avec amour et dans les règles de l'art. Toutes nos préparations sont cuisinées par nos soins ! </p>
                        <a class="btn-histoire" href="histoire.php"> Découvrir notre histoire </a> 
            <img  class="background-savoir" src="https://img.freepik.com/photos-gratuite/chef-vue-face-couvrant-poisson-cru-farine-legumes-frais-bol-farine-planche-bois-table-cuisine_179666-44281.jpg?w=900&t=st=1683103784~exp=1683104384~hmac=f08cdcdf3fbed56857d8bdd383d98fbff1df485dd9382fe3ac8d892cbbe13c90" alt="image de fond"> 
            </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"> </script>
<script src="script.js"></script>

</body>


</html>