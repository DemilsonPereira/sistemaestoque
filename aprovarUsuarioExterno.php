<?php

include 'conexao.php';

$id = $_GET['id'];
$niveldeacesso = $_GET['niveldeacesso'];

if ($niveldeacesso == 1) {
    $update = "UPDATE tbusuario SET statususuario = 'Ativo', niveldeacesso = 1 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao, $update);
    // echo "ADMINISTRADOR APROVADO";
    header("location: aprovarUsuario.php");
}
if ($niveldeacesso == 2) {
    $update = "UPDATE tbusuario SET statususuario = 'Ativo', niveldeacesso = 2 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao, $update);
    // echo "FUNCIONÁRIO APROVADO";
    header("location: aprovarUsuario.php");
}
if ($niveldeacesso == 3) {
    $update = "UPDATE tbusuario SET statususuario = 'Ativo', niveldeacesso = 3 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao, $update);
    // echo "CONFERENTE APROVADO";
    header("location: aprovarUsuario.php");
}

?>
<?php

session_start();

$usuario = $_SESSION['usuario'];

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

?>