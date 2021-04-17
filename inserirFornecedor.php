<?php
include "conexao.php";

$nomefornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `tbfornecedor`(`nome`) VALUES ('$nomefornecedor')";

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
        <h4>Fornecedor adicionada com sucesso</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="adicionarFornecedor.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo fornecedor</a>
        </center>
    </div>

</div>