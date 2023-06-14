
<?php

ob_start();

?>



    <h1 class="titre text-white pt-3 mt-3"> Votre panier </h1>
        <section class="panier-entier">
    
<?php
require "./Models/panierbis.php";
?>



<?php 

$content = ob_get_clean();

$title = "Panier";

require './Views/base.php';

?>