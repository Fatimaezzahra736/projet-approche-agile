<?php
require 'config.php';
$stmt = $pdo->query('SELECT * FROM products');

$products = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits Alimentaires</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Liste des Produits Alimentaires</h1>
</header>
<section class="trending-product" id="trending">
    <div class="products">
        <?php foreach ($products as $product): ?>
            <div class="row">
                <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="" class="row-img">
                <div class="product-text"><h5>New</h5></div>
                <div class="ratting">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <i class="bx bx-star"></i>
                    <?php endfor; ?>
                </div>
                <div class="price">
                    <h4><?php echo htmlspecialchars($product['name']); ?></h4>
                    <p><?php echo htmlspecialchars($product['price']); ?> DH</p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
</body>
</html>
<?php
$host = 'localhost';
$db = 'proteingo';
$user = 'fati';
$pass = 'fati2003';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Connexion réussie!";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>

