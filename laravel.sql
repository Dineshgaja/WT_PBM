-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 01:36 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`name`, `adminid`, `password`) VALUES
('Vidya', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eid`, `title`, `description`, `created_at`, `updated_at`) VALUES
('E01', 'IEEE WORKSHOP', 'Workshop on Cyber Security', '2019-10-27 18:30:00', '2019-10-27 18:30:00'),
('E2', 'CSI Workshop', 'Workshop on android app development', '2019-10-27 18:30:00', '2019-10-27 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `fid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idno` int(11) NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`fid`, `name`, `idno`, `department`, `email`, `phno`) VALUES
('F101', 'Rajesh ', 1234, 'CSE', 'Rajesh@gmail.com', 2147483647),
('F102', 'Shankar', 2345, 'CSE', 'shankar@gmail.com', 2147483647),
('F103', 'Anand', 5532, 'CSE', 'anand@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_bodies`
--

CREATE TABLE `faculty_bodies` (
  `fid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idno` int(11) NOT NULL,
  `phno` int(20) NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodyname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodyid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ispaid` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '''NO''',
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculty_bodies`
--

INSERT INTO `faculty_bodies` (`fid`, `name`, `idno`, `phno`, `email`, `bodyname`, `bodyid`, `ispaid`, `updated_at`, `created_at`) VALUES
('F101', 'Rajesh', 1234, 753952141, 'Rajesh@gmail.com', 'CSI', 'CSI1234', 'YES', '2019-11-02', '2019-11-02'),
('F102', 'Shankar', 2345, 852456951, 'shankar@gmail.com', 'CSI', 'CSI85234', 'YES', '2019-11-02', '2019-11-02'),
('F103', 'Anand', 5532, 852456741, 'anand@gmail.com', 'IEEE', 'IEEE12345', 'YES', '2019-11-02', '2019-11-02'),
('F102', 'Shankar', 2345, 852456741, 'shankar@gmail.com', 'IEEE', 'IEEE2345', 'YES', '2019-11-02', '2019-11-02'),
('F101', 'Rajesh', 1234, 74528524, 'Rajesh@gmail.com', 'IEEE', 'IEEE951', 'YES', '2019-11-02', '2019-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_10_25_075101_create_students_table', 1),
(2, '2019_10_25_080207_create_faculties_table', 1),
(3, '2019_10_25_080644_create_faculty_bodies_table', 1),
(4, '2019_10_25_081225_create_student_bodies_table', 1),
(5, '2019_10_25_155458_create_registations_table', 1),
(6, '2019_10_25_155644_create_admins_table', 1),
(7, '2019_10_25_155741_create_events_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registations`
--

CREATE TABLE `registations` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` int(13) NOT NULL,
  `bname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ispaid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registations`
--

INSERT INTO `registations` (`id`, `type`, `name`, `idno`, `phno`, `bname`, `bid`, `ispaid`, `updated_at`, `created_at`) VALUES
('S102', 'student', 'Dinesh', '7248', 889277491, 'IEEE', '123sd', 'NO', '2019-10-31', '2019-10-31'),
('F103', 'faculty', 'Anand', '5532', 753952855, 'CSI', '74185CSI', 'NO', '2019-11-01', '2019-11-01'),
('S101', 'student', 'Akshay Sadhu', '7271', 753951452, 'IEEE', '85245674IEEE', 'NO', '2019-11-01', '2019-11-01'),
('F102', 'faculty', 'Shankar', '2345', 757539525, 'IEEE', 'IEEE789524', 'NO', '2019-11-01', '2019-11-01'),
('S103', 'student', 'Ankith', '7227', 852752952, 'IEEE', 'IEEE85245', 'NO', '2019-11-01', '2019-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idno` int(11) NOT NULL,
  `USN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` int(13) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `name`, `idno`, `USN`, `phno`, `email`) VALUES
('S101', 'Akshay Sadhu', 7271, '1BY16CS007', 974562133, 'minisadhu@gmail.com'),
('S102', 'Dinesh', 7248, '1BY16CS028', 889477491, 'dinesh.gaja9870@gmail.com'),
('S103', 'Ankith', 7227, '1BY16CS011', 903254679, 'ankithmd@gmail.com'),
('S104', 'Nithish B', 7217, '1BY16CS053', 867914523, 'nithish@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_bodies`
--

CREATE TABLE `student_bodies` (
  `sid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idno` int(11) NOT NULL,
  `phno` int(20) NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodyname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodyid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ispaid` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '''NO''',
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_bodies`
--

INSERT INTO `student_bodies` (`sid`, `name`, `idno`, `phno`, `email`, `bodyname`, `bodyid`, `ispaid`, `updated_at`, `created_at`) VALUES
('S102', 'Dinesh', 7248, 889247749, 'dinesh.gaja9870@gmai', 'IEEE', '1234IEEE', 'NO', '2019-11-02', '2019-11-02'),
('S103', 'Ankith', 7227, 952175363, 'ankithmd@gmail.com', 'CSI', 'CSI85245', 'NO', '2019-11-02', '2019-11-02'),
('S104', 'Nithish B', 7217, 852753951, 'nithish@gmail.com', 'CSI', 'CSI85245675', 'YES', '2019-11-02', '2019-11-02'),
('S101', 'Akshay Sadhu', 7271, 75395186, 'minisadhu@gmail.com', 'IEEE', 'IEEE852', 'NO', '2019-11-02', '2019-11-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`idno`),
  ADD UNIQUE KEY `faculties_fid_unique` (`fid`),
  ADD UNIQUE KEY `fid` (`fid`);

--
-- Indexes for table `faculty_bodies`
--
ALTER TABLE `faculty_bodies`
  ADD UNIQUE KEY `faculty_bodies_bodyid_unique` (`bodyid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registations`
--
ALTER TABLE `registations`
  ADD UNIQUE KEY `bid` (`bid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `students_sid_unique` (`sid`),
  ADD UNIQUE KEY `students_usn_unique` (`USN`);

--
-- Indexes for table `student_bodies`
--
ALTER TABLE `student_bodies`
  ADD UNIQUE KEY `student_bodies_bodyid_unique` (`bodyid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
