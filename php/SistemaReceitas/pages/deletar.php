<?php
include '../database/db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn->query("DELETE FROM receitas WHERE id = $id");
}

header("Location: ../index.php");
exit;

