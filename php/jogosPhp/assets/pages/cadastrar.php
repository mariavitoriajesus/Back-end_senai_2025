<?php
    include '../components/basehtml.php';
?>

<main>
    <form action="../scripts/cadastro.php" method="post">
        <input type="text" name="name" id="name">
        <input type="email" name="email" id="email">
        <input type="password" name="senha" id="senha">
        <button type="submit">Cadastrar</button>
    </form>
</main>

<?php
    include '../components/baseScriptsHtml.php.php';
?>