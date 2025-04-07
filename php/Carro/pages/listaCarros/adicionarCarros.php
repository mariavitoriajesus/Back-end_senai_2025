<h1>ADICIONAR CARROS</h1>

<form action="index.php?menu=dbAdicionarCarro" method="post">
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