<?php

ob_start();
?>

<div class="d-flex justify-content-center p-footer">
<div class="col-md-8 order-md-1 border">
  <h4 class="mb-3 text-white">Entrez vos informations pour le retrait de la commande</h4>
  <h5 class="mb-3 text-white pb-4"> La commande est à récupérer sur place et le paiement est uniquement en espèces</h5>
  <form class="needs-validation" novalidate="" method="POST" action="info_commande">
    <input type="hidden" name="action" value="save">
    <div class="row">
      <div class="col-md-6 mb-3 text-white">
        <label for="firstName"> Prénom </label>
        <input type="text" class="form-control" id="firstName" placeholder="Entrez votre prénom" value="" required="" name="firstname">
        <div class="invalid-feedback">
          Valid first name is required.
        </div>
      </div>
      <div class="col-md-6 mb-3 text-white pb-2">
        <label for="lastName"> Nom de famille </label>
        <input type="text" class="form-control" id="lastName" placeholder="Entrez votre nom de famille" value="" required="" name="lastname">
        <div class="invalid-feedback">
          Valid last name is required.
        </div>
      </div>
    </div>

    <div class="mb-3 text-white pb-2">
      <label for="username">Numéro de téléphone</label>
      <div class="input-group input-info">
        <div class="input-group-prepend">
        
        </div>
        <input type="text" class="form-control" id="phone" placeholder="Entrez votre numéro de téléphone" required="" name="numberphone">
        <div class="invalid-feedback" style="width: 100%;">
          Your numberphone is required.
        </div>
      </div>
    </div>

    
    <div class="mb-3 text-white pb-3">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
      <div class="invalid-feedback">
        Please enter a valid email address for shipping updates.
      </div>
    </div>

    <label for="meeting-time" class="text-white pt-2 pb-2 p-commande"> Heure de commande : </label>

    <input type="datetime-local" id="meeting-time" name="date" class="border-time">




    <hr class="mb-4">
    <button class="btn border text-white" type="submit">Confirmer la commande et vos informations </button>
  </form>
</div>
</div>

<?php
$content = ob_get_clean();

$title = "Commande";

require 'base.view.php';

?>