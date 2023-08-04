<?php 
session_start();
if ($_SESSION['is_admin']) {
} else {
    session_destroy();
    header('Location: http://localhost/TiSoleyBis/connexion');
}


require 'CRUD.php';

$crud = new CRUD();

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    // modification de l'id propre à lui meme 
    $id = $_POST ['id'];
    $data = array(
        'title' => $_POST['title'],
        'picture' => $_POST['picture'],
        'base' => $_POST['base'],
        'description' => $_POST['description'],
        'price' => $_POST['price'],
    );

    $crud->update($id , $data);
    
    header('Location:http://localhost/TiSoleyBis/modification');
    exit();
}

// vérifie si l'id existe
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pizza = $crud->getPizzaById($id);
    if ($pizza === false){
        die('Produit non trouvé');
    }
}    else {
    die('Id du produit manquant');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Site de pizzeria Ti'Soley situé sur Vinon sur Verdon, vous avez la possibilité de commander en ligne et de venir récupérer vos commandes sur place.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/base.css">
    <link rel="stylesheet" href="../public/css/registerBis.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../Favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Page Admin Modification</title>
</head>

<body class="">

    <div class="page-wrapper bg-gra-01  font-poppins   d-flex flex-column justify-content-center align-items-center">
        <h2 class="pb-2 titleMain">MODIFICATION</h2>
            <div class="wrapper wrapper--w780 w-100">
                <div class="card card-3 rounded-3">

                    <div class="card-body">
                        <h2 class="title text-center">MODIFIER LE PRODUIT</h2>
                        <form method="POST">
                            <div class="input-group"> 
                                <label class="text-white fs-4" for=""> Photo </label>
                                <img class="w-50 rounded-2 m-auto mb-2 " src="../public/images/<?php echo $pizza->picture ?>" alt=""> 
                                <input class="custom-file-input text-white fs-5" type="file" name="picture">
                            </div>
                            <div class="input-group"> 
                                <input type="hidden" name="id" value="<?php echo $pizza->id; ?>" > 
                            </div>
                            <div class="input-group"> 
                                <label class="text-white fs-4 m-auto" for="title"> Titre </label>
                                <input class="input--style-3 fs-5" type="text" name="title" value="<?php echo $pizza->title; ?>" >
                            </div>
                            <div class="input-group"> 
                                <label class="text-white fs-4 m-auto" for="base"> Base </label>
                                <input class="input--style-3 fs-5" type="text" name="base" value="<?php echo $pizza->base; ?>" >
                            </div>
                            <div class="input-group"> 
                                <label class="text-white fs-4 m-auto" for="description"> Description </label>
                                <input class="input--style-3 fs-5" type="text" name="description" value="<?php echo $pizza->description; ?>">
                            </div>
                            <div class="input-group">
                                <label class="text-white fs-4 m-auto" for="price"> Prix </label>
                                <input class="input--style-3 fs-5" type="number" name="price" value="<?php echo $pizza->price ?>">
                            </div>
                            <div class="p-t-10">
                                
                                <input class="btn btn--pill btn--green" type="submit" name="submit" value="Validation de la pizza">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


</body>
</html>