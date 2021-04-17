<?php

    include 'conexao.php';

    $id = $_POST['id'];
    $nomefornecedor = $_POST['nomefornecedor'];
    

    $sql = "UPDATE tbfornecedor SET nome = '$nomefornecedor' WHERE id_fornecedor = $id";

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
        <h4>Atualizada com sucesso</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="listarFornecedor.php" role="button" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
        </center>
    </div>

</div>