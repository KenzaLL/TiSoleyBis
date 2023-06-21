
      
<?php require_once 'panier/_header.php'; ?>


<section class="featured-products">
  <div class="row">
    <?php $pizzas = $DB->query('SELECT * FROM `pizza` ORDER BY `id` DESC'); ?>
    <?php foreach ($pizzas as $pizza): ?>
      <div class="col-md-3">
        <img src="public/images/<?php echo $pizza->picture; ?>" width="100px">
        <article class="card m-4 bg-black" style="width: 250px; height: 100%">
          <div class="card-body m">
            <h5 class="card-title text-white"><?php echo $pizza->title; ?></h5>
            <p class="card-text text-white"><?php echo $pizza->base; ?></p>
            <p class="card-text text-white" style="height: 70px"><?php echo $pizza->description; ?></p>
            <p class="card-text text-white"><?php echo number_format($pizza->price, 2, ','); ?></p>
            <a class="btn-commande" href="panier/addpanier.php?id=<?= $pizza->id; ?>">Ajouter au panier</a>
          </div>
        </article>
      </div>
    <?php endforeach; ?>
  </div>
</section>

          

<!-- // require_once 'connexionBDD.php';

// $sql = "select * from pizza";
// $results = $connexion->query($sql);

// if($results->rowCount()>0) { 
//     while($row=$results->fetch()) {
//         }
//       }
       -->