<?php 

session_start();

if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != true){
    header("Location:index.php");
};


if($_SESSION['usuarioniveisacessoid']=="2"){
    header("Location:consulta_cliente.php");
};

?>


<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastros</title>

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="css/estilo_cadastro.css">
    <link rel="stylesheet" href="css/estilo_navega.css">
</head>
<body>
    <div class="container mt-5 mb-3">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
              <div class="container">
                <a class="navbar-brand" href="#">
                  <img src="logo-critical9.svg" alt="">
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarNav"
                  aria-controls="navbarNav"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav-items" id="navbarNav">
                  <ul class="navbar-nav ms-md-auto">
                    <li class="nav-item">
                      <a class="nav-link active"href="cadastro_clientes.php">Cadastrar/Clientes</a></a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="cadastro_produtos.php">Cadastrar/Produtos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="consulta_cliente.php">Consultar/Clientes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="consulta_produto.php">Consultar/Produtos</a>
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        href="logoff.php" target="_self">Sair</a>
                      >
                    </li>
                  </ul>
                </div>
              </div>
          </nav>
        <div class="row">
            <div class="col">
            <form id="login" method="POST" action="processa_cad_cliente.php">
            <h2 class="mt-5 mb-5">Cadastro de Clientes</h2>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite o Nome" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Digite o Email" required>
            </div>
            <label>N??vel de usu??rio</label>
            <div class="mb-3 mt-2 d-flex justify-content-between div-select align-items-center form-control">
                <label>Selecione 1 para administrador ou 2 para s?? usu??rio</label>
                <select name="nivel_de_acesso">
                    <option value="1">1</option>
                    <option value="2" selected>2</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Senha</label><br>
                <input  class="form-control" type="password" name="senha" required>
            </div>
            <?php if( isset($_GET['inclusao']) && $_GET['inclusao']== 1){ ?>
              <div id="labelInfoResp" class="bg-success text-light p-2 d-flex justify-content-center">
                  Registro inserido com sucesso
              </div>
          <?php  } ?>
          
            <br>
            <input type="submit"  class="form-control input-submit">
        </form>
            </div>
        </div>
        <script>
          try{
            if(labelInfoResp){
        setTimeout(() => {
          labelInfoResp.remove()
        }, 1000); 
      }
          } catch(error){
            console.log('Tudo normal por aqui')
          }
    
    </script>
    </div>
</body>
</html>
