-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 05:57 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hairsalondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `package` varchar(100) NOT NULL,
  `stylist` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `username`, `contactno`, `package`, `stylist`, `date`) VALUES
(3, 'gaurang', '9866543210', 'Platinum Pro850', 'Paul kerry', '2019-01-03'),
(4, 'happy', '9876543110', 'Platinum Pro850', 'Mary louis', '2019-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tb`
--

CREATE TABLE IF NOT EXISTS `contact_tb` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_message` varchar(100) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `contact_tb`
--

INSERT INTO `contact_tb` (`user_id`, `user_name`, `user_email`, `user_message`, `contact_no`) VALUES
(1, 'happy christian', 'happy@gmail.com', 'escfsCfsD', ''),
(2, 'salon', 'quickstylesalon@gmail.com', 'hello this is demo of insert message....!', '9876543210'),
(8, 'quickcutstylesalon', 'gaurangpatelm.3056@gmail.com', 'demo', '9876542210'),
(10, 'salon', 'hca@gd.com', 'helllo', '9876542210'),
(18, 'quickcutstylesalon', 'gp@gmail.com', 'demo of get method', '9876542210');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `image`, `job`, `description`) VALUES
(1, '1.jpg', 'Trim (Back and Sides)', 'Trim hair and shave'),
(2, '2.jpg', 'Straight Hair products', 'Yes, we provide material for  Straight Hair'),
(3, '3.jpg', 'Haircut', 'New Hair Style'),
(4, '5.jpg', 'Hair Color', 'Yes, we provide material for  Hair Color'),
(5, '6.jpg', 'Trim Hair And Style', 'Trim hair and style'),
(6, '7.jpg', 'Haircut', 'New Hair Style and Shave '),
(7, '8.jpg', 'back and side HairCut', 'New Back And Side Style'),
(8, '9.jpg', 'shave', 'New Shave Style'),
(9, '5.jpg', 'Simple Hair Cut  Touch up', 'Hair Cut  Touch up');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackonservice`
--

CREATE TABLE IF NOT EXISTS `feedbackonservice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(150) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `treatmentexperience` varchar(250) NOT NULL,
  `comfortofourtreatment` varchar(250) NOT NULL,
  `helpfulnessofourstaff` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedbackonservice`
--

INSERT INTO `feedbackonservice` (`id`, `user_id`, `user_name`, `treatmentexperience`, `comfortofourtreatment`, `helpfulnessofourstaff`) VALUES
(1, '', 'quickcutstylesalon', 'excellent', 'good', 'excellent');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackonsubject`
--

CREATE TABLE IF NOT EXISTS `feedbackonsubject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `comment` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedbackonsubject`
--

INSERT INTO `feedbackonsubject` (`id`, `user_id`, `user_name`, `comment`) VALUES
(1, '', '', 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(150) NOT NULL,
  `price` int(5) NOT NULL,
  `listwork` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `pname`, `price`, `listwork`) VALUES
(1, 'Basic', 200, 'Hair Extension,Makeup Application,Facial,Nails,Styling'),
(2, 'Classic', 350, 'Hair Extension,Makeup Application,Facial,Nails,Styling'),
(3, 'Gold', 500, 'Hair Extension,Makeup Application,Facial,Nails,Styling'),
(4, 'Platinum', 800, 'Hair Extension,Makeup Application,Facial,Nails,Styling'),
(5, 'Basic Pro', 350, 'Hair Extension,Makeup Application,Facial,Nails,Styling'),
(6, 'Classic Pro', 500, 'Hair Extension,Makeup Application,Facial,Nails,Styling'),
(7, 'Gold Pro', 650, 'Hair Extension,Makeup Application,Facial,Nails,Styling'),
(8, 'Platinum Pro', 850, 'Hair Extension,Makeup Application,Facial,Nails,Styling'),
(9, 'Basic Extra', 400, 'Hair Extension,Makeup Application,Facial,Nails,Styling');

-- --------------------------------------------------------

--
-- Table structure for table `registrationmst`
--

CREATE TABLE IF NOT EXISTS `registrationmst` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `contact_no` (`contact_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `registrationmst`
--

INSERT INTO `registrationmst` (`user_id`, `user_name`, `email`, `password`, `contact_no`, `gender`) VALUES
(1, 'happy christian', 'happy.christian.hc3@gmail.com', 'abc123', '9898989898', ''),
(3, 'Gaurang Patel', 'gaurang@gmail.com', 'abc123', '8787878787', 'Male'),
(6, 'salon', 'quickstylesalon@gmal.com', '12345', '9876543210', 'Female'),
(7, 'quickcutstylesalon', 'quickstylesalon@gmail.com', 'salon', '9876541230', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `sname` varchar(150) NOT NULL,
  `job` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `image`, `sname`, `job`, `description`) VALUES
(1, 't6.jpg', 'Selena', 'Stylist', 'Treat yourself to a facial or celebrating a special occasion.'),
(2, 't7.jpg', 'Mary louis', 'Hairstylist', 'Treat yourself to a facial or celebrating a special aromatherapy.'),
(3, 't8.jpg', 'Paul kerry', 'Beautician', 'our beauty and skin care services will suit every beauty need.'),
(4, 't9.jpg', 'john watson', 'Cosmetologist', 'Treat yourself to a facial or celebrating a special occasion.'),
(5, 't2.jpg', 'Jonny stephen', 'Shave Styler', 'our beauty and skin care services will suit every beauty need.'),
(6, 't3.jpg', 'james trump', 'Hair Stylist', 'Treat yourself to a facial or celebrating a special aromatherapy.'),
(7, 't4.jpg', 'alex jocky', 'Cosmetologist', 'our beauty and skin care services will suit every beauty need.'),
(8, 't5.jpg', 'billu barber', 'Stylelist', 'Treat yourself to a facial or celebrating a special occasion.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
