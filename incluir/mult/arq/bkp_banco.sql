/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `acesso` (
  `idacesso` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `nivelacesso` char(1) DEFAULT NULL COMMENT '1 = vendas\r\n2 = 1 + cadastro produto\r\n5 = aministrativo',
  PRIMARY KEY (`idacesso`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `acesso` (`idacesso`, `usuario`, `senha`, `nivelacesso`) VALUES
	(4, 'rafaelsouzac@gmail.com', '123456', '5'),
	(5, 'taila@lojathefit.com.br', '123456', '1');

CREATE TABLE IF NOT EXISTS `acessoregistro` (
  `idcessoregistroa` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dataregistro` date NOT NULL,
  `acessohora` time NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idcessoregistroa`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `acessoregistro` (`idcessoregistroa`, `usuario`, `dataregistro`, `acessohora`) VALUES
	(9, 'rafaelsouzac@gmail.com', '2023-12-04', '12:34:06'),
	(10, 'rafaelsouzac@gmail.com', '2023-12-08', '23:45:56'),
	(11, 'rafaelsouzac@gmail.com', '2023-12-08', '08:40:23'),
	(12, 'rafaelsouzac@gmail.com', '2023-12-08', '08:44:47'),
	(13, 'rafaelsouzac@gmail.com', '2023-12-10', '11:40:41'),
	(14, 'rafaelsouzac@gmail.com', '2023-12-10', '13:08:32'),
	(15, 'rafaelsouzac@gmail.com', '2024-01-11', '07:46:19'),
	(16, 'rafaelsouzac@gmail.com', '2024-03-21', '09:47:08'),
	(17, 'rafaelsouzac@gmail.com', '2024-03-22', '07:37:43'),
	(18, 'rafaelsouzac@gmail.com', '2024-03-23', '10:53:30'),
	(19, 'rafaelsouzac@gmail.com', '2024-05-18', '02:11:26'),
	(20, 'rafaelsouzac@gmail.com', '2024-05-20', '09:38:24'),
	(21, 'rafaelsouzac@gmail.com', '2024-05-19', '10:06:17'),
	(22, 'rafaelsouzac@gmail.com', '2024-07-24', '23:19:24'),
	(23, 'rafaelsouzac@gmail.com', '2024-07-24', '16:18:16'),
	(24, 'rafaelsouzac@gmail.com', '2024-07-24', '17:21:07'),
	(25, 'rafaelsouzac@gmail.com', '2024-07-24', '17:25:36'),
	(26, 'rafaelsouzac@gmail.com', '2024-07-25', '08:31:20'),
	(27, 'rafaelsouzac@gmail.com', '2024-07-25', '09:36:22'),
	(28, 'rafaelsouzac@gmail.com', '2024-07-25', '10:03:56'),
	(29, 'rafaelsouzac@gmail.com', '2024-07-26', '09:46:46'),
	(30, 'rafaelsouzac@gmail.com', '2024-07-27', '09:02:29'),
	(31, 'rafaelsouzac@gmail.com', '2024-07-27', '10:11:58'),
	(32, 'rafaelsouzac@gmail.com', '2024-07-27', '10:22:03'),
	(33, 'rafaelsouzac@gmail.com', '2024-07-27', '17:36:25'),
	(34, 'rafaelsouzac@gmail.com', '2024-07-29', '10:21:20'),
	(35, 'rafaelsouzac@gmail.com', '2024-07-29', '18:28:44'),
	(36, 'rafaelsouzac@gmail.com', '2024-07-30', '00:26:57'),
	(37, 'rafaelsouzac@gmail.com', '2024-07-30', '00:37:19'),
	(38, 'rafaelsouzac@gmail.com', '2024-07-30', '00:49:12'),
	(39, 'rafaelsouzac@gmail.com', '2024-07-31', '10:01:04'),
	(40, 'rafaelsouzac@gmail.com', '2024-08-01', '08:40:55'),
	(41, 'rafaelsouzac@gmail.com', '2024-08-02', '23:23:18'),
	(42, 'rafaelsouzac@gmail.com', '2024-08-02', '09:07:22'),
	(43, 'rafaelsouzac@gmail.com', '2024-08-02', '09:27:11'),
	(44, 'rafaelsouzac@gmail.com', '2024-08-03', '10:23:08'),
	(45, 'rafaelsouzac@gmail.com', '2024-08-03', '11:22:18'),
	(46, 'rafaelsouzac@gmail.com', '2024-08-03', '13:55:14'),
	(47, 'rafaelsouzac@gmail.com', '2024-08-03', '14:18:30'),
	(48, 'rafaelsouzac@gmail.com', '2024-08-04', '12:02:46'),
	(49, 'rafaelsouzac@gmail.com', '2024-08-04', '12:14:37'),
	(50, 'rafaelsouzac@gmail.com', '2024-08-04', '12:45:00'),
	(51, 'rafaelsouzac@gmail.com', '2024-08-04', '12:51:30'),
	(52, 'rafaelsouzac@gmail.com', '2024-08-06', '14:38:08'),
	(53, 'rafaelsouzac@gmail.com', '2024-08-06', '15:10:57'),
	(54, 'rafaelsouzac@gmail.com', '2024-08-06', '15:37:42'),
	(55, 'rafaelsouzac@gmail.com', '2024-08-06', '15:38:34'),
	(56, 'rafaelsouzac@gmail.com', '2024-08-07', '10:14:01'),
	(57, 'rafaelsouzac@gmail.com', '2024-08-08', '08:39:23'),
	(58, 'rafaelsouzac@gmail.com', '2024-08-08', '09:25:09'),
	(59, 'rafaelsouzac@gmail.com', '2024-08-08', '09:30:21'),
	(60, 'rafaelsouzac@gmail.com', '2024-08-08', '09:34:59'),
	(61, 'rafaelsouzac@gmail.com', '2024-08-08', '09:38:31'),
	(62, 'rafaelsouzac@gmail.com', '2024-08-09', '08:37:46'),
	(63, 'taila@lojathefit.com.br', '2024-08-09', '08:40:19'),
	(64, 'rafaelsouzac@gmail.com', '2024-08-09', '08:42:41'),
	(65, 'rafaelsouzac@gmail.com', '2024-08-10', '08:41:10'),
	(66, 'rafaelsouzac@gmail.com', '2024-08-10', '08:50:49'),
	(67, 'rafaelsouzac@gmail.com', '2024-08-11', '23:59:15'),
	(68, 'rafaelsouzac@gmail.com', '2024-08-13', '22:14:27'),
	(69, 'rafaelsouzac@gmail.com', '2024-08-13', '08:59:53'),
	(70, 'taila@lojathefit.com.br', '2024-08-13', '09:19:25'),
	(71, 'rafaelsouzac@gmail.com', '2024-08-13', '09:36:59'),
	(72, 'rafaelsouzac@gmail.com', '2024-08-13', '09:47:14'),
	(73, 'rafaelsouzac@gmail.com', '2024-08-13', '10:30:02'),
	(74, 'rafaelsouzac@gmail.com', '2024-08-13', '10:53:13'),
	(75, 'rafaelsouzac@gmail.com', '2024-08-14', '07:53:59'),
	(76, 'taila@lojathefit.com.br', '2024-08-14', '07:57:54'),
	(77, 'rafaelsouzac@gmail.com', '2024-08-14', '08:01:06'),
	(78, 'taila@lojathefit.com.br', '2024-08-14', '08:44:15'),
	(79, 'rafaelsouzac@gmail.com', '2024-08-14', '08:50:10');

DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `apagarprodutos`()
BEGIN
TRUNCATE produtos;
TRUNCATE produtoimagem;
TRUNCATE produtoquantidade;
TRUNCATE valorprodutos;
END//
DELIMITER ;

CREATE TABLE IF NOT EXISTS `clientes` (
  `idcliente` int(11) NOT NULL,
  `nomecliente` varchar(50) DEFAULT NULL,
  `whatsapp` varchar(50) DEFAULT NULL,
  `idusuarioface` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


CREATE TABLE IF NOT EXISTS `dadosfornecedor` (
  `iddadosfornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nomecontato` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `pix` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`iddadosfornecedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `fornecedores` (
  `idfornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `cartao` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idfornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `fornecedores` (`idfornecedor`, `cartao`) VALUES
	(1, '17110454366019084567972019366764.jpg'),
	(3, '20230417_095153~2.jpg'),
	(4, '20230417_095145~2.jpg');

CREATE TABLE `listadeprodutos` (
	`idproduto` INT(11) NOT NULL,
	`titulo` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`codigobarras` CHAR(15) NULL COLLATE 'utf8mb4_unicode_ci',
	`tamanho` CHAR(8) NULL COLLATE 'utf8mb4_unicode_ci',
	`nomeimagem` VARCHAR(250) NULL COLLATE 'utf8mb4_unicode_ci',
	`valorproduto` DECIMAL(10,2) NOT NULL,
	`custoproduto` DECIMAL(10,2) NOT NULL
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `marketingplaces` (
  `idmarketingplace` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `nomemarketingplace` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`idmarketingplace`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `marketingplaces` (`idmarketingplace`, `url`, `nomemarketingplace`) VALUES
	(1, 'https://www.facebook.com', 'facebook');

CREATE TABLE IF NOT EXISTS `pedidos` (
  `idpedido` int(11) NOT NULL AUTO_INCREMENT,
  `dataregistro` date NOT NULL DEFAULT curdate(),
  `usuario` varchar(100) NOT NULL,
  `aberto` char(1) NOT NULL DEFAULT 'S' COMMENT 'S = SIM\r\nN = NÃO\r\nA = APAGADO\r\nF = FINALIZADO',
  PRIMARY KEY (`idpedido`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `pedidos` (`idpedido`, `dataregistro`, `usuario`, `aberto`) VALUES
	(3, '2023-12-10', 'rafaelsouzac@gmail.com', 'S'),
	(4, '2024-05-18', 'rafaelsouzac@gmail.com', 'F'),
	(5, '2024-05-20', 'rafaelsouzac@gmail.com', 'F'),
	(6, '2024-05-20', 'rafaelsouzac@gmail.com', 'F'),
	(7, '2024-05-20', 'rafaelsouzac@gmail.com', 'S'),
	(8, '2024-05-19', 'rafaelsouzac@gmail.com', 'F'),
	(9, '2024-05-19', 'rafaelsouzac@gmail.com', 'S'),
	(10, '2024-05-19', 'rafaelsouzac@gmail.com', 'F'),
	(11, '2024-05-19', 'rafaelsouzac@gmail.com', 'S'),
	(12, '2024-05-19', 'rafaelsouzac@gmail.com', 'S'),
	(13, '2024-07-24', 'rafaelsouzac@gmail.com', 'F'),
	(14, '2024-07-24', 'rafaelsouzac@gmail.com', 'F'),
	(15, '2024-07-24', 'rafaelsouzac@gmail.com', 'F'),
	(16, '2024-07-24', 'rafaelsouzac@gmail.com', 'F'),
	(17, '2024-07-24', 'rafaelsouzac@gmail.com', 'F'),
	(18, '2024-07-24', 'rafaelsouzac@gmail.com', 'F'),
	(19, '2024-07-24', 'rafaelsouzac@gmail.com', 'F'),
	(20, '2024-07-25', 'rafaelsouzac@gmail.com', 'S'),
	(21, '2024-07-25', 'rafaelsouzac@gmail.com', 'F'),
	(22, '2024-07-25', 'rafaelsouzac@gmail.com', 'F'),
	(23, '2024-07-25', 'rafaelsouzac@gmail.com', 'F'),
	(24, '2024-07-25', 'rafaelsouzac@gmail.com', 'F'),
	(25, '2024-07-27', 'rafaelsouzac@gmail.com', 'S'),
	(26, '2024-08-04', 'rafaelsouzac@gmail.com', 'S'),
	(27, '2024-08-04', 'rafaelsouzac@gmail.com', 'S'),
	(28, '2024-08-04', 'rafaelsouzac@gmail.com', 'F'),
	(29, '2024-08-06', 'rafaelsouzac@gmail.com', 'F'),
	(30, '2024-08-09', 'taila@lojathefit.com.br', 'F'),
	(31, '2024-08-10', 'rafaelsouzac@gmail.com', 'F'),
	(32, '2024-08-10', 'rafaelsouzac@gmail.com', 'F'),
	(33, '2024-08-10', 'rafaelsouzac@gmail.com', 'F'),
	(34, '2024-08-10', 'rafaelsouzac@gmail.com', 'F'),
	(35, '2024-08-10', 'rafaelsouzac@gmail.com', 'F'),
	(36, '2024-08-10', 'rafaelsouzac@gmail.com', 'F'),
	(37, '2024-08-10', 'rafaelsouzac@gmail.com', 'F'),
	(38, '2024-08-10', 'rafaelsouzac@gmail.com', 'F'),
	(39, '2024-08-10', 'rafaelsouzac@gmail.com', 'F'),
	(40, '2024-08-13', 'taila@lojathefit.com.br', 'F'),
	(41, '2024-08-13', 'taila@lojathefit.com.br', 'F'),
	(42, '2024-08-13', 'rafaelsouzac@gmail.com', 'F'),
	(43, '2024-08-13', 'rafaelsouzac@gmail.com', 'F'),
	(44, '2024-08-14', 'rafaelsouzac@gmail.com', 'F'),
	(45, '2024-08-14', 'taila@lojathefit.com.br', 'F'),
	(46, '2024-08-14', 'rafaelsouzac@gmail.com', 'F'),
	(47, '2024-08-14', 'taila@lojathefit.com.br', 'S'),
	(48, '2024-08-14', 'taila@lojathefit.com.br', 'F'),
	(49, '2024-08-14', 'rafaelsouzac@gmail.com', 'S');

CREATE TABLE IF NOT EXISTS `produtofornecedor` (
  `idprodutofornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `idproduto` int(11) DEFAULT NULL,
  `idfornecedor` int(11) NOT NULL,
  PRIMARY KEY (`idprodutofornecedor`),
  KEY `FK_produtofornecedor_produtos` (`idproduto`),
  KEY `FK_produtofornecedor_fornecedores` (`idfornecedor`),
  CONSTRAINT `FK_produtofornecedor_fornecedores` FOREIGN KEY (`idfornecedor`) REFERENCES `fornecedores` (`idfornecedor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_produtofornecedor_produtos` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


CREATE TABLE IF NOT EXISTS `produtoimagem` (
  `idprodutoimagem` int(11) NOT NULL AUTO_INCREMENT,
  `idproduto` int(11) DEFAULT NULL,
  `nomeimagem` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idprodutoimagem`),
  KEY `FK_produtoimagem_produtos` (`idproduto`),
  CONSTRAINT `FK_produtoimagem_produtos` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `produtoimagem` (`idprodutoimagem`, `idproduto`, `nomeimagem`) VALUES
	(1, 1, 'ted1.jpg'),
	(2, 1, 'ted04.jpg'),
	(4, 1, 'ted06.jpg'),
	(5, 2, 'ted03.jpg'),
	(6, 2, 'ted2.jpg'),
	(7, 2, 'ted05.jpg'),
	(11, 5, 'legging_rosa_lisa1.webp'),
	(12, 5, 'legging_rosa_lisa2.webp'),
	(13, 5, 'legging_rosa_lisa3.webp'),
	(14, 6, 'legging_marinho_lisa1.webp'),
	(15, 6, 'legging_marinho_lisa2.png'),
	(16, 6, 'legging_marinho_lisa3.webp');

CREATE TABLE IF NOT EXISTS `produtoquantidade` (
  `idprodutoquantidade` int(11) NOT NULL AUTO_INCREMENT,
  `idproduto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT 0,
  `dataregistro` date NOT NULL DEFAULT curdate(),
  PRIMARY KEY (`idprodutoquantidade`),
  KEY `FK_produtoquantidade_produtos` (`idproduto`),
  CONSTRAINT `FK_produtoquantidade_produtos` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `produtoquantidade` (`idprodutoquantidade`, `idproduto`, `quantidade`, `dataregistro`) VALUES
	(3, 2, 11, '2024-07-29'),
	(4, 1, 1, '2024-07-29'),
	(5, 2, 4, '2024-07-30'),
	(6, 1, 3, '2024-07-30'),
	(7, 2, 3, '2024-07-31'),
	(8, 1, 2, '2024-07-31'),
	(9, 2, 3, '2024-08-04'),
	(10, 1, 1, '2024-08-04');

CREATE TABLE IF NOT EXISTS `produtos` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `tamanho` char(8) DEFAULT NULL,
  `cor` char(10) DEFAULT NULL,
  `descricao` varchar(1250) DEFAULT NULL,
  `ativo` char(1) NOT NULL DEFAULT '1',
  `codigobarras` char(15) DEFAULT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `produtos` (`idproduto`, `titulo`, `tamanho`, `cor`, `descricao`, `ativo`, `codigobarras`) VALUES
	(1, 'Casaco Teddy Feminino Curto Cor Preto', 'G', 'Preto', 'Casaco Teddy Feminino Curto Cor Preta R$60.00. \r\n\r\n- Pague somente quando receber.\r\n\r\n- TELE VALOR MÁXIMO R$ 15.00\r\n- Troca garantida SEM COBRANÇA DE TELE.\r\n\r\n- Cores: Preto, Rosa, Branco, Nude\r\n\r\n- TELE-ENTREGA mais barato que estacionamento. \r\n  Entregamos no local em que você estiver. \r\n  Porto Alegre, Cachoerinha, Canoas, Alvorada, \r\n  Gravataí, Viamão, Eldorado do Sul e Guaiba.\r\n\r\n- À vista R$60.00 ou pix  R$65.00 no cartão.', '1', '11'),
	(2, 'Casaco Teddy Feminino Curto Cor Branco', 'G', 'Branco', 'Casaco Teddy Feminino Curto Cor Branco R$60.00. \r\nTELE VALOR MÁXIMO R$ 15.00\r\nNÃO COBRAMOS EM CASO DE TROCAS.\r\n\r\n- Cores: Preto, Rosa, Branco, Nude\r\n\r\n- TELE-ENTREGA mais barato que estacionamento. Entregamos no local em que você estiver. Porto Alegre, Cachoerinha, Canoas, Alvorada, Gravataí, Viamão, Eldorado do Sul e Guaiba.\r\n\r\n- Pague somente quando receber.\r\n\r\n- Troca garantida SEM COBRANÇA DE TELE.\r\n\r\n- À vista R$60.00 ou pix  R$65.00 no cartão.', '1', '12'),
	(4, 'Casaco Teddy curto preto', 'G', 'Preto', 'Casaco Teddy Feminino Curto Cor Preta R$60.00. \r\n\r\n- Pague somente quando receber.\r\n\r\n- TELE VALOR MÁXIMO R$ 15.00\r\n- Troca garantida SEM COBRANÇA DE TELE.\r\n\r\n- Cores: Preto, Rosa, Branco, Nude\r\n\r\n- TELE-ENTREGA mais barato que estacionamento. \r\n\r\n- Entregamos no local em que você estiver. \r\n  Porto Alegre, Cachoerinha, Canoas, Alvorada, \r\n  Gravataí, Viamão, Eldorado do Sul e Guaiba.\r\n\r\n- À vista R$60.00 ou pix  R$65.00 no cartão.', '1', '13'),
	(5, 'Calça Legging Feminina Rosa Lisa em Suplex - Confo', 'P M G GG', 'Rosa', 'Calça Legging Feminina Rosa Lisa em Suplex - Conforto e Estilo.\r\n\r\n- Pague somente quando receber.\r\n\r\n- TELE VALOR MÁXIMO R$ 15.00\r\n- Troca garantida SEM COBRANÇA DE TELE.\r\n\r\n- Cores: Preto, Rosa, Branco, Nude\r\n\r\n- TELE-ENTREGA mais barato que estacionamento. \r\n  Entregamos no local em que você estiver. \r\n  Porto Alegre, Cachoerinha, Canoas, Alvorada, \r\n  Gravataí, Viamão, Eldorado do Sul e Guaiba.\r\n\r\n- À vista ou pix R$50.00   \r\n- No cartão R$65.00 ', '1', NULL),
	(6, 'Legging Feminina Azul Marinho Lisa de Suplex - Ide', 'P M G GG', 'Azul Marin', 'Calça Legging Feminina Azul Marinho Lisa em Suplex - Conforto e Estilo.\r\n\r\n- Pague somente quando receber.\r\n\r\n- TELE VALOR MÁXIMO R$ 15.00\r\n- Troca garantida SEM COBRANÇA DE TELE.\r\n\r\n- Cores: Preto, Rosa, Branco, Azul Marinho\r\n\r\n- TELE-ENTREGA mais barato que estacionamento. \r\n  Entregamos no local em que você estiver. \r\n  Porto Alegre, Cachoeirinha, Canoas, Alvorada, \r\n  Gravataí, Viamão, Eldorado do Sul e Guaíba.\r\n\r\n- À vista ou pix R$50.00   \r\n- No cartão R$65.00 ', '1', NULL),
	(7, 'Legging 3d', NULL, NULL, NULL, '1', NULL),
	(8, 'Legging Tratorada', NULL, NULL, NULL, '1', NULL),
	(9, 'Legging Mantaria', NULL, NULL, NULL, '1', NULL),
	(10, 'Legging courino', NULL, NULL, NULL, '1', NULL),
	(11, 'Casaco Teddy Feminino Longo Cor Preto', 'G', 'Preto', 'Casaco Teddy Feminino Longo Cor Preta R$80.00. \r\n\r\n- Pague somente quando receber.\r\n\r\n- TELE VALOR MÁXIMO R$ 15.00\r\n- Troca garantida SEM COBRANÇA DE TELE.\r\n\r\n- Cores: Preto, Rosa, Branco, Nude\r\n\r\n- TELE-ENTREGA mais barato que estacionamento. \r\n  Entregamos no local em que você estiver. \r\n  Porto Alegre, Cachoerinha, Canoas, Alvorada, \r\n  Gravataí, Viamão, Eldorado do Sul e Guaiba.\r\n\r\n- À vista ou pix R$80.00   \r\n- R$65.00 no cartão.', '1', NULL),
	(12, 'Casaco Teddy Feminino Longo Cor Branco', 'G', 'Branco', 'Casaco Teddy Feminino Longo Cor Branco R$80.00. \r\nTELE VALOR MÁXIMO R$ 15.00\r\nNÃO COBRAMOS EM CASO DE TROCAS.\r\n\r\n- Cores: Preto, Rosa, Branco, Nude\r\n\r\n- TELE-ENTREGA mais barato que estacionamento. Entregamos no local em que você estiver. Porto Alegre, Cachoerinha, Canoas, Alvorada, Gravataí, Viamão, Eldorado do Sul e Guaiba.\r\n\r\n- Pague somente quando receber.\r\n\r\n- Troca garantida SEM COBRANÇA DE TELE.\r\n\r\n- À vista R$80.00 ou pix  \r\n- R$85.00 no cartão.', '1', NULL);

CREATE TABLE IF NOT EXISTS `produtospedidos` (
  `idprodutopedido` int(11) NOT NULL AUTO_INCREMENT,
  `codigobarra` varchar(25) DEFAULT NULL,
  `idpedido` int(11) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `apagado` char(1) NOT NULL DEFAULT 'N' COMMENT 'S = SIM\r\nN = NÃO',
  PRIMARY KEY (`idprodutopedido`),
  KEY `FK_produtospedidos_pedidos` (`idpedido`),
  CONSTRAINT `FK_produtospedidos_pedidos` FOREIGN KEY (`idpedido`) REFERENCES `pedidos` (`idpedido`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `produtospedidos` (`idprodutopedido`, `codigobarra`, `idpedido`, `quantidade`, `apagado`) VALUES
	(1, '12', 13, 1, 'N'),
	(2, '12', 14, 2, 'N'),
	(3, '12', 15, 3, 'N'),
	(4, '12', 16, 4, 'N'),
	(5, '12', 17, 7, 'N'),
	(6, '12', 18, 10, 'N'),
	(7, '12', 19, 20, 'N'),
	(8, '12', 21, 6, 'N'),
	(9, '12', 21, 6, 'N'),
	(10, '12', 21, 6, 'N'),
	(11, '12', 22, 2, 'N'),
	(12, '12', 23, 3, 'N'),
	(13, '12', 24, 2, 'N'),
	(14, '12', 28, 2, 'N'),
	(15, '12', 29, 1, 'N'),
	(16, '12', 30, 1, 'N'),
	(17, '12', 31, 1, 'N'),
	(18, '12', 32, 2, 'N'),
	(19, '12', 33, 3, 'N'),
	(20, '12', 34, 4, 'N'),
	(21, '12', 35, 1, 'N'),
	(22, '12', 36, 1, 'N'),
	(23, '12', 37, 2, 'N'),
	(24, '12', 38, 3, 'N'),
	(25, '12', 39, 4, 'N'),
	(26, '12', 40, 1, 'N'),
	(27, '11', 41, 3, 'N'),
	(28, '11', 42, 5, 'N'),
	(29, '12', 43, 3, 'N'),
	(30, '12', 44, 1, 'N'),
	(31, '12', 45, 2, 'N'),
	(32, '11', 46, 4, 'N'),
	(33, '11', 48, 3, 'N'),
	(34, '12', 48, 5, 'N');

CREATE TABLE IF NOT EXISTS `produtospublicados` (
  `idprodutopublicado` int(11) NOT NULL AUTO_INCREMENT,
  `idproduto` int(11) NOT NULL DEFAULT 0,
  `idmarketingplace` int(11) NOT NULL DEFAULT 0,
  `dataregistro` date NOT NULL DEFAULT curdate(),
  PRIMARY KEY (`idprodutopublicado`),
  KEY `FK_produtospublicados_produtos` (`idproduto`),
  KEY `FK_produtospublicados_marketingplaces` (`idmarketingplace`),
  CONSTRAINT `FK_produtospublicados_marketingplaces` FOREIGN KEY (`idmarketingplace`) REFERENCES `marketingplaces` (`idmarketingplace`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_produtospublicados_produtos` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `produtospublicados` (`idprodutopublicado`, `idproduto`, `idmarketingplace`, `dataregistro`) VALUES
	(10, 1, 1, '2024-06-28'),
	(25, 4, 1, '2024-07-04'),
	(26, 2, 1, '2024-07-04');

CREATE TABLE IF NOT EXISTS `usuariomarketing` (
  `idusuariomarketing` int(11) NOT NULL AUTO_INCREMENT,
  `idmarketing` int(11) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusuariomarketing`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuariomarketing` (`idusuariomarketing`, `idmarketing`, `idusuario`) VALUES
	(2, 1, 2),
	(3, 1, 1);

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeusuario` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `senha` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuarios` (`idusuario`, `nomeusuario`, `senha`) VALUES
	(1, 'eliane.souza1953@hotmail.com', 'elianeluiz');

CREATE TABLE IF NOT EXISTS `valorespedidos` (
  `idrecebimento` int(11) NOT NULL AUTO_INCREMENT,
  `idpedido` int(11) DEFAULT NULL,
  `tipopagamento` char(3) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idrecebimento`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `valorespedidos` (`idrecebimento`, `idpedido`, `tipopagamento`, `valor`) VALUES
	(1, 13, 'din', 60.00),
	(2, 14, 'din', 120.00),
	(3, 15, 'pix', 180.00),
	(4, 16, 'deb', 240.00),
	(5, 17, 'cre', 455.00),
	(6, 18, 'pix', 600.00),
	(7, 19, 'din', 1200.00),
	(8, 21, 'din', 360.00),
	(9, 22, 'din', 120.00),
	(10, 23, 'pix', 180.00),
	(11, 24, 'deb', 120.00),
	(12, 28, 'din', 80.00),
	(13, 28, 'deb', 40.00),
	(14, 29, 'din', 60.00),
	(25, 40, 'din', 60.00),
	(26, 41, 'pix', 180.00),
	(27, 42, 'deb', 300.00),
	(28, 43, 'cre', 195.00),
	(29, 44, 'din', 60.00),
	(30, 45, 'pix', 120.00),
	(31, 46, 'deb', 240.00),
	(32, 48, 'pix', 480.00);

CREATE TABLE IF NOT EXISTS `valorprodutos` (
  `idvalorproduto` int(11) NOT NULL AUTO_INCREMENT,
  `idproduto` int(11) NOT NULL,
  `tipopagamento` char(2) NOT NULL COMMENT 'DI CD CC',
  `dataregistro` date NOT NULL,
  `ativo` char(1) NOT NULL,
  `valorproduto` decimal(10,2) NOT NULL,
  `custoproduto` decimal(10,2) NOT NULL DEFAULT 0.00,
  PRIMARY KEY (`idvalorproduto`),
  KEY `FK_valorprodutos_produtos` (`idproduto`),
  CONSTRAINT `FK_valorprodutos_produtos` FOREIGN KEY (`idproduto`) REFERENCES `produtos` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `valorprodutos` (`idvalorproduto`, `idproduto`, `tipopagamento`, `dataregistro`, `ativo`, `valorproduto`, `custoproduto`) VALUES
	(1, 1, 'DI', '2024-06-15', '1', 60.00, 30.00),
	(2, 2, 'DI', '2024-06-15', '1', 60.00, 30.00),
	(3, 4, 'DI', '2024-06-29', '1', 60.00, 30.00),
	(4, 5, 'DI', '2024-07-05', '1', 50.00, 25.00);

DROP TABLE IF EXISTS `listadeprodutos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `listadeprodutos` AS SELECT 
    `p`.`idproduto` AS `idproduto`,
    `p`.`titulo` AS `titulo`,
    `p`.`codigobarras` AS `codigobarras`,
    `p`.`tamanho` AS `tamanho`,
    (SELECT `pimg`.`nomeimagem` 
     FROM `produtoimagem` `pimg` 
     WHERE `pimg`.`idproduto` = `p`.`idproduto` 
     LIMIT 1) AS `nomeimagem`,
    `pval`.`valorproduto` AS `valorproduto`,
    `pval`.`custoproduto` AS `custoproduto`
FROM 
    `produtos` `p`
JOIN 
    `valorprodutos` `pval` 
    ON `p`.`idproduto` = `pval`.`idproduto`
WHERE 
    `p`.`ativo` = 1
ORDER BY 
    `p`.`titulo` ;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
