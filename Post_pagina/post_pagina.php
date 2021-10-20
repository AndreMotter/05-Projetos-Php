<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
    
<?php
    if(isset($_POST['nome'])){
        echo 'Nome: '. $_POST ['nome'];
     }

     if(isset($_POST['idade'])){
        echo ' Idade:  '. $_POST['idade'];
     }
?>

<form action="post_pagina_recebe.php" method="POST">
<table>
    <tr>
        <td>Nome</td>
        <td><input type="text" name="nome"/></td>
        </tr>
        <td>Idade</td>
        <td><input type="number" name="idade"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"/></td>
        </tr>
        </table>
    
    <form>
</body>
</html>