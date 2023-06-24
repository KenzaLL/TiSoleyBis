<?php 
require dirname(__FILE__, 2).'/Utils/db.class.php';
require dirname(__FILE__, 2).'/Utils/panier.class.php';



$product = filter_input(INPUT_GET, 'product', FILTER_VALIDATE_INT);
if (!$product) { 
    throw new Exception ('invalid product');
}

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_ENCODED);

if (!in_array($action,['add', 'delete'])) {
    throw new Exception ('invalid action');
}

$panier = new Panier(); 

switch ($action) {
    case 'add' : $panier->add($product); break;
    case 'delete' : 
        $panier->del($product);
        header('Location: mon_panier');
        exit;
        break;
}

header('Location: commande');
exit;

// if(isset($_GET['id'])) {
//     $product = $DB->query ('SELECT id FROM products WHERE id=:id', array ('id' => $_GET['id']));
//     if(empty($product)) {
//         die ("Ce produit n'existe pas");
//     }
//     $panier->add($product[0]->id);
//     die ('le produit a bien été ajouté a votre panier <a href="javascript:history.back()"> retourner sur le catalogue</a>');


// }else {
//     die("vous n'avez pas sélectionner de produit à ajouter au panier");
// }
