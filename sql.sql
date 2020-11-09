-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 09 nov. 2020 à 10:21
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
  `ID_film` int(10) NOT NULL DEFAULT '0',
  `ID_jeuVideo` int(10) NOT NULL DEFAULT '0',
  `note` int(5) DEFAULT NULL,
  `commentaire` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID_utilisateur`,`ID_film`,`ID_jeuVideo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avisutilisateur`
--

INSERT INTO `avisutilisateur` (`ID_utilisateur`, `ID_film`, `ID_jeuVideo`, `note`, `commentaire`) VALUES
(1, 1, 0, 3, 'c\'est bien'),
(5, 1, 0, 5, 'un chef d\'oeuvre'),
(1, 15, 0, 3, 'Sympa comme tout'),
(1, 21, 0, 4, NULL),
(1, 17, 0, 2, NULL),
(1, 26, 0, 3, 'Sympa comme tout'),
(1, 27, 0, 3, 'Très sympa, un bon moment'),
(1, 16, 0, 3, NULL),
(1, 14, 0, 2, NULL),
(1, 8, 0, 2, NULL),
(1, 0, 8, 3, 'vroum vroum vroum vroum vroum vriiiiioum '),
(1, 4, 0, 3, NULL),
(1, 37, 0, 4, NULL),
(1, 38, 0, 3, NULL);

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
  `image` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`ID`, `name`, `description`, `image`) VALUES
(1, 'Avenger : Endgame', 'Le Titan Thanos, ayant réussi à s\'approprier les six Pierres d\'Infinité et à les réunir sur le Gantelet doré, a pu réaliser son objectif de pulvériser la moitié de la population de l\'Univers. Cinq ans plus tard, Scott Lang, alias Ant-Man, parvient à s\'échapper de la dimension subatomique où il était coincé. Il propose aux Avengers une solution pour faire revenir à la vie tous les êtres disparus, dont leurs alliés et coéquipiers : récupérer les Pierres d\'Infinité dans le passé', 'endgame.jpg'),
(2, 'Iron man', NULL, NULL),
(3, 'L\'incroyable Hulk', NULL, NULL),
(4, 'Iron man 2', NULL, NULL),
(5, 'Thor', 'Au royaume d\'Asgard, Thor est un guerrier aussi puissant qu\'arrogant. Alors que ses actes téméraires, qui ont déclenché une guerre ancestrale, l\'ont fait bannir sur Terre par Odin, son père, il est condamné à vivre parmi les hommes. Cependant, lorsque les forces du mal, en provenance d\'Asgard, s\'apprêtent à se déchaîner sur la Terre, Thor va devoir se comporter en véritable héros.', 'thor.jpg'),
(8, 'Captain Americain : First Avenger', NULL, NULL),
(9, 'Avengers', NULL, NULL),
(10, 'Iron man 3', NULL, NULL),
(11, 'Thor : Le monde des ténèbres', NULL, NULL),
(12, 'Captain América : Winter Soldier', NULL, NULL),
(13, 'Les gardiens de la galaxie', NULL, NULL),
(14, 'Avenger : l\'ère d\'Ultron', NULL, NULL),
(15, 'Ant-Man', 'bla bla bla bla bla bla bla bla bla bla bla blabla bla bla bla bla blabla bla bla bla bla bla', 'antman.jpg'),
(16, 'Captain America : Civil War', NULL, NULL),
(17, 'Doctor Strange', NULL, NULL),
(18, 'Les Gardiens de la galaxie Vol.2', NULL, NULL),
(19, 'Spider-Man:Homecoming', NULL, NULL),
(20, 'Thor : Ragnarock', NULL, NULL),
(21, 'Black Panther', 'Après les événements qui se sont déroulés dans Captain America : Civil War, T\'Challa revient chez lui prendre sa place sur le trône du Wakanda, une nation africaine technologiquement très avancée mais lorsqu\'un vieil ennemi resurgit, le courage de T\'Challa est mis à rude épreuve, aussi bien en tant …', '838_076_chl_100013.jpg'),
(22, 'Avengers : Infinity war', NULL, NULL),
(26, 'Spiderman Far from home', 'L\'araignée sympa du quartier décide de rejoindre ses meilleurs amis Ned, MJ, et le reste de la bande pour des vacances en Europe. Cependant, le projet de Peter de laisser son costume de super-héros derrière lui pendant quelques semaines est rapidement compromis quand il accepte à contrecoeur d\'aider…', NULL),
(27, 'Aladin', 'Aladdin est un jeune homme très pauvre, insouciant et enthousiaste. Il devient le serviteur d\'un méchant magicien qui lui fait croire qu\'il est son oncle. Ce magicien lui demande d\'aller chercher une lampe magique dans une grotte. Mais Aladdin se méfie et préfère garder la lampe tant qu\'il n\'est pas sorti de la grotte.', NULL),
(28, 'pocahontas', '1607, les colons font route vers le Nouveau Monde. John Smith, un jeune aventurier, part à la découverte de son rêve. Là-bas, à l\'écoute de ses instincts, une jeune indienne, Pocahontas, fera la connaissance de John et trouvera une réponse à ses rêves.', '1200x680_personnage-pocahontas-legende-indienne-01.jpg'),
(29, 'Bambi', 'Le jeune faon Bambi, après la mort de sa mère tuée par un chasseur, doit apprendre à survivre seul dans la forêt. Il trouve bientôt un jeune compagnon, le lapin Panpan, aussi malicieux et débrouillard que Bambi est maladroit et pataud.', 'Bambi.jpg'),
(30, 'Mulan', 'Mulan est une belle jeune fille qui vit dans un village chinois. Malgré son amour et son respect pour sa famille, son mépris des conventions l\'éloigne des rôles dévolus aux filles devouées. Quand son pays est envahi par les Huns, Mulan, n\'écoutant que son courage, s\'engage à la place de son père dans le but de lui sauver la vie. Elle va devenir, avec l\'aide d\'un dragon en quète de réhabilitation, un guerrier hors du commun.', '730550-mulan-en-live-action-l-absence-de-mush-opengraph_1200-2.jpg'),
(32, 'Hercule    ', 'Dans la Grèce antique, alors que la fête bat son plein et que les fées se penchent sur le berceau d\'Hercule, fils de Zeus, Hadès, seigneur des enfers, ronge son frein. En consultant les Moires, il apprend que les planètes lui seront favorables dans dix-huit ans. Pour gouverner l\'Olympe, il lui suffira de libérer les Titans, jadis emprisonnés par Zeus, après avoir éliminé le seul dieu capable de le tenir en échec : Hercule.', 'Hercule-1.jpg'),
(35, 'pinocchio', 'Geppetto, un pauvre menuisier italien, fabrique dans un morceau de bois un pantin qui pleure, rit et parle comme un enfant, une marionnette qu\'il nomme Pinocchio et qu\'il aime comme le fils qu\'il n\'a pas eu. Désobéissant, parfois menteur, Pinocchio va se trouver entraîné dans de nombreuses aventures.', 'pinochio.jpg'),
(36, ' Le Hobbit : Un voyage inattendu', 'Bilbon n\'est plus tout jeune et décide d\'entamer la rédaction de ses Mémoires ; il commence par faire le récit de l\'aventure qu\'il vécut quelque soixante ans plus tôt. Il se remémore notamment, alors qu\'il profitait paisiblement de sa journée, l\'arrivée du sorcier Gandalf. Ce dernier avait vu en lui la personne capable d\'aider des nains barbus à retrouver leur trésor volé par le terrifiant dragon Smaug.', 'le-hobbit-un-voyage-inattendu-1_1177319.jpg'),
(37, 'Outlast', 'Miles Upshur, un journaliste d\'investigation indépendant, reçoit une information anonyme à partir d\'une source identifiée seulement par un dénonciateur. Il lui raconte des expériences inhumaines commises à l\'asile de Mount Massive, un hôpital psychiatrique situé dans les montagnes de Lake County, au Colorado, appartenant à la Murkoff Corporation, qui est connue pour ses affaires de corruption. Entrant dans l\'asile, Upshur est horrifié de découvrir des cadavres qui jonchent le sol, y compris un agent du SWAT mourant qui l\'avertit de s\'échapper pendant qu\'il en est encore temps. En étudiant un peu plus la situation, Upshur trouve les patients de l\'asile, connus sous le nom « Variants », en liberté et hostiles à son égard ; en particulier, un sadique flandrin nommé Chris Walker. Approché par Martin Archimbaud, un chef de la secte qui se considère comme étant prêtre, il lui dit qu\'il a été envoyé par « Dieu » pour être son témoin des évènements de la nuit. Il devient vite évident qu\'Archimbaud n\'a pas l\'intention de laisser échapper Miles, et qu\'il idolâtre une entité en apparence surnaturelle connue seulement sous le nom de Walrider, dont il prétend avoir provoqué l\'évasion.\r\n\r\nPris au piège à l\'intérieur, Upshur est obligé d\'explorer l\'asile à la recherche d\'une sortie, et d\'échapper à plusieurs Variants, y compris une poursuite de Walker, et des jumeaux en soif de le tuer. Poursuivi dans l\'aile des hommes, Upshur est sauvé par un monte-charge qui l\'amène dans une autre pièce, avant d\'être capturé par son « sauveur », un exécutif Murkoff délirant nommé Richard Trager. Trager, un « docteur » qui expérimente sur les patients, attache Upshur à un fauteuil roulant et ampute deux de ses doigts. Laissé pendant un court instant seul ; Miles réussit à s\'échapper dans un ascenseur. Saisi par Trager tandis que l\'ascenseur est toujours en mouvement, une lutte s\'ensuit qui se traduit finalement par la mort du docteur, écrasé au niveau du bassin entre la cabine d\'ascenseur et l\'étage supérieur. bloquant ainsi la cabine. Upshur rencontre alors Archimbaud encore une fois avec Le Walrider. Miles Upshur ne peut le voir qu\'à travers le mode de vision de nuit de sa caméra. Atteignant un auditorium avec une bobine de film faisant défiler des images à l\'écran, Upshur apprend que Le Walrider a été créé par le Dr Rudolf Gustav Wernicke, un scientifique allemand pris en charge par l\'Opération Paperclip. Wernicke a élaboré un « moteur morphogénétique » pour l\'Allemagne nazie, qui utilise un grave traumatisme psychologique et la thérapie de rêve pour générer un être axé sur des nanorobots malveillants.\r\n\r\nEn trouvant Martin dans la chapelle de l\'asile, Upshur est témoin de son auto-immolation sur un crucifix. Lui indiquant juste avant qu\'il pouvait s\'échapper par l\'ascenseur, Upshur l\'utilise, pour être finalement trompé et il descend dans une installation souterraine sous l\'institution. Suivi et attaqué par Walker, Upshur assiste à l\'horrible scène où Walker est tué par Le Walrider. Il trouve ensuite le docteur Wernicke. Upshur apprend que Le Walrider est le résultat d\'expériences de la nanotechnologie, et qu\'il est « hébergé » par le patient catatonique Billy Hope. Ayant reçu les instructions de couper le système de support de vie de Billy Hope, Upshur le fait, mais est immédiatement saisi par le Walrider déjà bien affaibli et sans hôte. Sur le point de mourir, il titube vers la sortie, où une équipe de sécurité dirigée par Wernicke tire sur lui. Upshur s\'effondre sur le sol, et Wernicke se rend compte que Miles est devenu le nouvel hôte du Walrider ; des cris de paniques et des coups de feu sont entendus avant que l\'écran affiche les crédits. Quant à lui, pendant l\'écran noir, Miles s\'est tu.', NULL),
(38, 'Le Hobbit: La désolation de Smaug', 'Lors d\'un voyage à Bree, Thorin Écu-de-Chêne est abordé par Gandalf à l\'auberge du Poney Fringant. Le magicien informe le nain que sa tête a été mise à prix via une dépêche rédigée en Noir Parler et le pousse à récupérer l\'Arkenstone, gardée par Smaug à Erebor, pour unifier les Royaumes Nains. Il lui suggère aussi qu\'il aurait besoin pour cela d\'un cambrioleur.\r\n\r\nDouze mois plus tard, la Compagnie de Thorin est toujours poursuivie par les troupes d\'Azog, au-delà des Monts Brumeux. La Compagnie se réfugie dans la demeure de Beorn, un changeur de peau, qui les aide à atteindre la Forêt Noire. Pendant ce temps, Azog est convoqué à Dol Guldur. Désigné chef de son armée par le Nécromancien, Azog confie à un autre capitaine orque, Bolg, qui se trouve être son fils, la tâche de traquer Thorin.\r\n\r\nGandalf abandonne temporairement la compagnie aux frontières de la Forêt NoireVersion longue 1, pour enquêter sur les activités du Nécromancien, promettant de rejoindre les nains devant Erebor, et les avertissant que la forêt dissimule de nombreux maléfices et qu\'ils ne doivent en aucun cas sortir du sentierVersion longue 2. Bien vite1, les nains s\'égarent à travers les bois et sont capturés par des araignées géantes. Grâce à l\'invisibilité que lui procure l\'anneau, Bilbon parvient à libérer ses amis de leurs toiles. Alors que le combat s\'engage entre les araignées et les nains, Bilbon ressent l\'influence corruptrice de l\'anneau. Le combat prend fin à l\'arrivée des Elfes Sylvestres, dirigés par Legolas et Tauriel, qui tuent les créatures et capturent Thorin et ses compagnons. Bilbon, invisible, demeure libre.\r\n\r\n', 'image1.jpg');

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
(22, 3),
(26, 3),
(27, 8),
(28, 8),
(29, 8),
(30, 8),
(32, 8),
(35, 8),
(36, 7),
(37, 2),
(38, 7);

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
-- Structure de la table `genrejeuvideo`
--

DROP TABLE IF EXISTS `genrejeuvideo`;
CREATE TABLE IF NOT EXISTS `genrejeuvideo` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genrejeuvideo`
--

