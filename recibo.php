<?php include_once("header.php") ?>
<?php include_once("db/conection.php");

if (isset($_POST['buscar'])) {
    $id = $_POST['id'];

    $query = "SELECT * FROM descargas WHERE CÓDIGO = $id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $motorista = $row['TITULAR'];
        $cliente = $row['cliente'];
        $cte = $row['cte'];
        $valor = $row['VALOR'];
        $filial = $row['filial'];
        $peso = $row['peso'];
        $qtd = $row['qtd'];
        $vinculo = $row['vinculo'];
    } else {
        // Caso não encontre o código, você pode definir valores padrão ou exibir uma mensagem de erro.
        $motorista = 'Sem registro';
        $cliente = 'Sem registro';
        $cte = 'Sem registro';
        $valor = 'Sem registro';
        $filial = 'Sem registro';
        $saldo = 'Sem registro';
        $peso = 'Sem registro';
        $qtd = 'Sem registro';
        $vinculo = 'Sem registro';
    }
} else {
    // Caso o formulário não tenha sido enviado ainda, definir valores iniciais ou vazios.
    $id = '';
    $motorista = '';
    $cliente = '';
    $cte = '';
    $valor = '';
    $filial = '';
    $saldo = '';
    $peso = '';
    $qtd = '';
    $vinculo = '';
}

?>

<div class="container h-90 mx-auto md:w-auto px-20 text-xs">
    <form class="mx-auto w-full my-8" method="post">
        <div class="flex">
            <div class="w-full h-90 p-5">
                <img src="img/comando.png" width="150px" class="mb-4">
                <label>
                    <?php
                    $dataAtual = date('d-m-Y');
                    echo $dataAtual;
                    ?> Boituva - SP
                </label>
            </div>
            <div class="w-1/4 mt-2 h-90 mb-8 p-5 text-right">
                <p class="text-xl"> Código: </p>
                <p class="text-base font-bold"><?php echo $id; ?></p>
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-80 px-3 mb-4 md:mb-0">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="id">CÓDIGO: </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="id" value="<?php echo $id; ?>">
                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="submit" name="buscar">Buscar</button>
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="motorista">Motorista:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="motorista" value="<?php echo $motorista; ?>">
                <br>
            </div>


            <div class="w-full md:w-80 px-3">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cte">CTE:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cte" type="text" value="<?php echo $cte; ?>">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cliente">Cliente</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cliente" type="text" value="<?php echo $cliente; ?>">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="valor">Valor</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="valor" id="valor" type="text" value="<?php echo $valor; ?>">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="filial">Filial</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="filial" type="text" value="<?php echo $filial; ?>">
            </div>


            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="peso">Peso:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="peso" type="text" value="<?php echo $peso; ?>">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="qtd">QTD Volume:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="qtd" type="text" value="<?php echo $qtd; ?>">
            </div>


            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="vinculo">Vinculo</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="vinculo" type="text" value="<?php echo $vinculo; ?>">
            </div>

            <!-- dados ban -->


            <div class="flex flex-wrap -mx-3 mb-4">

                <div class="w-full md:w-full px-3 ">

                    <p class=" shadow appearance-none border rounded w-full py-4 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="normas-procedimentos" rows="4">


                        <b> NORMAS E PROCEDIMENTOS: </b> <br><br>

                        01) A prestação de contas deste adiantamento para pagamento de descarga, deve ser feita imediatamente em sua chegada de viagem.
                        <br><br>
                        02) Fica extremamente proibido o acumulo de vales de descarga.
                        <br><br>
                        03) Todas descargas deverão ter recibos devidamente assinado com RG de quem recebeu e telefone para contato, sabendo que
                        descargas em fazendas, os recibos além destas informações, deverão vir carimbado pela fazenda.
                        <br><br>
                        04) Salvo de recibo quando a descarga for feita em lojas ou depositos na cidade.
                        <br><br>
                        <b> ADVERTÊNCIA:</b> <br><br>
                        A) A não prestação de contas deste adiantamento, arcará em desconto em folha e advertencia por escrito.

                    </p>
                </div>
            </div>
        </div>
</div>

<!-- Rest of the form... -->

<div class="flex justify-end">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">IMPRIMIR</button>
</div>
</form>
</div>

<?php include_once("footer.php") ?>