<?php

include_once('header.php');

?>

<?php

include_once("db/conection.php");

// listar todos os dados
$sql = "SELECT * FROM base";
$resultado = mysqli_query($conn, $sql);

?>

<div className="container h-full mx-auto max-w-full sm:px-2 px-8 text-xs mt-14">
    <div class="p-10 mt-12">
        <!-- pre-loader -->
        <div id="preloader">
            <div id="loader">
                <div class="animate-spin inline-block w-12 h-12 border-[6px] border-current border-t-transparent text-blue-600 rounded-full" role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
        <table id="example" class="table table-striped" style="width:100%">
            <thead class="text-xs">
                <tr>
                    <th>CPF/CNPJ</th>
                    <th>RAZÃO SOCIAL</th>
                    <th>CIDADE</th>
                    <th>UF</th>
                    <th>RESPONSAVEL</th>
                    <th>TELEFONE</th>
                    <th>TIPO DE CONTA</th>
                    <th>INF CONTA</th>
                    <th>AGENCIA</th>
                    <th>CONTA</th>
                    <th>CÓDIGO</th>
                    <th>OBS</th>

                </tr>
            </thead>
            <tbody>

                <?php while ($row = mysqli_fetch_assoc($resultado)) : ?>
                    <tr class=" text-xs">
                        <td class="px-6 py-4"><?php echo $row['CPF_CNPJ']; ?> </td>
                        <td class="px-6 py-4"><?php echo $row['Raz_o_Social']; ?> </td>
                        <td class="px-6 py-4"><?php echo $row['Cidade']; ?> </td>
                        <td class="px-6 py-4"><?php echo $row['UF']; ?> </td>
                        <td class="px-6 py-4"><?php echo $row['RESPONS_VEL']; ?> </td>
                        <td class="px-6 py-4"><?php echo $row['TELEFONE']; ?> </td>
                        <td class="px-6 py-4"><?php echo $row['TIPO_DE_CONTA']; ?> </td>
                        <td class="px-6 py-4"><?php echo $row['INF_CONTA']; ?> </td>
                        <td class="px-6 py-4"><?php echo $row['AGENCIA']; ?> </td>
                        <td class="px-6 py-4"><?php echo $row['CONTA']; ?> </td>
                        <td class="px-6 py-4"><?php echo $row['C_DIGO']; ?> </td>
                        <td class="px-6 py-4"><?php echo $row['OBS']; ?> </td>
                    <?php endwhile; ?>

            </tbody>
        </table>
    </div>
</div>


<?php

include_once('footer.php');

?>