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
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../Favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title> Liste des produits </title>
</head>

<body>

    <div class="d-flex justify-content-between">
        <h1 class="crud-titre"> Liste de produits de la pizzeria Ti'Soley </h1>
        <div>
            <a class="btn" id="ajout" href="Crud/create.php?id="> Ajouter un produit à la carte </a>
            <a class="btn" href="admin"> Revenir au Tableau De Bord </a>
        </div>
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

        <?php foreach ($pizzas as $pizza) : ?>
            <tr>
                <td class="read"><?php echo $pizza->id; ?></td>
                <td class="read"><?php echo $pizza->title ?></td>
                <td class="read"> <img src="public/images/<?php echo $pizza->picture ?>" alt="" width="100"></td>
                <td class="read"><?php echo $pizza->base ?></td>
                <td class="read"> <?php echo $pizza->description ?></td>
                <td class="read"><?php echo number_format($pizza->price, 2, ',', '') ?> € </td>

                <td>


                    <a class="btn" id="ajout" href="Crud/update.php?id=<?php echo $pizza->id; ?>"> Modifier le produit </a>
                    <a class="btn" id="btn" href="Crud/delete.php?id=<?php echo $pizza->id; ?>"> Supprimer le produit </a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</body>

</html>