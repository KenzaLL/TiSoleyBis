<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">

    <title>Document</title>
</head>
<body>
<header> 
<nav class="navbar navbar-expand-lg bg-black">
  <div class="container-fluid">
    <a class="navbar-brand nav-a" href=""> <img src="" alt=""> Logo </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        
    <a class="nav-link active nav-a" href="#"> 
          
        
 
      <label for=""></label>
    <select name="" id="">
    <option value=""> Qui sommes nous ?</option>
    <option value=""> Notre histoire </option>
    <option value=""> Nos engagements </option>
    </select>
  </a>

        <a class="nav-link active nav-a" href="#"> Notre carte </a>
        <a class="nav-link active nav-a" href="#">Commande en ligne</a>
        <a class="nav-link nav-a" href="#">Contact</a>
        <?php
      if(isset($_SESSION['connecter']))
     {
       echo '<a class="nav-link nav-a deco" href="deconnexion.php">Déconnexion</a> <a class="nav-link nav-a deco" href="">'.$_SESSION["connecter"].'</a> ';
      } else { echo '<a class="nav-link nav-a" href="connexion.php">Connexion</a>';
      } 
        ?> 
        
  
      </div>
    </div>
  </div>
</nav>




<main>
<input list="search" id="enter" placeholder="Recherchez une pizza" >
<datalist id="search">

    </datalist>

    <select id="base"> 
      <option value="pizzaAll"> Toutes les pizzas </option>
      <option value="cream"> Base crème </option>
      <option value="tomato"> Base tomate </option>
    </select>

  <section class="d-flex flex-wrap justify-content-evenly mt-4">

<?php 
require_once("commande.php")
?>
  </section>
</main>



</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

<script src="script.js"></script>
</body>


</html>