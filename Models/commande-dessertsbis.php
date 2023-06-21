<?php 

require_once 'connexionBDD.php';

$sql = "select * from desserts";
$results = $connexion->query($sql);

if($results->rowCount()>0) { 
    while($row=$results->fetch()) {
        echo '<article class="card mt-4 bg-black" style="width:280px ; height:100%">
        <img src="./public/images/'. $row["picture"] .'" class="card-img-top" alt="$row["title"]">
        <div class="card-body pt-4">
          <h5 class="card-title text-white">'. $row["title"] .' </h5>
          <p class="card-text text-white"> Prix : '. $row["price"] .'€   </p>
          <form method="post" action="ajoutPanier.php">
          <input type="hidden" name="id_produitdesserts" value="'. $row["id"] .'">
          <input class="submit text-white" id="btn-commande" name="submitdesserts" type="submit" value="Ajouter au panier">;
          </form>

        </div>
      </article>';
    }
}

?>