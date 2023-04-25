<?php 

// Information de connexion à la base de données
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "TiSoley";

// Création de la connexion
$connexion = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$connexion) {
  die("La connexion a échoué : " . mysqli_connect_error());
}
echo "La connexion à la base de données est établie avec succès";

// chercher et stocker 
if (isset($_POST['submit'])) { 
    
    $picture = $_POST['picture'];
    $title = $_POST['title'];
    $base = $_POST["base"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    
// l'envoi vers la bdd

$sql = "INSERT INTO pizza ( picture , title , base , description , price ) VALUES ('$picture', '$title', '$base', '$description', '$price')";

if (mysqli_query($connexion, $sql)) {
    echo "Inscription réussie.";
} else {
    echo "Erreur: " . $sql . mysqli_error($connexion);
}


// Fermeture de la connexion à la base de données (important a retenir !!!!)
mysqli_close($connexion);
}

?>


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
    <a class="navbar-brand nav-a" href=""> <img src="./images/logo.png" alt=""> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active nav-a" aria-current="page" href="#"> Accueil </a>
        <a class="nav-link nav-a" href="connexion.php">Connexion</a>
        
      </div>
    </div>
  </div>
</nav>

</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">

</script>

<h2 class="titre"> Ajout d'une pizza </h2>


<form method="post" action="ajout.php">

<div class="input"> 
<label for=""> Photo   </label>
<input type="file" name="picture" required>
</div>

<div class="input"> 
<label for=""> Titre </label>
<input type="text" name="title" required> 
</div>
<div class="input"> 
<label for=""> Base </label>
<input type="text" name="base" required>
</div>
<div class="input"> 
<label for=""> Description </label>
<textarea name="description" required> </textarea>
</div>
<div class="input">
<label for=""> Prix </label>
<input type="number" name="price" required>
<input type="submit" value="Validation de la pizza" name="submit" class="ajout-btn"> 
</div>


</form>
    





</body>
</html>
