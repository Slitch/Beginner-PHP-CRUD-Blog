-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 27. 01 2016 kl. 17:50:25
-- Serverversion: 5.6.26
-- PHP-version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktik3`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `post_id` int(11) NOT NULL,
  `post_text` mediumtext NOT NULL,
  `post_title` varchar(32) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `blog`
--

INSERT INTO `blog` (`post_id`, `post_text`, `post_title`, `post_date`, `deleted`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet nec mauris at hendrerit. Duis quis luctus justo. Praesent condimentum tristique mauris quis tristique. In ut felis nisl. Ut sit amet maximus leo, eu aliquam risus. Ut suscipit lacus commodo sollicitudin dapibus. Proin pellentesque nibh urna, et pretium ante efficitur eu. Sed pellentesque magna id nisi faucibus, sit amet semper orci pretium. Suspendisse at euismod dolor. Sed eget ornare sapien. Duis quis nisl lacinia, iaculis mi non, dictum est. Nulla nunc lacus, mattis vel nulla a, feugiat venenatis est. Quisque et lectus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi luctus lacus et egestas tempor.', 'Hewadklinee', '2016-01-12 11:10:19', 0),
(2, 'Etiam suscipit viverra purus, vel tristique turpis commodo vitae. Nulla vitae magna tempor, accumsan erat a, efficitur ipsum. Duis libero nisl, interdum at turpis nec, venenatis dapibus tellus. Curabitur quis porta nibh. Morbi placerat augue nunc, a porttitor augue laoreet eu. Morbi tempor in nunc sed vehicula. Vestibulum sed metus vel lorem sollicitudin malesuada. Donec ac lacinia nisi. Phasellus efficitur sit amet tortor vitae venenatis. In a justo ultricies odio luctus mattis. Curabitur et auctor felis. Suspendisse potenti. Nullam at finibus urna.', 'her are somee', '2016-01-12 11:20:27', 0),
(3, 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then', 'This is a title hahaha', '2016-01-13 10:32:28', 0),
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit quam vitae purus finibus, eget bibendum leo luctus. Nullam nec urna erat. Cras id nisl nunc. Proin ornare, tellus a consectetur consectetur, mi dolor consequat sapien, ac accumsan libero nibh nec elit. Quisque accumsan malesuada purus, non auctor neque imperdiet sed. Praesent et commodo nisi. In ultricies augue et odio vehicula, ut pretium odio sodales. Suspendisse enim nisi, fermentum maximus hendrerit eget, pellentesque ut magna. Donec placerat tempor odio, et semper magna luctus lobortis. Morbi eu nunc pretium ante molestie porttitor. Quisque ac eros sapien. Sed vitae metus laoreet, congue mi sit amet, scelerisque lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec imperdiet egestas enim, eu ullamcorper tellus bibendum dapibus. Mauris lacinia malesuada nunc eget suscipit. Nunc nibh sem, accumsan sed fringilla non, interdum nec augue.\r\n\r\nInteger vitae ullamcorper quam, et scelerisque leo. Donec placerat justo magna, non rhoncus mauris dictum id. Curabitur mi arcu, lacinia non interdum ultricies, iaculis et libero. Duis ullamcorper nulla ac odio varius, nec vestibulum mi maximus. Vestibulum tempus eu leo ac placerat. Duis dictum congue enim, eget volutpat purus luctus at. Suspendisse sed nunc tellus. Duis elementum turpis ac velit sollicitudin, id pretium purus dignissim. Praesent vel tristique metus, vitae malesuada nulla. Proin sed dolor volutpat, facilisis arcu eget, ultrices nisl. Vestibulum quis dolor pulvinar, sagittis erat id, volutpat enim.', 'blblblbl', '2016-01-27 11:36:27', 0),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit quam vitae purus finibus, eget bibendum leo luctus. Nullam nec urna erat. Cras id nisl nunc. Proin ornare, tellus a consectetur consectetur, mi dolor consequat sapien, ac accumsan libero nibh nec elit. Quisque accumsan malesuada purus, non auctor neque imperdiet sed. Praesent et commodo nisi. In ultricies augue et odio vehicula, ut pretium odio sodales. Suspendisse enim nisi, fermentum maximus hendrerit eget, pellentesque ut magna. Donec placerat tempor odio, et semper magna luctus lobortis. Morbi eu nunc pretium ante molestie porttitor. Quisque ac eros sapien. Sed vitae metus laoreet, congue mi sit amet, scelerisque lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec imperdiet egestas enim, eu ullamcorper tellus bibendum dapibus. Mauris lacinia malesuada nunc eget suscipit. Nunc nibh sem, accumsan sed fringilla non, interdum nec augue.\r\n\r\nInteger vitae ullamcorper quam, et scelerisque leo. Donec placerat justo magna, non rhoncus mauris dictum id. Curabitur mi arcu, lacinia non interdum ultricies, iaculis et libero. Duis ullamcorper nulla ac odio varius, nec vestibulum mi maximus. Vestibulum tempus eu leo ac placerat. Duis dictum congue enim, eget volutpat purus luctus at. Suspendisse sed nunc tellus. Duis elementum turpis ac velit sollicitudin, id pretium purus dignissim. Praesent vel tristique metus, vitae malesuada nulla. Proin sed dolor volutpat, facilisis arcu eget, ultrices nisl. Vestibulum quis dolor pulvinar, sagittis erat id, volutpat enim.', '12345678', '2016-01-27 11:36:32', 0),
(6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit quam vitae purus finibus, eget bibendum leo luctus. Nullam nec urna erat. Cras id nisl nunc. Proin ornare, tellus a consectetur consectetur, mi dolor consequat sapien, ac accumsan libero nibh nec elit. Quisque accumsan malesuada purus, non auctor neque imperdiet sed. Praesent et commodo nisi. In ultricies augue et odio vehicula, ut pretium odio sodales. Suspendisse enim nisi, fermentum maximus hendrerit eget, pellentesque ut magna. Donec placerat tempor odio, et semper magna luctus lobortis. Morbi eu nunc pretium ante molestie porttitor. Quisque ac eros sapien. Sed vitae metus laoreet, congue mi sit amet, scelerisque lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec imperdiet egestas enim, eu ullamcorper tellus bibendum dapibus. Mauris lacinia malesuada nunc eget suscipit. Nunc nibh sem, accumsan sed fringilla non, interdum nec augue.\r\n\r\nInteger vitae ullamcorper quam, et scelerisque leo. Donec placerat justo magna, non rhoncus mauris dictum id. Curabitur mi arcu, lacinia non interdum ultricies, iaculis et libero. Duis ullamcorper nulla ac odio varius, nec vestibulum mi maximus. Vestibulum tempus eu leo ac placerat. Duis dictum congue enim, eget volutpat purus luctus at. Suspendisse sed nunc tellus. Duis elementum turpis ac velit sollicitudin, id pretium purus dignissim. Praesent vel tristique metus, vitae malesuada nulla. Proin sed dolor volutpat, facilisis arcu eget, ultrices nisl. Vestibulum quis dolor pulvinar, sagittis erat id, volutpat enim.', 'ghfyhrtfyrf', '2016-01-27 11:36:36', 0);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `img_id` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `gallery`
--

INSERT INTO `gallery` (`img_id`, `image_name`) VALUES
(16, '1452845396_20151106_231501.jpg'),
(17, '1452858637_20151106_225226.jpg'),
(18, '1452858641_20151106_231507.jpg'),
(19, '1452858644_20151106_231452.jpg'),
(20, '1452858649_20151106_225129.jpg'),
(21, '1452859356_20151106_231507.jpg'),
(22, '1452859360_20151106_225209.jpg'),
(23, '1452859364_20151106_225217.jpg'),
(24, '1452859369_20151106_225223.jpg');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`) VALUES
(1, 'poul@poul.dk', '1234');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`post_id`);

--
-- Indeks for tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`img_id`);

--
-- Indeks for tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Tilføj AUTO_INCREMENT i tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- Tilføj AUTO_INCREMENT i tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
