<?php
include '../conecta/conecta.php';
include '../funcoes.php';

$nome_pesquisa = null ;
$endereco_fornecedor = null;
$cidadepesquisa = null;

if(isset($_POST['nome_pesquisa'])){
    $nome_pesquisa = $_POST['nome_pesquisa'];
}

if(isset($_POST['endereco_fornecedor'])){
    $endereco_fornecedor = $_POST['endereco_fornecedor'];
}

if(isset($_POST['cep'])){
    $cidadepesquisa= $_POST['cep'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fornecedores</title>
    <?php include '../estilos.html'?>
</head>


<body class="container-fluid">

    <h1>Cadastro de Fornecedores</h1>


    <form method="POST">
    
    <table>
    <tr>
        <td>Nome:</td>
        <td><input type='text' name='nome_pesquisa'/></td>
    </tr>
    <tr>
        <td>Endereco: </td>
        <td><input type='text' name='endereco_fornecedor'/></td>
    </tr>
    <tr>
        <td>Cidade: </td>
        <td><?php CriaCombo('cidades', 'cidade', 'cep', '0')?></td>
    </tr>
    <tr>
        <td><input class="btn btn-primary" type='submit' name='pesquisar'/></td>
        <td></td>
    </tr>
    </table>

    </form>



    <table style="border:10px;" class="table table-striped">
        <thead class="table-dark">
            <tr>
                <td>Codigo</td>
                <td>Nome</td>
                <td>Endereço</td>
                <td>Cnpj</td>
                <td>Cep</td>
                <td></td>

            </tr>
        </thead>
        <tbody>
            <?php $consulta = $con->query("select * from fornecedor f inner join cidades c on (f.cep=c.cep)" .
             " where nome_fornecedor like '%$nome_pesquisa%' and endereco_fornecedor like '%$endereco_fornecedor%' and (f.cep ='$cidadepesquisa' or '$cidadepesquisa' = 0)");
            while ($registro = $consulta->fetch(PDO::FETCH_OBJ)) {
                echo
                '<tr>
            <td>' . $registro->codigo_fornecedor . '</td>
            <td>' . $registro->nome_fornecedor . '</td>
            <td>' . $registro->endereco_fornecedor . '</td>
            <td>' . $registro->cnpj_fornecedor . '</td>
            <td>' . $registro->cidade . '</td>'

            ?>

                <td>
                    <a href="fornecedores_excluir.php?id=<?php echo  $registro->codigo_fornecedor; ?>">
                        <i class="bi bi-trash-fill" style="color: red"></i>
                        <a class="ps-2" href="fornecedores_editar.php?opcao=editar&id=<?php echo  $registro->codigo_fornecedor; ?>">
                            <i class="bi bi-pencil-square" style="color: blue"></i>
                </td>
            <?php
                echo '</tr>';
            } ?>
        </tbody>
    </table>
    <br>

    <div class=" text-center">
        <a href="fornecedores_editar.php?opcao=incluir" class="btn btn-success"> Incluir </a>
    </div>
    <a href="../veiculos/veiculos.php" class="btn btn-primary"> Ir para Veículos </a> <br> <br>
    <a href="../despesas/despesas.php" class="btn btn-primary"> Ir para Despesas </a>


</body>

</html>