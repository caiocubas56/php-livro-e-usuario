<?php
  // session
  include("../servidor.php");

   // pegar o cod_livro;
   $cod_us =  $_GET["cod_us"];
   //echo "<br>";
   //echo $_GET["x"];
   
  // query para saber quem e o livro

    //$sql = " select * from  tb_livro  where cod_liv = " . $cod_liv;
  
 /   $sql = "SELECT tb_livro.*,
                   tb_editora.*
             from   tb_editora inner join  tb_livro
             on tb_editora.cod_ed = tb_livro.cod_ed
            where tb_livro.cod_liv = " . $cod_liv;
  
    // mandar executar 
   $resp  = mysqli_query($cx , $sql);
  // transforma os dados do sql(tabela) em array(php) indice, associativo
   $campo =  mysqli_fetch_array($resp);
   
   //echo $campo["titulo_liv"];


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <section class="col-md-2">

            </section>

           

            <section class="col-md-8">
                <h3 class="mt-5">Alterar Usuário</h2>

            /        <form action="procAltLivro.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="cod_us" 
                      value="<?php echo $campo["cod_us"] ?>">    
                    
                    
                    <div class="form-group">
                            <label for="t">Nome : </label>
                            <input type="text" class="form-control" id="t" 
                            name="titulo" 
                            value="<?php echo $campo["titulo_liv"]?>">
                        </div>
                        <div class="form-group">
                            <label for="desc">E-mail : </label>
                            <textarea name="desc" class="form-control" id="desc"><?php
                                echo $campo["desc_liv"];?></textarea>
                        </div>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Alterar</button>
                    </form>
            </section>

            <section class="col-md-2"></section>
        </div>
    </div>

</body>
<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<?php 
  mysqli_close($cx)
  ?>
</html>