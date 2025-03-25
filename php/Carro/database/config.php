<?php
    // constrains for database connection
    define("SERVIDOR", "localhost");
    define("USUARIO", "root");
    define("SENHA", "");
    define("BANCO", "concessionarias");

    $conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO);
?>