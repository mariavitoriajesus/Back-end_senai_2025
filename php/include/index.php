<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include</title>
</head>
<body>
    <a href="scripts/pagina2.php"> pagina 2</a>
    <?php
        include_once "scripts/header.php";
        include_once "scripts/teste.php";
        include "scripts/teste.php";
        require "scripts/teste2.php";
    ?>
</body>
</html>