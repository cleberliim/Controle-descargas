<?php include_once("header.php") ?>

<div class="container h-90 mx-auto md:w-auto px-20 text-xs mt-24">
    <form method="post" action="inc/descargas.creater.php" class="mx-auto w-full my-8">
        <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="codigo">CÓDIGO:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="codigo" id="codigo" type="text" placeholder="Digite o código">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label for="cliente" class="block text-gray-700 text-sm font-bold mb-2">Cliente</label>
                <select id="cliente" name="cliente" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="">
                    <option>BRAVO - 6983</option>
                    <option>UPL - 5990</option>
                    <option>IHARA - 6982</option>
                    <option>TECNOMIL - 6982</option>
                    <option>CORTEVA - 7146</option>
                    <option>SUMITOMO - 7149</option>
                    <option>OUTROFINO - 7234</option>
                </select>
            </div>


            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="filial">Filial</label>
                <select id="filial" name="filial" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>CD AURORA</option>
                    <option>CD M5</option>
                    <option>CD INDAIATUBA</option>
                    <option>CD BUICK</option>
                    <option>CD CUIABA</option>
                    <option>CD LUIS ED. MAGALHOES</option>
                    <option>CD PRIMAVERA DO LESTE</option>
                    <option>CD APARECIDA DE GOIANIA</option>
                    <option>CD SORRISO</option>
                </select>
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="data">Data</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="data" id="data" type="date" placeholder="Data">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="motorista">Motorista:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="motorista" id="motorista" type="text" placeholder="Digite o nome do motorista">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cpfcnpj">CPF/CNPJ</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cpfcnpj" id="cpfcnpj" type="number" placeholder="Digite o nome do motorista">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label for="vinculo" class="block text-gray-700 text-sm font-bold mb-2">Vinculo:</label>
                <select id="vinculo" name="vinculo" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="">
                    <option>Cliente</option>
                    <option>Frota</option>
                    <option>Agregado</option>
                </select>
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label for="tipo" class="block text-gray-700 text-sm font-bold mb-2">Tipo de pagamento:</label>
                <select id="tipo" name="tipo" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>Descarga</option>
                    <option>Balsa</option>
                    <option>Cliente</option>
                    <option>Reembolso</option>
                </select>
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="peso">Peso:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="peso" id="peso" type="text" placeholder="Digite o peso">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="vp">V/P</label>
                <select id="vp" name="vp" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>Peso</option>
                    <option>QTD VOL.</option>
                </select>
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="qvp">QV/P</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="qvp" id="qvp" type="text" placeholder="Digite o QV/P">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="valor">Valor</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="valor" id="valor" type="text" placeholder="Digite o valor">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cte">CTE'S</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cte" id="cte" type="text" placeholder="Digite o CTE">
            </div>


            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="status">Status</label>
                <select id="status" name="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>Pago</option>
                    <option>Pendente</option>
                    <option>Bloqueado</option>
                </select>
            </div>
        </div>

        <div class="flex justify-end mr-40">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded focus:outline-none focus:shadow-outline" type="submit">Adicionar</button>
        </div>

    </form>
</div>

<?php include_once("footer.php") ?>