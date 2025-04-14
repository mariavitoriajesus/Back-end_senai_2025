<?php
$host = "localhost";
$user = "root"; // ou o usuário do seu MySQL
$pass = "";     // ou a senha
$db = "receitas_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}
?>
