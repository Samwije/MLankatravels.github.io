-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 02:13 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mlankatravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `allinclusivetour`
--

CREATE TABLE IF NOT EXISTS `allinclusivetour` (
  `idallinclusivetour` int(11) NOT NULL,
  `startfrom` double DEFAULT NULL,
  `pax2x` double DEFAULT NULL,
  `pax3x` double DEFAULT NULL,
  `pax46x` double DEFAULT NULL,
  `pax79x` double DEFAULT NULL,
  `pax1015x` double DEFAULT NULL,
  `datex` int(11) DEFAULT NULL,
  `monthx` varchar(22) DEFAULT NULL,
  `yearx` int(11) DEFAULT NULL,
  PRIMARY KEY (`idallinclusivetour`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allinclusivetour`
--

INSERT INTO `allinclusivetour` (`idallinclusivetour`, `startfrom`, `pax2x`, `pax3x`, `pax46x`, `pax79x`, `pax1015x`, `datex`, `monthx`, `yearx`) VALUES
(0, 222, 222, 222, 222, 222, 222, 22, 'January', 2222);

-- --------------------------------------------------------

--
-- Table structure for table `buddhisttour`
--

CREATE TABLE IF NOT EXISTS `buddhisttour` (
  `idbuddhisttour` int(11) NOT NULL,
  `startfrom` double DEFAULT NULL,
  `pax2x` double DEFAULT NULL,
  `pax3x` double DEFAULT NULL,
  `pax46x` double DEFAULT NULL,
  `pax79x` double DEFAULT NULL,
  `pax1015x` double DEFAULT NULL,
  `datex` int(11) DEFAULT NULL,
  `monthx` varchar(22) DEFAULT NULL,
  `yearx` int(11) DEFAULT NULL,
  `pax2y` double DEFAULT NULL,
  `pax3y` double DEFAULT NULL,
  `pax46y` double DEFAULT NULL,
  `pax79y` double DEFAULT NULL,
  `pax1015y` double DEFAULT NULL,
  `datey` int(11) DEFAULT NULL,
  `monthy` varchar(22) DEFAULT NULL,
  `yeary` int(11) DEFAULT NULL,
  PRIMARY KEY (`idbuddhisttour`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buddhisttour`
--

INSERT INTO `buddhisttour` (`idbuddhisttour`, `startfrom`, `pax2x`, `pax3x`, `pax46x`, `pax79x`, `pax1015x`, `datex`, `monthx`, `yearx`, `pax2y`, `pax3y`, `pax46y`, `pax79y`, `pax1015y`, `datey`, `monthy`, `yeary`) VALUES
(0, 888, 88, 88, 88, 88, 88, 88, 'April', 8888, 88, 88, 88, 88, 88, 88, 'February', 8888);

-- --------------------------------------------------------

--
-- Table structure for table `casinonightlife`
--

CREATE TABLE IF NOT EXISTS `casinonightlife` (
  `idcasinonightlife` int(11) NOT NULL,
  `startfrom` double DEFAULT NULL,
  `pax2x` double DEFAULT NULL,
  `pax3x` double DEFAULT NULL,
  `pax46x` double DEFAULT NULL,
  `pax79x` double DEFAULT NULL,
  `pax1015x` double DEFAULT NULL,
  `datex` int(11) DEFAULT NULL,
  `monthx` varchar(22) DEFAULT NULL,
  `yearx` int(11) DEFAULT NULL,
  `pax2y` double DEFAULT NULL,
  `pax3y` double DEFAULT NULL,
  `pax46y` double DEFAULT NULL,
  `pax79y` double DEFAULT NULL,
  `pax1015y` double DEFAULT NULL,
  `datey` int(11) DEFAULT NULL,
  `monthy` varchar(22) DEFAULT NULL,
  `yeary` int(11) DEFAULT NULL,
  `pax2z` double DEFAULT NULL,
  `pax3z` double DEFAULT NULL,
  `pax46z` double DEFAULT NULL,
  `pax79z` double DEFAULT NULL,
  `pax1015z` double DEFAULT NULL,
  `datez` int(11) DEFAULT NULL,
  `monthz` varchar(22) DEFAULT NULL,
  `yearz` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcasinonightlife`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casinonightlife`
--

INSERT INTO `casinonightlife` (`idcasinonightlife`, `startfrom`, `pax2x`, `pax3x`, `pax46x`, `pax79x`, `pax1015x`, `datex`, `monthx`, `yearx`, `pax2y`, `pax3y`, `pax46y`, `pax79y`, `pax1015y`, `datey`, `monthy`, `yeary`, `pax2z`, `pax3z`, `pax46z`, `pax79z`, `pax1015z`, `datez`, `monthz`, `yearz`) VALUES
(0, 999, 999, 999, 999, 999, 999, 99, 'April', 9999, 99, 99, 99, 99, 99, 99, 'January', 9999, 99, 99, 99, 99, 99, 99, 'November', 9999);

-- --------------------------------------------------------

--
-- Table structure for table `chasetojungle`
--

CREATE TABLE IF NOT EXISTS `chasetojungle` (
  `idchasetojungle` int(11) NOT NULL,
  `startfrom` double DEFAULT NULL,
  `pax2x` double DEFAULT NULL,
  `pax3x` double DEFAULT NULL,
  `pax46x` double DEFAULT NULL,
  `pax79x` double DEFAULT NULL,
  `pax1015x` double DEFAULT NULL,
  `datex` int(11) DEFAULT NULL,
  `monthx` varchar(22) DEFAULT NULL,
  `yearx` int(11) DEFAULT NULL,
  `pax2y` double DEFAULT NULL,
  `pax3y` double DEFAULT NULL,
  `pax46y` double DEFAULT NULL,
  `pax79y` double DEFAULT NULL,
  `pax1015y` double DEFAULT NULL,
  `datey` int(11) DEFAULT NULL,
  `monthy` varchar(22) DEFAULT NULL,
  `yeary` int(11) DEFAULT NULL,
  PRIMARY KEY (`idchasetojungle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chasetojungle`
--

INSERT INTO `chasetojungle` (`idchasetojungle`, `startfrom`, `pax2x`, `pax3x`, `pax46x`, `pax79x`, `pax1015x`, `datex`, `monthx`, `yearx`, `pax2y`, `pax3y`, `pax46y`, `pax79y`, `pax1015y`, `datey`, `monthy`, `yeary`) VALUES
(0, 222, 222, 222, 222, 222, 222, 22, 'November', 2020, 222, 222, 222, 222, 222, 21, 'January', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `exploredeepjungle`
--

CREATE TABLE IF NOT EXISTS `exploredeepjungle` (
  `idexploredeepjungle` int(11) NOT NULL,
  `startfrom` double DEFAULT NULL,
  `pax2x` double DEFAULT NULL,
  `pax3x` double DEFAULT NULL,
  `pax46x` double DEFAULT NULL,
  `pax79x` double DEFAULT NULL,
  `pax1015x` double DEFAULT NULL,
  `datex` int(11) DEFAULT NULL,
  `monthx` varchar(22) DEFAULT NULL,
  `yearx` int(11) DEFAULT NULL,
  `pax2y` double DEFAULT NULL,
  `pax3y` double DEFAULT NULL,
  `pax46y` double DEFAULT NULL,
  `pax79y` double DEFAULT NULL,
  `pax1015y` double DEFAULT NULL,
  `datey` int(11) DEFAULT NULL,
  `monthy` varchar(22) DEFAULT NULL,
  `yeary` int(11) DEFAULT NULL,
  PRIMARY KEY (`idexploredeepjungle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exploredeepjungle`
--

INSERT INTO `exploredeepjungle` (`idexploredeepjungle`, `startfrom`, `pax2x`, `pax3x`, `pax46x`, `pax79x`, `pax1015x`, `datex`, `monthx`, `yearx`, `pax2y`, `pax3y`, `pax46y`, `pax79y`, `pax1015y`, `datey`, `monthy`, `yeary`) VALUES
(0, 666, 666, 666, 666, 666, 666, 666, 'November', 6666, 666, 666, 666, 666, 666, 666, 'January', 800);

-- --------------------------------------------------------

--
-- Table structure for table `familytour`
--

CREATE TABLE IF NOT EXISTS `familytour` (
  `idfamilytour` int(11) NOT NULL,
  `startfrom` double DEFAULT NULL,
  `pax2x` double DEFAULT NULL,
  `pax3x` double DEFAULT NULL,
  `pax46x` double DEFAULT NULL,
  `pax79x` double DEFAULT NULL,
  `pax1015x` double DEFAULT NULL,
  `datex` int(11) DEFAULT NULL,
  `monthx` varchar(22) DEFAULT NULL,
  `yearx` int(11) DEFAULT NULL,
  `pax2y` double DEFAULT NULL,
  `pax3y` double DEFAULT NULL,
  `pax46y` double DEFAULT NULL,
  `pax79y` double DEFAULT NULL,
  `pax1015y` double DEFAULT NULL,
  `datey` int(11) DEFAULT NULL,
  `monthy` varchar(22) DEFAULT NULL,
  `yeary` int(11) DEFAULT NULL,
  PRIMARY KEY (`idfamilytour`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `familytour`
--

INSERT INTO `familytour` (`idfamilytour`, `startfrom`, `pax2x`, `pax3x`, `pax46x`, `pax79x`, `pax1015x`, `datex`, `monthx`, `yearx`, `pax2y`, `pax3y`, `pax46y`, `pax79y`, `pax1015y`, `datey`, `monthy`, `yeary`) VALUES
(0, 4444, 444, 444, 444, 444, 444, 23, 'July', 2020, 444, 444, 444, 444, 444, 19, 'January', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `feelthelove`
--

CREATE TABLE IF NOT EXISTS `feelthelove` (
  `idfeelthelove` int(11) NOT NULL,
  `startfrom` double DEFAULT NULL,
  `couplex` double DEFAULT NULL,
  `datex` int(11) DEFAULT NULL,
  `monthx` varchar(22) DEFAULT NULL,
  `yearx` int(11) DEFAULT NULL,
  `coupley` double DEFAULT NULL,
  `datey` int(11) DEFAULT NULL,
  `monthy` varchar(22) DEFAULT NULL,
  `yeary` int(11) DEFAULT NULL,
  PRIMARY KEY (`idfeelthelove`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feelthelove`
--

INSERT INTO `feelthelove` (`idfeelthelove`, `startfrom`, `couplex`, `datex`, `monthx`, `yearx`, `coupley`, `datey`, `monthy`, `yeary`) VALUES
(0, 555, 555, 55, 'December', 5555, 55, 55, 'January', 5555);

-- --------------------------------------------------------

--
-- Table structure for table `luxuryholiday`
--

CREATE TABLE IF NOT EXISTS `luxuryholiday` (
  `idluxuryholiday` int(11) NOT NULL,
  `startfrom` double DEFAULT NULL,
  `pax2x` double DEFAULT NULL,
  `pax3x` double DEFAULT NULL,
  `pax46x` double DEFAULT NULL,
  `pax79x` double DEFAULT NULL,
  `pax1015x` double DEFAULT NULL,
  `datex` int(11) DEFAULT NULL,
  `monthx` varchar(22) DEFAULT NULL,
  `yearx` int(11) DEFAULT NULL,
  PRIMARY KEY (`idluxuryholiday`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luxuryholiday`
--

INSERT INTO `luxuryholiday` (`idluxuryholiday`, `startfrom`, `pax2x`, `pax3x`, `pax46x`, `pax79x`, `pax1015x`, `datex`, `monthx`, `yearx`) VALUES
(0, 77, 77, 77, 77, 77, 77, 77, 'January', 7777);

-- --------------------------------------------------------

--
-- Table structure for table `mistyhils`
--

CREATE TABLE IF NOT EXISTS `mistyhils` (
  `idmistyhils` int(11) NOT NULL,
  `startfrom` double DEFAULT NULL,
  `pax2x` double DEFAULT NULL,
  `pax3x` double DEFAULT NULL,
  `pax46x` double DEFAULT NULL,
  `pax79x` double DEFAULT NULL,
  `pax1015x` double DEFAULT NULL,
  `datex` int(11) DEFAULT NULL,
  `monthx` varchar(22) DEFAULT NULL,
  `yearx` int(11) DEFAULT NULL,
  `pax2y` double DEFAULT NULL,
  `pax3y` double DEFAULT NULL,
  `pax46y` double DEFAULT NULL,
  `pax79y` double DEFAULT NULL,
  `pax1015y` double DEFAULT NULL,
  `datey` int(11) DEFAULT NULL,
  `monthy` varchar(22) DEFAULT NULL,
  `yeary` int(11) DEFAULT NULL,
  PRIMARY KEY (`idmistyhils`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mistyhils`
--

INSERT INTO `mistyhils` (`idmistyhils`, `startfrom`, `pax2x`, `pax3x`, `pax46x`, `pax79x`, `pax1015x`, `datex`, `monthx`, `yearx`, `pax2y`, `pax3y`, `pax46y`, `pax79y`, `pax1015y`, `datey`, `monthy`, `yeary`) VALUES
(0, 333, 333, 333, 333, 333, 333, 33, 'August', 2024, 33, 333, 333, 333, 333, 22, 'December', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `idregister` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idregister`,`email`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`idregister`, `username`, `email`, `password`) VALUES
(1, 'Sameera', 'sameera@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `romanticgateway`
--

CREATE TABLE IF NOT EXISTS `romanticgateway` (
  `idromanticgateway` int(11) NOT NULL,
  `startfrom` double DEFAULT NULL,
  `couplex` double DEFAULT NULL,
  `datex` int(11) DEFAULT NULL,
  `monthx` varchar(22) DEFAULT NULL,
  `yearx` int(11) DEFAULT NULL,
  `coupley` double DEFAULT NULL,
  `datey` int(11) DEFAULT NULL,
  `monthy` varchar(22) DEFAULT NULL,
  `yeary` int(11) DEFAULT NULL,
  PRIMARY KEY (`idromanticgateway`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `romanticgateway`
--

INSERT INTO `romanticgateway` (`idromanticgateway`, `startfrom`, `couplex`, `datex`, `monthx`, `yearx`, `coupley`, `datey`, `monthy`, `yeary`) VALUES
(0, 200, 333, 33, 'may', 3333, 33, 33, 'April', 3333);

-- --------------------------------------------------------

--
-- Table structure for table `romanticholiday`
--

CREATE TABLE IF NOT EXISTS `romanticholiday` (
  `idromanticholiday` int(11) NOT NULL,
  `startfrom` double DEFAULT NULL,
  `couplex` double DEFAULT NULL,
  `datex` int(11) DEFAULT NULL,
  `monthx` varchar(22) DEFAULT NULL,
  `yearx` int(11) DEFAULT NULL,
  `coupley` double DEFAULT NULL,
  `datey` int(11) DEFAULT NULL,
  `monthy` varchar(22) DEFAULT NULL,
  `yeary` int(11) DEFAULT NULL,
  PRIMARY KEY (`idromanticholiday`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `romanticholiday`
--

INSERT INTO `romanticholiday` (`idromanticholiday`, `startfrom`, `couplex`, `datex`, `monthx`, `yearx`, `coupley`, `datey`, `monthy`, `yeary`) VALUES
(0, 100, 22, 22, 'January', 2222, 22, 22, 'April', 2222);

-- --------------------------------------------------------

--
-- Table structure for table `teacounty`
--

CREATE TABLE IF NOT EXISTS `teacounty` (
  `idteacounty` int(11) NOT NULL,
  `startfrom` double DEFAULT NULL,
  `pax2x` double DEFAULT NULL,
  `pax3x` double DEFAULT NULL,
  `pax46x` double DEFAULT NULL,
  `pax79x` double DEFAULT NULL,
  `pax1015x` double DEFAULT NULL,
  `datex` int(11) DEFAULT NULL,
  `monthx` varchar(22) DEFAULT NULL,
  `yearx` int(11) DEFAULT NULL,
  `pax2y` double DEFAULT NULL,
  `pax3y` double DEFAULT NULL,
  `pax46y` double DEFAULT NULL,
  `pax79y` double DEFAULT NULL,
  `pax1015y` double DEFAULT NULL,
  `datey` int(11) DEFAULT NULL,
  `monthy` varchar(22) DEFAULT NULL,
  `yeary` int(11) DEFAULT NULL,
  PRIMARY KEY (`idteacounty`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacounty`
--

INSERT INTO `teacounty` (`idteacounty`, `startfrom`, `pax2x`, `pax3x`, `pax46x`, `pax79x`, `pax1015x`, `datex`, `monthx`, `yearx`, `pax2y`, `pax3y`, `pax46y`, `pax79y`, `pax1015y`, `datey`, `monthy`, `yeary`) VALUES
(0, 555, 555, 555, 555, 555, 555, 12, 'February', 2020, 555, 555, 555, 555, 555, 17, 'January', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE IF NOT EXISTS `tour` (
  `idtravelname` int(11) NOT NULL AUTO_INCREMENT,
  `traveltype_idtraveltype` int(11) NOT NULL,
  `tourname` varchar(45) DEFAULT NULL,
  `pp_price` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtravelname`),
  KEY `fk_travelname_traveltype` (`traveltype_idtraveltype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tourhotel`
--

CREATE TABLE IF NOT EXISTS `tourhotel` (
  `idtourdetail` int(11) NOT NULL AUTO_INCREMENT,
  `dtravelname` int(11) NOT NULL,
  `day` varchar(45) DEFAULT NULL,
  `night` varchar(45) DEFAULT NULL,
  `pp_price` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtourdetail`),
  KEY `fk_tourdetail_tourname1` (`dtravelname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tourtype`
--

CREATE TABLE IF NOT EXISTS `tourtype` (
  `idtraveltype` int(11) NOT NULL AUTO_INCREMENT,
  `traveltype_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtraveltype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wildlife`
--

CREATE TABLE IF NOT EXISTS `wildlife` (
  `idwildlife` int(11) NOT NULL,
  `startfrom` double DEFAULT NULL,
  `pax2x` double DEFAULT NULL,
  `pax3x` double DEFAULT NULL,
  `pax46x` double DEFAULT NULL,
  `pax79x` double DEFAULT NULL,
  `pax1015x` double DEFAULT NULL,
  `datex` int(11) DEFAULT NULL,
  `monthx` varchar(22) DEFAULT NULL,
  `yearx` int(11) DEFAULT NULL,
  `pax2y` double DEFAULT NULL,
  `pax3y` double DEFAULT NULL,
  `pax46y` double DEFAULT NULL,
  `pax79y` double DEFAULT NULL,
  `pax1015y` double DEFAULT NULL,
  `datey` int(11) DEFAULT NULL,
  `monthy` varchar(22) DEFAULT NULL,
  `yeary` int(11) DEFAULT NULL,
  PRIMARY KEY (`idwildlife`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wildlife`
--

INSERT INTO `wildlife` (`idwildlife`, `startfrom`, `pax2x`, `pax3x`, `pax46x`, `pax79x`, `pax1015x`, `datex`, `monthx`, `yearx`, `pax2y`, `pax3y`, `pax46y`, `pax79y`, `pax1015y`, `datey`, `monthy`, `yeary`) VALUES
(0, 120, 111, 111, 111, 111, 11, 11, 'April', 1111, 11, 11, 11, 11, 11, 11, 'July', 1111);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `fk_travelname_traveltype` FOREIGN KEY (`traveltype_idtraveltype`) REFERENCES `tourtype` (`idtraveltype`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tourhotel`
--
ALTER TABLE `tourhotel`
  ADD CONSTRAINT `fk_tourdetail_tourname1` FOREIGN KEY (`dtravelname`) REFERENCES `tour` (`idtravelname`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
