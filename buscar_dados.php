<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'comandopay';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Erro de conexão: ' . $conn->connect_error);
}

$valor = $_POST['valor'];

$sql = "SELECT motorista, cte FROM tabela WHERE valor = '$valor'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $data = array('motorista' => $row['motorista'], 'cte' => $row['cte']);
    echo json_encode($data);
} else {
    echo json_encode(null);
}

$conn->close();
