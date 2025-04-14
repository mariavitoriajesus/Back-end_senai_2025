<h1>LISTA DE CARROS</h1>

<a href="index.php?menu=adicionarCarros">
    <button type="button">
        Adicionar carro
    </button>
</a>

<table>
    <tr>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Valor</th>
        <th>Ano</th>
        <th>Cor</th>
    </tr>

<?php
    $sql = "SELECT * FROM modelo";
    //pedido
    $query  = mysqli_query($conexao,$sql) or die("Erro ao listar carros".mysqli_error($conexao));

    while($dados = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?=$dados['modeloCarro']?></td>
            <td><?=$dados['marcaCarro']?></td>
            <td><?=$dados['valorCarro']?></td>
            <td><?=$dados['anoCarro']?></td>
            <td><?=$dados['corCarro']?></td>
            <td><?=$dados['modeloCarro']?></td>
            <td><a href="index.php?menu=editarCarros&idCarro=<?=$dados['modeloCarro']?>">EDITAR</a></td>
            <td><a href="index.php?menu=deletarCarros&idCarro<?=$dados['modeloCarro']?>">DELETAR</a></td>
        </tr>

<?php
    }
?>
