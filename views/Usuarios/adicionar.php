<?php
include "../../includes/autoLoad.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_POST) && count($_POST) > 0) {
    // Faz requisição do controlador
    require_once "../../controllers/UsuarioController.php";
    // Instancia o objeto
    $c = new Usuario();
    // Monta objeto usuário
    $c->setNome(htmlspecialchars($_POST['campoNome']));
    $c->setEmail(htmlspecialchars($_POST['campoEmail']));
    $c->setSenha(md5($_POST['campoSenha']));
   
    // Instacia o Controlador
    $UsuarioController = new UsuarioController();
    // Executa método ADD
    $rs = $UsuarioController->add($c);
    // Redireciona para a INDEX
    if ($rs) {
        header("location: ../../index.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Esperança</title>
    <!-- Importando materialize e boostrap scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row mt-3">
           
            <div class="col-9">
                <h3>Cadastro de Usuários</h3>
                <form action="" method="post">
                    <!-- Input nome -->
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="campoNome" 
                            id="idNome" placeholder="Informe a nome">
                    </div>
                    <!-- Input e-mail -->
                    <div class="mb-3">
                        <label for="idEmail" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" name="campoEmail" 
                            id="idEmail" placeholder="Informe a e-mail">
                    </div>
                    <!-- Input senha -->
                    <div class="mb-3">
                        <label for="idSenha" class="form-label">Senha:</label>
                        <input type="password" class="form-control" name="campoSenha" 
                            id="idSenha" placeholder="Informe a senha">
                    </div>
                   
                   
                    <!-- Botão de envio -->
                    <button type="submit" class="btn btn-success">Gravar</button>
                    <a href="./" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>