-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2017 at 02:37 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hihi`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `ADMINID` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL DEFAULT '',
  `username` varchar(80) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`ADMINID`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`ADMINID`, `email`, `username`, `password`) VALUES
(1, 'admin@aaa.vn', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE IF NOT EXISTS `advertisements` (
  `AID` bigint(30) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL DEFAULT '',
  `code` text NOT NULL,
  `active` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`AID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`AID`, `description`, `code`, `active`) VALUES
(6, 'AD nội dung - 728 x 90 pixels', 'AD nội dung - 728 x 90 pixels', '0'),
(5, 'Di động - 320 x 50 pixels', 'Di động - 320 x 50 pixels', '0'),
(4, 'Right -2  - 300 x 250 pixels', 'Right -2  - 300 x 250 pixels', '0'),
(3, '728 x 90 pixels', '728 x 90 pixels', '0'),
(2, '300 x 600 pixels', '300 x 600 pixels', '0'),
(8, 'ADS 2- 740 x 90 pixels đầu trang', 'ADS 2- 740 x 90 pixels đầu trang', '0'),
(9, 'Quảng cáo giữa bài viết 720x90', 'Quảng cáo giữa bài viết 720x90', '0'),
(1, 'AD1', 'AD1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `bans_ips`
--

CREATE TABLE IF NOT EXISTS `bans_ips` (
  `ip` varchar(20) NOT NULL,
  UNIQUE KEY `ip` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE IF NOT EXISTS `channels` (
  `CID` bigint(20) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`CID`, `cname`) VALUES
(47, 'GIF');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `setting` varchar(60) NOT NULL DEFAULT '',
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`setting`, `value`) VALUES
('site_email', 'vantoanbk93@gmail.com'),
('site_name', 'tanosine.com - 楽しね'),
('max_syndicate_results', '25'),
('maximum_results', '1000000'),
('emailsender', 'Admin'),
('max_img_size', '200'),
('items_per_page', '8'),
('approve_stories', '1'),
('metadescription', 'Bạn sẽ không bao giờ thấy nuối tiếc với những điều ý nghĩa đã làm bạn mỉm cười'),
('metakeywords', 'ảnh hài, truyện tranh cười, truyện tranh người lớn, truyện cười, truyện người lớn, clip hài, hạt giống tâm hồn'),
('pub_mod', '1'),
('ver', '3.4.1'),
('FACEBOOK_PROFILE', 'tanosine'),
('myes', '1'),
('mno', '100'),
('twitter', 'hihivl'),
('FACEBOOK_APP_ID', '1172438772869051'),
('FACEBOOK_SECRET', 'ba6dcabfc6af18346caa4eb194d7886a'),
('enable_fc', '1'),
('mtrend', '1'),
('quota', '100'),
('contact_email', 'support@cuoihi.com'),
('short_urls', '1'),
('TWITTER_APP_ID', '02131'),
('TWITTER_APP_SECRET', '1121121'),
('FACEBOOK_ADMIN', '2121212'),
('lwm', '0'),
('twm', '1'),
('AUTOSCROLL', '0'),
('thumbs', ''),
('displaywm', '0'),
('TC', ''),
('safemode', '1'),
('ganalytics', 'UA-57158716-1'),
('vupload', '1'),
('fixenabled', '0'),
('RSS', '1'),
('topgags', '0'),
('trendingenabled', ''),
('voteforvisitor', '1'),
('SEO', '1'),
('sitemap', '1'),
('truncate', '0'),
('autoFBpost', '0'),
('recommended', '2'),
('wmfont', 'arial.ttf'),
('fsize', '14'),
('channels', '1'),
('rhome', '1'),
('wmhieght', '30'),
('blackr', '0'),
('blackb', '0'),
('blackg', '0'),
('whiter', '244'),
('whiteb', '244'),
('whiteg', '244'),
('regedirect', '0'),
('index', '0'),
('postfolder', '/photo/'),
('up_points', '3'),
('view_points', '1'),
('share1', '3'),
('share2', '2'),
('NSFWADS', '0'),
('website_name', 'localhost/webroot'),
('mobilemode', '1'),
('mobile_per_page', '8'),
('m_ver', '2.0'),
('m_url', 'localhost/webroot/m'),
('populargags', '2'),
('topposts', '1');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `USERID` bigint(20) NOT NULL AUTO_INCREMENT,
  `fb_id` varchar(50) DEFAULT NULL,
  `email` varchar(80) NOT NULL DEFAULT '',
  `username` varchar(80) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `pwd` varchar(50) NOT NULL,
  `fullname` varchar(200) NOT NULL DEFAULT '',
  `gender` varchar(6) NOT NULL DEFAULT '',
  `description` text,
  `country` varchar(100) DEFAULT '',
  `posts` int(20) NOT NULL DEFAULT '0',
  `yourviewed` int(20) NOT NULL DEFAULT '0',
  `profileviews` int(20) NOT NULL DEFAULT '0',
  `youviewed` bigint(20) NOT NULL DEFAULT '0',
  `addtime` varchar(20) NOT NULL DEFAULT '',
  `lastlogin` varchar(20) NOT NULL DEFAULT '',
  `verified` char(1) NOT NULL DEFAULT '1',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `profilepicture` varchar(100) NOT NULL DEFAULT '',
  `remember_me_key` varchar(32) DEFAULT NULL,
  `remember_me_time` datetime DEFAULT NULL,
  `ip` varchar(20) NOT NULL,
  `lip` varchar(20) NOT NULL,
  `website` varchar(200) DEFAULT NULL,
  `news` int(1) NOT NULL DEFAULT '0',
  `mylang` varchar(20) DEFAULT NULL,
  `color1` varchar(6) NOT NULL DEFAULT '000000',
  `color2` varchar(6) NOT NULL DEFAULT 'FFFFFF',
  `filter` bigint(1) NOT NULL DEFAULT '1',
  `points` bigint(20) NOT NULL,
  `mobile` text NOT NULL,
  PRIMARY KEY (`USERID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`USERID`, `fb_id`, `email`, `username`, `password`, `pwd`, `fullname`, `gender`, `description`, `country`, `posts`, `yourviewed`, `profileviews`, `youviewed`, `addtime`, `lastlogin`, `verified`, `status`, `profilepicture`, `remember_me_key`, `remember_me_time`, `ip`, `lip`, `website`, `news`, `mylang`, `color1`, `color2`, `filter`, `points`, `mobile`) VALUES
(1, NULL, 'lie_and_hide17@yahoo.com', 'Nguyễn Anh', '25f9e794323b453885f5181f1b624d0b', '123456789', 'Nguyễn Anh', '', '', '', 4, 85, 0, 9, '1416889316', '1418874972', '1', '1', '1.jpg', NULL, NULL, '113.190.235.2', '14.162.171.74', '', 0, '', '000000', 'FFFFFF', 1, 21, ''),
(2, '911425522203956', 'anh@netbiz.vnnn', 'Ngọc Ảnh Dương', '25f9e794323b453885f5181f1b624d0b', '123456789', 'Ngọc Ảnh Dương', '', '', '', 1, 1, 0, 5, '1416890231', '1421385268', '1', '1', '2.jpg', NULL, NULL, '14.167.13.220', '14.167.12.160', 'nbbbbb', 1, '', '000000', 'FFFFFF', 0, 8, ''),
(3, '738755299549070', 'anhhoang24061@gmail.com', 'Anh Hoang', '21f7b5ccb7f7fc4317a0900866f20f4d', '', 'Anh Hoang', '', 'minh qua la dep trai', '', 1, 28, 0, 91, '1416890346', '1421398123', '1', '1', '3.jpg', NULL, NULL, '113.162.115.183', '14.167.15.33', 'hoang.com', 0, '', '000000', 'FFFFFF', 1, 94, ''),
(4, '979692982044444', 'buichat13@yahoo.com', 'Khoa B&ugrave;i', '4dfe8140ed925b4fc6d05e5d8428f93f', 'lsddtcc212345', 'Khoa B&ugrave;i', '', '', 'VN', 39, 2973, 0, 159, '1416891275', '1421209886', '1', '1', '4.jpg', NULL, NULL, '113.160.224.41', '117.3.65.40', '', 0, '', '000000', 'FFFFFF', 0, 276, ''),
(5, NULL, 'phamthong3011@gmail.com', 'Th&ocirc;ng Phạm', 'db7d82e261c63bc9cbde1e47ee65211a', '', 'Th&ocirc;ng Phạm', '', '', '', 16, 1088, 0, 20, '1416896793', '1418471128', '1', '1', '5.jpg', NULL, NULL, '113.160.224.41', '203.205.53.239', '', 0, '', '000000', 'FFFFFF', 1, 68, ''),
(6, NULL, 'naht_niemtin@yahoo.com', 'Trung Hải', '91a311b842b7367051720de78c8317e4', '', 'Trung Hải', '', '', '', 0, 0, 0, 0, '1416896920', '1416896920', '1', '1', '6.jpg', NULL, NULL, '113.160.224.41', '113.160.224.41', '', 0, '', '000000', 'FFFFFF', 1, 0, ''),
(7, NULL, 'amthucdocdao.net@gmail.com', 'Ẩm Thực Độc Đ&aacute;o', '486f3b74b8d33c3fdbea949b86f5cb5a', '', 'Ẩm Thực Độc Đ&aacute;o', '', '', '', 30, 2506, 0, 20, '1416899728', '1416932570', '1', '1', '7.jpg', NULL, NULL, '113.160.224.41', '113.165.28.223', '', 0, '', '000000', 'FFFFFF', 1, 110, ''),
(8, NULL, 'thangsmd@gmail.com', 'Thang Le', '02ad35704cb2944f2e571c8761b1954c', '', 'Thang Le', '', '', '', 0, 0, 0, 0, '1416910139', '1416910139', '1', '1', '8.jpg', NULL, NULL, '113.160.224.41', '113.160.224.41', '', 0, '', '000000', 'FFFFFF', 1, 0, ''),
(9, NULL, 'kienbon2@yahoo.com', 'Phan Ngoc Nhung', 'ea9abd84022f1e8f35e355d9a060d558', '', 'Phan Ngoc Nhung', '', '', '', 0, 0, 0, 0, '1416914129', '1416914129', '1', '1', '9.jpg', NULL, NULL, '113.165.28.223', '113.165.28.223', '', 0, '', '000000', 'FFFFFF', 1, 0, ''),
(10, NULL, 'phuongtrinhboy2003@yahoo.com', 'Bida Kutepro', '5812a53d1acef0427a62ecaa625e8d6e', '', 'Bida Kutepro', '', '', '', 0, 0, 0, 0, '1416925764', '1416925764', '1', '1', '10.jpg', NULL, NULL, '116.98.52.232', '116.98.52.232', '', 0, '', '000000', 'FFFFFF', 1, 0, ''),
(11, NULL, 'nguojkxau@gmail.com', 'Ki&ecirc;n K K&ograve;i', '1d45bf120a04b6a50396de0c96d4e476', '', 'Ki&ecirc;n K K&ograve;i', '', '', '', 0, 0, 0, 0, '1416926699', '1416926699', '1', '1', '11.jpg', NULL, NULL, '113.23.48.109', '113.23.48.109', '', 0, '', '000000', 'FFFFFF', 1, 0, ''),
(12, NULL, 'nhox_winh_map@yahoo.com', 'Đức Qu&acirc;n', '8a07746e79a9c68fbde65f635b2ee4b3', '', 'Đức Qu&acirc;n', '', '', '', 0, 0, 0, 0, '1416927388', '1416927388', '1', '1', '12.jpg', NULL, NULL, '116.98.144.179', '116.98.144.179', '', 0, '', '000000', 'FFFFFF', 1, 0, ''),
(13, '638967726214685', 'khoa.mastersoft127@gmail.com', 'Bữa Ăn Đạm Bạc', '7006f048d559f93e7d32e428155269a7', '', 'Bữa Ăn Đạm Bạc', '', '', '', 141, 8998, 0, 186, '1417069537', '1421070169', '1', '1', '13.jpg', NULL, NULL, '113.160.224.41', '113.165.44.97', '', 0, '', '000000', 'FFFFFF', 0, 609, ''),
(14, '692121924228246', 'hop_bityb91@yahoo.com', 'Kiều Chinh', 'c3279e7326e4827d2987cd637f83fd44', '', 'Kiều Chinh', '', '', '', 1, 18, 0, 4, '1417081430', '1419924843', '1', '1', '14.jpg', NULL, NULL, '14.167.13.220', '113.176.155.225', '', 0, '', '000000', 'FFFFFF', 1, 7, ''),
(15, NULL, 'khanhhoang288@gmail.com', 'Trần Ho&agrave;ng HK', '77ae383bd8cef910249a85a4cafb60e3', '', 'Trần Ho&agrave;ng HK', '', '', '', 1, 30, 0, 1, '1417084086', '1417084086', '1', '1', '15.jpg', NULL, NULL, '118.68.74.22', '118.68.74.22', '', 0, '', '000000', 'FFFFFF', 1, 4, ''),
(16, NULL, 'toilatoiduongvantinh@yahoo.com.vn', 'Ho&agrave;ng Tư', '29b91e43791926295f3f759422381bf8', '', 'Ho&agrave;ng Tư', '', '', '', 0, 0, 0, 4, '1417425902', '1418718840', '1', '1', '16.jpg', NULL, NULL, '14.167.14.9', '14.167.15.141', '', 0, '', '000000', 'FFFFFF', 1, 4, ''),
(21, '610483039056060', 'truongluu10ha7@gmail.com', 'Nguyễn Trường Lưu', '973876d73fd85dc833b1a1b7344091ba', '', 'Nguy&ecirc;̃n trường Lưu', '', '', '', 3, 0, 0, 56, '1418355505', '1419387016', '1', '1', '21.jpg', NULL, NULL, '113.162.116.38', '113.162.115.4', '', 1, '', '000000', 'FF9C45', 1, 65, ''),
(19, '849893778364757', 'hwandht@yahoo.com', 'Jack Dinh', '43db409f5587bd8f5e9ee8bef2f11837', '', 'Jack Dinh', '', '', '', 2, 979, 0, 11, '1417687682', '1419924558', '1', '1', '19.jpg', NULL, NULL, '113.162.115.183', '113.176.155.225', '', 0, '', '000000', 'FFFFFF', 1, 17, ''),
(20, '762251540536112', 'lik.lie187@gmail.com', 'B&aacute;nh M&igrave; Chay', '9a6c5d0f4cf3ec194eb3c5f024fa2b9c', '', 'B&aacute;nh M&igrave; Chay', '', '', '', 6, 172, 0, 125, '1418004533', '1421229498', '1', '1', '20.jpg', NULL, NULL, '14.167.12.157', '113.162.116.212', '', 0, '', '000000', 'FFFFFF', 0, 143, ''),
(22, NULL, 'lamthinh95@ovi.com', 'Thọ Ngố', '1c92b6861369f4f4d18a2320c0942ec1', '', 'Thọ Ngố', '', '', '', 0, 0, 0, 0, '1418800442', '1418800442', '1', '1', '22.jpg', NULL, NULL, '113.165.71.135', '113.165.71.135', '', 0, '', '000000', 'FFFFFF', 1, 0, ''),
(23, '501802576629416', 'hanh.tm89@yahoo.com', 'Nolita Mi', 'e9992a38eb348f63ceaf37e47f005f22', '', 'Nolita Mi', '', 'no info', 'AF', 52, 2828, 0, 169, '1418803321', '1421380169', '1', '1', '23.jpg', NULL, NULL, '14.167.15.141', '14.167.15.33', 'http://test.calle-arco.com/', 0, 'de', 'D13D9B', 'FFFFFF', 1, 325, ''),
(24, '927867000571806', 'dieuthuhulisvnu@gmail.com', 'Dieu Thu Bui', '6df4704c2a01b54c77e6364436cbfa95', '', 'Dieu Thu Bui', '', '', '', 5, 142, 0, 10, '1418807132', '1421382883', '1', '1', '24.jpg', NULL, NULL, '14.167.15.141', '14.167.12.160', '', 0, '', '000000', 'FFFFFF', 1, 25, ''),
(27, '594451904034073', 'mttba91@gmail.com', 'Cuabacang Tran', '90cb5ff6e2b4bf8dc1e5bffa65fc3093', '', 'Cuabacang Tran', '', NULL, '', 13, 238, 0, 38, '1419405942', '1421394468', '1', '1', '27.jpg', NULL, NULL, '113.162.115.4', '14.167.12.160', NULL, 0, NULL, '000000', 'FFFFFF', 1, 77, ''),
(26, '611888832248814', 'truong7ha10@gmail.com', 'Nguyễn Trường Lưu', 'e8af59e6bccab5702809bae54b0e54f0', '', 'Nguyen Trường Luu', '', '', '', 0, 0, 0, 194, '1419387515', '1421400105', '1', '1', '26.jpg', NULL, NULL, '113.162.115.4', '14.167.15.33', '', 1, '', '000000', 'FFFFFF', 1, 194, ''),
(32, NULL, 'trongchen@yahoo.com.vn', 'Trọng Trần', '2790b2e700b4903505cebb34253e339b', '', 'Trọng Trần', '', NULL, '', 1, 2, 0, 3, '1420448696', '1420448696', '1', '1', '32.jpg', NULL, NULL, '113.176.154.130', '113.176.154.130', NULL, 0, NULL, '000000', 'FFFFFF', 1, 6, ''),
(28, '383770465129652', 'votheanhdh@yahoo.com', 'Thế Anh', '75d9ba01c57ccc8089eb62509b381bc6', '', 'Thế Anh', '', NULL, '', 0, 0, 0, 2, '1419960749', '1420192045', '1', '1', '28.jpg', NULL, NULL, '14.167.6.216', '14.167.6.216', NULL, 0, NULL, '000000', 'FFFFFF', 1, 2, ''),
(29, '1379785502322745', '', 'Nguyen Cuoi Hi', 'b5cf9299911015efaf81d277c6055c56', '', 'Nguyen Cuoi Hilllll', '', 'ujkhljp', '', 0, 0, 0, 3, '1420009202', '1421343714', '1', '1', '29.jpg', NULL, NULL, '113.162.116.212', '115.75.147.254', '', 1, '', '000000', 'FFFFFF', 0, 3, ''),
(30, NULL, 'billytq.95@gmail.com', 'Billy C&ograve;i', '811c1f8a4c44a8aa07cde3f470b82fca', '', 'Billy C&ograve;i', '', NULL, '', 2, 31, 0, 34, '1420243785', '1420243785', '1', '1', '30.jpg', NULL, NULL, '14.162.174.254', '14.162.174.254', NULL, 0, NULL, '000000', 'FFFFFF', 0, 40, ''),
(31, '824311680967938', 'nguyenphitriet@gmail.com', 'Nguyen Phi Triet', 'd6a45916fd23a3bf7fe7099eb1a55d8f', '', 'Nguyen Phi Triet', '', '', '', 0, 0, 0, 0, '1420422243', '1420536865', '1', '1', '31.jpg', NULL, NULL, '113.162.114.119', '113.162.116.212', '', 0, '', '000000', 'FFFFFF', 1, 0, ''),
(33, '978153625545927', 'nptriet@yahoo.com.vn', 'united_boy', '4c3f49cdcdd475368e9b66f2fce66ddd', '', 'Nguyễn Phi Triết', '', 'manchester united fan', '', 3, 14, 0, 114, '1420604223', '1421394595', '1', '1', '33.jpg', NULL, NULL, '113.162.116.133', '14.167.12.160', 'facebook.com', 0, '', '000000', 'FFFFFF', 1, 123, ''),
(34, NULL, 'quockiencoltd@gmail.com', 'Trần Quốc Ki&ecirc;n', '7b841f3d9ac6c8a12defbac231130b87', '', 'Trần Quốc Ki&ecirc;n', '', NULL, '', 3, 202, 0, 2, '1420862687', '1420862687', '1', '1', '34.jpg', NULL, NULL, '58.187.66.99', '58.187.66.99', NULL, 0, NULL, '000000', 'FFFFFF', 1, 11, ''),
(35, '1382101405427384', 'kyduyen127@gmail.com', 'Kỳ Duy&ecirc;n', '2d87266810f14a9d1b25ad7f0108ba70', '', 'Kỳ Duy&ecirc;n', '', NULL, '', 32, 1851, 0, 34, '1421057690', '1421218202', '1', '1', '35.jpg', NULL, NULL, '117.3.39.253', '117.3.65.40', NULL, 0, NULL, '000000', 'FFFFFF', 0, 130, ''),
(41, NULL, 'toan6aubuntu@gmail.com', 'test 4', '25f9e794323b453885f5181f1b624d0b', '', '', '', 'account test ', '', 2, 7, 0, 47, '', '', '1', '1', '', NULL, NULL, '', '', NULL, 0, NULL, '000000', 'FFFFFF', 0, 53, ''),
(40, NULL, 'vantoanbk93@gmail.com', 'toannv', '25f9e794323b453885f5181f1b624d0b', '', '', '', 'toannv', '', 1, 13, 0, 2, '', '', '1', '1', '', NULL, NULL, '', '', NULL, 0, NULL, '000000', 'FFFFFF', 1, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `members_passcode`
--

CREATE TABLE IF NOT EXISTS `members_passcode` (
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`USERID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `members_verifycode`
--

CREATE TABLE IF NOT EXISTS `members_verifycode` (
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`USERID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members_verifycode`
--

INSERT INTO `members_verifycode` (`USERID`, `code`) VALUES
(0, 'vXTqm1370983354');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `PID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `story` text NOT NULL,
  `tags` varchar(200) NOT NULL,
  `source` varchar(200) NOT NULL,
  `CID` bigint(20) NOT NULL,
  `nsfw` int(1) NOT NULL DEFAULT '0',
  `pic` varchar(20) NOT NULL,
  `isgif` bigint(1) NOT NULL DEFAULT '0',
  `path` text,
  `blog` text NOT NULL,
  `youtube_key` varchar(20) NOT NULL,
  `fod_key` varchar(20) NOT NULL,
  `vfy_key` varchar(50) NOT NULL,
  `vmo_key` varchar(50) NOT NULL,
  `url` text NOT NULL,
  `time_added` varchar(20) DEFAULT NULL,
  `date_added` date NOT NULL DEFAULT '0000-00-00',
  `active` char(1) NOT NULL DEFAULT '',
  `phase` bigint(1) NOT NULL DEFAULT '0',
  `favclicks` bigint(50) NOT NULL DEFAULT '0',
  `last_viewed` varchar(20) NOT NULL DEFAULT '',
  `mod_yes` bigint(20) NOT NULL DEFAULT '0',
  `mod_no` bigint(20) NOT NULL DEFAULT '0',
  `pip` varchar(20) NOT NULL,
  `pip2` varchar(20) NOT NULL,
  `unfavclicks` bigint(50) NOT NULL DEFAULT '0',
  `fix` bigint(20) NOT NULL DEFAULT '0',
  `short` varchar(20) NOT NULL,
  `ttime` varchar(20) NOT NULL DEFAULT '0',
  `htime` varchar(20) NOT NULL DEFAULT '0',
  `feat` int(1) NOT NULL,
  `view` bigint(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`PID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`PID`, `USERID`, `story`, `tags`, `source`, `CID`, `nsfw`, `pic`, `isgif`, `path`, `blog`, `youtube_key`, `fod_key`, `vfy_key`, `vmo_key`, `url`, `time_added`, `date_added`, `active`, `phase`, `favclicks`, `last_viewed`, `mod_yes`, `mod_no`, `pip`, `pip2`, `unfavclicks`, `fix`, `short`, `ttime`, `htime`, `feat`, `view`) VALUES
(1, 1, 'Test', '', '', 0, 1, '1.png', 0, '2017/03/26', '', '', '', '', '', '', '1490508856', '2017-03-26', '1', 2, 1, '1495118735', 0, 0, '::1', '', -1, 0, '', '1494673871', '1495118732', 0, 5),
(2, 1, 'test2', '', '', 0, 0, '2.png', 0, '2017/04/21', '', '', '', '', '', '', '1494671436', '2017-04-21', '1', 2, 1, '1495213870', 0, 0, '::1', '', -1, 0, '', '1494673875', '1495213870', 0, 33),
(3, 40, 'test 3', '', '', 0, 0, '3.jpg', 0, '2017/05/13', '', '', '', '', '', '', '1494684911', '2017-05-13', '1', 2, 2, '1495213872', 0, 0, '::1', '', -2, 0, '', '1494856864', '1495024246', 0, 13),
(4, 41, 'toannv', 'Chế ảnh', 'Tự Làm', 0, 0, '4.png', 0, '2017/05/18', '', '', '', '', '', '', '1495114744', '2017-05-18', '1', 2, 1, '1495259290', 0, 0, '::1', '', -1, 0, '', '1495117948', '1495213873', 0, 2),
(10, 41, 'test gif', '', '', 0, 0, '10.jpg', 0, '2017/05/19', '', '', '', '', '', 'http://4.bp.blogspot.com/-mBLdDsJF3Pg/U6AlW0w_3OI/AAAAAAAAhwg/iX0BMKW_PUo/s1600/chim-dep-nhat-the-gioi+(19).jpg', '1495213572', '2017-05-19', '1', 2, 1, '1495258270', 0, 0, '::1', '', -1, 0, '', '1495213697', '1495213862', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `posts_favorited`
--

CREATE TABLE IF NOT EXISTS `posts_favorited` (
  `FID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USERID` bigint(25) NOT NULL DEFAULT '0',
  `PID` bigint(25) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  PRIMARY KEY (`FID`),
  UNIQUE KEY `USERID` (`USERID`,`PID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `posts_favorited`
--

INSERT INTO `posts_favorited` (`FID`, `USERID`, `PID`, `date`) VALUES
(1, 40, 1, '0000-00-00'),
(2, 40, 2, '0000-00-00'),
(5, 41, 3, '0000-00-00'),
(6, 1, 3, '0000-00-00'),
(7, 41, 4, '0000-00-00'),
(8, 41, 10, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `posts_reports`
--

CREATE TABLE IF NOT EXISTS `posts_reports` (
  `RID` bigint(20) NOT NULL AUTO_INCREMENT,
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `time` varchar(20) DEFAULT NULL,
  `ip` varchar(20) NOT NULL,
  `reason` bigint(1) NOT NULL,
  PRIMARY KEY (`RID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts_unfavorited`
--

CREATE TABLE IF NOT EXISTS `posts_unfavorited` (
  `FID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USERID` bigint(25) NOT NULL DEFAULT '0',
  `PID` bigint(25) NOT NULL DEFAULT '0',
  PRIMARY KEY (`FID`),
  UNIQUE KEY `USERID` (`USERID`,`PID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE IF NOT EXISTS `static` (
  `ID` bigint(30) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`ID`, `title`, `value`) VALUES
(1, 'Điều khoản sử dụng', '<p>Nhà cung cấp (&quot;chúng tôi&quot;, &quot;của chúng tôi&quot;, &quot;hihivl.com&quot;) của dịch vụ cung cấp bởi trang web này (Dịch vụ) không chịu trách nhiệm với bất kỳ nội dung nào của thành viên đưa lên (Nội dung). Nội dung được đăng chỉ thể hiện quan điểm riêng của tác giả.</p>\r\n<p>Bạn phải đồng ý không sử dụng Dịch vụ để đăng, bàn luận hoặc liên kết đến bất kỳ Nội dung có liên quan đến chính trị, tôn giáo, đồi trụy, phân biệt vùng miền, phỉ báng, lăng mạ, hận thù, chia rẽ, đe dọa, xúc phạm, có chứa thông tin cá nhân của người khác, vi phạm bản quyền, phạm pháp, khuyến khích hành vi phạm pháp, hoặc vi phạm tất cả các điều luật khác.</p>\r\n<p>Bạn phải trên 13 tuổi để sử dụng Dịch vụ này.</p>\r\n<p>Chúng tôi có quyền xóa, sửa bất kỳ Nội dung nào đăng trên trang web với bất kỳ lý do mà không cần giải thích. Yêu cầu xóa bỏ hoặc sửa Nội dung sẽ thực hiện theo quyết định của chúng tôi. Chúng tôi giữ quyền hủy bỏ Dịch vụ (xóa tài khoản hoặc cấm) với Dịch vụ của chúng tôi bất kỳ lúc nào.</p>\r\n<p>Bạn cho phép Chúng tôi quyền sử dụng, tái bản Nội dung của bạn với Dịch vụ vĩnh viễn, không giới hạn và không thể thu hồi. Bạn giữ quyền trên toàn Nội dung của mình.</p>\r\n<p>Tất cả Nội dung bạn gửi lên hoặc tải lên có thể được kiểm duyệt bởi Ban quản trị. Không đăng bất kỳ Nội dung nào bạn cho là cá nhân hoặc tối mật.</p>\r\n<p>Các điều khoản này có thể thay đổi bất kỳ lúc nào mà không cần báo trước.</p>\r\n<p>Nếu bạn không đồng ý với các điều khoản này, xin hãy dừng việc đăng ký hoặc sử dụng Dịch vụ của chúng tôi. Nếu bạn muốn đóng tài khoản của mình, xin hãy dùng mục Liên hệ.</p>\r\n'),
(2, 'Chính Sách Bảo Mật ', 'Insert your privacy policy information here.<br><br>\r\n\r\nHTML is accepted.'),
(3, 'Giới thiệu', 'Insert your privacy policy information here.<br><br>\r\n\r\nHTML is accepted.'),
(4, 'Nguyên tắc chia sẻ', 'Insert your privacy policy information here.<br><br>\r\n\r\nHTML is accepted.'),
(5, 'FAQ', '<p><strong>1.Tại sao tui không thấy nút like và bình luận?</strong></p>\r\n<p> Nút like và bình luận được tải về từ Facebook. Bạn không thấy 2 chức năng này có thể do máy bạn bị chặn truy cập Facebook. Tham khảo thêm cách vào Facebook khi bị chặn.</p>\r\n<p><strong>2.Tại sao tui không nhận được thông báo khi có người like/trả lời bình luận của tui?</strong></p>\r\n<p>Chức năng thông báo trên bình luận do Facebook quản lý. Tại thời điểm hiện tại bạn sẽ không nhận được thông báo khi có người like hay trả lời trên bình luận của bạn. Tuy nhiên bạn sẽ nhận được thông báo khi có người khác cũng bình luận trên bức ảnh.</p>\r\n<p><strong>3.Tại sao tui chỉ thấy được một phần của phần bình luận?</strong></p>\r\n<p>Chức năng bình luận của Facebook thỉnh thoảng gặp lỗi. Một trong những lỗi thường gặp là bình luận không được hiển thị đầy đủ mà chỉ hiển thị được bình luận trên cùng. Khi gặp lỗi bạn hãy thử F5 xem nhé!</p>\r\n<p><strong>4. Ảnh (hay video, sau đây gọi tắt là ảnh) được lên trang chủ dựa vào tiêu chí gì?</strong></p>\r\n<p>Khi bạn đăng 1 tấm ảnh lên hihivl.com, ảnh sẽ không lên trang chủ ngay mà xuất hiện ở trang Bình chọn. Cộng đồng hihivl.com sẽ bình chọn để quyết định ảnh của bạn có được lên trang chủ hay không. Có 2 loại bình chọn: Hay và Chán. Nếu đủ số lượng bình chọn Hay, ảnh của bạn sẽ được lên. Nếu đủ số lượng Chán, ảnh của bạn sẽ bị loại khỏi trang bình chọn. Ngoài ra có 1 số tiêu chí khác cũng ảnh hưởng đến việc được lên trang chủ hay không, nhưng chiếm trọng số nhỏ hơn: lượt like, lượt bình luận, lượt xem.</p>\r\n<p><strong>5. Ảnh của tui được rất nhiều like và bình luận, tại sao vẫn không được lên trang chủ?</strong></p>\r\n<p>Nhiều like và bình luận có thể làm cho ảnh của bạn được chú ý hơn trên trang bình chọn, nhưng không phải là điều kiện đủ để có thể lên trang chủ. Để lên trang chủ thì nút Hay có ý nghĩa lớn nhất. Số lượng like và bình luận dựa vào tài khoản Facebook nên rất dễ làm giả và gian lận và hihivl.com không kiểm soát được điều này. Một ảnh có 100 like nhưng chỉ được vài bình chọn Hay sẽ không được lên trang chủ. Nhưng một ảnh chỉ có vài like nhưng rất nhiều bình chọn Hay vẫn có thể được lên.</p>\r\n<p><strong>6. Tại sao ảnh của tui chưa lên trang chủ nhưng không thấy ở trang bình chọn nữa?</strong></p>\r\n<p>Ảnh của bạn sẽ bị loại khỏi trang bình chọn trong các trường hợp sau:</p>\r\n<p>Ảnh bị bình chọn Chán quá nhiều<br>\r\n  Ảnh đã đăng quá lâu. Sau 48h, nếu ảnh của bạn chưa được lên trang chủ thì sẽ tự động bị loại khỏi trang bình chọn<br>\r\n  Ảnh đã được nhiều lượt xem nhưng vẫn không đủ bình chọn Hay: nếu đã rất nhiều người xem nhưng ảnh vẫn không đủ bình chọn, chứng tỏ ảnh của bạn chưa đạt chất lượng, và cũng sẽ tự động bị loại khỏi trang bình chọn<br>\r\n  Ảnh đã bị trùng và bị BQT gỡ xuống<br>\r\n  Ảnh vi phạm nhẹ các nội quy<br>\r\n  Ngoài ra nếu ảnh bạn mới đăng cũng sẽ không xuất hiện ngay trên trang bình chọn. Sau khi đăng khoảng 10'' ảnh của bạn mới xuất hiện trên trang bình chọn.</p>\r\n<p><strong>7. Tại sao ảnh của tui bị xóa?</strong></p>\r\n<p>Ảnh của bạn sẽ bị xóa trong các trường hợp sau:</p>\r\n<p>Vi phạm nghiêm trọng các nội quy: đăng ảnh liên quan đến chính trị, tôn giáo, phản động, đồi trụy, các chủ đề nhạy cảm, phản cảm...<br>\r\n  Ảnh bị nhiều báo cáo xấu bởi cộng đồng<br>\r\n  Ảnh liên quan trực tiếp đến cá nhân/tổ chức và được cá nhân/tổ chức yêu cầu xóa<br>\r\n  Ảnh vi phạm bản quyền và được người sở hữu bản quyền yêu cầu xóa<br>\r\n  Tui nhận được thông báo ảnh đã được bình chọn lên trang chủ, nhưng vào trang chủ không thấy đâu?</p>\r\n<p>Ảnh của bạn được lên trang chủ rồi vẫn có thể bị gỡ xuống do những lý do sau đây:</p>\r\n<p>Ảnh đã bị trùng: những người bình chọn ảnh không biết ảnh bị trùng, hoặc sự bình chọn không công bằng do bạn gian lận<br>\r\n  Ảnh vi phạm nội quy: ví dụ câu like. Những ảnh câu like mặc dù phần lớn người dùng ghét, nhưng cũng được khá nhiều bình chọn và like<br>\r\n  Ảnh chất lượng quá thấp: nếu bình chọn công bằng, ảnh được lên trang chủ thì đã được đảm bảo chất lượng. Tuy nhiên có nhiều trường hợp bình chọn không công bằng (bạn bè bình chọn cho nhau thậm chí còn chưa xem ảnh như thế nào, tạo nhiều tài khoản để bình chọn…) thì ảnh được lên trang chủ nhưng sau 1 thời gian được rất ít like và bình luận. Hệ thống tự phát hiện những ảnh thế này và loại khỏi trang chủ. Hệ thống chỉ xử lý những ảnh đã được một lượng lượt xem đủ lớn để đảm bảo tính chính xác.<br>\r\n  Ảnh của những thành viên cũ hoặc thứ hạng cao có được ưu tiên hơn?</p>\r\n<p>Không. Bất kể bạn là uploader mới hay cũ, thứ hạng cao hay thấp, ảnh của bạn đăng lên đều được hihivl.com “đối xử” như nhau.</p>\r\n<p><strong>8. Ảnh thế nào thì sẽ vào trang Hot?</strong></p>\r\n<p>Nếu 1 ảnh xuất hiện ở trang chủ, thì cũng sẽ xuất hiện ở trang Hot, nhưng không biết ở vị trí nào thôi. Trang hot được sắp xếp dựa vào nhiều tiêu chí để thể hiện “độ hot gần đây” của 1 bức ảnh. Và việc này hoàn toàn tự động.</p>\r\n<p><strong>9.Tại sao số like của tui tự nhiên bị giảm?</strong></p>\r\n<p>Số like của 1 uploader bằng tổng số like của tất cả các ảnh của uploader đó. Số like này dựa vào nút like Facebook. hihivl.com “hỏi” Facebook số like của mỗi ảnh, và Facebook trả lời bao nhiêu hihivl.com sẽ biết bấy nhiêu. Thông thường số like này ổn định và tăng dần. Tuy nhiên thỉnh thoảng Facebook gặp lỗi dẫn đến số liệu bị sai, trả về cho hihivl.com sai, làm số like của bạn bị giảm. Điều này hihivl.com không kiểm soát được. Số like của bạn sẽ khôi phục lại khi Facebook sửa lỗi.</p>\r\n<p><strong>10. Tui chỉ được đăng 2 ảnh 1 ngày. Làm thế nào để được đăng nhiều hơn?</strong></p>\r\n<p>Giới hạn của bạn sẽ tăng dần khi bạn được nhiều like hơn. Lúc nào tăng thì bạn tự khám phá nhé!</p>\r\n<p><strong>11. Tại sao tài khoản của tui bị khóa?</strong></p>\r\n<p>Tài khoản của bạn sẽ bị khóa ngay lập tức nếu đăng ảnh phản động hoặc đồi trụy. Tài khoản cũng sẽ bị khóa nếu vi phạm nhiều lần: đăng ảnh liên quan các chủ đề nhạy cảm khác, quảng cáo, bình chọn phá hoại, là clone của tài khoản khác… Tùy tài khoản và loại vi phạm mà hihivl.com có thể thông báo nhắc nhở hoặc không.</p>\r\n<p><strong>12. Đọc trang này mỏi mắt mà vẫn chưa giải đáp được thắc mắc của tui?</strong></p>\r\n<p>Đừng ngần ngại gửi tin nhắn cho fanpage của www.hihivl.com trên Facebook hoặc email đến info@hihivl.com. BQT sẽ trả lời trực tiếp cho bạn.</p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
