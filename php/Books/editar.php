<?php
include "include/db.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM livros WHERE id = $id";
    $result = $conn->query($sql);
    $livro = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $imagem = $_POST["imagem"];
    $descricao = $_POST["descricao"];
    $avaliacao = $_POST["avaliacao"];

    $sql = "UPDATE livros SET nome='$nome', imagem='$imagem', descricao='$descricao', avaliacao='$avaliacao' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Livro atualizado com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Editar</title>
</head>
<body>
    <header>        
        <a href="cadastrar.php">Cadastrar Novo Livro</a> <br><br>
        <a href="index.php">Livro</a>
    </header>
<h1>Editar Livro</h1>
    <form action="index.php" method="post">
        <input type="hidden" name="id" value="<?php echo $livro['id']; ?>">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $livro['nome']; ?>" required>
        <label>Imagem (URL):</label>
        <input type="text" name="imagem" value="<?php echo $livro['imagem']; ?>" required>
        <label>Descrição:</label>
        <textarea name="descricao" required><?php echo $livro['descricao']; ?></textarea>
        <label>Avaliação (1 a 5):</label>
        <input type="number" name="avaliacao" min="1" max="5" value="<?php echo $livro['avaliacao']; ?>" required>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>