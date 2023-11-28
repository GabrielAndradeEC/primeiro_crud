<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Cadastro</a>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=novo">Novo usuário</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=listar">Listar usuários</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

   <div class="container">
        <div class="row">
            <div class="col mt-5">
               <?php
                include("config.php");
                switch(@$_REQUEST["page"]){
                    case "novo";
                        include("novo_usuario.php");
                    break;
                    case "listar";
                        include("listar_usuario.php");
                    break;
                    case "salvar";
                        include("salvar_usuario.php");
                        break;
                    case "editar";
                    include("editar_usuario.php");
                    break;
                    default:
                        print "<h1>Bem vindo</h1>";
                }

               ?> 
            </div>
        </div>
   </div>

    <script scr="js/bootstrap.bundle.min.js"></script>

</body>
</html>