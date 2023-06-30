






<div class="page"> 

    <div class="message">
        <h1> Commande validée ! </h1>
        <p>Votre commande a été traitée avec succès.</p>
        <p> Pensez a l'honorer ! </p>
        <p>Merci pour votre achat !</p>
        
        <button class="retour-button"> Retourner a l'accueil </button>
    </div>

    </div>
















<?php 

$content = ob_get_clean();

$title = "Validation de votre commande";
require 'base.view.php';
?>