<?php

session_start();

// Verificar se o carrinho de compras está vazio
if (empty($_SESSION['carrinho'])) {
  echo 'Seu carrinho de compras está vazio.';
} else {

  // Exibir os produtos adicionados ao carrinho
  foreach ($_SESSION['carrinho'] as $produto) {
    echo '<div class="produto">';
    echo '<h2>' . $produto['nome'] . '</h2>';
    echo '<img src="' . $produto['imagem'] . '" alt="' . $produto['nome'] . '">';
    echo '<p>' . $produto['preco'] . '</p>';
    echo '<a href="/remover-produto.php?id=' . $produto['id'] . '">Remover</a>';
    echo '</div>';
  }

  // Calcular o total da compra
  $total = 0;
  foreach ($_SESSION['carrinho'] as $produto) {
    $total += $produto['preco'];
  }

  // Permitir que o usuário conclua a compra
  echo '<a href="/concluir-compra.php">Concluir compra</a>';
}

?>
