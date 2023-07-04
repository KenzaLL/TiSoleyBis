<?php 
require dirname(__FILE__, 2).'/Utils/db.class.php';
require './Models/panier.class.php';

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_ENCODED) ?? filter_input(INPUT_POST, 'action', FILTER_SANITIZE_ENCODED);

if (!in_array($action,['confirm', 'save'])) {
    throw new Exception ('invalid action');
}

$panier = new Panier(); 

switch ($action) {
    case 'save' :
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_ENCODED);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_ENCODED);
        $numberphone = filter_input(INPUT_POST, 'numberphone', FILTER_SANITIZE_ENCODED);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_ENCODED);
        $date = filter_input(INPUT_POST, 'date');

        if(empty($firstname) || empty($lastname) || empty($numberphone) || empty($email) || empty($date)) {
            // renvoyer sur le formulaire de commande avec un message d'erreur
            throw new \Exception('todo: informé le user des erreurs');
        }

        $result = $panier->save($firstname, $lastname, $numberphone, $email, $date);
        if($result) {
            $panier->empty();
        }
        
        include './Views/pages/validation.view.php';
        break;
    case 'confirm' : include './Views/pages/info_commande.view.php'; break;

}

// header('Location: mon_panier');
exit;


