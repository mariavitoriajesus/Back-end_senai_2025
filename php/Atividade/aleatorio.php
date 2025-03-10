<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $numero_aleatorio = rand(1, 100);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatório</title>
</head>
<body>
    <h1>Número Aleatório</h1>
    <p>Olá, <?php echo htmlspecialchars($nome); ?>! O número aleatório gerado é: <?php echo $numero_aleatorio; ?>.</p>
</body>
</html>