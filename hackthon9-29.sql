-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2013 at 04:39 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hackthon`
--

-- --------------------------------------------------------

--
-- Table structure for table `on_fly_credit`
--

CREATE TABLE `on_fly_credit` (
  `user_id` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `on_fly_credit`
--

INSERT INTO `on_fly_credit` (`user_id`, `credit`, `question_id`) VALUES
(5, 12, 0),
(5, 12, 0),
(5, 5, 0),
(5, 5, 120),
(5, 12, 123);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `u_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `offer_amount` int(11) NOT NULL,
  `solved` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `u_id`, `create_date`, `offer_amount`, `solved`) VALUES
(1, 'teeteet', 1, '2013-09-21 22:17:35', 10, 1),
(2, 'this is second question', 1, '2013-09-22 10:14:32', 0, 0),
(3, 'this is third question', 0, '2013-09-22 10:14:32', 0, 0),
(100, 'helooo', 1, '2013-09-27 05:58:07', 0, 0),
(101, 'helooo tooo', 1, '2013-09-27 06:16:55', 0, 0),
(102, 'helooo tooo', 1, '2013-09-27 06:19:49', 0, 0),
(103, 'ddddddddddd', 1, '2013-09-27 06:38:17', 0, 0),
(104, 'ttttttt', 1, '2013-09-27 06:38:36', 0, 0),
(105, 'new one', 1, '2013-09-27 06:38:48', 0, 0),
(106, 'this is prasad question', 4, '2013-09-28 04:41:15', 0, 0),
(109, 'tom question', 5, '2013-09-29 02:59:23', 50, 0),
(112, 'tom 2 question', 5, '2013-09-29 04:00:02', 60, 0),
(116, 'how linux work', 5, '2013-09-29 02:49:18', 10, 0),
(117, 'how chathura meet', 5, '2013-09-29 02:56:39', 12, 0),
(118, 'how chathura meet', 5, '2013-09-29 02:58:08', 12, 0),
(119, 'chrhut adad', 5, '2013-09-29 02:58:31', 5, 0),
(120, 'chrhut adad', 5, '2013-09-29 02:59:11', 5, 0),
(121, 'this is correct one', 5, '2013-09-29 02:59:37', 14, 0),
(123, 'testing', 5, '2013-09-29 04:06:13', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `q_comment`
--

CREATE TABLE `q_comment` (
  `q_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q_comment`
--

INSERT INTO `q_comment` (`q_id`, `comment`, `user_id`, `comment_date`) VALUES
(100, 'this is first comment', 1, '2013-09-09 13:23:13'),
(100, 'this is second comment', 1, '2013-09-28 13:23:30'),
(12, 'ceee', 1, '2013-09-19 17:40:51'),
(2, 'qeqweqeqeqeqeqeqwweq qwe q qwe', 1, '2013-09-28 02:11:14'),
(1, 'qqqqqqqqqqq', 1, '2013-09-28 02:12:33'),
(1, 'qqqqqqqqqqq', 1, '2013-09-28 02:13:02'),
(1, 'wefwfwfe', 1, '2013-09-28 02:13:53'),
(1, 'wefwfwfe', 1, '2013-09-28 02:13:53'),
(1, 'wefwfwfe', 1, '2013-09-28 02:15:56'),
(1, 'aasasasa', 1, '2013-09-28 02:20:04'),
(1, 'heloooooo this is nice one 123 $33 ''==s', 1, '2013-09-28 02:24:17'),
(1, 'heloooo', 1, '2013-09-28 02:27:44'),
(1, 'hellooooooo last', 1, '2013-09-28 02:28:16'),
(1, '', 1, '2013-09-28 02:45:22'),
(106, 'thisa is first comment', 4, '2013-09-28 04:41:38'),
(121, 'I want credit', 1, '2013-09-29 03:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `q_index`
--

CREATE TABLE `q_index` (
  `last_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q_index`
--

INSERT INTO `q_index` (`last_id`) VALUES
(124);

-- --------------------------------------------------------

--
-- Table structure for table `q_tag`
--

CREATE TABLE `q_tag` (
  `q_id` int(11) NOT NULL,
  `tag` varchar(30) NOT NULL,
  KEY `q_id` (`q_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q_tag`
--

INSERT INTO `q_tag` (`q_id`, `tag`) VALUES
(101, 'chathura'),
(101, 'prasad'),
(101, 'amar'),
(101, 'chathura'),
(101, 'prasad'),
(101, 'amar'),
(102, 'this'),
(102, 'is'),
(102, 'tag'),
(103, 'this'),
(103, 'is'),
(103, 'tag'),
(104, 'ddd'),
(104, 'ffff'),
(105, 'tr'),
(105, 'rtr'),
(105, 'rt'),
(105, 'r'),
(105, 'wre'),
(105, 'wer'),
(105, ''),
(106, 'tytyt'),
(106, ''),
(107, '#linux'),
(107, '#'),
(107, 'prasad'),
(110, '#tom'),
(111, '#qqweqwe'),
(112, '#qqweqwe'),
(113, '#qqweqwe'),
(114, '#qqweqwe'),
(116, '#linux'),
(117, '#linux'),
(118, '#ccc'),
(119, '#ccc'),
(120, '#rrr'),
(121, '#rrr'),
(122, '#rrrr'),
(124, '');

-- --------------------------------------------------------

--
-- Table structure for table `q_vote`
--

CREATE TABLE `q_vote` (
  `q_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY  (`q_id`,`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q_vote`
--


-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL auto_increment,
  `credit` int(11) NOT NULL,
  `last_update_date` date NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`username`, `password`, `user_id`, `credit`, `last_update_date`) VALUES
('chathura', '1234', 1, 128, '0000-00-00'),
('prasad', '1234', 4, 25, '0000-00-00'),
('tom', '123', 5, 97, '2013-09-29');
