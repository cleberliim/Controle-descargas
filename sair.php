<?php
// Verifica se o formulário foi enviado
if (isset($_POST['logout'])) {
    
    session_destroy();
    header("Location: login.php");
    exit;
}

?>