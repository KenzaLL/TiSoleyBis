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


$sql = "select * from boissons";
$results = $connexion->query($sql);

if($results->num_rows>0) { 
    while($row=$results->fetch_assoc()) {
        echo '<article class="card mt-4 bg-black mb-5" style="width:250px ; height:100%">
        <img src="./images/'. $row["picture"] .'" class="card-img-top" alt="...">
        <div class="card-body pt-4">
          <h5 class="card-title text-white">'. $row["title"] .' </h5>
          <p class="card-text text-white" style="height:70px"> '. $row["description"] .' </p>
          <p class="card-text text-white"> Prix : '. $row["price"] .'€   </p>
          <a href="#" class="btn btn-commande btn-panier text-white"> Ajouter au panier</a>
        </div>
      </article>';
    }
}



?>
