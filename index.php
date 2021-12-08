<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!--Fim Bootstrap-->
     <!--Font Google-->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <!--CSS Próprios -->
    <link rel="stylesheet" href="css/estilo_index.css">
    <title>Área de login</title>
</head>
<body>

    <div class="container-my">
        <div class="row-flex">
            <div class="col-my1 div-titulo"> 
                <h1>
                    Critical Strike
                </h1>
            <p>
            Mussum Ipsum, cacilds vidis litro abertis. Diuretics paradis num copo é motivis de denguis.
            </p>
            </div>
            <div class="div-form-login">
                <h2>login</h2>
                    <form class="mt-1" method="POST" action="valida.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Insira o E-mail</label>
                        <input type="email" class="form-control" placeholder="E-mail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Insira a Senha</label>
                        <input type="password" class="form-control" placeholder="Senha" name="senha">
                    </div>
                    <?php  session_start();    if(isset($_SESSION['loginErro'])){  ?>  <div id="emailHelp" class="form-text">Email ou senha inválido(s).</div> <?php } ?>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form></div>
        </div>
    </div>  
</body>
</html>