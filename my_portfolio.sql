-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jun-2022 às 19:36
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `my_portfolio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `data_publicacao` datetime NOT NULL,
  `autor` varchar(100) NOT NULL,
  `imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id`, `titulo`, `texto`, `data_publicacao`, `autor`, `imagem`) VALUES
(1, 'O inicio de uma jornada a busca do exito.', 'orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore Ut enim ad minim veniam', '2022-02-18 13:56:19', 'Elio Muculo', 'blog-1.png'),
(2, 'Um olhar profundo a nova versão do flutter 3.0', 'orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore Ut enim ad minim veniam', '2022-05-11 13:57:54', 'Elio Muculo', 'blog-2.png'),
(3, 'Artisão: Iniciando com Laravel Framework ', 'orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore Ut enim ad minim veniam', '2022-06-01 13:57:54', 'Elio Muculo', 'blog-3.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` int(25) NOT NULL,
  `telefone_alternativo` int(25) NOT NULL,
  `endereco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contacto`
--

INSERT INTO `contacto` (`id`, `email`, `telefone`, `telefone_alternativo`, `endereco`) VALUES
(1, 'Emuculo25@gmail.com', 833084105, 842644623, 'Machava - sede, Matola. Moçambique.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_pessoais`
--

CREATE TABLE `dados_pessoais` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `nacionalidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `nr_BI` varchar(25) DEFAULT NULL,
  `foto_perfil` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dados_pessoais`
--

INSERT INTO `dados_pessoais` (`id`, `nome`, `data_nascimento`, `nacionalidade`, `bairro`, `nr_BI`, `foto_perfil`, `descricao`) VALUES
(1, 'Élio Paulo Muculo', '2001-01-20', 'Moçambicano', 'machava - sede', '100107674232C', 'up_20220611181735.jpeg', 'Nome: Élio Paulo Muculo filho de Paulo Muculo e Graça Maúte, Nascido a 20 de  janeiro de 2001, Nacionalidade Moçambicano, Residente em Maputo no Bairro da  Machava-sede, casa no. 03, Quarteirão nº. 31, Estado civil: Solteiro, Portador do BI Nr. 100107674232C');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exp_prof`
--

CREATE TABLE `exp_prof` (
  `id` int(11) NOT NULL,
  `inicio` date DEFAULT NULL,
  `fim` date DEFAULT NULL,
  `organizacao` varchar(100) DEFAULT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `exp_prof`
--

INSERT INTO `exp_prof` (`id`, `inicio`, `fim`, `organizacao`, `cargo`, `descricao`) VALUES
(1, '2019-06-10', '2019-09-27', 'BSA - Brainstorm Academy', 'Digital Marketing & Web Developer', 'Gestão das redes sociais da BSA e planeamento das melhores estrategias para \nmelhor posionamento das paginas.'),
(2, '2021-05-17', '2021-09-24', 'Bantus Institute', 'web developer & Formador', 'Liderei o projeto de implementação da aplicação web da empresa bantus\ndesde a concepção até o deploy');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacao`
--

CREATE TABLE `formacao` (
  `id` int(11) NOT NULL,
  `instituicao_ensino` varchar(100) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `inicio` date DEFAULT NULL,
  `fim_formacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `formacao`
--

INSERT INTO `formacao` (`id`, `instituicao_ensino`, `tipo`, `descricao`, `inicio`, `fim_formacao`) VALUES
(1, 'BSA - Brainstorm Academy', 'nivel Tecnico', '', '2019-02-04', '2019-07-26'),
(3, 'UJC - Universidade Joaquim Chissano', 'grau de Licenciatura', '', '2020-02-03', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `habilidades`
--

CREATE TABLE `habilidades` (
  `id` int(11) NOT NULL,
  `habilidade` varchar(100) DEFAULT NULL,
  `nivel` int(100) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `habilidades`
--

INSERT INTO `habilidades` (`id`, `habilidade`, `nivel`, `imagem`) VALUES
(1, 'PHP & Laravel', 73, 'php.png'),
(2, 'HTML, CSS & Bootstrap', 78, 'html.png'),
(3, 'Versionamento com Git & Github', 46, 'git.png'),
(4, 'MySQL & SQL Server', 57, 'mysql.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dados_pessoais`
--
ALTER TABLE `dados_pessoais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `exp_prof`
--
ALTER TABLE `exp_prof`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `formacao`
--
ALTER TABLE `formacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `habilidades`
--
ALTER TABLE `habilidades`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `dados_pessoais`
--
ALTER TABLE `dados_pessoais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `exp_prof`
--
ALTER TABLE `exp_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `formacao`
--
ALTER TABLE `formacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `habilidades`
--
ALTER TABLE `habilidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
