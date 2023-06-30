<?php

// utilise la bdd
require dirname(__FILE__, 3) . '/Utils/db.class.php';

// initialize la classe 
$DB = new DB();
ob_start();

?>

<?php


$ids = array_keys($_SESSION['panier']);
$products = [];
$total = 0;

if (!empty($ids)) {
    // implode = séparer 
    $products = $DB->query('SELECT * FROM pizza WHERE id IN(' . implode(',', $ids) . ')');
    foreach ($products as $product) {
        $quantity = $_SESSION['panier'][$product->id];
        // calcul
        $subtotal = $product->price * $quantity;
        // retourne le total 
        $total += $subtotal;
    }
}
?>




<section class="h-100" style="background-color: #000000;">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-white">Votre panier</h3>
                    <p class="p-2 text-white pay"> A retirer sur place et paiement en espèces </p>
                </div>

                <!-- parcours les produits -->
                <?php foreach ($products as $product) : ?>
                    <!-- card du produit -->
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <td>
                                        <img src="public/images/<?php echo $product->picture; ?>" alt="" width="110">
                                    </td>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <td> <?php echo $product->title ?> </td>
                                    <td> <?php echo number_format($product->price, 2, ',', ' ') ?></td>
                                </div>
                                <!-- button + et - -->
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex align-items-center">
                                    <!-- moins -->
                                    <form action="add_card">
                                        <button class="btn btn-warning"> - </button>
                                        <input type="hidden" name="action" value="decrease">
                                        <input type="hidden" name="product" value="<?php echo $product->id ?>">
                                    </form>
                                    <input type="text" class="form-control quantity-input" value="<?php echo $_SESSION['panier'][$product->id]; ?>">
                                    <!-- + -->
                                    <form action="add_card">
                                        <input type="hidden" name="product" value="<?php echo $product->id ?>">
                                        <input type="hidden" name="action" value="add">
                                        <button class="btn btn-warning">+  </button>
                                    </form>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 d-flex justify-content-between">
                                    <td> <?php echo number_format($product->price * $_SESSION['panier'][$product->id], 2, ',') ?> € </td>
                                </div>
                                <form class="btn-supp" action="add_card">
                                    <input type="hidden" name="product" value="<?php echo $product->id ?>">
                                    <input type="hidden" name="action" value="delete">
                                    <button class="btn btn-danger"> Supprimer tout </button>
                                </form>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>


                <div class="card">
                    <form method="POST" action="add_card">
                        <input type="hidden" name="action" value="save">
                        <div class="card-body d-flex justify-content-between">

                            <button class="btn btn-warning btn-block btn-lg btn-valide" type="submit"> Valider votre commmande </button>
                            <p class="p-2">total : <td> <?php echo number_format($total, 2, ',', ' ') ?></td>
                            </p>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>



<?php

$content = ob_get_clean();

$title = "Panier";

require 'base.view.php';

?>