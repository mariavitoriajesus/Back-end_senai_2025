<?php
include '../database/db.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$receita = $_POST['receitatexto'];
$autor = $_POST['autor'];
$tipo = $_POST['tipo_receita'];

$sql = "UPDATE receitas SET 
    titulo='$titulo', descricao='$descricao', receitatexto='$receita',
    autor='$autor', tipo_receita='$tipo'
    WHERE id=$id";

$conn->query($sql);
header('Location: ../index.php');
?>
