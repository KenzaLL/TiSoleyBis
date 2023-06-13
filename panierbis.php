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



if(isset($_SESSION["panierpizza"]) || isset($_SESSION["panierboissons"]) || isset($_SESSION["panierlasagnes"]) || isset($_SESSION["panierdesserts"])) {
    $total_panier=0;
    // affichage du code //
    echo '<div class="card bg-card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col"><h4 class="text-white"><b> Récapitulatif de votre commande</b></h4></div>
                </div>
            </div>    
            <div class="row border-top border-bottom">
                <div class="row align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/1GrakTl.jpg"></div>
                    <div class="col text-white">
                        <div class="row">Shirt</div>
                    </div>
                    <div class="col text-white">&euro; 44.00 <span class="close">&#10005;</span></div>
                </div>
            </div>
            <div class="row">
                <div class="row align-items-center">
                    <div class="col-2"></div>
                </div>
            </div>
            <div class="row border-top border-bottom">
                <div class="row align-items-center">
                    <div class="col">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 summary">
            <div><h5 class="text-white"><b>Summary</b></h5></div>
            <div class="row">
            </div>
            
            <div class="row">
                <div class="col text-white my-3">TOTAL</div>
                <div class="col text-white my-3">&euro; 137.00</div>
            </div>
            <div class="flex__child no-stepper my-3 ">
                <div>
                    <label for="no_step" class="title-creneau" >
                        Veuillez choisir une heure entre 18h30 et 20h30
                    </label>
                    <input type="time" id="heure">
                </div>
            <button class="btn m-0"> VALIDER LA COMMANDE</button>
        </div>
    </div> 
</div>';

// supprimer les achats paniers
    if(isset($_SESSION["panierpizza"])) {
    if (isset($_POST["submit"]) && $_POST["submit"] == "supprimer" && isset($_POST["id_produitpizza"])) {
            $_SESSION["number"] -=1;
            $id_produitpizza = $_POST["id_produitpizza"];
            if (($key = array_search($id_produitpizza, $_SESSION["panierpizza"])) !== false) {
                unset($_SESSION["panierpizza"][$key]);
    
            } 
            header("location: panier.php");
        }
    
        $panierpizza=$_SESSION["panierpizza"];
        $produits_panier=array();
    
        foreach($panierpizza as $id_produitpizza) {
            $sql = "SELECT * FROM pizza WHERE id = $id_produitpizza";
            $result = mysqli_query($connexion,$sql);
        if(mysqli_num_rows($result) > 0) {
            $row=mysqli_fetch_assoc($result);
            $produits_panier[]=$row;
            $total_panier+=$row["price"];
        }
    }
    if(count($produits_panier) > 0) {
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
                <input type="hidden" name="id_produitpizza" value="'.$produit["id"] .'">
                <input class="text-white btn-commande" type="submit" name="submit" value="supprimer">
            </form>
        </div>
        <p class="taille-panier">'. $produit["price"] .'  </p>
    </article>
    ';
    }
    } 
    }
    
    // boissons //
    

    // supprimer les achats paniers
    if(isset($_SESSION["panierboissons"])) {
        if (isset($_POST["submit"]) && $_POST["submit"] == "supprimer" && isset($_POST["id_produitboissons"])) {
            $_SESSION["number"] -=1;
            $id_produitboissons = $_POST["id_produitboissons"];
            if (($key = array_search($id_produitboissons, $_SESSION["panierboissons"])) !== false) {
                unset($_SESSION["panierboissons"][$key]);
    
            }
            // redirection 
            header("location: panier.php");
        }

        $panierboissons=$_SESSION["panierboissons"];
        $produits_panier=array();

    
        foreach($panierboissons as $id_produitboissons) {
            $sql = "SELECT * FROM boissons WHERE id = $id_produitboissons";
            $result = mysqli_query($connexion,$sql);
        if(mysqli_num_rows($result) > 0) {
            $row=mysqli_fetch_assoc($result);
            $produits_panier[]=$row;
            $total_panier+=$row["price"];
        }
    }
    if(count($produits_panier) > 0) {
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
                <input type="hidden" name="id_produitboissons" value="'.$produit["id"] .'">
                <input class="text-white btn-commande" type="submit" name="submit" value="supprimer">
            </form>
        </div>

        <p class="taille-panier">'. $produit["price"] .'  </p>
    </article>
    ';
    }
    } 
        } 
        // fin de boissons 

