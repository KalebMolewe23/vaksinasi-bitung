-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 01:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaksin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `idabout` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `media1` varchar(100) NOT NULL,
  `media2` varchar(100) NOT NULL,
  `media3` varchar(100) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`idabout`, `phone`, `email`, `address`, `media1`, `media2`, `media3`, `about`) VALUES
(1, '0832938912381', 'emailanda@mailmail.com', 'Manokwari. Papua Barat test', 'media test', 'media test 2', 'media test 3', 'ini about testing ini about testing ini about testing ini about testing ini about testing ini about testing ini about testing ini about testing ini about testing ini about testingini about testingini about testing ini about testing\r\nini about testing ini about testing ini about testing\r\nini about testing');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `idarea` int(11) NOT NULL,
  `area_name` varchar(100) NOT NULL,
  `geojson` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`idarea`, `area_name`, `geojson`) VALUES
(1, 'Kecamatan Matuari', 'kec_matuari.geojson'),
(2, 'Kecamatan Ranuwulu', 'kec_ranowulu.geojson'),
(3, 'Kecamatan Girian', 'kec_girian.geojson'),
(4, 'Kecamatan Madidir', 'kec_madidir.geojson'),
(5, 'Kecamatan Maesa', 'kec_maesa.geojson'),
(6, 'Kecamatan Aertembaga', 'kec_aertembaga.geojson'),
(7, 'Kecamatan Lembeh Selatan', 'kec_lembeh_sel.geojson'),
(8, 'Kecamatan Lembeh Utara', 'kec_lembeh_ut.geojson');

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `idbackground` int(11) NOT NULL,
  `bg_name` varchar(100) NOT NULL,
  `bg_color` varchar(100) NOT NULL,
  `bg_color_second` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`idbackground`, `bg_name`, `bg_color`, `bg_color_second`) VALUES
(1, 'VAKSINASI BITUNG', '#0b07ed', '#17bdd3');

-- --------------------------------------------------------

--
-- Table structure for table `centroid_temp`
--

