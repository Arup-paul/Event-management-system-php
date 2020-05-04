-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 08:26 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selfaid4`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `type` varchar(250) NOT NULL,
  `headline` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `type`, `headline`, `text`, `image`, `update_date`) VALUES
(1, 'about', 'About Us', 'Trust Global Communications was founded in 2014 in the Port city of Chittagong. It is registered as Proprietorship Company. Trust Global Communications is a fast growing provider of high quality customer contact centre services. We operate a physical customer contact center with around 30 web-enabled workstations located at Chittagong in Bangladesh and another 25 workstations virtually, and we are provisioned of up to 150 workstations which we are planning to increase gradually. It is the era of ICT revolution, which has helped in rapid globalization of business and ushered in massive expansion in e-commerce.', '', '2018-07-11 09:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `map` text NOT NULL,
  `number` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `location`, `map`, `number`, `email`) VALUES
(1, 'Saimah Bandhar market (5th Floor), Chittagong', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8195764228176!2d91.81920831431142!3d22.360440446361075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd88fee0bacef%3A0x3eac2d117885b5af!2sIFCO+Complex%2C+1147%2FA+CDA+Ave%2C+Chittagong+4000!5e0!3m2!1sen!2sbd!4v1486466998548', '01989-444222141', 'sevenprop@gmail.com'),
(1, 'Saimah Bandhar market (5th Floor), Chittagong', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8195764228176!2d91.81920831431142!3d22.360440446361075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd88fee0bacef%3A0x3eac2d117885b5af!2sIFCO+Complex%2C+1147%2FA+CDA+Ave%2C+Chittagong+4000!5e0!3m2!1sen!2sbd!4v1486466998548', '01989-444222141', 'sevenprop@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blogname` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `blog_text` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blogname`, `type`, `image`, `blog_text`, `date`) VALUES
(3, 'First Blog', 'ON GOING PROJECT', '1486198898.jpeg', 'Hello This is blog text', '2017-02-04 09:01:38'),
(4, 'Real Estate', 'REAL ESTATE', '1486201112.jpeg', 'Hey This is Real Estate Project details for you. Got it ??', '2017-02-04 09:38:32'),
(5, 'Hello Boss', 'REAL ESTATE', '1486364048.jpg', 'Yap got you', '2017-02-06 06:54:08'),
(6, 'Smile', 'REAL ESTATE', '1486371698.jpg', 'Hello this is one and only for you ', '2017-02-06 09:01:38'),
(7, 'Superv', 'HAND-OVER PROJECT', '1486371735.jpg', 'Thihk', '2017-02-06 09:02:15'),
(8, 'First Blog', 'ON GOING PROJECT', '1486447871.jpg', 'lk', '2017-02-07 06:11:11'),
(9, 'Reaz', 'HAND-OVER PROJECT', '1486447909.png', 'sdsds', '2017-02-07 06:11:49'),
(3, 'First Blog', 'ON GOING PROJECT', '1486198898.jpeg', 'Hello This is blog text', '2017-02-04 09:01:38'),
(4, 'Real Estate', 'REAL ESTATE', '1486201112.jpeg', 'Hey This is Real Estate Project details for you. Got it ??', '2017-02-04 09:38:32'),
(5, 'Hello Boss', 'REAL ESTATE', '1486364048.jpg', 'Yap got you', '2017-02-06 06:54:08'),
(6, 'Smile', 'REAL ESTATE', '1486371698.jpg', 'Hello this is one and only for you ', '2017-02-06 09:01:38'),
(7, 'Superv', 'HAND-OVER PROJECT', '1486371735.jpg', 'Thihk', '2017-02-06 09:02:15'),
(8, 'First Blog', 'ON GOING PROJECT', '1486447871.jpg', 'lk', '2017-02-07 06:11:11'),
(9, 'Reaz', 'HAND-OVER PROJECT', '1486447909.png', 'sdsds', '2017-02-07 06:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `contact_welcome`
--

CREATE TABLE `contact_welcome` (
  `id` int(11) NOT NULL,
  `gettext` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_welcome`
--

