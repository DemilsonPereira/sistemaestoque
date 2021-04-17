<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `tbestoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) 
             VALUES ($nroproduto, '$nomeproduto', '$categoria', $quantidade, '$fornecedor')";

// $sql = "CALL SP_INSERIRPRODUTOS($nroproduto, '$nomeproduto', '$categoria', $quantidade, '$fornecedor')";


$inserir = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);


mysqli_close($conexao);


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
        <h4>Produto adicionado com sucesso</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="adicionarProduto.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo item</a>
        </center>
    </div>

</div>