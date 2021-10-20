<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Esta é a página que recebe o nome digitador</h1>

<h2>
<?php
    if(isset($_POST['nome'])){
        echo 'Nome recebido : ' . $_POST['nome'];
    }

    if(isset($_POST['idade'])){
        echo  ' ,  Idade
        :  '. $_POST['idade'];
     }
?>

</h2>

</body>
</html>
