<?php

session_start();

// pizzas 
    if(isset($_POST['submitpizza'])) {
        $id_produitpizza=$_POST["id_produitpizza"];
if(!isset($_SESSION["panierpizza"])) {
    $_SESSION["panierpizza"]=array(); 
}

array_push($_SESSION["panierpizza"],$id_produitpizza);
    $_SESSION["number"] += 1;
    header("location: commande.php");
    }


    // boissons
    if(isset($_POST['submitboissons'])) {
        $id_produitboissons=$_POST["id_produitboissons"];
        if(!isset($_SESSION["panierboissons"])) {
            $_SESSION["panierboissons"]=array(); 
            var_dump($_SESSION['panierboissons']);
        }
        
        array_push($_SESSION["panierboissons"],$id_produitboissons);
        $_SESSION["number"] += 1;
        header("location: commande-boissons.php");
    }

    // lasagnes
    if(isset($_POST['submitlasagnes'])) {
        $id_produitlasagnes=$_POST["id_produitlasagnes"];
        if(!isset($_SESSION["panierlasagnes"])) {
            $_SESSION["panierlasagnes"]=array(); 
            var_dump($_SESSION['panierlasagnes']);
        }
        
        array_push($_SESSION["panierlasagnes"],$id_produitlasagnes);
        $_SESSION["number"] += 1;
        header("location: commande-lasagnes.php");
    }

    // desserts

    if(isset($_POST['submitdesserts'])) {
        $id_produitdesserts=$_POST["id_produitdesserts"];
        if(!isset($_SESSION["panierdesserts"])) {
            $_SESSION["panierdesserts"]=array(); 
            var_dump($_SESSION['panierdesserts']);
        }
        
        array_push($_SESSION["panierdesserts"],$id_produitdesserts);
        $_SESSION["number"] += 1;
        header("location: commande-desserts.php");
    }

exit();

?>

