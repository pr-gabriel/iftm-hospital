<?php 
    include "../../includes/autoLoad.php";
    Security::verifyAuthentication();
  

    
?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Esperança</title>
    <link rel="stylesheet" href="eventos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <?php include '../../includes/navbar.php';
   
    
    
    ?>
    <div class="container">
        <h1>Visão Geral</h1>

        <section class="carrossel" id="carrossel-eventos">
            <h2>Eventos Hospitalares</h2>
            <div class="carrossel-container">
                <button class="prev-btn">❮</button>
                <div class="carrossel-slides">
                    <div class="slide">
                        <img src="../../img/Card7.jpeg" alt="Evento 1">
                        <p>Resultados de Exames</p>
                    </div>
                    <div class="slide">
                        <img src="../../img/Card8.jpeg" alt="Evento 3">
                        <p>Workshop de Clínica Geral - 25/11/2024</p>
                    </div>
                </div>
                <button class="next-btn">❯</button>
            </div>
        </section>

        <!-- Carrossel de Notícias -->
        <?php include 'dados_noticias.php'; ?>
        <section class="carrossel" id="carrossel-noticias">
            <h2>Notícias</h2>
            <div class="carrossel-container">
                <button class="prev-btn">❮</button>
                <div class="carrossel-slides">
                    <?php foreach ($noticias as $noticia): ?>
                        <div class="slide">
                            <img src="../../img/<?php echo htmlspecialchars($noticia['imagem']); ?>" alt="<?php echo htmlspecialchars($noticia['titulo']); ?>">
                            <p><?php echo htmlspecialchars($noticia['descricao']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="next-btn">❯</button>
            </div>
        </section>
        <?php
    require_once "../../controllers/AdminController.php";

// Verifica se a sessão contém o e-mail do usuário
if (isset($_SESSION['usuario_email'])) {
    $email = $_SESSION['usuario_email'];
    
    // Instancia o controlador de administrador
    $admin = new Administrador();

    // Verifica o status do usuário (1 para admin, 2 para usuário comum)
    $status = $admin->isAdmin($email);

    // Se o status for 1, exibe o formulário de upload
    if ($status === 1) {
        ?>
        <!-- Formulário de Upload de Imagem -->
        <section id="upload-imagem" class="container py-5">
    <h2 class="text-center mb-4">Adicionar Notícia</h2>
    
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <!-- Título -->
        <div class="mb-3">
            <label for="titulo" class="form-label">Título da Notícia:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>

        <!-- Descrição -->
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="4" required></textarea>
        </div>

        <!-- Imagem -->
        <div class="mb-3">
            <label for="imagem" class="form-label">Escolher Imagem:</label>
            <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*" required>
        </div>

        <!-- Botão de Enviar -->
        <div class="text-center">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</section>

        <?php
    } else {
        // Mensagem para usuários comuns
        echo "<p>Você não tem permissão para acessar esta área.</p>";
    }
} else {
    // Mensagem caso a sessão não esteja ativa ou o e-mail não esteja definido
    echo "<p>Sessão não iniciada ou e-mail não encontrado.</p>";
}
?>

    </div>
    <?php include '../../includes/footer.php'; ?>

    <script src="eventos.js"></script>
</body>

</html>