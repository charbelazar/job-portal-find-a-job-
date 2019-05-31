-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 06:24 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_admin` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `First_name` varchar(300) NOT NULL,
  `Last_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_admin`, `ID_user`, `First_name`, `Last_name`) VALUES
(4, 64, 'azar', 'azar'),
(5, 67, 'fel', 'fel');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID_category` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID_category`, `category_name`) VALUES
(1, 'Accounting & Finance'),
(2, 'Sale/Marketing'),
(3, 'Art/Design'),
(4, 'Technologies'),
(5, 'Food Services'),
(6, 'Health Care'),
(7, 'Science'),
(8, 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `ID_company` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`ID_company`, `ID_user`, `company_name`, `address`, `city`, `state`, `website`) VALUES
(12, 62, 'software genius', 'digital disctrict', 'beirut', 'metn', 'www.love.com'),
(13, 63, 'dolphin softwares', 'main street dbaye', 'dbaye', 'metn', 'www.it.com'),
(14, 65, 'exosoftware', 'beirut', 'beirut', 'berut', 'www.1.com');

-- --------------------------------------------------------

--
-- Table structure for table `education_jobseeker`
--

CREATE TABLE `education_jobseeker` (
  `ID_education` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `field_of_study` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `ID_jobseeker` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_jobseeker`
--

INSERT INTO `education_jobseeker` (`ID_education`, `degree`, `field_of_study`, `university`, `ID_jobseeker`) VALUES
(13, 'gfds', 'computer science', 'os', 22),
(14, 'gfdsa', 'engineer', 'hgfdsa', 23),
(15, 'masters degree ', 'computer science', 'osss', 24),
(16, 'bachelor degree', 'accounting', 'osss', 25),
(17, 'doctora', 'finance', 'ndu', 26),
(18, 'masters degree', 'marketing', 'osss', 27);

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `ID_jobpost` int(11) NOT NULL,
  `ID_company` int(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `ID_category` int(250) NOT NULL,
  `ID_jobtype` int(250) NOT NULL,
  `job_description` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`ID_jobpost`, `ID_company`, `title`, `location`, `ID_category`, `ID_jobtype`, `job_description`, `date`) VALUES
