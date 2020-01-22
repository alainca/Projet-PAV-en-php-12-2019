-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 22 jan. 2020 à 12:57
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mcd`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `ident` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `ID_Administrateur_IND` (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `ident`, `mdp`) VALUES
(1, 'administrateur', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

DROP TABLE IF EXISTS `agent`;
CREATE TABLE IF NOT EXISTS `agent` (
  `ID_Age` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ident` varchar(10) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`ID_Age`),
  UNIQUE KEY `ID_IND` (`ID_Age`),
  KEY `FKajoute_IND` (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`ID_Age`, `prenom`, `nom`, `ident`, `mdp`, `id_admin`) VALUES
(3, 'Depardieu', 'Gerard', 'GDepard1', 'gd458', 1),
(4, 'Claude', 'FranÃ§ois', 'cfranc', 'cf125', 1),
(5, 'Steve', ' McQueen', 'SMCQUEEN', 'S145', 1),
(6, 'Phil', 'Barney', 'pBarney', 'pb1258', 1),
(7, 'Pierre', 'Perret', 'PPERRET', 'pp145', 1),
(8, 'Willis', 'Bruce', 'bwillis12', '1254', 1);

-- --------------------------------------------------------

--
-- Structure de la table `appartient`
--

DROP TABLE IF EXISTS `appartient`;
CREATE TABLE IF NOT EXISTS `appartient` (
  `id_pav` int(11) NOT NULL,
  `numero_tournee` int(11) NOT NULL,
  PRIMARY KEY (`id_pav`,`numero_tournee`),
  UNIQUE KEY `ID_Appartient_IND` (`id_pav`,`numero_tournee`),
  KEY `FKApp_Tou_IND` (`numero_tournee`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pav`
--

DROP TABLE IF EXISTS `pav`;
CREATE TABLE IF NOT EXISTS `pav` (
  `id_pav` int(1) NOT NULL AUTO_INCREMENT,
  `Nom_PAV` varchar(250) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `code_postal` varchar(5) NOT NULL,
  `ville` varchar(200) NOT NULL,
  `Taux_de_remplissage` varchar(10) NOT NULL,
  `id_admin` int(1) NOT NULL,
  PRIMARY KEY (`id_pav`),
  UNIQUE KEY `ID_PAV_IND` (`id_pav`),
  KEY `FKcree_IND` (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pav`
--

INSERT INTO `pav` (`id_pav`, `Nom_PAV`, `adresse`, `code_postal`, `ville`, `Taux_de_remplissage`, `id_admin`) VALUES
(1, 'Bordeaux Francin', '14 Rue Francin', '33800', 'Bordeaux', '2/4', 1),
(2, 'Pessac Chatenet', '19 Avenue du Chatenet', '33600', 'Pessac', '0/4', 1),
(3, 'Pessac Provence', '7 AllÃ©e de Provence', '33600', 'Pessac', '0/4', 1),
(4, 'Pessac GraviÃ¨res', '21 rue des GraviÃ¨res', '33600', 'Pessac', '0/4', 1),
(5, 'Cenon Beaumarchais', 'Rue Beaumarchais', '33150', 'Cenon', '0/2', 1),
(6, 'Le Haillan Hustin', '18 Rue Hustin', '33185', 'Le Haillan', '0/4', 1),
(8, 'Le Haillan Lafont ', 'chemin lafon', '33185', 'Le Haillan', '0/4', 1),
(9, 'Le Haillan Thil', '31 chemin du Thil', '33185', 'Le Haillan', '0/2', 1),
(10, 'Le Haillan Corbiac', '58 route de Corbiac ', '33185', 'Le Haillan', '2/4', 1),
(11, 'Le Haillan Venteille', '46 Rue de Venteille', '33185', 'Le Haillan', '3/4', 1),
(12, 'Le Haillan montailleu', '24 rue de montailleu', '33185', 'Le Haillan', '1/4', 1),
(13, 'Le Haillan Colbert', '12 rue Colbert', '33185', 'Le Haillan', '2/4', 1);

-- --------------------------------------------------------

--
-- Structure de la table `releve`
--

DROP TABLE IF EXISTS `releve`;
CREATE TABLE IF NOT EXISTS `releve` (
  `id_releve` int(11) NOT NULL AUTO_INCREMENT,
  `Date_r` date NOT NULL,
  `commentaire` varchar(200) NOT NULL,
  `Taux_de_remplissage` varchar(10) NOT NULL,
  `id_pav` int(5) NOT NULL,
  `id_tournee` int(4) NOT NULL,
  PRIMARY KEY (`id_releve`),
  UNIQUE KEY `ID_Releve_IND` (`id_releve`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `releve`
--

INSERT INTO `releve` (`id_releve`, `Date_r`, `commentaire`, `Taux_de_remplissage`, `id_pav`, `id_tournee`) VALUES
(21, '2019-12-20', 'A nettoyer ordures en dehors du pav', '2/4', 12, 23),
(14, '2019-12-27', 'Tout est ok!!!', '2/4', 6, 22),
(15, '2019-12-12', 'votre commentaire ici', '0/4', 1, 25),
(16, '2019-12-20', 'votre commentaire ici', '0/4', 2, 24),
(17, '2019-12-20', 'votre commentaire ici', '0/4', 4, 24),
(18, '2019-12-20', 'votre commentaire ici', '0/4', 2, 24),
(19, '2019-12-27', 'ok', '1/4', 8, 23),
(20, '2019-12-20', 'pav top', '1/4', 10, 23);

-- --------------------------------------------------------

--
-- Structure de la table `tournee`
--

DROP TABLE IF EXISTS `tournee`;
CREATE TABLE IF NOT EXISTS `tournee` (
  `id_tournee` int(11) NOT NULL AUTO_INCREMENT,
  `Date_t` date NOT NULL,
  `Nom_tour` varchar(12) NOT NULL,
  `ID_Age` varchar(10) NOT NULL,
  PRIMARY KEY (`id_tournee`),
  UNIQUE KEY `ID_Tournee_IND` (`id_tournee`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tournee`
--

INSERT INTO `tournee` (`id_tournee`, `Date_t`, `Nom_tour`, `ID_Age`) VALUES
(22, '2019-12-28', 'Haillan 1', ' 4 '),
(25, '2019-12-12', 'Bordeaux1', ' 3 '),
(23, '2019-12-27', 'haillan2', ' 4 '),
(24, '2019-12-20', 'Pessac 3', ' 1 ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
