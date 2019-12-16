-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 08:31 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(254) NOT NULL,
  `Student_name` varchar(254) NOT NULL,
  `Email` varchar(254) NOT NULL,
  `Password` varchar(254) NOT NULL,
  `Gender` char(254) NOT NULL,
  `Adress` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `Student_name`, `Email`, `Password`, `Gender`, `Adress`) VALUES
(1, 'manish', 'man@10gmail.com', '1234', 'male', 'mumbai'),
(2, 'shraddha', 'devkar@gmail.com', '23456', 'female', 'nashik'),
(3, 'raj', 'raj@gmail.com', '7654', 'male', 'wadala'),
(4, 'pratham', 'pratham@gmail.com', '6789', 'male', 'gujrat'),
(5, 'yash', 'yashgoriwale@gmail.com', 'yashg', 'male', 'boriwali'),
(6, 'vinayak', 'vinu@gmail.com', 'vinu@21', 'male', 'mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Username` varchar(254) NOT NULL,
  `Forename` varchar(254) NOT NULL,
  `Lastname` varchar(254) NOT NULL,
  `Birthdate` date NOT NULL,
  `Email` varchar(254) NOT NULL,
  `Gender` varchar(254) NOT NULL,
  `Password_1` varchar(254) NOT NULL,
  `Password_2` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Username`, `Forename`, `Lastname`, `Birthdate`, `Email`, `Gender`, `Password_1`, `Password_2`) VALUES
(1, 'manish', 'manish', 'devkar', '2002-05-21', 'manish@gmail.com', 'male', '1234', '1234'),
(2, 'ashu', 'vibhor', 'agarwal', '1998-05-01', 'ashu@gmail.com', 'male', '4567', '4567'),
(3, 'kartik', 'kartik', 'rawal', '1997-10-14', 'kartik@gmail.com', 'male', '7890', '7890'),
(4, 'ritik', 'rutik', 'lokhande', '1999-05-12', 'ritik10lokhande@gmail.com', 'male', 'rutik', 'rutik'),
(5, 'shashikant', 'siddhesh', 'mhatre', '2001-03-17', 'shashimhatre@gmail.com', 'male', 'shashi@10', 'shashi@10'),
(6, 'ashish', 'ashish', 'zunjar', '2001-07-16', 'ashuz@gmail.com', 'male', 'ashishz', 'ashishz'),
(7, 'starlord', 'sam', 'wilson', '1994-03-22', 'samwilson@gmail.com', 'male', 'samwil', 'samwil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
