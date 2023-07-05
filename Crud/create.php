<?php 

session_start();
if ($_SESSION['is_admin']) {
} else {
    session_destroy();
    header('Location: http://localhost/TiSoleyBis/connexion');
}


require 'CRUD.php'; 

$crud = new CRUD();

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
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/crud.css">
</head>
<body>
    

<div class="titre"> 
<h2> Ajout d'une pizza </h2>
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
                <input type="submit" value="Validation de la pizza" name="submit" class="ajout-btn"> 
        </div>
    </form>

</div>
</div>
</body>
</html>

<?php 



?>