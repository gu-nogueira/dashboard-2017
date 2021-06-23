-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.67-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema dashboard
--

CREATE DATABASE IF NOT EXISTS dashboard;
USE dashboard;

--
-- Definition of table `escolas`
--

DROP TABLE IF EXISTS `escolas`;
CREATE TABLE `escolas` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `escolas`
--

/*!40000 ALTER TABLE `escolas` DISABLE KEYS */;
/*!40000 ALTER TABLE `escolas` ENABLE KEYS */;


--
-- Definition of table `projetos`
--

DROP TABLE IF EXISTS `projetos`;
CREATE TABLE `projetos` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projetos`
--

/*!40000 ALTER TABLE `projetos` DISABLE KEYS */;
INSERT INTO `projetos` (`id`,`nome`) VALUES
 (1,'Barquinho de papel movido a sabão'),
 (2,'Dispersão do corante em relação ao sabão'),
 (3,'Urgência e Emergência'),
 (4,'Alimentação Saudável'),
 (5,'Estandes de Alimentação Saudável'),
 (6,'Linhaça Dourada e Sal de Ervas para Alimentaç'),
 (7,'Reformas da Atualidade'),
 (8,'Guerra das Coreias'),
 (9,'Fisioterapia e a Dança'),
 (10,'Ferrofluído, o Porco-Espinho Magnético'),
 (11,'A Quase Lâmpada de Lava'),
 (12,'Misteriosa Areia que tem Medo de Água'),
 (13,'Você, a Decepção e o Amor'),
 (14,'Água e Maizena/Bolinhas de Gel/Areia Sinética'),
 (15,'Mudando a Voz'),
 (16,'Como dar Nó em Pingo D\'água'),
 (17,'Extração do Olho de Coco'),
 (18,'Pasta de Dente de Elefante'),
 (19,'Geleca Magnética'),
 (20,'Formação de Nanopartículas de Magnetita'),
 (21,'Separação Magnética nas Usinas de Reciclagem'),
 (22,'Drawdio'),
 (23,'Google CardBoard'),
 (24,'Teste de Stroop'),
 (25,'Ilusão de Ótica'),
 (26,'Câmara Escura de Orifício'),
 (27,'Enxergue sua Voz'),
 (28,'Rolê no Universo'),
 (29,'Viagem ao Desconhecido'),
 (30,'Máquina de Choques'),
 (31,'Holograma'),
 (32,'Labirinto de Água'),
 (33,'Guia da Feira'),
 (34,'Maquete Torno'),
 (35,'Sistema compreensor integrado a uma bomba de '),
 (36,'Escavadeira-hidráulica'),
 (37,'Ponte rolante micro controlada via Software'),
 (38,'Máquina de suco'),
 (39,'Dimensionamento Elétrico e Casa Inteligente'),
 (40,'Elevador controlado por Arduino'),
 (41,'Máquina CNC'),
 (42,'Carro de cambio por Comunicação Radio NRF2460'),
 (43,'Misturador de tinta'),
 (44,'Braço Robótico'),
 (45,'Braço Robótico programável'),
 (46,'Protótipo de Automação Residencial'),
 (47,'Lançador de batata'),
 (48,'Automação Residencial por comando de voz'),
 (49,'Site da Etec'),
 (50,'Dashboard'),
 (51,'Jokenpo em PHP'),
 (52,'TCC'),
 (53,'Prysama'),
 (54,'TCC'),
 (55,'Feed me'),
 (56,'Aluno Tec'),
 (57,'Bateria de forminha de gelo'),
 (58,'Jogo da velha automatizado'),
 (59,'Circuito integrado de semáforo cruzado'),
 (60,'2 Cubos de led 3x3x3'),
 (61,'Mini central telefônica PABX'),
 (62,'Controle de acesso'),
 (63,'Sequêncial de led monitorado por arduino'),
 (64,'Drone Quadeicóptero'),
 (65,'Amigos do Asilo'),
 (66,'A última dose'),
 (67,'Bomba de fumaça de lodo'),
 (68,'TCC - Ventilador Automatizado');
/*!40000 ALTER TABLE `projetos` ENABLE KEYS */;


--
-- Definition of table `votacoes`
--

DROP TABLE IF EXISTS `votacoes`;
CREATE TABLE `votacoes` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) default NULL,
  `telefone` varchar(255) default NULL,
  `escola_id` int(11) NOT NULL,
  `projeto_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votacoes`
--

/*!40000 ALTER TABLE `votacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `votacoes` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
