-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2017 at 09:56 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `highschoolresult`
--

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
(2, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('spectatorpioneer@gmail.com', '$2y$10$Ml6QnpfpfSrss3seleDa9eCb5JQbzqZvd0y2dF1N6sSIR/SugudZ2', '2017-07-21 09:28:57'),
('minhazulkabir@gmail.com', '$2y$10$86mRmTqAFGgOMkavrv8rtegZmnrIwIRFuCr0CVwuKYefqN7PDz6O6', '2017-07-23 20:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `tableaccount`
--

CREATE TABLE `tableaccount` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Qualification` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tableaccount`
--

INSERT INTO `tableaccount` (`ID`, `Name`, `Email`, `Password`, `Qualification`) VALUES
(1, 'ranna', 'alimur@gmail.com', '12345', 'aaaaa'),
(2, 'ranna', 'alimur@gmail.com', '12345', 'aaaaa'),
(3, 'ranna', 'alimur@gmail.com', '12345', 'aaaaa'),
(4, 'ranna', 'alimur@gmail.com', '12345', 'aaaaa'),
(5, 'aaa', 'alimur@gmail.com', '123445', 'aaaaaaaaaaaaaaa'),
(6, 'aaa', 'alimur@gmail.com', '123445', 'aaaaaaaaaaaaaaa'),
(7, 'rana', 'rana@gmail.com', 'rana', 'Laravel Boss'),
(8, 'minhaz', 'minhaz@gmail.com', 'minhaz', 'fbdskhfbsdkdkhb');

-- --------------------------------------------------------

--
-- Table structure for table `table_result`
--

CREATE TABLE `table_result` (
  `ID` int(11) NOT NULL,
  `Registration` varchar(20) DEFAULT '0',
  `TotalMarks` int(11) DEFAULT '0',
  `Status` varchar(10) DEFAULT 'Fail',
  `Grade` varchar(10) DEFAULT 'F',
  `Point` float DEFAULT '0',
  `NumberOfPass` int(11) DEFAULT '0',
  `NumberOfFail` int(11) DEFAULT '0',
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_result`
--

INSERT INTO `table_result` (`ID`, `Registration`, `TotalMarks`, `Status`, `Grade`, `Point`, `NumberOfPass`, `NumberOfFail`, `time`) VALUES
(317, '20170700007', 77, 'Fail', 'F', 0, 1, 12, '2017-07-24 03:27:07'),
(318, '20170700008', 88, 'Fail', 'F', 0, 1, 12, '2017-07-24 03:27:07'),
(319, '20170600001', 1113, 'Pass', 'A', 4.46154, 13, 0, '2017-07-24 03:27:36'),
(320, '20170600002', 1032, 'Fail', 'F', 0, 11, 2, '2017-07-24 03:27:36'),
(321, '20170600003', 1178, 'Pass', 'A+', 5, 13, 0, '2017-07-24 03:27:36'),
(322, '20170600004', 1140, 'Pass', 'A', 4.61538, 13, 0, '2017-07-24 03:27:36'),
(323, '20170600005', 1045, 'Pass', 'A', 4.38462, 13, 0, '2017-07-24 03:27:36'),
(324, '20170700001', 95, 'Fail', 'F', 0, 2, 11, '2017-07-24 03:27:36'),
(325, '20170700002', 168, 'Fail', 'F', 0, 2, 11, '2017-07-24 03:27:36'),
(326, '20170700003', 88, 'Fail', 'F', 0, 1, 12, '2017-07-24 03:27:36'),
(327, '20170700004', 144, 'Fail', 'F', 0, 2, 11, '2017-07-24 03:27:36'),
(328, '20170700005', 86, 'Fail', 'F', 0, 1, 12, '2017-07-24 03:27:36'),
(329, '20170800001', 0, 'Fail', 'F', 0, 0, 13, '2017-07-24 03:27:36'),
(330, '20170800002', 0, 'Fail', 'F', 0, 0, 13, '2017-07-24 03:27:36'),
(331, '20170800003', 225, 'Fail', 'F', 0, 3, 10, '2017-07-24 03:27:36'),
(332, '20170800004', 0, 'Fail', 'F', 0, 0, 13, '2017-07-24 03:27:36'),
(333, '20170600007', 1131, 'Pass', 'A', 4.84615, 13, 0, '2017-07-24 03:27:36'),
(334, '20180800099', 0, 'Fail', 'F', 0, 0, 13, '2017-07-24 03:27:36'),
(335, '20170600006', 1154, 'Pass', 'A', 4.92308, 13, 0, '2017-07-24 03:27:36'),
(336, '20170600008', 1084, 'Pass', 'A', 4.69231, 13, 0, '2017-07-24 03:27:37'),
(337, '20170600009', 1077, 'Fail', 'F', 0, 11, 2, '2017-07-24 03:27:37'),
(338, '20170600010', 1181, 'Pass', 'A', 4.84615, 13, 0, '2017-07-24 03:27:37'),
(339, '20170600011', 1021, 'Fail', 'F', 0, 12, 1, '2017-07-24 03:27:37'),
(340, '20170700006', 96, 'Fail', 'F', 0, 1, 12, '2017-07-24 03:27:37'),
(341, '20170901001', 297, 'Fail', 'F', 0, 5, 8, '2017-07-24 03:27:37'),
(342, '20171001001', 0, 'Fail', 'F', 0, 0, 13, '2017-07-24 03:27:37'),
(343, '20170901002', 78, 'Fail', 'F', 0, 1, 12, '2017-07-24 03:27:37'),
(344, '20171001002', 0, 'Fail', 'F', 0, 0, 13, '2017-07-24 03:27:37'),
(345, '20170700009', 33, 'Fail', 'F', 0, 1, 12, '2017-07-24 03:39:53'),
(346, '20170700010', 12, 'Fail', 'F', 0, 0, 13, '2017-07-24 03:39:53'),
(347, '20170800006', 0, 'Fail', 'F', 0, 0, 13, '2017-07-24 03:40:53'),
(348, '20170902001', 99, 'Fail', 'F', 0, 1, 12, '2017-07-24 03:40:53'),
(349, '20171002001', 45, 'Fail', 'F', 0, 1, 12, '2017-07-24 03:40:53'),
(350, '20170902002', 88, 'Fail', 'F', 0, 1, 12, '2017-07-24 03:40:54'),
(351, '20171002002', 0, 'Fail', 'F', 0, 0, 13, '2017-07-24 03:40:54'),
(352, '20170903001', 85, 'Fail', 'F', 0, 1, 12, '2017-07-24 03:51:50'),
(353, '201710031001', 66, 'Fail', 'F', 0, 1, 12, '2017-07-24 03:51:50'),
(354, '20170903002', 78, 'Fail', 'F', 0, 1, 12, '2017-07-24 03:51:50'),
(355, '20171003002', 45, 'Fail', 'F', 0, 1, 12, '2017-07-24 03:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `table_student_information`
--

CREATE TABLE `table_student_information` (
  `ID` int(11) NOT NULL,
  `Student` varchar(100) DEFAULT NULL,
  `Father` varchar(100) DEFAULT NULL,
  `Mother` varchar(100) DEFAULT NULL,
  `Registration` varchar(15) DEFAULT NULL,
  `Year` int(5) DEFAULT '2017',
  `Mobile` varchar(15) DEFAULT '1',
  `Address` varchar(255) DEFAULT NULL,
  `Class` varchar(20) DEFAULT NULL,
  `Section` varchar(20) DEFAULT 'N/A',
  `Gender` varchar(20) DEFAULT 'Female',
  `Birthdate` date DEFAULT NULL,
  `Time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_student_information`
--

INSERT INTO `table_student_information` (`ID`, `Student`, `Father`, `Mother`, `Registration`, `Year`, `Mobile`, `Address`, `Class`, `Section`, `Gender`, `Birthdate`, `Time`) VALUES
(56, 'Noman Islam', 'Wazi ullah Mollah', 'Khorsheda Begum', '20170901001', 2017, '01521460148', 'Chandpur', 'nine', 'science', 'male', '2017-07-04', '2017-07-22 18:26:16'),
(58, 'Noman Islam', 'Wazi ullah Mollah', 'Khorsheda Begum', '20170902001', 2017, '01521460148', 'Chandpur', 'nine', 'business', 'male', '2017-07-19', '2017-07-22 18:30:09'),
(59, 'Noman Islam', 'Wazi ullah Mollah', 'Khorsheda Begum', '20170903001', 2017, '01521460148', 'Chnadpur', 'nine', 'huminities', 'male', '2017-07-12', '2017-07-22 18:31:06'),
(60, 'Moudud Ahmed Khan Shahriar', 'Moudud Ahmed Khan', 'Shahera Khatun', '20171001001', 2017, '01987847107', 'Akhalia, Sylhet', 'ten', 'science', 'male', '1996-01-01', '2017-07-22 18:35:55'),
(61, 'Raqibul Hasan Rafi', 'Raqibul Hasan', 'Khodeja Begum', '20171002001', 2017, '01987847107', 'Akhalia, Sylhet-1202', 'ten', 'business', 'male', '1996-01-01', '2017-07-22 18:39:17'),
(62, 'Mir Niaz Ahmed', 'Mir Niaz', 'Amena Begum', '201710031001', 2017, '01987847109', 'Akhalia, Sylhet-1202', 'ten', 'huminities', 'male', '1996-01-01', '2017-07-22 18:40:34'),
(76, 'MD. ADNAN HOSSAIN', 'MD. ADNAN', 'Amena Begum', '20170600001', 2017, '01987847107', 'Modina Market, Syhet', 'six', 'n/a', 'male', '2002-11-11', '2017-07-22 19:43:59'),
(77, 'Moudud Ahmed Khan Shahriar', 'Moudud Ahmed Khan', 'Jorina Begum', '20170600002', 2017, '01987847107', 'Modina Market, Syhet', 'six', 'n/a', 'male', '2002-02-02', '2017-07-22 19:44:57'),
(78, 'Raqibul Hasan Rafi', 'Raqibul Hasan', 'Laili Begum', '20170600003', 2017, '01987847107', 'Modina Market, Syhet', 'six', 'n/a', 'male', '2001-04-04', '2017-07-22 20:05:47'),
(79, 'Mir Niaz Ahmed', 'Mir Niaz', 'Jorina Begum', '20170600004', 2017, '01799699556', 'Modina Market, Syhet', 'six', 'n/a', 'male', '2003-05-05', '2017-07-22 20:06:47'),
(80, 'SAIFUL ISLAM LITON', 'SAIFUL ISLAM', 'Moriyam Mukta', '20170600005', 2017, '01912094172', 'Akhalia, Sylhet', 'six', 'n/a', 'male', '2002-05-05', '2017-07-22 20:07:56'),
(81, 'Abdur Razzak Rana', 'Abdur Razzak', 'Amena Begum', '20170700001', 2017, '01720791087', 'Modina Market, Syhet', 'seven', 'n/a', 'male', '2001-07-07', '2017-07-22 20:08:58'),
(82, 'Md. Jamil Ahmed', 'Md. Jamil', 'Shahera Khatun', '20170700002', 2017, '01987847107', 'Modina Market, Syhet', 'seven', 'n/a', 'male', '2002-07-07', '2017-07-22 20:12:16'),
(83, 'Mir Ragib Ishraq', 'Mir Ragib', 'Laili Begum', '20170700003', 2017, '01587847107', 'Akhalia, Sylhet-1202', 'seven', 'n/a', 'male', '2001-03-03', '2017-07-22 20:13:35'),
(84, 'Maruf Ahmed Mridul', 'Maruf Ahmed', 'Jorina Begum', '20170700004', 2017, '01987847107', 'Akhalia, Sylhet-1202', 'seven', 'n/a', 'male', '2002-05-05', '2017-07-22 20:14:44'),
(85, 'Md. Nurul Azim', 'Md. Nurul', 'Moriyam Mukta', '20170700005', 2017, '01987847107', 'Modina Market, Syhet', 'seven', 'n/a', 'male', '2001-03-03', '2017-07-22 20:17:16'),
(86, 'Md. Saiful Islam Bhuiyan', 'Md. Saiful Islam', 'Laili Begum', '20170800001', 2017, '01987847107', 'Modina Market, Syhet', 'eight', 'n/a', 'male', '2002-03-03', '2017-07-22 20:19:12'),
(87, 'Faisal Ahmed Shuvo', 'SAIFUL ISLAM', 'Jorina Begum', '20170800002', 2017, '01687847107', 'Modina Market, Syhet', 'eight', 'n/a', 'male', '2002-04-04', '2017-07-22 20:20:26'),
(88, 'MD.MONTASER HAMID', 'Moudud Ahmed Khan', 'Moriyam Mukta', '20170800003', 2017, '01987847107', 'Akhalia, Sylhet-1202', 'eight', 'n/a', 'male', '2001-02-02', '2017-07-22 20:24:09'),
(89, 'Talat Mursalin', 'Raqibul Hasan', 'Shahera Khatun', '20170800004', 2017, '01987847107', 'Akhalia, Sylhet-1202', 'eight', 'n/a', 'male', '2003-04-04', '2017-07-22 20:25:54'),
(90, 'Md.Alimur Rana', 'Md.Alimur', 'Shahera Khatun', '20170901002', 2017, '01987847107', 'Akhalia, Sylhet-1202', 'nine', 'science', 'male', '2002-12-08', '2017-07-22 20:37:52'),
(91, 'Ashraf Uddin Tafadar', 'Raqibul Hasan', 'Jorina Begum', '20170902002', 2017, '01887847107', 'Modina Market, Syhet', 'nine', 'business', 'male', '2001-04-04', '2017-07-22 20:39:40'),
(92, 'MD. Towhidul Islam Tuhin', 'Moudud Ahmed Khan', 'Moriyam Mukta', '20170903002', 2017, '01687847107', 'Akhalia, Sylhet-1202', 'nine', 'huminities', 'male', '2001-03-03', '2017-07-22 20:41:30'),
(93, 'rahul rafig', 'SAIFUL ISLAM', 'Khodeja Begum', '20171001002', 2017, '01987847107', 'Modina Market, Syhet', 'ten', 'science', 'male', '2002-02-22', '2017-07-22 20:48:10'),
(94, 'Md. Nazim Uddin', 'Raqibul Hasan', 'Jorina Begum', '20171002002', 2017, '01987847107', 'Akhalia, Sylhet', 'ten', 'business', 'male', '2002-02-03', '2017-07-22 20:50:41'),
(95, 'ifte araf islam', 'Md. Jamil', 'Laili Begum', '20171003002', 2017, '01687847107', 'Akhalia, Sylhet-1202', 'ten', 'huminities', 'male', '2001-04-04', '2017-07-22 20:52:41'),
(96, 'Abdur Razzak Rana', 'Moudud Ahmed Khan', 'Jorina Begum', '20170600007', 2017, '01987847107', 'Modina Market, Syhet', 'six', 'n/a', 'male', '2002-03-03', '2017-07-24 02:36:25'),
(97, 'test', 'f', 'm', '20180800099', 2018, '01521460148', 'a', 'eight', 'n/a', 'female', '2017-07-12', '2017-07-24 02:55:05'),
(98, 'Moin Khan', 'Abdul Motin', 'Amena Khatun', '20170600006', 2017, '01987847107', 'MOdina Marke', 'six', 'n/a', 'male', '2000-05-24', '2017-07-24 03:02:58'),
(99, 'Zunaeid', 'Abdul Jolil', 'Shayera Khatun', '20170600008', 2017, '01987847107', 'Akhalia, Sylhet 3321', 'six', 'n/a', 'male', '2001-07-24', '2017-07-24 03:04:18'),
(100, 'Noor Hossan Sobuj', 'Abdul Motin', 'Amena Khatun', '20170600009', 2017, '01987847106', 'JalaLaBad', 'six', 'n/a', 'male', '2017-07-24', '2017-07-24 03:06:14'),
(101, 'Nayeem Anam', 'Abdul Motin', 'Shayera Khatun', '20170600010', 2017, '01987847166', 'Akhalia, Sylhet 3321', 'six', 'n/a', 'male', '2001-07-20', '2017-07-24 03:07:28'),
(102, 'Sajjatul islam Sobuj', 'Kamrum Hasan', 'Yeasmin Khanom', '20170600011', 2017, '01887847107', 'MOdina Marke', 'six', 'n/a', 'male', '2001-10-21', '2017-07-24 03:10:09'),
(103, 'Noor Hossan Sobuj', 'Kamrum Hasan', 'Shayera Khatun', '20170700006', 2017, '01887847107', 'JalaLaBad', 'seven', 'n/a', 'male', '2001-10-21', '2017-07-24 03:17:58'),
(104, 'Nayeem Anam', 'Mannan Khan', 'Yeasmin Khanom', '20170700007', 2017, '01987847106', 'JalaLaBad', 'seven', 'n/a', 'male', '2001-04-28', '2017-07-24 03:19:04'),
(105, 'Moin Khan', 'Kamrum Hasan', 'Shayera Khatun', '20170700008', 2017, '01987847107', 'Akhalia, Sylhet 3321', 'seven', 'n/a', 'male', '2001-09-22', '2017-07-24 03:21:10'),
(106, 'Zunaeid', 'Abdul Jolil', 'Shayera Khatun', '20170700009', 2017, '01987847107', 'MOdina Marke', 'seven', 'n/a', 'male', '2001-04-21', '2017-07-24 03:35:48'),
(107, 'Kazi Sabbir', 'Mannan Khan', 'Amena Khatun', '20170700010', 2017, '01987847166', 'Akhalia, Sylhet 3321', 'seven', 'n/a', 'male', '2001-03-20', '2017-07-24 03:37:59'),
(108, 'Sajjatul islam Sobuj', 'Abdul Jolil', 'Shayera Khatun', '20170800006', 2017, '01587847106', 'Akhalia, Sylhet 3321', 'eight', 'n/a', 'male', '2001-09-20', '2017-07-24 03:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `table_student_nine_ten_arts`
--

CREATE TABLE `table_student_nine_ten_arts` (
  `ID` int(15) NOT NULL,
  `Registration` varchar(15) DEFAULT '0',
  `BanglaFirst` int(10) DEFAULT '0',
  `BanglaSecond` int(10) DEFAULT '0',
  `EnglishFirst` int(10) DEFAULT '0',
  `EnglishSecond` int(10) DEFAULT '0',
  `Math` int(10) DEFAULT '0',
  `Religion` int(10) DEFAULT '0',
  `GeneralScience` int(10) DEFAULT '0',
  `InformationAndCommunication` int(10) DEFAULT '0',
  `PhysicalEducation` int(10) DEFAULT '0',
  `Economics` int(10) DEFAULT '0',
  `Civics` int(10) DEFAULT '0',
  `Geograpgy` int(10) DEFAULT '0',
  `History` int(10) DEFAULT '0',
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_student_nine_ten_arts`
--

INSERT INTO `table_student_nine_ten_arts` (`ID`, `Registration`, `BanglaFirst`, `BanglaSecond`, `EnglishFirst`, `EnglishSecond`, `Math`, `Religion`, `GeneralScience`, `InformationAndCommunication`, `PhysicalEducation`, `Economics`, `Civics`, `Geograpgy`, `History`, `timeStamp`) VALUES
(1, '20170903001', 85, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-22 18:31:06'),
(2, '201710031001', 0, 0, 0, 0, 66, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-22 18:40:34'),
(3, '20170903002', 78, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-22 20:41:30'),
(4, '20171003002', 0, 0, 0, 0, 45, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-22 20:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `table_student_nine_ten_business`
--

CREATE TABLE `table_student_nine_ten_business` (
  `ID` int(15) NOT NULL,
  `Registration` varchar(15) NOT NULL,
  `BanglaFirst` int(10) DEFAULT '0',
  `BanglaSecond` int(10) DEFAULT '0',
  `EnglishFirst` int(10) DEFAULT '0',
  `EnglishSecond` int(10) DEFAULT '0',
  `Math` int(10) DEFAULT '0',
  `Religion` int(10) DEFAULT '0',
  `GeneralScience` int(10) DEFAULT '0',
  `InformationAndCommunication` int(10) DEFAULT '0',
  `PhysicalEducation` int(10) DEFAULT '0',
  `Accounting` int(10) DEFAULT '0',
  `BusinessContact` int(10) DEFAULT '0',
  `CommercialGeography` int(10) DEFAULT '0',
  `Agriculture` int(10) DEFAULT '0',
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_student_nine_ten_business`
--

INSERT INTO `table_student_nine_ten_business` (`ID`, `Registration`, `BanglaFirst`, `BanglaSecond`, `EnglishFirst`, `EnglishSecond`, `Math`, `Religion`, `GeneralScience`, `InformationAndCommunication`, `PhysicalEducation`, `Accounting`, `BusinessContact`, `CommercialGeography`, `Agriculture`, `timeStamp`) VALUES
(2, '20170902001', 0, 0, 99, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-22 18:30:09'),
(3, '20171002001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 45, 0, 0, '2017-07-22 18:39:17'),
(4, '20170902002', 0, 0, 88, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-22 20:39:40'),
(5, '20171002002', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-22 20:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `table_student_nine_ten_science`
--

CREATE TABLE `table_student_nine_ten_science` (
  `ID` int(15) NOT NULL,
  `Registration` varchar(15) DEFAULT NULL,
  `BanglaFirst` int(10) DEFAULT '0',
  `BanglaSecond` int(10) DEFAULT '0',
  `EnglishFirst` int(10) DEFAULT '0',
  `EnglishSecond` int(10) DEFAULT '0',
  `Math` int(10) DEFAULT '0',
  `Religion` int(10) DEFAULT '0',
  `SocialScience` int(10) DEFAULT '0',
  `InformationAndCommunication` int(10) DEFAULT '0',
  `PhysicalEducation` int(10) DEFAULT '0',
  `Physics` int(10) DEFAULT '0',
  `Chemistry` int(10) DEFAULT '0',
  `Biology` int(10) DEFAULT '0',
  `HigherMath` int(10) DEFAULT '0',
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_student_nine_ten_science`
--

INSERT INTO `table_student_nine_ten_science` (`ID`, `Registration`, `BanglaFirst`, `BanglaSecond`, `EnglishFirst`, `EnglishSecond`, `Math`, `Religion`, `SocialScience`, `InformationAndCommunication`, `PhysicalEducation`, `Physics`, `Chemistry`, `Biology`, `HigherMath`, `timeStamp`) VALUES
(1, '20170901001', 78, 10, 45, 0, 45, 0, 70, 4, 0, 0, 45, 0, 0, '2017-07-22 18:26:16'),
(2, '20171001001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-22 18:35:55'),
(3, '20170901002', 0, 0, 0, 0, 0, 0, 0, 78, 0, 0, 0, 0, 0, '2017-07-22 20:37:52'),
(4, '20171001002', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-22 20:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `table_student_six_eight`
--

CREATE TABLE `table_student_six_eight` (
  `ID` int(11) NOT NULL,
  `Registration` varchar(15) DEFAULT '0',
  `BanglaFirst` int(100) DEFAULT '0',
  `BanglaSecond` int(100) DEFAULT '0',
  `EnglishFirst` int(100) DEFAULT '0',
  `EnglishSecond` int(100) DEFAULT '0',
  `Math` int(100) DEFAULT '0',
  `Religion` int(100) DEFAULT '0',
  `GeneralScience` int(100) DEFAULT '0',
  `BangladeshAndWorld` int(100) DEFAULT '0',
  `ICT` int(100) DEFAULT '0',
  `Agriculture` int(100) DEFAULT '0',
  `WorkAndEducation` int(100) DEFAULT '0',
  `PhysicalEducation` int(100) DEFAULT '0',
  `FineArts` int(100) DEFAULT '0',
  `Time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_student_six_eight`
--

INSERT INTO `table_student_six_eight` (`ID`, `Registration`, `BanglaFirst`, `BanglaSecond`, `EnglishFirst`, `EnglishSecond`, `Math`, `Religion`, `GeneralScience`, `BangladeshAndWorld`, `ICT`, `Agriculture`, `WorkAndEducation`, `PhysicalEducation`, `FineArts`, `Time`) VALUES
(48, '20170600001', 89, 45, 97, 89, 100, 97, 100, 100, 97, 89, 76, 89, 45, '2017-07-22 19:43:59'),
(49, '20170600002', 87, 32, 98, 98, 98, 98, 76, 76, 98, 76, 87, 76, 32, '2017-07-22 19:44:57'),
(50, '20170600003', 91, 99, 98, 91, 93, 98, 80, 80, 98, 80, 91, 80, 99, '2017-07-22 20:05:47'),
(51, '20170600004', 87, 75, 98, 98, 95, 95, 79, 95, 79, 87, 98, 79, 75, '2017-07-22 20:06:47'),
(52, '20170600005', 94, 45, 89, 89, 86, 94, 70, 89, 70, 86, 94, 94, 45, '2017-07-22 20:07:56'),
(53, '20170700001', 50, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 45, '2017-07-22 20:08:58'),
(54, '20170700002', 90, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 78, '2017-07-22 20:12:16'),
(55, '20170700003', 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, '2017-07-22 20:13:35'),
(56, '20170700004', 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 99, '2017-07-22 20:14:44'),
(57, '20170700005', 86, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-22 20:17:16'),
(58, '20170800001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-22 20:19:12'),
(59, '20170800002', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-22 20:20:26'),
(60, '20170800003', 0, 0, 0, 0, 100, 45, 0, 80, 0, 0, 0, 0, 0, '2017-07-22 20:24:09'),
(61, '20170800004', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-22 20:25:54'),
(62, '20170600007', 89, 78, 89, 80, 89, 89, 89, 96, 80, 89, 89, 96, 78, '2017-07-24 02:36:25'),
(63, '20180800099', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-24 02:55:05'),
(64, '20170600006', 92, 95, 92, 88, 89, 88, 88, 74, 88, 88, 88, 89, 95, '2017-07-24 03:02:58'),
(65, '20170600008', 80, 75, 80, 89, 91, 89, 89, 79, 89, 80, 79, 89, 75, '2017-07-24 03:04:18'),
(66, '20170600009', 99, 15, 99, 96, 92, 99, 99, 87, 92, 92, 96, 96, 15, '2017-07-24 03:06:14'),
(67, '20170600010', 95, 78, 95, 95, 93, 93, 93, 89, 93, 93, 93, 93, 78, '2017-07-24 03:07:28'),
(68, '20170600011', 89, 65, 29, 77, 89, 77, 77, 99, 99, 89, 77, 89, 65, '2017-07-24 03:10:09'),
(69, '20170700006', 96, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-24 03:17:58'),
(70, '20170700007', 77, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-24 03:19:04'),
(71, '20170700008', 88, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-24 03:21:10'),
(72, '20170700009', 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-24 03:35:48'),
(73, '20170700010', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-24 03:37:59'),
(74, '20170800006', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-24 03:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'noman', 'spectatorpioneer@gmail.com', '$2y$10$wN2TZ7BOR246C62ayL5NrOzKmV9Mvrfl4n2zPddNEkvaOMggdhg8e', 'TNYABiSafLvlzlMgLJKI6RSSlr2a0G26o5Dmynyxv9mAOHaS2d8MneYhvTpc', '2017-07-21 04:22:59', '2017-07-21 04:22:59'),
(2, 'Minhazul Kabir', 'minhazulkabir@gmaol.com', '$2y$10$5hcrtRutblUZu.YUwuVY1.s6mgxfqTB8eMzUXLjg7qB.4As.VnZvm', NULL, '2017-07-22 12:06:15', '2017-07-22 12:06:15'),
(3, 'Minhazul Kabir', 'minhazulkabir@gmail.com', '$2y$10$1QbaV1zYMrXEXl.IV6pbeuSZ6wEdTLoxbSDUEB7Bpm16BFoWcUwIW', 'cwOuAZhhhy1n6NjwE6f9Qy0Z4VJ2dVaS4PFKQqMxWEypXYj5I3xpQK4shVkV', '2017-07-22 12:15:45', '2017-07-22 12:15:45'),
(4, 'ruman', 'spectatorpioneer2@gmail.com', '$2y$10$o932mS3jEofxVUPTYfrYiusGV/kSsY8I4rPlzWS8voGoQ1Js9FQTK', NULL, '2017-07-22 23:01:07', '2017-07-22 23:01:07'),
(5, 'Soumic Ahmed', 'soumicahmed22@gmail.com', '$2y$10$NSBLVaXfh4tGNnOOKntIF.UR7tdfEePW3v9HJFJAA3jBeL/A2IhMu', 'gpFpW4IKs3kqQEY2bGhurmGw0mVIBVjBhdtWaivxqeXKiCa1vRpoRmzSq0zg', '2017-07-23 16:53:50', '2017-07-23 16:53:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tableaccount`
--
ALTER TABLE `tableaccount`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `table_result`
--
ALTER TABLE `table_result`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `table_student_information`
--
ALTER TABLE `table_student_information`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `table_student_nine_ten_arts`
--
ALTER TABLE `table_student_nine_ten_arts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `table_student_nine_ten_business`
--
ALTER TABLE `table_student_nine_ten_business`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `table_student_nine_ten_science`
--
ALTER TABLE `table_student_nine_ten_science`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `table_student_six_eight`
--
ALTER TABLE `table_student_six_eight`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tableaccount`
--
ALTER TABLE `tableaccount`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `table_result`
--
ALTER TABLE `table_result`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=356;
--
-- AUTO_INCREMENT for table `table_student_information`
--
ALTER TABLE `table_student_information`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `table_student_nine_ten_arts`
--
ALTER TABLE `table_student_nine_ten_arts`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `table_student_nine_ten_business`
--
ALTER TABLE `table_student_nine_ten_business`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `table_student_nine_ten_science`
--
ALTER TABLE `table_student_nine_ten_science`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `table_student_six_eight`
--
ALTER TABLE `table_student_six_eight`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
