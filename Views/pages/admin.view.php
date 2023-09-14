<?php

ob_start();

require './Utils/db.class.php';

$DB = new DB;
function getOrders($day, $DB)
{
  $sql = "
    SELECT *
    FROM commande 
    WHERE commande.date_time > '" . $day->format("Y-m-d 00:00:00") . "'
    AND commande.date_time < '" . $day->format("Y-m-d 23:59:00") . "'
    ORDER BY commande.date_time ASC
  ";
  return $DB->query($sql);
}

$today = new \DateTime("now");
$yesterday = new \DateTime("yesterday");

$commandes_today = getOrders($today, $DB);

$commandes_yesterday = getOrders($yesterday, $DB);

foreach (array_merge($commandes_today, $commandes_yesterday) as $commande) {
  $products = $DB->query(
    "
      SELECT commande_pizza.quantite, pizza.title
      FROM commande_pizza
      INNER JOIN pizza 
      ON commande_pizza.pizza_id = pizza.id
      WHERE commande_pizza.commande_id = " . $commande->id
  );

  $commande->products = $products;
}


require 'Models/connexionBDD.php';

$stmt = $connexion->prepare("SELECT * FROM activationCommande WHERE id = 1");
$stmt->execute();
$activ = $stmt->fetch(PDO::FETCH_ASSOC);
$info = $activ['activation'];
?>



<header class="d-flex justify-content-between container-admin">
  <h1 class="titre-admin">Pizzeria Dashboard</h1>
  <a href="modification" class="btn-nav"> Ajouter , supprimer , modifier un produit </a>

  <form method="post" action="">
<?php
    if (!$info) {
        echo '<input class="btn btn-success" type="submit" name="on" value="ON">';
    }else { echo '<input class="btn btn-danger" type="submit" name="off" value="OFF">'; }
?> 
</form>

</header>
<main class="block-admin">

  <section class="section orders pt-4">
    <h2 class="text-white commande">Commandes en cours</h2>
    <ul class="order-list">
      <?php foreach ($commandes_today as $key => $commande) : ?>
        <?php include '_admin_order.view.php'; ?>
      <?php endforeach; ?>
    </ul>
  </section>


  <section class="section order-history">
    <h2 class="text-white commande">Historique des commandes</h2>
    <ul class="order-list">
      <?php foreach ($commandes_yesterday as $key => $commande) : ?>
        <?php include '_admin_order.view.php'; ?>
      <?php endforeach; ?>
    </ul>
  </section>
</main>


<?php


$on = 1;
$off = 0;

if(isset($_POST['on'])){
    $query = "UPDATE activationCommande SET activation = :activation WHERE id = :id";
    $statement = $connexion->prepare($query);
    
    $statement->bindParam(':activation', $on);
    $statement->bindParam(':id', $on);
    $statement->execute();
    echo "Le bouton ON a été pressé !";
    header("Location: admin");
}
if(isset($_POST['off'])){
  $query = "UPDATE activationCommande SET activation = :activation WHERE id = :id";
  $statement = $connexion->prepare($query);
  
  $statement->bindParam(':activation', $off);
  $statement->bindParam(':id', $on);
  $statement->execute();
  echo "Le bouton OFF a été pressé !";
  header("Location: admin");
}
?>


<?php

$content = ob_get_clean();

$title = "Page d'administrateur";

require './Views/pages/base.view.php';

?>