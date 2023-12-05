-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05-Dez-2023 às 11:35
-- Versão do servidor: 5.7.36
-- versão do PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `faxtudo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `cnpj_cpf` varchar(14) COLLATE latin1_general_ci DEFAULT NULL,
  `nome` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `senha` varchar(512) COLLATE latin1_general_ci DEFAULT NULL,
  `tel` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `dt_nasc` date DEFAULT NULL,
  `especialidade` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `cep` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `bairro` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `cidade` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `uf` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `pais` varchar(500) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_user`, `cnpj_cpf`, `nome`, `email`, `senha`, `tel`, `dt_nasc`, `especialidade`, `cep`, `bairro`, `cidade`, `uf`, `pais`) VALUES
(4, '1', 'A', 'a@gmail.com', '$2y$10$ylFlLk5dI7KjNLzso88ai.L1Y626I5gRfXtpgZYcM6vtFFP6OOzHS', '552799790066', '2023-11-29', 'A', '58040800', 'Torre', 'JoÃ£o Pessoa', 'PB', 'Brasil'),
(5, '2', 'B', 'b@gmail.com', '$2y$10$rDArnegPrQw93I0Hm9jnceTj6460CVKqM.q4MPPk9K1Xp0FZyggzC', '5527998103503', '2023-09-26', 'B', '29090585', 'Jardim Camburi', 'VitÃ³ria', 'ES', 'Brasil');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
