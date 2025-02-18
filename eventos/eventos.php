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

<?php include '../includes/include.html'; ?>
    <div class="container">
        <h1>Visão Geral</h1>

        <section class="carrossel" id="carrossel-eventos">
            <h2>Eventos Hospitalares</h2>
            <div class="carrossel-container">
                <button class="prev-btn">❮</button>
                <div class="carrossel-slides">
                    <div class="slide">
                        <img src="../img/exames (2).png" alt="Evento 1">
                        <p>Resultados de Exames</p>
                    </div>
                    <div class="slide">
                        <img src="../img/banner.jpg" alt="Evento 2">
                        <p>Seminário de Neurologia - 20/11/2024</p>
                    </div>
                    <div class="slide">
                        <img src="../img/consulta-médica.png" alt="Evento 3">
                        <p>Workshop de Clínica Geral - 25/11/2024</p>
                    </div>
                </div>
                <button class="next-btn">❯</button>
            </div>
        </section>

        <!-- Carrossel de Notícias -->
        <section class="carrossel" id="carrossel-noticias">
            <h2>Notícias</h2>
            <div class="carrossel-container">
                <button class="prev-btn">❮</button>
                <div class="carrossel-slides">
                    <div class="slide">
                        <img src="../img/aparelho.png" alt="Notícia 1">
                        <p>Rede D’Or e Hospital Copa Star inovam com o primeiro aparelho Symbia Pro.specta SPECT/CT da Siemens no Brasil.</p>
                    </div>
                    <div class="slide">
                        <img src="../img/cirurgia.png" alt="Notícia 2">
                        <p>Inauguração da nova ala de emergência.</p>
                    </div>
                    <div class="slide">
                        <img src="../img/logo.png" alt="Notícia 3">
                        <p>Parceria com universidades para pesquisa médica.</p>
                    </div>
                </div>
                <button class="next-btn">❯</button>
            </div>
        </section>

    </div>
    <?php include '../includes/footer.html'; ?>

    <script src="eventos.js"></script>
</body>
</html>
