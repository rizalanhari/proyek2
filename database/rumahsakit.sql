-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 12:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya`
--

CREATE TABLE `biaya` (
  `id_biaya` int(11) NOT NULL,
  `jumlah_biaya` int(11) DEFAULT NULL,
  `tanggal_bayar` datetime DEFAULT NULL,
  `kasir_id_kasir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_depan` varchar(45) DEFAULT NULL,
  `nama_belakang` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `usia` varchar(45) DEFAULT NULL,
  `no_telepon` varchar(45) DEFAULT NULL,
  `tarif` int(11) DEFAULT NULL,
  `spesialis_id_spesialis` int(11) NOT NULL,
  `user_id_user` int(11) NOT NULL,
  `poli_id_poli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_depan`, `nama_belakang`, `alamat`, `usia`, `no_telepon`, `tarif`, `spesialis_id_spesialis`, `user_id_user`, `poli_id_poli`) VALUES
(1, 'rani', 'susilo', 'surabaya', '30', '081253746354', 150000, 2, 3, 3),
(2, 'dian', 'sastro', 'bandung', '40', '085464786564', 100000, 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `nama_kasir` varchar(45) DEFAULT NULL,
  `no_telepon` varchar(45) DEFAULT NULL,
  `jam_jaga` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_depan` varchar(45) DEFAULT NULL,
  `nama_belakang` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `no_telepon` varchar(45) DEFAULT NULL,
  `user_id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_depan`, `nama_belakang`, `alamat`, `usia`, `no_telepon`, `user_id_user`) VALUES
(1, 'bambang', 'susilo', 'malang', 50, '089765454323', 1),
(2, 'joko', 'sunarto', 'bandung', 40, '081234567894', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `pasien_id_pasien` int(11) NOT NULL,
  `dokter_id_dokter` int(11) NOT NULL,
  `poli_id_poli` int(11) NOT NULL,
  `biaya_id_biaya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `pasien_id_pasien`, `dokter_id_dokter`, `poli_id_poli`, `biaya_id_biaya`) VALUES
(1, 1, 1, 3, NULL),
(2, 2, 2, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(11) NOT NULL,
  `nama_poli` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`) VALUES
(1, 'anak'),
(2, 'vaksinasi'),
(3, 'penyakit dalam'),
(4, 'gigi');

-- --------------------------------------------------------

--
-- Table structure for table `rekammedis`
--

CREATE TABLE `rekammedis` (
  `id_rekammedis` int(11) NOT NULL,
  `diagnosa` varchar(45) DEFAULT NULL,
  `keluhan` varchar(45) DEFAULT NULL,
  `tanggal_rekam` datetime DEFAULT NULL,
  `pasien_id_pasien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `id_spesialis` int(11) NOT NULL,
  `nama_spesialis` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spesialis`
--

INSERT INTO `spesialis` (`id_spesialis`, `nama_spesialis`) VALUES
(1, 'paru'),
(2, 'jantung');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'pasien1', 'pasien1', 1),
(2, 'pasien2', 'pasien2', 1),
(3, 'dokter1', 'dokter1', 2),
(4, 'dokter2', 'dokter2', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biaya`
--
ALTER TABLE `biaya`
  ADD PRIMARY KEY (`id_biaya`),
  ADD KEY `fk_biaya_kasir1_idx` (`kasir_id_kasir`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `fk_dokter_spesialis_idx` (`spesialis_id_spesialis`),
  ADD KEY `fk_dokter_user1_idx` (`user_id_user`),
  ADD KEY `fk_dokter_poli1_idx` (`poli_id_poli`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `fk_pasien_user1_idx` (`user_id_user`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `fk_pendaftaran_pasien1_idx` (`pasien_id_pasien`),
  ADD KEY `fk_pendaftaran_dokter1_idx` (`dokter_id_dokter`),
  ADD KEY `fk_pendaftaran_poli1_idx` (`poli_id_poli`),
  ADD KEY `fk_pendaftaran_biaya1_idx` (`biaya_id_biaya`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `rekammedis`
--
ALTER TABLE `rekammedis`
  ADD PRIMARY KEY (`id_rekammedis`),
  ADD KEY `fk_rekammedis_pasien1_idx` (`pasien_id_pasien`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biaya`
--
ALTER TABLE `biaya`
  MODIFY `id_biaya` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rekammedis`
--
ALTER TABLE `rekammedis`
  MODIFY `id_rekammedis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `id_spesialis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biaya`
--
ALTER TABLE `biaya`
  ADD CONSTRAINT `fk_biaya_kasir1` FOREIGN KEY (`kasir_id_kasir`) REFERENCES `kasir` (`id_kasir`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `fk_dokter_poli1` FOREIGN KEY (`poli_id_poli`) REFERENCES `poli` (`id_poli`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dokter_spesialis` FOREIGN KEY (`spesialis_id_spesialis`) REFERENCES `spesialis` (`id_spesialis`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dokter_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `fk_pasien_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `fk_pendaftaran_biaya1` FOREIGN KEY (`biaya_id_biaya`) REFERENCES `biaya` (`id_biaya`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pendaftaran_dokter1` FOREIGN KEY (`dokter_id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pendaftaran_pasien1` FOREIGN KEY (`pasien_id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pendaftaran_poli1` FOREIGN KEY (`poli_id_poli`) REFERENCES `poli` (`id_poli`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rekammedis`
--
ALTER TABLE `rekammedis`
  ADD CONSTRAINT `fk_rekammedis_pasien1` FOREIGN KEY (`pasien_id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
