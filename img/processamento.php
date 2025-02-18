<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recaptchaSecret = 'SUA_CHAVE_SECRETA_AQUI';
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Verifica a resposta do reCAPTCHA
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        echo "Por favor, confirme que você não é um robô.";
    } else {
        // Continue com o processamento do formulário (ex: autenticação, cadastro, etc.)
        echo "Verificação do reCAPTCHA bem-sucedida.";
    }
}
?>