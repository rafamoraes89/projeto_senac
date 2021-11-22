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
	</head>

	<body>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="container-fluid">
									<a class="navbar-brand" href="#">Navbar</a>
										<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
											<span class="navbar-toggler-icon"></span>
										</button>
								<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
									<div class="navbar-nav">
											<a class="nav-link" href="cadastro_clientes.php">Cadastrar/Clientes</a>
											<a class="nav-link" href="cadastro_produtos.php">Cadastrar/Produtos</a>
											<a class="nav-link" href="consulta_cliente.php">Consultar/Clientes</a>
											<a class="nav-link" href="consulta_produto.php">Consultar/Produtos</a>
											<a class="nav-link" href="logoff.php" target="_self">Sair</a>
									</div>
						</div>
					</div>
			</nav>
		</div>


		<div class="container app" id="container">
					<div class="container pagina">
						<div class="row">
							<div class="col">
							<div class="d-flex justify-content-between">
							<h4>Clientes</h4>
							<form action="buscar_cliente.php" method="POST">
							<span>
							<input type="text" name="pesquisa">
							<button type="submit"><i class="icon-search"></i></button>
							</span>	
							</form>
							</div>	
								<hr />
								<?php  
								include_once("conexao.php");
								

								if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != true){
									header("Location:index.php");
							};

								$registro_clientes = 'select * from clientes';
                $resultado = mysqli_query($conn, $registro_clientes);

								if( isset($_GET['busca']) && $_GET['busca']== 1 && $_SESSION['usuarioniveisacessoid']=="1"){ ?>

									<div class="row mb-3 d-flex align-items-center tarefa" id="editar">
									<div class="col-sm-9">Nome:<?php echo $_SESSION['buscaNome'] ?> | E-mail: <?php echo $_SESSION['buscaEmail'] ?>  </div>
									<div class="col-sm-3 mt-2 d-flex justify-content-around">
										<i class="icon-trash-o text-danger" onclick="excluir(<?php echo $_SESSION['buscaId'] ?>)"></i>
										<i class="icon-edit text-info" onclick="editar(<?php echo $_SESSION['buscaId'].',\''.$_SESSION['buscaNome'].'\','.'\''.$_SESSION['buscaEmail'].'\','.'\''.$_SESSION['buscaSenha'] .'\','.'\''.$_SESSION['buscaNivelAcesso'] .'\'' ?>)"></i>
									</div>
								</div>
								
								<?php
								}elseif ($_SESSION['usuarioniveisacessoid']=="1") {
								while($registro=mysqli_fetch_array($resultado)) { 
									$nome = $registro['nome'];
									$id = $registro['id'];
									$email = $registro['email'];
									$senha = $registro['senha'];
								
									$nivelAcesso = $registro['niveis_acesso_id'];
									?>
								<div class="row mb-3 d-flex align-items-center tarefa" id="editar">
									<div class="col-sm-9">Nome:<?php echo" $nome" ?> | E-mail: <?php echo"$email" ?>  </div>
									<div class="col-sm-3 mt-2 d-flex justify-content-around">
										<i class="icon-trash-o text-danger" onclick="excluir(<?php echo $id ?>)"></i>
										<i class="icon-edit text-info" onclick="editar(<?php echo $id.',\''.$nome.'\','.'\''.$email.'\','.'\''.$senha.'\','.'\''.$nivelAcesso.'\'' ?>)"></i>
									</div>
								</div>
									<hr>
							<?php } }?>

								<?php if($_SESSION['usuarioniveisacessoid']=="2" && isset($_GET['busca']) && $_GET['busca']== 1){ ?>

									<div class="row mb-3 d-flex align-items-center tarefa" id="editar">
										<div class="col-sm-9">Nome:<?php echo $_SESSION['buscaNome'] ?> | E-mail: <?php echo $_SESSION['buscaEmail'] ?>  </div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			
		</div>
					<script src="main.js"></script>
	</body>
</html>