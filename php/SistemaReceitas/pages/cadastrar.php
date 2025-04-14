<?php
include '../database/db.php';

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$receita = $_POST['receitatexto'];
$autor = $_POST['autor'];
$tipo = $_POST['tipo_receita'];

$imagem = null;
if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
    $imagem = 'uploads/' . basename($_FILES['imagem']['name']);
    move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
}

$sql = "INSERT INTO receitas (titulo, descricao, receitatexto, autor, tipo_receita, imagem)
        VALUES ('$titulo', '$descricao', '$receita', '$autor', '$tipo', '$imagem')";

$conn->query($sql);
header('Location: ../index.php');
?>
