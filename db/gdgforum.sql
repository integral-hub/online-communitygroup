-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 05:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gdgforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_content` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `date_commented` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  `access` varchar(100) NOT NULL,
  `delstatus` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_content`, `post_id`, `date_commented`, `member_id`, `access`, `delstatus`) VALUES
(143, 'wqewqdeadasdsadsadsadasd', 152, '02/21/2019 | 11:11:09pm', 1, 'Member', 0),
(144, 'YESS', 152, '08/07/2023 | 03:53:44am', 1, 'Admin', 0),
(145, 'JOHN LEGEND', 153, '08/07/2023 | 04:19:13am', 1, 'Admin', 1),
(148, 'ok done', 154, '08/07/2023 | 04:42:21am', 1, 'Admin', 0),
(147, 'find it', 154, '08/07/2023 | 04:40:11am', 1, 'Admin', 0),
(149, 'ok', 160, '08/07/2023 | 05:50:25pm', 2, 'Member', 0),
(150, 'this', 156, '08/07/2023 | 06:32:11pm', 1, 'Admin', 0),
(151, 'good', 161, '08/08/2023 | 11:31:01pm', 2, 'Member', 0),
(152, 'how was it', 161, '08/08/2023 | 11:31:41pm', 2, 'Member', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invitemember`
--

CREATE TABLE `invitemember` (
  `id` int(11) NOT NULL,
  `phrase` varchar(100) NOT NULL,
  `ilink` varchar(150) NOT NULL,
  `validity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invitemember`
--

INSERT INTO `invitemember` (`id`, `phrase`, `ilink`, `validity`) VALUES
(34, 'fpO2q4ceQa31lBu8V56L', 'https://localhost/bcc/join.php?id=fpO2q4ceQa31lBu8V56L', 0),
(35, 'VBGc6fzYnaQFxRZwJu8U', 'https://localhost/bcc/join.php?id=VBGc6fzYnaQFxRZwJu8U', 0),
(36, '5DcRxWSYi8oluqp64wNm', 'https://localhost/bcc/join.php?id=5DcRxWSYi8oluqp64wNm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `phnnumber` varchar(100) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `invite` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `access` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `acct_status` varchar(100) NOT NULL,
  `topic_ctr` int(11) NOT NULL,
  `threads_ctr` int(11) NOT NULL,
  `replies_ctr` int(11) NOT NULL,
  `delstatus` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `image`, `firstname`, `surname`, `phnnumber`, `sex`, `invite`, `date_of_birth`, `username`, `password`, `access`, `status`, `acct_status`, `topic_ctr`, `threads_ctr`, `replies_ctr`, `delstatus`) VALUES
(2, '../uploads/gdglogo.png', 'SAM', 'LOKO', '09012345678', 'Male', 'Invite link', '1993-06-25', 'sam', 'sam', 'Professional', 'active', 'Activated', 3, 3, 3, 0),
(3, '../images/f.jpg', 'ABIOLA', 'JONES', '09012895677', 'Female', 'fpO2q4ceQa31lBu8V56L', '1999-12-09', 'Abiola', 'was', 'Intermediate', 'inactive', 'Activated', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `message_content` text NOT NULL,
  `status` varchar(15) NOT NULL,
  `date_messaged` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  `sender_id` varchar(15) NOT NULL,
  `access` varchar(100) NOT NULL,
  `delstatus` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message_content`, `status`, `date_messaged`, `member_id`, `sender_id`, `access`, `delstatus`) VALUES
(106, 'hi prof g', 'Read', '08/06/2023  |  06:28:46am', 71, '65', 'Member', 0),
(107, 'hi sam', 'Read', '08/06/2023  |  11:03:27pm', 2, 'admin', 'Admin', 0),
(108, 'hello super admin', 'Read', '08/06/2023  |  11:30:15pm', 0, '2', '', 0),
(109, 'ok super', 'Read', '08/06/2023  |  11:31:43pm', 0, '2', '', 0),
(110, 'OK', 'Read', '08/07/2023  |  01:20:12am', 1, '2', '', 0),
(111, 'HI JAMES', 'Unread', '08/07/2023  |  01:20:39am', 1, '2', 'Member', 0),
(112, 'alright', 'Read', '08/07/2023  |  04:02:39am', 2, 'admin', 'Admin', 0),
(113, 'you good', 'Read', '08/07/2023  |  06:15:41pm', 2, 'admin', 'Admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `post_content` longtext NOT NULL,
  `date_posted` varchar(100) NOT NULL,
  `post_image` varchar(150) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `views` int(11) NOT NULL,
  `replies` int(11) NOT NULL,
  `threads` int(11) NOT NULL,
  `access` varchar(100) NOT NULL,
  `delstatus` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `member_id`, `post_content`, `date_posted`, `post_image`, `post_title`, `topic`, `views`, `replies`, `threads`, `access`, `delstatus`) VALUES
