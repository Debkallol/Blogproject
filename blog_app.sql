-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 10:49 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `content_table`
--

CREATE TABLE `content_table` (
  `content_id` int(50) NOT NULL,
  `title` text NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content_table`
--

INSERT INTO `content_table` (`content_id`, `title`, `content`) VALUES
(2, 'My first blog here', 'I am writing'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Morbi blandit cursus risus at ultrices mi tempus imperdiet.', 'tortor at auctor urna nunc id. Mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Enim blandit volutpat maecenas volutpat blandit aliquam. Molestie nunc non blandit massa enim nec dui nunc mattis. Dolor sed viverra ipsum nunc. Nulla posuere sollicitudin aliquam ultrices sagittis orci. Id diam maecenas ultricies mi eget mauris pharetra et ultrices. Curabitur gravida arcu ac tortor dignissim convallis aenean. Sit amet consectetur adipiscing elit pellentesque habitant. Curabitur gravida arcu ac tortor dignissim. Dignissim suspendisse in est ante in nibh mauris cursus. Augue interdum velit euismod in pellentesque massa placerat duis ultricies.'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Morbi blandit cursus risus at ultrices mi tempus imperdiet.', 'tortor at auctor urna nunc id. Mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Enim blandit volutpat maecenas volutpat blandit aliquam. Molestie nunc non blandit massa enim nec dui nunc mattis. Dolor sed viverra ipsum nunc. Nulla posuere sollicitudin aliquam ultrices sagittis orci. Id diam maecenas ultricies mi eget mauris pharetra et ultrices. Curabitur gravida arcu ac tortor dignissim convallis aenean. Sit amet consectetur adipiscing elit pellentesque habitant. Curabitur gravida arcu ac tortor dignissim. Dignissim suspendisse in est ante in nibh mauris cursus. Augue interdum velit euismod in pellentesque massa placerat duis ultricies.'),
(5, 'My first blog here', 'tortor at auctor urna nunc id. Mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Enim blandit volutpat maecenas volutpat blandit aliquam. Molestie nunc non blandit massa enim nec dui nunc mattis. Dolor sed viverra ipsum nunc. Nulla posuere sollicitudin aliquam ultrices sagittis orci. Id diam maecenas ultricies mi eget mauris pharetra et ultrices. Curabitur gravida arcu ac tortor dignissim convallis aenean. Sit amet consectetur adipiscing elit pellentesque habitant. Curabitur gravida arcu ac tortor dignissim. Dignissim suspendisse in est ante in nibh mauris cursus. Augue interdum velit euismod in pellentesque massa placerat duis ultricies.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `gender`, `created_date`, `phone`) VALUES
(1, 'kallol', 'kamanashishdeb17@gmail.com', '56cb8b367c3293281138a2b682251f21', 'Male', '2021-05-03', '01674859280'),
(2, 'Jony', 'Jony@gmail.com', 'c5f7df5bc5960f7d09a4aba3e17d18f1', 'Male', '2021-05-04', '01774859282'),
(3, 'Dip', 'Deb@gmail.com', 'c2d838580b3d58800f15ac54f32c668d', 'Male', '2021-05-04', '01774859298'),
(4, 'Sam', 'sam@official.com', '9fcff34e962d2366511e5514ef5494c0', 'Male', '2021-05-04', '01674859280'),
(5, 'samara', 'samara@gmail.com', '6a9e901c268e0b307fc87e23180dbfce', 'Female', '2021-05-04', '01774859281'),
(6, 'Limi', 'limi@mail.com', '6ffea8c6b6ff89f87a78d54da0587149', 'Female', '2021-05-04', '01774859281');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content_table`
--
ALTER TABLE `content_table`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content_table`
--
ALTER TABLE `content_table`
  MODIFY `content_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
