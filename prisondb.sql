-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 07:07 AM
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
-- Database: `prisondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(11) NOT NULL,
  `Admin_uname` tinytext NOT NULL,
  `Admin_pwd` longtext NOT NULL,
  `First_name` varchar(25) NOT NULL,
  `Last_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Admin_uname`, `Admin_pwd`, `First_name`, `Last_name`) VALUES
(1, 'admin', 'password', 'Kartikeya', 'Rawat');

-- --------------------------------------------------------

--
-- Table structure for table `commits`
--

CREATE TABLE `commits` (
  `IPC` int(11) NOT NULL,
  `Prisoner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commits`
--

INSERT INTO `commits` (`IPC`, `Prisoner_id`) VALUES
(1, 18),
(1, 20),
(3, 18),
(300, 19),
(378, 19),
(378, 21);

-- --------------------------------------------------------

--
-- Table structure for table `crime`
--

CREATE TABLE `crime` (
  `IPC` int(11) NOT NULL,
  `Description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crime`
--

INSERT INTO `crime` (`IPC`, `Description`) VALUES
(1, 'Title and extent of operation of the Code.'),
(3, 'Punishment of offences committed beyond but which by law may be tried within India.'),
(191, 'Giving false evidence.'),
(300, 'Murder. When culpable homicide is not murder.'),
(378, 'Theft.'),
(415, 'Cheating.');

-- --------------------------------------------------------

--
-- Table structure for table `deleted_jailors`
--

CREATE TABLE `deleted_jailors` (
  `Jailor_id` int(11) NOT NULL,
  `Jailor_uname` tinytext NOT NULL,
  `Jailor_pwd` longtext NOT NULL,
  `First_name` varchar(25) NOT NULL,
  `Last_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deleted_jailors`
--

INSERT INTO `deleted_jailors` (`Jailor_id`, `Jailor_uname`, `Jailor_pwd`, `First_name`, `Last_name`) VALUES
(1, 'jailor1', 'jailor1', 'Steve', 'Quay'),
(2, 'jailor2', 'jailor2', 'Marcus', 'Quay'),
(4, 'jailor4', 'jailor4', 'Cory', 'Roy'),
(5, 'jailor5', 'jailor5', 'Rob', 'Cole'),
(8, 'jailor6', 'jailor6', 'Marcus', 'Brown'),
(9, 'jailor7', 'jailor7', 'Arun', 'Goyal'),
(11, 'jailor9', 'jailor9', 'Steve', 'James'),
(12, 'jailor10', 'jailor10', 'Ranjan', 'Malik'),
(13, 'jailor11', 'jailor11', 'Alok', 'Sharma'),
(14, 'jailor12', 'jailor12', 'Arjun', 'Gaur'),
(16, 'jailor14', 'jailor14', 'James', 'Miller');

-- --------------------------------------------------------

--
-- Table structure for table `jailor`
--

CREATE TABLE `jailor` (
  `Jailor_id` int(11) NOT NULL,
  `Jailor_uname` tinytext NOT NULL,
  `Jailor_pwd` longtext NOT NULL,
  `First_name` varchar(25) NOT NULL,
  `Last_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jailor`
--

INSERT INTO `jailor` (`Jailor_id`, `Jailor_uname`, `Jailor_pwd`, `First_name`, `Last_name`) VALUES
(1, 'jailor1', 'jailor1', 'Steve', 'Quay'),
(2, 'jailor2', 'jailor2', 'Marcus', 'Quay'),
(3, 'jailor3', 'jailor3', 'Jim', 'Smith'),
(4, 'jailor4', 'jailor4', 'Cory', 'Roy'),
(14, 'jailor12', 'jailor12', 'Arjun', 'Gaur'),
(15, 'jailor13', 'jailor13', 'Arjuna', 'Kaur'),
(16, 'jailor14', 'jailor14', 'James', 'Miller'),
(17, 'jailor15', 'jailor15', 'Ajay', 'Rathore');

-- --------------------------------------------------------

--
-- Table structure for table `jailor_phone`
--

CREATE TABLE `jailor_phone` (
  `Jailor_phone` varchar(10) NOT NULL,
  `Jailor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jailor_phone`
--

INSERT INTO `jailor_phone` (`Jailor_phone`, `Jailor_id`) VALUES
('8876171369', 1),
('6559892327', 2),
('3893906914', 3),
('7473154442', 4),
('8545738324', 14),
('6745738324', 15),
('9654784578', 16),
('9654784512', 17);

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `Officer_id` int(11) NOT NULL,
  `Officer_uname` tinytext NOT NULL,
  `Officer_pwd` longtext NOT NULL,
  `First_name` varchar(25) NOT NULL,
  `Last_name` varchar(25) NOT NULL,
  `Title` varchar(25) NOT NULL,
  `Date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`Officer_id`, `Officer_uname`, `Officer_pwd`, `First_name`, `Last_name`, `Title`, `Date_of_birth`) VALUES