CREATE TABLE `centroid_temp` (
  `idcentroid_temp` int(11) NOT NULL,
  `idata_vaccien` int(11) NOT NULL,
  `iterasi` int(11) NOT NULL,
  `c1` double NOT NULL,
  `c2` double NOT NULL,
  `c3` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centroid_temp`
--

INSERT INTO `centroid_temp` (`idcentroid_temp`, `idata_vaccien`, `iterasi`, `c1`, `c2`, `c3`) VALUES
(1, 2, 1, 1, 0, 0),
(2, 3, 1, 0, 1, 0),
(3, 4, 1, 1, 0, 0),
(4, 5, 1, 1, 0, 0),
(5, 6, 1, 1, 0, 0),
(6, 7, 1, 0, 1, 0),
(7, 8, 1, 0, 0, 1),
(8, 9, 1, 0, 0, 1),
(9, 2, 2, 1, 0, 0),
(10, 3, 2, 0, 1, 0),
(11, 4, 2, 1, 0, 0),
(12, 5, 2, 1, 0, 0),
(13, 6, 2, 1, 0, 0),
(14, 7, 2, 0, 1, 0),
(15, 8, 2, 0, 0, 1),
(16, 9, 2, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_vaccien`
--

CREATE TABLE `data_vaccien` (
  `idata_vaccien` int(11) NOT NULL,
  `idarea` int(11) NOT NULL,
  `population` int(11) NOT NULL,
  `minors1` varchar(100) NOT NULL,
  `elderly1` varchar(100) NOT NULL,
  `not_vaccine1` varchar(100) NOT NULL,
  `vaccien_1` int(11) NOT NULL,
  `minors2` varchar(100) NOT NULL,
  `elderly2` varchar(100) NOT NULL,
  `not_vaccine2` varchar(100) NOT NULL,
  `vaccien_2` int(11) NOT NULL,
  `minors3` varchar(100) NOT NULL,
  `elderly3` varchar(100) NOT NULL,
  `not_vaccine3` varchar(100) NOT NULL,
  `vaccien_3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_vaccien`
--

INSERT INTO `data_vaccien` (`idata_vaccien`, `idarea`, `population`, `minors1`, `elderly1`, `not_vaccine1`, `vaccien_1`, `minors2`, `elderly2`, `not_vaccine2`, `vaccien_2`, `minors3`, `elderly3`, `not_vaccine3`, `vaccien_3`) VALUES
(2, 1, 36487, '12262', '12262', '11963', 24524, '10002', '10002', '16483', 20004, '4262', '4261', '27964', 8523),
(3, 2, 19661, '7819', '7818', '4024', 15637, '6565', '6565', '6531', 13130, '3084', '3083', '13494', 6167),
(4, 3, 35424, '12429', '12428', '10567', 24857, '9925', '9924', '15575', 19849, '4239', '4239', '26946', 8478),
(5, 4, 34612, '14373', '14372', '5867', 28745, '11761', '11761', '11090', 23522, '5193', '5193', '24226', 10386),
(6, 5, 37918, '15871', '15871', '6176', 31742, '12173', '12172', '13573', 24345, '4551', '4550', '28817', 9101),
(7, 6, 28897, '12117', '12117', '4663', 24234, '9317', '9316', '10264', 18633, '3503', '3503', '21891', 7006),
(8, 7, 10532, '4058', '4057', '2417', 8115, '3001', '3001', '4530', 6002, '979', '978', '8575', 1957),
(9, 8, 9328, '4112', '4112', '1104', 8224, '3365', '3365', '2598', 6730, '1095', '1095', '7138', 2190);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_centroid`
--

CREATE TABLE `hasil_centroid` (
  `idhasil_centorid` int(11) NOT NULL,
  `c1a` double NOT NULL,
  `c1b` double NOT NULL,
  `c1c` double NOT NULL,
  `c2a` double NOT NULL,
  `c2b` double NOT NULL,
  `c2c` double NOT NULL,
  `c3a` double NOT NULL,
  `c3b` double NOT NULL,
  `c3c` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil_centroid`
--

INSERT INTO `hasil_centroid` (`idhasil_centorid`, `c1a`, `c1b`, `c1c`, `c2a`, `c2b`, `c2c`, `c3a`, `c3b`, `c3c`) VALUES
(1, 8643.25, 14180.25, 26988.25, 4343.5, 8397.5, 17692.5, 1760.5, 3564, 7856.5),
(2, 8643.25, 14180.25, 26988.25, 4343.5, 8397.5, 17692.5, 1760.5, 3564, 7856.5);

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `idsosmed` int(11) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`idsosmed`, `facebook`, `twitter`, `instagram`) VALUES
(1, 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `email` varchar(125) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nama_user`, `password`, `kontak`, `alamat`, `kode_pos`, `email`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'admin', 'admin', '$2y$10$PuHFO.rIzLvMokmer.jJwOxkQhGcROyvP/aH9o/U/tGxdXsePSLIi', '083923892', 'jl monokwari', 12313, 'admin@gmail.com', 1, 1, 1644553195);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id_menu`, `menu`) VALUES
(1, 'administrator'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_submenu`
--

CREATE TABLE `user_submenu` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`idbackground`);

--
-- Indexes for table `centroid_temp`
--
ALTER TABLE `centroid_temp`
  ADD PRIMARY KEY (`idcentroid_temp`);

--
-- Indexes for table `data_vaccien`
--
ALTER TABLE `data_vaccien`
  ADD PRIMARY KEY (`idata_vaccien`),
  ADD KEY `vaksin_area` (`idarea`);

--
-- Indexes for table `hasil_centroid`
--
ALTER TABLE `hasil_centroid`
  ADD PRIMARY KEY (`idhasil_centorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `idbackground` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `centroid_temp`
--
ALTER TABLE `centroid_temp`
  MODIFY `idcentroid_temp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_vaccien`
--
ALTER TABLE `data_vaccien`
  MODIFY `idata_vaccien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hasil_centroid`
--
ALTER TABLE `hasil_centroid`
  MODIFY `idhasil_centorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_vaccien`
--
ALTER TABLE `data_vaccien`
  ADD CONSTRAINT `vaksin_area` FOREIGN KEY (`idarea`) REFERENCES `area` (`idarea`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
