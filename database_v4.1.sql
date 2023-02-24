
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Candidat`
--
CREATE DATABASE wcg_site_web_database;

use  DATABASE wcg_site_web_database;
DROP TABLE IF EXISTS `Candidat`;
CREATE TABLE `Candidat` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `Date_naissance` date NOT NULL,
  `Sexe` varchar(2) NOT NULL,
  `SRU_ID` int NOT NULL,
  `Note` text,
  PRIMARY KEY (`Id`)
)  
;

--
-- Dumping data for table `Candidat`
--

LOCK TABLES `Candidat` WRITE;
/*!40000 ALTER TABLE `Candidat` DISABLE KEYS */;
/*!40000 ALTER TABLE `Candidat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Partenaire`
--

DROP TABLE IF EXISTS `Partenaire`;

CREATE TABLE `Partenaire` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `media_id` int NOT NULL,
  `description` text,
  PRIMARY KEY (`Id`)
)  
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Partenaire`
--

LOCK TABLES `Partenaire` WRITE;
/*!40000 ALTER TABLE `Partenaire` DISABLE KEYS */;
/*!40000 ALTER TABLE `Partenaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `V_Contenu_Expertise`
--

DROP TABLE IF EXISTS `V_Contenu_Expertise`;
/*!50001 DROP VIEW IF EXISTS `V_Contenu_Expertise`*/;
SET @saved_cs_client     = @@character_set_client;

/*!50001 CREATE VIEW `V_Contenu_Expertise` AS SELECT 
 1 AS `MED_RESSOURCE`,
 1 AS `RUB_TITRE`,
 1 AS `RUB_CONTENU`,
 1 AS `RUB_META_TITLE`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `V_Contenu_Nos_Secteur`
--

DROP TABLE IF EXISTS `V_Contenu_Nos_Secteur`;
/*!50001 DROP VIEW IF EXISTS `V_Contenu_Nos_Secteur`*/;
SET @saved_cs_client     = @@character_set_client;
 
/*!50001 CREATE VIEW `V_Contenu_Nos_Secteur` AS SELECT 
 1 AS `MED_RESSOURCE`,
 1 AS `RUB_TITRE`,
 1 AS `RUB_CONTENU`,
 1 AS `RUB_META_TITLE`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `V_Contenu_projet_innovant`
--

DROP TABLE IF EXISTS `V_Contenu_projet_innovant`;
/*!50001 DROP VIEW IF EXISTS `V_Contenu_projet_innovant`*/;
SET @saved_cs_client     = @@character_set_client;
 
/*!50001 CREATE VIEW `V_Contenu_projet_innovant` AS SELECT 
 1 AS `MED_RESSOURCE`,
 1 AS `RUB_TITRE`,
 1 AS `RUB_CONTENU`,
 1 AS `RUB_META_TITLE`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `V_Contenu_recrutement`
--

DROP TABLE IF EXISTS `V_Contenu_recrutement`;
/*!50001 DROP VIEW IF EXISTS `V_Contenu_recrutement`*/;
SET @saved_cs_client     = @@character_set_client;
 
/*!50001 CREATE VIEW `V_Contenu_recrutement` AS SELECT 
 1 AS `MED_RESSOURCE`,
 1 AS `RUB_TITRE`,
 1 AS `RUB_CONTENU`,
 1 AS `RUB_META_TITLE`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `V_Menu_Princepal`
--

DROP TABLE IF EXISTS `V_Menu_Princepal`;
/*!50001 DROP VIEW IF EXISTS `V_Menu_Princepal`*/;
SET @saved_cs_client     = @@character_set_client;
 
/*!50001 CREATE VIEW `V_Menu_Princepal` AS SELECT 
 1 AS `RUB_ID`,
 1 AS `a_sous_rubrique`,
 1 AS `url_page`,
 1 AS `RUB_ICONE_ID`,
 1 AS `RUB_LIBELLE`,
 1 AS `RUB_BACKGROUND`,
 1 AS `RUB_FONT_NAME`,
 1 AS `RUB_FONT_SIZE`,
 1 AS `RUB_FONT_COLOR`,
 1 AS `med_ressource`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `V_Sous_Menu_Exp`
--

DROP TABLE IF EXISTS `V_Sous_Menu_Exp`;
/*!50001 DROP VIEW IF EXISTS `V_Sous_Menu_Exp`*/;
SET @saved_cs_client     = @@character_set_client;
 
/*!50001 CREATE VIEW `V_Sous_Menu_Exp` AS SELECT 
 1 AS `SRU_ORDRE`,
 1 AS `SRU_TITRE`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `V_Sous_Menu_Sect`
--

DROP TABLE IF EXISTS `V_Sous_Menu_Sect`;
/*!50001 DROP VIEW IF EXISTS `V_Sous_Menu_Sect`*/;
SET @saved_cs_client     = @@character_set_client;
 
/*!50001 CREATE VIEW `V_Sous_Menu_Sect` AS SELECT 
 1 AS `SRU_ORDRE`,
 1 AS `SRU_TITRE`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `V_home_page_carousel`
--

DROP TABLE IF EXISTS `V_home_page_carousel`;
/*!50001 DROP VIEW IF EXISTS `V_home_page_carousel`*/;
SET @saved_cs_client     = @@character_set_client;
 
