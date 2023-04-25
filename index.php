<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
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


</header>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js/bootstrap.bundle.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

<script src="script.js"></script>
</body>


</html>