(1, 'officer1', 'officer1', 'Shaun', 'Brown', 'Inspector', '1960-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `officer_phone`
--

CREATE TABLE `officer_phone` (
  `Officer_phone` varchar(10) NOT NULL,
  `Officer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officer_phone`
--

INSERT INTO `officer_phone` (`Officer_phone`, `Officer_id`) VALUES
('9988776655', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prisoner`
--

CREATE TABLE `prisoner` (
  `Prisoner_id` int(11) NOT NULL,
  `First_name` varchar(25) NOT NULL,
  `Last_name` varchar(25) NOT NULL,
  `Date_in` date NOT NULL,
  `Dob` date NOT NULL,
  `Height` int(3) NOT NULL,
  `Date_out` date NOT NULL,
  `Address` longtext NOT NULL,
  `Section_id` int(3) NOT NULL,
  `Status_inout` varchar(3) NOT NULL,
  `Budget` int(120) NOT NULL,
  `Behavior` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prisoner`
--

INSERT INTO `prisoner` (`Prisoner_id`, `First_name`, `Last_name`, `Date_in`, `Dob`, `Height`, `Date_out`, `Address`, `Section_id`, `Status_inout`, `Budget`, `Behavior`) VALUES
(18, 'Rahul', 'Sharma', '2023-04-13', '1998-07-16', 182, '2030-11-29', 'New Delhi, India', 222, 'OUT', 0, ''),
(19, 'Ajay', 'Singh', '2023-04-08', '2000-10-27', 178, '2023-11-24', 'Rajasthan, India', 222, 'in', 100, 'Good'),
(20, 'Alok', 'Verma', '2023-02-28', '1988-05-25', 170, '2028-07-22', 'Maharashtra, India', 222, 'in', 0, ''),
(21, 'Sanvi', 'Rathore', '2023-04-02', '2000-01-08', 160, '2024-11-20', 'Uttar Pradesh, India', 333, 'in', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `Section_id` int(3) NOT NULL,
  `Section_name` varchar(25) NOT NULL,
  `Jailor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`Section_id`, `Section_name`, `Jailor_id`) VALUES
(111, 'A', 17),
(222, 'B', 2),
(333, 'C', 3),
(444, 'D', 15);

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `Visitor_aadhaar` varchar(14) NOT NULL,
  `Date_visit` date NOT NULL,
  `Time_slot` varchar(25) NOT NULL,
  `Prisoner_id` int(11) NOT NULL,
  `Pass` varchar(120) NOT NULL,
  `User` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`Visitor_aadhaar`, `Date_visit`, `Time_slot`, `Prisoner_id`, `Pass`, `User`) VALUES
('6553 7823 1234', '2023-04-22', '2PM-3PM', 20, 'visitor3', 'visitor3'),
('4353 7823 8432', '2023-04-30', '2PM-3PM', 18, 'visitor1', 'visitor1'),
('6553 7823 8432', '2023-05-26', '6PM-7PM', 19, 'visitor2', 'visitor2');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `Aadhaar` varchar(14) NOT NULL,
  `First_name` varchar(25) NOT NULL,
  `Last_name` varchar(25) NOT NULL,
  `Prisoner_id` int(120) NOT NULL,
  `Pass` varchar(120) NOT NULL,
  `User` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`Aadhaar`, `First_name`, `Last_name`, `Prisoner_id`, `Pass`, `User`) VALUES
('4353 7823 8432', 'Ranjan', 'Sharma', 18, 'visitor1', 'visitor1'),
('6553 7823 1234', 'Shilpa', 'Verma', 20, 'visitor3', 'visitor3'),
('6553 7823 8432', 'Sanjana', 'Singh', 19, 'visitor2', 'visitor2');

-- --------------------------------------------------------

--
-- Table structure for table `visit_approval`
--

CREATE TABLE `visit_approval` (
  `sno` int(120) NOT NULL,
  `pid` int(120) NOT NULL,
  `vuname` varchar(120) NOT NULL,
  `status` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visit_approval`
--

INSERT INTO `visit_approval` (`sno`, `pid`, `vuname`, `status`) VALUES
(17, 19, 'visitor2', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `commits`
--
ALTER TABLE `commits`
  ADD PRIMARY KEY (`IPC`,`Prisoner_id`),
  ADD KEY `fk_2` (`Prisoner_id`);

--
-- Indexes for table `crime`
--
ALTER TABLE `crime`
  ADD PRIMARY KEY (`IPC`);

--
-- Indexes for table `deleted_jailors`
--
ALTER TABLE `deleted_jailors`
  ADD PRIMARY KEY (`Jailor_id`);

--
-- Indexes for table `jailor`
--
ALTER TABLE `jailor`
  ADD PRIMARY KEY (`Jailor_id`);

--
-- Indexes for table `jailor_phone`
--
ALTER TABLE `jailor_phone`
  ADD KEY `fk_7` (`Jailor_id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`Officer_id`);

--
-- Indexes for table `officer_phone`
--
ALTER TABLE `officer_phone`
  ADD KEY `fk_6` (`Officer_id`);

--
-- Indexes for table `prisoner`
--
ALTER TABLE `prisoner`
  ADD PRIMARY KEY (`Prisoner_id`),
  ADD KEY `fk_3` (`Section_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`Section_id`),
  ADD KEY `fk_4` (`Jailor_id`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD UNIQUE KEY `VISITOR_DUPL_INDEX` (`Date_visit`,`Time_slot`,`Visitor_aadhaar`),
  ADD UNIQUE KEY `PRISONER_DUPL_INDEX` (`Date_visit`,`Time_slot`,`Prisoner_id`),
  ADD UNIQUE KEY `PRISONER_ONE_DAY_LIMIT` (`Date_visit`,`Prisoner_id`),
  ADD UNIQUE KEY `VISITOR_ONE_DAY_LIMIT` (`Date_visit`,`Visitor_aadhaar`),
  ADD KEY `fk_prisoner` (`Prisoner_id`),
  ADD KEY `fk_visitor` (`Visitor_aadhaar`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`Aadhaar`);

--
-- Indexes for table `visit_approval`
--
ALTER TABLE `visit_approval`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jailor`
--
ALTER TABLE `jailor`
  MODIFY `Jailor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `Officer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prisoner`
--
ALTER TABLE `prisoner`
  MODIFY `Prisoner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `Section_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- AUTO_INCREMENT for table `visit_approval`
--
ALTER TABLE `visit_approval`
  MODIFY `sno` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commits`
--
ALTER TABLE `commits`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`IPC`) REFERENCES `crime` (`IPC`),
  ADD CONSTRAINT `fk_2` FOREIGN KEY (`Prisoner_id`) REFERENCES `prisoner` (`Prisoner_id`);

--
-- Constraints for table `jailor_phone`
--
ALTER TABLE `jailor_phone`
  ADD CONSTRAINT `fk_7` FOREIGN KEY (`Jailor_id`) REFERENCES `jailor` (`Jailor_id`) ON DELETE CASCADE;

--
-- Constraints for table `officer_phone`
--
ALTER TABLE `officer_phone`
  ADD CONSTRAINT `fk_6` FOREIGN KEY (`Officer_id`) REFERENCES `officer` (`Officer_id`);

--
-- Constraints for table `prisoner`
--
ALTER TABLE `prisoner`
  ADD CONSTRAINT `fk_3` FOREIGN KEY (`Section_id`) REFERENCES `section` (`Section_id`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `fk_4` FOREIGN KEY (`Jailor_id`) REFERENCES `jailor` (`Jailor_id`) ON DELETE CASCADE;

--
-- Constraints for table `visit`
--
ALTER TABLE `visit`
  ADD CONSTRAINT `fk_prisoner` FOREIGN KEY (`Prisoner_id`) REFERENCES `prisoner` (`Prisoner_id`),
  ADD CONSTRAINT `fk_visitor` FOREIGN KEY (`Visitor_aadhaar`) REFERENCES `visitor` (`Aadhaar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
