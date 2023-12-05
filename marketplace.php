
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="marketplace.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <link rel="shortcut icon" href="imagem/mini-logo.ico" type="image/x-icon">
    <title>Marketplace</title>
</head>
<body> 
    <header>
        <div class="logo">
            <a href="refugepi.php"> <img src="imagem/mini logo.png" alt="Logo"> </a>
        </div>
        <nav>
            <ul>
                
                <li><h1>Marketplace<i class="fas fa-shopping-basket"></i></h1>
                
            </ul>
        </nav>

        <!-- barra de pesquisa, acho que ela fica boa no meio assim, so falta arrumar a largura e o desgin, mas acho que fica boa no meio assim do header -->
        
        <div class="search-bar">
    <input type="text" placeholder="">
    <div class="typing-animation"></div>
    <button type="submit"><i class="fas fa-search"></i></button>
</div>
          
<nav>
    <ul>
        <li><a href="socializacao.html"><i class="fas fa-comments"></i> Chat</a></li>
        <li><a href="carrinho.php"><i class="fas fa-heart"></i> Favoritos</a></li>
        <li><a href="adicionar.php"><i class="fas fa-dollar-sign"></i> Anunciar</a></li>
    </ul>
</nav>

</header>

<section class="fundo-slide"> 
    <div class="slider">
           <div class="slides">
            <!--Radio Buttons-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!--FIM Radio Buttons-->

            <!--Slide Images-->
            <div class="slide primeiro">
                <img src="imagem/propaganda1.png" alt="Imagem Propaganda1"/>
            </div>
            <div class="slide">
                <img src="imagem/propaganda2.jpg" alt="Imagem Propaganda2"/>
            </div>
            <div class="slide">
                <img src="imagem/propaganda3.jpg" alt="Imagem Propaganda3"/>
            </div>
            <div class="slide">
                <img src="imagem/propaganda4.jpg" alt="Imagem Propaganda4"/>
            </div>
            <!--FIM Slide Images-->

            <!--Navigation Auto-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>

           </div>
           
           
           <div class="manual-navigation">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
           </div>


        </div>

<script>
    
    let count = 1;
    document.getElementById("radio1").checked = true;

    setInterval(function(){
        nextImage();
    }, 5000)

    function nextImage(){
        count++;
        if(count>4){
            count = 1;
        }

        document.getElementById("radio" + count).checked = true;

    }

</script>

</section>








</br>
</br>
</br>

  <!-- essa area é pra ser que nem aquela da olx, bem em baixo da propaganda, com as imagens e o nome bem em baixo -->
  <div class="navbar">
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/carroicone.jpg" alt="Ícone 1">Autos e peças</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/casaicone.jpg" alt="Ícone 2">imovéis</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/celularicone.jpg" alt="Ícone 2">Eletrônicos</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/sofaicone.jpg" alt="Ícone 2">Moveis</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/roupasicone.jpg" alt="Ícone 2">Moda e beleza</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/bolaicone.jpg" alt="Ícone 2">Esportes e lazer</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/guitarraicone.jpg" alt="Ícone 2">Músicas e hobbies</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/ursinhoicone.jpg" alt="Ícone 2">Artigos infantis</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/tratoricone.jpg" alt="Ícone 2">Agro e insdustria</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/ps4.jpg" alt="Ícone 2">Todas as categorias</a>
        </div>
       
        <!-- Adicione mais categorias conforme necessário -->
    </div>
       
        <!-- Adicione mais categorias conforme necessário -->
    </div>
    <?php
// Conectar ao banco de dados (substitua os valores conforme necessário)
$host = "localhost";
$usuario_bd = "root";
$senha_bd = "";
$nome_bd = "refuge_bd";

