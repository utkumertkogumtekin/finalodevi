-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 06:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

CREATE TABLE `about_me` (
  `About_id` int(11) NOT NULL,
  `About_biography` varchar(250) NOT NULL,
  `first_skill` varchar(50) NOT NULL,
  `second_skill` varchar(50) NOT NULL,
  `third_skill` varchar(50) NOT NULL,
  `forth_skill` varchar(50) NOT NULL,
  `first_counter` varchar(50) NOT NULL,
  `second_counter` varchar(50) NOT NULL,
  `third_counter` varchar(50) NOT NULL,
  `forth_counter` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_me`
--

INSERT INTO `about_me` (`About_id`, `About_biography`, `first_skill`, `second_skill`, `third_skill`, `forth_skill`, `first_counter`, `second_counter`, `third_counter`, `forth_counter`, `title`) VALUES
(1, 'Biyografiniz', 'HTML', 'Java', 'C++', 'Python', '90', '79', '82', '55', 'Sayfa BaÅŸlÄ±ÄŸÄ±nÄ±z');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `locaitonn` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `site_title`, `locaitonn`, `phone`, `email`) VALUES
(1, 'Bana UlaÅŸÄ±n', 'Ä°zmir/TÃ¼rkiye', '+05071875088', 'soruncozuk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `sub_title` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `sub_titlee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `site_title`, `title`, `sub_title`, `facebook`, `twitter`, `instagram`, `sub_titlee`) VALUES
(1, 'Utku Mert', 'KoÄŸumtekin', 'Web TasarÄ±mcÄ±', 'yok', 'UtkuKogumtekin', 'diksonim3', 'Front-end GeliÅŸtirici');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `exp_id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `first_exp` varchar(50) NOT NULL,
  `second_exp` varchar(50) NOT NULL,
  `third_exp` varchar(50) NOT NULL,
  `first_comment` varchar(250) NOT NULL,
  `second_comment` varchar(250) NOT NULL,
  `third_comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`exp_id`, `site_title`, `first_exp`, `second_exp`, `third_exp`, `first_comment`, `second_comment`, `third_comment`) VALUES
(2, 'UzmanlÄ±k A', 'Html/css', 'Front-End GeliÅŸtirici', 'Java UzmanÄ±', '1.AÃ§Ä±klama', '2.AÃ§Ä±klama', '3.AÃ§Ä±klama');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `setting_id` int(11) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  `sifre_tekrarı` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_tekrar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(3, 'aaa', 'soruncozuk@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`About_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_me`
--
ALTER TABLE `about_me`
  MODIFY `About_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
