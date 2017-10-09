-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2017 at 02:22 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Book`
--

-- --------------------------------------------------------

--
-- Table structure for table `Author`
--

CREATE TABLE `Author` (
  `First name` varchar(100) DEFAULT NULL,
  `Last name` varchar(100) DEFAULT NULL,
  `Social security number` int(20) DEFAULT NULL,
  `birth year` int(11) DEFAULT NULL,
  `link` int(11) DEFAULT NULL,
  `id` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE `Book` (
  `bookid` int(13) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Number of pages` int(11) DEFAULT NULL,
  `Edition number` int(11) DEFAULT NULL,
  `Publishing year` int(11) DEFAULT NULL,
  `Publishing company` varchar(255) DEFAULT NULL,
  `Author` varchar(255) DEFAULT NULL,
  `Reserved` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Book`
--

INSERT INTO `Book` (`bookid`, `Title`, `Number of pages`, `Edition number`, `Publishing year`, `Publishing company`, `Author`, `Reserved`) VALUES
(123, 'The stranger', 356, 1, 2012, 'Bonnier', 'Albert Camus', 0),
(234, 'Paper Craft', 567, 1, 2016, 'Bonnier', 'Mandy cooper', 0),
(345, 'Making Things Happen', 345, 1, 2015, 'Bonnier', 'Elizabeth Murphy', 1),
(456, 'Cool Book', 1, 1, 2012, 'none', 'Me', 1),
(567, 'Nights At The Circus', 278, 1, 2008, 'Bonnier', 'Angela Carter', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testinguser`
--

CREATE TABLE `testinguser` (
  `username` varchar(255) NOT NULL,
  `userpassword` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testinguser`
--

INSERT INTO `testinguser` (`username`, `userpassword`, `comment`) VALUES
('Jessi', '847899c7783800efd963f768337903b9bf905a44', ''),
('', '', 'Hello'),
('Birna', '5db0c01de5f1985e63e10605bbb6cca5d7883d8c', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`bookid`);
