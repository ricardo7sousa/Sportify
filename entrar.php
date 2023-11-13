<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportify</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo1.jpg" alt="Logotipo Sportify">
        </div>

        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="produtos.html">PRODUTOS</a></li>
                <li><a href="sobrenos.html">SOBRE NÓS</a></li>
                <li><a href="cadastro.php">CADASTRO</a></li>
                <li><a href="entrar.php">ENTRAR</a></li>
                <li><a href="contato.php">CONTATO</a></li>
            </ul>
        </nav>
    </header>

<div class="login">

    <div class="logar">
        <h1>LOGIN</h1>

        <form action="login.php" method="post">
            <input type="email" name='email' id="email_usuario" placeholder="Digite seu e-mail"> <br>
            <input type="password" name='senha' id="senha_usuario" placeholder="Digite sua senha"> <br>
            <input type="submit" name='submit' id="btn_logar" value="ENTRAR">
        </form>
    </div>



</div>


    

    <footer>

        <div class="rodape">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href=""></a></li>
                <li><a href="produtos.html">PRODUTOS</a></li>
                <li><a href="sobrenos.html">SOBRE NÓS</a></li>
                <li><a href="cadastro.php">CADASTRO</a></li>
                <li><a href="entrar.php">ENTRAR</a></li>
                <li><a href="contato.php">CONTATO</a></li>
            </ul>
        </div>

        <div class="rodape">
            <p>Av. Alfredo Balthazar da Silveira, 580 - Recreio dos Bandeirantes</p>
            <p>Rio de Janeiro - RJ</p>
        </div>

        <div class="rodape">
            <p>Siga as nossas Redes Sociais</p>
            <a href="#"><img src="img/facebook.png" alt="Facebook Sportify"></a>
            <a href="#"><img src="img/instagram.png" alt="Instagram Sportify"></a>
            <a href="#"><img src="img/youtube.png" alt="YouTube Sportify"></a>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/cycle.js"></script>
</body>
</html>