<?php
include '../database/db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM receitas WHERE id=$id");
header('Location: ../index.php');
?>
