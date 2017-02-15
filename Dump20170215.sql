-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	5.7.15

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
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Insolite'),(2,'IoT'),(3,'Monde'),(4,'Sécurité'),(5,'Sport'),(5,'Jeux');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (1,1,1,'The practice of patience guards us against losing our presence of mind. It enables us to remain undisturbed, even when the situation is really difficult.','2017-02-08 12:00:00'),(2,2,1,'Let us cultivate love and compassion, both of which give life true meaning. This is the religion I preach.','2017-02-09 12:00:00'),(3,3,1,'The compassion we feel normally is biased and mixed with attachment. Genuine compassion flows towards all living beings, particularly your enemies.','2017-02-10 12:00:00'),(4,4,1,'SEO Ipsum majestic blogroll heading frames social networking domain feed flash vanessa fox search engine land canonicalization aaron wall seomoz will critchlow filter google directories page rank canonical mike king,','2017-02-08 12:00:00'),(5,5,1,'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.','2017-02-08 12:00:00'),(6,6,1,'Capitalize on low hanging fruit to identify a ballpark value added activity to beta test.','2017-02-08 12:00:00'),(7,7,1,'You see, je ne suis pas un simple danseur car il faut toute la splendeur du aware parce que spirituellement, on est tous ensemble, ok ? Mais ça, c\'est uniquement lié au spirit.','2017-02-11 12:00:00'),(8,1,1,'Je ne voudrais pas rentrer dans des choses trop dimensionnelles, mais, si vraiment tu veux te rappeler des souvenirs de ton perroquet, entre penser et dire, il y a un monde de différence et parfois c\'est bon parfois c\'est pas bon. Tu vas te dire : J\'aurais jamais cru que le karaté guy pouvait parler comme ça !','2017-02-12 12:00:00'),(9,2,1,'Mesdames, messieurs, l\'acuité des problèmes de la vie quotidienne conforte mon désir incontestable d\'aller dans le sens de nos compatriotes les plus démunis\n\nMesdames, messieurs, l\'acuité des problèmes de la vie quotidienne conforte mon désir incontestable d\'aller dans le sens de nos compatriotes les plus démunis\nMesdames, messieurs, l\'acuité des problèmes de la vie quotidienne conforte mon désir incontestable d\'aller dans le sens de nos compatriotes les plus démunis','2017-02-12 12:00:00'),(10,3,1,'Ton petit frère, lui au moins ne chante pas car si tu veux faire mieux, va falloir t\'y mettre. Et pépé, tu sais qu\'il est parti hier dans la soupière !','2017-02-10 12:00:00'),(11,1,1,'Ton ordinateur, il ne reviendra plus car il travail lui contrairement à certains... Et pépé, tu sais qu\'il dort en ce moment devant la télé !','2017-02-09 12:00:00');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,1,'Premier Article modifié','Premier-Article modifié','Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.','Admin','2017-02-11 00:00:00'),(2,2,'Deuxième Article','Deuxieme-Article','Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.','Admin','2017-02-10 12:00:00'),(3,3,'Troisème','Trois','Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.','Admin','2017-02-08 12:30:00'),(4,4,'Quatrième','Quatre','Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.','Admin','2017-02-08 12:00:00'),(5,5,'Cinquième','Cinq','Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.','Admin','2017-02-11 11:00:00'),(6,1,'Sixième','Six','Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.','Admin','2017-02-09 12:00:00'),(7,2,'Septième','Sept','Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.','Admin','2017-02-09 11:00:00'),(8,3,'Huitième','Huit','Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.','Admin','2017-02-10 11:00:00'),(9,4,'Neufième','Neuf','Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.','Admin','2017-02-08 10:00:00'),(10,5,'Dixième','Dix','Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.','Admin','2017-02-07 12:00:00'),(11,5,'Onzième','Onze','Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.','Admin','2017-02-06 12:00:00'),(12,2,'Douzième','Douze','Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.','Admin','2017-02-05 12:00:00'),(13,1,'Test','test','1 2 3 Test','Admin','2017-02-15 00:00:00'),(14,5,'Test MDR','test-mdr','MDR MDR MDR','Admin','2017-02-15 00:00:00'),(15,1,'La réalité virtuelle','la-r--alit---virtuelle','Bonjour, ceci est un test','Admin','2017-02-15 00:00:00'),(16,2,'Ceci est un test d\'article','ceci-est-un-test-d-article','Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles,','Admin','2017-02-15 00:00:00'),(17,5,'Le numérique dans la vie','le-num--rique-dans-la-vie','Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles,','Admin','2017-02-15 00:00:00');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `post_tag`
--

LOCK TABLES `post_tag` WRITE;
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;
INSERT INTO `post_tag` VALUES (14,1),(15,2),(16,3),(17,4);
/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` VALUES (2,'Monde IoT Realité'),(4,'Numérique Virtuelle Informatique'),(3,'Tag1 Tag2 Tag3'),(1,'Test tet test');
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-15 22:53:23