$conn = new mysqli($host, $usuario_bd, $senha_bd, $nome_bd);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Consultar os produtos no banco de dados
$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
?>



    <style>
        .card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 200px; /* Largura menor do card */
            float: left;
        }

        .card img {
            width: 190px; /* Largura fixa da imagem */
            height: 190px; /* Altura fixa da imagem */
            object-fit: cover; /* Ajusta a imagem mantendo a proporção e cobrindo a área designada */
            
        }

        .more-info-btn {
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #43e96d;
            color: #fff;
            border: none;
            cursor: pointer;
        }


        .categorias {
            display: flex;
            justify-content: space-between; /* Para espaçamento uniforme entre as imagens */
        }

        .categorias a {
            display: inline-block;
        }

        .categorias img {
            width: 70px; /* Especifique o tamanho desejado para as imagens */
            height: auto; /* Mantém a proporção da imagem */
        }

    </style>


    <div class="mais-procurados"><h1>Mais procurados</h1></div>

<div class="cards-container">
    <?php
    // Exibir os produtos em forma de card
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<img src="' . $row['imagem'] . '" alt="' . $row['nome'] . '">';
            echo '<h3>' . $row['nome'] . '</h3>';
            echo '<p>Preço: R$ ' . $row['preco'] . '</p>';
            echo '<button class="more-info-btn">Mais Informações</button>';
            echo '</div>';
        }
    } else {
        // Lida com o caso em que não há produtos
    }
    ?>
</div>


    <!-- area onde vao ficar os anuncios, acho que eles separados assim iam ficar melhor, divididos por area, e dai o usuario mesmo vai vendo oque ele quer especificamente -->
    





    <script>
        let count = 1;
        document.getElementById("radio1").checked = true;

        setInterval(function(){
            nextImage();
        }, 5000)

        function nextImage(){
            count++;
            if(count>4){
                count = 1;
            }

            document.getElementById("radio" + count).checked = true;
        }
    </script>


    
  <script>
    document.addEventListener("DOMContentLoaded", function () {
    const searchBarInput = document.querySelector('.search-bar input');
    const typingAnimation = document.querySelector('.typing-animation');

    const wordsToType = ["Carro", "Geladeira", "Celular", "Roupas", "Brinquedos", "Ar-condicionado", "ventilador"]; // Add more words as needed
    let currentWordIndex = 0;
    let typingInterval;

    startTypingAnimation(); // Start the animation when the page loads

    searchBarInput.addEventListener('focus', function () {
        clearInterval(typingInterval); // Stop the typing animation when the input is focused
    });

    searchBarInput.addEventListener('blur', function () {
        startTypingAnimation(); // Start the typing animation when the input is blurred
    });

    function startTypingAnimation() {
        typingInterval = setInterval(() => {
            const currentWord = wordsToType[currentWordIndex];
            const currentText = currentWord.substring(0, searchBarInput.value.length + 1);

            searchBarInput.value = currentText;
            typingAnimation.textContent = currentText;

            if (currentText === currentWord) {
                currentWordIndex = (currentWordIndex + 1) % wordsToType.length;
                clearInterval(typingInterval);
                setTimeout(startErasingAnimation, 1000);
            }
        }, 200);
    }

    function startErasingAnimation() {
        typingInterval = setInterval(() => {
            const currentWord = wordsToType[currentWordIndex];
            const currentText = currentWord.substring(0, searchBarInput.value.length - 1);

            searchBarInput.value = currentText;
            typingAnimation.textContent = currentText;

            if (currentText === "") {
                currentWordIndex = (currentWordIndex + 1) % wordsToType.length;
                clearInterval(typingInterval);
                setTimeout(startTypingAnimation, 1000);
            }
        }, 100);
    }
});
</script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script>
      document.onreadystatechange = function () {
          if (document.readyState === "complete") {
              setTimeout(function() {
                  document.getElementById("loader").style.display = "none";
              }, 1250);
          }
      };
  </script>
  <section id="loader">
        <div class="loader-content">
          <img src="imagem/mundo marketplace.png" alt="Carregando...">
        </div>
    </section>
  
    <footer>
        <div class="footer-links">
            <a href="ajuda.html"><i class="fas fa-question-circle"></i> Ajuda</a>
            <a href="sobre.html"><i class="fas fa-info-circle"></i> Sobre</a>
        </div>
        <p>&copy; 2023 R.E.F.U.G.E Todos os direitos reservados.</p>
    </footer>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="marketplace.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <link rel="shortcut icon" href="imagem/mini-logo.ico" type="image/x-icon">
    <title>Marketplace</title>
