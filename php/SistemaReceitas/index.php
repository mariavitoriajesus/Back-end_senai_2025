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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <h1 class="mb-4">Receitas</h1>

    <div class="mb-3">
        <a href="?tipo=Doce" class="btn btn-outline-primary btn-sm">Doces</a>
        <a href="?tipo=Salgado" class="btn btn-outline-secondary btn-sm">Salgados</a>
        <a href="index.php" class="btn btn-outline-dark btn-sm">Todas</a>
        <a href="pages/formulario.php" class="btn btn-success btn-sm float-end">Nova Receita</a>
    </div>

    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="card-title">
                    <a href="pages/receita.php?id=<?= $row['id'] ?>">Ver Receita</a>
                </h4>
                <p class="card-text"><?= $row['descricao'] ?></p>
                <span class="badge bg-info"><?= $row['tipo_receita'] ?></span>
            </div>
        </div>
    <?php endwhile; ?>
</div>

</body>
</html>
