-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2017 at 05:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clg_fest`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_id` int(10) NOT NULL,
  `Event_name` varchar(50) NOT NULL,
  `Event_time` varchar(30) NOT NULL,
  `Event_date` date NOT NULL,
  `Venue` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_id`, `Event_name`, `Event_time`, `Event_date`, `Venue`) VALUES
(1, 'PROGRAMMIG', '10am to 10:30am', '2017-05-20', 'Computer Lab 1'),
(2, 'CODING', '10:45am to 11:30am', '2017-05-20', 'Computer Lab'),
(3, 'DEBUGGING', '12:00pm to 01:30pm', '2017-05-20', 'Computer Lab2'),
(4, 'WORKSHOPSCAD', '02:00pm to 03.30pm', '2017-05-20', 'Workshop lab'),
(5, 'DESIGNING', '10am to 10:30am', '2017-05-21', 'EG Lab'),
(6, 'PAPER PRESENTATION', '10:45am to 11:30am', '2017-05-21', 'Conference Hall'),
(7, 'ROBOTICS', '12:00pm to 01:30pm', '2017-05-21', 'Pharmacy Ground'),
(8, 'POSTER PRESENTATION', '02:00pm to 03.30pm', '2017-05-21', 'Football Ground'),
(9, 'MARKETING', '10am to 10:30am', '2017-05-22', 'Pharmacy Ground'),
(10, 'QUIZ', '10:45am to 11:30am', '2017-05-22', 'Classroom 103'),
(11, 'EXHIBITION', '12:00pm to 01:30pm', '2017-05-22', 'Conference Hall'),
(12, 'MUSIC BAND', '02:00pm to 03.30pm', '2017-05-22', 'Main Ground');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Event_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