</head>
<body> 
    <header>
        <div class="logo">
            <a href="refugepi.php"> <img src="imagem/mini logo.png" alt="Logo"> </a>
        </div>
        <nav>
            <ul>
                
                <li><h1>Marketplace<i class="fas fa-shopping-basket"></i></h1>
                
            </ul>
        </nav>

        <!-- barra de pesquisa, acho que ela fica boa no meio assim, so falta arrumar a largura e o desgin, mas acho que fica boa no meio assim do header -->
        
        <div class="search-bar">
    <input type="text" placeholder="">
    <div class="typing-animation"></div>
    <button type="submit"><i class="fas fa-search"></i></button>
</div>
          
<nav>
    <ul>
        <li><a href="socializacao.html"><i class="fas fa-comments"></i> Chat</a></li>
        <li><a href="carrinho.php"><i class="fas fa-heart"></i> Favoritos</a></li>
        <li><a href="adicionar.php"><i class="fas fa-dollar-sign"></i> Anunciar</a></li>
    </ul>
</nav>

</header>

<section class="fundo-slide"> 
    <div class="slider">
           <div class="slides">
            <!--Radio Buttons-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!--FIM Radio Buttons-->

            <!--Slide Images-->
            <div class="slide primeiro">
                <img src="imagem/propaganda1.png" alt="Imagem Propaganda1"/>
            </div>
            <div class="slide">
                <img src="imagem/propaganda2.jpg" alt="Imagem Propaganda2"/>
            </div>
            <div class="slide">
                <img src="imagem/propaganda3.jpg" alt="Imagem Propaganda3"/>
            </div>
            <div class="slide">
                <img src="imagem/propaganda4.jpg" alt="Imagem Propaganda4"/>
            </div>
            <!--FIM Slide Images-->

            <!--Navigation Auto-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>

           </div>
           
           
           <div class="manual-navigation">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
           </div>


        </div>

<script>
    
    let count = 1;
    document.getElementById("radio1").checked = true;

    setInterval(function(){
        nextImage();
    }, 5000)

    function nextImage(){
        count++;
        if(count>4){
            count = 1;
        }

        document.getElementById("radio" + count).checked = true;

    }

</script>

</section>








</br>
</br>
</br>

  <!-- essa area é pra ser que nem aquela da olx, bem em baixo da propaganda, com as imagens e o nome bem em baixo -->
  <div class="navbar">
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/carroicone.jpg" alt="Ícone 1">Autos e peças</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/casaicone.jpg" alt="Ícone 2">imovéis</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/celularicone.jpg" alt="Ícone 2">Eletrônicos</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/sofaicone.jpg" alt="Ícone 2">Moveis</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/roupasicone.jpg" alt="Ícone 2">Moda e beleza</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/bolaicone.jpg" alt="Ícone 2">Esportes e lazer</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/guitarraicone.jpg" alt="Ícone 2">Músicas e hobbies</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/ursinhoicone.jpg" alt="Ícone 2">Artigos infantis</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/tratoricone.jpg" alt="Ícone 2">Agro e insdustria</a>
        </div>
        <div class="nav-item">
            <a href="#" class="nav-link"><img src="imagem/ps4.jpg" alt="Ícone 2">Todas as categorias</a>
        </div>
       
        <!-- Adicione mais categorias conforme necessário -->
    </div>
       
        <!-- Adicione mais categorias conforme necessário -->
    </div>
    <?php
// Conectar ao banco de dados (substitua os valores conforme necessário)
$host = "localhost";
$usuario_bd = "root";
$senha_bd = "";
$nome_bd = "refuge_bd";

