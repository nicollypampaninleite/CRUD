<?php date_default_timezone_set('America/Sao_Paulo'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"crossorigin="anonymous">
</head>

<body class="container">

    <!--Exibição do Menu-->
    <?php require "menu.php";?>

    <h1>Cadastro do usuário</h1>

    <form action="" id="frmUsuario" name= "frmUsuario" method="POST">
    <div class="row">
    <!-- Cídigo do usuário somente como leitura-->
    <div class="col-6">
            <div class="group-form">
                <label for="txtCodigoUsuario">Código</label>
                <input type="text" name="txtCodigoUsuario" id="txtCodigoUsuario"class="form-control"
                 placeholder="Código" value=""readonly>
            </div>
        </div>        
        <!-- Data do cadastro somente leitura-->
        <div class="col-6">
            <div class="group-form">
                <label for="txtDataCadastro"> Data de Cadastro</label>
                <input type="datetime-local" name="txtDataCadastro" id="txtDataCadastro"
                class="form-control" placeholder="Data do Cadastro"value="<?=date('Y-m-d\\TH:i');?>"readonly>
            </div>
        </div>
    </div>   
    <!-- Nome usuário-->
    <div class= "row">
        <div class= "col">
            <div class="group-form">
                <label for="txtNome">Nome</label>
                <input type="text" name="txtNome" id="txtNome"
                class="form-control" placeholder="Nome da pessoa" value="" > 
            </div>
        </div>
    </div>

    <!--Nome do usuário-->
    <div class= "row">
        <div class="col">
            <div class="group-form">
                <label for="txtLogin">Login</label>
                <input type="text" name="txtLogin" id= "txtLogin" class="form-control" placeholder="Login" value="">
            </div>
        </div>
    </div>

    <!--Senha-->
    <div class="row">
        <div class="col">
            <div class="group-form">
                <label for="txtSenha">Senha</label>
                <input type="password" name="txtSenha" id= "txtSenha" 
                class="form-control" placeholder="Senha" value="">
            </div>
        </div>
    </div>

    <!-- Confirmação de senha-->
    <div class="row">
        <div class="col">
            <div class="group-form">
                <label for="txtConfirmaSenha">Confirmação de Senha</label>
                <input type="password" name="txtConfimaSenha" id= "txtConfirmaSenha" 
                class="form-control" placeholder="Confirmação de Senha" value="">
            </div>
        </div>
    </div>

    <br>

    <!--Botões-->
    <div class="row">
        <div class="col-1">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
        <div class="col-1">
            <button type="reset" class="btn btn-secondary">limpar</button>
        </div>
        <div class="col-1">
            <button type="button" class="btn btn-danger" id="btnApagar" onclick="apagarRegistro()">Deletar</button>
        </div>
    </div>
</form>   


<!--incluindo biblioteca para utilizar o jQuery-->
 <script src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <!-- SweetAlert2-->
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Incluindo o arquivo do JS -->
    <script src="js/usuario.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>