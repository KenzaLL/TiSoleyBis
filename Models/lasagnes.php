<?php 

require dirname(__FILE__).'/connexionBDD.php';


?>



    <?php $preparations = $connexion->query('SELECT * FROM `preparation`'); ?>

<?php foreach ($preparations->fetchAll(PDO::FETCH_OBJ) as $preparation): ?>



      <div class="produits col-sm-5 col-md-4 col-lg-3 col-xl-2 m-auto  mt-5">
        <article class="card m-auto m-4 bg-black " style="width: 90%; height: 100%">
          <img class="card-img-top" src="public/images/<?php echo $preparation->picture; ?>">
          <div class="card-body m">
            <h5 class="card-title text-white"><?php echo $preparation->title; ?></h5>
            <p class="card-text text-white card-textbis"><?php echo $preparation->description; ?></p>
            <p class="card-text text-white"><?php echo number_format($preparation->price, 2, ','); ?> €</p>
            <form action="add_card">
              <input type="hidden" name="product" value="<?php echo $preparation->id ?>">
              <input type="hidden" name="action" value="add">
              <button class="btn btn-commande text-white"> Ajouter au panier </button>
            </form>
          </div>
        </article>
      </div>

    <?php endforeach; ?>
