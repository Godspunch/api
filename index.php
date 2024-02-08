<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <?php
        require("model.php");
        $products = new Model;
        $allproducts = $products->getData();
    ?>
    <h1>Ürünler</h1>
    <?php foreach($allproducts as $product): ?>
    <h2><?= htmlspecialchars($product["title"]); ?></h2>
    <p><?= htmlspecialchars($product["description"]); ?> </p>
    <?php endforeach; ?>
</body>
</html>