-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 02, 2014 at 01:10 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_kredit_motor`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `m_angsuran`
-- 

CREATE TABLE `m_angsuran` (
  `KODE_ANGSUR` int(20) NOT NULL,
  `KODE_MOTOR` varchar(50) default NULL,
  `DP` int(20) default NULL,
  `BUNGA` int(20) default NULL,
  `10X` int(20) default NULL,
  `16X` int(20) default NULL,
  `22X` int(20) default NULL,
  `28X` int(20) default NULL,
  `36X` int(20) default NULL,
  `IS_ACTIVE` varchar(2) default NULL,
  PRIMARY KEY  (`KODE_ANGSUR`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `m_angsuran`
-- 

INSERT INTO `m_angsuran` VALUES (23, 'H001', 2660000, 0, 886666, 443333, 295555, 0, 0, '1');
INSERT INTO `m_angsuran` VALUES (24, 'H002', 2865000, 0, 955000, 477500, 318333, 0, 0, '1');
INSERT INTO `m_angsuran` VALUES (25, 'H003', 3115000, 0, 1038000, 519166, 346111, 0, 0, '1');
INSERT INTO `m_angsuran` VALUES (26, 'H004', 2680000, 0, 893333, 446666, 297777, 0, 0, '1');
INSERT INTO `m_angsuran` VALUES (27, 'H005', 2395000, 0, 798333, 399166, 266111, 0, 0, '1');
INSERT INTO `m_angsuran` VALUES (28, 'Y001', 2660000, 0, 886666, 443333, 295555, 0, 0, '1');
INSERT INTO `m_angsuran` VALUES (29, 'Y002', 3115000, 0, 1038333, 519166, 346111, 0, 0, '1');
INSERT INTO `m_angsuran` VALUES (30, 'Y003', 4535000, 0, 1511666, 755833, 503888, 0, 0, '1');
INSERT INTO `m_angsuran` VALUES (31, 'Y004', 4535000, 0, 1511666, 755833, 503888, 0, 0, '1');
INSERT INTO `m_angsuran` VALUES (32, 'Y005', 3455000, 0, 1151666, 575833, 383888, 0, 0, '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `m_customer`
-- 

CREATE TABLE `m_customer` (
  `NO_PK` varchar(50) NOT NULL,
  `NASABAH` varchar(100) default NULL,
  `ALAMAT` varchar(4000) default NULL,
  `NO_HP` varchar(50) default NULL,
  `TGL_LAHIR` varchar(50) default NULL,
  `PENJAMIN` varchar(50) default NULL,
  `PENGHASILAN` int(20) default NULL,
  `PENGELUARAN` int(20) default NULL,
  `NO_KTP` varchar(50) default NULL,
  PRIMARY KEY  (`NO_PK`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `m_customer`
-- 

INSERT INTO `m_customer` VALUES ('43', 'Feldy Yusuf', 'Depok', '09892723648', '01/01/2014', 'Feldy', 100000000, 10000000, '724742983472');
INSERT INTO `m_customer` VALUES ('44', 'Gugun', 'BOGOR', '9283479287', '27/01/2014', 'GUGUN', 200000000, 200000000, '98787934533453');
INSERT INTO `m_customer` VALUES ('45', 'cindy', 'kuningan dalam depok', '02187634577', '02/01/2014', 'Feldy', 5000000, 10000000, '6535476');
INSERT INTO `m_customer` VALUES ('46', 'DJ', 'tebet', '081228082004', '17/07/1998', 'andika', 7000000, 3000000, '4010875768');
INSERT INTO `m_customer` VALUES ('47', 'novi', 'matraman', '02167576989', '06/02/1991', 'daimal', 8000000, 2000000, '6465476');
INSERT INTO `m_customer` VALUES ('48', 'rizky', 'batu tulis', '0217656798', '22/01/1981', 'tante', 10000000, 3000000, '6757698');
INSERT INTO `m_customer` VALUES ('49', 'edy', 'citayem', '02187687689709', '11/04/1997', 'meimei', 12000000, 5000000, '87568');
INSERT INTO `m_customer` VALUES ('50', 'misni', 'bogor', '02176465877', '26/01/1990', 'sendiri', 100000000, 20000000, '67443324');
INSERT INTO `m_customer` VALUES ('51', 'andika', 'kota', '9867654543', '20/10/1999', 'emaknya', 3000000, 1000000, '367698');
INSERT INTO `m_customer` VALUES ('52', 'daimal mustikasari', 'buaran', '0217656789', '30/01/1992', 'novi fadli', 6000000, 5000000, '4578980');

-- --------------------------------------------------------

-- 
-- Table structure for table `m_motor`
-- 

CREATE TABLE `m_motor` (
  `KODE_MOTOR` varchar(10) NOT NULL,
  `MEREK` varchar(50) default NULL,
  `TYPE` varchar(50) default NULL,
  `OTR` varchar(50) default NULL,
  `HARGA` int(20) default NULL,
  `TAHUN` varchar(50) default NULL,
  `IS_ACTIVE` varchar(2) default NULL,
  PRIMARY KEY  (`KODE_MOTOR`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `m_motor`
-- 

INSERT INTO `m_motor` VALUES ('H001', 'Honda', 'NEW BEAT CW', '13300000', 13300000, '2013', '1');
INSERT INTO `m_motor` VALUES ('H002', 'Honda', 'NEW SCOOPY', '14325000', 14325000, '2013', '1');
INSERT INTO `m_motor` VALUES ('H003', 'Honda', 'VARIO TECHNO', '15575000', 15575000, '2013', '1');
INSERT INTO `m_motor` VALUES ('H004', 'Honda', 'SPACY', '13400000', 13400000, '2013', '1');
INSERT INTO `m_motor` VALUES ('H005', 'Honda', 'REVO', '11975000', 11975000, '2013', '1');
INSERT INTO `m_motor` VALUES ('Y001', 'Yamaha', 'MIO', '14775000', 14775000, '2013', '1');
INSERT INTO `m_motor` VALUES ('Y002', 'Yamaha', 'JUPITER', '17275000', 17275000, '2014', '1');
INSERT INTO `m_motor` VALUES ('Y003', 'Yamaha', 'VIXION', '22675000', 22675000, '2013', '1');
INSERT INTO `m_motor` VALUES ('Y004', 'Yamaha', 'SCORPIO', '22675000', 22675000, '2013', '1');
INSERT INTO `m_motor` VALUES ('Y005', 'Yamaha', 'SEON', '16450000', 16450000, '2013', '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `m_penjualan`
-- 

CREATE TABLE `m_penjualan` (
  `NO_PK` varchar(50) NOT NULL,
  `KODE_CUSTOMER` varchar(22) NOT NULL,
  `KODE_MOTOR` varchar(22) NOT NULL,
  `KODE_ANGSUR` varchar(22) NOT NULL,
  `JATUH_TEMPO` varchar(22) default NULL,
  `TENOR` varchar(22) default NULL,
  `TANGGAL` varchar(44) default NULL,
  `IS_ACTIVE` varchar(2) default NULL,
  `JUMLAH_BAYAR` int(20) default NULL,
  `DP` int(20) default NULL,
  PRIMARY KEY  (`NO_PK`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `m_penjualan`
-- 

INSERT INTO `m_penjualan` VALUES ('11582551H0010', '51', 'H002', '24', '12/01/2014', '10x', '12/01/2014', '1', 955000, 2865000);
INSERT INTO `m_penjualan` VALUES ('17440645H0010', '45', 'H003', '25', '12/01/2014', '10x', '12/01/2014', '1', 1038000, 3115000);

-- --------------------------------------------------------

-- 
-- Table structure for table `t_angsuran`
-- 

CREATE TABLE `t_angsuran` (
  `NO_TRANSAKSI` varchar(50) NOT NULL,
  `NO_PK` varchar(50) NOT NULL,
  `TANGGAL` varchar(50) NOT NULL,
  `IS_ACTIVE` varchar(2) NOT NULL,
  PRIMARY KEY  (`NO_TRANSAKSI`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `t_angsuran`
-- 

INSERT INTO `t_angsuran` VALUES ('35', '17440645H0010', '12/01/2014', '1');
