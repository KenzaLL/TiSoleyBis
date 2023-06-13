<?php

ob_start();

?>



        <div class="background">
            <h1 class="titre nav-a titre-carte"> Notre carte </h1>
        </div>

        <h2 class="mt-4 text-white phrase">
        <hr class="text-white"> 
        Tous nos produits sont locaux , profitez en ! </h2>
        <p class="text-white m-4"> Les photos ne sont pas représentatif de nos pizzas, ce n'est qu'une illustration. </p>
        <hr class="text-white"> 

        <div class="position-btn ">
            <a class="btn btn-dark btn-commande"href="./commande.php"> Pizzas </a>
            <a class="btn btn-dark btn-commande" href="./commande-lasagnes.php"> Nos préparations maisons </a>
            <a class="btn btn-dark btn-commande"href="./commande-desserts.php"> Desserts </a>       
            <a class="btn btn-dark btn-commande"href="./commande-boissons.php"> Boissons </a>
        </div>

        <section class="d-flex flex-wrap justify-content-evenly mt-4">

            <?php 
            require_once "commande-lasagnesbis.php";
            ?>
        </section>

        <?php 

$content = ob_get_clean();

$title = "Commande des préparations maisons";

require './Views/base.php';

?>