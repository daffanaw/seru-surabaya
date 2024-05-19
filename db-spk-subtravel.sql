-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 10:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-spk-subtravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `id_nasabah` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `id_nasabah`, `file`, `status`) VALUES
(1, 1, '598483data.xlsx', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kendaraan`
--

CREATE TABLE `tb_kendaraan` (
  `kode_kendaraan` int(16) NOT NULL,
  `nama_kendaraan` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `rasio_harga` varchar(50) DEFAULT NULL,
  `rating` varchar(3) NOT NULL,
  `kepopuleran` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jam_operasi` varchar(255) NOT NULL,
  `deskripsi_tempat` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_kendaraan`
--

INSERT INTO `tb_kendaraan` (`kode_kendaraan`, `nama_kendaraan`, `foto`, `deskripsi`, `contact`, `rasio_harga`, `rating`, `kepopuleran`, `alamat`, `jam_operasi`, `deskripsi_tempat`, `total`, `rank`) VALUES
(21, 'Kebun Binatang Surabaya', '501Kebun Binatang Surabaya.jpg', NULL, '0315678703', '15.000', '4,4', '47.731', 'Jl. Setail No.1, Darmo, Kec. Wonokromo, Surabaya, Jawa Timur 60241', '10.00-17.00', 'Kebun Binatang', '6.3963956477318', '1'),
(22, 'Alun-alun Surabaya', '941Alun-alun Surabaya.JPG', NULL, '-', '0', '4,8', '7.912', 'Jl. Gubernur Suryo No.15, Embong Kaliasin, Kec. Genteng, Surabaya, Jawa Timur 21256', '10.00-17.00', 'Taman', '2.0177839032085', '16'),
(23, 'Balai Kota Surabaya', '911Balai Kota Surabaya.JPG', NULL, '0315312144', '0', '4,7', '1.180', 'Jl. Walikota Mustajab No.59, Ketabang, Kec. Genteng, Surabaya, Jawa Timur 60272', '10.00-17.00', 'Taman', '1.8579908635372', '17'),
(24, 'Food Juntion Grand Pakuwon', '620Food Junction Grand Pakuwon.JPG', NULL, '03199019500', '0', '4,6', '22.399', 'Jalan Grand Banjar Mutiara Asri No.1, Banjar Sugihan, Kec. Tandes, Surabaya, Jawa Timur 60184', '11.00-22.00', 'Kuliner dan Taman', '3.7927912954637', '4'),
(26, 'Kebun Bibit Wonorejo', '933Kebun Bibit.JPG', NULL, 'Tidak tersedia', '15.000', '4,4', '6.890', 'Jl. Raya Wonorejo, Wonorejo, Rungkut, Surabaya, East Java 60296', '10.00-17.00', 'Taman', '5.1597930396713', '2'),
(27, 'Kenjeran Park Surabaya', '351Kenjeran Park Surabaya.JPG', NULL, '0313821351', '15.000', '4,2', '6.078', 'Jalan Sukolilo Baru, Kec. Bulak, Surabaya, Jawa Timur 60122', '10.00-17.00', 'Kuliner dan Taman', '2.3018021761341', '12'),
(28, 'Kelenteng Sanggar Agung Kenjeran', '836Kelenteng Sanggar Agung Kenjeran.JPG', NULL, 'Tidak tersedia', '15.000', '4,2', '6.078', 'Jl. Sukolilo Baru, Kec. Bulak, Surabaya, Jawa Timur 60122', '10.00-17.00', 'Religi', '1.1597930396713', '24'),
(29, 'Kawasan Religi Sunan Ampel', '280Kawasan Sunan Ampel.JPG', NULL, 'Tidak tersedia', '0', '4,8', '5.263', 'Jl. Nyamplungan, Ampel, Kec. Semampir, Surabaya, Jawa Timur 60151', 'Buka 24 Jam', 'Religi', '1.5384047841946', '22'),
(33, 'Kawasan Kuliner G-Walk', '145Kawasan Kuliner Gwalk.JPG', NULL, 'Tidak tersedia', '0', '4,6', '9.733', 'Jl. Niaga Gapura No.14, Lidah Kulon, Lakarsantri, Surabaya, East Java 60217', '09.00-00.00', 'Kuliner', '2.0768095683893', '15'),
(34, 'Kebun Raya Mangrove Surabaya', '169Mangrove Surabaya.jpg', NULL, 'Tidak tersedia', '0', '4,3', '1.473', 'Jalan Medokan Sawah Timur Segoro Tambak Sedati, Medokan Ayu, Kec. Rungkut, Surabaya, Jawa Timur 60295', '10.00-17.00', 'Taman', '3', '9'),
(35, 'Monumen Jalesveva Jayamahe Surabaya', '758Monumen Jalesveva Jayamahe.jpg', NULL, '0313201519', '0', '4,6', '1.305', 'Jl. Armada Timur Ujung, Ujung, Kec. Semampir, Surabaya, Jawa Timur 60155', '10.00-15.00', 'Monumen', '3', '10'),
(36, 'Monumen Kapal Selam', '602Monumen Kapal Selam.jpg', NULL, '0315490410', '15.000', '4,5', '15.809', 'Jl. Pemuda No.39, Embong Kaliasin, Kec. Genteng, Surabaya, Jawa Timur 60271', '10.00-17.00', 'Monumen', '3.3786117445234', '7'),
(37, 'Museum Dr. Soetomo Surabaya', '307Museum Dr. Soetomo.JPG', NULL, '0315467784', '0', '4,6', '712', 'Jl. Bubutan No.85-87, Bubutan, Kec. Bubutan, Surabaya, Jawa Timur 60174', '10.00-17.00', 'Museum', '3.1597930396713', '8'),
(38, 'Museum Pendidikan Surabaya', '642Museum Pendidikan Surabaya.JPG', NULL, 'Tidak tersedia', '0', '4,8', '865', 'Jl. Genteng Kali No.10, Genteng, Kec. Genteng, Surabaya, Jawa Timur 60275', '10.00-15.00', 'Museum', '3', '11'),
(39, 'Monumen Tugu Pahlawan', '465Tugu Pahlawan.jpg', NULL, '0313571100', '8.000', '4,7', '24.353', 'Jl. Pahlawan, Alun-alun Contong, Kec. Bubutan, Surabaya, Jawa Timur 60174', '10.00-15.00', 'Museum', '3.5384047841946', '6'),
(40, 'Surabaya Museum (Gedung Siola)', '238Jl. Tunjungan.JPG', NULL, 'Tidak tersedia', '0', '4,6', '7.131', 'Jl. Tunjungan No.1, Genteng, Kec. Genteng, Surabaya, Jawa Timur 60275', '07.00-21.00', 'Museum', '2.2366026080606', '14'),
(41, 'Pantai Kenjeran Lama', '180Pantai Kenjeran Lama.jpg', NULL, 'Tidak tersedia', '10.000', '4,3', '3.554', 'Jl. Pantai Kenjeran No.1-6, Kenjeran, Kec. Bulak, Surabaya, Jawa Timur 60123', '10.00-18.00', 'Pantai', '2.3018021761341', '13'),
(42, 'Patung Suro dan Boyo', '923Patung Suro dan Boyo.JPG', NULL, 'Tidak tersedia', '0', '4,6', '6.576', 'Jl. Diponegoro No.1-B, Darmo, Kec. Wonokromo, Surabaya, Jawa Timur 60241', 'Buka 24 Jam', 'Monumen', '1.5384047841946', '23'),
(43, 'Patung Buddha Empat Wajah', '890Patung Buddha Empat Wajah.JPG', NULL, 'Tidak tersedia', '0', '4,7', '15', 'Jl. Pantai Ria Kenjeran No.8, Sukolilo Baru, Kec. Bulak, Surabaya, Jawa Timur 60122', '10.00-17.00', 'Religi', '1', '25'),
(44, 'Surabaya North Quay', '358Surabaya North Quay.JPG', NULL, '0313568050', '10.000', '4,4', '20.438', 'Jl. Perak Utara, Kec. Pabean Cantikan, Surabaya, Jawa Timur 60165', '13.00-19.00', 'Pelabunan', '4.2366026080606', '3'),
(45, 'Taman Apsari', '759Taman Apsari.JPG', NULL, 'Tidak tersedia', '0', '4,6', '6.899', 'Jl. Taman Apsari No.63, Embong Kaliasin, Kec. Genteng, Surabaya, Jawa Timur 60271', 'Buka 24 Jam', 'Taman', '1.6981978238659', '18'),
(46, 'Taman Bungkul', '799Taman Bungkul.jpg', NULL, 'Tidak tersedia', '0', '4,6', '54.174', 'Jl. Taman Bungkul, Darmo, Kec. Wonokromo, Surabaya, Jawa Timur 60241', 'Buka 24 Jam', 'Taman', '1.6981978238659', '19'),
(48, 'Taman Ekspresi Dan Perpustakaan', '710Taman Ekspresi.JPG', NULL, 'Tidak tersedia', '5.000', '4,5', '339', 'Jl. Genteng Kali No.67, Genteng, Kec. Genteng, Surabaya, Jawa Timur 60275', '10.00-16.00', 'Taman', '1.6981978238659', '20'),
(51, 'Taman Prestasi Surabaya', '402Taman Prestasi.JPG', NULL, 'Tidak tersedia', '5.000', '4,6', '8.150', 'Jl. Ketabang Kali No.6, Ketabang, Kec. Genteng, Surabaya, Jawa Timur 60272', '10.00-17.00', 'Taman', '1.6981978238659', '21'),
(52, 'Wisata perahu kalimas', '914Wisata Perahu Kalimas.JPG', NULL, 'Tidak tersedia', '5.000', '4', '124', 'Jl. Ketabang Kali No.2-B, Ketabang, Kec. Genteng, Surabaya, Jawa Timur 60272', '15.00-21.00', 'Wisata Perahu', '3.6981978238659', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `kode_kriteria` int(16) NOT NULL,
  `nama_kriteria` varchar(255) DEFAULT NULL,
  `atribut` varchar(16) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`kode_kriteria`, `nama_kriteria`, `atribut`) VALUES
(1, 'Harga', 'cost'),
(2, 'Fasilitas', 'cost'),
(4, 'Kenyamanan', 'cost'),
(9, 'Protokol Kesehatan', 'cost'),
(10, 'Akses Wisata', 'cost');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `kode_pegawai` varchar(16) NOT NULL,
  `nama_pegawai` varchar(16) DEFAULT NULL,
  `ket_pegawai` varchar(16) DEFAULT NULL,
  `user` varchar(16) DEFAULT NULL,
  `pass` binary(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`kode_pegawai`, `nama_pegawai`, `ket_pegawai`, `user`, `pass`) VALUES
('K01', 'kemasan', 'data pengajuan k', 'kemasan', 0x24327924313024332f4f4a4f594d4f4956586f4d574858656e724d68756c616f5662443153527170304663685866306769614362394757374d41556d),
('K02', 'balowerti', 'data pengajuan k', 'balowerti', 0x2432792431302464654754704e6a6165564a6c7439654e51634868794f4f5763567033674a65422f77475149423662717a39615932766f38785a734f);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rel_kendaraan`
--

CREATE TABLE `tb_rel_kendaraan` (
  `ID` int(11) NOT NULL,
  `kode_kendaraan` varchar(16) DEFAULT NULL,
  `kode_kriteria` varchar(16) DEFAULT NULL,
  `nilai` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_rel_kendaraan`
--

INSERT INTO `tb_rel_kendaraan` (`ID`, `kode_kendaraan`, `kode_kriteria`, `nilai`) VALUES
(123, '24', '10', 9),
(119, '24', '2', 9),
(197, '37', '9', 5),
(102, '21', '4', 7),
(101, '21', '2', 9),
(106, '22', '1', 1),
(105, '21', '10', 7),
(196, '37', '4', 5),
(108, '22', '4', 5),
(112, '23', '1', 1),
(111, '22', '10', 3),
(195, '37', '2', 3),
(114, '23', '4', 3),
(122, '24', '9', 9),
(194, '37', '1', 3),
(120, '24', '4', 9),
(118, '24', '1', 1),
(117, '23', '10', 7),
(116, '23', '9', 5),
(113, '23', '2', 3),
(110, '22', '9', 7),
(107, '22', '2', 3),
(104, '21', '9', 9),
(100, '21', '1', 5),
(193, '36', '10', 5),
(130, '26', '1', 5),
(131, '26', '2', 5),
(132, '26', '4', 5),
(192, '36', '9', 1),
(134, '26', '9', 7),
(135, '26', '10', 1),
(136, '27', '1', 3),
(137, '27', '2', 1),
(138, '27', '4', 3),
(191, '36', '4', 1),
(140, '27', '9', 1),
(141, '27', '10', 1),
(142, '28', '1', 1),
(143, '28', '2', 1),
(144, '28', '4', 3),
(190, '36', '2', 5),
(146, '28', '9', 3),
(147, '28', '10', 3),
(148, '29', '1', 1),
(149, '29', '2', 3),
(150, '29', '4', 5),
(189, '36', '1', 3),
(152, '29', '9', 1),
(153, '29', '10', 3),
(188, '35', '10', 3),
(187, '35', '9', 3),
(186, '35', '4', 5),
(172, '33', '1', 1),
(173, '33', '2', 5),
(174, '33', '4', 7),
(185, '35', '2', 3),
(176, '33', '9', 1),
(177, '33', '10', 1),
(178, '34', '1', 3),
(179, '34', '2', 3),
(180, '34', '4', 3),
(184, '35', '1', 3),
(182, '34', '9', 3),
(183, '34', '10', 3),
(198, '37', '10', 5),
(199, '38', '1', 3),
(200, '38', '2', 3),
(201, '38', '4', 3),
(202, '38', '9', 3),
(203, '38', '10', 3),
(204, '39', '1', 3),
(205, '39', '2', 5),
(206, '39', '4', 5),
(207, '39', '9', 3),
(208, '39', '10', 5),
(209, '40', '1', 1),
(210, '40', '2', 5),
(211, '40', '4', 1),
(212, '40', '9', 3),
(213, '40', '10', 3),
(214, '41', '1', 3),
(215, '41', '2', 1),
(216, '41', '4', 1),
(217, '41', '9', 1),
(218, '41', '10', 1),
(219, '42', '1', 1),
(220, '42', '2', 3),
(221, '42', '4', 3),
(222, '42', '9', 1),
(223, '42', '10', 3),
(224, '43', '1', 1),
(225, '43', '2', 1),
(226, '43', '4', 3),
(227, '43', '9', 1),
(228, '43', '10', 1),
(229, '44', '1', 3),
(230, '44', '2', 7),
(231, '44', '4', 7),
(232, '44', '9', 5),
(233, '44', '10', 5),
(234, '45', '1', 1),
(235, '45', '2', 3),
(236, '45', '4', 3),
(237, '45', '9', 3),
(238, '45', '10', 3),
(239, '46', '1', 1),
(240, '46', '2', 3),
(241, '46', '4', 3),
(242, '46', '9', 3),
(243, '46', '10', 3),
(249, '48', '1', 1),
(250, '48', '2', 3),
(251, '48', '4', 3),
(252, '48', '9', 3),
(253, '48', '10', 3),
(264, '51', '1', 1),
(265, '51', '2', 3),
(266, '51', '4', 3),
(267, '51', '9', 3),
(268, '51', '10', 3),
(269, '52', '1', 3),
(270, '52', '2', 5),
(271, '52', '4', 5),
(272, '52', '9', 5),
(273, '52', '10', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rel_kriteria`
--

CREATE TABLE `tb_rel_kriteria` (
  `ID` int(11) NOT NULL,
  `ID1` varchar(16) DEFAULT NULL,
  `ID2` varchar(16) DEFAULT NULL,
  `nilai` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_rel_kriteria`
--

INSERT INTO `tb_rel_kriteria` (`ID`, `ID1`, `ID2`, `nilai`) VALUES
(1, '1', '2', 9),
(3, '1', '4', 3),
(5, '2', '4', 9),
(21, '2', '9', 3),
(20, '1', '10', 7),
(19, '1', '9', 1),
(22, '2', '10', 5),
(23, '4', '9', 1),
(24, '4', '10', 5),
(25, '9', '10', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `kode_user` varchar(16) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `user` varchar(16) DEFAULT NULL,
  `pass` binary(60) DEFAULT NULL,
  `level` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`kode_user`, `nama_user`, `user`, `pass`, `level`) VALUES
('U001', 'Administrator', 'admin', 0x243279243130246267596b78702e76506e372f7850414b505a764f612e7473687a342f426a3642787a587461686b4e4270636f6d6769583079564a79, 'admin'),
('U042', 'Pengguna', 'pengguna', 0x2432792431302446754c596e6333684b474b57773634793476495672656e71794f632e6371464f757851444d526b6f796e32466e4f4a326967306e6d, 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD PRIMARY KEY (`kode_kendaraan`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`kode_kriteria`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`kode_pegawai`);

--
-- Indexes for table `tb_rel_kendaraan`
--
ALTER TABLE `tb_rel_kendaraan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_rel_kriteria`
--
ALTER TABLE `tb_rel_kriteria`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  MODIFY `kode_kendaraan` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `kode_kriteria` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_rel_kendaraan`
--
ALTER TABLE `tb_rel_kendaraan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `tb_rel_kriteria`
--
ALTER TABLE `tb_rel_kriteria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
