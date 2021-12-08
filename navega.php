<?php 
session_start();

if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != true){
  header("Location:index.php");
};

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="estilo.css">
		<link rel="stylesheet" href="modal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo_navega.css">
  <title>Navegação / Área restrita</title>
</head>
<body>
  <div class="container mb-5">
    <div class="row">
      <div class="col mb-3">
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
                      <a class="nav-link active"href="cadastro_clientes.php" target="_self">Cadastrar/Clientes</a></a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="cadastro_produtos.php" target="_self">Cadastrar/Produtos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="consulta_cliente.php" target="_self">Consultar/Clientes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="consulta_produto.php" target="_self">Consultar/Produtos</a>
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
      </div>
    </div>
    <div class="row mt-5">
      <div class="col pt-5 text-center">
        <h1> Área Restrita</h1>

        <h3 class="mt-5">Você deseja?</h3>
        <div class="div-navega">
            <a class="btn-my" href="cadastro_clientes.php" target="_self">Cadastrar/Clientes</a>
            <a class="btn-my" href="cadastro_produtos.php" target="_self">Cadastrar/Produtos</a>
            <a class="btn-my" href="consulta_cliente.php" target="_self">Consultar/Clientes</a>
            <a class="btn-my" href="consulta_produto.php" target="_self">Consultar/Produtos</a>
            <a class="btn-my" href="logoff.php" target="_self">Sair</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>