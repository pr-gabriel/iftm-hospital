<?php
include "../../includes/autoLoad.php";

if(isset($_POST) && count($_POST) > 0) {

    // Faz requisição do controlador
    require_once "../../controllers/LoginController.php";
    // Instancia o objeto
    $user = new Usuario();
    // Monta objeto usuário
    $user->setEmail(htmlspecialchars($_POST['campoEmail']));
    $user->setSenha(md5($_POST['campoSenha']));
    // Instacia o Controlador
    $LoginController = new LoginController();
    // Executa método ADD
    $rs = $LoginController->login($user);
    // Redireciona para a INDEX
    if ($rs) {
        header("location: ./");
        exit();
    }
}

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Clínica Esperança</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="container">
        <div class="form">
            <img src="img/logo.png" alt="Clínica Esperança" class="logo">
            <p class="subtitle">Faça login com sua conta ou <a href="cadastro.html">se cadastre</a>, para ter acesso à área de pacientes!</p>
            
           
            <form id="loginForm" action="seu_script_de_processamento.php" method="POST">
                <label for="usuario" class="input-label">Usuário</label>
                <input type="text" id="usuario" name="usuario" placeholder="Seu nome" required class="input-field">
                
                <label for="senha" class="input-label">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required class="input-field">
                
                <div class="show-password">
                    <input type="checkbox" id="mostrarSenha">
                    <label for="mostrarSenha">Mostrar a senha</label>
                </div>

               
                <div class="g-recaptcha" data-sitekey=""></div>

                <button type="submit" class="btn">Entrar</button>
                <a href="esqueci-senha.html" class="forgot-link">Esqueceu a senha?</a>
            </form>

            
            <p class="register-link">Não tem uma conta? <a href="cadastro.html">Cadastre-se aqui</a></p>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>