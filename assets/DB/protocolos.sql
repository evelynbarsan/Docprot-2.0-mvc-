-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07-Dez-2022 às 20:30
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `docprot`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `protocolos`
--

DROP TABLE IF EXISTS `protocolos`;
CREATE TABLE IF NOT EXISTS `protocolos` (
  `protocol` int(255) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(30) DEFAULT NULL,
  `descricao` varchar(300) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `recebeu` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `obs` varchar(100) NOT NULL,
  PRIMARY KEY (`protocol`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
