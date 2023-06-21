<?php 

require 'CRUD.php';

$crud = new CRUD();
// appel a la fonction read
$pizzas = $crud->read();

?>



<h1> Liste de produits </h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>PRIX</th>
            <th>ACTIONS</th>
        </tr>

<?php foreach ($pizzas as $pizza): ?>
<tr>
<td><?php echo $pizza->id; ?></td>
<td><?php echo $pizza->title ?></td>
<td> <img src="../public/images/<?php echo $pizza->picture ?>" alt="" width="100"></td>
<td><?php echo $pizza->base ?></td>
<td> <?php echo $pizza->description ?></td>
<td><?php echo number_format($pizza->price, 2, ',','') ?> </td>

<td>
<a href=""> Ajouter un produit </a>
    <a href="update.php?id=<?php echo $pizza->id; ?>"> Modifier </a>
    <a href="delete.php?id=<?php echo $pizza->id; ?>"> Supprimer</a> 
</td>
</tr>

<?php endforeach; ?>
    </table>