<?php
session_start();  // Inicia a sessão
require_once "../../vendors/Security/Security.php";

// Destroi a sessão
session_unset();  // Remove todas as variáveis de sessão
session_destroy();  // Destroi a sessão

// Redireciona para a página de login ou outra página
header("Location: ../");  
exit();
?>
