<?php
$servername = "localhost";  // Endereço do servidor do banco de dados
$username = "root"; // Nome de usuário do banco de dados
$password = "";   // Senha do banco de dados
$dbname = "comandopay"; // Nome do banco de dados

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

//echo "Conexão bem-sucedida";

// Depois de usar a conexão, lembre-se de fechá-la
//$conn->close();
