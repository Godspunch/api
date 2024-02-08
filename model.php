<?php
    class Model {
        public function getData() : array {
            $host = "localhost";
            $user = "root";
            $passw = "";
            $db_name = "api";
        
            try{
                $conn = new PDO("mysql:host={$host};dbname={$db_name};charset=utf8", $user, $passw);
            } catch (PDOException $e) {
                echo "Bağlantı hatası: " . $e->getMessage();
            }
        
            $stmt = $conn->query("SELECT * FROM products");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }