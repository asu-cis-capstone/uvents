-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2015 at 08:45 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uvents`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE IF NOT EXISTS `colleges` (
  `collegeID` bigint(10) NOT NULL AUTO_INCREMENT,
  `collegeName` varchar(50) DEFAULT NULL,
  `collegeLocation` varchar(50) DEFAULT NULL,
  `organizationID` bigint(10) NOT NULL,
  `studentID` bigint(10) NOT NULL,
  PRIMARY KEY (`collegeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100050002 ;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`collegeID`, `collegeName`, `collegeLocation`, `organizationID`, `studentID`) VALUES
(100050001, 'W.P Carey School of Business', 'Tempe', 1000000000, 1201201201);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `eventID` bigint(10) NOT NULL,
  `staffID` bigint(10) NOT NULL,
  `organizationID` bigint(10) NOT NULL,
  `studentID` bigint(10) NOT NULL,
  `collegeID` bigint(10) NOT NULL,
  PRIMARY KEY (`eventID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `EventId` bigint(10) NOT NULL AUTO_INCREMENT,
  `EventName` varchar(30) DEFAULT NULL,
  `EventDate` date DEFAULT NULL,
  `EventTime` time(6) DEFAULT NULL,
  `EventLocation` varchar(20) DEFAULT NULL,
  `EventDescription` text,
  `EventCost` varchar(5) DEFAULT NULL,
  `EventSponsor` varchar(30) DEFAULT NULL,
  `EventSchool` varchar(30) DEFAULT NULL,
  `EventImg` text,
  `EventEmail` varchar(50) DEFAULT NULL,
  `EventPhoneNumber` bigint(10) DEFAULT NULL,
  `EventWebsiteAddress` varchar(50) DEFAULT NULL,
  `EventCategory` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`EventId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventId`, `EventName`, `EventDate`, `EventTime`, `EventLocation`, `EventDescription`, `EventCost`, `EventSponsor`, `EventSchool`, `EventImg`, `EventEmail`, `EventPhoneNumber`, `EventWebsiteAddress`, `EventCategory`) VALUES
(3, 'Game Night with Protiviti', '0000-00-00', '06:00:00.000000', 'BA 353', 'Protiviti and DISC are excited to bring a game night style format for our meeting! Game night details are still being determined, but we will be quizzing you on Protiviti, and prizes will be a part of the festivities! New meeting format with a former company, Protiviti! RSVP for accurate food count', 'FREE', 'Protiviti/DISC', 'W.P Carey School of Business', 'http://www.lmuaccountingsociety.com/wp-content/uploads/2012/12/Protiviti-logo.jpg', 'jqromain@asu.edu', 480, 'www.protiviti.com', 'Social'),
(4, 'General Meeting with ASU''s Off', '2015-02-26', '06:00:00.000000', 'BA 353', 'ASU''s Office of Knowledge Enterprise Development (OKED) and Ticketmaster wants to come in and connect with DISC members! Come in for great info, great opportunities, and see what options we as CIS and BDA majors have after graduation ', 'free', 'Ticketmaster/Live Nation', 'W.P Carey School of Business', 'http://www.livenation.com/', NULL, NULL, NULL, 'Business, Free Food,');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
  `organizationID` bigint(10) NOT NULL,
  `organizationName` varchar(50) NOT NULL,
  `collegeID` bigint(10) NOT NULL,
  `eventID` bigint(10) NOT NULL,
  PRIMARY KEY (`organizationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`organizationID`, `organizationName`, `collegeID`, `eventID`) VALUES
(1000000001, 'Department of Information Systems Clubs', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE IF NOT EXISTS `staffs` (
  `staffID` bigint(10) NOT NULL,
  `staffPassword` varchar(16) NOT NULL,
  `staffName` varchar(55) NOT NULL,
  `eventID` bigint(10) NOT NULL,
  PRIMARY KEY (`staffID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`staffID`, `staffPassword`, `staffName`, `eventID`) VALUES
(1204222378, 'admin12345', 'Steven Lie', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `studentID` bigint(10) NOT NULL,
  `firstName` varchar(55) NOT NULL,
  `lastName` varchar(55) NOT NULL,
  `phoneNumber` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(36) NOT NULL,
  `collegeID` bigint(10) NOT NULL,
  `eventID` bigint(10) NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentID`, `firstName`, `lastName`, `phoneNumber`, `email`, `password`, `collegeID`, `eventID`) VALUES
(1201201201, 'Jorge', 'Delgado', 1234567890, 'jorge.delgado@asu.edu', 'student12345', 100000001, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
