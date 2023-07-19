<?php include_once("header.php"); ?>

<?php

include_once("db/conection.php");

// lista todos os dados
$sql = "SELECT * FROM descargas";
$resultado = mysqli_query($conn, $sql);

?>


<div className="container h-full mx-auto max-w-full sm:px-2 px-8 text-xs">
    <div class="p-10 mt-4">

        <!-- pre-loader -->
        <div id="preloader">
            <div id="loader">
                <div class="animate-spin inline-block w-12 h-12 border-[6px] border-current border-t-transparent text-blue-600 rounded-full" role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>


        <div class="container flex justify-end mb-4">
            <a href="descargas.php" class="px-5 py-2.5 font-medium bg-blue-50 hover:bg-blue-100 hover:text-blue-600 text-blue-500 rounded-lg text-sm ml-auto">
                Adicionar
            </a>
        </div>

        <table id="example" class="table table-striped hover" style="width:100%">
            <thead class="text-xs">
                <tr>
                    <th>CÓDIGO</th>
                    <th>CLIENTE</th>
                    <th>FILIAL</th>
                    <th>MOTORISTA</th>
                    <th>VINCULO</th>
                    <th>DATA</th>
                    <th>VALOR</th>
                    <th>TIPO</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Array associativo para mapear dias da semana em inglês para português
                $diasSemana = array(
                    'Sunday' => 'Domingo',
                    'Monday' => 'Segunda-feira',
                    'Tuesday' => 'Terça-feira',
                    'Wednesday' => 'Quarta-feira',
                    'Thursday' => 'Quinta-feira',
                    'Friday' => 'Sexta-feira',
                    'Saturday' => 'Sábado'
                );
                ?>
                <?php while ($row = mysqli_fetch_assoc($resultado)) : ?>
                    <?php
                    // Obter o nome do dia da semana em português
                    $data = strtotime($row['data_hora']);
                    $nomeDiaSemana = $diasSemana[date('l', $data)];
                    ?>
                    <tr class="text-xs">
                        <td><?php echo $row['CÓDIGO']; ?> </td>
                        <td><?php echo $row['cliente']; ?> </td>
                        <td><?php echo $row['filial']; ?> </td>
                        <td><?php echo $row['TITULAR']; ?> </td>
                        <td><?php echo $row['vinculo']; ?> </td>
                        <td title="<?php echo $nomeDiaSemana; ?>"><?php echo date('d/m/Y', $data); ?> </td>
                        <td><?php echo $row['VALOR']; ?> </td>
                        <td><?php echo $row['tipo']; ?> </td>
                        <td class="font-semibold text-center" <?php if ($row['STATUS'] == 'Pendente') echo 'style="background-color: #FF5733; color: #ffff"; '; ?> <?php if ($row['STATUS'] == 'Pago') echo 'style="background-color: #2DDE1F; color: #ffff";'; ?> 1 <?php if ($row['STATUS'] == 'Bloqueado') echo 'style="background-color: #F81859; color: #ffff";'; ?>>
                            <?php echo $row['STATUS']; ?>
                        </td>
                        <!-- DELETE-->
                        <td class="px-6 py-4 flex items-center">
                            <form method="POST" action="./inc/descargas.delete.php">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <button type="submit" class="text-red-500 mr-2"><i class="fas fa-trash" style="color: #969696;"></i></button>
                            </form>

                            <!-- EDITAR -->
                            <a href="edit.descargas.php?id=<?php echo $row['id']; ?>" class="ml-2">
                                <i class="fas fa-edit" style="color: #969696;"></i>
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once("footer.php"); ?>