<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os dados do formulário
    $amount = $_POST["amount"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $paymentMethod = $_POST["paymentMethod"];

    // Realize o processamento da doação conforme necessário
    // Aqui você pode adicionar a integração com um gateway de pagamento, enviar e-mails, etc.

    // Exemplo simples: Imprima os detalhes da doação
    echo "Doação Recebida:\n";
    echo "Valor: $amount\n";
    echo "Nome: $name\n";
    echo "E-mail: $email\n";
    echo "Método de Pagamento: $paymentMethod\n";}
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="doação.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="imagem/mini-logo.ico" type="image/x-icon">
    <title>R.E.F.U.G.E</title>
</head>
<body> 
    <header>
        <div class="logo">
            <a href="refugepi.php"> <img src="imagem/logo1.png" alt="Logo"> </a>

    </header>

   

    <div class="container">
    <h1>Doação para o Meu Site</h1>
    <form id="donationForm" action="process_donation.php" method="post">
        <label for="amount">Valor da Doação:</label>
        <input type="text" id="amount" name="amount" placeholder="Informe o valor" required>

        <label for="name">Seu Nome:</label>
        <input type="text" id="name" name="name" placeholder="Seu Nome Completo" required>

        <label for="email">Seu E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Seu E-mail" required>

        <label for="paymentMethod">Método de Pagamento:</label>
        <select id="paymentMethod" name="paymentMethod" required>
            <option value="cartao">Cartão de Crédito</option>
            <option value="boleto">Boleto Bancário</option>
        </select>

        <button type="submit">Doar Agora</button>
    </form>
</div>
    <footer>
        <div class="footer-links">
            <a href="ajuda.html"><i class="fas fa-question-circle"></i> Ajuda</a>
            <a href="sobre.html"><i class="fas fa-info-circle"></i> Sobre</a>
        </div>
        <p>&copy; 2023 R.E.F.U.G.E Todos os direitos reservados.</p>
    </footer>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        document.onreadystatechange = function () {
            if (document.readyState === "complete") {
                setTimeout(function() {
                    document.getElementById("loader").style.display = "none";
                }, 1500);
            }
        };
    </script>
     <section id="loader">
        <div class="loader-content">
          <img src="imagem/mundo carregamento.png" alt="Carregando...">
        </div>
    </section>
</body>
</html>
