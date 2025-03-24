<?php
    include("database/config.php");  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concessionária</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php?menu=home">HOME</a>
            <a href="index.php?menu=lista">LISTA DE CARROS</a>
        </nav>
    </header>

    <main>
        <?php
            if (isset($_GET['menu'])) {
                $pagina = $_GET['menu'];
            } else {
                $pagina = 'home';
            }
            
            switch ($pagina) {
                case 'home':
                    include("pages/home/home.php");
                    break;
                case 'home':
                    include("pages/lista/lista.php");
                    break;                
                default:
                    include("pages/home/home.php");
                    break;
            }
        ?>


    </main>

    <footer>

    </footer>
</body>
</html>