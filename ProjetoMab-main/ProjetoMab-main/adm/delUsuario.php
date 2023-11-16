<?php
   include("../servidor.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">

  <script>
    //var i = confirm("deseja excluir?");
    //alert(i); 
  
  </script> 

</head>

<body>
    <div class="container">
   <?php
   // pegar o codigo do usário

 $cod_us = $_GET["cod_us"];

   // query
    $delSQL = " delete from tb_Nome where cod_us =". $cod_us;

    // executar
    $res =  mysqli_query( $cx , $delSQL );

    // obter o numero de linhas afetadas

    if( mysqli_affected_rows($cx) == 1){

        echo "Excluido com sucesso!";
    }
  
     // fecha o banco
     mysqli_close($cx);

   ?>
    </div>
</body>

<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</html>