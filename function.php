<?php
include_once("db/conection.php");

function retorna($codigo, $conn)
{
    $codigo = mysqli_real_escape_string($conn, $codigo); // Evitar SQL Injection

    $result = "SELECT * FROM descargas WHERE CÓDIGO = '$codigo' LIMIT 1";
    $resultado_base = mysqli_query($conn, $result);

    if ($resultado_base->num_rows) {
        $row_db = mysqli_fetch_assoc($resultado_base);
        $valores['cliente'] = $row_db['cliente'];
        $valores['motorista'] = $row_db['TITULAR'];
        $valores['valores'] = $row_db['VALOR']; //primeiro nome do valor do input, segundo é o nome da coluna no DB
        $valores['filial'] = $row_db['filial'];
        $valores['peso'] = $row_db['peso'];
        $valores['vinculo'] = $row_db['vinculo'];
    } else {
        $valores['cliente'] = 'Não encontrado';
        $valores['motorista'] = 'Não encontrado';
        $valores['valores'] = 'Não encontrado';
        $valores['filial'] = 'Não encontrado';
        $valores['peso'] = 'Não encontrado';
        $valores['vinculo'] = 'Não encontrado';
    }
    return json_encode($valores);
}

if (isset($_GET['codigo'])) {
    header('Content-Type: application/json'); // Definir o cabeçalho JSON
    echo retorna($_GET['codigo'], $conn);
}
