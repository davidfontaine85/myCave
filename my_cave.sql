-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 08 juin 2019 à 07:31
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `my_cave`
--

-- --------------------------------------------------------

--
-- Structure de la table `bottle`
--

DROP TABLE IF EXISTS `bottle`;
CREATE TABLE IF NOT EXISTS `bottle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `winename` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `grapes` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bottle`
--

INSERT INTO `bottle` (`id`, `winename`, `year`, `grapes`, `country`, `region`, `description`, `picture`) VALUES
(3, 'MARGERUM SYBARITE', 2010, 'Sauvignon Blanc', 'USA', 'California Central Cosat', 'The cache of a fine Cabernet in ones wine cellar can now be replaced with a childishly playful wine bubbling over with tempting tastes of\nblack cherry and licorice. This is a taste sure to transport you back in time.', 'margerum.jpg'),
(4, 'OWEN ROE \"EX UMBRIS\"', 2009, 'Syrah', 'USA', 'Washington', 'A one-two punch of black pepper and jalapeno will send your senses reeling, as the orange essence snaps you back to reality. Don\'t miss\nthis award-winning taste sensation.', 'ex_umbris.jpg'),
(5, 'REX HILL', 2009, 'Pinot Noir', 'USA', 'Oregon', 'One cannot doubt that this will be the wine served at the Hollywood award shows, because it has undeniable star power. Be the first to catch\nthe debut that everyone will be talking about tomorrow.', 'rex_hill.jpg'),
(6, 'VITICCIO CLASSICO RISERVA', 2011, 'Sangiovese Merlot', 'Italie', 'Tuscany', 'though soft and rounded in texture, the body of this wine is full and rich and oh-so-appealing. this delivery is even more impressive when one takes note of the tender tannins that leave the taste buds wholly satisfied.', 'lan_rioja.jpg'),
(23, 'CHATEAU MARGAUX', 2007, 'Sauvignon', 'FRANCE', 'BORDEAUX', 'd\'abord vendue comme un simple vin blanc de sauvignon, cette cuvée a gagné ses lettres de noblesses en devenant, en 1920, le pavillon blanc du château margaux, qui porte encore aujourd\'hui la même étiquette qu\'à sa création. il est produit à partir de 12 hectares de sauvignon blanc situés sur une des plus anciennes parcelles du domaine qui n\'a pas été incluse dans la délimitation de l\'appellationmargaux, en raison notamment des gelées printanières.\r\n\r\nles vendanges sont manuelles pour une vinification et un élevage en barriques de chênes, la dernière étape durant 7 à 8 mois.\r\n\r\nil en résulte un bordeaux blanc marqué par la finesse, la complexité, la richesse et une longueur en bouche remarquable. si vous résistez à l\'envie de le boire jeune, sachez qu\'il gagnera en subtilité et profondeur avec le temps. des millésimes retenus par bernard burtschy, c\'est encore une fois le 2009 qui dépasse les autres.', 'pavillon-blanc-du-chateau-margaux-blanc-sec-11982_BTL_liste.png'),
(25, 'CHATEAU PALMER ROUGE', 2009, ' Petit verdot, Cabernet sauvignon, Merlot', 'FRANCE', 'BORDEAUX', 'les vendanges sont manuelles avec tris successifs les vendanges sont manuelles avec tris successifs ', 'chateau-palmer-rouge-10542_BTL_liste.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `pseudonym` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