INSERT INTO `genrejeuvideo` (`ID`, `name`) VALUES
(1, 'Aventure'),
(2, 'Compilation'),
(3, 'Course'),
(4, 'FPS (First-Person Shooter)'),
(5, 'Gestion / Wargames'),
(6, 'MMO (Massively Multiplayer Online)'),
(7, 'Nouveaux genres'),
(8, 'Plate-forme'),
(9, 'RPG (Role Playing Game)'),
(10, 'Simulation'),
(11, 'Sport'),
(12, 'Action'),
(13, 'Hack and slash'),
(14, 'Hidden object'),
(15, 'Horreur'),
(16, 'Sandbox'),
(17, 'Point and click'),
(18, 'Puzzle'),
(19, 'Sci-fi'),
(20, 'Survival'),
(21, 'Text-base'),
(22, 'Tower defense'),
(23, 'Visual Novel');

-- --------------------------------------------------------

--
-- Structure de la table `jeuvideo`
--

DROP TABLE IF EXISTS `jeuvideo`;
CREATE TABLE IF NOT EXISTS `jeuvideo` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeuvideo`
--

INSERT INTO `jeuvideo` (`ID`, `name`, `description`, `image`) VALUES
(1, 'The Legend of Zelda: Ocarina of Time ', 'Ocarina of Time raconte l\'histoire de Link, un jeune garçon vivant dans un village perdu dans la forêt, qui parcourt le royaume d\'Hyrule pour empêcher Ganondorf d\'obtenir la Triforce, une relique sacrée partagée en trois : le courage (Link), la sagesse (Zelda) et la force (Ganondorf). La Triforce, une fois rassemblée, donne à son détenteur des pouvoirs surhumains. Le principal antagoniste du jeu, Ganondorf, la désire pour pouvoir régner sur le monde. Par conséquent, Link devra voyager dans le temps grâce à son ocarina et retrouver les sept sages qui lui permettront d\'enfermer Ganondorf dans un sceau dimensionnel.', 'zeldaTime.jpg'),
(8, 'Grand Tourismo    ', 'Gran Turismo est une série de jeux vidéo de course automobile conçue par le studio japonais Polyphony Digital, dirigée par Kazunori Yamauchi et produite par Sony Computer Entertainment sur les consoles de la gamme PlayStation. Débutée en 1997, la série comprend sept épisodes principaux et cinq déclinaisons.', 'téléchargement.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `jeuvideo_genre`
--

DROP TABLE IF EXISTS `jeuvideo_genre`;
CREATE TABLE IF NOT EXISTS `jeuvideo_genre` (
  `ID_jeuVideo` int(10) NOT NULL,
  `ID_genreJeuVideo` int(10) NOT NULL,
  PRIMARY KEY (`ID_jeuVideo`,`ID_genreJeuVideo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeuvideo_genre`
--

INSERT INTO `jeuvideo_genre` (`ID_jeuVideo`, `ID_genreJeuVideo`) VALUES
(1, 1),
(8, 3);

-- --------------------------------------------------------

--
-- Structure de la table `lienunivers`
--

DROP TABLE IF EXISTS `lienunivers`;
CREATE TABLE IF NOT EXISTS `lienunivers` (
  `ID_univers1` int(10) NOT NULL,
  `ID_univers2` int(10) NOT NULL,
  `description` varchar(5000) NOT NULL,
  PRIMARY KEY (`ID_univers1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `ID_film` int(10) NOT NULL DEFAULT '0',
  `ID_jeuvideo` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_univers`,`ID_film`,`ID_jeuvideo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `partofunivers`
