-- MySQL dump 10.13  Distrib 5.5.29, for Linux (x86_64)
--
-- Host: ec2-184-72-196-134.compute-1.amazonaws.com    Database: grad_to_go
-- ------------------------------------------------------
-- Server version	5.5.31

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
-- Table structure for table `proginfo`
--

DROP TABLE IF EXISTS `proginfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proginfo` (
  `program_id` int(11) DEFAULT NULL,
  `program_name` varchar(50) DEFAULT NULL,
  `due_date` varchar(20) DEFAULT NULL,
  `fee` varchar(10) DEFAULT NULL,
  `recs` varchar(10) DEFAULT NULL,
  `gre` varchar(10) DEFAULT NULL,
  `transcripts` varchar(10) DEFAULT NULL,
  `school` varchar(50) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `degree_type` varchar(10) DEFAULT NULL,
  `degree_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proginfo`
--

LOCK TABLES `proginfo` WRITE;
/*!40000 ALTER TABLE `proginfo` DISABLE KEYS */;
INSERT INTO `proginfo` VALUES (1,'University of Rochester','April 1st','$100','2','Yes','Yes','University of Rochester','http://rochester.edu/biology','PhD','PhD in Bio'),(2,'University of Bristol','May 1st','100 pounds','4','Yes','Yes','University of Rochester','http://bristol.ed.uk/bioinformatics','PhD','PhD in Bio'),(3,'Pepperdine University','March 31st','$75','2','Yes','No','Pepperdine University','http://pepperdine.edu/grad/biochemistry','PhD','PhD in Bio'),(4,'Harvard University','Feb 28th','$75','3','Yes','Yes','Harvard University','http://harvard.edu/cas/philosophy','MA','MA in Phil'),(5,'Yale University','Feb 29th','$115','3','Yes','Yes','Yale University','http://yale.edu/philo/grad','PhD','PhD in Phi');
/*!40000 ALTER TABLE `proginfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proglookup`
--

DROP TABLE IF EXISTS `proglookup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proglookup` (
  `user_id` int(11) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proglookup`
--

LOCK TABLES `proglookup` WRITE;
/*!40000 ALTER TABLE `proglookup` DISABLE KEYS */;
/*!40000 ALTER TABLE `proglookup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Rick','Astley','password','jbernie2@u.rochester.edu'),(2,'Andy','Hevey','password','ahevey@u.rochester.edu'),(3,'Bob','Hevey','passw0rd','bhevey@u.rochester.edu'),(4,'Carl','Hevey','passw0rdio','chevey@u.rochester.edu'),(5,'Karl','Jung','psYch0ut','kjung@u.rochester.edu'),(6,'Summer','Pohani','wan2btheBest','spohani@u.rochester.edu'),(7,'Eric','Frank','dud3eguy','efrank2@u.rochester.edu'),(100,'John','Bernier','password','jbernie2@cs.rochester.edu'),(100,'John','Bernier','password','jbernie2@cs.rochester.edu'),(100,'John','Bernier','','jbernie2@cs.rochester.edu'),(100,'','','',''),(100,'','','',''),(100,'','','',''),(100,'','','',''),(6,'test','test','test','test@test.com'),(16,'asdf','asdf','asdf','asdf'),(17,'blah','blah','blah','blah'),(18,'new','new','new','new');
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

-- Dump completed on 2013-05-04 21:34:27
