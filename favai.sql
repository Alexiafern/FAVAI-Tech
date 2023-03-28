-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Mar-2023 às 21:46
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `favai`
--
CREATE DATABASE IF NOT EXISTS `favai` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `favai`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `favai_receber`
--

DROP TABLE IF EXISTS `favai_receber`;
CREATE TABLE IF NOT EXISTS `favai_receber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf8_bin NOT NULL,
  `sinop` varchar(1000) COLLATE utf8_bin NOT NULL,
  `arquivo` varchar(100) COLLATE utf8_bin NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `favai_receber`
--

INSERT INTO `favai_receber` (`id`, `nome`, `sinop`, `arquivo`, `data`) VALUES
(6, 'Alexia', 'ferwfaewrf', 'a_natureza_agradece.webp', '2023-03-18 16:08:20'),
(20, 'Abacate aaaaa', 'fwefrwf', 'a_natureza_agradece.webp', '2023-03-21 17:03:01'),
(19, 'Alexia abobora abacate cate', 'Testandoo', 'a_natureza_agradece.webp', '2023-03-21 17:02:47'),
(18, 'Alexia abobora abacate cate', 'Testandoo', 'a_natureza_agradece.webp', '2023-03-18 16:48:37'),
(17, 'Alexia abobora abacate cate', 'Testandoo', 'a_natureza_agradece.webp', '2023-03-18 16:22:08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
