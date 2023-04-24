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
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>
<body>

<form method="post" action="ajout.php">

<label for=""> Photo </label>
<input type="file" name="picture" required>

<label for=""> Titre </label>
<input type="text" name="title" required> 

<label for=""> Base </label>
<input type="text" name="base" required>

<label for=""> Description </label>
<textarea name="description" required> </textarea>

<label for=""> Prix </label>
<input type="number" name="price" required>

<input type="submit" value="Ajouter une pizza" name="submit"> 


</form>
    
</body>
</html>
