-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 26 oct. 2020 à 15:15
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rcu`
--

-- --------------------------------------------------------

--
-- Structure de la table `avisutilisateur`
--

DROP TABLE IF EXISTS `avisutilisateur`;
CREATE TABLE IF NOT EXISTS `avisutilisateur` (
  `ID_utilisateur` int(10) NOT NULL,
  `ID_film` int(10) NOT NULL,
  `note` int(5) DEFAULT NULL,
  `commentaire` varchar(500) NOT NULL,
  PRIMARY KEY (`ID_utilisateur`,`ID_film`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avisutilisateur`
--

INSERT INTO `avisutilisateur` (`ID_utilisateur`, `ID_film`, `note`, `commentaire`) VALUES
(1, 1, 2, 'c\'est bien'),
(2, 1, 5, 'un chef d\'oeuvre');

-- --------------------------------------------------------

--
-- Structure de la table `character`
--

DROP TABLE IF EXISTS `character`;
CREATE TABLE IF NOT EXISTS `character` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `character`
--

INSERT INTO `character` (`ID`, `name`, `description`) VALUES
(1, 'Iron man', 'Iron Man est un super-héros de comics et de l\'univers Marvel . C\'est un homme de fer qui peut voler, lancer des rayons et qui a la force surpuissante. ... Son identité secrète est Tony Stark, un milliardaire, fabricant d\'armes qui a été attaqué lors d\'une démonstration de sa nouvelle arme.'),
(2, 'Thanos', 'Thanos est un véritable colosse d’environ 2 mètres de haut, à la morphologie plus que massive. Imposant de par sa stature, le personnage est facilement reconnaissable grâce à sa peau gris-pourpre, ses yeux rouges (sans pupilles) illustrant toute sa haine et son avarice, ainsi que son armure dorée. Tout d’abord aveuglé par son amour pour la Mort, Thanos a passé une partie de sa vie à chercher le pouvoir ultime dans le but de devenir l’égal de sa bien-aimée, jonchant l’univers de millions de morts. Comprenant que jamais il n’aurait son amour, il cherche aujourd’hui à se racheter de ses crimes. D’un caractère instable (d’où son surnom de Titan Fou), Thanos reste imprévisible.');

-- --------------------------------------------------------

--
-- Structure de la table `exist`
--

