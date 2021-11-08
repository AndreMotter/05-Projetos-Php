<?php
    include '../conecta/conecta.php';
    include '../funcoes.php';

    // inicia os dados zerados que irão nos campos e só alimenta se for uma alteração.
    $codigo_despesa="";
    $descricao_despesa="";
    $codigo_grupo_despesa="";
 


    $titulo = "Inclusão de despesas";
    if(isset($_GET['opcao'])){
        if($_GET['opcao'] =='editar'){
            $titulo = "Alteração de Despesas";
        }
    }

    //verifica se o formulario foi postado e é uma inclusão
    if(isset($_POST['descricao_despesa']) && $_GET['opcao'] == 'incluir'){
        $incluir = $con->prepare("insert into despesas (descricao_despesa,codigo_grupo_despesa) values (?,?) ");

        $incluir->bindParam(1,$_POST['descricao_despesa']);
        $incluir->bindParam(2,$_POST['codigo_grupo_despesa']);
        if (!$incluir->execute()){
            print_r($incluir->errorInfo());
        }else{
            header("Location: despesas.php");
        }
    }
 
    //verifica se foi postado e se é uma alteração
    if(isset($_POST['descricao_despesa']) && $_GET['opcao'] == 'editar'){
        $alterar = $con->prepare("update despesas set"
        ." descricao_despesa=?,codigo_grupo_despesa=? where codigo_despesa=?");
        $alterar->bindParam(1,$_POST['descricao_despesa']);
        $alterar->bindParam(2,$_POST['codigo_grupo_despesa']);
        $alterar->bindParam(3,$_GET['id']);

        if(!$alterar->execute()){
            print_r($alterar->errorInfo());
        }else {
            header("Location: despesas.php");
        }
    }


    //busca os dados do fornecedor no banco e alimenta as variáveis que estão no "Value"
    if($_GET['opcao'] == 'editar'){
    $consulta = $con->prepare('select * from despesas where codigo_despesa=?');
    $consulta->bindParam(1,$_GET['id']);
    $consulta->execute();
    $registro = $consulta->fetch(PDO::FETCH_OBJ);
    
    $codigo_despesa=$registro->codigo_despesa;
    $descricao_despesa=$registro->descricao_despesa;
    $codigo_grupo_despesa=$registro->codigo_grupo_despesa;
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
    <?php include '../estilos.html'?>
</head>

<body>

    <form name="frm" method="POST">
        <h2><?php echo $titulo;?></h2>
        <table >
            <tr>
                <td>Código</td>
                <td><?php echo $codigo_despesa;?></td>
            </tr>
            <tr>
                <td>Descrição Despesa</td>
                <td><input  type="text" size="30" name="descricao_despesa" value="<?php echo $descricao_despesa;?>" /></td>
            </tr>
          
            <tr>
                <td>Grupo despesas</td>
                <td>
                <?php 
                    if($_GET['opcao'] == 'incluir'){
                        CriaCombo("grupo_despesa", "nome_grupo_despesa", "codigo_grupo_despesa", "0" );
                    }
                    else{
                        CriaCombo("grupo_despesa", "nome_grupo_despesa", "codigo_grupo_despesa", $codigo_grupo_despesa);
                    }
                ?>
            
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Gravar" /></td>
            </tr>
        </table>
    </form>

</body>

</html>