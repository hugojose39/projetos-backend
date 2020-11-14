-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Set-2020 às 21:45
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `usuario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_usario`
--

CREATE TABLE `dados_usario` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `tipo_de_conta` varchar(200) NOT NULL,
  `valor_mensalidade` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dados_usario`
--

INSERT INTO `dados_usario` (`id`, `nome`, `email`, `tipo_de_conta`, `valor_mensalidade`) VALUES
(39, 'ana', 'ana@gmail.com', 'familia', 2000),
(40, 'hugo', 'hugo@gmail.com', 'individual', 1000),
(41, 'ana', 'ana@gmail.com', 'individual', 200),
(42, 'jose', 'jose@yahoo.com', 'familia', 1000),
(43, 'arnaldo', 'ar@hootmail.com', 'individual', 1000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_endereco` int(11) NOT NULL,
  `id_dados` int(11) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int(15) NOT NULL,
  `bairro` text NOT NULL,
  `cidade` text NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id_endereco`, `id_dados`, `rua`, `numero`, `bairro`, `cidade`, `estado`) VALUES
(37, 40, 'da lua', 240, 'centro', 'belo horizonte', 'sp'),
(38, 41, 'iLDA', 119, 'Maria Cristina ', 'sp', 'sp'),
(39, 39, 'av contorno', 200, 'centro', 'bh', 'bh'),
(40, 42, 'quero quero', 450, 'floresta', 'belo horizonte', 'mg'),
(41, 43, 'araujo', 1001, 'azurita', 'Betim', 'Mg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dados_usario`
--
ALTER TABLE `dados_usario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `endereco_ibfk_1` (`id_dados`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados_usario`
--
ALTER TABLE `dados_usario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`id_dados`) REFERENCES `dados_usario` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
