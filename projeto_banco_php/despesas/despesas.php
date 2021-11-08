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
    <?php include '../estilos.html'?>
</head>

<body class="container-fluid" ></body>
<h1>Cadastro de Despesas</h1>
<table style="border:10px;" class="table table-striped">
<thead class="table-dark">
    <tr>
        <td>Codigo Despesa</td>
        <td>Descrição Despesa</td>
        <td>Nome do grupo despesa</td>
        <td></td>
    </tr>
 </thead>
<tbody>

<?php $consulta = $con->query("select * from despesas d inner join grupo_despesa g on (d.codigo_grupo_despesa = g.codigo_grupo_despesa)");
         while ($registro = $consulta->fetch(PDO::FETCH_OBJ)){
         echo
         '<tr>
            <td>' . $registro->codigo_despesa.'</td>
            <td>' . $registro->descricao_despesa.'</td>
            <td>' . $registro->nome_grupo_despesa.'</td>' 
        
         ?>

         <td> 
             <a href="despesas_excluir.php?id= <?php echo  $registro->codigo_despesa; ?>"><i class="bi bi-trash-fill" style="color: red"></i>
             <a class="ps-2" href="despesas_editar.php?opcao=editar&id=<?php echo  $registro->codigo_despesa; ?>">
             <i class="bi bi-pencil-square" style="color: blue"></i>
         </td>
     <?php
         echo '</tr>';   
     } ?>

</tbody>

</table>
<br>
<div class=" text-center">
        <a href="despesas_editar.php?opcao=incluir" class="btn btn-success"> Incluir </a>
    </div>
<br>
<a href="../fornecedores/fornecedores.php" class="btn btn-primary"> Voltar </a>

</body>

</html>