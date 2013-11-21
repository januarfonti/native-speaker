-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2013 at 02:30 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_native`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `judul`, `about`) VALUES
(1, 'Isn''t it time you were a Native Speaker ?', '<p>\r\n  <span ><strong>Native Speaker</strong> </span>is the newest, quality language school that offers you more than 25 years of teaching experience in Indonesia. With our enthusiasm and energy we aim to introduce our students to international values that enhance their social and academic linguistic skills through the medium of the English language. While using the English language early on, we encourage our students to develop creativity and critical thinking and to compare and explore their world through the carefully selected materials we use at <strong>Native Speakers</strong> to find answers.</p>\r\n<p>\r\n <strong>Native Speaker</strong> merupakan sekolah bahasa terbaru dengan pengalaman mengajar lebih dari 25 tahun di Indonesia. Dengan antusiasme dan energi, kami bertujuan untuk mengenalkan siswa kami untuk nilai-nilai internasional yang meningkatkan kemampuan sosial dan akademis merka melalui media linguistik dari bahasa inggris. Saat menggunakan bahasa inggris sejak dini kami mendorong siswa untuk mengembangkan kreativitas dan pemikiran kritis serta untuk membandingkan dan mengeksplorasi dunia mereka melaui bahan yang dipilih dengan cermat kami gunakan di&nbsp;<strong>Native Speaker</strong> untuk menemukan jawaban.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chooseus`
--

CREATE TABLE IF NOT EXISTS `tbl_chooseus` (
  `id_chooseus` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  `link_button` varchar(200) DEFAULT NULL,
  `file_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_chooseus`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_chooseus`
--

INSERT INTO `tbl_chooseus` (`id_chooseus`, `judul`, `isi`, `link_button`, `file_url`) VALUES
(1, 'MR. ANDRE PETER EMIRIC', '<p>\r\n Director Of Studies</p>\r\n', 'http://localhost/native/director', '5d213-gambar3.jpg'),
(2, 'ISN''T IT TIME YOU WERE', '<p>\r\n Quality Language schol that offers you more than 25 years of teaching experience in indonesia.</p>\r\n', 'http://localhost/native/about', '1626d-gambar1.jpg'),
(3, 'IN HOUSE TRAINING (IHT)', '<p>\r\n Juniors (5-7) Monday-friday (Senin-Jumat) Children (7-11) Monday-friday (Senin-Jumat)</p>\r\n', 'http://localhost/native/class_study', '96784-gambar2.jpg'),
(4, 'FACILITIES AND SERVICE', '<p>\r\n Modern comfortable.Professional teacher Student receive a completion certificate.</p>\r\n', 'http://localhost/native/facilities', '890ce-fasilitas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_classstudy`
--

CREATE TABLE IF NOT EXISTS `tbl_classstudy` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) DEFAULT NULL,
  `isi` text,
  `file_url` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_classstudy`
--

INSERT INTO `tbl_classstudy` (`id`, `judul`, `isi`, `file_url`) VALUES
(1, 'Juniors (5-7)', '<div>\r\n <strong>Monday-Friday (Senin-Jumat)</strong></div>\r\n<div>\r\n (2x1 hours / 12 weeks) @ (13.00-14.00,14.10-15.10)</div>\r\n<div>\r\n <strong>Saturday (Sabtu)</strong></div>\r\n<div>\r\n (1x1.5 hours / 16 weeks) @ (9.00-10.30)</div>\r\n', NULL),
(2, 'Children (7-11) / Pre-Teenagers & Teenagers (11-14)', '<div>\r\n <strong>Monday-Friday (Senin-Jumat)</strong></div>\r\n<div>\r\n (2x1 hours / 12 weeks) @ (13.00-14.00,14.10-15.10)</div>\r\n<div>\r\n <strong>Saturday (Sabtu)</strong></div>\r\n<div>\r\n (1x1.5 hours / 16 weeks) @ (9.00-10.30)</div>\r\n', NULL),
(3, 'Adults', '<div>\r\n <strong>Monday-Friday (Senin-Jumat)</strong></div>\r\n<div>\r\n (2x1 hours / 12 weeks) @ (13.00-14.00,14.10-15.10)</div>\r\n<div>\r\n <strong>Saturday (Sabtu)</strong></div>\r\n<div>\r\n (1x1.5 hours / 16 weeks) @ (9.00-10.30)</div>\r\n', NULL),
(4, 'Conversation', '<div>\r\n <strong>Monday-Friday (Senin-Jumat)</strong></div>\r\n<div>\r\n (2x1 hours / 12 weeks) @ (13.00-14.00,14.10-15.10)</div>\r\n<div>\r\n <strong>Saturday (Sabtu)</strong></div>\r\n<div>\r\n (1x1.5 hours / 16 weeks) @ (9.00-10.30)</div>\r\n', NULL),
(5, 'Business Class', '<div>\r\n <strong>Monday-Friday (Senin-Jumat)</strong></div>\r\n<div>\r\n (2x1 hours / 12 weeks) @ (13.00-14.00,14.10-15.10)</div>\r\n<div>\r\n <strong>Saturday (Sabtu)</strong></div>\r\n<div>\r\n (1x1.5 hours / 16 weeks) @ (9.00-10.30)</div>\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactus`
--

