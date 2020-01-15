-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2020 at 08:07 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casestudy`
--

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `note_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  `note_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`note_id`, `title`, `content`, `note_type_id`) VALUES
(11, 'b', 'b', 1),
(12, 'c', 'c', 1),
(13, 'd', 'd', 1),
(14, 'aaa', 'aa', 1),
(16, 'bbbbbbb', 'b', 3),
(17, 'cccc', 'ccc', 2),
(18, 'bb', 'bbbbbbbbbb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `note_type`
--

CREATE TABLE `note_type` (
  `note_type_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note_type`
--

INSERT INTO `note_type` (`note_type_id`, `name`, `description`) VALUES
(1, 'note1', 'a'),
(2, 'note2', 'b'),
(3, 'note3', 'c'),
(4, 'note4', 'd'),
(5, 'note5', 'e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`note_id`),
  ADD KEY `note_type_id` (`note_type_id`);

--
-- Indexes for table `note_type`
--
ALTER TABLE `note_type`
  ADD PRIMARY KEY (`note_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `note_type`
--
ALTER TABLE `note_type`
  MODIFY `note_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`note_type_id`) REFERENCES `note_type` (`note_type_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
