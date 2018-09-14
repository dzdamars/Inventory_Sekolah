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
-- Table structure for table `habis_pakai`
--

CREATE TABLE IF NOT EXISTS `habis_pakai` (
  `dev_name_hb` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `num` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `habis_pakai`
--

INSERT INTO `habis_pakai` (`dev_name_hb`, `price`, `num`, `qty`) VALUES
('MUG', 15000, '', 4),
('KERTAS HVS', 250, '', -7),
('TUMBLER', 16000, '', 0),
('PIN', 2500, '', -1),
('CD', 5000, '', -5),
('TINTA PRINTER', 10000, '', -10),
('ALAT TULIS', 10000, '', -4),
('FLASHDISK', 80000, '', 0),
('CD/DVD', 5000, '', 0),
('KERTAS FOTO', 2000, '', -2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
