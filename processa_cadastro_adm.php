<?php


    include_once("conexao.php");


    $nivel_acesso = filter_input(INPUT_POST,'nivel_de_acesso',FILTER_SANITIZE_STRING);

    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
    
    $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);
    $senha = md5($senha);
   


    $result_cadastro = "insert into clientes (nome,email,senha,situacoe_id,niveis_acesso_id,created,modified) values ('$nome','$email','$senha',1,'$nivel_acesso',now(),now())";
    $resultado_cadastro = mysqli_query($conn,$result_cadastro);
    
    $mostra_cadastro = mysqli_query($conn, "select * from clientes");

    $resultado = mysqli_fetch_assoc($mostra_cadastro);

    print_r($resultado);

    ?>