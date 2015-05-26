-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2015 at 04:22 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pt planner`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisors`
--

CREATE TABLE IF NOT EXISTS `advisors` (
  `advisorID` int(3) NOT NULL,
  `a_f_name` varchar(15) NOT NULL,
  `a_l_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advisors`
--

INSERT INTO `advisors` (`advisorID`, `a_f_name`, `a_l_name`) VALUES
(123, 'Ryan', 'Ritz'),
(124, 'Toby', 'Rogers'),
(125, 'Mollie', 'Cleveland'),
(126, 'Therese', 'Glassemeyer'),
(127, 'Joan', 'Grinkmeyer'),
(128, 'Laura', 'Gellin'),
(129, 'Marilyn', 'Weiss'),
(130, 'Mark', 'Dewart'),
(131, 'Inga', 'Kahre'),
(132, 'Joseph', 'Chaimberlin'),
(133, 'Deborah', 'Tompkins'),
(134, 'Thomas', 'Paige'),
(135, 'Peter', 'Smith');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `courseID` int(4) NOT NULL,
  `courseName` varchar(50) NOT NULL,
  `creditID` varchar(5) NOT NULL,
  `periodID` varchar(10) NOT NULL,
  `deptID` int(2) NOT NULL,
  `semesters` int(1) NOT NULL,
  `required` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `courseName`, `creditID`, `periodID`, `deptID`, `semesters`, `required`) VALUES
