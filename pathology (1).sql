-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 01:47 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pathology`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `User_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Password` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User_id`, `Password`) VALUES
('code_bros', 0xb7c438cfff9e59ac500e0a6a640fc1c1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `D_id` int(3) NOT NULL,
  `Dname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Hospital_Name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doc_report`
--

CREATE TABLE `doc_report` (
  `Aadhar_id` int(12) NOT NULL,
  `date` date NOT NULL,
  `D_Id` int(3) NOT NULL,
  `User_Id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Test_Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `E_id` int(5) NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Role` enum('Manager','Sorter','Lab Worker') COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `Lab_id` int(10) NOT NULL,
  `Street_Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Pincode` int(9) NOT NULL,
  `Password` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`Lab_id`, `Street_Name`, `City`, `Pincode`, `Password`) VALUES
(125763251, 'Russel Chowk', 'Jabalpur', 482005, 0x7ab89f1c210de147e5c7103bdb78d726);

-- --------------------------------------------------------

--
-- Table structure for table `lab_emp`
--

CREATE TABLE `lab_emp` (
  `L_id` int(5) NOT NULL,
  `Lab_Id` int(10) NOT NULL,
  `hire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `M_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `Lab_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Aadhar_id` int(12) NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` int(10) NOT NULL,
  `AlterPhone` int(10) DEFAULT NULL,
  `Password` blob,
  `DOB` date NOT NULL,
  `D_id` int(3) NOT NULL,
  `Street` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Pincode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report_Number` int(20) NOT NULL,
  `Obtained_Value` decimal(9,4) NOT NULL,
  `date` date NOT NULL,
  `Lab_id` int(10) NOT NULL,
  `Test_Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report_to_patient`
--

CREATE TABLE `report_to_patient` (
  `Report_Number` int(20) NOT NULL,
  `date` date NOT NULL,
  `Aadhar_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sample_to_lab`
--

CREATE TABLE `sample_to_lab` (
  `User_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `Aadhar_id` int(12) NOT NULL,
  `Lab_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sorts_test`
--

CREATE TABLE `sorts_test` (
  `User_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Test_Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `Test_Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Min_Normal_Value` decimal(8,4) NOT NULL,
  `Max_Normal_Value` decimal(9,4) NOT NULL,
  `Lab_Id` int(10) DEFAULT NULL,
  `Test_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_sorter`
--

CREATE TABLE `test_sorter` (
  `User_Id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Password` blob,
  `E_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`D_id`);

--
-- Indexes for table `doc_report`
--
ALTER TABLE `doc_report`
  ADD PRIMARY KEY (`Aadhar_id`,`D_Id`,`User_Id`,`date`,`Test_Name`),
  ADD KEY `D_Id` (`D_Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`E_id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`Lab_id`);

--
-- Indexes for table `lab_emp`
--
ALTER TABLE `lab_emp`
  ADD PRIMARY KEY (`L_id`,`Lab_Id`),
  ADD KEY `Lab_Id` (`Lab_Id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`M_id`,`Lab_Id`),
  ADD KEY `Lab_Id` (`Lab_Id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Aadhar_id`),
  ADD KEY `D_id` (`D_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Report_Number`),
  ADD KEY `Lab_id` (`Lab_id`),
  ADD KEY `Test_Name` (`Test_Name`);

--
-- Indexes for table `report_to_patient`
--
ALTER TABLE `report_to_patient`
  ADD PRIMARY KEY (`Report_Number`,`Aadhar_id`),
  ADD KEY `Aadhar_id` (`Aadhar_id`);

--
-- Indexes for table `sample_to_lab`
--
ALTER TABLE `sample_to_lab`
  ADD PRIMARY KEY (`User_id`,`Aadhar_id`,`Lab_id`),
  ADD KEY `Aadhar_id` (`Aadhar_id`),
  ADD KEY `Lab_id` (`Lab_id`);

--
-- Indexes for table `sorts_test`
--
ALTER TABLE `sorts_test`
  ADD PRIMARY KEY (`User_id`,`Test_Name`),
  ADD KEY `Test_Name` (`Test_Name`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`Test_Name`),
  ADD KEY `Lab_Id` (`Lab_Id`);

--
-- Indexes for table `test_sorter`
--
ALTER TABLE `test_sorter`
  ADD PRIMARY KEY (`User_Id`),
  ADD KEY `E_id` (`E_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `D_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `E_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `Lab_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125763252;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doc_report`
--
ALTER TABLE `doc_report`
  ADD CONSTRAINT `doc_report_ibfk_1` FOREIGN KEY (`Aadhar_id`) REFERENCES `patient` (`Aadhar_id`),
  ADD CONSTRAINT `doc_report_ibfk_2` FOREIGN KEY (`D_Id`) REFERENCES `doctor` (`D_id`),
  ADD CONSTRAINT `doc_report_ibfk_3` FOREIGN KEY (`User_Id`) REFERENCES `test_sorter` (`User_Id`);

--
-- Constraints for table `lab_emp`
--
ALTER TABLE `lab_emp`
  ADD CONSTRAINT `lab_emp_ibfk_1` FOREIGN KEY (`L_id`) REFERENCES `employee` (`E_id`),
  ADD CONSTRAINT `lab_emp_ibfk_2` FOREIGN KEY (`Lab_Id`) REFERENCES `lab` (`Lab_id`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`M_id`) REFERENCES `employee` (`E_id`),
  ADD CONSTRAINT `manager_ibfk_2` FOREIGN KEY (`Lab_Id`) REFERENCES `lab` (`Lab_id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`D_id`) REFERENCES `doctor` (`D_id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`Lab_id`) REFERENCES `lab` (`Lab_id`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`Test_Name`) REFERENCES `tests` (`Test_Name`);

--
-- Constraints for table `report_to_patient`
--
ALTER TABLE `report_to_patient`
  ADD CONSTRAINT `report_to_patient_ibfk_1` FOREIGN KEY (`Report_Number`) REFERENCES `report` (`Report_Number`),
  ADD CONSTRAINT `report_to_patient_ibfk_2` FOREIGN KEY (`Aadhar_id`) REFERENCES `patient` (`Aadhar_id`);

--
-- Constraints for table `sample_to_lab`
--
ALTER TABLE `sample_to_lab`
  ADD CONSTRAINT `sample_to_lab_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `test_sorter` (`User_Id`),
  ADD CONSTRAINT `sample_to_lab_ibfk_2` FOREIGN KEY (`Aadhar_id`) REFERENCES `patient` (`Aadhar_id`),
  ADD CONSTRAINT `sample_to_lab_ibfk_3` FOREIGN KEY (`Lab_id`) REFERENCES `lab` (`Lab_id`);

--
-- Constraints for table `sorts_test`
--
ALTER TABLE `sorts_test`
  ADD CONSTRAINT `sorts_test_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `test_sorter` (`User_Id`),
  ADD CONSTRAINT `sorts_test_ibfk_2` FOREIGN KEY (`Test_Name`) REFERENCES `tests` (`Test_Name`);

--
-- Constraints for table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_ibfk_1` FOREIGN KEY (`Lab_Id`) REFERENCES `lab` (`Lab_id`);

--
-- Constraints for table `test_sorter`
--
ALTER TABLE `test_sorter`
  ADD CONSTRAINT `test_sorter_ibfk_1` FOREIGN KEY (`E_id`) REFERENCES `employee` (`E_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
