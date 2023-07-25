<?php

require ('database/DBController.php');
require ('database/Product.php');
require ('database/Cart.php');
require ('database/Wishlist.php');


$db = new DBController;

$product = new Product($db);
$product_shuffle = $product->getData();

$cart = new Cart($db);
$wishlist = new Wishlist($db);


