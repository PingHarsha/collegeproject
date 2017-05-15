-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2016 at 09:50 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE IF NOT EXISTS `director` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` enum('MALE','FEMALE') NOT NULL,
  `department` enum('CSE','CE','ECE','EEE','ME') NOT NULL,
  `year` int(100) NOT NULL,
  `month` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `date` enum('01','02','03','04','05','06','07','08','09','10','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`id`, `userid`, `name`, `password`, `gender`, `department`, `year`, `month`, `date`) VALUES
(1, 'director', 'DIRECTOR', '123', 'MALE', 'CSE', 1995, '1', '01');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` enum('MALE','FEMALE') DEFAULT NULL,
  `department` enum('CSE','CE','ECE','EEE','ME') DEFAULT NULL,
  `facultytype` enum('temp','per') NOT NULL,
  `inchargestatus` enum('Y','N') DEFAULT NULL,
  `inchargeyear` enum('1','2','3','4') NOT NULL,
  `inchargesection` enum('A','B') NOT NULL,
  `joiningdate` enum('01','02','03','04','05','06','07','08','09','10','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31') NOT NULL,
  `joiningmonth` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `joiningyear` bigint(10) NOT NULL,
  `casualleaves` int(100) NOT NULL,
  `cl` int(100) NOT NULL,
  `specialcasualleaves` int(100) NOT NULL,
  `scl` int(100) NOT NULL,
  `halfpayleaves` int(100) NOT NULL,
  `hpl` int(100) NOT NULL,
  `earnedleaves` int(100) NOT NULL,
  `el` int(100) NOT NULL,
  `meternityleaves` int(100) NOT NULL,
  `ml` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `userid_2` (`userid`),
  KEY `department` (`department`),
  KEY `inchargestatus` (`inchargestatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `userid`, `name`, `password`, `gender`, `department`, `facultytype`, `inchargestatus`, `inchargeyear`, `inchargesection`, `joiningdate`, `joiningmonth`, `joiningyear`, `casualleaves`, `cl`, `specialcasualleaves`, `scl`, `halfpayleaves`, `hpl`, `earnedleaves`, `el`, `meternityleaves`, `ml`) VALUES
(1, 'cse', 'cse', 'cse', 'MALE', 'CSE', 'temp', 'Y', '4', 'A', '12', '3', 2015, 111, 0, 0, 0, 100, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `facultyrequest`
--

CREATE TABLE IF NOT EXISTS `facultyrequest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fromuser` varchar(100) NOT NULL,
  `gender` enum('MALE','FEMALE') NOT NULL,
  `leavetype` enum('CASUAL LEAVE','SPECIAL CASUAL LEAVE','HALF PAY LEAVE','EARNED LEAVE') NOT NULL,
  `fromyear` int(11) NOT NULL,
  `frommonth` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `fromdate` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31') NOT NULL,
  `toyear` int(11) NOT NULL,
  `tomonth` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `todate` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31') NOT NULL,
  `daysapplied` int(11) NOT NULL,
  `subject` longtext NOT NULL,
  `reason` longtext NOT NULL,
  `department` enum('CSE','CE','ECE','EEE','ME') NOT NULL,
  `hodstatus` enum('ACCEPTED','REJECTED','PENDING') NOT NULL,
  `directorstatus` enum('ACCEPTED','REJECTED','PENDING') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='11' AUTO_INCREMENT=23 ;

--
-- Dumping data for table `facultyrequest`
--

INSERT INTO `facultyrequest` (`id`, `fromuser`, `gender`, `leavetype`, `fromyear`, `frommonth`, `fromdate`, `toyear`, `tomonth`, `todate`, `daysapplied`, `subject`, `reason`, `department`, `hodstatus`, `directorstatus`) VALUES
(22, 'cse', 'MALE', 'CASUAL LEAVE', 16, '3', '24', 16, '3', '27', 3, 'rtnhf', 'd bc', 'CSE', 'ACCEPTED', 'REJECTED');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE IF NOT EXISTS `hod` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` enum('MALE','FEMALE') DEFAULT NULL,
  `department` enum('CSE','CE','ECE','EEE','ME') DEFAULT NULL,
  `inchargestatus` enum('Y','N') DEFAULT NULL,
  `inchargeyear` enum('1','2','3','4') NOT NULL,
  `inchargesection` enum('A','B') NOT NULL,
  `joiningdate` enum('01','02','03','04','05','06','07','08','09','10','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31') NOT NULL,
  `joiningmonth` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `joiningyear` bigint(10) NOT NULL,
  `casualleaves` int(100) NOT NULL,
  `cl` int(100) NOT NULL,
  `specialcasualleaves` int(100) NOT NULL,
  `scl` int(100) NOT NULL,
  `halfpayleaves` int(100) NOT NULL,
  `hpl` int(100) NOT NULL,
  `earnedleaves` int(100) NOT NULL,
  `el` int(100) NOT NULL,
  `meternityleaves` int(100) NOT NULL,
  `ml` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `userid_2` (`userid`),
  KEY `department` (`department`),
  KEY `inchargestatus` (`inchargestatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`id`, `userid`, `name`, `password`, `gender`, `department`, `inchargestatus`, `inchargeyear`, `inchargesection`, `joiningdate`, `joiningmonth`, `joiningyear`, `casualleaves`, `cl`, `specialcasualleaves`, `scl`, `halfpayleaves`, `hpl`, `earnedleaves`, `el`, `meternityleaves`, `ml`) VALUES
(2, 'csehod', 'csehod', 'csehod', 'MALE', 'CSE', 'N', '1', 'A', '18', '6', 20115, 100, 100, 100, 100, 100, 100, 100, 100, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hodrequest`
--

CREATE TABLE IF NOT EXISTS `hodrequest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fromuser` varchar(100) NOT NULL,
  `gender` enum('MALE','FEMALE') NOT NULL,
  `leavetype` enum('CASUAL LEAVE','SPECIAL CASUAL LEAVE','HALF PAY LEAVE','EARNED LEAVE') NOT NULL,
  `fromyear` int(11) NOT NULL,
  `frommonth` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `fromdate` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31') NOT NULL,
  `toyear` int(11) NOT NULL,
  `tomonth` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `todate` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31') NOT NULL,
  `daysapplied` int(11) NOT NULL,
  `subject` longtext NOT NULL,
  `reason` longtext NOT NULL,
  `department` enum('CSE','CE','ECE','EEE','ME') NOT NULL,
  `directorstatus` enum('ACCEPTED','REJECTED','PENDING') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='11' AUTO_INCREMENT=20 ;

--
-- Dumping data for table `hodrequest`
--

INSERT INTO `hodrequest` (`id`, `fromuser`, `gender`, `leavetype`, `fromyear`, `frommonth`, `fromdate`, `toyear`, `tomonth`, `todate`, `daysapplied`, `subject`, `reason`, `department`, `directorstatus`) VALUES
(18, 'csehod', 'MALE', 'CASUAL LEAVE', 17, '3', '18', 17, '3', '18', 0, 'cs', 'csc', 'CSE', 'REJECTED'),
(19, 'csehod', 'MALE', 'SPECIAL CASUAL LEAVE', 16, '3', '24', 16, '3', '28', 4, ' gfnfcn', 'ngnvhnvhv', 'CSE', 'ACCEPTED');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `gender` enum('MALE','FEMALE') NOT NULL,
  `branch` enum('CSE','CE','ECE','EEE','ME') NOT NULL,
  `acedemic` enum('1','2','3','4') NOT NULL,
  `section` enum('A','B') NOT NULL,
  `overall` varchar(100) NOT NULL,
  `leave` varchar(100) NOT NULL,
  PRIMARY KEY (`id`,`userid`,`acedemic`,`section`,`branch`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `userid`, `password`, `phone`, `gender`, `branch`, `acedemic`, `section`, `overall`, `leave`) VALUES
(1, 'harsha', '12aau06017', '123456', 0, 'MALE', 'CSE', '4', 'A', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentrequest`
--

CREATE TABLE IF NOT EXISTS `studentrequest` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fromuser` varchar(100) NOT NULL,
  `branch` enum('CSE','CE','ECE','EEE','ME') NOT NULL,
  `acedemic` enum('1','2','3','4') NOT NULL,
  `year` bigint(10) NOT NULL,
  `month` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `date` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31') NOT NULL,
  `section` varchar(10) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `hodstatus` enum('ACCEPTED','REJECTED','PENDING') NOT NULL,
  `facultystatus` enum('ACCEPTED','REJECTED','PENDING') NOT NULL,
  `generalsection` enum('ACCEPTED','REJECTED','PENDING') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `studentrequest`
--

INSERT INTO `studentrequest` (`id`, `fromuser`, `branch`, `acedemic`, `year`, `month`, `date`, `section`, `subject`, `reason`, `hodstatus`, `facultystatus`, `generalsection`) VALUES
(30, '12aau06017', 'CSE', '4', 16, '3', '24', ' A', 'fsfs', 'help', 'ACCEPTED', 'ACCEPTED', 'PENDING'),
(31, '12aau06017', 'CSE', '4', 16, '3', '24', ' A', 'aaaa', 'aaa', 'ACCEPTED', 'REJECTED', 'PENDING'),
(32, '12aau06017', 'CSE', '4', 16, '3', '27', ' A', 'bggc', 'aa', 'ACCEPTED', 'ACCEPTED', 'PENDING');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
