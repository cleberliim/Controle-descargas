<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $codigo = $_POST["codigo"];
    $cliente = $_POST["cliente"];
    $filial = $_POST["filial"];
    $data = $_POST["data"];
    $vinculo = $_POST["vinculo"];
    $tipo = $_POST["tipo"];
    $status = $_POST["status"];
    $motorista = $_POST["motorista"];
    $cpfcnpj = $_POST["cpfcnpj"];
    $peso = $_POST["peso"];
    $vp = $_POST["vp"];
    $qvp = $_POST["qvp"];
 

    // Conecta ao banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "comandopay");
    
    // Verifica se a conexão foi estabelecida com sucesso
    if (mysqli_connect_errno()) {
        echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
        exit();
    }
    
    // Prepara a consulta SQL
    $sql = "INSERT INTO descargas (CÓDIGO, cliente, filial, data_hora, vinculo, tipo, status, TITULAR, CPFCNPJ_DA_CONTA, VOLUMETONELADA, vp, QVP) VALUES ('$codigo', '$cliente', '$filial', '$data', '$vinculo', '$tipo', '$status',  '$motorista', '$cpfcnpj', '$peso', '$vp', '$qvp')";

    // Executa a consulta SQL
    if (mysqli_query($conexao, $sql)) {
       header("Location: ../dashboard.php");
    } else {
        echo "Erro ao criar: " . mysqli_error($conexao);
    }
    
    // Fecha a conexão com o banco de dados
    mysqli_close($conexao);
}
