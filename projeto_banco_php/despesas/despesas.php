<?php 
    include '../conecta/conecta.php';
    include '../funcoes.php';    
    
    
    $grupo_despesa_pesquisa = null ;
    $descricao_pesquisa = null;

    if(isset($_POST['grupo_despesa_pesquisa'])){
        $grupo_despesa_pesquisa = $_POST['grupo_despesa_pesquisa'];
    }
    
    if(isset($_POST['descricao_pesquisa'])){
        $descricao_pesquisa = $_POST['descricao_pesquisa'];
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

<body class="container-fluid" ></body>
<h1>Cadastro de Despesas</h1>

<form method="POST">
    
    <table>
    <tr>
        <td>Grupo despesa:</td>
        <td><input type='text' name='grupo_despesa_pesquisa'/></td>
    </tr>
    <tr>
        <td>Descrição Despesa: </td>
        <td><input type='text' name='descricao_pesquisa'/></td>
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
        <td>Codigo Despesa</td>
        <td>Descrição Despesa</td>
        <td>Nome do grupo despesa</td>
        <td></td>
    </tr>
 </thead>
<tbody>

<?php $consulta = $con->query("select * from despesas d inner join grupo_despesa g on (d.codigo_grupo_despesa = g.codigo_grupo_despesa)" .
" where descricao_despesa like '%$descricao_pesquisa%' and nome_grupo_despesa like '%$grupo_despesa_pesquisa%'");
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