DROP TABLE IF EXISTS `exist`;
CREATE TABLE IF NOT EXISTS `exist` (
  `ID_film` int(10) NOT NULL,
  `ID_character` int(10) NOT NULL,
  PRIMARY KEY (`ID_film`,`ID_character`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `exist`
--

INSERT INTO `exist` (`ID_film`, `ID_character`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`ID`, `name`, `description`, `image`) VALUES
(1, 'Avenger : Endgame', '\r\nLe Titan Thanos, ayant réussi à s\'approprier les six Pierres d\'Infinité et à les réunir sur le Gantelet doré, a pu réaliser son objectif de pulvériser la moitié de la population de l\'Univers. Cinq ans plus tard, Scott Lang, alias Ant-Man, parvient à s\'échapper de la dimension subatomique où il était coincé. Il propose aux Avengers une solution pour faire revenir à la vie tous les êtres disparus, dont leurs alliés et coéquipiers : récupérer les Pierres d\'Infinité dans le passé.', 'endgame.jpg'),
(2, 'Iron man', NULL, NULL),
(3, 'L\'incroyable Hulk', NULL, NULL),
(4, 'Iron man 2', NULL, NULL),
(5, 'Thor', NULL, NULL),
(8, 'Captain Americain : First Avenger', NULL, NULL),
(9, 'Avengers', NULL, NULL),
(10, 'Iron man 3', NULL, NULL),
(11, 'Thor : Le monde des ténèbres', NULL, NULL),
(12, 'Captain América : Winter Soldier', NULL, NULL),
(13, 'Les gardiens de la galaxie', NULL, NULL),
(14, 'Avenger : l\'ère d\'Ultron', NULL, NULL),
(15, 'Ant-Man', NULL, NULL),
(16, 'Captain America : Civil War', NULL, NULL),
(17, 'Doctor Strange', NULL, NULL),
(18, 'Les Gardiens de la galaxie Vol.2', NULL, NULL),
(19, 'Spider-Man:Homecoming', NULL, NULL),
(20, 'Thor : Ragnarock', NULL, NULL),
(21, 'Black Panther', NULL, NULL),
(22, 'Avengers : Infinity war', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `film_genre`
--

DROP TABLE IF EXISTS `film_genre`;
CREATE TABLE IF NOT EXISTS `film_genre` (
  `ID_film` int(10) NOT NULL,
  `ID_genre` int(10) NOT NULL,
  PRIMARY KEY (`ID_film`,`ID_genre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film_genre`
--

INSERT INTO `film_genre` (`ID_film`, `ID_genre`) VALUES
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 3);

-- --------------------------------------------------------

--
-- Structure de la table `founded`
--

DROP TABLE IF EXISTS `founded`;
CREATE TABLE IF NOT EXISTS `founded` (
  `ID_univers` int(10) NOT NULL,
  `ID_organisation` int(10) NOT NULL,
  PRIMARY KEY (`ID_univers`,`ID_organisation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`ID`, `name`) VALUES
(1, 'romantique'),
(2, 'horreur'),
(3, 'action'),
(4, 'comédie'),
(5, 'film d\'auteur'),
(6, 'thriller'),
(7, 'aventure'),
(8, 'animation'),
(9, 'documentaire'),
(10, 'drame'),
(11, 'courts-métrages'),
(12, 'fantastique'),
(13, 'historique'),
(14, 'jeunesse'),
(15, 'comedie musicale'),
(16, 'policier'),
(17, 'science fiction');

-- --------------------------------------------------------

--
-- Structure de la table `organisation`
--

DROP TABLE IF EXISTS `organisation`;
CREATE TABLE IF NOT EXISTS `organisation` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `organisation`
--

INSERT INTO `organisation` (`ID`, `name`, `description`) VALUES
(1, 'Shield', 'Le Strategic Homeland Intervention, Enforcement and Logistics Division, mieux connu sous son acronyme S.H.I.E.L.D., était à l’origine un États-Unis extra gouvernementales militaire contre le terrorisme et du renseignement, chargé de maintenir la sécurité mondiale. Fondée à la suite de la victoire des alliés pendant la seconde guerre mondiale sur les puissances de l’axe et HYDRA, S.H.I.E.L.D. a été organisée pour protéger les Etats-Unis et plus tard le monde entier, de toutes les menaces possibles. Avec ses armes avancées et d’agents extraordinaires, S.H.I.E.L.D. était peut-être la plus grande puissance militaire au monde. Géré par Nick Fury et le Conseil Mondial de Sécurité à l’époque moderne, S.H.I.E.L.D. dû faire face à la hausse significative améliorées particuliers, technologie avancée dangereuse et contact extraterrestre. Mais tous les problèmes que S.H.I.E.L.D. avait à résoudre a finalement abouti à la création des Avengers, une équipe d’intervention qui a été recruté pour sauver le monde au cours de l’invasion des extraterrestres de la terre en 2012. L’Agence est devenue publiquement connue après la bataille de New York, partiellement à cause du site Rising Tide.');

-- --------------------------------------------------------

--
-- Structure de la table `partofunivers`
--

DROP TABLE IF EXISTS `partofunivers`;
CREATE TABLE IF NOT EXISTS `partofunivers` (
  `ID_univers` int(10) NOT NULL,
  `ID_film` int(10) NOT NULL,
  PRIMARY KEY (`ID_univers`,`ID_film`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `partofunivers`
--

INSERT INTO `partofunivers` (`ID_univers`, `ID_film`) VALUES
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(3, 21),
(3, 22);

-- --------------------------------------------------------

--
-- Structure de la table `relation`
--

DROP TABLE IF EXISTS `relation`;
CREATE TABLE IF NOT EXISTS `relation` (
  `ID_character_1` int(10) NOT NULL,
  `ID_character_2` int(10) NOT NULL,
  `ID_relation_type` int(10) NOT NULL,
  PRIMARY KEY (`ID_character_1`,`ID_character_2`,`ID_relation_type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `relation`
--

INSERT INTO `relation` (`ID_character_1`, `ID_character_2`, `ID_relation_type`) VALUES
(1, 2, 6);

-- --------------------------------------------------------

--
-- Structure de la table `relation_type`
--

DROP TABLE IF EXISTS `relation_type`;
CREATE TABLE IF NOT EXISTS `relation_type` (
  `ID_relation_type` int(10) NOT NULL AUTO_INCREMENT,
  `libelle_relation` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_relation_type`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `relation_type`
--

INSERT INTO `relation_type` (`ID_relation_type`, `libelle_relation`) VALUES
(1, 'parent/child'),
(2, 'sibling'),
(3, 'lover'),
(4, 'friend'),
(5, 'colleague'),
(6, 'enemy');

-- --------------------------------------------------------

--
-- Structure de la table `studio`
--

DROP TABLE IF EXISTS `studio`;
CREATE TABLE IF NOT EXISTS `studio` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `studio`
--

INSERT INTO `studio` (`ID`, `name`) VALUES
(1, 'Paramount pictures'),
(2, 'Marvel studio'),
(3, 'DC comics');

-- --------------------------------------------------------

--
-- Structure de la table `univers`
--

DROP TABLE IF EXISTS `univers`;
CREATE TABLE IF NOT EXISTS `univers` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `image` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `univers`
--

INSERT INTO `univers` (`ID`, `name`, `description`, `image`) VALUES
(3, 'MCU', 'L\'Univers cinématographique Marvel est une franchise cinématographique produite par Marvel Studios mettant en scène des personnages de bandes dessinées de l\'éditeur Marvel Comics. Marvel Studios est la propriété de The Walt Disney Company.', 'MCU.png'),
(4, 'Lord of the Ring', 'L\'histoire du Seigneur des anneaux se déroule sur la Terre du Milieu, principal continent d\'Arda, univers créé de toutes pièces par l\'auteur. J. R. R. Tolkien appelle ce travail littéraire « sous-création » (aussi traduit par « subcréation »). En réalité, Le Seigneur des anneaux n\'a pas lieu sur une autre planète ou dans une autre dimension : il s\'agit simplement d\'un « passé imaginaire » de la Terre :\r\n\r\n« J\'ai construit, je le crois, une époque imaginaire, mais quant au lieu j\'ai gardé les pieds sur ma propre Terre maternelle. Je préfère cela à la mode moderne qui consiste à rechercher des planètes lointaines dans \"l\'espace\". Quoique curieuses, elles nous sont étrangères, et l\'on ne peut les aimer avec l\'amour de ceux dont nous partageons le sang. »\r\n\r\n— Lettre no 211 à Rhona Beare (14 octobre 1958)\r\n\r\nCe « passé imaginaire » est décrit avec une précision chirurgicale par son créateur, qui va jusqu\'à réécrire des passages entiers du Seigneur des anneaux afin que les phases de la lune soient cohérentesN 4. La géographie du récit a été soigneusement élaborée par l\'auteur : « J\'ai commencé, avec sagesse, par une carte, à laquelle j\'ai subordonné l\'histoire (globalement en apportant une attention minutieuse aux distances). Faire l\'inverse est source de confusion et de contradictions64. » Les trois cartes que comprend Le Seigneur des anneaux (la carte générale, celle de la Comté et celle représentant le Gondor, le Rohan et le Mordor à grande échelle) ont été dessinées par Christopher Tolkien d\'après des croquis de son père.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `pseudo`, `mdp`) VALUES
(1, 'arlo974', 'oui'),
(2, 'boumboum', 'nope');

-- --------------------------------------------------------

--
-- Structure de la table `work`
--

DROP TABLE IF EXISTS `work`;
CREATE TABLE IF NOT EXISTS `work` (
  `ID_character` int(10) NOT NULL,
  `ID_organisation` int(10) NOT NULL,
  PRIMARY KEY (`ID_character`,`ID_organisation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
