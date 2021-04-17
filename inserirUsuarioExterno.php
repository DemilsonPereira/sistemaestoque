<?php

include 'conexao.php';

$nomeusuario = $_POST['usuario'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
// $senha = base64_encode($_POST['senha']);
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$status = 'Inativo';

$sql = "INSERT INTO tbusuario(nome, email, telefone, senha, statususuario) 
             VALUES ('$nomeusuario', '$email', '$telefone', '$senha', '$status')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px; margin-top: 20px;">
    <center>
        <h4>Usuário adicionada com sucesso, esperando aprovação.

        </h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </center>
    </div>

</div>