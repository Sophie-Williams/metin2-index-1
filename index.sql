-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 12:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpleindex`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(5) NOT NULL,
  `logo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `bg_img` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tanitim_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `forum_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `wiki_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `logo`, `bg_img`, `tanitim_link`, `forum_link`, `wiki_link`) VALUES
(1, '5BCSRLBX.png', 'YUGZF2VF.jpg', 'http://tanitim.midgard2.com/', 'http://tanitim.midgard2.com/', 'http://tanitim.midgard2.com/');

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE `servers` (
  `id` int(11) NOT NULL,
  `s1_name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s1_date` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s1_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s1_img` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s1_active` int(2) NOT NULL,
  `s2_name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s2_date` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s2_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s2_img` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s2_active` int(2) NOT NULL,
  `s3_name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s3_date` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s3_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s3_img` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s3_active` int(2) NOT NULL,
  `youtube` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`id`, `s1_name`, `s1_date`, `s1_link`, `s1_img`, `s1_active`, `s2_name`, `s2_date`, `s2_link`, `s2_img`, `s2_active`, `s3_name`, `s3_date`, `s3_link`, `s3_img`, `s3_active`, `youtube`) VALUES
(0, 'Midgard2', '12/12/2020', 'localhost', 'M5PUUT1D.jpg', 1, 'Test Server', '11/12/2020', 'localhost', 'PD2O1VL0.jpg', 1, 'Test Server', '10/12/2020', 'localhost', 'Q9DXDP33.jpg', 0, '6TfSbkm5rbw');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `user` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `password`) VALUES
(1, 'demo', 'demo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
