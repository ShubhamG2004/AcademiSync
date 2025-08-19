-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2025 at 07:00 PM
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
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `absent`
--

CREATE TABLE `absent` (
  `id` int(255) NOT NULL,
  `rollno` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `2023-04-08` varchar(100) NOT NULL,
  `2023-04-29` varchar(100) NOT NULL,
  `2023-04-27` varchar(100) NOT NULL,
  `2023-04-01` varchar(100) NOT NULL,
  `2023-04-02` varchar(100) NOT NULL,
  `2023-04-03` varchar(100) NOT NULL,
  `2023-04-04` varchar(100) NOT NULL,
  `2023-04-05` varchar(100) NOT NULL,
  `2023-04-07` varchar(100) NOT NULL,
  `2023-04-16` varchar(100) NOT NULL,
  `2023-04-30` varchar(100) NOT NULL,
  `2023-02-27` varchar(100) NOT NULL,
  `2023-05-01` varchar(100) NOT NULL,
  `2023-05-02` varchar(100) NOT NULL,
  `2023-05-03` varchar(100) NOT NULL,
  `2023-05-05` varchar(100) NOT NULL,
  `2023-05-07` varchar(100) NOT NULL,
  `2023-05-11` varchar(100) NOT NULL,
  `2023-05-19` varchar(100) NOT NULL,
  `2023-05-27` varchar(100) NOT NULL,
  `2023-06-02` varchar(100) NOT NULL,
  `2023-07-09` varchar(100) NOT NULL,
  `2023-05-12` varchar(100) NOT NULL,
  `2023-05-21` varchar(100) NOT NULL,
  `2023-05-31` varchar(100) NOT NULL,
  `2023-07-22` varchar(100) NOT NULL,
  `2023-03-30` varchar(100) NOT NULL,
  `2023-01-06` varchar(100) NOT NULL,
  `2023-01-20` varchar(100) NOT NULL,
  `2023-02-09` varchar(100) NOT NULL,
  `2023-03-17` varchar(100) NOT NULL,
  `2023-01-13` varchar(100) NOT NULL,
  `2023-03-01` varchar(100) NOT NULL,
  `2023-02-17` varchar(100) NOT NULL,
  `2023-08-17` varchar(100) NOT NULL,
  `2023-01-07` varchar(100) NOT NULL,
  `2023-04-11` varchar(100) NOT NULL,
  `2023-01-01` varchar(100) NOT NULL,
  `2022-06-09` varchar(100) NOT NULL,
  `2022-11-01` varchar(100) NOT NULL,
  `2022-05-04` varchar(100) NOT NULL,
  `2021-12-23` varchar(100) NOT NULL,
  `2023-09-01` varchar(100) NOT NULL,
  `2023-09-02` varchar(100) NOT NULL,
  `2023-08-19` varchar(100) NOT NULL,
  `2023-11-17` varchar(100) NOT NULL,
  `2024-03-08` varchar(100) NOT NULL,
  `2023-12-16` varchar(100) NOT NULL,
  `2022-04-16` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absent`
--

INSERT INTO `absent` (`id`, `rollno`, `name`, `2023-04-08`, `2023-04-29`, `2023-04-27`, `2023-04-01`, `2023-04-02`, `2023-04-03`, `2023-04-04`, `2023-04-05`, `2023-04-07`, `2023-04-16`, `2023-04-30`, `2023-02-27`, `2023-05-01`, `2023-05-02`, `2023-05-03`, `2023-05-05`, `2023-05-07`, `2023-05-11`, `2023-05-19`, `2023-05-27`, `2023-06-02`, `2023-07-09`, `2023-05-12`, `2023-05-21`, `2023-05-31`, `2023-07-22`, `2023-03-30`, `2023-01-06`, `2023-01-20`, `2023-02-09`, `2023-03-17`, `2023-01-13`, `2023-03-01`, `2023-02-17`, `2023-08-17`, `2023-01-07`, `2023-04-11`, `2023-01-01`, `2022-06-09`, `2022-11-01`, `2022-05-04`, `2021-12-23`, `2023-09-01`, `2023-09-02`, `2023-08-19`, `2023-11-17`, `2024-03-08`, `2023-12-16`, `2022-04-16`) VALUES
(1, '176062', 'GAWADE GAJANANA SATUPPA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '206001', 'BARAGE NIKHIL GULAB', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '0', 'A', 'A', 'A', 'A', '', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'),
(3, '206002', 'BHANDARI SANSKRUTI VIRANNA', '1', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '206003', 'BHANSE SATYAJEET SAMBHAJI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '206004', 'BHOSALE TUSHAR BANDU', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '206005', 'BURUD APURVA VILAS', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'),
(7, '206006', 'CHOUGALE SANIKA SATAPPA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '206007', 'DANGE HARSHAD AJIT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '206008', 'DAPHALE NAMRATA VYANKATESH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'A', '', 'A', '', '', 'A', '', 'A', '', ''),
(10, '206009', 'DELEKAR SIDDHANT KAKASO', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', '', '', 'A', '', 'A', '', '', ''),
(11, '206010', 'DESAI PRATIKSHA SARJERAO', 'A', '', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', 'A', 'A', '', 'A', '', '', 'A', 'A', '', '', 'A', 'A', 'A', '', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', 'A', ''),
(12, '206011', 'DEVAKAR PRAJAKTA SHANKAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'A', '', '', '', ''),
(13, '206012', 'DHAVARE ROHIT DILIP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'A', '', 'A', '', '', 'A', '', '', '', ''),
(14, '206013', 'DONE ROHAN BALASAHEB', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '206014', 'FADATARE VISHVAL VIJAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '206015', 'GATADE MRUNAL DIPAK', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '206016', 'GAVADE SHUBHAM SURESH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '206017', 'GAVALI SAKSHI DHONDIRAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, '206018', 'GAYKWAD SHAMAL SURYAKANT', 'A', '', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', 'A', 'A', '', 'A', '', '', 'A', 'A', '', '', 'A', 'A', 'A', '', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', 'A', ''),
(20, '206019', 'GHATAGE DIKSHA AMAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, '206020', 'GOPAL VIJAY DOSE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, '206021', 'GURAV AKASH PARSHURAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '206022', 'INGALE GOURI SANJAYKUMAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, '206023', 'ITKARKAR SNEHA PRAKASH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, '206024', 'JADHAV AMEY AJIT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, '206025', 'JADHAV ANUSHKA AVINASH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '206026', 'JADHAV SHARWARI ANIL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'A'),
(28, '206027', 'JADHAV SHREYA SANJAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '206028', 'JUI MAKARAND PATGAONKAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, '206029', 'KAMBLE RAM KASHINATH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, '206030', 'KATKAR VIVEK SHIVAJI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, '206031', 'KHADE HARSHVARDHAN NIVAS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, '206032', 'KORE VARDHAK VIJAY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '206033', 'KUMBHAR PRAGATI PRAKASH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, '206034', 'KUMBHAR VINAYAK MARUTI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'A', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, '206035', 'LOHAR TRUPTI PRAMOD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'A', '', 'A', '', '', 'A', '', '', '', ''),
(37, '206036', 'MAHIND SANDESH ANIL', 'A', '', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', 'A', 'A', '', 'A', '', '', 'A', 'A', '', '', 'A', 'A', 'A', '', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '', 'A', ''),
(38, '206037', 'MALI RITESH KRISHNAT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '206038', 'MINCHEKAR RUTIKA AVINASH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, '206039', 'MORE BHAKTI SHARAD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, '206040', 'MUDHALE PRASAD SADASHIV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, '206041', 'MULLA ALFAJ ABDULMAJID', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, '206042', 'NAIKWADI MAHAMADTOHID FIROJ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, '206043', 'NAVALE SANIKA ARJUN', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, '206044', 'PARAKHE DIKSHA NARENDRA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, '206045', 'PARIT HARSHAVARDHAN PRAKASH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, '206046', 'PARITKAR SANIKA VIKRAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, '206047', 'PATIL AISHWARYA ASHOK', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, '206048', 'PATIL JYOTI DHONDIRAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, '206049', 'PATIL KARAN MAHADEV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'A', '1', '', '', '', '', '', '', '', '', '', '', ''),
(51, '206050', 'PATIL RADHIKA PANDURANG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, '206051', 'PATIL RAJDEEP VIJAYKUMAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, '206052', 'PATIL SAKSHI PRALHAD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, '206053', 'PATIL SAKSHI SANTOSH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, '206054', 'PATIL SAMRUDDHI DASHARATH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, '206055', 'PATIL SHAHURAJE BAJIRAO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, '206056', 'PATIL SIDDHI SUNIL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, '206057', 'PATIL VAISHNAVI VASANT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, '206058', 'PAWAR JAY DEEPAK', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, '206059', 'PAWAR SHUBHAM PRADIP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, '206060', 'RANKHAMBE SAHIL HEMANTKUMAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, '206061', 'SABALE MANASI VIJAYKUMAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, '206062', 'SABALE VAISHNAVI DATTAKUMAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(64, '206063', 'SAHU MONIKA ANILKUMAR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(65, '206064', 'SAVANT RAMA TUKARAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, '206065', 'SAWANT POURNIMA DHANAJI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(67, '206066', 'SHINDE SANDESH SHIVAJI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(68, '206067', 'SONWANE OM SUNIL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(69, '206068', 'SURYAWANSHI PRATHMESH TANAJI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(70, '206069', 'SUTAR ADITYA ADHIK', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(71, '216171', 'BHOPE VAIBHAVI SANTOSH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(72, '216172', 'BORHADE PRATIK BALU', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, '216173', 'MULLA JUNED MUSHTAK', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, '216174', 'PACHANKAR HARIOM DILIP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, '216175', 'PARIT SHIVAM SURESH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, '216176', 'PATANGE SHRISAI GAJENDRA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, '216177', 'POTARE RAMESH', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `academiccalendar`
--

CREATE TABLE `academiccalendar` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `pdf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user`, `pass`) VALUES
(1, 'shubham@23', 'shub@123');

-- --------------------------------------------------------

--
-- Table structure for table `attandance`
--

CREATE TABLE `attandance` (
  `id` int(255) NOT NULL,
  `rollno` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bat1attend`
--

CREATE TABLE `bat1attend` (
  `id` int(255) NOT NULL,
  `rollno` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `2023-04-24` varchar(100) NOT NULL,
  `2023-04-25` varchar(100) NOT NULL,
  `2023-04-14` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bat1attend`
--

INSERT INTO `bat1attend` (`id`, `rollno`, `name`, `2023-04-24`, `2023-04-25`, `2023-04-14`) VALUES
(2, '206001', 'BARAGE NIKHIL GULAB', '1', '1', '1'),
(3, '206002', 'BHANDARI SANSKRUTI VIRANNA', '1', '1', '1'),
(4, '206003', 'BHANSE SATYAJEET SAMBHAJI', '1', '1', '1'),
(5, '206004', 'BHOSALE TUSHAR BANDU', '1', '1', '1'),
(6, '206005', 'BURUD APURVA VILAS', '1', '1', '1'),
(7, '206006', 'CHOUGALE SANIKA SATAPPA', '1', '1', '1'),
(8, '206007', 'DANGE HARSHAD AJIT', '1', '1', '1'),
(9, '206008', 'DAPHALE NAMRATA VYANKATESH', '1', '1', '1'),
(10, '206009', 'DELEKAR SIDDHANT KAKASO', '1', '1', '1'),
(11, '206010', 'DESAI PRATIKSHA SARJERAO', '1', '1', '1'),
(12, '206011', 'DEVAKAR PRAJAKTA SHANKAR', '1', '1', '1'),
(13, '206012', 'DHAVARE ROHIT DILIP', '1', '1', '1'),
(14, '206013', 'DONE ROHAN BALASAHEB', '1', '1', '1'),
(15, '206014', 'FADATARE VISHVAL VIJAY', '1', '1', '0'),
(16, '206015', 'GATADE MRUNAL DIPAK', '1', '1', '0'),
(17, '206016', 'GAVADE SHUBHAM SURESH', '1', '1', '0'),
(18, '206017', 'GAVALI SAKSHI DHONDIRAM', '1', '1', '1'),
(19, '206018', 'GAYKWAD SHAMAL SURYAKANT', '1', '1', '1'),
(20, '206019', 'GHATAGE DIKSHA AMAR', '1', '1', '1'),
(21, '206020', 'GOPAL VIJAY DOSE', '1', '1', '1'),
(22, '206021', 'GURAV AKASH PARSHURAM', '1', '1', '0'),
(23, '206022', 'INGALE GOURI SANJAYKUMAR', '1', '1', '0'),
(24, '206023', 'ITKARKAR SNEHA PRAKASH', '1', '1', '1'),
(25, '206024', 'JADHAV AMEY AJIT', '1', '1', '0'),
(26, '206025', 'JADHAV ANUSHKA AVINASH', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bat1marks`
--

CREATE TABLE `bat1marks` (
  `id` int(255) NOT NULL,
  `rollno` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `exp1` varchar(255) NOT NULL,
  `exp2` int(255) DEFAULT NULL,
  `exp3` int(255) DEFAULT NULL,
  `exp4` int(255) DEFAULT NULL,
  `exp5` int(255) DEFAULT NULL,
  `exp6` int(255) DEFAULT NULL,
  `exp7` int(255) NOT NULL,
  `exp8` int(255) NOT NULL,
  `exp9` int(255) DEFAULT NULL,
  `exp10` int(255) DEFAULT NULL,
  `exp11` int(255) NOT NULL,
  `exp12` int(255) DEFAULT NULL,
  `exp13` int(255) DEFAULT NULL,
  `exp14` int(255) DEFAULT NULL,
  `exp15` int(255) DEFAULT NULL,
  `exp16` int(255) DEFAULT NULL,
  `exp17` int(255) DEFAULT NULL,
  `exp18` int(255) DEFAULT NULL,
  `exp19` int(255) DEFAULT NULL,
  `exp20` int(255) DEFAULT NULL,
  `exp21` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bat1marks`
--

INSERT INTO `bat1marks` (`id`, `rollno`, `name`, `exp1`, `exp2`, `exp3`, `exp4`, `exp5`, `exp6`, `exp7`, `exp8`, `exp9`, `exp10`, `exp11`, `exp12`, `exp13`, `exp14`, `exp15`, `exp16`, `exp17`, `exp18`, `exp19`, `exp20`, `exp21`) VALUES
(1, '206001', 'Shubham gavade', '11', NULL, 14, 0, 0, 0, 0, 0, 0, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '206009', 'siddhant delekar', '23', NULL, 14, 0, 0, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bat2attend`
--

CREATE TABLE `bat2attend` (
  `id` int(255) NOT NULL,
  `rollno` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bat2attend`
--

INSERT INTO `bat2attend` (`id`, `rollno`, `name`) VALUES
(1, '206026', 'JADHAV SHARWARI ANIL'),
(2, '206027', 'JADHAV SHREYA SANJAY'),
(3, '206028', 'JUI MAKARAND PATGAONKAR'),
(4, '206029', 'KAMBLE RAM KASHINATH'),
(5, '206030', 'KATKAR VIVEK SHIVAJI'),
(6, '206031', 'KHADE HARSHVARDHAN NIVAS'),
(7, '206032', 'KORE VARDHAK VIJAY'),
(8, '206033', 'KUMBHAR PRAGATI PRAKASH'),
(9, '206034', 'KUMBHAR VINAYAK MARUTI'),
(10, '206035', 'LOHAR TRUPTI PRAMOD'),
(11, '206036', 'MAHIND SANDESH ANIL'),
(12, '206037', 'MALI RITESH KRISHNAT'),
(13, '206038', 'MINCHEKAR RUTIKA AVINASH'),
(14, '206039', 'MORE BHAKTI SHARAD'),
(15, '206040', 'MUDHALE PRASAD SADASHIV'),
(16, '206041', 'MULLA ALFAJ ABDULMAJID'),
(17, '206042', 'NAIKWADI MAHAMADTOHID FIROJ'),
(18, '206043', 'NAVALE SANIKA ARJUN'),
(19, '206044', 'PARAKHE DIKSHA NARENDRA'),
(20, '206045', 'PARIT HARSHAVARDHAN PRAKASH'),
(21, '206046', 'PARITKAR SANIKA VIKRAM'),
(22, '206047', 'PATIL AISHWARYA ASHOK'),
(23, '206048', 'PATIL JYOTI DHONDIRAM'),
(24, '206049', 'PATIL KARAN MAHADEV'),
(25, '206050', 'PATIL RADHIKA PANDURANG'),
(26, '206051', 'PATIL RAJDEEP VIJAYKUMAR');

-- --------------------------------------------------------

--
-- Table structure for table `bat3attend`
--

CREATE TABLE `bat3attend` (
  `id` int(255) NOT NULL,
  `rollno` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bat3attend`
--

INSERT INTO `bat3attend` (`id`, `rollno`, `name`) VALUES
(1, '206052', 'PATIL SAKSHI PRALHAD'),
(2, '206053', 'PATIL SAKSHI SANTOSH'),
(3, '206054', 'PATIL SAMRUDDHI DASHARATH'),
(4, '206055', 'PATIL SHAHURAJE BAJIRAO'),
(5, '206056', 'PATIL SIDDHI SUNIL'),
(6, '206057', 'PATIL VAISHNAVI VASANT'),
(7, '206058', 'PAWAR JAY DEEPAK'),
(8, '206059', 'PAWAR SHUBHAM PRADIP'),
(9, '206060', 'RANKHAMBE SAHIL HEMANTKUMAR'),
(10, '206061', 'SABALE MANASI VIJAYKUMAR'),
(11, '206062', 'SABALE VAISHNAVI DATTAKUMAR'),
(12, '206063', 'SAHU MONIKA ANILKUMAR'),
(13, '206064', 'SAVANT RAMA TUKARAM'),
(14, '206065', 'SAWANT POURNIMA DHANAJI'),
(15, '206066', 'SHINDE SANDESH SHIVAJI'),
(16, '206067', 'SONWANE OM SUNIL'),
(17, '206068', 'SURYAWANSHI PRATHMESH TANAJI'),
(18, '206069', 'SUTAR ADITYA ADHIK'),
(19, '216171', 'BHOPE VAIBHAVI SANTOSH'),
(20, '216173', 'MULLA JUNED MUSHTAK'),
(21, '216174', 'PACHANKAR HARIOM DILIP'),
(22, '216175', 'PARIT SHIVAM SURESH'),
(23, '216176', 'PATANGE SHRISAI GAJENDRA'),
(24, '216177', 'POTARE RAMESH');

-- --------------------------------------------------------

--
-- Table structure for table `batch1`
--

CREATE TABLE `batch1` (
  `id` int(255) NOT NULL,
  `rollno` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batch1`
--

INSERT INTO `batch1` (`id`, `rollno`, `name`) VALUES
(2, '206001', 'BARAGE NIKHIL GULAB'),
(3, '206002', 'BHANDARI SANSKRUTI VIRANNA'),
(4, '206003', 'BHANSE SATYAJEET SAMBHAJI'),
(5, '206004', 'BHOSALE TUSHAR BANDU'),
(6, '206005', 'BURUD APURVA VILAS'),
(7, '206006', 'CHOUGALE SANIKA SATAPPA'),
(8, '206007', 'DANGE HARSHAD AJIT'),
(9, '206008', 'DAPHALE NAMRATA VYANKATESH'),
(10, '206009', 'DELEKAR SIDDHANT KAKASO'),
(11, '206010', 'DESAI PRATIKSHA SARJERAO'),
(12, '206011', 'DEVAKAR PRAJAKTA SHANKAR'),
(13, '206012', 'DHAVARE ROHIT DILIP'),
(14, '206013', 'DONE ROHAN BALASAHEB'),
(15, '206014', 'FADATARE VISHVAL VIJAY'),
(16, '206015', 'GATADE MRUNAL DIPAK'),
(17, '206016', 'GAVADE SHUBHAM SURESH'),
(18, '206017', 'GAVALI SAKSHI DHONDIRAM'),
(19, '206018', 'GAYKWAD SHAMAL SURYAKANT'),
(20, '206019', 'GHATAGE DIKSHA AMAR'),
(21, '206020', 'GOPAL VIJAY DOSE'),
(22, '206021', 'GURAV AKASH PARSHURAM'),
(23, '206022', 'INGALE GOURI SANJAYKUMAR'),
(24, '206023', 'ITKARKAR SNEHA PRAKASH'),
(25, '206024', 'JADHAV AMEY AJIT'),
(26, '206025', 'JADHAV ANUSHKA AVINASH');

-- --------------------------------------------------------

--
-- Table structure for table `batch2`
--

CREATE TABLE `batch2` (
  `id` int(255) NOT NULL,
  `rollno` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batch2`
--

INSERT INTO `batch2` (`id`, `rollno`, `name`) VALUES
(1, '206026', 'JADHAV SHARWARI ANIL'),
(2, '206027', 'JADHAV SHREYA SANJAY'),
(3, '206028', 'JUI MAKARAND PATGAONKAR'),
(4, '206029', 'KAMBLE RAM KASHINATH'),
(5, '206030', 'KATKAR VIVEK SHIVAJI'),
(6, '206031', 'KHADE HARSHVARDHAN NIVAS'),
(7, '206032', 'KORE VARDHAK VIJAY'),
(8, '206033', 'KUMBHAR PRAGATI PRAKASH'),
(9, '206034', 'KUMBHAR VINAYAK MARUTI'),
(10, '206035', 'LOHAR TRUPTI PRAMOD'),
(11, '206036', 'MAHIND SANDESH ANIL'),
(12, '206037', 'MALI RITESH KRISHNAT'),
(13, '206038', 'MINCHEKAR RUTIKA AVINASH'),
(14, '206039', 'MORE BHAKTI SHARAD'),
(15, '206040', 'MUDHALE PRASAD SADASHIV'),
(16, '206041', 'MULLA ALFAJ ABDULMAJID'),
(17, '206042', 'NAIKWADI MAHAMADTOHID FIROJ'),
(18, '206043', 'NAVALE SANIKA ARJUN'),
(19, '206044', 'PARAKHE DIKSHA NARENDRA'),
(20, '206045', 'PARIT HARSHAVARDHAN PRAKASH'),
(21, '206046', 'PARITKAR SANIKA VIKRAM'),
(22, '206047', 'PATIL AISHWARYA ASHOK'),
(23, '206048', 'PATIL JYOTI DHONDIRAM'),
(24, '206049', 'PATIL KARAN MAHADEV'),
(25, '206050', 'PATIL RADHIKA PANDURANG'),
(26, '206051', 'PATIL RAJDEEP VIJAYKUMAR');

-- --------------------------------------------------------

--
-- Table structure for table `batch3`
--

CREATE TABLE `batch3` (
  `id` int(255) NOT NULL,
  `rollno` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batch3`
--

INSERT INTO `batch3` (`id`, `rollno`, `name`) VALUES
(1, '206052', 'PATIL SAKSHI PRALHAD'),
(2, '206053', 'PATIL SAKSHI SANTOSH'),
(3, '206054', 'PATIL SAMRUDDHI DASHARATH'),
(4, '206055', 'PATIL SHAHURAJE BAJIRAO'),
(5, '206056', 'PATIL SIDDHI SUNIL'),
(6, '206057', 'PATIL VAISHNAVI VASANT'),
(7, '206058', 'PAWAR JAY DEEPAK'),
(8, '206059', 'PAWAR SHUBHAM PRADIP'),
(9, '206060', 'RANKHAMBE SAHIL HEMANTKUMAR'),
(10, '206061', 'SABALE MANASI VIJAYKUMAR'),
(11, '206062', 'SABALE VAISHNAVI DATTAKUMAR'),
(12, '206063', 'SAHU MONIKA ANILKUMAR'),
(13, '206064', 'SAVANT RAMA TUKARAM'),
(14, '206065', 'SAWANT POURNIMA DHANAJI'),
(15, '206066', 'SHINDE SANDESH SHIVAJI'),
(16, '206067', 'SONWANE OM SUNIL'),
(17, '206068', 'SURYAWANSHI PRATHMESH TANAJI'),
(18, '206069', 'SUTAR ADITYA ADHIK'),
(19, '216171', 'BHOPE VAIBHAVI SANTOSH'),
(20, '216173', 'MULLA JUNED MUSHTAK'),
(21, '216174', 'PACHANKAR HARIOM DILIP'),
(22, '216175', 'PARIT SHIVAM SURESH'),
(23, '216176', 'PATANGE SHRISAI GAJENDRA'),
(24, '216177', 'POTARE RAMESH');

-- --------------------------------------------------------

--
-- Table structure for table `batch_details`
--

CREATE TABLE `batch_details` (
  `department_name` varchar(50) NOT NULL,
  `academic_year` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batch_details`
--

INSERT INTO `batch_details` (`department_name`, `academic_year`, `batch`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('IT', 'first', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', 'first', ''),
('', 'first', ''),
('', 'first', ''),
('IT', 'first', ''),
('', '', ''),
('IT', 'third', ''),
('', '', ''),
('', '', ''),
('IT', '2020-21', 'second'),
('', '', ''),
('IT', '2021-22', 'second'),
('E & TC', '2022-23', 'first');

-- --------------------------------------------------------

--
-- Table structure for table `collage`
--

CREATE TABLE `collage` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coursecurri`
--

CREATE TABLE `coursecurri` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `pdf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department_details`
--

CREATE TABLE `department_details` (
  `department` varchar(50) NOT NULL,
  `HOD` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department_details`
--

INSERT INTO `department_details` (`department`, `HOD`, `description`, `id`) VALUES
('IT', 'S A Nadgeri', 'ahfjkhh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(10) NOT NULL,
  `designation_name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `designation_name`, `description`, `department`) VALUES
(0, '', '', ''),
(2, '', 'hi i am lab assistant', ''),
(3, 'lab assistant', 'i am lab assistant', ''),
(4, 'lab assistant', 'hi i am lab assistant', ''),
(123, 'l,m/', 'kmkm', '');

-- --------------------------------------------------------

--
-- Table structure for table `lessplan`
--

CREATE TABLE `lessplan` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `pdf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_teacher`
--

CREATE TABLE `login_teacher` (
  `id` int(100) NOT NULL,
  `teachercode` int(11) NOT NULL,
  `Username` varchar(1000) NOT NULL,
  `Password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_teacher`
--

INSERT INTO `login_teacher` (`id`, `teachercode`, `Username`, `Password`) VALUES
(1, 2002, 'madhuri_arade', 'madhuri@123');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(155) NOT NULL,
  `rollno` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `test1` varchar(2000) DEFAULT NULL,
  `test2` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `rollno`, `name`, `test1`, `test2`) VALUES
(2, '206001', 'BARAGE NIKHIL GULAB', '1', '24'),
(3, '206002', 'BHANDARI SANSKRUTI VIRANNA', '3', '9'),
(4, '206003', 'BHANSE SATYAJEET SAMBHAJI', '3', '8'),
(5, '206004', 'BHOSALE TUSHAR BANDU', '3', '7'),
(6, '206005', 'BURUD APURVA VILAS', '3', '6'),
(7, '206006', 'CHOUGALE SANIKA SATAPPA', '3', '5'),
(8, '206007', 'DANGE HARSHAD AJIT', '3', '4'),
(9, '206008', 'DAPHALE NAMRATA VYANKATESH', '3', '3'),
(10, '206009', 'DELEKAR SIDDHANT KAKASO', '3', '2'),
(11, '206010', 'DESAI PRATIKSHA SARJERAO', '3', '1'),
(12, '206011', 'DEVAKAR PRAJAKTA SHANKAR', '3', '5'),
(13, '206012', 'DHAVARE ROHIT DILIP', '3', '5'),
(14, '206013', 'DONE ROHAN BALASAHEB', '1', '5'),
(15, '206014', 'FADATARE VISHVAL VIJAY', '3', '5'),
(16, '206015', 'GATADE MRUNAL DIPAK', '3', '5'),
(17, '206016', 'GAVADE SHUBHAM SURESH', '99', '5'),
(18, '206017', 'GAVALI SAKSHI DHONDIRAM', '1', '5'),
(19, '206018', 'GAYKWAD SHAMAL SURYAKANT', '9', '5'),
(20, '206019', 'GHATAGE DIKSHA AMAR', '99', '5'),
(21, '206020', 'GOPAL VIJAY DOSE', '9', '5'),
(22, '206021', 'GURAV AKASH PARSHURAM', '9', '5'),
(23, '206022', 'INGALE GOURI SANJAYKUMAR', '9', '5'),
(24, '206023', 'ITKARKAR SNEHA PRAKASH', '9', '5'),
(25, '206024', 'JADHAV AMEY AJIT', '9', '5'),
(26, '206025', 'JADHAV ANUSHKA AVINASH', '9', '5'),
(27, '206026', 'JADHAV SHARWARI ANIL', '9', '5'),
(28, '206027', 'JADHAV SHREYA SANJAY', '9', '5'),
(29, '206028', 'JUI MAKARAND PATGAONKAR', '9', '5'),
(31, '206030', 'KATKAR VIVEK SHIVAJI', '9', '5'),
(32, '206031', 'KHADE HARSHVARDHAN NIVAS', '9', '5'),
(33, '206032', 'KORE VARDHAK VIJAY', '9', '5'),
(34, '206033', 'KUMBHAR PRAGATI PRAKASH', '9', '5'),
(35, '206034', 'KUMBHAR VINAYAK MARUTI', '9', '5'),
(36, '206035', 'LOHAR TRUPTI PRAMOD', '9', '5'),
(37, '206036', 'MAHIND SANDESH ANIL', '9', '5'),
(38, '206037', 'MALI RITESH KRISHNAT', '9', '5'),
(39, '206038', 'MINCHEKAR RUTIKA AVINASH', '9', '5'),
(40, '206039', 'MORE BHAKTI SHARAD', '9', '5'),
(41, '206040', 'MUDHALE PRASAD SADASHIV', '9', '5'),
(42, '206041', 'MULLA ALFAJ ABDULMAJID', '9', '5'),
(43, '206042', 'NAIKWADI MAHAMADTOHID FIROJ', '9', '5'),
(44, '206043', 'NAVALE SANIKA ARJUN', '8', '5'),
(45, '206044', 'PARAKHE DIKSHA NARENDRA', '8', '5'),
(46, '206045', 'PARIT HARSHAVARDHAN PRAKASH', '8', '5'),
(47, '206046', 'PARITKAR SANIKA VIKRAM', '8', '5'),
(48, '206047', 'PATIL AISHWARYA ASHOK', '8', '5'),
(49, '206048', 'PATIL JYOTI DHONDIRAM', '1', '5'),
(50, '206049', 'PATIL KARAN MAHADEV', '8', '5'),
(51, '206050', 'PATIL RADHIKA PANDURANG', '8', '5'),
(52, '206051', 'PATIL RAJDEEP VIJAYKUMAR', '8', '5'),
(53, '206052', 'PATIL SAKSHI PRALHAD', '8', '5'),
(54, '206053', 'PATIL SAKSHI SANTOSH', '1', '5'),
(55, '206054', 'PATIL SAMRUDDHI DASHARATH', '8', '5'),
(56, '206055', 'PATIL SHAHURAJE BAJIRAO', '1', '5'),
(57, '206056', 'PATIL SIDDHI SUNIL', '7', '5'),
(58, '206057', 'PATIL VAISHNAVI VASANT', '7', '5'),
(59, '206058', 'PAWAR JAY DEEPAK', '7', '5'),
(60, '206059', 'PAWAR SHUBHAM PRADIP', '1', '5'),
(61, '206060', 'RANKHAMBE SAHIL HEMANTKUMAR', '7', '5'),
(62, '206061', 'SABALE MANASI VIJAYKUMAR', '1', '6'),
(63, '206062', 'SABALE VAISHNAVI DATTAKUMAR', '1', '6'),
(64, '206063', 'SAHU MONIKA ANILKUMAR', '1', '6'),
(65, '206064', 'SAVANT RAMA TUKARAM', '1', '6'),
(66, '206065', 'SAWANT POURNIMA DHANAJI', '1', '6'),
(67, '206066', 'SHINDE SANDESH SHIVAJI', '1', '6'),
(68, '206067', 'SONWANE OM SUNIL', '1', '6'),
(69, '206068', 'SURYAWANSHI PRATHMESH TANAJI', '1', '6'),
(70, '206069', 'SUTAR ADITYA ADHIK', '1', '6'),
(71, '216171', 'BHOPE VAIBHAVI SANTOSH', '1', '6'),
(72, '216172', 'BORHADE PRATIK BALU', '1', '66'),
(73, '216173', 'MULLA JUNED MUSHTAK', '1', '6'),
(74, '216174', 'PACHANKAR HARIOM DILIP', '1', '6'),
(75, '216175', 'PARIT SHIVAM SURESH', '1', '6'),
(76, '216176', 'PATANGE SHRISAI GAJENDRA', '11', '6'),
(77, '216177', 'POTARE RAMESH', '1', '6');

-- --------------------------------------------------------

--
-- Table structure for table `practicalplan`
--

CREATE TABLE `practicalplan` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `pdf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `practicalplan`
--

INSERT INTO `practicalplan` (`id`, `name`, `pdf`) VALUES
(1, 'TYIT Timetable.pdf', 'TYIT Timetable.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `semlist`
--

CREATE TABLE `semlist` (
  `id` int(100) NOT NULL,
  `semname` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semlist`
--

INSERT INTO `semlist` (`id`, `semname`, `status`) VALUES
(1, 'winter2025', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacplan`
--

CREATE TABLE `teacplan` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `pdf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacplan`
--

INSERT INTO `teacplan` (`id`, `name`, `pdf`) VALUES
(1, 'TYIT Timetable.pdf', 'TYIT Timetable.pdf'),
(2, 'TYIT Timetable.pdf', 'TYIT Timetable.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `testpaper`
--

CREATE TABLE `testpaper` (
  `id` int(1) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `pdf` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testpaper`
--

INSERT INTO `testpaper` (`id`, `name`, `pdf`) VALUES
(1, 'TYIT Timetable.pdf', 'TYIT Timetable.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `pdf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `name`, `pdf`) VALUES
(1, 'TYIT Timetable.pdf', 'TYIT Timetable.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `vismis`
--

CREATE TABLE `vismis` (
  `id` int(100) NOT NULL,
  `name` varchar(10) NOT NULL,
  `pdf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vismis`
--

INSERT INTO `vismis` (`id`, `name`, `pdf`) VALUES
(5, 'ESU MPR.pd', 'ESU MPR.pdf'),
(6, 'My Resume.', 'My Resume.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `winter2025java`
--

CREATE TABLE `winter2025java` (
  `id` int(11) NOT NULL,
  `rollno` varchar(255) DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winter2025java`
--

INSERT INTO `winter2025java` (`id`, `rollno`, `student_name`) VALUES
(1, '206002', 'BHANDARI SANSKRUTI VIRANNA'),
(2, '206003', 'BHANSE SATYAJEET SAMBHAJI'),
(3, '206004', 'BHOSALE TUSHAR BANDU'),
(4, '206005', 'BURUD APURVA VILAS'),
(5, '206006', 'CHOUGALE SANIKA SATAPPA'),
(6, '206007', 'DANGE HARSHAD AJIT'),
(7, '206008', 'DAPHALE NAMRATA VYANKATESH'),
(8, '206009', 'DELEKAR SIDDHANT KAKASO'),
(9, '206010', 'DESAI PRATIKSHA SARJERAO'),
(10, '206011', 'DEVAKAR PRAJAKTA SHANKAR'),
(11, '206012', 'DHAVARE ROHIT DILIP'),
(12, '206013', 'DONE ROHAN BALASAHEB'),
(13, '206014', 'FADATARE VISHVAL VIJAY'),
(14, '206015', 'GATADE MRUNAL DIPAK'),
(15, '206016', 'GAVADE SHUBHAM SURESH'),
(16, '206017', 'GAVALI SAKSHI DHONDIRAM'),
(17, '206018', 'GAYKWAD SHAMAL SURYAKANT'),
(18, '206019', 'GHATAGE DIKSHA AMAR'),
(19, '206020', 'GOPAL VIJAY DOSE'),
(20, '206021', 'GURAV AKASH PARSHURAM'),
(21, '206022', 'INGALE GOURI SANJAYKUMAR'),
(22, '206023', 'ITKARKAR SNEHA PRAKASH'),
(23, '206024', 'JADHAV AMEY AJIT'),
(24, '206025', 'JADHAV ANUSHKA AVINASH');

-- --------------------------------------------------------

--
-- Table structure for table `winter2025javaabsent`
--

CREATE TABLE `winter2025javaabsent` (
  `id` int(11) NOT NULL,
  `rollno` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winter2025javaabsent`
--

INSERT INTO `winter2025javaabsent` (`id`, `rollno`, `name`) VALUES
(1, '206002', 'BHANDARI SANSKRUTI VIRANNA'),
(2, '206003', 'BHANSE SATYAJEET SAMBHAJI'),
(3, '206004', 'BHOSALE TUSHAR BANDU'),
(4, '206005', 'BURUD APURVA VILAS'),
(5, '206006', 'CHOUGALE SANIKA SATAPPA'),
(6, '206007', 'DANGE HARSHAD AJIT'),
(7, '206008', 'DAPHALE NAMRATA VYANKATESH'),
(8, '206009', 'DELEKAR SIDDHANT KAKASO'),
(9, '206010', 'DESAI PRATIKSHA SARJERAO'),
(10, '206011', 'DEVAKAR PRAJAKTA SHANKAR'),
(11, '206012', 'DHAVARE ROHIT DILIP'),
(12, '206013', 'DONE ROHAN BALASAHEB'),
(13, '206014', 'FADATARE VISHVAL VIJAY'),
(14, '206015', 'GATADE MRUNAL DIPAK'),
(15, '206016', 'GAVADE SHUBHAM SURESH'),
(16, '206017', 'GAVALI SAKSHI DHONDIRAM'),
(17, '206018', 'GAYKWAD SHAMAL SURYAKANT'),
(18, '206019', 'GHATAGE DIKSHA AMAR'),
(19, '206020', 'GOPAL VIJAY DOSE'),
(20, '206021', 'GURAV AKASH PARSHURAM'),
(21, '206022', 'INGALE GOURI SANJAYKUMAR'),
(22, '206023', 'ITKARKAR SNEHA PRAKASH'),
(23, '206024', 'JADHAV AMEY AJIT'),
(24, '206025', 'JADHAV ANUSHKA AVINASH');

-- --------------------------------------------------------

--
-- Table structure for table `winter2025javamarks`
--

CREATE TABLE `winter2025javamarks` (
  `id` int(11) NOT NULL,
  `rollno` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `test1` varchar(255) DEFAULT NULL,
  `test2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winter2025javamarks`
--

INSERT INTO `winter2025javamarks` (`id`, `rollno`, `name`, `test1`, `test2`) VALUES
(1, '206002', 'BHANDARI SANSKRUTI VIRANNA', NULL, NULL),
(2, '206003', 'BHANSE SATYAJEET SAMBHAJI', NULL, NULL),
(3, '206004', 'BHOSALE TUSHAR BANDU', NULL, NULL),
(4, '206005', 'BURUD APURVA VILAS', NULL, NULL),
(5, '206006', 'CHOUGALE SANIKA SATAPPA', NULL, NULL),
(6, '206007', 'DANGE HARSHAD AJIT', NULL, NULL),
(7, '206008', 'DAPHALE NAMRATA VYANKATESH', NULL, NULL),
(8, '206009', 'DELEKAR SIDDHANT KAKASO', NULL, NULL),
(9, '206010', 'DESAI PRATIKSHA SARJERAO', NULL, NULL),
(10, '206011', 'DEVAKAR PRAJAKTA SHANKAR', NULL, NULL),
(11, '206012', 'DHAVARE ROHIT DILIP', NULL, NULL),
(12, '206013', 'DONE ROHAN BALASAHEB', NULL, NULL),
(13, '206014', 'FADATARE VISHVAL VIJAY', NULL, NULL),
(14, '206015', 'GATADE MRUNAL DIPAK', NULL, NULL),
(15, '206016', 'GAVADE SHUBHAM SURESH', NULL, NULL),
(16, '206017', 'GAVALI SAKSHI DHONDIRAM', NULL, NULL),
(17, '206018', 'GAYKWAD SHAMAL SURYAKANT', NULL, NULL),
(18, '206019', 'GHATAGE DIKSHA AMAR', NULL, NULL),
(19, '206020', 'GOPAL VIJAY DOSE', NULL, NULL),
(20, '206021', 'GURAV AKASH PARSHURAM', NULL, NULL),
(21, '206022', 'INGALE GOURI SANJAYKUMAR', NULL, NULL),
(22, '206023', 'ITKARKAR SNEHA PRAKASH', NULL, NULL),
(23, '206024', 'JADHAV AMEY AJIT', NULL, NULL),
(24, '206025', 'JADHAV ANUSHKA AVINASH', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `winter2025lia`
--

CREATE TABLE `winter2025lia` (
  `id` int(11) NOT NULL,
  `rollno` varchar(255) DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winter2025lia`
--

INSERT INTO `winter2025lia` (`id`, `rollno`, `student_name`) VALUES
(1, '206002', 'BHANDARI SANSKRUTI VIRANNA'),
(2, '206003', 'BHANSE SATYAJEET SAMBHAJI'),
(3, '206004', 'BHOSALE TUSHAR BANDU'),
(4, '206005', 'BURUD APURVA VILAS'),
(5, '206006', 'CHOUGALE SANIKA SATAPPA'),
(6, '206007', 'DANGE HARSHAD AJIT'),
(7, '206008', 'DAPHALE NAMRATA VYANKATESH'),
(8, '206009', 'DELEKAR SIDDHANT KAKASO'),
(9, '206010', 'DESAI PRATIKSHA SARJERAO'),
(10, '206011', 'DEVAKAR PRAJAKTA SHANKAR'),
(11, '206012', 'DHAVARE ROHIT DILIP'),
(12, '206013', 'DONE ROHAN BALASAHEB'),
(13, '206014', 'FADATARE VISHVAL VIJAY'),
(14, '206015', 'GATADE MRUNAL DIPAK'),
(15, '206016', 'GAVADE SHUBHAM SURESH'),
(16, '206017', 'GAVALI SAKSHI DHONDIRAM'),
(17, '206018', 'GAYKWAD SHAMAL SURYAKANT'),
(18, '206019', 'GHATAGE DIKSHA AMAR'),
(19, '206020', 'GOPAL VIJAY DOSE'),
(20, '206021', 'GURAV AKASH PARSHURAM'),
(21, '206022', 'INGALE GOURI SANJAYKUMAR'),
(22, '206023', 'ITKARKAR SNEHA PRAKASH'),
(23, '206024', 'JADHAV AMEY AJIT'),
(24, '206025', 'JADHAV ANUSHKA AVINASH');

-- --------------------------------------------------------

--
-- Table structure for table `winter2025liaabsent`
--

CREATE TABLE `winter2025liaabsent` (
  `id` int(11) NOT NULL,
  `rollno` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winter2025liaabsent`
--

INSERT INTO `winter2025liaabsent` (`id`, `rollno`, `name`) VALUES
(1, '206002', 'BHANDARI SANSKRUTI VIRANNA'),
(2, '206003', 'BHANSE SATYAJEET SAMBHAJI'),
(3, '206004', 'BHOSALE TUSHAR BANDU'),
(4, '206005', 'BURUD APURVA VILAS'),
(5, '206006', 'CHOUGALE SANIKA SATAPPA'),
(6, '206007', 'DANGE HARSHAD AJIT'),
(7, '206008', 'DAPHALE NAMRATA VYANKATESH'),
(8, '206009', 'DELEKAR SIDDHANT KAKASO'),
(9, '206010', 'DESAI PRATIKSHA SARJERAO'),
(10, '206011', 'DEVAKAR PRAJAKTA SHANKAR'),
(11, '206012', 'DHAVARE ROHIT DILIP'),
(12, '206013', 'DONE ROHAN BALASAHEB'),
(13, '206014', 'FADATARE VISHVAL VIJAY'),
(14, '206015', 'GATADE MRUNAL DIPAK'),
(15, '206016', 'GAVADE SHUBHAM SURESH'),
(16, '206017', 'GAVALI SAKSHI DHONDIRAM'),
(17, '206018', 'GAYKWAD SHAMAL SURYAKANT'),
(18, '206019', 'GHATAGE DIKSHA AMAR'),
(19, '206020', 'GOPAL VIJAY DOSE'),
(20, '206021', 'GURAV AKASH PARSHURAM'),
(21, '206022', 'INGALE GOURI SANJAYKUMAR'),
(22, '206023', 'ITKARKAR SNEHA PRAKASH'),
(23, '206024', 'JADHAV AMEY AJIT'),
(24, '206025', 'JADHAV ANUSHKA AVINASH');

-- --------------------------------------------------------

--
-- Table structure for table `winter2025liamarks`
--

CREATE TABLE `winter2025liamarks` (
  `id` int(11) NOT NULL,
  `rollno` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `test1` varchar(255) DEFAULT NULL,
  `test2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winter2025liamarks`
--

INSERT INTO `winter2025liamarks` (`id`, `rollno`, `name`, `test1`, `test2`) VALUES
(1, '206002', 'BHANDARI SANSKRUTI VIRANNA', NULL, NULL),
(2, '206003', 'BHANSE SATYAJEET SAMBHAJI', NULL, NULL),
(3, '206004', 'BHOSALE TUSHAR BANDU', NULL, NULL),
(4, '206005', 'BURUD APURVA VILAS', NULL, NULL),
(5, '206006', 'CHOUGALE SANIKA SATAPPA', NULL, NULL),
(6, '206007', 'DANGE HARSHAD AJIT', NULL, NULL),
(7, '206008', 'DAPHALE NAMRATA VYANKATESH', NULL, NULL),
(8, '206009', 'DELEKAR SIDDHANT KAKASO', NULL, NULL),
(9, '206010', 'DESAI PRATIKSHA SARJERAO', NULL, NULL),
(10, '206011', 'DEVAKAR PRAJAKTA SHANKAR', NULL, NULL),
(11, '206012', 'DHAVARE ROHIT DILIP', NULL, NULL),
(12, '206013', 'DONE ROHAN BALASAHEB', NULL, NULL),
(13, '206014', 'FADATARE VISHVAL VIJAY', NULL, NULL),
(14, '206015', 'GATADE MRUNAL DIPAK', NULL, NULL),
(15, '206016', 'GAVADE SHUBHAM SURESH', NULL, NULL),
(16, '206017', 'GAVALI SAKSHI DHONDIRAM', NULL, NULL),
(17, '206018', 'GAYKWAD SHAMAL SURYAKANT', NULL, NULL),
(18, '206019', 'GHATAGE DIKSHA AMAR', NULL, NULL),
(19, '206020', 'GOPAL VIJAY DOSE', NULL, NULL),
(20, '206021', 'GURAV AKASH PARSHURAM', NULL, NULL),
(21, '206022', 'INGALE GOURI SANJAYKUMAR', NULL, NULL),
(22, '206023', 'ITKARKAR SNEHA PRAKASH', NULL, NULL),
(23, '206024', 'JADHAV AMEY AJIT', NULL, NULL),
(24, '206025', 'JADHAV ANUSHKA AVINASH', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `winter2025os`
--

CREATE TABLE `winter2025os` (
  `id` int(11) NOT NULL,
  `rollno` varchar(255) DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winter2025os`
--

INSERT INTO `winter2025os` (`id`, `rollno`, `student_name`) VALUES
(1, '206002', 'BHANDARI SANSKRUTI VIRANNA'),
(2, '206003', 'BHANSE SATYAJEET SAMBHAJI'),
(3, '206004', 'BHOSALE TUSHAR BANDU'),
(4, '206005', 'BURUD APURVA VILAS'),
(5, '206006', 'CHOUGALE SANIKA SATAPPA'),
(6, '206007', 'DANGE HARSHAD AJIT'),
(7, '206008', 'DAPHALE NAMRATA VYANKATESH'),
(8, '206009', 'DELEKAR SIDDHANT KAKASO'),
(9, '206010', 'DESAI PRATIKSHA SARJERAO'),
(10, '206011', 'DEVAKAR PRAJAKTA SHANKAR'),
(11, '206012', 'DHAVARE ROHIT DILIP'),
(12, '206013', 'DONE ROHAN BALASAHEB'),
(13, '206014', 'FADATARE VISHVAL VIJAY'),
(14, '206015', 'GATADE MRUNAL DIPAK'),
(15, '206016', 'GAVADE SHUBHAM SURESH'),
(16, '206017', 'GAVALI SAKSHI DHONDIRAM'),
(17, '206018', 'GAYKWAD SHAMAL SURYAKANT'),
(18, '206019', 'GHATAGE DIKSHA AMAR'),
(19, '206020', 'GOPAL VIJAY DOSE'),
(20, '206021', 'GURAV AKASH PARSHURAM'),
(21, '206022', 'INGALE GOURI SANJAYKUMAR'),
(22, '206023', 'ITKARKAR SNEHA PRAKASH'),
(23, '206024', 'JADHAV AMEY AJIT'),
(24, '206025', 'JADHAV ANUSHKA AVINASH');

-- --------------------------------------------------------

--
-- Table structure for table `winter2025osabsent`
--

CREATE TABLE `winter2025osabsent` (
  `id` int(11) NOT NULL,
  `rollno` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winter2025osabsent`
--

INSERT INTO `winter2025osabsent` (`id`, `rollno`, `name`) VALUES
(1, '206002', 'BHANDARI SANSKRUTI VIRANNA'),
(2, '206003', 'BHANSE SATYAJEET SAMBHAJI'),
(3, '206004', 'BHOSALE TUSHAR BANDU'),
(4, '206005', 'BURUD APURVA VILAS'),
(5, '206006', 'CHOUGALE SANIKA SATAPPA'),
(6, '206007', 'DANGE HARSHAD AJIT'),
(7, '206008', 'DAPHALE NAMRATA VYANKATESH'),
(8, '206009', 'DELEKAR SIDDHANT KAKASO'),
(9, '206010', 'DESAI PRATIKSHA SARJERAO'),
(10, '206011', 'DEVAKAR PRAJAKTA SHANKAR'),
(11, '206012', 'DHAVARE ROHIT DILIP'),
(12, '206013', 'DONE ROHAN BALASAHEB'),
(13, '206014', 'FADATARE VISHVAL VIJAY'),
(14, '206015', 'GATADE MRUNAL DIPAK'),
(15, '206016', 'GAVADE SHUBHAM SURESH'),
(16, '206017', 'GAVALI SAKSHI DHONDIRAM'),
(17, '206018', 'GAYKWAD SHAMAL SURYAKANT'),
(18, '206019', 'GHATAGE DIKSHA AMAR'),
(19, '206020', 'GOPAL VIJAY DOSE'),
(20, '206021', 'GURAV AKASH PARSHURAM'),
(21, '206022', 'INGALE GOURI SANJAYKUMAR'),
(22, '206023', 'ITKARKAR SNEHA PRAKASH'),
(23, '206024', 'JADHAV AMEY AJIT'),
(24, '206025', 'JADHAV ANUSHKA AVINASH');

-- --------------------------------------------------------

--
-- Table structure for table `winter2025osmarks`
--

CREATE TABLE `winter2025osmarks` (
  `id` int(11) NOT NULL,
  `rollno` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `test1` varchar(255) DEFAULT NULL,
  `test2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winter2025osmarks`
--

INSERT INTO `winter2025osmarks` (`id`, `rollno`, `name`, `test1`, `test2`) VALUES
(1, '206002', 'BHANDARI SANSKRUTI VIRANNA', NULL, NULL),
(2, '206003', 'BHANSE SATYAJEET SAMBHAJI', NULL, NULL),
(3, '206004', 'BHOSALE TUSHAR BANDU', NULL, NULL),
(4, '206005', 'BURUD APURVA VILAS', NULL, NULL),
(5, '206006', 'CHOUGALE SANIKA SATAPPA', NULL, NULL),
(6, '206007', 'DANGE HARSHAD AJIT', NULL, NULL),
(7, '206008', 'DAPHALE NAMRATA VYANKATESH', NULL, NULL),
(8, '206009', 'DELEKAR SIDDHANT KAKASO', NULL, NULL),
(9, '206010', 'DESAI PRATIKSHA SARJERAO', NULL, NULL),
(10, '206011', 'DEVAKAR PRAJAKTA SHANKAR', NULL, NULL),
(11, '206012', 'DHAVARE ROHIT DILIP', NULL, NULL),
(12, '206013', 'DONE ROHAN BALASAHEB', NULL, NULL),
(13, '206014', 'FADATARE VISHVAL VIJAY', NULL, NULL),
(14, '206015', 'GATADE MRUNAL DIPAK', NULL, NULL),
(15, '206016', 'GAVADE SHUBHAM SURESH', NULL, NULL),
(16, '206017', 'GAVALI SAKSHI DHONDIRAM', NULL, NULL),
(17, '206018', 'GAYKWAD SHAMAL SURYAKANT', NULL, NULL),
(18, '206019', 'GHATAGE DIKSHA AMAR', NULL, NULL),
(19, '206020', 'GOPAL VIJAY DOSE', NULL, NULL),
(20, '206021', 'GURAV AKASH PARSHURAM', NULL, NULL),
(21, '206022', 'INGALE GOURI SANJAYKUMAR', NULL, NULL),
(22, '206023', 'ITKARKAR SNEHA PRAKASH', NULL, NULL),
(23, '206024', 'JADHAV AMEY AJIT', NULL, NULL),
(24, '206025', 'JADHAV ANUSHKA AVINASH', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `winter2025php`
--

CREATE TABLE `winter2025php` (
  `id` int(11) NOT NULL,
  `rollno` varchar(255) DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winter2025php`
--

INSERT INTO `winter2025php` (`id`, `rollno`, `student_name`) VALUES
(1, '206002', 'BHANDARI SANSKRUTI VIRANNA'),
(2, '206003', 'BHANSE SATYAJEET SAMBHAJI'),
(3, '206004', 'BHOSALE TUSHAR BANDU'),
(4, '206005', 'BURUD APURVA VILAS'),
(5, '206006', 'CHOUGALE SANIKA SATAPPA'),
(6, '206007', 'DANGE HARSHAD AJIT'),
(7, '206008', 'DAPHALE NAMRATA VYANKATESH'),
(8, '206009', 'DELEKAR SIDDHANT KAKASO'),
(9, '206010', 'DESAI PRATIKSHA SARJERAO'),
(10, '206011', 'DEVAKAR PRAJAKTA SHANKAR'),
(11, '206012', 'DHAVARE ROHIT DILIP'),
(12, '206013', 'DONE ROHAN BALASAHEB'),
(13, '206014', 'FADATARE VISHVAL VIJAY'),
(14, '206015', 'GATADE MRUNAL DIPAK'),
(15, '206016', 'GAVADE SHUBHAM SURESH'),
(16, '206017', 'GAVALI SAKSHI DHONDIRAM'),
(17, '206018', 'GAYKWAD SHAMAL SURYAKANT'),
(18, '206019', 'GHATAGE DIKSHA AMAR'),
(19, '206020', 'GOPAL VIJAY DOSE'),
(20, '206021', 'GURAV AKASH PARSHURAM'),
(21, '206022', 'INGALE GOURI SANJAYKUMAR'),
(22, '206023', 'ITKARKAR SNEHA PRAKASH'),
(23, '206024', 'JADHAV AMEY AJIT'),
(24, '206025', 'JADHAV ANUSHKA AVINASH');

-- --------------------------------------------------------

--
-- Table structure for table `winter2025phpabsent`
--

CREATE TABLE `winter2025phpabsent` (
  `id` int(11) NOT NULL,
  `rollno` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winter2025phpabsent`
--

INSERT INTO `winter2025phpabsent` (`id`, `rollno`, `name`) VALUES
(1, '206002', 'BHANDARI SANSKRUTI VIRANNA'),
(2, '206003', 'BHANSE SATYAJEET SAMBHAJI'),
(3, '206004', 'BHOSALE TUSHAR BANDU'),
(4, '206005', 'BURUD APURVA VILAS'),
(5, '206006', 'CHOUGALE SANIKA SATAPPA'),
(6, '206007', 'DANGE HARSHAD AJIT'),
(7, '206008', 'DAPHALE NAMRATA VYANKATESH'),
(8, '206009', 'DELEKAR SIDDHANT KAKASO'),
(9, '206010', 'DESAI PRATIKSHA SARJERAO'),
(10, '206011', 'DEVAKAR PRAJAKTA SHANKAR'),
(11, '206012', 'DHAVARE ROHIT DILIP'),
(12, '206013', 'DONE ROHAN BALASAHEB'),
(13, '206014', 'FADATARE VISHVAL VIJAY'),
(14, '206015', 'GATADE MRUNAL DIPAK'),
(15, '206016', 'GAVADE SHUBHAM SURESH'),
(16, '206017', 'GAVALI SAKSHI DHONDIRAM'),
(17, '206018', 'GAYKWAD SHAMAL SURYAKANT'),
(18, '206019', 'GHATAGE DIKSHA AMAR'),
(19, '206020', 'GOPAL VIJAY DOSE'),
(20, '206021', 'GURAV AKASH PARSHURAM'),
(21, '206022', 'INGALE GOURI SANJAYKUMAR'),
(22, '206023', 'ITKARKAR SNEHA PRAKASH'),
(23, '206024', 'JADHAV AMEY AJIT'),
(24, '206025', 'JADHAV ANUSHKA AVINASH');

-- --------------------------------------------------------

--
-- Table structure for table `winter2025phpmarks`
--

CREATE TABLE `winter2025phpmarks` (
  `id` int(11) NOT NULL,
  `rollno` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `test1` varchar(255) DEFAULT NULL,
  `test2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winter2025phpmarks`
--

INSERT INTO `winter2025phpmarks` (`id`, `rollno`, `name`, `test1`, `test2`) VALUES
(1, '206002', 'BHANDARI SANSKRUTI VIRANNA', NULL, NULL),
(2, '206003', 'BHANSE SATYAJEET SAMBHAJI', NULL, NULL),
(3, '206004', 'BHOSALE TUSHAR BANDU', NULL, NULL),
(4, '206005', 'BURUD APURVA VILAS', NULL, NULL),
(5, '206006', 'CHOUGALE SANIKA SATAPPA', NULL, NULL),
(6, '206007', 'DANGE HARSHAD AJIT', NULL, NULL),
(7, '206008', 'DAPHALE NAMRATA VYANKATESH', NULL, NULL),
(8, '206009', 'DELEKAR SIDDHANT KAKASO', NULL, NULL),
(9, '206010', 'DESAI PRATIKSHA SARJERAO', NULL, NULL),
(10, '206011', 'DEVAKAR PRAJAKTA SHANKAR', NULL, NULL),
(11, '206012', 'DHAVARE ROHIT DILIP', NULL, NULL),
(12, '206013', 'DONE ROHAN BALASAHEB', NULL, NULL),
(13, '206014', 'FADATARE VISHVAL VIJAY', NULL, NULL),
(14, '206015', 'GATADE MRUNAL DIPAK', NULL, NULL),
(15, '206016', 'GAVADE SHUBHAM SURESH', NULL, NULL),
(16, '206017', 'GAVALI SAKSHI DHONDIRAM', NULL, NULL),
(17, '206018', 'GAYKWAD SHAMAL SURYAKANT', NULL, NULL),
(18, '206019', 'GHATAGE DIKSHA AMAR', NULL, NULL),
(19, '206020', 'GOPAL VIJAY DOSE', NULL, NULL),
(20, '206021', 'GURAV AKASH PARSHURAM', NULL, NULL),
(21, '206022', 'INGALE GOURI SANJAYKUMAR', NULL, NULL),
(22, '206023', 'ITKARKAR SNEHA PRAKASH', NULL, NULL),
(23, '206024', 'JADHAV AMEY AJIT', NULL, NULL),
(24, '206025', 'JADHAV ANUSHKA AVINASH', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `winter2025studentdetail`
--

CREATE TABLE `winter2025studentdetail` (
  `id` int(11) NOT NULL,
  `rollno` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winter2025studentdetail`
--

INSERT INTO `winter2025studentdetail` (`id`, `rollno`, `name`, `subject`) VALUES
(1, '206002', 'BHANDARI SANSKRUTI VIRANNA', 'php,lia,os,java'),
(2, '206003', 'BHANSE SATYAJEET SAMBHAJI', 'php,lia,os,java'),
(3, '206004', 'BHOSALE TUSHAR BANDU', 'php,lia,os,java'),
(4, '206005', 'BURUD APURVA VILAS', 'php,lia,os,java'),
(5, '206006', 'CHOUGALE SANIKA SATAPPA', 'php,lia,os,java'),
(6, '206007', 'DANGE HARSHAD AJIT', 'php,lia,os,java'),
(7, '206008', 'DAPHALE NAMRATA VYANKATESH', 'php,lia,os,java'),
(8, '206009', 'DELEKAR SIDDHANT KAKASO', 'php,lia,os,java'),
(9, '206010', 'DESAI PRATIKSHA SARJERAO', 'php,lia,os,java'),
(10, '206011', 'DEVAKAR PRAJAKTA SHANKAR', 'php,lia,os,java'),
(11, '206012', 'DHAVARE ROHIT DILIP', 'php,lia,os,java'),
(12, '206013', 'DONE ROHAN BALASAHEB', 'php,lia,os,java'),
(13, '206014', 'FADATARE VISHVAL VIJAY', 'php,lia,os,java'),
(14, '206015', 'GATADE MRUNAL DIPAK', 'php,lia,os,java'),
(15, '206016', 'GAVADE SHUBHAM SURESH', 'php,lia,os,java'),
(16, '206017', 'GAVALI SAKSHI DHONDIRAM', 'php,lia,os,java'),
(17, '206018', 'GAYKWAD SHAMAL SURYAKANT', 'php,lia,os,java'),
(18, '206019', 'GHATAGE DIKSHA AMAR', 'php,lia,os,java'),
(19, '206020', 'GOPAL VIJAY DOSE', 'php,lia,os,java'),
(20, '206021', 'GURAV AKASH PARSHURAM', 'php,lia,os,java'),
(21, '206022', 'INGALE GOURI SANJAYKUMAR', 'php,lia,os,java'),
(22, '206023', 'ITKARKAR SNEHA PRAKASH', 'php,lia,os,java'),
(23, '206024', 'JADHAV AMEY AJIT', 'php,lia,os,java'),
(24, '206025', 'JADHAV ANUSHKA AVINASH', 'php,lia,os,java');

-- --------------------------------------------------------

--
-- Table structure for table `winter2025subject`
--

CREATE TABLE `winter2025subject` (
  `id` int(11) NOT NULL,
  `subject_code` varchar(255) DEFAULT NULL,
  `subject_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winter2025subject`
--

INSERT INTO `winter2025subject` (`id`, `subject_code`, `subject_name`) VALUES
(1, 'ITG401', 'php'),
(2, 'ITG402', 'lia'),
(3, 'ITG403', 'os'),
(4, 'ITG404', 'java');

-- --------------------------------------------------------

--
-- Table structure for table `winter2025teacher`
--

CREATE TABLE `winter2025teacher` (
  `id` int(11) NOT NULL,
  `teacher_code` varchar(255) DEFAULT NULL,
  `teacher_name` varchar(255) DEFAULT NULL,
  `teacher_subject` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winter2025teacher`
--

INSERT INTO `winter2025teacher` (`id`, `teacher_code`, `teacher_name`, `teacher_subject`) VALUES
(1, '2002', 'Madhuri Aarde', 'php,lia'),
(2, '2003', 'Preeti Kole', 'os,java');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absent`
--
ALTER TABLE `absent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`) USING HASH;

--
-- Indexes for table `academiccalendar`
--
ALTER TABLE `academiccalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attandance`
--
ALTER TABLE `attandance`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`) USING HASH;

--
-- Indexes for table `bat1attend`
--
ALTER TABLE `bat1attend`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`) USING HASH;

--
-- Indexes for table `bat1marks`
--
ALTER TABLE `bat1marks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`) USING HASH;

--
-- Indexes for table `bat2attend`
--
ALTER TABLE `bat2attend`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`) USING HASH;

--
-- Indexes for table `bat3attend`
--
ALTER TABLE `bat3attend`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`) USING HASH;

--
-- Indexes for table `batch1`
--
ALTER TABLE `batch1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`) USING HASH;

--
-- Indexes for table `batch2`
--
ALTER TABLE `batch2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`) USING HASH;

--
-- Indexes for table `batch3`
--
ALTER TABLE `batch3`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`) USING HASH;

--
-- Indexes for table `coursecurri`
--
ALTER TABLE `coursecurri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessplan`
--
ALTER TABLE `lessplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_teacher`
--
ALTER TABLE `login_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`);

--
-- Indexes for table `practicalplan`
--
ALTER TABLE `practicalplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semlist`
--
ALTER TABLE `semlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacplan`
--
ALTER TABLE `teacplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testpaper`
--
ALTER TABLE `testpaper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vismis`
--
ALTER TABLE `vismis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter2025java`
--
ALTER TABLE `winter2025java`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter2025javaabsent`
--
ALTER TABLE `winter2025javaabsent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter2025javamarks`
--
ALTER TABLE `winter2025javamarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter2025lia`
--
ALTER TABLE `winter2025lia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter2025liaabsent`
--
ALTER TABLE `winter2025liaabsent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter2025liamarks`
--
ALTER TABLE `winter2025liamarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter2025os`
--
ALTER TABLE `winter2025os`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter2025osabsent`
--
ALTER TABLE `winter2025osabsent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter2025osmarks`
--
ALTER TABLE `winter2025osmarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter2025php`
--
ALTER TABLE `winter2025php`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter2025phpabsent`
--
ALTER TABLE `winter2025phpabsent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter2025phpmarks`
--
ALTER TABLE `winter2025phpmarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter2025studentdetail`
--
ALTER TABLE `winter2025studentdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter2025subject`
--
ALTER TABLE `winter2025subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter2025teacher`
--
ALTER TABLE `winter2025teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absent`
--
ALTER TABLE `absent`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `academiccalendar`
--
ALTER TABLE `academiccalendar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attandance`
--
ALTER TABLE `attandance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bat1attend`
--
ALTER TABLE `bat1attend`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `bat1marks`
--
ALTER TABLE `bat1marks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bat2attend`
--
ALTER TABLE `bat2attend`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `bat3attend`
--
ALTER TABLE `bat3attend`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `batch1`
--
ALTER TABLE `batch1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `batch2`
--
ALTER TABLE `batch2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `batch3`
--
ALTER TABLE `batch3`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `coursecurri`
--
ALTER TABLE `coursecurri`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessplan`
--
ALTER TABLE `lessplan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_teacher`
--
ALTER TABLE `login_teacher`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `practicalplan`
--
ALTER TABLE `practicalplan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `semlist`
--
ALTER TABLE `semlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacplan`
--
ALTER TABLE `teacplan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testpaper`
--
ALTER TABLE `testpaper`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vismis`
--
ALTER TABLE `vismis`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `winter2025java`
--
ALTER TABLE `winter2025java`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `winter2025javaabsent`
--
ALTER TABLE `winter2025javaabsent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `winter2025javamarks`
--
ALTER TABLE `winter2025javamarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `winter2025lia`
--
ALTER TABLE `winter2025lia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `winter2025liaabsent`
--
ALTER TABLE `winter2025liaabsent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `winter2025liamarks`
--
ALTER TABLE `winter2025liamarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `winter2025os`
--
ALTER TABLE `winter2025os`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `winter2025osabsent`
--
ALTER TABLE `winter2025osabsent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `winter2025osmarks`
--
ALTER TABLE `winter2025osmarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `winter2025php`
--
ALTER TABLE `winter2025php`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `winter2025phpabsent`
--
ALTER TABLE `winter2025phpabsent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `winter2025phpmarks`
--
ALTER TABLE `winter2025phpmarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `winter2025studentdetail`
--
ALTER TABLE `winter2025studentdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `winter2025subject`
--
ALTER TABLE `winter2025subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `winter2025teacher`
--
ALTER TABLE `winter2025teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
