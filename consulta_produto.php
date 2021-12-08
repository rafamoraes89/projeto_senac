<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Critical Strike / Consulta Produtos</title>

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
	<div class="container" id="container">
	
	</div>
		<div class="container  mb-2">
						<div class="row">
						<h2 class="text-center text-light mt-5 mb-5">Produtos</h2>
							<div class="col table-responsive-sm">
								<table class="table table-light table-striped">
									<thead>
										<tr>
											<th scope="col" class="text-center">Id</th>
											<th scope="col" class="text-center">Nome do Produto</th>
											<th scope="col" class="text-center">Quantidade</th>
											<th scope="col" class="text-center">Preço</th>
											<th scope="col" class="text-center">Data de Entrada</th>
											<th></th>
										</tr>
									</thead>
								<?php  
								include_once("conexao.php");
								$registro_produtos = 'select * from produtos';

								if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != true){
									header("Location:index.php");
							};

								if($_SESSION['usuarioniveisacessoid']=="2"){
									header("Location:consulta_cliente.php");
								};

                $resultado = mysqli_query($conn, $registro_produtos);


								while($registro=mysqli_fetch_array($resultado)) { 
									$nome_produto = $registro['nome_produto'];
									$id_produto = $registro['id_produto'];
									$quantidade_produto = $registro['quantidade_produto'];
									$valor_produto = $registro['valor_produto'];
									$fabricacao_produto = $registro['fabricacao_produto']
									?>
								<tbody">
									<tr>
										<td class="text-center"><?php echo $id_produto ?></td>
										<td class="text-center"><?php echo" $nome_produto" ?></td>
										<td class="text-center"><?php echo"$quantidade_produto" ?></td>
										<td class="text-center"><?php echo"$valor_produto" ?></td>
										<td class="text-center"><?php echo"$fabricacao_produto" ?></td>
										<td class="text-center">
										<i class="icon-trash-o p-3" onclick="excluir(<?php echo $id_produto ?>)"></i>
										<i class="icon-edit" onclick="editar(<?php echo $id_produto.',\''.$nome_produto.'\','.'\''.$quantidade_produto.'\','.'\''.$valor_produto.'\','.'\''.$fabricacao_produto.'\'' ?>)"></i>
										</td>
									</tr>
								</tbody>	
								</div>
							<?php } ?>
							</table>
							</div>
						</div>
				</div>
		</div>
		<script>
		
		function editar(id_produto,nome_produto,quantidade_produto,valor_produto,fabricacao_produto){
			console.log(id_produto,nome_produto,quantidade_produto,valor_produto,fabricacao_produto)

		 	let container =	document.querySelector('#container')
		
			let modalEditar = document.createElement('div')
			
			modalEditar.className = 'modalEditar'
			modalEditar.id = 'modalEditarId'
			
			//criar o formulário
			let form = document.createElement('form')
			form.action = 'processa_editar_produto.php'
			form.method = 'post'

			// criar input para guardar o id da tarefa
			let inputId = document.createElement('input')
			inputId.type = 'hidden'
			inputId.name = 'id'
			inputId.value = id_produto
			

			//criar os inputs para entrada de texto
			let inputNome = document.createElement('input')
			inputNome.type = 'text'
			inputNome.name = 'nome_produto'
			inputNome.className = 'inputNome'
			inputNome.placeholder = 'Produto'
			inputNome.value = nome_produto
		

			let inputQtd = document.createElement('input')
			inputQtd.type = "text"
			inputQtd.name = 'quantidade_produto'
			inputQtd.className = 'quantidade_produto'
			inputQtd.placeholder = 'quantidade_produto'
			inputQtd.value = quantidade_produto

			let inputPreco = document.createElement('input')
			inputPreco.type = "text"
			inputPreco.name = 'valor_produto'
			inputPreco.className = 'valor_produto'
			inputPreco.placeholder = 'Preço'
			inputPreco.value = valor_produto

			let inputDataFabricacao = document.createElement('input')
			inputDataFabricacao.type = 'text'
			inputDataFabricacao.name = 'fabricacao_produto'
			inputDataFabricacao.className = 'fabricacao_produto'
			inputDataFabricacao.placeholder = 'data de fabricação'
			inputDataFabricacao.value = fabricacao_produto
			//cria label de título do form
			let labelTitulo = document.createElement('label')
			labelTitulo.innerHTML = 'Alterar'

			//criar um button para o envio do form
			let inputSubmit = document.createElement('input')
			inputSubmit.type = 'submit'
			inputSubmit.className = 'btn btn-success inputSubmit'
			inputSubmit.innerHtml = 'atualizar'

			let divClose = document.createElement('div')
			divClose.className = 'divClose '
			divClose.id = 'inputCloseId'

			let iconX = document.createElement('i')
			iconX.className = 'icon-x-octagon'

			divClose.appendChild(iconX)
			
		

			//incluir inputs no form
			form.appendChild(labelTitulo)
			form.appendChild(inputNome)
			form.appendChild(inputQtd)
			form.appendChild(inputPreco)
			form.appendChild(inputDataFabricacao)
			form.appendChild(divClose)

			form.appendChild(inputId)

			//incluir button no form
			form.appendChild(inputSubmit)

			modalEditar.appendChild(form)

		container.appendChild(modalEditar)

		document.getElementById("inputCloseId").addEventListener("click", function() {
			document.getElementById("modalEditarId").remove()
});
	
	}
	
function excluir(id){

	console.log(id)

	let confirmar = window.confirm('Você realmente deseja excluir o registro?')
	let container =	document.querySelector('#container')
	let Form = document.createElement('form')
		Form.action = "processa_exclusao_produtos.php"
		Form.method = 'POST'
		Form.id = 'FormExcluir'
	

		let inputExcluir = document.createElement('input')
		inputExcluir.name = 'id'
		inputExcluir.value = id


		Form.appendChild(inputExcluir)
		container.appendChild(Form)

	if(confirmar){

	document.querySelector("#FormExcluir").submit()
	

	}else{
		document.querySelector("#FormExcluir").remove()
	}

	

}
	
	</script>
	</body>
</html>