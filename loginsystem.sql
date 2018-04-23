-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 08:57 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `user_id` int(11) NOT NULL,
  `disease` varchar(256) NOT NULL,
  `symptoms` varchar(256) DEFAULT NULL,
  `username` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`user_id`, `disease`, `symptoms`, `username`) VALUES
(1, 'a', 'a ', 'aa'),
(2, 'headache', 'fever ', 'thapab1'),
(17, 'headache', ' I have fever', 'sagun');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_number` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_number`, `user_uid`, `user_pwd`) VALUES
(1, 'Bikash', 'Thapa', '318-267-2833', 'thapab1', '$2y$10$/rzPheUnORBud8aWeQs0xeZ4joAhSTb1JWFZdXFU9NnMshZ.gV3je'),
(9, 'Sanjiv', 'karki', '318-381-4187', 'karkis1', '$2y$10$Lsovs25Jqflz7t217NhP9eC12l283e5D9UNlKZzP6eQZc7sL.OO0q'),
(11, 'Abhash', 'Jha', '123-456-7892', 'jhaa', '$2y$10$4WjtIqJmGLF6VfglPegYquRHUwvdMA8Gbsk1pd262R3O643vCYDt6'),
(12, 'aaa', 'sss', '234-567-8909', 'admin', '$2y$10$i8OKYt8PegwKcZQADpt9GOu./hI072CZUnIj9McW15VCtRaqsrmyy'),
(13, 'gg', 'gg', '123-456-7892', 'gg', '$2y$10$OEcQDP/fIxjbaA6LfvABeeldW8SE3qlfhV8J2hai4SR8dl8QgA.JK'),
(14, 'aa', 'aa', '123-456-7892', 'aa', '$2y$10$daU.fE0Q1V8yEHP.BONmvOhepiNXfaXjygqzTvhoJE4yKFGaSbgCa'),
(15, 'Bikash', 'Thapa', '318-267-2833', 'bikash1', '$2y$10$hbMP14tgyF3Kwp8Y/qvHGeAQtb9DNIb/pP0A44N0D1xbludaTSQh6'),
(16, 'ss', 'ss', '318-267-2831', 'ss', '$2y$10$uKJKBDEsRRFLhTl0H.Nsme.xdQ8/KjF76Uk3Mrx.YWUTLX6Ei09QW'),
(17, 'Sagun', 'Maharjan', '617-233-4076', 'sagun', '$2y$10$xb0UwQVf1qEoVW1kTd0w5uUHKvnibmK/fnLtFhmRlEdYU69QT.sze');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
