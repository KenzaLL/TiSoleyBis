<?php

ob_start();



?>

<h1>Pizzeria Dashboard</h1>
  </header>

  <main>
    <section class="orders">
      <h2>Commandes en cours</h2>
      <ul class="order-list">
        <li class="order">Commande 1</li>
        <li class="order">Commande 2</li>
        <li class="order">Commande 3</li>
      </ul>
    </section>

    <section class="order-history">
      <h2>Historique des commandes</h2>
      <ul class="order-list">
        <li class="order">Commande 4</li>
        <li class="order">Commande 5</li>
        <li class="order">Commande 6</li>
      </ul>
    </section>
  </main>
</body>
</html>




<!-- 
    <div class="position-btn"> 
        <button type="button" class="btn btn-dark btn-commande mt-3 my-3"> Commande des clients </button>
        <button type="button" class="btn btn-dark btn-commande mt-3 my-3"> Historique des commandes </button>
        <button type="button" class="btn btn-dark bg-danger btn-commande mt-3 my-3"> Cloturer la commande en ligne </button>
    </div>

    
    <section class="panier-entier">

<article class="donnee-panier text-white">
    <p class="img-article"> <img src="" alt=""></p>
    <p class="taille-panier"> Titre </p>
    <p class="taille-panier"> Quantité </p>
    <div class="taille-panier">
    <img class="poubelle"src="./images/poubelle.png" alt="poubelle"> </button>
    </div>
    <p class="taille-panier"> Prix </p>
</article>



<article class="donnee-panier text-white">
    <img class="img-article" src="./images/coca.jpg" alt="">
    <p class="taille-panier"> cooca </p>
    <p> 1</p>
    <div class="taille-panier text-white">
        <button class="text-white btn-commande"> Validation commande </button>
    </div>
    <p class="taille-panier"> 1.50€ </p>
</article>


<article class="donnee-panier text-white"> 
    <img class="img-article" src="./images/coca.jpg" alt="">
    <p class="taille-panier"> cooca </p>
    <p> 1</p>
    <div class="taille-panier text-white">
        <button class="text-white btn-commande"> Validation commande </button>
    </div>
    <p class="taille-panier"> 1.50€ </p>
</article>



</section>

<div id="position-total-co"> 
<button type="button" class="btn btn-dark btn-commande total-co"> Total des commandes : 2 </button>
</div> -->

<?php 

$content = ob_get_clean();

$title = "Page d'administrateur";

require './Views/base.php';

?>