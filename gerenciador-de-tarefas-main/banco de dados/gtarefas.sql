-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Set-2021 às 03:52
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gtarefas`
--
CREATE DATABASE IF NOT EXISTS `gtarefas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gtarefas`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` int(2) NOT NULL,
  `categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_cat`, `categoria`) VALUES
(1, 'Trabalho'),
(2, 'Estudo'),
(3, 'Escola'),
(7, 'Futebol');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id_tarefas` int(6) NOT NULL,
  `cod_categoria` int(2) NOT NULL,
  `tarefa` text NOT NULL,
  `data_realiz` date NOT NULL,
  `hora_realiz` time NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id_tarefas`, `cod_categoria`, `tarefa`, `data_realiz`, `hora_realiz`, `status`) VALUES
(9, 1, 'teste', '2021-09-24', '18:31:00', 'Concluído'),
(10, 3, 'Realizar planejamento.', '2021-09-27', '07:00:00', 'Aguardando'),
(11, 2, 'Estuda inglês.', '2021-09-24', '23:06:00', 'Aguardando');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Índices para tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id_tarefas`),
  ADD KEY `cod_categoria` (`cod_categoria`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id_tarefas` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD CONSTRAINT `tarefas_ibfk_1` FOREIGN KEY (`cod_categoria`) REFERENCES `categoria` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
