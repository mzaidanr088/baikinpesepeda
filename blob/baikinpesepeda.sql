-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 05:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baikinpesepeda`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(10) NOT NULL,
  `id_post` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `comment` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `id_post`, `username`, `date`, `comment`) VALUES
(18, 2, 'hairman77', '2021-01-13 12:13:37', 'Didaerah saya juga lagi rawan tuh\r\n'),
(20, 2, 'dhanhafid', '2021-01-13 13:26:29', 'Lampu pake rockbross om, cakep'),
(34, 1, 'zack22', '2021-01-13 20:35:09', 'Mantap om'),
(36, 4, 'dhanhafid', '2021-01-13 21:21:32', 'Jembatan Suroboyo mas'),
(38, 4, 'peterNewYorkMania', '2021-01-13 21:59:40', 'Porong juga bagus boss, aspalnya baruu'),
(39, 10, 'dhanhafid', '2021-01-13 22:21:07', 'Tinggal kencengin aja locknut di hub nya, asal ada kunci pas bisa dibenerin sendiri kok');

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `username` varchar(20) NOT NULL,
  `point` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaderboard`
--

INSERT INTO `leaderboard` (`username`, `point`) VALUES
('paijoo', 60),
('dhanhafid', 257);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `headlight` varchar(255) DEFAULT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `username`, `date`, `headlight`, `content`) VALUES
(1, 'dhanhafid', '2021-01-12 16:37:31', 'Periksa bagian - bagian sepeda berikut sebelum ngonthel', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu odio pretium, condimentum lorem ut, fermentum felis. Suspendisse potenti. Fusce pharetra ante leo, eget interdum eros luctus eget. Suspendisse semper, ligula vel laoreet finibus, dui erat varius nisl, in dapibus leo sapien sed ante. Nunc semper pulvinar ex et fermentum. Nunc mollis nunc sit amet viverra mollis. Ut consectetur odio eu lobortis molestie. Nullam in mi rutrum, dignissim mauris sit amet, facilisis tortor. Cras scelerisque nisi sit amet lacinia pellentesque.\r\n\r\nCras tincidunt blandit quam, sit amet rutrum neque ultrices sed. Pellentesque ullamcorper est vitae massa fermentum dapibus at sit amet ligula. Nunc euismod posuere lectus, at ultricies neque. Donec convallis luctus libero, a viverra ipsum ultrices in. Morbi lobortis pellentesque viverra. Nunc et sapien fringilla, dignissim est vitae, dapibus leo. Sed venenatis pulvinar tortor, eu porta urna. Ut ac tellus neque. Sed malesuada velit id lacus consequat, vitae tempor felis lacinia.\r\n\r\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent ullamcorper metus ac lectus mattis, id volutpat est euismod. Vivamus at ullamcorper leo, vitae scelerisque quam. Sed purus turpis, tincidunt et diam non, rhoncus pharetra ligula. Curabitur lorem elit, ultricies ac rhoncus non, venenatis quis magna. Phasellus ornare porta ante, id posuere massa rhoncus nec. Quisque at felis tortor. Aenean feugiat fringilla sapien iaculis varius. Aliquam erat volutpat. Sed et laoreet enim. Ut at mi non turpis pellentesque porta. Sed vitae fermentum mi, quis tempor orci. Duis lacinia eu nisi vel tristique. Nulla dignissim enim mollis lectus tempor suscipit. Proin id felis diam.\r\n\r\nNunc scelerisque vel tortor quis commodo. In at ante et elit hendrerit posuere a eget massa. Sed vel magna in nisi tempor pretium. Vestibulum metus nunc, viverra at aliquet vel, pretium eget nisl. Donec nec urna efficitur, malesuada tellus vitae, egestas est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed mollis nulla id leo laoreet, at molestie erat pellentesque. Nam pharetra consectetur aliquet. Ut eros diam, laoreet sed nunc non, accumsan sodales magna. Ut nec tellus eros. Sed id cursus tortor. Donec diam augue, faucibus vitae blandit ut, tempus id urna.'),
(2, 'paijoo', '2021-01-12 18:38:31', 'Tips bersepeda aman dikala malam', 'Aenean ac nibh at mi porttitor maximus. Aliquam porta sem eu purus semper vulputate. Mauris felis leo, pretium vitae orci sit amet, tempus varius quam. Praesent egestas non felis sed lobortis. Sed rutrum mattis ipsum, vel finibus nisi laoreet in. Integer eu feugiat lacus. Ut eget purus lacinia, malesuada nibh ac, imperdiet mi. Cras nunc eros, maximus id dolor nec, pharetra semper mauris. Cras vitae facilisis erat, nec volutpat diam.\r\n\r\nFusce ullamcorper mi iaculis lorem faucibus, in imperdiet elit tempus. Nam accumsan placerat magna commodo lacinia. Integer at libero mattis, tempor dolor et, lacinia nunc. Integer sollicitudin elementum viverra. Quisque quis posuere purus. Nullam at diam interdum, facilisis elit quis, porta erat. Ut vel elit velit. Morbi a arcu pretium, pretium lorem vitae, mollis nibh. Aenean luctus ligula odio, eget convallis nisl commodo a. Nullam tempor congue dolor, eu gravida leo auctor vel.\r\n\r\nInteger id ante pellentesque, tincidunt dui sed, luctus leo. Aliquam laoreet malesuada euismod. Quisque in tincidunt dui, efficitur blandit velit. Etiam a dui sit amet lacus maximus interdum. Nulla sagittis risus eget pharetra rhoncus. In hac habitasse platea dictumst. Integer ut risus id dui tincidunt tempor ultricies et mi. Donec eget nisi sapien. Nulla facilisi.'),
(4, 'dhanhafid', '2021-01-13 14:12:47', 'Rekomendasi tujuan gowes minggu pagi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at sagittis nisi, eu fermentum ipsum. Vestibulum porta consequat tortor. Duis sodales tempus imperdiet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer imperdiet vitae orci eu semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis aliquam consequat consectetur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n\r\nCras eu gravida enim. Integer sodales, purus a varius laoreet, sapien ligula dapibus ligula, at sodales lectus velit ut leo. Aenean iaculis tortor ac lacus aliquam sollicitudin. Proin consectetur convallis nulla eu pretium. Maecenas ac eros elementum, commodo velit ut, interdum lectus. Proin eu congue augue. Maecenas consectetur neque justo, in volutpat enim consequat quis.\r\n\r\nFusce iaculis vehicula est non mattis. Aliquam eget nisi tortor. Sed egestas vestibulum nisl, nec aliquam purus rutrum dignissim. Curabitur tristique id nulla nec eleifend. Nullam id magna elementum, facilisis purus nec, vehicula velit. Duis malesuada imperdiet scelerisque. Aliquam vulputate erat efficitur, imperdiet augue nec, aliquam erat. Integer mollis massa a risus tempus, non finibus eros maximus. Fusce at ante vel eros suscipit cursus. Duis auctor a massa gravida mattis. Fusce placerat dictum aliquam. Cras hendrerit, turpis eget accumsan ultrices, nulla quam bibendum ligula, vitae tempus odio libero non velit. Donec dapibus mattis tristique.'),
(9, 'peterNewYorkMania', '2021-01-13 22:15:19', 'Bersepeda yang aman disaat pandemi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in pretium metus. Suspendisse faucibus gravida est non sodales. Phasellus congue, nunc eu luctus cursus, metus eros porta nibh, vel luctus mi libero vitae ligula. Sed massa augue, convallis vel augue porttitor, accumsan fermentum ligula. Morbi placerat, odio at dictum consectetur, urna risus accumsan leo, non tempor massa elit sed lectus. Donec convallis interdum ligula, sit amet pretium risus venenatis a. Fusce odio lectus, euismod eget vehicula vitae, consequat sit amet nibh. Pellentesque in elit mi. Ut tempor faucibus tortor, et efficitur leo sodales vitae. Sed consectetur, turpis ac tristique interdum, enim sapien mollis elit, eget eleifend elit est quis urna. Cras finibus dui in urna finibus rutrum. Vivamus quis condimentum odio. Suspendisse sit amet posuere dui, nec posuere justo. Fusce ullamcorper, tortor ac convallis rhoncus, diam arcu pretium velit, at egestas tellus magna at felis.\r\n\r\nNulla a est rhoncus, placerat purus id, fermentum diam. Suspendisse malesuada mi in ante consectetur ultrices nec eu neque. Proin laoreet pulvinar dui vitae malesuada. Ut sit amet lorem vel ipsum aliquet tempor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam luctus et mauris eget placerat. Nullam ac augue ut sapien vehicula hendrerit. Nullam id lacinia ipsum. Sed sed ipsum fermentum, condimentum tortor nec, lobortis enim. Maecenas id dui ligula. Etiam ut aliquet ipsum, et lacinia nulla. Mauris at semper nisi. Sed fermentum massa dui, in consectetur tortor ornare vitae. Proin scelerisque ornare iaculis.\r\n\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin lacinia, enim nec dapibus pellentesque, orci tellus fermentum elit, in faucibus neque eros eget risus. Nullam egestas sem rutrum metus euismod, ac porta tellus rhoncus. Quisque pellentesque nunc ac dolor mollis, vestibulum consectetur dui consectetur. Duis sit amet orci faucibus, ornare nunc ut, commodo elit. Integer tempor hendrerit turpis tempus posuere. Suspendisse potenti. Donec nec tortor at lorem porttitor posuere. Integer quis massa facilisis mauris rhoncus consectetur. Praesent nulla leo, mollis a tincidunt eget, tincidunt et libero. Integer bibendum consequat efficitur. Vivamus quis vulputate nibh. Vivamus consectetur, magna sed consectetur egestas, dui dui accumsan neque, et molestie ipsum metus in dolor.'),
(10, '46radya', '2021-01-13 22:19:14', '#tanya roda', 'Permisi om sebelumnya,\r\n\r\nBelakangan ini roda belakang saya kerasa goyang,\r\nMasalahnya kira kira dimananya ya om ?, kalau misal benerin sendiri bisa nggak atau harus bawa ke bengkel ?\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `role` tinytext NOT NULL DEFAULT 'user',
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `role`, `name`, `password`, `email`) VALUES
('46radya', 'user', 'Radya Pangestu', '00a1f187721c63501356bf791e69382c', 'radya46@gmail.com'),
('dhanhafid', 'admin', 'Hafid', '00a1f187721c63501356bf791e69382c', 'hafid@gmail.com'),
('hairman77', 'user', 'Herman Setiawan', '3f74ed1b90de7d06a51891228750fcb1', 'herman77@gmail.com'),
('IpulSilv44', 'user', 'Ipul Silverstone', '00a1f187721c63501356bf791e69382c', 'Ipul44@gmail.com'),
('paijoo', 'user', 'Paijo Swictherman', '00a1f187721c63501356bf791e69382c', 'paijo44@gmail.com'),
('Pancanaka_Bima44', 'user', 'Bima Pancanaka', '00a1f187721c63501356bf791e69382c', 'pancanakabima@gmail.com'),
('peterNewYorkMania', 'admin', 'Peter Parker', '00a1f187721c63501356bf791e69382c', 'peter@marvel.com'),
('zack22', 'user', 'Zacky Prakoso', '00a1f187721c63501356bf791e69382c', 'zack22@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `username` (`username`),
  ADD KEY `id_post` (`id_post`);

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD KEY `username` (`username`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`);

--
-- Constraints for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD CONSTRAINT `leaderboard_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
