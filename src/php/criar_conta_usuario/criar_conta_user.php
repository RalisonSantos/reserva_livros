<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Criar conta | Biblioteca Digital</title>

    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

    <main class="cadastro">

        <section class="cadastro-container">


            <div class="cadastro-logo">

                <a href="../../index.html">

                    <img
                        src="../../assets/image/logo.svg"
                        alt="Biblioteca Digital"
                    >

                </a>

            </div>



            <div class="cadastro-content">

                <h1>Crie sua conta</h1>

                <p class="cadastro-subtitulo">
                    Faça parte da sua biblioteca digital
                </p>



                <form
                    action="cadastro.php"
                    method="POST"
                    class="cadastro-form"
                >

                  
                    <div class="campo">

                        <label for="nome">
                            Nome completo
                        </label>

                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            placeholder="Digite seu nome completo"
                            autocomplete="name"
                            required
                        >

                    </div>


         
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
                            placeholder="Crie uma senha"
                            autocomplete="new-password"
                            minlength="8"
                            required
                        >

                    </div>


                 
                    <div class="campo">

                        <label for="confirmar-senha">
                            Confirmar senha
                        </label>

                        <input
                            type="password"
                            id="confirmar-senha"
                            name="confirmar_senha"
                            placeholder="Confirme sua senha"
                            autocomplete="new-password"
                            minlength="8"
                            required
                        >

                    </div>


                
                    <label class="termos">

                        <input
                            type="checkbox"
                            name="termos"
                            required
                        >

                        <span>
                            Concordo com os termos de uso
                        </span>

                    </label>


                   
                    <button
                        type="submit"
                        class="botao-cadastro"
                    >
                        Criar conta
                    </button>

                </form>


             
                <div class="possui-conta">

                    <span>
                        Já possui uma conta?
                    </span>

                    <a href="../login_usuario/login_usuario.php">
                        Entrar
                    </a>

                </div>

            </div>

        </section>

    </main>

</body>

</html>