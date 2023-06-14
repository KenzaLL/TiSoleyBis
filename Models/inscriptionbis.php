<?php

session_start();
// Configuration pour afficher les erreurs PHP

// Mise en mémoire tampon de la sortie
ob_start();
// Information de connexion à la base de données
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "tisoley";

// Création de la connexion PDO

try {
    // Création de la connexion PDO
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    
    // Configuration des options de PDO
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(PDOException $e) {
    // Affichage d'un message d'erreur en cas de problème de connexion
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}

// Vérification de la soumission du formulaire
if (isset($_POST['submit'])) {
    $lastname = $_POST['lastname']; // Récupération du nom de famille depuis le formulaire
    $firstname = $_POST['firstname']; // Récupération du prénom depuis le formulaire
    $email = $_POST['email']; // Récupération de l'e-mail depuis le formulaire
    $numberphone = $_POST['numberphone']; // Récupération du numéro de téléphone depuis le formulaire
    $password = $_POST['password']; // Récupération du mot de passe depuis le formulaire
    
    // Hashage du mot de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    // Requête d'insertion
    $query = "INSERT INTO users (lastname, firstname, email, numberphone, password) VALUES (:lastname, :firstname, :email, :numberphone, :password)";
    $statement = $connexion->prepare($query);

 // Liaison des valeurs
 $statement->bindParam(':lastname', $lastname); // Liaison du nom de famille
 $statement->bindParam(':firstname', $firstname); // Liaison du prénom
 $statement->bindParam(':email', $email); // Liaison de l'e-mail
 $statement->bindParam(':numberphone', $numberphone); // Liaison du numéro de téléphone
 $statement->bindParam(':password', $hashedPassword); // Liaison du mot de passe haché
 
// Exécution de la requête
if ($statement->execute()) {
 $email = $_POST['email']; // Récupérer l'e-mail de l'utilisateur inséré
 echo "Inscription réussie."; // Affichage d'un message de réussite
 $_SESSION['email'] = $email; // Stocker l'e-mail de l'utilisateur dans la session
 header('Refresh:0.01; http://localhost/TiSoleyBis/'); // Redirection vers la page de connexion
} else {
 echo "Erreur lors de l'inscription."; // Affichage d'un message d'erreur
}
}

// Fin de la mise en mémoire tampon et assignation du contenu
$content = ob_get_clean();

$title = "Inscription";

?>