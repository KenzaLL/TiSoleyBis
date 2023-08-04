
<?php 

require dirname(__FILE__).'/connexionBDD.php';

?>



    <?php 
    
    $pizzas = $connexion->query('SELECT * FROM `pizza`'); ?>

<?php foreach ($pizzas->fetchAll(PDO::FETCH_OBJ) as $pizza): ?>
  <div class="produits col-sm-5 col-md-4 col-lg-3 col-xl-2 m-auto  mt-5 <?php echo $pizza->base; ?>">
    <article class="card m-auto m-4 bg-black " style="width: 90%; height: 100%">
      <img class="card-img-top" src="public/images/<?php echo $pizza->picture; ?>">
        <div class="card-body m">
          <h5 class="card-title text-white"><?php echo $pizza->title; ?></h5>
          <p class="card-text text-white">Base : <?php echo $pizza->base; ?></p>
          <p class="card-text text-white" style="height: 70px"><?php echo $pizza->description; ?></p>
          <p class="card-text text-white"><?php echo number_format($pizza->price, 2, ','); ?> €</p>
          <form action="add_card">
            <input type="hidden" name="product" value="<?php echo $pizza->id ?>">
            <input type="hidden" name="action" value="add">
            <button class="btn btn-commande text-white"> Ajouter au panier </button>
          </form>
      </div>
    </article>
  </div>
<?php endforeach; ?>


