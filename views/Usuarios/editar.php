<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../../includes/autoLoad.php";
Security::verifyAuthentication();
// Requisita controlador
require_once "../../controllers/UsuarioController.php";
// Instacia o controlador
$UsuarioController = new UsuarioController();

// Verificações
if (isset($_POST) && count($_POST) > 0) {
    // Gravação dos dados
    $c = new Usuario();

    $c->setId(htmlspecialchars($_POST['campoId']));
    $c->setNome(htmlspecialchars($_POST['campoNome']));
    $c->setEmail(htmlspecialchars($_POST['campoEmail']));
    // Executa método EDIT
    $rs = $UsuarioController->edit($c);
    // Redireciona para a INDEX
    if ($rs) {
        header("Location: redirect.php?id=" . $c->getId());
        exit();
    }
    

} else if(isset($_GET['id']) && !empty($_GET['id'])) {
    $dado = $UsuarioController->findId($_GET['id']);
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
                <h3>Mudar usuário</h3>
                <form action="" method="post">
                    <input type="hidden" name="campoId" value="<?= $dado->getId(); ?>">
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="campoNome" 
                            id="idNome" placeholder="Seu nome completo"
                            value="<?= $dado->getNome(); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="idEmail" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="campoEmail" 
                            id="idEmail" placeholder="Seu email"
                            value="<?= $dado->getEmail(); ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Gravar</button>
                    <a href="../agendamento/agendamento.php" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>