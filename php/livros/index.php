<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Livros</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h1 class="text-center mb-4">Entre Sombras & Páginas</h1>
    <div class="row">
    <?php
        $livros = [
            [
                'titulo' => 'Crepúsculo',
                'autor' => 'Stephenie Meyer',
                'descricao' => 'O início da história de amor entre Bella Swan e Edward Cullen.',
                'imagem' => 'https://via.placeholder.com/150'
            ],
            [
                'titulo' => 'Lua Nova',
                'autor' => 'Stephenie Meyer',
                'descricao' => 'A continuação do romance, onde Bella enfrenta uma perda devastadora.',
                'imagem' => 'https://via.placeholder.com/150'
            ],
            [
                'titulo' => 'Eclipse',
                'autor' => 'Stephenie Meyer',
                'descricao' => 'Bella deve escolher entre seu amor por Edward e sua amizade com Jacob.',
                'imagem' => 'https://via.placeholder.com/150'
            ],
            [
                'titulo' => 'Amanhecer',
                'autor' => 'Stephenie Meyer',
                'descricao' => 'O desfecho da saga com o casamento de Bella e Edward e o nascimento de sua filha.',
                'imagem' => 'https://via.placeholder.com/150'
            ]
        ];

        foreach ($livros as $livro): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="<?= $livro['imagem']; ?>" class="card-img-top" alt="<?= $livro['titulo']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $livro['titulo']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autor: <?= $livro['autor']; ?></h6>
                        <p class="card-text"><?= $livro['descricao']; ?></p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
