<?php 

ob_start();
require './Models/inscriptionbis.php';

?>


<div class="body p-5">
    <form method="post" action="./Models/inscriptionbis.php">
      <div class="border m-5 p-4"> 
        <h2 class="titre text-white"> Création de votre compte </h2>
      <div class="mb-3 text-white">
          <label for="exampleInputEmail1" class="form-label"> Nom </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="lastname">
      </div>
      <div class="mb-3 text-white">
          <label for="exampleInputEmail1" class="form-label"> Prénom </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="firstname" required>
      </div>
      <div class="mb-3 text-white">
          <label for="exampleInputEmail1" class="form-label"> Adresse email </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="email" required>
      </div>
      <div class="mb-3 text-white">
          <label for="exampleInputPassword1" class="form-label"> Mot de passe </label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
      </div>
      <div class="mb-3 text-white">
          <label for="exampleInputEmail1" class="form-label"> Numéro de téléphone </label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="numberphone" required>
      </div>

      <div class="form-check text-white">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1"> J'accepte les conditons </label>
      </div>
      <div class="mb-2 mt-3">
        <button type="submit" class="btn text-white btn-connexion" name="submit"> Je m'inscris </button>
      </div>
      </div>
      </div>
      </div>
    </form>

    <?php 
$content = ob_get_clean();

$title = "Inscription";

require 'base.view.php';


?>