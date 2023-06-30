<?php

ob_start();



// requete http 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $product = $_POST['product'];
  $total = $_POST['total'];

  echo $total;
  echo "<h1> $product </h1>";

}

?>


<header class="d-flex justify-content-between container-admin">
    <h1 class="titre-admin">Pizzeria Dashboard</h1>
    <button class="close-btn">Clôturer la commande</button>
  </header>

  <main class="block-admin">
    <section class="section orders">
      <h2 class="text-white commande">Commandes en cours</h2>
      <ul class="order-list">
        <li class="order">
          <div class="order-details">
            <span>Commande 1</span>
            <span class="order-status">En cours</span>
          </div>
          <p>Détails de la commande 1</p>
         
        </li>
        <li class="order">
          <div class="order-details">
            <span>Commande 2</span>
            <span class="order-status">En cours</span>
          </div>
          <p>Détails de la commande 2</p>
    
        </li>
        <li class="order">
          <div class="order-details">
            <span>Commande 3</span>
            <span class="order-status">En cours</span>
          </div>
          <p>Détails de la commande 3</p>
         
        </li>
      </ul>
    </section>

    <section class="section order-history">
      <h2 class="text-white commande">Historique des commandes</h2>
      <ul class="order-list">
        <li class="order">
          <div class="order-details">
            <span>Commande 4</span>
            <span class="order-status">Terminée</span>
          </div>
          <p>Détails de la commande 4</p>
        </li>
        <li class="order">
          <div class="order-details">
            <span>Commande 5</span>
            <span class="order-status">Terminée</span>
          </div>
          <p>Détails de la commande 5</p>
        </li>
        <li class="order">
          <div class="order-details">
            <span>Commande 6</span>
            <span class="order-status">Terminée</span>
          </div>
          <p>Détails de la commande 6</p>
        </li>
      </ul>
    </section>
  </main>





<?php 

$content = ob_get_clean();

$title = "Page d'administrateur";

require './Views/pages/base.view.php';

?>