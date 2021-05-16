<?php

    //require MySQL Connection
    require('database/DBController.php');

    //require Product Connection
    require('database/Product.php');

    //require Bestseller Connection
    require ('database/Bestseller.php');

    //require Browse Connection
    require ('database/Browse.php');

    //require Cart Connection
    require ('database/Cart.php');

    //DBController object
    $db = new DBController();

    //product object
    $product = new Product($db);

    $product_shuffle = $product->getData();

    //bestseller object
    $bestseller = new Bestseller($db);

    //browse object
    $browse = new Browse($db);

    //cart object
    $Cart = new Cart($db);

?>
