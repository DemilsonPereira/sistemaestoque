<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM tbusuario WHERE id_usuario = $id";

$deletar = mysqli_query($conexao, $sql);

header("location: listarUsuario.php"); //redireciona novamente para a página de aprovação

?>