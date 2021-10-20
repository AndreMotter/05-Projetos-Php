<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

    if (isset($_GET['cor'])) {
        $acor=$_GET['cor'];
        $aalt=$_GET['altura'];
        $alar=$_GET['largura'];
    }
?>
<style>
    .quadrado {
    background-color: <?php echo $acor; ?>;
    height: <?php echo $aalt; ?>px;
    width: <?php echo $alar; ?>px;
    }
</style>
<body>  

<div class="quadrado"></div>

<a href="get_envia.php">Voltar</a>
 



</body>

</html>