// lasagnes 

   // supprimer les achats paniers
        if(isset($_SESSION["panierlasagnes"])) {
    if (isset($_POST["submit"]) && $_POST["submit"] == "supprimer" && isset($_POST["id_produitlasagnes"])) {
        $_SESSION["number"] -=1;
        $id_produitlasagnes = $_POST["id_produitlasagnes"];
        if (($key = array_search($id_produitlasagnes, $_SESSION["panierlasagnes"])) !== false) {
            unset($_SESSION["panierlasagnes"][$key]);
        }
        header("location: panier.php");
    }
    $panierlasagnes=$_SESSION["panierlasagnes"];
    $produits_panier=array();


    foreach($panierlasagnes as $id_produitlasagnes) {
        $sql = "SELECT * FROM preparation WHERE id = $id_produitlasagnes";
        $result = mysqli_query($connexion,$sql);
    if(mysqli_num_rows($result) > 0) {
        $row=mysqli_fetch_assoc($result);
        $produits_panier[]=$row;
        $total_panier+=$row["price"];
    }
}
if(count($produits_panier) > 0) {
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
            <input type="hidden" name="id_produitlasagnes" value="'.$produit["id"] .'">
            <input class="text-white btn-commande" type="submit" name="submit" value="supprimer">
        </form>
    </div>
    <p class="taille-panier">'. $produit["price"] .'  </p>
</article>
';
}
} 
    } 

    // desserts

 // supprimer les achats paniers
    if(isset($_SESSION["panierdesserts"])) {
    if (isset($_POST["submit"]) && $_POST["submit"] == "supprimer" && isset($_POST["id_produitdesserts"])) {
        $_SESSION["number"] -=1;
        $id_produitdesserts = $_POST["id_produitdesserts"];
        if (($key = array_search($id_produitdesserts, $_SESSION["panierdesserts"])) !== false) {
            unset($_SESSION["panierdesserts"][$key]);
        }
        header("location: panier.php");
    }
    $panierdesserts=$_SESSION["panierdesserts"];
    $produits_panier=array();


    foreach($panierdesserts as $id_produitdesserts) {
        $sql = "SELECT * FROM desserts WHERE id = $id_produitdesserts";
        $result = mysqli_query($connexion,$sql);
    if(mysqli_num_rows($result) > 0) {
        $row=mysqli_fetch_assoc($result);
        $produits_panier[]=$row;
        $total_panier+=$row["price"];
    }
}
if(count($produits_panier) > 0) {
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
            <input type="hidden" name="id_produitdesserts" value="'.$produit["id"] .'">
            <input class="text-white btn-commande" type="submit" name="submit" value="supprimer">
        </form>
    </div>
    <p class="taille-panier">'. $produit["price"] .'  </p>
</article>
';
}
} 
    } 

        // total du panier 
        echo '  <div class="d-flex text-center"> 
        <h3 class="text-white w-50"> Total </h3>
        <h3 class="text-white w-50">'. $total_panier.'</h3>
    </div>
    <div class="position-btn"> 
        <p class="text-white w-50"> <label for="appt-time">Veuillez choisir une heure de rendez-vous :</label>
        <input id="appt-time" type="time" name="appt-time" value="18:30"> </p>
        <form method="post" action="./validecommand.php">
            <input class="text-white btn-commande" type="submit" name="submit" value="Valider La Commande">
        </form>
    </div>
    
    ';

}else{
    echo '<h3 class="text-white text-center">  Votre panier est vide </h3>';
}

?>

