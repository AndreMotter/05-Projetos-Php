<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="cssloop.css" rel="stylesheet"> 
</head>
<body>
<h1 style="color: navy; text-align: center; font-size:xx-large;">Tabuada</h1>
<table border="2" style="font weight bold;" height=400px; width=400px;>
<?php 


    $tabuada = $_POST['tabuada1'];
    $igual = "=";
    $x = "x";
   
    for($i = 1; $i<=10;$i++) 
    {
        $resultado = $i*$tabuada;
    echo "
    <tr>
    <td>$i</td>
    <td>$x</td>
    <td>$tabuada</td>
    <td>$igual</td>
    <td>$resultado</td>
    </tr>
    "; }
     ?>
</table>
<br>
<form method="post">
<input type="text" name="tabuada1">
<input type="submit">
</form>


</body>
</html>