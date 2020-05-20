-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 10:18 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `ppdb`
--

CREATE TABLE `ppdb` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nisn` char(10) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal` char(50) NOT NULL,
  `jenis-kelamin` char(50) NOT NULL,
  `agama` char(50) NOT NULL,
  `kewarganegaraan` char(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rtrw` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota-kabupaten` varchar(50) NOT NULL,
  `propinsi` varchar(50) NOT NULL,
  `kodepos` varchar(50) NOT NULL,
  `handphone` char(12) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppdb`
--

INSERT INTO `ppdb` (`id`, `nama`, `nisn`, `tempat`, `tanggal`, `jenis-kelamin`, `agama`, `kewarganegaraan`, `alamat`, `rtrw`, `kelurahan`, `kecamatan`, `kota-kabupaten`, `propinsi`, `kodepos`, `handphone`, `email`) VALUES
(1, 'Muhamad Aditia Saputra', '1139114', 'Jakarta', '24 Maret 1996', 'Laki-laki', 'Islam', 'Indonesia', 'Jl Rawa Kuning', '02/07', 'Pulogebang', 'Cakung', 'Jakarta Timur', 'DKI Jakarta', '13950', '089666096240', 'aditiasaputra24@gmail.com'),
(2, 'Yunita Aulia Hasma', '1140500', 'Medan', '30 Juni1996', 'Perempuan', 'Islam', 'Indonesia', 'Jl Rawa Bebek', '04/10', 'Pulogebang', 'Cakung', 'Jakarta Timur', 'DKI Jakarta', '13950', '087788662211', 'yunita.aulia30@yahoo.co.id'),
(3, 'Dedi Apriyadi', '1210050', 'Bandung', '12 September 1996', 'Laki-laki', 'Islam', 'Indonesia', 'Jl Raya Pulogebang', '12/10', 'Pulogebang', 'Cakung', 'Jakarta Timur', 'DKI Jakarta', '13950', '081255221166', 'dediapriyadi12@rocketmail.com'),
(4, 'Putri Wulandari', '1302020', 'Jakarta', '08 Mei 1996', 'Perempuan', 'Islam', 'Indonesia', 'Jl Raya Komarudin', '11/02', 'Pulogebang', 'Cakung', 'Jakarta Timur', 'DKI Jakarta', '13950', '081345002000', 'putriwulandari08@gmail.com'),
(5, 'Ferry Handoko', '1186030', 'Palembang', '10 Oktober 1996', 'Laki-laki', 'Islam', 'Indonesia', 'Jl Raya Ujung Menteng', '12/08', 'Pulogebang', 'Cakung', 'Jakarta Timur', 'DKI Jakarta', '13950', '085785001500', 'ferryhandoko10@yahoo.com'),
(6, 'Bagus Wijaya Mahendra', '1144520', 'Bandung', '17 Agustus 1996', 'Laki-laki', 'Islam', 'Indonesia', 'Jl Rawa Kuning', '07/07', 'Pulogebang', 'Cakung', 'Jakarta Timur', 'DKI Jakarta', '13950', '089955449000', 'baguswijaya17@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `smp`
--

<<<<<<< HEAD
CREATE TABLE `smp`
(
  `id` int
(11) NOT NULL,
  `asal_sekolah` varchar
(255) NOT NULL,
  `alamat_sekolah` varchar
(255) NOT NULL,
  `nilai_un` varchar
(5) NOT NULL
=======
CREATE TABLE `smp` (
  `id` int(11) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `alamat_sekolah` varchar(255) NOT NULL,
  `nilai_un` varchar(5) NOT NULL
>>>>>>> 2dff8442023e38b05b53f03ffb98e9afb7241182
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smp`
--

<<<<<<< HEAD
INSERT INTO `smp` (`
id`,
`asal_sekolah
`, `alamat_sekolah`, `nilai_un`) VALUES
=======
INSERT INTO `smp` (`id`, `asal_sekolah`, `alamat_sekolah`, `nilai_un`) VALUES
>>>>>>> 2dff8442023e38b05b53f03ffb98e9afb7241182
(1, 'SMPN 172 Pulogebang', 'Jl. St. Cakung No.2, RT.10/RW.3, Pulo Gebang, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13950', '9.0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

<<<<<<< HEAD
CREATE TABLE `user`
(
  `id` int
(11) NOT NULL,
  `nama` varchar
(255) NOT NULL,
  `email` varchar
(255) NOT NULL,
  `username` varchar
(255) NOT NULL,
  `password` varchar
(255) NOT NULL,
  `level` varchar
(20) NOT NULL
=======
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
>>>>>>> 2dff8442023e38b05b53f03ffb98e9afb7241182
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

<<<<<<< HEAD
INSERT INTO `user`
  (`id`, `nama
`, `email`, `username`, `password`, `level`) VALUES
=======
INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`, `level`) VALUES
>>>>>>> 2dff8442023e38b05b53f03ffb98e9afb7241182
(1, 'Administrator', 'admin@admin.com', 'admin', 'admin', 'admin'),
(2, 'Supriyanto', 'supriyanto@gmail.com', 'supriyanto', 'supriyanto123', 'guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ppdb`
--
ALTER TABLE `ppdb`
<<<<<<< HEAD
ADD PRIMARY KEY
(`id`);
=======
  ADD PRIMARY KEY (`id`);
>>>>>>> 2dff8442023e38b05b53f03ffb98e9afb7241182

--
-- Indexes for table `smp`
--
ALTER TABLE `smp`
<<<<<<< HEAD
ADD PRIMARY KEY
(`id`);
=======
  ADD PRIMARY KEY (`id`);
>>>>>>> 2dff8442023e38b05b53f03ffb98e9afb7241182

--
-- Indexes for table `user`
--
ALTER TABLE `user`
<<<<<<< HEAD
ADD PRIMARY KEY
(`id`);
=======
  ADD PRIMARY KEY (`id`);
>>>>>>> 2dff8442023e38b05b53f03ffb98e9afb7241182

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ppdb`
--
ALTER TABLE `ppdb`
<<<<<<< HEAD
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
>>>>>>> 2dff8442023e38b05b53f03ffb98e9afb7241182

--
-- AUTO_INCREMENT for table `smp`
--
ALTER TABLE `smp`
<<<<<<< HEAD
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> 2dff8442023e38b05b53f03ffb98e9afb7241182

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
<<<<<<< HEAD
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
>>>>>>> 2dff8442023e38b05b53f03ffb98e9afb7241182

--
-- Constraints for dumped tables
--

--
-- Constraints for table `smp`
--
ALTER TABLE `smp`
<<<<<<< HEAD
ADD CONSTRAINT `smp_ibfk_1` FOREIGN KEY
(`id`) REFERENCES `ppdb`
(`id`);
=======
  ADD CONSTRAINT `smp_ibfk_1` FOREIGN KEY (`id`) REFERENCES `ppdb` (`id`);
>>>>>>> 2dff8442023e38b05b53f03ffb98e9afb7241182
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
