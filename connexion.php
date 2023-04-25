<?php 

session_start();

// Information de connexion à la base de données
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "TiSoley";

// Création de la connexion
$connexion = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$connexion) {
  die("La connexion a échoué : " . mysqli_connect_error());
}


// chercher et stocker 
if (isset($_POST['submit'])) { 

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // recupération des données bien enregistrer

    $sql = "select * from users";
    $results = $connexion->query($sql);

    if ($results->num_rows > 0) { 
        while ($row = $results->fetch_assoc()) {
            if($row['email'] == $email && $row['password'] == $password) { 
                $_SESSION['connecter']=$row['firstname'];
                echo 'cest bon'. '<br>'  ;
                // redirection
                header('Refresh:0; http://localhost/TiSoleyBis/');
                exit();
        }   else { 
            echo 'erreur'. '<br>' ;
        }
    }
}
    
// Fermeture de la connexion à la base de données (important a retenir !!!!)
mysqli_close($connexion);
}

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
<body>


<nav class="navbar navbar-expand-lg nav-b">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> <img src="./images/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-a" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Qui sommes nous ?
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#"> Notre histoire</a></li>
                      <li><a class="dropdown-item" href="#">Nos partenaires </a></li>
                      <li><a class="dropdown-item" href="#"> Terre d'essences</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-a" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Commande en ligne
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#"> Notre carte </a></li>
                    </ul>
                  </li>
              <li class="nav-item">
                <a class="nav-link nav-a" href="#">Contact</a>
              </li>
              <?php
            if(isset($_SESSION['connecter']))
           {
             echo '<a class="nav-link nav-a deco" href="deconnexion.php">Déconnexion</a> <a class="nav-link nav-a deco" href="">'.$_SESSION["connecter"].'</a> ';
            } else { echo '<a class="nav-link nav-a" href="connexion.php">Connexion</a>';
            } 
              ?> 
              
            </ul>
          </div>
        </div>
  

  
      </div>
    </div>
  </div>
</nav>





<div class="border m-5 p-5"> 
<h2 class="titre text-white" > Connectez vous </h2>

<form method="post" action="connexion.php">
  <div class="mb-4 my-5 text-white">
    <label for="exampleInputEmail1" class="form-label"> Adresse email </label>
    <input type="email" placeholder="Entrez votre adresse email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="email" required>
  </div>
  <div class="mb-3 text-white">
    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="password" placeholder="Entrez votre mot de passe" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
  <div class="mb-3 form-check text-white">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"> J'accepte les conditions </label>
  </div>
  <button type="submit" class="btn bg-secondary text-white" name="submit"> Je me connecte </button>
</form>



<button type="submit" class="btn bg-secondary text-white" name="submit">
  <a href="inscription.php" class="btn-compte"> Vous n'avez pas de compte ? cliquez ici ! </a> 
</button>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">

</script>
</body>
</html>