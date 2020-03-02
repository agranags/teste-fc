-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Mar-2020 às 08:44
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste_fc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `id` int(11) NOT NULL,
  `email` varchar(112) NOT NULL,
  `nome` varchar(112) NOT NULL,
  `senha` varchar(112) NOT NULL,
  `endereco_consultorio` varchar(112) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`id`, `email`, `nome`, `senha`, `endereco_consultorio`, `data_criacao`, `data_alteracao`) VALUES
(1, 'medico1@email.com', 'medico1', 'senha1', 'endereco1', '2020-02-28 07:33:21', '2020-02-28 07:33:21'),
(2, 'medico2@email.com', 'medico2', 'senha2', 'endereco2', '2020-02-28 07:34:22', '2020-02-28 07:34:22'),
(3, 'email3@email.com', 'Medico3 Teste', '123456', 'endereco 3 Teste', '2020-03-01 15:14:31', '2020-03-01 15:14:31'),
(4, 'medico4@teste.com', 'medico4 ', '654321', 'endereco 4 Teste', '2020-03-02 06:44:22', '2020-03-02 06:44:22'),
(5, 'medico5@teste.com', 'medico 5', '654321', 'endereco 5 Teste', '2020-03-02 06:56:26', '2020-03-02 06:56:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medico`
--
ALTER TABLE `medico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
