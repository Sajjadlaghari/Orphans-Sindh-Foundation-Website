-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 07:28 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osfrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminnf`
--

CREATE TABLE `adminnf` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminnf`
--

INSERT INTO `adminnf` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'testuser', 'sajjadlaghari723@gmail.com', '6ad14ba9986e3615423dfca256d04e3f');

-- --------------------------------------------------------

--
-- Table structure for table `adopted_child_record`
--

CREATE TABLE `adopted_child_record` (
  `id` int(11) NOT NULL,
  `Child_name` varchar(100) NOT NULL,
  `Child_cnic` varchar(17) NOT NULL,
  `Adopter_name` varchar(100) NOT NULL,
  `Adopter_cnic` varchar(18) NOT NULL,
  `Contact_no` varchar(50) NOT NULL,
  `Present_address` text NOT NULL,
  `Permanent_address` text NOT NULL,
  `Job_details` text NOT NULL,
  `Other_family_info` text NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adopted_child_record`
--

INSERT INTO `adopted_child_record` (`id`, `Child_name`, `Child_cnic`, `Adopter_name`, `Adopter_cnic`, `Contact_no`, `Present_address`, `Permanent_address`, `Job_details`, `Other_family_info`, `Time`) VALUES
(1, 'Ehsan Ali', '45304-2353985-7', 'Akhtiar Ahmed', '45201-2353985-5', '03943825312', 'Alamdar Chownk Qasimabad Hyderabd', 'Village Shafi Muhammad Gaho District badin', 'Adopter job is Professor at badin Campus', 'father died mother alive and no other family member', '2021-10-23 19:52:29'),
(2, 'Javeed', '45304-2353985-7', 'Safdar Ahmed', '45201-2353985-7', '03043825312', 'Citizen Colony Street No 4 Qasimabad Hyderabad', 'Citizen Colony Street No 4 Qasimabad Hyderabad', 'Clerk At Degree Collage Qasimabad Hyderabad ', 'Father Mother and Wife', '2021-10-23 20:31:01'),
(3, 'Aftab Ali', '45304-2353985-7', 'Akhtiar Ahmed', '45201-2353985-5', '03943825312', 'Alamdar Chownk Qasimabad Hyderabd', 'Village Shafi Muhammad Gaho District badin', 'Adopter job is Professor at badin Campus', 'Just Wife', '2021-10-23 20:46:31'),
(4, 'Aftab Ali', '45304-2353985-7', 'Akhtiar Ahmed', '45201-2353985-5', '03943825312', 'Alamdar Chownk Qasimabad Hyderabd', 'Village Shafi Muhammad Gaho District badin', 'Adopter job is Professor at badin Campus', 'Just Wife', '2021-10-23 20:46:33'),
(7, 'Shuhban Ali', '45304-2353985-8', 'Abdullah', '45201-2353985-8', '030843825312', 'Alamdar Chownk  street No 8 Qasimabad Hyderabd', 'Village Shafi Muhammad Gaho District badin', 'Clerk job is Professor at badin Campus', 'Just Wife', '2021-10-23 20:46:35'),
(8, 'Aftab Ali', '45304-2353985-7', 'Akhtiar Ahmed', '45201-2353985-7', '030843825312', 'Citizen Colony Street No 4 Qasimabad Hyderabad', 'Citizen Colony Street No 2 Qasimabad Hyderabad', 'Clerk At Degree Collage Hyderabad', 'just have Wife in Family', '2021-11-05 06:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `child_record`
--

CREATE TABLE `child_record` (
  `Child_id` int(11) NOT NULL,
  `Child_name` varchar(200) NOT NULL,
  `CNIC_B_Form` varchar(15) NOT NULL,
  `Addmission_date` date NOT NULL,
  `Date_of_brith` date NOT NULL,
  `Religion` varchar(100) NOT NULL,
  `Sponsor_status` varchar(100) NOT NULL,
  `Sponsor_name` text NOT NULL,
  `Schooling_before` varchar(100) NOT NULL,
  `Current_class` varchar(300) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Place_of_brith` text NOT NULL,
  `Height` varchar(100) NOT NULL,
  `Weight` varchar(100) NOT NULL,
  `Blood_group` varchar(100) NOT NULL,
  `Identification` varchar(100) NOT NULL,
  `Medical_deficiency` text NOT NULL,
  `Parent_medical_history` text NOT NULL,
  `Circumcis` varchar(100) NOT NULL,
  `Reason_to_join` text NOT NULL,
  `Addmitter_detail` text NOT NULL,
  `Assets_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child_record`
--

INSERT INTO `child_record` (`Child_id`, `Child_name`, `CNIC_B_Form`, `Addmission_date`, `Date_of_brith`, `Religion`, `Sponsor_status`, `Sponsor_name`, `Schooling_before`, `Current_class`, `Gender`, `Place_of_brith`, `Height`, `Weight`, `Blood_group`, `Identification`, `Medical_deficiency`, `Parent_medical_history`, `Circumcis`, `Reason_to_join`, `Addmitter_detail`, `Assets_details`) VALUES
(38, 'Sarfaraz', '45304-2353985-7', '2021-01-01', '2010-01-16', 'Islam', 'Yes', 'Mujeeb ul Rehman', '4th Pass', '5th Class', 'Male', 'Hyderabad Qasimabad Sindh', '3', '25 Kg', 'O-', 'mole on cheeck', 'No', 'Parents were safe from any kind disease', 'Yes', 'parents died', 'Police', 'No'),
(39, 'Sarfaraz', '45304-2353985-7', '2021-01-01', '2010-01-16', 'Islam', 'Yes', 'Mujeeb ul Rehman', '4th Pass', '5th Class', 'Male', 'Village Ali Muhmmad New Jataoi Naushahro Feroze', '3', '25 Kg', 'O-', 'mole on cheeck', 'No', 'Parents were safe from any kind disease', 'Yes', 'parents died', 'Police', 'No'),
(40, 'Sarfaraz', '45304-2353985-7', '2021-01-01', '2010-01-16', 'Islam', 'Yes', 'Mujeeb ul Rehman', '4th Pass', '5th Class', 'Male', 'Village Ali Muhmmad New Jataoi Naushahro Feroze', '3', '25 Kg', 'O-', 'mole on cheeck', 'No', 'Parents were safe from any kind disease', 'Yes', 'parents died', 'Police', 'No'),
(41, 'Sarfaraz', '45304-2353985-7', '2021-01-01', '2010-01-16', 'Islam', 'Yes', 'Mujeeb ul Rehman', '4th Pass', '5th Class', 'Male', 'Village Ali Muhmmad New Jataoi Naushahro Feroze', '3', '25 Kg', 'O-', 'mole on cheeck', 'No', 'Parents were safe from any kind disease', 'Yes', 'parents died', 'Police', 'No'),
(42, 'Sarfaraz', '45304-2353985-7', '2021-01-01', '2010-01-16', 'Islam', 'Yes', 'Mujeeb ul Rehman', '4th Pass', '5th Class', 'Male', 'Village Ali Muhmmad New Jataoi Naushahro Feroze', '3', '25 Kg', 'O-', 'mole on cheeck', 'No', 'Parents were safe from any kind disease', 'Yes', 'parents died', 'Police', 'No'),
(44, 'Majid hassan', '45304-2353985-7', '2021-10-01', '2008-11-16', 'Islam', 'Yes', 'Abdul Hafeez', 'Fourth Pass', '6th', 'Male', 'Sohrab Goth Karachi', '3', '30kg', 'O+', 'Right eye cut', 'No', 'Parent were safe any kind of disease', 'Yes', 'Parent Died', 'Court', 'No'),
(47, 'Akhtiar', '45304-2353985-8', '2021-10-10', '2014-12-11', 'Islam', 'Yes', 'Aftab Laghari', '5th Pass', '6th', 'Male', 'Sohrab Goth Karachi', '3.5', '25 Kg', 'AB+', 'Left eye cut', 'No', 'Parent were safe any kind of disease', 'Yes', 'Parent Died', 'Police', 'No'),
(48, 'Akhtiar', '45304-2353985-8', '2021-10-10', '2014-12-11', 'Islam', 'Yes', 'Aftab Laghari', '5th Pass', '6th', 'Male', 'Sohrab Goth Karachi', '3.5', '25 Kg', 'AB+', 'Left eye cut', 'No', 'Parent were safe any kind of disease', 'Yes', 'Parent Died', 'Police', 'No'),
(49, 'Akhtiar', '45304-2353985-8', '2021-10-10', '2014-12-11', 'Islam', 'Yes', 'Aftab Laghari', '5th Pass', '6th', 'Male', 'Sohrab Goth Karachi', '3.5', '25 Kg', 'AB+', 'Left eye cut', 'No', 'Parent were safe any kind of disease', 'Yes', 'Parent Died', 'Police', 'No'),
(50, 'Akhtiar', '45304-2353985-8', '2021-10-10', '2014-12-11', 'Islam', 'Yes', 'Aftab Laghari', '5th Pass', '6th', 'Male', 'Sohrab Goth Karachi', '3.5', '25 Kg', 'AB+', 'Left eye cut', 'No', 'Parent were safe any kind of disease', 'Yes', 'Parent Died', 'Police', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `contactmessageformainhomepage`
--

CREATE TABLE `contactmessageformainhomepage` (
  `S_No` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` varchar(240) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactmessageformainhomepage`
--

INSERT INTO `contactmessageformainhomepage` (`S_No`, `Name`, `Email`, `Subject`, `Message`, `Time`) VALUES
(4, 'sajjad Ali', 'sajjadlaghari723@gmail.com', 'Appericiate', 'I really Like Your Work you are doing really good work for orphans child', '2021-11-04 19:57:53'),
(5, 'sajjad Ali', 'sajjadlaghari723@gmail.com', 'Appericiate', 'I really Like Your Work you are doing really good work for orphans child', '2021-11-04 19:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `contactmessagefornfpage`
--

CREATE TABLE `contactmessagefornfpage` (
  `S_No` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` varchar(240) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactmessagefornfpage`
--

INSERT INTO `contactmessagefornfpage` (`S_No`, `Name`, `Email`, `Subject`, `Message`, `Time`) VALUES
(2, 'Sajjad', 'sajjadlaghari723@gmail.com', 'Wishes', 'I appreciated your work', '2021-10-18 19:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `donerdetails`
--

CREATE TABLE `donerdetails` (
  `S_No` int(11) NOT NULL,
  `Doner_Name` varchar(50) NOT NULL,
  `Doner_Email` varchar(50) NOT NULL,
  `Doner_Contact_No` varchar(100) NOT NULL,
  `Doner_Address` varchar(240) NOT NULL,
  `Done_City` varchar(100) NOT NULL,
  `Doner_State` varchar(100) NOT NULL,
  `Monthly_One_Time` varchar(100) NOT NULL,
  `Doner_Country` varchar(100) NOT NULL,
  `Doner_Message` varchar(245) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Amount_For` varchar(100) NOT NULL,
  `Pay_via` varchar(100) NOT NULL,
  `Where_From_Hear` varchar(100) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donerdetails`
--

INSERT INTO `donerdetails` (`S_No`, `Doner_Name`, `Doner_Email`, `Doner_Contact_No`, `Doner_Address`, `Done_City`, `Doner_State`, `Monthly_One_Time`, `Doner_Country`, `Doner_Message`, `Amount`, `Amount_For`, `Pay_via`, `Where_From_Hear`, `Time`) VALUES
(3, 'sajjad ali', 'sajjadlaghari723@gmail.com', '03003929585', 'village Noor Muhammad Laghari', 'Naushahro Feroze', 'pakistan', 'Onetime', 'pakistan', 'i share my donation details with you', '10000', 'Sadqa', 'Mobicash', 'Newspaper', '2021-10-18 19:02:23'),
(4, 'sajjad ali', 'sajjadlaghari723@gmail.com', '03003929585', 'village Noor Muhammad Laghari', 'Naushahro Feroze', 'pakistan', 'Onetime', 'pakistan', 'i share my donation details with you', '10000', 'Sadqa', 'Mobicash', 'Newspaper', '2021-10-18 19:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `resquestforadoptchild`
--

CREATE TABLE `resquestforadoptchild` (
  `S_No` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_Number` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Message` varchar(240) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resquestforadoptchild`
--

INSERT INTO `resquestforadoptchild` (`S_No`, `First_Name`, `Last_Name`, `Address`, `Email`, `Phone_Number`, `Gender`, `Message`, `Time`) VALUES
(3, 'sajjadhussain', 'Laghari', 'Village Noor Muhammad Laghari District Naushahro Feroze', 'sajjadlaghari723@gmail.com', '03002929454', 'Boy', 'i want to adopt child', '2021-10-18 19:19:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminnf`
--
ALTER TABLE `adminnf`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `adopted_child_record`
--
ALTER TABLE `adopted_child_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_record`
--
ALTER TABLE `child_record`
  ADD PRIMARY KEY (`Child_id`);

--
-- Indexes for table `contactmessageformainhomepage`
--
ALTER TABLE `contactmessageformainhomepage`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `contactmessagefornfpage`
--
ALTER TABLE `contactmessagefornfpage`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `donerdetails`
--
ALTER TABLE `donerdetails`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `resquestforadoptchild`
--
ALTER TABLE `resquestforadoptchild`
  ADD PRIMARY KEY (`S_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminnf`
--
ALTER TABLE `adminnf`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adopted_child_record`
--
ALTER TABLE `adopted_child_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `child_record`
--
ALTER TABLE `child_record`
  MODIFY `Child_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `contactmessageformainhomepage`
--
ALTER TABLE `contactmessageformainhomepage`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contactmessagefornfpage`
--
ALTER TABLE `contactmessagefornfpage`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donerdetails`
--
ALTER TABLE `donerdetails`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `resquestforadoptchild`
--
ALTER TABLE `resquestforadoptchild`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
