<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução</title>
</head>
<body>
    <h1>Olá, mundo. Começando mais uma vez!!</h1>
    <?php
        echo "Hello World! <br>";
        $nome = "Maria";
        $idade = 21;
        $altura = 1.64;
        echo "O nome é $nome, tem $idade anos e mede $altura metros. <br>";

        $num1 = 10;
        $num2 = 20;
        $soma = $num1 + $num2;
        echo "A soma de $num1 + $num2 é igual a $soma <br>";

        $num1 = 10;
        $num2 = 5;
        $subtracao = $num1 - $num2;
        echo "A subtração de $num1 - $num2 é igual a $subtracao <br>";

        $num1 = 5;
        $num2 = 2;
        $multiplicacao = $num1 * $num2;
        echo "A multiplicação de $num1 * $num2 é igual a $multiplicacao <br>";

        $num1 = 10;
        $num2 = 2;
        $divisao = $num1 / $num2;
        echo "A divisão de $num1 / $num2 é igual a $divisao <br>";

        echo date('d/m/Y H:i');
        echo "<br>";
        date_default_timezone_set('America/Sao_Paulo');
        echo date_default_timezone_get();
        echo "<br>";
        phpinfo();
    ?>
</body>
</html>