CREATE TABLE IF NOT EXISTS `tbl_contactus` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) DEFAULT NULL,
  `isi` text,
  `file_url` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_contactus`
--

INSERT INTO `tbl_contactus` (`id`, `judul`, `isi`, `file_url`) VALUES
(5, 'Native Speaker', '<div>\r\n <strong>OFFICE&nbsp;:&nbsp;</strong>Jalan Bintaro Utama IX Blok JA I No. 6 Bintaro Jaya Sektor 9 Pondok Aren - Tangerang</div>\r\n<div>\r\n <strong>PHONE :&nbsp;</strong>+62 217 486 3636</div>\r\n<div>\r\n <strong>FAX :&nbsp;</strong>+62 21 745 0736</div>\r\n<div>\r\n <strong>EMAIL :&nbsp;</strong>nativespeakerbintaro@yahoo.com</div>\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_facilities`
--

CREATE TABLE IF NOT EXISTS `tbl_facilities` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) DEFAULT NULL,
  `isi` text,
  `file_url` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_facilities`
--

INSERT INTO `tbl_facilities` (`id`, `judul`, `isi`, `file_url`) VALUES
(1, 'Facilities and Service', '<ul>\r\n <li>\r\n  <b>Modern comfortable and well equipped classrooms.&nbsp;</b>(Ruang kelas yang nyaman dan modern dengan perlengkapan yang baik)</li>\r\n <li>\r\n  <strong>Helpful, friendly, professional teachers and support staff.&nbsp;</strong>(Guru dan staff pendukung siap membantu bersahabat dan profesional)</li>\r\n</ul>\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_featured`
--

CREATE TABLE IF NOT EXISTS `tbl_featured` (
  `id_featured` int(3) NOT NULL AUTO_INCREMENT,
  `file_url` varchar(255) DEFAULT NULL,
  `quote` text,
  PRIMARY KEY (`id_featured`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_featured`
--

INSERT INTO `tbl_featured` (`id_featured`, `file_url`, `quote`) VALUES
(1, '134c7-slider.jpg', '<p>\r\n &quot;Never simply follow instruction without understanding&quot; is a <strong>Native Speaker</strong> policy&quot;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_1`
--

CREATE TABLE IF NOT EXISTS `tbl_footer_1` (
  `id_footer1` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_footer1`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_footer_1`
--

INSERT INTO `tbl_footer_1` (`id_footer1`, `judul`, `link`) VALUES
(1, 'Home', 'http://localhost/native'),
(2, 'About', 'http://localhost/native/about'),
(3, 'Facilities', 'http://localhost/native/facilities'),
(4, 'Class Study', 'http://localhost/native/class_study'),
(5, 'Contact Us', 'http://localhost/native/contact'),
(6, 'Administrator Area', 'http://localhost/native/auth');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_3`
--

CREATE TABLE IF NOT EXISTS `tbl_footer_3` (
  `id_footer3` int(3) NOT NULL AUTO_INCREMENT,
  `isi` text,
  `email` varchar(100) DEFAULT NULL,
  `fb` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_footer3`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_footer_3`
--

INSERT INTO `tbl_footer_3` (`id_footer3`, `isi`, `email`, `fb`, `twitter`) VALUES
(1, '<p>\r\n If you&#39;re having question arise about Native Speaker. Please contact us via @Email</p>\r\n', 'nativespeakerbintaro@yahoo.com', 'http://facebook.com/your_profile_id', 'http://twiiter.com/your_profile_name');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quote`
--

CREATE TABLE IF NOT EXISTS `tbl_quote` (
  `id_quote` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `quote` text,
  PRIMARY KEY (`id_quote`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_quote`
--

INSERT INTO `tbl_quote` (`id_quote`, `judul`, `quote`) VALUES
(1, '"Bulding confidence, character, and tolent-development are key principles of Native Speaker"', '<p>\r\n Are key principles of Native Speaker. So come and see us and let qualifed experienced native teacher guide you and make new friends, have fun and learn English all at the same time, so that&#39;s theree in one. who could want more? We have it all. Trust me. It&#39;s the best !!!</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_login`
--

CREATE TABLE IF NOT EXISTS `tbl_user_login` (
  `id_user_login` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `stts` varchar(30) NOT NULL,
  PRIMARY KEY (`id_user_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user_login`
--

INSERT INTO `tbl_user_login` (`id_user_login`, `username`, `password`, `nama_lengkap`, `stts`) VALUES
(1, 'admin', 'ef75d152cf5d3fc1852bf5cc9dfd080f', 'Administrator', 'administrator');
