<?php 

ob_start();
require './Models/inscriptionbis.php';

?>


<div class="body inscription pt-5 w-100">
    <form  method="post" action="./Models/inscriptionbis.php">
      <div class="formulaireInscription border mb-5 w-75 m-auto"> 
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
      <div class="inscriptionCaptcha g-recaptcha" data-sitekey="6Ld1BgQnAAAAAI02vgXFQcVKhwgOstTGk5z7n48_"></div>
            <br/>
        <input type="submit" class="btn text-white mt-2 btn-connexion" value="Je m'inscris" name="submit">
      </div>
      </div>
      </div>
    </form>

    
    <?php 
$content = ob_get_clean();

$title = "Inscription";

require 'base.view.php';


?>