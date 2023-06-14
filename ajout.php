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


<?php 

$content = ob_get_clean();

$title = "Connexion";

require './Views/base.php';


?>