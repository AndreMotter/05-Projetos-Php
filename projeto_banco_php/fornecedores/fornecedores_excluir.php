
       <?php

          if(isset ($_GET['id']));
          include '../conecta/conecta.php';
          $excluir = $con->prepare('delete from fornecedor where codigo_fornecedor=?');
          $excluir->bindParam(1, $_GET['id']);
          if(!$excluir-> execute()){
                print_r($excluir->errorInfo());
          }else{
                header("Location: fornecedores.php");
          }
   ?>
