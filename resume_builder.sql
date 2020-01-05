-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 01:50 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume_builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `achievement_id` int(11) NOT NULL,
  `achievement` varchar(152) NOT NULL,
  `resume_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`achievement_id`, `achievement`, `resume_id`) VALUES
(2, 'Amatharasu', 1),
(3, 'Hackathon Winner', 1),
(4, 'Winner Winner', 1),
(5, 'Ultimate Winner', 1);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL,
  `degree` varchar(512) NOT NULL,
  `institute` varchar(512) NOT NULL,
  `start_date` varchar(20) DEFAULT NULL,
  `end_date` varchar(20) DEFAULT NULL,
  `description` varchar(512) NOT NULL,
  `resume_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `degree`, `institute`, `start_date`, `end_date`, `description`, `resume_id`) VALUES
(1, 'B.E.', 'D. J. Sanghvi', 'August 2017 ', 'Pursuing', 'CGPA : 9.18', 1),
(2, 'High School', 'PACE ', 'June 2015', 'April 2017', 'Percentage 80%', 1);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `experience_id` int(11) NOT NULL,
  `title` varchar(512) NOT NULL,
  `start_date` varchar(20) DEFAULT NULL,
  `end_date` varchar(20) DEFAULT NULL,
  `description` varchar(512) NOT NULL,
  `resume_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`experience_id`, `title`, `start_date`, `end_date`, `description`, `resume_id`, `company`) VALUES
(1, 'Full Stack Web Developer', 'March 2019', 'June 2019', 'Masti', 1, 'Omic Healthcare'),
(2, 'ML Head', 'March 2019', 'June 2019', 'MLAI', 1, 'JP Morgan');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `language_id` int(11) NOT NULL,
  `language` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`language_id`, `language`) VALUES
(1, 'Hindi'),
(2, 'English'),
(3, 'Marathi'),
(4, 'Japanese');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `resume_id` int(11) NOT NULL,
  `title` varchar(512) DEFAULT NULL,
  `filepath` varchar(512) DEFAULT NULL,
  `profession` varchar(50) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `objective` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`resume_id`, `title`, `filepath`, `profession`, `user_id`, `objective`) VALUES
(1, NULL, NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resume_language`
--

CREATE TABLE `resume_language` (
  `resume_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resume_language`
--

INSERT INTO `resume_language` (`resume_id`, `language_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skill_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(512) DEFAULT NULL,
  `resume_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `name`, `description`, `resume_id`) VALUES
(5, 'Django', NULL, 1),
(6, 'Javascript', NULL, 1),
(13, 'Python', NULL, 1),
(15, 'Java', NULL, 1),
(16, 'PHP', NULL, 1),
(17, 'HTML', NULL, 1),
(18, 'CSS', NULL, 1),
(19, 'This is a very very very big skill ', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(127) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `contact` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `photo` varchar(512) DEFAULT NULL,
  `sign_up_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `address`, `date_of_birth`, `contact`, `username`, `password`, `photo`, `sign_up_date`) VALUES
(1, 'Atharva Tawate', 'atharva1911@gmail.com', 'Q 452 ,NEW AIR INDIA COLONY, KALINA, SANTACRUZ(EAST)', '1999-11-11', '9082068988', 'Atharva', 'f690db06e8e1834be04d4b2b9a1d99ae', 'assets/images/profile_pic/itachi_Uchiha.jpg', '2019-09-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `website_id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `url` varchar(512) NOT NULL,
  `resume_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`website_id`, `name`, `url`, `resume_id`) VALUES
(1, 'Github', 'atharva@github.com', 1),
(3, 'LinkedIIn', 'atharva1111', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`achievement_id`),
  ADD KEY `resume_id` (`resume_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`),
  ADD KEY `resume_id` (`resume_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experience_id`),
  ADD KEY `resume_id` (`resume_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`resume_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `resume_language`
--
ALTER TABLE `resume_language`
  ADD PRIMARY KEY (`resume_id`,`language_id`),
  ADD KEY `language_id` (`language_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_id`),
  ADD KEY `resume_id` (`resume_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`website_id`),
  ADD KEY `resume_id` (`resume_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `achievement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `website_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achievement`
--
ALTER TABLE `achievement`
  ADD CONSTRAINT `achievement_ibfk_1` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`resume_id`);

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`resume_id`);

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`resume_id`);

--
-- Constraints for table `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `resume_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `resume_language`
--
ALTER TABLE `resume_language`
  ADD CONSTRAINT `resume_language_ibfk_1` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`resume_id`),
  ADD CONSTRAINT `resume_language_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `language` (`language_id`);

--
-- Constraints for table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `skill_ibfk_1` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`resume_id`);

--
-- Constraints for table `website`
--
ALTER TABLE `website`
  ADD CONSTRAINT `website_ibfk_1` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`resume_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
