<?php 


// Informations de connexion à la base de données
$servername = "localhost"; // Nom du serveur de la base de données
$username = "admin"; // Nom d'utilisateur de la base de données
$password = "admin"; // Mot de passe de la base de données
$dbname = "TiSoley"; // Nom de la base de données

// Création de la connexion PDO
try {
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); // Crée une instance de la classe PDO pour se connecter à la base de données
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configure le mode de gestion des erreurs pour afficher les exceptions
} catch (PDOException $e) {
    die("La connexion a échoué : " . $e->getMessage()); // Affiche un message d'erreur si la connexion à la base de données échoue
    echo "La connexion à la base de données est établie avec succès";
}

// Vérification de la connexion
if (!$connexion) {
    die("La connexion a échoué"); // Arrête l'exécution du script si la connexion à la base de données a échoué
}


// Requête préparée pour récupérer les données utilisateur
if (isset($_POST['submit'])) { // Vérifie si le formulaire a été soumis
    $email = $_POST["email"]; // Récupère la valeur du champ email
    $password = $_POST["password"]; // Récupère la valeur du champ password

    $sql = "SELECT * FROM users WHERE email = :email"; // Requête SQL pour récupérer les données utilisateur
    $stmt = $connexion->prepare($sql); // Prépare la requête SQL pour exécution
    // $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':email', $email); // Lie la valeur du champ email au paramètre :email de la requête
    $stmt->execute(); // Exécute la requête préparée

    $user = $stmt->fetch(PDO::FETCH_ASSOC); // Récupère la première ligne de résultat de la requête sous forme de tableau associatif

    if ($user && password_verify($password, $user['password'])) { // Vérifie si des données utilisateur ont été trouvées et vérifer si les condtions sont bonnes
        session_start();
        $_SESSION['connecter'] = $user['id']; // Stocke la valeur du champ email dans la variable de session 'connecter'
        // $_SESSION['name'] = $user['firstname']; 
        // $_SESSION['id'] = $user['id']; // Stocke la valeur du champ id dans la variable de session 'id'
        echo 'Connexion réussie' . '<br>'; // Affiche un message de succès
        // Redirection
         header('Refresh:0; http://localhost/TiSoleyBis/'); // Redirige l'utilisateur vers une autre page
        exit(); // Arrête l'exécution du script
    } else {
        echo '<p class="text-danger text-center">  La connexion a échoué  </p>' . '<br>'; // Affiche un message d'erreur si les données de connexion sont incorrectes
    }
}

