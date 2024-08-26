
DROP TABLE IF EXISTS `acesso`;
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

DROP TABLE IF EXISTS `acessoregistro`;
CREATE TABLE IF NOT EXISTS `acessoregistro` (
  `idcessoregistroa` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dataregistro` date NOT NULL,
  `acessohora` time NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idcessoregistroa`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
	(79, 'rafaelsouzac@gmail.com', '2024-08-14', '08:50:10'),
	(80, 'rafaelsouzac@gmail.com', '2024-08-15', '13:39:06'),
	(81, 'rafaelsouzac@gmail.com', '2024-08-15', '15:12:56'),
	(82, 'rafaelsouzac@gmail.com', '2024-08-15', '20:07:26'),
	(83, 'rafaelsouzac@gmail.com', '2024-08-16', '11:42:02'),
	(84, 'taila@lojathefit.com.br', '2024-08-16', '11:45:15'),
	(85, 'rafaelsouzac@gmail.com', '2024-08-16', '11:45:40'),
	(86, 'rafaelsouzac@gmail.com', '2024-08-16', '13:00:44'),
	(87, 'rafaelsouzac@gmail.com', '2024-08-16', '17:59:47'),
	(88, 'rafaelsouzac@gmail.com', '2024-08-17', '13:48:02'),
	(89, 'rafaelsouzac@gmail.com', '2024-08-17', '16:51:28'),
	(90, 'rafaelsouzac@gmail.com', '2024-08-17', '16:56:26'),
	(91, 'rafaelsouzac@gmail.com', '2024-08-17', '16:43:30'),
	(92, 'rafaelsouzac@gmail.com', '2024-08-17', '16:51:24'),
	(93, 'rafaelsouzac@gmail.com', '2024-08-17', '16:59:38'),
	(94, 'rafaelsouzac@gmail.com', '2024-08-17', '17:03:24'),
	(95, 'rafaelsouzac@gmail.com', '2024-08-17', '17:05:13'),
	(96, 'rafaelsouzac@gmail.com', '2024-08-18', '10:27:59'),
	(97, 'taila@lojathefit.com.br', '2024-08-18', '10:29:37'),
	(98, 'rafaelsouzac@gmail.com', '2024-08-18', '10:30:42'),
	(99, 'rafaelsouzac@gmail.com', '2024-08-19', '23:56:28'),
	(100, 'rafaelsouzac@gmail.com', '2024-08-19', '08:41:26'),
	(101, 'rafaelsouzac@gmail.com', '2024-08-19', '08:44:08'),
	(102, 'taila@lojathefit.com.br', '2024-08-19', '08:49:36'),
	(103, 'rafaelsouzac@gmail.com', '2024-08-19', '08:50:31'),
	(104, 'rafaelsouzac@gmail.com', '2024-08-19', '11:31:00'),
	(105, 'rafaelsouzac@gmail.com', '2024-08-19', '17:15:34'),
	(106, 'rafaelsouzac@gmail.com', '2024-08-19', '17:26:01'),
	(107, 'rafaelsouzac@gmail.com', '2024-08-20', '21:38:16'),
	(108, 'rafaelsouzac@gmail.com', '2024-08-20', '21:58:49'),
	(109, 'rafaelsouzac@gmail.com', '2024-08-20', '22:28:48'),
	(110, 'rafaelsouzac@gmail.com', '2024-08-20', '22:53:24'),
	(111, 'rafaelsouzac@gmail.com', '2024-08-20', '22:55:04'),
	(112, 'rafaelsouzac@gmail.com', '2024-08-20', '22:59:25'),
	(113, 'rafaelsouzac@gmail.com', '2024-08-20', '23:16:19'),
	(114, 'rafaelsouzac@gmail.com', '2024-08-20', '08:41:17'),
	(115, 'rafaelsouzac@gmail.com', '2024-08-20', '09:50:12'),
	(116, 'rafaelsouzac@gmail.com', '2024-08-20', '10:39:21'),
	(117, 'rafaelsouzac@gmail.com', '2024-08-20', '14:45:48'),
	(118, 'rafaelsouzac@gmail.com', '2024-08-21', '07:46:18'),
	(119, 'rafaelsouzac@gmail.com', '2024-08-21', '09:37:37'),
	(120, 'rafaelsouzac@gmail.com', '2024-08-21', '16:23:35'),
	(121, 'rafaelsouzac@gmail.com', '2024-08-22', '23:12:49'),
	(122, 'rafaelsouzac@gmail.com', '2024-08-22', '07:40:17'),
	(123, 'rafaelsouzac@gmail.com', '2024-08-22', '08:14:01'),
	(124, 'rafaelsouzac@gmail.com', '2024-08-22', '09:43:37'),
	(125, 'rafaelsouzac@gmail.com', '2024-08-23', '23:05:23'),
	(126, 'rafaelsouzac@gmail.com', '2024-08-23', '10:13:32'),
	(127, 'rafaelsouzac@gmail.com', '2024-08-23', '14:59:23');

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `categoriaprodutos`;
CREATE TABLE IF NOT EXISTS `categoriaprodutos` (
  `idcategoriaproduto` int(11) NOT NULL AUTO_INCREMENT,
  `idcategoria` int(11) NOT NULL DEFAULT 0,
  `idproduto` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idcategoriaproduto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `clientepedido`;
CREATE TABLE IF NOT EXISTS `clientepedido` (
  `idclientepedido` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) NOT NULL,
  `idpedido` int(11) NOT NULL,
  PRIMARY KEY (`idclientepedido`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `clientepedido` (`idclientepedido`, `idcliente`, `idpedido`) VALUES
	(1, 4, 65),
	(2, 5, 67),
	(3, 6, 68),
	(4, 7, 69),
	(5, 9, 72);

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nomecliente` varchar(50) DEFAULT NULL,
  `whatsapp` varchar(50) DEFAULT NULL,
  `idusuarioface` varchar(250) DEFAULT NULL,
  `endereço` varchar(500) DEFAULT NULL,
  `cepoubairro` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `clientes` (`idcliente`, `nomecliente`, `whatsapp`, `idusuarioface`, `endereço`, `cepoubairro`) VALUES
	(1, 'Chaves', '51992110905', NULL, NULL, NULL),
	(2, 'Dona Florinda', '51992110905', NULL, NULL, NULL),
	(3, 'Dona Florinda', '51992110905', NULL, NULL, NULL),
	(4, 'Dona Florinda', '51992110905', NULL, NULL, NULL),
	(5, 'Chiquinha', '51991214583', NULL, NULL, NULL),
	(6, 'Kiko', '51992110905', NULL, NULL, NULL),
	(7, 'Professor Girafales', '51992110905', NULL, NULL, NULL),
	(9, 'Seu Barriga', '51991214583', NULL, NULL, NULL);

DROP TABLE IF EXISTS `dadosfornecedor`;
CREATE TABLE IF NOT EXISTS `dadosfornecedor` (
  `iddadosfornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nomecontato` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `pix` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`iddadosfornecedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `fornecedores`;
CREATE TABLE IF NOT EXISTS `fornecedores` (
  `idfornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `cartao` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idfornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `fornecedores` (`idfornecedor`, `cartao`) VALUES
	(1, '17110454366019084567972019366764.jpg'),
	(3, '20230417_095153~2.jpg'),
	(4, '20230417_095145~2.jpg'),
	(5, '20240817_135218~2.jpg'),
	(6, '20240817_135218~2.jpg');

DROP TABLE IF EXISTS `marketingplaces`;
CREATE TABLE IF NOT EXISTS `marketingplaces` (
  `idmarketingplace` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `nomemarketingplace` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`idmarketingplace`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `marketingplaces` (`idmarketingplace`, `url`, `nomemarketingplace`) VALUES
	(1, 'https://www.facebook.com', 'facebook');

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `idpedido` int(11) NOT NULL AUTO_INCREMENT,
  `dataregistro` date NOT NULL DEFAULT curdate(),
  `usuario` varchar(100) NOT NULL,
  `aberto` char(1) NOT NULL DEFAULT 'S' COMMENT 'S = SIM\r\nN = NÃO\r\nA = APAGADO\r\nF = FINALIZADO',
  `Atualizado` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idpedido`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `pedidos` (`idpedido`, `dataregistro`, `usuario`, `aberto`, `Atualizado`) VALUES
	(3, '2023-12-10', 'rafaelsouzac@gmail.com', 'S', '2024-08-19 12:26:49'),
	(4, '2024-05-18', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(5, '2024-05-20', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(6, '2024-05-20', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(7, '2024-05-20', 'rafaelsouzac@gmail.com', 'S', '2024-08-19 12:26:49'),
	(8, '2024-05-19', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(9, '2024-05-19', 'rafaelsouzac@gmail.com', 'S', '2024-08-19 12:26:49'),
	(10, '2024-05-19', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(11, '2024-05-19', 'rafaelsouzac@gmail.com', 'S', '2024-08-19 12:26:49'),
	(12, '2024-05-19', 'rafaelsouzac@gmail.com', 'S', '2024-08-19 12:26:49'),
	(13, '2024-07-24', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(14, '2024-07-24', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(15, '2024-07-24', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(16, '2024-07-24', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(17, '2024-07-24', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(18, '2024-07-24', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(19, '2024-07-24', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(20, '2024-07-25', 'rafaelsouzac@gmail.com', 'S', '2024-08-19 12:26:49'),
	(21, '2024-07-25', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(22, '2024-07-25', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(23, '2024-07-25', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(24, '2024-07-25', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(25, '2024-07-27', 'rafaelsouzac@gmail.com', 'S', '2024-08-19 12:26:49'),
	(26, '2024-08-04', 'rafaelsouzac@gmail.com', 'S', '2024-08-19 12:26:49'),
	(27, '2024-08-04', 'rafaelsouzac@gmail.com', 'S', '2024-08-19 12:26:49'),
	(28, '2024-08-04', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(29, '2024-08-06', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(30, '2024-08-09', 'taila@lojathefit.com.br', 'F', '2024-08-19 12:26:49'),
	(31, '2024-08-10', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(32, '2024-08-10', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(33, '2024-08-10', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(34, '2024-08-10', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(35, '2024-08-10', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(36, '2024-08-10', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(37, '2024-08-10', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(38, '2024-08-10', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(39, '2024-08-10', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(40, '2024-08-13', 'taila@lojathefit.com.br', 'F', '2024-08-19 12:26:49'),
	(41, '2024-08-13', 'taila@lojathefit.com.br', 'F', '2024-08-19 12:26:49'),
	(42, '2024-08-13', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(43, '2024-08-13', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(44, '2024-08-14', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(45, '2024-08-14', 'taila@lojathefit.com.br', 'F', '2024-08-19 12:26:49'),
	(46, '2024-08-14', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(47, '2024-08-14', 'taila@lojathefit.com.br', 'S', '2024-08-19 12:26:49'),
	(48, '2024-08-14', 'taila@lojathefit.com.br', 'F', '2024-08-19 12:26:49'),
	(49, '2024-08-14', 'rafaelsouzac@gmail.com', 'S', '2024-08-19 12:26:49'),
	(50, '2024-08-15', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(51, '2024-08-16', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(52, '2024-08-16', 'taila@lojathefit.com.br', 'F', '2024-08-19 12:26:49'),
	(53, '2024-08-16', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(54, '2024-08-18', 'rafaelsouzac@gmail.com', 'S', '2024-08-19 12:26:49'),
	(55, '2024-08-18', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(56, '2024-08-18', 'taila@lojathefit.com.br', 'S', '2024-08-19 12:26:49'),
	(57, '2024-08-18', 'taila@lojathefit.com.br', 'F', '2024-08-19 12:26:49'),
	(58, '2024-08-19', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 12:26:49'),
	(59, '2024-08-19', 'taila@lojathefit.com.br', 'S', '2024-08-19 12:26:49'),
	(60, '2024-08-19', 'taila@lojathefit.com.br', 'F', '2024-08-19 12:26:49'),
	(61, '2024-08-19', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 17:15:41'),
	(62, '2024-08-19', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 23:17:16'),
	(63, '2024-08-19', 'rafaelsouzac@gmail.com', 'F', '2024-08-19 23:42:16'),
	(64, '2024-08-21', 'rafaelsouzac@gmail.com', 'F', '2024-08-21 08:56:45'),
	(65, '2024-08-21', 'rafaelsouzac@gmail.com', 'F', '2024-08-21 23:12:55'),
	(66, '2024-08-21', 'rafaelsouzac@gmail.com', 'S', '2024-08-21 23:23:03'),
	(67, '2024-08-21', 'rafaelsouzac@gmail.com', 'F', '2024-08-21 23:23:25'),
	(68, '2024-08-22', 'rafaelsouzac@gmail.com', 'F', '2024-08-22 08:17:09'),
	(69, '2024-08-22', 'rafaelsouzac@gmail.com', 'A', '2024-08-22 09:52:50'),
	(70, '2024-08-22', 'rafaelsouzac@gmail.com', 'A', '2024-08-22 09:56:55'),
	(71, '2024-08-22', 'rafaelsouzac@gmail.com', 'F', '2024-08-22 10:24:03'),
	(72, '2024-08-23', 'rafaelsouzac@gmail.com', 'F', '2024-08-23 10:13:37');

DROP TABLE IF EXISTS `produtofornecedor`;
CREATE TABLE IF NOT EXISTS `produtofornecedor` (
  `idprodutofornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `idproduto` int(11) DEFAULT NULL,
  `idfornecedor` int(11) NOT NULL,
  PRIMARY KEY (`idprodutofornecedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `produtoimagem`;
CREATE TABLE IF NOT EXISTS `produtoimagem` (
  `idprodutoimagem` int(11) NOT NULL AUTO_INCREMENT,
  `idproduto` int(11) DEFAULT NULL,
  `nomeimagem` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idprodutoimagem`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
	(16, 6, 'legging_marinho_lisa3.webp'),
	(17, 7, 'legging_rosa_lisa1.webp');

DROP TABLE IF EXISTS `produtoquantidade`;
CREATE TABLE IF NOT EXISTS `produtoquantidade` (
  `idprodutoquantidade` int(11) NOT NULL AUTO_INCREMENT,
  `idproduto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT 0,
  `dataregistro` date NOT NULL DEFAULT curdate(),
  PRIMARY KEY (`idprodutoquantidade`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `produtoquantidade` (`idprodutoquantidade`, `idproduto`, `quantidade`, `dataregistro`) VALUES
	(3, 2, 11, '2024-07-29'),
	(4, 1, 1, '2024-07-29'),
	(5, 2, 4, '2024-07-30'),
	(6, 1, 3, '2024-07-30'),
	(7, 2, 3, '2024-07-31'),
	(8, 1, 2, '2024-07-31'),
	(9, 2, 3, '2024-08-04'),
	(10, 1, 1, '2024-08-04'),
	(11, 2, 7, '2024-08-19'),
	(12, 1, 1, '2024-08-19');

DROP TABLE IF EXISTS `produtos`;
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
	(5, 'Calça Legging Feminina Rosa Lisa em Suplex - Confo', 'P M G GG', 'Rosa', 'Calça Legging Feminina Rosa Lisa em Suplex - Conforto e Estilo.\r\n\r\n- Pague somente quando receber.\r\n\r\n- TELE VALOR MÁXIMO R$ 15.00\r\n- Troca garantida SEM COBRANÇA DE TELE.\r\n\r\n- Cores: Preto, Rosa, Branco, Nude\r\n\r\n- TELE-ENTREGA mais barato que estacionamento. \r\n  Entregamos no local em que você estiver. \r\n  Porto Alegre, Cachoerinha, Canoas, Alvorada, \r\n  Gravataí, Viamão, Eldorado do Sul e Guaiba.\r\n\r\n- À vista ou pix R$50.00   \r\n- No cartão R$65.00 ', '1', '16'),
	(6, 'Legging Feminina Azul Marinho Lisa de Suplex - Ide', 'P M G GG', 'Azul Marin', 'Calça Legging Feminina Azul Marinho Lisa em Suplex - Conforto e Estilo.\r\n\r\n- Pague somente quando receber.\r\n\r\n- TELE VALOR MÁXIMO R$ 15.00\r\n- Troca garantida SEM COBRANÇA DE TELE.\r\n\r\n- Cores: Preto, Rosa, Branco, Azul Marinho\r\n\r\n- TELE-ENTREGA mais barato que estacionamento. \r\n  Entregamos no local em que você estiver. \r\n  Porto Alegre, Cachoeirinha, Canoas, Alvorada, \r\n  Gravataí, Viamão, Eldorado do Sul e Guaíba.\r\n\r\n- À vista ou pix R$50.00   \r\n- No cartão R$65.00 ', '1', '17'),
	(7, 'Legging 3d', 'P M G GG', 'Preta', 'Calça Legging 3d', '1', '14'),
	(8, 'Legging Tratorada', 'P M G GG', 'PRETA', 'Calça Legging Suplex Com Detalhes Em Courino', '1', '15'),
	(9, 'Legging Mantaria', 'P M G GG', 'PRETA', 'Calça Legging Suplex Com Detalhes Em Courino', '1', '19'),
	(10, 'Legging courino', 'P M G GG', 'PRETA', 'Calça Em Courino Vegetal', '1', '18'),
	(11, 'Casaco Teddy Feminino Longo Cor Preto', 'G', 'Preto', 'Casaco Teddy Feminino Longo Cor Preta R$80.00. \r\n\r\n- Pague somente quando receber.\r\n\r\n- TELE VALOR MÁXIMO R$ 15.00\r\n- Troca garantida SEM COBRANÇA DE TELE.\r\n\r\n- Cores: Preto, Rosa, Branco, Nude\r\n\r\n- TELE-ENTREGA mais barato que estacionamento. \r\n  Entregamos no local em que você estiver. \r\n  Porto Alegre, Cachoerinha, Canoas, Alvorada, \r\n  Gravataí, Viamão, Eldorado do Sul e Guaiba.\r\n\r\n- À vista ou pix R$80.00   \r\n- R$65.00 no cartão.', '1', '20'),
	(12, 'Casaco Teddy Feminino Longo Cor Branco', 'G', 'Branco', 'Casaco Teddy Feminino Longo Cor Branco R$80.00. \r\nTELE VALOR MÁXIMO R$ 15.00\r\nNÃO COBRAMOS EM CASO DE TROCAS.\r\n\r\n- Cores: Preto, Rosa, Branco, Nude\r\n\r\n- TELE-ENTREGA mais barato que estacionamento. Entregamos no local em que você estiver. Porto Alegre, Cachoerinha, Canoas, Alvorada, Gravataí, Viamão, Eldorado do Sul e Guaiba.\r\n\r\n- Pague somente quando receber.\r\n\r\n- Troca garantida SEM COBRANÇA DE TELE.\r\n\r\n- À vista R$80.00 ou pix  \r\n- R$85.00 no cartão.', '1', '21');

DROP TABLE IF EXISTS `produtospedidos`;
CREATE TABLE IF NOT EXISTS `produtospedidos` (
  `idprodutopedido` int(11) NOT NULL AUTO_INCREMENT,
  `codigobarra` varchar(25) DEFAULT NULL,
  `idpedido` int(11) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `apagado` char(1) NOT NULL DEFAULT 'N' COMMENT 'S = SIM\r\nN = NÃO',
  PRIMARY KEY (`idprodutopedido`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
	(34, '12', 48, 5, 'N'),
	(35, '12', 50, 1, 'N'),
	(36, '12', 51, 1, 'N'),
	(37, '12', 52, 2, 'N'),
	(38, '12', 53, 1, 'N'),
	(39, '12', 55, 2, 'N'),
	(40, '11', 55, 1, 'N'),
	(41, '11', 57, 4, 'N'),
	(42, '12', 57, 1, 'N'),
	(43, '12', 58, 3, 'N'),
	(44, '11', 60, 4, 'N'),
	(45, '12', 60, 5, 'N'),
	(46, '12', 61, 1, 'N'),
	(47, '12', 62, 1, 'N'),
	(48, '11', 63, 6, 'N'),
	(49, '16', 64, 3, 'N'),
	(50, '16', 65, 1, 'N'),
	(51, '14', 67, 1, 'N'),
	(52, '14', 68, 5, 'N'),
	(53, '16', 69, 10, 'N'),
	(54, '11', 70, 10, 'N'),
	(55, '12', 71, 2, 'N'),
	(56, '16', 72, 5, 'N');

DROP TABLE IF EXISTS `produtospublicados`;
CREATE TABLE IF NOT EXISTS `produtospublicados` (
  `idprodutopublicado` int(11) NOT NULL AUTO_INCREMENT,
  `idproduto` int(11) NOT NULL DEFAULT 0,
  `idmarketingplace` int(11) NOT NULL DEFAULT 0,
  `dataregistro` date NOT NULL DEFAULT curdate(),
  PRIMARY KEY (`idprodutopublicado`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `produtospublicados` (`idprodutopublicado`, `idproduto`, `idmarketingplace`, `dataregistro`) VALUES
	(10, 1, 1, '2024-06-28'),
	(25, 4, 1, '2024-07-04'),
	(26, 2, 1, '2024-07-04');

DROP TABLE IF EXISTS `usuariomarketing`;
CREATE TABLE IF NOT EXISTS `usuariomarketing` (
  `idusuariomarketing` int(11) NOT NULL AUTO_INCREMENT,
  `idmarketing` int(11) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusuariomarketing`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuariomarketing` (`idusuariomarketing`, `idmarketing`, `idusuario`) VALUES
	(2, 1, 2),
	(3, 1, 1);

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeusuario` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `senha` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuarios` (`idusuario`, `nomeusuario`, `senha`) VALUES
	(1, 'eliane.souza1953@hotmail.com', 'elianeluiz');

DROP TABLE IF EXISTS `valorespedidos`;
CREATE TABLE IF NOT EXISTS `valorespedidos` (
  `idrecebimento` int(11) NOT NULL AUTO_INCREMENT,
  `idpedido` int(11) DEFAULT NULL,
  `tipopagamento` char(3) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idrecebimento`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
	(32, 48, 'pix', 480.00),
	(33, 50, 'din', 60.00),
	(34, 51, 'din', 60.00),
	(35, 52, 'pix', 120.00),
	(36, 53, 'din', 60.00),
	(37, 55, 'din', 90.00),
	(38, 55, 'pix', 90.00),
	(39, 57, 'deb', 300.00),
	(40, 58, 'din', 180.00),
	(41, 60, 'pix', 540.00),
	(42, 61, 'din', 50.00),
	(43, 62, 'din', 60.00),
	(44, 63, 'deb', 360.00),
	(45, 64, 'cre', 160.00),
	(46, 65, 'din', 50.00),
	(47, 67, 'deb', 50.00),
	(48, 68, 'cre', 275.00),
	(49, 69, 'cre', 525.00),
	(50, 70, 'deb', 580.00),
	(51, 71, 'pix', 120.00),
	(52, 72, 'pix', 250.00);

DROP TABLE IF EXISTS `valorprodutos`;
CREATE TABLE IF NOT EXISTS `valorprodutos` (
  `idvalorproduto` int(11) NOT NULL AUTO_INCREMENT,
  `idproduto` int(11) NOT NULL,
  `tipopagamento` char(2) NOT NULL COMMENT 'DI CD CC',
  `dataregistro` date NOT NULL,
  `ativo` char(1) NOT NULL,
  `valorproduto` decimal(10,2) NOT NULL,
  `custoproduto` decimal(10,2) NOT NULL DEFAULT 0.00,
  PRIMARY KEY (`idvalorproduto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `valorprodutos` (`idvalorproduto`, `idproduto`, `tipopagamento`, `dataregistro`, `ativo`, `valorproduto`, `custoproduto`) VALUES
	(1, 1, 'DI', '2024-06-15', '1', 60.00, 30.00),
	(2, 2, 'DI', '2024-06-15', '1', 60.00, 30.00),
	(3, 4, 'DI', '2024-06-29', '1', 60.00, 30.00),
	(4, 5, 'DI', '2024-07-05', '1', 50.00, 25.00),
	(5, 7, 'DI', '2024-08-20', '1', 50.00, 25.00),
	(6, 3, 'DI', '2024-08-21', '1', 60.00, 30.00),
	(7, 6, 'DI', '2024-08-20', '', 0.00, 0.00),
	(8, 8, 'DI', '2024-08-21', '1', 60.00, 25.00),
	(9, 9, 'DI', '2024-08-21', '1', 60.00, 25.00),
	(10, 10, 'DI', '2024-08-21', '1', 60.00, 25.00),
	(11, 11, 'DI', '2024-08-21', '1', 60.00, 25.00),
	(12, 12, 'DI', '2024-08-21', '1', 60.00, 25.00);
