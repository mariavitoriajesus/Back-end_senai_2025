<h1>LISTA DE CARROS</h1>

<table>
    <tr>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Valor</th>
        <th>Ano</th>
        <th>Cor</th>
    </tr>
</table>

<?php
    $sql = "SELECT * FROM carros";
    //pedido
    $query  = mysqli_query($conexao, $sql) or die("Erro ao listar carros".mysqli_error($conexao));

    while($dados = mysqli_fetch_assoc($query)){
        echo "<tr>";
        echo "<td>".$dados['modeloCarro']."</td>";
        echo "<td>".$dados['marcaCarro']."</td>";
        echo "<td>".$dados['valorCarro']."</td>";
        echo "<td>".$dados['anoCarro']."</td>";
        echo "<td>".$dados['corCarro']."</td>";
        echo "</tr>";
    }
?>