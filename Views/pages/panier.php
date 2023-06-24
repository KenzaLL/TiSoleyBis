
<?php

require dirname(__FILE__, 3).'/Utils/db.class.php';
$DB = new DB();
ob_start();

?>

<?php 


$ids = array_keys($_SESSION['panier']);
$products = [];
if (!empty($ids)) {
    
    $products = $DB->query('SELECT * FROM pizza WHERE id IN('.implode(',', $ids).')');
}
?>



      <div class="container flex-column text-white">
        <table class="table text-end mb-0">
        <thead>
          <tr>
            <th>Image </th>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th></th>
          </tr>
        </thead>

        <tbody>
        <?php foreach ($products as $product): ?>

          <tr>
          <td>
            <a href=""> <img src="<?php  echo $product->id; ?>.jpg" alt=""></a>
          </td>
          <td> <?php  echo $product->title?> </td>
          <td> <?php echo $_SESSION['panier'][$product->id]; ?></td>
          <td> <?php  echo number_format($product->price,2,',')?> € </td>
          <td>
              <form action="add_card">
              <input type="hidden" name="product" value="<?php echo $product->id ?>">
              <input type="hidden" name="action" value="delete">
              <button class="btn btn-danger"> Supprimer </button>
              </form>
          </td>
          </tr>
        <?php endforeach ?>
        </tbody>
        </table>

        <div class="col-4 offset-8">
          <table class="table text-end ">
            <tbody>
                <tr>
                    <th>Total:</th>
                    <td>1,00&nbsp;€</td>
                </tr>
                <tr>
                    <td colspan="2"><button class="btn btn-primary">Passer à la caisse</button></td>
                </tr>
            </tbody>
          </table>
      </div>
    <td> <?php // echo number_format($panier->total(), 2 ,',',' ')?></td>
      </div>
        </div>

<?php 

$content = ob_get_clean();

$title = "Panier";

require dirname(__FILE__,2).'/base.php';

?>