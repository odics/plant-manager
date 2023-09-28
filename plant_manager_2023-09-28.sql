# ************************************************************
# Sequel Ace SQL dump
# Version 20051
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 11.1.2-MariaDB-1:11.1.2+maria~ubu2204)
# Database: plant_manager
# Generation Time: 2023-09-28 08:40:23 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table plant_notes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `plant_notes`;

CREATE TABLE `plant_notes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `note` varchar(255) DEFAULT NULL,
  `plant_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `plant_notes` (`plant_id`),
  CONSTRAINT `plant_notes` FOREIGN KEY (`plant_id`) REFERENCES `plants` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



# Dump of table plants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `plants`;

CREATE TABLE `plants` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `plant_name` varchar(255) DEFAULT NULL,
  `date_planted` date DEFAULT NULL,
  `projected_harvest` date DEFAULT NULL,
  `cultivar` varchar(255) DEFAULT NULL,
  `img_src` varchar(255) DEFAULT NULL,
  `plant_type` int(11) unsigned DEFAULT NULL,
  `deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `plant_types` (`plant_type`),
  CONSTRAINT `plant_types` FOREIGN KEY (`plant_type`) REFERENCES `types_of_plant` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `plants` WRITE;
/*!40000 ALTER TABLE `plants` DISABLE KEYS */;

INSERT INTO `plants` (`id`, `plant_name`, `date_planted`, `projected_harvest`, `cultivar`, `img_src`, `plant_type`, `deleted`)
VALUES
	(2,'Pepper','2023-11-23','2023-12-30','Thai Chilli','https://cdn.britannica.com/62/118162-050-56CC9480/cultivar-Thai-chili-peppers-fruits.jpg',2,1),
	(5,'Cucumber','2023-10-11','2023-12-25','Lemon','https://i.ebayimg.com/images/g/MKYAAOSwWkddZt70/s-l1600.jpg',4,0),
	(11,'1','2023-09-06','2023-09-28','Cherry','https://cdn-icons-png.flaticon.com/512/628/628283.png',1,0),
	(12,'3','2023-09-06','2023-09-13','Watermelon','https://cdn-icons-png.flaticon.com/512/628/628283.png',3,0),
	(14,'1','2023-09-06','2023-09-28','Roma','https://cdn-icons-png.flaticon.com/512/628/628283.png',1,0);

/*!40000 ALTER TABLE `plants` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table types_of_plant
# ------------------------------------------------------------

DROP TABLE IF EXISTS `types_of_plant`;

CREATE TABLE `types_of_plant` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `plant_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `types_of_plant` WRITE;
/*!40000 ALTER TABLE `types_of_plant` DISABLE KEYS */;

INSERT INTO `types_of_plant` (`id`, `plant_type`)
VALUES
	(1,'Tomato'),
	(2,'Pepper'),
	(3,'Melon'),
	(4,'Cucumber'),
	(7,'Beans'),
	(8,'Corn');

/*!40000 ALTER TABLE `types_of_plant` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
