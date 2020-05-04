-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 10:42 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zenith_event`
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
(1, 'about', 'About Us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the', '', '0000-00-00 00:00:00');

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
-- Table structure for table `add_slider`
--

CREATE TABLE `add_slider` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `gallery_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_slider`
--

INSERT INTO `add_slider` (`id`, `caption`, `gallery_name`, `image`, `type`) VALUES
(6, 'Best Service Wedding Ceremony Program in BD		', 'Wedding Ceremony', '1567736743.jpg', 0),
(7, 'The Best photography service our company in Bangladesh.	\r\n					', 'photography', '1567736768.jpg', 0),
(8, 'Best Event Management Company in Bangladesh				\r\n					', 'Event Management', '1567736790.jpg', 0);

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
  `vurl` varchar(250) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'image',
  `promo` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `caption`, `gallery_name`, `image`, `vurl`, `type`, `promo`, `date`) VALUES
(5, 'wedding reception', 'wedding', '1567746035.jpg', 'mHgtNN_dZvk', 'image', 0, '2019-09-06 05:00:35'),
(6, 'photography ', 'photography', '1567746142.jpg', 'mHgtNN_dZvk', 'image', 0, '2019-09-06 05:02:22'),
(7, 'media event', 'media', '1567746158.jpg', 'mHgtNN_dZvk', 'image', 0, '2019-09-06 05:02:38'),
(8, 'other', 'other', '1567746172.jpg', 'mHgtNN_dZvk', 'image', 0, '2019-09-06 05:02:52'),
(9, 'photography', 'photography', '1567746456.jpg', 'mHgtNN_dZvk', 'image', 0, '2019-09-06 05:07:36'),
(10, 'Media', 'media', '1567746502.jpg', 'mHgtNN_dZvk', 'image', 0, '2019-09-06 05:08:22');

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
  `email` varchar(500) NOT NULL,
  `message` varchar(255) NOT NULL,
  `subject` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `phone`, `email`, `message`, `subject`, `update_date`) VALUES
(0, 'abc', '123', 'arup@gmail.com', '123', 0, '2019-09-06 06:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `modal`
--

CREATE TABLE `modal` (
  `name` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `addedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modal`
--

INSERT INTO `modal` (`name`, `id`, `type`, `details`, `image`, `addedate`) VALUES
('Abeda Sultana', 20, 'Student', 'Department : Computer\r\nChattogram Mohila Polytechnic Institute', '1561467368.jpg', '2019-06-25 12:56:08'),
('Umme Salma Rony', 21, 'Student', 'Department : Computer\r\nChattogram Mohila Polytechnic Institute', '1561467433.jpg', '2019-06-25 12:57:13'),
('Urmila Akter', 22, 'Student', 'Department : Computer\r\nChattogram Mohila Polytechnic Institute', '1561467469.jpg', '2019-06-25 12:57:49'),
('Mita Nur', 23, 'Student', 'Department : Computer\r\nChattogram Mohila Polytechnic Institute', '1561467486.jpg', '2019-06-25 12:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `pimage1` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `subcategory`, `details`, `pimage`, `pimage1`, `date`) VALUES
(10, 'Patenga beach ', 'Chattogram_City', 'Place', '<p>Touist place<br></p>', '1561466154.jpg', '', '2019-06-26 07:11:06'),
(11, 'eco park', 'Rangamati', 'Place', '<p>tourist place<br></p><p><br></p>', '1561466775.jpg', '', '2019-06-25 12:46:15'),
(12, 'shadinota complex', 'Sitakunda', 'Nature', '<p>toursit place<br></p>', '1561468489.jpg', '', '2019-06-25 13:14:49'),
(13, 'Kaptai Lake', 'Chattogram_City', 'Nature', '<p>Tourist <br></p>', '1561470092.jpg', '', '2019-06-26 07:11:06'),
(14, 'Patenga beach1', 'Sitakunda', 'Nature', '<p>tourist place1<br></p>', '1561470412.jpg', '', '2019-06-25 13:46:52'),
(15, 'RumaBazar', 'Bandorban', 'Restraunt', '<p>Quality Food Restruant<br></p>', '1561531628.jpg', '', '2019-06-26 06:47:08'),
(16, 'Manikchori', 'Khagrachori', 'Restraunt', '<p>quality food<br></p>', '1561531888.jpg', '', '2019-06-26 06:51:28'),
(17, 'ANy Hotel', 'Rangamati', 'Restraunt', '<p>quality food<br></p>', '1561531921.jpg', '', '2019-06-26 06:52:01'),
(18, 'Radision Blue ', 'Chattogram_City', 'Hotel', '<p>SS Khaled Road | Lalkhan Bazar, Chittagong City 4000, Bangladesh.<br></p>', '1561532476.jpg', '', '2019-06-26 07:11:06'),
(19, 'ASian Sr Hotel', 'Chattogram_City', 'Hotel', '<p>291 Station Road, Chittagong City 4000, Bangladesh.</p>', '1561533179.jpg', '', '2019-06-26 07:12:59'),
(20, 'Hotel Agrabad', 'Chattogram_City', 'Hotel', '<p>Sabdar Ali Road | Agrabad Commercial Area, Chittagong City 4000, Bangladesh.</p>', '1561533226.jpg', '', '2019-06-26 07:13:46'),
(21, 'ANy Hotel', 'Rangamati', 'Hotel', '<p>Sabdar Ali Road</p>', '1561533619.jpg', '', '2019-06-26 07:20:19'),
(22, 'Hotel Khagrachori', 'Khagrachori', 'Hotel', '<p>Location<br></p>', '1561533664.jpg', '', '2019-06-26 07:21:04'),
(23, 'Hotel Cox', 'Cox-Bazar', 'Hotel', '<p>location<br></p>', '1561533683.jpg', '', '2019-06-26 07:21:23'),
(24, 'Hotel bandorban', 'Bandorban', 'Hotel', '<p>location<br></p>', '1561533944.jpg', '', '2019-06-26 07:25:44');

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
(48, 'About', 0, 0, '', '', '', 'about', '', '1567739882.jpg', '', 'Zenith is an exclusive organization for Event Management, Brand Activation, Audio Visual, Logistic, Design & Print, PR and other related facilities. Zenith started its journey in the year 2005 since then we pride ourselves in our ability to deliver quality products and services that match the best interests of our clients.<br><br>\r\n\r\nwe are one of the leading Advertisement, PR, Event & Activation Management, Printing, Visual Production, Sales and Brand Promotion , Digital Marketing Companies in Bangladesh, would like to offer you all kinds of media solution through its wide range of services.<br></br>\r\n\r\nOur knowledge and experience in the hospitality and public catering industry and our relationships with clients is about complete transparency and flexibility as we manage expectations on budget requirements and audience numbers.', '2019-09-05 07:00:00'),
(50, 'How can we help you organise a successful event?', 0, 0, '', '', '', 'message', '', '1567740775.jpg', '', '1.      A-Z event planning. We shall work on your event from beginning to end. You may relax and leave all the logistics to us. <br><br>\r\n\r\n                        2.      Venue Consultancy. Finding a venue in Chattogram is not as easy as people make it sound. While offering an extensive list of venues on our website, we know and have contact with hundreds of venues around Chatto, one of which will most definitely fit into your event scenario.  <br><br>\r\n\r\n                        3 .      We organise: product launches, seminars and conferences, staff events, awards nights, team building events, weddings and more. <br><br>\r\n\r\n                        4.      We give you more: photography, videography, entertainment, sound and lighting, branding, security, staff, handle VIPs, catering and any event-related consultancy.', '2019-09-05 07:00:00'),
(51, 'The Team', 0, 0, '', '', '', 'message', '', '1567740830.jpg', '', 'The Zenith team is made up of a mix of people. In addition to this group of people, a large support team helps out in everything the company does, in office work to on-site logistics planning. One thing we can truly say about our team is that we are very passionate about our job!', '2019-09-05 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `email`, `subject`, `phone`, `message`) VALUES
(1, 'usain', 'usaymarma567@gmail.com', 'web', '01831866185', 'I want a  website'),
(3, 'Rajibul hasan', 'a@b.com', 'seo', '01705258701', 'kdjfkjfkjdfgdge'),
(4, 'MD', 'a@b.com', 'website', '01727843493', 'dfdfdfdfd');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lon` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `pstatus` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `resarve` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `lat`, `lon`, `address`, `city`, `ptype`, `pstatus`, `image`, `resarve`, `details`, `type`, `date`) VALUES
(3, 'Exhibanation , seminar & stall decor', '', '', '', '', '', '1', '1567742700.jpg', '', 'Zenithâ€™s expert Exhibanation , seminar & stall decor reflect the core quality of our services. Innovation, Simplicity and Creativity are our fundamental components to start with. We offer: ', '', '2019-09-05 07:00:00'),
(4, 'Brand Promation', '', '', '', '', '', '1', '1567742769.jpg', '', 'Zenith knows the art of generating sustained ideas alongside creativity in making sense in advertisement so that it can easily catches the minds of television viewers long after the production. We understand the usage of humor, emotions, backgrounds and audio management as tools in our creative work based on clientâ€™s need. ', '', '2019-09-05 07:00:00'),
(5, 'Artist & Singer Booking', '', '', '', '', '', '0', '1567742840.jpg', '', 'Zenith knows the art of generating sustained ideas alongside creativity in making sense in advertisement so that it can easily catches the minds of television viewers long after the production. We understand the usage of humor, emotions, backgrounds and audio management as tools in our creative work based on clientâ€™s need.', '', '2019-09-05 07:00:00'),
(6, 'Print Media Solution', '', '', '', '', '', '1', '1567742878.jpg', '', 'Zenith knows the art of generating sustained ideas alongside creativity in making sense in advertisement so that it can easily catches the minds of television viewers long after the production. We understand the usage of humor, emotions, backgrounds and audio management as tools in our creative work based on clientâ€™s need', '', '2019-09-05 07:00:00'),
(7, 'Ad Film Making', '', '', '', '', '', '1', '1567742923.jpg', '', 'Our Film Making team works in any field of communication, entertainment or information that reaches a wide range of people. We believe that every production is unique but to make it more customize our team analyzes your needs to determine the best way to achieve fulfillment. We focus on the following: 05 we draw your dreamâ€¦. Developing a plan and offers only the services you need. ', '', '2019-09-05 07:00:00'),
(8, 'Conference & Seminer', '', '', '', '', '', '1', '1567742956.jpg', '', 'Our Conference & Seminer team works in any field of communication, entertainment or information that reaches a wide range of people. We believe that every production is unique but to make it more customize our team analyzes your needs to determine the best way to achieve fulfillment. We focus on the following: 05 we draw your dreamâ€¦. Developing a plan and offers only the services you need. ', '', '2019-09-05 07:00:00'),
(9, 'Corporate Events', '', '', '', '', '', '1', '1567742984.jpg', '', 'We have an expert team for event management & brand activation who are vastly experienced in providing a wide range of services to every campaign, event, or project with complete success. We can assist you with the details to make your plan more tailor-made. Our team does everything right for sourcing and coordinating suppliers and vendors, including day-of-the-event management that certainly will enable you the luxury of more time to concentrate on other areas of your event. ', '', '2019-09-05 07:00:00'),
(10, 'Photography & Cinematrography', '', '', '', '', '', '1', '1567743012.jpg', '', 'Our Photography & Cinematrography team works in any field of communication, entertainment or information that reaches a wide range of people. We believe that every production is unique but to make it more customize our team analyzes your needs to determine the best way to achieve fulfillment. We focus on the following: 05 we draw your dreamâ€¦. Developing a plan and offers only the services you need. Providing a detailed outline of production with timelines Constant services for the entire production. Some of the many individual services offered in pre-production are storyboards, script writing, research and development, and location ', '', '2019-09-05 07:00:00'),
(11, 'Wedding', '', '', '', '', '', '1', '1567743039.jpg', '', 'Best Wedding Planners is Zenith. Zenith is an exclusive organization for Event Management, Brand Activation, Audio Visual, Logistic,Design & Print, PR and other related facilities. ', '', '2019-09-05 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `gallery_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `caption`, `gallery_name`, `image`, `type`) VALUES
(6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry is standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.					\r\n		', 'company 1', '1567659558.jpg', 'image'),
(7, '	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry is standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.					\r\n	', 'company 2', '1567659619.jpg', 'image'),
(8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry is standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'comapny 3', '1567659658.jpg', 'image');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `email`, `role`, `date`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '', 1, '2019-06-25 09:48:32'),
(2, 'apps', '6d071901727aec1ba6d8e2497ef5b709', '', 0, '2018-09-23 09:28:41'),
(3, 'ripon11', '101010', '', 0, '2017-01-31 06:08:51'),
(9, 'editor', '5aee9dbd2a188839105073571bee1b1f', 'editor@gmail.com', 2, '2019-06-09 21:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `who_we_are`
--

CREATE TABLE `who_we_are` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `gallery_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `who_we_are`
--

INSERT INTO `who_we_are` (`id`, `caption`, `gallery_name`, `image`, `type`) VALUES
(2, 'The Best photography service our company in Bangladesh.', 'photography', '1567654376.jpg', ''),
(3, 'Best Service Wedding Ceremony Program in BD. ', 'Wedding', '1567655221.jpg', ''),
(4, 'Best Event Management Company in Bangladesh', 'Event Management', '1567655743.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `add_slider`
--
ALTER TABLE `add_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_link`
--
ALTER TABLE `footer_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image` (`image`);

--
-- Indexes for table `modal`
--
ALTER TABLE `modal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `who_we_are`
--
ALTER TABLE `who_we_are`
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
-- AUTO_INCREMENT for table `add_slider`
--
ALTER TABLE `add_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `footer_link`
--
ALTER TABLE `footer_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `modal`
--
ALTER TABLE `modal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `who_we_are`
--
ALTER TABLE `who_we_are`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
