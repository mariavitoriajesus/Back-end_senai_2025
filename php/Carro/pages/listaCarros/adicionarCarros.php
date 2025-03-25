<h1>ADICIONAR CARROS</h1>

<form action="index.php?menu=dbAdicionarCarro" method="post">
    <div class="form-group">
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo">
    </div>

    <div class="form-group">
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca">
    </div>

    <div class="form-group">
        <label for="valor">Valor</label>
        <input type="number" name="valor" id="valor">
    </div>

    <div class="form-group">
        <label for="ano">Ano</label>
        <input type="date" name="ano" id="ano">
    </div>

    <div class="form-group">
        <label for="cor">Cor</label>
        <input type="text" name="cor" id="cor">
    </div>
    <button type="submit">Cadastrar</button>
</form>