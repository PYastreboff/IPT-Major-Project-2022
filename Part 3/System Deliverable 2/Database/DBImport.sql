-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for yast03iptdb
CREATE DATABASE IF NOT EXISTS `yast03iptdb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `yast03iptdb`;

-- Dumping structure for table yast03iptdb.users
CREATE TABLE IF NOT EXISTS `users` (
  `userName` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yast03iptdb.users: ~4 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`userName`, `password`, `firstName`, `lastName`, `role`) VALUES
	('CROW03', 'password', 'Charlie', 'Crowe-Maxwell', 'student'),
	('LICQ04', 'password', 'William', 'Licquorice', 'student'),
	('OORL03', 'password', 'Jai', 'Oorloff-Kay', 'student'),
	('YAST03', 'password', 'Peter', 'Yastreboff', 'student'),
	('YAST04', 'password', 'Alex', 'Yastreboff', 'student');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