--

INSERT INTO `partofunivers` (`ID_univers`, `ID_film`, `ID_jeuvideo`) VALUES
(-1, 0, 8),
(3, 1, 0),
(3, 2, 0),
(3, 3, 0),
(3, 4, 0),
(3, 5, 0),
(3, 8, 0),
(3, 9, 0),
(3, 10, 0),
(3, 11, 0),
(3, 12, 0),
(3, 13, 0),
(3, 14, 0),
(3, 15, 0),
(3, 16, 0),
(3, 17, 0),
(3, 18, 0),
(3, 19, 0),
(3, 20, 0),
(3, 21, 0),
(3, 22, 0),
(3, 26, 0),
(4, 36, 0),
(4, 38, 0),
(5, 27, 0),
(5, 28, 0),
(5, 29, 0),
(5, 30, 0),
(5, 32, 0),
(5, 35, 0),
(6, 0, 1),
(7, 37, 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `univers`
--

INSERT INTO `univers` (`ID`, `name`, `description`, `image`) VALUES
(3, 'MCU', 'L\'Univers cinématographique Marvel est une franchise cinématographique produite par Marvel Studios mettant en scène des personnages de bandes dessinées de l\'éditeur Marvel Comics. Marvel Studios est la propriété de The Walt Disney Company.', 'MCU.png'),
(4, 'Lord of the Ring', 'L\'histoire du Seigneur des anneaux se déroule sur la Terre du Milieu, principal continent d\'Arda, univers créé de toutes pièces par l\'auteur. J. R. R. Tolkien appelle ce travail littéraire « sous-création » (aussi traduit par « subcréation »). En réalité, Le Seigneur des anneaux n\'a pas lieu sur une autre planète ou dans une autre dimension : il s\'agit simplement d\'un « passé imaginaire » de la Terre :\r\n\r\n« J\'ai construit, je le crois, une époque imaginaire, mais quant au lieu j\'ai gardé les pieds sur ma propre Terre maternelle. Je préfère cela à la mode moderne qui consiste à rechercher des planètes lointaines dans \"l\'espace\". Quoique curieuses, elles nous sont étrangères, et l\'on ne peut les aimer avec l\'amour de ceux dont nous partageons le sang. »\r\n\r\n— Lettre no 211 à Rhona Beare (14 octobre 1958)\r\n\r\nCe « passé imaginaire » est décrit avec une précision chirurgicale par son créateur, qui va jusqu\'à réécrire des passages entiers du Seigneur des anneaux afin que les phases de la lune soient cohérentesN 4. La géographie du récit a été soigneusement élaborée par l\'auteur : « J\'ai commencé, avec sagesse, par une carte, à laquelle j\'ai subordonné l\'histoire (globalement en apportant une attention minutieuse aux distances). Faire l\'inverse est source de confusion et de contradictions64. » Les trois cartes que comprend Le Seigneur des anneaux (la carte générale, celle de la Comté et celle représentant le Gondor, le Rohan et le Mordor à grande échelle) ont été dessinées par Christopher Tolkien d\'après des croquis de son père.', NULL),
(5, 'Disney', 'L\'Univers Disney est une expression désignant l\'ensemble des mondes imaginaires apparus dans les nombreuses productions de la Walt Disney Company et de ses filiales.', NULL),
(6, 'The Legend of Zelda', 'Le jeu The Legend of Zelda est un jeu action-aventure où le joueur incarne un jeune garçon, parfois un jeune homme, nommé Link et doit, armé de son épée, de son bouclier, et d\'une foule d\'autres objets dont un arc, un grappin et des bombes, sauver la princesse Zelda, qui est la princesse d\'Hyrule.', NULL),
(7, 'outlast', 'Miles Upshur, un journaliste d\'investigation indépendant, reçoit une information anonyme à partir d\'une source identifiée seulement par un dénonciateur. Il lui raconte des expériences inhumaines commises à l\'asile de Mount Massive, un hôpital psychiatrique situé dans les montagnes de Lake County, au Colorado, appartenant à la Murkoff Corporation, qui est connue pour ses affaires de corruption. Entrant dans l\'asile, Upshur est horrifié de découvrir des cadavres qui jonchent le sol, y compris un agent du SWAT mourant qui l\'avertit de s\'échapper pendant qu\'il en est encore temps. En étudiant un peu plus la situation, Upshur trouve les patients de l\'asile, connus sous le nom « Variants », en liberté et hostiles à son égard ; en particulier, un sadique flandrin nommé Chris Walker. Approché par Martin Archimbaud, un chef de la secte qui se considère comme étant prêtre, il lui dit qu\'il a été envoyé par « Dieu » pour être son témoin des évènements de la nuit. Il devient vite évident qu\'Archimbaud n\'a pas l\'intention de laisser échapper Miles, et qu\'il idolâtre une entité en apparence surnaturelle connue seulement sous le nom de Walrider, dont il prétend avoir provoqué l\'évasion.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `mdp` varchar(500) NOT NULL,
  `permission` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `email`, `pseudo`, `mdp`, `permission`) VALUES
(1, 'arlo@gmail.com', 'arlo975', '4f0f5f5192beb4983e26a3a4a3826b436d2c1fa60424b368595c62d3d521ed1c', 2),
(3, 'exo@yahoo.com', 'exodus404', '8a7c35969f7f7bbee330a978e3907cf986a516b16753e6325e4a12f4ccbc2f91', 0),
(4, 'lol@orange.com', 'lolie', '4f0f5f5192beb4983e26a3a4a3826b436d2c1fa60424b368595c62d3d521ed1c', 0),
(5, 'neige@lol.com', 'petitpapanoel', 'b4482322b5c55b31e8f359264ced1d7bf5c45a868638774722bb04f613212d6d', 1),
(6, 'damido@outlook.com', 'deco', 'aacc840f70ddf62d07a8c01f3d261513cdaf84e3b6473c23aef32c529b96dc95', 0),
(7, 'ok@gmail.com', 'ak', 'e6a2ecba6bbe4e436e3cc0a75909004a1cf88d5ad6794bfbd152a25dc7e88487', 0),
(8, 'lit@orange.com', 'dodo', 'cbe0dda63bf0606052fb48c73716e40e7f9ebd267369501093d3f4e235c629ac', 0),
(9, 'po@outlook.com', 'popaul', '95e333065ca26d8398c8ce569feb128d3a09cb46eb9334c1fe741c04a149f799', 0),
(18, 'non@non.com', 'ouioui', '695b981a3822af1c59f10946c153594c3a38724d5f15891b3a3af51d292094e2', 0),
(19, 'lolipop@orange.com', 'exo', 'db3edc99daed83999d7a8e57cc1a454f321f6a233ed1265ca4ce3388dd78c91c', 0),
(20, 'intermerdiaire@gmail.com', 'Macron', 'd7224d0f8799d5cdc6ad9ee9918dda3e5c51e3c469d0dc35a6acb40a1ae36fd4', 1);

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
