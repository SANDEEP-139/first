-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 03:34 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `first`
--

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `meta_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `fileupload` varchar(255) NOT NULL,
  `DT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`meta_id`, `title`, `fileupload`, `DT`) VALUES
(1, '', 'Hydrangeas.jpg', '2018-01-17 10:13:43'),
(2, '', 'Hydrangeas.jpg', '2018-01-17 10:13:56'),
(3, '', 'Lighthouse.jpg', '2018-01-17 10:14:10'),
(5, '', 'Capture.PNG', '2018-01-17 10:32:45'),
(6, '', 'logo.png', '2018-01-17 10:37:28'),
(7, '', 'Tulips.jpg', '2018-01-17 11:15:47'),
(8, '', 'ecommerce.png', '2018-01-17 11:16:25'),
(9, '', 'ecommerce.png', '2018-01-17 11:16:55'),
(10, '', 'logo.png', '2018-01-17 11:17:11'),
(11, '', 'Tulips.jpg', '2018-01-17 12:12:18'),
(12, '', 'newlogo.png', '2018-01-17 12:14:37'),
(13, '', 'Capture.PNG', '2018-01-17 12:15:05'),
(14, '', 'Testing-Out-of-College-Early.jpg', '2018-01-17 12:17:41'),
(15, '', 'logo.png', '2018-01-17 12:21:43'),
(16, '', 'Chrysanthemum.jpg', '2018-01-30 12:00:16'),
(17, '', 'logo.png', '2018-01-30 12:27:30'),
(18, '', 'logo.png', '2018-01-30 12:29:10'),
(19, '', 'logo.png', '2018-01-30 12:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `meta_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_link` varchar(255) NOT NULL,
  `DT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`meta_id`, `menu_name`, `menu_link`, `DT`) VALUES
(1, 'Home', 'home.php', '2018-01-29 05:11:03'),
(2, 'About', 'about.php', '2018-01-29 05:17:55'),
(3, 'services', 'services.php', '2018-01-29 05:39:12'),
(4, 'Team', 'Team.php', '2018-01-29 05:40:13'),
(5, 'testimonials', 'testimonials.php', '2018-01-29 05:41:32'),
(6, 'contact', 'contact.php', '2018-01-29 05:42:22'),
(7, 'login', 'login.php', '2018-01-30 10:33:56'),
(8, 'signup', 'signup.php', '2018-01-30 10:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `regstration`
--

CREATE TABLE `regstration` (
  `meta_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `meta_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cf_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`meta_id`, `f_name`, `l_name`, `email`, `gender`, `password`, `cf_password`) VALUES
(1, '123', 'a', 'ss@gmail.com', 'on', '123', '123'),
(2, '', '', '', '', '', ''),
(3, '', '', '', '', '', ''),
(4, '', '', '', '', '', ''),
(5, '', '', '', '', '', ''),
(6, 'saa', 'ss', 'ss@gmail.com', 'on', '123', '123'),
(7, '', '', '', '', '', ''),
(8, '', '', '', '', '', ''),
(9, 'Abhi', 'Shukla', 'aaa@g.com', 'on', '123', '123'),
(10, '', '', '', '', '', ''),
(11, '', '', '', '', '', ''),
(12, '', '', '', '', '', ''),
(13, '', '', '', '', '', ''),
(14, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `meta_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm` varchar(255) NOT NULL,
  `DT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`meta_id`, `name`, `email`, `username`, `password`, `confirm`, `DT`) VALUES
(1, '', '', '', '', '', '2018-01-15 12:44:34'),
(2, 'sandeep', 'ss@gmail.com', '', '', '', '2018-01-15 12:44:47'),
(3, 'sandeep', 'ss@gmail.com', '', '123', '123', '2018-01-15 12:45:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `regstration`
--
ALTER TABLE `regstration`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`meta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `regstration`
--
ALTER TABLE `regstration`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
