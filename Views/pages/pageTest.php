<?php

ob_start();
require 'Models/connexionBDD.php';

$stmt = $connexion->prepare("SELECT * FROM activationCommande WHERE id = 1");
$stmt->execute();
$activ = $stmt->fetch(PDO::FETCH_ASSOC);
$info = $activ['activation'];

?>

<h1>test</h1>

<form method="post" action="">

<?php
    if (!$info) {
        echo '<input type="submit" name="on" value="ON">';
    }else { echo '<input type="submit" name="off" value="OFF">'; }
?> 

</form>


<section>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur accusamus quo voluptatum ullam beatae necessitatibus at possimus quam repudiandae, eius cupiditate iusto voluptatem nesciunt similique dolore ipsam nisi laboriosam. Quam.</p>
</section>



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
}
if(isset($_POST['off'])){
    echo "Le bouton OFF a été pressé !";

    $query = "UPDATE activationCommande SET activation = :activation WHERE id = :id";
    $statement = $connexion->prepare($query);

    $statement->bindParam(':activation', $off);
    $statement->bindParam(':id', $on);
    $statement->execute();
}
?>

<?php 

$content = ob_get_clean();

$title = "Commande de boissons";

require 'base.view.php';

?>