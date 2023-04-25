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
          
        
 
      <label for="pet-select"></label>
    <select name="pets" id="pet-select">
    <option value=""> Qui sommes nous ?</option>
    <option value="dog"> Notre histoire </option>
    <option value="cat"> Nos engagements </option>
    </select>
  </a>

        <a class="nav-link active nav-a" href="#"> Notre carte </a>
        <a class="nav-link active nav-a" href="#">Commande en ligne</a>
        <a class="nav-link nav-a" href="#">Contact</a>
        <a class="nav-link nav-a" href="connexion.php">Connexion</a>
      

      </div>
    </div>
  </div>
</nav>
<h1> <?php echo $_SESSION['connecter']; ?> </h1>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">

</script>
</body>


</html>