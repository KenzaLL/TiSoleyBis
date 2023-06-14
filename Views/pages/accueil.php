<?php

ob_start(); 

?>

    <h1 class="titre"> Bienvenue chez Ti'Soley ! </h1>
    <div class="cta">
  <h2>Commandez maintenant!</h2>
  <p>Découvrez nos délicieuses pizzas faites avec amour.</p>
  <a href="commande.html" class="btn">Commander</a>
</div>
        
        <section class="band lol text-white">
    <div class="flex space">
        <article class="coller">
            <img class="bandImage" src="./images/pizza.png" alt="">
            <div class="flex-lg-column">
                <p>Pizzas artisanales </p>
            </div>
        </article>
        <article class=" coller">
            <img class="bandImage" src="./images/poignee.png" alt="">
            <div>
                <p> Produits locaux & de saison</p>
            </div>
        </article> 
    </div>
    <div class="flex space">
        <article class=" coller">
            <img class="bandImage" src="./images/france.png" alt="">
            <div>
                <p> Circuit court</p>
            </div>
        </article>
        <article class=" coller">
            <img class="bandImage" src="./images/coeur.png" alt="">
            <div>
                <p> Confectionnées avec amour</p>
            </div>
        </article> 
    </div>
</section>

    <hr class="text-white">
    <div class="d-flex justify-content-between "> 

        <h2 class="text-white p-2 m-2"> Qu'est-ce qu'on mange ? </h2>
       <a class="carte"href=""> Voir la carte complète</a>

    </div>

    


<div class="artpp">
    <section class="set2">
        <div class="image-container art">
            <div class="image-wrapper">
                <img src="./public/images/chevremiel.jpg" alt="Votre image" width="400px" >
                <button class="center-button"> PIZZAS </button>
            </div>
        </div>
        <div class="image-container art2">
            <div class="image-wrapper">
                <img src="./public/images/chevremiel.jpg" alt="Votre image" width="400px" >
                <button class="center-button"> PRÉPARATIONS MAISONS </button>
            </div>
        </div>
    </section> 
    <section class="set">
        <div class="image-container art2">
            <div class="image-wrapper">
                <img src="./public/images/chevremiel.jpg" alt="Votre image" width="400px" >
                <button class="center-button"> BOISSONS </button>
            </div>
        </div>
        <div class="image-container art">
            <div class="image-wrapper">
                <img src="./public/images/chevremiel.jpg" alt="Votre image" width="400px" >
                <button class="center-button"> DESSERTS </button>
            </div>
        </div>
    </section> 
</div>


<?php 

$content = ob_get_clean();

$title = "Accueil";

require './Views/base.php';

?>