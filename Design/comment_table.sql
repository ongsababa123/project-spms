-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 11:10 AM
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
-- Database: `project_spms`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE `comment_table` (
  `id_comment` int(100) NOT NULL,
  `comment` text DEFAULT NULL,
  `id_file` int(10) DEFAULT NULL,
  `id_project` int(10) NOT NULL,
  `id_tk` int(10) NOT NULL,
  `type` int(10) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `comment_table`
--

INSERT INTO `comment_table` (`id_comment`, `comment`, `id_file`, `id_project`, `id_tk`, `type`, `date_time`) VALUES
(1, 'adwasdwads', 14, 1, 1, 4, '2024-02-19 09:56:42'),
(2, 'dsfsdfesdfesd', NULL, 1, 1, 4, '2024-02-19 09:59:53'),
(3, 'adfwasdaws', 16, 4, 6, 2, '2024-02-19 10:02:49'),
(4, NULL, 18, 4, 2, 3, '2024-02-19 10:17:18'),
(5, NULL, NULL, 1, 1, 5, '2024-02-19 10:49:09'),
(6, NULL, NULL, 1, 1, 1, '2024-02-19 11:02:00'),
(7, NULL, 18, 4, 2, 3, '2024-02-22 10:17:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`id_comment`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_table`
--
ALTER TABLE `comment_table`
  MODIFY `id_comment` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
