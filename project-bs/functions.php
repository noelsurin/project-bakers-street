<?php
    //require MySQL Connection
    require('database/DBController.php');

    //require MySQL Connection
    require('database/Product.php');

    //require MySQL Connection
    require ('database/Bestseller.php');

    //DBController object
    $db = new DBController();

//product object
$product = new Product($db);

    //bestseller object
    $bestseller = new Bestseller($db);

?>
