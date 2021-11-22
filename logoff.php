<?php

  include_once('conexao.php');
  
  session_start();

  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != true){
    header("Location:index.php");
};

  session_destroy();

  header("Location:index.php");

?>