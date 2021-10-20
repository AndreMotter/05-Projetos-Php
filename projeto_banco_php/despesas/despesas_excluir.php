<?php

    if(isset ($_GET['id']));
    include '../conecta/conecta.php';
    $excluir = $con->prepare('delete from despesas where codigo_despesa=?');
    $excluir->bindParam(1, $_GET['id']);
        if(!$excluir-> execute()){
        print_r($excluir->errorInfo());
        }else{
      header("Location: despesas.php");
}
