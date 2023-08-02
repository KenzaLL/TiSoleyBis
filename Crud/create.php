<?php 

session_start();
if ($_SESSION['is_admin']) {
} else {
    session_destroy();
    header('Location: http://localhost/TiSoleyBis/connexion');
}


require 'CRUD.php'; 

$crud = new CRUD ();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = array(
        'title' => $_POST['title'],
        'picture' => $_POST['picture'],
        'base' => $_POST['base'],
        'description' => $_POST['description'],
        'price' => $_POST['price'],
    );

$crud->create($data); 

    header('Location:http://localhost/TiSoleyBis/modification');
    exit();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../Favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="../public/css/crud.css">
    <title>Ajout d'un produit</title>
</head>
<body>
    

<div class="titre1">
    <h2> Ajout d'une pizza </h2>

</div> 
<div class="border">
    <form method="POST">
        <div class="input"> 
            <label for=""> Photo </label>
                <input type="file" name="picture" required>
        </div>
        <div class="input"> 
            <label for=""> Titre </label>
                <input type="text" name="title" required> 
        </div>
        <div class="input"> 
            <label for=""> Base </label>
                <input type="text" name="base" required>
        </div>
        <div class="input"> 
            <label for=""> Description </label>
                <textarea name="description" required> </textarea>
        </div>
        <div class="input">
            <label for=""> Prix </label>
                <input type="number" name="price" required>
                <input type="submit" value="Validation de la pizza" name="submit" class="btn-retour"> 
        </div>
    </form>
    </div> 
</div>
</div>
</body>
</html>

<?php 



?>