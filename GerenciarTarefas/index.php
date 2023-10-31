<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <ul class="navbar-nav">
            <li class="nav-link active">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              <ul class="navbar-nav">
                <li class="nav-link active"><a class="nav-link" href="?page=novo">Novo usuário</a>
                  <ul class="navbar-nav">
                    <li class="nav-link active"><a class="nav-link" href="?page=listar">Lista de usuários</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <?php
        include("conectar.php");
        switch (@$_REQUEST["page"]) {
          case "novo":
            include("novo-usuario.php");
            break;
          case "listar":
            include("listar-usuario.php");
            break;
          case "salvar":
            include("salvar-usuario.php");
            break;
          case "editar":
            include("editar-usuario.php");
            break;
          default:
            print "<h1>Bem vindos</h1>";
        }
        ?>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>