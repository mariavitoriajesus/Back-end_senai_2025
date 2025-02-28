<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Formulário de Cadastro</h1>
        <form action="pages/menu.php" method="post">
            <div class="form-input">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
                <br>
            </div>
            <div class="form-input">           
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
                <br>
            </div>            
            <div class="form-input">
                <label for="senha">Senha:</label>
                <input type="password" name="password" id="password">
                <br>
            </div>
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
        </form>
    </main>
</body>
</html>





