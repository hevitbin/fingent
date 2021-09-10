-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 10, 2021 at 12:20 PM
-- Server version: 5.7.21
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fingent`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_billing`
--

DROP TABLE IF EXISTS `tbl_billing`;
CREATE TABLE IF NOT EXISTS `tbl_billing` (
  `tmd_id` int(11) NOT NULL AUTO_INCREMENT,
  `tm_orderno` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tmd_menu` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tmd_qty` float DEFAULT NULL,
  `tmd_rate` decimal(15,3) DEFAULT NULL,
  `tmd_total` decimal(15,3) DEFAULT NULL,
  `tmd_tax` decimal(15,3) NOT NULL DEFAULT '0.000',
  `tmd_sync` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `tm_tax_amt` decimal(15,3) NOT NULL DEFAULT '0.000',
  PRIMARY KEY (`tmd_id`),
  UNIQUE KEY `tmd_ref_id` (`tmd_menu`)
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bill_setup`
--

DROP TABLE IF EXISTS `tbl_bill_setup`;
CREATE TABLE IF NOT EXISTS `tbl_bill_setup` (
  `ts_id` int(11) NOT NULL,
  `ts_count` int(11) NOT NULL,
  PRIMARY KEY (`ts_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_bill_setup`
--

INSERT INTO `tbl_bill_setup` (`ts_id`, `ts_count`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

DROP TABLE IF EXISTS `tbl_invoice`;
CREATE TABLE IF NOT EXISTS `tbl_invoice` (
  `ti_inovice` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ti_orderno` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ti_subtotal` decimal(15,3) DEFAULT NULL,
  `ti_tax` decimal(15,3) DEFAULT NULL,
  `ti_discount` decimal(15,3) DEFAULT NULL,
  `ti_finaltotal` decimal(15,3) DEFAULT NULL,
  `ti_sync` char(1) COLLATE utf8_unicode_ci DEFAULT 'N',
  UNIQUE KEY `ti_inovice` (`ti_inovice`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
