<?php

    include 'conexao.php';

    $id = $_POST['id'];
    $nomeusuario = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = base64_encode($_POST['senha']);
    $niveldeacesso = $_POST['niveldeacesso'];

    $sql = "UPDATE tbusuario SET nome = '$nomeusuario', email = '$email', telefone = '$telefone', senha = '$senha', niveldeacesso = '$niveldeacesso' WHERE id_usuario = $id";

    $atualizar = mysqli_query($conexao, $sql);

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
        <h4>Atualizado com sucesso</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="listarUsuario.php" role="button" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
        </center>
    </div>

</div>