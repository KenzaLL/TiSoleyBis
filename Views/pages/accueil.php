
  <div class="bg-acc">
    <h1 class="titre">Bienvenue chez Ti'Soley !</h1>
  </div>
  <div class="block">
    <a href="commande.html" class="cta">
      Commandez maintenant
      <span>Découvrez nos délicieuses pizzas faites avec amour.</span>
    </a>
  </div>

    <!-- background avec 4 icones -->



    <div class="container1">
<div class="container">
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
        <a class="carte"href=""> Voir la carte complète</a>

  </div>

<div class="artpp">
    <section class="set2">
        <div class="image-container2 art">
            <div class="image-wrapper">
                <img src="./public/images/pizza.jpg" alt="Votre image" width="400px" >
                <button class="center-button animated-button"> PIZZAS </button>
            </div>
        </div>
        <div class="image-container2 art2">
            <div class="image-wrapper">
                <img src="./public/images/lasagnes.jpg" alt="Votre image" width="400px" >
                <button class="center-button"> PRÉPARATIONS MAISONS </button>
            </div>
        </div>
    </section> 
    <section class="set">
        <div class="image-container2 art2">
            <div class="image-wrapper">
                <img src="./public/images/canette.jpg" alt="Votre image" width="400px" >
                <button class="center-button"> BOISSONS </button>
            </div>
        </div>
        <div class="image-container2 art">
            <div class="image-wrapper">
                <img src="./public/images/mousse.jpeg" alt="Votre image" width="400px" >
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