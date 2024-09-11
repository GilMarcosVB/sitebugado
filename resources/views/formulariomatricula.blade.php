<!DOCTYPE html>
<html lang="pt-BR ">

<head>
    <meta charset="utf-8">
    <title>Academia BRASIL MARILIA SP</title>
    <meta name="descripition" content="Academia BRASIL marilia SP Zona sul.">
    <meta name="Keywords" content="Academia de bairro">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header id="cabecalho" class="container">

        <div id="botao-menu-mobile">
            <i class="fa-solid fa-bars"></i>
        </div>

        <div id="logotipo">
            <img src="img/logo.png" alt="" height="80">
        </div>

        <nav id="menu">
            <ul>
                <!-- <li><a href="javascript:;">Categorias</a></li>  -->
                <li><a href="index.html">INICIO</a></li>
                <!-- <li><a href="Contato.html:;">Contato</a></li> -->
            </ul>
        </nav>

        <div id="botaotopo">

            <a href="http://wa.me/5514999999999?text=olá tudo bem hre href=" whats.html>Whatsapp</a>
            <!--<a href="#secao1" href="index.html:matricula.html">Matricule-se</a>-->
            <!-- href="formulario.html" -->
        </div>


    </header>



    <main class="texto">
        <div class="fundoplanos">l
            <h1>Plano Semanal</h1>
            <form action="cadastro.php" method="post" enctype="multipart/form-data"></form>

            <fieldset class="containerplanos">
                <p>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </p>
                <p>
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required><br><br>
                </p>

                R$ 30,00
                {{-- <div class="btn btn-primary" id="botaoenviar"> --}}
                <a class="btn btn-primary w-25">Enviar</a>
                <div id="mensagem" class="card-foto-preco row justify-content-center">
                    {{-- </div> --}}
                </div>
            </fieldset>
        </div>
    </main>

    <footer id="rodape">
        <div class="backbgcinza2">
            <div class="" id="linha-rodape">

                <div class="coluna-rodape">
                    <h2>Mais</h2>

                    <ul>
                        <li><a href="#">Sobre nós</a></li>
                        <!-- <li><a href="#">Contatos</a></li> -->
                        <li><a href="#">Politica de Privacidade</a></li>
                    </ul>
                </div>

                <div class="coluna-rodape">
                    <!-- <h2>Contatos</h2> -->

                    <ul>
                        <li><a href="http://wa.me/5514999999999?text=olá tudo bem"><i
                                    class="fa-brands fa-whatsapp"></i>(14)
                                99999-9999</a></li>
                    </ul>
                </div>

                <div class="rede-social">
                    <a href="https//facebook.com">
                        <i class="fa-brands fa-facebook"></i>
                    </a>

                    <a href="https://instagram.com">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2023 - todos os direitos são reservados | Desenvolvido por Jhown | Leleo | Gil .</p>

            </div>
        </div>
    </footer>


    <?php
    // Verifica se o formulário foi submetido
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Coleta os dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        // Realiza o cadastro do usuário no banco de dados (neste exemplo, estamos apenas exibindo os dados)
        echo 'Nome: ' . $nome . '<br>';
        echo 'E-mail: ' . $email . '<br>';
        echo 'Senha: ' . $senha . '<br>';
    
        // Aqui você pode adicionar a lógica para inserir os dados em um banco de dados
    }
    ?>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
