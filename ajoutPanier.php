<?php

session_start();

$id_produit=$_POST["id_produit"];

if(!isset($_SESSION["panier"])) {
    $_SESSION["panier"]=array(); 
}

array_push($_SESSION["panier"],$id_produit);

header("location: commande.php");

exit();


?>

