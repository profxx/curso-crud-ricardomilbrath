<?php

    include 'conexao.php';

    $id = $_POST['id_categoria'];
    
    $nomecategoria = $_POST['nome_categoria'];
   
    $sql ="UPDATE `categoria` SET `nome_categoria`='$nomecategoria' WHERE id_categoria = $id";

    $atualizar = mysqli_query($conexao,$sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <div class="container" style="width:400px; padding-top:50px;">
        <center>
            <h3>Categoria atualizada com sucesso.</h3>
            <div style="margin-top:20px">
                <a href="_listar_categoria.php" class="btn btn-sm btn-warning">Voltar</a>
            </div>
        </center>
    </div>