-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 04:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `submissionID` int(3) NOT NULL,
  `date` date NOT NULL,
  `hoursWorked` int(10) NOT NULL,
  `userID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(3) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` char(10) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `firstName`, `lastName`, `username`, `password`, `email`, `phoneNumber`, `usertype`) VALUES
(1, 'Tommy', 'Vong', 'tv_admin', 'password', 'tv@gmail.com', '9781234560', 'admin'),
(2, 'John', 'Smith', 'js_employee', 'password', 'js@gmail.com', '9784561230', 'employee'),
(3, 'testadminfirst', 'testadminlast', 'testadmin', '123', 'testadmin@gmail.com', '1234567890', 'admin'),
(4, 'testemployeefirst', 'testemployeelast', 'testemployee', '$2y$10$Ca9aVYt.XSjxqW4V.JCKAOMqQL5dPLxY4zi5HKgJPWA', 'testemployee@gmail.com', '1234567890', 'employee'),
(5, 'testemployeefirst', 'testemployeelast', 'testemployee', '$2y$10$dkbZN3ZOYciYF2Ip0APQ7OHnrZoTZQWFrwvGUYXaNHG', 'testemployee@gmail.com', '1234567890', 'employee'),
(6, 'blah', 'blah', 'blah', '$2y$10$9ut.tkpLZm1Kn9q3RJky4.73k6EtL/qDNQznw2jPoc2', 'blah@gmail.com', '1234567890', 'employee'),
(7, '1', '1', '1', '$2y$10$vxbQB0/9gnuyq4GShVIEpOd.dGB.5.r2sGRbIUSdQPA', '1@gmail.com', '1', 'employee'),
(8, 'Tyler', 'Schultz', 'ts_employee', '$2y$10$nTqzR.j9./JGN70Pxoz67uVqEbVBkCRnyGObtfd2wIb', 'ts@gmail.com', '9781234567', 'employee'),
(9, 'Karoline', 'Costa', 'kc_admin', '$2y$10$Kny/wiC0gHcJXHHV7HH0ZO5fyAYs0JLl2ZbPOKCfZVt', 'kc@gmail.com', '9781234567', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`submissionID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `submissionID` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
