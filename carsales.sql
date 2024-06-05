-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 10:10 AM
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
-- Database: `carsales`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'arun@gmail.com', '163f719ad40c6c38a1d777d305894c4e');

-- --------------------------------------------------------

--
-- Table structure for table `city_table`
--

CREATE TABLE `city_table` (
  `city-id` int(11) NOT NULL,
  `city-name` varchar(50) NOT NULL,
  `city-image` varchar(255) NOT NULL,
  `country-id` int(11) NOT NULL,
  `created-at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country_table`
--

CREATE TABLE `country_table` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `country_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country_table`
--

INSERT INTO `country_table` (`country_id`, `country_name`, `country_image`, `created_at`) VALUES
(3, 'Canada', '1717247588_33de5abfd621091374d2.jpg', '2024-06-01 13:13:08'),
(4, 'Singapore', '1717247730_dd8eebf3ba711497dc9b.png', '2024-06-01 13:15:30'),
(5, 'United Kingdom', '1717348561_9790c3e0a219bdb5890d.png', '2024-06-02 17:16:01'),
(6, 'Germany', '1717395803_86b9bdf6d7a8e61da192.jpg', '2024-06-03 06:23:23'),
(8, 'kumar', '1717348207_c229d2bad837efc774fa.jpg', '2024-06-02 17:20:05'),
(10, 'testing4', '1717248082_b8d359afc7179a838e0d.png', '2024-06-01 13:21:22'),
(12, 'testing5', '1717248216_c79c47af03eaae7cc3dd.png', '2024-06-01 13:23:36'),
(13, 'testing6', '1717348144_295161d084b978a07213.jpg', '2024-06-02 17:09:04'),
(15, 'test2', '1717248863_486f81bee9366bf5721c.png', '2024-06-01 13:34:23'),
(18, 'China', '1717398965_6d79c290e64b2587fd30.jpg', '2024-06-03 07:16:05'),
(19, 'Turkeye', '1717395101_70e51e6a26f38b886396.jpg', '2024-06-03 06:11:41'),
(20, 'Sri Lanka', '1717352415_b070ae0be412c8dce9fa.jpg', '2024-06-02 18:20:15'),
(21, 'Pakistan', '1717352492_316c46a331f5337d7a4b.jpg', '2024-06-02 18:21:32'),
(22, 'USA', '1717395176_cb9a2187808d94c710f5.jpg', '2024-06-03 06:12:56'),
(23, 'Afghanistan', '1717395142_8ecb52d22227f3e5b0b0.jpg', '2024-06-03 06:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user-id` int(11) NOT NULL,
  `user-email` varchar(255) NOT NULL,
  `user-password` varchar(25) NOT NULL,
  `user-type` enum('Exclusive User','Premium User','Standard User') NOT NULL DEFAULT 'Standard User',
  `user-created-at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `city_table`
--
ALTER TABLE `city_table`
  ADD PRIMARY KEY (`city-id`),
  ADD KEY `country-id` (`country-id`);

--
-- Indexes for table `country_table`
--
ALTER TABLE `country_table`
  ADD PRIMARY KEY (`country_id`),
  ADD UNIQUE KEY `country-name` (`country_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city_table`
--
ALTER TABLE `city_table`
  MODIFY `city-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country_table`
--
ALTER TABLE `country_table`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city_table`
--
ALTER TABLE `city_table`
  ADD CONSTRAINT `city_table_ibfk_1` FOREIGN KEY (`country-id`) REFERENCES `city_table` (`city-id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
