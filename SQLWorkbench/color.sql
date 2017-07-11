-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: color
-- ------------------------------------------------------
-- Server version	5.6.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(255) DEFAULT NULL,
  `idCat` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` VALUES (1,'Qu\'est ce qu\'une couleur.',1),(2,'Couleur et symbolisme.',2),(3,'Quel mélange pour une couleur?',3),(4,'Tout autre sujet, sur la couleur.',4);
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discussion`
--

DROP TABLE IF EXISTS `discussion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discussion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titreMessage` varchar(255) DEFAULT NULL,
  `message` text,
  `dateMessage` date DEFAULT NULL,
  `pseudoCreateur` varchar(255) DEFAULT NULL,
  `pseudoRepondeur` varchar(255) DEFAULT NULL,
  `lienPhoto` varchar(255) DEFAULT NULL,
  `nombreVue` varchar(255) DEFAULT NULL,
  `postPlus` int(255) DEFAULT NULL,
  `postMoins` int(255) DEFAULT NULL,
  `reponseMessage` varchar(255) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `numMessage` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discussion`
--

LOCK TABLES `discussion` WRITE;
/*!40000 ALTER TABLE `discussion` DISABLE KEYS */;
INSERT INTO `discussion` VALUES (1,'Le noir. Est-il une couleur.','Non, le noir est l\'absence de toute couleur. Mais dans les faits, notre noir visible n\'est pas, ce que l\'on appelle un noir absolue...','2017-07-11','toto66',NULL,NULL,NULL,NULL,NULL,'1','1',1),(2,'Et le blanc?','Contrairement au noir, qui est l\'absence de toute couleur, le blanc est le produit du reflex de toute couleur. Le blanc absolue est donc un mirroir....',NULL,'toto66',NULL,NULL,NULL,3,NULL,'1','1',2),(3,'Comment je fais du orange?','Je dois peindre ma porte en orange, mais j\'en ai pas. il me reste des fonds de rouge de bleu et de jaune.',NULL,'toto66',NULL,NULL,NULL,NULL,NULL,'1','3',1),(4,'Réponse','tu mélange du jaune à rouge et tu teste',NULL,'toto66','juju8',NULL,'2',NULL,NULL,'2','3',1),(5,'Le rouge','Le rouge représente souvent le danger. pourquoi?',NULL,'toto66',NULL,NULL,NULL,NULL,NULL,'1','2',1),(6,'Reponse','le feu est rouge, ainsi que le sang...',NULL,'toto66','juju8',NULL,NULL,NULL,NULL,'2','2',1);
/*!40000 ALTER TABLE `discussion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `dateInscription` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `motDePasse` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `nombrePost` int(255) DEFAULT NULL,
  `utilisateurValid` int(255) DEFAULT NULL,
  `lienAvatar` varchar(255) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `sexe` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES (1,'ohare','thomas','2017-07-09','thomas.ohare@laposte.net','ohare25','0681818239','4',1,1,NULL,'ohare1',NULL),(2,'degaule','charles','2017-07-10','charles@orange.fr','wjlTXY','02-01-03-04-05','1',0,1,'../image/apprenti.jpg','degaule6',NULL),(3,'degaule','charles','2017-07-10','charles2@orange.fr','ZKOdbC','0201030402','1',0,1,'../image/apprenti.jpg','degaule7',NULL),(4,'juju ','robert','2017-07-10','robert@toto.ro','syGqA1','0125369852','1',0,1,'../image/apprenti.jpg','juju 8',NULL),(5,'tatcher','lili','2017-07-10','lili@orange.fr','XQNFkz','0203050809','1',0,1,'../image/apprenti.jpg','tatcher9',NULL);
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-11 17:03:36
