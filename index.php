<?php 

session_start();

function requireAdmin($file) { 
    if ($_SESSION['is_admin']) {
        require $file;
        return true;
    }
    session_destroy();
    header('Location: http://localhost/TiSoleyBis/connexion');
}

if(empty($_GET['page'])){

    require './Views/pages/accueil.view.php';
    
}else{
        switch($_GET['page']){

        case "accueil" : require './Views/pages/accueil.view.php';
        break;

        case "histoire" : require './Views/pages/histoire.view.php';
        break;

        case "partenaires" : require './Views/pages/partenaires.view.php';
        break;

        case "terredessences" : require './Views/pages/terredessences.view.php';
        break;

        case "commande" : require './Views/pages/commande.view.php';
        break;

        case "boissons" : require './Views/pages/boissons.view.php';
        break;

        case "preparations" : require './Views/pages/lasagnes.view.php';
        break;

        case "desserts" : require './Views/pages/desserts.view.php';
        break;

        case "contact" : require './Views/pages/contact.view.php';
        break;

        case "inscription" : require './Views/pages/inscription.view.php';
        break;

        case "connexion" : require './Views/pages/connexion.view.php';
        break;

        case "deconnexion" : require './Models/deconnexion.php';
        break;

        
        case "mon_panier" : require './Views/pages/panier.php';
        break;

        case "add_card" : require './Controllers/add_card.php';
        break;

        case "validation_commande" : require './Views/pages/validation.view.php';
        break;
        
        case "validation_inscription" : require './Views/pages/validation.inscription.view.php';
        break;

        case "admin" : requireAdmin('./Views/pages/admin.view.php');
        break;

        case "modification" : requireAdmin('./Crud/crud.index.php');
        break;

        case "info_commande" : require './Controllers/save_commande.php';
        break;

        case "test" : require './Views/pages/pageTest.php';
        break;

        }   
}

?>