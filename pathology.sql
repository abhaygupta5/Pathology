-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 09:38 AM
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

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_id`, `Dname`, `Hospital_Name`) VALUES
(1, 'sam', 'rk mission hospital'),
(2, 'rex', 'shyam ram hospital'),
(3, 'ram', 'christ church hospital'),
(4, 'shyam', 'rahim dargah hospital'),
(5, 'pappu', 'army hospital'),
(6, 'dhananjay', 'reliance hospital');

-- --------------------------------------------------------

--
-- Table structure for table `doc_report`
--

CREATE TABLE `doc_report` (
  `Aadhar_id` bigint(12) NOT NULL,
  `date` date NOT NULL,
  `D_Id` int(3) NOT NULL,
  `User_Id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Test_Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `indicator` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doc_report`
--

INSERT INTO `doc_report` (`Aadhar_id`, `date`, `D_Id`, `User_Id`, `Test_Name`, `indicator`) VALUES
(111122223333, '2017-11-26', 1, '003', 'Marrow Test', 0),
(111122223333, '2017-11-26', 1, '003', 'Neuron test', 0),
(123445689754, '2017-11-10', 4, '006', 'Sugar', 1),
(123456789100, '2017-11-13', 2, '002', 'Dengue', 1),
(123456789100, '2017-11-13', 2, '004', 'WBC test', 1),
(123456789100, '2017-11-13', 2, '005', 'Haemoglobin', 1),
(256987564213, '2017-11-10', 6, '003', 'Marrow Test', 1),
(256987564213, '2017-11-10', 6, '006', 'Sugar', 1),
(454548484844, '2017-11-10', 5, '005', 'Haemoglobin', 1),
(454548484844, '2017-11-10', 5, '006', 'Sugar', 1),
(478541253621, '2017-11-13', 3, '001', 'LDL', 1),
(478541253621, '2017-11-13', 3, '004', 'RBC test', 1),
(478541253621, '2017-11-13', 3, '006', 'Sugar', 1),
(547854789654, '2017-11-10', 2, '005', 'Haemoglobin', 1),
(547854789654, '2017-11-10', 2, '006', 'Sugar', 1),
(547854789657, '2017-11-10', 1, '005', 'Haemoglobin', 1),
(547854789657, '2017-11-10', 1, '006', 'Sugar', 1),
(584752121252, '2017-11-14', 2, '006', 'Sugar', 1),
(603610800054, '2017-11-25', 1, '005', 'Thyroid', 1),
(603610800054, '2017-11-25', 1, '006', 'Sugar', 1);

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

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`E_id`, `Name`, `Role`, `DOB`) VALUES
(1, 'saqib', 'Lab Worker', '1989-01-03'),
(2, 'nehil', 'Lab Worker', '1989-02-03'),
(3, 'rishu', 'Lab Worker', '1989-03-03'),
(5, 'esha', 'Lab Worker', '1989-04-03'),
(6, 'aakash', 'Lab Worker', '1989-04-03'),
(7, 'amit', 'Lab Worker', '1989-04-03'),
(11, 'ranjan', 'Manager', '1990-02-01'),
(12, 'rakesh', 'Manager', '1990-12-01'),
(13, 'golu', 'Manager', '1990-11-01'),
(111, 'mukund', 'Sorter', '1991-01-02'),
(112, 'chandresh', 'Sorter', '1991-01-02'),
(113, 'arif', 'Sorter', '1991-01-02'),
(114, 'piyush', 'Sorter', '1990-12-01'),
(115, 'shyam', 'Sorter', '1990-11-01'),
(116, 'rajesh', 'Sorter', '1990-12-01');

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
(1254785463, 'knot place', 'delhi', 100247, 0x72a023089b029dbc4aae30eb288fb8c9),
(2145784512, 'secant road', 'delhi', 100259, 0x82ab3640207db85efec549a246b6ad65),
(2147483647, 'gol market', 'delhi', 100258, 0x366d0e82186ecec7f89db98cb41aaf7b);

-- --------------------------------------------------------

--
-- Table structure for table `lab_emp`
--

CREATE TABLE `lab_emp` (
  `L_id` int(5) NOT NULL,
  `Lab_Id` int(10) NOT NULL,
  `hire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lab_emp`
--

INSERT INTO `lab_emp` (`L_id`, `Lab_Id`, `hire_date`) VALUES
(1, 1254785463, '2017-11-09'),
(2, 1254785463, '2017-11-09'),
(3, 2145784512, '2017-11-09'),
(5, 2147483647, '2017-11-09'),
(6, 1254785463, '2017-11-09'),
(7, 2147483647, '2017-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `M_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `Lab_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`M_id`, `date`, `Lab_Id`) VALUES
(11, '2017-11-09', 1254785463),
(12, '2017-11-09', 2145784512),
(13, '2017-11-09', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Aadhar_id` bigint(12) NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `AlterPhone` bigint(10) DEFAULT NULL,
  `Password` blob,
  `DOB` date NOT NULL,
  `D_id` int(3) NOT NULL,
  `Street` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Aadhar_id`, `Name`, `Phone`, `AlterPhone`, `Password`, `DOB`, `D_id`, `Street`, `City`, `pincode`) VALUES
(111122223333, 'Aman', 2478965896, 0, NULL, '1997-11-10', 1, 'Meghawan', 'Jabalpur', 2547845),
(123445689754, 'Ray', 8745632547, 8439691537, 0x6035f4d87118022a44563da6130ba9a5, '2017-11-10', 4, 'Brahmpuri', 'Moradabad', 851101),
(123456789100, 'Agni', 777083457, 0, 0x910d2e8e4a6d17b38223fb12bd467949, '1999-01-09', 2, 'Hall 4', 'Jabalpur', 482005),
(256987564213, 'Ray', 9456266850, 8439691537, NULL, '2017-11-11', 6, 'spc', 'Meerut', 250002),
(454548484844, 'Abhay', 9456266850, 0, 0x837b3e1115adb2acafac3a3de087e251, '2017-11-10', 5, 'Brahmpuri', 'Meerut', 250002),
(478541253621, 'Abhinav', 5478521465, 0, 0x5b64a6b069db7c1fc8ddfb09f2ff60ef, '2017-10-09', 3, 'dasj;k', 'Moradabad', 5478965),
(547854789654, 'Abhay', 8745632547, 8439691537, NULL, '2017-11-02', 2, 'Brahmpuri', 'Meerut', 250002),
(547854789657, 'Abhay', 8745632547, 0, 0x837b3e1115adb2acafac3a3de087e251, '2017-11-02', 1, 'Brahmpuri', 'Meerut', 250002),
(584752121252, 'gjhg', 2145874563, 0, NULL, '2017-11-24', 2, 'rys', 'hjk', 5475412),
(603610800054, 'samarth', 9479764808, 8827366975, 0x74fa14bc096851081337e1c390b65113, '1997-12-04', 1, 'nyas colony', 'itarsi', 461111);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report_Number` bigint(17) NOT NULL,
  `Obtained_Value` decimal(9,4) NOT NULL,
  `date` date NOT NULL,
  `Lab_id` int(10) NOT NULL,
  `Test_Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Report_Number`, `Obtained_Value`, `date`, `Lab_id`, `Test_Name`) VALUES
