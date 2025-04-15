<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Receita</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="container">
    <h1>Editar Receita</h1>

    <form action="editar.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $receita['id'] ?>">

        <div class="form-group">
            <label for="titulo">Título</label>
            <input id="titulo" name="titulo" value="<?= $receita['titulo'] ?>" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea id="descricao" name="descricao" rows="2" required><?= $receita['descricao'] ?></textarea>
        </div>

        <div class="form-group">
            <label for="receitatexto">Passo a Passo</label>
            <textarea id="receitatexto" name="receitatexto" rows="5" required><?= $receita['receitatexto'] ?></textarea>
        </div>

        <div class="form-group">
            <label for="autor">Autor</label>
            <input id="autor" name="autor" value="<?= $receita['autor'] ?>" required>
        </div>

        <div class="form-group">
            <label for="tipo_receita">Tipo</label>
            <input id="tipo_receita" name="tipo_receita" value="<?= $receita['tipo_receita'] ?>">
        </div>

        <div class="form-group">
            <label for="imagem">Nova Imagem (opcional)</label>
            <input id="imagem" type="file" name="imagem">
        </div>

        <div class="form-actions">
            <button type="submit">Salvar</button>
            <a href="../index.php" class="button-secondary">Cancelar</a>
        </div>
    </form>
</div>

</body>
</html>