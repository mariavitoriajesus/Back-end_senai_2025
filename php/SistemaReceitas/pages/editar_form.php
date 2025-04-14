<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Receita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <h1 class="mb-4">Cadastrar Receita</h1>

    <form action="cadastrar.php" method="post" enctype="multipart/form-data" class="card p-4 bg-white shadow-sm">
        <div class="mb-3">
            <label class="form-label">Título</label>
            <input name="titulo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <textarea name="descricao" class="form-control" rows="2" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Texto da Receita</label>
            <textarea name="receitatexto" class="form-control" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Autor</label>
            <input name="autor" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo (Doce/Salgado)</label>
            <input name="tipo_receita" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Imagem</label>
            <input type="file" name="imagem" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="../index.php" class="btn btn-secondary">Voltar</a>
    </form>
</div>

</body>
</html>
