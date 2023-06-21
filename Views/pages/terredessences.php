
<?php 

ob_start();

?>

    <hr class="text-white">
        <h1 class="text-white text-center p-3 m-4 titre-histoire">  Terre d'essences </h1>
    <hr class="text-white">

    <div class="text-white text-center size-contact m-4 p-4"> 
        <p class="m-2"> Nous vous proposons une large gamme de produits 100% purs et naturels, issus de cueillettes sauvages et cultures naturelles. </p>
        <p class="m-2"> Découvrez nos transformations tels que les huiles essentielles, huiles végétales, macérats ou encore d'hydrolats.</p>
        <p class="m-2"> Sans oublier les tisanes, aromates et alimentations diverses ( confits , sirops , confitures) </p>
    </div>

    <a class="btn-commande site bg"  href="https://terredessences.net/"> Cliquez ici pour accéder à notre site internet </a>

    <div class="d-flex flex-wrap justify-content-evenly m-5 mt-5">
        <img class="img-terre"src="public/images/coffret.jpg" alt="coffret produits naturels" width="300px">
        <img class="img-terre"src="public/images/coffret3.jpg" alt="coffret produits naturels" width="300px">
        <img class="img-terre"src="public/images/coffret4.jpg" alt="coffret produits naturels" width="300px">
        <img class="img-terre"src="public/images/cadeau.jpg" alt="coffret produits naturels" width="300px">
    </div>

    <?php 

$content = ob_get_clean();

$title = "Nos produits artisanaux";

require './Views/base.php';

?>