$conn = new mysqli($host, $usuario_bd, $senha_bd, $nome_bd);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Consultar os produtos no banco de dados
$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
?>



    <style>
        .card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 200px; /* Largura menor do card */
            float: left;
        }

        .card img {
            width: 190px; /* Largura fixa da imagem */
            height: 190px; /* Altura fixa da imagem */
            object-fit: cover; /* Ajusta a imagem mantendo a proporção e cobrindo a área designada */
            
        }

        .more-info-btn {
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #43e96d;
            color: #fff;
            border: none;
            cursor: pointer;
        }


        .categorias {
            display: flex;
            justify-content: space-between; /* Para espaçamento uniforme entre as imagens */
        }

        .categorias a {
            display: inline-block;
        }

        .categorias img {
            width: 70px; /* Especifique o tamanho desejado para as imagens */
            height: auto; /* Mantém a proporção da imagem */
        }

    </style>


    <div class="mais-procurados"><h1>Mais procurados</h1></div>

<div class="cards-container">
    <?php
    // Exibir os produtos em forma de card
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<img src="' . $row['imagem'] . '" alt="' . $row['nome'] . '">';
            echo '<h3>' . $row['nome'] . '</h3>';
            echo '<p>Preço: R$ ' . $row['preco'] . '</p>';
            echo '<button class="more-info-btn">Mais Informações</button>';
            echo '</div>';
        }
    } else {
        // Lida com o caso em que não há produtos
    }
    ?>
</div>


    <!-- area onde vao ficar os anuncios, acho que eles separados assim iam ficar melhor, divididos por area, e dai o usuario mesmo vai vendo oque ele quer especificamente -->
    





    <script>
        let count = 1;
        document.getElementById("radio1").checked = true;

        setInterval(function(){
            nextImage();
        }, 5000)

        function nextImage(){
            count++;
            if(count>4){
                count = 1;
            }

            document.getElementById("radio" + count).checked = true;
        }
    </script>


    
  <script>
    document.addEventListener("DOMContentLoaded", function () {
    const searchBarInput = document.querySelector('.search-bar input');
    const typingAnimation = document.querySelector('.typing-animation');

    const wordsToType = ["Carro", "Geladeira", "Celular", "Roupas", "Brinquedos", "Ar-condicionado", "ventilador"]; // Add more words as needed
    let currentWordIndex = 0;
    let typingInterval;

    startTypingAnimation(); // Start the animation when the page loads

    searchBarInput.addEventListener('focus', function () {
        clearInterval(typingInterval); // Stop the typing animation when the input is focused
    });

    searchBarInput.addEventListener('blur', function () {
        startTypingAnimation(); // Start the typing animation when the input is blurred
    });

    function startTypingAnimation() {
        typingInterval = setInterval(() => {
            const currentWord = wordsToType[currentWordIndex];
            const currentText = currentWord.substring(0, searchBarInput.value.length + 1);

            searchBarInput.value = currentText;
            typingAnimation.textContent = currentText;

            if (currentText === currentWord) {
                currentWordIndex = (currentWordIndex + 1) % wordsToType.length;
                clearInterval(typingInterval);
                setTimeout(startErasingAnimation, 1000);
            }
        }, 200);
    }

    function startErasingAnimation() {
        typingInterval = setInterval(() => {
            const currentWord = wordsToType[currentWordIndex];
            const currentText = currentWord.substring(0, searchBarInput.value.length - 1);

            searchBarInput.value = currentText;
            typingAnimation.textContent = currentText;

            if (currentText === "") {
                currentWordIndex = (currentWordIndex + 1) % wordsToType.length;
                clearInterval(typingInterval);
                setTimeout(startTypingAnimation, 1000);
            }
        }, 100);
    }
});
</script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script>
      document.onreadystatechange = function () {
          if (document.readyState === "complete") {
              setTimeout(function() {
                  document.getElementById("loader").style.display = "none";
              }, 1250);
          }
      };
  </script>
  <section id="loader">
        <div class="loader-content">
          <img src="imagem/mundo marketplace.png" alt="Carregando...">
        </div>
    </section>
  
    <footer>
        <div class="footer-links">
            <a href="ajuda.html"><i class="fas fa-question-circle"></i> Ajuda</a>
            <a href="sobre.html"><i class="fas fa-info-circle"></i> Sobre</a>
        </div>
        <p>&copy; 2023 R.E.F.U.G.E Todos os direitos reservados.</p>
    </footer>

</body>
</html>
