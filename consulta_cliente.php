<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Critical Strike / Consulta Clientes</title>
		<link rel="stylesheet" href="estilo.css">
		<link rel="stylesheet" href="modal.css">
	  <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
		<link rel="stylesheet" href="icons/style.css">
		<link rel="stylesheet" href="css/estilo_navega.css">
		<link rel="stylesheet" href="css/estilo_consulta.css">
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-dark">
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
		<div class="container app mb-2" id="container">
		<h2 class="text-center text-light mt-5 mb-5">Clientes</h2>
						<div class="row">
							<div class="col table-responsive-sm">
							<table class="table table-light table-striped">
									<thead>
										<tr>
											<th scope="col" class="text-center">Id</th>
											<th scope="col" class="text-center">Nome</th>
											<th scope="col" class="text-center">E-mail</th>
											<th>
												<form action="buscar_cliente.php" method="POST"  class="d-flex justify-content-end">
												<input type="text" name="pesquisa" class="form-control input-search">
												<button type="submit" class="form-search"><i class="icon-search"></i></button>
												</form>
											</th>
										</tr>
									</thead>
								<?php  
								include_once("conexao.php");
								

								if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != true){
									header("Location:index.php");
							};

								$registro_clientes = 'select * from clientes';
                $resultado = mysqli_query($conn, $registro_clientes);

								if( isset($_GET['busca']) && $_GET['busca']== 1 && $_SESSION['usuarioniveisacessoid']=="1"){ ?>

									<tbody>
										<tr>
											<td class="text-center"><?php echo  $_SESSION['buscaId']; ?></td>
											<td class="text-center"><?php echo $_SESSION['buscaNome'] ; ?></td>
											<td class="text-center"><?php echo $_SESSION['buscaEmail']; ?></td>
											<td class="text-center">	
												<i class="icon-trash-o p-4" onclick="excluir(<?php echo $_SESSION['buscaId'] ?>)"></i>
												<i class="icon-edit" onclick="editar(<?php echo $_SESSION['buscaId'].',\''.$_SESSION['buscaNome'].'\','.'\''.$_SESSION['buscaEmail'].'\','.'\''.$_SESSION['buscaSenha'] .'\','.'\''.$_SESSION['buscaNivelAcesso'] .'\'' ?>)"></i>
										</td>
										</tr>
								</tbody>
								<?php
								}elseif ($_SESSION['usuarioniveisacessoid']=="1") {
								while($registro=mysqli_fetch_array($resultado)) { 
									$nome = $registro['nome'];
									$id = $registro['id'];
									$email = $registro['email'];
									$senha = $registro['senha'];
									$nivelAcesso = $registro['niveis_acesso_id'];
									?>
								<tbody>
										<tr>
											<td class="text-center"><?php echo $id; ?></td>
											<td class="text-center"><?php echo $nome; ?></td>
											<td class="text-center"><?php echo $email; ?></td>
											<td class="text-center">	
												<i class="icon-trash-o p-4" onclick="excluir(<?php echo $id ?>)"></i>
												<i class="icon-edit" onclick="editar(<?php echo $id.',\''.$nome.'\','.'\''.$email.'\','.'\''.$senha.'\','.'\''.$nivelAcesso.'\'' ?>)"></i>
										</td>
										</tr>
								</tbody>
							<?php } }?>

								<?php if($_SESSION['usuarioniveisacessoid']=="2" && isset($_GET['busca']) && $_GET['busca']== 1 && $_SESSION['buscaNivelAcesso']!=1){ ?>
									<tbody>
										<tr>
											<td class="text-center"><?php echo  $_SESSION['buscaId']; ?></td>
											<td class="text-center"><?php echo $_SESSION['buscaNome'] ; ?></td>
											<td class="text-center"><?php echo $_SESSION['buscaEmail']; ?></td>
											<td></td>
										</tr>
								</tbody>
								<?php } ?>
						
						</div>
					</div>
				</div>		
					<script src="consulta_cliente.js"></script>
	</body>
</html>