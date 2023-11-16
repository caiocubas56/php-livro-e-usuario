<?php
/*
toda ves que trabalhar com sessao tenho que iniciar o comando
no começo
*/
session_start();

echo $_SESSION['usuario']['id'];


include ('../servidor.php');

$id = $_SESSION['usuario']['id'];

// estou pegando o registro da sessao e juntando a string php
$sql = "select nome_us from tb_usuario where cod_us = $id ";
// executar o comando
$resp = mysqli_query($cx, $sql);
//descompactar do banco
$campo = mysqli_fetch_assoc($resp)

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">


</head>

<body>
    <div class="container">

    <?php
    echo "<h2>ola,".$campo['nome_us']."</h2>";

    ?>

                
        <nav class="nav nav-pills flex-column flex-sm-row">
            <a class="flex-sm-fill text-sm-center nav-link" href="cadastro.php" target="link">Cadastro de livros</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="lista_livro.php" target="link">Lista de Livros</a>
           <a class="flex-sm-fill text-sm-center nav-link" href="lista_usuario.php" target="link">Usuários</a>
            <a class="flex-sm-fill text-sm-center nav-link " href="sair.php" tabindex="-1" >sair</a>
            
        </nav>

        <iframe  name="link" width="100%" height="1000px" frameborder="0" style="border: 0;">

        </iframe>
    </div>


    


    
</body>

<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</html>
