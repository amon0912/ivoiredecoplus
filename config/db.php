<?php
$dsn = 'mysql:dbname=ivoiredeco;host=localhost';
$user = 'root';
$password = '';

try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}
