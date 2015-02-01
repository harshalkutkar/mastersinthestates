-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2015 at 04:47 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mastersinthestates`
--

-- --------------------------------------------------------

--
-- Table structure for table `deadlines`
--

CREATE TABLE IF NOT EXISTS `deadlines` (
`id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL COMMENT 'gre/gpa/toefl',
  `value` float NOT NULL,
  `program_id` int(11) NOT NULL COMMENT 'references program id'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
`id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `university_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(800) NOT NULL,
  `website` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `school_id`, `university_id`, `name`, `description`, `website`) VALUES
(1, 1, 9, 'MSIT Mobility', 'Carnegie Mellon''s Information Networking Institute (INI) offers the MSIT in Mobility (MOB) to prepare students to be at the forefront of the converged mobile/Internet regime with a multidisciplinary curriculum spanning both technical and business topics in mobile applications, services and devices.', 'http://www.cmu.edu/silicon-valley/academics/msit/msit-mob.html'),
(2, 1, 9, 'Master of Science in Information Technology - Information Security (MSIT-IS)', 'Specifically, the MSIT-IS program is designed to prepare students to:\r\ngrid-image\r\nDevelop expertise in both theory and practice of information security\r\nAcquire a detailed understanding of information security challenges in networks and software systems', 'http://www.cmu.edu/silicon-valley/academics/msit/msit-is.html'),
(3, 2, 9, 'Master of Science in Computer Science\r\nMS(CS)\r\n', 'The MS program in Computer Science offers students with a Bachelor''s degree the opportunity to improve their training with advanced study in Computer Science. We cater to students with basic analytic skills and a strong aptitude for mathematics, programming, and logical reasoning.', 'http://www.cs.cmu.edu/masters-programs');

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE IF NOT EXISTS `requirements` (
`id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL COMMENT 'gre/gpa/toefl/wex',
  `value` float NOT NULL,
  `program_id` int(11) NOT NULL COMMENT 'references program_id'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
`id` int(11) NOT NULL,
  `university_id` int(11) NOT NULL COMMENT 'references uni id',
  `name` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL COMMENT 'mech/comp/it/etc'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `university_id`, `name`, `type`) VALUES
(1, 9, 'Information Networking Institute', 'Information Systems, Information Technology (IT)'),
(2, 9, 'School of Computer Science', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE IF NOT EXISTS `universities` (
`id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `location` varchar(100) NOT NULL,
  `be` int(11) NOT NULL,
  `cs` int(11) NOT NULL,
  `acceptance` float NOT NULL,
  `avg_q` int(11) NOT NULL,
  `avg_gpa` float NOT NULL,
  `employer_rating` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `location`, `be`, `cs`, `acceptance`, `avg_q`, `avg_gpa`, `employer_rating`) VALUES
(1, 'Cal Tech', 'Pasadena, CA', 5, 7, 0.09, 166, 3.7, 4.5),
(2, 'Yale University', 'New Haven, CT', 34, 35, 0.146, 166, 3.6, 3.5),
(3, 'Harvard', 'Cambridge,MA', 19, 30, 0.07, 164, 3.7, 3.8),
(4, 'Columbia University', 'NY,NY', 15, 18, 0.25, 164, 3.5, 3.7),
(5, 'University of Michigan', 'Ann Arbor, MI?', 8, 7, 0.292, 163, 3.6, 4.2),
(6, 'University of Wisconsin, Madison', 'Madison, WI', 17, 14, 0.14, 163, 3.5, 4),
(7, 'University of California--Santa Barbara', 'Santa Barbara CA', 21, 18, 0.234, 162, 3.6, 3.7),
(8, 'Penn State', 'University Park,PA', 25, 26, 0.267, 160, 3.6, 3.8),
(9, 'CMU', 'Pittsburg, PA', 7, 4, 0.268, 160, 3.7, 4.2),
(10, 'Johns Hopkins (Whiting)', 'Baltimore,MD', 26, 26, 0.283, 160, 3.5, 3.9),
(11, 'University of Illinois', 'Urbana Illionois', 5, 5, 0.26, 161, 3.6, 4.4),
(12, 'University of California - Los Angeles', 'Los Angeles,CA', 16, 13, 0.307, 161, 3.5, 3.8),
(13, 'University of California , San Diego', 'La Jolla,CA', 14, 17, 0.23, 161, 3.2, 3.8),
(14, 'Georgia Institute of Technology', 'Atlanta, GA', 4, 6, 0.278, 161, 3.6, 4.4),
(15, 'University of California, Santa Cruz', 'Santa Cruz,CA', 56, 57, 0.4, 161, 3.5, 3.2),
(16, 'University of Austin, TX', 'Austin,TX', 8, 9, 0.183, 161, 3.6, 4.1),
(17, 'Cornell', 'Ithaca , NY', 10, 11, 0.269, 161, 3.5, 4.2),
(18, 'University of California - Irvine', 'Irvine, CA', 39, 26, 0.234, 161, 3.5, 3.4),
(19, 'Northwestern University', 'Evanston, IL', 19, 25, 0.22, 161, 3.4, 3.9),
(20, 'University of Southern California Viterbi', 'Los Angeles,CA', 12, 13, 0.307, 160, 3.5, 3.6),
(21, 'Rice University', 'Houston, TX', 31, 18, 0.165, 160, 3.5, 3.7),
(22, 'University of Rochester', 'Rochester NY', 41, 52, 0.304, 160, 3.4, 3.2),
(23, 'Ohio State', 'Columbus,OH', 30, 23, 0.307, 160, 3.6, 3.6),
(24, 'Boston University', 'Boston,MA', 0, 0, 0.253, 160, 3.6, 3.3),
(25, 'University of California, Davis', 'Davis,CA', 31, 30, 0.24, 160, 3.4, 3.6),
(26, 'Purdue', 'Lafayette , IN', 10, 11, 0.279, 160, 3.7, 4.1),
(27, 'University of Arizona', 'Tuscon , AZ', 49, 35, 0.3, 160, 3.5, 3.2),
(28, 'University of Maryland, College Park', 'Maryland', 18, 16, 0.273, 160, 3.5, 3.6),
(29, 'University of California, Riverside', 'Riverside,CA', 64, 52, 0.24, 160, 3.4, 2.8),
(30, 'Northeastern University', 'Boston,MA', 62, 43, 0.467, 159, 3.3, 3.3),
(31, 'North Carolina State', 'Raleigh, Nc', 31, 30, 0.203, 159, 3.5, 3.5),
(32, 'Stony Brook', 'New York', 87, 57, 0.3, 158, 3.33, 2.7),
(33, 'University of Washington , Seattle', 'Seattle, WA', 26, 14, 0.229, 159, 3.6, 3.6),
(34, 'Virginia Tech', 'Blacksburg, VA', 24, 23, 0.23, 157, 3.4, 3.9),
(35, 'University of Central Florida', 'Florida', 72, 57, 0.451, 155, 3.3, 2.7),
(36, 'Princeton University', 'Princeton, NJ', 21, 12, 0.1, 162, 3.4, 3.9),
(37, 'Master of Science in Information Networking (MSIN)', '', 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deadlines`
--
ALTER TABLE `deadlines`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deadlines`
--
ALTER TABLE `deadlines`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
