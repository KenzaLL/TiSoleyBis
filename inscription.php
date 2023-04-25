
<?php 
    require_once "inscriptionbis.php"

?>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body class="container">
    
<form method="post" action="connexion.php">

<div class="border"> 
<h2 class="titre"> Création de votre compte </h2>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Nom </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="lastname" required>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Prénom </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="firstname" required>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Adresse email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="email" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> Mot de passe </label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Numéro de téléphone </label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="numberphone" required>
</div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"> J'accepte les conditons </label>
  </div>

  <div class="mb-3">
  <button type="submit" class="btn bg-secondary text-white" name="submit">
  <a href="inscription.php" class="btn-compte"> Vous avez déjà un compte ? cliquez ici ! </a> 
</button>
</div>
</div>

</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">

</script>
</body>
</html>