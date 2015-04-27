-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2015 at 06:30 AM
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
  `EventDate` date DEFAULT NULL,
  `EventStartTime` time DEFAULT NULL,
  `EventEndTime` time DEFAULT NULL,
  `EventLocation` varchar(20) DEFAULT NULL,
  `EventDescription` varchar(1000) DEFAULT NULL,
  `EventCost` varchar(5) DEFAULT NULL,
  `EventSponsor` varchar(50) DEFAULT NULL,
  `EventSchool` varchar(30) DEFAULT NULL,
  `EventImg` text,
  `EventEmail` varchar(50) DEFAULT NULL,
  `EventPhoneNumber` varchar(14) DEFAULT NULL,
  `EventWebsiteAddress` varchar(50) DEFAULT NULL,
  `EventCategory` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`EventId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventId`, `EventName`, `EventDate`, `EventStartTime`, `EventEndTime`, `EventLocation`, `EventDescription`, `EventCost`, `EventSponsor`, `EventSchool`, `EventImg`, `EventEmail`, `EventPhoneNumber`, `EventWebsiteAddress`, `EventCategory`) VALUES
(1, 'Ticketmaster/LiveNation', '2015-02-22', '18:00:00', '20:00:00', 'BAC 323', 'ASU''s Office of Knowledge Enterprise Development (OKED) and Ticketmaster wants to come in and connect with DISC members! Come in for great info, great opportunities, and see what options we as CIS and BDA majors have after graduation', 'FREE', 'Department of Computer Information Systems', 'W.P Carey School of Business', 'images/ticketmaster.jpg', 'cis@asu.edu', '602-123-4567', 'www.ticketmaster.com', 'Business'),
(12, 'Donuts with Deloitt', '2015-02-27', '18:00:00', '20:00:00', 'BAC323', 'Come network and have donuts with Deloitt.', 'FREE', 'Dunkin Donuts', 'W.P Carey School of Business', 'www.Dunkins.com', 'dunkindonuts@asu.edu', '480-123-4567', 'www.DunkinDonuts.com', 'Business'),
(13, 'Disc Web Development Seminar', '2015-03-27', '18:00:00', '19:30:00', 'BA353', 'Local Web Developers Chris Walters and Kawika Badger as well as DISC''s VP of Instruction will go over how a website works and operates. They will built a copy of the DISC website within a couple of days using tools such as Twitter Bootstrap, Visual Studio, and ASP.NET. They will be going over how HTML, CSS, JavaScript, C#, and SQL work together to make a Web App.', 'FREE', 'DISC', 'W.P. Carey School of Business', 'images/disc.jpg', 'vqnguyen16@gmail.com', '480-123-4567', 'www.asudisc.org', 'Food'),
(14, 'Latin American Awareness', '2015-04-09', '14:00:00', '16:00:00', 'LB312', 'Peru, Argentina, Brazil, Nicaragua, Mexico - come raise your awareness in this informative session. Listen to faculty from the New College of Interdisciplinary Studies explain the many cultures of Latin America.', 'FREE', 'LAC', 'New College of Interdisciplina', 'images/LatinAmerica.gif', 'latin.american@asu.edu', '480-345-867', 'www.latin.org', 'Career'),
(15, '9 o''clock example', '2015-02-22', '18:00:00', '20:00:00', 'BAC 323', 'ASU''s Office of Knowledge Enterprise Development (OKED) and Ticketmaster wants to come in and connect with DISC members! Come in for great info, great opportunities, and see what options we as CIS and BDA majors have after graduation', 'FREE', 'Department of Computer Information Systems', 'W.P Carey School of Business', 'images/ticketmaster.jpg', 'cis@asu.edu', '602-123-4567', 'www.example.com', 'Design'),
(16, '9 oclock example', '2015-02-22', '18:00:00', '20:00:00', 'BAC 323', 'ASU''s Office of Knowledge Enterprise Development (OKED) and Ticketmaster wants to come in and connect with DISC members! Come in for great info, great opportunities, and see what options we as CIS and BDA majors have after graduation', 'FREE', 'Department of Computer Information Systems', 'W.P Carey School of Business', 'images/ticketmaster.jpg', 'cis@asu.edu', '602-123-4567', 'www.dummy.com', 'Dummy'),
(17, '9 o''clock example', '2015-02-22', '18:00:00', '20:00:00', 'BAC 323', 'ASU''s Office of Knowledge Enterprise Development (OKED) and Ticketmaster wants to come in and connect with DISC members! Come in for great info, great opportunities, and see what options we as CIS and BDA majors have after graduation', 'FREE', 'Department of Computer Information Systems', 'W.P Carey School of Business', 'images/ticketmaster.jpg', 'cis@asu.edu', '602-123-4567', 'www.the.com', 'Dummy'),
(18, '9 o''clock example', '2015-02-22', '15:00:00', '15:30:00', 'BAC 323', 'ASU''s Office of Knowledge Enterprise Development (OKED) and Ticketmaster wants to come in and connect with DISC members! Come in for great info, great opportunities, and see what options we as CIS and BDA majors have after graduation', 'FREE', 'Department of Computer Information Systems', 'W.P Carey School of Business', 'images/ticketmaster.jpg', 'cis@asu.edu', '602-123-4567', 'www.hello.com', 'Dummy'),
(19, '9 o''clock example', '2015-02-22', '10:00:00', '11:00:00', 'BAC 323', 'ASU''s Office of Knowledge Enterprise Development (OKED) and Ticketmaster wants to come in and connect with DISC members! Come in for great info, great opportunities, and see what options we as CIS and BDA majors have after graduation', 'FREE', 'Department of Computer Information Systems', 'W.P Carey School of Business', 'images/ticketmaster.jpg', 'cis@asu.edu', '602-123-4567', 'www.johnny.com', 'Dummy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
