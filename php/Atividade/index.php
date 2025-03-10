<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
<h1>Entre com os seus dados</h1>
    <form action="cotacao.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" required><br><br>

        <label for="idade">Idade: </label>
        <input type="number" name="idade" required><br><br>

        <input type="submit" value="Ver Cotação do Dólar">
    </form>

    <br>

    <form action="idade.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" required><br><br>

        <label for="idade">Idade: </label>
        <input type="number" name="idade" required><br><br>

        <input type="submit" value="Verificar Idade Permitida">
    </form>

    <br>

    <form action="aleatorio.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" required><br><br>

        <label for="idade">Idade: </label>
        <input type="number" name="idade" required><br><br>

        <input type="submit" value="Gerar Número Aleatório">
    </form>
    
</body>
</html>