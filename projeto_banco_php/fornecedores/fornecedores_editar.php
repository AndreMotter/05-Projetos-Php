<?php
    include '../conecta/conecta.php';
    include '../funcoes.php';

    // inicia os dados zerados que irão nos campos e só alimenta se for uma alteração.
    $codigo_fornecedor="";
    $nome_fornecedor="";
    $endereco_fornecedor="";
    $cnpj_fornecedor="";
    $cep_fornecedor="";


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
 
    //verifica se foi postado e se é uma alteração
    if(isset($_POST['nome_fornecedor']) && $_GET['opcao'] == 'editar'){
        $alterar = $con->prepare("update fornecedor set"
        ." nome_fornecedor=?,endereco_fornecedor=?,cnpj_fornecedor=?,cep=? where codigo_fornecedor=?");
        $alterar->bindParam(1,$_POST['nome_fornecedor']);
        $alterar->bindParam(2,$_POST['endereco_fornecedor']);
        $alterar->bindParam(3,$_POST['cnpj_fornecedor']);
        $alterar->bindParam(4,$_POST['cep']);
        $alterar->bindParam(5,$_GET['id']);

        if(!$alterar->execute()){
            print_r($alterar->errorInfo());
        }else {
            header("Location: fornecedores.php");
        }
    }


    //busca os dados do fornecedor no banco e alimenta as variáveis que estão no "Value"
    if($_GET['opcao'] == 'editar'){
    $consulta = $con->prepare("select * from fornecedor where codigo_fornecedor = ?");
    $consulta->bindParam(1,$_GET['id']);
    $consulta->execute();
    $registro = $consulta->fetch(PDO::FETCH_OBJ);
    
    $codigo_fornecedor=$registro->codigo_fornecedor;
    $nome_fornecedor=$registro->nome_fornecedor;
    $endereco_fornecedor=$registro->endereco_fornecedor;
    $cnpj_fornecedor=$registro->cnpj_fornecedor;
    $cep_fornecedor=$registro->cep;
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
                <td><?php echo $codigo_fornecedor;?></td>
            </tr>
            <tr>
                <td>Nome</td>
                <td><input  type="text" size="30" name="nome_fornecedor" value="<?php echo $nome_fornecedor;?>" /></td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td><input type="text" size="30" name="endereco_fornecedor" value="<?php echo $endereco_fornecedor;?>"/></td>
            </tr>
            <tr>
                <td>CNPJ</td>
                <td><input type="text"  size="30" name="cnpj_fornecedor" value="<?php echo $cnpj_fornecedor;?>"/></td>
            </tr>
            <tr>
                <td>Cidades</td>
                <td>
                <?php 
                    if($_GET['opcao'] == 'incluir'){
                        CriaCombo("cidades", "cidade", "cep", "0" );
                    }
                    else{
                        CriaCombo("cidades", "cidade", "cep", $cep_fornecedor );
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