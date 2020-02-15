-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2020 at 01:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abcdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `ad_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `description` text NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `advertisements`
--
DELIMITER $$
CREATE TRIGGER `create_ad_time` BEFORE INSERT ON `advertisements` FOR EACH ROW set NEW.created_date=NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_ad_time` BEFORE UPDATE ON `advertisements` FOR EACH ROW SET NEW.updated_date=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `cat_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `categorys`
--
DELIMITER $$
CREATE TRIGGER `create_cat_time` BEFORE INSERT ON `categorys` FOR EACH ROW set NEW.created_date=NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_cat_time` BEFORE UPDATE ON `categorys` FOR EACH ROW SET NEW.updated_date=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `c_id` int(20) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`c_id`, `c_name`, `email`, `contact_no`, `address`) VALUES
(1, 'Aapnughar Association', 'jayesh@aapnughar.com', '+1(514)-404-8055', '93 Weymouth Street, Charlottetown');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `d_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `donatefor` varchar(255) NOT NULL,
  `donate_type` text NOT NULL,
  `amount` bigint(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`d_id`, `name`, `email`, `mobile`, `address`, `donatefor`, `donate_type`, `amount`, `message`, `active_flag`, `created_date`, `updated_date`) VALUES
(1, 'Krunal', 'Krunal@gmail.com', 15144048055, '93 Weymouth St', 'educate children', 'Monthly', 50000, 'segdfghdfhgf', 0, '2020-02-13 22:40:29', '2020-02-13 23:58:09'),
(5, 'Avik', 'Avik@gmail.com', 654556, '3295 Av Barclay', 'Summer Camps', 'Lifetime', 100, 'HIIIIIIII', 0, '2020-02-14 00:20:11', '2020-02-14 00:21:10');

--
-- Triggers `donation`
--
DELIMITER $$
CREATE TRIGGER `create_donet_time` BEFORE INSERT ON `donation` FOR EACH ROW set NEW.created_date=NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_donat_time` BEFORE UPDATE ON `donation` FOR EACH ROW SET NEW.updated_date=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `e_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `place` text NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `event_photo` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `title`, `event_type`, `phone`, `place`, `date`, `time`, `event_photo`, `description`, `active_flag`, `created_date`, `updated_date`) VALUES
(2, 'Website Developer and Android Developer', 'Web Seminar', 5144048055, 'Charlottetown', '2020-01-01', '5:00 to 10:00', '366.jpg', 'Hii This is jayesh hsrdo', 0, '2020-02-14 01:36:20', '0000-00-00 00:00:00'),
(3, 'Delivery Expert 3', 'Uber Seminar 3 3 ', 5149148055, 'Summerside 3', '2020-02-07', '8:00AM to 10:00AM', '4325.jpg', 'Uber is organizing this event to advertise thier driving App Features.', 0, '2020-02-14 02:04:42', '2020-02-14 13:55:46'),
(5, 'Charity Event', 'Seminar', 5144444444, 'Halifax, Nova Scotia', '2020-04-02', '8:00AM to 12:00AM', '257.jpg', 'Hii This Event is to Help Poor kid and give the donation as much as you can.\r\n\r\nThanks', 0, '2020-02-14 13:55:22', '0000-00-00 00:00:00'),
(6, 'Kid Help', 'Donation Event', 5148888888, 'Montreal, Quebec', '2020-06-05', '8:00AM to 10:00AM', 'child_play-1920x1200.jpg', 'Hii This event is organized by Montreal Kid Association and will accept any kind of donation for poor kid.', 0, '2020-02-14 13:58:01', '0000-00-00 00:00:00');

--
-- Triggers `event`
--
DELIMITER $$
CREATE TRIGGER `create_event_time` BEFORE INSERT ON `event` FOR EACH ROW set NEW.created_date=NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_event_time` BEFORE UPDATE ON `event` FOR EACH ROW SET NEW.updated_date=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `faq`
--
DELIMITER $$
CREATE TRIGGER `create_faq_time` BEFORE INSERT ON `faq` FOR EACH ROW set NEW.created_date=NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_faq_time` BEFORE UPDATE ON `faq` FOR EACH ROW SET NEW.updated_date=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `feedback`
--
DELIMITER $$
CREATE TRIGGER `create_feedback_time` BEFORE INSERT ON `feedback` FOR EACH ROW set NEW.created_date=NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_feedback_time` BEFORE UPDATE ON `feedback` FOR EACH ROW SET NEW.updated_date=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `forgot_password`
--

