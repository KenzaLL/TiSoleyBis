<?php 


ob_start();


?> 


<div class='body'>
<div class="border m-5 p-4 colore"> 
<h2 class="titre text-white" > Connectez vous </h2>

<form method="post" action="accueil">
    <div class="mb-4 my-5 text-white">
        <label for="exampleInputEmail1" class="form-label"> Adresse email </label>
            <input type="email" placeholder="Entrez votre adresse email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="email" required>
    </div>
    <div class="mb-3 text-white">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" placeholder="Entrez votre mot de passe" class="form-control" id="exampleInputPassword1" name="password" required>
    </div>
    <button type="submit" class="btn text-white mt-2 btn-connexion" name="submit"> Je me connecte </button>
</form>
<button type="submit" class="btn text-white mt-3  btn-connexion" name="submit"> 
    <a href="inscription" class="btn-compte">  Vous n\'avez pas de compte ? cliquez ici ! </a> 
</button>
</div>
</div>



<?php 

$content = ob_get_clean();

$title = "Connexion";

require './Views/base.php';


?>


