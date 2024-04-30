-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.1.0 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table jerseystore.jerseys
CREATE TABLE IF NOT EXISTS `jerseys` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `allJerseys` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table jerseystore.jerseys: ~6 rows (approximately)
INSERT INTO `jerseys` (`id`, `allJerseys`) VALUES
	(1, 'Manchester United'),
	(2, 'Real Madrid'),
	(3, 'Barcelona'),
	(4, 'Ireland'),
	(5, 'Germany'),
	(6, 'Spain');

-- Dumping structure for table jerseystore.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `psw` varchar(30) NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table jerseystore.users: ~6 rows (approximately)
INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `age`, `location`, `psw`, `date`) VALUES
	(1, 'Jack', 'Tormey', 'b00149358@mytudublin.ie', 28, 'Kildare', 'pass', NULL),
	(2, 'Paul', 'Tormey', 'pault@mytudublin.ie', 60, 'Dublin', 'pass', NULL),
	(3, 'Leon', 'Tormey', '12345@mytudublin.ie', 23, 'Galway', 'pass', NULL),
	(4, 'Ava', 'Tormey', 'ava@mytudublin.ie', 25, 'Mayo', 'pass', NULL),
	(5, 'Caroline', 'Tormey', 'caroline@mytudublin.ie', 32, 'Donegal', 'pass', NULL),
	(6, 'Emma', 'Egerton', 'emma@mytudublin.ie', 29, 'Westmeath', 'pass', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
