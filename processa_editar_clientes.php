<?php

include_once('conexao.php');

session_start();

if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != true){
  header("Location:index.php");
};

$Nome = $_POST['nome'];
$Email = $_POST['email'];
$NivelAcesso = $_POST['nivel_de_acesso'];
$Id = $_POST['id'];
$senha = $_POST['senha'];
$Senha = md5($senha);



$alteraCadastro = "UPDATE clientes SET nome= '$Nome', email= '$Email', senha='$Senha', niveis_acesso_id= '$NivelAcesso' WHERE id = $Id";

$resultado = mysqli_query($conn, $alteraCadastro);

header("Location:consulta_cliente.php");

?>