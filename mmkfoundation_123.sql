-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2022 at 11:35 AM
-- Server version: 5.7.38-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmkfoundation_123`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_password`) VALUES
(1, 'mmk', '@123^');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary`
--

CREATE TABLE `beneficiary` (
  `beneficiaryid` int(11) NOT NULL,
  `beneficiaryno` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `permanataddress` text NOT NULL,
  `currentaddress` text NOT NULL,
  `guardianparentscareofphonenumber` varchar(255) NOT NULL,
  `whatsappnumber` varchar(255) NOT NULL,
  `aadharnumber` varchar(255) NOT NULL,
  `guardianparentscareofoccupation` varchar(255) NOT NULL,
  `problemcasestudies` text NOT NULL,
  `solution` text NOT NULL,
  `comments` text NOT NULL,
  `beneficiaryimg` varchar(255) NOT NULL,
  `creatdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `eligible` int(11) NOT NULL,
  `beneficiarystatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `corporates`
--

CREATE TABLE `corporates` (
  `corporatesid` int(11) NOT NULL,
  `corporatesno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `interested` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `creatdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `disasterresponse`
--

CREATE TABLE `disasterresponse` (
  `disasterresponseid` int(11) NOT NULL,
  `disasterresponseno` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `permanataddress` text NOT NULL,
  `currentaddress` text NOT NULL,
  `guardianparentscareofphonenumber` varchar(255) NOT NULL,
  `whatsappnumber` varchar(255) NOT NULL,
  `aadharnumber` varchar(255) NOT NULL,
  `guardianparentscareofoccupation` varchar(255) NOT NULL,
  `problemcasestudies` text NOT NULL,
  `solution` text NOT NULL,
  `comments` text NOT NULL,
  `disasterresponseimg` varchar(255) NOT NULL,
  `creatdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `eligible` int(11) NOT NULL,
  `disasterresponsestatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donater`
--

