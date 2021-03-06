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
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `ratingId` int(11) NOT NULL,
  `movieId` int(11) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`ratingId`, `movieId`, `rating`) VALUES
(1, 1, '0.32'),
(2, 2, '3.16'),
(3, 3, '3.54'),
(4, 4, '1.92'),
(5, 5, '0.41'),
(6, 6, '2.57'),
(7, 7, '4.89'),
(8, 8, '2.61'),
(9, 9, '4.81'),
(10, 10, '3.08'),
(11, 11, '0.08'),
(12, 12, '2.18'),
(13, 13, '4.13'),
(14, 14, '1.10'),
(15, 15, '0.46'),
(16, 16, '4.00'),
(17, 17, '3.61'),
(18, 18, '1.59'),
(19, 19, '4.52'),
(20, 20, '0.64'),
(21, 21, '1.17'),
(22, 22, '1.00'),
(23, 23, '2.02'),
(24, 24, '4.87'),
(25, 25, '3.65'),
(26, 26, '3.32'),
(27, 27, '0.10'),
(28, 28, '1.44'),
(29, 29, '0.90'),
(30, 30, '1.69'),
(31, 31, '2.50'),
(32, 32, '2.71'),
(33, 33, '2.76'),
(34, 34, '2.98'),
(35, 35, '1.34'),
(36, 36, '3.91'),
(37, 37, '3.41'),
(38, 38, '3.11'),
(39, 39, '4.39'),
(40, 40, '2.43'),
(41, 41, '3.33'),
(42, 42, '3.36'),
(43, 43, '2.32'),
(44, 44, '4.62'),
(45, 45, '4.08'),
(46, 46, '1.14'),
(47, 47, '3.95'),
(48, 48, '3.09'),
(49, 49, '4.68'),
(50, 50, '1.21'),
(51, 51, '0.30'),
(52, 52, '1.40'),
(53, 53, '2.22'),
(54, 54, '3.83'),
(55, 55, '1.19'),
(56, 56, '1.09'),
(57, 57, '3.04'),
(58, 58, '3.19'),
(59, 59, '4.06'),
(60, 60, '1.90'),
(61, 61, '0.70'),
(62, 62, '4.31'),
(63, 63, '3.94'),
(64, 64, '1.20'),
(65, 65, '0.72'),
(66, 66, '2.12'),
(67, 67, '1.84'),
(68, 68, '4.87'),
(69, 69, '1.82'),
(70, 70, '2.77'),
(71, 71, '4.93'),
(72, 72, '2.23'),
(73, 73, '3.43'),
(74, 74, '0.20'),
(75, 75, '4.03'),
(76, 76, '0.56'),
(77, 77, '0.09'),
(78, 78, '0.06'),
(79, 79, '0.99'),
(80, 80, '3.70'),
(81, 81, '2.47'),
(82, 82, '4.35'),
(83, 83, '1.39'),
(84, 84, '0.55'),
(85, 85, '4.18'),
(86, 86, '1.39'),
(87, 87, '1.65'),
(88, 88, '0.54'),
(89, 89, '1.07'),
(90, 90, '2.84'),
(91, 91, '4.61'),
(92, 92, '0.41'),
(93, 93, '2.45'),
(94, 94, '4.76'),
(95, 95, '2.18'),
(96, 96, '1.95'),
(97, 97, '3.49'),
(98, 98, '0.46'),
(99, 99, '3.89'),
(100, 100, '0.75'),
(101, 101, '0.46'),
(102, 102, '3.69'),
(103, 103, '4.53'),
(104, 104, '1.44'),
(105, 105, '0.35'),
(106, 106, '2.83'),
(107, 107, '4.64'),
(108, 108, '4.10'),
(109, 109, '1.53'),
(110, 110, '2.36'),
(111, 111, '0.32'),
(112, 112, '1.58'),
(113, 113, '2.85'),
(114, 114, '4.64'),
(115, 115, '1.95'),
(116, 116, '3.73'),
(117, 117, '2.67'),
(118, 118, '2.47'),
(119, 119, '0.84'),
(120, 120, '2.57'),
(121, 121, '1.01'),
(122, 122, '4.15'),
(123, 123, '1.43'),
(124, 124, '1.12'),
(125, 125, '3.92'),
(126, 126, '3.01'),
(127, 127, '4.86'),
(128, 128, '2.99'),
(129, 129, '2.43'),
(130, 130, '3.28'),
(131, 131, '2.77'),
(132, 132, '3.10'),
(133, 133, '0.60'),
(134, 134, '2.68'),
(135, 135, '1.96'),
(136, 136, '2.91'),
(137, 137, '2.52'),
(138, 138, '2.34'),
(139, 139, '4.22'),
(140, 140, '4.17'),
(141, 141, '4.40'),
(142, 142, '4.61'),
(143, 143, '4.53'),
(144, 144, '4.31'),
(145, 145, '0.70'),
(146, 146, '0.66'),
(147, 147, '4.48'),
(148, 148, '3.60'),
(149, 149, '0.00'),
(150, 150, '3.22'),
(151, 151, '2.93'),
(152, 152, '4.21'),
(153, 153, '1.08'),
(154, 154, '2.09'),
(155, 155, '1.60'),
(156, 156, '3.71'),
(157, 157, '3.88'),
(158, 158, '2.68'),
(159, 159, '3.09'),
(160, 160, '1.69'),
(161, 161, '4.23'),
(162, 162, '2.13'),
(163, 163, '0.88'),
(164, 164, '0.70'),
(165, 165, '2.63'),
(166, 166, '2.06'),
(167, 167, '1.59'),
(168, 168, '1.28'),
(169, 169, '2.98'),
(170, 170, '1.59'),
(171, 171, '4.95'),
(172, 172, '0.17'),
(173, 173, '4.14'),
(174, 174, '0.98'),
(175, 175, '3.46'),
(176, 176, '3.95'),
(177, 177, '1.21'),
(178, 178, '3.36'),
(179, 179, '4.88'),
(180, 180, '4.73'),
(181, 181, '1.35'),
(182, 182, '3.60'),
(183, 183, '2.26'),
(184, 184, '2.95'),
(185, 185, '4.79'),
(186, 186, '0.85'),
(187, 187, '1.12'),
(188, 188, '4.28'),
(189, 189, '2.87'),
(190, 190, '3.45'),
(191, 191, '2.02'),
(192, 192, '1.89'),
(193, 193, '0.85'),
(194, 194, '2.44'),
(195, 195, '1.78'),
(196, 196, '2.51'),
(197, 197, '2.93'),
(198, 198, '1.55'),
(199, 199, '1.19'),
(200, 200, '3.20'),
(201, 201, '3.59'),
(202, 202, '4.00'),
(203, 203, '0.73'),
(204, 204, '2.48'),
(205, 205, '0.33'),
(206, 206, '4.98'),
(207, 207, '1.72'),
(208, 208, '2.04'),
(209, 209, '1.38'),
(210, 210, '3.61'),
(211, 211, '0.24'),
(212, 212, '4.32'),
(213, 213, '1.54'),
(214, 214, '2.97'),
(215, 215, '2.00'),
(216, 216, '0.33'),
(217, 217, '4.53'),
(218, 218, '3.79'),
(219, 219, '2.87'),
(220, 220, '3.77'),
(221, 221, '1.72'),
(222, 222, '0.16'),
(223, 223, '4.06'),
(224, 224, '3.93'),
(225, 225, '2.05'),
(226, 226, '1.14'),
(227, 227, '1.54'),
(228, 228, '3.28'),
(229, 229, '3.28'),
(230, 230, '4.60'),
(231, 231, '1.50'),
(232, 232, '1.36'),
(233, 233, '2.62'),
(234, 234, '3.09'),
(235, 235, '1.92'),
(236, 236, '4.67'),
(237, 237, '0.56'),
(238, 238, '1.05'),
(239, 239, '4.57'),
(240, 240, '4.94'),
(241, 241, '1.62'),
(242, 242, '1.09'),
(243, 243, '0.90'),
(244, 244, '0.81'),
(245, 245, '4.93'),
(246, 246, '0.60'),
(247, 247, '0.35'),
(248, 248, '0.96'),
(249, 249, '3.24'),
(250, 250, '3.62'),
(251, 251, '4.08'),
(252, 252, '0.52'),
(253, 253, '2.23'),
(254, 254, '2.96'),
(255, 255, '1.30'),
(256, 256, '1.52'),
(257, 257, '1.66'),
(258, 258, '3.96'),
(259, 259, '4.00'),
(260, 260, '2.12'),
(261, 261, '1.12'),
(262, 262, '3.69'),
(263, 263, '0.92'),
(264, 264, '3.33'),
(265, 265, '4.99'),
(266, 266, '0.91'),
(267, 267, '4.47'),
(268, 268, '0.88'),
(269, 269, '1.67'),
(270, 270, '3.65'),
(271, 271, '2.05'),
(272, 272, '3.78'),
(273, 273, '1.34'),
(274, 274, '1.89'),
(275, 275, '1.75'),
(276, 276, '0.11'),
(277, 277, '0.17'),
(278, 278, '2.96'),
(279, 279, '4.34'),
(280, 280, '0.65'),
(281, 281, '1.98'),
(282, 282, '4.03'),
(283, 283, '1.34'),
(284, 284, '1.48'),
(285, 285, '2.77'),
(286, 286, '3.02'),
(287, 287, '3.34'),
(288, 288, '3.61'),
(289, 289, '3.59'),
(290, 290, '2.67'),
(291, 291, '0.90'),
(292, 292, '2.51'),
(293, 293, '3.20'),
(294, 294, '1.47'),
(295, 295, '2.67'),
(296, 296, '3.21'),
(297, 297, '3.16'),
(298, 298, '1.31'),
(299, 299, '0.20'),
(300, 300, '4.63'),
(301, 301, '2.82'),
(302, 302, '2.09'),
(303, 303, '1.76'),
(304, 304, '2.84'),
(305, 305, '0.87'),
(306, 306, '0.49'),
(307, 307, '3.87'),
(308, 308, '2.45'),
(309, 309, '3.54'),
(310, 310, '2.39'),
(311, 311, '0.57'),
(312, 312, '4.77'),
(313, 313, '2.62'),
(314, 314, '2.05'),
(315, 315, '1.27'),
(316, 316, '0.23'),
(317, 317, '3.91'),
(318, 318, '3.71'),
(319, 319, '2.62'),
(320, 320, '3.83'),
(321, 321, '3.97'),
(322, 322, '4.91'),
(323, 323, '2.92'),
(324, 324, '1.03'),
(325, 325, '3.74'),
(326, 326, '4.88'),
(327, 327, '0.01'),
(328, 328, '1.48'),
(329, 329, '1.53'),
(330, 330, '4.56'),
(331, 331, '0.58'),
(332, 332, '1.94'),
(333, 333, '3.72'),
(334, 334, '4.21'),
(335, 335, '0.77'),
(336, 336, '0.05'),
(337, 337, '0.87'),
(338, 338, '2.71'),
(339, 339, '2.06'),
(340, 340, '0.63'),
(341, 341, '3.42'),
(342, 342, '3.10'),
(343, 343, '2.71'),
(344, 344, '2.72'),
(345, 345, '0.82'),
(346, 346, '4.19'),
(347, 347, '2.52'),
(348, 348, '3.90'),
(349, 349, '4.85'),
(350, 350, '2.09'),
(351, 351, '4.13'),
(352, 352, '0.71'),
(353, 353, '2.01'),
(354, 354, '0.50'),
(355, 355, '1.62'),
(356, 356, '0.58'),
(357, 357, '3.01'),
(358, 358, '1.69'),
(359, 359, '0.77'),
(360, 360, '4.72'),
(361, 361, '3.26'),
(362, 362, '4.50'),
(363, 363, '2.18'),
(364, 364, '2.33'),
(365, 365, '3.57'),
(366, 366, '4.75'),
(367, 367, '0.77'),
(368, 368, '4.73'),
(369, 369, '0.90'),
(370, 370, '3.47'),
(371, 371, '2.06'),
(372, 372, '0.46'),
(373, 373, '3.09'),
(374, 374, '0.97'),
(375, 375, '1.26'),
(376, 376, '0.88'),
(377, 377, '4.05'),
(378, 378, '4.28'),
(379, 379, '3.54'),
(380, 380, '2.32'),
(381, 381, '1.54'),
(382, 382, '0.72'),
(383, 383, '2.41'),
(384, 384, '0.61'),
(385, 385, '0.29'),
(386, 386, '3.55'),
(387, 387, '2.21'),
(388, 388, '0.19'),
(389, 389, '0.00'),
(390, 390, '1.19'),
(391, 391, '1.66'),
(392, 392, '2.21'),
(393, 393, '4.76'),
(394, 394, '2.93'),
(395, 395, '2.56'),
(396, 396, '0.28'),
(397, 397, '3.59'),
(398, 398, '0.55'),
(399, 399, '1.60'),
(400, 400, '3.04'),
(401, 401, '0.71'),
(402, 402, '1.96'),
(403, 403, '0.08'),
(404, 404, '2.02'),
(405, 405, '2.64'),
(406, 406, '3.82'),
(407, 407, '3.62'),
(408, 408, '1.00'),
(409, 409, '1.40'),
(410, 410, '3.88'),
(411, 411, '1.10'),
(412, 412, '2.32'),
(413, 413, '2.73'),
(414, 414, '0.81'),
(415, 415, '4.38'),
(416, 416, '2.23'),
(417, 417, '0.83'),
(418, 418, '0.81'),
(419, 419, '4.13'),
(420, 420, '4.76'),
(421, 421, '2.97'),
(422, 422, '1.35'),
(423, 423, '0.16'),
(424, 424, '2.12'),
(425, 425, '4.32'),
(426, 426, '4.01'),
(427, 427, '0.67'),
(428, 428, '1.88'),
(429, 429, '0.50'),
(430, 430, '0.64'),
(431, 431, '3.54'),
(432, 432, '4.11'),
(433, 433, '1.86'),
(434, 434, '0.40'),
(435, 435, '2.51'),
(436, 436, '3.68'),
(437, 437, '3.95'),
(438, 438, '1.72'),
(439, 439, '2.33'),
(440, 440, '2.47'),
(441, 441, '4.96'),
(442, 442, '2.50'),
(443, 443, '4.52'),
(444, 444, '4.06'),
(445, 445, '3.70'),
(446, 446, '1.65'),
(447, 447, '3.26'),
(448, 448, '2.35'),
(449, 449, '4.36'),
(450, 450, '0.51'),
(451, 451, '2.03'),
(452, 452, '4.00'),
(453, 453, '4.64'),
(454, 454, '1.06'),
(455, 455, '0.62'),
(456, 456, '3.28'),
(457, 457, '4.39'),
(458, 458, '4.41'),
(459, 459, '4.24'),
(460, 460, '2.37'),
(461, 461, '3.33'),
(462, 462, '4.61'),
(463, 463, '4.24'),
(464, 464, '1.91'),
(465, 465, '0.97'),
(466, 466, '4.52'),
(467, 467, '0.12'),
(468, 468, '1.06'),
(469, 469, '2.95'),
(470, 470, '3.26'),
(471, 471, '1.97'),
(472, 472, '0.21'),
(473, 473, '1.39'),
(474, 474, '0.75'),
(475, 475, '0.90'),
(476, 476, '2.94'),
(477, 477, '4.38'),
(478, 478, '4.66'),
(479, 479, '0.36'),
(480, 480, '0.09'),
(481, 481, '4.59'),
(482, 482, '4.16'),
(483, 483, '4.99'),
(484, 484, '3.34'),
(485, 485, '1.70'),
(486, 486, '3.01'),
(487, 487, '3.12'),
(488, 488, '4.97'),
(489, 489, '4.62'),
(490, 490, '3.95'),
(491, 491, '3.25'),
(492, 492, '3.06'),
(493, 493, '0.53'),
(494, 494, '4.31'),
(495, 495, '3.43'),
(496, 496, '2.09'),
(497, 497, '3.63'),
(498, 498, '4.80'),
(499, 499, '1.87'),
(500, 500, '4.34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ratingId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
