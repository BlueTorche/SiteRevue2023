<?php
require 'vendor/autoload.php';
session_start();

// DEPRECATED
$cart = new \App\Cart(); //deprecated
$cart->add("Place parterre",60.00,2); //deprecated
$cart->add("Place balcon",50.00,3); //deprecated
// DEPRECATED

$quantity = [2,3];
$places = ["parterre C27","parterre C29"];

$_SESSION['quantity'] = $quantity;
$_SESSION['places'] = $places;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>test</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1> Panier</h1>
<div class="list mb-2">
    <?php foreach($cart->getProducts() as $product):?>
    <div class="list-group-item d-flex justify-content-between align-items-center">
        <div>
            <?= $product['name']?>
        </div>
        <div class="d-flex align-items-center">
            <div class="3-m">
                <?= $product['price']?> €
            </div>
            <div class="3-m">
                <?= $product['quantity']?>
            </div>
        </div>
    </div>
    <?php endforeach?>
</div>

<div>
    <a href="pay.php" class="btn btn-primary">Payer</a>
</div>

</body>
</html>
