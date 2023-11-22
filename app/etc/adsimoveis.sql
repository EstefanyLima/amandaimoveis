-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2023 às 00:18
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `adsimoveis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `Id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `nacionalidade` varchar(255) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `profissao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`Id`, `nome`, `sobrenome`, `email`, `cpf`, `endereco`, `telefone`, `nacionalidade`, `nascimento`, `profissao`) VALUES
(98, 'eeer', 'sdddddd', 'liooo', '454', 'gfdgfd', '643645', 'rgdf', '2023-11-25', 'fgfdgfd'),
(99, 'gio', 'lima', 'giokimsa473828@gmail.com', '454565657', 'edison', '1124360586', 'gndfhnfd', '2023-11-07', 'tdgdfh'),
(100, 'olfhdfh', 'hfh', 'tsg@gmail.com', '5465', 'dgdfgfdg', '454654', 'dfgdfg', '2023-11-02', 'dgdf'),
(101, 'gdfgfdg', 'gfdgfd', 'fgfdg@gmail.com', '56546', 'dfgdfgfdg', '654654', 'fgdfgrd', '2023-11-07', 'fhfgy');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `IdContato` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `mensagem` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`IdContato`, `nome`, `email`, `telefone`, `mensagem`) VALUES
(50, 'fhgfh', 'dfh@gmail.com', '465456', 'gfhtghyf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `cpf` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `sobrenome`, `email`, `telefone`, `rg`, `cpf`) VALUES
(26, 'estefany', 'lima', 'estefanylima@mail.com', '1124360565888', '56', '56'),
(27, 'gio', 'lima', 'sgsdgsd@gmail.com', '978224044', '46546', '46456'),
(28, 'dfgfd', 'gfdgdfg', 'dfgfd@gmail.com', '46546', '565', '5654'),
(29, 'dfhdfh', 'asfgs', 'fhdhd@gmail.com', '43645', '546546', '456'),
(30, 'gfhgfh', 'gfhfgh', 'ghgf@gmail.com', '9999', '67657675', '7657676'),
(31, 'fghgjhgj', 'hjhgjhg', 'jgfjhghg@gmail.com', '90989', '909778', '87878');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

CREATE TABLE `imovel` (
  `idimovel` int(11) NOT NULL,
  `ProprietarioID` int(11) DEFAULT NULL,
  `Nome` varchar(200) NOT NULL,
  `CPF` varchar(20) NOT NULL,
  `Prentende` enum('Alugar','Vender','Vender e Alugar','Indisponibilizar') NOT NULL,
  `ValorVenda` decimal(10,2) DEFAULT NULL,
  `ValorLocacao` decimal(10,2) DEFAULT NULL,
  `Tipo` enum('Casa','Apartamento','Flat','Casa em condomínio','Loja','Galpão','Terreno','Studio') NOT NULL,
  `Finalidade` enum('Residencial','Comercial') NOT NULL,
  `CEP` varchar(10) NOT NULL,
  `Cidade` varchar(255) NOT NULL,
  `Estado` varchar(40) NOT NULL,
  `Endereco` varchar(255) NOT NULL,
  `Bairro` varchar(255) NOT NULL,
  `MaisInformacoes` text DEFAULT NULL,
  `Imagem` varchar(300) NOT NULL,
  `status_aluguel` enum('Indisponivel','Alugando','Alugado','Alugado c/ Contrato Vencido') NOT NULL,
  `status_compra` enum('Indisponivel','A Venda','Vendido','Venda Cancelada') NOT NULL,
  `obsAdmin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`idimovel`, `ProprietarioID`, `Nome`, `CPF`, `Prentende`, `ValorVenda`, `ValorLocacao`, `Tipo`, `Finalidade`, `CEP`, `Cidade`, `Estado`, `Endereco`, `Bairro`, `MaisInformacoes`, `Imagem`, `status_aluguel`, `status_compra`, `obsAdmin`) VALUES
(6, 14, 'gg', '4343', 'Vender e Alugar', '545.00', '400.00', 'Casa', 'Residencial', '', 'erere', 'sp', 'ggfdgfdg', 'gtete', 'gfdgfd', 'fgfgf', 'Alugado', 'A Venda', 'gdsgdsgdsg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveltransacao`
--

CREATE TABLE `imoveltransacao` (
  `id` int(11) NOT NULL,
  `idimovel` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `tipo_transacao` enum('aluguel','venda') DEFAULT NULL,
  `data_transacao` date DEFAULT NULL,
  `valor_transacao` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imoveltransacao`
--

INSERT INTO `imoveltransacao` (`id`, `idimovel`, `cliente_id`, `tipo_transacao`, `data_transacao`, `valor_transacao`) VALUES
(41, 6, 98, 'aluguel', '2023-11-17', '10.00'),
(42, 6, 98, 'aluguel', '2023-11-17', '15.00'),
(43, 6, 98, 'venda', '2023-11-11', '4.00'),
(44, 6, 98, 'venda', '2023-11-29', '9.00'),
(45, 6, 98, 'venda', '2023-12-01', '1.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `proprietario`
--

CREATE TABLE `proprietario` (
  `idproprietario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `nacionalidade` varchar(255) DEFAULT NULL,
  `nascimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `proprietario`
--

INSERT INTO `proprietario` (`idproprietario`, `nome`, `sobrenome`, `email`, `cpf`, `endereco`, `telefone`, `nacionalidade`, `nascimento`) VALUES
(14, 'estefany', 'lima', 'oii', '4545', 'edison', '1124360586', 'fgjhfj', '2023-11-30'),
(16, 'fjfgj', 'hgh', 'es8@gmail.com', '543543', 'gngfjgf', '54645', 'fghfgh', '2023-11-16');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `uk_telefone` (`telefone`),
  ADD UNIQUE KEY `uk_email` (`email`),
  ADD UNIQUE KEY `uk_cpf` (`cpf`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`IdContato`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `telefone` (`telefone`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uk_email` (`email`),
  ADD UNIQUE KEY `uk_rg` (`rg`),
  ADD UNIQUE KEY `uk_cpf` (`cpf`),
  ADD UNIQUE KEY `uk_telefone` (`telefone`);

--
-- Índices para tabela `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`idimovel`),
  ADD KEY `imovel_ibfk_1` (`ProprietarioID`);

--
-- Índices para tabela `imoveltransacao`
--
ALTER TABLE `imoveltransacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imoveltransacao_ibfk_1` (`idimovel`),
  ADD KEY `imoveltransacao_ibfk_2` (`cliente_id`);

--
-- Índices para tabela `proprietario`
--
ALTER TABLE `proprietario`
  ADD PRIMARY KEY (`idproprietario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `IdContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `imovel`
--
ALTER TABLE `imovel`
  MODIFY `idimovel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `imoveltransacao`
--
ALTER TABLE `imoveltransacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `proprietario`
--
ALTER TABLE `proprietario`
  MODIFY `idproprietario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `imovel`
--
ALTER TABLE `imovel`
  ADD CONSTRAINT `imovel_ibfk_1` FOREIGN KEY (`ProprietarioID`) REFERENCES `proprietario` (`idproprietario`);

--
-- Limitadores para a tabela `imoveltransacao`
--
ALTER TABLE `imoveltransacao`
  ADD CONSTRAINT `imoveltransacao_ibfk_1` FOREIGN KEY (`idimovel`) REFERENCES `imovel` (`idimovel`),
  ADD CONSTRAINT `imoveltransacao_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