(546946, '2.1889', '2017-11-10', 2147483647, 'Haemoglobin'),
(1065411, '100.7457', '2017-11-13', 2147483647, 'WBC test'),
(2062364, '7.2842', '2017-11-10', 2147483647, 'Haemoglobin'),
(3085322, '2.2817', '2017-11-26', 2145784512, 'Thyroid'),
(3724401, '3.3275', '2017-11-13', 1254785463, 'LDL'),
(4310040, '6.2660', '2017-11-10', 2147483647, 'Haemoglobin'),
(5430693, '82.0936', '2017-11-26', 1254785463, 'Sugar'),
(6598265, '15.9095', '2017-11-13', 2147483647, 'Haemoglobin'),
(6674835, '49.7207', '2017-11-26', 1254785463, 'Sugar'),
(7818311, '5.4873', '2017-11-10', 2147483647, 'Haemoglobin'),
(8183544, '73.1158', '2017-11-26', 1254785463, 'Sugar'),
(8514408, '3.2812', '2017-11-13', 2147483647, 'RBC test'),
(8868035, '4363.7065', '2017-11-13', 2147483647, 'Dengue');

-- --------------------------------------------------------

--
-- Table structure for table `report_to_patient`
--

CREATE TABLE `report_to_patient` (
  `Report_Number` bigint(17) NOT NULL,
  `date` date NOT NULL,
  `Aadhar_id` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `report_to_patient`
--

INSERT INTO `report_to_patient` (`Report_Number`, `date`, `Aadhar_id`) VALUES
(546946, '2017-11-10', 547854789657),
(1065411, '2017-11-13', 123456789100),
(2062364, '2017-11-10', 454548484844),
(3085322, '2017-11-26', 603610800054),
(3724401, '2017-11-13', 478541253621),
(4310040, '2017-11-10', 454548484844),
(5430693, '2017-11-26', 584752121252),
(6598265, '2017-11-13', 123456789100),
(6674835, '2017-11-26', 603610800054),
(7818311, '2017-11-10', 547854789657),
(8183544, '2017-11-26', 478541253621),
(8514408, '2017-11-13', 478541253621),
(8868035, '2017-11-13', 123456789100);

-- --------------------------------------------------------

--
-- Table structure for table `sample_to_lab`
--

CREATE TABLE `sample_to_lab` (
  `User_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `Aadhar_id` bigint(12) NOT NULL,
  `Lab_id` int(10) NOT NULL,
  `indicator` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sample_to_lab`
--

INSERT INTO `sample_to_lab` (`User_id`, `date`, `Aadhar_id`, `Lab_id`, `indicator`) VALUES
('001', '2017-11-13', 478541253621, 1254785463, 1),
('002', '2017-11-13', 123456789100, 2147483647, 1),
('004', '2017-11-13', 123456789100, 2147483647, 1),
('004', '2017-11-13', 478541253621, 2147483647, 1),
('005', '2017-11-13', 123456789100, 2147483647, 1),
('005', '2017-11-10', 454548484844, 2147483647, 1),
('005', '2017-11-10', 547854789657, 2147483647, 1),
('005', '2017-11-26', 603610800054, 2145784512, 1),
('006', '2017-11-26', 478541253621, 1254785463, 1),
('006', '2017-11-10', 547854789654, 1254785463, 1),
('006', '2017-11-26', 584752121252, 1254785463, 1),
('006', '2017-11-26', 603610800054, 1254785463, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sorts_test`
--

CREATE TABLE `sorts_test` (
  `User_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Test_Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sorts_test`
--

INSERT INTO `sorts_test` (`User_id`, `Test_Name`) VALUES
('001', 'HDL'),
('001', 'LDL'),
('001', 'LFT'),
('002', 'Adrenal'),
('002', 'AIDS'),
('002', 'Dengue'),
('003', 'Leadtest'),
('003', 'Marrow Test'),
('003', 'Neuron Test'),
('004', 'RBC test'),
('004', 'WBC test'),
('005', 'Haemoglobin'),
('005', 'Thyroid'),
('006', 'Sugar'),
('006', 'Urine test');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `Test_Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Min_Normal_Value` decimal(8,4) NOT NULL,
  `Max_Normal_Value` decimal(9,4) NOT NULL,
  `Lab_Id` int(10) DEFAULT NULL,
  `Test_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`Test_Name`, `Min_Normal_Value`, `Max_Normal_Value`, `Lab_Id`, `Test_type`, `Description`) VALUES
('Adrenal', '10.0000', '20.0000', 2145784512, 'blood', 'Aldosterone controls salt, potassium, and water balance in the body and helps to regulate blood pressure. Overproduction (hyperaldosteronism) or underproduction (hypoaldosteronism) of this hormone may be caused by tumors or other abnormalities within the adrenal glands (primary; e.g., adrenal cancer) or may result from problems outside the adrenals (secondary). Both blood levels and urinary excretion of aldosterone may be measured.'),
('AIDS', '0.9000', '1.0000', 1254785463, 'blood', 'Human immunodeficiency virus (HIV) testing determines whether you\'re infected with HIV, a virus that weakens your immune system and can lead to acquired immunodeficiency syndrome (AIDS).\r\n\r\nSome HIV tests check for antibodies that your immune system produces in reaction to HIV infection. Other HIV tests look for evidence of the virus itself. Rapid tests can produce results within 20 minutes.'),
('Dengue', '1500.0000', '4500.0000', 2147483647, 'blood', 'Dengue fever testing is used to determine whether a person with signs and symptoms and recent potential exposure has been infected with the dengue virus. The infection is difficult to diagnose without laboratory tests because symptoms may initially resemble those of other diseases, such as chikungunya infection.'),
('Haemoglobin', '10.0000', '16.0000', 2147483647, 'blood', 'The hemoglobin test is often used to check for anemia, usually along with a hematocrit or as part of a complete blood count (CBC). The test may be used to screen for, diagnose, or monitor a number of conditions and diseases that affect red blood cells (RBCs) and/or the amount of hemoglobin in blood. Hemoglobin is the iron-containing protein found in all red blood cells that enables RBCs to bind to oxygen in the lungs and carry it to tissues and organs throughout the body. '),
('HDL', '40.0000', '45.0000', 1254785463, 'blood', 'A high-density lipoprotein (HDL) test measures the level of good cholesterol in your blood. Cholesterol is a waxy substance that’s found in all of the cells in your body. It has several different functions, including helping to build your body’s cells. Cholesterol is carried through the bloodstream attached to proteins called lipoproteins. '),
('LDL', '100.0000', '129.0000', 1254785463, 'blood', 'The test for low-density lipoprotein cholesterol (LDL-C) is used as part of a lipid profile to predict an individual\'s risk of developing heart disease and to help make decisions about what treatment may be needed if there is borderline or high risk. It may also be used to monitor the effectiveness of treatment once it is initiated.'),
('Leadtest', '5.0000', '45.0000', 2145784512, 'blood', 'Lead is a heavy metal found naturally in the environment as well as in many common consumer products. Though it serves no purpose in the human body, most people have a small amount of it in their bodies because it\'s so prevalent in our surroundings.'),
('LFT', '8.0000', '48.0000', 2145784512, 'blood', 'Liver function tests are blood tests used to help diagnose and monitor liver disease or damage. The tests measure the levels of certain enzymes and proteins in your blood. '),
('Marrow Test', '1.0000', '4.0000', 2147483647, 'bone marrow', 'Bone marrow testing usually involves two steps: a bone marrow aspiration and a bone marrow biopsy. A bone marrow aspiration is used to remove a liquid marrow sample. A bone marrow biopsy is used to remove a small amount of bone filled with marrow. Both tests are usually performed at the same time in a doctor\'s office or a hospital.'),
('Neuron test', '1.9000', '6.0000', 2147483647, 'neural tissue ', 'This is the latest test for imbalances in the brain that affect your mind, emotions and physical health. When neurons (nerve cells) malfunction they produce a wide range of symptoms, conditions and diseases. The brain rules all and with this neuron function test you can measure the function of the brain, mind and levels of the neurochemicals in the brain. This test consists of functionally preloading with certain amino acids (precursors to the neurotransmitters) then taking a urine test to access neuron function.'),
('RBC test', '4.7000', '6.1000', 2147483647, 'blood', 'A red blood cell (RBC) count is typically ordered as part of a complete blood count (CBC) and may be used as part of a health checkup to screen for a variety of conditions. This test may also be used to help diagnose and/or monitor a number of diseases that affect the production or lifespan of red blood cells.'),
('Sugar', '70.0000', '126.0000', 1254785463, 'blood', 'A blood glucose test measures the amount of a sugar called glucose in a sample of your blood. Glucose is a major source of energy for most cells of the body, including brain cells. Carbohydrates are found in fruit, cereal, bread, pasta, and rice. They are quickly turned into glucose in your body. This raises your blood glucose level. Hormones made in the body help control blood glucose level.'),
('Thyroid', '0.7000', '1.9000', 2145784512, 'blood', 'Thyroid function tests are blood tests used to evaluate how effectively the thyroid gland is working. These tests include the thyroid-stimulating hormone test (TSH), the thyroxine test (T4), the triiodothyronine test (T3), the thyroxine-binding globulin test (TBG), the triiodothyronine resin uptake test (T3RU), and the long-acting thyroid stimulator test (LATS).'),
('Urine test', '1.9000', '6.0000', 2147483647, 'urine', 'A urinalysis is a test of your urine. A urinalysis is used to detect and manage a wide range of disorders, such as urinary tract infections, kidney disease and diabetes. A urinalysis involves checking the appearance, concentration and content of urine. Abnormal urinalysis results may point to a disease or illness. For example, a urinary tract infection can make urine look cloudy instead of clear. Increased levels of protein in urine can be a sign of kidney disease. Unusual urinalysis results often require more testing to uncover the source of the problem.'),
('WBC test', '150.0000', '200.0000', 2147483647, 'blood', 'White blood cells exist in the blood, the lymphatic system, and tissues and are an important part of the body\'s defense system. (See the \"What is being tested?\" section for more.) Some diseases trigger a response by the immune system and cause an increase in the number of WBCs. Other conditions affect the production of WBCs by the bone marrow or the survival of WBCs in the circulation, resulting in either an increase or decrease in the number of circulating WBCs.');

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
-- Dumping data for table `test_sorter`
--

INSERT INTO `test_sorter` (`User_Id`, `Password`, `E_id`) VALUES
('001', 0xd05835da0daede50610bc70447fba7d8, 111),
('002', 0x013d130b901c16fdcd6d96d315ad0cc1, 112),
('003', 0x1d571316edcfd55c2870bf388e2cd75f, 115),
('004', 0x788b9b557681f6b9762edb76fccd6675, 113),
('005', 0x3ace6483d4ec35a02139547f5713bf7e, 114),
('006', 0xf58c03b4862cf7c5296121bc9592fb43, 116);

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
  ADD PRIMARY KEY (`Aadhar_id`,`date`,`D_Id`,`User_Id`,`Test_Name`),
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
  MODIFY `D_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `E_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `Lab_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doc_report`
--
ALTER TABLE `doc_report`
  ADD CONSTRAINT `doc_report_ibfk_1` FOREIGN KEY (`D_Id`) REFERENCES `doctor` (`D_id`),
  ADD CONSTRAINT `doc_report_ibfk_2` FOREIGN KEY (`User_Id`) REFERENCES `test_sorter` (`User_Id`);

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
  ADD CONSTRAINT `report_to_patient_ibfk_1` FOREIGN KEY (`Aadhar_id`) REFERENCES `patient` (`Aadhar_id`),
  ADD CONSTRAINT `report_to_patient_ibfk_2` FOREIGN KEY (`Report_Number`) REFERENCES `report` (`Report_Number`);

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
