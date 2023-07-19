<?php
include_once("db/conection.php");

function retorna($codigo, $conn)
{
    $result = "SELECT * FROM descargas WHERE CÓDIGO = '$codigo' LIMIT 1";
    $resultado_aluno = mysqli_query($conn, $result);

    if ($resultado_aluno->num_rows) {
        $row_aluno = mysqli_fetch_assoc($resultado_aluno);
        $valores['cliente'] = $row_aluno['cliente'];
        $valores['filial'] = $row_aluno['filial'];
    } else {
        $valores['cliente'] = 'Não encontrado';
    }
    return json_encode($valores);
}

if (isset($_GET['codigo'])) {
    echo retorna($_GET['codigo'], $conn);
}
