-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 08:39 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medilab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `email`, `password`, `status`) VALUES
(1, 'admin@gmail.com', 'admin123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `allocate`
--

CREATE TABLE IF NOT EXISTS `allocate` (
  `aid` int(100) NOT NULL AUTO_INCREMENT,
  `uid` int(100) NOT NULL,
  `nid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `salary` int(200) DEFAULT NULL,
  `status` int(100) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `allocate`
--

INSERT INTO `allocate` (`aid`, `uid`, `nid`, `pid`, `salary`, `status`) VALUES
(23, 2, 7, 25, 2000, 2),
(28, 8, 9, 27, NULL, 0),
(29, 8, 11, 27, 100000, 2),
(30, 11, 9, 28, NULL, 4),
(31, 11, 10, 28, 200000, 3),
(32, 11, 12, 28, NULL, 4),
(33, 5, 12, 29, NULL, 4),
(34, 5, 13, 29, NULL, 4),
(35, 5, 15, 29, 100000, 3),
(36, 9, 15, 30, 20000, 2),
(37, 9, 14, 30, 100000, 3),
(38, 10, 10, 31, 15000, 2),
(39, 10, 13, 31, NULL, 4),
(40, 10, 14, 31, NULL, 4),
(41, 12, 9, 32, NULL, 4),
(42, 12, 12, 32, NULL, 0),
(43, 12, 14, 32, 100000, 1),
(44, 13, 10, 33, 15000, 1),
(45, 13, 13, 33, NULL, 4),
(46, 7, 13, 34, 15000, 2),
(47, 4, 9, 35, 20000, 1),
(48, 4, 10, 35, NULL, 0),
(49, 6, 12, 36, 100000, 1),
(50, 14, 9, 37, 17000, 3),
(51, 14, 12, 37, 20000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `catid` int(100) NOT NULL AUTO_INCREMENT,
  `catname` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`, `status`) VALUES
(1, 'Home-making', 1),
(2, 'Alzheimers and Dementia care', 1),
(3, 'Around the clock care', 1),
(4, 'Accompanying', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
  `nid` int(100) NOT NULL AUTO_INCREMENT,
  `nname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `status` int(100) NOT NULL,
  `final_status` int(100) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`nid`, `nname`, `address`, `email`, `password`, `age`, `designation`, `experience`, `phone`, `status`, `final_status`) VALUES
(4, 'Gopika', 'Adhyanath house,mubhath road,kothattupara', 'gopika123@gmail.com', 'gopika123', 39, 'degree in nursing', '4yr', 9388899934, 1, 1),
(6, 'Anarkalii', 'anganmadath road,gokulam park', 'anarkali@gmail.com', 'anarkali123', 35, 'Diploma Nursing', '2yrs', 9876543218, 1, 1),
(7, 'Malik', 'mangath house alangad road,kollam', 'malik@gmail.com', 'malik123', 30, 'Bsc nursing', '2yrs', 9876543219, 1, 1),
(8, 'Rohini', 'nilamangath house,kalingath road,thamanam', 'rohini@gmail.com', 'rohini123', 35, 'degre in nursing', '3yrs', 9878900000, 1, 1),
(9, 'Laila', 'madathiyatt house,mallimangalam road,paravoor', 'laila@gmail.com', 'laila123', 32, 'Diploma Nursing', '5yrs', 9847711033, 1, 0),
(10, 'Ambika', 'Arkamangalam house,alangad road', 'ambika@gmail.com', 'ambika123', 29, 'Diploma Nursing', '3yrs', 9386699934, 1, 1),
(11, 'Rosily', 'Manjakadathu house,alangath road,muppathadam', 'rosily@gmail.com', 'rosily123', 47, 'Diploma Nursing', '8yrs', 9876543210, 1, 1),
(12, 'Rani', 'Bismahalmil  house,Manjakara road,Attingal', 'rani@gmail.com', 'rani123', 35, 'degree in nursing', '3yrs', 9897654321, 1, 0),
(13, 'Radika', 'Singath house,lokath nath road,thamanam', 'radika@gmail.com', 'radika123', 30, 'Diploma Nursing', '2yrs', 7998765432, 1, 1),
(14, 'Jacob', 'Adhyatha manjumngalam house,lokath road,Ariyangad', 'jacob@gmail.com', 'jacob123', 35, 'Diploma Nursing', '3yrs', 8129876543, 1, 0),
(15, 'Parvathy', 'Mungathad house,alngad road', 'parvathy@gmail.com', 'parvathy123', 35, 'Diploma Nursing', '3yrs', 8765432189, 1, 1),
(16, 'Dev krishna', 'Davanathra house kothampara road', 'dev@gmail.com', 'dev123', 34, 'degree in nursing', '5yrs', 9876543215, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nurse_feedback`
--

CREATE TABLE IF NOT EXISTS `nurse_feedback` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `comment` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nurse_feedback`
--

INSERT INTO `nurse_feedback` (`id`, `nid`, `pid`, `comment`) VALUES
(1, 4, 12, 'Makes me Work extra hours than alloted'),
(2, 7, 25, 'Good service');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `pid` int(100) NOT NULL AUTO_INCREMENT,
  `uid` int(100) NOT NULL,
  `catid` int(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `desc` varchar(250) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `status` int(100) NOT NULL,
  `final_status` int(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `uid`, `catid`, `pname`, `relation`, `uemail`, `gender`, `age`, `desc`, `from`, `to`, `status`, `final_status`) VALUES
(12, 1, 3, 'Devika', 'Grand Mother', 'rahul123@gmail.com', 'Female', 60, 'Not well', '2021-05-22', '2021-07-21', 1, 1),
(14, 3, 1, 'Anjana', 'Mother', 'kichu@gmail.com', 'Female', 54, 'Mentally retarded', '2021-05-30', '2021-07-31', 1, 1),
(17, 6, 2, 'rakesh', 'Father', 'ammu@gmail.com', 'Male', 60, 'Need care', '2021-05-29', '2021-06-29', 0, 0),
(18, 7, 4, 'Bindu', 'Cousin', 'ahamad@gmail.com', 'Female', 50, 'Had a car accident and her leg is fractured', '2021-06-04', '2021-05-14', 0, 1),
(21, 2, 3, 'Ankitha', 'Sister', 'amal123@gmail.com', 'Female', 45, 'Leg injury', '2021-07-02', '2021-07-29', 0, 1),
(25, 2, 3, 'Soorej', 'Father', 'amal123@gmail.com', 'Male', 50, 'Leg fracture', '2021-06-01', '2021-07-01', 1, 1),
(26, 4, 1, 'cyriac', 'Father', 'gopika@gmail.com', 'Male', 60, 'Very sick', '2021-06-01', '2021-07-01', 0, 1),
(27, 8, 3, 'susmi', 'Cousin', 'deepak@gmail.com', 'Female', 55, 'she is disabled', '2021-06-02', '2021-08-02', 1, 1),
(28, 11, 3, 'Gautham', 'Grand Father', 'raveena@gmail.com', 'Female', 70, 'Since he is old age  someone is expected to be near him', '2021-07-02', '2021-11-02', 1, 0),
(29, 5, 2, 'Varun', 'Grand Father', 'deepa@gmail.com', 'Male', 77, 'He only remembers his children and wife so he need to be taken care always', '2021-06-27', '2021-08-02', 1, 0),
(30, 9, 1, 'Junsiya', 'Mother', 'sahil@gmail.com', 'Female', 50, 'Help her in all the things she request to', '2021-06-03', '2021-06-03', 1, 1),
(31, 10, 3, 'sanoobar', 'Father', 'ashmin@gmail.com', 'Male', 56, 'Bedridden', '2021-07-02', '2022-01-02', 1, 1),
(32, 12, 3, 'Pushpakumar', 'Father', 'namitha@gmail.com', 'Male', 60, 'He have Ear balance issues', '2021-07-03', '2021-08-03', 1, 0),
(33, 13, 3, 'Bindu', 'Mother', 'devaprabha@gmail.com', 'Female', 55, 'She had shoulder dislocation', '2021-06-06', '2021-07-04', 1, 0),
(34, 7, 1, 'Muneer', 'Brother', 'ahamad@gmail.com', 'Male', 60, 'Had a car accident and his hand is fractured', '2021-07-03', '2021-07-03', 1, 1),
(35, 4, 3, 'Gopan', 'Grand Father', 'gopika@gmail.com', 'Male', 70, 'Due to old age, he needs care all day long.', '2021-07-03', '2021-07-03', 1, 0),
(36, 6, 3, 'Sahad', 'Brother', 'ammu@gmail.com', 'Male', 25, 'Mentally retarded', '2021-06-04', '2021-09-03', 1, 0),
(37, 14, 3, 'shaneer', 'Friend', 'selma@gmail.com', 'Male', 45, 'Bedridden after a accident', '2021-06-03', '2021-07-03', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(100) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `address`, `email`, `password`, `phone`, `location`, `status`) VALUES
(1, 'Rahul', 'Ardhanayani road puthampadi,ernakulam', 'rahul123@gmail.com', 'rahul123', 9847711119, 'kollam', 1),
(2, 'Amal', 'Kochatt hose kolangan veed,nedumassery', 'amal123@gmail.com', 'amal123', 9388899935, 'kollam', 1),
(3, 'Kichu', ' Alangad house', 'kichu@gmail.com', 'kichu123', 9876543219, 'kottayam', 1),
(4, 'Gopika', 'Puthyanath house,kolanchari', 'gopika@gmail.com', 'gopika123', 9876543218, 'kottayam', 1),
(5, 'Deepa', 'Abhimanyu house kottakal', 'deepa@gmail.com', 'deepa123', 9388899934, 'kollam', 1),
(6, 'Ammu', 'Akadath house aliyikal Road thaimakal', 'ammu@gmail.com', 'ammu123', 9876543618, 'Angamali', 1),
(7, 'Ahamad', 'Ambalapuzhakal house,puliyakod road,manjukal', 'ahamad@gmail.com', 'ahamad123', 9876543218, 'Thrivandram', 1),
(8, 'Deepak', 'Alanagad house,amabalapuzha road', 'deepak@gmail.com', 'deepak123', 9876543219, 'Angamali', 1),
(9, 'Sahil', 'kotharamandam house,kalingal road', 'sahil@gmail.com', 'sahil123', 9876543234, 'Angamali', 1),
(10, 'Ashmin', 'Arangad kolathil house,kocharikara road', 'ashmin@gmail.com', 'ashmin123', 9876543212, 'Perumbhavoor', 1),
(11, 'Raveena', 'kadavathrama house ,kottara road', 'raveena@gmail.com', 'raveena123', 9876543213, 'kollam', 1),
(12, 'Namitha', 'Kuttanpura house,alngad Road', 'namitha@gmail.com', 'namitha123', 9876598765, 'Thrivandram', 1),
(13, 'Devaprabha', 'Mahathma house,kanjal Road', 'devaprabha@gmail.com', 'devaprabha123', 7896543689, 'kollam', 1),
(14, 'Selma', 'Kozhithara house,pathalkam road', 'selma@gmail.com', 'selma123', 9898765432, 'Thamanam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE IF NOT EXISTS `user_feedback` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `pid` int(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `nid` int(100) NOT NULL,
  `comment` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`id`, `pid`, `uid`, `nid`, `comment`) VALUES
(1, 12, 1, 4, 'she works really hard'),
(2, 25, 2, 7, 'good servicess');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
