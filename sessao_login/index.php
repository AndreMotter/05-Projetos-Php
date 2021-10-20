
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
   
   <form action="index.php" method="POST">

    <input type="text" name="Login" placeholder="USUARIO"> <br><br>
    <input type="password" name="Senha" placeholder="SENHA">
    <input type="submit" value="Enviar">

   </form>
    <br>

<?PHP

$login = 'SETREM';
$senha = 'setrem123';

if($login == $_POST['Login'] & $senha == $_POST['Senha'])
{
    session_start();
    $_SESSION ['INSTITUICAO'] = 'SETREM';
    header("Location: MENU_PHP.php");

}

else{

    echo '<script>alert("Não deu certo")</script>';
}

?>
</body>
</html>