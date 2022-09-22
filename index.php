<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body style="background-color: #d0d3d6;">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container-sm ">
        <h1 class="navbar-brand text-center justify-content-center align-items-center mb-1" href="index.php">Cadastro</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=novo">Novo Usuário</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=listar">Listar Usuários</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>


    <div class="container" style="background-color: #d0d3d6;"> 
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("config.php");
                    switch(@$_REQUEST["page"]){
                    case "novo":
                        include("novo-usuario.php");
                    break;
                    case "listar":
                        include("listar-usuario.php");
                    break;
                    case "salvar":
                        include("salvar-usuario.php");
                    break;
                    default:
                        print "<h1>Bem vindos!</h1>";
                    }
                ?>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>