(1400, 'Grade 9 Humanities', 'full', 'hum full', 1, 3, 1),
(1410, 'English 1', 'full', 'hum full', 1, 3, 1),
(1415, 'English 1 Plus', 'full', 'hum full', 1, 3, 1),
(1420, 'English 2', 'full', 'hum full', 1, 3, 1),
(1425, 'English 2 Plus', 'full', 'hum full', 1, 3, 1),
(1430, 'English 3', 'full', 'hum full', 1, 3, 1),
(1435, 'AP English 3', 'full', 'hum full', 1, 3, 1),
(1511, 'Creative Writing 1 S1', 'full', 'hum full', 1, 1, 0),
(1521, 'Creative Writing 2 S1', 'full', 'hum full', 1, 1, 0),
(1611, 'Writing for Media 1 S1', 'full', 'hum full', 1, 1, 0),
(1512, 'Creatice Writing 1 S2', 'full', 'hum full', 1, 2, 0),
(1522, 'Creative Writing 2 S2', 'full', 'hum full', 1, 2, 0),
(1612, 'Writing for Media 2 S2', 'full', 'hum full', 1, 2, 0),
(2410, 'Algebra 1', 'full', 'hum full', 2, 3, 1),
(2420, 'Geometry', 'full', 'hum full', 2, 3, 1),
(2530, 'Algebra 2', 'full', 'hum full', 2, 3, 1),
(2540, 'Functions, Stats, and Trig', 'full', 'hum full', 2, 3, 0),
(2550, 'Elements of Calculus', 'full', 'hum full', 2, 3, 0),
(2630, 'Algebra 2 with Trig', 'full', 'hum full', 2, 3, 0),
(2640, 'Pre-Calculus', 'full', 'hum full', 2, 3, 0),
(2730, 'Advanced Algebra 2 with Trig', 'full', 'hum full', 2, 3, 0),
(2740, 'Pre-Cal and Differential Calc', 'full', 'hum full', 2, 3, 0),
(2810, 'AP Statistics', 'full', 'hum full', 2, 3, 0),
(2820, 'AP Calculus 1', 'full', 'hum full', 2, 3, 0),
(2825, 'AP Calculus BC', 'full', 'hum full', 2, 3, 0),
(2830, 'AP Calculus 2', 'full', 'hum full', 2, 3, 0),
(2910, 'Mathematics Seminar', 'full', 'hum full', 2, 3, 0),
(3410, 'Biology', 'full', '1 double', 3, 3, 1),
(3420, 'Chemistry', 'full', '2 doubles', 3, 3, 1),
(3430, 'Physics', 'full', '2 doubles', 3, 3, 0),
(3440, 'Anatomy and Physiology', 'full', 'hum full', 3, 3, 0),
(3450, 'Environmental Science', 'full', 'hum full', 3, 3, 0),
(3460, 'Microbiology', 'half', 'half', 3, 3, 0),
(3470, 'Organic Chemistry', 'half', 'half', 3, 3, 0),
(3510, 'AP Biology', 'full', '3 doubles', 3, 3, 0),
(3520, 'AP Chemistry', 'full', '3 doubles', 3, 3, 0),
(3530, 'AP Physics', 'full', '2 doubles', 3, 3, 0),
(3811, 'Psychology S1', 'full', 'hum full', 3, 1, 0),
(3932, 'LOGOS 1 S2', 'LOGOS', 'single', 3, 2, 0),
(3941, 'LOGOS 2 Ind Study S1', 'LOGOS', 'single', 3, 1, 0),
(3610, 'Intro to Computer Science', 'full', 'hum full', 3, 3, 0),
(3620, 'AP COmputer Science A', 'full', 'hum full', 3, 3, 0),
(3631, 'Data Structures S1', 'full', 'hum full', 3, 1, 0),
(3632, 'Bioinformatics S2', 'full', 'hum full', 3, 2, 0),
(3640, 'Dynamic Web Development', 'full', 'hum full', 3, 3, 0),
(4400, 'Grade 9 Humanities', 'full', 'hum full', 4, 3, 0),
(4410, 'World Civilizations 1', 'full', 'hum full', 4, 3, 1),
(4420, 'World Civilizations 2', 'full', 'hum full', 4, 3, 1),
(4430, 'US History', 'full', 'hum full', 4, 3, 1),
(4435, 'AP US History', 'full', 'hum full', 4, 3, 0),
(4440, 'AP World History', 'full', 'hum full', 4, 3, 0),
(4511, 'Macroeconomics', 'full', 'hum full', 4, 1, 0),
(4521, 'International Relations', 'full', 'hum full', 4, 1, 0),
(4551, 'Social History/Ethics Seminar', 'full', 'hum full', 4, 1, 0),
(4621, 'Military History: WWII', 'full', 'hum full', 4, 1, 0),
(4522, 'Sociology', 'full', 'hum full', 4, 2, 0),
(4552, 'Us Govt/Political History', 'full', 'hum full', 4, 2, 0),
(4552, 'Gender Studies', 'full', 'hum full', 4, 2, 0),
(4542, 'Military Hisotry: Modern Wars', 'full', 'hum full', 4, 2, 0),
(4512, 'Microeconomics', 'full', 'hum full', 4, 2, 0),
(5410, 'Chinese 1', 'full', 'hum full', 5, 3, 0),
(5420, 'Chinese 2', 'full', 'hum full', 5, 3, 0),
(5430, 'Chinese 3', 'full', 'hum full', 5, 3, 0),
(5440, 'Chinese 4', 'full', 'hum full', 5, 3, 0),
(5510, 'French 1', 'full', 'hum full', 5, 3, 0),
(5520, 'French 2', 'full', 'hum full', 5, 3, 0),
(5530, 'French 3', 'full', 'hum full', 5, 3, 0),
(5540, 'French 4', 'full', 'hum full', 5, 3, 0),
(5550, 'AP Fench 5 Language', 'full', 'hum full', 5, 3, 0),
(5560, 'French 6', 'full', 'hum full', 5, 3, 0),
(5610, 'Classical Greek', 'full', 'hum full', 5, 3, 0),
(5710, 'Latin 1', 'full', 'hum full', 5, 3, 0),
(5720, 'Latin 2', 'full', 'hum full', 5, 3, 0),
(5730, 'Latin 3', 'full', 'hum full', 5, 3, 0),
(5740, 'AP Latin 4', 'full', 'hum full', 5, 3, 0),
(5810, 'Spanish 1', 'full', 'hum full', 5, 3, 0),
(5820, 'Spanish 2', 'full', 'hum full', 5, 3, 0),
(5830, 'Spanish 3', 'full', 'hum full', 5, 3, 0),
(5840, 'Spanish 4', 'full', 'hum full', 5, 3, 0),
(5850, 'AP Spanish 5 Language', 'full', 'hum full', 5, 3, 0),
(5860, 'Spanish Seminar', 'full', 'hum full', 5, 3, 0),
(6400, 'AP Art History', 'full', 'hum full', 6, 3, 0),
(6520, 'Drawing', 'half', 'half', 6, 3, 0),
(6530, 'Adv Drawing', 'full', 'hum full', 6, 3, 0),
(6540, 'Painting', 'half', 'half', 6, 3, 0),
(6550, 'Adv Painting', 'full', 'hum full', 6, 3, 0),
(6411, 'Art Seminar 1', 'full', 'hum full', 6, 1, 0),
(6561, 'Ceramics S1', 'full', 'hum full', 6, 1, 0),
(6562, 'Ceramics S2', 'full', 'hum full', 6, 2, 0),
(6571, 'Graphic Design S1', 'full', 'hum full', 6, 1, 0),
(6582, 'Adv Graphic Design S2', 'full', 'hum full', 6, 2, 0),
(6611, 'Photography 1 S1', 'full', 'hum full', 6, 1, 0),
(6612, 'Photography 1 S2', 'full', 'hum full', 6, 2, 0),
(6622, 'Photography 2 S2', 'full', 'hum full', 6, 2, 0),
(6621, 'Photography 2 S1', 'full', 'hum full', 6, 1, 0),
(6632, 'Adv Photography S2', 'full', 'hum full', 6, 2, 0),
(6810, 'Girls Ensemble', 'half', 'half', 6, 3, 0),
(6820, 'Journeymen', 'half', 'half', 6, 3, 0),
(6830, 'Park Tudor Singers', 'half', 'half', 6, 3, 0),
(6840, 'Madrigal Singers', 'twoPe', 'twice', 6, 3, 0),
(6850, 'Musical Theater', 'half', 'half', 6, 3, 0),
(6950, 'Band', 'full', 'hum full', 6, 3, 0),
(6960, 'Orchestra', 'full', 'hum full', 6, 3, 0),
(6711, 'Music Theory S1', 'full', 'hum full', 6, 1, 0),
(6712, 'Music History S2', 'full', 'hum full', 6, 2, 0),
(6722, 'AP Music Theory S2', 'full', 'hum full', 6, 2, 0),
(7400, 'Speech', 'twoPe', 'twice', 6, 3, 1),
(7510, 'Theater Exploration', 'half', 'half', 6, 3, 0),
(7520, 'Acting and Directing', 'half', 'half', 6, 3, 0),
(7530, ' Adv Acting and Directing', 'half', 'half', 6, 3, 0),
(7540, 'Reperatory Theater', 'half', 'half', 6, 3, 0),
(7550, 'Filmaking', 'half', 'half', 6, 3, 0),
(7620, 'Tech Theater 2', 'half', 'half', 6, 3, 0),
(7530, 'Tech Theater 3', 'half', 'half', 6, 3, 0),
(7640, 'Tech Theater 4', 'half', 'half', 6, 3, 0),
(7721, 'Ballet S1', 'twoPe', 'twice', 6, 1, 0),
(7731, 'Tap for Musical Theater S1', 'twoPe', 'twice', 6, 1, 0),
(7732, 'Jazz for Musical Theater S2', 'twoPe', 'twice', 6, 2, 0),
(8411, 'Health S1', 'half', 'half', 7, 1, 1),
(8412, 'Health S2', 'half', 'half', 7, 2, 1),
(8511, 'Conditioning/Fitness S1', 'half', 'half', 7, 1, 0),
(8512, 'Conditioning/Fitness', 'half', 'half', 6, 2, 0),
(8600, 'Summer Gym Sess1', 'full', 'none', 7, 4, 1),
(8601, 'Summer Gym Sess2', 'full', 'none', 7, 4, 1),
(7401, 'Speech Sess1', 'full', 'none', 6, 4, 1),
(7402, 'Speech Sess2', 'full', 'none', 6, 4, 1),
(8413, 'Health Sess1', 'full', 'none', 7, 4, 1),
(8414, 'Health Sess2', 'full', 'none', 7, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course selection`
--

CREATE TABLE IF NOT EXISTS `course selection` (
  `studentID` int(4) NOT NULL,
  `year_planned` int(2) NOT NULL,
  `courseID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course selection`
--

INSERT INTO `course selection` (`studentID`, `year_planned`, `courseID`) VALUES
(1, 10, 1234),
(2, 0, 542);

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE IF NOT EXISTS `credit` (
  `creditID` varchar(5) NOT NULL,
  `creditNum` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`creditID`, `creditNum`) VALUES
('full', 5),
('half', 0),
('twoPe', 0),
('LOGOS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `deptID` int(2) NOT NULL,
  `name` varchar(25) NOT NULL,
  `requiredCreds` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptID`, `name`, `requiredCreds`) VALUES
