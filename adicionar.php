<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Obter dados do formulário
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    // Upload da imagem
    $imagem_nome = $_FILES['imagem']['name'];
    $imagem_tmp = $_FILES['imagem']['tmp_name'];
    $destino = "./imgprodutos/" . $imagem_nome;
    move_uploaded_file($imagem_tmp, $destino);

    // Inserir dados no banco de dados
    $sql = "INSERT INTO produtos (nome, preco, descricao, imagem) VALUES ('$nome', '$preco', '$descricao', '$destino')";

    if ($conn->query($sql) === TRUE) {
        echo "Produto cadastrado com sucesso.";
    } else {
        echo "Erro ao cadastrar o produto: " . $conn->error;
    }

    // Fechar a conexão
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="adicionar.css">
    <title>Cadastro de Produto</title>
</head>
<body>

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
</header>
   
 <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        label {
            color: #495057;
        }

        input,
        textarea {
            margin-bottom: 15px;
        }

        .btn {
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            color: white;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastro de Produto</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="text" name="preco" class="form-control" oninput="formatCurrency(this)" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea id="descricaoTextArea" name="descricao" class="form-control" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="imagem">Imagem:</label>
                <input type="file" name="imagem" class="form-control-file" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
          
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function formatCurrency(input) {
            // Remove qualquer caractere não numérico
            var numericValue = input.value.replace(/[^0-9]/g, '');

            // Adiciona o cifrão na frente do número
            input.value = 'R$ ' + numericValue;
        }
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
