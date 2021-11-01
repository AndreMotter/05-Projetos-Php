<?php
    include '../conecta/conecta.php';
    include '../funcoes.php';

    // inicia os dados zerados que irão nos campos e só alimenta se for uma alteração.
    $codigo_veiculo="";
    $placa_veiculo="";
    $codigo_modelo="";


    $titulo = "Inclusão de veículos";
    if(isset($_GET['opcao'])){
        if($_GET['opcao'] =='editar'){
            $titulo = "Alteração de Veículos";
        }
    }

    //verifica se o formulario foi postado e é uma inclusão
    if(isset($_POST['placa_veiculo']) && $_GET['opcao'] == 'incluir'){
        $incluir = $con->prepare("insert into veiculos (placa_veiculo, codigo_modelo) values (?,?)");

        $incluir->bindParam(1,$_POST['placa_veiculo']);
        $incluir->bindParam(2,$_POST['codigo_modelo']);
    
        if (!$incluir->execute()){
            print_r($incluir->errorInfo());
        }else{
            header("Location: veiculos.php");
        }
    }
 
    //verifica se foi postado e se é uma alteração
    if(isset($_POST['placa_veiculo']) && $_GET['opcao'] == 'editar'){
        $alterar = $con->prepare("update veiculos set"
        ." placa_veiculo=?, codigo_modelo=? where codigo_veiculo=?");
        $alterar->bindParam(1,$_POST['placa_veiculo']);
        $alterar->bindParam(2,$_POST['codigo_modelo']);
        $alterar->bindParam(3,$_GET['id']);

        if(!$alterar->execute()){
            print_r($alterar->errorInfo());
        }else {
            header("Location: veiculos.php");
        }
    }


    //busca os dados do fornecedor no banco e alimenta as variáveis que estão no "Value"
    if($_GET['opcao'] == 'editar'){
    $consulta = $con->prepare("select * from veiculos where codigo_veiculo=?");
    $consulta->bindParam(1,$_GET['id']);
    $consulta->execute();
    $registro = $consulta->fetch(PDO::FETCH_OBJ);
    
    $codigo_veiculo=$registro->codigo_veiculo;
    $placa_veiculo=$registro->placa_veiculo;
    $modelo_veiculo=$registro->codigo_modelo;

    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>

<body>
    <form name="frm" method="POST">
        <h2><?php echo $titulo;?></h2>
        <table >
            <tr>
                <td>Código</td>
                <td><?php echo $codigo_veiculo;?></td>
            </tr>
            <tr>
                <td>Placa</td>
                <td><input  type="text" size="30" name="placa_veiculo" value="<?php echo $placa_veiculo;?>" /></td>
            </tr>
            <tr>
                <td>Modelo veículo</td>
                <td>
                <?php 
                    if($_GET['opcao'] == 'incluir'){
                        CriaCombo("modelo", "modelo_veiculo", "codigo_modelo", "0" );
                    }
                    else{
                        CriaCombo("modelo", "modelo_veiculo", "codigo_modelo", $codigo_modelo);
                    }
                ?>
            
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Gravar" /></td>
            </tr>
        </table>
    </form>
    </div>
</body>

</html>