-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 02:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `gebruiker`
--

CREATE TABLE `gebruiker` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `wachtwoord` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gebruiker`
--

INSERT INTO `gebruiker` (`id`, `rol`, `wachtwoord`) VALUES
(1, 'docent', '$2y$10$6i5ISN/p7LL2x55CbrESSOCoBnDeFCCjL1V9JFyfgKU2TZ4RiGB46'),
(2, 'administratie', '$2y$10$ppb9KtYfFOYpPPOfu5FwBeJpHjfAFUI9eOtUHmeE0pgD.et7eeUPS\n$2y$10$2DEVFdgajYXUyOVKAg7J7uJjg.VX.tlt/mCWMl6FfA2I/QdQfezCO$2y$10$6Y0u8EuHcDdUesX5zRdQ0e');

-- --------------------------------------------------------

--
-- Table structure for table `resultaat`
--

CREATE TABLE `resultaat` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `vak_id` int(11) NOT NULL,
  `resultaat` decimal(2,1) DEFAULT NULL,
  `datum` datetime NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `changedate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resultaat`
--

INSERT INTO `resultaat` (`id`, `student_id`, `vak_id`, `resultaat`, `datum`, `createdate`, `changedate`) VALUES
(1, 1, 1, '4.5', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(2, 1, 1, '6.2', '2024-01-25 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(3, 1, 2, '8.5', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(4, 1, 3, '6.5', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(5, 1, 4, '8.3', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(6, 2, 1, '6.5', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(7, 2, 1, '4.2', '2024-01-25 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(8, 2, 2, '6.5', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(9, 2, 3, '6.5', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(10, 2, 4, '6.4', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(11, 3, 1, '5.4', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(12, 3, 1, '6.3', '2024-01-25 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(13, 3, 2, '7.3', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(14, 3, 3, '5.6', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(15, 3, 4, '7.2', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(16, 4, 3, '6.5', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(17, 4, 4, '8.3', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(18, 4, 6, '9.3', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(19, 5, 3, '4.5', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(20, 5, 4, '3.3', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(21, 5, 6, '6.3', '2024-01-25 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(22, 6, 1, '5.5', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(23, 6, 1, '6.6', '2024-01-25 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(24, 6, 2, '7.7', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(25, 6, 3, '7.6', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(26, 6, 4, '6.7', '2024-01-20 00:00:00', '2024-01-30 09:57:30', '2024-01-30 09:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(15) NOT NULL,
  `tussenvoegsel` varchar(10) DEFAULT NULL,
  `achternaam` varchar(25) NOT NULL,
  `straat` varchar(35) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `woonplaats` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `klas` varchar(10) NOT NULL,
  `geboortedatum` date DEFAULT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `changedate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `straat`, `postcode`, `woonplaats`, `email`, `klas`, `geboortedatum`, `createdate`, `changedate`) VALUES
(1, 'Dylan', NULL, 'Huiser', 'Middenweg 11', '1088VV', 'Amsterdam', 'dhuisden@roc.nl', 'T4I2AD', '2002-01-01', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(2, 'Nitin', NULL, 'Bosman', 'Leidseweg 22', '9900BB', 'Amsterdam', 'nbosman@roc.nl', 'T4I2AD', '2002-03-31', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(3, 'Joseph', NULL, 'Demirel', 'Leidseplein 33', '9988BB', 'Utrecht', 'Josdem@hotmail.com', 'T4I2AD', '2002-07-03', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(4, 'Franco', 'van der', 'Gouwe', 'Kruislaan 444', '3300VV', 'Utrecht', 'frantas@wanadoo.nl', 'T4I2BD', '2000-07-15', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(5, 'Akash', NULL, 'Kabli', 'Galileiplanstoen 333', '2299NN', 'Amstelveen', 'aka@hetnet.nl', 'T4I2BD', '2002-10-15', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(6, 'Tamara', 'ter', 'Schuur', 'Mozartstraat 22', '3388XX', 'Amsterdam', 'tamka@hotmail.com', 'T4I2AD', '2002-10-30', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(7, 'Arnold', NULL, 'Shaw', 'Kruislaan 1', '9876FF', 'Rotterdam', 'asha@roc.nl', 'T4I2AD', '2001-10-06', '2024-01-30 09:57:30', '2024-01-30 09:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `vak`
--

CREATE TABLE `vak` (
  `id` int(11) NOT NULL,
  `afkorting` varchar(45) NOT NULL,
  `naam` varchar(45) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `changedate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vak`
--

INSERT INTO `vak` (`id`, `afkorting`, `naam`, `createdate`, `changedate`) VALUES
(1, 'PGB', 'Programmeren Backend', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(2, 'DAB', 'Databases', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(3, 'PRO', 'Project', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(4, 'BUR', 'Burgerschap', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(5, 'WDM', 'Webdesign', '2024-01-30 09:57:30', '2024-01-30 09:57:30'),
(6, 'GBO', 'Gebruikersondersteuning', '2024-01-30 09:57:30', '2024-01-30 09:57:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resultaat`
--
ALTER TABLE `resultaat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vak`
--
ALTER TABLE `vak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resultaat`
--
ALTER TABLE `resultaat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vak`
--
ALTER TABLE `vak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
