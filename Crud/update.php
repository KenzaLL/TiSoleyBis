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



<h2>Modifer un produit </h2>

<form method="POST">
                <div class="input"> 
                    <label for=""> Photo </label>
                <img src="<?php echo $pizza->picture ?>" alt=""> 
                        <input type="file" name="picture">
                </div>
                <div class="input"> 
                        <input type="hidden" name="id" value="<?php echo $pizza->id; ?>" > 
                </div>
                <div class="input"> 
                    <label for="title"> Title </label>
                        <input type="text" name="title" value="<?php echo $pizza->title; ?>" >
                </div>
                <div class="input"> 
                    <label for="base"> Base </label>
                        <input type="text" name="base" value="<?php echo $pizza->base; ?>" 
                        >
                </div>
                <div class="input"> 
                    <label for="description"> Description </label>
                    <input type="text" name="description" value="<?php echo $pizza->description; ?>">
                </div>
                <div class="input">
                    <label for="price"> Prix </label>
                        <input type="number" name="price" value="<?php echo $pizza->price ?>">
                        <input type="submit" value="Validation de la pizza" name="submit" class="ajout-btn"> 
                </div>
            </form>
