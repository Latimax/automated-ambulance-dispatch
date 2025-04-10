-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2025 at 12:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adman`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulances`
--

CREATE TABLE `ambulances` (
  `id` int(11) NOT NULL,
  `school_area_id` int(11) NOT NULL,
  `plate_number` varchar(50) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ambulances`
--

INSERT INTO `ambulances` (`id`, `school_area_id`, `plate_number`, `availability`) VALUES
(1, 1, 'KNO001A', 1),
(2, 2, 'KNO002A', 1),
(3, 3, 'KNO003A', 1),
(4, 4, 'KNO004A', 1),
(5, 5, 'KNO005A', 1),
(6, 6, 'KNO006A', 1),
(7, 7, 'KNO007A', 1),
(8, 8, 'KNO008A', 1),
(9, 9, 'KNO009A', 1),
(10, 10, 'KNO010A', 1),
(11, 11, 'KNO011A', 1),
(12, 12, 'KNO012A', 1),
(13, 13, 'KNO013A', 1),
(14, 14, 'KNO014A', 1),
(15, 15, 'KNO015A', 1),
(16, 16, 'KNO016A', 0),
(17, 17, 'KNO017A', 1),
(18, 18, 'KNO018A', 1),
(19, 19, 'KNO019A', 1),
(20, 20, 'KNO020A', 1),
(21, 21, 'KNO021A', 1),
(22, 22, 'KNO022A', 1),
(23, 23, 'KNO023A', 1),
(24, 24, 'KNO024A', 1),
(25, 25, 'KNO025A', 1),
(26, 26, 'KNO026A', 1),
(27, 27, 'KNO027A', 1),
(28, 28, 'KNO028A', 1),
(29, 29, 'KNO029A', 1),
(30, 30, 'KNO030A', 1),
(31, 31, 'KNO031A', 1),
(32, 32, 'KNO032A', 1),
(33, 33, 'KNO033A', 1),
(34, 34, 'KNO034A', 1),
(35, 35, 'KNO035A', 1),
(36, 36, 'KNO036A', 1),
(37, 37, 'KNO037A', 1),
(38, 38, 'KNO038A', 1),
(39, 39, 'KNO039A', 1),
(40, 40, 'KNO040A', 1),
(41, 41, 'KNO041A', 1),
(42, 42, 'KNO042A', 1),
(43, 43, 'KNO043A', 1),
(44, 44, 'KNO044A', 1),
(45, 1, 'KNO001B', 1),
(46, 2, 'KNO002B', 1),
(47, 3, 'KNO003B', 1),
(48, 4, 'KNO004B', 1),
(49, 5, 'KNO005B', 1),
(50, 6, 'KNO006B', 1),
(51, 7, 'KNO007B', 1),
(52, 8, 'KNO008B', 1),
(53, 9, 'KNO009B', 1),
(54, 10, 'KNO010B', 1),
(55, 11, 'KNO011B', 1),
(56, 12, 'KNO012B', 1),
(57, 13, 'KNO013B', 1),
(58, 14, 'KNO014B', 1),
(59, 15, 'KNO015B', 1),
(60, 16, 'KNO016B', 1),
(61, 17, 'KNO017B', 1),
(62, 18, 'KNO018B', 1),
(63, 19, 'KNO019B', 1),
(64, 20, 'KNO020B', 1),
(65, 21, 'KNO021B', 1),
(66, 22, 'KNO022B', 1),
(67, 23, 'KNO023B', 1),
(68, 24, 'KNO024B', 1),
(69, 25, 'KNO025B', 1),
(70, 26, 'KNO026B', 1),
(71, 27, 'KNO027B', 1),
(72, 28, 'KNO028B', 1),
(73, 29, 'KNO029B', 1),
(74, 30, 'KNO030B', 1),
(75, 31, 'KNO031B', 1),
(76, 32, 'KNO032B', 1),
(77, 33, 'KNO033B', 1),
(78, 34, 'KNO034B', 1),
(79, 35, 'KNO035B', 1),
(80, 36, 'KNO036B', 1),
(81, 37, 'KNO037B', 1),
(82, 38, 'KNO038B', 1),
(83, 39, 'KNO039B', 1),
(84, 40, 'KNO040B', 1),
(85, 41, 'KNO041B', 1),
(86, 42, 'KNO042B', 1),
(87, 43, 'KNO043B', 1),
(88, 44, 'KNO044B', 1),
(89, 1, 'KNO001C', 1),
(90, 2, 'KNO002C', 1),
(91, 3, 'KNO003C', 1),
(92, 4, 'KNO004C', 1),
(93, 5, 'KNO005C', 1),
(94, 6, 'KNO006C', 1),
(95, 7, 'KNO007C', 1),
(96, 8, 'KNO008C', 1),
(97, 9, 'KNO009C', 1),
(98, 10, 'KNO010C', 1),
(99, 11, 'KNO011C', 1),
(100, 12, 'KNO012C', 1),
(101, 13, 'KNO013C', 1),
(102, 14, 'KNO014C', 1),
(103, 15, 'KNO015C', 1),
(104, 16, 'KNO016C', 1),
(105, 17, 'KNO017C', 1),
(106, 18, 'KNO018C', 1),
(107, 19, 'KNO019C', 1),
(108, 20, 'KNO020C', 1),
(109, 21, 'KNO021C', 1),
(110, 22, 'KNO022C', 1),
(111, 23, 'KNO023C', 1),
(112, 24, 'KNO024C', 1),
(113, 25, 'KNO025C', 1),
(114, 26, 'KNO026C', 1),
(115, 27, 'KNO027C', 1),
(116, 28, 'KNO028C', 1),
(117, 29, 'KNO029C', 1),
(118, 30, 'KNO030C', 1),
(119, 31, 'KNO031C', 1),
(120, 32, 'KNO032C', 1),
(121, 33, 'KNO033C', 1),
(122, 34, 'KNO034C', 1),
(123, 35, 'KNO035C', 1),
(124, 36, 'KNO036C', 1),
(125, 37, 'KNO037C', 1),
(126, 38, 'KNO038C', 1),
(127, 39, 'KNO039C', 1),
(128, 40, 'KNO040C', 1),
(129, 41, 'KNO041C', 1),
(130, 42, 'KNO042C', 1),
(131, 43, 'KNO043C', 1),
(132, 44, 'KNO044C', 1),
(133, 45, 'KNO045D', 1),
(134, 46, 'KNO046D', 1),
(135, 47, 'KNO047D', 1),
(136, 48, 'KNO048D', 0),
(137, 49, 'KNO049D', 1),
(138, 50, 'KNO050D', 1),
(139, 51, 'KNO051D', 1),
(140, 52, 'KNO052D', 1),
(141, 53, 'KNO053D', 1),
(142, 54, 'KNO054D', 1),
(143, 55, 'KNO055D', 1),
(144, 56, 'KNO056D', 1),
(145, 57, 'KNO057D', 1),
(146, 58, 'KNO058D', 1),
(147, 59, 'KNO059D', 1),
(148, 60, 'KNO060D', 1),
(149, 61, 'KNO061D', 1),
(150, 62, 'KNO062D', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dispatchers`
--

CREATE TABLE `dispatchers` (
  `id` int(11) NOT NULL,
  `ambulance_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dispatchers`
--

INSERT INTO `dispatchers` (`id`, `ambulance_id`, `name`, `phone_number`) VALUES
(1, 92, 'Abdullateef Shaibu', '09063883519');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `caller_name` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `details` text NOT NULL,
  `status` varchar(50) DEFAULT 'Pending',
  `school_area_id` int(11) NOT NULL,
  `ambulance_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `done` tinyint(1) DEFAULT 0,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `caller_name`, `phone_number`, `details`, `status`, `school_area_id`, `ambulance_id`, `created_at`, `done`, `address`) VALUES
(1, 'Lukman', '08066093164', 'ssdv d', 'Done', 38, 38, '2024-07-24 13:26:26', 1, NULL),
(2, 'Lukman', '44434', 'ddssdsd', 'Done', 38, 82, '2024-07-24 13:26:39', 1, NULL),
(3, 'Wada', '343443', 'errere', 'Done', 38, 126, '2024-07-24 13:26:51', 1, NULL),
(4, 'Lukman', '44343', 'rererrere', 'Done', 38, 38, '2024-07-24 13:27:05', 1, NULL),
(5, 'Latimax', '09063883519', 'dss', 'Done', 13, 13, '2025-03-19 17:28:40', 1, '285 Fulton St, New York, NY 10007, USA'),
(6, 'Latimax', '09063883519', 'ds', 'Done', 61, 149, '2025-03-19 21:48:11', 1, '138 Willoughby Street, Brooklyn, NY 11201'),
(8, 'Tolafobe', '08033992727', 'ed', 'Assigned', 16, 16, '2025-03-19 23:03:59', 0, 'Worldwide');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'admin'),
(4, 'ambulance'),
(3, 'caller'),
(2, 'dispatcher');

-- --------------------------------------------------------

--
-- Table structure for table `school_areas`
--

CREATE TABLE `school_areas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_areas`
--

INSERT INTO `school_areas` (`id`, `name`) VALUES
(1, 'Faculty of Computer Science and Information Technology (FCSIT)'),
(2, 'Faculty of Engineering'),
(3, 'Faculty of Earth and Environmental Sciences'),
(4, 'Faculty of Physical Sciences'),
(5, 'Faculty of Communication'),
(6, 'School of Postgraduate Studies (SPGS)'),
(7, 'BUK New Site Library'),
(8, 'BUK New Site Mosque'),
(9, 'New Site Multipurpose Hall'),
(10, 'Students Affairs Division'),
(11, 'Senate Building'),
(12, 'BUK Stadium'),
(13, 'ICT Center'),
(14, 'CBT Center'),
(15, 'University Health Services (New Site Clinic)'),
(16, 'Directorate of Examinations, Admissions, and Records (DEAR)'),
(17, 'Central Laboratory'),
(18, 'Microfinance Bank (BUK MFB)'),
(19, 'New Site Market'),
(20, 'Staff Quarters (New Site)'),
(21, 'New Site Cafeteria'),
(22, 'Female Hostel - Aisha Hall'),
(23, 'Female Hostel - Mariya Hall'),
(24, 'Female Hostel - Queen Amina Hall'),
(25, 'Male Hostel - Danfodiyo Hall'),
(26, 'Male Hostel - Ramat Hall'),
(27, 'Engineering Workshop'),
(28, 'Communication Studio'),
(29, 'Security Division (New Site)'),
(30, 'Entrepreneurship Development Center (EDC)'),
(31, 'Centre for Renewable Energy Research'),
(32, 'Faculty of Arts and Islamic Studies'),
(33, 'Faculty of Education'),
(34, 'Faculty of Law'),
(35, 'Faculty of Management Sciences'),
(36, 'Faculty of Social Sciences'),
(37, 'BUK Old Site Library'),
(38, 'Old Site Mosque'),
(39, 'Old Site Clinic'),
(40, 'Students Affairs Office (Old Site)'),
(41, 'Senate Chamber (Old Site)'),
(42, 'Old Site Market'),
(43, 'Staff Quarters (Old Site)'),
(44, 'Old Site Cafeteria'),
(45, 'Male Hostel - Aminu Kano Hall'),
(46, 'Male Hostel - Abdullahi Bayero Hall'),
(47, 'Female Hostel - Lady Kwankwaso Hall'),
(48, 'Female Hostel - Nana Asmau Hall'),
(49, 'Sport Complex (Old Site)'),
(50, 'Open Theater (Old Site)'),
(51, 'Counseling and Human Development Center'),
(52, 'BUK Staff School (Primary and Secondary)'),
(53, 'Kofar Famfo Gate (New Site Main Entrance)'),
(54, 'Kofar Nasarawa Gate (Old Site Main Entrance)'),
(55, 'BUK Road'),
(56, 'Gidan Murtala'),
(57, 'Sabon Gari Market'),
(58, 'Yankaba Market'),
(59, 'Wudil Road'),
(60, 'Zaria Road'),
(61, 'BUK Bus Park'),
(62, 'Rimin Gado Park');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$N1Pzkd790vq2hoepXrUXKepO9ak6P8DkcvAlLZjauw1lRhg/AkshK', 1, '2024-07-24 13:33:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambulances`
--
ALTER TABLE `ambulances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_area_id` (`school_area_id`);

--
-- Indexes for table `dispatchers`
--
ALTER TABLE `dispatchers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ambulance_id` (`ambulance_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_area_id` (`school_area_id`),
  ADD KEY `ambulance_id` (`ambulance_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `school_areas`
--
ALTER TABLE `school_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambulances`
--
ALTER TABLE `ambulances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT for table `dispatchers`
--
ALTER TABLE `dispatchers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `school_areas`
--
ALTER TABLE `school_areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ambulances`
--
ALTER TABLE `ambulances`
  ADD CONSTRAINT `ambulances_ibfk_1` FOREIGN KEY (`school_area_id`) REFERENCES `school_areas` (`id`);

--
-- Constraints for table `dispatchers`
--
ALTER TABLE `dispatchers`
  ADD CONSTRAINT `dispatchers_ibfk_1` FOREIGN KEY (`ambulance_id`) REFERENCES `ambulances` (`id`);

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`school_area_id`) REFERENCES `school_areas` (`id`),
  ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`ambulance_id`) REFERENCES `ambulances` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
