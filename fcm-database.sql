-- --------------------------------------------------------
-- Host:                         localhost
-- Versi server:                 5.7.24-log - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk datamining-fcm
CREATE DATABASE IF NOT EXISTS `datamining-fcm` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `datamining-fcm`;

-- membuang struktur untuk table datamining-fcm.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel datamining-fcm.admin: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
REPLACE INTO `admin` (`id`, `username`, `nama`, `password`) VALUES
	(1, 'admin1', 'Farhanuddin', '$2y$10$/jgC0Qpf2X.0bJX.kd60LuScbUkm.RhVOkLVY.6F55pjt86oetwoa');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- membuang struktur untuk table datamining-fcm.kuisioner
CREATE TABLE IF NOT EXISTS `kuisioner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `x1` int(11) NOT NULL DEFAULT '0',
  `x2` int(11) NOT NULL DEFAULT '0',
  `x3` int(11) NOT NULL DEFAULT '0',
  `x4` int(11) NOT NULL DEFAULT '0',
  `x5` int(11) NOT NULL DEFAULT '0',
  `x6` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_kuisioner_user` (`id_user`),
  CONSTRAINT `FK_kuisioner_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel datamining-fcm.kuisioner: ~52 rows (lebih kurang)
/*!40000 ALTER TABLE `kuisioner` DISABLE KEYS */;
REPLACE INTO `kuisioner` (`id`, `id_user`, `x1`, `x2`, `x3`, `x4`, `x5`, `x6`) VALUES
	(1, 3, 2, 2, 2, 2, 1, 1),
	(2, 4, 2, 1, 2, 1, 2, 2),
	(3, 5, 2, 1, 2, 2, 2, 1),
	(4, 6, 1, 2, 2, 1, 2, 3),
	(5, 7, 3, 2, 1, 1, 1, 1),
	(6, 8, 2, 1, 2, 2, 2, 2),
	(7, 9, 2, 1, 2, 1, 2, 2),
	(8, 10, 3, 2, 2, 2, 1, 1),
	(9, 11, 2, 1, 1, 1, 2, 2),
	(10, 12, 2, 1, 1, 1, 2, 2),
	(11, 13, 2, 2, 1, 1, 2, 2),
	(12, 14, 2, 2, 2, 1, 1, 1),
	(13, 15, 3, 2, 1, 1, 1, 1),
	(14, 16, 2, 2, 1, 2, 1, 1),
	(15, 17, 3, 2, 2, 2, 1, 1),
	(16, 18, 2, 1, 2, 1, 2, 1),
	(17, 19, 2, 2, 2, 2, 1, 1),
	(18, 20, 3, 2, 1, 2, 2, 1),
	(19, 21, 2, 1, 1, 2, 2, 1),
	(20, 22, 2, 2, 2, 1, 1, 1),
	(21, 23, 2, 2, 2, 1, 2, 2),
	(22, 24, 2, 1, 1, 2, 1, 1),
	(23, 25, 2, 2, 2, 1, 1, 1),
	(24, 26, 2, 2, 2, 1, 1, 1),
	(25, 27, 3, 1, 1, 1, 3, 3),
	(26, 28, 2, 2, 1, 1, 2, 1),
	(27, 29, 2, 2, 2, 1, 2, 2),
	(28, 30, 2, 1, 2, 1, 3, 3),
	(29, 31, 2, 2, 2, 2, 3, 2),
	(30, 32, 3, 2, 1, 1, 1, 1),
	(31, 33, 2, 2, 2, 1, 2, 1),
	(32, 34, 2, 2, 2, 1, 1, 1),
	(33, 35, 2, 2, 1, 1, 2, 3),
	(34, 36, 3, 2, 2, 1, 2, 1),
	(35, 37, 2, 2, 1, 1, 1, 1),
	(36, 38, 3, 2, 1, 1, 1, 1),
	(37, 39, 3, 2, 2, 1, 1, 1),
	(38, 40, 2, 2, 2, 2, 2, 2),
	(39, 41, 3, 2, 1, 1, 1, 1),
	(40, 42, 2, 2, 2, 1, 1, 1),
	(41, 43, 3, 1, 2, 1, 3, 1),
	(42, 44, 3, 2, 2, 1, 2, 1),
	(43, 45, 3, 2, 2, 1, 1, 1),
	(44, 46, 3, 2, 1, 2, 2, 1),
	(45, 47, 3, 1, 1, 1, 2, 2),
	(46, 48, 2, 2, 2, 1, 1, 1),
	(47, 49, 3, 2, 2, 2, 1, 1),
	(48, 50, 1, 1, 2, 1, 2, 1),
	(49, 51, 1, 1, 2, 1, 2, 2),
	(50, 52, 2, 2, 2, 1, 2, 2),
	(51, 53, 2, 1, 2, 2, 2, 3),
	(52, 54, 2, 2, 2, 1, 1, 1),
	(53, 55, 3, 2, 1, 1, 1, 1),
	(54, 56, 2, 2, 1, 1, 2, 2),
	(55, 57, 3, 2, 1, 1, 2, 3),
	(56, 58, 2, 2, 2, 3, 2, 3),
	(57, 59, 1, 1, 2, 1, 2, 1);
/*!40000 ALTER TABLE `kuisioner` ENABLE KEYS */;

-- membuang struktur untuk table datamining-fcm.result
CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `cluster1` float NOT NULL DEFAULT '0',
  `cluster2` float NOT NULL DEFAULT '0',
  `final_cluster` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_result_user` (`id_user`),
  CONSTRAINT `FK_result_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6162 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel datamining-fcm.result: ~57 rows (lebih kurang)
/*!40000 ALTER TABLE `result` DISABLE KEYS */;
REPLACE INTO `result` (`id`, `id_user`, `cluster1`, `cluster2`, `final_cluster`) VALUES
	(6105, 3, 0.7635, 0.2365, 1),
	(6106, 4, 0.1458, 0.8542, 2),
	(6107, 5, 0.4567, 0.5433, 2),
	(6108, 6, 0.2878, 0.7122, 2),
	(6109, 7, 0.8095, 0.1905, 1),
	(6110, 8, 0.2264, 0.7736, 2),
	(6111, 9, 0.1458, 0.8542, 2),
	(6112, 10, 0.7868, 0.2132, 1),
	(6113, 11, 0.2075, 0.7925, 2),
	(6114, 12, 0.2075, 0.7925, 2),
	(6115, 13, 0.2767, 0.7233, 2),
	(6116, 14, 0.8403, 0.1597, 1),
	(6117, 15, 0.8095, 0.1905, 1),
	(6118, 16, 0.7334, 0.2666, 1),
	(6119, 17, 0.7868, 0.2132, 1),
	(6120, 18, 0.445, 0.555, 2),
	(6121, 19, 0.7635, 0.2365, 1),
	(6122, 20, 0.6312, 0.3688, 1),
	(6123, 21, 0.4655, 0.5345, 2),
	(6124, 22, 0.8403, 0.1597, 1),
	(6125, 23, 0.212, 0.788, 2),
	(6126, 24, 0.621, 0.379, 1),
	(6127, 25, 0.8403, 0.1597, 1),
	(6128, 26, 0.8403, 0.1597, 1),
	(6129, 27, 0.3008, 0.6992, 2),
	(6130, 28, 0.5863, 0.4137, 1),
	(6131, 29, 0.212, 0.788, 2),
	(6132, 30, 0.2298, 0.7702, 2),
	(6133, 31, 0.2767, 0.7233, 2),
	(6134, 32, 0.8095, 0.1905, 1),
	(6135, 33, 0.6005, 0.3995, 1),
	(6136, 34, 0.8403, 0.1597, 1),
	(6137, 35, 0.2718, 0.7282, 2),
	(6138, 36, 0.6829, 0.3171, 1),
	(6139, 37, 0.7906, 0.2094, 1),
	(6140, 38, 0.8095, 0.1905, 1),
	(6141, 39, 0.8494, 0.1506, 1),
	(6142, 40, 0.2934, 0.7066, 2),
	(6143, 41, 0.8095, 0.1905, 1),
	(6144, 42, 0.8403, 0.1597, 1),
	(6145, 43, 0.4221, 0.5779, 2),
	(6146, 44, 0.6829, 0.3171, 1),
	(6147, 45, 0.8494, 0.1506, 1),
	(6148, 46, 0.6312, 0.3688, 1),
	(6149, 47, 0.3568, 0.6432, 2),
	(6150, 48, 0.8403, 0.1597, 1),
	(6151, 49, 0.7868, 0.2132, 1),
	(6152, 50, 0.4087, 0.5913, 2),
	(6153, 51, 0.2575, 0.7425, 2),
	(6154, 52, 0.212, 0.788, 2),
	(6155, 53, 0.2471, 0.7529, 2),
	(6156, 54, 0.8403, 0.1597, 1),
	(6157, 55, 0.8095, 0.1905, 1),
	(6158, 56, 0.2767, 0.7233, 2),
	(6159, 57, 0.3528, 0.6472, 2),
	(6160, 58, 0.3704, 0.6296, 2),
	(6161, 59, 0.4087, 0.5913, 2);
/*!40000 ALTER TABLE `result` ENABLE KEYS */;

-- membuang struktur untuk table datamining-fcm.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL DEFAULT 'Laki-laki',
  `angkatan` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel datamining-fcm.user: ~57 rows (lebih kurang)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `nama`, `nim`, `jenis_kelamin`, `angkatan`, `password`) VALUES
	(3, 'Mohammad Malik Fajar', '18650033', 'Laki-laki', '2018', '$2y$10$5HpD2thBQWpXYF8YzgJIRevBLWDTpjTyWwxy60/18iaIqZAXw0Pl.'),
	(4, 'Asfilia Nova Anggraini', '18650040', 'Perempuan', '2018', '$2y$10$qxwl3/PzH54uuH9EHImLb.ViOOfpPCkFkynBko3A.YpTY/H.27IEG'),
	(5, 'Shafa Risqi Octaviary', '18650008', 'Perempuan', '2018', '$2y$10$7CKimi3N2/qrSuLSPVi9wONJYQ.h8CCGuI5JNAi.IYZIuRmyckYbO'),
	(6, 'Cahya Wulandari', '18650076', 'Perempuan', '2018', '$2y$10$j7Rog7o7G.ge7K0o31fwTeLrVr653gHQJtzJ.ocBxBxScEHBlftte'),
	(7, 'Febrina Dwita Sari', '18650001', 'Perempuan', '2018', '$2y$10$2By4fvl/x/sg1q1q2fo6COx74RrdKNni8l1.AuZ0MMbmZZsAp/Jnq'),
	(8, 'Andhika Maulana Effendi', '18650076', 'Laki-laki', '2018', '$2y$10$6fvfzdmdUypTkIKyIczRuOvN1AQd5XHbxO6xqWTG38QJvOMVvd.M6'),
	(9, 'Adhitya Prayoga Permana', '18650086', 'Laki-laki', '2018', '$2y$10$BdLr5jetjTV4v9cOQYdAt.76dgCw3wGvmk.4x4LfG1s2LpfzIoU0O'),
	(10, 'Aulia Ananda Salsabila', '18650032', 'Perempuan', '2018', '$2y$10$JO/UWLf.c3V8Ek.u/sAiSeI317Ue.7vZoBYPFY3Khghsp4dAha26i'),
	(11, 'Muchlisin Aura Tama', '18650123', 'Laki-laki', '2018', '$2y$10$dWoZCRQJEpWuSNhecb4uoOpYhYD7oI58MyUBM8tuJquCNsGhTATFS'),
	(12, 'Rasyikal Fikri', '19650015', 'Laki-laki', '2019', '$2y$10$ljeyXcp40MY1hXQoaKoWOu353u6kwStOAP7TBhDh2N1F3waKUnU2S'),
	(13, 'Mauren Helvia Devi', '18650036', 'Perempuan', '2018', '$2y$10$RTJYx.dtNVwmsbYtNfxPtu1AKTwrXJhmHZz7BuUyh5kyQFXcckTBG'),
	(14, 'Indana Zulfa', '18650018', 'Perempuan', '2018', '$2y$10$c50fT.5/ADxmdXD4tCkc0.0HyGUCR7xzxX6W0wKbzYa6b88aWyOgS'),
	(15, 'Muhammd Fathoni Ariyadi', '200605110182', 'Laki-laki', '2020', '$2y$10$RsSdHbEJj0xSQVgEwH6NROpXwXoqLEzffLxt6ZbZM6Y3mILBesCEK'),
	(16, 'Eka Mulyaningrum', '200605110043', 'Perempuan', '2020', '$2y$10$k4fs4yU/Kd1vjlCKAx.uWezw5KWsczSwC9Ov6uKzSjV2Kxckm8LIi'),
	(17, 'Nur Syamsu Priambudi', '200605110150', 'Laki-laki', '2020', '$2y$10$I5GpHic3TzvXLfDozNpbL.ezn1X2ON/omaJfpSujEsgfYK.7VRxKm'),
	(18, 'Alya  Fitria', '200605110022', 'Perempuan', '2020', '$2y$10$sie9UTmTTCH0VJTXTH6a3eUp0y9sWf4rf4.N5SxQ3wiiLR/rBY9bC'),
	(19, 'Rossa Anggun Lestari', '200605110038', 'Perempuan', '2020', '$2y$10$U37jrPfoPiYqlMMo8zQBcukczrkMIslQuXElLzSWLGsYvETDVGbAC'),
	(20, 'Alva Saputra', '200605110176', 'Perempuan', '2020', '$2y$10$cZMJHbffhsJpqhHT2K3bJOedRK6/bdty5whaRn3IUvUewWPLf8Ncm'),
	(21, 'Ahmad Fahrudin Fanani', '200605110149', 'Laki-laki', '2020', '$2y$10$UsIkbZG6TLpb/RxqeAljgO.4gUeZuD5EohTPeVmwDqU55EJ/FJvkG'),
	(22, 'Annisa Rizkiana', '18650048', 'Perempuan', '2018', '$2y$10$zwIHbmAkJRkVJnEZk4I5dO6RAo1iVqr.Fdj8aJJNdzuBedUZOjgKi'),
	(23, 'Galan Ramadan Harya Galib', '200605110008', 'Laki-laki', '2020', '$2y$10$pcT76xij34EXFrGRqx1xfuoyZUmlkWRVdW4Hd/fv4g47hkUFskXP6'),
	(24, 'Aji Bagas Prakasa', '200605110012', 'Laki-laki', '2020', '$2y$10$ANf7kBQUvqyFkuDfXec8Ru/xrx/a/9y8Y956t/Mcul/EelZMjrGQC'),
	(25, 'Aulia Nur Rachmatika', '200605110094', 'Perempuan', '2020', '$2y$10$1WkmsCkqRUw2eWLCoRX4xewzmRCBW2jSRhqanHKS2PGhBetvrXrwS'),
	(26, 'Rahim Mahruf', '19650151', 'Laki-laki', '2019', '$2y$10$PJY8suZNVnU2C1aekSWMg.Td.ahj7I5PI7ccG47n9eVKkRUyQPB1K'),
	(27, 'Abdurrahman Walid Khassogi', '18650070', 'Laki-laki', '2018', '$2y$10$YqNmaS3tVDvp/sbcY9hq0epfpONNBQ6.Kuomk484xsfsABvcK1oH2'),
	(28, 'Naila Nahdiyah', '18650050', 'Perempuan', '2018', '$2y$10$Tc3aB4za.bDTZj6IxfwDIebiTlRYNAAzhNqU7hkBJSNaDFPl/m6ee'),
	(29, 'Anzila Rahmania Muchtar', '200605110054', 'Perempuan', '2020', '$2y$10$KWZckq52Q4Gcu8WgdICIa.OGfafgnunvPAbUNdUnuCJef6U8WLDO.'),
	(30, 'Moch Wahyu Fitra Choiri', '19650039', 'Laki-laki', '2019', '$2y$10$ZGdyZjlvpcQUT2.aibnouuYkrdC4L9jUwaag15zizkuQg46y6/6ca'),
	(31, 'Aldian Faizzul Anwar', '200605110170', 'Laki-laki', '2020', '$2y$10$TjEl3lprSi4fxzeHxLHNZ.Roy/r1KxE73Y4ILx0n38CB.XC4VA0oe'),
	(32, 'Muhammad Afiful Islam', '19650019', 'Laki-laki', '2019', '$2y$10$FH4/vWz95KXAqOHpIhf7J.UvGUft6dYMp5YDg67GlmALfSi8DRSgO'),
	(33, 'Rafi Aulia Prasetya', '200605110115', 'Laki-laki', '2020', '$2y$10$c05jnFMu95gcPVrQB/xjLOeZuOIORn5cyNPYC00di2eXeQVOg5ycC'),
	(34, 'Bayu Permana Yoga', '200605110145', 'Laki-laki', '2020', '$2y$10$Hnwz0GzbPE0J/77niXZWI.HgknKP8RRjdB0Cpj9l9KQLMhj19xlcq'),
	(35, 'Eka Manggala P', '18650037', 'Laki-laki', '2018', '$2y$10$h8DPU/xw36Pd8Mn9XzLDCeW.MPDXYNTx8Tj7dBcv2.f27/cqBXnXu'),
	(36, 'Miftah Furqaanul Haq', '19650138', 'Laki-laki', '2019', '$2y$10$y.niMguxNKqtJmVfykqg8eb3zZwTSx8LesMGEYJ/D.9mS6ITzWCCu'),
	(37, 'Muhammad Faiz Alfarros', '19650028', 'Laki-laki', '2019', '$2y$10$YYLHUNKxi5QScymtX9Vesed/pIJQeLutZE4Ce48ooPwCXwG3PUr6m'),
	(38, 'Mokhammad Wahyu Febriansyah', '18650097', 'Laki-laki', '2018', '$2y$10$0vW54Q/Lhvn1/I8auSaZeuFSJB6EX1lPoR6hvdHxr/6sT.4poq4yu'),
	(39, 'Rizal Fantofani', '200605110134', 'Laki-laki', '2020', '$2y$10$0h9..7ho629sJpC70a75B.zFBemJDMf4ma0zHOvaVAgapX5n6gTeq'),
	(40, 'Hida Muhimmatul Husna', '18650115', 'Perempuan', '2018', '$2y$10$qiYKuTeZl1o3G7WMPNdR2ew/CVwudgtAbNInfaOiorLvIQLtYSMPK'),
	(41, 'M.  Robert Yusuf', '18650060', 'Laki-laki', '2018', '$2y$10$vNNP50WbN2IiFsKx/.17j.PUW0AhrnrQBV4Agz3otzr0Ew5fGzNYi'),
	(42, 'Fatma Indika S', '18650021', 'Perempuan', '2018', '$2y$10$/dBkZpwDZTZE79Y0bQuYLOSNAvpkBEQ4gHj/ydpr9/wWzEpONQ4uG'),
	(43, 'Dicky Arya Pratama', '19650008', 'Laki-laki', '2019', '$2y$10$XF1P2kjN4nsTcrGdbA/IX.yey673OCU8mSEo0r76Suq5OFDlwJ2Be'),
	(44, 'Kurnia Zulta Matondang', '18650044', 'Laki-laki', '2018', '$2y$10$JFdZMNsTjmwgHgA1WDD/uealwH2.M0K91HSczpFD0tPqoYYb24UfS'),
	(45, 'Luqyana Hafidhah', '18650104', 'Perempuan', '2018', '$2y$10$/wWWx5wuL68ORhi0lNFxQe0SWA65JIiomZA7cr.hLOR889GuOH.km'),
	(46, 'Meli Febriyanti Putri', '200605110014', 'Perempuan', '2020', '$2y$10$vqOqqtzidfpmWju3Xmvn6ui53sDGjOUUG54RbEJ/1LWjikWLCjk6S'),
	(47, 'Rianditya Rizky', '18650062', 'Laki-laki', '2018', '$2y$10$az7LogKyw4iEUBjyroaoD.v4QRszQZdX6z.FaETvEXkA7V6sO45JS'),
	(48, 'Muhammad Roni Kurniawan', '18650061', 'Laki-laki', '2018', '$2y$10$k5VNnbfQE2BpY9/WpfwMfej8Bal3bnnemnz/1QGH7AL6nIyQIzaxq'),
	(49, 'Kurniatul Ainiyah', '18650088', 'Perempuan', '2018', '$2y$10$WMRxjAmYqk85PNUz10OqH.MinTm9MnZDFb9BySPKdTAPz7Hd9y0ti'),
	(50, 'Seta Murdha Pamungkas', '18650043', 'Laki-laki', '2018', '$2y$10$1cPnxuaZOXm0CTknteMkT.6a7i3CmvgEDr2XVNsNJdHv7w0nzAs9u'),
	(51, 'Zul Fachrie', '18650025', 'Laki-laki', '2018', '$2y$10$yqnBDGtbyGm5XNG.leK2tueGq.mydJto8FLQhKsIRNYiZ5EGX2fuW'),
	(52, 'Afif Ardyandhoko', '18650113', 'Laki-laki', '2018', '$2y$10$zbQzx/H67CZA6IqCXHe3keTwqSQXGyzuF19OZxZyUkBfbsYN0NfKa'),
	(53, 'Ilham Wahyudi', '18650054', 'Laki-laki', '2018', '$2y$10$ian0zKzTjzyM.JQ79fAInOUXJJE.85Jhw/2/4ZmMtNF0M49P1fCJO'),
	(54, 'Hanis Setyowati', '18650125', 'Perempuan', '2018', '$2y$10$m8Pg5PIFcKF5Gg494CFw7uU6lZmaUx0CRc0y6TJGUxThdPK/IQGr.'),
	(55, 'Vera Artanti', '200605110039', 'Perempuan', '2020', '$2y$10$kePChXsVIqtF.W8LzTKKUuBvkxrwrZJbKurEIZ7cPnC4tiXQJqt7e'),
	(56, 'Hafizzudin Syifaulloh', '18650007', 'Laki-laki', '2018', '$2y$10$fIMGgTH2ivhzyjpdyEWbcuGW95f.rhDCa79mLZ.ZZUkfwdIoNeI4C'),
	(57, 'Wildan Datum Baha\'uddin', '18650119', 'Laki-laki', '2018', '$2y$10$KfSDHXpFzgMuq6oa8A7nfuunp0d50u/03EjWc0Ev3SHH49nYM1DE2'),
	(58, 'Citra Khaerun Nisa', '200605110132', 'Perempuan', '2020', '$2y$10$TSn8kWRP/VODZ8KPdE36h.tDyCkIkevnkGph/zMBlgx0AowvzxwMm'),
	(59, 'Fany Parama Admaja', '18650063', 'Laki-laki', '2018', '$2y$10$IbGJ1wSv0zEizRCiv1QAhuMvgIdWck/mhonSRR8M9iMYqFAKIt0FK');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
