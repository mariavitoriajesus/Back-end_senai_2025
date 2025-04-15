<?php
include '../database/db.php';
$id = $_GET['id'];
$receita = $conn->query("SELECT * FROM receitas WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= $receita['titulo'] ?></title>
    <link rel="stylesheet" href="../assets/css/style.css"> 
</head>
<body>

<div class="container">
    <div class="card">
        <h1><?= $receita['titulo'] ?></h1>
        <p class="info">Autor: <?= $receita['autor'] ?> | Tipo: <?= $receita['tipo_receita'] ?></p>
        <p><?= $receita['descricao'] ?></p>
        
        <div class="receita-passo">
            <pre><?= $receita['receitatexto'] ?></pre>
        </div>

        <?php if ($receita['imagem']): ?>
            <img src="<?= $receita['imagem'] ?>" class="receita-img">
        <?php endif; ?>

        <div class="form-actions">
            <a href="editar_form.php?id=<?= $id ?>" class="button-warning">Editar</a>
            <a href="deletar.php?id=<?= $id ?>" onclick="return confirm('Deseja excluir?')" class="button-danger">Deletar</a>
            <a href="../index.php" class="button-secondary">Voltar</a>
        </div>
    </div>
</div>

</body>
</html>
