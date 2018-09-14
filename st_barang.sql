-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 11:38 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `st_barang`
--

CREATE TABLE IF NOT EXISTS `st_barang` (
  `id` int(11) NOT NULL,
  `dev_id` varchar(150) NOT NULL,
  `dev_desc` varchar(150) NOT NULL,
  `dev_serial` varchar(150) NOT NULL,
  `dev_brand` varchar(150) NOT NULL,
  `dev_model` varchar(150) NOT NULL,
  `dev_status` varchar(150) NOT NULL,
  `nomor_urut` varchar(150) NOT NULL,
  `lokasi` varchar(150) NOT NULL,
  `tahun` varchar(150) NOT NULL,
  `qty` int(11) NOT NULL,
  `dev_sumber` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `st_date` date NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `hasil` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `dev_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_barang`
--

INSERT INTO `st_barang` (`id`, `dev_id`, `dev_desc`, `dev_serial`, `dev_brand`, `dev_model`, `dev_status`, `nomor_urut`, `lokasi`, `tahun`, `qty`, `dev_sumber`, `price`, `st_date`, `kelas`, `jurusan`, `status`, `hasil`, `nis`, `dev_name`) VALUES
(65, 'KertasHVS', '', '', '', '', 'Used', '', 'Lab MM1', '', 2, '', 250, '2018-06-02', 'XI MM 2', 'MULTIMEDIA', 'BELUM LUNAS', 500, 0, 'Ibnu Fadilah'),
(90, 'TINTA PRINTER', '', '', '', '', 'Used', '', 'Lab MM5', '', 5, '', 10000, '2018-06-21', 'XI MM 2', 'MULTIMEDIA', '', 50000, 0, 'Ibnu Fadilah'),
(91, 'ALAT TULIS', '', '', '', '', 'New', '', 'Lab MM1', '', 2, '', 10000, '2018-06-13', 'XI MM 2', 'MULTIMEDIA', '', 20000, 0, 'Ibnu Fadilah'),
(92, 'ALAT TULIS', '', '', '', '', 'New', '', 'Lab MM3', '', 2, '', 10000, '2018-06-14', 'XI MM 2', 'MULTIMEDIA', '', 20000, 0, 'Ibnu Fadilah'),
(93, 'KERTAS FOTO', '', '', '', '', 'Digunakan', '', 'Lab MM1', '', 1, '', 2000, '2018-06-14', 'kantor', 'perguruan', 'LUNAS', 2000, 0, 'didin'),
(94, 'KERTAS FOTO', '', '', '', '', 'baru', '', 'Lab MM1', '', 1, '', 2000, '2018-06-09', 'kantor', 'perguruan', '', 2000, 0, 'didin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `st_barang`
--
ALTER TABLE `st_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `st_barang`
--
ALTER TABLE `st_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=95;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
