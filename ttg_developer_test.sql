-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2024 at 09:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttg_developer_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'Anggi', 'anggi@gmail.com', '$2y$10$qfJme607Ms7baYVlL3.4bumPOIXw.oKRE/IuSCicgfSOn0.XftMru'),
(2, 'Budi', 'budi@yahoo.com', '$2y$10$qZXk6eq2BChyAHRT/k4XX.njrHrPron.WYYcyqJVaguUg6sIh5CXa'),
(3, 'Caca', 'caca@yahoo.com', '$2y$10$2aUanrAa3IjM4fuCLpZ2KuxREl05oPWH.0A3l1n/Pgi.55Qm3gD0m'),
(4, 'David', 'david@gmail.com', '$2y$10$ZaxilY56s3BhkXMIdHRMFONVoXYrLPc3KtdYVswxHJLqkHHMOiY9i'),
(5, 'Egi', 'egi123@gmail.com', '$2y$10$/JgwlRQgEhRo0/xbHDmo2OzhVOO8HiQRUH396s47aIpkIKfOnMq1S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
