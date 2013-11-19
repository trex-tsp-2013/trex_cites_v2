-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2013 at 12:38 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `TREX`
--

-- --------------------------------------------------------

--
-- Table structure for table `form14`
--

CREATE TABLE `form14` (
  `form14_Id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `faddress` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fcountry` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fname2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `faddress2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fcountry2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fcon` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ftran` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fau` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `req_Id` int(11) NOT NULL,
  `request` int(11) NOT NULL,
  PRIMARY KEY (`form14_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `form15`
--

CREATE TABLE `form15` (
  `form15_Id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` tinyint(3) NOT NULL,
  `fname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fbd` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fnation` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fpassport` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fissue` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `faddress` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fstreet` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fprovince` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fzipcode` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ftel` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fphone` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ffax` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fmail` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fname2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fowner` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `faddress2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fstreet2` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fprovince2` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fzipcode2` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ftel2` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fphone2` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ffax2` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `flocation` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `faddress3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fstreet3` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fprovince3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fzipcode3` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ftel3` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fphone3` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ffax3` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `plantname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numberbreed` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numbercom` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ab` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  `comment` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'New document',
  `request` int(11) NOT NULL,
  PRIMARY KEY (`form15_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `form15`
--

INSERT INTO `form15` (`form15_Id`, `userId`, `fname`, `fbd`, `fnation`, `fpassport`, `fissue`, `faddress`, `fstreet`, `fprovince`, `fzipcode`, `ftel`, `fphone`, `ffax`, `fmail`, `fname2`, `fowner`, `faddress2`, `fstreet2`, `fprovince2`, `fzipcode2`, `ftel2`, `fphone2`, `ffax2`, `flocation`, `faddress3`, `fstreet3`, `fprovince3`, `fzipcode3`, `ftel3`, `fphone3`, `ffax3`, `plantname`, `sname`, `numberbreed`, `numbercom`, `source`, `ab`, `status`, `comment`, `request`) VALUES
(13, 5, 'ธนโชติ เตชะจารุพันธ์', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Verified', 'New document', 11),
(14, 5, 'ธนโชติ เตชะจารุพันธ์', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Verified', 'New document', 11),
(15, 5, 'ธนโชติ เตชะจารุพันธ์', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Denied', 'New document', 11),
(16, 5, 'dddddd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Verified', 'New document', 11),
(17, 2, 'Nuttapon', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Verified', 'New document', 11),
(18, 2, 'nutt11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 'New document', 11),
(19, 2, 'nutt21', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', 'New document', 11);

-- --------------------------------------------------------

--
-- Table structure for table `form16`
--

CREATE TABLE `form16` (
  `form16_Id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` tinyint(11) NOT NULL,
  `fname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fbd` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fnation` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fpassport` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fissue` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `faddress` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fstreet` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fprovince` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fzipcode` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ftel` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fphone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ffax` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fmail` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fname2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fowner` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `faddress2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fstreet2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fprovince2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fzipcode2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ftel2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fphone2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ffax2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `flocation` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `faddress3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fstreet3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fprovince3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fzipcode3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ftel3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fphone3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ffax3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `plantname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numberbreed` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numbercom` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ab` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `req_Id` int(11) NOT NULL,
  `request` int(11) NOT NULL,
  `fdates` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fdatee` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`form16_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `form16`
--

INSERT INTO `form16` (`form16_Id`, `userId`, `fname`, `fbd`, `fnation`, `fpassport`, `fissue`, `faddress`, `fstreet`, `fprovince`, `fzipcode`, `ftel`, `fphone`, `ffax`, `fmail`, `fname2`, `fowner`, `faddress2`, `fstreet2`, `fprovince2`, `fzipcode2`, `ftel2`, `fphone2`, `ffax2`, `flocation`, `faddress3`, `fstreet3`, `fprovince3`, `fzipcode3`, `ftel3`, `fphone3`, `ffax3`, `plantname`, `sname`, `numberbreed`, `numbercom`, `source`, `ab`, `req_Id`, `request`, `fdates`, `fdatee`) VALUES
(1, 5, 'ธนโชติ เตชะจารุพันธ์', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 11, '', ''),
(2, 5, 'dddddd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 11, '', ''),
(3, 5, 'ธนโชติ เตชะจารุพันธ์', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 11, '', ''),
(4, 5, 'ธนโชติ เตชะจารุพันธ์', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 11, '', ''),
(5, 5, 'ธนโชติ เตชะจารุพันธ์', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 11, '', ''),
(6, 2, 'Nuttapon', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 17, 11, '', ''),
(7, 2, 'Nuttapon', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 17, 11, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `form21`
--

CREATE TABLE `form21` (
  `form21_Id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(20) NOT NULL,
  `fname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fbd` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fnation` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fpassport` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fissue` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `faddress` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fstreet` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fprovince` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fzipcode` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ftel` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fphone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ffax` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fname2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `faddress2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fstreet2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fprovince2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fzipcode2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ftel2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fphone2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ffax2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fregisNum` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fname3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `faddress3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fstreet3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fprovince3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fzipcode3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ftel3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fphone3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ffax3` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `plantname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numberbreed` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numbercom` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ad` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fimnum` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fformdate` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fformdateend` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Pending',
  `comment` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'New document',
  `request` int(11) NOT NULL DEFAULT '21',
  PRIMARY KEY (`form21_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `form21`
--

INSERT INTO `form21` (`form21_Id`, `userId`, `fname`, `fbd`, `fnation`, `fpassport`, `fissue`, `faddress`, `fstreet`, `fprovince`, `fzipcode`, `ftel`, `fphone`, `ffax`, `fname2`, `faddress2`, `fstreet2`, `fprovince2`, `fzipcode2`, `ftel2`, `fphone2`, `ffax2`, `fregisNum`, `fname3`, `faddress3`, `fstreet3`, `fprovince3`, `fzipcode3`, `ftel3`, `fphone3`, `ffax3`, `plantname`, `sname`, `numberbreed`, `numbercom`, `source`, `ad`, `fimnum`, `fformdate`, `fformdateend`, `status`, `comment`, `request`) VALUES
(1, 2, 'Nuttapon', '12/12/12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '2013-11-19', '2013-11-21', 'Pending', 'New document', 21),
(3, 2, 'nut21', '12/12/12', 'jkn', 'ljkn', 'jkn', 'jlkn', 'kjn', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '2013-11-20', '2013-11-08', 'Pending', 'New document', 21),
(6, 2, 'nutt21', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', 'Pending', 'New document', 21);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'officers', 'Department Officer');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '\0\0', 'administrator', '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4', '9462e8eee0', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1381302468, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'nuttapon phannurat', 'a4e9cc58a617436227ad7a1d6db6c51ca9c934b8', NULL, 'n@gmail.com', NULL, NULL, NULL, NULL, 1381043030, 1384854921, 1, 'Nuttapon', 'Phannurat', 'TREX', '0850199668'),
(3, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'officer officer', '1c93c4d3c13a4521f19bfef3fe07dd6a1ef79a0c', NULL, 'officer@officer.com', NULL, NULL, NULL, NULL, 1381305254, 1384854935, 1, 'Officer', 'Officer', 'TREX', '0850199668'),
(4, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'dsfdsfs dsfsf', '0bb941f07397167bb1aa19d81ec4be5894e178ea', NULL, 'm@g.com', NULL, NULL, NULL, NULL, 1381316764, 1381414176, 1, 'dsfdsfs', 'dsfsf', 'assadasd', 'dsadasd'),
(5, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'tanachot techajarupan', 'ff01a5697d560ca487244dc4927a66dcb3007ff0', NULL, 'ttanachot@gmail.com', NULL, NULL, NULL, NULL, 1381330274, 1384663372, 1, 'Tanachot', 'Techajarupan', 'TREX', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 3),
(5, 4, 2),
(6, 5, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