(28, 12, 'web dev', 'emtn', 4, 3, 'senior full stack web dev', '2019-03-26 11:46:09'),
(29, 12, 'it support', 'metn', 4, 1, 'high experciened it  manager', '2019-03-26 11:46:51'),
(30, 13, 'accounting manager', 'bikfaya', 1, 2, 'part time accounting manager with high experience', '2019-03-26 11:49:04'),
(31, 13, 'java developer', 'bikfaya', 4, 1, 'senior java dev ', '2019-03-26 11:49:48'),
(32, 14, 'junior accountant', 'metn', 1, 3, 'hard working junior accountant needed', '2019-03-26 11:58:32'),
(33, 13, 'marketing expert', 'dbaye', 2, 2, 'marketing manager with 2 years of experience', '2019-03-28 12:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_profile`
--

CREATE TABLE `jobseeker_profile` (
  `ID_jobseeker` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `first_Name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `salary` varchar(444) NOT NULL,
  `experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker_profile`
--

INSERT INTO `jobseeker_profile` (`ID_jobseeker`, `ID_user`, `first_Name`, `last_name`, `address`, `nationality`, `salary`, `experience`) VALUES
(24, 61, 'charbel', 'azar', 'aintoura', 'Azerbaijani', '12', 'i worked for microfosft'),
(25, 66, 'jad', 'frem', 'tamich', 'Austrian', '1200', 'zatar w zeit manager'),
(26, 68, 'mario', 'baaklini', 'aintoura', 'Lebanese', '5', 'microsoft manager in dubai'),
(27, 69, 'elie', 'elie', 'sayda', 'Azerbaijani', '10', 'zaatar w zeit  marketing manager from 2012 to 2018');

-- --------------------------------------------------------

--
-- Table structure for table `jobtype`
--

CREATE TABLE `jobtype` (
  `ID_jobtype` int(11) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobtype`
--

INSERT INTO `jobtype` (`ID_jobtype`, `type`) VALUES
(1, 'Full-Time'),
(2, 'Part-Time'),
(3, 'Internship'),
(4, '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_ID` int(11) NOT NULL,
  `sender_ID` int(11) NOT NULL,
  `receiver_ID` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_ID`, `sender_ID`, `receiver_ID`, `timestamp`, `message`) VALUES
(41, 63, 66, '2019-03-26 10:09:31', 'hi jad'),
(42, 66, 63, '2019-03-26 10:10:02', 'helo'),
(43, 65, 61, '2019-03-26 10:22:58', 'hi we would like to interview you');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `ID_skills` int(11) NOT NULL,
  `skill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`ID_skills`, `skill`) VALUES
(1, 'PHP'),
(2, 'SQL'),
(3, 'webdesign'),
(4, 'JAVA'),
(5, 'Art'),
(6, 'accounting'),
(7, 'AI'),
(8, 'marketing '),
(9, 'Graphic design');

-- --------------------------------------------------------

--
-- Table structure for table `skills_job`
--

CREATE TABLE `skills_job` (
  `ID_jobpost` int(11) NOT NULL,
  `ID_skill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills_job`
--

INSERT INTO `skills_job` (`ID_jobpost`, `ID_skill`) VALUES
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 5),
(31, 2),
(31, 4),
(32, 6),
(33, 8);

-- --------------------------------------------------------

--
-- Table structure for table `skills_jobseeker`
--

CREATE TABLE `skills_jobseeker` (
  `ID_jobseeker` int(11) NOT NULL,
  `ID_skill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills_jobseeker`
--

INSERT INTO `skills_jobseeker` (`ID_jobseeker`, `ID_skill`) VALUES
(12, 1),
(12, 2),
(12, 3),
(12, 4),
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(14, 1),
(14, 2),
(14, 3),
(14, 4),
(100, 1),
(100, 2),
(100, 3),
(100, 4),
(100, 1),
(100, 2),
(100, 3),
(100, 4),
(100, 1),
(100, 2),
(100, 3),
(100, 4),
(100, 1),
(100, 2),
(100, 3),
(100, 4),
(100, 1),
(100, 2),
(100, 3),
(100, 4),
(100, 1),
(100, 2),
(100, 3),
(100, 4),
(100, 1),
(100, 2),
(100, 3),
(100, 4),
(15, 1),
(15, 2),
(15, 3),
(15, 4),
(16, 1),
(16, 2),
(16, 3),
(16, 4),
(18, 1),
(17, 1),
(19, 1),
(19, 3),
(20, 2),
(21, 2),
(23, 4),
(22, 1),
(22, 2),
(22, 3),
(24, 1),
(24, 2),
(24, 3),
(24, 4),
(25, 6),
(26, 6),
(27, 6),
(27, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `ID_user` int(11) NOT NULL,
  `user_type_ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(25) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `registration_date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`ID_user`, `user_type_ID`, `email`, `password`, `date_of_birth`, `gender`, `phone_number`, `registration_date`, `timestamp`) VALUES
(61, 2, 'charbel@live,com', '123', '1956-10-12', 'Male', '7102923', '2019-03-26', '2019-03-26 09:43:12'),
(62, 3, 'softwarecompany@live.com', '123', '1959-11-11', 'Male', '234567890', '2019-03-26', '2019-03-26 09:44:57'),
(63, 3, 'softwarecompany2@live.com', '123', '1961-11-16', 'Male', '134123', '2019-03-26', '2019-03-26 09:47:55'),
(64, 1, 'admin1@live.com', '123', '1997-03-03', 'male', '123123', '2019-03-26', '2019-03-26 09:54:33'),
(65, 3, 'softwarecompany3@live.com', '123', '1956-10-12', 'Male', '123123', '2019-03-26', '2019-03-26 09:56:35'),
(66, 2, 'jad@live.com', '123', '1960-10-17', 'Male', '1221312', '2019-03-26', '2019-03-26 09:59:46'),
(67, 1, 'admin2@live.com', '123', '0000-00-00', '', '', '2019-03-26', '2019-03-26 10:21:16'),
(68, 2, 'mariobea35@hotmail.com', 'jadkarnikwboularabe3', '1998-01-28', 'Male', '03957760', '2019-03-26', '2019-03-26 10:46:03'),
(69, 2, 'marketing@live.com', '123', '1958-11-14', 'Male', '123456', '2019-03-28', '2019-03-28 10:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type_ID` int(11) NOT NULL,
  `user_type_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_ID`, `user_type_name`) VALUES
(1, 'admin'),
(2, 'freelancer'),
(3, 'company');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_category`);

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`ID_company`);

--
-- Indexes for table `education_jobseeker`
--
ALTER TABLE `education_jobseeker`
  ADD PRIMARY KEY (`ID_education`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`ID_jobpost`);

--
-- Indexes for table `jobseeker_profile`
--
ALTER TABLE `jobseeker_profile`
  ADD PRIMARY KEY (`ID_jobseeker`),
  ADD KEY `ID_user` (`ID_user`);

--
-- Indexes for table `jobtype`
--
ALTER TABLE `jobtype`
  ADD PRIMARY KEY (`ID_jobtype`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_ID`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`ID_skills`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`ID_user`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `ID_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `education_jobseeker`
--
ALTER TABLE `education_jobseeker`
  MODIFY `ID_education` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `ID_jobpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `jobseeker_profile`
--
ALTER TABLE `jobseeker_profile`
  MODIFY `ID_jobseeker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `jobtype`
--
ALTER TABLE `jobtype`
  MODIFY `ID_jobtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `ID_skills` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `user_type_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
