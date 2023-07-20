<?php include_once("header.php") ?>


<div class="container h-90 mx-auto md:w-auto px-20 text-xs">
    <form class="mx-auto w-full my-8">
        <div class="flex">
            <div class="w-full h-90   p-5">
                <img src="img/comando.png" width="150px" class="mb-4">
                <label>
                    <?php
                    $dataAtual = date('d-m-Y');
                    echo $dataAtual;
                    ?> Boituva - SP
                </label>
            </div>
            <div class="w-1/4 mt-2 h-90 mb-8 p-5 text-right	">
                <p class="text-xl"> Código: </p>
                <p class="text-base font-bold"></p>
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-4">

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="codigo">CÓDIGO: </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="codigo" type="text">
            </div>
            <div class="w-full md:w-80 px-3 mb-4 md:mb-0">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="motorista">Motorista:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="motorista" type="text">
            </div>
            <div class="w-full md:w-80 px-3">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cte">CTE:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cte" type="text">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cliente">Cliente</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="cliente" type="text">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="valores">Valor</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="valores" type="text">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="filial">Filial</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="filial" type="text">
            </div>

            <div class="w-full md:w-80 px-3 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="saldo">Saldo: O (+) OU (-)</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="saldo" type="text">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="peso">Peso:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="peso" type="text">
            </div>

            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="qtd">QTD Volume:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="qtd" type="text">
            </div>


            <div class="w-full md:w-80 px-3 mb-4 md:mb-0 mt-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="afiliacao">Afiliaçao</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="afiliacao" type="text">
            </div>
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




        <div class="flex justify-end">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">IMPRIMIR</button>
        </div>
    </form>
</div>

<?php include_once("footer.php") ?>