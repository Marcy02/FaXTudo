-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05-Dez-2023 às 11:34
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
-- Estrutura da tabela `candidata`
--

CREATE TABLE `candidata` (
  `fk_USUARIO_id_user` int(10) UNSIGNED NOT NULL,
  `fk_EMPREGO_id_job` int(10) UNSIGNED NOT NULL,
  `aprovado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `candidata`
--

INSERT INTO `candidata` (`fk_USUARIO_id_user`, `fk_EMPREGO_id_job`, `aprovado`) VALUES
(5, 3, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `candidata`
--
ALTER TABLE `candidata`
  ADD PRIMARY KEY (`fk_USUARIO_id_user`,`fk_EMPREGO_id_job`),
  ADD KEY `FK_candidata_E` (`fk_EMPREGO_id_job`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `candidata`
--
ALTER TABLE `candidata`
  ADD CONSTRAINT `FK_candidata_E` FOREIGN KEY (`fk_EMPREGO_id_job`) REFERENCES `emprego` (`id_job`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_candidata_U` FOREIGN KEY (`fk_USUARIO_id_user`) REFERENCES `usuario` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
