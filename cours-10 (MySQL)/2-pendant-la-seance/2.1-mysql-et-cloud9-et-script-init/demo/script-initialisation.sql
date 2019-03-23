# ************************************************************
# Sequel Pro SQL dump
# Version 4529
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.11)
# Database: hecdemo
# Generation Time: 2016-11-16 17:35:28 +0000
# ************************************************************


# Dump of table publications
# ------------------------------------------------------------

DROP TABLE IF EXISTS `publications`;

CREATE TABLE `publications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `publications` WRITE;
/*!40000 ALTER TABLE `publications` DISABLE KEYS */;

INSERT INTO `publications` (`id`, `description`, `created_at`, `updated_at`)
VALUES
	(25,'Je me fais un sandwich.','2016-11-14 23:14:20','2016-11-14 23:14:20'),
	(26,'Il pleut dehors.','2016-11-14 23:15:16','2016-11-14 23:15:16');

/*!40000 ALTER TABLE `publications` ENABLE KEYS */;
UNLOCK TABLES;
