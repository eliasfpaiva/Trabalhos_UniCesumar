-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Mar-2018 às 18:09
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mapa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `assunto`
--

CREATE TABLE `assunto` (
  `id` int(11) NOT NULL,
  `assunto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `assunto`
--

INSERT INTO `assunto` (`id`, `assunto`) VALUES
(1, 'PHP'),
(2, 'MYSQL'),
(3, 'CSS'),
(4, 'JAVASCRIPT');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`, `descricao`) VALUES
(1, 'Primeiro curso', 'Primeiro curso'),
(2, 'Segundo curso', 'Estava dando certo d+'),
(3, 'Terceiro Curso', 'Teste de cadastros via SQL'),
(10, 'Quarto curso', 'Este sÃ³ foi possÃ­vel graÃ§as Ã  brilhante Jessica Zanelato'),
(13, 'Quinto Curso', 'Este Ã© para teste ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `assuntos` varchar(255) NOT NULL,
  `curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `data_cadastro`, `assuntos`, `curso`) VALUES
(16, 'Teste 1', 'teste1@teste1.com.br', '2018-03-18 21:28:11', 'php', 1),
(17, 'Teste 2', 'teste2@teste2.com.br', '2018-03-18 21:28:11', 'html', 2),
(18, 'Teste 3', 'teste3@teste3.com.br', '2018-03-18 21:28:11', 'css', 3),
(20, 'Teste 4', 'teste4@teste4.com.br', '2018-03-18 21:28:11', 'css', 1),
(22, 'Teste 5', 'teste5@teste5.com.br', '2018-03-18 21:28:11', 'css', 2),
(23, 'Teste 6', 'teste6@teste6.com.br', '2018-03-18 21:28:11', 'html', 3),
(24, 'Teste 7', 'teste7@teste7.com.br', '2018-03-18 21:40:48', 'html', 1),
(25, 'Teste 8', 'teste8@teste8.com.br', '2018-03-18 21:28:11', 'html', 2),
(26, 'Teste 9', 'teste9@teste9.com.br', '2018-03-18 23:47:16', 'php, html', 10),
(27, 'Teste 10', 'teste10@teste10.com.br', '2018-03-18 21:28:12', 'html, css', 1),
(28, 'Teste 11', 'teste11@teste11.com.br', '2018-03-18 21:28:12', 'php, html', 2),
(29, 'Teste 12', 'teste12@teste12.com.br', '2018-03-18 21:28:12', 'html', 3),
(30, 'Teste 13', 'teste14@teste14.com.br', '2018-03-18 21:28:12', 'php, css', 1),
(32, 'Teste 16', 'teste16@teste16.com.br', '2018-03-18 21:28:46', 'php, html', 1),
(33, 'Teste 17', 'teste17@teste17.com.br', '2018-03-18 21:28:46', 'php, html', 2),
(34, 'Teste 18', 'teste18@teste18.com.br', '2018-03-18 21:28:46', 'php, html', 3),
(35, 'Teste 19', 'teste19@teste19.com.br', '2018-03-18 21:28:46', 'php, html', 1),
(36, 'Teste 15', 'teste15@teste15.com.br', '2018-03-18 21:28:46', 'php, html', 2),
(37, 'Teste 14', 'teste14@teste14.com.br', '2018-03-18 21:04:49', 'php, html', 2),
(38, 'Teste 20', 'teste20@teste20.com.br', '2018-03-18 21:05:35', 'php, html', 3),
(40, 'Teste X23', 'testeX23@testeX23.com.br', '2018-03-18 23:34:07', 'html', 2),
(41, 'Teste 21', 'teste21@teste21.com.br', '2018-03-18 23:36:34', 'php', 1),
(43, 'Tete24', 'teste24@teste24.com.br', '2018-03-19 03:13:01', 'php, html, css', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_assunto`
--

CREATE TABLE `usuario_assunto` (
  `usuario` int(11) NOT NULL,
  `assunto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assunto`
--
ALTER TABLE `assunto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario_assunto`
--
ALTER TABLE `usuario_assunto`
  ADD PRIMARY KEY (`usuario`,`assunto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assunto`
--
ALTER TABLE `assunto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
