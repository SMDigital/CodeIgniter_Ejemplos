/*
SQLyog Ultimate v9.02 
MySQL - 5.5.24-log : Database - db_login_ci
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_login_ci` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_login_ci`;

/*Table structure for table `tbl_usuarios` */

DROP TABLE IF EXISTS `tbl_usuarios`;

CREATE TABLE `tbl_usuarios` (
  `strUsuario` varchar(70) NOT NULL,
  `strNombreCompleto` varchar(50) NOT NULL,
  `strEmail` varchar(75) NOT NULL,
  `strPassword` varchar(100) NOT NULL,
  `bitEstado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`strUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_usuarios` */

insert  into `tbl_usuarios`(`strUsuario`,`strNombreCompleto`,`strEmail`,`strPassword`,`bitEstado`) values ('cavergara','Carlos Vergara','cavergara@smdigital.com.co','14e1b600b1fd579f47433b88e8d85291',1),('cesarlarsson','Cesar Suarez','csuarez@smdigital.com.co','d9b1d7db4cd6e70935368a1efb10e377',1),('dalondono','Diego Alexander Londoño Marin','dlondonom@gmail.com','696d29e0940a4957748fe3fc9efd22a3',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
