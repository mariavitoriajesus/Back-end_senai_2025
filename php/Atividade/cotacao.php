<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $cotacao_dolar = 5.00; // Cotação fictícia
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotação do Dólar</title>
</head>
<body>
    <h1>Cotação do Dólar</h1>
    <p>Olá, <?php echo htmlspecialchars($nome); ?>! A cotação atual do dólar para real é: R$ <?php echo number_format($cotacao_dolar, 2, ',', '.'); ?>.</p>
</body>
</html>