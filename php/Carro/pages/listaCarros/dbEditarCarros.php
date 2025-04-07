<h1>ATUALIZAR CARRO</h1>

<?php
$Modelo = mysqli_real_escape_string($conexao, $_POST['modelo']);
$Marca = mysqli_real_escape_string($conexao, $_POST['marca']);
$Valor = mysqli_real_escape_string($conexao, $_POST['valor']);
$Ano = mysqli_real_escape_string($conexao, $_POST['ano']);
$Cor = mysqli_real_escape_string($conexao, $_POST['cor']);

$sql = "UPDATE modelo SET modeloCarro = '$Modelo', 
            marcaCarro = '$Marca', 
            valorCarro = '$Valor', 
            anoCarro = '$Ano', 
            corCarro = '$Cor' WHERE idModelo = '{$_POST['id']}'";

$query = mysqli_query($conexao, $sql) or die("Erro ao atualizar carro".mysqli_error($conexao));
echo "Carro {$Modelo} atualizado com sucesso";