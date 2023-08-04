<?php

ob_start(); 

?>

        <hr class="text-white m-0">
            <h1 class="text-white text-center p-3 m-4 titre-histoire"> Notre histoire </h1>
        <hr class="text-white m-1">

    <div class="text-center text-white m-0 p-2 text-histoire"> 
        <p class="m-0 p-histoire"> A l'époque où je travaillais chez Fleurs de Thym, petit restaurant familial à Greoux les bains où il faisait bon. </p>
        <p class="m-0 p-histoire"> Djuro, le propriétaire des lieux me taquinais et me disait souvent : "Tu es faites pour ouvrir ton commerce !" </p>
        <p class="m-0 p-histoire">L'idée a commencé à germer grâce à ses mots, si bien que je suis partie aux Antilles (en Martinique) y vivre une année.</p>
        <p class="m-0 p-histoire"> L'envie s'est amplifiée sur place, travaillant dans une pizzeria pour me perfectionner. </p>  
        <p class="m-0 p-histoire"> Ce voyage m'a mené au plus précieux de la vie : le contact humain, le partage, la solidarité et la communication !</p> 
        <p class="m-0 p-histoire">  Aimer son prochain , aimer sa vie et surtout faites ce qui vous fait vibrer, osez.</p>
        <p class="m-0 p-histoire">  Pas de peur, pas d'échec juste de la positivé et l'envie d'y croire. </p> 
        <p class="m-0 p-histoire"> N'allez jamais à contre courant car la vie ne revient jamais sur ses pas.</p>  
        <p class="m-0 p-histoire">   Je remercie la vie et tous ceux qui continue à croire en moi et j'adore ma vie !</p>
    </div>

    <div class="histoire d-flex justify-content-center"> 
        <img class="mt-2 p-5"src="./public/images/cindy2.jpg" alt="photo de la patronne">
        <img class="mt-2 p-5"src="./public/images/cindy.jpg" alt="photo de la patronne">
        <img class="mt-2 p-5"src="./public/images/cindy3.jpg" alt="photo de la patronne">
    </div>

    
<?php 

$content = ob_get_clean();

$title = "Notre histoire";

require 'base.view.php';

?>


