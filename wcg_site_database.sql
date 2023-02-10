/*
__ Rubrique : Menu principal
__ sous_rubrique : sous menu 

  SRU_VIGNETTE_ID : pour construire la page d'acceuil, il point la table media 
                   image du deuxieme section 
   

*/
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 02 fév. 2023 à 15:44
-- Version du serveur : 5.7.40
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wcg`
--
CREATE DATABASE  wcg_site_web_databases;
use wcg_site_web_databases;
-- --------------------------------------------------------
-- 2023-02-02 14:52:18
--
-- Structure de la table `journal_rubrique`
--

DROP TABLE IF EXISTS `journal_rubrique`;
CREATE TABLE IF NOT EXISTS `journal_rubrique` (
  `JOR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USR_ID` int(11) DEFAULT NULL,
  `RUB_ID` int(11) DEFAULT NULL,
  `JOR_OPERATION` varchar(1000) NOT NULL,
  `JOR_DATE` datetime NOT NULL,
  PRIMARY KEY (`JOR_ID`),
  UNIQUE KEY `JOURNAL_RUBRIQUE_PK` (`JOR_ID`),
  KEY `RELATION_8_FK` (`RUB_ID`),
  KEY `RELATION_10_FK` (`USR_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `journal_site`
--

DROP TABLE IF EXISTS `journal_site`;
CREATE TABLE IF NOT EXISTS `journal_site` (
  `JST_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USR_ID` int(11) DEFAULT NULL,
  `SIT_ID` int(11) DEFAULT NULL,
  `JST_OPERATION` varchar(1000) NOT NULL,
  `JST_DATE` datetime NOT NULL,
  PRIMARY KEY (`JST_ID`),
  UNIQUE KEY `JOURNAL_SITE_PK` (`JST_ID`),
  KEY `RELATION_12_FK` (`SIT_ID`),
  KEY `RELATION_13_FK` (`USR_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `journal_sous_rubrique`
--

DROP TABLE IF EXISTS `journal_sous_rubrique`;
CREATE TABLE IF NOT EXISTS `journal_sous_rubrique` (
  `JOS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USR_ID` int(11) DEFAULT NULL,
  `SRU_ID` int(11) DEFAULT NULL,
  `JOS_OPERATION` varchar(1000) NOT NULL,
  `JOS_DATE` datetime NOT NULL,
  PRIMARY KEY (`JOS_ID`),
  UNIQUE KEY `JOURNAL_SOUS_RUBRIQUE_PK` (`JOS_ID`),
  KEY `RELATION_9_FK` (`SRU_ID`),
  KEY `RELATION_11_FK` (`USR_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `MED_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TYM_ID` int(11) DEFAULT NULL,
  `MED_LIBELLE` varchar(1000) NOT NULL,
  `MED_RESSOURCE` varchar(1000) NOT NULL,
  `MED_INFOBULLE` varchar(1000) DEFAULT NULL,
  `MED_META` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`MED_ID`),
  UNIQUE KEY `MEDIA_PK` (`MED_ID`),
  KEY `RELATION_1_FK` (`TYM_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`MED_ID`, `TYM_ID`, `MED_LIBELLE`, `MED_RESSOURCE`, `MED_INFOBULLE`, `MED_META`) VALUES
(1, 4, 'favico', 'favico.ico', NULL, NULL),
(2, 1, 'expertises_menu', 'expertises_menu.png', 'Expertises', NULL),
(3, 1, 'expertises_fond', 'expertises_fond.png', NULL, NULL),
(4, 1, 'secteurs_menu', 'secteurs_menu.png', 'Secteurs', NULL),
(5, 1, 'secteurs_fond', 'secteurs_fond.png', NULL, NULL),
(6, 1, 'innovations_menu', 'innovations_menu.png', 'Innovations', NULL),
(7, 1, 'innovations_fond', 'innovations_fond.png', NULL, NULL),
(8, 1, 'Homme_menu', 'Home_menu.png', 'Accueil', NULL),
(9, 1, 'hiring_menu', 'hiring_menu.png', 'Recrutements', NULL),
(10, 1, 'hiring_fond', 'hiring_fond.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `NEW_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NEW_LIBELLE` varchar(1000) NOT NULL,
  `NEW_STATUS` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`NEW_ID`),
  UNIQUE KEY `NEWSLETTER_PK` (`NEW_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `rezo`
--

DROP TABLE IF EXISTS `rezo`;
CREATE TABLE IF NOT EXISTS `rezo` (
  `REZ_ID` int(11) NOT NULL AUTO_INCREMENT,
  `REZ_NOM` varchar(1000) NOT NULL,
  `REZ_ICONE` varchar(1000) DEFAULT NULL,
  `REZ_URL` varchar(1000) NOT NULL,
  PRIMARY KEY (`REZ_ID`),
  UNIQUE KEY `REZO_PK` (`REZ_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `rubrique`
--

DROP TABLE IF EXISTS `rubrique`;
CREATE TABLE IF NOT EXISTS `rubrique` (
  `RUB_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TPL_ID` int(11) DEFAULT NULL,
  `SIT_ID` int(11) DEFAULT NULL,
  `STA_ID` int(11) DEFAULT NULL,
  `RUB_ICONE_ID` bigint(20) NOT NULL,
  `RUB_VIGNETTE_ID` bigint(20) DEFAULT NULL,
  `RUB_IMG_ID` bigint(20) DEFAULT NULL,
  `RUB_ORDRE` int(11) NOT NULL,
  `RUB_LIBELLE` varchar(1000) NOT NULL,
  `RUB_TITRE` varchar(5000) NOT NULL,
  `RUB_CONTENU` text NOT NULL,
  `RUB_UNE` tinyint(1) DEFAULT '0',
  `RUB_AVANT` tinyint(1) DEFAULT '0',
  `RUB_BACKGROUND` varchar(255) NOT NULL,
  `RUB_FONT_NAME` varchar(255) NOT NULL,
  `RUB_FONT_SIZE` smallint(6) NOT NULL,
  `RUB_FONT_COLOR` varchar(255) NOT NULL,
  `RUB_META_TITLE` varchar(1000) DEFAULT NULL,
  `RUB_META_DESCRIPTION` varchar(1000) DEFAULT NULL,
  `RUB_DATE_PUBLICATION` datetime NOT NULL,
  `RUB_DATE_PARUTION` datetime NOT NULL,
  `RUB_DATE_EXPIRATION` datetime DEFAULT NULL,
  PRIMARY KEY (`RUB_ID`),
  UNIQUE KEY `RUBRIQUE_PK` (`RUB_ID`),
  KEY `RELATION_3_FK` (`SIT_ID`),
  KEY `RELATION_5_FK` (`STA_ID`),
  KEY `RELATION_14_FK` (`TPL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rubrique`
--

INSERT INTO `rubrique` (`RUB_ID`, `TPL_ID`, `SIT_ID`, `STA_ID`, `RUB_ICONE_ID`, `RUB_VIGNETTE_ID`, `RUB_IMG_ID`, `RUB_ORDRE`, `RUB_LIBELLE`, `RUB_TITRE`, `RUB_CONTENU`, `RUB_UNE`, `RUB_AVANT`, `RUB_BACKGROUND`, `RUB_FONT_NAME`, `RUB_FONT_SIZE`, `RUB_FONT_COLOR`, `RUB_META_TITLE`, `RUB_META_DESCRIPTION`, `RUB_DATE_PUBLICATION`, `RUB_DATE_PARUTION`, `RUB_DATE_EXPIRATION`) VALUES
(1, 2, 1, 1, 2, NULL, 3, 2, 'Expertises', 'Nos expertises', 'jksdjfsdjfsdjjkhdsfhjfjjhsjkdjgfsjkgjkfdsjkgfjdkgjsdfjkgjksdfjkgjksdjgkjksdlf', 0, 0, '#BF24CO', 'Montserrat', 40, '#FFFFFF', 'Les expertises de WCG RDC', 'Les expertises de l\'entreprise World Corp Group RDC', '2023-02-02 14:52:18', '2023-02-02 14:52:18', NULL),
(2, 2, 1, 1, 4, NULL, 5, 3, 'Secteurs', 'Nos secteurs d\'activités', 'jksdjfsdjfsdjjkhdsfhjfjjhsjkdjgfsjkgjkfdsjkgfjdkgjsdfjkgjksdfjkgjksdjgkjksdlf', 0, 0, '#3F079C', 'Montserrat', 40, '#FFFFFF', 'Les secteurs d\'activités de WCG RDC', 'Les secteur d\'activités de l\'entreprise World Corp Group RDC', '2023-02-02 14:52:18', '2023-02-02 14:52:18', NULL),
(3, 2, 1, 1, 6, NULL, 7, 4, 'Innovations', 'Nos projets innovants', 'jksdjfsdjfsdjjkhdsfhjfjjhsjkdjgfsjkgjkfdsjkgfjdkgjsdfjkgjksdfjkgjksdjgkjksdlf', 0, 1, '#2522F9', 'Montserrat', 40, '#FFFFFF', 'Les projets innovants de WCG RDC', 'Les projets innovants de l\'entreprise World Corp Group RDC', '2023-02-02 14:52:18', '2023-02-02 14:52:18', NULL),
(4, 1, 1, 1, 8, NULL, NULL, 1, '', '', '', 0, 1, '#FFFFFF', 'Montserrat', 40, '#FFFFFF', 'Site Internet de WCG RDC', 'WCG est une entreprise de consulting et de projets innovants', '2023-02-02 14:52:18', '2023-02-02 14:52:18', NULL),
(5, 4, 1, 1, 9, NULL, NULL, 5, 'Recrutements', 'Rejoignez-nous!', 'jksdjfsdjfsdjjkhdsfhjfjjhsjkdjgfsjkgjkfdsjkgfjdkgjsdfjkgjksdfjkgjksdjgkjksdlf', 0, 0, '#14D1B3', 'Montserrat', 40, '#FFFFFF', 'Rejoignez notre entreprise', 'Découvrez nos offres', '2023-02-02 14:52:18', '2023-02-02 14:52:18', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

DROP TABLE IF EXISTS `site`;
CREATE TABLE IF NOT EXISTS `site` (
  `SIT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `STA_ID` int(11) DEFAULT NULL,
  `SIT_LIBELLE` varchar(1000) NOT NULL,
  `SIT_FAV_ICON` varchar(1000) DEFAULT NULL,
  `SIT_META_TITLE` varchar(1000) DEFAULT NULL,
  `SIT_META_DESCRIPTION` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`SIT_ID`),
  UNIQUE KEY `SITE_PK` (`SIT_ID`),
  KEY `RELATION_7_FK` (`STA_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `site`
--

INSERT INTO `site` (`SIT_ID`, `STA_ID`, `SIT_LIBELLE`, `SIT_FAV_ICON`, `SIT_META_TITLE`, `SIT_META_DESCRIPTION`) VALUES
(1, 1, 'World Corp Group', 'wcg_favicon.ico', 'WCG - RDC', 'Site internet de la société World Corp Group, entreprise de consulting et de projets innovants');

-- --------------------------------------------------------

--
-- Structure de la table `sous_rubrique`
--

DROP TABLE IF EXISTS `sous_rubrique`;
CREATE TABLE IF NOT EXISTS `sous_rubrique` (
  `SRU_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TPL_ID` int(11) DEFAULT NULL,
  `RUB_ID` int(11) DEFAULT NULL,
  `STA_ID` int(11) DEFAULT NULL,
  `SRU_ICONE_ID` bigint(20) DEFAULT NULL,
  `SRU_VIGNETTE_ID` bigint(20) DEFAULT NULL,
  `SRU_IMG_ID` bigint(20) DEFAULT NULL,
  `SRU_ORDRE` int(11) NOT NULL,
  `SRU_LIBELLE` varchar(1000) NOT NULL,
  `SRU_TITRE` varchar(1000) NOT NULL,
  `SRU_CONTENU` text NOT NULL,
  `SRU_UNE` tinyint(1) DEFAULT '0',
  `SRU_AVANT` tinyint(1) DEFAULT '0',
  `SRU_BACKGROUND` varchar(255) DEFAULT NULL,
  `SRU_FONT_NAME` varchar(255) DEFAULT NULL,
  `SRU_FONT_SIZE` smallint(6) DEFAULT NULL,
  `SRU_FONT_COLOR` varchar(255) DEFAULT NULL,
  `SRU_META_TITLE` varchar(1000) DEFAULT NULL,
  `SRU_META_DESCRIPTION` varchar(10000) DEFAULT NULL,
  `SRU_DATE_PUBLICATION` datetime NOT NULL,
  `SRU_DATE_PARUTION` datetime DEFAULT NULL,
  `SRU_DATE_EXPIRATION` datetime DEFAULT NULL,
  PRIMARY KEY (`SRU_ID`),
  UNIQUE KEY `SOUS_RUBRIQUE_PK` (`SRU_ID`),
  KEY `RELATION_4_FK` (`RUB_ID`),
  KEY `RELATION_6_FK` (`STA_ID`),
  KEY `RELATION_15_FK` (`TPL_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `STA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `STA_LIBELLE` varchar(1000) NOT NULL,
  PRIMARY KEY (`STA_ID`),
  UNIQUE KEY `STATUS_PK` (`STA_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`STA_ID`, `STA_LIBELLE`) VALUES
(1, 'Actif'),
(2, 'Inactif');

-- --------------------------------------------------------

--
-- Structure de la table `template`
--

DROP TABLE IF EXISTS `template`;
CREATE TABLE IF NOT EXISTS `template` (
  `TPL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TPL_LIBELLE` varchar(1000) NOT NULL,
  `TPL_RESSOURCES` varchar(1000) NOT NULL,
  PRIMARY KEY (`TPL_ID`),
  UNIQUE KEY `TEMPLATE_PK` (`TPL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `template`
--

INSERT INTO `template` (`TPL_ID`, `TPL_LIBELLE`, `TPL_RESSOURCES`) VALUES
(1, 'homepage', 'home.php'),
(2, 'little_content', 'little_content.php'),
(3, 'news', 'news.php'),
(4, 'hiring', 'hiring.php'),
(5, 'legal_content', 'legal_content.php');

-- --------------------------------------------------------

--
-- Structure de la table `type_media`
--

DROP TABLE IF EXISTS `type_media`;
CREATE TABLE IF NOT EXISTS `type_media` (
  `TYM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TYM_LIBELLE` varchar(1000) NOT NULL,
  PRIMARY KEY (`TYM_ID`),
  UNIQUE KEY `TYPE_MEDIA_PK` (`TYM_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type_media`
--

INSERT INTO `type_media` (`TYM_ID`, `TYM_LIBELLE`) VALUES
(1, 'image'),
(2, 'vidéo'),
(3, 'icône'),
(4, 'favico'),
(5, 'url');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `USR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USR_FRIST_NAME` varchar(1000) DEFAULT NULL,
  `USR_LAST_NAME` varchar(1000) NOT NULL,
  `USR_SURNAME` varchar(1000) DEFAULT NULL,
  `USR_LOGIN` varchar(255) NOT NULL,
  `USR_PWD` varchar(255) NOT NULL,
  `USR_LAST_SESSION` datetime NOT NULL,
  `USR_TOKEN` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`USR_ID`),
  UNIQUE KEY `USERS_PK` (`USR_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*


