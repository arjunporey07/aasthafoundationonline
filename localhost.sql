-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2021 at 11:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aastha`
--
CREATE DATABASE IF NOT EXISTS `aastha` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `aastha`;

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE `abc` (
  `id` int(11) NOT NULL,
  `abc_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abc`
--

INSERT INTO `abc` (`id`, `abc_img`) VALUES
(1, '2.jpg,3.jpg,8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(100) NOT NULL,
  `article_img` varchar(255) NOT NULL,
  `article_desc` text NOT NULL,
  `article_pdf` varchar(255) NOT NULL,
  `article_dt` datetime NOT NULL,
  `article_status` enum('active','inactive','deleted') NOT NULL DEFAULT 'deleted',
  `article_view` enum('allow','deny') NOT NULL DEFAULT 'deny'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `article_img`, `article_desc`, `article_pdf`, `article_dt`, `article_status`, `article_view`) VALUES
(1, 'article 1', 'donate_us.jpg', 'fjjcsnzsknkznv', 'a.txt', '2020-08-10 01:13:00', 'active', 'deny'),
(2, 'article 1', 'b1.png', 'fjjcsnzsknkznv', 'PHP Assignment.pdf', '2020-08-10 01:13:00', 'active', 'deny'),
(3, 'article 1', 'donate_us.jpg', 'fjjcsnzsknkznv', 'PHP Assignment.pdf', '2020-08-10 01:13:00', 'active', 'allow');

-- --------------------------------------------------------

--
-- Table structure for table `fact_form`
--

CREATE TABLE `fact_form` (
  `id` int(11) NOT NULL,
  `active_member` int(11) NOT NULL,
  `work_done` int(11) NOT NULL,
  `person` int(11) NOT NULL,
  `update_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fact_form`
--

INSERT INTO `fact_form` (`id`, `active_member`, `work_done`, `person`, `update_date_time`) VALUES
(1, 100, 30, 800, '2020-11-05 12:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `memberlist`
--

CREATE TABLE `memberlist` (
  `id` int(11) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `member_designation` text NOT NULL,
  `member_position` enum('Admin','Moderator','Member') NOT NULL DEFAULT 'Member',
  `member_img` varchar(255) NOT NULL,
  `member_email` varchar(50) NOT NULL,
  `member_number` bigint(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `local_address` varchar(200) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `zip` int(6) NOT NULL,
  `facebook_link` varchar(100) NOT NULL,
  `twitter_link` varchar(100) NOT NULL,
  `instagram_link` varchar(100) NOT NULL,
  `member_quote` text NOT NULL,
  `message` varchar(300) NOT NULL,
  `member_join_dt` datetime NOT NULL DEFAULT current_timestamp(),
  `member_status` enum('active','inactive','deleted') NOT NULL DEFAULT 'inactive',
  `admin_panel_access` enum('true','false') NOT NULL DEFAULT 'false',
  `member_request` enum('approved','pending','denied') NOT NULL DEFAULT 'pending',
  `home_member_card` enum('on','off') NOT NULL DEFAULT 'off'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberlist`
--

