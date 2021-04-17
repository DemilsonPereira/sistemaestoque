<?php

    include 'conexao.php';

    $usuario = $_POST['usuario'];
    // $senha = base64_encode($_POST['senha']);
    $senha = $_POST['senha'];

    $sql = "SELECT email, senha FROM tbusuario WHERE email = '$usuario' AND statususuario = 'Ativo'";
    $buscar = mysqli_query($conexao, $sql);

    $total = mysqli_num_rows($buscar);

    while($array = mysqli_fetch_array($buscar)){

        $senhausuario = $array['senha'];

        $senhadecodificada =  $senha;
    

    // if($total > 0){
        if(password_verify($senhadecodificada,$senhausuario)){
            session_start();
            $_SESSION['usuario'] = $usuario;
            header('Location: menu.php');
        }else{
            header('Location: errologin.php');
        }
   

}
        if ($total == 0) {
            header('Location: erro.php');
        }
?>