<div class="page1"> 

    <div class="message-v">
        <h1> Inscription réussie ! </h1>
        <button class="btn-retour"> Retourner a l'accueil </button>
    </div>

</div>
<?php 

$content = ob_get_clean();

$title = "Validation de votre inscription";
require 'base.view.php';
?>