<?PHP 

session_start();
$_SESSION ['INSTITUICAO'] = 'SETREM';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1 style="color: red">Sessão criada!</h1>
    <a href="sessao.php">Voltar</a>
    
</body>
</html>