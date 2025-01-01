CREATE DATABASE  IF NOT EXISTS `soldanidani` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `soldanidani`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: soldanidani
-- ------------------------------------------------------
-- Server version	8.3.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `administrador` (
  `idadministrador` int NOT NULL,
  `login` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idadministrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador`
--

LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` VALUES (1,'4320','5555');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `album` (
  `idalbum` int NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `idartista` int NOT NULL,
  PRIMARY KEY (`idalbum`),
  KEY `fk_album_artista1_idx` (`idartista`),
  CONSTRAINT `fk_album_artista1` FOREIGN KEY (`idartista`) REFERENCES `artista` (`idartista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` VALUES (1,'https://m.media-amazon.com/images/I/61lMwNQGYbL._UF894,1000_QL80_.jpg','21','2011-01-19 00:00:00',1),(2,'https://i.discogs.com/w4LbMlMrV6uny2WBBy5z7HXJs8Gy99lhiPpnABZcNEM/rs:fit/g:sm/q:90/h:600/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTc3MTQ3/MTYtMTQ0ODU2NzIw/MS01MzA5LmpwZWc.jpeg','25','2015-11-20 00:00:00',1),(3,'https://upload.wikimedia.org/wikipedia/en/7/76/Adele_-_30.png','19','2008-01-28 00:00:00',1),(4,'https://m.media-amazon.com/images/I/81oMqLRXxML._UF894,1000_QL80_.jpg','÷ (Divide)','2017-03-03 00:00:00',2),(5,'https://upload.wikimedia.org/wikipedia/en/a/ad/X_cover.png','x (Multiply)','2014-06-20 00:00:00',2),(6,'https://images.genius.com/2cc388f4b1c320aa1e3f7c32db365896.1000x563x1.png','+','2011-09-09 00:00:00',2),(7,'https://upload.wikimedia.org/wikipedia/en/5/53/Beyonce_-_Lemonade_%28Official_Album_Cover%29.png','Lemonade','2016-04-23 00:00:00',3),(8,'https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Beyonc%C3%A9_-_Beyonc%C3%A9.svg/1200px-Beyonc%C3%A9_-_Beyonc%C3%A9.svg.png','Beyoncé','2013-12-13 00:00:00',3),(9,'https://m.media-amazon.com/images/I/71WqJdErEJL._UF894,1000_QL80_.jpg','4','2011-06-24 00:00:00',3),(10,'https://upload.wikimedia.org/wikipedia/en/2/2b/Bruno_Mars_-_24K_Magic_%28Official_Album_Cover%29.png','24K Magic','2016-11-18 00:00:00',4),(11,'https://jenesaispop.com/wp-content/uploads/2012/12/UnorthodoxJukebox.jpg','Unorthodox Jukebox','2012-12-06 00:00:00',4),(12,'https://m.media-amazon.com/images/I/71p2PckD5iL._UF894,1000_QL80_.jpg','Doo-Wops & Hooligans','2010-10-04 00:00:00',4),(13,'https://m.media-amazon.com/images/I/81JNBy4njYL._UF894,1000_QL80_.jpg','1989','2014-10-27 00:00:00',5),(14,'https://upload.wikimedia.org/wikipedia/en/e/e8/Taylor_Swift_-_Red.png','Red','2012-10-22 00:00:00',5),(15,'https://m.media-amazon.com/images/I/81JC4vsDIPL._UF894,1000_QL80_.jpg','Speak Now','2010-10-25 00:00:00',5),(16,'https://media.istockphoto.com/id/498733257/photo/records-in-a-row-one-in-front.jpg?s=612x612&w=0&k=20&c=VwOqF7BuKjAOx-tOLdf4YUDe-33uU01Wtuo2TUC9Ook=','prova1','2022-01-18 00:00:00',1),(17,'https://media.istockphoto.com/id/498733257/photo/records-in-a-row-one-in-front.jpg?s=612x612&w=0&k=20&c=VwOqF7BuKjAOx-tOLdf4YUDe-33uU01Wtuo2TUC9Ook=','prova1','2022-01-18 00:00:00',1);
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artista`
--

DROP TABLE IF EXISTS `artista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artista` (
  `idartista` int NOT NULL,
  `login` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `n_reprocciones` int DEFAULT NULL,
  `direcion` varchar(200) DEFAULT NULL,
  `tema` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `idtematica` int NOT NULL,
  PRIMARY KEY (`idartista`),
  KEY `fk_artista_tematica_artista1_idx` (`idtematica`),
  CONSTRAINT `fk_artista_tematica_artista1` FOREIGN KEY (`idtematica`) REFERENCES `tematica_artista` (`idtematica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artista`
--

LOCK TABLES `artista` WRITE;
/*!40000 ALTER TABLE `artista` DISABLE KEYS */;
INSERT INTO `artista` VALUES (1,'adel3','password123','Adele',0,'https://media.revistavanityfair.es/photos/63aec5180359b5c8183eac1d/1:1/w_3055,h_3055,c_limit/1406408862','Pop','Adele es una cantautora británica conocida por su poderosa voz y sus emotivas baladas, incluyendo éxitos como \"Someone Like You\" y \"Hello\".',2),(2,'e_sheeran','password456','Ed Sheeran',0,'https://hips.hearstapps.com/hmg-prod/images/ed-sheeran-GettyImages-494227430_1600.jpg','Pop','Ed Sheeran es un cantautor británico conocido por sus pegajosas canciones y su habilidad para tocar la guitarra, con éxitos como \"Shape of You\" y \"Thinking Out Loud\".',3),(3,'Beyonce_','password789','Beyoncé',0,'https://www.ondarock.it/images/artisti/beyonce-1_1698769827.jpg','R&B','Beyoncé es una superestrella global con una impresionante carrera, conocida por sus increíbles actuaciones y éxitos como \"Single Ladies\" y \"Crazy in Love\".',1),(4,'br_mars','passwordabc','Bruno Mars',0,'https://www.mondosonoro.com/wp-content/uploads/2016/11/brunomars.jpg','Funk','Bruno Mars es un talentoso cantante y bailarín estadounidense con una ecléctica combinación de estilos musicales, conocido por canciones como \"Uptown Funk\" y \"Just the Way You Are\".',2),(5,'tswift','passwordxyz','Taylor Swift',0,'https://upload.wikimedia.org/wikipedia/commons/b/b1/Taylor_Swift_at_the_2023_MTV_Video_Music_Awards_%283%29.png','Country','Taylor Swift es una cantautora estadounidense conocida por sus canciones autobiográficas y su talento.',1);
/*!40000 ALTER TABLE `artista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colleccion`
--

DROP TABLE IF EXISTS `colleccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `colleccion` (
  `idcolleccion` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `idadministrador` int NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idcolleccion`),
  KEY `fk_colleccion_administrador1_idx` (`idadministrador`),
  CONSTRAINT `fk_colleccion_administrador1` FOREIGN KEY (`idadministrador`) REFERENCES `administrador` (`idadministrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colleccion`
--

LOCK TABLES `colleccion` WRITE;
/*!40000 ALTER TABLE `colleccion` DISABLE KEYS */;
INSERT INTO `colleccion` VALUES (1,'good_music','music',1,'https://media.istockphoto.com/id/498733257/photo/records-in-a-row-one-in-front.jpg?s=612x612&w=0&k=20&c=VwOqF7BuKjAOx-tOLdf4YUDe-33uU01Wtuo2TUC9Ook='),(2,'favourite_ep','episodies',1,'https://pics.craiyon.com/2023-10-19/da0384e86aea48bd99d9996592ab9999.webp');
/*!40000 ALTER TABLE `colleccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colleccion_has_episodio`
--

DROP TABLE IF EXISTS `colleccion_has_episodio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `colleccion_has_episodio` (
  `colleccion_idcolleccion` int NOT NULL,
  `episodio_idepisiodio` int NOT NULL,
  PRIMARY KEY (`colleccion_idcolleccion`,`episodio_idepisiodio`),
  KEY `fk_colleccion_has_episodio_episodio1_idx` (`episodio_idepisiodio`),
  KEY `fk_colleccion_has_episodio_colleccion1_idx` (`colleccion_idcolleccion`),
  CONSTRAINT `fk_colleccion_has_episodio_colleccion1` FOREIGN KEY (`colleccion_idcolleccion`) REFERENCES `colleccion` (`idcolleccion`),
  CONSTRAINT `fk_colleccion_has_episodio_episodio1` FOREIGN KEY (`episodio_idepisiodio`) REFERENCES `episodio` (`idepisiodio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colleccion_has_episodio`
--

LOCK TABLES `colleccion_has_episodio` WRITE;
/*!40000 ALTER TABLE `colleccion_has_episodio` DISABLE KEYS */;
/*!40000 ALTER TABLE `colleccion_has_episodio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colleccion_has_pieza`
--

DROP TABLE IF EXISTS `colleccion_has_pieza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `colleccion_has_pieza` (
  `colleccion_idcolleccion` int NOT NULL,
  `pieza_idpieza` int NOT NULL,
  PRIMARY KEY (`colleccion_idcolleccion`,`pieza_idpieza`),
  KEY `fk_colleccion_has_pieza_pieza1_idx` (`pieza_idpieza`),
  KEY `fk_colleccion_has_pieza_colleccion1_idx` (`colleccion_idcolleccion`),
  CONSTRAINT `fk_colleccion_has_pieza_colleccion1` FOREIGN KEY (`colleccion_idcolleccion`) REFERENCES `colleccion` (`idcolleccion`),
  CONSTRAINT `fk_colleccion_has_pieza_pieza1` FOREIGN KEY (`pieza_idpieza`) REFERENCES `pieza` (`idpieza`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colleccion_has_pieza`
--

LOCK TABLES `colleccion_has_pieza` WRITE;
/*!40000 ALTER TABLE `colleccion_has_pieza` DISABLE KEYS */;
INSERT INTO `colleccion_has_pieza` VALUES (1,1),(1,2),(1,4),(2,8),(2,12);
/*!40000 ALTER TABLE `colleccion_has_pieza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `episodio`
--

DROP TABLE IF EXISTS `episodio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `episodio` (
  `idepisiodio` int NOT NULL,
  `descripcion` text,
  `fecha_publicacion` text,
  `enlace` text,
  `duracion` int DEFAULT NULL,
  `n_reproducciones` int DEFAULT NULL,
  `idpodcast` int NOT NULL,
  `idcolleccion` int DEFAULT NULL,
  PRIMARY KEY (`idepisiodio`),
  KEY `fk_episodio_podcast1_idx1` (`idpodcast`),
  KEY `fk_episodio_colleccion1_idx` (`idcolleccion`),
  CONSTRAINT `fk_episodio_colleccion1` FOREIGN KEY (`idcolleccion`) REFERENCES `colleccion` (`idcolleccion`),
  CONSTRAINT `fk_episodio_podcast1` FOREIGN KEY (`idpodcast`) REFERENCES `podcast` (`idpodcast`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `episodio`
--

LOCK TABLES `episodio` WRITE;
/*!40000 ALTER TABLE `episodio` DISABLE KEYS */;
INSERT INTO `episodio` VALUES (1,'Ep.7 Moda y psiquiatria con Giuliano Calza y el psiquiatra de Fede','24/2/2020 00:00:00',' https://open.spotify.com/episode/3IrffWS3kS0QlH58WUveoF?si=5bb8a4077754451c',74,0,9,NULL),(2,'Ep.27 Este es mi podcast favorito con Chiara Ferragni','15/7/2020 00:00:00','https://open.spotify.com/episode/0YZxCWaaLEknGpHYd8gFDk?si=017b0bb7a25944df',68,0,9,NULL),(3,'Ep.27 Este es mi podcast favorito con Chiara Ferragni','15/7/2020 00:00:00','https://open.spotify.com/episode/0YZxCWaaLEknGpHYd8gFDk?si=017b0bb7a25944df',68,0,9,NULL),(4,'Sobrepensar (overthinking) | 323','28/2/2024 00:00:00','https://open.spotify.com/episode/6VyEGjt2i9XfofvHJwcQkb?si=			4f172138fb5f4031',21,0,2,NULL),(5,'No puedo dormir| 317','17/1/2024 00:00:00','https://open.spotify.com/episode/1n3nIsUdoNENBlMvd3DNRx?				      si=a17020d5f0294780',23,0,2,NULL),(6,'Me cuesta disfrutar del momento presente | 313','12/12/2023 00:00:00','https://open.spotify.com/episode/61JfPeStGfKtTyfcfNc19T?si=		9111a5c602e04c6d',21,0,2,NULL),(7,'Dios, patria, Yunque - Estreno el 26 de febrero','21/2/2024 00:00:00',' https://open.spotify.com/episode/10FmIq9GIiWJfbo0bfMY9f?si=758e6b5378be42d5',3,0,3,NULL),(8,'Primer episodio. El silencio','26/2/2024 00:00:00','https://open.spotify.com/episode/0tgfzRxO5OVpaDK8IHFTbB?si=a12b8e6977114bc2',34,0,3,NULL),(9,'Segundo Episodio. La llegada','4/3/2024 00:00:00','https://open.spotify.com/episode/4XaxXH2QbgbxeTeSzHQjeu?si=8ebc0edadd3f49c8',30,0,3,NULL),(10,'La geopolitica de Taylor Swift, con El Orden Mundial','12/2/2024 00:00:00','https://open.spotify.com/episode/3414uogPPoZfqpp87jDGg3?si=761eeb54939c47b2',59,0,4,NULL),(11,'La geopolica de Star Wars, con El Orden Mundial','20/2/2024 00:00:00',' https://open.spotify.com/episode/150by9ljpvAkE3xyJDEasb?si=1a5c658b40b342f5',57,0,4,NULL),(12,'La geopolica del terror','5/3/2023 00:00:00',' https://open.spotify.com/episode/24BoRV8MzSvM404iPPzUpK?si=1a25da394c914c6a',57,0,4,NULL),(13,' Alvaro Velasco - Moderno de mostoles','5/3/2024 00:00:00','https://open.spotify.com/episode/23us96CHlGWn3OwnIE2oKX?	si=b469fa7dc6874294',11,0,5,NULL),(14,'Danny Boy - Gallegos','29/2/2024 00:00:00',' https://open.spotify.com/episode/1Cpzbf1FoXQY6PfwD0QXmQ?si=	640203b870fe4a39',11,0,5,NULL),(15,'Kaco - Manual de autoayuda','15/2/2024 00:00:00','https://open.spotify.com/episode/6vpSngaV4xGRpZyg805hik?	si=fe4502da469f4e41',23,0,5,NULL),(16,'62 | Feministas Al Congreso','1/4/2023 00:00:00','https://open.spotify.com/episode/1WUmzeK2WfgeFAQ8QfsZQD?si=	2cce315ba9f84a73',56,0,6,NULL),(17,'56 | Educaiguales','5/12/2021 00:00:00',' https://open.spotify.com/episode/3WK09mEtaDUX3NvjkvVIR6?si=	6e6476b5fbd8404e',44,0,6,NULL),(18,'50 | Resistencia feminista','12/7/2021 00:00:00','https://open.spotify.com/episode/0ndxBGjTWddCaLxjehAT8z?si=	4cbc6d68393d4352',44,0,6,NULL),(19,'Mas adicciones con Ruy Arroyo','6/3/2024 00:00:00','https://open.spotify.com/episode/5zi678Y9Z38g9AUqSKPsMy?	si=d87388890fa34d60',85,0,7,NULL),(20,'Mateo','28/2/2024 00:00:00','https://open.spotify.com/episode/5zi678Y9Z38g9AUqSKPsMy?si=	6167a2c8310e4348',76,0,7,NULL),(21,'El arte de perder con Diego Arroyo','15/11/2023 00:00:00','https://open.spotify.com/episode/6W9d05GzC5SpH0iXFL367s?si=e8910096e53b4592',88,0,7,NULL),(22,'The Wild Project #242 ft Andy y Lucas | El motivo real de su ruptura, Mafia en los Grammy Latinos','4/11/2023 00:00:00','https://open.spotify.com/episode/0l6NklEUVRH3CBWXsl9AkQ?si=a4794f85c93e4d92',163,0,8,NULL),(23,'Thew Wild Project #240 ft Operador Nuclear | Chernobyl y Fukushima SIN mentiras, Bomba atomica','7/11/2023 00:00:00','https://open.spotify.com/episode/0MFScI4AVX2EbFPoyagizP?si=8f97b7b8fab84322',178,0,8,NULL),(24,'The Wild Project #230 | Jordi Wild y sus problmeas de salud, Detenido el posible asesino de Tupac','4/10/2023 00:00:00',' https://open.spotify.com/episode/4xcvcSpGbvKkPzT0zWbxlv?si=dc1195df05bd4a92',213,0,8,NULL),(25,'#2113 - Christopher Rufo','5/3/2024 00:00:00',' https://open.spotify.com/episode/3t3Hdm2gJdzNp1xJE4Dbfb?si=39fd94b658824df1',143,0,1,NULL),(26,'#2111 - Katt Williams','6/3/2024 00:00:00','https://open.spotify.com/episode/6NNzJUkVjyv8JTrLPiClxH?si=037a47360ea14325',185,0,1,NULL),(27,'#2108- Tom n','24/2/2024 00:00:00','https://open.spotify.com/episode/3OctGE3XOuFJgaAztxMKFZ?si=YP9QL6vmRbGhVTmTORt51Q',183,0,1,NULL),(28,'TIII #10 Naomi Parra','4/3/2024 00:00:00','https://open.spotify.com/episode/1AgAOs5XqxMA7GrsSxMc24?si=b0d547b097c34fa3',66,0,10,NULL),(29,'TII #6 Carmen Santaella','22/1/2024 00:00:00','https://open.spotify.com/episode/27l6u8CBmTLh9iwIrqbMUG?si=ff7a8e6eebef42bf',36,0,10,NULL),(30,'TII #5 Nuria Jorda y Marta','15/12/2023 00:00:00','https://open.spotify.com/episode/1NPuNSS5bRzc2cRkoABiws?si=c4617b4e61f54775',51,0,10,NULL);
/*!40000 ALTER TABLE `episodio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingresos_artistas`
--

DROP TABLE IF EXISTS `ingresos_artistas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ingresos_artistas` (
  `idingresos` int NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `cantidad` int DEFAULT NULL,
  `idartista` int NOT NULL,
  PRIMARY KEY (`idingresos`),
  KEY `fk_ingresos_artistas_artista1_idx` (`idartista`),
  CONSTRAINT `fk_ingresos_artistas_artista1` FOREIGN KEY (`idartista`) REFERENCES `artista` (`idartista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingresos_artistas`
--

LOCK TABLES `ingresos_artistas` WRITE;
/*!40000 ALTER TABLE `ingresos_artistas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ingresos_artistas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingresos_podcast`
--

DROP TABLE IF EXISTS `ingresos_podcast`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ingresos_podcast` (
  `idpodcast` int NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpodcast`),
  CONSTRAINT `fk_table1_podcast1` FOREIGN KEY (`idpodcast`) REFERENCES `podcast` (`idpodcast`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingresos_podcast`
--

LOCK TABLES `ingresos_podcast` WRITE;
/*!40000 ALTER TABLE `ingresos_podcast` DISABLE KEYS */;
/*!40000 ALTER TABLE `ingresos_podcast` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pieza`
--

DROP TABLE IF EXISTS `pieza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pieza` (
  `idpieza` int NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `enlance_spotify` varchar(200) DEFAULT NULL,
  `n_reproducciones` int DEFAULT NULL,
  `duracion_minutos` int DEFAULT NULL,
  `duracion_segundos` int DEFAULT NULL,
  `idalbum` int NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idpieza`),
  KEY `fk_pieza_album1_idx` (`idalbum`),
  CONSTRAINT `fk_pieza_album1` FOREIGN KEY (`idalbum`) REFERENCES `album` (`idalbum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pieza`
--

LOCK TABLES `pieza` WRITE;
/*!40000 ALTER TABLE `pieza` DISABLE KEYS */;
INSERT INTO `pieza` VALUES (1,'Rolling in the Deep','https://open.spotify.com/track/4OSBTYWVwsQhGLF9NHvIbR?si=1840c76e95df4034',0,3,48,1,'https://upload.wikimedia.org/wikipedia/en/7/74/Adele_-_Rolling_in_the_Deep.png'),(2,'Someone Like You','https://open.spotify.com/track/3bNv3VuUOKgrf5hu3YcuRo?si=eb2364440de04ef5',0,4,45,1,'https://upload.wikimedia.org/wikipedia/en/7/7a/Adele_-_Someone_Like_You.png'),(3,'Set Fire to the Rain','https://open.spotify.com/track/3di5hcvxxciiqwMH1jarhY?si=f3537214222e4511',0,4,2,1,'https://i1.sndcdn.com/artworks-8ULFu6bD4KrQITve-ZxopmQ-t500x500.jpg'),(4,'Shape of You','https://open.spotify.com/track/5ULRlgiSPSKTaJN1vU9yso?si=bfa55ec1abbc4a8c',0,3,53,4,'https://upload.wikimedia.org/wikipedia/en/b/b4/Shape_Of_You_%28Official_Single_Cover%29_by_Ed_Sheeran.png'),(5,'Castle on the Hill','https://open.spotify.com/track/6PCUP3dWmTjcTtXY02oFdT?si=12305edac1c64c1d',0,4,21,4,'https://upload.wikimedia.org/wikipedia/en/2/27/Castle_On_The_Hill_%28Official_Single_Cover%29_by_Ed_Sheeran.png'),(6,'Galway Girl','https://open.spotify.com/track/0afhq8XCExXpqazXczTSve?si=5711a902e91f4438',0,2,50,4,'https://i1.sndcdn.com/artworks-000590407391-kwkc1f-t500x500.jpg'),(7,'Formation','https://open.spotify.com/track/6g0Orsxv6glTJCt4cHsRsQ?si=32f6a38fdd6c4d4c',0,3,26,7,'https://upload.wikimedia.org/wikipedia/en/7/72/Beyonce_-_Formation.png'),(8,'Sorry','https://open.spotify.com/track/0lnIJmgcUpEpe4AZACjayW?si=3a324aa3b18c4a0c',0,3,53,7,'https://i1.sndcdn.com/artworks-000161447150-gpwfel-t500x500.jpg'),(9,'Hold Up','https://open.spotify.com/track/0rzNMzZsubFcXSEh7dnem7?si=28e474f706294fe8',0,3,41,7,'https://m.media-amazon.com/images/I/716mnZd24EL._UF894,1000_QL80_.jpg'),(10,'24K Magic','https://open.spotify.com/track/6b8Be6ljOzmkOmFslEb23P?si=71793d722c034676',0,3,46,10,'https://m.media-amazon.com/images/M/MV5BYjJlMTY1MTctNTU2Yy00M2VlLWE5NGEtZD;M1YTM4OTZlYWM1XkEyXkFqcGdeQXVyNTk1NTMyNzM@._V1_.jpg'),(11,'That\'s What I Like','https://open.spotify.com/track/0KKkJNfGyhkQ5aFogxQAPU?si=5fc681c23ae3481b',0,3,26,10,'https://upload.wikimedia.org/wikipedia/en/f/f4/That%27s_What_I_Like_Remixes.jpg'),(12,'Versace on the Floor','https://open.spotify.com/track/0kN8xEmgMW9mh7UmDYHlJP?si=bfe5e64fb8a64c51',0,4,21,10,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPb30IQdQ_ye0zNQnqlfOUpPnEuJ2fBJSaQ7VqwpHAHA&s'),(13,'Shake It Off','https://open.spotify.com/track/0cqRj7pUJDkTCEsJkx8snD?si=11a3e304dccb4074',0,3,39,13,'https://pics.filmaffinity.com/Taylor_Swift_Shake_It_Off_Vaideo_musical-168003549-large.jpg'),(14,'Blank Space','https://open.spotify.com/track/1u8c2t2Cy7UBoG4ArRcF5g?si=2f6bfa33063943c9',0,3,51,13,'https://upload.wikimedia.org/wikipedia/en/7/7c/Taylor_Swift_-_Blank_Space_%28Official_Single_Cover%29.png'),(15,'Style','https://open.spotify.com/track/0ug5NqcwcFR2xrfTkc7k8e?si=2b58cced05574946',0,3,51,13,'https://upload.wikimedia.org/wikipedia/en/d/d4/Taylor_Swift_-_Style_%28Official_Single_Cover%29.png');
/*!40000 ALTER TABLE `pieza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playlist_de_canciones`
--

DROP TABLE IF EXISTS `playlist_de_canciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `playlist_de_canciones` (
  `idplaylist` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `usuario_idusuraio` int NOT NULL,
  PRIMARY KEY (`idplaylist`),
  KEY `fk_playlist_usuario1_idx` (`usuario_idusuraio`),
  CONSTRAINT `fk_playlist_usuario1` FOREIGN KEY (`usuario_idusuraio`) REFERENCES `usuario` (`idusuraio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playlist_de_canciones`
--

LOCK TABLES `playlist_de_canciones` WRITE;
/*!40000 ALTER TABLE `playlist_de_canciones` DISABLE KEYS */;
INSERT INTO `playlist_de_canciones` VALUES (1,'vibes','musica',1),(2,'chill','musica',2),(3,'classic','musica',3);
/*!40000 ALTER TABLE `playlist_de_canciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playlist_de_episodio`
--

DROP TABLE IF EXISTS `playlist_de_episodio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `playlist_de_episodio` (
  `idplaylist` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `usuario_idusuraio` int DEFAULT NULL,
  PRIMARY KEY (`idplaylist`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playlist_de_episodio`
--

LOCK TABLES `playlist_de_episodio` WRITE;
/*!40000 ALTER TABLE `playlist_de_episodio` DISABLE KEYS */;
INSERT INTO `playlist_de_episodio` VALUES (1,'travel','podcast',1),(2,'politic','podcast',2),(3,'psychologic','podcast',3);
/*!40000 ALTER TABLE `playlist_de_episodio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playlist_de_episodio_has_episodio`
--

DROP TABLE IF EXISTS `playlist_de_episodio_has_episodio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `playlist_de_episodio_has_episodio` (
  `playlist_de_episodio_idplaylist` int NOT NULL,
  `episodio_idepisiodio` int NOT NULL,
  PRIMARY KEY (`playlist_de_episodio_idplaylist`,`episodio_idepisiodio`),
  KEY `fk_playlist_de_episodio_has_episodio_episodio1_idx` (`episodio_idepisiodio`),
  KEY `fk_playlist_de_episodio_has_episodio_playlist_de_episodio1_idx` (`playlist_de_episodio_idplaylist`),
  CONSTRAINT `fk_playlist_de_episodio_has_episodio_episodio1` FOREIGN KEY (`episodio_idepisiodio`) REFERENCES `episodio` (`idepisiodio`),
  CONSTRAINT `fk_playlist_de_episodio_has_episodio_playlist_de_episodio1` FOREIGN KEY (`playlist_de_episodio_idplaylist`) REFERENCES `playlist_de_episodio` (`idplaylist`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playlist_de_episodio_has_episodio`
--

LOCK TABLES `playlist_de_episodio_has_episodio` WRITE;
/*!40000 ALTER TABLE `playlist_de_episodio_has_episodio` DISABLE KEYS */;
INSERT INTO `playlist_de_episodio_has_episodio` VALUES (3,1),(2,2),(1,4),(2,6),(1,7),(1,15),(2,19),(3,25),(2,27),(3,30);
/*!40000 ALTER TABLE `playlist_de_episodio_has_episodio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playlist_has_pieza`
--

DROP TABLE IF EXISTS `playlist_has_pieza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `playlist_has_pieza` (
  `playlist_idplaylist` int NOT NULL,
  `pieza_idpieza` int NOT NULL,
  PRIMARY KEY (`playlist_idplaylist`,`pieza_idpieza`),
  KEY `fk_playlist_de_canciones_has_pieza_pieza1_idx` (`pieza_idpieza`),
  KEY `fk_playlist_de_canciones_has_pieza_playlist_de_canciones1_idx` (`playlist_idplaylist`),
  CONSTRAINT `fk_playlist_de_canciones_has_pieza_pieza1` FOREIGN KEY (`pieza_idpieza`) REFERENCES `pieza` (`idpieza`),
  CONSTRAINT `fk_playlist_de_canciones_has_pieza_playlist_de_canciones1` FOREIGN KEY (`playlist_idplaylist`) REFERENCES `playlist_de_canciones` (`idplaylist`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playlist_has_pieza`
--

LOCK TABLES `playlist_has_pieza` WRITE;
/*!40000 ALTER TABLE `playlist_has_pieza` DISABLE KEYS */;
INSERT INTO `playlist_has_pieza` VALUES (1,1),(2,2),(3,3),(2,4),(3,4),(1,5),(3,6),(1,7),(2,9),(2,10);
/*!40000 ALTER TABLE `playlist_has_pieza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `podcast`
--

DROP TABLE IF EXISTS `podcast`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `podcast` (
  `idpodcast` int NOT NULL,
  `login` text,
  `password` int DEFAULT NULL,
  `titulo` text,
  `informacion` text,
  `n_seguidores` int DEFAULT NULL,
  `enlace_a_imagen` text,
  `fecha_creation` datetime DEFAULT NULL,
  `n_reproducciones` int DEFAULT NULL,
  `idtematica` int NOT NULL,
  PRIMARY KEY (`idpodcast`),
  KEY `fk_podcast_tematica1_idx` (`idtematica`),
  CONSTRAINT `fk_podcast_tematica1` FOREIGN KEY (`idtematica`) REFERENCES `tematica` (`idtematica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `podcast`
--

LOCK TABLES `podcast` WRITE;
/*!40000 ALTER TABLE `podcast` DISABLE KEYS */;
INSERT INTO `podcast` VALUES (1,'Joe',5432,'The Joe Rogan Experience','The official podcast of comedian Joe Rogan',0,'https://upload.wikimedia.org/wikipedia/en/4/4b/The_Joe_Rogan_Experience_logo.jpg','2015-05-28 00:00:00',0,4),(2,'Entiende',1212,'Entiende Tu Mente','Somos el podcast de psicologia mas escuchado en espanol. Nuestra mision: compartir contigo ideas que puedan ayudarte a entenderte',0,'https://entiendetumente.info/wp-content/uploads/2018/12/Avatares-11.png','2017-04-05 00:00:00',0,2),(3,'Dios',7890,'Dios,Patria,Yunque',' Hace 10 anos quedo probada en sede judicial la existencia de la secta de extrema derecha El Yunque.',0,'https://www.omnycontent.com/d/playlist/2446592a-b80e-4d28-a4fd-ae4c0140ac11/85cf848c-f142-4581-8e6e-b11d00c179ef/0041d64f-9102-4a74-a4d5-b11d00c1f269/image.jpg?t=1708516068&size=Medium','2024-02-21 00:00:00',0,1),(4,'Geo',6677,'Geopolis','Geopolis, el podcast que analiza la geopolitica de la vida cotidiana y lo pop, conducido por Charo Marcos y con los expertos de El Orden Mundial.',0,'https://elordenmundial.com/wp-content/uploads/2024/02/LOGO_GEOPOLIS_03_VFINAL_REDONDO-1-640x640.jpg','2024-01-01 00:00:00',0,1),(5,'Comedy',1321,'Comedy Central Stand-Up','Seleccion de los mejores contenidos de Stand-Up producidos por Comedy Central a lo largo de su historia.',0,'https://d3wo5wojvuv7l.cloudfront.net/t_rss_itunes_square_1400/images.spreaker.com/original/2d2d77292321561308361aeae7838ddc.jpg','2016-07-02 00:00:00',0,4),(6,'Patri',5678,'PATRIAHORCADO','PATRIAHORCADO, es el podcast de actualidad con perspectiva feminista. Nada de aparecer muertas. Nada de querer buscar atencion por denunciar. Nosotras venimos a contaros la verdad, a llamar a las cosas por su nombre. Presentado por Silvia Principe y Laura Torruella.',0,'https://i.scdn.co/image/ab67656300005f1f5118dc782a01d13e8b9fd90c','2020-10-22 00:00:00',0,5),(7,'Deli',4444,'Delirios Corrientes','Un podcast en el que cualquier cosa puede pasar y todo es posible. Indefinible, donde cada programa es unico, aunque todos tienen en comun la improvisacion y el sentido del humor. Invitados de todo tipo pasaran por Subterfuge radio para hablar con Maria Bolen.',0,'https://i.scdn.co/image/ab6765630000ba8aabaa040fbe509160989a36e3','2019-04-18 00:00:00',0,2),(8,'Wild',8888,'The Wild Project','CADA MARTES Y JUEVES NUEVOS EPISODIOS. Bienvenidos a THE WILD PROJECT, el podcast de Jordi Wild. Charlas con los invitados mas interesantes, actualidad, ciencia, deportes, filosofia, psicologia, misterio, debates y tertulias... y muchisimo mas. Cada semana hablando alto y claro sobre el mundo que nos rodea. No te lo pierdas',0,'https://pbs.twimg.com/profile_images/1539367437396754433/JiTyMt65_400x400.jpg','2022-05-09 00:00:00',0,1),(9,'m_selvaggio',1234,'Muschio Selvaggio','El podcast dedicado a temas de cultura y sociedad con diferentes invitados en cada episodio. Se caracteriza por momentos de profundidad, seriedad, diversion y sorpresa.',0,'https://is1-ssl.mzstatic.com/image/thumb/Podcasts116/v4/d2/d7/b5/d2d7b533-be9d-9bbf-d11b-9425671132a0/mza_16331053776643783676.jpeg/1200x1200bb.jpg','2020-01-02 00:00:00',0,1),(10,'Nutri',3004,'StayNutri','OS DAMOS LA BIENVENIDA A NUESTRO PODCAST. Aqui charlaremos de nutricion, alimentacion, cocina y mucho mas. Que date y dale al boton de seguir para no perderte nada! Puedes encontrarnos en nuestras redes sociales para mucho mas contenido. @Staynutri Que no falte verdura!',0,'https://assets.pippa.io/shows/613b25df2728cf00192ecf31/1642543055400-a92007a6538285bc555b47042e92613b.jpeg','2022-12-18 00:00:00',0,3);
/*!40000 ALTER TABLE `podcast` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reproducciones_has_pieza`
--

DROP TABLE IF EXISTS `reproducciones_has_pieza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reproducciones_has_pieza` (
  `reproducciones_idreproducciones` int NOT NULL,
  `pieza_idpieza` int NOT NULL,
  PRIMARY KEY (`reproducciones_idreproducciones`,`pieza_idpieza`),
  KEY `fk_reproducciones_has_pieza_pieza1_idx` (`pieza_idpieza`),
  KEY `fk_reproducciones_has_pieza_reproducciones1_idx` (`reproducciones_idreproducciones`),
  CONSTRAINT `fk_reproducciones_has_pieza_pieza1` FOREIGN KEY (`pieza_idpieza`) REFERENCES `pieza` (`idpieza`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reproducciones_has_pieza`
--

LOCK TABLES `reproducciones_has_pieza` WRITE;
/*!40000 ALTER TABLE `reproducciones_has_pieza` DISABLE KEYS */;
/*!40000 ALTER TABLE `reproducciones_has_pieza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reproducciones_has_usuario`
--

DROP TABLE IF EXISTS `reproducciones_has_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reproducciones_has_usuario` (
  `reproducciones_idreproducciones` int NOT NULL,
  `usuario_idusuraio` int NOT NULL,
  PRIMARY KEY (`reproducciones_idreproducciones`,`usuario_idusuraio`),
  KEY `fk_reproducciones_has_usuario_usuario1_idx` (`usuario_idusuraio`),
  KEY `fk_reproducciones_has_usuario_reproducciones1_idx` (`reproducciones_idreproducciones`),
  CONSTRAINT `fk_reproducciones_has_usuario_usuario1` FOREIGN KEY (`usuario_idusuraio`) REFERENCES `usuario` (`idusuraio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reproducciones_has_usuario`
--

LOCK TABLES `reproducciones_has_usuario` WRITE;
/*!40000 ALTER TABLE `reproducciones_has_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `reproducciones_has_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tematica`
--

DROP TABLE IF EXISTS `tematica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tematica` (
  `idtematica` int NOT NULL,
  `nombre` text,
  PRIMARY KEY (`idtematica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tematica`
--

LOCK TABLES `tematica` WRITE;
/*!40000 ALTER TABLE `tematica` DISABLE KEYS */;
INSERT INTO `tematica` VALUES (1,'cronica'),(2,'psicologia'),(3,'alimentacion'),(4,'comedia'),(5,'activismo');
/*!40000 ALTER TABLE `tematica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tematica_artista`
--

DROP TABLE IF EXISTS `tematica_artista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tematica_artista` (
  `idtematica` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtematica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tematica_artista`
--

LOCK TABLES `tematica_artista` WRITE;
/*!40000 ALTER TABLE `tematica_artista` DISABLE KEYS */;
INSERT INTO `tematica_artista` VALUES (1,'rock'),(2,'pop'),(3,'rap');
/*!40000 ALTER TABLE `tematica_artista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idusuraio` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `direcion` varchar(200) DEFAULT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusuraio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Tommaso','https://as1.ftcdn.net/v2/jpg/02/30/60/82/1000_F_230608264_fhoqBuEyiCPwT0h9RtnsuNAId3hWungP.jpg','tommy','23457','tom123'),(2,'Endi','https://www.creativefabrica.com/wp-content/uploads/2020/12/30/Female-Avatar-Profile-Wearing-Face-Mask-Graphics-6929543-1.jpg','fendi','13245','end112'),(3,'Juan','https://static.vecteezy.com/system/resources/thumbnails/015/409/989/small_2x/elegant-man-in-business-suit-with-badge-man-business-avatar-profile-picture-illustration-isolated-vector.jpg','juju','45454','jua89');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_has_artista`
--

DROP TABLE IF EXISTS `usuario_has_artista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario_has_artista` (
  `usuario_idusuraio` int NOT NULL,
  `artista_idartista` int NOT NULL,
  PRIMARY KEY (`usuario_idusuraio`,`artista_idartista`),
  KEY `fk_usuario_has_artista_artista1_idx` (`artista_idartista`),
  KEY `fk_usuario_has_artista_usuario1_idx` (`usuario_idusuraio`),
  CONSTRAINT `fk_usuario_has_artista_artista1` FOREIGN KEY (`artista_idartista`) REFERENCES `artista` (`idartista`),
  CONSTRAINT `fk_usuario_has_artista_usuario1` FOREIGN KEY (`usuario_idusuraio`) REFERENCES `usuario` (`idusuraio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_has_artista`
--

LOCK TABLES `usuario_has_artista` WRITE;
/*!40000 ALTER TABLE `usuario_has_artista` DISABLE KEYS */;
INSERT INTO `usuario_has_artista` VALUES (1,1),(2,1),(3,1),(1,2),(2,2),(3,3),(2,4),(2,5);
/*!40000 ALTER TABLE `usuario_has_artista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_has_podcast`
--

DROP TABLE IF EXISTS `usuario_has_podcast`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario_has_podcast` (
  `usuario_idusuraio` int NOT NULL,
  `podcast_idpodcast` int NOT NULL,
  PRIMARY KEY (`usuario_idusuraio`,`podcast_idpodcast`),
  KEY `fk_usuario_has_podcast_usuario1_idx` (`usuario_idusuraio`),
  KEY `fk_usuario_has_podcast_podcast1_idx` (`podcast_idpodcast`),
  CONSTRAINT `fk_usuario_has_podcast_podcast1` FOREIGN KEY (`podcast_idpodcast`) REFERENCES `podcast` (`idpodcast`),
  CONSTRAINT `fk_usuario_has_podcast_usuario1` FOREIGN KEY (`usuario_idusuraio`) REFERENCES `usuario` (`idusuraio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_has_podcast`
--

LOCK TABLES `usuario_has_podcast` WRITE;
/*!40000 ALTER TABLE `usuario_has_podcast` DISABLE KEYS */;
INSERT INTO `usuario_has_podcast` VALUES (1,2),(2,3),(2,5),(3,1);
/*!40000 ALTER TABLE `usuario_has_podcast` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_like_episodio`
--

DROP TABLE IF EXISTS `usuario_like_episodio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario_like_episodio` (
  `usuario_idusuraio` int NOT NULL,
  `episodio_idepisiodio` int NOT NULL,
  PRIMARY KEY (`usuario_idusuraio`,`episodio_idepisiodio`),
  KEY `fk_usuario_has_episodio_episodio1_idx` (`episodio_idepisiodio`),
  KEY `fk_usuario_has_episodio_usuario1_idx` (`usuario_idusuraio`),
  CONSTRAINT `fk_usuario_has_episodio_episodio1` FOREIGN KEY (`episodio_idepisiodio`) REFERENCES `episodio` (`idepisiodio`),
  CONSTRAINT `fk_usuario_has_episodio_usuario1` FOREIGN KEY (`usuario_idusuraio`) REFERENCES `usuario` (`idusuraio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_like_episodio`
--

LOCK TABLES `usuario_like_episodio` WRITE;
/*!40000 ALTER TABLE `usuario_like_episodio` DISABLE KEYS */;
INSERT INTO `usuario_like_episodio` VALUES (1,3),(2,3),(2,9),(1,10),(3,15),(3,20),(2,25);
/*!40000 ALTER TABLE `usuario_like_episodio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_like_pieza`
--

DROP TABLE IF EXISTS `usuario_like_pieza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario_like_pieza` (
  `usuario_idusuraio` int NOT NULL,
  `pieza_idpieza` int NOT NULL,
  PRIMARY KEY (`usuario_idusuraio`,`pieza_idpieza`),
  KEY `fk_usuario_has_pieza_pieza1_idx` (`pieza_idpieza`),
  KEY `fk_usuario_has_pieza_usuario1_idx` (`usuario_idusuraio`),
  CONSTRAINT `fk_usuario_has_pieza_pieza1` FOREIGN KEY (`pieza_idpieza`) REFERENCES `pieza` (`idpieza`),
  CONSTRAINT `fk_usuario_has_pieza_usuario1` FOREIGN KEY (`usuario_idusuraio`) REFERENCES `usuario` (`idusuraio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_like_pieza`
--

LOCK TABLES `usuario_like_pieza` WRITE;
/*!40000 ALTER TABLE `usuario_like_pieza` DISABLE KEYS */;
INSERT INTO `usuario_like_pieza` VALUES (1,1),(2,4),(1,6),(3,7),(2,10),(2,15),(3,15);
/*!40000 ALTER TABLE `usuario_like_pieza` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-26 20:34:52
