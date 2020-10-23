INSERT INTO `character` (`ID`, `name`, `description`) VALUES
(1, 'Iron man', 'Iron Man est un super-héros de comics et de l\'univers Marvel . C\'est un homme de fer qui peut voler, lancer des rayons et qui a la force surpuissante. ... Son identité secrète est Tony Stark, un milliardaire, fabricant d\'armes qui a été attaqué lors d\'une démonstration de sa nouvelle arme.'),
(2, 'Thanos', 'Thanos est un véritable colosse d’environ 2 mètres de haut, à la morphologie plus que massive. Imposant de par sa stature, le personnage est facilement reconnaissable grâce à sa peau gris-pourpre, ses yeux rouges (sans pupilles) illustrant toute sa haine et son avarice, ainsi que son armure dorée. Tout d’abord aveuglé par son amour pour la Mort, Thanos a passé une partie de sa vie à chercher le pouvoir ultime dans le but de devenir l’égal de sa bien-aimée, jonchant l’univers de millions de morts. Comprenant que jamais il n’aurait son amour, il cherche aujourd’hui à se racheter de ses crimes. D’un caractère instable (d’où son surnom de Titan Fou), Thanos reste imprévisible.');

INSERT INTO `exist` (`ID_univers`, `ID_character`) VALUES
(1, 1),
(1, 2);


INSERT INTO `organisation` (`ID`, `name`, `description`) VALUES
(1, 'Shield', 'Le Strategic Homeland Intervention, Enforcement and Logistics Division, mieux connu sous son acronyme S.H.I.E.L.D., était à l’origine un États-Unis extra gouvernementales militaire contre le terrorisme et du renseignement, chargé de maintenir la sécurité mondiale. Fondée à la suite de la victoire des alliés pendant la seconde guerre mondiale sur les puissances de l’axe et HYDRA, S.H.I.E.L.D. a été organisée pour protéger les Etats-Unis et plus tard le monde entier, de toutes les menaces possibles. Avec ses armes avancées et d’agents extraordinaires, S.H.I.E.L.D. était peut-être la plus grande puissance militaire au monde. Géré par Nick Fury et le Conseil Mondial de Sécurité à l’époque moderne, S.H.I.E.L.D. dû faire face à la hausse significative améliorées particuliers, technologie avancée dangereuse et contact extraterrestre. Mais tous les problèmes que S.H.I.E.L.D. avait à résoudre a finalement abouti à la création des Avengers, une équipe d’intervention qui a été recruté pour sauver le monde au cours de l’invasion des extraterrestres de la terre en 2012. L’Agence est devenue publiquement connue après la bataille de New York, partiellement à cause du site Rising Tide.');

INSERT INTO `relation` (`ID_character_1`, `ID_character_2`, `ID_relation_type`) VALUES
(1, 2, 6);

INSERT INTO `relation_type` (`ID_relation_type`, `libelle_relation`) VALUES
(1, 'parent/child'),
(2, 'sibling'),
(3, 'lover'),
(4, 'friend'),
(5, 'colleague'),
(6, 'enemy');


INSERT INTO `univers` (`ID`, `name`, `description`) VALUES
(3, 'MCU', 'L\'Univers cinématographique Marvel est une franchise cinématographique produite par Marvel Studios mettant en scène des personnages de bandes dessinées de l\'éditeur Marvel Comics. Marvel Studios est la propriété de The Walt Disney Company.');
