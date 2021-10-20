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
    
   $nome="";

   if(isset($_COOKIE['NOME_AULA1'])){
    $nome= $_COOKIE['NOME_AULA1'];

   }
    
   if(isset($_POST['NOME'])){
    $nome= $_POST['NOME'];
    setcookie('NOME_AULA1', $nome, time() + 10);
   }

   $cidade="";

   if(isset($_COOKIE['CIDADE_AULA1'])){
    $cidade= $_COOKIE['CIDADE_AULA1'];

   }
    
   if(isset($_POST['CIDADE'])){
    $cidade= $_POST['CIDADE'];
    setcookie('CIDADE_AULA1', $cidade, time() + 10);
   }

   $idade="";

   if(isset($_COOKIE['CIDADE_AULA1'])){
    $idade= $_COOKIE['CIDADE_AULA1'];

   }
    
   if(isset($_POST['IDADE'])){
    $idade= $_POST['IDADE'];
    setcookie('IDADE_AULA1', $idade, time() + 10);
   }



    ?>

<form method="POST">
        <table>
            
            <tr>
                <td>Nome</td>
                <td><input type="text" name="NOME" value="<?php echo $nome; ?>"></td>
            <tr>
                <td>Cidade</td>
                <td><input type="string" name="CIDADE" value="<?php echo $cidade; ?>"></td>
            </tr>
            <tr>
                <td>Sua idade</td>
                <td><input type="number" name="IDADE" value=""></td>
            </tr>
    
                <td></td>
                <td>
            <input type="submit" value="Postar"></td>
</body>
</html>