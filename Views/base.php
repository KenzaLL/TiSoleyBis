
<?php 

ob_start();
// Vérifie si l'utilisateur est connecté
$is_connected = isset($_SESSION['connecter']);
// Fermeture de la connexion à la base de données
$connexion = null;

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Site de pizzeria">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="./public/css/style.css">
        <link rel="stylesheet" href="./public/css/mediaqueries.css">
        <title> <?= $title ?></title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg nav-b lead">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="#"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <a class="avo" href="accueil"> Accueil </a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-a" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Qui sommes nous ?</a>
            <ul class="dropdown-menu bg-black">
                <li>  <a class="dropdown-item text-white" href="histoire"> Notre histoire</a> </li>
                <li> <a class="dropdown-item text-white" href="partenaires">Nos partenaires </a></li>
                <li> <a class="dropdown-item text-white" href="terredessences"> Terre d'essences</a></li>
            </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-a" href="#" role="button" data-bs-toggle="dropdown"aria-expanded="false">Commande en ligne</a>
            <ul class="dropdown-menu bg-black">
                <li><a class="dropdown-item text-white" href="commande"> Notre carte </a> </li>        
            </ul>
                </li>
                <li class="nav-item"><a class="nav-link nav-a" href="contact">Contact</a></li>
                <?php
                
                if ($is_connected) : ?>
                    <li class="nav-item">
                        <a class="nav-link nav-a deco" href="deconnexion">Déconnexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-a deco" href=""><?php echo $_SESSION["id"]; ?></a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link nav-a" href="connexion">Connexion</a>
                    </li>
                    <?php if (isset($error_message)) : ?>
                        <script>alert('La connexion a échoué');</script>
                    <?php endif; ?>
                <?php endif; ?>
                
                
                
                                <li class="nav-item">
                                <a class="nav-link nav-a" href="panier"> <img src="panier.png" alt="" width="25"></a>
                                </li>
                                </ul>
                            <p class="text-white"> <?php
                             //echo $_SESSION["number"]; ?> </p> 
                            </div>
                        </div>
                    </nav>
                
        
                <?= $content; ?>




<footer>
        <div class="reseaux">
            <p> 
                <img src="./public/images/tel.png" alt="téléphone" width="40px"> 
                <a href="tel:0618728007"> 06 18 72 80 07</a> 
            </p>
            <p>
                <img src="./public/images/fb.png" alt="icone facebook" width="40px">
                <a href="https://www.facebook.com/www.pizzatisoley.fr/">Ti'soley</a>
            </p>
            <p>
                <img src="./public/images/maps.png" alt="icone google maps" width="40px">
                <a href="https://www.google.com/maps/place/Pizza+Ti%E2%80%99Soley/@43.7284749,5.8098372,17z/data=!3m1!4b1!4m5!3m4!1s0x12cbd3b8286f69ad:0xca99ef3a40375879!8m2!3d43.728471!4d5.8120259?hl=fr">Où nous trouver </a></p>
        </div>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"> </script>
<script src="./public/js/script.js"></script> 

</body>


</html>

