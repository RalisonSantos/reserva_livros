<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Biblioteca Digital</title>

    <link rel="stylesheet" href="../../css/login_usuario/login.css">
</head>

<body>

    <main class="login">

        <section class="login-container">

            <div class="login-logo">
                <a href="../../index.html">
                    <img src="../../assets/image/logo.svg" alt="Biblioteca Digital">
                </a>
            </div>

            <div class="login-content">

                <h1>Bem-vindo de volta</h1>

                <p class="login-subtitulo">
                    Acesse sua conta para continuar
                </p>
                <form action="login.php" method="POST" class="login-form">

                    <div class="campo">

                        <label for="email">
                            E-mail
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Digite seu e-mail"
                            autocomplete="email"
                            required
                        >

                    </div>


                    <div class="campo">

                        <label for="senha">
                            Senha
                        </label>

                        <input
                            type="password"
                            id="senha"
                            name="senha"
                            placeholder="Digite sua senha"
                            autocomplete="current-password"
                            required
                        >

                    </div>


                    <div class="login-opcoes">
                        <span></span>
                        <a href="recuperar-senha.html">
                            Esqueci minha senha
                        </a>

                    </div>


                    <button
                        type="submit"
                        class="botao-login"
                    >
                        Entrar
                    </button>

                </form>

                <div class="cadastro">

                    <span>
                        Ainda não possui uma conta?
                    </span>

                    <a href="../criar_conta_usuario/criar_conta_user.php">
                        Criar conta
                    </a>

                </div>

            </div>

        </section>

    </main>

</body>

</html>