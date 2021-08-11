-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Ago-2021 às 03:11
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
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(5) NOT NULL,
  `razao` varchar(50) NOT NULL,
  `locacao` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `diaria` varchar(11) NOT NULL,
  `contato` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `razao`, `locacao`, `descricao`, `diaria`, `contato`) VALUES
(1, '0', '0', '0', '0', '0'),
(2, 'sdsad', 'sadasd', 'dsadsa', 'sadsad', 'sadsad'),
(3, 'sdsad', 'sadasd', 'dsadsa', 'sadsad', 'sadsad'),
(4, 'sdsad', 'sadasd', 'dsadsa', 'sadsad', 'sadsad'),
(5, '', '', '', '', ''),
(6, '', '', '', '', ''),
(7, 'hgh', 'ghgf', 'ghfgh', 'hgfh', 'gfhfgh'),
(8, 'Raíssa', 'Casa SÓ Sos', '3 Quartos ,', '200.00', '(38) 99219-');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` int(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(11) NOT NULL,
  `endereço` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Id`, `nome`, `cpf`, `email`, `telefone`, `endereço`, `senha`) VALUES
(1, 'ghfh', 0, 'gfhfgh', 0, '', 'ghfg'),
(2, 'rarara', 2434432, 'dfsfsdf', 4343, '', 'fsdfsdf'),
(3, 'Danilo', 2147483647, '', 0, '', ''),
(4, 'hgfhgf', 0, 'hgfhgf', 0, '', 'fghgfh'),
(5, '', 0, '', 0, '', ''),
(6, 'hgfh', 0, 'ghgfhfg', 0, '', 'hfghgf'),
(7, 'gdfg', 0, 'dfg', 0, '', 'dfg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
