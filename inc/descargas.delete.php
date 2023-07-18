<?php

include_once("../db/conection.php");
// Obter o ID a ser excluído
$id = $_POST['id'];

// Preparar e executar a instrução SQL de exclusão
$sql = "DELETE FROM descargas WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header('Location: ../dashboard.php');
} else {
    echo "Erro na exclusão: " . $conn->error;
}

// Fechar a conexão
$conn->close();
