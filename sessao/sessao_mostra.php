<?PHP 
session_start();

if(isset($_GET['logout'])){

session_destroy();
header("Location: sessao.php");
}




if(!isset($_SESSION['INSTITUICAO'])){
    header("Location: sessao_erro.php");

}
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
    
<h1>A sessão INSTITUICAO está criada e seu conteúdo é:</h1>
<h1 style="color: green"><?php echo $_SESSION['INSTITUICAO'] ?></h1><br>
<h2><a href="sessao.php">Voltar</a></h2>
<h2><a href="sessao_mostra.php?logout">Logout</a></h2>

<?PHP



?>



</body>
</html>