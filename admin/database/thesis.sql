-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 18. April 2018 jam 02:04
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_log`
--

CREATE TABLE IF NOT EXISTS `activity_log` (
  `activity_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(128) NOT NULL,
  PRIMARY KEY (`activity_log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=372 ;

--
-- Dumping data untuk tabel `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(281, 'jonremus', '2018-04-11 23:34:33', 'Add device Detail id 3&nbspName&nbspPower cord'),
(282, 'jonremus', '2018-04-11 23:35:01', 'Edit device info Power cord'),
(283, 'admin', '2018-04-11 23:54:09', 'Add device Detail id 4&nbspName&nbspmouse'),
(284, 'admin', '2018-04-11 23:55:36', 'Add Client User damar'),
(285, 'admin', '2018-04-12 00:28:39', 'Add device Detail id 3&nbspName&nbspPower cord'),
(286, 'admin', '2018-04-13 00:17:08', 'Edit device info Central Processing unit (CPU)'),
(287, 'admin', '2018-04-13 00:34:50', 'Edit device info Central Processing unit (CPU)'),
(288, 'admin', '2018-04-13 13:58:02', 'Add device Detail id 4&nbspName&nbspmouse'),
(289, 'admin', '2018-04-14 12:46:28', 'Add device Detail id 3&nbspName&nbspPower cord'),
(290, 'admin', '2018-04-14 14:24:48', 'Assign Device id 126&nbspName&nbspPower cord to location id 22&nbspName&nbspComlab A'),
(291, 'admin', '2018-04-14 17:07:04', 'Add device Detail id <br />\r\n<b>Notice</b>:  Undefined index: dev_id in <b>C:xampphtdocsxampplatihanphpInventory_Kamvakadminadd_'),
(292, 'admin', '2018-04-14 17:15:29', 'Add device Detail id 4&nbspName&nbspAPBS'),
(293, 'admin', '2018-04-14 17:47:46', 'Add device Detail id 3&nbspName&nbspAPBN'),
(294, 'admin', '2018-04-14 18:02:57', 'Add device Detail id 3&nbspName&nbspAPBN'),
(295, 'admin', '2018-04-15 21:02:38', 'Update Status Power cord to Used '),
(296, 'admin', '2018-04-15 22:32:46', 'Update Status Power cord to Damage '),
(297, 'admin', '2018-04-15 22:33:48', 'Update Status Power cord to New '),
(298, 'admin', '2018-04-15 22:38:14', 'Add device Detail id 3&nbspName&nbspAPBN'),
(299, 'admin', '2018-04-15 22:39:27', 'Add device Detail id 3&nbspName&nbspAPBN'),
(300, 'admin', '2018-04-15 22:43:56', 'Add device Detail id 2&nbspName&nbspAPBD'),
(301, 'admin', '2018-04-15 22:44:15', 'Repair Device  Inventory Code:'),
(302, 'admin', '2018-04-15 22:44:27', 'Dump Device  Inventory Code:'),
(303, 'admin', '2018-04-15 23:16:19', 'Add device Detail id 2&nbspName&nbspkyboard'),
(304, 'admin', '2018-04-15 23:19:00', 'Add device Detail id 3&nbspName&nbspPower cord'),
(305, 'admin', '2018-04-15 23:25:05', 'Add device Detail id 3&nbspName&nbspPower cord'),
(306, 'admin', '2018-04-15 23:25:45', 'Add device Detail id 3&nbspName&nbspPower cord'),
(307, 'admin', '2018-04-15 23:27:38', 'Add device Detail id 4&nbspName&nbspmouse'),
(308, 'admin', '2018-04-15 23:29:21', 'Add device Type mantap'),
(309, 'admin', '2018-04-15 23:30:03', 'Add device Detail id 10&nbspName&nbspmantap'),
(310, 'admin', '2018-04-15 23:42:16', 'Add device Detail id 3&nbspName&nbspPower cord'),
(311, 'admin', '2018-04-15 23:47:22', 'Add device Detail id 2&nbspName&nbspkyboard'),
(312, 'admin', '2018-04-16 00:44:30', 'Assign Device id 136&nbspName&nbspPower cord to location id 22&nbspName&nbspLab.MM 1'),
(313, 'admin', '2018-04-16 08:03:30', 'Repair Device  Inventory Code:'),
(314, 'admin', '2018-04-16 08:03:39', 'Dump Device  Inventory Code:'),
(315, 'admin', '2018-04-16 08:04:32', 'Assign Device id 138&nbspName&nbspmouse to location id 22&nbspName&nbspLab.MM 1'),
(316, 'admin', '2018-04-16 08:53:58', 'Edit device info Power cord'),
(317, 'admin', '2018-04-16 09:02:17', 'Edit device info Power cord'),
(318, 'admin', '2018-04-16 09:02:30', 'Edit device info mantap'),
(319, 'admin', '2018-04-16 09:02:43', 'Edit device info Power cord'),
(320, 'admin', '2018-04-16 09:02:54', 'Edit device info kyboard'),
(321, 'admin', '2018-04-16 09:03:22', 'Edit device info Power cord'),
(322, 'admin', '2018-04-16 09:36:44', 'Add device Detail id 2&nbspName&nbspkyboard'),
(323, 'admin', '2018-04-16 09:39:24', 'Add device Detail id 3&nbspName&nbspPower cord'),
(324, 'admin', '2018-04-16 09:40:30', 'Add device Detail id 4&nbspName&nbspmouse'),
(325, 'admin', '2018-04-16 10:01:10', 'Add device Detail id 7&nbspName&nbspaircon'),
(326, 'admin', '2018-04-16 10:02:58', 'Add device Detail id 4&nbspName&nbspmouse'),
(327, 'admin', '2018-04-16 10:04:17', 'Add device Detail id 6&nbspName&nbspAVR'),
(328, 'admin', '2018-04-16 16:29:27', 'Repair Device mouse Inventory Code:80808080808'),
(329, 'admin', '2018-04-16 16:29:43', 'Repair Device  Inventory Code:'),
(330, 'admin', '2018-04-16 16:30:05', 'Dump Device  Inventory Code:'),
(331, 'admin', '2018-04-16 16:30:20', 'Repair Device  Inventory Code:'),
(332, 'admin', '2018-04-16 16:30:26', 'Repair Device  Inventory Code:'),
(333, 'admin', '2018-04-16 16:31:02', 'Repair Device  Inventory Code:'),
(334, 'admin', '2018-04-16 16:49:37', 'Edit device info Power cord'),
(335, 'admin', '2018-04-16 17:15:48', 'Edit device info mantap'),
(336, 'admin', '2018-04-16 17:21:21', 'Edit device info Central Processing unit (CPU)'),
(337, 'admin', '2018-04-16 17:22:47', 'Edit device info Power cord'),
(338, 'admin', '2018-04-16 17:23:09', 'Edit device info Power cord'),
(339, 'admin', '2018-04-16 17:25:08', 'Add device Detail id 3&nbspName&nbspPower cord'),
(340, 'admin', '2018-04-16 17:25:30', 'Add device Detail id 4&nbspName&nbspmouse'),
(341, 'admin', '2018-04-16 17:25:58', 'Add device Detail id 4&nbspName&nbspmouse'),
(342, 'admin', '2018-04-16 17:26:21', 'Add device Detail id 4&nbspName&nbspmouse'),
(343, 'admin', '2018-04-16 22:08:54', 'Add device Detail id 2&nbspName&nbspkyboard'),
(344, 'admin', '2018-04-16 22:27:23', 'Add device Detail id 5&nbspName&nbspCentral Processing unit (CPU)'),
(345, 'admin', '2018-04-16 22:43:39', 'Add device Detail id 3&nbspName&nbspPower cord'),
(346, 'admin', '2018-04-16 23:02:10', 'Edit device info Power cord'),
(347, 'admin', '2018-04-16 23:04:15', 'Edit device info Power cord'),
(348, 'admin', '2018-04-16 23:04:23', 'Edit device info Central Processing unit (CPU)'),
(349, 'admin', '2018-04-17 00:11:05', 'Edit device info Central Processing unit (CPU)'),
(350, 'admin', '2018-04-17 00:11:34', 'Assign Device id 153&nbspName&nbspCentral Processing unit (CPU) to location id 22&nbspName&nbspLab.MM 1'),
(351, 'admin', '2018-04-17 00:13:25', 'Update Status Central Processing unit (CPU) to New '),
(352, 'admin', '2018-04-17 00:13:57', 'transfer Device  Central Processing unit (CPU) to location id 23&nbspName&nbspLab.MM 2'),
(353, 'admin', '2018-04-17 00:18:02', 'Add device Detail id 3&nbspName&nbspPower cord'),
(354, 'admin', '2018-04-17 00:18:32', 'Assign Device id 155&nbspName&nbspPower cord to location id 22&nbspName&nbspLab.MM 1'),
(355, 'admin', '2018-04-17 00:18:32', 'Assign Device id 155&nbspName&nbspPower cord to location id 22&nbspName&nbspLab.MM 1'),
(356, 'admin', '2018-04-17 00:43:06', 'Add device Detail id 3&nbspName&nbspPower cord'),
(357, 'admin', '2018-04-17 00:44:10', 'Assign Device id 156&nbspName&nbspPower cord to location id 22&nbspName&nbspLab.MM 1'),
(358, 'admin', '2018-04-17 00:44:53', 'Update Status Power cord to Used '),
(359, 'admin', '2018-04-17 00:45:03', 'Update Status Central Processing unit (CPU) to Used '),
(360, 'admin', '2018-04-17 00:45:12', 'Update Status speaker to Damaged '),
(361, 'admin', '2018-04-17 00:45:52', 'Add device Detail id 3&nbspName&nbspPower cord'),
(362, 'admin', '2018-04-17 00:46:36', 'Update Status speaker to Damaged '),
(363, 'admin', '2018-04-17 00:47:34', 'Update Status speaker to New '),
(364, 'damar', '2018-04-17 08:51:08', 'Add device Detail id 3&nbspName&nbspPower cord'),
(365, 'damar', '2018-04-17 09:10:40', 'Add System User damar'),
(366, 'admin', '2018-04-17 22:12:44', 'Add device Detail id 2&nbspName&nbspkyboard'),
(367, 'admin', '2018-04-18 01:54:53', 'Add device Detail id '),
(368, 'admin', '2018-04-18 01:55:47', 'Add device Detail id '),
(369, 'admin', '2018-04-18 01:55:56', 'Add device Detail id '),
(370, 'admin', '2018-04-18 01:57:33', 'Add device Detail id 3&nbspName&nbspPower cord'),
(371, 'admin', '2018-04-18 02:02:55', 'Add device Detail id 3&nbspName&nbspPower cord');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(128) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `adminthumbnails` varchar(300) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`, `adminthumbnails`) VALUES
(6, 'Admin', 'admin', 'admin', 'admin2', 'uploads/50-Gambar-Untuk-Hari-Kemenangan-298x300.png'),
(7, '', '', '', 'akakkaka', ''),
(8, '', '', '', 'asdadsda', ''),
(9, 'dada', 'adada', 'assasa', 'asddwd', 'ada@mail.com'),
(10, 'lala', '', 'kaka', 'koko', 'lalalala'),
(11, 'kakaka', 'lalalalla', 'kaka', 'koko', 'lalalalal'),
(12, 'damar', 'damar', 'damar', 'damar', 'uploads/601d00c9fdd320ae7fe23cd4aa9418f3.jpg'),
(13, 'dzdamar', 'damardz', 'damar', 'damar2', ''),
(14, 'damar', 'damar', 'damar', 'damar3', 'uploads/50-Gambar-Untuk-Hari-Kemenangan-298x300.png'),
(15, 'damar', 'damar', 'damar3', 'damar4', 'images/NO-IMAGE-AVAILABLE.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(128) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `thumbnails` varchar(200) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`client_id`, `username`, `password`, `firstname`, `lastname`, `thumbnails`) VALUES
(10, 'oting', 'oting', 'Reynaldo', 'Tianzon', 'uploads/141113161942-large.jpg'),
(11, 'kiritosan23', 'kirito', 'Joecel', 'Ongsip', 'uploads/10933713_756692371081917_31846816310386324_n.jpg'),
(12, 'asylum1121', 'kevineleven11', 'Kevin Jone', 'Camparecio', 'images/NO-IMAGE-AVAILABLE.jpg'),
(13, 'damar', 'ganteng', 'damar', 'ganteng', 'images/NO-IMAGE-AVAILABLE.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`content_id`, `title`, `content`) VALUES
(1, 'Mission', '<pre>\n<span style="font-size:16px"><strong>Mission</strong></span></pre>\n\n<p style="text-align:left"><span style="font-family:arial,helvetica,sans-serif; font-size:medium"><span style="font-size:large">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span>&nbsp; &nbsp;<span style="font-size:18px"> &nbsp; &nbsp; &nbsp;Respecting the human dignity and unique talents of each person, Southland College is dedicated in helping its students actualizetheir potentials for the enchancementof their own lives and or nationals Development.&nbsp;</span></p>\n\n<p style="text-align:left">&nbsp;</p>\n'),
(2, 'Vision', '<pre><span style="font-size: large;"><strong>Vision</strong></span></pre>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: large;">&nbsp; A progressive educational community where the individual is at the core of his own learning </span><br /><br /></p>'),
(3, 'History', '<pre><span style="font-size: large;">HISTORY &nbsp;</span> </pre>\n<p style="text-align: justify;"><span style="font-family:arial,helvetica,sans-serif; font-size:medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The southland college story is the intermingling of imposibilities and unbelief, against optimism and faith.the story of this new school is a beatifull retelling of god''s goodness; his hands helping shape the foundation of southland college.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amid Challeges, stumbling blocks, and interfering forces, southland college was established-a shining testamentof God''s wondrous ways and his helping hand for those who trust in Him.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Deeply saddened by the anticipated mass resignation of the faculty and staff with the change of leadership of a private school where he was the former president, DR. Anecito D. Villaluz, Jr. Decided to put up his own school where he could freely make use of his publicity acknowledged and admired managerial skills and organizational expertise.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the preparations for the new school started in March 2009. The incorporators who compose the Board of directors are Dr.Villaluz, Chairman; Mrs. Annette Z. Villaluz, vice-chairman; Dr. Emiliano L. Sama,Jr.,corporate secretary; Mrs.Yvonne Z. Rocha, Treasurer; and Dr.Rhoda J. Amor,Dr. Grace A. Badrina, Dr. Henly S. Pahilagao, and Mr. Miguel M. Zayco, directors.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The securities and Exchange Commision (DepEd) issurd the school registration permiton March 24,2009.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The department of Education (DepEd) Western Visayas Regional office issued the permit for the basic education on June 1. 2009. The school established the consortium with the Northern Negros state College of Science and Technology (NONESCOST) for the Nursing Degree program, and with the Negros Oriental State Accounting Technology, BS Business Administrators, BS Hospiitality Management, and the 2-year Midwifery course. The administrators, faculty and staff, parents and strengthen the new school. Each of them undertook the assigned task without expecting any personal reward. it was evidend that God is shaping the southland destiny throught the hearts, hands and minds of these people.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Regional Quality Assesment Team (RQUAT) and Commission on Higher Education (CHEd) Supersvisors readily issuad permits for all degree programs After validating the requirements and inspecting the facilities.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The school was formerly launched on May 13, 2009. It was followed by the a grand caravan. The following days saw the advertisements and promotion blitz in variious towns and cities.<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By the end of the enrolment period, God gave soutland collegeits needed initial number of students. Enrolled during the school year 2009-2010 were: pre school, 69; elementary, 130; and High school, 122. During the first semester of the same school year, college enrolment reached 177. it was an impressive number for a new school which opened within a few months time after its inception.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A thanksgiving service with the theme "Triumph Amid Trials" was held on August 28, 2009 morning. It was immediatly followed by the school''s very first academic convocation. The officers of student councils, faculty and staff club, and the parents and teachers assembleis were inducted in the afternoon. aquaintance parties in all levels followed.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;amid the trials, Southland College is seen to Survive and Prevail for its story in a tapestry of good relationships, great resposibilities, and God''s redemption<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Indeed, at Southland College the foundation of God stand''s sure!\n</p>'),
(4, 'Footer', '<p style="text-align:center">Technology Resource Inventory System (T.R.S) Copyright 2015</p>\n\n<p style="text-align:center">All Rights Reserved &reg;2015</p>\n'),
(5, 'Title', '<p><span style="font-family:trebuchet ms,geneva">Technology Resource Inventory System</span></p>\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `device_name`
--

CREATE TABLE IF NOT EXISTS `device_name` (
  `dev_id` int(11) NOT NULL AUTO_INCREMENT,
  `dev_name` varchar(100) NOT NULL,
  PRIMARY KEY (`dev_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `device_name`
--

INSERT INTO `device_name` (`dev_id`, `dev_name`) VALUES
(2, 'kyboard'),
(3, 'Power cord'),
(4, 'mouse'),
(5, 'Central Processing unit (CPU)'),
(6, 'AVR'),
(7, 'aircon'),
(8, 'Monitor'),
(9, 'speaker'),
(10, 'mantap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `images`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jurusan_kamu` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan_kamu`) VALUES
(1, 'MULTIMEDIA'),
(2, 'RPL'),
(3, 'TKJ'),
(4, 'TP'),
(5, 'TKK'),
(6, 'TOI'),
(7, 'TKR'),
(8, 'SIJA'),
(9, 'TGB'),
(10, 'LAINNYA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `location_details`
--

CREATE TABLE IF NOT EXISTS `location_details` (
  `ld_id` int(11) NOT NULL AUTO_INCREMENT,
  `stdev_id` int(11) NOT NULL,
  `date_deployment` date NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`ld_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `location_details`
--

INSERT INTO `location_details` (`ld_id`, `stdev_id`, `date_deployment`, `id`) VALUES
(7, 22, '2018-04-16', 156);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(128) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `date_of_notification` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `notification`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `notification_read`
--

CREATE TABLE IF NOT EXISTS `notification_read` (
  `notification_read_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `admin_read` varchar(50) NOT NULL,
  `notification_id` int(11) NOT NULL,
  PRIMARY KEY (`notification_read_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `notification_read`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `stdevice`
--

CREATE TABLE IF NOT EXISTS `stdevice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dev_id` int(11) NOT NULL,
  `dev_desc` varchar(128) NOT NULL,
  `dev_serial` varchar(128) NOT NULL,
  `dev_brand` varchar(128) NOT NULL,
  `dev_model` varchar(128) NOT NULL,
  `dev_status` varchar(128) NOT NULL,
  `nomor_urut` varchar(150) NOT NULL,
  `lokasi` varchar(150) NOT NULL,
  `tahun` varchar(150) NOT NULL,
  `qty` int(11) NOT NULL,
  `image` blob NOT NULL,
  `dev_sumber` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `kelas` varchar(150) NOT NULL,
  `date_start` varchar(150) NOT NULL,
  `date_end` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=165 ;

--
-- Dumping data untuk tabel `stdevice`
--

INSERT INTO `stdevice` (`id`, `dev_id`, `dev_desc`, `dev_serial`, `dev_brand`, `dev_model`, `dev_status`, `nomor_urut`, `lokasi`, `tahun`, `qty`, `image`, `dev_sumber`, `nama`, `kelas`, `date_start`, `date_end`) VALUES
(156, 9, 'mantap lah pokoknya', '1', '', 'mantpsonic', 'New', '1', '', '2019', 20, '', 'APBS', '', '', '', ''),
(157, 3, 'keren abnget lah', '2', '', 'mantap', 'Damage', '1', '', '2001', 30, '', 'APBN', '', '', '', ''),
(158, 3, 'matap', '3', '', 'matap', 'New', '3', '', '2001', 20, '', 'APBS', '', '', '', ''),
(159, 2, 'KOOKOKOKOKOKOKOKOKO', '', '', '', 'New', '', '', '', 20, '', '', '', '', '', ''),
(160, 0, '', '', '', '', '', '', '', '', 0, '', '', '', '', '', ''),
(161, 0, '', '', '', '', '', '', '', '', 0, '', '', '', '', '', ''),
(162, 0, '', '', '', '', '', '', '', '', 0, '', '', '', '', '', ''),
(163, 3, 'asdawwwwwwwwwww', '', '', '', 'Damage', '', '', '', 20, '', '', 'mamnaloe', 'xikik', '', ''),
(164, 3, 'akakkakaka', '', '', '', 'New', '', '', '', 20, '', '', 'mamankie', 'XI-mm2', '2018-04-29', '2018-04-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stlocation`
--

CREATE TABLE IF NOT EXISTS `stlocation` (
  `stdev_id` int(11) NOT NULL AUTO_INCREMENT,
  `stdev_location_name` varchar(128) NOT NULL,
  `thumbnails` varchar(100) NOT NULL,
  PRIMARY KEY (`stdev_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data untuk tabel `stlocation`
--

INSERT INTO `stlocation` (`stdev_id`, `stdev_location_name`, `thumbnails`) VALUES
(22, 'Lab.MM 1', 'images/thumbnails.jpg'),
(23, 'Lab.MM 2', 'images/thumbnails.jpg'),
(24, 'Lab.MM 3', 'images/thumbnails.jpg'),
(25, 'Lab.MM 4', 'images/thumbnails.jpg'),
(26, 'Lab.MM 5', 'images/thumbnails.jpg'),
(27, 'Bengkel ( BC )', 'images/thumbnails.jpg'),
(28, 'Ruang Server', 'images/thumbnails.jpg'),
(29, 'Ruang Guru', 'images/thumbnails.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumber_anggaran`
--

CREATE TABLE IF NOT EXISTS `sumber_anggaran` (
  `dev_id` int(11) NOT NULL AUTO_INCREMENT,
  `sumber` varchar(150) NOT NULL,
  PRIMARY KEY (`dev_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `sumber_anggaran`
--

INSERT INTO `sumber_anggaran` (`dev_id`, `sumber`) VALUES
(2, 'APBD'),
(3, 'APBN'),
(4, 'APBS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `user_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(128) NOT NULL,
  `admin_id` int(128) NOT NULL,
  `client_id` int(128) NOT NULL,
  PRIMARY KEY (`user_log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=223 ;

--
-- Dumping data untuk tabel `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `admin_id`, `client_id`) VALUES
(191, 'admin', '2018-04-11 23:52:22', '2018-04-11', 5, 0),
(192, 'admin', '2018-04-11 23:52:59', '2018-04-16', 6, 0),
(193, 'admin', '2018-04-12 00:25:23', '2018-04-16', 6, 0),
(194, 'admin', '2018-04-12 00:28:13', '2018-04-16', 6, 0),
(195, 'admin', '2018-04-13 00:13:43', '2018-04-16', 6, 0),
(196, 'admin', '2018-04-13 00:14:50', '2018-04-16', 6, 0),
(197, 'admin', '2018-04-13 13:57:20', '2018-04-16', 6, 0),
(198, 'admin', '2018-04-14 11:32:10', '2018-04-16', 6, 0),
(199, 'assasa', '2018-04-14 12:09:22', '2018-04-14', 9, 0),
(200, 'kaka', '2018-04-14 12:29:57', '2018-04-14', 10, 0),
(201, 'admin', '2018-04-14 12:30:17', '2018-04-16', 6, 0),
(202, 'admin', '2018-04-14 18:30:38', '2018-04-16', 6, 0),
(203, 'admin', '2018-04-14 21:34:13', '2018-04-16', 6, 0),
(204, 'admin', '2018-04-15 14:26:12', '2018-04-16', 6, 0),
(205, 'admin', '2018-04-15 21:01:12', '2018-04-16', 6, 0),
(206, 'admin', '2018-04-15 22:26:37', '2018-04-16', 6, 0),
(207, 'admin', '2018-04-15 23:47:43', '2018-04-16', 6, 0),
(208, 'admin', '2018-04-16 07:57:51', '2018-04-16', 6, 0),
(209, 'admin', '2018-04-16 08:03:13', '2018-04-16', 6, 0),
(210, 'admin', '2018-04-16 14:50:40', '2018-04-16', 6, 0),
(211, 'admin', '2018-04-16 16:19:14', '2018-04-16', 6, 0),
(212, 'admin', '2018-04-16 21:37:52', '2018-04-16', 6, 0),
(213, 'admin', '2018-04-16 22:38:19', '2018-04-16', 6, 0),
(214, 'admin', '2018-04-16 23:07:20', '2018-04-16', 6, 0),
(215, 'damar', '2018-04-17 08:49:11', '', 12, 0),
(216, 'damar', '2018-04-17 09:09:47', '', 14, 0),
(217, 'admin', '2018-04-17 11:45:55', '', 6, 0),
(218, 'admin', '2018-04-17 13:29:44', '', 6, 0),
(219, 'admin', '2018-04-17 15:44:01', '', 6, 0),
(220, 'admin', '2018-04-17 16:25:47', '', 6, 0),
(221, 'admin', '2018-04-17 19:59:54', '', 6, 0),
(222, 'admin', '2018-04-18 06:52:44', '', 6, 0);
