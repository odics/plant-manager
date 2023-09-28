CREATE DATABASE IF NOT EXISTS plant_manager; USE plant_manager; DROP TABLE IF
EXISTS `types_of_plant`; CREATE TABLE `types_of_plant` ( `id` int(11) unsigned
NOT NULL AUTO_INCREMENT, `plant_type` varchar(255) DEFAULT NULL, PRIMARY KEY
(`id`) ) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci; INSERT INTO `types_of_plant` (`id`, `plant_type`)
VALUES (1, 'Tomato'); INSERT INTO `types_of_plant` (`id`, `plant_type`) VALUES
(2, 'Pepper'); INSERT INTO `types_of_plant` (`id`, `plant_type`) VALUES (3,
'Melon'); INSERT INTO `types_of_plant` (`id`, `plant_type`) VALUES (4,
'Cucumber'); INSERT INTO `types_of_plant` (`id`, `plant_type`) VALUES (7,
'Beans'); INSERT INTO `types_of_plant` (`id`, `plant_type`) VALUES (8, 'Corn');
DROP TABLE IF EXISTS `plant_notes`; CREATE TABLE `plant_notes` ( `id` int(11)
unsigned NOT NULL AUTO_INCREMENT, `note` varchar(255) DEFAULT NULL, `plant_id`
int(11) unsigned DEFAULT NULL, PRIMARY KEY (`id`), KEY `plant_notes`
(`plant_id`), CONSTRAINT `plant_notes` FOREIGN KEY (`plant_id`) REFERENCES
`plants` (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci; DROP TABLE IF EXISTS `plants`; CREATE TABLE `plants`
( `id` int(11) unsigned NOT NULL AUTO_INCREMENT, `plant_name` varchar(255)
DEFAULT NULL, `date_planted` date DEFAULT NULL, `projected_harvest` date DEFAULT
NULL, `cultivar` varchar(255) DEFAULT NULL, `img_src` varchar(255) DEFAULT NULL,
`plant_type` int(11) unsigned DEFAULT NULL, `deleted` int(11) DEFAULT 0, PRIMARY
KEY (`id`), KEY `plant_types` (`plant_type`), CONSTRAINT `plant_types` FOREIGN
KEY (`plant_type`) REFERENCES `types_of_plant` (`id`) ) ENGINE=InnoDB
AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci; INSERT
INTO `plants` (`id`, `plant_name`, `date_planted`, `projected_harvest`,
`cultivar`, `img_src`, `plant_type`, `deleted`) VALUES (2, 'Pepper',
'2023-11-23', '2023-12-30', 'Thai Chilli',
'https://cdn.britannica.com/62/118162-050-56CC9480/cultivar-Thai-chili-peppers-fruits.jpg',
'2', '1'); INSERT INTO `plants` (`id`, `plant_name`, `date_planted`,
`projected_harvest`, `cultivar`, `img_src`, `plant_type`, `deleted`) VALUES (5,
'Cucumber', '2023-10-21', '2023-12-25', 'Lemon',
'https://i.ebayimg.com/images/g/MKYAAOSwWkddZt70/s-l1600.jpg', '4', '0'); INSERT
INTO `plants` (`id`, `plant_name`, `date_planted`, `projected_harvest`,
`cultivar`, `img_src`, `plant_type`, `deleted`) VALUES (11, 'Tomato',
'2023-09-06', '2023-09-28', 'Cherry',
'https://cdn-icons-png.flaticon.com/512/628/628283.png', '1', '0'); INSERT INTO
`plants` (`id`, `plant_name`, `date_planted`, `projected_harvest`, `cultivar`,
`img_src`, `plant_type`, `deleted`) VALUES (12, 'Melon', '2023-09-06',
'2023-12-30', 'Watermelon',
'https://cdn-icons-png.flaticon.com/512/628/628283.png', '3', '0'); INSERT INTO
`plants` (`id`, `plant_name`, `date_planted`, `projected_harvest`, `cultivar`,
`img_src`, `plant_type`, `deleted`) VALUES (14, 'Tomato', '2023-09-06',
'2023-12-30', 'Roma', 'https://cdn-icons-png.flaticon.com/512/628/628283.png',
'1', '0');
