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
                    <a class="dropdown-item text-white" href="./terredesssences.php"> Terre d'essences</a>
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
            </div>
        </div>
    </nav>
</header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

        <h2 class="titre"> Ajout d'une pizza </h2>
            <form method="post" action="ajout.php">
                <div class="input"> 
                    <label for=""> Photo </label>
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
