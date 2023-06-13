<?php 

if(empty($_GET['page'])){

    require './Views/pages/accueil.php';
    
}else{
   switch($_GET['page']){
        case "accueil" : require './Views/pages/accueil.php';
        break;
        case "commande" : require './Views/pages/commande.php';
        break;
        case "histoire" : require './Views/pages/histoire.php';
        break;
   }
}

?>