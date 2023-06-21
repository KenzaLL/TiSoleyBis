

    <div class="card bg-black" style="width: 18rem;">
        <img class="card-img-top" src="./public/images/" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-white"> </h5>
          <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn-commande"> Ajouter au panier </a>
        </div>
      </div>

    


      <?php 

$content = ob_get_clean();

$title = "Contact";

require './Views/base.php';

?>