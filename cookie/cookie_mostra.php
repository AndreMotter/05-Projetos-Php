<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP 





        if (isset($_GET['nome'])) {
            $nome=$_GET['nome'];
            setcookie('NOME', $nome);
            
        }  

        if (isset($_GET['cidade']))
        {
            $cidade=$_GET['cidade'];
            setcookie('CIDADE', $cidade);
        }

        if (isset($_GET['idade']))
        {
            $idade=$_GET['idade'];
            setcookie('IDADE', $idade);
        }

        echo "Seu nome é : ". $_COOKIE['NOME'];

    
    ?>

    <a href="cookie_gera.php">Volta</a>
</body>
</html>