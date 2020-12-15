-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 10:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmpt339final`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `preview` varchar(255) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `thumbnail`, `preview`, `categoryId`) VALUES
(1, 'Friends', 'entities/thumbnails/1.jpg', 'entities/previews/1.mp4', 3),
(2, 'The Simpsons', 'entities/thumbnails/2.jpg', 'entities/previews/6.mp4', 20),
(3, 'Toy Story', 'entities/thumbnails/3.jpg', 'entities/previews/1.mp4', 13),
(4, 'Inbetweeners', 'entities/thumbnails/4.jpg', 'entities/previews/2.mp4', 3),
(5, 'Suits', 'entities/thumbnails/5.jpg', 'entities/previews/3.mp4', 4),
(6, 'Captain Underpants', 'entities/thumbnails/6.jpg', 'entities/previews/4.mp4', 13),
(7, 'Brooklyn Nine-Nine', 'entities/thumbnails/7.jpg', 'entities/previews/5.mp4', 3),
(8, 'That 70s Show', 'entities/thumbnails/8.jpg', 'entities/previews/6.mp4', 3),
(9, 'Pokemon', 'entities/thumbnails/9.jpg', 'entities/previews/2.mp4', 20),
(10, 'Spongebob Squarepants', 'entities/thumbnails/10.jpg', 'entities/previews/3.mp4', 20),
(11, 'Futurama', 'entities/thumbnails/11.jpg', 'entities/previews/1.mp4', 20),
(12, 'Johnny Bravo', 'entities/thumbnails/12.jpg', 'entities/previews/4.mp4', 20),
(13, 'Teenage Mutant Ninja Turtles', 'entities/thumbnails/13.jpg', 'entities/previews/5.mp4', 20),
(14, 'Power Puff Girls', 'entities/thumbnails/14.jpg', 'entities/previews/6.mp4', 20),
(15, 'Teen Titans Go', 'entities/thumbnails/15.jpg', 'entities/previews/2.mp4', 20),
(16, 'Jurassic Park', 'entities/thumbnails/16.jpg', 'entities/previews/3.mp4', 9),
(18, 'Grease', 'entities/thumbnails/17.jpg', 'entities/previews/4.mp4', 17),
(19, 'Paddington Bear', 'entities/thumbnails/18.jpg', 'entities/previews/5.mp4', 13),
(20, 'Santa Clause', 'entities/thumbnails/19.jpg', 'entities/previews/1.mp4', 18),
(21, 'Monster Family', 'entities/thumbnails/20.jpg', 'entities/previews/6.mp4', 13),
(22, 'Top Gun', 'entities/thumbnails/1.jpg', 'entities/previews/2.mp4', 1),
(23, 'Home Alone', 'entities/thumbnails/2.jpg', 'entities/previews/3.mp4', 18),
(24, 'The Grinch', 'entities/thumbnails/3.jpg', 'entities/previews/4.mp4', 18),
(25, 'National Lampoon\'s Christmas Vacation', 'entities/thumbnails/6.jpg', 'entities/previews/5.mp4', 18),
(26, 'Elf', 'entities/thumbnails/5.jpg', 'entities/previews/6.mp4', 18),
(27, 'Fred Claus', 'entities/thumbnails/6.jpg', 'entities/previews/2.mp4', 18),
(28, 'Jaws', 'entities/thumbnails/7.jpg', 'entities/previews/3.mp4', 9),
(29, 'Live Die Repeat', 'entities/thumbnails/8.jpg', 'entities/previews/4.mp4', 9),
(30, 'Into the Storm', 'entities/thumbnails/9.jpg', 'entities/previews/1.mp4', 9),
(31, 'Mission Impossible', 'entities/thumbnails/10.jpg', 'entities/previews/5.mp4', 1),
(32, 'Never Back Down', 'entities/thumbnails/11.jpg', 'entities/previews/6.mp4', 1),
(33, 'Mechanic', 'entities/thumbnails/12.jpg', 'entities/previews/2.mp4', 1),
(34, 'Need for Speed', 'entities/thumbnails/13.jpg', 'entities/previews/3.mp4', 1),
(35, 'Gravity', 'entities/thumbnails/14.jpg', 'entities/previews/4.mp4', 7),
(36, 'Step Brothers', 'entities/thumbnails/15.jpg', 'entities/previews/5.mp4', 3),
(37, 'Game of Thrones', 'entities/thumbnails/16.jpg', 'entities/previews/1.mp4', 4),
(38, 'Dark Money', 'entities/thumbnails/17.jpg', 'entities/previews/6.mp4', 4),
(39, 'Yellowstone', 'entities/thumbnails/18.jpg', 'entities/previews/2.mp4', 4),
(40, 'Manifest', 'entities/thumbnails/19.jpg', 'entities/previews/3.mp4', 4),
(41, 'The Sound of Music', 'entities/thumbnails/20.jpg', 'entities/previews/4.mp4', 17),
(42, 'Hairspray', 'entities/thumbnails/1.jpg', 'entities/previews/1.mp4', 17),
(43, 'Believe', 'entities/thumbnails/2.jpg', 'entities/previews/5.mp4', 17),
(44, 'Chris Brown: Till I Die', 'entities/thumbnails/3.jpg', 'entities/previews/6.mp4', 17),
(45, 'Men in Black', 'entities/thumbnails/3.jpg', 'entities/previews/2.mp4', 7),
(46, 'Interstellar', 'entities/thumbnails/4.jpg', 'entities/previews/3.mp4', 7),
(47, 'Transformers', 'entities/thumbnails/5.jpg', 'entities/previews/1.mp4', 7),
(48, 'Cloudy with a Chance of Meatballs', 'entities/thumbnails/6.jpg', 'entities/previews/4.mp4', 13),
(49, 'District 9', 'entities/thumbnails/7.jpg', 'entities/previews/5.mp4', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
