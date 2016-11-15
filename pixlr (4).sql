-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2016 at 03:21 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pixlr`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_name`) VALUES
(1, 'art'),
(2, 'wildlife');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `img_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `date_added` date NOT NULL,
  `like_no` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `base_prize` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img_id`, `title`, `caption`, `date_added`, `like_no`, `mem_id`, `base_prize`, `path`) VALUES
(8, 'WonderWoman', 'wq', '2016-11-11', 12, 9, 12, '/Pixlr/photo/images/11-11-2016-1478846947.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `cover_image` longblob NOT NULL,
  `profile_image` longblob NOT NULL,
  `password` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `fname`, `email`, `age`, `cover_image`, `profile_image`, `password`, `lname`, `contact`) VALUES
(1, 'rahul', '', 23, '', '', '123456789', 'blah', '9663255874'),
(9, 'Akhil', 'akhilsinghal1234@gmail.com', 19, '', '', 'akhil1234', 'Singhal', '9958470018');

-- --------------------------------------------------------

--
-- Table structure for table `r_category`
--

CREATE TABLE `r_category` (
  `img_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `r_comment`
--

CREATE TABLE `r_comment` (
  `mem_id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `r_follow`
--

CREATE TABLE `r_follow` (
  `follower` int(11) NOT NULL,
  `following` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `r_interest`
--

CREATE TABLE `r_interest` (
  `mem_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `r_like`
--

CREATE TABLE `r_like` (
  `mem_id` int(11) NOT NULL,
  `img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `r_transaction`
--

CREATE TABLE `r_transaction` (
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `member_particular_image` (`mem_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `r_comment`
--
ALTER TABLE `r_comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `index_comment` (`mem_id`,`img_id`),
  ADD KEY `image_image_comment` (`img_id`);

--
-- Indexes for table `r_follow`
--
ALTER TABLE `r_follow`
  ADD KEY `follow` (`follower`,`following`),
  ADD KEY `follow_member2_member1` (`following`);

--
-- Indexes for table `r_interest`
--
ALTER TABLE `r_interest`
  ADD KEY `g_id` (`gallery_id`) USING BTREE,
  ADD KEY `mem_id` (`mem_id`) USING BTREE;

--
-- Indexes for table `r_like`
--
ALTER TABLE `r_like`
  ADD KEY `index_like` (`mem_id`,`img_id`) USING BTREE,
  ADD KEY `like_image_image` (`img_id`);

--
-- Indexes for table `r_transaction`
--
ALTER TABLE `r_transaction`
  ADD UNIQUE KEY `seller_buyer` (`seller_id`,`buyer_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `r_comment`
--
ALTER TABLE `r_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_must_member` FOREIGN KEY (`mem_id`) REFERENCES `member` (`mem_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `r_comment`
--
ALTER TABLE `r_comment`
  ADD CONSTRAINT `image_image_comment` FOREIGN KEY (`img_id`) REFERENCES `image` (`img_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_member` FOREIGN KEY (`mem_id`) REFERENCES `member` (`mem_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `r_follow`
--
ALTER TABLE `r_follow`
  ADD CONSTRAINT `follow_member1_member2` FOREIGN KEY (`follower`) REFERENCES `member` (`mem_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `follow_member2_member1` FOREIGN KEY (`following`) REFERENCES `member` (`mem_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `r_interest`
--
ALTER TABLE `r_interest`
  ADD CONSTRAINT `gid_member_gallary` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`gallery_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memid_member_gallary` FOREIGN KEY (`mem_id`) REFERENCES `member` (`mem_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `r_like`
--
ALTER TABLE `r_like`
  ADD CONSTRAINT `like_image_image` FOREIGN KEY (`img_id`) REFERENCES `image` (`img_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `like_member_member` FOREIGN KEY (`mem_id`) REFERENCES `member` (`mem_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
