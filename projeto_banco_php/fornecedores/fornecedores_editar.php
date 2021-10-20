<?php
    include '../conecta/conecta.php';
    $titulo = "Inclusão de fornecedores";
    if(isset($_GET['opcao'])){
        if($_GET['opcao'] =='editar'){
            $titulo = "Alteração de Fornecedores";
        }
    }

    //verifica se o formulario foi postado e é uma inclusão
    if(isset($_POST['nome_fornecedor']) && $_GET['opcao'] == 'incluir'){
        $incluir = $con->prepare("insert into fornecedor (nome_fornecedor,endereco_fornecedor,cnpj_fornecedor,cep) values (?,?,?,?) ");

        $incluir->bindParam(1,$_POST['nome_fornecedor']);
        $incluir->bindParam(2,$_POST['endereco_fornecedor']);
        $incluir->bindParam(3,$_POST['cnpj_fornecedor']);
        $incluir->bindParam(4,$_POST['cep']);
        if (!$incluir->execute()){
            print_r($incluir->errorInfo());
        }else{
            header("Location: fornecedores.php");
        }
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
    <div class="form"> 
    <form name="frm" method="POST">
        <h2><?php echo $titulo;?></h2>
        <table >
            <tr>
                <td>Código</td>
                <td></td>
            </tr>
            <tr>
                <td>Nome</td>
                <td><input  type="text" size="60" name="nome_fornecedor" /></td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td><input type="text" size="50" name="endereco_fornecedor" /></td>
            </tr>
            <tr>
                <td>CNPJ</td>
                <td><input type="text"  size="30" name="cnpj_fornecedor" /></td>
            </tr>
            <tr>
                <td>CEP</td>
                <td><input type="text"  size="10" name="cep" /></td>
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