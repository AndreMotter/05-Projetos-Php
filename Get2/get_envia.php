<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

  
    <form action='get_recebe.php' method="GET">
        <table>
            
            <tr>
                <td>Cor</td>
            <td>
                <select name="cor">
                    <option value="blue">Azul</option>
                    <option value="red">Vermelho</option>
                    <option value="green">Verde</option>
                    <option value="yellow">Amarelo</option>
                    <option value="purple">Roxo</option>
                    <option value="black">Preto</option>
               </select>
                </td>
            </tr>
            <tr>
                <td>Altura</td>
                <td><input type="text" name="altura"></td>
            </tr>
            <tr>
                <td>Largura</td>
                <td><input type="text" name="largura"></td>
            </tr>
    
                <td></td>
                <td>
            <input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
</html>                                                                          