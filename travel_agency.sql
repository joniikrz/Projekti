-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 10:15 PM
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
-- Database: `travel agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `ofertat`
--

CREATE TABLE `ofertat` (
  `Id` int(11) NOT NULL,
  `Emri` varchar(200) DEFAULT NULL,
  `Cmimi` varchar(200) DEFAULT NULL,
  `Koha` varchar(200) DEFAULT NULL,
  `Lokacioni` varchar(200) DEFAULT NULL,
  `Imgsrc` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ofertat`
--

INSERT INTO `ofertat` (`Id`, `Emri`, `Cmimi`, `Koha`, `Lokacioni`, `Imgsrc`) VALUES
(340, 'SHKUP', '50$/Per Person', '1 Dite', 'Nisja prej Prishtines', '\"../assets/shkup.jpg\"'),
(467, 'BUDAPESST', '250$/Per Person', '3 Dite', 'Nisja prej Prishtines', '\"../assets/budapesst.jpg\"'),
(557, 'MALTA', '290$/Per Person', '2 Dite', 'Nisja prej Tirane', '\"../assets/malta.jpg\"'),
(578, 'BERLIN', '583$/Per Person', '5 Dite', 'Nisja prej Prishtines', '\"../assets/berlin.jpeg\"'),
(639, 'LUXEMBURG', '450$/Per Person', '3 Dite', 'Nisja prej Tirane', '\"../assets/luxemburg.jpg\"'),
(735, 'BARCELONA', '400$/Per Person', '3 Dite', 'Nisja prej Prishtines', '\"../assets/barcelona.jpg\"'),
(831, 'ULQIN', '150$/Per Person', '3 Dite', 'Nisja prej Prishtines', '\"../assets/ulqin.jpg\"'),
(841, 'VIENNA', '400$/Per Person', '5 Dite', 'Nisja prej Prishtines', '\"../assets/wien.jpg\"'),
(872, 'ZAGREB', '259$/Per Person', '3 Dite', 'Nisja prej Prishtines', '\"../assets/zagreb.jpg\"'),
(900, 'SOFIE', '400$/Per Person', '3 Dite', 'Nisja prej Prishtines', '\"../assets/sofia.jpg\"'),
(940, 'SELANIK', '190$/Per Person', '2 Dite', 'Nisja prej Prishtines', '\"../assets/Selanik.jpg\"'),
(985, 'BRUKSEL', '350$/Per Person', '4 Dite', 'Nisja prej Prishtines', '\"../assets/bruksel.jpg\"');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `Id` int(11) NOT NULL,
  `Emri` varchar(200) DEFAULT NULL,
  `Cmimi` varchar(200) DEFAULT NULL,
  `Koha` varchar(200) DEFAULT NULL,
  `Lokacioni` varchar(200) DEFAULT NULL,
  `Imgsrc` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`Id`, `Emri`, `Cmimi`, `Koha`, `Lokacioni`, `Imgsrc`) VALUES
(103, 'PARIS-EIFFEL TOWER', '239$/Per Person', '3 Dite', 'Nisja prej Prishtines', '\"../assets/paris.jpg\"'),
(301, 'Instanbul', '700$/Per Person', '7 Dite', 'Nisja prej Prishtines', '\"../assets/instanbul.jpg\"'),
(407, 'AMSTERDAM', '300$/Per Person', '2 Dite', 'Nisja prej Prishtines', '\"../assets/amsterdam.jpg\"'),
(419, 'COPENHAGEN', '400$/Per Person', '4 Dite', 'Nisja prej Prishtines', '\"../assets/copennhagen.jpg\"'),
(573, 'MILAN', '559$/Per Person', '5 Dite', 'Nisja prej Prishtines', '\"../assets/milan.jpg\"'),
(604, 'BUDAPEST', '630$/Per Person', '6 Dite', 'Nisja prej Prishtines', '\"../assets/budapest.jpg\"'),
(609, 'PRAGUE', '239$/Per Person', '3 Dite', 'Nisja prej Tirane', '\"../assets/prague.png\"'),
(723, 'NEW YORK', '449$/Per Person', '4 Dite', 'Nisja prej Tirane', '\"../assets/newyork.jpg\"'),
(724, 'SWISS ALPS', '700$/Per Person', '3 Dite', 'Nisja prej Kukesit', '\"../assets/alpet.jpg\"'),
(754, 'LONDON', '659$/Per Person', '3 Dite', 'Nisja prej Tirane', '\"../assets/london.jpg\"'),
(868, 'ROME', '350$/Per Person', '3 Dite', 'Nisja prej Prishtines', '\"../assets/roma.jpg\"'),
(881, 'MADRID', '680$/Per Person', '4 Dite', 'Nisja prej Tirane', '\"../assets/madrid.jpg\"');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id_User` int(11) NOT NULL,
  `Emri` varchar(250) DEFAULT NULL,
  `Mbiemri` varchar(250) DEFAULT NULL,
  `Ditelindja` varchar(250) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Passi` varchar(250) DEFAULT NULL,
  `Role` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id_User`, `Emri`, `Mbiemri`, `Ditelindja`, `Email`, `Passi`, `Role`) VALUES
(1, 'Qendrim', 'Ademi', 'Ademi', 'qendrimademi893@gmail.com', 'Real123!', 'admin'),
(2, 'Qendrim', 'Ademi', '2004-05-02', 'qa67567@ubt-uni.net', 'Real123!', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ofertat`
--
ALTER TABLE `ofertat`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ofertat`
--
ALTER TABLE `ofertat`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=986;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=882;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
