-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 12:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `mid_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `sex` varchar(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `house_number` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `purok` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `health_status` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `voter_status` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `tel_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `first_name`, `mid_name`, `last_name`, `suffix`, `sex`, `date_of_birth`, `house_number`, `street`, `purok`, `occupation`, `citizenship`, `health_status`, `civil_status`, `voter_status`, `phone_number`, `tel_number`, `email`, `img_url`) VALUES
(1, 'Juan', 'Manuel', 'Marquez', 'Jr.', 'Male', '1994-06-08', '505', '3rd', 'Purok 9', 'Nurse', 'Filipino', 'No Complications', 'Single', 'Registered', '09123456789', '552-1010', 'juan@gmail.com', '1624826277389_900_675_10__20210126113639.png'),
(2, 'Astro', 'Manuel', 'Marquez', '', 'Male', '1995-02-28', '505', '3rd', 'Purok 10', 'Doctor', 'Filipino', 'No Complications', 'Married', 'Unregistered', '09123456789', '', 'astro@gmail.com', '1624826835657_cdaeaef04cf5e586b1276c97f0a6d24787d365b5r1-749-749v2_uhq.jpg'),
(3, 'Claire', 'Randall', 'Fraser', '', 'Female', '1964-09-09', '505', '2nd', 'Purok 2', 'Nurse', 'Filipino', 'No Complications', 'Married', 'Registered', '09123456789', '', 'claire@gmail.com', '1624826544998_1defd3351de846612cab79a4108239eeb0-02-sam-heughan-caitriona-balfe.rsquare.w700.jpg'),
(4, 'Brianna', 'Randall', 'Fraser', '', 'Female', '1998-08-14', '505', '2nd', 'Purok 12', 'Nurse', 'Filipino', 'No Complications', 'Single', 'Unregistered', '09123456789', '', 'brianna@gmail.com', '1624828035879_1525892169.jpg'),
(5, 'Katrina', 'Glante', 'Dabalos', '', 'Female', '2016-06-28', '505', '2nd', 'Purok 8', 'Nurse', 'Filipino', 'No Complications', 'Single', 'Unregistered', '09123456789', '', 'kat@gmail.com', '1624826797152_E2rLEJ_VoAM15uW.jpg'),
(6, 'Sam', 'Milby', 'Heughan', '', 'Male', '1966-04-30', '505', '1st', 'Purok 7', 'Nurse', 'Filipino', 'No Complications', 'Married', 'Registered', '09123456789', '', 'sam@gmail.com', '1624827434641_man.jpg'),
(7, 'Emma', 'Duerre', 'Watson', '', 'Female', '1990-04-15', '505', '3rd', 'Purok 6', 'Nurse', 'Filipino', 'No Complications', 'Single', 'Registered', '09123456789', '', 'emma@gmail.com', '1624827543250_female.png'),
(8, 'Caitriona', 'Mary', 'Balfe', '', 'Female', '1979-09-19', '505', '1st', 'Purok 13', 'Nurse', 'Irish', 'No Complications', 'Married', 'Registered', '09123456789', '', 'cait@gmail.com', '1624827916278_woman.jpg'),
(9, 'Jamie', 'Mackenzie', 'Fraser', '', 'Male', '1985-11-13', '505', '2nd', 'Purok 7', 'Soldier', 'Scottish', 'No Complications', 'Widowed', 'Registered', '09123456789', '', 'jamie@gmail.com', '1624828148326_boy.jpg'),
(10, 'Alexander', 'Mackenzie', 'Fraser', '', 'Male', '1962-03-12', '505', '2nd', 'Purok 3', 'Soldier', 'Scottish', 'No Complications', 'Married', 'Registered', '09123456789', '', 'alex@gmail.com', '1624828265577_male.jpg'),
(11, 'Barbie', 'Boston', 'Choi', '', 'Female', '2010-10-28', '505', '3rd', 'Purok 4', 'Student', 'Filipino', 'No Complications', 'Single', 'Unregistered', '09123456789', '', 'barbie@gmail.com', '1624828408189_tumblr_oiuvvc64801vv5khzo2_400.jpg'),
(12, 'Shirley', 'Renato', 'Legaspi', '', 'Female', '1999-10-13', '505', '2nd', 'Purok 4', 'Teacher', 'Filipino', 'No Complications', 'Single', 'Registered', '09123456789', '', 'shirley@gmail.com', '1624828514401_female.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `role`) VALUES
(1, 'kbsherry', '123456', '', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
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
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
