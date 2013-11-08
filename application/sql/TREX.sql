-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2013 at 06:59 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `TREX`
--

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
  PRIMARY KEY (`form15_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `form15`
--

INSERT INTO `form15` (`form15_Id`, `userId`, `fname`, `fbd`, `fnation`, `fpassport`, `fissue`, `faddress`, `fstreet`, `fprovince`, `fzipcode`, `ftel`, `fphone`, `ffax`, `fmail`, `fname2`, `fowner`, `faddress2`, `fstreet2`, `fprovince2`, `fzipcode2`, `ftel2`, `fphone2`, `ffax2`, `flocation`, `faddress3`, `fstreet3`, `fprovince3`, `fzipcode3`, `ftel3`, `fphone3`, `ffax3`, `plantname`, `sname`, `numberbreed`, `numbercom`, `source`, `ab`, `status`, `comment`) VALUES
(1, 0, 'Nuttapon', '14/04/1994', 'Thai', '123456789', 'kaset', 'happyland', 'Navamin', 'bkk', '100', '', '', '', 'n.phannurat@gmail.co', 'Nuttapon', 'Dok', 'Sadland', 'novo', 'ckn', '222', '', '', '', 'chn', 'mairu', 'huhu', '', '1111', '', '0899999999', '', 'Dok', 'Doke', '10', '100', 'yes', 'mairu', 'Verified', 'hello'),
(2, 2, 'Nuttapon', '14/04/1994', 'thai', '1234', 'ku', 'asdsd', 'kbhb', 'jhb', 'kkjhb', 'b', '', 'bhjb', 'khjbhb', 'jkb', 'jhb', 'hjj', 'jh', 'bjh', 'bjbj', 'bh', 'bjhb', 'bjhb', 'jhb', 'jhb', 'jhbj', '', 'bjb', 'jhb', 'jhb', 'jhbj', 'hb', 'bjh', 'bhbjh', 'jhbjk', 'hbjhb', 'jbjk;', 'Denied', 'abcdf'),
(8, 2, 'Nutaaa', 'ghfgf', 'fgh', 'fgh', 'gh', 'cg', 'ghc', 'ghcg', 'cgc', 'gc', '', '', '', '', '', 'c', 'gc', 'gcg', 'cgc', '', '', '', '', 'g', 'cgc', '', 'cg', 'cg', 'hv', 'hv', '', 'hvjh', 'v', 'hv', '', '', 'Verified', 'abcde'),
(9, 5, 'ธนโชติ เตชะจารุพันธ์', '2/2/2', 'thai', '1000000000', 'bkk', 'S', 'sathorn', 'bkk', '10', '1', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '00', 'Denied', 'abcd                                    '),
(12, 5, 'Tanachot', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Verified', '็Hello');

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
(2, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'nuttapon phannurat', 'a4e9cc58a617436227ad7a1d6db6c51ca9c934b8', NULL, 'n@gmail.com', NULL, NULL, NULL, NULL, 1381043030, 1381318552, 1, 'Nuttapon', 'Phannurat', 'TREX', '0850199668'),
(3, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'officer officer', '1c93c4d3c13a4521f19bfef3fe07dd6a1ef79a0c', NULL, 'officer@officer.com', NULL, NULL, NULL, NULL, 1381305254, 1381421896, 1, 'Officer', 'Officer', 'TREX', '0850199668'),
(4, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'dsfdsfs dsfsf', '0bb941f07397167bb1aa19d81ec4be5894e178ea', NULL, 'm@g.com', NULL, NULL, NULL, NULL, 1381316764, 1381414176, 1, 'dsfdsfs', 'dsfsf', 'assadasd', 'dsadasd'),
(5, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'tanachot techajarupan', 'ff01a5697d560ca487244dc4927a66dcb3007ff0', NULL, 'ttanachot@gmail.com', NULL, NULL, NULL, NULL, 1381330274, 1381423674, 1, 'Tanachot', 'Techajarupan', 'TREX', '1234');

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
