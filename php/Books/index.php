<?php
include 'include/db.php';
    $sql = "SELECT * FROM livros";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Bookstore</title>
</head>
<body>
    <header>        
        <a href="cadastrar.php">Cadastrar Novo Livro</a> <br><br>
        <a href="editar.php">Editar Livro</a>
        <h1>Lista de Livros</h1>
    </header>

    <section class="livros-lista">
        <?php foreach ($livros as $livro): ?>
            <div class="livro">
                <img src="uploads/<?= $livro['imagem']; ?>" alt="<?= $livro['nome']; ?>">
                <h2><?= $livro['nome']; ?></h2>
                <p><?= $livro['descricao']; ?></p>
                <p>Avaliação: <?= $livro['avaliacao']; ?>/5</p>
                <a href="editar.php?id=<?= $livro['id']; ?>">Editar</a>
            </div>
        <?php endforeach; ?>
    </section>
    
</body>
</html>