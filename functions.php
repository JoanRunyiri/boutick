<?php
//require sql connection

require ("database/dbcontroller.php");

//require product class

require ("database/product.php");

//require cart class

require ("database/cart.php");


//DBcontroller object
$db = new dbcontroller();

//product object
$product= new product($db);
$product_shuffle = $product->getData();
$product_view = $product->getData();
count($product->getData('cart'));
array_sum($product->getData('cart'));

//Cart Object
$cart = new cart($db);

include ('database/user.php');
$user = new user($db);

$con = $db->return_conn();



?>
