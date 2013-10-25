-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 25 Octobre 2013 à 12:03
-- Version du serveur: 5.5.29
-- Version de PHP: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `freeads`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) unsigned NOT NULL,
  `price` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `picture` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `etat` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`id`, `id_user`, `price`, `title`, `categorie`, `content`, `date`, `picture`, `location`, `etat`) VALUES
(2, 10, 123, 'Poêle de marque Mirus', 'MAISON', 'Suite à rénovation de résidence secondaire\nVend ancien poêle Mirus en fonte émaillé de couleur vert pour buche de 33 cm, en parfait état.\nLargeur 27 cm Longeur 47 cm Hauteur 53 cm', '2013-10-22 21:02:24', 'o2a4sydcvhoe3ok2zvxx', '93 - Seine St Denis', 0),
(3, 10, 12000, 'Cabane', 'IMMOBILIER', 'Une super cabane', '2013-10-22 21:30:37', 'mpa249byluuhj2ptp25o', '02 - Aisne', 0),
(4, 11, 200, 'Logo Microsoft', 'MULTIMEDIA', 'Je vous propose un super logo que j''ai trouvé sur google image.\nN''hésitez pas et faites vous plaisir !', '2013-10-22 22:44:41', 'xuwgt7aur5kjpbyfy6aw', '78 - Yvelines', 0),
(5, 10, 20, 'GTA 4 occasion', 'LOISIRS', 'Vend jeu GTA sur PS3 d''occasion, manuel et dvd en bon état.', '2013-10-23 12:56:56', 'm2dxuhvphlymbtqacy74', '50 - Manche', 0),
(8, 12, 18000, 'Polo rouge model S7', 'VEHICULES', 'Voiture vielle, peu servie.', '2013-10-24 20:37:23', 'ypcydr8sjljashr3ohnu', '78 - Yvelines', 0),
(29, 12, 100000, 'Maison Champignon', 'IMMOBILIER', 'Vend maison champignon inspirée du jeu MARIO Nitendo !', '2013-10-25 08:43:18', 'oyq3uiqns7fsgmbxrkib', '31 - Haute Garonne', 0),
(30, 13, 14000, 'Kawasaki Ninja 1200', 'VEHICULES', 'Vend grosse moto pour gros sex !', '2013-10-25 08:46:33', 'tmuxxlddh7r8vkaaacsc', '81 - Tarn', 0),
(31, 10, 70, 'Nike Talon Noir et Rose', 'VETEMENTS', 'Vend Nike Talon Noir et Rose', '2013-10-25 08:49:36', 'oe6frjguq3pslyxjdswr', '78 - Yvelines', 0),
(32, 10, 1, 'Camion Fosse secptique', 'MATERIEL PROFESSIONNEL', 'Vend camion qui marche pas !', '2013-10-25 08:54:24', 'tnrt5yplauhgadfp9itu', '77 - Seine et Marne', 2),
(33, 13, 80, 'SOS medecin', 'EMPLOI & SERVICES', 'Prestation 80€', '2013-10-25 08:57:30', 'rhsbjrjq3nd3ndjmuot0', '97 - DOM', 0),
(34, 11, 100, 'nourriture', 'Autres', 'De la bouffe !', '2013-10-25 09:47:02', 'o01oxaylggubf9quabxx', '07 - Ardèche', 0);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'IMMOBILIER'),
(2, 'MULTIMEDIA'),
(3, 'MAISON'),
(4, 'LOISIRS'),
(5, 'MATERIEL PROFESSIONNEL'),
(6, 'EMPLOI & SERVICES'),
(7, 'VEHICULES'),
(8, 'VETEMENTS'),
(9, 'Autres');

-- --------------------------------------------------------

--
-- Structure de la table `departs`
--

