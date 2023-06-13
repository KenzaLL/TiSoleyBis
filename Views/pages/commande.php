
<?php

ob_start();

?>


        <div class="background">
            <h1 class="titre nav-a titre-carte"> Notre carte </h1>
        </div>

        <h2 class="m-4 text-white phrase">
            <hr class="text-white"> 
            Tous nos produits sont locaux , profitez en ! </h2>
            <p class="text-white m-4"> Les photos ne sont pas représentatif de nos pizzas, ce n'est qu'une illustration. </p>
            <hr class="text-white"> 

        <div class="position-btn m-5">
            <input list="search" id="enter" class="btn-commande text-white" placeholder="Recherchez une pizza">
            <datalist id="search"> </datalist>
                <select id="base" class="btn-commande bg-black text-white">
                    <option value="pizzaAll"> Toutes les pizzas </option>
                    <option value="cream"> Base crème </option>
                    <option value="tomato"> Base tomate </option>
                </select>
            <a class="btn btn-dark btn-commande"href="./commande.php"> Pizzas </a>
            <a class="btn btn-dark btn-commande" href="./commande-lasagnes.php"> Nos préparations maisons </a>
            <a class="btn btn-dark btn-commande"href="./commande-desserts.php"> Desserts </a>       
            <a class="btn btn-dark btn-commande"href="./commande-boissons.php"> Boissons </a>
        </div>

        <section class="d-flex flex-wrap justify-content-evenly m-3">
        <?php 
        require_once "commandebis.php";
        ?>
        </section>


        <?php 

$content = ob_get_clean();

$title = "Commande en ligne";

require './Views/base.php';

?>