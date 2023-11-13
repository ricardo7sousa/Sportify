
<?php

session_start();

if((!isset($_SESSION['email_cliente'])==true) and (!isset($_SESSION['senha_cliente'])==true))
{
    unset($_SESSION['email_cliente']);
    unset($_SESSION['senha_cliente']);
    header('Location:entrar.php');
}
else{
    $logado = $_SESSION['email_cliente'];

}
?>

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

    <section class="barra_top">
        <div class="barra">
            <h1>Área do Usuário</h1>
        </div>

        <div class="barra">
            <a href="sair.php">SAIR</a>
        </div>       
    </section>

    <section class="usuario">
        <?php
        echo "<h2>Olá, $logado<h2>";

        ?>
        <p>Seja Bem Vindo</p>
    </section>

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
    
    <?php

    if(isset($_POST['submit'])){
        include_once('conectar.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['sexo'];

        $clientes = mysqli_query($conexao, "INSERT INTO cadastro_clientes(nome_cliente, email_cliente, senha_cliente, sexo_cliente) VALUES ('$nome', '$email', '$senha', '$sexo')");

    }
    ?>

</body>
</html>