/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `listadeprodutos` (
	`idproduto` INT(11) NOT NULL,
	`titulo` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`descricao` VARCHAR(1250) NULL COLLATE 'utf8mb4_unicode_ci',
	`codigobarras` CHAR(15) NULL COLLATE 'utf8mb4_unicode_ci',
	`cor` VARCHAR(2) NULL COLLATE 'utf8mb4_unicode_ci',
	`tamanho` CHAR(8) NULL COLLATE 'utf8mb4_unicode_ci',
	`nomeimagem` VARCHAR(250) NULL COLLATE 'utf8mb4_unicode_ci',
	`quantidade` INT(11) NULL,
	`ativo` CHAR(1) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`valorproduto` DECIMAL(10,2) NOT NULL,
	`custoproduto` DECIMAL(10,2) NOT NULL
) ENGINE=MyISAM;

DROP TABLE IF EXISTS `listadeprodutos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `listadeprodutos` AS SELECT 
    p.idproduto AS idproduto, 
    p.titulo AS titulo,
    p.descricao AS descricao,
    p.codigobarras AS codigobarras,
    case 
    	when CHAR_LENGTH(p.codigobarras) = 6 then
    		SUBSTRING(p.codigobarras, 3, 2)
    	when CHAR_LENGTH(p.codigobarras) = 8 then
    		SUBSTRING(p.codigobarras, 4, 2)
    	when CHAR_LENGTH(p.codigobarras) = 10 then
    		SUBSTRING(p.codigobarras, 5, 2)
    	else
    		null
    	END AS cor,
    p.tamanho AS tamanho,
    (
        SELECT pi.nomeimagem
        FROM produtoimagem pi
        WHERE pi.idproduto = p.idproduto
        ORDER BY pi.nomeimagem -- ou outro critério para definir qual imagem você quer
        LIMIT 1
    ) AS nomeimagem,
    (
        SELECT pi.quantidade
        FROM produtoquantidade pi
        WHERE pi.idproduto = p.idproduto
        ORDER BY PI.idprodutoquantidade desc
        LIMIT 1
	 ) AS quantidade,
	 vp.ativo AS ativo,
    vp.valorproduto AS valorproduto,
    vp.custoproduto AS custoproduto
FROM 
    produtos p
INNER JOIN 
    valorprodutos vp ON p.idproduto = vp.idproduto
    WHERE vp.ativo = 1 ORDER BY p.idproduto ;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
