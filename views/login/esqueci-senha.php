<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci Minha Senha - Clínica Esperança</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <img src="img/logo.png" alt="Clínica Esperança" class="logo">
            <h1>Clínica Esperança</h1>
            <p class="subtitle">Redefina sua senha para ter novamente o acesso à área de pacientes!</p>
            <form>
                <label for="email" class="input-label">E-mail</label>
                <input type="email" id="email" name="email" placeholder="exemplo@gmail.com" required class="input-field">
                
                <div class="captcha">
                    <p>Não sou um robô</p>
                    <div class="recaptcha-placeholder">[reCAPTCHA]</div>
                </div>

                <button type="submit" class="btn">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>
