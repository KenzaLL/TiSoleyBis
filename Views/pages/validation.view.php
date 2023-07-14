<div class="page">

    <div class="message">
        <h1> Commande validée ! </h1>
        <p>Votre commande a été traitée avec succès.</p>
        <p> Pensez a l'honorer ! </p>
        <p>Merci pour votre achat !</p>

        <a class="retour-button" href="accueil">Retourner a l'accueil</a>

    </div>

</div>



<?php

$content = ob_get_clean();

$title = "Validation de votre commande";
require 'base.view.php';
?>