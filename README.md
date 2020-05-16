# School project
Advertisement web application where you can create posts such as selling items or jobs offers. 
# Tools used
App based on Codeigniter famework V3 where it uses mainly PHP. 
HTML5 and CSS3.
Bootstrap framework which is a library for CSS.
# Database
-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2020 at 09:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secondhandstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'user.png',
  `created_item` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `user_id`, `category`, `city`, `title`, `price`, `body`, `image`, `created_item`, `Date`) VALUES
(4, 4, 'pets', 'Tampere', 'Puppy German shepherd', 1000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita cupiditate sunt fuga vel quo quas, voluptatem impedit, vero in illum eius animi quam at esse earum similique qui porro minus.', 'margman-h-litter7-758x496.jpg', '2020-04-28 17:08:26', '2020-05-04 17:42:09'),
(5, 4, 'computers-software', 'Vantaa', 'Gaming Laptop for sale', 1200, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita cupiditate sunt fuga vel quo quas, voluptatem impedit, vero in illum eius animi quam at esse earum similique qui porro minus.', 'IMG_20180801_120123.jpg', '2020-04-28 17:10:15', '2020-05-04 17:37:35'),
(6, 4, 'cars-vehicles', 'Rovaniemi', 'Truck for sale VOLVO', 48000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita cupiditate sunt fuga vel quo quas, voluptatem impedit, vero in illum eius animi quam at esse earum similique qui porro minus.', 'truck.jpg', '2020-04-29 15:16:48', '2020-05-04 17:43:04'),
(7, 4, 'instruments-multimedia', 'Jyväskylä', 'Piano for sale', 120, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita cupiditate sunt fuga vel quo quas, voluptatem impedit, vero in illum eius animi quam at esse earum similique qui porro minus.', 'download.jpeg', '2020-04-29 15:22:58', '2020-05-04 17:40:36'),
(8, 4, 'pets', 'Oulu', 'Dogs for sale', 3000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita cupiditate sunt fuga vel quo quas, voluptatem impedit, vero in illum eius animi quam at esse earum similique qui porro minus.', 'bulldog-1047518_640.jpg', '2020-04-30 04:27:57', '2020-05-04 17:41:58'),
(9, 4, 'home-garden', 'Oulu', 'Apartment for rent in Oulu alppila', 700, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita cupiditate sunt fuga vel quo quas, voluptatem impedit, vero in illum eius animi quam at esse earum similique qui porro minus.', 'key-4516170_640.jpg', '2020-04-30 04:34:58', '2020-05-04 17:42:42'),
(10, 4, 'instruments-multimedia', 'Oulu', 'Guitare Yamaha', 130, 'good guitare for sale', 'images.jpeg', '2020-04-30 06:58:35', '2020-05-04 17:40:39'),
(11, 4, 'computers-software', 'Oulu', 'Ipad pro', 300, 'good ipad in good condition', '02Y7fx9yBHbBxEx0gPl47Y3-5.jpg', '2020-04-30 22:57:21', '2020-05-04 17:37:41'),
(14, 4, 'jobs-trainings', 'Oulu', 'Designer', 2400, 'Looking for a designer in oulu area', 'user.png', '2020-05-04 22:31:52', '2020-05-04 19:36:56'),
(15, 4, 'jobs-trainings', 'Tampere', 'developper', 4000, 'java developper needed for a project', 'user.png', '2020-05-04 22:37:39', '2020-05-04 19:40:24'),
(16, 4, 'jobs-trainings', 'Oulu', 'developer', 3000, 'frontend developper needed for a project', 'user.png', '2020-05-04 22:38:19', '2020-05-04 19:40:26'),
(17, 4, 'jobs-trainings', 'Oulu', 'Plumber needed', 1000, 'we\'re looking for a plumber for nothing', 'user.png', '2020-05-04 22:38:54', '2020-05-04 19:40:28'),
(18, 4, 'jobs-trainings', 'Jyväskylä', 'looking for a gamer', 20000, 'a gaming competition looking for pro gamers', 'user.png', '2020-05-04 22:41:00', '2020-05-04 19:41:00'),
(20, 4, 'home-garden', 'Oulu', 'Talo', 120000, 'Big hyvää talo', 'download.jpeg', '2020-05-16 17:36:29', '2020-05-16 14:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(3, 'Jalil', 'Jalil@gmail.com', 'Hello how are you doing?'),
(4, 'Jalil', 'Jalil@gmail.com', 'Hello this is another test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `city`, `phone`, `created`) VALUES
(4, 'Jalil', 'Jalmari', 'Jalil@gmail.com', 'f7a9e24777ec23212c54d7a350bc5bea5477fdbb', 'Oulu', 672987878, '2020-04-26 13:38:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


