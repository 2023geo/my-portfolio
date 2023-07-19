-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 01:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my-portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `contact_title` varchar(255) NOT NULL,
  `contact_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_title`, `contact_content`) VALUES
(1, 'Phone number', '+265999312947'),
(2, 'E-mail', 'georgesailsmbewe@gmail.com'),
(3, 'Home address', 'Box 32<br>Mpemba<br>Blantyre<br>Malawi.'),
(4, 'Other mobile number', '+26588356241');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_title`, `project_description`) VALUES
(1, 'E-commerce Website Redesign', 'Redesign and enhance the user experience of an existing e-commerce website by implementing a modern and intuitive interface, optimizing performance, and adding new features such as personalized recommendations and a simplified checkout process.'),
(2, 'Data Analytics Dashboard', 'Build a data analytics dashboard that consolidates data from multiple sources, performs real-time analysis, and presents insights through interactive visualizations, empowering decision-makers to make informed business decisions based on data-driven insig');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_title` varchar(255) NOT NULL,
  `skill_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_title`, `skill_description`) VALUES
(1, 'UI/UX Designer', 'Skilled in creating visually appealing and user-friendly interfaces, conducting user research, and optimizing user experience through wireframing and prototyping.'),
(2, 'Network Administrator', 'Proficient in managing and troubleshooting network infrastructure, configuring routers and switches, and ensuring network security and performance.'),
(3, 'DevOps Engineer', 'Experienced in automating software development processes, managing continuous integration and deployment pipelines, and ensuring smooth collaboration between development and operations teams.'),
(4, 'Artificial Intelligence Engineer', 'Skilled in developing AI algorithms, implementing machine learning models, and applying natural language processing techniques.'),
(5, 'Data Scientist', 'Experienced in collecting, analyzing, and interpreting complex datasets, developing predictive models, and providing data-driven insights.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
