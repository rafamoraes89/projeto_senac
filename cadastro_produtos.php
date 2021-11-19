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

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <form id="login" method="POST" action="processa_cad_prod.php">
            <h2 class="mt-5 mb-5">Cadastro</h2>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nome do produto</label>
                <input type="text" class="form-control" name="nome_produto" placeholder="Insira o nome do produto" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Quantidade produto</label>
                <input type="text" class="form-control" name="quantidade_produto" placeholder="Digite a quantidade" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Valor do produto</label>
                <input type="text" class="form-control" name="valor_produto" placeholder="Digite o valor" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Data de fabricação Produto</label>
                <input type="text" class="form-control" name="fabricacao_produto" placeholder="Digite a data de fabricação" required>
            </div>
            <br>
            <input type="submit"> 
        </form>
            </div>
        </div>
       
    </div>
</body>
</html>
