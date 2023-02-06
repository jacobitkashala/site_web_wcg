-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: wcg_site_web_database
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.22.04.2

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

DROP DATABASE IF EXISTS wcg_site_web_databases;
CREATE DATABASE wcg_site_web_databases;
use wcg_site_web_databases;
--
-- Table structure for table `journal_rubrique`
--

DROP TABLE IF EXISTS `journal_rubrique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,4,'favico','favico.ico',NULL,NULL),(2,1,'expertises_menu','expertises_menu.png','Expertises',NULL),(3,1,'expertises_fond','expertises_fond.png',NULL,NULL),(4,1,'secteurs_menu','secteurs_menu.png','Secteurs',NULL),(5,1,'secteurs_fond','secteurs_fond.png',NULL,NULL),(6,1,'innovations_menu','innovations_menu.png','Innovations',NULL),(7,1,'innovations_fond','innovations_fond.png',NULL,NULL),(8,1,'Homme_menu','Home_menu.png','Accueil',NULL),(9,1,'hiring_menu','hiring_menu.png','Recrutements',NULL),(10,1,'hiring_fond','hiring_fond.png',NULL,NULL),(11,1,'carousel_accueil','cover1.png',NULL,NULL),(12,2,'carousel_accueil','video.mp4',NULL,NULL),(13,1,'carousel_acceuil','cover1.png',NULL,NULL),(14,1,'icone_actualite','actualite_menu.png','actualité',NULL),(15,1,'icone_ressource','ressource_menu.png','ressource',NULL),(16,1,'image_vignette_consulting','image_vignette_consulting.png',NULL,NULL),(17,1,'image_vignette_desing','image_vignette_desing.png',NULL,NULL),(18,1,'image_vignette_telecom','image_vignette_telecom.png',NULL,NULL),(19,1,'image_vignette_CLOUD_DATA','image_vignette_cloud_data.png',NULL,NULL),(20,1,'image_vignette_digital_innovation','image_vignette_digital_innovation.png',NULL,NULL);
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
INSERT INTO `rubrique` VALUES (1,2,1,1,2,NULL,3,2,'Expertises','Nos expertises','jksdjfsdjfsdjjkhdsfhjfjjhsjkdjgfsjkgjkfdsjkgfjdkgjsdfjkgjksdfjkgjksdjgkjksdlf',0,0,'#BF24CO','Montserrat',40,'#FFFFFF','Les expertises de WCG RDC','Les expertises de l\'entreprise World Corp Group RDC','2023-02-02 14:52:18','2023-02-02 14:52:18',NULL),(2,2,1,1,4,NULL,5,3,'Secteurs','Nos secteurs d\'activités','jksdjfsdjfsdjjkhdsfhjfjjhsjkdjgfsjkgjkfdsjkgfjdkgjsdfjkgjksdfjkgjksdjgkjksdlf',0,0,'#3F079C','Montserrat',40,'#FFFFFF','Les secteurs d\'activités de WCG RDC','Les secteur d\'activités de l\'entreprise World Corp Group RDC','2023-02-02 14:52:18','2023-02-02 14:52:18',NULL),(3,2,1,1,6,NULL,7,4,'Innovations','Nos projets innovants','jksdjfsdjfsdjjkhdsfhjfjjhsjkdjgfsjkgjkfdsjkgfjdkgjsdfjkgjksdfjkgjksdjgkjksdlf',0,1,'#2522F9','Montserrat',40,'#FFFFFF','Les projets innovants de WCG RDC','Les projets innovants de l\'entreprise World Corp Group RDC','2023-02-02 14:52:18','2023-02-02 14:52:18',NULL),(4,1,1,1,8,NULL,11,1,'','','',1,1,'#FFFFFF','Montserrat',40,'#FFFFFF','Site Internet de WCG RDC','WCG est une entreprise de consulting et de projets innovants','2023-02-02 14:52:18','2023-02-02 14:52:18',NULL),(5,4,1,1,9,NULL,13,5,'Recrutements','Rejoignez-nous!','jksdjfsdjfsdjjkhdsfhjfjjhsjkdjgfsjkgjkfdsjkgfjdkgjsdfjkgjksdfjkgjksdjgkjksdlf',1,0,'#14D1B3','Montserrat',40,'#FFFFFF','Rejoignez notre entreprise','Découvrez nos offres','2023-02-02 14:52:18','2023-02-02 14:52:18',NULL),(6,3,1,1,14,NULL,NULL,6,'Actualités','Actualités','lorem actualité',NULL,0,'#14D1B3','Montserrat',40,'#FFFFFF','Actualité','Actualité','2023-02-02 14:52:18','2023-02-02 14:52:18',NULL),(7,3,1,1,15,NULL,NULL,7,'Ressoources','Nos ressources','lorem ressources',NULL,0,'#FFB400','Montserrat',40,'#FFFFFF','Ressources','Ressources','2023-02-02 14:52:18','2023-02-02 14:52:18',NULL);
/*!40000 ALTER TABLE `rubrique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site`
--

DROP TABLE IF EXISTS `site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
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
  PRIMARY KEY (`SRU_ID`),
  UNIQUE KEY `SOUS_RUBRIQUE_PK` (`SRU_ID`),
  KEY `RELATION_4_FK` (`RUB_ID`),
  KEY `RELATION_6_FK` (`STA_ID`),
  KEY `RELATION_15_FK` (`TPL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sous_rubrique`
--

LOCK TABLES `sous_rubrique` WRITE;
/*!40000 ALTER TABLE `sous_rubrique` DISABLE KEYS */;
INSERT INTO `sous_rubrique` VALUES (1,2,1,1,0,NULL,0,1,'CONSULTING','CONSULTING','World Corp Group accompagne ses clients dans leur transformation technique et/ou dans l’optimisation de leur stratégie technique très en amont en tirant parti de dernières innovations technologiques et en tenant compte d’impacts au niveau de leur système d’information. ',NULL,0,'#701475','roboto',12,'#701475','Meta titre','Meta description','2023-02-02 14:52:18','2023-02-02 14:52:18','2023-02-02 14:52:18'),(2,2,1,1,0,NULL,0,2,'CLOUD & DATA','CLOUD & DATA','Notre savoir-faire se décline à travers une gamme de prestations de services pour accompagner nos clients et partenaires :',NULL,0,'#701475','roboto',12,'#701475','Meta titre','Meta description','2023-02-02 14:52:18','2023-02-02 14:52:18','2023-02-02 14:52:18'),(3,2,1,1,0,NULL,0,3,'DIGITAL & INNOVATION','DIGITAL & INNOVATION','-Implémentation des prototypes (POC) ;\n-Pilotage des projets complexes de bout en bout ;\n-Etc.',NULL,0,'#701475','roboto',12,'#701475','Meta titre','Meta description','2023-02-02 14:52:18','2023-02-02 14:52:18','2023-02-02 14:52:18'),(4,2,1,1,0,NULL,0,4,'TELECOM  desc','TELECOM ','Télécom contenue',NULL,0,'#701475','roboto',12,'#701475',NULL,NULL,'2023-02-02 14:52:18','2023-02-02 14:52:18','2023-02-02 14:52:18'),(5,2,1,1,NULL,NULL,NULL,5,'DIGITAL & INNOVATION desc','DIGITAL & INNOVATION','DIGITAL & INNOVATION contenu',NULL,NULL,'#701475','roboto',12,'#701475','Meta titre',NULL,'2023-02-02 14:52:18','2023-02-02 14:52:18','2023-02-02 14:52:18'),(6,2,2,1,NULL,NULL,NULL,1,'Cyber security desc','Cyber security','Cyber security contenu',0,0,'#701475','roboto',12,'#3F079C','Meta titre',NULL,'2023-02-02 14:52:18',NULL,NULL),(7,2,2,1,NULL,NULL,NULL,2,'e-Governance desc','e-Governance','e-Governance contenu',0,0,'#701475','#701475',NULL,NULL,NULL,NULL,'2023-02-02 14:52:18','2023-02-02 14:52:18','2023-02-02 14:52:18'),(8,2,2,1,NULL,NULL,NULL,3,'engineering desc ','engineering ','engineering contenu ',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL),(9,4,5,1,NULL,NULL,NULL,1,'RECRUTEMENT DÉVELOPPEUR \nJAVA FULL-STACK (H/F)','RECRUTEMENT DÉVELOPPEUR  JAVA FULL-STACK (H/F)','Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement, l\'évolution et l\'intégration des API. ',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL),(10,4,5,1,NULL,NULL,NULL,2,'RECRUTEMENT chef de projet','RECRUTEMENT chef de projet','Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement, l\'évolution et l\'intégration des API. ',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL),(11,4,5,1,NULL,NULL,NULL,3,'RECRUTEMENT webdesigner','RECRUTEMENT webdesigner','Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement, l\'évolution et l\'intégration des API. ',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL),(12,4,5,1,NULL,NULL,NULL,4,'RECRUTEMENT professionnel dans le MARKRTING digital','RECRUTEMENT professionnel dans le MARKRTING digital','Pour renforcer les équipes de notre centre de développement de Kinshasa, nous cherchons à recruter un DÉVELOPPEUR JAVA FULL-STACK (H/F) pour assurer principalement le développement, l\'évolution et l\'intégration des API. ',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL),(13,6,3,1,NULL,NULL,NULL,1,'carousel actualité','carousel actualité','Lorem Ipsum Lorem Ipsum Lorem Ipsum\nLorem Ipsum Lorem Ipsum Lorem Ipsum\nLorem Ipsum Lorem Ipsum Lorem Ipsum\nLorem Ipsum Lorem Ipsum Lorem Ipsum--',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL),(14,6,3,1,NULL,NULL,NULL,2,'grid un','grid un','Lorem Ipsum  Lorem Ipsum\nLorem Ipsum  Lorem Ipsum\nLorem Ipsum  Lorem Ipsum',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL),(15,6,3,1,NULL,NULL,NULL,3,'grid 2','grid 2','Lorem Ipsum  Lorem Ipsum\nLorem Ipsum  Lorem Ipsum\nLorem Ipsum  Lorem Ipsum',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL),(16,6,3,1,NULL,NULL,NULL,4,' grid 3','grid 3','Lorem Ipsum  Lorem Ipsum\nLorem Ipsum  Lorem Ipsum\nLorem Ipsum  Lorem Ipsum',0,0,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-02 14:52:18',NULL,NULL);
/*!40000 ALTER TABLE `sous_rubrique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
INSERT INTO `status` VALUES (1,'Actif'),(2,'Inactif');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `template`
--

DROP TABLE IF EXISTS `template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
INSERT INTO `template` VALUES (1,'homepage','home.php'),(2,'little_content','little_content.php'),(3,'news','news.php'),(4,'hiring','hiring.php'),(5,'legal_content','legal_content.php'),(6,'resource_template','resource.php');
/*!40000 ALTER TABLE `template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_media`
--

DROP TABLE IF EXISTS `type_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
INSERT INTO `type_media` VALUES (1,'image'),(2,'vidéo'),(3,'icône'),(4,'favico'),(5,'url');
/*!40000 ALTER TABLE `type_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-03 17:13:54


-- Afficher le menu principal
-- SELECT 
-- 	 r.RUB_ID, r.RUB_ICONE_ID, r.RUB_LIBELLE,r.RUB_BACKGROUND,r.RUB_FONT_NAME,r.RUB_FONT_SIZE,r.RUB_FONT_COLOR, m.med_ressource FROM rubrique r, media m, site s  
-- WHERE 
-- 	m.med_id = r.rub_icone_id and r.SIT_ID = s.SIT_ID and s.SIT_ID = 1 
-- order by r.RUB_ORDRE



/*
-- action hover sur un menu principal
-- identifiant_rubrique : {1,2,4,5}
-- identifiant_status:{1,2}

SELECT SRU_ORDRE, SRU_TITRE  
  FROM sous_rubrique
  INNER JOIN status   ON status.STA_ID = sous_rubrique.STA_ID 
WHERE sous_rubrique.RUB_ID = 2 AND sous_rubrique.STA_ID = identifiant_status  
  ORDER BY SRU_ORDRE; 
*/


/*
-- action clique  sur un menu pricipal
-- identifiant_rubrique :{1,2,4,5}
-- identifiant_status:{1,2}

SELECT RUB_CONTENU,RUB_TITRE, RUB_BACKGROUND,RUB_FONT_NAME,RUB_FONT_COLOR,RUB_FONT_SIZE 
  FROM rubrique
  INNER JOIN status   ON status.STA_ID = rubrique.STA_ID 
WHERE sous_rubrique.RUB_ID = 2 AND sous_rubrique.STA_ID = identifiant_status  
  ORDER BY SRU_ORDRE;
*/

/*
-- action clique  sur un sous-menu 
-- identifiant_rubrique(1:exper,2:secteur,4:home,5:rec)

SELECT SRU_TITRE,SRU_CONTENU, SRU_FONT_NAME,SRU_FONT_SIZE,SRU_FONT_COLOR,SRU_BACKGROUND,SRU_LIBELLE 
FROM  sous_rubrique  
WHERE SRU_ID = identifiant_rubrique;
*/

/*
-- Remplir template home_page
-- Carousel 
 SELECT media.MED_RESSOURCE 
FROM media 
INNER JOIN rubrique ON media.MED_ID = rubrique.RUB_IMG_ID
WHERE media.MED_ID= rubrique.RUB_IMG_ID AND 
rubrique.RUB_UNE = 1 AND SIT_ID = 1
UNION
SELECT media.MED_RESSOURCE  

LIMIT 5



;
*/