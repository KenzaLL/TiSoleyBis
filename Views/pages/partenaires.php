

<?php

ob_start();

?>

    <hr class="text-white">
            <h1 class="text-white text-center p-3 m-4 titre-histoire"> Nos partenaires </h1>
    <hr class="text-white">

    <div class="text-center text-white m-2 p-2 text-histoire"> 
        <p class="m-0 p-histoire"> Hormis les œufs qui proviennent de notre poulailler et les tomates de notre jardin, nos partenaires nous aident à vous régaler avec des produits locaux et d’une fraicheur exceptionnelle ! </p>
        <p class="m-0 p-histoire"> Notre but est d’avoir le circuit le plus court possible jusqu'à vous !</p>
        <p class="m-0 p-histoire"> Pour ça nous travaillons avec des artisans locaux au maximum.</p>
        <p class="btn-histoire p-2 partenairesbis"> Marcel and fils & alpes alimentaires distributions </p>
    </div>


    <div class="d-flex flex-wrap justify-content-center"> 
        <img class="m-3 partenaires"src="./public/images/marcel.png" alt="logo marcel and fils" width="500px" height="300px">
        <img class="m-3 partenaires"src="./public/images/alpes.jpg" alt="logo alpes distribution" width="500px" height="300px">
    </div>

    <p class="btn-histoire text-white text-center p-2 partenairesbis"> Moulin pichard bio & La fromagerie du verdon </p>

    <div class="d-flex flex-wrap justify-content-center"> 
        <img class="partenaires" src="./public/images/pichard.jpeg" alt="moulin pichard"width="500px" height="300px">
        <img class="m-3 partenaires"src="./public/images/fromagerie.jpg" alt="logo de la fromagerie" width="500px" height="315px">
    </div>

    <?php 

$content = ob_get_clean();

$title = "Nos partenaires";

require './Views/base.php';

?>