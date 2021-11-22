<?php


    include_once("conexao.php");

    session_start();

    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != true){
        header("Location:index.php");
    };



    $nome_produto = filter_input(INPUT_POST,'nome_produto',FILTER_SANITIZE_STRING);
    $quantidade_produto = filter_input(INPUT_POST,'quantidade_produto',FILTER_SANITIZE_STRING);
    $valor_produto = filter_input(INPUT_POST,'valor_produto',FILTER_SANITIZE_STRING);
    $fabricacao_produto = filter_input(INPUT_POST,'fabricacao_produto',FILTER_SANITIZE_STRING);
    


    $result_cadastro = "insert into produtos (nome_produto,quantidade_produto,valor_produto,fabricacao_produto) values ('$nome_produto','$quantidade_produto','$valor_produto','$fabricacao_produto ')";
    $resultado_cadastro = mysqli_query($conn,$result_cadastro);

    header('Location: cadastro_produtos.php?inclusao=1')

    ?>