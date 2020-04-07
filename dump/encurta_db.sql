/*
SQLyog Ultimate v8.5 
MySQL - 5.5.19 : Database - encurta_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`encurta_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

/*Table structure for table `tab_links` */

DROP TABLE IF EXISTS `tab_links`;

CREATE TABLE `tab_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_original` text NOT NULL,
  `url_curta_hash` text NOT NULL COMMENT 'Campo usado para validar where',
  `criado_em` datetime DEFAULT NULL,
  `ip_criacao` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tab_links` */

insert  into `tab_links`(`id`,`url_original`,`url_curta_hash`,`criado_em`,`ip_criacao`) values (2,'https://economia.uol.com.br/cotacoes/noticias/redacao/2020/04/07/dolar-bolsa-operacao.htm','89860281','2020-04-07 15:23:04','::1');
insert  into `tab_links`(`id`,`url_original`,`url_curta_hash`,`criado_em`,`ip_criacao`) values (3,'https://noticias.uol.com.br/videos/2020/04/07/bolsonaro-deu-conteudo-oposicionista-a-mandetta.htm','97722142','2020-04-07 15:23:22','::1');
insert  into `tab_links`(`id`,`url_original`,`url_curta_hash`,`criado_em`,`ip_criacao`) values (4,'https://economia.uol.com.br/noticias/redacao/2020/04/07/coronavirus-mudancas-inss.htm','85443379','2020-04-07 15:25:38','::1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