INSERT INTO `contact_welcome` (`id`, `gettext`, `date`) VALUES
(1, '', '2017-02-05 22:11:56'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n		quis nostrud exercitation ullamco laboris ni', '2017-02-05 22:11:56'),
(3, '', '2017-02-05 22:11:56'),
(4, 'Your Activity and Your Feed Back always being happy to us.', '2017-02-05 22:11:56'),
(5, '', '2017-02-05 22:11:56'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n			quis nostrud exercitation ullamco laboris ', '2017-02-05 22:11:56'),
(1, '', '2017-02-05 22:11:56'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n		quis nostrud exercitation ullamco laboris ni', '2017-02-05 22:11:56'),
(3, '', '2017-02-05 22:11:56'),
(4, 'Your Activity and Your Feed Back always being happy to us.', '2017-02-05 22:11:56'),
(5, '', '2017-02-05 22:11:56'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n			quis nostrud exercitation ullamco laboris ', '2017-02-05 22:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `utext` text NOT NULL,
  `lname` varchar(300) NOT NULL,
  `company` varchar(300) NOT NULL,
  `country` varchar(300) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `applicantName` varchar(200) NOT NULL,
  `applicantPhone` varchar(30) NOT NULL,
  `applicantEmail` varchar(80) NOT NULL,
  `applicantResidence` text NOT NULL,
  `lsize` varchar(250) NOT NULL,
  `ltype` varchar(250) NOT NULL,
  `oName` varchar(250) NOT NULL,
  `oAddress` text NOT NULL,
  `lLocation` varchar(250) NOT NULL,
  `lCity` varchar(200) NOT NULL,
  `ldetail` text NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `view_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `received_by` varchar(250) NOT NULL,
  `extra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `footer_about`
--

CREATE TABLE `footer_about` (
  `id` int(11) NOT NULL,
  `text` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_about`
--

INSERT INTO `footer_about` (`id`, `text`, `date`) VALUES
(1, 'Hey this is footer about', '2017-02-06 10:08:04'),
(2, 'Seven Properties Limited believes that corporations exists not only as economic entities designed to pursue profits through fair competition, but also as social entities which must make a contribution to society at a large. The company is expected to respect human rights and to conduct themselves in a socially responsible manner toward the creation of a sustainable society, observe both the spirit as well as the letter of all laws and regulations applying to their activities ', '2017-02-07 11:19:51'),
(1, 'Hey this is footer about', '2017-02-06 10:08:04'),
(2, 'Seven Properties Limited believes that corporations exists not only as economic entities designed to pursue profits through fair competition, but also as social entities which must make a contribution to society at a large. The company is expected to respect human rights and to conduct themselves in a socially responsible manner toward the creation of a sustainable society, observe both the spirit as well as the letter of all laws and regulations applying to their activities ', '2017-02-07 11:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `footer_link`
--

CREATE TABLE `footer_link` (
  `id` int(11) NOT NULL,
  `title` varchar(400) NOT NULL,
  `url` varchar(500) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_link`
--

INSERT INTO `footer_link` (`id`, `title`, `url`, `update_date`) VALUES
(9, 'SMIDP Facebook', 'https://www.facebook.com/smidp', '2018-05-10 14:32:30'),
(7, 'Vokta Odhikar News', 'http://voktaodhikar.com', '2018-05-10 14:13:52'),
(8, 'Vokta Odhikar ORG', 'http://voktaodhikar.org', '2018-05-10 14:14:41'),
(10, 'Vokta Odhikar Facebook', 'https://www.facebook.com/voktaodhirarcrb', '2018-05-10 14:36:45'),
(9, 'SMIDP Facebook', 'https://www.facebook.com/smidp', '2018-05-10 14:32:30'),
(7, 'Vokta Odhikar News', 'http://voktaodhikar.com', '2018-05-10 14:13:52'),
(8, 'Vokta Odhikar ORG', 'http://voktaodhikar.org', '2018-05-10 14:14:41'),
(10, 'Vokta Odhikar Facebook', 'https://www.facebook.com/voktaodhirarcrb', '2018-05-10 14:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `footer_title`
--

CREATE TABLE `footer_title` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `gallery_name` varchar(250) NOT NULL,
  `image` varchar(300) NOT NULL,
  `vurl` text NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'image',
  `promo` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `caption`, `gallery_name`, `image`, `vurl`, `type`, `promo`, `date`) VALUES
(2, 'abc', 'à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯', '1526462505.png', '', 'image', 0, '2018-05-16 09:21:45'),
(2, 'abc', 'à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯', '1526462505.png', '', 'image', 0, '2018-05-16 09:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `handover`
--

CREATE TABLE `handover` (
  `id` int(11) NOT NULL,
  `name` int(200) NOT NULL,
  `detail` varchar(5000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handover`
--

INSERT INTO `handover` (`id`, `name`, `detail`, `date`) VALUES
(1, 0, 'lllll', '2017-02-07 09:35:10'),
(2, 0, 'uuu', '2017-02-07 09:35:37'),
(3, 0, 'o', '2017-02-07 09:37:38'),
(4, 0, 'ol', '2017-02-07 09:38:11'),
(5, 0, 'plpl', '2017-02-07 09:38:39'),
(6, 0, 'll', '2017-02-07 09:40:49'),
(7, 2, 'lllkkk', '2017-02-07 09:58:37'),
(8, 0, 'hand', '2017-02-07 10:02:55'),
(1, 0, 'lllll', '2017-02-07 09:35:10'),
(2, 0, 'uuu', '2017-02-07 09:35:37'),
(3, 0, 'o', '2017-02-07 09:37:38'),
(4, 0, 'ol', '2017-02-07 09:38:11'),
(5, 0, 'plpl', '2017-02-07 09:38:39'),
(6, 0, 'll', '2017-02-07 09:40:49'),
(7, 2, 'lllkkk', '2017-02-07 09:58:37'),
(8, 0, 'hand', '2017-02-07 10:02:55');

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE `latest_news` (
  `id` int(11) NOT NULL,
  `lnews` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`id`, `lnews`, `date`) VALUES
(1, 'Latest News apps', '2017-02-06 05:36:22'),
(2, 'Latest News apps 1', '2017-02-06 05:36:36'),
(3, 'Hello latest', '2017-02-06 05:44:36'),
(1, 'Latest News apps', '2017-02-06 05:36:22'),
(2, 'Latest News apps 1', '2017-02-06 05:36:36'),
(3, 'Hello latest', '2017-02-06 05:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `date`) VALUES
(1, '1486291108.png', '2017-02-05 10:40:55'),
(3, '1486373423.png', '2017-02-06 09:30:23'),
(4, '1486373479.jpg', '2017-02-06 09:31:19'),
(1, '1486291108.png', '2017-02-05 10:40:55'),
(3, '1486373423.png', '2017-02-06 09:30:23'),
(4, '1486373479.jpg', '2017-02-06 09:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `map` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `map`, `date`) VALUES
(3, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.7912033234156!2d91.82058421431142!3d22.361511446322396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8856fc23ef3%3A0x6d833a294f95909e!2sApps+Maker+BD!5e0!3m2!1sen!2sng!4v1486332426736', '2017-02-05 22:07:43'),
(4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8195764228176!2d91.81920831431142!3d22.360440446361075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd88fee0bacef%3A0x3eac2d117885b5af!2sIFCO+Complex%2C+1147%2FA+CDA+Ave%2C+Chittagong+4000!5e0!3m2!1sen!2sbd!4v1486466998548', '2017-02-07 11:30:31'),
(3, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.7912033234156!2d91.82058421431142!3d22.361511446322396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8856fc23ef3%3A0x6d833a294f95909e!2sApps+Maker+BD!5e0!3m2!1sen!2sng!4v1486332426736', '2017-02-05 22:07:43'),
(4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.8195764228176!2d91.81920831431142!3d22.360440446361075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd88fee0bacef%3A0x3eac2d117885b5af!2sIFCO+Complex%2C+1147%2FA+CDA+Ave%2C+Chittagong+4000!5e0!3m2!1sen!2sbd!4v1486466998548', '2017-02-07 11:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `utext` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `phone`, `email`, `utext`, `image`, `update_date`) VALUES
(0, 'Jahangir Alam Noman', '01812073491', 'jahangir2kl@gmail.com', 'hi', '', '2018-07-10 18:00:00'),
(0, 'Rajibul Hasan', '01732005161', 'jahangir4kl@gmail.com', '	\r\n		 m', '', '2018-07-10 18:00:00'),
(0, 'Rajibul Hasan', '01732005161', 'jahangir4kl@gmail.com', '	\r\n		 m', '', '2018-07-10 18:00:00'),
(0, 'Rajibul Hasan', '01732005161', 'jahangir4kl@gmail.com', '	\r\n		 m', '', '2018-07-10 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `modal`
--

CREATE TABLE `modal` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `addedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modal`
--

INSERT INTO `modal` (`id`, `name`, `type`, `details`, `image`, `addedate`) VALUES
(2, '..', 'ceo', 'I am very happy that our web site is now rebuilt with updated information.\r\n\r\nOur company is well organized with skilled manpower, equipment & machinery and capable of performing all types of Logistics Service including renovations, transportation of equipment/materials including heavy lifts, Carrier Road & River, Industrial Erector etc.\r\n\r\nI hope the esteemed viewers would find our web site of interest. We are pledge bound to provide our best services to our customers whenever they are asked for.', '1514733217.jpeg', '2017-12-31 15:13:37'),
(2, '..', 'ceo', 'I am very happy that our web site is now rebuilt with updated information.\r\n\r\nOur company is well organized with skilled manpower, equipment & machinery and capable of performing all types of Logistics Service including renovations, transportation of equipment/materials including heavy lifts, Carrier Road & River, Industrial Erector etc.\r\n\r\nI hope the esteemed viewers would find our web site of interest. We are pledge bound to provide our best services to our customers whenever they are asked for.', '1514733217.jpeg', '2017-12-31 15:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `ongoing`
--

CREATE TABLE `ongoing` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `detail` varchar(5000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongoing`
--

INSERT INTO `ongoing` (`id`, `name`, `detail`, `date`) VALUES
(1, 'ON GOING PROJECT', 'THis is ongoing', '2017-02-07 09:32:57'),
(2, 'HAND-OVER PROJECT', 'lllll', '2017-02-07 09:33:45'),
(3, 'HAND-OVER PROJECT', 'lllll', '2017-02-07 09:35:10'),
(4, 'HAND-OVER PROJECT', 'uuu', '2017-02-07 09:35:37'),
(5, 'on', 'l', '2017-02-07 10:02:41'),
(1, 'ON GOING PROJECT', 'THis is ongoing', '2017-02-07 09:32:57'),
(2, 'HAND-OVER PROJECT', 'lllll', '2017-02-07 09:33:45'),
(3, 'HAND-OVER PROJECT', 'lllll', '2017-02-07 09:35:10'),
(4, 'HAND-OVER PROJECT', 'uuu', '2017-02-07 09:35:37'),
(5, 'on', 'l', '2017-02-07 10:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL,
  `address` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `ptype` varchar(200) NOT NULL,
  `pstatus` varchar(200) NOT NULL,
  `resarve` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `details` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `lat`, `lon`, `address`, `city`, `ptype`, `pstatus`, `resarve`, `image`, `type`, `details`, `date`) VALUES
(4, 'Demo new', 0, 0, '', '', '', 'Portfolio', '', '1531371786.jpg', '', '<p>news will be added</p>', '2018-07-12 05:57:48'),
(5, 'Demo', 0, 0, '', '', '', 'Portfolio', '', '1531371793.jpg', '', '<p>news will be added</p>', '2018-07-12 05:25:57'),
(6, 'Demo', 0, 0, '', '', '', 'Portfolio', '', '1531371890.png', '', '<p>news will be added</p>', '2018-07-12 05:25:57'),
(7, 'Demo', 0, 0, '', '', '', 'news', '', '1531373107.jpg', '', '<p>news will be added</p>', '2018-07-12 05:25:57'),
(8, 'Demo', 0, 0, '', '', '', 'news', '', '1531373113.jpg', '', '<p>news will be added</p>', '2018-07-12 05:25:57'),
(9, 'Service One', 0, 0, '', '', '', 'Service', '', '1531374276.jpg', '', '<p>Hello Dear</p>', '2018-07-11 18:00:00'),
(10, 'Demo News', 0, 0, '', '', '', 'Portfolio', '', '1531378461.jpg', '', '<p>lorem&nbsp; ipsam</p>', '2018-07-11 18:00:00'),
(11, 'new One', 0, 0, '', '', '', 'Portfolio', '', '1531378846.jpg', '', '<p>nnnnnnnnnnnnnnnnnnn</p>', '2018-07-11 18:00:00'),
(12, 'New Two', 0, 0, '', '', '', 'Portfolio', '', '1531378864.jpg', '', '<p>bbbbbbbbbbbbbbbbb</p>', '2018-07-11 18:00:00'),
(13, 'new Three', 0, 0, '', '', '', 'Portfolio', '', '1531378879.jpg', '', '', '2018-07-11 18:00:00'),
(14, 'new four', 0, 0, '', '', '', 'Portfolio', '', '1531378945.jpg', '', '<p>ffdddddddddddddddd</p>', '2018-07-11 18:00:00'),
(16, 'Data Management', 0, 0, '', '', '', 'Service', '', '1531379861.jpg', '', 'The concept of data management is relatively simple. Firms need access to high-quality, relevant data, provided in a timely and cost-effective manner.<br>', '2018-07-12 10:53:51'),
(17, 'Non-voice $ Back Office', 0, 0, '', '', '', 'Service', '', '1531379934.jpg', '', '<p>We provide Non-Voice and Back-office services in order to ensure an experience that is seamless for your customer and increasingly efficient and effective for your business.We offer a tiered portfolio<br></p>', '2018-07-12 10:52:52'),
(18, 'Outbound Calls', 0, 0, '', '', '', 'Service', '', '1531380019.jpg', '', '<p>We provide top-notch outbound call center services to customers on behalf of a business or client.Calls made from the center includes telemarketing sales, credit collection calls, contact list.<br></p>', '2018-07-12 10:48:37'),
(19, 'Inbound Calls', 0, 0, '', '', '', 'Service', '', '1531380130.jpg', '', '<p>We provide dynamic and flexible solutions for your customer care in inbound segment.We provide a plethora of benefits for your company to likely increase customer satisfaction.<br></p>', '2018-07-12 10:47:00'),
(21, 'team One', 0, 0, '', '', '', 'Team', '', '1531644843.jpg', '', '<p>bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</p>', '2018-07-14 18:00:00'),
(22, 'Team Two', 0, 0, '', '', '', 'Team', '', '1531644870.jpg', '', '<p>bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</p>', '2018-07-14 18:00:00'),
(23, 'Team Two', 0, 0, '', '', '', 'Team', '', '1531644878.jpg', '', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>', '2018-07-15 09:10:29'),
(24, 'Team Three', 0, 0, '', '', '', 'Team', '', '1531644916.jpg', '', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>', '2018-07-15 09:10:16'),
(25, 'Team Three', 0, 0, '', '', '', 'Team', '', '1531644924.jpg', '', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>', '2018-07-15 09:10:03'),
(26, 'Team four', 0, 0, '', '', '', 'Team', '', '1531644970.jpg', '', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>', '2018-07-15 09:09:31'),
(27, 'Team four', 0, 0, '', '', '', 'Team', '', '1531644977.jpg', '', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>', '2018-07-15 09:09:47'),
(30, 'Tanveer', 0, 0, '', '', '', 'Message', '', '1531646177.jpg', '', '<p style=\"text-align:justify\">At Trust Global Communications, we have earned a\r\nreputation for collaborating with people and respective companies to transform\r\nhow services are provided. We have been entrusted with delivering vital\r\nservices for the leading private and public sector organizations across the\r\nworld. The key to that success is earning the trust of our customers. We have a\r\nhistory of designing and deploying long-term solutions that generate meaningful\r\noutcomes.</p><p>\r\n\r\n</p><p style=\"text-align:justify\">We pull together the right people, processes and\r\nexpertise to take service from â€œgood enoughâ€ to great. We apply best-in-class\r\npractices, domain knowledge and expertise, proven technologies, and innovation\r\nto assist our clients in responding to new mandates and expanded missions.\r\nTrust Global Communications clients come to us with confidence that we have the\r\nexpertise to take service delivery to the next level of performance. We know\r\nhow to make services run smoother, smarter, and more efficiently.</p>', '2018-07-14 18:00:00'),
(31, 'Farid ahmed', 0, 0, '', '', '', 'Message', '', '1531646275.jpg', '', '<p style=\"text-align:justify\"><span style=\"font-size:14.0pt\">Greetings &amp; welcome\r\nto Trust Global Communications, a Speedy Rising Call Center in the heart of\r\nChattagram, The Port City of Bangladesh. Our strength is that we have the\r\npassion and will to perform great service for customers who entrust work to us\r\nand to meet their expectations. We also have staff members who shared our\r\npassion and resolve.<o:p></o:p></span></p><p style=\"text-align:justify\"><span style=\"font-size:14.0pt\">The number of\r\nstaff members sharing our passion and will increased, making it possible to\r\nestablish the outsourcing business, which dispatches and introduces employees\r\nand to undertake business operations, as a pillar of the company.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nline-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Our Company stands by\r\nits vision of creating a strong brand with high expected value and becoming No.\r\n1 in the business fields of â€œworking,â€ â€œinteresting,â€ â€œlearningâ€ and â€œliving.â€<o:p></o:p></span></p><p style=\"text-align:justify\"><span style=\"font-size:14.0pt\">If we can provide\r\nan opportunity for people to make positive changes through our services, it is\r\nsure to bring benefits to companies and all other forms of organizations, each\r\nof which is an aggregate of individual people.<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p style=\"text-align:justify\"><span style=\"font-size:14.0pt\">We will continue\r\nto take on new challenges so that we can bring positive change to as many\r\nindividuals and organizations as possible.<o:p></o:p></span></p>', '2018-07-14 18:00:00'),
(32, 'Sumon Chowdhury', 0, 0, '', '', '', 'Message', '', '1531646337.jpg', '', '<p class=\"MsoNormal\" style=\"text-align:justify\">For the past 4 years Trust Global\r\nCommunications has been providing our customers with quality products and\r\noutstanding service at a reasonable price. Our most valuable asset and greatest\r\nstrength are our people. The experience, creativity, attitude and most\r\nimportantly pride they bring to their craft is the absolute key to our success.\r\nWe are committed to building long term relationships with our customers by\r\nproviding the highest level of mechanical construction services in our region.\r\nWe strive to be the best.</p>', '2018-07-14 18:00:00'),
(33, 'Sumon Chowdhury', 0, 0, '', '', '', 'Message', '', '1531646345.jpg', '', '<p class=\"MsoNormal\" style=\"text-align:justify\">For the past 4 years Trust Global\r\nCommunications has been providing our customers with quality products and\r\noutstanding service at a reasonable price. Our most valuable asset and greatest\r\nstrength are our people. The experience, creativity, attitude and most\r\nimportantly pride they bring to their craft is the absolute key to our success.\r\nWe are committed to building long term relationships with our customers by\r\nproviding the highest level of mechanical construction services in our region.\r\nWe strive to be the best.</p>', '2018-07-14 18:00:00'),
(36, 'Priyotosh ', 0, 0, '', '', '', 'Message', '', '1531646610.jpg', '', '<p class=\"MsoNormal\"><span style=\"font-size:12.0pt;line-height:115%;font-family:\r\n&quot;Times New Roman&quot;,&quot;serif&quot;\">It is my immense pleasure to introduce Trust Global\r\nCommunications and feel proud to report continued success and advancement of\r\nthe company since its inception.<br>\r\nOur mission is to provide Call Center Services &amp; Contact Center Services,\r\nboth in terms of quality and commitment. Our achievements are shored up by\r\ninvaluable contributions of our business partners. Aiming to create new values\r\nin Call Center Industry, Trust Global Communications will continue to strive\r\ntowards provision to provide best services and goals to accelerate evolution\r\nand gain momentum in the coming years. Trust Global Communications continually\r\nstrives to be at the forefront of providing special care and exceptionally\r\ncordial relations with our business partners over the past many years and will\r\ncommit to do so in future as well.<br>\r\nI anticipate even greater success for Trust Global Communications in its next\r\ncoming years. We are expanding our work profile and our expertise in customer\r\ncare continues to our main objective.<br>\r\nI continue to be amazed and humbled by the generosity and support of my team and\r\nbusiness partners and with vision as a Managing Director look forward to the\r\nfuture with eager anticipation.<o:p></o:p></span></p>', '2018-07-14 18:00:00'),
(37, 'Priyotosh ', 0, 0, '', '', '', 'Message', '', '1531646616.jpg', '', '<p class=\"MsoNormal\"><span style=\"font-size:12.0pt;line-height:115%;font-family:\r\n&quot;Times New Roman&quot;,&quot;serif&quot;\">It is my immense pleasure to introduce Trust Global\r\nCommunications and feel proud to report continued success and advancement of\r\nthe company since its inception.<br>\r\nOur mission is to provide Call Center Services &amp; Contact Center Services,\r\nboth in terms of quality and commitment. Our achievements are shored up by\r\ninvaluable contributions of our business partners. Aiming to create new values\r\nin Call Center Industry, Trust Global Communications will continue to strive\r\ntowards provision to provide best services and goals to accelerate evolution\r\nand gain momentum in the coming years. Trust Global Communications continually\r\nstrives to be at the forefront of providing special care and exceptionally\r\ncordial relations with our business partners over the past many years and will\r\ncommit to do so in future as well.<br>\r\nI anticipate even greater success for Trust Global Communications in its next\r\ncoming years. We are expanding our work profile and our expertise in customer\r\ncare continues to our main objective.<br>\r\nI continue to be amazed and humbled by the generosity and support of my team and\r\nbusiness partners and with vision as a Managing Director look forward to the\r\nfuture with eager anticipation.<o:p></o:p></span></p>', '2018-07-14 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `email`, `date`) VALUES
(1, 'admin', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', '', '2018-01-04 14:49:51'),
(2, 'apps', '101010', '', '2018-05-10 13:24:14'),
(3, 'ripon11', '101010', '', '2017-01-31 06:08:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
