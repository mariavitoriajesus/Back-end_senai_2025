<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos em PHP</title>
</head>
<body>
    <header>
        <a href="assets/pages/home.php">Home</a>
    </header>
    <main>
        <form action="assets/scripts/login.php" method="post"> 
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Digite o seu email" required>            
            </div>            

            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" placeholder="Digite sua senha" required>
            </div>
            <button type="submit">Entrar</button>
            <a href="#">Esqueceu a senha</a>
            <a href="assets/scripts/cadastro.php">Cadastrar</a>
        </form>
    </main>
</body>
</html>