(1, 'English', 0),
(2, 'Math', 0),
(3, 'Science', 0),
(4, 'Social Studies', 0),
(5, 'World Language', 0),
(6, 'Fine Arts', 0),
(7, 'Physical Education', 0);

-- --------------------------------------------------------

--
-- Table structure for table `grade_level`
--

CREATE TABLE IF NOT EXISTS `grade_level` (
  `gradeID` int(2) NOT NULL,
  `Name` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade_level`
--

INSERT INTO `grade_level` (`gradeID`, `Name`) VALUES
(9, 'Freshman'),
(10, 'Sophomore'),
(11, 'Junior'),
(12, 'Senior');

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE IF NOT EXISTS `period` (
  `periodID` varchar(10) NOT NULL,
  `periodNum` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`periodID`, `periodNum`) VALUES
('hum full', 5),
('half', 3),
('none', 0),
('single', 1),
('twice', 2),
('1 double', 6),
('2 doubles', 7),
('3 doubles', 8);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `type` varchar(10) NOT NULL,
  `number` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`type`, `number`) VALUES
('total_peri', 40);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `studentID` int(4) NOT NULL,
  `s_f_name` varchar(15) NOT NULL,
  `s_l_name` varchar(15) NOT NULL,
  `gradeID` int(2) NOT NULL,
  `advisorID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentID`, `s_f_name`, `s_l_name`, `gradeID`, `advisorID`) VALUES
(1, 'Quinton', 'Petrucciani', 11, 127),
(12, 'Alex', 'Klimek', 9, 123),
(2, 'Brent', 'Brimmage', 10, 125),
(3, 'Angela', 'Li', 11, 125);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
