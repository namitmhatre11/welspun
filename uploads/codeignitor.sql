-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2016 at 07:39 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.18-1+deb.sury.org~precise+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codeignitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `garvhai_adminuser`
--

CREATE TABLE IF NOT EXISTS `garvhai_adminuser` (
  `admin_user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_role` int(5) NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`admin_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `garvhai_adminuser`
--

INSERT INTO `garvhai_adminuser` (`admin_user_id`, `user_name`, `user_email`, `user_pass`, `user_role`, `user_status`, `created_date`) VALUES
(1, 'Admin', 'admin@hilux.com', '0192023a7bbd73250516f069df18b500', 1, 1, '2015-08-16 17:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `garvhai_players`
--

CREATE TABLE IF NOT EXISTS `garvhai_players` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `profile_photo` varchar(255) NOT NULL,
  `contest` varchar(128) NOT NULL,
  `championship` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `garvhai_players`
--

INSERT INTO `garvhai_players` (`id`, `name`, `profile_photo`, `contest`, `championship`) VALUES
(1, 'Namit', '0', '', ''),
(2, 'Pratiksha', '0', '', ''),
(3, 'Amol', '0', '', ''),
(4, 'Priyanka', '0', '', ''),
(5, 'Mit', '0', '', ''),
(6, 'Dipashree', '0', '', ''),
(8, 'Dipashree', '659', '', ''),
(9, 'Dipashree', 'ninja1.jpg', '', ''),
(10, 'Dipashree', 'fido.jpg', '', ''),
(12, 'Dipashree', 'fido1.jpg', '', ''),
(13, 'Aryan', 'fido2.jpg', '<ul>\r\n	<li>Wimbeldon</li>\r\n	<li>Australian Open</li>\r\n	<li>Chennai Open</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Olympics</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'PM Modi visits Brussele', 'pm', 'PM Modi visits Brussele, after terror attack on brussele in March'),
(2, 'IPL starts', 'ipl', 'IPL starts on arpil, 7th'),
(3, 'Plane Flies Across The Pacific Using Only Solar Power', 'plane-flies-across-the-pacific-using-only-solar-power', 'A solar-powered plane has completed a three-day nonstop flight across the Pacific Ocean without a single drop of fuel, marking a major milestone for innovations in renewable energy.\r\n\r\nBertrand Piccard landed the single-pilot plane, Solar Impulse 2, in Mountain View, California, on Saturday night after taking off from Hawaii 62 hours prior. Since setting off from Abu Dhabi in March 2015, Piccard and fellow pilot Andre Borschberg have taken turns flying the plane as part of their mission to fly it around the world. '),
(4, 'testing ckeditor', 'testing-ckeditor', '<p>This is my textarea to be replaced with CKEditor.</p>\n\n<ul>\n	<li>how&#39;s that?</li>\n	<li>:P</li>\n	<li>;)</li>\n	<li>:D</li>\n</ul>\n'),
(5, 'table', 'table', '<table align="left" border="1" cellpadding="1" cellspacing="0" style="width:500px">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">\r\n			<p>Olympic Qualifying Standards</p>\r\n			</th>\r\n			<th scope="col">Olympic Qualifying Throw</th>\r\n			<th scope="col">Personal Best</th>\r\n			<th scope="col">Recent Training</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>20.50M</td>\r\n			<td>20.65M</td>\r\n			<td>20.65M</td>\r\n			<td>Focusing On Strength Training</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
