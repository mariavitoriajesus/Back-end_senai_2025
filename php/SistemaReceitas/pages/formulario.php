<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Receita</title>
    <link rel="stylesheet" href="../assets/css/style.css"> 
</head>
<body>

<div class="container">
    <h1>Cadastrar Receita</h1>

    <form action="cadastrar.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="titulo">Título</label>
            <input id="titulo" name="titulo" type="text" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea id="descricao" name="descricao" rows="2" required></textarea>
        </div>

        <div class="form-group">
            <label for="receitatexto">Passo a Passo da Receita</label>  
            <textarea id="receitatexto" name="receitatexto" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="autor">Autor</label>
            <input id="autor" name="autor" type="text" required>
        </div>

        <div class="form-group">
            <label for="tipo_receita">Tipo (Doce/Salgado)</label>
            <input id="tipo_receita" name="tipo_receita" type="text">
        </div>

        <div class="form-group">
            <label for="imagem">Imagem</label>
            <input id="imagem" type="file" name="imagem">
        </div>

        <div class="form-actions">
            <button type="submit">Cadastrar</button>
            <a href="../index.php" class="button-secondary">Voltar</a>
        </div>
    </form>
</div>

</body>
</html>
