<h1>EDITAR CARRO</h1>
<?php
    include("database/config.php");  

    $id = $_GET['id'];
    echo "esse é o carro numero: ".$id;

    $sql = "SELECT * FROM modelo WHERE idModelo = '$id'";
    $query  = mysqli_query($conexao,$sql) or die("Erro ao listar carros".mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($query);
?>

<h1>EDITAR CARROS</h1>

<form action="index.php?menu=dbEditarCarros" method="post">
    <div class="form-group">
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo" value="<?=$dados['modeloCarro']?>">
    </div>

    <div class="form-group">
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" value="<?=$dados['marcaCarro']?>">
    </div>

    <div class="form-group">
        <label for="valor">Valor</label>
        <input type="number" name="valor" id="valor" value="<?=$dados['valorCarro']?>"> 
    </div>

    <div class="form-group">
        <label for="ano">Ano</label>
        <input type="date" name="ano" id="ano" value="<?=$dados['anoCarro']?>">
    </div>

    <div class="form-group">
        <label for="cor">Cor</label>
        <input type="text" name="cor" id="cor" value="<?=$dados['corCarro']?>">
    </div>
    <button type="submit">Cadastrar</button>
</form>