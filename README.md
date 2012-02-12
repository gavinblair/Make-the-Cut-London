Copy config.template into a new config.php file. Enter your database credentials in.

Create the following table in your database:

DROP TABLE IF EXISTS `choicelog`;
CREATE TABLE  `choicelog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(45) NOT NULL,
  `question` varchar(500) NOT NULL,
  `choice` varchar(45) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;