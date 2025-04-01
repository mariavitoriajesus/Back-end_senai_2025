<?php
include 'include/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $avaliacao = $_POST['avaliacao'];
    $imagem = $_FILES['imagem']['name'];
    $target = 'uploads/' . basename($imagem);

    // Mover a imagem para o diretório de uploads
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $target)) {
        $sql = "INSERT INTO livros (nome, imagem, descricao, avaliacao) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $imagem, $descricao, $avaliacao]);

        header("Location: index.php");
    } else {
        echo "Erro ao fazer upload da imagem.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cadastrar</title>
</head>
<body>
    <header>        
        <a href="index.php">Livro</a> <br><br>
        <a href="editar.php">Editar Livro</a>
    </header>
<h1>Cadastrar Novo Livro</h1>
    <form action="index.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <label>Imagem (URL):</label>
        <input type="text" name="imagem" required>
        <label>Descrição:</label>
        <textarea name="descricao" required></textarea>
        <label>Avaliação (1 a 5):</label>
        <input type="number" name="avaliacao" min="1" max="5" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>