-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Mar-2023 às 13:06
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
-- Banco de dados: `formulario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_receber`
--

DROP TABLE IF EXISTS `tabela_receber`;
CREATE TABLE IF NOT EXISTS `tabela_receber` (
  `id_receber` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `arquivo_caminho` varchar(100) COLLATE utf8_bin NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_receber`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tabela_receber`
--

INSERT INTO `tabela_receber` (`id_receber`, `nome`, `arquivo_caminho`, `data`) VALUES
(91, ' ngngnntntf', '$2y$10$SW7Kevt3pddPRwRF4D9uP.SzdNqCkEkkpsodcH3ScTskvAIjpA1QS', '2023-03-09 14:25:42'),
(88, 'thau thai kaka', '', '2023-03-09 14:23:59'),
(89, 'thau thai kaka', '', '2023-03-09 14:24:13'),
(90, 'xsfghjkjhb', '$2y$10$UfECsp3CBl4qwUfcwJWodeMJWiSURf8KJfIoN/uzCcKRKCd69kw36', '2023-03-09 14:25:33'),
(87, 'thau thai kaka', '$2y$10$o3Kn8WxAhiLqWQVCWnNFr.ZKlbOyDqVqjYzfbNTBn0RyShpYp2kdW', '2023-03-09 14:17:10'),
(86, 'svd', '$2y$10$Dya7tXZcZPg7YaRdXjW3Xe5HeZDX/6j3s9OiFjxHBBTCsnT/DlPIG', '2023-03-09 14:16:13'),
(85, 'e h fh  vbrthht ', '$2y$10$RmUrQcbuVi64losGsUEqseiLA7G8CarsHqB1HNMjg9324gF/BKv8S', '2023-03-09 10:26:36'),
(84, 'wgwg', '$2y$10$Ccs4LqRIuMsrzPwrW7HwFe5NTuVjkHwWMdb5G4zImUqHrmCwQgDxa', '2023-03-09 10:26:27'),
(82, 'asfgdfgcvb', '$2y$10$qpkQuifgaXD0A9sF7cAU0upvKaLrME08TdDMoA7kRm8TTk/DAUSZC', '2023-03-09 10:25:59'),
(83, 'svxdbfc', '$2y$10$JK1M9q/EBrPh6vTXCFjPmOqbF/w6zp5FmXdwi3rsqrp2IcAoSRlyO', '2023-03-09 10:26:22'),
(81, 'asfgdfgcvb', '$2y$10$9tJavoZmH7oMhX9hvEZLvOL89Qz3Y7sF3reFjC8YgHh/qQUUEPlMO', '2023-03-09 10:25:33'),
(80, 'alexia e corna', '$2y$10$ycF4zdWzh2Yf1M2kJ8Jvse7r/UFwLrvi3uDdzWGbxyLJRIRAf66Wu', '2023-03-09 10:25:30'),
(79, 'alexia e corna', '$2y$10$HgyINBisSGndmmNHEUQF.OQR5SyqoYztdlLD.s4F7ulk5Z1OTvz/q', '2023-03-09 10:24:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
