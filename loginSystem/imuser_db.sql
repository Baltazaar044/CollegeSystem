-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 06:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imuser_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `user` varchar(255) NOT NULL,
  `Announcements` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`user`, `Announcements`, `date`) VALUES
('[Chinmay]', '[test data]', '0000-00-00'),
('[Chinmay]', '[test data]', '0000-00-00'),
('[Chinmay]', '[test data]', '0000-00-00'),
('[Chinmay]', '[test data]', '0000-00-00'),
('[Chinmay]', '[test data]', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('5b13ed3a6e006', '5b13ed3a9436a'),
('5b13ed72489d8', '5b13ed7263d70'),
('6416eb4283139', '6416eb42845bd'),
('6416eb428c307', '6416eb428d87d'),
('64173ee4cdee4', '64173ee4d1e1f'),
('64173ee4dd49f', '64173ee4de8a8'),
('6447e08d08010', '6447e08d0909e'),
('6447e08d0f270', '6447e08d10543'),
('6447e08d171bb', '6447e08d18906'),
('6447e08d1f96e', '6447e08d2043b'),
('6447e08d24134', '6447e08d25088'),
('6448bef2373cf', '6448bef238120'),
('6448bef23e10b', '6448bef23f42b');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `filename`, `size`, `downloads`) VALUES
(1, 'sibin', 'tostoreinexcelsheet.png', 40314, 4),
(2, 'sibin', 'tostoreinexcelsheet.png', 40314, 0),
(3, 'sibin', 'tostoreinexcelsheet.png', 40314, 0),
(4, 'sibin', 'Snapchat-2071653722.jpg', 186259, 0),
(5, 'sibin', 'Snapchat-2071653722.jpg', 186259, 0),
(6, 'sibin', 'Snapchat-2071653722.jpg', 186259, 0),
(7, 'sibin', 'Sermonrl.pdf', 193155, 2),
(8, 'sibin', 'Sermonrl (2).pdf', 193155, 0),
(9, 'sibin', 'tostoreinexcelsheet (1).png', 40314, 0),
(10, 'Chinmay', 'Sermonrl (3).pdf', 193155, 0),
(11, 'Chinmay', 'Sermonrl (2).pdf', 193155, 0),
(12, 'test', 'id card.pdf', 184968, 1),
(13, 'Chinmay', 'Sermonrl (2).pdf', 193155, 0),
(14, 'test', 'id card.pdf', 184968, 1);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('spamsibin@gmail.com', '64173ea9020ca', 2, 2, 2, 0, '2023-04-25 13:50:04'),
('spamsibin@gmail.com', '6416ea87a0680', 10, 2, 1, 1, '2023-04-25 13:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `name`, `descr`, `fromdate`, `todate`, `status`) VALUES
(1, 'Chinmay', 'IM Sick', '2023-03-03', '2023-03-04', 'Accepted'),
(2, 'Chinmay', 'Low fever', '2023-03-03', '2023-03-04', 'Accepted'),
(3, '', 'Low fever', '2023-03-03', '2023-03-04', 'Pending'),
(4, 'chin', 'Piles hua hai.', '2023-03-03', '2023-03-05', 'Rejected'),
(5, 'chin', 'Marriage ', '2023-03-14', '2023-03-18', 'Pending'),
(6, 'sibin', 'dwdw', '2023-03-16', '2023-02-28', 'Pending'),
(7, 'sibin', 'Study For Exams ', '2023-03-19', '2023-03-21', 'Accepted'),
(8, 'test', 'none', '2023-03-19', '2023-03-20', 'Accepted'),
(9, 'test', 'going for honeymoon', '2023-03-20', '2023-03-25', 'Rejected'),
(10, 'test', 'sick', '2023-04-20', '2023-05-06', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `user` varchar(255) NOT NULL,
  `Announcements` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`user`, `Announcements`, `date`) VALUES
('Chinmay', 'Test Notification', '2023-03-17'),
('Chinmay', 'tomorrow is holiday', '2023-03-18'),
('Chinmay', 'test2 Announcement', '2023-03-18'),
('Chinmay', 'test3 Announcement', '2023-03-18'),
('test', 'holiday ', '2023-03-18'),
('Chinmay', 'Tomorrow we have Project Exam  ', '2023-04-25'),
('test', 'holiday', '2023-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('5b13ed3a6e006', 'sdb', '5b13ed3a9436a'),
('5b13ed3a6e006', 'jsdb', '5b13ed3a94374'),
('5b13ed3a6e006', 'dsbv', '5b13ed3a94377'),
('5b13ed3a6e006', 'jbdv', '5b13ed3a94379'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d70'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d7a'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d7d'),
('5b13ed72489d8', 'vsdv', '5b13ed7263d80'),
('6416eb4283139', 'Natural logic processing', '6416eb42845b7'),
('6416eb4283139', 'Natural Language Perfecting', '6416eb42845bc'),
('6416eb4283139', 'Natural Language Processing', '6416eb42845bd'),
('6416eb4283139', 'Nature Language Preparing', '6416eb42845be'),
('6416eb428c307', 'NLP', '6416eb428d877'),
('6416eb428c307', 'Neural networks', '6416eb428d87d'),
('6416eb428c307', 'GPU', '6416eb428d87e'),
('6416eb428c307', 'CPU', '6416eb428d87f'),
('64173ee4cdee4', 'sibin', '64173ee4d1e1f'),
('64173ee4cdee4', 'chinmay', '64173ee4d1e27'),
('64173ee4cdee4', 'deepak', '64173ee4d1e28'),
('64173ee4cdee4', 'trunal', '64173ee4d1e29'),
('64173ee4dd49f', 'old enough', '64173ee4de89a'),
('64173ee4dd49f', '20', '64173ee4de8a8'),
('64173ee4dd49f', 'underage', '64173ee4de8a9'),
('64173ee4dd49f', 'mentally 5', '64173ee4de8aa'),
('6447e08d08010', 'im fine ', '6447e08d09095'),
('6447e08d08010', 'im good ', '6447e08d0909e'),
('6447e08d08010', 'very well ', '6447e08d090a0'),
('6447e08d08010', 'great', '6447e08d090a1'),
('6447e08d0f270', 'Wick van Rossum', '6447e08d10539'),
('6447e08d0f270', 'Rasmus Lerdorf', '6447e08d10542'),
('6447e08d0f270', 'Guido van Rossum', '6447e08d10543'),
('6447e08d0f270', 'Niene Stom', '6447e08d10545'),
('6447e08d171bb', 'ans 1', '6447e08d188fa'),
('6447e08d171bb', 'ans 2', '6447e08d18903'),
('6447e08d171bb', 'ans 3 ', '6447e08d18906'),
('6447e08d171bb', 'ans 4', '6447e08d18907'),
('6447e08d1f96e', 'ans 1 ', '6447e08d20435'),
('6447e08d1f96e', 'ans 2', '6447e08d2043b'),
('6447e08d1f96e', 'ans 3', '6447e08d2043c'),
('6447e08d1f96e', 'ans 4', '6447e08d2043d'),
('6447e08d24134', 'ans 1', '6447e08d25082'),
('6447e08d24134', 'ans 2', '6447e08d25087'),
('6447e08d24134', 'ans 3', '6447e08d25088'),
('6447e08d24134', 'ans 4', '6447e08d25089'),
('6448bef2373cf', '', '6448bef238120'),
('6448bef2373cf', '', '6448bef238125'),
('6448bef2373cf', '', '6448bef238126'),
('6448bef2373cf', '', '6448bef238127'),
('6448bef23e10b', '', '6448bef23f42b'),
('6448bef23e10b', '', '6448bef23f432'),
('6448bef23e10b', '', '6448bef23f433'),
('6448bef23e10b', '', '6448bef23f434');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('5b13ed30cd71f', '5b13ed3a6e006', 'dbjb', 4, 1),
('5b13ed6bb8bcd', '5b13ed72489d8', 'dvsd', 4, 1),
('6416ea87a0680', '6416eb4283139', 'What is NLP?', 4, 1),
('6416ea87a0680', '6416eb428c307', 'What helps computer to think like human?', 4, 2),
('64173ea9020ca', '64173ee4cdee4', 'whats my name ', 4, 1),
('64173ea9020ca', '64173ee4dd49f', 'whats my age ', 4, 2),
('6447df7e16718', '6447e08d08010', 'how are you', 4, 1),
('6447df7e16718', '6447e08d0f270', 'Who developed Python Programming Language?', 4, 2),
('6447df7e16718', '6447e08d171bb', 'test question 3 ', 4, 3),
('6447df7e16718', '6447e08d1f96e', 'test question 4', 4, 4),
('6447df7e16718', '6447e08d24134', 'test question 5', 4, 5),
('6448beeff2bca', '6448bef2373cf', '', 4, 1),
('6448beeff2bca', '6448bef23e10b', '', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `date`) VALUES
('6416ea87a0680', 'Machine Learning', 10, 0, 2, '2023-03-19 10:57:11'),
('64173ea9020ca', 'Cc', 1, 0, 2, '2023-03-19 16:56:09'),
('6447df7e16718', 'Test_quiz', 10, 0, 5, '2023-04-25 14:11:10'),
('6448bec3ebb8b', 'Test', 5, 0, 2, '2023-04-26 06:03:47'),
('6448beeff2bca', 'Test', 5, 0, 2, '2023-04-26 06:04:31');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `testname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`, `testname`) VALUES
('spamsibin@gmail.com', 42, '2023-04-25 13:50:28', 'Machine Learning');

-- --------------------------------------------------------

--
-- Table structure for table `uploads_data`
--

CREATE TABLE `uploads_data` (
  `name` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploads_data`
--

INSERT INTO `uploads_data` (`name`, `filename`, `date`) VALUES
('Chinmay', 'Dennis Vikhroli.pdf', '2023-03-12'),
('Chinmay', 'id card.pdf', '2023-03-12'),
('Chinmay', 'id card.pdf', '2023-03-12'),
('Chinmay', 'id card.pdf', '2023-03-12'),
('Chinmay', 'Ssc.pdf', '2023-03-12'),
('Chinmay', 'VS Parle.pdf', '2023-03-12'),
('Chinmay', 'Screenshot_20230207_195741.png', '2023-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `college`, `email`, `password`) VALUES
('Swagatika Padhi', 'National Institute of Science and Technology, Berhampur', 'pinky@gmail.com', 'pinky'),
('Priyanka Pattnaik', 'National Institute of Science and Technology, Berhampur', 'priyanka@gmail.com', 'pinka');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(13, 'Chinmay', 'chinmay@test.com', 'HelloWorld', 'Teacher'),
(14, 'sibin', 'spamsibin@gmail.com', '2002', 'Student'),
(15, 'test', 'test@gmail.com', '123', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
