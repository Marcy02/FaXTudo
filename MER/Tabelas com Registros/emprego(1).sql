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
-- Estrutura da tabela `emprego`
--

CREATE TABLE `emprego` (
  `id_job` int(10) UNSIGNED NOT NULL,
  `cargo` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `cat_cargo` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `desc_cargo` text COLLATE latin1_general_ci,
  `dt_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `salario` double DEFAULT NULL,
  `jornada` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `turno` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `requerimentos` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `qualificacao_min` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `habilidades` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `n_vagas` int(11) DEFAULT NULL,
  `cep` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `bairro` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `cidade` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `uf` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  `pais` varchar(500) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `emprego`
--

INSERT INTO `emprego` (`id_job`, `cargo`, `cat_cargo`, `desc_cargo`, `dt_cadastro`, `salario`, `jornada`, `turno`, `requerimentos`, `qualificacao_min`, `habilidades`, `n_vagas`, `cep`, `bairro`, `cidade`, `uf`, `pais`) VALUES
(3, 'A1', 'A1', 'A1', '2023-12-01 17:02:16', 100, 'A1', 'A1', 'A1', 'A1', 'A1', 1, '55191-615', 'Santo Agostinho', 'Santa Cruz do Capibaribe', 'PE', 'Brasil'),
(4, 'B2', 'B1', 'B1', '2023-12-01 18:18:15', 1500, 'B1', 'B1', 'B1', 'B1', 'B1', 2, '29171-425', 'Serra Dourada III', 'Serra', 'ES', 'Brasil'),
(5, 'C1', 'C1', 'C1', '2023-12-01 17:05:55', 10000, 'C1', 'C1', 'C1', 'C1', 'C1', 3, '65045-305', 'Anil', 'SÃ£o LuÃ­s', 'MA', 'Brasil'),
(6, 'C2', 'C2', 'C2', '2023-12-01 21:17:43', 12521.54, 'C2', 'C2', 'C2', 'C2', 'C2', 3, '29090-585', 'Jardim Camburi', 'VitÃ³ria', 'ES', 'Brasil'),
(8, 'D1', 'D1', 'D1', '2023-12-01 21:20:00', 1564, 'D1', 'D1', 'D1', 'D1', 'D1', 3, '29171-425', 'Serra Dourada III', 'Serra', 'ES', 'Brasil'),
(9, 'F1', 'F1', 'F1', '2023-12-01 21:22:07', 66454654, 'F1', 'F1', 'F1', 'F1', 'F1', 32, '29151032', 'wwefw', 'wfew', 'fv', 'USA');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `emprego`
--
ALTER TABLE `emprego`
  ADD PRIMARY KEY (`id_job`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `emprego`
--
ALTER TABLE `emprego`
  MODIFY `id_job` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
