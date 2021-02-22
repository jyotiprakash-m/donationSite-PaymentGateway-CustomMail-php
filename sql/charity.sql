-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 11:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `order_id`, `payment_id`, `name`, `email`, `contactno`, `city`, `pin`, `status`, `amount`) VALUES
(1, 'order_GdWKGs9O9ZQj9X', 'pay_GdWKRxnVoFTXzN', 'Sankarsan Mohanta', 'sankarsanmohanta56@gmail.com', '789465122', 'Baripada', '794561', 'Success', 45),
(2, 'order_GdfQKPflqpsPsR', 'pay_GdfR1MoMZ8MExh', 'Sima rai', 'teachmeonline365@gmail.com', '8658915594', 'Cuttack', '785049', 'Success', 50),
(3, 'order_GdiHvRmKvBYgdy', 'pay_GdiIG4DxbS7iFw', 'Ankit', 'gunduchaini100@gmail.com', '9876543210', 'Sambalpur', '768006', 'Success', 45),
(4, 'order_GdiVarowBcVL4H', 'pay_GdisfsAqpM8mvg', 'Jyotiprakash Mohanta', 'teachmeonline365@gmail.com', '7898208016', 'Baripada', '757081', 'Success', 5),
(5, 'order_Gdjeha54a8QEeo', 'pay_GdjermbJs9ttew', 'Jp Mohanta', 'jyotiprakashmohanta32@gmail.com', '7978207016', 'Cuttack', '785165', 'Success', 50);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `mob`, `message`) VALUES
(1, 'Jyoti Prakash Mohanta', 'jpmohanta32@gmail.com', '7978206571', 'I am very happy with your service!'),
(2, 'Jyoti Prakash Mohanta', 'teachmeonline365@gmail.com', '7978208016', 'Help me'),
(3, 'Jyoti Prakash Mohanta', 'teachmeonline365@gmail.com', '7978208016', 'Help me'),
(4, 'Jyoti Prakash Mohanta', 'teachmeonline365@gmail.com', '7978208016', 'Help me'),
(5, 'Jay prakash Patra', 'jyotiprakashmohanta32@gmail.com', '7879205468', 'Very useful'),
(6, 'Jyoti prakash Mohanta', 'teachmeonline365@gmail.com', '7894563216', 'Nice work jyoti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
