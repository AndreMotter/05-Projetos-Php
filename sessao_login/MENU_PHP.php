<?PHP 

if(!isset($_SESSION['INSTITUICAO'])){
    header("Location: menu_erro.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link hel="stylesheet" href="styles.css">
    <title>Document</title>

</head>

<body>

<h1>Você logou como SETREM</h1>
<h2>Serviçõs: lavagem, troca de óleo, manutenção de carburador.</h2>


</body>
</html>