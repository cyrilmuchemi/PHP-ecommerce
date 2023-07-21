<?php
require ('../database/DBController.php');
require ('../database/Product.php');

$db = new DBController;
$product = new Product($db);

if(isset($_POST['itemid'])){
    $result = $product->getProducts($_POST['itemid']);
    header('Content-Type: application/json');
    echo json_encode($result);
}