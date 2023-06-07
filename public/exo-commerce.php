<?php

use App\Commerce\Cart;
use App\Commerce\Product;

require '../vendor/autoload.php';

$product = new Product("Socks", 5);
$product2 = new Product("Mittens", 14);
$product3 = new Product("Jeans", 55);

$cart = new Cart();

$cart->addToCart($product);
$cart->addToCart($product2);

$cart->display();