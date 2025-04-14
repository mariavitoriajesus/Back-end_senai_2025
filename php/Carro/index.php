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
            <a href="index.php?menu=listaC">LISTA DE CARROS</a>
            <a href="index.php?menu=adicionarCarros">ADICIONAR CARROS</a>
            <a href="index.php?menu=editarCarro">EDITAR CARRO</a>
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
                case 'listaC':
                    include("pages/listaCarros/listaC.php");
                    break;    
                case 'adicionarCarros':
                    include("pages/listaCarros/adicionarCarros.php");
                    break; 
                case 'dbAdicionarCarro':
                    include("pages/listaCarros/dbAdicionarCarro.php");
                    break;  
                case 'editarCarros':
                    include("pages/listaCarros/editarCarros.php");
                    break;  
                case 'dbEditarCarro':
                    include("pages/listaCarros/dbEditarCarro.php");
                    break;      
                case 'deletarCarros':
                    include("pages/listaCarros/deletarCarros.php");
                    break; 
                case 'dbDeletarCarros':
                    include("pages/listaCarros/dbDeletarCarros.php");
                    break; 
                default:
                    include("pages/home/home.php");
                    break;
            }
        ?>


    </main>

    <footer>
            <style></style>
    </footer>
</body>
</html>