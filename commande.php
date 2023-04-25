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
        echo '<article class="card mt-4 '. $row["base"] .' " style="width:250px ; height:100%">
        <img src="./images/'. $row["picture"] .'" class="card-img-top" alt="...">
        <div class="card-body pt-4">
          <h5 class="card-title">'. $row["title"] .' </h5>
          <p class="card-text"> base '. $row["base"] .'  </p>
          <p class="card-text" style="height:70px"> ingrédients : '. $row["description"] .' </p>
          <a href="#" class="btn btn-warning"> Ajouter au panier</a>
        </div>
      </article>';
    }
}

?>

