-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Nov-2018 às 19:13
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `almox`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `id_curso` int(2) NOT NULL AUTO_INCREMENT,
  `nome_curso` varchar(10) DEFAULT NULL,
  UNIQUE KEY `id_curso` (`id_curso`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `nome_curso`) VALUES
(1, 'adm'),
(2, 'edf'),
(3, 'eletro'),
(4, 'meca'),
(5, 'enfe'),
(6, 'esp_enf'),
(7, 'info'),
(8, 'm_a'),
(9, 'seg_trab');

-- --------------------------------------------------------

--
-- Estrutura da tabela `erros`
--

CREATE TABLE IF NOT EXISTS `erros` (
  `id_erro` int(3) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) DEFAULT NULL,
  `assunto` varchar(30) DEFAULT NULL,
  `id_setor` int(2) DEFAULT NULL,
  `descricao_erro` text,
  PRIMARY KEY (`id_erro`),
  UNIQUE KEY `id_erro` (`id_erro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `privilegios`
--

CREATE TABLE IF NOT EXISTS `privilegios` (
  `id_privilegio` int(1) NOT NULL AUTO_INCREMENT,
  `privilegio` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_privilegio`),
  UNIQUE KEY `privilegio` (`privilegio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `privilegios`
--

INSERT INTO `privilegios` (`id_privilegio`, `privilegio`) VALUES
(1, 'adm'),
(4, 'aluno'),
(2, 'lab_adm'),
(3, 'usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produto` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) DEFAULT NULL,
  `marca` varchar(25) DEFAULT NULL,
  `valor` decimal(6,0) DEFAULT NULL,
  `descricao` varchar(40) DEFAULT NULL,
  `qtd` int(3) DEFAULT NULL,
  `un` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`id_produto`),
  UNIQUE KEY `id_produto` (`id_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `marca`, `valor`, `descricao`, `qtd`, `un`) VALUES
(1, 'Ferro de solda', 'Tramontina', '70', 'novo em perfeito estado', 20, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE IF NOT EXISTS `setor` (
  `id_setor` int(1) NOT NULL AUTO_INCREMENT,
  `setor` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_setor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`id_setor`, `setor`) VALUES
(1, 'geral'),
(2, 'sala de aula'),
(3, 'almox'),
(4, 'central material'),
(5, 'lab info');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `id_turma` int(11) NOT NULL AUTO_INCREMENT,
  `turma` varchar(5) DEFAULT NULL,
  UNIQUE KEY `id_turma` (`id_turma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id_turma`, `turma`) VALUES
(1, '1ano'),
(2, '2ano'),
(3, '3ano'),
(4, '4ano'),
(5, '1seme'),
(6, '2seme'),
(7, '3seme'),
(8, '4seme');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turno`
--

CREATE TABLE IF NOT EXISTS `turno` (
  `id_turno` int(1) NOT NULL AUTO_INCREMENT,
  `turno` varchar(5) DEFAULT NULL,
  UNIQUE KEY `id_turno` (`id_turno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `turno`
--

INSERT INTO `turno` (`id_turno`, `turno`) VALUES
(1, 'manha'),
(2, 'tarde'),
(3, 'noite');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) DEFAULT NULL,
  `sobrenome` varchar(25) DEFAULT NULL,
  `cgm` int(10) DEFAULT NULL,
  `dn` date DEFAULT NULL,
  `id_turno` int(11) DEFAULT NULL,
  `id_setor` int(11) DEFAULT NULL,
  `id_privilegio` int(11) DEFAULT NULL,
  `id_turma` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `senha` varchar(6) DEFAULT NULL,
  UNIQUE KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `sobrenome`, `cgm`, `dn`, `id_turno`, `id_setor`, `id_privilegio`, `id_turma`, `id_curso`, `senha`) VALUES
(1, 'admin', NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, '147258'),
(2, 'Campos', NULL, NULL, NULL, NULL, 7, 2, NULL, NULL, '010101'),
(8, 'Joao', 'Freitas', NULL, NULL, NULL, 2, 3, NULL, NULL, '123456'),
(9, 'Gabriel', 'de Campos', 554404782, '1998-08-01', 1, NULL, 4, 4, 7, '080808');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
