-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 04:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `album_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` varchar(20) NOT NULL,
  `album` varchar(50) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `release_year` date NOT NULL,
  `genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `album`, `cover`, `artist`, `release_year`, `genre`) VALUES
('120ABM', 'Lover', '2023-10-25 11-31-52Lover.jpg', 'Taylor Swift', '2019-08-23', 'POP'),
('130ABM', 'Wiped Out!', '2023-10-25 11-53-23Wiped Out!.jpg', 'The Neighbourhood', '2015-10-30', 'Alternative Rock'),
('140ABM', 'Lust For Life', '2023-10-25 11-55-56Lust For Life.jpg', 'Lana Del Rey', '2017-07-21', 'Folk Music'),
('150ABM', 'Negentropy', '2023-10-25 12-00-48Negentropy.jpg', 'DAY6', '2021-04-19', 'Pop Rock'),
('160ABM', 'Dawn', '2023-10-25 12-06-03Dawn.jpg', 'The Rose', '2018-10-04', 'K-Rock');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'nap', 'nap@email.com', 'nap123'),
(2, 'adri', 'adri@gmail.com', '12345'),
(3, 'rizka', 'rizka@gmail.com', 'rizka123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