CREATE TABLE `donater` (
  `donaterid` int(11) NOT NULL,
  `donaterno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `donatecategory` varchar(255) NOT NULL,
  `donateamount` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `eightegtaxbenefit` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `creatdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donater`
--

INSERT INTO `donater` (`donaterid`, `donaterno`, `password`, `donatecategory`, `donateamount`, `firstname`, `lastname`, `email`, `phone`, `address`, `city`, `state`, `pincode`, `country`, `nationality`, `eightegtaxbenefit`, `dob`, `gender`, `pan`, `creatdate`, `modifydate`, `status`) VALUES
(1, 'MMKD68682198', '27726520', 'Education', '100000', 'sabari', 'v', 'a@a.dd', '459985665', 'Salem', 'mmkfoundation.org/', 'tn', '636005', 'in', 'hindu', 'Yes', '2022-05-04', 'Male', 'uyuy76876776', '2022-05-16 05:44:22', '', 0),
(2, 'MMKD35985115', '73425286', 'Education', '2500', 'sabari', 'velayutham', 'nicewelltechnologies@gmail.com', '9843233147', 'salem', 'salem', 'tamil nadu', '636203', 'india', 'hindu', 'Yes', '1984-01-12', 'Male', 'bsogfj112313j', '2022-05-17 07:12:39', '', 0),
(3, 'MMKD86962381', '59136662', 'Health', '100', 'Rajeshkanna', 'P', 'rkatturcsc@gmail.com', '7092567369', '1/24, Appamasamudhiram, Puthupalayam, Narasingapuram (po), Attur (tk),', 'Salem', 'Tamilnadu', '636108', 'India', 'Indian', 'Select Benefit', '2022-05-19', 'Male', 'AZKPR7932D', '2022-05-19 05:49:16', '', 0),
(4, 'MMKD31593041', '84471712', 'Education', '150', 'sabariB', 'WER', 'nicewelltechnologies@gmail.com', '09843233147', 'salem', 'salem', 'tamil nadu', '636203', 'India', 'Indian', 'Yes', '2022-05-30', 'Male', 'qwrte2345qwre', '2022-05-30 07:19:11', '', 0),
(5, 'MMKD99561327', '23303555', 'Education', '5623', 'sabari', 'velayutham', 'nicewelltechnologies@gmail.com', '09843233147', 'salem', 'salem', 'tamil nadu', '636203', 'India', 'indian', 'Yes', '2022-06-24', 'Male', 'azkpr6738G', '2022-06-25 08:04:44', '', 0),
(6, 'MMKD73639091', '38577764', 'Education', '1000', 'som', 's', 'sample@gmail.com', 'fsdafds', 'fsdaf', 'sdfsda', 'fdsafds', 'afsd', 'fsdaf', 'fdsa', 'Select Benefit', '2022-08-04', 'Male', 'fdsaf', '2022-08-03 19:18:26', '', 0),
(7, 'MMKD10004085', '33906904', 'Education', '10000', 'kanna', 'P', '1234qwer@gmail.com', '7092567369', '1/24, Attur', 'Salem', 'Tamilnadu', '636108', 'India', 'Indian', 'Yes', '2022-09-03', 'Male', 'Azkpr6732D', '2022-09-07 06:28:19', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donatercommand`
--

CREATE TABLE `donatercommand` (
  `donatercommandid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `donaterno` varchar(255) NOT NULL,
  `donatecategory` varchar(255) NOT NULL,
  `commandtitle` varchar(255) NOT NULL,
  `commanddate` varchar(255) NOT NULL,
  `commanddescription` varchar(255) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeid` int(11) NOT NULL,
  `employeeno` varchar(255) NOT NULL,
  `staffdesignation` varchar(255) NOT NULL,
  `staffname` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `workknowledge` varchar(255) NOT NULL,
  `workingexperience` varchar(255) NOT NULL,
  `dateofjoining` varchar(255) NOT NULL,
  `salarydetails` varchar(255) NOT NULL,
  `accountsdetails` varchar(255) NOT NULL,
  `dayreport` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `nameofdegree` varchar(255) NOT NULL,
  `tenthcertification` varchar(255) NOT NULL,
  `twelfthcertificate` varchar(255) NOT NULL,
  `ugdegreecertificate` varchar(255) NOT NULL,
  `pgdegreecertificate` varchar(255) NOT NULL,
  `experiencecertificate` varchar(255) NOT NULL,
  `aadhaarcard` varchar(255) NOT NULL,
  `pancard` varchar(255) NOT NULL,
  `staffimg` varchar(255) NOT NULL,
  `creatdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeid`, `employeeno`, `staffdesignation`, `staffname`, `fathername`, `dob`, `gender`, `city`, `state`, `pincode`, `address`, `mobileno`, `email`, `workknowledge`, `workingexperience`, `dateofjoining`, `salarydetails`, `accountsdetails`, `dayreport`, `password`, `degree`, `nameofdegree`, `tenthcertification`, `twelfthcertificate`, `ugdegreecertificate`, `pgdegreecertificate`, `experiencecertificate`, `aadhaarcard`, `pancard`, `staffimg`, `creatdate`, `modifydate`, `status`) VALUES
(1, 'MMKE46491714', 'cmo', 'sabari', 'velaytham', '1984-01-12', 'Male', 'salem', 'tamil nadu', '636203', 'salem', '09843233147', 'nicewelltechnologies@gmail.com', 'marketing', '15 yr', '2020-03-12', '18000', '', '', '79111201', '', 'mba', '1_', '1_', '1_', '1_', '1_', '1_', '1_', '1_', '2022-05-17 07:36:56', '', 0),
(2, 'MMKE45094767', 'Director', 'Rajesh', 'Periyasamy', '2022-05-11', 'Male', 'Salem', 'tamil nadu', '636203', 'salem', '7092567369', '123qbd@gmail.com', 'IT , Management ', '10', '2022-04-01', '150000', '', '', '36861721', 'Bachelor ', 'ECE', '2_', '2_', '2_', '2_', '2_', '2_', '2_', '2_', '2022-05-19 13:14:17', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employeestask`
--

CREATE TABLE `employeestask` (
  `employeestaskid` int(11) NOT NULL,
  `staffname` varchar(255) NOT NULL,
  `staffdesignation` varchar(255) NOT NULL,
  `employeeno` varchar(255) NOT NULL,
  `tasktitle` varchar(255) NOT NULL,
  `taskdate` varchar(255) NOT NULL,
  `taskdescription` text NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `environmentprotection`
--

CREATE TABLE `environmentprotection` (
  `environmentprotectionid` int(11) NOT NULL,
  `environmentprotectionno` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `permanataddress` text NOT NULL,
  `currentaddress` text NOT NULL,
  `guardianparentscareofphonenumber` varchar(255) NOT NULL,
  `whatsappnumber` varchar(255) NOT NULL,
  `aadharnumber` varchar(255) NOT NULL,
  `guardianparentscareofoccupation` varchar(255) NOT NULL,
  `problemcasestudies` text NOT NULL,
  `solution` text NOT NULL,
  `comments` text NOT NULL,
  `environmentprotectionimg` varchar(255) NOT NULL,
  `creatdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `eligible` int(11) NOT NULL,
  `environmentprotectionstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventsid` int(11) NOT NULL,
  `eventsno` varchar(255) NOT NULL,
  `eventtitle` varchar(255) NOT NULL,
  `eventdate` varchar(255) NOT NULL,
  `eventsdescription` text NOT NULL,
  `eventsphoto` varchar(255) NOT NULL,
  `eventsbudget` varchar(255) NOT NULL,
  `eventpartnername` varchar(255) NOT NULL,
  `eventpartnerdescription` text NOT NULL,
  `eventpartnerlogo` varchar(255) NOT NULL,
  `creatdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventsid`, `eventsno`, `eventtitle`, `eventdate`, `eventsdescription`, `eventsphoto`, `eventsbudget`, `eventpartnername`, `eventpartnerdescription`, `eventpartnerlogo`, `creatdate`, `modifydate`, `status`) VALUES
(1, 'MMKEV56552405', 'chid care', '', 'Education is a state-level initiative of the MMK Foundation, a non-profit organisation dedicated to providing basic education and healthcare to impoverished children. The MMK Foundation, a non-profit organisation dedicated to improving the education', 'MMKEV56552405_WhatsApp Image 2022-05-10 at 1.09.35 AM.jpeg', '500000', 'test', 'Education is a state-level initiative of the MMK Foundation, a non-profit organisation dedicated to providing basic education and healthcare to impoverished children. The MMK Foundation, a non-profit organisation dedicated to improving the education', 'MMKEV56552405_WhatsApp Image 2022-05-10 at 1.09.35 AM.jpeg', '2022-05-17 07:48:31', '17/05/22', 0),
(2, 'MMKEV14077862', 'Education', '2022-05-21', 'Education is a state-level initiative of the MMK Foundation, a non-profit organisation dedicated to providing basic education and healthcare to impoverished children. The MMK Foundation, a non-profit organisation dedicated to improving the education', '2_WhatsApp Image 2022-05-10 at 1.09.52 AM (1).jpeg', '10000', 'bbb', 'Education is a state-level initiative of the MMK Foundation, a non-profit organisation dedicated to providing basic education and healthcare to impoverished children. The MMK Foundation, a non-profit organisation dedicated to improving the education', '2_WhatsApp Image 2022-05-10 at 1.09.57 AM.jpeg', '2022-05-17 08:11:17', '', 0),
(3, 'MMKEV87780578', 'Arthi Needs Your Support To Undergo Heart Surgery', '2022-07-01', 'Please help raise funds for Arthi who is 18 years old. She has been diagnosed with a Tetrology of fallot birth defect and is in need of urgent surgery. ', '3_WhatsApp Image 2022-04-28 at 4.05.21 PM (1).jpeg', '650000', ' K G Hospital', 'Education is a state-level initiative of the MMK Foundation, a non-profit organisation dedicated to providing basic education and healthcare to impoverished children. The MMK Foundation, a non-profit organisation dedicated to improving the education', '3_53267499_1960263037376050_5537979424722386944_n.jpg', '2022-05-19 13:30:14', '19/05/22', 0),
(4, 'MMKEV90735393', 'Annadhanam', '2022-06-25', 'Every week, Annadanam is offered at the ashram to these sadhakas, and to guests and visitors. Important occasions in your life, such as birthdays, anniversaries or any other day of your choice, can be an opportunity to offer Annadanam and be a part of MMK Foundation endeavor to spread joy, health and wellbeing. You can also offer Annadanam in memory of a loved one.', '4_22_DSC_0081.jpg', '15000', 'Quick Health Care', '', '4_AF1QipOuBzT71hnwvY1Pn2Ol97X77DURsdPvGujvttUs=w960-h960-n-o-v1.jpeg', '2022-06-25 07:39:48', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `forcollege`
--

CREATE TABLE `forcollege` (
  `forcollegeid` int(11) NOT NULL,
  `forcollegeno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `collegename` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `volunteering` varchar(255) NOT NULL,
  `cmpfullname` varchar(255) NOT NULL,
  `cmpmobile` varchar(255) NOT NULL,
  `cmpemail` varchar(255) NOT NULL,
  `cmpdesignation` varchar(255) NOT NULL,
  `creatdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forstudents`
--

CREATE TABLE `forstudents` (
  `forstudentsid` int(11) NOT NULL,
  `forstudentsno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `collegename` varchar(255) NOT NULL,
  `collegecity` varchar(255) NOT NULL,
  `collegestate` varchar(255) NOT NULL,
  `volunteering` varchar(255) NOT NULL,
  `cmpfullname` varchar(255) NOT NULL,
  `cmpmobile` varchar(255) NOT NULL,
  `cmpemail` varchar(255) NOT NULL,
  `cmpdesignation` varchar(255) NOT NULL,
  `creatdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `galleryid` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `galleryphoto` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`galleryid`, `tag`, `title`, `galleryphoto`, `description`, `createdate`, `modifydate`, `status`) VALUES
(2, 'Education', 'MMK Foundation', '1_1.png', 'Education is a state-level initiative of the MMK Foundation, a non-profit organisation dedicated to providing basic education and healthcare to impoverished children.', '2022-06-17 11:18:10', '', 0),
(3, 'Health', 'MMK Foundation', '2_f1.png', 'Since independence, India has made remarkable progress in the health sector.', '2022-06-17 11:18:59', '', 0),
(4, 'Women Empowerment', 'Vendoor', '3_IMG_20220328_135734.jpg', '', '2022-06-25 07:46:44', '', 0),
(5, 'Environmental Protection', 'Tree', '4_peakpx.jpg', '', '2022-06-25 07:47:24', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `healthid` int(11) NOT NULL,
  `healthno` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `permanataddress` text NOT NULL,
  `currentaddress` text NOT NULL,
  `guardianparentscareofphonenumber` varchar(255) NOT NULL,
  `whatsappnumber` varchar(255) NOT NULL,
  `aadharnumber` varchar(255) NOT NULL,
  `guardianparentscareofoccupation` varchar(255) NOT NULL,
  `problemcasestudies` text NOT NULL,
  `solution` text NOT NULL,
  `comments` text NOT NULL,
  `healthimg` varchar(255) NOT NULL,
  `creatdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `eligible` int(11) NOT NULL,
  `healthstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsid` int(11) NOT NULL,
  `newstitle` varchar(255) NOT NULL,
  `newsdate` varchar(255) NOT NULL,
  `newsdescription` text NOT NULL,
  `newsphoto` varchar(255) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `newstitle`, `newsdate`, `newsdescription`, `newsphoto`, `createdate`, `modifydate`, `status`) VALUES
(1, 'edu consaltancy', '20023-01-12', 'hiih', '1_vlcsnap-2022-03-28-17h43m28s737.png', '2022-05-17 07:32:38', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `schoolid` int(11) NOT NULL,
  `schoolno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `schoolname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `principalsname` varchar(255) NOT NULL,
  `principalsphonenumber` varchar(255) NOT NULL,
  `alternatecontactpersonsphonenumber` varchar(255) NOT NULL,
  `alternatecontactpersonsname` varchar(255) NOT NULL,
  `locationofschool` varchar(255) NOT NULL,
  `fulladdressofschool` varchar(255) NOT NULL,
  `pincodeofschool` varchar(255) NOT NULL,
  `interested` varchar(255) NOT NULL,
  `creatdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonialid` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `testimonialphoto` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonialid`, `date`, `title`, `testimonialphoto`, `description`, `createdate`, `modifydate`, `status`) VALUES
(1, '2022-06-10', 'Trisha', 'Trisha_trisha.jpg', '\"Itâ€™s great time to work with MMK Foundation. We are very lucky that we can help poor children to save their life for those who are critically ill. We pray to god that MMK Foundation reach at top of NGO sector\".', '2022-06-25 05:33:28', '25/06/22', 0),
(2, '', 'Sanjeev', '2_Sanjeev.png', 'Its Great to work  for MMK Foundation , especially for Health Sector.', '2022-06-25 07:34:50', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `videosid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `videolink` varchar(255) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `volunteersid` int(11) NOT NULL,
  `volunteersno` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `othercity` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `otherstate` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `localguardian` varchar(255) NOT NULL,
  `localcity` varchar(255) NOT NULL,
  `localothercity` varchar(255) NOT NULL,
  `localstate` varchar(255) NOT NULL,
  `localotherstate` varchar(255) NOT NULL,
  `localcountry` varchar(255) NOT NULL,
  `localpincode` varchar(255) NOT NULL,
  `phoneresid` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `workyears` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  `otherlanguage` varchar(255) NOT NULL,
  `workknowledge` varchar(255) NOT NULL,
  `itskills` varchar(255) NOT NULL,
  `programarea` varchar(255) NOT NULL,
  `workarea` varchar(255) NOT NULL,
  `relocation` varchar(255) NOT NULL,
  `months` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `volunteerimg` varchar(255) NOT NULL,
  `creatdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `volunteerscommand`
--

CREATE TABLE `volunteerscommand` (
  `volunteerscommandid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `volunteersno` varchar(255) NOT NULL,
  `commandtitle` varchar(255) NOT NULL,
  `commanddate` varchar(255) NOT NULL,
  `commanddescription` text NOT NULL,
  `commandphoto` varchar(255) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `volunteersindividuals`
--

CREATE TABLE `volunteersindividuals` (
  `volunteersindividualsid` int(11) NOT NULL,
  `volunteersindividualsno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `newsletter` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `volunteerimg` varchar(255) NOT NULL,
  `creatdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifydate` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteersindividuals`
--

INSERT INTO `volunteersindividuals` (`volunteersindividualsid`, `volunteersindividualsno`, `password`, `name`, `mobileno`, `email`, `dob`, `location`, `whatsapp`, `newsletter`, `pincode`, `organization`, `volunteerimg`, `creatdate`, `modifydate`, `status`) VALUES
(1, 'MMKV68326223', '37727555', 'sabari velayutham', '09843233147', 'nicewelltechnologies@gmail.com', '0984-01-12', 'salem', 'Yes', 'Yes', '636203', 'it company', '', '2022-05-17 07:44:21', '', 0),
(2, 'MMKV78255836', '22266581', 'sabari velayutham', '09843233147', 'nicewelltechnologies@gmail.com', '1984-01-12', 'salem', 'Yes', 'Yes', '636203', 'software', '', '2022-05-17 07:45:09', '', 0),
(3, 'MMKV74811376', '85525894', 'Ramesh', '9341631546', 'check@gmail.com', '2022-05-19', 'Salem', 'Yes', 'Yes', '636108', '', '', '2022-05-19 08:12:50', '', 0),
(4, 'MMKV26276386', '88101119', 'Ramesh', '9341631546', 'check@gmail.com', '2022-05-19', 'salem', 'Yes', 'Yes', '636108', '', '', '2022-05-19 08:13:53', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beneficiary`
--
ALTER TABLE `beneficiary`
  ADD PRIMARY KEY (`beneficiaryid`);

--
-- Indexes for table `corporates`
--
ALTER TABLE `corporates`
  ADD PRIMARY KEY (`corporatesid`);

--
-- Indexes for table `disasterresponse`
--
ALTER TABLE `disasterresponse`
  ADD PRIMARY KEY (`disasterresponseid`);

--
-- Indexes for table `donater`
--
ALTER TABLE `donater`
  ADD PRIMARY KEY (`donaterid`);

--
-- Indexes for table `donatercommand`
--
ALTER TABLE `donatercommand`
  ADD PRIMARY KEY (`donatercommandid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `employeestask`
--
ALTER TABLE `employeestask`
  ADD PRIMARY KEY (`employeestaskid`);

--
-- Indexes for table `environmentprotection`
--
ALTER TABLE `environmentprotection`
  ADD PRIMARY KEY (`environmentprotectionid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventsid`);

--
-- Indexes for table `forcollege`
--
ALTER TABLE `forcollege`
  ADD PRIMARY KEY (`forcollegeid`);

--
-- Indexes for table `forstudents`
--
ALTER TABLE `forstudents`
  ADD PRIMARY KEY (`forstudentsid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`galleryid`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`healthid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`schoolid`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonialid`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`videosid`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`volunteersid`);

--
-- Indexes for table `volunteerscommand`
--
ALTER TABLE `volunteerscommand`
  ADD PRIMARY KEY (`volunteerscommandid`);

--
-- Indexes for table `volunteersindividuals`
--
ALTER TABLE `volunteersindividuals`
  ADD PRIMARY KEY (`volunteersindividualsid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beneficiary`
--
ALTER TABLE `beneficiary`
  MODIFY `beneficiaryid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corporates`
--
ALTER TABLE `corporates`
  MODIFY `corporatesid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disasterresponse`
--
ALTER TABLE `disasterresponse`
  MODIFY `disasterresponseid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donater`
--
ALTER TABLE `donater`
  MODIFY `donaterid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donatercommand`
--
ALTER TABLE `donatercommand`
  MODIFY `donatercommandid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employeestask`
--
ALTER TABLE `employeestask`
  MODIFY `employeestaskid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `environmentprotection`
--
ALTER TABLE `environmentprotection`
  MODIFY `environmentprotectionid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `forcollege`
--
ALTER TABLE `forcollege`
  MODIFY `forcollegeid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forstudents`
--
ALTER TABLE `forstudents`
  MODIFY `forstudentsid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `galleryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `healthid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `schoolid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonialid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `videosid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `volunteersid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteerscommand`
--
ALTER TABLE `volunteerscommand`
  MODIFY `volunteerscommandid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteersindividuals`
--
ALTER TABLE `volunteersindividuals`
  MODIFY `volunteersindividualsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
