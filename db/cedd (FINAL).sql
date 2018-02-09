-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2017 at 04:55 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cedd`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`image_id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `member_id`, `image`) VALUES
(1, 1, 0x494d475f323235322e4a5047),
(2, 2, 0x535445524c494e472e4a5047),
(3, 1, 0x5f445343303332352e4a5047);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `birthdate` varchar(115) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `middlename`, `address`, `email`, `contact_no`, `birthdate`, `gender`, `username`, `password`) VALUES
(1, 'Saihra', 'Sitay', 'Loresto', 'dasma', 'saihra@gmail.com', '09996640986', 'July 20 1996', 'Female', 'sai', 'sitay'),
(2, 'Cedd', 'Torino', 'Lazala', 'Dasmarinas, Cavite', 'cedrictorino@gmail.com', '0929115570', 'May 10, 1994', 'Male', 'ceddtorino', 'ceddtorino'),
(3, 'Jonathan', 'Senorin', 'Dave', 'Dasmarinas, Cavite', 'jonathan21@gmail.com', '09281618853', 'August 2 1995', 'Male', 'jonathan11', '987654321'),
(4, 'Karen', 'Flores', 'Caluna', 'Imus, Cavite', 'karenflores@gmail.com', '09291615593', 'June 20, 1996', 'Female', 'karen', 'karen'),
(5, 'Lean', 'Penarubia', 'Revilla', 'Imus, Cavite', 'leanpenarubia@gmail.com', '09296364481', 'October 3, 1990', 'Male', 'lean', 'lean'),
(6, 'Jessica', 'Pareja', 'Dela Cruz', 'Dasmarinas, Cavite', 'jessicapareja@gmail.com', '09294647753', 'july 6 1997', 'Female', 'jessica', 'jessica'),
(7, 'Aliza', 'Nepacina', 'Rosselle', 'Dasmarinas, Cavite', 'alizanepacina@gmail.com', '09296863359', 'April 12 1998', 'Female', 'aliza', 'aliza'),
(8, 'Raven', 'Tenorio', 'Dawn', 'Imus, Cavite', 'raventenorio@gmail.com', '09291235548', 'October 19 1994', 'Female', 'raven', 'raven'),
(9, 'Gennevieve', 'Tizon', 'Sugalan', 'Imus, Cavite', 'genntizon@gmail.com', '09294386659', 'August 21 1996', 'Female', 'genn', 'genn'),
(10, 'Joshua', 'Dela Cruz', 'Paul', 'Dasmarinas, Cavite', 'joshuapauldelacruz@gmail.com', '09294685591', 'July 17 1997', 'Male', 'josh', 'josh'),
(11, 'Ceejae', 'Reta', 'R', 'Imus, Cavite', 'ceejae@gmail.com', '09294675596', 'June 20 1999', 'Male', 'ceejae', 'ceejae'),
(12, 'Jerico', 'Maxian', '', 'Dasmarinas Cavite', 'jericomaxian@gmail.com', '09293934405', 'October 28 1999', 'Male', 'leklek', 'leklek');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`note_id`, `date`, `message`) VALUES
(1, '', 'ANOUNCEMEEEEEEEEEEEEEENT');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `package_name` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`package_id`),
  KEY `service_id` (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `service_id`, `package_name`, `description`, `price`, `status`) VALUES
