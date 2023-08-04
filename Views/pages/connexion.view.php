<?php

ob_start();


require './Models/connexion.php';
?>


<div class="block-admin body pt-5 w-100">
        <div class="border p-4 mt-3 colore"> 
    <h2 class="titre text-white" > Connectez vous </h2>
    <form id="formi" method="post" action="/TiSoleyBis/connexion">
        <div class="mb-4 my-5 text-white">
            <label for="exampleInputEmail1" class="form-label"> Adresse email </label>
            <input type="email" placeholder="Entrez votre email" class="form-control" id="exampleInputEmail" name="email" required>
            </div>
        <div class="mb-3 text-white">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" placeholder="Entrez votre mot de passe" class="form-control" id="exampleInputPassword1" name="password" required>
        </div>

        <div class="g-recaptcha" data-sitekey="6Ld1BgQnAAAAAI02vgXFQcVKhwgOstTGk5z7n48_"></div>
            <br/>
        <input type="submit" class="btn text-white mt-2 btn-connexion" value="Je me connecte" name="submit">

            
    </form>
            <button type="submit" class="btn text-white mt-3  btn-connexion" name="submit"> 
            <a href="inscription" class="btn-compte">  Vous n'avez pas de compte ? cliquez ici ! </a> 
            </button>
        </div>
</div>
</div>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
    </script>


<?php 

$content = ob_get_clean();

$title = "Connexion";

require 'base.view.php';


?>


