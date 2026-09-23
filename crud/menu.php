<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Projeto CRUD</a>        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" 
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle active"href="#" role="button" 
                         data-bs-toggle="dropdown"aria-expanded="false">
                         Usuários
                     </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="cadastro_usuario.php">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="visualiza_usuario.php">Visualizar</a></li>

                    </ul>
                </li> 
                <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle active"href="#"role="button" 
                         data-bs-toggle="dropdown"aria-expanded="false">
                         Categorias
                    </a>  
                    <ul class="dropdown-menu"> 
                        <li><a class="dropdown-item" href="cadastra_categoria.php">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="visualiza_categoria.php">Visualizar</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
    </nav>
</body>

</html>