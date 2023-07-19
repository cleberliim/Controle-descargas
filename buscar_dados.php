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

$sql = "SELECT campo1, campo2 FROM tabela WHERE valor = '$valor'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $data = array('campo1' => $row['campo1'], 'campo2' => $row['campo2']);
    echo json_encode($data);
} else {
    echo json_encode(null);
}

$conn->close();
