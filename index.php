<?php
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
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Ürünler</h1>
    <?php foreach($products as $product): ?>
    <h2><?= htmlspecialchars($product["title"]); ?></h2>
    <p><?= htmlspecialchars($product["description"]); ?> </p>
    <?php endforeach; ?>
</body>
</html>