<?php
include 'database/db.php';
$filtro = $_GET['tipo'] ?? '';
$sql = $filtro ? "SELECT * FROM receitas WHERE tipo_receita='$filtro'" : "SELECT * FROM receitas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Receitas</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">
    <h1>Receitas Cadastradas</h1>

    <div class="form-actions">
        <a href="paginas/formulario.php" class="button-secondary">Cadastrar Nova Receita</a>
    </div>

    <?php while ($r = $result->fetch_assoc()): ?>
        <div class="card">
            <h2><?= $r['titulo'] ?></h2>
            <p><?= $r['descricao'] ?></p>
            <p class="info">Autor: <?= $r['autor'] ?> | Tipo: <?= $r['tipo_receita'] ?></p>
            <a href="paginas/visualizar.php?id=<?= $r['id'] ?>" class="button-secondary">Ver Receita</a>
        </div>
    <?php endwhile; ?>
</div>

</body>
</html>