CREATE TABLE `departs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=98 ;

--
-- Contenu de la table `departs`
--

INSERT INTO `departs` (`id`, `name`) VALUES
(1, '01 - Ain'),
(2, '02 - Aisne'),
(3, '03 - Allier'),
(4, '04 - Alpes de Haute Provence'),
(5, '05 - Hautes Alpes'),
(6, '06 - Alpes Maritimes'),
(7, '07 - Ardèche'),
(8, '08 - Ardennes'),
(9, '09 - Ariège'),
(10, '10 - Aube'),
(11, '11 - Aude'),
(12, '12 - Aveyron'),
(13, '13 - Bouches du Rhône'),
(14, '14 - Calvados'),
(15, '15 - Cantal'),
(16, '16 - Charente'),
(17, '17 - Charente Maritime'),
(18, '18 - Cher'),
(19, '19 - Corrèze'),
(20, '2A - Corse du Sud'),
(21, '2B - Haute Corse'),
(22, '21 - Côte d''Or'),
(23, '22 - Côtes d''Armor'),
(24, '23 - Creuse'),
(25, '24 - Dordogne'),
(26, '25 - Doubs'),
(27, '26 - Drôme'),
(28, '27 - Eure'),
(29, '28 - Eure et Loir'),
(30, '29 - Finistère'),
(31, '30 - Gard'),
(32, '31 - Haute Garonne'),
(33, '32 - Gers'),
(34, '33 - Gironde'),
(35, '34 - Hérault'),
(36, '35 - Ille et Vilaine'),
(37, '36 - Indre'),
(38, '37 - Indre et Loire'),
(39, '38 - Isère'),
(40, '39 - Jura'),
(41, '40 - Landes'),
(42, '41 - Loir et Cher'),
(43, '42 - Loire'),
(44, '43 - Haute Loire'),
(45, '44 - Loire Atlantique'),
(46, '45 - Loiret'),
(47, '46 - Lot'),
(48, '47 - Lot et Garonne'),
(49, '48 - Lozère'),
(50, '49 - Maine et Loire'),
(51, '50 - Manche'),
(52, '51 - Marne'),
(53, '52 - Haute Marne'),
(54, '53 - Mayenne'),
(55, '54 - Meurthe et Moselle'),
(56, '55 - Meuse'),
(57, '56 - Morbihan'),
(58, '57 - Moselle'),
(59, '58 - Nièvre'),
(60, '59 - Nord'),
(61, '60 - Oise'),
(62, '61 - Orne'),
(63, '62 - Pas de Calais'),
(64, '63 - Puy de Dôme'),
(65, '64 - Pyrénées Atlantiques'),
(66, '65 - Hautes Pyrénées'),
(67, '66 - Pyrénées Orientales'),
(68, '67 - Bas Rhin'),
(69, '68 - Haut Rhin'),
(70, '69 - Rhône'),
(71, '70 - Haute Saône'),
(72, '71 - Saône et Loire'),
(73, '72 - Sarthe'),
(74, '73 - Savoie'),
(75, '74 - Haute Savoie'),
(76, '75 - Paris'),
(77, '76 - Seine Maritime'),
(78, '77 - Seine et Marne'),
(79, '78 - Yvelines'),
(80, '79 - Deux Sèvres'),
(81, '80 - Somme'),
(82, '81 - Tarn'),
(83, '82 - Tarn et Garonne'),
(84, '83 - Var'),
(85, '84 - Vaucluse'),
(86, '85 - Vendée'),
(87, '86 - Vienne'),
(88, '87 - Haute Vienne'),
(89, '88 - Vosges'),
(90, '89 - Yonne'),
(91, '90 - Territoire de Belfort'),
(92, '91 - Essonne'),
(93, '92 - Hauts de Seine'),
(94, '93 - Seine St Denis'),
(95, '94 - Val de Marne'),
(96, '95 - Val d''Oise'),
(97, '97 - DOM');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_sender` int(10) unsigned NOT NULL,
  `id_rec` int(10) unsigned NOT NULL,
  `id_annonce` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `etat_sender` int(11) NOT NULL,
  `etat_rec` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sender` (`id_sender`),
  KEY `id_rec` (`id_rec`),
  KEY `id_annonce` (`id_annonce`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `id_sender`, `id_rec`, `id_annonce`, `title`, `message`, `date`, `etat_sender`, `etat_rec`) VALUES
(20, 12, 10, 5, 'super ce jeu', 'je le veux !', '2013-10-24 20:41:46', 0, 9),
(21, 10, 12, 5, 'RE : super ce jeu', 'Ok c''est 20€', '2013-10-24 20:42:20', 9, 1),
(22, 12, 10, 5, 'RE : RE : super ce jeu', 'Ok pas de probleme mon numero est le 01 010101010', '2013-10-24 20:42:53', 0, 9),
(23, 10, 11, 4, 'xasdad', 'asdasdasdasd', '2013-10-24 21:05:35', 9, 1),
(24, 11, 10, 4, 'RE : xasdad', 'asdasdads', '2013-10-24 21:05:52', 9, 9),
(25, 10, 11, 4, 'RE : RE : xasdad', 'asdasdads', '2013-10-24 21:08:40', 9, 0),
(26, 12, 10, 5, 'RE : RE : super ce jeu', 'Hey repond moi !', '2013-10-24 21:10:28', 0, 1),
(27, 10, 12, 5, 'RE : RE : RE : super ce jeu', 'ok je te le vends', '2013-10-24 21:11:02', 9, 0),
(28, 11, 10, 32, 'Je veux ce camion', 'Trop bien pour 1€ !', '2013-10-25 09:48:21', 9, 1);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Structure de la table `roles_users`
--

CREATE TABLE `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(10, 1),
(11, 1),
(12, 1),
(13, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`),
  KEY `id_3` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `logins`, `last_login`) VALUES
(10, 'bibi.bibi@bibi.fr', 'bibi', 'a57d74ea8b123d37ce24fa7e3a6c63082aa9839bbe59980430d3119c3451d2f5', 33, 1382694561),
(11, 'ricky@ricky.fr', 'Ricky', 'a57d74ea8b123d37ce24fa7e3a6c63082aa9839bbe59980430d3119c3451d2f5', 12, 1382694271),
(12, 'polo@polo.fr', 'polo', 'a57d74ea8b123d37ce24fa7e3a6c63082aa9839bbe59980430d3119c3451d2f5', 5, 1382690253),
(13, 'loic.loic@loic.fr', 'loic', 'a57d74ea8b123d37ce24fa7e3a6c63082aa9839bbe59980430d3119c3451d2f5', 2, 1382691326);

-- --------------------------------------------------------

--
-- Structure de la table `user_tokens`
--

CREATE TABLE `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD CONSTRAINT `annonces_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
