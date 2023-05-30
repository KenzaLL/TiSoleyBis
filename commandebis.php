<?php 

// Information de connexion à la base de données
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "TiSoley";

// Création de la connexion
$connexion = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$connexion) {
  die("La connexion a échoué : " . mysqli_connect_error());
}


$sql = "select * from pizza";
$results = $connexion->query($sql);

if($results->num_rows>0) { 
    while($row=$results->fetch_assoc()) {
        echo '<article class="card m-4 bg-black '. $row["base"] .' " style="width:250px ; height:100%">
        <img src="./images/'. $row["picture"] .'" class="card-img-top" alt="...">
        <div class="card-body pt-5">
          <h5 class="card-title text-white">'. $row["title"] .' </h5>
          <p class="card-text text-white"> base '. $row["base"] .'  </p>
          <p class="card-text text-white" style="height:70px"> ingrédients : '. $row["description"] .' </p>
          <p class="card-text text-white"> Prix : '. $row["price"] .'€   </p>
          <form method="post" action="ajoutPanier.php">
          <input type="hidden" name="id_produitpizza" value="'. $row["id"] .'">
          <input class="submit text-white" name="submitpizza" id="btn-commande" type="submit" value="Ajouter au panier">;
          </form>
          </div>
          </article>';
        }
      }
      
      
      
      ?>


<!-- <input type="hidden" name="name_produit" value="pizza"> -->