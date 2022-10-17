-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Out-2022 às 13:26
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_tcc_2022`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_correcao`
--

CREATE TABLE `tb_correcao` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `observacao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_professores`
--

CREATE TABLE `tb_professores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `graduacao` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dt_validade` date NOT NULL,
  `id_tp_redacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_professores`
--

INSERT INTO `tb_professores` (`id`, `nome`, `email`, `senha`, `graduacao`, `dt_validade`, `id_tp_redacao`) VALUES
(5, 'FÃ¡bio Almeida', 'fabio@gmail.com', 'fabio', 'doutorado', '0000-00-00', 1),
(6, 'Ariane', 'ariane@gmail.com', '123456', 'posmestrado', '0000-00-00', 2),
(8, 'Vini', 'vinicius@gmail.com', '12345', 'especial', '2022-09-11', 2),
(9, 'JosÃ©', 'Jose@jose.com', '123', 'posdouturado', '2022-09-25', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_redacao`
--

CREATE TABLE `tb_redacao` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `conteudo` blob NOT NULL,
  `id_status_redacao` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `tp_redacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_status_redacao`
--

CREATE TABLE `tb_status_redacao` (
  `id` int(11) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tp_redacao`
--

CREATE TABLE `tb_tp_redacao` (
  `id` int(10) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_tp_redacao`
--

INSERT INTO `tb_tp_redacao` (`id`, `nome`) VALUES
(1, 'ENEM'),
(2, 'Vunesp'),
(3, 'Unicamp'),
(4, 'ACT'),
(6, 'USP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(130) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `perfil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`, `cpf`, `rg`, `email`, `senha`, `perfil`) VALUES
(9, 'Bryan Ormond', '514354235345', '12313123123', 'bryan@gmail.com', 'bryan123', 'admin'),
(10, 'Guilherme', '43748739885', '119223345', 'guilherme@gmail.com', '12345', 'user'),
(11, 'Miguel', '34684332567', '4373836585', 'miguel@gmail.com', 'portugal123', 'user'),
(12, 'Guilherme', '23532532535', '35444323535', 'guilherme@guilherme.com', '1234', 'admin'),
(19, 'Eduardo', '123.123.123-12', '50501', 'eduardo@gmail.com', '12345', 'admin'),
(20, 'Bryan12', '111.111.111-11', '22222222', 'aa@aa.com', 'bryan', 'user'),
(21, 'Bryan', '111.111.111-12', '111111111111', 'aa@aa.com', '123', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_correcao`
--
ALTER TABLE `tb_correcao`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `status` (`status`);

--
-- Índices para tabela `tb_professores`
--
ALTER TABLE `tb_professores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_redacao`
--
ALTER TABLE `tb_redacao`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_status_redacao` (`id_status_redacao`),
  ADD UNIQUE KEY `tp_redacao` (`tp_redacao`);

--
-- Índices para tabela `tb_status_redacao`
--
ALTER TABLE `tb_status_redacao`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `status` (`status`);

--
-- Índices para tabela `tb_tp_redacao`
--
ALTER TABLE `tb_tp_redacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_professores`
--
ALTER TABLE `tb_professores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tb_tp_redacao`
--
ALTER TABLE `tb_tp_redacao`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_redacao`
--
ALTER TABLE `tb_redacao`
  ADD CONSTRAINT `tb_redacao_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_clientes` (`id`),
  ADD CONSTRAINT `tb_redacao_ibfk_2` FOREIGN KEY (`id_status_redacao`) REFERENCES `tb_correcao` (`id`);

--
-- Limitadores para a tabela `tb_status_redacao`
--
ALTER TABLE `tb_status_redacao`
  ADD CONSTRAINT `tb_status_redacao_ibfk_1` FOREIGN KEY (`status`) REFERENCES `tb_redacao` (`id_status_redacao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
