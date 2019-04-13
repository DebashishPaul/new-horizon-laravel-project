-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 12:46 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delicious`
--

-- --------------------------------------------------------

--
-- Table structure for table `receipes`
--

CREATE TABLE `receipes` (
  `id` int(10) UNSIGNED NOT NULL,
  `receipe_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receipe_price` double(6,2) NOT NULL,
  `receipe_cat` int(11) NOT NULL,
  `receipe_scat` int(11) NOT NULL,
  `receipe_description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receipe_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receipes`
--

INSERT INTO `receipes` (`id`, `receipe_name`, `receipe_price`, `receipe_cat`, `receipe_scat`, `receipe_description`, `receipe_image`, `created_at`, `updated_at`) VALUES
(1, 'fish', 1000.00, 1, 1, 'Description', 'C:\\xampp\\tmp\\php88C7.tmp', '2018-10-12 04:36:53', '2018-10-12 04:36:53'),
(2, 'fish', 1000.00, 1, 1, 'Description', 'Untitled 1.jpg', '2018-10-12 04:38:25', '2018-10-12 04:38:25'),
(3, 'dsf', 4254.00, 1, 1, 'dfsd', 'Untitled 1.jpg', '2018-10-12 05:18:05', '2018-10-12 05:18:05'),
(4, 'dsf', 4254.00, 1, 1, 'dfsd', 'Untitled 1.jpg', '2018-10-12 05:18:38', '2018-10-12 05:18:38'),
(5, 'sdf', 4.00, 1, 1, 'sddsf', 'Untitled 1.jpg', '2018-10-12 05:20:30', '2018-10-12 05:20:30'),
(6, 'dfg', 345.00, 1, 1, 'dfg', 'Untitled 1.jpg', '2018-10-12 05:22:16', '2018-10-12 05:22:16'),
(7, 'ghj', 66.00, 1, 1, 'fjhg', 'download.jpg', '2018-11-02 04:53:19', '2018-11-02 04:53:19'),
(8, 'ghj', 66.00, 1, 1, 'fjhg', 'download.jpg', '2018-11-02 04:53:54', '2018-11-02 04:53:54'),
(9, 'ghj', 66.00, 1, 1, 'fjhg', 'download.jpg', '2018-11-02 04:54:47', '2018-11-02 04:54:47'),
(10, 'ghj', 66.00, 1, 1, 'fjhg', 'download.jpg', '2018-11-02 04:55:42', '2018-11-02 04:55:42'),
(11, 'fdgfd', 445.00, 1, 1, 'hgfhfghg ghgf gfhgf', 'CMS_Creative_164657191_Kingfisher.jpg', '2018-11-02 05:05:44', '2018-11-02 05:05:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receipes`
--
ALTER TABLE `receipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receipes`
--
ALTER TABLE `receipes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
