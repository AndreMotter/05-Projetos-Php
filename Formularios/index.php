<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>

<body>
    <form name="frm" method="POST">
        <table>
            <tr>
                <td>Nome</td>
                <td><input type="text" name="Nome" placeholder="Insira seu nome"></td>
            </tr>
            <tr>
                <td>Cidade</td>
                <td><input type="text" name="Cidade" placeholder="Insira sua cidade"></td>
            </tr>
            <tr>
                <td>Idade</td>
                <td><input type="text" name="Idade" placeholder="Insira sua idade"></td>
            </tr>
            <tr>
                <td>Escola</td>
                <td><input type="text" name="Escola" placeholder="Insira sua escola"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Postar"></td>
            </tr>
        </table>
    </form>
    <?php


    $Nome = $_POST['Nome'];
    $Cidade = $_POST['Cidade'];
    $Idade = $_POST['Idade'];
    $Escola = $_POST['Escola'];

    $Itens =  array($_POST['$Nome, $Cidade, $Idade, $Escola']);

    if (isset($itens)) { //verifica se a variável existe
        echo "Meu nome é " . $Nome . "sou de " .  $Cidade . "Tenho " . $Idade . 
        " e estudo no " . $Escola; 
    }
    
    ?>
</body>

</html>