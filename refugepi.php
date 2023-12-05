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
                <li><a href="introduçaotrabalho.php"><i class="fas fa-briefcase"></i> Introdução ao Trabalho</a></li>
                <li><a href="marketplace.php"><i class="fas fa-shopping-basket"></i> Marketplace</a></li>
            </ul>
        </nav>
        <div class="language-selector">
    <button class="language-button" onclick="toggleLanguages()">Idioma</button>
    <div class="language-options" id="languageOptions">
        <a href="#" class="language-option" id="pt-br">🇧🇷 Português</a>
        <a href="#" class="language-option" id="en">🇺🇸 English</a>
        <!-- Adicione mais opções conforme necessário -->
    </div>
</div>
    </div>

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
            <img src="imagem/REFUGE.png" alt="Desenho de refugiados">
        </div>
    </section>

    <section id="doacao" class="donation" style="display: none;">
        <div id="conteudo-doacao" class="donation-content">
            <h2>Seja um Herói! Faça uma Doação </h2>
            <p>Transforme vidas e faça parte da mudança. Sua contribuição é valiosa.</p>
            <a href="doacao.php" class="doe-agora-button">Doe Agora</a>
        </div>
    </section>

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
    
        setTimeout(function () {
            document.getElementById("doacao").style.display = 'block';
    }, 1500); 

    function toggleLanguages() {
    var languageOptions = document.getElementById('languageOptions');
    languageOptions.style.display = (languageOptions.style.display === 'block') ? 'none' : 'block';
}

// Fechar as opções de linguagem ao clicar fora delas
document.addEventListener('click', function(event) {
    var languageOptions = document.getElementById('languageOptions');
    var languageButton = document.querySelector('.language-button');

    if (!languageOptions.contains(event.target) && !languageButton.contains(event.target)) {
        languageOptions.style.display = 'none';
    }
});

    </script>

    
</body>
</html>
