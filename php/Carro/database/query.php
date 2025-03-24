<?php
    include("config.php");

    //$query = "SELECT * FROM concessionarias";
    // mysqli_con = conexao do projeto com o bd (banco de dados)
    $conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die('Não foi possível conectar ao banco de dados'
    .mysqli_connect_error());
?>