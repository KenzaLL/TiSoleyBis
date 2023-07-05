<?php 

require 'CRUD.php';

$crud = new CRUD();
// appel a la fonction read
$pizzas = $crud->read();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/crud.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<div class="flex">
    <h1> Liste de produits </h1>
    <a class="btn" href="admin"> Tableau De Bord </a>
</div>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>IMAGE</th>
            <th>BASE</th>
            <th>DESCRIPTION</th>
            <th>PRIX</th>
            <th>ACTIONS</th>
        </tr>
        
        
           
       
            

<?php foreach ($pizzas as $pizza): ?>
<tr>
<td><?php echo $pizza->id; ?></td>
<td><?php echo $pizza->title ?></td>
<td> <img src="public/images/<?php echo $pizza->picture ?>" alt="" width="100"></td>
<td><?php echo $pizza->base ?></td>
<td> <?php echo $pizza->description ?></td>
<td><?php echo number_format($pizza->price, 2, ',','') ?> </td>

<td>

    <a class="btn" href="Crud/create.php?id="> Ajouter un produit </a>
    <a class="btn" href="Crud/update.php?id=<?php echo $pizza->id; ?>"> Modifier </a>
    <a class="btn" href="Crud/delete.php?id=<?php echo $pizza->id; ?>"> Supprimer</a> 
</td>
</tr>

<?php endforeach; ?>
    </table>