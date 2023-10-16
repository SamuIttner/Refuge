<?php

// Obtém o endereço de e-mail do formulário
$email = $_POST['email'];

// Cria um link para recuperação de senha
$link = "https://www.example.com/recuperar-senha.php?email=$email";

// Envia um e-mail para o endereço de e-mail fornecido
mail($email, "Recuperação de senha", "Para redefinir sua senha, clique no link abaixo: $link");

?>
