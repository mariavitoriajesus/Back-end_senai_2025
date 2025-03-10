<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $permitido = $idade >= 18 ? "permitido" : "não permitido";
}
?>
<!-- idade.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $permitido = $idade >= 18 ? "permitido" : "não permitido";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Idade</title>
</head>
<body>
    <h1>Verificação de Idade</h1>
    <p>Olá, <?php echo htmlspecialchars($nome); ?>! Sua idade é <?php echo $idade; ?> anos. O acesso é <?php echo $permitido; ?>.</p>
</body>
</html>
