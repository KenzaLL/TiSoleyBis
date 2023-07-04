<?php

ob_start();
?>


<div class="col-md-8 order-md-1">
  <h4 class="mb-3">Billing address</h4>
  <form class="needs-validation" novalidate="" method="POST" action="info_commande">
    <input type="hidden" name="action" value="save">
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="firstName">First name</label>
        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="firstname">
        <div class="invalid-feedback">
          Valid first name is required.
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="lastName">Last name</label>
        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" name="lastname">
        <div class="invalid-feedback">
          Valid last name is required.
        </div>
      </div>
    </div>

    <div class="mb-3">
      <label for="username">Phone</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">@</span>
        </div>
        <input type="text" class="form-control" id="phone" placeholder="numberphone" required="" name="numberphone">
        <div class="invalid-feedback" style="width: 100%;">
          Your numberphone is required.
        </div>
      </div>
    </div>

    <label for="meeting-time">Choose a time for your appointment:</label>

    <input type="datetime-local" id="meeting-time" name="date">



    <div class="mb-3">
      <label for="email">Email <span class="text-muted">(Optional)</span></label>
      <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
      <div class="invalid-feedback">
        Please enter a valid email address for shipping updates.
      </div>
    </div>

    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
  </form>
</div>


<?php
$content = ob_get_clean();

$title = "Commande";

require 'base.view.php';

?>