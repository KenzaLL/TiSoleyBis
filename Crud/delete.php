<?php 
require 'CRUD.php';

$crud = new CRUD();


// vérifie si l'id existe
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $crud->delete($id);

    header('Location:http://localhost/TiSoleyBis/CRUD/crud.index.php');
    exit();
    
    if ($pizza === false){
        die('Produit non trouvé');
    }
}    else {
    die('Id du produit manquant');
}
