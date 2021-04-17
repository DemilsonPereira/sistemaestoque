<?php

include 'conexao.php';

$nomeusuario = $_POST['usuario'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
// $senha = base64_encode($_POST['senha']);
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$niveldeacesso = $_POST['nivelusuario'];
$status = 'Ativo';

$sql = "INSERT INTO tbusuario(nome, email, telefone, senha, niveldeacesso, statususuario) 
             VALUES ('$nomeusuario', '$email', '$telefone', '$senha', '$niveldeacesso', '$status')";

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
        <h4>Usuário adicionada com sucesso</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="cadastroUsuario.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </center>
    </div>

</div>