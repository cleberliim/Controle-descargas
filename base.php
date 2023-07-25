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
        <table id="example" class="table table-striped" style="width:100%">
            <thead class="text-xs">
                <tr>
                    <th>RESPONSÁVEL</th>
                    <th>TELEFONE</th>
                    <th>RAZÃO SOCIAL</th>
                    <th>CIDADE</th>
                    <th>UF</th>
                    <th>Tipo</th>
                    <th>Pago</th>
                </tr>
            </thead>
            <tbody>

                <?php while ($row = mysqli_fetch_assoc($resultado)) : ?>
                    <tr class=" text-xs">
                        <td class="px-6 py-4"><?php echo $row['RESPONSÁVEL']; ?> </td>
                        <td class="px-6 py-4"><?php echo $row['TELEFONE']; ?> </td>
                        <td class="px-6 py-4"><?php echo $row['Razão_Social']; ?> </td>
                        <td class="px-6 py-4"><?php echo $row['Cidade']; ?> </td>
                        <td class="px-6 py-4"><?php echo $row['UF']; ?> </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600"> Descarga </span>
                        </td>
                        <td class="px-6 py-4"><i class="text-base	 fas fa-check-circle" style="color: #46d00b;"></i></i></td>
                    </tr>
                <?php endwhile; ?>

            </tbody>
        </table>
    </div>
</div>


<?php

include_once('footer.php');

?>