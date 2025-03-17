<?php
session_start(); // Inicia a sessão

// Inicializa o carrinho se não existir ou se for sobrescrito incorretamente
if (!isset($_SESSION['carrinho']) || !is_array($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Lista de produtos disponíveis com preços
$produtos = [
    ['nome' => 'Notebook', 'preco' => 3500.00],
    ['nome' => 'Mouse', 'preco' => 50.00],
    ['nome' => 'Teclado', 'preco' => 120.00],
    ['nome' => 'Monitor', 'preco' => 900.00],
    ['nome' => 'Fone de Ouvido', 'preco' => 250.00]
];

// Adiciona um produto ao carrinho
if (isset($_GET['produto'])) {
    $produtoSelecionado = $_GET['produto'];
    foreach ($produtos as $produto) {
        if ($produto['nome'] == $produtoSelecionado) {
            $_SESSION['carrinho'][] = $produto; // Adiciona ao array corretamente
        }
    }
}

// Limpa o carrinho
if (isset($_GET['limpar'])) {
    $_SESSION['carrinho'] = []; // Reseta corretamente como array vazio
}

// Calcula o total do carrinho
$total = 0;
foreach ($_SESSION['carrinho'] as $item) {
    if (is_array($item) && isset($item['preco'])) {
        $total += $item['preco'];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">🛒 Carrinho de Compras</h2>

    <div class="row">
        <div class="col-md-6">
            <h4>📌 Produtos Disponíveis</h4>
            <ul class="list-group">
                <?php foreach ($produtos as $produto): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <strong><?= htmlspecialchars($produto['nome']) ?></strong>
                        <span class="badge bg-primary">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></span>
                        <a href="?produto=<?= urlencode($produto['nome']) ?>" class="btn btn-success btn-sm">Adicionar</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="col-md-6">
            <h4>🛍️ Seu Carrinho</h4>
            <?php if (empty($_SESSION['carrinho'])): ?>
                <p class="text-muted">Seu carrinho está vazio.</p>
            <?php else: ?>
                <ul class="list-group">
                    <?php foreach ($_SESSION['carrinho'] as $item): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= htmlspecialchars($item['nome']) ?>
                            <span class="badge bg-secondary">R$ <?= number_format($item['preco'], 2, ',', '.') ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <h5 class="mt-3">💰 Total: <strong>R$ <?= number_format($total, 2, ',', '.') ?></strong></h5>
                <a href="?limpar=true" class="btn btn-danger mt-3">🗑️ Limpar Carrinho</a>
            <?php endif; ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
