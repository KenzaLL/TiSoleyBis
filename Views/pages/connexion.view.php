<?php

// Informations de connexion à la base de données
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "tisoley";

// Connexion à la base de données
try {
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("La connexion a échoué : " . $e->getMessage());
}

// Vérification des informations de connexion
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $connexion->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!empty($user) && password_verify($password, $user['password'])) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['firstname'] = $user['firstname'];
        header('Location: http://localhost/TiSoleyBis/'); // Redirection vers la page de tableau de bord après la connexion réussie
        exit();
    } else {
        $message = "Adresse e-mail ou mot de passe incorrect.";
    }
}
?>

<div class="body p-5">
        <div class="border m-5 p-4 colore"> 
    <h2 class="titre text-white" > Connectez vous </h2>
    <form method="post" action="/TiSoleyBis/connexion">
        <div class="mb-4 my-5 text-white">
            <label for="exampleInputEmail1" class="form-label"> Adresse email </label>
            <input type="email" placeholder="Entrez votre email" class="form-control" id="exampleInputEmail" name="email" required>
            </div>
        <div class="mb-3 text-white">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" placeholder="Entrez votre mot de passe" class="form-control" id="exampleInputPassword1" name="password" required>
        </div>
            <button type="submit" class="btn text-white mt-2 btn-connexion" name="submit"> Je me connecte </button>
    </form>
            <button type="submit" class="btn text-white mt-3  btn-connexion" name="submit"> 
            <a href="inscription" class="btn-compte">  Vous n'avez pas de compte ? cliquez ici ! </a> 
            </button>
        </div>
</div>
</div>





<?php 

$content = ob_get_clean();

$title = "Connexion";

require './Views/base.php';


?>


