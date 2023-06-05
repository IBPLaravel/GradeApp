-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 07:11 AM
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
-- Database: `gradeapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'dsads', 'dsfdsf', '2023-06-04 16:57:40', '2023-06-04 16:57:40'),
(2, 'Deneme', 'dsadsa', '2023-06-04 16:57:44', '2023-06-04 16:57:44'),
(3, 'Deneme', 'dsadas', '2023-06-04 17:15:04', '2023-06-04 17:15:04'),
(4, 'deaf', 'dsds', '2023-06-04 17:18:26', '2023-06-04 17:18:26'),
(5, 'dsdas', 'dsadada', '2023-06-04 17:19:04', '2023-06-04 17:19:04'),
(6, 'dsadsa', 'dsadsa', '2023-06-04 17:24:26', '2023-06-04 17:24:26'),
(7, 'das', 'dasdsa', '2023-06-04 17:25:31', '2023-06-04 17:25:31'),
(13, 'dsds', 'fdgdfg', '2023-06-04 17:35:19', '2023-06-04 17:35:19'),
(14, 'dasdsa', 'dasdsa', '2023-06-04 18:26:53', '2023-06-04 18:26:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
