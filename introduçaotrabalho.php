

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="introduçaotrabalho.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="imagem/mini-logo.ico" type="image/x-icon">
    <title>Introdução ao Trabalho</title>
</head>
<body> 
<header>
    <div class="logo">
        <a href="refugepi.php"> <img src="imagem/logo1.png" alt="Logo"> </a>
    </div>
    <nav>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i> Início</a></li>
            <li><a href="vagas.php"><i class="fas fa-briefcase"></i> Vagas de Emprego</a></li>
            <li><a href="candidatos.php"><i class="fas fa-users"></i> Candidatos</a></li>
            <li><a href="contato.php"><i class="fas fa-envelope"></i> Contato</a></li>
            <button class="Btn" id="logoutButton">
    <div class="sign">
        <svg viewBox="0 0 512 512">
            <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
        </svg>
    </div>
    <div class="text">Logout</div>
</button>

<script>
    const logoutButton = document.getElementById("logoutButton");

    logoutButton.addEventListener("click", () => {
        // Redirecionar para a página index.php
        window.location.href = "index.php";
    });
</script>

        </ul>
  
</header>


<main class="content">
        <section id="jobs" class="job-postings">
            <form action="" method="get" class="search-form">
                <input type="text" name="search" placeholder="Buscar vagas por posição ou categoria">
                <button type="submit">Buscar</button>
            </form>
            <?php
            $jobs = [
                [
                    "position" => "Desenvolvedor Web",
                    "company" => "ABC Tech",
                    "type" => "Período Integral",
                    "location" => "São Paulo",
                    "description" => "Procurando um desenvolvedor web qualificado com experiência em PHP, HTML e CSS.",
                    "email" => "vagas@abc.com",
                    "category" => "Desenvolvimento",
                    "posted_date" => "2023-10-05"
                ],
                [
                    "position" => "Gerente de Marketing",
                    "company" => "Tech Marketing",
                    "type" => "Meio Período",
                    "location" => "Rio de Janeiro",
                    "description" => "Procuramos um gerente de marketing experiente para coordenar campanhas de marketing.",
                    "email" => "vagas@techmarketing.com",
                    "category" => "Marketing",
                    "posted_date" => "2023-09-20"
                ],
                [
                    "position" => "Designer Gráfico",
                    "company" => "Visual Arts",
                    "type" => "Freelancer",
                    "location" => "Porto Alegre",
                    "description" => "Estamos em busca de um designer gráfico criativo e talentoso.",
                    "email" => "design@visualarts.com",
                    "category" => "Design",
                    "posted_date" => "2023-10-10"
                ],
                [
                    "position" => "Analista de Dados",
                    "company" => "BigData Corp",
                    "type" => "Período Integral",
                    "location" => "Brasília",
                    "description" => "O profissional será responsável pela análise e interpretação de dados complexos.",
                    "email" => "jobs@bigdata.com",
                    "category" => "Tecnologia",
                    "posted_date" => "2023-09-25"
                ],
                [
                    "position" => "Assistente de Recursos Humanos",
                    "company" => "HR Consulting",
                    "type" => "Estágio",
                    "location" => "Curitiba",
                    "description" => "Auxiliará em atividades administrativas e processos de recrutamento.",
                    "email" => "rh@hrconsulting.com",
                    "category" => "Recursos Humanos",
                    "posted_date" => "2023-10-15"
                ],
                [
                    "position" => "Analista de Marketing Digital",
                    "company" => "Online Business Co.",
                    "type" => "Período Integral",
                    "location" => "Fortaleza",
                    "description" => "Buscamos um profissional para gerenciar campanhas de marketing online.",
                    "email" => "jobs@onlinebusiness.com",
                    "category" => "Marketing",
                    "posted_date" => "2023-09-30"
                ],
                // Adicione mais vagas de acordo com a necessidade
            ];

            $search = $_GET['search'] ?? '';

            if (!empty($search)) {
                $filteredJobs = array_filter($jobs, function ($job) use ($search) {
                    return stripos($job['position'], $search) !== false || stripos($job['category'], $search) !== false;
                });
            } else {
                $filteredJobs = $jobs;
            }

            foreach ($filteredJobs as $key => $job) {
                echo '<div class="job-posting">';
                echo "<h2>{$job['position']}</h2>";
                echo "<p><strong>Empresa:</strong> {$job['company']}</p>";
                echo "<p><strong>Tipo:</strong> {$job['type']}</p>";
                echo "<p><strong>Localização:</strong> {$job['location']}</p>";
                echo "<p>{$job['description']}</p>";
                echo "<div class='details' id='details-{$key}' style='display: none;'>";
                echo "<p><strong>Email:</strong> {$job['email']}</p>";
                echo "<p><strong>Categoria:</strong> {$job['category']}</p>";
                echo "<p><strong>Data de Publicação:</strong> {$job['posted_date']}</p>";
                echo '</div>';
                echo '<button onclick="showDetails(' . $key . ')">Ver Detalhes</button>';
                echo '</div>';
            }
            ?>
        </section>

        <section id="about" class="about">
            <h2>Sobre Nós</h2>
            <p>Bem-vindo ao Job Board, sua principal fonte de listagens de empregos. Estamos dedicados a oferecer as melhores oportunidades para os candidatos a emprego.</p>
        </section>

        <section id="contact" class="contact">
            <h2>Contato</h2>
            <form action="contact.php" method="post">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" required></textarea>

                <input type="submit" value="Enviar">
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Job Board. Todos os direitos reservados.</p>
    </footer>

    <script>
        function showDetails(key) {
            const details = document.getElementById('details-' + key);
            if (details.style.display === 'none') {
                details.style.display = 'block';
            } else {
                details.style.display = 'none';
            }
        }
    </script>


   





    <section id="loader">
        <div class="loader-content">
          <img src="imagem/mundo carregamento.png" alt="Carregando...">
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

