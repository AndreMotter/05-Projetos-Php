<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php 
    $ValorA = '';
    $ValorB = '';

    if (isset($_POST['ValorA'])){
        $ValorA = $_POST['ValorA'];
        $ValorB = $_POST['ValorB'];
        $operacao = $_POST['operacao']
    }
?>
    <form name="form" method="POST">
        <table>
            <tr>
                <td>Valor A</td>
                <td><input type="text" name="ValorA"  value='<?php echo $ValorA; ?>' placeholder="Valor A"></td>
            </tr>
            <tr>
                <td>Valor b</td>
                <td><input type="text" name="ValorB" value='<?php echo $ValorB; ?>' placeholder="Valor B"></td>
            </tr>

            <tr>
                <td></td>
                <select name="operacao">
                    <option> Selecione uma operação </option>
                  
                    <option <?php ?>  value="1"> Adição </option>
                    <option <?php ?> value="2"> Subtração </option>
                    <option <?php ?> value="3"> Divisão </option>
                    <option <?php ?> value="4"> Multiplicação </option>
                </select>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Postar"></td>
            </tr>
        </table>
    </form>

    <?php

    if (isset($_POST['ValorA']) && isset($_POST['ValorB'])) { //verifica se a variável existe

        $operacao = $_POST['operacao'];

        if ($operacao == 'adicao') {
            $resultado = $_POST['ValorA'] + $_POST['ValorB'];
            echo "A soma é: " . $resultado;
        } 
        
        else if ($operacao == 'subtracao') {
            $resultado = $_POST['ValorA'] - $_POST['ValorB'];
            echo "A subtração é : " . $resultado;
        } 
        
        else if ($operacao == 'divisao') {
            $resultado = $_POST['ValorA'] / $_POST['ValorB'];
            echo "A divisão é : " . $resultado;
        } 
        
        else if ($operacao == 'multiplicacao') {
            $resultado = $_POST['ValorA'] * $_POST['ValorB'];
            echo "A multiplicação é : " . $resultado;
        }

        else
         echo "Escolha uma Operação";
    
    }

    
    ?>
</body>

</html>