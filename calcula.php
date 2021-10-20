<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>


    <body>

        <?php
            $valora = 0;
            $valorb = 0;
            $operacao=1;
            if (isset($_POST['valora'])) {
                $valora = $_POST['valora'];
                $valorb = $_POST['valorb'];
                $operacao = $_POST['operacao'];
            }
        ?>
        
        <form name="frm" method="POST"/>
            <table>
                <tr>
                    <td>Valor A</td>
                    <td>
                        <input type="number" value="<?php echo $valora; ?>" name="valora" />
                    </td>
                </tr>
                <tr>
                    <td>Valor B</td>
                    <td>
                        <input type="number" value="<?php echo $valorb; ?>" name="valorb" />
                    </td>
                </tr>
                <tr>
                    <td>Operação</td>
                    <td>
                        <select name="operacao">
                            <option <?php if($operacao==1) echo "selected";  ?> value="1">Soma</option>
                            <option <?php if($operacao==2) echo "selected";  ?> value="2">Subtração</option>
                            <option <?php if($operacao==3) echo "selected";  ?> value="3">Multiplicação</option>
                            <option <?php if($operacao==4) echo "selected";  ?> value="4">Divisão</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Postar" />
                    </td>
                </tr>
            </table>
        </form>
        <?php 
            if (isset($_POST['valora'])) { // verfica se a variavel existe
                if ($_POST['operacao']==1) {
                    $resultado =  $_POST['valora'] + $_POST['valorb'];
                    echo "A Soma é : " . $resultado;
                } else if ($_POST['operacao']==2) {
                    $resultado =  $_POST['valora'] - $_POST['valorb'];
                    echo "A Subtração é : " . $resultado;
                } else if ($_POST['operacao']==3) {
                    $resultado =  $_POST['valora'] * $_POST['valorb'];
                    echo "A Multiplicação é : " . $resultado;
                } else if ($_POST['operacao']==4) {
                    $resultado =  $_POST['valora'] / $_POST['valorb'];
                    echo "A Divisão é : " . $resultado;
                }
            }
        ?>
    </body>
</html>
