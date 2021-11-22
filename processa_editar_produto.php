<?php

include_once('conexao.php');

session_start();

if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != true){
  header("Location:index.php");
};

$Id = $_POST['id'];
$NomeProduto = $_POST['nome_produto'];
$QtdProduto = $_POST['quantidade_produto'];
$Preco = $_POST['valor_produto'];
$dataFabricacao = $_POST['fabricacao_produto'];

echo $Id;
echo $NomeProduto;



$alteraCadastro = "UPDATE `produtos` SET `nome_produto`='$NomeProduto',`quantidade_produto`='$QtdProduto',`valor_produto`='$Preco',`fabricacao_produto`='$dataFabricacao' WHERE `id_produto`= $Id";

$resultado = mysqli_query($conn, $alteraCadastro);

header("Location:consulta_produto.php");

?>