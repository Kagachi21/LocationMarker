-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 10:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locationmarker`
--

-- --------------------------------------------------------

--
-- Table structure for table `combiner`
--

CREATE TABLE `combiner` (
  `id_combiner` int(11) NOT NULL,
  `nama_combiner` varchar(50) NOT NULL,
  `jumlah_cb` int(11) NOT NULL,
  `csn1` varchar(255) DEFAULT NULL,
  `csn2` varchar(255) DEFAULT NULL,
  `csn3` varchar(255) DEFAULT NULL,
  `csn4` varchar(255) DEFAULT NULL,
  `csn5` varchar(255) DEFAULT NULL,
  `csn6` varchar(255) DEFAULT NULL,
  `csn7` varchar(255) DEFAULT NULL,
  `csn8` varchar(255) DEFAULT NULL,
  `csn9` varchar(255) DEFAULT NULL,
  `csn10` varchar(255) DEFAULT NULL,
  `csn11` varchar(255) DEFAULT NULL,
  `csn12` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `combiner`
--

INSERT INTO `combiner` (`id_combiner`, `nama_combiner`, `jumlah_cb`, `csn1`, `csn2`, `csn3`, `csn4`, `csn5`, `csn6`, `csn7`, `csn8`, `csn9`, `csn10`, `csn11`, `csn12`) VALUES
(1, 'RJS', 3, 'DSFEDFS5467', 'SDFSDF435968', 'FGH876897856', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'YKJ', 2, 'ASDGF87978', 'FDGDFG1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'RPL', 1, 'ASDH98890089', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `convensional`
--

CREATE TABLE `convensional` (
  `id_convensional` int(11) NOT NULL,
  `tipe_conven` enum('RESTABES','PJR','BRIMOB') NOT NULL,
  `jenis_coven` enum('MTR','GTR') NOT NULL,
  `jenis_coven2` varchar(20) NOT NULL,
  `seri_coven` int(11) NOT NULL,
  `seri_coven2` int(11) NOT NULL,
  `sn_c1` varchar(255) DEFAULT NULL,
  `sn_c2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `convensional`
--

INSERT INTO `convensional` (`id_convensional`, `tipe_conven`, `jenis_coven`, `jenis_coven2`, `seri_coven`, `seri_coven2`, `sn_c1`, `sn_c2`) VALUES
(1, 'RESTABES', 'MTR', 'APX', 3000, 2000, '234SDF32SDF', '234234SFFAE'),
(2, 'PJR', 'MTR', 'APX', 3000, 2000, 'SDFR234324', 'SDF6575H76'),
(3, 'BRIMOB', 'GTR', 'APX', 8000, 2000, 'JSDFH9790907', 'KKSHFNKJ9898R');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) UNSIGNED NOT NULL,
  `level` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_level` int(10) UNSIGNED DEFAULT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `id_level`, `id_user`) VALUES
(1, 'mamachel', '1', 1, 1),
(2, 'nyinya', '1', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `id_tower` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `latitude`, `longitude`, `id_tower`) VALUES
(1, 'Surabaya', '-7.2754438', '112.6426438', 1),
(2, 'Jember', '-8.2652689', '113.5133798', 2),
(3, 'Jombang', '-7.5611163', '112.1191473', NULL),
(4, 'Bojonegoro', '-7.1560458', '111.8785384', NULL),
(5, 'Banyuwangi', '-8.2168821', '114.3486412', NULL),
(6, 'Malang', '-7.9785589', '112.5967636', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_tower`
--

CREATE TABLE `tipe_tower` (
  `id_tipe` int(11) NOT NULL,
  `nama_tower` varchar(255) NOT NULL,
  `tinggi_tow` int(11) NOT NULL,
  `type_tow` varchar(50) NOT NULL,
  `jumlah_ch` int(11) NOT NULL,
  `sn1` varchar(255) DEFAULT NULL,
  `sn2` varchar(255) DEFAULT NULL,
  `sn3` varchar(255) DEFAULT NULL,
  `sn4` varchar(255) DEFAULT NULL,
  `sn5` varchar(255) DEFAULT NULL,
  `sn6` varchar(255) DEFAULT NULL,
  `sn7` varchar(255) DEFAULT NULL,
  `sn8` varchar(255) DEFAULT NULL,
  `sn9` varchar(255) DEFAULT NULL,
  `sn10` varchar(255) DEFAULT NULL,
  `sn11` varchar(255) DEFAULT NULL,
  `sn12` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_tower`
--

INSERT INTO `tipe_tower` (`id_tipe`, `nama_tower`, `tinggi_tow`, `type_tow`, `jumlah_ch`, `sn1`, `sn2`, `sn3`, `sn4`, `sn5`, `sn6`, `sn7`, `sn8`, `sn9`, `sn10`, `sn11`, `sn12`) VALUES
(1, 'SST', 110, 'TRUNGKING DIGITAL', 5, 'HGJHJK8685567', 'FGJKFD8778567', 'DFGFDGJHJG6775', 'FDGDFGSDF56456', 'FDGDFGJGFFGH456', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tower`
--

CREATE TABLE `tower` (
  `id_tower` int(11) NOT NULL,
  `nama_site` enum('Mapolda','Cempo') NOT NULL,
  `id_tipe` int(11) DEFAULT NULL,
  `id_combiner` int(11) DEFAULT NULL,
  `id_convensional` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tower`
--

INSERT INTO `tower` (`id_tower`, `nama_site`, `id_tipe`, `id_combiner`, `id_convensional`) VALUES
(1, 'Mapolda', 1, 1, 3),
(2, 'Cempo', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `alamat`, `no_telp`) VALUES
(1, 'Michel Meirisca Heniaty', 'michelmiche12@gmail.com', 'di bumi ini', '0896453424'),
(2, 'Nyinya', 'nyinyanyinya@gmail.com', 'diatas planet', '0678678678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `combiner`
--
ALTER TABLE `combiner`
  ADD PRIMARY KEY (`id_combiner`);

--
-- Indexes for table `convensional`
--
ALTER TABLE `convensional`
  ADD PRIMARY KEY (`id_convensional`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `login to level` (`id_level`),
  ADD KEY `login to user` (`id_user`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`),
  ADD KEY `lokasi_tower` (`id_tower`);

--
-- Indexes for table `tipe_tower`
--
ALTER TABLE `tipe_tower`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `tower`
--
ALTER TABLE `tower`
  ADD PRIMARY KEY (`id_tower`),
  ADD KEY `tipe_tower` (`id_tipe`),
  ADD KEY `combiner_tower` (`id_combiner`),
  ADD KEY `conven_tower` (`id_convensional`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `combiner`
--
ALTER TABLE `combiner`
  MODIFY `id_combiner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `convensional`
--
ALTER TABLE `convensional`
  MODIFY `id_convensional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tipe_tower`
--
ALTER TABLE `tipe_tower`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tower`
--
ALTER TABLE `tower`
  MODIFY `id_tower` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`),
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD CONSTRAINT `lokasi_ibfk_1` FOREIGN KEY (`id_tower`) REFERENCES `tower` (`id_tower`);

--
-- Constraints for table `tower`
--
ALTER TABLE `tower`
  ADD CONSTRAINT `tower_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `tipe_tower` (`id_tipe`),
  ADD CONSTRAINT `tower_ibfk_2` FOREIGN KEY (`id_convensional`) REFERENCES `convensional` (`id_convensional`),
  ADD CONSTRAINT `tower_ibfk_3` FOREIGN KEY (`id_combiner`) REFERENCES `combiner` (`id_combiner`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
