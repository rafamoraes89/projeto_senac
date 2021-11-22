<?php

  include_once('conexao.php');

  session_start();

  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != true){
    header("Location:index.php");
};

  $pesquisa = $_POST['pesquisa'];

  

  $comando_pesquisa = "SELECT `id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified` FROM `clientes` WHERE `nome` LIKE '%$pesquisa%' ";

  $consulta_pesquisa = mysqli_query($conn,$comando_pesquisa);

  $resultado = mysqli_fetch_assoc($consulta_pesquisa);

  $_SESSION['buscaId'] = $resultado['id'];
  $_SESSION['buscaNome'] = $resultado['nome'];
  $_SESSION['buscaEmail'] = $resultado['email'];
  $_SESSION['buscaSenha'] = $resultado['senha'];
  $_SESSION['buscaNivelAcesso'] = $resultado['niveis_acesso_id'];

  $_SESSION['busca'] = 1;


  header("Location:consulta_cliente.php?busca=1");

  ?>

 
 

