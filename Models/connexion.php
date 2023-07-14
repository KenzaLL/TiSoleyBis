<?php

require 'connexionBDD.php';

// Vérification des informations de connexion
//if (isset($_POST['email']) && isset($_POST['password'])) {

    if(!empty($_POST['email']) && !empty($_POST['password'])) {
        $secret ="6Ld1BgQnAAAAACd-oLkJve11mN8hoafSYREc0Ra1";
        $response =htmlspecialchars($_POST['g-recaptcha-response']);
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $request = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";

        $get = file_get_contents($request);
        $decode = json_decode($get, true);

        if ($decode['success'])


    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $connexion->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!empty($user) && password_verify($password, $user['password'])) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['is_admin'] = $user['is_admin'];
        if ($user['is_admin']) {
            header('Location: http://localhost/TiSoleyBis/admin'); // Redirection vers la page de tableau de bord après la connexion réussie
            exit();
        }
        header('Location: http://localhost/TiSoleyBis/'); // Redirection vers la page de tableau de bord après la connexion réussie
        exit();
    } else {
        $message = "Adresse e-mail ou mot de passe incorrect.";
    }
}
?>
