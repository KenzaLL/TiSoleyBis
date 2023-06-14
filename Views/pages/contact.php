<?php

ob_start();

?>

        <hr class="text-white">
            <h1 class="text-white text-center p-3 m-4 titre-histoire"> Nous contacter </h1>
        <hr class="text-white">
            <img class="img-contact"src="./images/photo2.jpg" alt="">

            <div class="text-white text-center size-contact m-5"> 
                <p class="m-2"> Nous sommes ouverts pendant la période de <span class="color-contact">mai à octobre : du mercredi au dimanche </span>  de 18h30 à 21h30 </p>
                <p class="m-2"> Nous sommes ouverts pendant la période de <span class="color-contact">novembre à avril : du vendredi au dimanche </span>de 18h30 à 21h30 </p>
                <p class="m-2"> Une question ? Une suggestion ? N'hésitez pas a nous contacter ! </p>
            </div>


<?php 

$content = ob_get_clean();

$title = "Contact";

require './Views/base.php';

?>