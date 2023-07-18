<?php
include_once("header.php");
include_once("db/conection.php");

// Obtendo a chave (key) do elemento a ser editado
$id = $_GET['id'] ?? '';

// Verificando se a chave (key) foi passada
if (!empty($id)) {
    // Consulta SQL para obter o elemento com a chave (key)
    $query = "SELECT * FROM descargas WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    // Verificando se a consulta retornou resultados
    if (mysqli_num_rows($result) > 0) {
        // O elemento foi encontrado, você pode exibir ou manipular os dados aqui

        // Exemplo de como acessar os dados retornados pela consulta
        $row = mysqli_fetch_assoc($result);
        $codigo = $row['CÓDIGO'];
        $cliente = $row['cliente'];
        $filial = $row['filial'];
        $data = $row['data_hora'];
        $vinculo = $row['vinculo'];
        $tipo = $row['tipo'];
        $status = $row['STATUS'];
        $motorista = $row['TITULAR'];
        $cpfcnpj = $row['CPFCNPJ_DA_CONTA'];
        $peso = $row['peso'];
        $vp = $row['vp'];
        $qvp = $row['QVP'];
        $valor = $row['VALOR'];

        // Convertendo a data para o formato desejado (d/m/Y)
        $data_formatada = date('d/m/Y', strtotime($data));
    } else {
        // O elemento não foi encontrado
        echo "Elemento não encontrado.";
    }

    // Fechando a conexão com o banco de dados
    mysqli_close($conn);
} else {
    echo "Chave não fornecida.";
    exit; // Encerrar o script se a chave não for fornecida
}
?>


<div class="container h-90 mx-auto md:w-auto px-20 text-xs mt-24">
    <form method="POST" action="inc/process.edit.php" class="mx-auto w-full my-8">
        <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="codigo">CÓDIGO:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="codigo" id="codigo" type="text" placeholder="Digite o código" value="<?php echo $codigo; ?>">
            </div>

            <div class=" w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label for="cliente" class="block text-gray-700 text-sm font-bold mb-2">Cliente</label>
                <select id="cliente" name="cliente" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option <?php if ($cliente == 'BRAVO - 6983') echo 'selected'; ?>>BRAVO - 6983</option>
                    <option <?php if ($cliente == 'UPL - 5990') echo 'selected'; ?>>UPL - 5990</option>
                    <option <?php if ($cliente == 'IHARA - 6982') echo 'selected'; ?>>IHARA - 6982</option>
                    <option <?php if ($cliente == 'TECNOMIL - 6982') echo 'selected'; ?>>TECNOMIL - 6982</option>
                    <option <?php if ($cliente == 'CORTEVA - 7146') echo 'selected'; ?>>CORTEVA - 7146</option>
                    <option <?php if ($cliente == 'SUMITOMO - 7149') echo 'selected'; ?>>SUMITOMO - 7149</option>
                    <option <?php if ($cliente == 'OUTROFINO - 7234') echo 'selected'; ?>>OUTROFINO - 7234</option>
                </select>
            </div>



            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="filial">Filial</label>
                <select id="filial" name="filial" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="<?php echo $filial; ?>">
                    <option <?php if ($filial == 'CD AURORA') echo 'selected'; ?>>CD AURORA</option>
                    <option <?php if ($filial == 'CD M5') echo 'selected'; ?>>CD M5</option>
                    <option <?php if ($filial == 'CD INDAIATUBA') echo 'selected'; ?>>CD INDAIATUBA</option>
                    <option <?php if ($filial == 'CD BUICK') echo 'selected'; ?>>CD BUICK</option>
                    <option <?php if ($filial == 'CD CUIABA') echo 'selected'; ?>>CD CUIABA</option>
                    <option <?php if ($filial == 'CD LUIS ED. MAGALHOES') echo 'selected'; ?>>CD LUIS ED. MAGALHOES</option>
                    <option <?php if ($filial == 'CD PRIMAVERA DO LESTE') echo 'selected'; ?>>CD PRIMAVERA DO LESTE</option>
                    <option <?php if ($filial == 'CD APARECIDA DE GOIANIA') echo 'selected'; ?>>CD APARECIDA DE GOIANIA</option>
                    <option <?php if ($filial == 'CD SORRISO') echo 'selected'; ?>>CD SORRISO</option>
                </select>
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="data">Data</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="data" id="data" placeholder="Data" value="<?php echo $data_formatada; ?>">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="motorista">Motorista:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="motorista" id="motorista" type="text" placeholder="Digite o nome do motorista" value="<?php echo $motorista; ?>">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cpfcnpj">CPF/CNPJ</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cpfcnpj" id="cpfcnpj" type="number" placeholder="Digite o nome do motorista" value="<?php echo $cpfcnpj; ?>">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label for="vinculo" class="block text-gray-700 text-sm font-bold mb-2">Vinculo:</label>
                <select id="vinculo" name="vinculo" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="<?php echo $vinculo; ?>">
                    <option <?php if ($vinculo == 'Cliente') echo 'selected'; ?>>Cliente</option>
                    <option <?php if ($vinculo == 'Frota') echo 'selected'; ?>>Frota</option>
                    <option <?php if ($vinculo == 'Agregado') echo 'selected'; ?>>Agregado</option>
                </select>
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label for="tipo" class="block text-gray-700 text-sm font-bold mb-2">Tipo:</label>
                <select id="tipo" name="tipo" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="<?php echo $tipo; ?>">
                    <option <?php if ($tipo == 'Descarga') echo 'selected'; ?>>Descarga</option>
                    <option <?php if ($tipo == 'Balsa') echo 'selected'; ?>>Balsa</option>
                    <option <?php if ($tipo == 'Cliente') echo 'selected'; ?>>Cliente</option>
                    <option <?php if ($tipo == 'Reembolso') echo 'selected'; ?>>Reembolso</option>
                </select>
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="peso">Peso:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="peso" id="peso" type="text" placeholder="Digite o peso" value="<?php echo $peso; ?>">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="vp">V/P</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="vp" id="vp" type="text" placeholder="Digite o V/P" value="<?php echo $vp; ?>">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="qvp">QV/P</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="qvp" id="qvp" type="text" placeholder="Digite o QV/P" value="<?php echo $qvp; ?>">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="valor">Valor</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="valor" id="valor" type="text" placeholder="Digite o valor" value="<?php echo $valor; ?>">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="status">Status</label>
                <select id="status" name="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option <?php if ($status == 'Pago') echo 'selected'; ?>>Pago</option>
                    <option <?php if ($status == 'Pendente') echo 'selected'; ?>>Pendente</option>
                    <option <?php if ($status == 'Bloqueado') echo 'selected'; ?>>Bloqueado</option>
                </select>
            </div>
        </div>

        <div class="flex justify-end">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">editar</button>
        </div>

    </form>
</div>

<?php include_once("footer.php"); ?>