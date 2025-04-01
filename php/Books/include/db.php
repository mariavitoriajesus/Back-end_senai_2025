<?php
// Database connection settings
$host = 'localhost'; 
$dbname = 'books_db';
$username = 'root'; 
$password = ''; 

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
        exit();
    }
?>