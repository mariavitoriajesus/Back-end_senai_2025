<?php
    $modelo = mysqli_real_escape_string($conexao, $_POST['modelo']);
    $marca = mysqli_real_escape_string($conexao, $_POST['marca']); 
    $valor = mysqli_real_escape_string($conexao, $_POST['valor']);
    $ano = mysqli_real_escape_string($conexao, $_POST['ano']);
    $cor = mysqli_real_escape_string($conexao, $_POST['cor']);
    
    $sql = "INSERT INTO modelo (modeloCarro, marcaCarro, valorCarro, anoCarro, corCarro) VALUES ('$modelo', '$marca', '$valor', '$ano', '$cor')";

    $query = mysqli_query($conexao, $sql) or die("Erro ao adicionar carro".mysqli_error($conexao));
    echo "Carro {$modelo} adicionado com sucesso";
?>