CREATE TABLE `forgot_password` (
  `forgot_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` text NOT NULL,
  `expire_date` datetime NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `forgot_password`
--
DELIMITER $$
CREATE TRIGGER `create_forgot_password_time` BEFORE INSERT ON `forgot_password` FOR EACH ROW set NEW.created_date=NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_forgot_password_time` BEFORE UPDATE ON `forgot_password` FOR EACH ROW SET NEW.updated_date=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `title`, `photo`, `active_flag`, `created_date`, `updated_date`) VALUES
(7, 'Website Developer and Android Developer', '257.jpg', 0, '2020-02-13 19:26:45', '0000-00-00 00:00:00'),
(9, 'supergirl', '259.jpg', 0, '2020-02-13 19:29:33', '0000-00-00 00:00:00'),
(11, 'Delivery Expert', '23-flame-fantasy01.jpg', 0, '2020-02-13 19:30:03', '0000-00-00 00:00:00');

--
-- Triggers `gallery`
--
DELIMITER $$
CREATE TRIGGER `create_gallary_time` BEFORE INSERT ON `gallery` FOR EACH ROW set NEW.created_date=NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_gallary_time` BEFORE UPDATE ON `gallery` FOR EACH ROW SET NEW.updated_date=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `news`
--
DELIMITER $$
CREATE TRIGGER `create_news_time` BEFORE INSERT ON `news` FOR EACH ROW set NEW.created_date=NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_news_time` BEFORE UPDATE ON `news` FOR EACH ROW SET NEW.updated_date=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `post_query`
--

CREATE TABLE `post_query` (
  `query_id` int(11) NOT NULL,
  `query_number` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `document` varchar(100) NOT NULL,
  `query_reply` text NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `post_query`
--
DELIMITER $$
CREATE TRIGGER `create_post_query_time` BEFORE INSERT ON `post_query` FOR EACH ROW set NEW.created_date=NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_post_query_time` BEFORE UPDATE ON `post_query` FOR EACH ROW SET NEW.updated_date=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `roletype`
--

CREATE TABLE `roletype` (
  `roleid` int(10) NOT NULL,
  `rolename` varchar(30) NOT NULL,
  `flag` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roletype`
--

INSERT INTO `roletype` (`roleid`, `rolename`, `flag`) VALUES
(1, 'admin', 1),
(8, 'User', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `s_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `active_flag` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `sliders`
--
DELIMITER $$
CREATE TRIGGER `create_slider_time` BEFORE INSERT ON `sliders` FOR EACH ROW set NEW.created_date=NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_slider_time` BEFORE UPDATE ON `sliders` FOR EACH ROW SET NEW.updated_date=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `social_media_info`
--

CREATE TABLE `social_media_info` (
  `social_id` int(11) NOT NULL,
  `facebook_url` text NOT NULL,
  `google_url` text NOT NULL,
  `twitter_url` text NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `social_media_info`
--
DELIMITER $$
CREATE TRIGGER `create_social_time` BEFORE INSERT ON `social_media_info` FOR EACH ROW set NEW.created_date=NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_social_time` BEFORE UPDATE ON `social_media_info` FOR EACH ROW SET NEW.updated_date=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `sub_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `subscribers`
--
DELIMITER $$
CREATE TRIGGER `create_sub_time` BEFORE INSERT ON `subscribers` FOR EACH ROW set NEW.created_date=NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_sub_time` BEFORE UPDATE ON `subscribers` FOR EACH ROW SET NEW.updated_date=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categorys`
--

CREATE TABLE `sub_categorys` (
  `sub_cat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `active_flag` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `sub_categorys`
--
DELIMITER $$
CREATE TRIGGER `create_sub_cat_time` BEFORE INSERT ON `sub_categorys` FOR EACH ROW set NEW.created_date=NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_sub_cat_time` BEFORE UPDATE ON `sub_categorys` FOR EACH ROW SET NEW.updated_date=NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_photo` text NOT NULL,
  `createdby` varchar(32) NOT NULL,
  `flag` int(2) NOT NULL,
  `roleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `email`, `password`, `profile_photo`, `createdby`, `flag`, `roleid`) VALUES
(35, 'Avik Patel', 'avik@gmail.com', '123', '257.jpg', 'User', 1, 1),
(36, 'Sonam ', 'sonam@gmail.com', '123', '283.jpg', 'Jayesh Harsiyani', 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `v_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `occupation` varchar(32) NOT NULL,
  `about` varchar(512) NOT NULL,
  `profile_photo` varchar(32) NOT NULL,
  `education` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`v_id`, `name`, `occupation`, `about`, `profile_photo`, `education`, `address`, `mobile`, `email`, `created_date`) VALUES
(2, 'Krunal Ubhadiya', 'Android Application Devleoper', 'He is a realy good android developer.', 'gorgeous_emma_new-1600x1200.jpg', 'Mobile Application Development', '93 Weymouth St', '5149148055', 'krunal@gmail.com', '2020-02-05 16:09:25'),
(3, 'Avik Patel', 'Analist', 'He is Way more good anylist then we you imagine.', '2010_megan_fox-1920x1440.jpg', 'Mobile Application Development', '93 Weymouth ST', '5144444444', 'avik@gmail.com', '2020-02-05 16:09:40'),
(4, 'Sonal Chavla', 'Graphic Designer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autemvoluptatem obcaecati!', 'emma_watson_254-1600x1200.jpg', 'IOS Application Development', '3295 Avenue barclay', '5148888888', 'sonam@gmail.com', '2020-02-05 16:09:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `forgot_password`
--
ALTER TABLE `forgot_password`
  ADD PRIMARY KEY (`forgot_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `post_query`
--
ALTER TABLE `post_query`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `roletype`
--
ALTER TABLE `roletype`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `social_media_info`
--
ALTER TABLE `social_media_info`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `sub_categorys`
--
ALTER TABLE `sub_categorys`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `roleid` (`roleid`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forgot_password`
--
ALTER TABLE `forgot_password`
  MODIFY `forgot_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_query`
--
ALTER TABLE `post_query`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roletype`
--
ALTER TABLE `roletype`
  MODIFY `roleid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_media_info`
--
ALTER TABLE `social_media_info`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categorys`
--
ALTER TABLE `sub_categorys`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `roletype` (`roleid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
