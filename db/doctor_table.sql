-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2026 at 10:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main_hospital_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_table`
--

CREATE TABLE `doctor_table` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `available_from` time DEFAULT NULL,
  `available_until` time DEFAULT NULL,
  `working_days` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_table`
--

INSERT INTO `doctor_table` (`id`, `name`, `specialty`, `phone`, `email`, `photo`, `status`, `available_from`, `available_until`, `working_days`, `created_at`) VALUES
(1, 'DR. Ahmed', 'physiologist', '0309455021', 'ahmed33@gmail.com', '../images/77155obsession.jpg', 'active', '14:00:00', '18:00:00', 'Monday, Tuesday, Friday', '2026-11-01 00:51:48'),
(2, 'DR.ALi', 'cardiologist', '03457898672', 'ali11@gmail.com', '../images/307173tokyoRevengers.jpg', 'active', '16:00:00', '22:00:00', 'Monday, Tuesday, Friday', '2026-11-01 00:57:28'),
(3, 'DR.hafsa', 'dermatologist', '03457898672', 'hafsa888@gmail.com', '../images/319300young ronaldo wallpaper.jpg', 'active', '07:00:00', '10:00:00', 'Wednesday, Tuesday, Saturday', '2026-11-04 00:23:25'),
(5, 'DR.Qadir', 'neurologist', '0309455021', 'qadir22@gmail.com', '../images/119742deadPoetsSociety.jpg', 'active', '07:00:00', '10:00:00', 'Wednesday, Tuesday, Saturday', '2026-11-04 00:27:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_table`
--
ALTER TABLE `doctor_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_table`
--
ALTER TABLE `doctor_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
