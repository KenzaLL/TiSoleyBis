<?php 
require dirname(__FILE__, 2).'/Utils/db.class.php';
require './Models/panier.class.php';


$product = filter_input(INPUT_GET, 'product',FILTER_VALIDATE_INT);
if (!$product) { 
    throw new Exception ('invalid product');
}

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_ENCODED);

if (!in_array($action,['add', 'delete' , 'decrease' , 'save' ])) {
    throw new Exception ('invalid action');
}

$panier = new Panier(); 

switch ($action) {
    case 'add' : $panier->add($product); break;
    case 'decrease' : $panier->decrease($product); break;
    case 'save' : $panier->save($product); break;
    case 'delete' : 
        $panier->del($product);
        header('Location: mon_panier');
        exit;
        break;
}

header('Location: mon_panier');
exit;


