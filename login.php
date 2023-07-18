<?php
// Verifica se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta ao banco de dados MySQL
    $conexao = mysqli_connect("localhost", "root", "", "comandopay");

    // Verifica se a conexão foi estabelecida com sucesso
    if (!$conexao) {
        die("Erro na conexão: " . mysqli_connect_error());
    }

    // Obtém os valores do formulário de login
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Consulta o banco de dados para verificar se o usuário existe
    $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $query);

    // Verifica se a consulta retornou algum resultado
    if (mysqli_num_rows($resultado) == 1) {
        // Login bem-sucedido
        session_start();
        $_SESSION["email"] = $email;
        header("Location: dashboard.php");
        exit();
    } else {
        // Login inválido
        $erro = "Email ou senha inválidos.";
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conexao);
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwindcss-->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Login</title>
</head>

<body>
    <div class="h-screen flex">
        <div class="flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 justify-around items-center">
            <div class="text-lg">
                <h2 class="text-white font-bold text-2xl font-sans">COMANDO <br>
                    <h1 class="text-7xl text-fuchsia-100">PAY</h1>
                </h2>
            </div>
        </div>
        <div class="flex w-1/2 justify-center items-center bg-white">

            <form class="bg-white w-96" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <h1 class="text-slate-400 font-bold text-3xl mb-10">Login</h1>

                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <input class="w-full pl-2 outline-none border-none" type="text" name="email" required placeholder="Email" />
                </div>

                <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                    <input class="w-full pl-2 outline-none border-none" type="password" name="senha" required placeholder="Password" />
                </div>

                <button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2 mt-8">Entrar</button>

                <?php if (isset($erro)) { ?>
                    <div class="bg-red-500 text-white rounded-full px-4 py-2 mt-4"><?php echo $erro; ?></div>
                <?php } ?>
            </form>


        </div>

    </div>
</body>

</html>