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
<h1>Cadastro de Veículos</h1>
<table style="border:10px;" class="table table-striped">
<thead class="table-dark">
    <tr>
        <td>Codigo Carro</td>
        <td>Placa Carro</td>
        <td>Modelo Veículo</td>
        <td></td>
    </tr>
 </thead>
<tbody>

<?php $consulta = $con->query("select * from veiculos v inner join modelo m on (m.codigo_modelo = v.codigo_modelo)");
         while ($registro = $consulta->fetch(PDO::FETCH_OBJ)){
         echo
         '<tr>
            <td>' . $registro->codigo_veiculo.'</td>
            <td>' . $registro->placa_veiculo.'</td>
            <td>' . $registro->modelo_veiculo.'</td>'
            
         ?>

         <td> 
             <a href="veiculos_excluir.php?id=<?php echo  $registro->codigo_veiculo; ?>">
             <i class="bi bi-trash-fill" style="color: red"></i>
             <a class="ps-2" href="veiculos_editar.php?opcao=editar&id=<?php echo  $registro->codigo_veiculo; ?>">
            <i class="bi bi-pencil-square" style="color: blue"></i>
         </td>
        <?php
         echo '</tr>';
          } ?>

</tbody>

</table>
<div class=" text-center">
        <a href="veiculos_editar.php?opcao=incluir" class="btn btn-success"> Incluir </a>
    </div>
<br>

<a href="../fornecedores/fornecedores.php" class="btn btn-primary"> Voltar </a>