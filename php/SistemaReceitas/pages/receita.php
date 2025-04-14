<?php
include 'db.php';
$id = $_GET['id'];
$receita = $conn->query("SELECT * FROM receitas WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= $receita['titulo'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <div class="card p-4 shadow-sm">
        <h1><?= $receita['titulo'] ?></h1>
        <p class="text-muted">Autor: <?= $receita['autor'] ?> | Tipo: <?= $receita['tipo_receita'] ?></p>
        <p><?= $receita['descricao'] ?></p>
        <pre class="bg-light p-3 border rounded"><?= $receita['receitatexto'] ?></pre>

        <?php if ($receita['imagem']): ?>
            <img src="<?= $receita['imagem'] ?>" class="img-fluid mt-3 rounded" style="max-width: 400px;">
        <?php endif; ?>

        <div class="mt-4">
            <a href="editar_form.php?id=<?= $id ?>" class="btn btn-warning">Editar</a>
            <a href="deletar.php?id=<?= $id ?>" onclick="return confirm('Deseja excluir?')" class="btn btn-danger">Deletar</a>
            <a href="../index.php" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>

</body>
</html>