(152, 1, 'weewwewwe', '02/21/2015 | 11:10:35pm', '../post_images/gdg2.png', 'weeweww', 'DEVFEST', 27, 2, 2, 'Member', 0),
(153, 1, 'wert game unhity', '08/07/2023 | 04:15:01am', '../post_images/290337.jpg', 'unity', 'DEVFEST', 11, 0, -1, 'Admin', 0),
(155, 1, 'join me if know', '08/07/2023 | 05:23:16pm', '../post_images/776A5604-70F8-4702-A41D-DDD3DBCD46DB.jpeg', 'stunt', 'GOOGLE I/O', 0, 0, 0, 'Member', 0),
(156, 1, 'west ruth', '08/07/2023 | 05:28:22pm', '../post_images/95E58615-1775-4EE9-B395-D23E0EF2CE65.jpeg', 'ruth', 'MOBILE APP', 2, 0, 1, 'Member', 0),
(157, 2, 'join me', '08/07/2023 | 05:30:22pm', '../post_images/4451EFB6-198A-48EC-9C8F-6B2C9A21FB40.jpeg', 'fryer', 'PROGRAMMING', 1, 0, 0, 'Member', 0),
(158, 2, 'john', '08/07/2023 | 05:42:59pm', '../post_images/logo.png', 'west', 'DEVFEST', 4, 0, 0, 'Member', 0),
(159, 2, 'rofe derodj', '08/07/2023 | 05:47:47pm', '../post_images/95E58615-1775-4EE9-B395-D23E0EF2CE65.jpeg', 'west', 'PROGRAMMING', 1, 0, 0, 'Member', 0),
(160, 2, 'tosss', '08/07/2023 | 05:49:29pm', '../post_images/2948D473-2A34-40AE-9D79-7100EA0AF9A5.jpeg', 'soft', 'DEVOPS', 2, 2, 1, 'Member', 0),
(161, 2, 'devfest is happening iv in ibadan', '08/08/2023 | 11:30:21pm', '../post_images/gdg2.png', 'devfest 2023', 'DEVFEST', 1, 1, 2, 'Member', 0);

-- --------------------------------------------------------

--
-- Table structure for table `repz`
--

CREATE TABLE `repz` (
  `reply_id` int(11) NOT NULL,
  `reply_content` text NOT NULL,
  `comment_id` int(11) NOT NULL,
  `date_replied` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  `access` varchar(100) NOT NULL,
  `delstatus` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repz`
--

INSERT INTO `repz` (`reply_id`, `reply_content`, `comment_id`, `date_replied`, `member_id`, `access`, `delstatus`) VALUES
(149, 'asdsadasdassadasdddsadasdasdasd', 143, '02/21/2015 | 11:11:17pm', 1, 'Member', 1),
(150, 'cgh fghfg hfghfghfhgfhfgjgjghjghjghj ghjghj ghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjghjggjghjghjghjghjgh', 143, '02/21/2015 | 11:20:38pm', 1, 'Admin', 0),
(151, 'OK BRO', 143, '08/07/2023 | 03:53:10am', 0, 'Admin', 0),
(152, 'noele', 148, '08/07/2023 | 04:42:35am', 1, 'Admin', 0),
(153, 'join', 149, '08/07/2023 | 05:50:32pm', 2, 'Member', 0),
(154, 'time', 149, '08/07/2023 | 05:51:02pm', 2, 'Member', 0),
(155, 'yeah it is truth', 151, '08/08/2023 | 11:31:24pm', 2, 'Member', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `lname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_id` int(15) NOT NULL,
  `last_logtime` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `delstatus` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`lname`, `fname`, `password`, `username`, `user_id`, `last_logtime`, `status`, `delstatus`) VALUES
('SuperAdmin', 'Admin', 'admin', 'admin', 1, '08/09/2023 | 09:38:04pm', 'active', 0),
('Abdulahi', 'Faruq', 'faruq', 'Md_Faruq', 3, '08/09/2023 | 02:34:49am', 'active', 0),
('Raimi', 'Samson', 'samson', 'Md_Samson', 4, '08/09/2023 | 02:35:23am', 'active', 0),
('Abdulahi', 'west', 'fas', 'md_fas', 6, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `invitemember`
--
ALTER TABLE `invitemember`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `repz`
--
ALTER TABLE `repz`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `invitemember`
--
ALTER TABLE `invitemember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `repz`
--
ALTER TABLE `repz`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
