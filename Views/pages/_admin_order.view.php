<li class="order">
    <div class="order-details">
    <span>Commande <?= $key + 1 ?></span>
    <span class="order-status">En cours</span>
    </div>
    <div class="order-details">
    <span>Retrait</span>
    <span class="order-status"><?= (new \DateTime($commande->date_time))->format('d/m/Y à H:i') ?></span>
    </div>
    <p>Détails de la commande:</p>
    <ul>
    <li><?= $commande->firstname ?> <?= $commande->lastname ?>: <?= $commande->numberphone ?></li>
    <?php foreach($commande->products as $product): ?>
        <li><?= $product->title ?>: <?= $product->quantite ?></li>
    <?php endforeach; ?>
    </ul>
    
</li>