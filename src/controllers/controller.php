<?php
    class Controller {
        public function index() {
            require("./src/models/model.php");
            $products = new Model;
            $allproducts = $products->getData();
        
            require("./views/view.php");        
        }
    }