-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 11:57 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `songlist`
--

CREATE TABLE `songlist` (
  `trackID` int(4) NOT NULL,
  `artist` text NOT NULL,
  `track` text NOT NULL,
  `albumTitle` text NOT NULL,
  `year` int(4) NOT NULL,
  `image` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songlist`
--

INSERT INTO `songlist` (`trackID`, `artist`, `track`, `albumTitle`, `year`, `image`, `link`) VALUES
(1, 'Logic', 'Take It Back', 'Everybody', 2017, 'pictures/Logic.jpg', 'songs/Take It Back.mp3\r\n'),
(2, 'Dr.Dre', 'Forgot About Dre', '2001', 1999, 'pictures/Dr.Dre.jpg', 'songs/Forgot About Dre.mp3'),
(3, 'G-Eazy', 'I Mean It', 'These Things Happen', 2014, 'pictures/G-Eazy.jpg', 'songs/I Mean It.mp3'),
(4, 'Drake', 'Worst Behaviour', 'Nothing Was the Same', 2013, 'pictures/Drake.jpg', 'songs/Worst Behaviour.mp3'),
(5, 'Mobb Deep', 'Shook Ones Pt.II', 'The Infamous', 1995, 'pictures/Mobb Deep.jpg', 'songs/Shook Ones Pt.II.mp3'),
(6, 'Lil Dicky', 'Save That Money', 'Professional Rapper', 2015, 'pictures/Lil Dicky.jpg', 'songs/$ave That Money.mp3'),
(8, 'Lil Uzi Vert', 'XO Tour Llif3', 'Luv Is Rage', 2017, 'pictures/Lil Uzi Vert.jpg', 'songs/XO Tour Llif3.mp3'),
(9, 'Isiah Rashad', 'Wat\'s Wrong', 'The Sun\'s Tirade', 2016, 'pictures/Isiah Rashad.jpg', 'songs/Wat Wrong.mp3'),
(10, 'Jaden Smith', 'Fallen', 'SYRE', 2016, 'pictures/Jaden Smith.png', 'songs/Fallen.mp3'),
(11, '$uicideboy$', 'Audubon', 'Kill Yourself Sagas:XI-XV', 2017, 'pictures/$uicideboy$.jpg', 'songs/Audubon.mp3'),
(12, 'Ab-Soul', 'Huey Knew', 'Do What Thou Wilt.', 2016, 'pictures/Ab-Soul.jpg', 'songs/Huey Knew.mp3'),
(13, 'Higher Brothers', 'Wudidong', 'Black Cab', 2017, 'pictures/Higher Brothers.jpg', 'songs/Wudidong.mp3'),
(14, 'Tyler, The Creator', 'Who Dat Boy', 'Flower Boy\r\n', 2017, 'pictures/Tyler, The Creator.jpg', 'songs/Who Dat Boy.mp3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songlist`
--
ALTER TABLE `songlist`
  ADD PRIMARY KEY (`trackID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songlist`
--
ALTER TABLE `songlist`
  MODIFY `trackID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
