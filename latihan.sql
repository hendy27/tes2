-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 12:38 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeemaster`
--

CREATE TABLE `employeemaster` (
  `EmployeeNo` varchar(25) NOT NULL,
  `FullName` varchar(25) NOT NULL,
  `BirhtPlace` varchar(25) NOT NULL,
  `BirthDate` datetime NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `MaritalStatus` varchar(1) NOT NULL,
  `NationalityCode` varchar(25) NOT NULL,
  `PersonalEmail` varchar(40) NOT NULL,
  `Note` varchar(225) NOT NULL,
  `LastModifiedBy` varchar(25) NOT NULL,
  `LastModifiedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeemaster`
--

INSERT INTO `employeemaster` (`EmployeeNo`, `FullName`, `BirhtPlace`, `BirthDate`, `Gender`, `MaritalStatus`, `NationalityCode`, `PersonalEmail`, `Note`, `LastModifiedBy`, `LastModifiedDate`) VALUES
('011', 'HHHH', 'dgds', '2019-09-09 00:00:00', 'F', 'F', 'sgg', 'sds@mail.com', ' er', '', '0000-00-00 00:00:00'),
('1', 'Hendy Hidayat', 'knng', '2019-08-01 00:00:00', 'M', 'M', '125', 'hendy.hidayat@mitrasinergi.com', 'dfhfsh', 'fh', '2019-08-28 00:00:00'),
('10', 'tyi ', 'tyi', '2019-08-27 00:00:00', 'M', 'S', 'yi', 'ti@mail.com', 'hendy', '', '0000-00-00 00:00:00'),
('106', 'HDDDDD', 'ff', '2019-01-25 00:00:00', 'F', 'S', 'rr', 'we@mail.com', 'gthy', '', '0000-00-00 00:00:00'),
('107', 'III', 'ff', '2019-01-29 00:00:00', 'M', 'S', 'tt', 'terrr@mail.com', 'fdgfdsh', 'Hendy', '2019-01-25 00:00:00'),
('123', 'AAA', 'aAAAA', '2019-01-30 00:00:00', 'M', 'S', 'RR', 'terrr@mail.com', 'dfbdhd', '', '0000-00-00 00:00:00'),
('124', 'AAA', 'aAAAA', '2019-01-30 00:00:00', 'M', 'S', 'RR', 'terrr@mail.com', 'dfbdhd', 'Hendy', '2019-01-25 00:00:00'),
('125', 'AAA', 'aAAAA', '2019-01-30 00:00:00', 'M', 'S', 'RR', 'terrr@mail.com', 'dfbdhd', 'Hendy', '2019-01-25 00:00:00'),
('2', 'rer ', 'erere', '2019-09-01 00:00:00', 'M', 'S', 'ttt', 'tt@mail.com', ' tess', '', '0000-00-00 00:00:00'),
('2333', 'sdfdssf ', 'dd', '2019-08-22 00:00:00', 'M', 'S', 'sdf', 'sdfdf@mail.com', ' df', '', '0000-00-00 00:00:00'),
('3', 'ttt ', 'yyy', '2019-09-01 00:00:00', 'F', 'S', 'uu', 'uu@mail.xcc', ' uuuu', '', '0000-00-00 00:00:00'),
('3232', 'erer ', 'rere', '2019-09-01 00:00:00', 'M', 'S', 'wdfas', 'sdfd@mail.com', ' sfdff', '', '0000-00-00 00:00:00'),
('34', 'wtw ', 'wtrr', '2019-09-18 00:00:00', 'M', 'S', 'twrt', 'wr@mail.com', ' wtr', '', '0000-00-00 00:00:00'),
('4', 'dtgd ', 'fg', '2019-09-03 00:00:00', 'M', 'S', 'fgfg', 'fgfg@mail.com', ' ggfgg', '', '0000-00-00 00:00:00'),
('40', 'j ', 'jj', '2019-09-03 00:00:00', 'M', 'S', 'gj', 'gjg@mail.com', ' gjg', '', '0000-00-00 00:00:00'),
('45', 'ttt ', 'tt', '2019-09-15 00:00:00', 'M', 'S', 'tet', 'tret@maul.com', ' ert', '', '0000-00-00 00:00:00'),
('5', 'trtu ', 'rtut', '2019-09-09 00:00:00', 'F', 'S', 'rtru', 'rurut@mail.com', ' ruu', '', '0000-00-00 00:00:00'),
('56', 'hdfh ', 'dfhd', '2019-09-03 00:00:00', 'M', 'S', 'dhg', '123@maildh.com', ' dghgd', '', '0000-00-00 00:00:00'),
('565', 'yt ', 'tyt', '2019-09-02 00:00:00', 'M', 'S', 'ty', 'tyt@mail.com', ' tyt', '', '0000-00-00 00:00:00'),
('70', 'yy', 'yyyy', '2019-08-13 00:00:00', 'M', 'S', 'yy', 'yy@mail.com', 'yyy', '', '0000-00-00 00:00:00'),
('76', 'rrh ', 'hrh', '2019-08-19 00:00:00', 'F', 'M', 'df', 'ee@mail.com', ' eee', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employeeoccupation`
--

