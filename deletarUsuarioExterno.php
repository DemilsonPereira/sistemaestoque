<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM tbusuario WHERE id_usuario = $id";

$deletar = mysqli_query($conexao, $sql);

header("location: aprovarUsuario.php"); //redireciona novamente para a página de aprovação

?>
<!-- 
<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px; margin-top: 20px;">
    <center>
        <h4>Deletado com sucesso</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="aprovarUsuario.php" role="button" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
        </center>
    </div>

</div> -->