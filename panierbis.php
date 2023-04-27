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

// supprimer les achats paniers
if(isset($_SESSION["panier"])) {
    if (isset($_POST["submit"]) && $_POST["submit"] == "supprimer" && isset($_POST["id_produit"])) {
        $id_produit = $_POST["id_produit"];
        if (($key = array_search($id_produit, $_SESSION["panier"])) !== false) {
            unset($_SESSION["panier"][$key]);
        
        }
    }
    
    $panier=$_SESSION["panier"];
    $produits_panier=array();
    $total_panier=0;
    
    foreach($panier as $id_produit) {
        $sql = "SELECT * FROM pizza WHERE id = $id_produit";
        $result = mysqli_query($connexion,$sql);
    if(mysqli_num_rows($result) > 0) {
        $row=mysqli_fetch_assoc($result);
        $produits_panier[]=$row;
        $total_panier+=$row["price"];
    }
}
if(count($produits_panier) > 0) {
    echo '<article class="donnee-panier text-white">
        <p class="img-article"> <img src="" alt=""></p>
        <p class="taille-panier"> Titre </p>
        <p class="taille-panier"> Quantité </p>
        <div class="taille-panier">
        <img class="poubelle"src="./images/poubelle.png" alt="poubelle"> </button>
        </div>
        <p class="taille-panier"> Prix </p>
    </article>';
foreach($produits_panier as $produit) {
    echo '<article class="donnee-panier text-white">
    <img class="img-article" src="./images/'. $produit["picture"] .'" alt="">
    <p class="taille-panier"> '. $produit["title"] .' </p>
        <select name="niv" class="select">
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
    </p>
    <div class="taille-panier text-white">
        <form method="post" action="panier.php">
            <input type="hidden" name="id_produit" value="'.$produit["id"] .'">

            <input class="text-white btn-commande" type="submit" name="submit" value="supprimer">
        </form>
    </div>
    <p class="taille-panier">'. $produit["price"] .'  </p>
</article>
';
}
} 
echo '  <div class="d-flex text-center"> 
            <h3 class="text-white w-50"> Total </h3>
            <h3 class="text-white w-50">'. $total_panier.'</h3>
        </div>
        <div class="position-btn"> 
            <p class="text-white w-50"> <label for="appt-time">Veuillez choisir une heure de rendez-vous :</label>
            <input id="appt-time" type="time" name="appt-time" value="18:30"> </p>
            <input class="text-white btn-commande" type="submit" name="submit" value="valider la commande">
        </div>
        
        ';

        

    } else{
        echo '<h3 class="text-white text-center">  Votre panier est vide </h3>';
    }

?>





