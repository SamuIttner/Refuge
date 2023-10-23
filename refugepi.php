

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="refugepi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="imagem/mini-logo.ico" type="image/x-icon">
    <title>R.E.F.U.G.E</title>
</head>
<body> 
    <header>
        <div class="logo">
            <a href="refugepi.php"> <img src="imagem/logo1.png" alt="Logo"> </a>
        </div>
        <nav>
            <ul>
                <li><a href="socializacao.html"><i class="fas fa-users"></i> Socialização</a></li>
                <li><a href="introduçaotrabalho.ph"><i class="fas fa-briefcase"></i> Introdução ao Trabalho</a></li>
                <li><a href="marketplace.html"><i class="fas fa-shopping-basket"></i> Marketplace</a></li>
            </ul>
        </nav>
    </header>

    <section id="loader">
        <div class="loader-content">
          <img src="imagem/mundo carregamento.png" alt="Carregando...">
        </div>
    </section>

    <section class="intro">
        <div class="intro-content">
            <h1>Bem-vindo ao Refuge</h1>
            <p>Seja parte da nossa comunidade! Auxiliando refugiados a se integrarem e prosperarem.</p>
            <h3 style="color: #43e96d;">Para iniciar sua jornada no Refuge clique em um dos links no topo da página!</h3>
        </div>
        <div class="intro-image">
            <img src="imagem/REFUGEE.jpg" alt="Desenho de refugiados">
        </div>
    </section>

    <section id="sobre" class="about">
        <div class="about-content">
            <h2>Sobre Nós</h2>
            <p>O Refuge é uma plataforma dedicada a apoiar estrangeiros e refugiados em sua integração na sociedade. Estamos aqui para fornecer recursos, orientação e apoio, tornando essa transição o mais suave possível.</p>
            <p>Nosso objetivo é criar uma comunidade solidária e acolhedora para refugiados, onde todos se sintam seguros e bem-vindos. Junte-se a nós e comece sua jornada para uma nova vida!</p>
            <a href="sobre.html" class="saiba-mais-button">Saiba Mais</a>
        </div>
    </section>

    <footer>
        <div class="footer-links">
            <a href="ajuda.html"><i class="fas fa-question-circle"></i> Ajuda</a>
            <a href="sobre.html"><i class="fas fa-info-circle"></i> Sobre</a>
        </div>
        <p>&copy; 2023 R.E.F.U.G.E Todos os direitos reservados.</p>
    </footer>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Adiciona o FontAwesome para os ícones -->
    <script>
        document.onreadystatechange = function () {
            if (document.readyState === "complete") {
                // Esconde a tela de carregamento quando a página estiver totalmente carregada
                // Aguarda 1 segundo (1000 milissegundos) antes de esconder a tela de carregamento
                setTimeout(function() {
                    document.getElementById("loader").style.display = "none";
                }, 1500);
            }
        };
    </script>
    
</body>
</html>