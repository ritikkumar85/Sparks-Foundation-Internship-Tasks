-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 06:16 PM
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
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `Serial_No` int(5) NOT NULL,
  `AccountNo` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Balance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`Serial_No`, `AccountNo`, `Name`, `Email`, `Balance`) VALUES
(1, 1231, 'Ritik Kumar', 'ritik123@gmail.com', 15700),
(2, 1232, 'Naruto Uzamaki', 'naruto567@gmail.com', 5800),
(3, 1233, 'Gojo Sarotobi', 'gojo897@gmail.com', 20200),
(4, 1234, 'Kakashi Hatake', 'kakashi279@gmail.com', 7500),
(5, 1235, 'Sasuke Uchiha', 'sasuke34@gmail.com', 12300),
(6, 1236, 'Minato Namikaze', 'minato34@gmail.com', 1670),
(7, 1237, 'Shikamaru Nara', 'shikamaru456@gmail.c', 6500),
(8, 1238, 'Might Guy', 'guy123@gmail.com', 8400),
(9, 1239, 'Obito Uchiha', 'obito432@gmail.com', 8000),
(10, 1230, 'Madara Uchiha', 'madara12@gmail.com', 24760);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `Transaction_Id` int(20) NOT NULL,
  `Sender_AccountNo` int(10) NOT NULL,
  `Sender_Name` varchar(50) NOT NULL,
  `Receiver_AccountNo` int(10) NOT NULL,
  `Receiver_Name` varchar(50) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Sender_Balance` int(20) NOT NULL,
  `Receiver_Balance` int(20) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Date_Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`Transaction_Id`, `Sender_AccountNo`, `Sender_Name`, `Receiver_AccountNo`, `Receiver_Name`, `Amount`, `Sender_Balance`, `Receiver_Balance`, `Status`, `Date_Time`) VALUES
(202100, 0, 'null', 0, 'null', 0, 0, 0, 'null', '2023-09-07 22:04:23'),
(202111, 1231, 'Ritik Kumar', 1233, 'Gojo Sarotobi', 200, 14800, 20200, 'Transaction Successful', '2023-09-20 17:43:12'),
(202112, 1236, 'Minato Namikaze', 1237, 'Shikamaru Nara', 500, 2570, 6500, 'Transaction Successful', '2023-09-20 17:43:41'),
(202113, 1238, 'Might Guy', 1239, 'Obito Uchiha', 800, 8400, 8000, 'Transaction Successful', '2023-09-20 18:35:44'),
(202114, 1236, 'Minato Namikaze', 1231, 'Ritik Kumar', 900, 1670, 15700, 'Transaction Successful', '2023-09-20 18:36:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`Transaction_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `Serial_No` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `Transaction_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
