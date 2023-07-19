<?php

include_once("../db/conection.php");

// Obtém os valores enviados pelo formulário
if (isset($_POST['update'])) {

    $id = $_POST["id"];
    $codigo = $_POST["codigo"];
    $cliente = $_POST["cliente"];
    $filial = $_POST["filial"];
    $data = $_POST["data"];
    $vinculo = $_POST["vinculo"];
    $tipo = $_POST["tipo"];
    $valor = $_POST["valor"];
    $status = $_POST["status"];
    $motorista = $_POST["motorista"];
    $cpfcnpj = $_POST["cpfcnpj"];
    $peso = $_POST["peso"];
    $vp = $_POST["vp"];
    $qvp = $_POST["qvp"];

    // Escapar caracteres especiais para evitar injeção de SQL
    $codigo = mysqli_real_escape_string($conn, $codigo);
    $cliente = mysqli_real_escape_string($conn, $cliente);
    $filial = mysqli_real_escape_string($conn, $filial);
    $data = mysqli_real_escape_string($conn, $data);
    $vinculo = mysqli_real_escape_string($conn, $vinculo);
    $tipo = mysqli_real_escape_string($conn, $tipo);
    $valor = mysqli_real_escape_string($conn, $valor);
    $status = mysqli_real_escape_string($conn, $status);
    $motorista = mysqli_real_escape_string($conn, $motorista);
    $cpfcnpj = mysqli_real_escape_string($conn, $cpfcnpj);
    $peso = mysqli_real_escape_string($conn, $peso);
    $vp = mysqli_real_escape_string($conn, $vp);
    $qvp = mysqli_real_escape_string($conn, $qvp);

    // Atualiza os dados na tabela
    $sql = "UPDATE descargas SET `CÓDIGO` = '$codigo', `cliente` = '$cliente', `filial` = '$filial', `data_hora` = '$data', `vinculo` = '$vinculo', `tipo` = '$tipo', `VALOR` = $valor, `STATUS` = '$status', `TITULAR` = '$motorista', `CPFCNPJ_DA_CONTA` = '$cpfcnpj', `peso` = '$peso', `vp` = '$vp', `QVP` = '$qvp' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../dashboard.php');
        exit;
    } else {
        echo "Erro na atualização: " . $conn->error;
    }
}

// Fechar a conexão
$conn->close();
