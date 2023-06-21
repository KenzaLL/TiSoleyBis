
<?php


?>



    <h1 class="titre text-white pt-3 mt-3"> Votre panier </h1>
        <section class="panier-entier">


        <body>
      <div class="panier">
        <table class="table">
          <thead>
            <tr>
              <th>Produit</th>
              <th>Prix</th>
              <th>Quantité</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Produit 1</td>
              <td>29,99 $</td>
              <td>1</td>
              <td>29,99 $</td>
            </tr>
            <tr>
              <td>Produit 2</td>
              <td>19,99 $</td>
              <td>2</td>
              <td>39,98 $</td>
            </tr>
            <!-- Ajoutez ici d'autres lignes pour les produits supplémentaires -->
          </tbody>
        </table>
        <div class="total">
          <h4 class="total">Total: 69,97 $</h4>
          <button class="btn btn-warning"> Valider la commande </button>
        </div>
      </div>


<?php 

$content = ob_get_clean();

$title = "Panier";

require './Views/base.php';

?>