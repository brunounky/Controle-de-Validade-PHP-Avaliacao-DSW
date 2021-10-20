-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Out-2021 às 04:16
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controlevalidade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `validade`
--

CREATE TABLE `validade` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `validade` date NOT NULL,
  `lote` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `validade`
--

INSERT INTO `validade` (`id`, `nome`, `validade`, `lote`) VALUES
(20, 'Brahma lata 350ml', '2022-08-22', 'JJEI7768'),
(21, 'Skol lata 350ml', '2022-01-18', 'JHWW3992'),
(22, 'Coca Cola lata 350ml', '2021-12-29', 'LMB0988');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `validade`
--
ALTER TABLE `validade`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `validade`
--
ALTER TABLE `validade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
