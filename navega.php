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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="icons/style.css">
  <title>Navegação / Área restrita</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="cadastro_clientes.php" target="_blank">Cadastrar/Clientes</a>
                        <a class="nav-link" href="cadastro_produtos.php" target="_blank">Cadastrar/Produtos</a>
                        <a class="nav-link" href="consulta_cliente.php" target="_blank">Consultar/Clientes</a>
                        <a class="nav-link" href="consulta_produto.php" target="_blank">Consultar/Produtos</a>
                        <a class="nav-link" href="logoff.php" target="_self">Sair</a>
                    </div>
              </div>
            </div>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col pt-5 text-center">
        <h1>Área Restrita</h1>
      </div>
    </div>
  </div>
</body>
</html>