<?php
    class Products {
        public function index() {
            require("./src/models/product.php");
            $products = new Model;
            $allproducts = $products->getData();
        
            require("./views/product_index.php");        
        }
        public function show() {
            require("./views/product_view.php");
        }
    }