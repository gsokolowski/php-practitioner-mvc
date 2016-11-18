-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for todo
CREATE DATABASE IF NOT EXISTS `todo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `todo`;


-- Dumping structure for table todo.todos
CREATE TABLE IF NOT EXISTS `todos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `completed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table todo.todos: ~4 rows (approximately)
/*!40000 ALTER TABLE `todos` DISABLE KEYS */;
INSERT INTO `todos` (`id`, `description`, `completed`) VALUES
	(1, 'Go to the store', 1),
	(2, 'Finish this lesson', 0),
	(3, 'Make this code work fine', 0),
	(4, 'One more taks', 0);
/*!40000 ALTER TABLE `todos` ENABLE KEYS */;


-- Dumping structure for table todo.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `age` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table todo.users: ~15 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `age`, `name`) VALUES
	(1, 21, 'Adas'),
	(4, 24, 'Roma'),
	(5, 30, 'Greg'),
	(6, 30, 'Steve'),
	(7, 30, 'Jureczek'),
	(8, 30, 'Nana'),
	(9, 30, 'Olo'),
	(10, 30, 'Joe'),
	(11, 30, 'czxc'),
	(12, 0, 'fsdfsd'),
	(13, 31, 'fsdfsd'),
	(14, 31, 'dasdas'),
	(15, 31, 'dasdas'),
	(16, 31, 'dasdas'),
	(17, 31, 'wqeqw/h');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
