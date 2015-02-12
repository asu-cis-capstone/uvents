-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2015 at 02:33 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uvents`
--
CREATE DATABASE IF NOT EXISTS `uvents` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uvents`;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `EventId` int(255) NOT NULL AUTO_INCREMENT,
  `EventName` varchar(30) DEFAULT NULL,
  `EventDate` varchar(20) DEFAULT NULL,
  `EventTime` varchar(8) DEFAULT NULL,
  `EventLocation` varchar(20) DEFAULT NULL,
  `EventDescription` varchar(1000) DEFAULT NULL,
  `EventCost` varchar(5) DEFAULT NULL,
  `EventSponsor` varchar(30) DEFAULT NULL,
  `EventSchool` varchar(30) DEFAULT NULL,
  `EventImg` text,
  `EventEmail` varchar(50) DEFAULT NULL,
  `EventPhoneNumber` varchar(14) DEFAULT NULL,
  `EventWebsiteAddress` varchar(50) DEFAULT NULL,
  `EventCategory` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`EventId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventId`, `EventName`, `EventDate`, `EventTime`, `EventLocation`, `EventDescription`, `EventCost`, `EventSponsor`, `EventSchool`, `EventImg`, `EventEmail`, `EventPhoneNumber`, `EventWebsiteAddress`, `EventCategory`) VALUES
(1, 'Ball So Hard', 'February 15th, 2015', '12:00PM-', 'BAC 323', 'Think you are the next Jordan? Come show off your basketball skills at this social gathering. Not into hoops? No problem, come and socialize with fellow ASU students', 'FREE', 'Department of Computer Informa', 'W.P Carey School of Business', 'http://sd.keepcalm-o-matic.co.uk/i/keep-calm-and-ball-so-hard-5.png', 'cis@asu.edu', '602-123-4567', 'www.ballsohard.com', 'Sport'),
(3, 'Game Night with Protiviti', 'Feruary 12,2015', '6:00PM-8', 'BA 353', 'Protiviti and DISC are excited to bring a game night style format for our meeting! Game night details are still being determined, but we will be quizzing you on Protiviti, and prizes will be a part of the festivities! New meeting format with a former company, Protiviti! RSVP for accurate food count', 'FREE', 'Protiviti/DISC', 'W.P Carey School of Business', 'http://www.lmuaccountingsociety.com/wp-content/uploads/2012/12/Protiviti-logo.jpg', 'jqromain@asu.edu', '480-897-2581', 'www.protiviti.com', 'Social');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
