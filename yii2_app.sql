-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2024 at 07:13 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `username`, `auth_key`, `access_token`) VALUES
(1, '$2y$13$tXAbLEEJkDtgXqAnTr0fyulU7FbssfgFLRy.EGkytEI3hrQaGDFuS', 'username', 'ivrplRdxISGfpbaIK4JRqBjAd9Q3x70b', 'aR0ARgCpfmXfJS7-oEQXDhNLZFK8lo5N'),
(2, '$2y$13$Ku6k28IxV4CwiuUubpdYbeRv367.4yslBnAMrPbNIxFIiZWKyVh0G', 'admin', 'ACcuUSgwg223Oo5iwopwzQnlAD8k2y41', 'yVg0kTITUuoq4UgwnM9_PiSXET53iMrt'),
(4, '$2y$13$oFK6jLL4WBf1drh9UTP0nuPL8gU9PsoCmiIuwTkSIHZLHEGCNEKfS', 'admin1', 'mThdgZWOwRB9C095uvYpuhyl3gmnklwb', 'CLm3j5JXCUsMFPcCeqWDHL3-9spCwITS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