INSERT INTO `memberlist` (`id`, `member_name`, `member_designation`, `member_position`, `member_img`, `member_email`, `member_number`, `password`, `gender`, `local_address`, `city`, `state`, `country`, `zip`, `facebook_link`, `twitter_link`, `instagram_link`, `member_quote`, `message`, `member_join_dt`, `member_status`, `admin_panel_access`, `member_request`, `home_member_card`) VALUES
(28, 'Random Name', 'STUDENT', 'Admin', 'b1.png', 'arjunporey07@gmail.com', 7407237353, '123456', 'Male', 'VILL - RAUTARA; P.O. - JHIKRA;  P.S. - JOYPUR', 'HOWRAH', 'WEST BENGAL', 'India', 711401, 'https://www.facebook.com/arjun.porey.9', '', '#NOT FOUND', 'Good Friend, Good Desire&#x1F609;.', 's,eme.smg.sl', '2020-08-10 21:53:50', 'inactive', 'false', 'approved', 'on'),
(36, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 12:05:21', 'inactive', 'false', 'pending', 'off'),
(37, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 12:07:07', 'inactive', 'false', 'pending', 'off'),
(38, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 12:07:48', 'inactive', 'false', 'pending', 'off'),
(39, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 12:08:18', 'inactive', 'false', 'pending', 'off'),
(40, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 0, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 12:19:00', 'inactive', 'false', 'pending', 'off'),
(41, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 12:49:57', 'inactive', 'false', 'pending', 'off'),
(42, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 12:53:02', 'inactive', 'false', 'pending', 'off'),
(43, 'rahul', '', 'Member', '', 'arjun@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 12:53:51', 'inactive', 'false', 'pending', 'off'),
(44, 'ram', '', 'Member', '', 'arjun@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 12:58:46', 'inactive', 'false', 'pending', 'off'),
(45, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 123, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:00:07', 'inactive', 'false', 'pending', 'off'),
(46, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 1234, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:01:35', 'inactive', 'false', 'pending', 'off'),
(47, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 1234, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:02:14', 'inactive', 'false', 'pending', 'off'),
(48, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 0, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:02:32', 'inactive', 'false', 'pending', 'off'),
(49, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:05:37', 'inactive', 'false', 'pending', 'off'),
(50, 'abc', '', 'Member', '', 'arjun@gmail.com', 1234567, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:06:10', 'inactive', 'false', 'pending', 'off'),
(51, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 123456, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:07:55', 'inactive', 'false', 'pending', 'off'),
(52, 'ram', '', 'Member', '', 'arjun@gmail.com', 123, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:08:34', 'inactive', 'false', 'pending', 'off'),
(53, 'a', '', 'Member', '', 'arjun@gmail.com', 1, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:12:25', 'inactive', 'false', 'pending', 'off'),
(54, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 123, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:13:11', 'inactive', 'false', 'pending', 'off'),
(55, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:13:44', 'inactive', 'false', 'pending', 'off'),
(56, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:23:04', 'inactive', 'false', 'pending', 'off'),
(57, 'ar', '', 'Member', '', 'arjun@gmail.com', 1, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:23:32', 'inactive', 'false', 'pending', 'off'),
(58, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:24:24', 'inactive', 'false', 'pending', 'off'),
(59, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:25:12', 'inactive', 'false', 'pending', 'off'),
(60, 'ram', '', 'Member', '', 'arjun@gmail.com', 0, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:26:45', 'inactive', 'false', 'pending', 'off'),
(61, 'Arjun', '', 'Member', '', 'arjun@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 13:32:11', 'inactive', 'false', 'pending', 'off'),
(62, 'somnath', '', 'Member', '', 'somnath@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-17 14:19:14', 'inactive', 'false', 'pending', 'off'),
(63, 'Tapas', '', 'Member', '', 'tapas@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-23 22:02:32', 'inactive', 'false', 'pending', 'off'),
(64, 'ayan', '', 'Member', '', 'ayan@gmail.com', 1234567890, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-23 22:10:44', 'inactive', 'false', 'pending', 'off'),
(65, 'atanu', '', 'Member', '', 'atanju@gmail.com', 123456789, '', 'Male', '', '', '', '', 0, '', '', '', '', '', '2021-01-23 22:11:32', 'inactive', 'false', 'pending', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `message_box`
--

CREATE TABLE `message_box` (
  `id` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `message` text CHARACTER SET latin1 NOT NULL,
  `message_file` text CHARACTER SET latin1 NOT NULL,
  `message_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_box`
--

INSERT INTO `message_box` (`id`, `email`, `message`, `message_file`, `message_date`) VALUES
(1, 'arjunporey17@gmail.com', 'bfxtgs', '17600318012_marksheet.pdf', '0000-00-00 00:00:00'),
(2, 'arjunporey17@gmail.com', 'm,nk,bb,', '17600318012_marksheet.pdf,EAadhaar_xxxxxxxx7386_13042019002333_672111.pdf', '0000-00-00 00:00:00'),
(3, 'arjunporey07@gmail.com', 'f vncfjf', '44860742_363431764427720_7209496330282991616_n.jpg,17600318012_marksheet.pdf,EAadhaar_xxxxxxxx7386_13042019002333_672111.pdf', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `new_activity`
--

CREATE TABLE `new_activity` (
  `id` int(11) NOT NULL,
  `new_event_title` varchar(255) NOT NULL,
  `new_event_img` varchar(255) NOT NULL,
  `new_event_details` text NOT NULL,
  `new_event_location` varchar(255) NOT NULL,
  `new_event_route` varchar(255) NOT NULL,
  `new_event_dt` datetime NOT NULL,
  `new_event_status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `upload_datetime` datetime NOT NULL,
  `new_activity_type` enum('event','article') NOT NULL DEFAULT 'event'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_activity`
--

INSERT INTO `new_activity` (`id`, `new_event_title`, `new_event_img`, `new_event_details`, `new_event_location`, `new_event_route`, `new_event_dt`, `new_event_status`, `upload_datetime`, `new_activity_type`) VALUES
(1, 'Event 1', 'DSC_0058.JPG', 'igifihjog', 'Hooghly Engineering and Technology College, Chinsurah R S, Kolkata, West Bengal 712101', '0', '2020-08-15 10:00:00', 'inactive', '0000-00-00 00:00:00', 'event'),
(2, 'Event 1', 'DSC_0058.JPG', 'igifihjog', 'Hooghly Engineering and Technology College, Chinsurah R S, Kolkata, West Bengal 712101', '0', '2020-07-15 10:00:00', 'inactive', '0000-00-00 00:00:00', 'event'),
(3, 'Event 1', 'DSC_9881.jpg', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'n/kholkhIf a file exists with the same name, it will be overwritten.', 'If a file exists with the same name, it will be overwritten. FALSE – If a file exists with the same name, a number will append to the filename.', '2020-08-15 10:00:00', 'inactive', '0000-00-00 00:00:00', 'event'),
(4, 'UNMESH', 'WhatsApp Image 2020-08-14 at 20.11.43.jpeg', 'Unmesh is an e-Magazine of our Aastha Group. Unmesh is an e-Magazine of our Aastha Group. Unmesh is an e-Magazine of our Aastha Group. Unmesh is an e-Magazine of our Aastha Group. Unmesh is an e-Magazine of our Aastha Group. Unmesh is an e-Magazine of our Aastha Group. Unmesh is an e-Magazine of our Aastha Group. Unmesh is an e-Magazine of our Aastha Group. Unmesh is an e-Magazine of our Aastha Group. Unmesh is an e-Magazine of our Aastha Group. Unmesh is an e-Magazine of our Aastha Group. Unmesh is an e-Magazine of our Aastha Group. ', '', '', '2020-08-17 10:00:00', 'active', '0000-00-00 00:00:00', 'event');

-- --------------------------------------------------------

--
-- Table structure for table `our_works`
--

CREATE TABLE `our_works` (
  `our_works_id` int(11) NOT NULL,
  `our_works_title` varchar(255) NOT NULL,
  `our_works_img` varchar(255) NOT NULL,
  `our_works_details_img` text NOT NULL,
  `our_works_desc` text NOT NULL,
  `our_works_dt` datetime NOT NULL,
  `our_works_details_video` text NOT NULL,
  `our_works_details_exp` text NOT NULL,
  `our_works_status` enum('active','inactive','deleted') NOT NULL DEFAULT 'active',
  `display_status` enum('on','off') NOT NULL DEFAULT 'off',
  `home_display_status` enum('on','off') NOT NULL DEFAULT 'off'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_works`
--

INSERT INTO `our_works` (`our_works_id`, `our_works_title`, `our_works_img`, `our_works_details_img`, `our_works_desc`, `our_works_dt`, `our_works_details_video`, `our_works_details_exp`, `our_works_status`, `display_status`, `home_display_status`) VALUES
(36, 'Event 5', '23.jpg', '', 'Abcd', '2020-07-06 01:20:10', '', '', 'active', 'off', 'off'),
(35, 'Event 4', '20.jpg', '', 'Abcd', '2020-06-20 01:20:10', '', '', 'active', 'on', 'on'),
(34, 'Event 3', 'th3.jpg', '', 'Abcd', '2020-05-25 01:20:10', '', '', 'active', 'on', 'off'),
(33, 'Event 2', '27.jpg', '', 'Abcd', '2020-05-11 01:20:10', '', '', 'active', 'off', 'off'),
(32, 'Event 1', '18.jpg', '', 'Abcd', '2020-07-22 01:20:10', '', '', 'active', 'off', 'off'),
(51, 'Event 15', '17.jpg', '4.JPG,,25.jpg', 'mbjb', '2020-07-04 01:20:10', 'https://www.youtube.com/embed/bZNEB_o3Hzw?ecver=2,https://www.youtube.com/embed/bZNEB_o3Hzw?ecver=2,https://www.youtube.com/embed/GgmFC8y8q3k', '', 'active', 'off', 'off'),
(42, 'event14', 'g1.png', '', 's,nd,xknb', '2020-07-04 01:20:10', 'https://www.facebook.com/satyabrata.roy.1848/videos/863873027396135/,https://www.facebook.com/satyabrata.roy.1848/video...', '', 'active', 'off', 'off'),
(52, 'Event 16', '4.JPG', '1.jpg,9.jpg,17.jpg,18.jpg,1.jpg,9.jpg,17.jpg,18.jpg,1.jpg,9.jpg,17.jpg,18.jpg,1.jpg,9.jpg,17.jpg,18.jpg', 'sndvkbjvjdshbvkj', '2020-08-04 01:20:10', 'https://www.youtube.com/embed/bZNEB_o3Hzw?ecver=2,https://www.youtube.com/embed/GgmFC8y8q3k,https://www.youtube.com/embed/bZNEB_o3Hzw?ecver=2', '', '', 'off', 'off'),
(53, 'Event 17', 'th3.jpg', '1.jpg,2.jpg,3.jpg,4.JPG,6.jpg,7.jpg,8.jpg,9.jpg,20.jpg,25.jpg', 'kfjhirugvrbvfhdufbd', '2020-08-14 01:20:10', 'https://www.youtube-nocookie.com/embed/GgmFC8y8q3k,https://www.youtube.com/embed/GgmFC8y8q3k', 'a.txt', 'active', 'on', 'on'),
(55, 'Event 18', 'b1.png', 'b1.png,donate_us.jpg', '', '2020-08-14 10:20:10', '', 'a.txt,PHP Assignment.pdf,a.txt,a.txt', 'active', 'off', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `our_works_details`
--

CREATE TABLE `our_works_details` (
  `our_works_details_id` int(11) NOT NULL,
  `our_works_details_title` varchar(255) NOT NULL,
  `our_works_details_img` varchar(255) NOT NULL,
  `our_works_details_dt` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_works_details`
--

INSERT INTO `our_works_details` (`our_works_details_id`, `our_works_details_title`, `our_works_details_img`, `our_works_details_dt`) VALUES
(7, 'Event 11', '', '0000-00-00 00:00:00'),
(6, 'Event 11', '', '2020-06-13 20:49:30'),
(5, '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `login_access` enum('true','false') NOT NULL DEFAULT 'false',
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `email`, `password`, `login_access`, `date_time`) VALUES
(3, 'arjunporey07@gmail.com', '123456', 'false', '0000-00-00 00:00:00'),
(4, 'raja@gmail.com', '123456', 'false', '2020-07-15 00:35:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abc`
--
ALTER TABLE `abc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `fact_form`
--
ALTER TABLE `fact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberlist`
--
ALTER TABLE `memberlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_box`
--
ALTER TABLE `message_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_activity`
--
ALTER TABLE `new_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_works`
--
ALTER TABLE `our_works`
  ADD PRIMARY KEY (`our_works_id`);

--
-- Indexes for table `our_works_details`
--
ALTER TABLE `our_works_details`
  ADD PRIMARY KEY (`our_works_details_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abc`
--
ALTER TABLE `abc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fact_form`
--
ALTER TABLE `fact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `memberlist`
--
ALTER TABLE `memberlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `message_box`
--
ALTER TABLE `message_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `new_activity`
--
ALTER TABLE `new_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `our_works`
--
ALTER TABLE `our_works`
  MODIFY `our_works_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `our_works_details`
--
ALTER TABLE `our_works_details`
  MODIFY `our_works_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `explore`
--
CREATE DATABASE IF NOT EXISTS `explore` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `explore`;

-- --------------------------------------------------------

--
-- Table structure for table `message_box`
--

CREATE TABLE `message_box` (
  `id` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `message` text CHARACTER SET latin1 NOT NULL,
  `message_file` text CHARACTER SET latin1 NOT NULL,
  `message_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_box`
--

INSERT INTO `message_box` (`id`, `email`, `message`, `message_file`, `message_date`) VALUES
(4, 'arjunporey07@gmail.com', 'Arjun Porey,\r\nhi exploreus....', 'Zener_Diode_Load_Regulation_1.jpg,01-Rectifiers.pdf', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message_box`
--
ALTER TABLE `message_box`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message_box`
--
ALTER TABLE `message_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"aastha\",\"table\":\"memberlist\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-03-05 10:23:53', '{\"Console\\/Mode\":\"collapse\",\"SendErrorReports\":\"always\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
