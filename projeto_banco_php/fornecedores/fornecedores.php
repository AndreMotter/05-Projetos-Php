<?php
include '../conecta/conecta.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fornecedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
</head>


<body class="container-fluid">
    <h1>Cadastro de fornecedores</h1>
    <table style="border:10px;"  class="table table-striped">
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
            <?php $consulta = $con->query("select * from fornecedor");
            while ($registro = $consulta->fetch(PDO::FETCH_OBJ)) {
                echo
                '<tr>
            <td>' . $registro->codigo_fornecedor . '</td>
            <td>' . $registro->nome_fornecedor . '</td>
            <td>' . $registro->endereco_fornecedor . '</td>
            <td>' . $registro->cnpj_fornecedor . '</td>
            <td>' . $registro->cep . '</td>'

            ?>

                <td> 
                    <a href="fornecedores_excluir.php?id=<?php echo  $registro->codigo_fornecedor; ?>"><i class="bi bi-trash-fill" style="color: red"></i>
                    <a class="ps-2" href="fornecedores_editar.php?opcao=editar"><i class="bi bi-pencil-square" style="color: blue"></i>
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