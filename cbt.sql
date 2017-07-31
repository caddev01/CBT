-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 04:54 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` text NOT NULL,
  `pwd` varchar(40) NOT NULL,
  `role` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pwd`, `role`) VALUES
(1, 'ademy', 'demolalanre', 'Supervisor'),
(2, 'Rhoda', 'moyin', 'brother');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `cid` int(11) NOT NULL,
  `cName` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`cid`, `cName`) VALUES
(1, 'Jss 1'),
(9, 'Lecturer'),
(8, 'Year 4'),
(7, 'Year 4');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `ans1` text NOT NULL,
  `ans2` text NOT NULL,
  `ans3` text NOT NULL,
  `ans4` text NOT NULL,
  `cans` text NOT NULL,
  `class_id` int(11) NOT NULL,
  `Image` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `sid` int(11) NOT NULL,
  `surname` text NOT NULL,
  `firstname` text NOT NULL,
  `scores` int(11) NOT NULL,
  `class_ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `surname` text NOT NULL,
  `fname` text NOT NULL,
  `username` text NOT NULL,
  `s_pwd` varchar(40) NOT NULL,
  `dateregister` date DEFAULT NULL,
  `date_last_visit` date DEFAULT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `surname`, `fname`, `username`, `s_pwd`, `dateregister`, `date_last_visit`, `class_id`) VALUES
(2, 'akinko', 'lovilo', 'lolo', 'basic', '2017-05-20', '2017-05-20', 24),
(3, 'Juily', 'funno', 'ruth', 'mspretty', NULL, NULL, 27),
(8, 'Ameh', 'funsho', 'naomi00', 'joy', NULL, NULL, 34),
(7, 'Elezie', 'Amaka', 'smurf', 'love', NULL, NULL, 3),
(6, 'Goke', 'Moyin', 'Nuel', 'lemon', NULL, NULL, 140);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `sub_name` text NOT NULL,
  `no_que` int(11) NOT NULL,
  `class_ID` int(11) NOT NULL,
  `stime` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `sub_name`, `no_que`, `class_ID`, `stime`) VALUES
(1, 'Mathematics', 20, 1, '00:18:00'),
(5, 'Geology', 43, 8, '00:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL,
  `surname` text NOT NULL,
  `fname` text NOT NULL,
  `username` text NOT NULL,
  `t_pwd` varchar(40) NOT NULL,
  `dateregister` date DEFAULT NULL,
  `date_last_visit` date DEFAULT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `surname`, `fname`, `username`, `t_pwd`, `dateregister`, `date_last_visit`, `class_id`) VALUES
(1, ' gvhgvgh', 'dnjfnwj', 'bjwbfwbf', 'bfjwbfjb', '2017-05-20', '2017-05-20', 488),
(2, 'jdnjndjn', 'fknjrne', 'njfenjfn', 'nfjenjfn', NULL, NULL, 44448),
(3, 'Adelande', 'omobola', 'Emmanuel', 'hrbfhrbfh', NULL, NULL, 56),
(4, 'Tochukwu', 'landlord', 'teacher', 'dmeyg', NULL, NULL, 34),
(5, 'Omotosho', 'Joseph', 'rhoda', 'moyin', NULL, NULL, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`),
  ADD UNIQUE KEY `class_id` (`class_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `class_id` (`class_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `class_id` (`class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
