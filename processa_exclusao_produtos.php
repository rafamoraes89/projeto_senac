<?php

include_once('conexao.php');

session_start();

if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != true){
  header("Location:index.php");
};

$Id = $_POST['id'];

$delete = "DELETE FROM produtos WHERE id_produto = $Id";

$resultado = mysqli_query($conn, $delete);


  header("Location:consulta_produto.php");




?>