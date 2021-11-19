<?php
    // Start do nosso arquivo PHP
    session_start();
    // Abertura dos parâmetros para conectar ao banco de dados
    include_once ("conexao.php");

    if ((isset($_POST['email']) && (isset($_POST['senha'])))) {
        $usuario = mysqli_real_escape_string($conn, $_POST['email']);//Converte o Email em string e ajusta caracteres especiais
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $senha = md5($senha);

        //Busca pesquisa na tela com o usuário e senha digitados, correspondentes no formulário
        $result_usuario = "select * from clientes where email='$usuario' && senha='$senha'";
        //echo $result_usuario;
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);

        // Tratamento do retorno do banco de dados
        if (isset($resultado)) {
            $_SESSION['usuarioid']=$resultado['id'];
            $_SESSION['usuarionome']=$resultado['nome'];
            $_SESSION['usuarioniveisacessoid']=$resultado['niveis_acesso_id'];
            $_SESSION['usuarioemail']=$resultado['email'];
            if ($_SESSION['usuarioniveisacessoid']=="1") {
                header("Location: cadastro_administrativo.php");
            }elseif ($_SESSION['usuarioniveisacessoid']=="2") {
                header("Location: consulta_clientes.php");
            }
        }else {
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: index.php");
           
           
        }
    }
?>