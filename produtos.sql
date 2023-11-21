-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/11/2023 às 02:25
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `refuge_bd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `imagem` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `imagem`) VALUES
(8, 'Burro', '0.21', '8i78i8i', './imgprodutos/amigo4.jpg'),
(9, 'papel', '0.01', 'bem doido', './imgprodutos/bola.jpg'),
(10, 'carro', '0.03', 'carro bonito', './imgprodutos/carro.jpg'),
(11, 'brinquedo', '0.1', 'brinquedo divertido', './imgprodutos/brinquedo.jpg'),
(12, 'cozinha', '0.05', 'cozinha de fazer comida', './imgprodutos/armario.jpg'),
(13, 'bebida alcolica', '0.03', 'deixa bebado', './imgprodutos/bebida.jpg'),
(14, 'bike', '0.05', 'bike top', './imgprodutos/bicicleta.jpg'),
(15, 'colar', '0.04', 'colar carissimo', './imgprodutos/bijouteria.jpg'),
(16, 'carrao', 'R$ 100000', 'carrao topzeira', './imgprodutos/carro1.jpg'),
(17, 'gyugygyug', 'R$ 8779787', 'igigyugyugyugyugyug', './imgprodutos/grupo4.jpg'),
(21, 'Burro', '0.02', 'ykyukyu', './imgprodutos/images.jpg'),
(22, 'cachorro', '0.08', 'cachorro legal', './imgprodutos/tiophill.jpg'),
(23, 'oi', '234', 'asdasd', './imgprodutos/raçao.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
