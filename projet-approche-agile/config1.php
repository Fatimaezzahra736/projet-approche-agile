<?php
$host = 'localhost'; // Adresse du serveur
$db = 'database'; // Nom de la base de données
$user = 'username'; // Nom d'utilisateur de la base de données
$pass = 'password'; // Mot de passe de la base de données
$charset = 'fati2003';

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