(1, 1, 'Standard', '1 professional photographer / 1 professional videographer / 20 pages 8x10 magazine type album / Full edited video from prep to reception / Sign frame 6x20 / 11x14 portrait w/ frame', 16500.00, 1),
(2, 1, 'Deluxe', '1 professional photographer / 1 professional videographer / High res photos in DVD / Pre-nuptial photoshoot / 40 pages 8x10 magazine type album / Full edited video from prep to reception / Sign frame 16x20 / 16x20 portrait w/ frame', 25000.00, 1),
(3, 1, 'Premium', '2 professional photographer / 2 professional videographer / High res photos in DVD Pre-nuptial photoshoot with 10 pages 8x10 guestbook album / Audio visual presentation of pre-nuptial shoot / 40 pages 8x10 leather type album / Full edited video from prep to reception / Sign frame 16x20 / 16x20 portrait w/ frame', 35000.00, 1),
(4, 2, 'Package A ', 'photo service without album / unlimited shots 300++high resolution photos saved to DVD / flashdrive Photo coverage from preparation to reception', 3500.00, 1),
(5, 2, 'Package B', 'Video coverage with  edited DVD / Video coverage from preparation to reception / 1 master edited DVD with personalized case', 4500.00, 1),
(6, 2, 'Package C', 'photo service + leather album /  unlimited shots 300++ resolution photos /  photo coverage from preparation to reception /  40 pages 80 printed picture 5R size in leather album /  Raw files save in DVD disc', 7000.00, 1),
(7, 2, 'Package D', 'photo and video with album and edited video /  unlimited shots 300++ resolution photos /  photo coverage from preparation to reception /  40 pages 80 printed picture 5R size in leather album /  1 master edited DVD with personalized case', 10000.00, 1),
(8, 2, 'Package E', 'photo and video with album/portrait/sign frame /  Unlimited shots 300++ high resolution photos /  Video coverage from preparation to reception /  50 pages 7x10  100 pcs 5R, 1 pc 8R-1st page of the album /  1 elegant leather album with complimentary keepsake box /  1 8x10 portrait with frame /  2 master edited DVD with personalized frame / 1 signature frame 11x14', 12000.00, 1),
(9, 3, 'Package A', 'photo service without album / unlimited shots 300++high resolution photos saved to DVD / flashdrive Photo coverage from preparation to reception', 3500.00, 1),
(10, 3, 'Package B', 'Video coverage + edited DVD /  Video coverage from preparation to reception /  1 master edited DVD with personalized case ', 4500.00, 1),
(11, 3, 'Package C', 'photo service + leather album /  unlimited shots 300++ resolution photos /  photo coverage from preparation to reception /  40 pages 80 printed picture 5R size in leather album /  Raw files save in DVD disc', 7000.00, 1),
(12, 3, 'Package D', 'photo and video with album and edited video /  unlimited shots 300++ resolution photos /  photo coverage from preparation to reception /  40 pages 80 printed picture 5R size in leather album /  1 master edited DVD with personalized case ', 10000.00, 1),
(13, 3, 'Package E', 'photo and video with album/portrait/sign frame /  Unlimited shots 300++ high resolution photos /  Video coverage from preparation to reception /  50 pages 7x10  100 pcs 5R, 1 pc 8R-1st page of the album /  1 elegant leather album with complimentary keepsake box /  1 8x10 portrait with frame /  2 master edited DVD with personalized frame / 1 signature frame 11x14', 12000.00, 1),
(14, 4, 'Package A', 'photo service without album / unlimited shots 300++high resolution photos saved to DVD / flashdrive Photo coverage from preparation to reception', 3500.00, 1),
(15, 4, 'Package B', 'Video coverage + edited DVD /  Video coverage from preparation to reception /  1 master edited DVD with personalized case ', 4500.00, 1),
(16, 4, 'Package C', 'photo service + leather album /  unlimited shots 300++ resolution photos /  photo coverage from preparation to reception /  40 pages 80 printed picture 5R size in leather album /  Raw files save in DVD disc', 7000.00, 1),
(17, 4, 'Package D', 'photo and video with album and edited video /  unlimited shots 300++ resolution photos /  photo coverage from preparation to reception /  40 pages 80 printed picture 5R size in leather album /  1 master edited DVD with personalized case ', 10000.00, 1),
(18, 4, 'Package E', 'photo and video with album/portrait/sign frame /  Unlimited shots 300++ high resolution photos /  Video coverage from preparation to reception /  50 pages 7x10  100 pcs 5R, 1 pc 8R-1st page of the album /  1 elegant leather album with complimentary keepsake box /  1 8x10 portrait with frame /  2 master edited DVD with personalized frame / 1 signature frame 11x14', 12000.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `photostatus`
--

CREATE TABLE IF NOT EXISTS `photostatus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `photostatus`
--

INSERT INTO `photostatus` (`id`, `member_id`, `status`) VALUES
(1, 1, 'Done'),
(2, 2, 'Done'),
(3, 1, 'Done'),
(4, 2, 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `service_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `hours` int(11) NOT NULL,
  `location` varchar(115) NOT NULL,
  `total_price` decimal(11,2) NOT NULL,
  `Number` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `package_id` (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `member_id`, `date`, `service_id`, `package_id`, `hours`, `location`, `total_price`, `Number`, `status`) VALUES
(1, 1, '04/11/2017', 1, 3, 7, 'Alfonso', 35750.00, 1, 'Done'),
(2, 1, '05/11/2017', 1, 1, 6, 'Tagaytay', 17000.00, 1, 'Done'),
(3, 1, '19/11/2017', 3, 9, 4, 'Alfonso', 3500.00, 1, 'Pending'),
(4, 2, '04/11/2017', 2, 4, 6, 'Alfonso', 4500.00, 1, 'Done'),
(5, 2, '14/11/2017', 2, 4, 4, 'Tagaytay', 4000.00, 1, 'Pending'),
(6, 2, '06/11/2017', 3, 13, 6, 'Dasmarinas', 12500.00, 1, 'Done'),
(7, 1, '06/11/2017', 4, 16, 7, 'Imus', 7750.00, 2, 'Pending'),
(8, 3, '06/11/2017', 2, 4, 4, 'Dasmarinas', 3500.00, 3, 'Pending'),
(9, 4, '06/11/2017', 4, 17, 8, 'Kawit', 11000.00, 4, 'Pending'),
(10, 5, '06/11/2017', 1, 3, 10, 'Imus', 36500.00, 5, 'Pending'),
(11, 1, '07/11/2017', 1, 2, 4, 'Alfonso', 25000.00, 1, 'Pending'),
(12, 9, '08/11/2017', 2, 4, 4, 'Alfonso', 3500.00, 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_offer` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0:Blocked,   1:Active',
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_offer`, `status`) VALUES
(1, 'Wedding Photo and Video', 1),
(2, 'Baptismal', 1),
(3, 'Kiddie Party', 1),
(4, 'Small Gatherings', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
