<?php 

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

header('Location: http://localhost/TiSoleyBis/');
exit();

}

?>

            <h2 class="titre"> Ajout d'une pizza </h2>
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


<?php 



?>