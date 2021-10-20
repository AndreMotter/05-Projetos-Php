<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aula 02</title>
</head>

<body>
    <h1> Loop dentro de uma tabela usando PHP</h1>
<center> 
    <table>

        <?php
        $tabuada = 8;
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr> 
                     <td> $i  </td>
                     <td> x </td>
                     <td> $tabuada </td>
                     <td> = </td> 
                     <td>"."<span>" .  $resultado = $tabuada * $i . "</span>" . "</td>" .
                "</tr>";
        } ?>
    </table>
</center> 

    <br>
    <br>
    <br>
    <br>



</body>

</html>