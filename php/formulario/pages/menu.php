<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Menu Principal</title>
</head>
<body>
    <header>
        <div class="logo">Logo</div>
        <nav>
            <ul>
                <li><a href="menu.php">Home</a></li>
                <li><a href="../index.php">Cadastro</a></li>
                <li><a href="#">Consulta</a></li>
                <li><a href="#">Sobre</a></li>
            </ul>
    </header>

    <main>
         <?php
         // var_dump($_REQUEST);
         $nome = $_REQUEST['nome'];
         $email = $_REQUEST['email'];
         $senha = $_REQUEST['password'];

        echo "<h1>Olá $nome, seja bem vindo</h1>";
        echo "<p>$nome, seu email é: $email</p>";

         ?>
    </main>

    <footer>
        Todos os derechos reservados a criadora Maria Vitória
        <?php
            echo date('Y');
        ?>
    </footer>
</body>
</html>