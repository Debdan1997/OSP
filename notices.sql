-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2017 at 08:47 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notices`
--

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Year` varchar(255) NOT NULL,
  `Stream` varchar(255) NOT NULL,
  `Paper Name` varchar(255) NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`ID`, `Date`, `Year`, `Stream`, `Paper Name`, `Time`) VALUES
(1, '2017-02-02', '2nd', 'CSE', 'Data structures', '10:00:00'),
(2, '2017-02-02', '2nd', 'CSE', 'ELECTRONICS', '10:00:00'),
(3, '2017-02-03', '3rd', 'CSE', 'Physics', '12:00:10'),
(4, '2017-02-10', '2', 'IT', 'CS', '00:00:00'),
(5, '2017-02-03', '2', 'ece', 'cs', '01:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Day` text NOT NULL,
  `Ocassion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`ID`, `Date`, `Day`, `Ocassion`) VALUES
(1, '2017-01-26', 'Thursday', 'Republic Day'),
(2, '2017-02-01', 'Wednesday', 'Saraswati Puja'),
(3, '2017-03-12', 'Sunday', 'Doljatra'),
(4, '2017-04-14', 'Friday', 'Good Friday'),
(5, '2017-05-01', 'Monday', 'May day');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `ID` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`ID`, `Title`, `Description`, `Date`) VALUES
(1, 'abc', 'abc', '2017-02-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `Name` varchar(255) NOT NULL,
  `ID` varchar(255) NOT NULL,
  `Password` int(11) NOT NULL,
  `Contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`Name`, `ID`, `Password`, `Contact`) VALUES
('DEBDAN', '1234', 5678, 1234);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Guardian` varchar(255) NOT NULL,
  `Stream` varchar(255) NOT NULL,
  `Year` int(11) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Roll` int(11) NOT NULL,
  `Grades` varchar(255) NOT NULL,
  `Attendance` varchar(255) NOT NULL,
  `Password` int(11) NOT NULL,
  `Admission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Name`, `Photo`, `Mail`, `Contact`, `Guardian`, `Stream`, `Year`, `Section`, `Roll`, `Grades`, `Attendance`, `Password`, `Admission`) VALUES
(12, 'deb', '1-freepik.jpg', 'abc', 12, 'abc', '2', 2, 'null', 0, 'null', 'null', 12, 2017),
(123, 'abc', 'HiAppHere_com_kov.theme.lumos.png', 'abc@gmail.com', 123, 'abc', 'it', 2, 'B', 5, 'D', '50%', 123, 2015),
(512, 'Ayan', 'books-app-icon.png', 'abc@gmail.com', 567, 'abc', 'IT', 2, 'B', 15, 'A', '50%', 567, 2014),
(2048, 'Bipasha', '', 'def@gmail.com', 5678, 'def', 'CSE', 2, '', 0, '', '', 5678, 2015),
(4096, 'Debargha', '', 'ghi@gmail.com', 9101112, 'ghi', 'IT', 3, '', 0, '', '', 9101112, 2014);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
