<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $imagem = $_FILES['imagem'];

    // Diretório para salvar a imagem
    $uploadDir = '../../img/';
    $uploadFile = $uploadDir . basename($imagem['name']);

    // Verificar e mover o arquivo
    if (move_uploaded_file($imagem['tmp_name'], $uploadFile)) {
        // Carregar as notícias existentes
        include 'dados_noticias.php';

        // Adicionar a nova notícia
        $noticias[] = [
            "titulo" => $titulo,
            "descricao" => $descricao,
            "imagem" => basename($imagem['name'])
        ];

        // Atualizar o arquivo PHP
        $noticiasPHP = '<?php $noticias = ' . var_export($noticias, true) . ';';
        file_put_contents('dados_noticias.php', $noticiasPHP);

        // Redirecionar para a página principal
        header('Location: eventos.php');
        exit;
    } else {
        echo "Erro ao enviar a imagem.";
    }
}
?>
