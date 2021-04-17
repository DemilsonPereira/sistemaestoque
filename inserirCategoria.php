<?php
include "conexao.php";

$nomecategoria = $_POST['categoria'];

$sql = "INSERT INTO `tbcategoria`(`nome`) VALUES ('$nomecategoria')";

$inserir = mysqli_query($conexao, $sql);


?>

<link rel="stylesheet" href="css/bootstrap.css">
<?php

session_start();

$usuario = $_SESSION['usuario'];

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

?>

<div class="container" style="width: 500px; margin-top: 20px;">
    <center>
        <h4>Adicionada com sucesso</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="adicionarCategoria.php" role="button" class="btn btn-sm btn-primary">Cadastrar nova categoria</a>
        </center>
    </div>

</div>