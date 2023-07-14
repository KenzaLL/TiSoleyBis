

<div class="accueil">
    <h1 class="titre">Bienvenue chez Ti'Soley !</h1>
        <div class="block m-5">
        <a href="commande" class="custom-btn btn-5 text-white" > Commandez maintenant !</a>
        </div>
</div>

    <!-- background avec 4 icones -->

    <div class="container1">
        <div class="container2">
            <div class="icon">
            <img src="./public/images/pizza.svg" alt="Icône 2">
            <span>Pizzas artisanales </span>
            </div>
            <div class="icon">
            <img src="./public/images/france.png" alt="Icône 4">
        <span> Circuit court</span>
        </div>
        <div class="icon">
        <img src="./public/images/tomate.svg" alt="Icône 3">
        <span>Produits locaux & de saison</span>
        </div>
        <div class="icon">
        <img src="./public/images/love.svg" alt="Icône 1">
        <span>Confectionnées avec amour</span>
        </div>
    </div>
      </div>

  <!-- catégorie de commande -->

  <div class="d-flex justify-content-between p-4"> 
    <h2 class="text-white p-2 m-2"> Qu'est-ce qu'on mange ? </h2>
        <a class="carte"href="commande"> Voir la carte complète</a>
  </div>

<div class="artpp">
    <section class="set2">
        <div class="image-container2 art">
            <div class="image-wrapper">
                <img src="./public/images/pizza.jpg" alt="Votre image" width="400px" >
               <a href="commande"  class="center-button"> PIZZAS </a>
            </div>
        </div>
        <div class="image-container2 art2">
            <div class="image-wrapper">
                <img src="./public/images/lasagnes.jpg" alt="Votre image" width="400px" >
                <a href="preparations" class="center-button"> PRÉPARATIONS MAISONS</a>
            </div>
        </div>
    </section> 
    <section class="set">
        <div class="image-container2 art2">
            <div class="image-wrapper">
                <img src="./public/images/canette.jpg" alt="Votre image" width="400px" >
                <a href="boissons" class="center-button"> BOISSONS </a>
            </div>
        </div>
        <div class="image-container2 art">
            <div class="image-wrapper">
                <img src="./public/images/mousse.jpeg" alt="Votre image" width="400px" >
                <a href="desserts" class="center-button"> DESSERTS</a>
            </div>
        </div>
    </section> 
</div>



<?php 

$content = ob_get_clean();

$title = "Accueil";
require 'base.view.php';

?>