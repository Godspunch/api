<?php
    require("model.php");
    $products = new Model;
    $allproducts = $products->getData();

    require("view.php");

