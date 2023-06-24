<?php 

require dirname(__FILE__).'/connexionBDD.php';


?>



<section class="featured-products">
  <div class="row">
    <?php $desserts = $connexion->query('SELECT * FROM `desserts`'); ?>

<?php foreach ($desserts->fetchAll(PDO::FETCH_OBJ) as $desserts): ?>
      <div class="col-sm-5 col-md-4 col-lg-3 col-xl-2 m-auto  mt-5">
        <article class="card m-auto m-4 bg-black" style="width: 100%; height: 100%">
          <img class="card-img-top" src="public/images/<?php echo $desserts->picture; ?>">
          <div class="card-body m">
            <h5 class="card-title text-white"><?php echo $desserts->title; ?></h5>
            <p class="card-text text-white" style="height: 70px"><?php echo $desserts->description; ?></p>
            <p class="card-text text-white"><?php echo number_format($desserts->price, 2, ','); ?></p>
            <form action="add_card">
              <input type="hidden" name="product" value="<?php echo $desserts->id ?>">
              <input type="hidden" name="action" value="add">

              <button class="btn btn-commande text-white"> Ajouter au panier </button>
            </form>

          </div>
        </article>
      </div>
    <?php endforeach; ?>
  </div>
</section>
