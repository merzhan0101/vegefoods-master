-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.13-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных vegefoods_master
CREATE DATABASE IF NOT EXISTS `vegefoods_master` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `vegefoods_master`;

-- Дамп структуры для таблица vegefoods_master.vegetables
CREATE TABLE IF NOT EXISTS `vegetables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_veg` varchar(50) DEFAULT NULL COMMENT 'название товаров',
  `price` varchar(50) DEFAULT NULL COMMENT 'цена товара',
  `img` char(250) DEFAULT '/images/vegetables/' COMMENT 'id == №.jpg',
  `description` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `img_id` (`img`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='Овощи/Фрукты';

-- Экспортируемые данные не выделены.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
