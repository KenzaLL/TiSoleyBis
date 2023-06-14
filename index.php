<?php 

if(empty($_GET['page'])){

    require './Views/pages/accueil.php';
    
}else{
   switch($_GET['page']){

        case "accueil" : require './Views/pages/accueil.php';
        break;

        case "histoire" : require './Views/pages/histoire.php';
        break;

        case "partenaires" : require './Views/pages/partenaires.php';
        break;

        case "terredessences" : require './Views/pages/terredessences.php';
        break;

        case "commande" : require './Views/pages/commande.php';
        break;

        case "boissons" : require './Views/pages/commande-boissons.php';
        break;

        case "preparations" : require './Views/pages/commande-lasagnes.php';
        break;

        case "desserts" : require './Views/pages/commande-desserts.php';
        break;

        case "contact" : require './Views/pages/contact.php';
        break;

        case "inscription" : require './Views/pages/inscription.php';
        break;

        case "connexion" : require './Views/pages/connexion.php';
        break;

        case "panier" : require './Views/pages/panier.php';
        break;

        }
}

?>