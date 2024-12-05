<?php

require_once 'Cart.php';
require_once 'MarketStall.php';
require_once './products/Orange.php';
require_once './products/Kiwi.php';
require_once './products/Raspberry.php';
require_once './products/Potato.php';
require_once './products/Pepper.php';
require_once './products/Cherry.php';

$orange = new Orange();
$kiwi = new Kiwi();
$cherry = new Cherry();
$potato = new Potato();
$raspberry = new Raspberry();
$pepper = new Pepper();

$marketStall1 = new MarketStall([
    'Orange' => $orange,
    'Kiwi' => $kiwi,
    'Cherry' => $cherry,
]);

$marketStall2 = new MarketStall([
    'Potato' => $potato,
    'Raspberry' => $raspberry,
    'Pepper' => $pepper,
]);

$cart = new Cart();

$cart->addToCart($marketStall1->getItem('Orange', 2));
$cart->addToCart($marketStall1->getItem('Cherry', 3));
$cart->addToCart($marketStall2->getItem('Potato', 4));
$cart->addToCart($marketStall2->getItem('Pepper', 1));
$cart->addToCart($marketStall2->getItem('Raspberry', 5));


$cart->printReceipt();
