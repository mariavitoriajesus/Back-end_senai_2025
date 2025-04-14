<h1>DELETAR</h1>

<?php
$id = $_GET['idCarro'];
$sql = "DELETE FROM Modelo WHERE idModelo = {$id}";
$query  = mysqli_query($conexao,$sql) or die("Erro ao deletar carros".mysqli_error($conexao));
echo "O carro foi deletado com sucesso!!";
?>