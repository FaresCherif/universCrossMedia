
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `character`;
CREATE TABLE IF NOT EXISTS `character` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `exist`;
CREATE TABLE IF NOT EXISTS `exist` (
  `ID_univers` int(10) NOT NULL,
  `ID_character` int(10) NOT NULL,
  PRIMARY KEY (`ID_univers`,`ID_character`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `founded`;
CREATE TABLE IF NOT EXISTS `founded` (
  `ID_univers` int(10) NOT NULL,
  `ID_organisation` int(10) NOT NULL,
  PRIMARY KEY (`ID_univers`,`ID_organisation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `organisation`;
CREATE TABLE IF NOT EXISTS `organisation` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `relation`;
CREATE TABLE IF NOT EXISTS `relation` (
  `ID_character_1` int(10) NOT NULL,
  `ID_character_2` int(10) NOT NULL,
  `ID_relation_type` int(10) NOT NULL,
  PRIMARY KEY (`ID_character_1`,`ID_character_2`,`ID_relation_type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `relation_type`;
CREATE TABLE IF NOT EXISTS `relation_type` (
  `ID_relation_type` int(10) NOT NULL AUTO_INCREMENT,
  `libelle_relation` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_relation_type`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `univers`;
CREATE TABLE IF NOT EXISTS `univers` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `work`;
CREATE TABLE IF NOT EXISTS `work` (
  `ID_character` int(10) NOT NULL,
  `ID_organisation` int(10) NOT NULL,
  PRIMARY KEY (`ID_character`,`ID_organisation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

COMMIT;
