<?php
    class Controller {
        public function index() {
            require("model.php");
            $products = new Model;
            $allproducts = $products->getData();
        
            require("view.php");        
        }
    }