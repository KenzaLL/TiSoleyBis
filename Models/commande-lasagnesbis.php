<?php 

require_once 'connexionBDD.php';

$sql = "select * from preparation maisons";
$results = $connexion->query($sql);

if($results->rowCount()>0) { 
    while($row=$results->fetch()) {
echo '<article class="card row mt-4 bg-black mb-5" style="width:250px ; height:100%">
        <img src="./public/images/'. $row["picture"] .'" class="card-img-top" alt="...">
            <div class="card-body col pt-4">
            <h5 class="card-title text-white">'. $row["title"] .' </h5>
            <p class="card-text text-white" style="height:70px"> '. $row["description"] .' </p>
            <p class="card-text text-white"> Prix : '. $row["price"] .'€   </p>
            <form method="post" action="ajoutPanier.php">
          <input type="hidden" name="id_produitlasagnes" value="'. $row["id"] .'">
          <input class="submit text-white" name="submitlasagnes" id="btn-commande" type="submit" value="Ajouter au panier">;
          </form>
            </div>
        </article>';
    }
}

?>

