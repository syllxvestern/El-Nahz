-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2019 at 07:12 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vouchergame`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `idtransaksi` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idgame` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `gameid` varchar(100) NOT NULL,
  `metodepembayaran` varchar(100) NOT NULL,
  `notelp` varchar(100) NOT NULL,
  PRIMARY KEY (`idtransaksi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `iduser`, `idgame`, `value`, `gameid`, `metodepembayaran`, `notelp`) VALUES
(1, 2, 2, 500, '222', 'Telkomsel', '222222'),
(2, 2, 2, 500, '222', 'Telkomsel', '222222'),
(3, 2, 2, 1000, '123', 'Telkomsel', '123123'),
(4, 2, 2, 100, 'a', 'Telkomsel', '123'),
(5, 2, 1, 1000, '12312', 'Indosat', '123123'),
(6, 2, 2, 1000, 'qwe1', 'Telkomsel', '123123'),
(7, 2, 1, 500, 'rwer34', 'Three', '1231'),
(8, 2, 1, 500, 'rwer34', 'Three', '1231'),
(9, 2, 1, 500, 'rwer34', 'Three', '1231'),
(10, 2, 1, 1000, 'fsdf', 'Telkomsel', '123'),
(11, 2, 1, 1000, 'fsdf', 'Telkomsel', '123'),
(12, 0, 0, 0, '', '', ''),
(13, 0, 1, 500, 'gdfd5', 'Indosat', '555555'),
(14, 2, 1, 500, 'adffsdfs', 'Indosat', '342424');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
