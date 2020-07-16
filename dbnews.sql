-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 16, 2020 at 12:37 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dbnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id_cat` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id_cat`, `name`) VALUES
(1, 'Tech'),
(2, 'Politics'),
(3, 'Health'),
(4, 'News');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_new` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_new`, `id_user`, `id_cat`, `title`, `content`, `dt`) VALUES
(2, 1, 2, 'A run on cents: Why coins are disappearing from cash registers across the country', 'At fast-food restaurants, supermarkets, banks and other businesses across the country where cash normally changes hands, customers are being warned that coins are in short supply.\r\n\r\nScott Talan found that out last weekend when he used a Starbucks drive-thru in Virginia and was met by a handwritten sign that read, &quot;Due to the national coin shortage, we can only accept exact change or electronic payment at this time.&quot;\r\n\r\nHe thought it was a prank.\r\n\r\n&quot;I was going to email the store manager or Starbucks headquarters because it didn\'t look official,&quot; said Talan, an assistant professor at American University in Washington. &quot;It\'s all very strange and fitting of the times we\'re in.&quot;\r\n\r\nStarbucks did not immediately respond to a request for comment Wednesday.', '2020-06-13 07:35:58'),
(4, 1, 1, 'Google Is Working on Tattoos That Turn Your Body Into a Touchpad', 'Undeterred by its historic Google Glass flop, Google is still investing heavily in various oddball forms of wearable technology.\r\n\r\nRecent projects, according to CNET, include new mixed reality glasses, virtual reality controllers that let you feel the weight of virtual objects, and new smartwatches. But perhaps the most unusual is a high-tech temporary tattoo that basically turns your flesh into a giant touchpad.', '2020-06-15 08:55:30'),
(10, 1, 3, 'Bullock issues mask requirement in Montana', 'MISSOULA, Mont. — Montana Gov. Steve Bullock has issued a directive requiring face coverings at indoor public spaces and at larger outdoor gatherings in counties where four or more people are known to be currently infected with COVID-19.\r\n\r\nBullock says too many people continue to meet in large gatherings and too few are wearing masks.\r\n\r\nThe directive currently applies to 25 of Montana\'s 56 counties. Montana reported a record 145 additional coronavirus cases on Wednesday, bringing the state\'s number of known cases to 2,096.', '2020-06-24 11:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id_session` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `token` varchar(128) NOT NULL,
  `dt_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id_session`, `id_user`, `token`, `dt_add`) VALUES
(13, 1, '5d7046b12a80517a6470f9b6a958617e257d930a006485edf0a69e10a030b4fa67ddeb4315fb947ec4ef9a13d30258f194505aa57f86ec340c1ab4898771ca41', '2020-07-16 08:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `login`, `password`, `email`) VALUES
(1, 'admin', 'admin', '$2y$10$i7ABuHI7P0XvyrS5JT5bU.P1y81cd9Zf9uVg/9HEtaXcwuhPQUNt6', 'post@localhost.ru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_new`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id_session`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id_cat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id_session` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