CREATE TABLE `employeeoccupation` (
  `EmployeeNo` varchar(25) NOT NULL,
  `AbsenteeismNo` varchar(25) NOT NULL,
  `JoinDate` datetime NOT NULL,
  `EmploymentStatus` char(1) NOT NULL,
  `ProbationEndDate` datetime NOT NULL,
  `StartContractDate` datetime NOT NULL,
  `EndContractDate` datetime NOT NULL,
  `ContractSequenceNo` int(11) NOT NULL,
  `FirstJoinEmployeeNo` varchar(25) NOT NULL,
  `ResignDate` datetime NOT NULL,
  `ResignCode` varchar(25) NOT NULL,
  `ResignRemark` varchar(225) NOT NULL,
  `GradeCode` varchar(25) NOT NULL,
  `GradeCodeChangeDate` datetime NOT NULL,
  `PositionCode` varchar(25) NOT NULL,
  `PositionCodeChangeDate` datetime NOT NULL,
  `RankCode` varchar(25) NOT NULL,
  `RankCodeChangeDate` datetime NOT NULL,
  `Level1Code` varchar(25) NOT NULL,
  `Level2Code` varchar(25) NOT NULL,
  `Level3Code` varchar(25) NOT NULL,
  `Level4Code` varchar(25) NOT NULL,
  `Level5Code` varchar(25) NOT NULL,
  `Level1CodeChangeDate` datetime NOT NULL,
  `Level2CodeChangeDate` datetime NOT NULL,
  `Level3CodeChangeDate` datetime NOT NULL,
  `Level4CodeChangeDate` datetime NOT NULL,
  `Level5CodeChangeDate` datetime NOT NULL,
  `WorkNatureCode` varchar(25) NOT NULL,
  `WorkGroupCode` varchar(25) NOT NULL,
  `WorkGroupAuthorizeCode` varchar(25) NOT NULL,
  `Note` varchar(225) NOT NULL,
  `LastModifiedBy` varchar(25) NOT NULL,
  `LastModifiedDate` datetime NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeeoccupation`
--

INSERT INTO `employeeoccupation` (`EmployeeNo`, `AbsenteeismNo`, `JoinDate`, `EmploymentStatus`, `ProbationEndDate`, `StartContractDate`, `EndContractDate`, `ContractSequenceNo`, `FirstJoinEmployeeNo`, `ResignDate`, `ResignCode`, `ResignRemark`, `GradeCode`, `GradeCodeChangeDate`, `PositionCode`, `PositionCodeChangeDate`, `RankCode`, `RankCodeChangeDate`, `Level1Code`, `Level2Code`, `Level3Code`, `Level4Code`, `Level5Code`, `Level1CodeChangeDate`, `Level2CodeChangeDate`, `Level3CodeChangeDate`, `Level4CodeChangeDate`, `Level5CodeChangeDate`, `WorkNatureCode`, `WorkGroupCode`, `WorkGroupAuthorizeCode`, `Note`, `LastModifiedBy`, `LastModifiedDate`, `TimeStamp`) VALUES
('01', 'HDDDD', '2019-09-04 00:00:00', 'd', '2019-09-24 00:00:00', '2019-09-24 00:00:00', '2019-09-25 00:00:00', 785, 'adada', '2019-09-18 00:00:00', 'ad', 'ada', 'ada', '2019-09-26 00:00:00', 'da', '2019-09-11 00:00:00', 'da', '2019-09-30 00:00:00', 'ad', 'ADA', 'DAADA', 'DADA', 'dada', '2019-09-24 00:00:00', '2019-09-25 00:00:00', '2019-09-18 00:00:00', '2019-09-25 00:00:00', '2019-09-04 00:00:00', 'ADD', 'ADDS', 'GS', 'HHHH ', '', '1970-01-01 01:00:00', '2019-09-04 07:45:28'),
('03', 'fgd', '2019-09-02 00:00:00', 'f', '2019-09-02 00:00:00', '2019-09-02 00:00:00', '2019-09-02 00:00:00', 0, 'sfgf', '2019-09-02 00:00:00', 'gfg', 'fsgfs', 'sfgsf', '2019-09-02 00:00:00', 'sfgsf', '2019-09-02 00:00:00', 'dfgdg', '2019-09-02 00:00:00', 'sfgfs', 'sfgsf', 'sfgsf', 'sgsf', 'sfgs', '2019-09-02 00:00:00', '2019-09-02 00:00:00', '2019-09-02 00:00:00', '2019-09-02 00:00:00', '2019-09-02 00:00:00', 'sfgfs', 'sfgsf', 'sfg', ' sfg', 'Hendy', '2019-09-02 00:00:00', '0000-00-00 00:00:00'),
('05', 'gfg', '2019-09-12 00:00:00', 'd', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 0, 'dg', '1970-01-01 01:00:00', 'dgf', 'dfg', 'dgf', '1970-01-01 01:00:00', 'dfg', '1970-01-01 01:00:00', 'dg', '1970-01-01 01:00:00', 'dg', 'dfg', 'gd', 'dfg', 'dfg', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'dfg', 'dfg', 'dfg', ' dfg', 'dgf', '1970-01-01 01:00:00', '0000-00-00 00:00:00'),
('07', 'dasd', '2019-09-03 00:00:00', 'a', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 0, 'asd', '1970-01-01 01:00:00', 'ads', 'dasd', 'asdas', '1970-01-01 01:00:00', 'asd', '1970-01-01 01:00:00', 'asd', '1970-01-01 01:00:00', 'asd', 'asd', 'asd', 'asd', 'asd', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'asd', 'asd', 'asd', ' asd', '', '1970-01-01 01:00:00', '0000-00-00 00:00:00'),
('1221', '221', '2019-09-09 00:00:00', '1', '2019-09-02 00:00:00', '2019-09-02 00:00:00', '2019-09-09 00:00:00', 123, '123', '2019-09-02 00:00:00', '123', '123', '123', '2019-09-08 00:00:00', '43', '1970-01-01 01:00:00', '12', '2019-09-09 00:00:00', '123', '123', '123', '123', '123', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '123', '123', '123', ' ', '', '1970-01-01 01:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `timeemployeeabsenteeism`
--

CREATE TABLE `timeemployeeabsenteeism` (
  `EmployeeNo` varchar(25) NOT NULL,
  `TransactionDate` datetime NOT NULL,
  `SequenceNo` int(11) NOT NULL,
  `LeaveCode` varchar(25) NOT NULL,
  `AbsentCode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeemployeeabsenteeism`
--

INSERT INTO `timeemployeeabsenteeism` (`EmployeeNo`, `TransactionDate`, `SequenceNo`, `LeaveCode`, `AbsentCode`) VALUES
('50001', '2016-01-01 00:00:00', 1, 'NULL', 'NULL'),
('50002', '2016-01-02 00:00:00', 1, 'NULL', 'NULL'),
('50003', '2016-01-03 00:00:00', 1, 'NULL', 'NULL'),
('50004', '2016-01-04 00:00:00', 1, 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Hendy', 'Hendy', '202cb962ac59075b964b07152d234b70'),
(21, 'A', 'AA', 'aa'),
(22, 'B', 'BB', 'bb'),
(90, 'aaa', 'tessss', 'sdf'),
(97, 'ertgr', 'erg', 'r'),
(98, 'err', 'erg', 'ergr'),
(101, 'fgf', 'sfgfsg', 'gg'),
(102, '1', 'ere', 're'),
(107, 'nama', 'username', 'password'),
(108, 'C', 'CC', 'cc'),
(109, 'D', 'DD', 'dd'),
(110, 'E', 'EE', 'rr'),
(111, 'F', 'FF', 'ff'),
(115, 'yy', 'uu', 'uu'),
(116, 'UU', 'ZZ', 'zz'),
(117, 'ZZ', 'RR', 'RR'),
(118, 'EE', 'ZZ', 'ZZ'),
(119, 'wert', 'yuio', 'oll'),
(120, 'ert', 'tetttt', 'wet'),
(121, 'HD', 'ff', '2019-01-25'),
(122, 'iuo', 'hjkk', 'hkcv'),
(123, 'yyy', 'fghfg', 'ghgfd'),
(124, 'HDDDDD', 'ff', '2019-01-25'),
(125, 'tuyuyt', 'tdyju', 'tyjdt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeemaster`
--
ALTER TABLE `employeemaster`
  ADD PRIMARY KEY (`EmployeeNo`);

--
-- Indexes for table `employeeoccupation`
--
ALTER TABLE `employeeoccupation`
  ADD PRIMARY KEY (`EmployeeNo`);

--
-- Indexes for table `timeemployeeabsenteeism`
--
ALTER TABLE `timeemployeeabsenteeism`
  ADD PRIMARY KEY (`EmployeeNo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
