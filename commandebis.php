<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    

    <nav class="navbar navbar-expand-lg nav-b">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> <img src="./images/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-a" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Qui sommes nous ?
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#"> Notre histoire</a></li>
                      <li><a class="dropdown-item" href="#">Nos partenaires </a></li>
                      <li><a class="dropdown-item" href="#"> Terre d'essences</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-a" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Commande en ligne
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#"> Notre carte </a></li>
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
            </ul>
          </div>
        </div>
      </nav>


      <div class="background">
      <h1 class="titre nav-a"> Notre carte </h1>
    </div>

<h2 class="mt-4 my-5 px-4 text-white"><hr> Tous nos produits sont locaux , profitez en ! <hr> </h2>

    
     <div class="position-btn"> 
    <input list="search" id="enter" placeholder="Recherchez une pizza" >
    <datalist id="search">
    
        </datalist>
    
        <select id="base"> 
          <option value="pizzaAll"> Toutes les pizzas </option>
          <option value="cream"> Base crème </option>
          <option value="tomato"> Base tomate </option>
        </select>
    
        <button type="button" class="btn btn-dark btn-commande"> Pizzas </button>
      <button type="button" class="btn btn-dark btn-commande"> Nos préparations maisons </button>
      <button type="button" class="btn btn-dark btn-commande"> Desserts </button>
      <button type="button" class="btn btn-dark btn-commande"> Boissons </button>
      </div>


      <section class="d-flex flex-wrap justify-content-evenly mt-4">
    
    <?php 
    require_once("commande.php")
    ?>
      </section>

     </div>

<!-- <footer class="reseaux">

<div class="reseaux"> 
<a class="logo-reseaux"href="https://www.facebook.com/www.pizzatisoley.fr/?locale=fr_FR"> <img src="./images/facebook (2).png" alt=""> </a>
<a class="logo-reseaux"href="tel:0618728007"> <img src="./images/contact.png" width="40" alt=""></a>
<a class="logo-reseaux"href="https://www.google.com/maps/place/Pizza+Ti%E2%80%99Soley/@43.728471,5.8120259,15z/data=!4m6!3m5!1s0x12cbd3b8286f69ad:0xca99ef3a40375879!8m2!3d43.728471!4d5.8120259!16s%2Fg%2F11n_zpsbm8"> <img src="./images/maps.png" alt=""  width="40"></a>
</div>
</footer> -->

<footer>

<div class="reseaux"> 
<p> <img src="./images/tel.png" alt="" width="40px"> <a href="tel:0618728007"> Une question ? contactez nous !!</a> </p>
<p> <img src="./images/fb.png" alt="" width="40px"> <a href="https://www.facebook.com/www.pizzatisoley.fr/"> Ti'soley</a> </p>
<p> <img src="./images/maps.png" alt="" width="40px"> <a href="https://www.google.com/maps/place/Pizza+Ti%E2%80%99Soley/@43.7284749,5.8098372,17z/data=!3m1!4b1!4m5!3m4!1s0x12cbd3b8286f69ad:0xca99ef3a40375879!8m2!3d43.728471!4d5.8120259?hl=fr"> Où nous trouver </a></p>
</div>
</footer>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </script>
    
    <script src="script.js"></script>
</body>
</html>