-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Out-2017 às 04:18
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolas`
--

CREATE TABLE `escolas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `escolas`
--

INSERT INTO `escolas` (`id`, `nome`) VALUES
(9, 'Colégio La Salle'),
(10, 'EE Prof Américo Virgínio do Santos'),
(11, 'EE Prof. Francisco Oliveira Faraco'),
(12, 'Escola Cristã de Botucatu'),
(13, 'Escola Danuzia de Santi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE `projetos` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id`, `nome`) VALUES
(1, 'Barquinho de papel movido a sabão'),
(2, 'Dispersão do corante em relação ao sabão'),
(3, 'Urgência e Emergência'),
(4, 'Alimentação Saudável'),
(5, 'Estandes de Alimentação Saudável'),
(6, 'Linhaça Dourada e Sal de Ervas para Alimentaç'),
(7, 'Reformas da Atualidade'),
(8, 'Guerra das Coreias'),
(9, 'Fisioterapia e a Dança'),
(10, 'Ferrofluído, o Porco-Espinho Magnético'),
(11, 'A Quase Lâmpada de Lava'),
(12, 'Misteriosa Areia que tem Medo de Água'),
(13, 'Você, a Decepção e o Amor'),
(14, 'Água e Maizena/Bolinhas de Gel/Areia Sinética'),
(15, 'Mudando a Voz'),
(16, 'Como dar Nó em Pingo D\'água'),
(17, 'Extração do Olho de Coco'),
(18, 'Pasta de Dente de Elefante'),
(19, 'Geleca Magnética'),
(20, 'Formação de Nanopartículas de Magnetita'),
(21, 'Separação Magnética nas Usinas de Reciclagem'),
(22, 'Drawdio'),
(23, 'Google CardBoard'),
(24, 'Teste de Stroop'),
(25, 'Ilusão de Ótica'),
(26, 'Câmara Escura de Orifício'),
(27, 'Enxergue sua Voz'),
(28, 'Rolê no Universo'),
(29, 'Viagem ao Desconhecido'),
(30, 'Máquina de Choques'),
(31, 'Holograma'),
(32, 'Labirinto de Água'),
(33, 'Guia da Feira'),
(34, 'Maquete Torno'),
(35, 'Sistema compreensor integrado a uma bomba de '),
(36, 'Escavadeira-hidráulica'),
(37, 'Ponte rolante micro controlada via Software'),
(38, 'Máquina de suco'),
(39, 'Dimensionamento Elétrico e Casa Inteligente'),
(40, 'Elevador controlado por Arduino'),
(41, 'Máquina CNC'),
(42, 'Carro de cambio por Comunicação Radio NRF2460'),
(43, 'Misturador de tinta'),
(44, 'Braço Robótico'),
(45, 'Braço Robótico programável'),
(46, 'Protótipo de Automação Residencial'),
(47, 'Lançador de batata'),
(48, 'Automação Residencial por comando de voz'),
(49, 'Site da Etec'),
(50, 'Dashboard'),
(51, 'Jokenpo em PHP'),
(52, 'TCC'),
(53, 'Prysama'),
(54, 'TCC Site etec'),
(55, 'Feed me'),
(56, 'Aluno Tec'),
(57, 'Bateria de forminha de gelo'),
(58, 'Jogo da velha automatizado'),
(59, 'Circuito integrado de semáforo cruzado'),
(60, '2 Cubos de led 3x3x3'),
(61, 'Mini central telefônica PABX'),
(62, 'Controle de acesso'),
(63, 'Sequêncial de led monitorado por arduino'),
(64, 'Drone Quadeicóptero'),
(65, 'Amigos do Asilo'),
(66, 'A última dose'),
(67, 'Bomba de fumaça de lodo'),
(68, 'TCC - Ventilador Automatizado'),
(70, 'Escolher vocação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `votacoes`
--

CREATE TABLE `votacoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `escola_id` int(11) NOT NULL,
  `projeto_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `escolas`
--
ALTER TABLE `escolas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votacoes`
--
ALTER TABLE `votacoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `escolas`
--
ALTER TABLE `escolas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `votacoes`
--
ALTER TABLE `votacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
