-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 03:03 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `OnlineMgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(6) UNSIGNED NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `pemail` varchar(255) DEFAULT NULL,
  `pmob_number` varchar(30) DEFAULT NULL,
  `PDatOfAppt` varchar(30) DEFAULT NULL,
  `pdepartment` varchar(50) DEFAULT NULL,
  `popdvisit` varchar(30) DEFAULT NULL,
  `patientid` varchar(255) DEFAULT NULL,
  `preqtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `pname`, `pemail`, `pmob_number`, `PDatOfAppt`, `pdepartment`, `popdvisit`, `patientid`, `preqtime`) VALUES
(2, 'suresh topno', 'suresht900@outlook.com', '9431962331', '2018-12-31', 'cardiac-surgery', 'yes', '', 1524506510),
(3, 'Sabyani Topno', 'sabyani21.topno@gmail.com', '8294419060', '2016-11-30', 'cardiac-surgery', 'yes', '', 1524506608),
(5, 'rozer stephen', 'stephanhawk@aol.com', '8432109329', '2017-10-29', 'dietetics', 'yes', '', 1524508080);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(6) UNSIGNED NOT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `cqueryt` varchar(255) DEFAULT NULL,
  `cqueryq` varchar(255) DEFAULT NULL,
  `cemail` varchar(255) DEFAULT NULL,
  `cmob_number` varchar(30) DEFAULT NULL,
  `creqtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `cname`, `cqueryt`, `cqueryq`, `cemail`, `cmob_number`, `creqtime`) VALUES
(1, 'Anthony golzavious', 'it', 'looking for a discussion with information teachnology head ', 'anthony.hyperz12@yahoo.com', '9234768901', 1524506694);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass1` varchar(255) NOT NULL,
  `browser_detail` varchar(255) NOT NULL,
  `client_ip` varchar(255) NOT NULL,
  `logintime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `email`, `pass1`, `browser_detail`, `client_ip`, `logintime`) VALUES
(8, 'jaywant.topno@mindtree.com', 'baba327d241746ee0829e7e88117d4d5', 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1', '127.0.0.1', 1524508517);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `patientid` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `DatOfBirth` varchar(50) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `mob_number` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass1` varchar(255) DEFAULT NULL,
  `pass2` varchar(255) DEFAULT NULL,
  `user_role` varchar(255) DEFAULT NULL,
  `blood_group` varchar(30) DEFAULT NULL,
  `height` varchar(30) DEFAULT NULL,
  `weight` varchar(30) DEFAULT NULL,
  `createdtime` int(11) DEFAULT NULL,
  `changetime` int(11) DEFAULT NULL,
  `secuirtyq` varchar(255) DEFAULT NULL,
  `secuirtya` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `landline` int(11) DEFAULT NULL,
  `profile_pic_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `patientid`, `firstname`, `middlename`, `lastname`, `DatOfBirth`, `gender`, `mob_number`, `email`, `pass1`, `pass2`, `user_role`, `blood_group`, `height`, `weight`, `createdtime`, `changetime`, `secuirtyq`, `secuirtya`, `city`, `country`, `department`, `landline`, `profile_pic_path`) VALUES
(1, 'DOC8501JATO19192236', 'Jaywant', 'joshep', 'Topno', '1989-01-13', 'female', '7022358501', 'jaywant.topno@mindtree.com', 'baba327d241746ee0829e7e88117d4d5', 'baba327d241746ee0829e7e88117d4d5', 'doctor', 'A+', '198', '95', 1524504156, 1524504253, 'What was your childhood name?', 'guddu', 'Bangalore', 'India', 'cardiology', 802435799, 'Koala.jpg'),
(2, 'PAT8504SHSN19194737', 'sheetal', 'rani', 'sneha', '1991-06-15', 'female', '7022358504', 'sneha.0442@yahoo.com', 'e26bfda67f49ca1fc48f9b51003a5910', 'e26bfda67f49ca1fc48f9b51003a5910', 'patient', 'AB+', '168', '59', 1524505657, NULL, 'Food you cooked first time?', 'tea', NULL, NULL, NULL, NULL, NULL),
(3, 'DOC5678NESH19203037', 'neha', 'kumari', 'sharma', '1980-12-30', 'female', '9678345678', 'nehs90@yahoo.com', '262f5bdd0af9098e7443ab1f8e435290', '262f5bdd0af9098e7443ab1f8e435290', 'doctor', 'B', '187', '76', 1524508237, NULL, 'Which City do you love more?', 'jamshedpur', NULL, NULL, NULL, NULL, NULL),
(4, 'PAT4589ALSH19203228', 'alok', 'kumar', 'sharma', '1987-12-31', 'male', '7021094589', 'alok34@hotmail.com', 'bad220c335d0c1f53548f6acdb17e265', 'bad220c335d0c1f53548f6acdb17e265', 'patient', 'B-', '178', '88', 1524508348, NULL, 'What was your childhood name?', 'aloo', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
