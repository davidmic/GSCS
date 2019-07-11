-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2018 at 08:35 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE IF NOT EXISTS `adminreg` (
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
  `falstatus` varchar(250) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`id`, `matric_no`, `password`, `hpassword`, `Status`, `f_name`, `l_name`, `m_name`, `sex`, `dept`, `cos`, `faculty`, `phone_no`, `e_mail`, `hodstatus`, `burstatus`, `falstatus`) VALUES
(1, 'sci14csc031', '12345', '8cb2237d0679ca88db6464eac60da96345513964', 'Not Cleared', 'David', 'Michael', 'Omini', 'Male', 'Computer Science', 'Computer Science', 'Science', '08142951042', 'davidomini@gmail.com', 'Pending', 'Pending', 'Pending'),
(2, '', '12345', '8cb2237d0679ca88db6464eac60da96345513964', '', 'Bashir', 'Usman', '', '', '', '', '', '', '', 'Pending', 'Pending', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `bimage`
--

CREATE TABLE IF NOT EXISTS `bimage` (
`id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `imagename` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bimage`
--

INSERT INTO `bimage` (`id`, `student_id`, `name`, `imagename`) VALUES
(1, 1, 'School Fees Receipt 100L', 'Capture.PNG'),
(2, 1, 'School Fees Receipt 100L', 'eff1.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `dimage`
--

CREATE TABLE IF NOT EXISTS `dimage` (
`id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `imagename` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dimage`
--

INSERT INTO `dimage` (`id`, `student_id`, `name`, `imagename`) VALUES
(1, 1, 'Departmental Receipt 100L', '001.jpg'),
(2, 1, 'Departmental Receipt 100L', '002.jpg'),
(3, 1, 'Departmental Receipt 100L', '003.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fimage`
--

CREATE TABLE IF NOT EXISTS `fimage` (
`id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `imagename` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fimage`
--

INSERT INTO `fimage` (`id`, `student_id`, `name`, `imagename`) VALUES
(1, 1, 'Falculty Receipt 100L', 'SAM_ACCEPT 001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hodclear`
--

CREATE TABLE IF NOT EXISTS `hodclear` (
`id` int(11) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hodtbl`
--

CREATE TABLE IF NOT EXISTS `hodtbl` (
`id` int(11) NOT NULL,
  `staff_id` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `hpassword` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `dept` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
 ADD PRIMARY KEY (`id`), ADD KEY `matric_no` (`matric_no`);

--
-- Indexes for table `bimage`
--
ALTER TABLE `bimage`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dimage`
--
ALTER TABLE `dimage`
 ADD PRIMARY KEY (`id`), ADD KEY `student_id` (`student_id`), ADD KEY `student_id_2` (`student_id`), ADD KEY `student_id_3` (`student_id`);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bimage`
--
ALTER TABLE `bimage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dimage`
--
ALTER TABLE `dimage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fimage`
--
ALTER TABLE `fimage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hodclear`
--
ALTER TABLE `hodclear`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hodtbl`
--
ALTER TABLE `hodtbl`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
