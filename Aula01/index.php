<?php 
    $titulo = "Página bom e novo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo "$titulo"?> </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Está é uma página PHP ! </h1>
    <?php
    $nome = "Leonan";
    $sobrenome = "Orth";
    $idade = 17;
    $cidade = "Três de Maio";
    $estado = "RS";
    $escola = "IEE Cardeal Pacelli";
    $numero = 3;
        echo "<span>Este é um texto vindo do PHP <br></span>";
        echo "<span> $nome $sobrenome <br> </span>";
        echo "nome: " . $nome;
        echo "<br>";
        echo "sobrenome: " . $sobrenome;
        echo "<br>";
        echo "subtração: " . $idade . "<br>";
        echo " $nome é o meu nome, QUE LEGAL<br>";
        echo "sua idade de $idade anos, menos um numero qualquer dá: " . $resultado = $idade - $numero ; 
        echo "<br>";
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        echo "<span>Meu nome é <b>$nome</b>, tenho <b>$idade anos</b> , moro na cidade de  <b>$cidade</b>, 
        no estado do <b>$estado</b> e estudo no <b>$escola</b></span>";

    $frase = "Hoje é segunda-feira, dia 02 de agosto";
    $resultado3 = 2/3;

    echo "<br> <span> quantidade de caracteres da frase: " . strlen($frase) . "</span>";
    echo "<br> <span> quantidade de palavras da frase: " . str_word_count($frase) . "</span>";
    echo "<br> <span> posição da palavra da frase: " . strpos($frase,"agosto") . "</span>";
    echo "<br> <span> substituindo uma string: " . str_replace("segunda","terça", $frase) . "</span>";
    echo "<br> <span> invertendo a frase: " . strrev($frase) . "</span>";
    echo "<br> <span> Valor absoluto: " . abs (-120) . "</span>";
    echo "<br> <span> Arredondando valores: " . round (65.40,0) . "</span>";
    echo "<br> <span> Arredondando valores: " . round ($resultado3, 1) . "</span>";
  
    ?> 

</body>
</html>