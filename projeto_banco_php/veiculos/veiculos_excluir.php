<?php

    if(isset ($_GET['id']));
    include '../conecta/conecta.php';
    $excluir = $con->prepare('delete from veiculos where codigo_veiculo=?');
    $excluir->bindParam(1, $_GET['id']);
        if(!$excluir-> execute()){
        print_r($excluir->errorInfo());
        }else{
      header("Location: veiculos.php");
}
