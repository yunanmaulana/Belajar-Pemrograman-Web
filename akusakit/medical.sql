-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: medical
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `penyakit`
--

DROP TABLE IF EXISTS `penyakit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penyakit` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penyakit` varchar(255) NOT NULL,
  `deskripsi_penyakit` text NOT NULL,
  `list_gejala` text NOT NULL,
  `obat_penanganan` varchar(255) NOT NULL,
  `tingkat_kewaspadaan` varchar(255) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penyakit`
--

LOCK TABLES `penyakit` WRITE;
/*!40000 ALTER TABLE `penyakit` DISABLE KEYS */;
INSERT INTO `penyakit` VALUES (1,'Flu','Flu menyerang paru-paru, hidung, dan tenggorokan. Anak-anak, orang dewasa yang lebih tua, wanita hamil, dan orang dengan penyakit kronis atau sistem kekebalan tubuh lemah berisiko tinggi.','demam, menggigil, nyeri otot, batuk, pilek, sakit kepala, dan kelelahan','analgesik','Berat'),(2,'Radang paru-paru','Infeksi yang menimbulkan peradangan pada kantung udara di salah satu atau kedua paru-paru, yang dapat berisi cairan.','batuk berdahak atau bernanah, demam, menggigil, dan kesulitan bernapas      			','Terapi oksigen, Terapi rehidrasi oral, dan Cairan IV','Berat'),(3,'Batuk','Respon alami dari tubuh sebagai sistem pertahanan untuk mengeluarkan zat dan partikel dari dalam saluran pernapasan, serta mencegah benda asing masuk ke saluran napas bawah.','Pilek, Demam, Lemas, Nyeri tenggorokan, Sulit menelan atau batuk saat menelan, Mengi atau bengek, Sesak napas.','Cairan, pelega tenggorokan, obat batuk, vaporizer, dan mandi air hangat dapat membantu meringankan batuk.','Sedang'),(4,'Infeksi saluran pernapasan atas','Inflamasi pada hidung, sinus paranasal, nasofaring, epiglotis, atau laring yang disebabkan oleh infeksi organisme patogen.','Gejala biasanya diselesaikan dalam waktu dua minggu dan termasuk tenggorokan gatal atau sakit, bersin, hidung tersumbat, dan batuk.      			','obat batuk, obat antiinflamasi non steroid, rehidrasi, irigasi hidung, analgesik, ','Berat'),(5,'Dehidrasi','kondisi ketika tubuh kehilangan lebih banyak cairan daripada yang didapatkan, sehingga keseimbangan zat gula dan garam menjadi terganggu, akibatnya tubuh tidak dapat berfungsi secara normal.','Merasa haus dan pusing, Mulut dan kulit kering, Kelelahan, Jarang buang air kecil, Urine berwarna lebih gelap, serta berbau lebih kuat.','Pemberian larutan rehidrasi oral atau oralit bisa dilakukan pada bayi dan anak-anak yang mengalami dehidrasi akibat diare maupun muntah. pasien dewasa yang mengalami dehidrasi ringan karena diare maupun muntah, disarankan minum lebih banyak air atau caira','Sedang');
/*!40000 ALTER TABLE `penyakit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','dokter') NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'dokter','dokter','dokter',2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-06  5:39:51
