
<?php 

require dirname(__FILE__).'/connexionBDD.php';
$stmt = $connexion->prepare("SELECT * FROM activationCommande WHERE id = 1");
$stmt->execute();
$activ = $stmt->fetch(PDO::FETCH_ASSOC);
$info = $activ['activation'];
date_default_timezone_set('Europe/Paris');

if($info){
  $heure = new DateTime();
  $heureActuelle = new DateTime();
  $heureActuelle->setTime($heure->format('H'), $heure->format('i'), $heure->format('s'));

  $heureDebut = new DateTime('13:46:00');
  $heureFin = new DateTime('20:00:00');
  
  if ($heureActuelle >= $heureDebut && $heureActuelle <= $heureFin) {
      $info2 = 1;
  } else {
      $info2 = 0;
  }
}else{$info2 = 0;}

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
          <p class="card-text text-white card-textbis" style="height: 70px"><?php echo $pizza->description; ?></p>
          <p class="card-text text-white"><?php echo number_format($pizza->price, 2, ','); ?> €</p>
          <form action="add_card">
            <input type="hidden" name="product" value="<?php echo $pizza->id ?>">
            <input type="hidden" name="action" value="add">
            <?php
              if ($info2) {
                echo '<button class="btn btn-commande text-white"> Ajouter au panier </button>';
              }else{}
            ?>
          </form>
      </div>
    </article>
  </div>
<?php endforeach; ?>


