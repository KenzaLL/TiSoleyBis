
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


// chercher et stocker 
if (isset($_POST['submit'])) { 
    
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST["email"];
    $numberphone = $_POST["numberphone"];
    $password = $_POST["password"];
    
// l'envoi vers la bdd

$sql = "INSERT INTO users ( lastname , firstname , email , numberphone , password ) VALUES ('$lastname', '$firstname', '$email', '$numberphone', '$password')";

if (mysqli_query($connexion, $sql)) {
    echo "Inscription réussie.";
    header('Refresh:0.01; http://localhost/TiSoleyBis/connexion.php');
} else {
    echo "Erreur: " . $sql . mysqli_error($connexion);
}

// Fermeture de la connexion à la base de données (important a retenir !!!!)
    mysqli_close($connexion);
}

?>