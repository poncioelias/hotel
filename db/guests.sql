-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.28-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para guests
CREATE DATABASE IF NOT EXISTS `guests` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `guests`;

-- Copiando estrutura para tabela guests.tbgroup
CREATE TABLE IF NOT EXISTS `tbgroup` (
  `IDGroup` int(11) NOT NULL AUTO_INCREMENT,
  `Group` varchar(100) DEFAULT NULL,
  `backgroundColor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDGroup`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela guests.tbgroup: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tbgroup` DISABLE KEYS */;
INSERT INTO `tbgroup` (`IDGroup`, `Group`, `backgroundColor`) VALUES
	(1, 'Trusted', '#cdefcd'),
	(2, 'Previledged', '#cdd6ef'),
	(3, 'New', '#f6f4c8');
/*!40000 ALTER TABLE `tbgroup` ENABLE KEYS */;

-- Copiando estrutura para tabela guests.tblguest
CREATE TABLE IF NOT EXISTS `tblguest` (
  `IDGuest` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Phone` varchar(45) DEFAULT NULL,
  `Reservations` varchar(45) DEFAULT NULL,
  `NightsStayed` varchar(50) DEFAULT NULL,
  `LastVisited` varchar(45) DEFAULT NULL,
  `IDGroup` int(11) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Sex` varchar(45) DEFAULT NULL,
  `Country` varchar(45) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `flag_recent` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDGuest`),
  KEY `IDGroup_idx` (`IDGroup`),
  CONSTRAINT `IDGroup` FOREIGN KEY (`IDGroup`) REFERENCES `tbgroup` (`IDGroup`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela guests.tblguest: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `tblguest` DISABLE KEYS */;
INSERT INTO `tblguest` (`IDGuest`, `FirstName`, `LastName`, `Phone`, `Reservations`, `NightsStayed`, `LastVisited`, `IDGroup`, `Email`, `Sex`, `Country`, `City`, `Address`, `flag_recent`) VALUES
	(1, 'Ea', 'Tipene', '263-452-8371', '2', '15', '2018-07-28', 2, 'eatipene@email.com', NULL, 'Canada', NULL, NULL, '1'),
	(2, 'Farhad', 'Tarokh', '342-158-5900', '1', '7', '2018-11-22', 2, 'farhadtarokh@email.com', NULL, 'United States', NULL, NULL, '1'),
	(3, 'Jumaima', 'AI Nour', '761-440-8887', '4', '34', '2018-06-23', 3, 'jumaimaainour@email.com', NULL, 'Brazil', NULL, NULL, '1'),
	(4, 'Mahnaz', 'Farzin', '309-219-1174', '1', '11', '2018-02-24', 3, 'mahnazfarzin@email.com', NULL, 'Italy', NULL, NULL, '1'),
	(5, 'Margie', 'Jutten', '333-162-4335', '1', '6', '2018-06-15', 2, 'margiejutten@email.com', NULL, 'Belgium', NULL, NULL, '1'),
	(6, 'Morganne', 'Flaherty', '908-936-4903', '2', '18', '2018-12-27', 2, 'morganneflaherty@email.com', NULL, 'Canada', NULL, NULL, '1'),
	(7, 'Rickie', 'Baroch', '561-143-6180', '1', '15', '2018-03-17', 1, 'rickiebaroch@email.com', NULL, 'Canada', NULL, NULL, '1'),
	(8, 'Yong', 'Tonhyon', '567-164-7881', '1', '10', '2018-12-15', 1, 'yongtonhyon@email.com', NULL, 'United States', NULL, NULL, '1'),
	(9, 'Chinmay', 'Sarasvati', '263-452-8371', '2', '15', '2018-07-28', 1, 'chinmaysarasvati@email.com', NULL, 'Canada', NULL, NULL, NULL),
	(10, 'Chioke', 'Okonkwo', '342-158-5900', '1', '7', '2018-12-22', 2, 'chiokeokonkwo@email.com', NULL, 'United States', NULL, NULL, NULL),
	(11, 'Georges', 'Embolo', '761-440-8887', '4', '34', '2018-06-23', 1, 'georgesembolo@email.com', NULL, 'Brazil', NULL, NULL, NULL),
	(12, 'Jordan', 'Ntolo', '309-219-1174', '1', '11', '2018-02-24', 3, 'jordanntolo@email.com', NULL, 'Italy', NULL, NULL, NULL),
	(13, 'Lu', 'Zhou', '333-162-4335', '1', '6', '2018-06-15', 1, 'luzhou@email.com', NULL, 'Belgium', NULL, NULL, NULL),
	(14, 'Ren', 'Xue', '908-936-4903', '2', '28', '2018-12-27', 3, 'renxue@email.com', NULL, 'Canada', NULL, NULL, NULL),
	(15, 'Shadrias', 'Pearson', '561-143-6180', '1', '15', '2018-03-17', 3, 'shadriaspearson@email.com', NULL, 'Canada', NULL, NULL, NULL),
	(16, 'Simon', 'Kovac', '567-164-7881', '1', '10', '2018-12-15', 1, 'simonkovac@email.com', NULL, 'Canada', NULL, NULL, NULL);
/*!40000 ALTER TABLE `tblguest` ENABLE KEYS */;

-- Copiando estrutura para view guests.vw_allgest
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `vw_allgest` (
	`IDGuest` INT(11) NOT NULL,
	`FirstName` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`LastName` VARCHAR(100) NULL COLLATE 'utf8_general_ci',
	`Reservations` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`NightsStayed` VARCHAR(50) NULL COLLATE 'utf8_general_ci',
	`LastVisited` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`Group` VARCHAR(100) NULL COLLATE 'utf8_general_ci',
	`backgroundColor` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`Phone` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`Country` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`flag_recent` VARCHAR(45) NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;

-- Copiando estrutura para view guests.vw_gest
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `vw_gest` (
	`IDGuest` INT(11) NOT NULL,
	`FirstName` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`LastName` VARCHAR(100) NULL COLLATE 'utf8_general_ci',
	`Phone` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`Reservations` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`NightsStayed` VARCHAR(50) NULL COLLATE 'utf8_general_ci',
	`LastVisited` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`IDGroup` INT(11) NOT NULL,
	`Email` VARCHAR(100) NULL COLLATE 'utf8_general_ci',
	`Sex` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`Country` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`City` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`Address` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`flag_recent` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`Group` VARCHAR(100) NULL COLLATE 'utf8_general_ci',
	`backgroundColor` VARCHAR(45) NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;

-- Copiando estrutura para view guests.vw_recent_gest
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `vw_recent_gest` (
	`IDGuest` INT(11) NOT NULL,
	`FirstName` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`LastName` VARCHAR(100) NULL COLLATE 'utf8_general_ci',
	`Reservations` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`NightsStayed` VARCHAR(50) NULL COLLATE 'utf8_general_ci',
	`LastVisited` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`Group` VARCHAR(100) NULL COLLATE 'utf8_general_ci',
	`backgroundColor` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`Phone` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`Country` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`flag_recent` VARCHAR(45) NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;

-- Copiando estrutura para view guests.vw_allgest
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `vw_allgest`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_allgest` AS SELECT 
        `a`.`IDGuest` AS `IDGuest`,
        `a`.`FirstName` AS `FirstName`,
        `a`.`LastName` AS `LastName`,
        `a`.`Reservations` AS `Reservations`,
        `a`.`NightsStayed` AS `NightsStayed`,
        `a`.`LastVisited` AS `LastVisited`,
        `b`.`Group` AS `Group`,
        `b`.`backgroundColor` AS `backgroundColor`,
        `a`.`Phone` AS `Phone`,
        `a`.`Country` AS `Country`,
        `a`.`flag_recent` AS `flag_recent`
    FROM
        (`tblguest` `a`
        JOIN `tbgroup` `b` ON ((`a`.`IDGroup` = `b`.`IDGroup`))) ;

-- Copiando estrutura para view guests.vw_gest
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `vw_gest`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_gest` AS SELECT 
        `a`.`IDGuest` AS `IDGuest`,
        `a`.`FirstName` AS `FirstName`,
        `a`.`LastName` AS `LastName`,
        `a`.`Phone` AS `Phone`,
        `a`.`Reservations` AS `Reservations`,
        `a`.`NightsStayed` AS `NightsStayed`,
        `a`.`LastVisited` AS `LastVisited`,
        `a`.`IDGroup` AS `IDGroup`,
        `a`.`Email` AS `Email`,
        `a`.`Sex` AS `Sex`,
        `a`.`Country` AS `Country`,
        `a`.`City` AS `City`,
        `a`.`Address` AS `Address`,
        `a`.`flag_recent` AS `flag_recent`,
        `b`.`Group` AS `Group`,
        `b`.`backgroundColor` AS `backgroundColor`
    FROM
        (`tblguest` `a`
        JOIN `tbgroup` `b` ON ((`a`.`IDGroup` = `b`.`IDGroup`))) ;

-- Copiando estrutura para view guests.vw_recent_gest
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `vw_recent_gest`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`::1` SQL SECURITY DEFINER VIEW `vw_recent_gest` AS SELECT * from vw_allgest `a`
    WHERE
        (`a`.`flag_recent` = 1)
    LIMIT 8 ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
