<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav>
    <div class="menu">
        <a class="logo"> Página de cadastro</a>
        <div>
        <ul>
            <li class="">
            <a class="menuitem" id="home" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="">
            <a class="menuitem" href="?page=novo">Novo usuário</a>
            </li>
            <li class="">
            <a class="menuitem" href="?page=listar">Listar usuários</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

   <div>
        <div>
            <div class="">
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

</body>
</html>