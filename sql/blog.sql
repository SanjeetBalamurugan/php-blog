-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 02:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `featuredImage` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `likes` int(11) NOT NULL,
  `context` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `featuredImage`, `title`, `content`, `likes`, `context`) VALUES
(1, '', 'Lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus id augue sed elementum. Proin in lacus rhoncus, blandit purus id, ultrices nunc. Donec rhoncus lacinia ex, id tincidunt urna condimentum vitae. Ut lectus purus, pretium a massa nec, cursus sodales mi. Maecenas sem ante, rutrum quis felis in, ultricies posuere tellus. Curabitur semper erat velit, non hendrerit dui feugiat sed. Maecenas rhoncus tristique urna, sed vehicula erat. Nulla at massa vitae velit feugiat imperdiet. Morbi vel quam imperdiet, ultricies libero ut, sollicitudin quam. Phasellus condimentum felis ac fringilla auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit', 25, 'lorem ipsum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

