<?php
    ob_start();
    include ("header.php");
?>

<?php
    count($product->getData('cart')) ? include("Partials/_cart.php") : include("Partials/notFound/_cart_notfound.php");
    count($product->getData('wishlist')) ? include("Partials/_wishlist.php") : include("Partials/notFound/_wishlist_notfound.php");
    include("Partials/_wishlist.php"); 
    include("Partials/_new-phones.php"); 
?>

<?php
    include ("footer.php")
?>