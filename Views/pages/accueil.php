<?php 

ob_start();

?>


    <h1 class="titre"> Bienvenue chez Ti'Soley ! </h1>
        <div> 
            <a class="cta" href="commande.php"> Commandez en ligne ! </a>
        </div>
        
        <section class="band lol text-white">
    <div class="flex space">
       <article class="flex coller">
            <img class="bandImage" src="./images/1664.jpg" alt="">
            <div>
                <h3>PIZZA</h3>
                <p>odit architecto!</p>
            </div>
       </article>
       <article class="flex coller">
            <img class="bandImage" src="./images/1664.jpg" alt="">
            <div>
                <h3>PIZZA</h3>
                <p>odit architecto!</p>
            </div>
       </article> 
    </div>
    <div class="flex space">
       <article class="flex coller">
            <img class="bandImage" src="./images/1664.jpg" alt="">
            <div>
                <h3>PIZZA</h3>
                <p>odit architecto!</p>
            </div>
       </article>
       <article class="flex coller">
            <img class="bandImage" src="./images/1664.jpg" alt="">
            <div>
                <h3>PIZZA</h3>
                <p>odit architecto!</p>
            </div>
       </article> 
    </div>
</section>

    <hr class="text-white">
        <h2 class="text-white p-2 m-2"> Qu'est-ce qu'on mange ? </h2>
    

    


<div class="artpp">
    <section class="set2">
        <div class="image-container art">
            <div class="image-wrapper">
                <img src="./public/images/chevremiel.jpg" alt="Votre image" width="400px" >
                <button class="center-button">Cliquez ici</button>
            </div>
        </div>
        <div class="image-container art2">
            <div class="image-wrapper">
                <img src="./public/images/chevremiel.jpg" alt="Votre image" width="400px" >
                <button class="center-button">Cliquez ici</button>
            </div>
        </div>
    </section> 
    <section class="set">
        <div class="image-container art2">
            <div class="image-wrapper">
                <img src="./public/images/chevremiel.jpg" alt="Votre image" width="400px" >
                <button class="center-button">Cliquez ici</button>
            </div>
        </div>
        <div class="image-container art">
            <div class="image-wrapper">
                <img src="./public/images/chevremiel.jpg" alt="Votre image" width="400px" >
                <button class="center-button">Cliquez ici</button>
            </div>
        </div>
    </section> 
</div>


<?php 

$content = ob_get_clean();

$title = "Accueil";

require './Views/base.php';

?>