/*!50001 CREATE VIEW `V_home_page_carousel` AS SELECT 
 1 AS `MED_RESSOURCE`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `V_home_section_Une`
--

DROP TABLE IF EXISTS `V_home_section_Une`;
/*!50001 DROP VIEW IF EXISTS `V_home_section_Une`*/;
SET @saved_cs_client     = @@character_set_client;
 
/*!50001 CREATE VIEW `V_home_section_Une` AS SELECT 
 1 AS `SRU_TITRE`,
 1 AS `SRU_CONTENU`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `journal_rubrique`
--

DROP TABLE IF EXISTS `journal_rubrique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 
CREATE TABLE `journal_rubrique` (
  `JOR_ID` int NOT NULL AUTO_INCREMENT,
  `USR_ID` int DEFAULT NULL,
  `RUB_ID` int DEFAULT NULL,
  `JOR_OPERATION` varchar(1000) NOT NULL,
  `JOR_DATE` datetime NOT NULL,
  PRIMARY KEY (`JOR_ID`),
  UNIQUE KEY `JOURNAL_RUBRIQUE_PK` (`JOR_ID`),
  KEY `RELATION_8_FK` (`RUB_ID`),
  KEY `RELATION_10_FK` (`USR_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `journal_rubrique`
--

LOCK TABLES `journal_rubrique` WRITE;
/*!40000 ALTER TABLE `journal_rubrique` DISABLE KEYS */;
/*!40000 ALTER TABLE `journal_rubrique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `journal_site`
--

DROP TABLE IF EXISTS `journal_site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 
CREATE TABLE `journal_site` (
  `JST_ID` int NOT NULL AUTO_INCREMENT,
  `USR_ID` int DEFAULT NULL,
  `SIT_ID` int DEFAULT NULL,
  `JST_OPERATION` varchar(1000) NOT NULL,
  `JST_DATE` datetime NOT NULL,
  PRIMARY KEY (`JST_ID`),
  UNIQUE KEY `JOURNAL_SITE_PK` (`JST_ID`),
  KEY `RELATION_12_FK` (`SIT_ID`),
  KEY `RELATION_13_FK` (`USR_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `journal_site`
--

LOCK TABLES `journal_site` WRITE;
/*!40000 ALTER TABLE `journal_site` DISABLE KEYS */;
/*!40000 ALTER TABLE `journal_site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `journal_sous_rubrique`
--

DROP TABLE IF EXISTS `journal_sous_rubrique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 
CREATE TABLE `journal_sous_rubrique` (
  `JOS_ID` int NOT NULL AUTO_INCREMENT,
  `USR_ID` int DEFAULT NULL,
  `SRU_ID` int DEFAULT NULL,
  `JOS_OPERATION` varchar(1000) NOT NULL,
  `JOS_DATE` datetime NOT NULL,
  PRIMARY KEY (`JOS_ID`),
  UNIQUE KEY `JOURNAL_SOUS_RUBRIQUE_PK` (`JOS_ID`),
  KEY `RELATION_9_FK` (`SRU_ID`),
  KEY `RELATION_11_FK` (`USR_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `journal_sous_rubrique`
--

LOCK TABLES `journal_sous_rubrique` WRITE;
/*!40000 ALTER TABLE `journal_sous_rubrique` DISABLE KEYS */;
/*!40000 ALTER TABLE `journal_sous_rubrique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 
CREATE TABLE `media` (
  `MED_ID` int NOT NULL AUTO_INCREMENT,
  `TYM_ID` int DEFAULT NULL,
  `MED_LIBELLE` varchar(1000) NOT NULL,
  `MED_RESSOURCE` varchar(1000) NOT NULL,
  `MED_INFOBULLE` varchar(1000) DEFAULT NULL,
  `MED_META` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`MED_ID`),
  UNIQUE KEY `MEDIA_PK` (`MED_ID`),
  KEY `RELATION_1_FK` (`TYM_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,4,'favico','favico.ico',NULL,NULL);
INSERT INTO `media` VALUES (2,1,'expertises_menu','expertise_menu.png','Expertises',NULL);
INSERT INTO `media` VALUES (3,1,'expertises_fond','expertises_fond.png',NULL,NULL);
INSERT INTO `media` VALUES (4,1,'secteurs_menu','secteur_menu.png','Secteurs',NULL);
INSERT INTO `media` VALUES (5,1,'secteurs_fond','secteurs_fond.png',NULL,NULL);
INSERT INTO `media` VALUES (6,1,'innovations_menu','innovation_menu.png','Innovations',NULL);
INSERT INTO `media` VALUES (7,1,'innovations_fond','innovations_fond.png',NULL,NULL);
INSERT INTO `media` VALUES (8,1,'Homme_menu','home_menu.png','Accueil',NULL);
INSERT INTO `media` VALUES (9,1,'hiring_menu','recrutement_menu.png','Recrutements',NULL);
INSERT INTO `media` VALUES (10,1,'hiring_fond','hiring_fond.png',NULL,NULL);
INSERT INTO `media` VALUES (11,1,'carousel_accueil','cover1.png',NULL,NULL);
INSERT INTO `media` VALUES (12,2,'carousel_accueil','video.mp4',NULL,NULL);
INSERT INTO `media` VALUES (13,1,'carousel_acceuil','cover1.png',NULL,NULL);
INSERT INTO `media` VALUES (14,1,'icone_actualite','actualite_menu.png','actualité',NULL);
INSERT INTO `media` VALUES (15,1,'icone_ressource','ressource_menu.png','ressource',NULL);
INSERT INTO `media` VALUES (16,1,'image_vignette_consulting','image_vignette_consulting.png',NULL,NULL);
INSERT INTO `media` VALUES (17,1,'image_vignette_desing','image_vignette_desing.png',NULL,NULL);
INSERT INTO `media` VALUES (18,1,'image_vignette_telecom','image_vignette_telecom.png',NULL,NULL);
INSERT INTO `media` VALUES (19,1,'image_vignette_CLOUD_DATA','image_vignette_cloud_data.png',NULL,NULL);
INSERT INTO `media` VALUES (20,1,'image_vignette_digital_innovation','image_vignette_digital_innovation.png',NULL,NULL);
INSERT INTO `media` VALUES (21,1,'carousel','carousel1.png','carousel2',NULL);
INSERT INTO `media` VALUES (22,1,'carousel','carousel2.png','carousel2',NULL);
INSERT INTO `media` VALUES (23,2,'video_actualité','video1.mp4','actualité',NULL);
INSERT INTO `media` VALUES (24,2,'video_actualité','video2.mp4','actualité',NULL);
INSERT INTO `media` VALUES (25,2,'video_actualité','video4.mp4','actualité',NULL);
INSERT INTO `media` VALUES (26,2,'video_actualité','video5.mp4','actualité',NULL);
INSERT INTO `media` VALUES (27,1,'footer','footer1.png','footer',NULL);
INSERT INTO `media` VALUES (28,1,'footer','footer2.png','footer',NULL);
INSERT INTO `media` VALUES (29,1,'footer','footer3.png','footer',NULL);
INSERT INTO `media` VALUES (30,1,'footer','footer4.png','footer',NULL);
INSERT INTO `media` VALUES (31,1,'footer','footer5.png','footer',NULL);
INSERT INTO `media` VALUES (32,1,'footer','footer6.png','footer',NULL);
INSERT INTO `media` VALUES (33,1,'footer','footer7.png','footer',NULL);
INSERT INTO `media` VALUES (34,1,'footer','footer8.png','footer',NULL);
INSERT INTO `media` VALUES (35,1,'footer','footer9.png','footer',NULL);
INSERT INTO `media` VALUES (36,1,'consulting','consulting.png',NULL,NULL);
INSERT INTO `media` VALUES (37,1,'cloud_data','cloud_data.png',NULL,NULL);
INSERT INTO `media` VALUES (38,1,'digital_innovation','digital_innovation.png',NULL,NULL);
INSERT INTO `media` VALUES (39,1,'telecom','telecom.png',NULL,NULL);
INSERT INTO `media` VALUES (40,1,'cyber_security','cyber_security.png',NULL,NULL);
INSERT INTO `media` VALUES (41,1,'egouvernance','egouvernance.png',NULL,NULL);
INSERT INTO `media` VALUES (42,1,'engineering','engineering.png',NULL,NULL);
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 
CREATE TABLE `newsletter` (
  `NEW_ID` int NOT NULL AUTO_INCREMENT,
  `NEW_LIBELLE` varchar(1000) NOT NULL,
  `NEW_STATUS` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`NEW_ID`),
  UNIQUE KEY `NEWSLETTER_PK` (`NEW_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rezo`
--

DROP TABLE IF EXISTS `rezo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 
CREATE TABLE `rezo` (
  `REZ_ID` int NOT NULL AUTO_INCREMENT,
  `REZ_NOM` varchar(1000) NOT NULL,
  `REZ_ICONE` varchar(1000) DEFAULT NULL,
  `REZ_URL` varchar(1000) NOT NULL,
  PRIMARY KEY (`REZ_ID`),
  UNIQUE KEY `REZO_PK` (`REZ_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rezo`
--

LOCK TABLES `rezo` WRITE;
/*!40000 ALTER TABLE `rezo` DISABLE KEYS */;
/*!40000 ALTER TABLE `rezo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rubrique`
--

DROP TABLE IF EXISTS `rubrique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 
CREATE TABLE `rubrique` (
  `RUB_ID` int NOT NULL AUTO_INCREMENT,
  `TPL_ID` int DEFAULT NULL,
  `SIT_ID` int DEFAULT NULL,
  `STA_ID` int DEFAULT NULL,
  `RUB_ICONE_ID` bigint NOT NULL,
  `RUB_VIGNETTE_ID` bigint DEFAULT NULL,
  `RUB_IMG_ID` bigint DEFAULT NULL,
  `RUB_ORDRE` int NOT NULL,
  `RUB_LIBELLE` varchar(1000) NOT NULL,
  `RUB_TITRE` varchar(5000) NOT NULL,
  `RUB_CONTENU` text NOT NULL,
  `RUB_UNE` tinyint(1) DEFAULT '0',
  `RUB_AVANT` tinyint(1) DEFAULT '0',
  `RUB_BACKGROUND` varchar(255) NOT NULL,
  `RUB_FONT_NAME` varchar(255) NOT NULL,
  `RUB_FONT_SIZE` smallint NOT NULL,
  `RUB_FONT_COLOR` varchar(255) NOT NULL,
  `RUB_META_TITLE` varchar(1000) DEFAULT NULL,
  `RUB_META_DESCRIPTION` varchar(1000) DEFAULT NULL,
  `RUB_DATE_PUBLICATION` datetime NOT NULL,
  `RUB_DATE_PARUTION` datetime NOT NULL,
  `RUB_DATE_EXPIRATION` datetime DEFAULT NULL,
  `a_sous_rubrique` smallint unsigned DEFAULT NULL,
  `url_page` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`RUB_ID`),
  UNIQUE KEY `RUBRIQUE_PK` (`RUB_ID`),
  KEY `RELATION_3_FK` (`SIT_ID`),
  KEY `RELATION_5_FK` (`STA_ID`),
  KEY `RELATION_14_FK` (`TPL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rubrique`
--

LOCK TABLES `rubrique` WRITE;
/*!40000 ALTER TABLE `rubrique` DISABLE KEYS */;
INSERT INTO `rubrique` VALUES (1,2,1,1,2,NULL,3,2,'Expertises','Nos expertises','Notre Pôle HealthCare accompagne nos clients, publics et privés, dans le choix, l’achat, le déploiement, le paramétrage des matériels et dispositifs médicaux et hospitaliers. Aussi bien pour des établissements en construction qu’en réhabilitation.\nLa bonne connaissance de nos consultants de la sphère médicale, une adaptabilité sans cesse renouvelée aux exigences spécifiques du marché, la collaboration exclusive de partenaires prestigieux du secteur, ont fait de nous le partenaire privilégié du monde médical, hospitalo-universitaire ou clinique. ',0,0,'bg-couleur-wc-expertise','Montserrat',40,'texte-couleur-blanche','Les expertises de WCG RDC','Les expertises de l\'entreprise World Corp Group RDC','2023-02-02 14:52:18','2023-02-02 14:52:18',NULL,1,'ulrex');
INSERT INTO `rubrique` VALUES (2,2,1,1,4,NULL,5,3,'Secteurs','Nos secteurs d\'activités','jksdjfsdjfsdjjkhdsfhjfjjhsjkdjgfsjkgjkfdsjkgfjdkgjsdfjkgjksdfjkgjksdjgkjksdlf',0,0,'bg-couleur-wc-secteur','Montserrat',40,'texte-couleur-blanche','Les secteurs d\'activités de WCG RDC','Les secteur d\'activités de l\'entreprise World Corp Group RDC','2023-02-02 14:52:18','2023-02-02 14:52:18',NULL,1,'ulrex');
INSERT INTO `rubrique` VALUES (3,2,1,1,6,NULL,7,4,'Innovations','Nos projets innovants','jksdjfsdjfsdjjkhdsfhjfjjhsjkdjgfsjkgjkfdsjkgfjdkgjsdfjkgjksdfjkgjksdjgkjksdlf',0,0,'bg-couleur-wc-innovantion','Montserrat',40,'texte-couleur-blanche','Les projets innovants de WCG RDC','Les projets innovants de l\'entreprise World Corp Group RDC','2023-02-02 14:52:18','2023-02-02 14:52:18',NULL,0,'ulrex');
INSERT INTO `rubrique` VALUES (4,1,1,1,8,NULL,11,1,'','','',1,0,'bg-couleur-wc-home','Montserrat',40,'texte-couleur-blanche','Site Internet de WCG RDC','WCG est une entreprise de consulting et de projets innovants','2023-02-02 14:52:18','2023-02-02 14:52:18',NULL,0,'ulrex');
INSERT INTO `rubrique` VALUES (5,4,1,1,9,NULL,13,5,'Recrutements','Rejoignez-nous!','OFFRES D’EMPLOI',1,0,'bg-couleur-wc-recrutement','Montserrat',40,'texte-couleur-blanche','Rejoignez notre entreprise','Découvrez nos offres','2023-02-02 14:52:18','2023-02-02 14:52:18',NULL,0,'ulrex');
INSERT INTO `rubrique` VALUES (6,3,1,1,14,NULL,NULL,6,'Actualités','Actualités','POURQUOI LIBRA N’EST PAS UNE CRYPTOMONNAIE?\nPar Florian Darras ( Opportunités Technos )\n\nDifficile de passer à côté de Facebook et de son projet de monnaie numérique Libra cette semaine, tant le sujet inonde la presse et les réseaux sociaux depuis la publication de son livre blanc mardi.\nLes mots \"blockchain\" et \"cryptomonnaie\" reviennent sur le devant de la scène. Mais ne tombez pas dans l\'écueil suivant : la Libra n\'a rien d\'un Bitcoin.\nPour le respecté Andreas Antonopoulos, célèbre pour son travail de vulgarisation dans le domaine des cryptos depuis 2012, la Libra n\'est en rien une cryptomonnaie qui reposerait sur une blockchain ouverte.',NULL,0,'bground-couleur-wc-actualite','Montserrat',40,'texte-couleur-blanche','Actualité','Actualité','2023-02-02 14:52:18','2023-02-02 14:52:18',NULL,0,'ulrex');
INSERT INTO `rubrique` VALUES (7,3,1,1,15,NULL,NULL,7,'Ressoources','Nos ressources','lorem ressources',NULL,0,'bg-couleur-wc-ressource','Montserrat',40,'texte-couleur-blanche','Ressources','Ressources','2023-02-02 14:52:18','2023-02-02 14:52:18',NULL,0,'ulrex');
/*!40000 ALTER TABLE `rubrique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site`
--

DROP TABLE IF EXISTS `site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 
CREATE TABLE `site` (
  `SIT_ID` int NOT NULL AUTO_INCREMENT,
  `STA_ID` int DEFAULT NULL,
  `SIT_LIBELLE` varchar(1000) NOT NULL,
  `SIT_FAV_ICON` varchar(1000) DEFAULT NULL,
  `SIT_META_TITLE` varchar(1000) DEFAULT NULL,
  `SIT_META_DESCRIPTION` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`SIT_ID`),
  UNIQUE KEY `SITE_PK` (`SIT_ID`),
  KEY `RELATION_7_FK` (`STA_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site`
--

LOCK TABLES `site` WRITE;
/*!40000 ALTER TABLE `site` DISABLE KEYS */;
INSERT INTO `site` VALUES (1,1,'World Corp Group','wcg_favicon.ico','WCG - RDC','Site internet de la société World Corp Group, entreprise de consulting et de projets innovants');
/*!40000 ALTER TABLE `site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sous_rubrique`
--

DROP TABLE IF EXISTS `sous_rubrique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 
CREATE TABLE `sous_rubrique` (
  `SRU_ID` int NOT NULL AUTO_INCREMENT,
  `TPL_ID` int DEFAULT NULL,
  `RUB_ID` int DEFAULT NULL,
  `STA_ID` int DEFAULT NULL,
  `SRU_ICONE_ID` bigint DEFAULT NULL,
  `SRU_VIGNETTE_ID` bigint DEFAULT NULL,
  `SRU_IMG_ID` bigint DEFAULT NULL,
  `SRU_ORDRE` int NOT NULL,
  `SRU_LIBELLE` varchar(1000) NOT NULL,
  `SRU_TITRE` varchar(1000) NOT NULL,
  `SRU_CONTENU` text NOT NULL,
  `SRU_UNE` tinyint(1) DEFAULT '0',
  `SRU_AVANT` tinyint(1) DEFAULT '0',
  `SRU_BACKGROUND` varchar(255) DEFAULT NULL,
  `SRU_FONT_NAME` varchar(255) DEFAULT NULL,
  `SRU_FONT_SIZE` smallint DEFAULT NULL,
  `SRU_FONT_COLOR` varchar(255) DEFAULT NULL,
  `SRU_META_TITLE` varchar(1000) DEFAULT NULL,
  `SRU_META_DESCRIPTION` varchar(10000) DEFAULT NULL,
  `SRU_DATE_PUBLICATION` datetime NOT NULL,
  `SRU_DATE_PARUTION` datetime DEFAULT NULL,
  `SRU_DATE_EXPIRATION` datetime DEFAULT NULL,
  `SIT_ID` int unsigned DEFAULT '1',
  PRIMARY KEY (`SRU_ID`),
  UNIQUE KEY `SOUS_RUBRIQUE_PK` (`SRU_ID`),
  KEY `RELATION_4_FK` (`RUB_ID`),
  KEY `RELATION_6_FK` (`STA_ID`),
  KEY `RELATION_15_FK` (`TPL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sous_rubrique`
--

LOCK TABLES `sous_rubrique` WRITE;
/*!40000 ALTER TABLE `sous_rubrique` DISABLE KEYS */;
INSERT INTO `sous_rubrique` VALUES (1,2,1,1,0,17,36,1,'CONSULTING','CONSULTING','Nous accompagnons, très en amont de projets, nos clients dans leurs démarches de transformation digitale et d’optimisation de leur stratégie numérique. ',NULL,1,'#701475','roboto',12,'#701475','Meta titre','Meta description','2023-02-02 14:52:18','2023-02-02 14:52:18','2023-02-02 14:52:18',1);
INSERT INTO `sous_rubrique` VALUES (2,2,1,1,0,16,37,2,'CLOUD & DATA','CLOUD & DATA','Notre savoir-faire se décline à travers une gamme de prestations de services pour accompagner nos clients et partenaires :',NULL,1,'#701475','roboto',12,'#701475','Meta titre','Meta description','2023-02-02 14:52:18','2023-02-02 14:52:18','2023-02-02 14:52:18',1);
INSERT INTO `sous_rubrique` VALUES (3,2,1,1,0,18,38,3,'DIGITAL & INNOVATION','DIGITAL & INNOVATION','-Implémentation des prototypes (POC) ;\n-Pilotage des projets complexes de bout en bout ;\n-Etc.',NULL,1,'#701475','roboto',12,'#701475','Meta titre','Meta description','2023-02-02 14:52:18','2023-02-02 14:52:18','2023-02-02 14:52:18',1);
INSERT INTO `sous_rubrique` VALUES (4,2,1,1,0,19,39,4,'TELECOM  desc','TELECOM ','Télécom contenue',NULL,1,'#701475','roboto',12,'#701475',NULL,NULL,'2023-02-02 14:52:18','2023-02-02 14:52:18','2023-02-02 14:52:18',1);
INSERT INTO `sous_rubrique` VALUES (5,2,1,1,NULL,20,38,5,'DIGITAL & INNOVATION desc','DIGITAL & INNOVATION','Nous accompagnons nos clients dans l’implémentation et le maintien en conditions opérationnelles de leurs plateformes digitales ou des services digitaux en concrétisant leurs projets.',NULL,0,'#701475','roboto',12,'#701475','Meta titre',NULL,'2023-02-02 14:52:18','2023-02-02 14:52:18','2023-02-02 14:52:18',1);
INSERT INTO `sous_rubrique` VALUES (6,2,2,1,NULL,NULL,40,1,'Cyber security desc','Cyber security','Cyber security contenu',0,0,'#701475','roboto',12,'#3F079C','Meta titre',NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (7,2,2,1,NULL,NULL,41,2,'e-Governance desc','e-Governance','e-Governance contenu',0,0,'#701475','#701475',NULL,NULL,NULL,NULL,'2023-02-02 14:52:18','2023-02-02 14:52:18','2023-02-02 14:52:18',1);
INSERT INTO `sous_rubrique` VALUES (8,2,2,1,NULL,NULL,42,3,'engineering desc ','engineering ','engineering contenu ',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (9,7,5,1,NULL,NULL,NULL,1,'Ouverture : 04-11-2022 / clôture : 26-12-2022','RECRUTEMENT DÉVELOPPEUR  JAVA FULL-STACK (H/F)','Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement, l\'évolution et l\'intégration des API. ',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (10,7,5,1,NULL,NULL,NULL,2,'Ouverture : 04-11-2022 / clôture : 26-12-2022','RECRUTEMENT chef de projet','Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement, l\'évolution et l\'intégration des API. ',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (11,7,5,1,NULL,NULL,NULL,3,'Ouverture : 04-11-2022 / clôture : 26-12-2022','RECRUTEMENT webdesigner','Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement, l\'évolution et l\'intégration des API. ',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (12,7,5,1,NULL,NULL,NULL,4,'Ouverture : 04-11-2022 / clôture : 26-12-2022','RECRUTEMENT professionnel dans le MARKRTING digital','Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement, l\'évolution et l\'intégration des API. ',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (13,6,3,1,NULL,NULL,NULL,1,'carousel actualité','carousel actualité','Lorem Ipsum Lorem Ipsum Lorem Ipsum\nLorem Ipsum Lorem Ipsum Lorem Ipsum\nLorem Ipsum Lorem Ipsum Lorem Ipsum\nLorem Ipsum Lorem Ipsum Lorem Ipsum--',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (14,6,3,1,NULL,NULL,NULL,2,'grid un','grid un','Lorem Ipsum  Lorem Ipsum\nLorem Ipsum  Lorem Ipsum\nLorem Ipsum  Lorem Ipsum',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (15,6,3,1,NULL,NULL,NULL,3,'grid 2','grid 2','Lorem Ipsum  Lorem Ipsum\nLorem Ipsum  Lorem Ipsum\nLorem Ipsum  Lorem Ipsum',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (16,6,3,1,NULL,NULL,NULL,4,' grid 3','grid 3','Lorem Ipsum  Lorem Ipsum\nLorem Ipsum  Lorem Ipsum\nLorem Ipsum  Lorem Ipsum',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (17,NULL,NULL,1,NULL,NULL,21,1,'carousel','carousel','carousel1.png',1,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (18,0,NULL,1,NULL,NULL,22,2,'carousel2','carousel','carousel2.png',1,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (19,0,NULL,1,NULL,NULL,NULL,1,'home','World Corp Group RDC, ','est une société de consulting et de développement de projets innovants, spécialiste en solutions SMAC (Social, Mobile, Analytics, Cloud).\nNous accompagnons nos clients dans la mise en place des solutions SMAC et le développement sur mesure de leur stratégie digitale et multicanale pour une expérience numérique réussie. ',0,1,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (20,0,6,1,NULL,NULL,23,1,'actualite','actualité','actualité',0,1,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (21,0,6,1,NULL,NULL,24,2,'actualite','actualité','actualité',0,1,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (22,0,6,1,NULL,NULL,25,3,'actualité','actualité','actualité',0,1,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (24,0,6,1,NULL,NULL,26,4,'actualité','actualité','actualité',0,1,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (25,0,NULL,1,27,NULL,NULL,1,'footer','footer','footer',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (26,0,0,1,28,NULL,NULL,2,'footer','footer','footer',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (27,0,0,1,29,NULL,NULL,3,'footer','footer','footer',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (28,NULL,NULL,1,30,NULL,NULL,4,'footer','footer','footer',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (29,NULL,NULL,1,31,NULL,NULL,5,'footer','footer','footer',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (30,NULL,NULL,1,32,NULL,NULL,6,'footer','footer','footer',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (31,NULL,NULL,1,33,NULL,NULL,7,'footer','footer','footer',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (32,NULL,NULL,1,34,NULL,NULL,8,'footer','footer','footer',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (33,NULL,NULL,1,35,NULL,NULL,9,'footer','footer','footer',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (34,7,5,1,NULL,NULL,NULL,1,'Ouverture : 04-11-2022 / clôture : 26-12-2022','RECRUTEMENT DÉVELOPPEUR JAVA FULL-STACK (H/F)','Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement, l\'évolution et l\'intégration des API.',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
INSERT INTO `sous_rubrique` VALUES (35,7,5,1,NULL,NULL,NULL,2,'Ouverture : 04-11-2022 / clôture : 26-12-2022','RECRUTEMENT DÉVELOPPEUR JAVA FULL-STACK (H/F)','Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement, l\'évolution et l\'intégration des API.',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL,1);
/*!40000 ALTER TABLE `sous_rubrique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 
CREATE TABLE `status` (
  `STA_ID` int NOT NULL AUTO_INCREMENT,
  `STA_LIBELLE` varchar(1000) NOT NULL,
  PRIMARY KEY (`STA_ID`),
  UNIQUE KEY `STATUS_PK` (`STA_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'Actif');
INSERT INTO `status` VALUES (2,'Inactif');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `template`
--

DROP TABLE IF EXISTS `template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 
CREATE TABLE `template` (
  `TPL_ID` int NOT NULL AUTO_INCREMENT,
  `TPL_LIBELLE` varchar(1000) NOT NULL,
  `TPL_RESSOURCES` varchar(1000) NOT NULL,
  PRIMARY KEY (`TPL_ID`),
  UNIQUE KEY `TEMPLATE_PK` (`TPL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `template`
--

LOCK TABLES `template` WRITE;
/*!40000 ALTER TABLE `template` DISABLE KEYS */;
INSERT INTO `template` VALUES (1,'homepage','home.php');
INSERT INTO `template` VALUES (2,'little_content','little_content.php');
INSERT INTO `template` VALUES (3,'news','news.php');
INSERT INTO `template` VALUES (4,'hiring','hiring.php');
INSERT INTO `template` VALUES (5,'legal_content','legal_content.php');
INSERT INTO `template` VALUES (6,'resource_template','resource.php');
INSERT INTO `template` VALUES (7,'hiring_detail','hiring_detail.php');
/*!40000 ALTER TABLE `template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_media`
--

DROP TABLE IF EXISTS `type_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 
CREATE TABLE `type_media` (
  `TYM_ID` int NOT NULL AUTO_INCREMENT,
  `TYM_LIBELLE` varchar(1000) NOT NULL,
  PRIMARY KEY (`TYM_ID`),
  UNIQUE KEY `TYPE_MEDIA_PK` (`TYM_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_media`
--

LOCK TABLES `type_media` WRITE;
/*!40000 ALTER TABLE `type_media` DISABLE KEYS */;
INSERT INTO `type_media` VALUES (1,'image');
INSERT INTO `type_media` VALUES (2,'vidéo');
INSERT INTO `type_media` VALUES (3,'icône');
INSERT INTO `type_media` VALUES (4,'favico');
INSERT INTO `type_media` VALUES (5,'url');
/*!40000 ALTER TABLE `type_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 
CREATE TABLE `users` (
  `USR_ID` int NOT NULL AUTO_INCREMENT,
  `USR_FRIST_NAME` varchar(1000) DEFAULT NULL,
  `USR_LAST_NAME` varchar(1000) NOT NULL,
  `USR_SURNAME` varchar(1000) DEFAULT NULL,
  `USR_LOGIN` varchar(255) NOT NULL,
  `USR_PWD` varchar(255) NOT NULL,
  `USR_LAST_SESSION` datetime NOT NULL,
  `USR_TOKEN` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`USR_ID`),
  UNIQUE KEY `USERS_PK` (`USR_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `V_Contenu_Expertise`
--

/*!50001 DROP VIEW IF EXISTS `V_Contenu_Expertise`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`jaco`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `V_Contenu_Expertise` AS select `media`.`MED_RESSOURCE` AS `MED_RESSOURCE`,`rubrique`.`RUB_TITRE` AS `RUB_TITRE`,`rubrique`.`RUB_CONTENU` AS `RUB_CONTENU`,`rubrique`.`RUB_META_TITLE` AS `RUB_META_TITLE` from ((`rubrique` join `status` on((`status`.`STA_ID` = `rubrique`.`STA_ID`))) join `media` on((`rubrique`.`RUB_IMG_ID` = `media`.`MED_ID`))) where ((`rubrique`.`RUB_ID` = 1) and (`status`.`STA_ID` = 1)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `V_Contenu_Nos_Secteur`
--

/*!50001 DROP VIEW IF EXISTS `V_Contenu_Nos_Secteur`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`jaco`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `V_Contenu_Nos_Secteur` AS select `media`.`MED_RESSOURCE` AS `MED_RESSOURCE`,`rubrique`.`RUB_TITRE` AS `RUB_TITRE`,`rubrique`.`RUB_CONTENU` AS `RUB_CONTENU`,`rubrique`.`RUB_META_TITLE` AS `RUB_META_TITLE` from ((`rubrique` join `status` on((`status`.`STA_ID` = `rubrique`.`STA_ID`))) join `media` on((`rubrique`.`RUB_IMG_ID` = `media`.`MED_ID`))) where ((`rubrique`.`RUB_ID` = 2) and (`status`.`STA_ID` = 1)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `V_Contenu_projet_innovant`
--

/*!50001 DROP VIEW IF EXISTS `V_Contenu_projet_innovant`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`jaco`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `V_Contenu_projet_innovant` AS select `media`.`MED_RESSOURCE` AS `MED_RESSOURCE`,`rubrique`.`RUB_TITRE` AS `RUB_TITRE`,`rubrique`.`RUB_CONTENU` AS `RUB_CONTENU`,`rubrique`.`RUB_META_TITLE` AS `RUB_META_TITLE` from ((`rubrique` join `status` on((`status`.`STA_ID` = `rubrique`.`STA_ID`))) join `media` on((`rubrique`.`RUB_IMG_ID` = `media`.`MED_ID`))) where ((`rubrique`.`RUB_ID` = 3) and (`status`.`STA_ID` = 1)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `V_Contenu_recrutement`
--

/*!50001 DROP VIEW IF EXISTS `V_Contenu_recrutement`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`jaco`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `V_Contenu_recrutement` AS select `media`.`MED_RESSOURCE` AS `MED_RESSOURCE`,`rubrique`.`RUB_TITRE` AS `RUB_TITRE`,`rubrique`.`RUB_CONTENU` AS `RUB_CONTENU`,`rubrique`.`RUB_META_TITLE` AS `RUB_META_TITLE` from ((`rubrique` join `status` on((`status`.`STA_ID` = `rubrique`.`STA_ID`))) join `media` on((`rubrique`.`RUB_IMG_ID` = `media`.`MED_ID`))) where ((`rubrique`.`RUB_ID` = 5) and (`status`.`STA_ID` = 1)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `V_Menu_Princepal`
--

/*!50001 DROP VIEW IF EXISTS `V_Menu_Princepal`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`jaco`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `V_Menu_Princepal` AS select `r`.`RUB_ID` AS `RUB_ID`,`r`.`a_sous_rubrique` AS `a_sous_rubrique`,`r`.`url_page` AS `url_page`,`r`.`RUB_ICONE_ID` AS `RUB_ICONE_ID`,`r`.`RUB_LIBELLE` AS `RUB_LIBELLE`,`r`.`RUB_BACKGROUND` AS `RUB_BACKGROUND`,`r`.`RUB_FONT_NAME` AS `RUB_FONT_NAME`,`r`.`RUB_FONT_SIZE` AS `RUB_FONT_SIZE`,`r`.`RUB_FONT_COLOR` AS `RUB_FONT_COLOR`,`m`.`MED_RESSOURCE` AS `med_ressource` from ((`rubrique` `r` join `media` `m`) join `site` `s`) where ((`m`.`MED_ID` = `r`.`RUB_ICONE_ID`) and (`r`.`SIT_ID` = `s`.`SIT_ID`) and (`s`.`SIT_ID` = 1)) order by `r`.`RUB_ORDRE` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `V_Sous_Menu_Exp`
--

/*!50001 DROP VIEW IF EXISTS `V_Sous_Menu_Exp`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`jaco`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `V_Sous_Menu_Exp` AS select `sous_rubrique`.`SRU_ORDRE` AS `SRU_ORDRE`,`sous_rubrique`.`SRU_TITRE` AS `SRU_TITRE` from (`sous_rubrique` join `status` on((`status`.`STA_ID` = `sous_rubrique`.`STA_ID`))) where ((`sous_rubrique`.`RUB_ID` = 1) and (`sous_rubrique`.`STA_ID` = 1)) order by `sous_rubrique`.`SRU_ORDRE` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `V_Sous_Menu_Sect`
--

/*!50001 DROP VIEW IF EXISTS `V_Sous_Menu_Sect`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`jaco`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `V_Sous_Menu_Sect` AS select `sous_rubrique`.`SRU_ORDRE` AS `SRU_ORDRE`,`sous_rubrique`.`SRU_TITRE` AS `SRU_TITRE` from (`sous_rubrique` join `status` on((`status`.`STA_ID` = `sous_rubrique`.`STA_ID`))) where ((`sous_rubrique`.`RUB_ID` = 2) and (`sous_rubrique`.`STA_ID` = 1)) order by `sous_rubrique`.`SRU_ORDRE` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `V_home_page_carousel`
--

/*!50001 DROP VIEW IF EXISTS `V_home_page_carousel`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`jaco`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `V_home_page_carousel` AS select `media`.`MED_RESSOURCE` AS `MED_RESSOURCE` from (`media` join `rubrique` on((`media`.`MED_ID` = `rubrique`.`RUB_IMG_ID`))) where ((`rubrique`.`RUB_UNE` = 1) and (`rubrique`.`SIT_ID` = 1)) union select `media`.`MED_RESSOURCE` AS `MED_RESSOURCE` from (`media` join `sous_rubrique` `SRU` on((`media`.`MED_ID` = `SRU`.`SRU_IMG_ID`))) where ((`SRU`.`SRU_UNE` = 1) and (`SRU`.`STA_ID` = 1)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `V_home_section_Une`
--

/*!50001 DROP VIEW IF EXISTS `V_home_section_Une`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`jaco`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `V_home_section_Une` AS select `sous_rubrique`.`SRU_TITRE` AS `SRU_TITRE`,`sous_rubrique`.`SRU_CONTENU` AS `SRU_CONTENU` from `sous_rubrique` where (`sous_rubrique`.`SRU_LIBELLE` = 'home') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-21 17:10:03
