-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2018 at 05:19 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `st_barang`
--

CREATE TABLE IF NOT EXISTS `st_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `st_barang`
--

INSERT INTO `st_barang` (`id`, `dev_id`, `dev_desc`, `dev_serial`, `dev_brand`, `dev_model`, `dev_status`, `nomor_urut`, `lokasi`, `tahun`, `qty`, `dev_sumber`, `price`, `st_date`, `kelas`, `jurusan`, `status`, `hasil`, `nis`) VALUES
(1, '3', '																										dwdwdwdwdwd																								', '101010', '', 'odqodqodqodqo', 'Used', '10', '', '9009', 20, 'APBN', 12000, '0000-00-00', '', '', 'LUNAS', 0, 0),
(2, '6&nbspName&nbspTINTA PRINTER', '', 'T001', '', 'EPSON', 'New', '3', '', '2018', 10, 'APBS', 12000, '0000-00-00', '', '', 'LUNAS', 0, 0),
(7, '', '', 'Sheilamita Utami Putri', '', 'Kertas HVS', 'Used', '', 'Lab MM4', '', 37, '', 250, '2018-06-04', 'XI MM 2', 'MULTIMEDIA', 'LUNAS', 9250, 0),
(8, '', '', 'Sheilamita Utami Putri', '', 'Kertas HVS', 'Used', '', 'Lab MM4', '', 37, '', 250, '2018-06-04', 'XI MM 2', 'MULTIMEDIA', 'LUNAS', 9250, 0),
(9, '', '', 'Ferdy Rahman', '', 'Tumblr', 'New', '', 'Lab MM1', '', 2, '', 16000, '2018-06-04', 'XI MM 2', 'MULTIMEDIA', 'LUNAS', 32000, 0),
(10, '4', '																									', 'Dzumaratin Damar Sasongko', '', 'Mug', 'New', '37', 'Lab MM1', '2018', 100, 'APBN', 15000, '2018-06-04', 'XI MM 2', 'MULTIMEDIA', 'LUNAS', 1500000, 0),
(11, '2&nbspName&nbspMUG', 'cool', '0810', '', 'mantap', 'Used', '2', '', '2018', 3, 'APBD', 0, '0000-00-00', '', '', '', 0, 0),
(12, '1&nbspName&nbspKERTAS HVS', 'Barang Habis Pakai', '1-1001', '', 'A4 SIDU', 'New', '1', '', '2018', 1, 'APBS', 0, '0000-00-00', '', '', '', 0, 0),
(13, '10&nbspName&nbspKERTAS FOTO', 'Glosy Photo Paper', '1-201', '', 'A4 KERTAS PHOTO', 'New', '1', '', '2018', 1, 'APBS', 0, '0000-00-00', '', '', '', 0, 0),
(21, '', '', 'GURU', '', 'Kertas HVS', 'New', '', 'Other..', '', 100, '', 250, '2018-06-29', 'KANTOR', 'PERGURUAN', 'LUNAS', 25000, 0),
(22, '', '', 'GURU', '', 'Tinta', 'New', '', 'Lab MM1', '', 1, '', 0, '2018-06-29', 'KANTOR', 'PERGURUAN', '', 0, 0),
(41, '', '', 'Trisna Maryam Defitriyani', '', 'Pin', 'New', '', 'Lab MM3', '', 2, '', 2500, '2018-06-30', 'XI MM 2', 'MULTIMEDIA', '', 5000, 0),
(45, '', '', 'Salsa Putri Rahmalia', '', 'Kertas HVS', 'New', '', 'Lab MM1', '', 5, '', 250, '2018-06-30', 'XI MM 2', 'MULTIMEDIA', 'BELUM LUNAS', 1250, 0),
(47, '', '', 'Salsa Putri Rahmalia', '', 'Kertas HVS', 'New', '', 'Lab MM1', '', 37, '', 250, '2018-06-16', 'XI MM 2', 'MULTIMEDIA', '', 9250, 0),
(48, '', '', 'guru', '', 'Mug', 'New', '', 'Lab MM1', '', 2, '', 15000, '2018-06-23', 'kantor', 'perguruan', 'BELUM LUNAS', 30000, 0),
(49, '', '', 'guru', '', 'KertasHVS', 'New', '', 'Lab MM1', '', 2, '', 250, '2018-06-30', 'kantor', 'perguruan', 'LUNAS', 500, 0),
(50, '', '', 'guru', '', 'KertasHVS', 'Used', '', 'Lab MM1', '', 1, '', 250, '2018-06-30', 'kantor', 'perguruan', 'BELUM LUNAS', 250, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
