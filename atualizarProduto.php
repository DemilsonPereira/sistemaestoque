<?php

    include 'conexao.php';

    $id = $_POST['id'];
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

    $sql = "UPDATE tbestoque SET nomeproduto= '$nomeproduto',categoria= '$categoria',quantidade= $quantidade,fornecedor= '$fornecedor' WHERE id_estoque = $id";

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
            <a href="listarProduto.php" role="button" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
        </center>
    </div>

</div>