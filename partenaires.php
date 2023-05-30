<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="./mediaqueries.css">
        <title> Pizzeria Ti'Soley - partenaires </title>
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

    <hr class="text-white">
            <h1 class="text-white text-center p-3 m-4 titre-histoire"> Nos partenaires </h1>
    <hr class="text-white">

    <div class="text-center text-white m-2 p-2 text-histoire"> 
        <p class="m-0 p-histoire"> Hormis les œufs qui proviennent de notre poulailler et les tomates de notre jardin, nos partenaires nous aident à vous régaler avec des produits locaux et d’une fraicheur exceptionnelle ! </p>
        <p class="m-0 p-histoire"> Notre but est d’avoir le circuit le plus court possible jusqu'à vous !</p>
        <p class="m-0 p-histoire"> Pour ça nous travaillons avec des artisans locaux au maximum.</p>
        <p class="btn-histoire p-2 partenairesbis"> Marcel and fils & alpes alimentaires distributions </p>
    </div>


    <div class="d-flex flex-wrap justify-content-center"> 
        <img class="m-3 partenaires"src="./images/marcel.png" alt="logo marcel and fils" width="500px" height="300px">
        <img class="m-3 partenaires"src="./images/alpes.jpg" alt="logo alpes distribution" width="500px" height="300px">
    </div>

    <p class="btn-histoire text-white text-center p-2 partenairesbis"> Moulin pichard bio & La fromagerie du verdon </p>

    <div class="d-flex flex-wrap justify-content-center"> 
        <img class="partenaires" src="./images/pichard.jpeg" alt="moulin pichard"width="500px" height="300px">
        <img class="m-3 partenaires"src="./images/fromagerie.jpg" alt="logo de la fromagerie" width="500px" height="315px">
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