-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2019 às 01:23
-- Versão do servidor: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `Codigo` int(20) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Rua` varchar(50) DEFAULT NULL,
  `Numero` varchar(10) DEFAULT NULL,
  `Bairro` varchar(25) DEFAULT NULL,
  `CEP` int(10) DEFAULT NULL,
  `cpf` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`Codigo`, `Nome`, `Rua`, `Numero`, `Bairro`, `CEP`, `cpf`) VALUES
(1, 'joao', 'das acacias', '1584', 'Florandia', 13481263, 2147483647),
(2, 'joao', 'das flores', '150', 'jd Floril', 13481265, 2147483647);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`Id_Usuario` int(20) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `idade` int(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `sexo` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Id_Usuario`, `nome`, `idade`, `email`, `senha`, `sexo`) VALUES
(1, 'Joao', 15, 'joao@joao.com', '14824', 'male'),
(2, 'Joao', 15, 'joao@joao.com', '14824', 'male'),
(3, 'maria', 15, 'joao@joao.com', '14824', 'male'),
(4, 'maria2', 15, 'joao@joao.com', '14824', 'male'),
(5, 'maria21', 15, 'joao@joao.com', '14824', 'male'),
(6, 'maria212', 15, 'joao@joao.com', '14824', 'male'),
(7, 'ana', 15, 'joao@joao.com', '14824', 'male'),
(8, 'ana2', 15, 'joao@joao.com', '14824', 'female'),
(9, 'Sharlot', 18, 'joao@joao.com', '14824', 'Bisexual'),
(10, 'esteban', 57, 'email@lll', '1248', 'Bisexual'),
(11, 'kkk', 55, 'email@lll', '1248', 'Bisexual'),
(12, 'julio', 21, 'julio@email.com', '1248', 'Masculino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`Codigo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`Id_Usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `Id_Usuario` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
