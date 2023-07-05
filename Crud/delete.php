<?php 

session_start();
if ($_SESSION['is_admin']) {
} else {
    session_destroy();
    header('Location: http://localhost/TiSoleyBis/connexion');
}


require 'CRUD.php';

$crud = new CRUD();


// vérifie si l'id existe
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $crud->delete($id);

    header('Location:http://localhost/TiSoleyBis/modification');
    exit();
    
    if ($pizza === false){
        die('Produit non trouvé');
    }
}    else {
    die('Id du produit manquant');
}
