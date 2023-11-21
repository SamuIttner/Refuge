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
            <input type="text" placeholder="Pesquisar produtos...">
            <button type="submit"><i class="fas fa-search"></i></button>
          </div>
          
        <!-- pensei em linkar essa parte com a socializaçao, tipo pro usuario conversar diretamente com o vendedor -->  
        <!-- Samuel - na hora eu achei estranho, mas faz sentido tem que ver o resto do pessoal--> 
          <div class="chat">
            <a href="socializacao.html">
            <button type="submit">Chat</button> 
            </a>
        </div>

        <!-- essa parte ia ser tipo um carrinho, mas o nome ia ser favoritos, tipo ao inves da pessoa adicionar o produto no carrinho ia colocar nos favoritos msm -->
        <!-- Samuel - Isso eu não entendi, tem que desenvolver melhor-->
        <div class="favoritos">
            <a href="carrinho.php">
            <button type="submit">Favoritos</button> 
            </a>
        </div>

        <!-- ao inves de adicionar, mudei o nome para anunciar, que fica mais legalzinho eu acho -->
        <!-- Samuel - Gostei -->
        <div class="adicionar">
            <a href="adicionar.html">
            <button type="submit">Anunciar</button>
            </a>
        </div>

    </header>

        <!-- Samuel - Tentei fazer algo aqui para ser os slides em formato de carrossel (que fica passando sozinho sempre os mesmos) vejam se ficou bom-->
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
                <img src="imagem/chinelo.jpg" alt="Imagem chinelo"/>
            </div>
            <div class="slide">
                <img src="imagem/carro.jpg" alt="Imagem Carro"/>
            </div>
            <div class="slide">
                <img src="imagem/bicicleta.jpg" alt="Imagem bicicleta"/>
            </div>
            <div class="slide">
                <img src="imagem/celular.jpg" alt="Imagem Celular"/>
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


</br>
</br>
</br>

    <!-- essa area é pra ser que nem aquela da olx, bem em baixo da propaganda, com as imagens e o nome bem em baixo -->
    <div class="categorias">
        <a href="#"><img src="imagem/carros.png" alt="Autos e peças"></a>
        <a href="#"><img src="imagem/casa-limpa.png" alt="Imóveis"></a>
        <a href="#"><img src="imagem/dispositivos-eletronicos.png" alt="Eletrônicos e celulares"></a>
        <a href="#"><img src="imagem/moveis.png" alt="Mobilia"></a>
        <a href="#"><img src="imagem/moda.png" alt="Moda e beleza"></a>
        <a href="#"><img src="imagem/esportes-com-bolas.png" alt="Esporte e lazer"></a>
        <a href="#"><img src="imagem/instrumento-musical.png" alt="Música e hobbies"></a>
        <a href="#"><img src="imagem/brinquedos.png" alt="Artigos infantis"></a>
        <a href="#"><img src="imagem/agricultura-inteligente.png" alt="Agro e industria"></a>
        <a href="#"><img src="imagem/animais-de-estimacao.png" alt="Animais"></a>
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
            background-color: #007bff;
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
</head>
<body>

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
  
}

// Fechar a conexão
$conn->close();
?>


    <!-- area onde vao ficar os anuncios, acho que eles separados assim iam ficar melhor, divididos por area, e dai o usuario mesmo vai vendo oque ele quer especificamente -->
    <div class="mais-procurados"><h1>Mais procurados</h1></div>

    <div class="mais-procurados"><h1>Mais procurados em Moda</h1></div>

    <div class="mais-procurados"><h1>Mais procurados em automoveis</h1></div>

    <div class="mais-procurados"><h1>Mais procurados Eletrônicos</h1></div>


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
  
</body>
</html>
