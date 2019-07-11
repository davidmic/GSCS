-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 06:54 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE `adminreg` (
  `id` int(11) NOT NULL,
  `matric_no` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hpassword` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `m_name` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `dept` varchar(250) NOT NULL,
  `cos` varchar(250) NOT NULL,
  `faculty` varchar(250) NOT NULL,
  `phone_no` varchar(250) NOT NULL,
  `e_mail` varchar(250) NOT NULL,
  `hodstatus` varchar(250) NOT NULL DEFAULT 'Pending',
  `burstatus` varchar(250) NOT NULL DEFAULT 'Pending',
  `falstatus` varchar(250) NOT NULL DEFAULT 'Pending',
  `library` varchar(255) NOT NULL DEFAULT 'Approved',
  `health` varchar(255) NOT NULL DEFAULT 'Approved',
  `sport` varchar(255) NOT NULL DEFAULT 'Approved',
  `security` varchar(255) NOT NULL DEFAULT 'Approved',
  `studentaffairs` varchar(255) NOT NULL DEFAULT 'Approved',
  `academicaffairs` varchar(255) NOT NULL DEFAULT 'Approved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`id`, `matric_no`, `password`, `hpassword`, `Status`, `f_name`, `l_name`, `m_name`, `sex`, `dept`, `cos`, `faculty`, `phone_no`, `e_mail`, `hodstatus`, `burstatus`, `falstatus`, `library`, `health`, `sport`, `security`, `studentaffairs`, `academicaffairs`) VALUES
(1, 'sci14csc031', '12345', '8cb2237d0679ca88db6464eac60da96345513964', 'Not Cleared', 'David', 'Michael', 'Omini', 'Male', 'Computer Science', 'Computer Science', 'Science', '08142951042', 'davidomini@gmail.com', 'Pending', 'Disapprove', 'Pending', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved'),
(3, 'sci14csc020', '12345', '8cb2237d0679ca88db6464eac60da96345513964', 'Not Cleared', 'Samuel', 'Idode', '', '', '', '', '', '', '', 'Pending', 'Pending', 'Pending', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved'),
(4, 'sci14csc001', '12345', '8cb2237d0679ca88db6464eac60da96345513964', 'Not Cleared', 'Christain', 'Ugbede', '', '', '', '', '', '', '', 'Pending', 'Pending', 'Pending', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved'),
(5, 'sci14csc031', '12345', '8cb2237d0679ca88db6464eac60da96345513964', 'Not Cleared', 'Samuel', 'Matthew', '', '', '', '', '', '', '', 'Pending', 'Disapprove', 'Pending', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved'),
(7, 'sci14csc002', '12345', '8cb2237d0679ca88db6464eac60da96345513964', 'Not Cleared', 'Femi', 'Matthew', '', '', '', '', '', '', '', 'Pending', 'Pending', 'Pending', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved'),
(8, 'sci14csc051', '12345', '8cb2237d0679ca88db6464eac60da96345513964', 'Not Cleared', 'Jamiu', 'Salihu', '', '', '', '', '', '', '', 'Pending', 'Pending', 'Pending', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved'),
(9, 'sci14csc055', '12345', '8cb2237d0679ca88db6464eac60da96345513964', 'Not Cleared', 'Rahmat', 'Yahaya', '', '', '', '', '', '', '', 'Pending', 'Pending', 'Pending', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved'),
(10, 'sci14csc008', '12345', '8cb2237d0679ca88db6464eac60da96345513964', 'Not Cleared', 'Idowu', 'Adive', '', '', '', '', '', '', '', 'Pending', 'Pending', 'Pending', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved'),
(11, 'sci14csc011', '12345', '8cb2237d0679ca88db6464eac60da96345513964', 'Not Cleared', 'David ', 'Michael', 'Omini', 'Male', 'Computer Science', 'Computer Science', 'Science', '08142951042', 'davidomini@gmail.com', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `bimage`
--

CREATE TABLE `bimage` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `imagename` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bimage`
--

INSERT INTO `bimage` (`id`, `student_id`, `name`, `imagename`) VALUES
(1, 1, 'School Fees Receipt 100L', 'Capture.PNG'),
(2, 1, 'School Fees Receipt 100L', 'eff1.PNG'),
(3, 11, 'School Fees Receipt 100L', 'fees.jpg'),
(4, 11, 'School Fees Receipt 100L', 'fees - Copy.jpg'),
(5, 11, 'School Fees Receipt 100L', 'fees - Copy (2).jpg'),
(6, 11, 'School Fees Receipt 100L', 'fees - Copy (3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dimage`
--

CREATE TABLE `dimage` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `imagename` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dimage`
--

INSERT INTO `dimage` (`id`, `student_id`, `name`, `imagename`) VALUES
(1, 1, 'Departmental Receipt 100L', '001.jpg'),
(5, 1, 'Departmental Receipt 200L', 'share-1.jpg'),
(6, 1, 'Departmental Receipt 300L', 'share-2.jpg'),
(7, 1, 'Departmental Receipt 400L', 'share.jpg'),
(8, 11, 'Departmental Receipt 100L', 'dept.jpg'),
(9, 11, 'Departmental Receipt 200L', 'dept - Copy.jpg'),
(10, 11, 'Departmental Receipt 300L', 'dept - Copy (2).jpg'),
(11, 11, 'Departmental Receipt 400L', 'dept - Copy (3).jpg'),
(13, 3, 'Departmental Receipt 100L', 'fees - Copy (3).jpg'),
(14, 3, 'Departmental Receipt 100L', 'dept.jpg'),
(15, 3, 'Departmental Receipt 100L', 'dept.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fimage`
--

CREATE TABLE `fimage` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `imagename` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fimage`
--

INSERT INTO `fimage` (`id`, `student_id`, `name`, `imagename`) VALUES
(1, 1, 'Falculty Receipt 100L', 'SAM_ACCEPT 001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hodclear`
--

CREATE TABLE `hodclear` (
  `id` int(11) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hodtbl`
--

CREATE TABLE `hodtbl` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `hpassword` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `dept` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hodtbl`
--

INSERT INTO `hodtbl` (`id`, `staff_id`, `password`, `hpassword`, `f_name`, `l_name`, `dept`) VALUES
(1, 'bur123', '12345', '8cb2237d0679ca88db6464eac60da96345513964', 'Bashir', 'Usman', 'Bursary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminreg`
--
ALTER TABLE `adminreg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matric_no` (`matric_no`);

--
-- Indexes for table `bimage`
--
ALTER TABLE `bimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dimage`
--
ALTER TABLE `dimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `student_id_2` (`student_id`),
  ADD KEY `student_id_3` (`student_id`);

--
-- Indexes for table `fimage`
--
ALTER TABLE `fimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hodclear`
--
ALTER TABLE `hodclear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hodtbl`
--
ALTER TABLE `hodtbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminreg`
--
ALTER TABLE `adminreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bimage`
--
ALTER TABLE `bimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dimage`
--
ALTER TABLE `dimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `fimage`
--
ALTER TABLE `fimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hodclear`
--
ALTER TABLE `hodclear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hodtbl`
--
ALTER TABLE `hodtbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
