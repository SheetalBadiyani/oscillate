-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2013 at 04:25 PM
-- Server version: 5.1.70-cll
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oscillat_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uname` varchar(85) NOT NULL DEFAULT '',
  `password` varchar(85) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `password`, `email`) VALUES
(1, 'admin', 'M@HESH#123', 'info@professionalwebworld.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `course` varchar(500) NOT NULL,
  `branch` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `batch` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `appeared` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `gender`, `course`, `branch`, `username`, `phone`, `dob`, `batch`, `password`, `appeared`) VALUES
(1, 'john', 'male', 'Laptop', 'Sanpada', 'tt@tt.com', '5435435435', '16-05-2013', '1111', 'oscjoh146986', '');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `quest` char(255) NOT NULL,
  `etype` char(6) NOT NULL,
  `op1` char(255) NOT NULL,
  `op2` char(255) NOT NULL,
  `op3` char(255) NOT NULL,
  `op4` char(255) NOT NULL,
  `ans` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `quest`, `etype`, `op1`, `op2`, `op3`, `op4`, `ans`) VALUES
(5, 'Who is making the Web standards?', 'Laptop', 'The World Wide Web Consortium', 'Microsoft', 'Mozilla', 'Safaris', '1'),
(12, 'PLTRST signals are emitted out of', 'Laptop', 'ICH', 'MCH', 'SIO', 'BIOS', '1'),
(13, 'In the absence of RAM power supply chip, which is responsible to supply VDD voltage to the RAM slot ?', 'Laptop', 'Secondary Step Down Chip', 'Primary Step Down Chip', 'PWM Chip', 'RAM Regulator', '1'),
(14, 'Power Good 3 Volt signal of primary step down chip activates which chips?', 'Laptop', 'PWM Chip', 'Secondary Stepdown Chips', 'ICH', 'MCH', '1'),
(15, 'SLP- 53, SLP- 54, SLP- 55 3 Volts signals are entered by which IC?', 'Laptop', 'ICH', 'MCH', 'Embeded Controller', 'PWM Chip', '1'),
(16, 'S5- Enable signed is entered by which IC?', 'Laptop', 'ICH', 'MCH', 'Embedded Controllar', 'CPU', '3'),
(17, 'In the Intel come i3 processor is the combination of', 'Laptop', 'GMAY+ICH', 'GMLH+ CPU', 'CPU+ICM', 'CPU+RAM', '2'),
(18, 'VREF (Voltage      ) is received on bill No. 1 of the RAM slots from which IC?', '---- S', 'RAM Power Supply', 'Secondary Stepdown Chip', 'MCH', 'RAM Regulator', '4'),
(19, 'In a Laptop system board, which IC works as HOST for changing section?', 'Laptop', 'ICH', 'Embedded Controller Chip', 'Charging IC', 'CPU', '2'),
(20, 'In a Laptop, brightness of the display is controlled by which IC?', 'Laptop', 'Embedded Controller Chip', 'ICH', 'GPU', 'MCH', '1'),
(21, 'What frequency is             by the USB to function?', 'Laptop', '24 MHz', '48 MHz', '25 MHz', '14.318 MHz', '2'),
(22, 'The RTC of which IC if become open, the Laptop will not turn on?', 'Laptop', 'Clock Syntherizer', 'ICH', 'Embedded Controller', 'Ethernet Chip', '2'),
(23, 'In a desktop mother board, the B105 signal is tested on which pill of PCI slot?', 'Laptop', 'A 49', 'A 14', 'A 15', 'A 25', '1'),
(24, 'In the desktop & laptop motherboard, the thermal   in the processor is connected to which IC?', 'Laptop', 'Hardware', 'Super IO', 'ICH', 'Embedded controller chip', '1'),
(25, 'In a chip set with AMD processor, the function clock synthesizer is done by which IC?', 'Laptop', 'CPU', 'MCH', 'ICH', 'PWM- Chip', '2'),
(26, 'Which signal goes from the embedded controller to the ICH to power on the laptop?', 'Laptop', 'PWRBTN# RBC', 'PWRBTN# ICH', 'RSTIN#', 'HCPURST#', '2'),
(27, 'RSMRST(Reserve System Management Reset Signal) goes from embedded controller to which IC?', 'Laptop', 'CPU', 'MCH', 'ICH', 'PWM Chip', '3'),
(28, 'In any motherboard HCPURST# (Host CPU Reset Signal ) is allowed on which IC?', 'Laptop', 'CPU', 'MCH', 'ICH', 'PWM Chip', '1'),
(29, 'DMI (Direct Media Interfere) connects which ICs?', 'Laptop', 'MCH & ICH', 'CPU & MCH', 'RAM & MCH', 'Audio & ICH', '1');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `user` char(15) NOT NULL,
  `total` int(10) NOT NULL,
  `marks` int(10) NOT NULL,
  `ExamDate` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`user`, `total`, `marks`, `ExamDate`) VALUES
('Ashok Jha', 250, 0, 'September 29,2012,03:14;32 pm'),
('Ashok Jha', 250, 0, 'September 29,2012,03:59;33 pm'),
('', 250, 0, 'September 29,2012,04:05;06 pm'),
('Ashok Jha', 250, 0, 'September 29,2012,04:06;10 pm'),
('Ashok Jha', 250, 0, 'September 29,2012,04:09;56 pm'),
('Ashok Jha', 250, 100, 'September 29,2012,04:11;19 pm'),
('Ashok Jha', 250, 100, 'September 30,2012,03:48;56 pm'),
('Ashok Jha', 250, 100, 'September 30,2012,04:20;15 pm'),
('', 250, 100, 'September 30,2012,04:29;39 pm'),
('Ashok Jha', 250, 100, 'September 30,2012,04:30;15 pm'),
('Ashok Jha', 250, 100, 'September 30,2012,04:34;11 pm'),
('Ashok Jha', 250, 100, 'September 30,2012,05:40;50 pm'),
('Ashok Jha', 250, 100, 'September 30,2012,05:43;30 pm'),
('Ashok Jha', 250, 100, 'September 30,2012,05:46;20 pm'),
('Ashok Jha', 250, 100, 'September 30,2012,05:50;22 pm'),
('Ashok Jha', 250, 100, 'September 30,2012,05:52;57 pm'),
('Ashok Jha', 250, 100, 'September 30,2012,06:12;32 pm'),
('Ashok Jha', 250, 100, 'September 30,2012,06:18;05 pm'),
('Ashok Jha', 250, 100, 'September 30,2012,11:14;42 am'),
('Ashok Jha', 250, 100, 'September 30,2012,11:16;11 am'),
('Ashok Jha', 250, 0, 'September 30,2012,11:18;07 am'),
('Ashok Jha', 250, 0, 'September 30,2012,11:18;33 am'),
('Ashok Jha', 250, 0, 'September 30,2012,11:23;53 am'),
('Ashok Jha', 250, 4, 'September 30,2012,11:24;34 am'),
('Ashok Jha', 250, 100, 'September 30,2012,11:25;13 am'),
('Ashok Jha', 250, 4, 'September 30,2012,11:25;34 am'),
('Ashok Jha', 250, 100, 'September 30,2012,11:25;54 am'),
('Ashok Jha', 250, 100, 'September 30,2012,11:26;27 am'),
('Ashok Jha', 250, 100, 'September 30,2012,11:28;48 am'),
('Ashok Jha', 250, 100, 'September 30,2012,11:29;29 am'),
('Ashok Jha', 250, 100, 'September 30,2012,11:34;01 am'),
('Ashok Jha', 250, 100, 'September 30,2012,11:37;01 am'),
('Ashok Jha', 250, 100, 'September 30,2012,11:39;37 am'),
('Ashok Jha', 250, 100, 'September 30,2012,11:40;05 am'),
('Ashok Jha', 250, 100, 'September 30,2012,11:40;57 am'),
('Ashok Jha', 250, 100, 'September 30,2012,11:42;53 am'),
('Ashok Jha', 250, 100, 'October 2,2012,03:12;39 pm'),
('Ashok Jha', 250, 100, 'October 2,2012,04:17;39 pm'),
('Ashok Jha', 250, 100, 'October 2,2012,04:57;28 pm'),
('Ashok Jha', 250, 50, 'October 2,2012,05:27;55 pm'),
('Ashok Jha', 250, 50, 'October 2,2012,05:28;56 pm'),
('Ashok Jha', 250, 50, 'October 2,2012,05:29;45 pm'),
('Ashok Jha', 250, 100, 'October 2,2012,05:55;33 pm'),
('Ashok Jha', 250, 100, 'October 2,2012,05:59;28 pm'),
('Ashok Jha', 250, 100, 'October 2,2012,06:10;07 pm'),
('Ashok Jha', 250, 50, 'October 2,2012,06:11;58 pm'),
('Ashok Jha', 250, 100, 'October 2,2012,06:14;18 pm'),
('Ashok Jha', 250, 100, 'October 2,2012,06:14;43 pm'),
('Ashok Jha', 250, 100, 'October 2,2012,06:15;40 pm'),
('Ashok Jha', 250, 100, 'October 2,2012,06:16;38 pm'),
('Ashok Jha', 250, 100, 'October 2,2012,06:17;09 pm'),
('Ashok Jha', 250, 100, 'October 2,2012,06:20;06 pm'),
('Ashok Jha', 250, 100, 'October 2,2012,06:22;07 pm'),
('Ashok Jha', 250, 100, 'October 2,2012,06:28;59 pm'),
('Ashok Jha', 250, 100, 'October 2,2012,06:31;12 am'),
('Ashok Jha', 250, 100, 'October 2,2012,06:32;20 am'),
('Ashok Jha', 250, 100, 'October 2,2012,06:33;33 am'),
('Ashok Jha', 250, 100, 'October 2,2012,06:34;18 am'),
('Ashok Jha', 250, 100, 'October 2,2012,06:35;07 am'),
('Ashok Jha', 250, 100, 'October 2,2012,06:36;05 am'),
('Ashok Jha', 250, 100, 'October 2,2012,06:36;58 am'),
('Ashok Jha', 250, 100, 'October 2,2012,06:41;14 am'),
('Ashok Jha', 250, 92, 'October 2,2012,06:44;17 am'),
('Ashok Jha', 250, 92, 'October 2,2012,06:53;14 am'),
('Ashok Jha', 250, 92, 'October 2,2012,07:04;40 am'),
('Ashok Jha', 250, 92, 'October 2,2012,07:05;59 am'),
('Ashok Jha', 250, 92, 'October 2,2012,07:06;37 am'),
('Ashok Jha', 250, 0, 'January 17,2013,03:49;36 pm'),
('Ashok Jha', 250, 0, 'January 17,2013,03:49;44 pm'),
('admin', 250, 0, 'January 17,2013,03:58;31 pm'),
('admin', 250, 0, 'January 17,2013,03:59;53 pm'),
('admin', 250, 0, 'January 17,2013,04:00;11 pm'),
('admin', 250, 0, 'January 17,2013,04:02;06 pm'),
('admin', 250, 0, 'January 17,2013,04:25;58 pm'),
('admin', 250, 0, 'January 18,2013,12:31;10 pm'),
('admin', 250, 0, 'January 18,2013,03:42;02 pm'),
('admin', 250, 0, 'January 18,2013,04:34;53 pm'),
('admin', 250, 0, 'January 18,2013,04:41;06 pm'),
('admin', 250, 0, 'January 18,2013,04:42;29 pm'),
('admin', 250, 0, 'January 18,2013,04:43;04 pm'),
('admin', 250, 0, 'January 18,2013,04:43;31 pm'),
('admin', 250, 0, 'January 18,2013,05:45;25 pm'),
('admin', 250, 0, 'January 18,2013,05:45;44 pm'),
('admin', 250, 0, 'January 19,2013,06:24;03 pm'),
('admin', 250, 0, 'January 19,2013,06:32;39 am'),
('admin', 250, 0, 'January 19,2013,06:32;53 am'),
('admin', 250, 0, 'January 19,2013,06:33;01 am'),
('admin', 250, 0, 'January 19,2013,06:33;09 am'),
('admin', 250, 0, 'January 19,2013,06:33;17 am'),
('admin', 250, 0, 'January 24,2013,11:58;44 am'),
('', 250, 0, 'January 24,2013,01:22;41 pm');

-- --------------------------------------------------------

--
-- Table structure for table `uploaddata`
--

CREATE TABLE IF NOT EXISTS `uploaddata` (
  `Certificate_No` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `PassingDate` varchar(255) NOT NULL,
  `Result` varchar(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `Grade` varchar(255) NOT NULL,
  `StudImage` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploaddata`
--

INSERT INTO `uploaddata` (`Certificate_No`, `Name`, `Course`, `PassingDate`, `Result`, `Marks`, `Grade`, `StudImage`) VALUES
('0002', 'Mahesh', 'Laptop', '01/07/2010', 'Pass', '77', 'A+', 'uploded_student_image/mahesh/student$mahesh-'),
('1111', 'Mahesh Pawar', 'Laptop Repairing Course', '23/02/2013', 'Pass', '86', 'A+', 'Mahesh.jpg'),
('0145', 'name', 'Laptop', '24 April 2010', 'Pass', '471', 'A+', 'uploded_student_image/name/Laptop/Laptop$name-cpu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('mahesh', 'mahesh'),
('mahesh', 'mahesh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
