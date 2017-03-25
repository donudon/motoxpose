-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2017 at 03:46 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motoxpose`
--

-- --------------------------------------------------------

--
-- Table structure for table `ms_ads`
--

CREATE TABLE `ms_ads` (
  `id` int(10) NOT NULL,
  `image` varchar(500) NOT NULL,
  `startdate` varchar(500) NOT NULL,
  `enddate` varchar(500) NOT NULL,
  `totalview` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_ads`
--

INSERT INTO `ms_ads` (`id`, `image`, `startdate`, `enddate`, `totalview`) VALUES
(1, '1bokkusu.png', '16-02-2017', '2017-02-26', 0),
(2, '2.png', '16-02-2017', '', 0),
(3, '3.png', '16-02-2017', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ms_blog`
--

CREATE TABLE `ms_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `link` varchar(500) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `date_created` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `content` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_blog`
--

INSERT INTO `ms_blog` (`id`, `title`, `link`, `thumbnail`, `date_created`, `author`, `content`) VALUES
(1, 'Testososos', 'tes', '1wooden_watch_box.png', '', 'tes', '<p><img src="data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw==" style="height:15px; width:15px" title="Click and drag to move" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style="font-family:Courier New,Courier,monospace">CKEditor Brownies</span></h2>\r\n\r\n<h3><span style="font-family:Courier New,Courier,monospace">Ingredients:</span></h3>\r\n\r\n<ul>\r\n	<li><span style="font-family:Courier New,Courier,monospace">&frac12; cup flour</span></li>\r\n	<li><span style="font-family:Courier New,Courier,monospace">1 cup sugar</span></li>\r\n	<li><span style="font-family:Courier New,Courier,monospace">&frac12; cup butter, melted</span></li>\r\n	<li><span style="font-family:Courier New,Courier,monospace">2 eggs</span></li>\r\n	<li><span style="font-family:Courier New,Courier,monospace">1/3 cup cocoa powder</span></li>\r\n</ul>\r\n\r\n<p><span style="font-family:Courier New,Courier,monospace">Preheat the oven to <strong>350&deg;F</strong> and grease the baking pan. Combine the flour, sugar and cocoa powder in a medium bowl. In another small bowl, whisk together the butter and eggs. Stir the two mixtures until just combined. Bake the brownies for 25 to 35 minutes. Remove from the oven and let it cool for 5 minutes.</span></p>\r\n'),
(3, 'asdsad', 'asdsad', '2bokkusu.png', '2017-02-24 20:56:34', 'asdsad', '<p>&nbsp;</p>\r\n\r\n<div aria-label=" image widget" contenteditable="false" role="region" style="float:left" tabindex="-1">\r\n<figure class="image" data-widget="image"><span><img alt="" src="http://c.cksource.com/a/1/img/demo/brownie.jpg" style="height:266px; width:400px" /><span title="Click and drag to resize">?</span></span>\r\n\r\n<figcaption contenteditable="true">Bon Appétit!</figcaption>\r\n</figure>\r\n<span style="background:url(&quot;http://s1.ckeditor.com/themes/ckeditor4/vendor/ckeditor/4.6.2/plugins/widget/images/handle.png&quot;) rgba(220, 220, 220, 0.498039); display:block; left:20px; top:-5px"><img role="presentation" src="data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw==" style="height:15px; width:15px" title="Click and drag to move" /></span></div>\r\n\r\n<h2>CKEditor Brownies</h2>\r\n\r\n<h3>Ingredients:</h3>\r\n\r\n<ul>\r\n	<li>&frac12; cup flour</li>\r\n	<li>1 cup sugar</li>\r\n	<li>&frac12; cup butter, melted</li>\r\n	<li>2 eggs</li>\r\n	<li>1/3 cup cocoa powder</li>\r\n</ul>\r\n\r\n<p>Preheat the oven to <strong>350&deg;F</strong> and grease the baking pan. Combine the flour, sugar and cocoa powder in a medium bowl. In another small bowl, whisk together the butter and eggs. Stir the two mixtures until just combined. Bake the brownies for 25 to 35 minutes. Remove from the oven and let it cool for 5 minutes.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `ms_gallery`
--

CREATE TABLE `ms_gallery` (
  `id` int(10) NOT NULL,
  `thumbnail` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `caption` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_gallery`
--

INSERT INTO `ms_gallery` (`id`, `thumbnail`, `link`, `image`, `caption`) VALUES
(1, '1titelSI (2).png', '', '10titelSI (2).png,11titelSI (3) - Copy.png,12titelSI (3).png', ''),
(2, '2titelMN (2).png', '', '20titelMN.png,21titelSI.png', ''),
(3, '3.jpg', '', '3.jpg', ''),
(4, '4thumbcall.png', '', '40call.png,41customhk-Logo.png,42fb.jpg,43gildan-logo.png,44gp.jpg,45ig.jpg', 'sadsadsa');

-- --------------------------------------------------------

--
-- Table structure for table `ms_slider`
--

CREATE TABLE `ms_slider` (
  `id` int(10) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_slider`
--

INSERT INTO `ms_slider` (`id`, `image`) VALUES
(1, '1bokkusu.png');

-- --------------------------------------------------------

--
-- Table structure for table `ms_user`
--

CREATE TABLE `ms_user` (
  `id` int(255) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `remember_token` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_user`
--

INSERT INTO `ms_user` (`id`, `username`, `password`, `remember_token`) VALUES
(1, 'bos', '$2y$10$xGLwBRQTvK6hNynMjoaJW.n5Ft.m0ysisd3HT7yZqn/oBQTH1DWFW', '3anAwaiMaQEZgbS90tbrIFQ46h69x3FSvYWeCl7yzQylaWQsAG8l5eEdn2od'),
(2, 'admin', '$2y$10$VZj80y8DFaGOETMea9zC3uc6Msb1gegVeXYawCMyVGEBZJm1NcxZW', 'ux7uLusUGVyIGavq40nKN3BrseYgIvaTQ0PxxqQ6dWS0fiGaLFQToH5IlDlL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_ads`
--
ALTER TABLE `ms_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_blog`
--
ALTER TABLE `ms_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_gallery`
--
ALTER TABLE `ms_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_slider`
--
ALTER TABLE `ms_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_user`
--
ALTER TABLE `ms_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ms_ads`
--
ALTER TABLE `ms_ads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ms_blog`
--
ALTER TABLE `ms_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ms_gallery`
--
ALTER TABLE `ms_gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ms_slider`
--
ALTER TABLE `ms_slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ms_user`
--
ALTER TABLE `ms_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
