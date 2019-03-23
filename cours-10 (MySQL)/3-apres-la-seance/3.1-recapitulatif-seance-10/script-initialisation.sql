
# Dump of table exercice_contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `exercice_contacts`;

CREATE TABLE `exercice_contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `courriel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
