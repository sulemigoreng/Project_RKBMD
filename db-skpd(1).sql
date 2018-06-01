-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 03:42 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-skpd`
--

-- --------------------------------------------------------

--
-- Table structure for table `aturan`
--

CREATE TABLE `aturan` (
  `kode_aturan` varchar(4) NOT NULL,
  `kode_jabatan` varchar(3) NOT NULL,
  `kode_barang` varchar(64) NOT NULL,
  `kode_ruangan` varchar(3) NOT NULL,
  `kuantitas_maks` int(2) NOT NULL,
  `satuan` varchar(8) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aturan`
--

INSERT INTO `aturan` (`kode_aturan`, `kode_jabatan`, `kode_barang`, `kode_ruangan`, `kuantitas_maks`, `satuan`, `keterangan`) VALUES
('A001', 'J03', '02.07.01.01.03.0001', 'R01', 1, 'unit', 'a'),
('A002', 'J03', '02.07.01.01.03.0002', 'R01', 1, 'unit', 'a'),
('A003', 'J03', '02.07.01.01.03.0004', 'R01', 1, 'unit', 'a'),
('A004', 'J03', '02.07.01.01.03.0005', 'R01', 1, 'unit', 'a'),
('A005', 'J03', '02.07.01.01.03.0005', 'R02', 1, 'unit', 'a'),
('A006', 'J03', '02.07.01.01.03.0005', 'R04', 1, 'unit', 'a'),
('A007', 'J03', '02.07.01.01.03.0005', 'R05', 1, 'unit', 'a'),
('A008', 'J03', '02.07.01.01.03.0006', 'R04', 1, 'unit', 'a'),
('A009', 'J03', '02.07.01.01.03.0007', 'R01', 1, 'unit', 'a'),
('A010', 'J03', '02.07.01.01.03.0007', 'R04', 1, 'unit', 'a'),
('A011', 'J03', '02.07.01.01.03.0008', 'R01', 1, 'unit', 'a'),
('A012', 'J03', '02.07.01.01.03.0009', 'R01', 1, 'unit', 'a'),
('A013', 'J03', '02.07.01.01.03.0010', 'R04', 2, 'unit', 'a'),
('A014', 'J03', '02.07.01.01.03.0011', 'R01', 2, 'unit', 'a'),
('A015', 'J03', '02.07.01.01.03.0012', 'R01', 1, 'unit', 'a'),
('A016', 'J03', '02.07.01.01.03.0012', 'R02', 1, 'unit', 'a'),
('A017', 'J03', '02.07.01.01.03.0012', 'R04', 1, 'unit', 'a'),
('A018', 'J03', '02.07.01.01.03.0013', 'R04', 1, 'unit', 'a'),
('A019', 'J03', '02.07.01.01.03.0014', 'R01', 1, 'unit', 'a'),
('A020', 'J03', '02.07.01.01.03.0014', 'R04', 1, 'unit', 'a'),
('A021', 'J03', '02.07.01.01.03.0015', 'R01', 1, 'unit', 'a'),
('A022', 'J03', '02.07.01.01.03.0016', 'R04', 1, 'unit', 'a'),
('A023', 'J03', '02.07.01.01.03.0017', 'R01', 1, 'unit', 'a'),
('A024', 'J03', '02.07.01.01.03.0017', 'R04', 1, 'unit', 'a'),
('A025', 'J03', '02.07.01.01.03.0018', 'R01', 1, 'unit', 'a'),
('A026', 'J03', '02.07.01.01.03.0018', 'R04', 1, 'unit', 'a'),
('A027', 'J03', '02.07.01.01.03.0020', 'R04', 1, 'unit', 'a'),
('A028', 'J03', '02.07.01.01.03.0021', 'R05', 1, 'unit', 'a'),
('A029', 'J03', '02.07.01.01.03.0021', 'R02', 1, 'unit', 'a'),
('A030', 'J03', '02.07.01.01.03.0022', 'R01', 1, 'unit', 'a'),
('A031', 'J03', '02.07.01.01.03.0023', 'R01', 1, 'unit', 'a'),
('A032', 'J03', '02.07.01.01.03.0024', 'R01', 1, 'unit', 'a'),
('A033', 'J03', '02.07.01.01.03.0024', 'R02', 1, 'unit', 'a'),
('A034', 'J03', '02.07.01.01.03.0026', 'R02', 1, 'unit', 'a'),
('A035', 'J03', '02.07.01.01.03.0027', 'R05', 1, 'unit', 'a'),
('A036', 'J03', '02.07.01.01.03.0030', 'R04', 1, 'unit', 'a'),
('A037', 'J03', '02.07.01.01.03.0031', 'R01', 1, 'unit', 'a'),
('A038', 'J03', '02.07.01.01.03.0032', 'R04', 1, 'unit', 'a'),
('A039', 'J03', '02.07.01.01.03.0034', 'R05', 2, 'unit', 'a'),
('A040', 'J03', '02.07.01.01.03.0034', 'R02', 2, 'unit', 'a'),
('A041', 'J03', '02.07.01.01.03.0035', 'R01', 2, 'unit', 'a'),
('A042', 'J03', '02.07.01.01.03.0036', 'R01', 2, 'unit', 'a'),
('A043', 'J03', '02.07.01.01.03.0036', 'R04', 1, 'unit', 'a'),
('A044', 'J03', '02.07.01.01.03.0037', 'R04', 1, 'unit', 'a'),
('A045', 'J03', '02.07.01.01.03.0041', 'R04', 1, 'unit', 'a'),
('A046', 'J03', '02.07.01.01.03.0042', 'R01', 1, 'unit', 'a'),
('A047', 'J03', '02.07.01.01.03.0042', 'R02', 1, 'unit', 'a'),
('A048', 'J03', '02.07.01.01.03.0042', 'R04', 1, 'unit', 'a'),
('A049', 'J03', '02.07.01.01.03.0042', 'R05', 1, 'unit', 'a'),
('A050', 'J03', '02.07.01.01.03.0043', 'R01', 1, 'unit', 'a'),
('A051', 'J03', '02.07.01.01.03.0043', 'R04', 1, 'unit', 'a'),
('A052', 'J03', '02.07.01.01.03.0046', 'R01', 1, 'unit', 'a'),
('A053', 'J03', '02.07.01.01.03.0048', 'R01', 1, 'unit', 'a'),
('A054', 'J03', '02.07.01.01.03.0048', 'R04', 1, 'unit', 'a'),
('A055', 'J06', '02.07.01.01.03.0001', 'R01', 1, 'unit', 'a'),
('A056', 'J06', '02.07.01.01.03.0008', 'R01', 1, 'unit', 'a'),
('A057', 'J06', '02.07.01.01.03.0008', 'R03', 1, 'unit', 'a'),
('A058', 'J06', '02.07.01.01.03.0009', 'R01', 1, 'unit', 'a'),
('A059', 'J06', '02.07.01.01.03.0009', 'R03', 2, 'unit', 'a'),
('A060', 'J06', '02.07.01.01.03.0012', 'R01', 2, 'unit', 'a'),
('A061', 'J06', '02.07.01.01.03.0012', 'R02', 2, 'unit', 'a'),
('A062', 'J06', '02.07.01.01.03.0012', 'R03', 2, 'unit', 'a'),
('A063', 'J06', '02.07.01.01.03.0013', 'R03', 1, 'unit', 'a'),
('A064', 'J06', '02.07.01.01.03.0014', 'R01', 1, 'unit', 'a'),
('A065', 'J06', '02.07.01.01.03.0017', 'R01', 1, 'unit', 'a'),
('A066', 'J06', '02.07.01.01.03.0018', 'R01', 1, 'unit', 'a'),
('A067', 'J06', '02.07.01.01.03.0019', 'R03', 1, 'unit', 'a'),
('A068', 'J06', '02.07.01.01.03.0020', 'R01', 1, 'unit', 'a'),
('A069', 'J06', '02.07.01.01.03.0021', 'R02', 1, 'unit', 'a'),
('A070', 'J06', '02.07.01.01.03.0023', 'R03', 1, 'unit', 'a'),
('A071', 'J06', '02.07.01.01.03.0024', 'R01', 1, 'unit', 'a'),
('A072', 'J06', '02.07.01.01.03.0025', 'R02', 1, 'unit', 'a'),
('A073', 'J06', '02.07.01.01.03.0028', 'R01', 1, 'unit', 'a'),
('A074', 'J06', '02.07.01.01.03.0033', 'R03', 1, 'unit', 'a'),
('A075', 'J06', '02.07.01.01.03.0034', 'R02', 1, 'unit', 'a'),
('A076', 'J06', '02.07.01.01.03.0035', 'R01', 1, 'unit', 'a'),
('A077', 'J06', '02.07.01.01.03.0038', 'R03', 1, 'unit', 'a'),
('A078', 'J06', '02.07.01.01.03.0039', 'R03', 1, 'unit', 'a'),
('A079', 'J06', '02.07.01.01.03.0041', 'R03', 1, 'unit', 'a'),
('A080', 'J06', '02.07.01.01.03.0042', 'R01', 1, 'unit', 'a'),
('A081', 'J06', '02.07.01.01.03.0042', 'R02', 1, 'unit', 'a'),
('A082', 'J06', '02.07.01.01.03.0042', 'R03', 1, 'unit', 'a'),
('A083', 'J06', '02.07.01.01.03.0043', 'R01', 1, 'unit', 'a'),
('A084', 'J06', '02.07.01.01.03.0043', 'R03', 1, 'unit', 'a'),
('A085', 'J06', '02.07.01.01.03.0047', 'R01', 1, 'unit', 'a'),
('A086', 'J06', '02.07.01.01.03.0048', 'R01', 1, 'unit', 'a'),
('A087', 'J07', '02.07.01.01.03.0007', 'R01', 1, 'unit', 'a'),
('A088', 'J07', '02.07.01.01.03.0012', 'R01', 1, 'unit', 'a'),
('A089', 'J07', '02.07.01.01.03.0017', 'R01', 1, 'unit', 'a'),
('A090', 'J07', '02.07.01.01.03.0018', 'R01', 1, 'unit', 'a'),
('A091', 'J07', '02.07.01.01.03.0020', 'R01', 1, 'unit', 'a'),
('A092', 'J07', '02.07.01.01.03.0028', 'R01', 1, 'unit', 'a'),
('A093', 'J07', '02.07.01.01.03.0035', 'R01', 1, 'unit', 'a'),
('A094', 'J07', '02.07.01.01.03.0042', 'R01', 1, 'unit', 'a'),
('A095', 'J07', '02.07.01.01.03.0044', 'R01', 1, 'unit', 'a'),
('A096', 'J08', '02.07.01.01.03.0007', 'R01', 1, 'unit', 'a'),
('A097', 'J08', '02.07.01.01.03.0017', 'R01', 1, 'unit', 'a'),
('A098', 'J08', '02.07.01.01.03.0018', 'R01', 1, 'unit', 'a'),
('A099', 'J08', '02.07.01.01.03.0020', 'R01', 1, 'unit', 'a'),
('A100', 'J08', '02.07.01.01.03.0028', 'R01', 1, 'unit', 'a'),
('A101', 'J10', '02.07.01.01.03.0001', 'R01', 1, 'unit', 'a'),
('A102', 'J10', '02.07.01.01.03.0004', 'R01', 1, 'unit', 'a'),
('A103', 'J10', '02.07.01.01.03.0005', 'R01', 1, 'unit', 'a'),
('A104', 'J10', '02.07.01.01.03.0005', 'R02', 1, 'unit', 'a'),
('A105', 'J10', '02.07.01.01.03.0005', 'R04', 1, 'unit', 'a'),
('A106', 'J10', '02.07.01.01.03.0005', 'R05', 1, 'unit', 'a'),
('A107', 'J10', '02.07.01.01.03.0006', 'R04', 1, 'unit', 'a'),
('A108', 'J10', '02.07.01.01.03.0007', 'R01', 2, 'unit', 'a'),
('A109', 'J10', '02.07.01.01.03.0007', 'R04', 2, 'unit', 'a'),
('A110', 'J10', '02.07.01.01.03.0008', 'R01', 2, 'unit', 'a'),
('A111', 'J10', '02.07.01.01.03.0008', 'R03', 2, 'unit', 'a'),
('A112', 'J10', '02.07.01.01.03.0009', 'R01', 2, 'unit', 'a'),
('A113', 'J10', '02.07.01.01.03.0009', 'R03', 2, 'unit', 'a'),
('A114', 'J10', '02.07.01.01.03.0010', 'R04', 2, 'unit', 'a'),
('A115', 'J10', '02.07.01.01.03.0011', 'R01', 2, 'unit', 'a'),
('A116', 'J10', '02.07.01.01.03.0012', 'R01', 2, 'unit', 'a'),
('A117', 'J10', '02.07.01.01.03.0012', 'R02', 2, 'unit', 'a'),
('A118', 'J10', '02.07.01.01.03.0012', 'R03', 2, 'unit', 'a'),
('A119', 'J10', '02.07.01.01.03.0012', 'R04', 1, 'unit', 'a'),
('A120', 'J10', '02.07.01.01.03.0013', 'R03', 1, 'unit', 'a'),
('A121', 'J10', '02.07.01.01.03.0013', 'R04', 1, 'unit', 'a'),
('A122', 'J10', '02.07.01.01.03.0014', 'R01', 1, 'unit', 'a'),
('A123', 'J10', '02.07.01.01.03.0014', 'R04', 1, 'unit', 'a'),
('A124', 'J10', '02.07.01.01.03.0015', 'R01', 1, 'unit', 'a'),
('A125', 'J10', '02.07.01.01.03.0016', 'R04', 1, 'unit', 'a'),
('A126', 'J10', '02.07.01.01.03.0017', 'R01', 2, 'unit', 'a'),
('A127', 'J10', '02.07.01.01.03.0017', 'R04', 2, 'unit', 'a'),
('A128', 'J10', '02.07.01.01.03.0018', 'R01', 2, 'unit', 'a'),
('A129', 'J10', '02.07.01.01.03.0018', 'R04', 2, 'unit', 'a'),
('A130', 'J10', '02.07.01.01.03.0019', 'R03', 15, 'orang', 'a'),
('A131', 'J10', '02.07.01.01.03.0020', 'R01', 15, 'orang', 'a'),
('A132', 'J10', '02.07.01.01.03.0020', 'R04', 30, 'orang', 'a'),
('A133', 'J10', '02.07.01.01.03.0021', 'R02', 1, 'set', 'a'),
('A134', 'J10', '02.07.01.01.03.0021', 'R05', 1, 'set', 'a'),
('A135', 'J10', '02.07.01.01.03.0023', 'R03', 1, 'set', 'a'),
('A136', 'J10', '02.07.01.01.03.0024', 'R01', 1, 'set', 'a'),
('A137', 'J10', '02.07.01.01.03.0025', 'R02', 1, 'set', 'a'),
('A138', 'J10', '02.07.01.01.03.0027', 'R05', 1, 'set', 'a'),
('A139', 'J10', '02.07.01.01.03.0029', 'R01', 1, 'set', 'a'),
('A140', 'J10', '02.07.01.01.03.0030', 'R04', 1, 'set', 'a'),
('A141', 'J10', '02.07.01.01.03.0032', 'R04', 1, 'set', 'a'),
('A142', 'J10', '02.07.01.01.03.0033', 'R03', 2, 'set', 'a'),
('A143', 'J10', '02.07.01.01.03.0034', 'R02', 2, 'set', 'a'),
('A144', 'J10', '02.07.01.01.03.0034', 'R05', 2, 'set', 'a'),
('A145', 'J10', '02.07.01.01.03.0035', 'R01', 2, 'set', 'a'),
('A146', 'J10', '02.07.01.01.03.0036', 'R01', 12, 'orang', 'a'),
('A147', 'J10', '02.07.01.01.03.0036', 'R04', 12, 'orang', 'a'),
('A148', 'J10', '02.07.01.01.03.0037', 'R04', 20, 'orang', 'a'),
('A149', 'J10', '02.07.01.01.03.0038', 'R03', 6, 'orang', 'a'),
('A150', 'J10', '02.07.01.01.03.0039', 'R03', 6, 'orang', 'a'),
('A151', 'J10', '02.07.01.01.03.0040', 'R03', 6, 'orang', 'a'),
('A152', 'J10', '02.07.01.01.03.0041', 'R03', 1, 'unit', 'a'),
('A153', 'J10', '02.07.01.01.03.0041', 'R04', 1, 'unit', 'a'),
('A154', 'J10', '02.07.01.01.03.0042', 'R01', 1, 'unit', 'a'),
('A155', 'J10', '02.07.01.01.03.0042', 'R02', 1, 'unit', 'a'),
('A156', 'J10', '02.07.01.01.03.0042', 'R03', 1, 'unit', 'a'),
('A157', 'J10', '02.07.01.01.03.0042', 'R04', 1, 'unit', 'a'),
('A158', 'J10', '02.07.01.01.03.0042', 'R05', 1, 'unit', 'a'),
('A159', 'J10', '02.07.01.01.03.0043', 'R03', 1, 'unit', 'a'),
('A160', 'J10', '02.07.01.01.03.0043', 'R01', 1, 'unit', 'a'),
('A161', 'J10', '02.07.01.01.03.0043', 'R04', 1, 'unit', 'a'),
('A162', 'J10', '02.07.01.01.03.0047', 'R01', 1, 'unit', 'a'),
('A163', 'J10', '02.07.01.01.03.0048', 'R01', 1, 'unit', 'a'),
('A164', 'J10', '02.07.01.01.03.0048', 'R04', 1, 'unit', 'a'),
('A165', 'J02', '02.07.01.01.03.0001', 'R01', 1, 'unit', 'a'),
('A166', 'J02', '02.07.01.01.03.0002', 'R01', 1, 'unit', 'a'),
('A167', 'J02', '02.07.01.01.03.0004', 'R01', 1, 'unit', 'a'),
('A168', 'J02', '02.07.01.01.03.0005', 'R01', 1, 'unit', 'a'),
('A169', 'J02', '02.07.01.01.03.0005', 'R02', 1, 'unit', 'a'),
('A170', 'J02', '02.07.01.01.03.0005', 'R04', 1, 'unit', 'a'),
('A171', 'J02', '02.07.01.01.03.0005', 'R05', 1, 'unit', 'a'),
('A172', 'J02', '02.07.01.01.03.0006', 'R04', 1, 'unit', 'a'),
('A173', 'J02', '02.07.01.01.03.0007', 'R01', 1, 'unit', 'a'),
('A174', 'J02', '02.07.01.01.03.0007', 'R04', 1, 'unit', 'a'),
('A175', 'J02', '02.07.01.01.03.0008', 'R01', 1, 'unit', 'a'),
('A176', 'J02', '02.07.01.01.03.0009', 'R01', 1, 'unit', 'a'),
('A177', 'J02', '02.07.01.01.03.0010', 'R04', 1, 'unit', 'a'),
('A178', 'J02', '02.07.01.01.03.0011', 'R01', 1, 'unit', 'a'),
('A179', 'J02', '02.07.01.01.03.0012', 'R01', 1, 'unit', 'a'),
('A180', 'J02', '02.07.01.01.03.0012', 'R02', 1, 'unit', 'a'),
('A181', 'J02', '02.07.01.01.03.0012', 'R04', 1, 'unit', 'a'),
('A182', 'J02', '02.07.01.01.03.0013', 'R04', 1, 'unit', 'a'),
('A183', 'J02', '02.07.01.01.03.0014', 'R01', 2, 'unit', 'a'),
('A184', 'J02', '02.07.01.01.03.0014', 'R04', 2, 'unit', 'a'),
('A185', 'J02', '02.07.01.01.03.0015', 'R01', 2, 'unit', 'a'),
('A186', 'J02', '02.07.01.01.03.0016', 'R04', 2, 'unit', 'a'),
('A187', 'J02', '02.07.01.01.03.0017', 'R01', 1, 'unit', 'a'),
('A188', 'J02', '02.07.01.01.03.0017', 'R04', 1, 'unit', 'a'),
('A189', 'J02', '02.07.01.01.03.0018', 'R01', 1, 'unit', 'a'),
('A190', 'J02', '02.07.01.01.03.0018', 'R04', 1, 'unit', 'a'),
('A191', 'J02', '02.07.01.01.03.0020', 'R04', 1, 'unit', 'a'),
('A192', 'J02', '02.07.01.01.03.0021', 'R01', 1, 'unit', 'a'),
('A193', 'J02', '02.07.01.01.03.0021', 'R05', 15, 'orang', 'a'),
('A194', 'J02', '02.07.01.01.03.0021', 'R02', 15, 'orang', 'a'),
('A195', 'J02', '02.07.01.01.03.0022', 'R01', 30, 'orang', 'a'),
('A196', 'J02', '02.07.01.01.03.0023', 'R01', 3, 'unit', 'a'),
('A197', 'J02', '02.07.01.01.03.0024', 'R01', 3, 'unit', 'a'),
('A198', 'J02', '02.07.01.01.03.0024', 'R02', 3, 'unit', 'a'),
('A199', 'J02', '02.07.01.01.03.0026', 'R02', 12, 'orang', 'a'),
('A200', 'J02', '02.07.01.01.03.0027', 'R05', 12, 'orang', 'a'),
('A201', 'J02', '02.07.01.01.03.0030', 'R04', 20, 'orang', 'a'),
('A202', 'J02', '02.07.01.01.03.0031', 'R01', 6, 'orang', 'a'),
('A203', 'J02', '02.07.01.01.03.0032', 'R04', 6, 'orang', 'a'),
('A204', 'J02', '02.07.01.01.03.0034', 'R05', 6, 'orang', 'a'),
('A205', 'J02', '02.07.01.01.03.0034', 'R02', 1, 'unit', 'a'),
('A206', 'J02', '02.07.01.01.03.0035', 'R01', 1, 'unit', 'a'),
('A207', 'J02', '02.07.01.01.03.0036', 'R01', 1, 'unit', 'a'),
('A208', 'J02', '02.07.01.01.03.0036', 'R04', 1, 'unit', 'a'),
('A209', 'J02', '02.07.01.01.03.0037', 'R04', 2, 'unit', 'a'),
('A210', 'J02', '02.07.01.01.03.0041', 'R04', 2, 'unit', 'a'),
('A211', 'J02', '02.07.01.01.03.0042', 'R01', 1, 'unit', 'a'),
('A212', 'J02', '02.07.01.01.03.0042', 'R02', 1, 'unit', 'a'),
('A213', 'J02', '02.07.01.01.03.0042', 'R04', 1, 'unit', 'a'),
('A214', 'J02', '02.07.01.01.03.0042', 'R05', 1, 'unit', 'a'),
('A215', 'J02', '02.07.01.01.03.0043', 'R01', 1, 'unit', 'a'),
('A216', 'J02', '02.07.01.01.03.0043', 'R04', 1, 'unit', 'a'),
('A217', 'J02', '02.07.01.01.03.0046', 'R01', 1, 'unit', 'a'),
('A218', 'J02', '02.07.01.01.03.0048', 'R01', 1, 'unit', 'a'),
('A219', 'J02', '02.07.01.01.03.0048', 'R04', 1, 'unit', 'a'),
('A220', 'J01', '02.07.01.01.03.0001', 'R01', 1, 'unit', 'a'),
('A221', 'J01', '02.07.01.01.03.0002', 'R01', 1, 'unit', 'a'),
('A222', 'J01', '02.07.01.01.03.0002', 'R03', 1, 'unit', 'a'),
('A223', 'J01', '02.07.01.01.03.0003', 'R01', 1, 'set', 'a'),
('A224', 'J01', '02.07.01.01.03.0004', 'R01', 1, 'set', 'a'),
('A225', 'J01', '02.07.01.01.03.0005', 'R01', 1, 'set', 'a'),
('A226', 'J01', '02.07.01.01.03.0005', 'R04', 1, 'set', 'a'),
('A227', 'J01', '02.07.01.01.03.0005', 'R05', 1, 'set', 'a'),
('A228', 'J01', '02.07.01.01.03.0006', 'R04', 1, 'set', 'a'),
('A229', 'J01', '02.07.01.01.03.0007', 'R04', 1, 'set', 'a'),
('A230', 'J01', '02.07.01.01.03.0008', 'R01', 1, 'set', 'a'),
('A231', 'J01', '02.07.01.01.03.0008', 'R03', 1, 'unit', 'a'),
('A232', 'J01', '02.07.01.01.03.0009', 'R01', 1, 'unit', 'a'),
('A233', 'J01', '02.07.01.01.03.0009', 'R03', 1, 'unit', 'a'),
('A234', 'J01', '02.07.01.01.03.0010', 'R04', 1, 'unit', 'a'),
('A235', 'J01', '02.07.01.01.03.0011', 'R01', 1, 'unit', 'a'),
('A236', 'J01', '02.07.01.01.03.0012', 'R01', 1, 'unit', 'a'),
('A237', 'J01', '02.07.01.01.03.0012', 'R02', 1, 'unit', 'a'),
('A238', 'J01', '02.07.01.01.03.0012', 'R03', 1, 'unit', 'a'),
('A239', 'J01', '02.07.01.01.03.0012', 'R04', 1, 'unit', 'a'),
('A240', 'J01', '02.07.01.01.03.0013', 'R03', 1, 'unit', 'a'),
('A241', 'J01', '02.07.01.01.03.0013', 'R04', 1, 'unit', 'a'),
('A242', 'J01', '02.07.01.01.03.0014', 'R01', 1, 'unit', 'a'),
('A243', 'J01', '02.07.01.01.03.0014', 'R04', 1, 'unit', 'a'),
('A244', 'J01', '02.07.01.01.03.0016', 'R04', 1, 'unit', 'a'),
('A245', 'J01', '02.07.01.01.03.0017', 'R01', 1, 'unit', 'a'),
('A246', 'J01', '02.07.01.01.03.0017', 'R04', 1, 'unit', 'a'),
('A247', 'J01', '02.07.01.01.03.0018', 'R01', 1, 'unit', 'a'),
('A248', 'J01', '02.07.01.01.03.0018', 'R04', 1, 'unit', 'a'),
('A249', 'J01', '02.07.01.01.03.0019', 'R03', 1, 'unit', 'a'),
('A250', 'J01', '02.07.01.01.03.0020', 'R04', 1, 'unit', 'a'),
('A251', 'J01', '02.07.01.01.03.0021', 'R01', 1, 'unit', 'a'),
('A252', 'J01', '02.07.01.01.03.0021', 'R05', 1, 'unit', 'a'),
('A253', 'J01', '02.07.01.01.03.0021', 'R02', 1, 'unit', 'a'),
('A254', 'J01', '02.07.01.01.03.0022', 'R01', 1, 'unit', 'a'),
('A255', 'J01', '02.07.01.01.03.0023', 'R01', 1, 'unit', 'a'),
('A256', 'J01', '02.07.01.01.03.0023', 'R03', 1, 'unit', 'a'),
('A257', 'J01', '02.07.01.01.03.0024', 'R01', 1, 'unit', 'a'),
('A258', 'J01', '02.07.01.01.03.0024', 'R02', 1, 'unit', 'a'),
('A259', 'J01', '02.07.01.01.03.0026', 'R02', 1, 'unit', 'a'),
('A260', 'J01', '02.07.01.01.03.0027', 'R05', 1, 'unit', 'a'),
('A261', 'J01', '02.07.01.01.03.0029', 'R01', 1, 'unit', 'a'),
('A262', 'J01', '02.07.01.01.03.0030', 'R04', 1, 'unit', 'a'),
('A263', 'J01', '02.07.01.01.03.0032', 'R04', 2, 'unit', 'a'),
('A264', 'J01', '02.07.01.01.03.0033', 'R03', 2, 'unit', 'a'),
('A265', 'J01', '02.07.01.01.03.0034', 'R05', 2, 'unit', 'a'),
('A266', 'J01', '02.07.01.01.03.0034', 'R02', 2, 'unit', 'a'),
('A267', 'J01', '02.07.01.01.03.0035', 'R01', 2, 'unit', 'a'),
('A268', 'J01', '02.07.01.01.03.0036', 'R01', 2, 'unit', 'a'),
('A269', 'J01', '02.07.01.01.03.0036', 'R04', 2, 'unit', 'a'),
('A270', 'J01', '02.07.01.01.03.0037', 'R04', 2, 'unit', 'a'),
('A272', 'J01', '02.07.01.01.03.0039', 'R03', 1, 'unit', 'a'),
('A273', 'J01', '02.07.01.01.03.0040', 'R03', 1, 'unit', 'a'),
('A274', 'J01', '02.07.01.01.03.0041', 'R03', 1, 'unit', 'a'),
('A275', 'J01', '02.07.01.01.03.0041', 'R04', 1, 'unit', 'a'),
('A276', 'J01', '02.07.01.01.03.0042', 'R01', 1, 'unit', 'a'),
('A277', 'J01', '02.07.01.01.03.0042', 'R04', 1, 'unit', 'a'),
('A278', 'J01', '02.07.01.01.03.0042', 'R05', 1, 'unit', 'a'),
('A279', 'J01', '02.07.01.01.03.0042', 'R03', 1, 'unit', 'a'),
('A280', 'J01', '02.07.01.01.03.0043', 'R03', 1, 'unit', 'a'),
('A281', 'J01', '02.07.01.01.03.0043', 'R01', 1, 'unit', 'a'),
('A282', 'J01', '02.07.01.01.03.0043', 'R04', 1, 'unit', 'a'),
('A283', 'J01', '02.07.01.01.03.0045', 'R01', 1, 'unit', 'a'),
('A284', 'J01', '02.07.01.01.03.0048', 'R01', 1, 'unit', 'a'),
('A285', 'J01', '02.07.01.01.03.0048', 'R04', 1, 'unit', 'a'),
('A286', 'J04', '02.07.01.01.03.0001', 'R01', 1, 'unit', 'a'),
('A287', 'J04', '02.07.01.01.03.0002', 'R01', 1, 'unit', 'a'),
('A288', 'J04', '02.07.01.01.03.0004', 'R01', 1, 'unit', 'a'),
('A289', 'J04', '02.07.01.01.03.0005', 'R01', 1, 'unit', 'a'),
('A290', 'J04', '02.07.01.01.03.0005', 'R02', 1, 'unit', 'a'),
('A291', 'J04', '02.07.01.01.03.0005', 'R04', 1, 'unit', 'a'),
('A292', 'J04', '02.07.01.01.03.0005', 'R05', 1, 'unit', 'a'),
('A293', 'J04', '02.07.01.01.03.0006', 'R04', 1, 'unit', 'a'),
('A294', 'J04', '02.07.01.01.03.0007', 'R01', 1, 'unit', 'a'),
('A295', 'J04', '02.07.01.01.03.0007', 'R04', 1, 'unit', 'a'),
('A296', 'J04', '02.07.01.01.03.0008', 'R01', 1, 'unit', 'a'),
('A297', 'J04', '02.07.01.01.03.0009', 'R01', 1, 'unit', 'a'),
('A298', 'J04', '02.07.01.01.03.0010', 'R04', 2, 'unit', 'a'),
('A299', 'J04', '02.07.01.01.03.0011', 'R01', 2, 'unit', 'a'),
('A300', 'J04', '02.07.01.01.03.0012', 'R01', 1, 'unit', 'a'),
('A301', 'J04', '02.07.01.01.03.0012', 'R02', 1, 'unit', 'a'),
('A302', 'J04', '02.07.01.01.03.0012', 'R04', 1, 'unit', 'a'),
('A303', 'J04', '02.07.01.01.03.0013', 'R04', 1, 'unit', 'a'),
('A304', 'J04', '02.07.01.01.03.0014', 'R01', 1, 'unit', 'a'),
('A305', 'J04', '02.07.01.01.03.0014', 'R04', 1, 'unit', 'a'),
('A306', 'J04', '02.07.01.01.03.0015', 'R01', 1, 'unit', 'a'),
('A307', 'J04', '02.07.01.01.03.0016', 'R04', 1, 'unit', 'a'),
('A308', 'J04', '02.07.01.01.03.0017', 'R01', 1, 'unit', 'a'),
('A309', 'J04', '02.07.01.01.03.0017', 'R04', 1, 'unit', 'a'),
('A310', 'J04', '02.07.01.01.03.0018', 'R01', 1, 'unit', 'a'),
('A311', 'J04', '02.07.01.01.03.0018', 'R04', 1, 'unit', 'a'),
('A312', 'J04', '02.07.01.01.03.0020', 'R04', 1, 'unit', 'a'),
('A313', 'J04', '02.07.01.01.03.0021', 'R05', 1, 'unit', 'a'),
('A314', 'J04', '02.07.01.01.03.0021', 'R02', 1, 'unit', 'a'),
('A315', 'J04', '02.07.01.01.03.0022', 'R01', 1, 'unit', 'a'),
('A316', 'J04', '02.07.01.01.03.0023', 'R01', 1, 'unit', 'a'),
('A317', 'J04', '02.07.01.01.03.0024', 'R01', 1, 'unit', 'a'),
('A318', 'J04', '02.07.01.01.03.0024', 'R02', 1, 'unit', 'a'),
('A319', 'J04', '02.07.01.01.03.0026', 'R02', 1, 'unit', 'a'),
('A320', 'J04', '02.07.01.01.03.0027', 'R05', 1, 'unit', 'a'),
('A321', 'J04', '02.07.01.01.03.0030', 'R04', 1, 'unit', 'a'),
('A322', 'J04', '02.07.01.01.03.0031', 'R01', 1, 'unit', 'a'),
('A323', 'J04', '02.07.01.01.03.0032', 'R04', 1, 'unit', 'a'),
('A324', 'J04', '02.07.01.01.03.0034', 'R05', 2, 'unit', 'a'),
('A325', 'J04', '02.07.01.01.03.0034', 'R02', 2, 'unit', 'a'),
('A326', 'J04', '02.07.01.01.03.0035', 'R01', 2, 'unit', 'a'),
('A327', 'J04', '02.07.01.01.03.0036', 'R01', 2, 'unit', 'a'),
('A328', 'J04', '02.07.01.01.03.0036', 'R04', 1, 'unit', 'a'),
('A329', 'J04', '02.07.01.01.03.0037', 'R04', 1, 'unit', 'a'),
('A330', 'J04', '02.07.01.01.03.0041', 'R04', 1, 'unit', 'a'),
('A331', 'J04', '02.07.01.01.03.0042', 'R01', 1, 'unit', 'a'),
('A332', 'J04', '02.07.01.01.03.0042', 'R02', 1, 'unit', 'a'),
('A333', 'J04', '02.07.01.01.03.0042', 'R04', 1, 'unit', 'a'),
('A334', 'J04', '02.07.01.01.03.0042', 'R05', 1, 'unit', 'a'),
('A335', 'J04', '02.07.01.01.03.0043', 'R01', 1, 'unit', 'a'),
('A336', 'J04', '02.07.01.01.03.0043', 'R04', 1, 'unit', 'a'),
('A337', 'J04', '02.07.01.01.03.0046', 'R01', 1, 'unit', 'a'),
('A338', 'J04', '02.07.01.01.03.0048', 'R01', 1, 'unit', 'a'),
('A339', 'J04', '02.07.01.01.03.0048', 'R04', 1, 'unit', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(64) NOT NULL,
  `nama_barang` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`) VALUES
('02.07.01.01.03.0001', 'Bell '),
('02.07.01.01.03.0002', 'Bendera nasional '),
('02.07.01.01.03.0003', 'Brankas '),
('02.07.01.01.03.0004', 'Buffet '),
('02.07.01.01.03.0005', 'Cermin gantung '),
('02.07.01.01.03.0006', 'Dispenser air minum '),
('02.07.01.01.03.0007', 'Filling cabinet '),
('02.07.01.01.03.0008', 'Foto presiden '),
('02.07.01.01.03.0009', 'Foto wakil presiden '),
('02.07.01.01.03.0010', 'Gantungan '),
('02.07.01.01.03.0011', 'Intercom '),
('02.07.01.01.03.0012', 'Jam dinding '),
('02.07.01.01.03.0013', 'Kalender '),
('02.07.01.01.03.0014', 'Komputer dan printer '),
('02.07.01.01.03.0015', 'Kulkas atau dispenser air minum '),
('02.07.01.01.03.0016', 'Kursi '),
('02.07.01.01.03.0017', 'Kursi hadap '),
('02.07.01.01.03.0018', 'Kursi kerja '),
('02.07.01.01.03.0019', 'Kursi rapat '),
('02.07.01.01.03.0020', 'Kursi size dan meja '),
('02.07.01.01.03.0021', 'Kursi tamu '),
('02.07.01.01.03.0022', 'Lambang daerah '),
('02.07.01.01.03.0023', 'Lambang negara '),
('02.07.01.01.03.0024', 'Lemari buku '),
('02.07.01.01.03.0025', 'Lemari buku atau kaca '),
('02.07.01.01.03.0026', 'Lemari kaca '),
('02.07.01.01.03.0027', 'Lemari rak kaca '),
('02.07.01.01.03.0028', 'Meja '),
('02.07.01.01.03.0029', 'Meja Besar '),
('02.07.01.01.03.0030', 'Meja kerja '),
('02.07.01.01.03.0031', 'Meja kerja besar '),
('02.07.01.01.03.0032', 'Meja komputer '),
('02.07.01.01.03.0033', 'Meja rapat '),
('02.07.01.01.03.0034', 'Meja tamu '),
('02.07.01.01.03.0035', 'Meja telepon '),
('02.07.01.01.03.0036', 'Mesin faximile '),
('02.07.01.01.03.0037', 'Mesin ketik elektrik '),
('02.07.01.01.03.0038', 'Mic conference dan sound system '),
('02.07.01.01.03.0039', 'Over head projector '),
('02.07.01.01.03.0040', 'Palu dan alasnya '),
('02.07.01.01.03.0041', 'Papan tulis putih '),
('02.07.01.01.03.0042', 'Pendingin ruangan (AC)'),
('02.07.01.01.03.0043', 'Pesawat telepon '),
('02.07.01.01.03.0044', 'Pesawat telepon 1 unit'),
('02.07.01.01.03.0045', 'Pesawat televisi dan radio tape '),
('02.07.01.01.03.0046', 'Pesawat televisi dan radio tape dan monitor pemantau (CCTV)'),
('02.07.01.01.03.0047', 'Pesawat televisi dan radio tape'),
('02.07.01.01.03.0048', 'Peta wilayah ');

-- --------------------------------------------------------

--
-- Table structure for table `barang_optimasi`
--

CREATE TABLE `barang_optimasi` (
  `kode_skpd` varchar(4) NOT NULL,
  `kode_jabatan` varchar(3) NOT NULL,
  `nik` varchar(18) NOT NULL,
  `jumlah_barang` int(3) NOT NULL,
  `id_barang_optimasi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `kode_jabatan` varchar(3) NOT NULL,
  `nama_jabatan` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`kode_jabatan`, `nama_jabatan`) VALUES
('J01', 'Walikota'),
('J02', 'Wakil Walikota'),
('J03', 'Ketua DPRD Kota'),
('J04', 'Wakil Ketua DPRD Kota'),
('J05', 'Pejabat Eselon I'),
('J06', 'Pejabat Eselon II'),
('J07', 'Pejabat Eselon III'),
('J08', 'Pejabat Eselon IV'),
('J09', 'Staf'),
('J10', 'Sekda Kota');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_program`
--

CREATE TABLE `kegiatan_program` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(64) DEFAULT NULL,
  `output_kegiatan` text,
  `id_program` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_program`
--

INSERT INTO `kegiatan_program` (`id_kegiatan`, `nama_kegiatan`, `output_kegiatan`, `id_program`) VALUES
(5, 'Pelatihan', 'Kebisaan dalam Praktik', 2),
(6, 'Seminar', 'Pengetahuan dan Ilmu', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `akses`) VALUES
('161511038', 'akihabara', 0),
('161511039', 'akses', 1);

-- --------------------------------------------------------

--
-- Table structure for table `max_barang`
--

CREATE TABLE `max_barang` (
  `id_perencanaan_kebutuhan` int(11) NOT NULL,
  `kode_barang` varchar(64) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `max_barang`
--

INSERT INTO `max_barang` (`id_perencanaan_kebutuhan`, `kode_barang`, `jumlah`, `satuan`) VALUES
(1, '10.01.01', 12, 'Unti'),
(1, '10.01.03', 16, 'Unit');

-- --------------------------------------------------------

--
-- Table structure for table `perencanaan_kebutuhan`
--

CREATE TABLE `perencanaan_kebutuhan` (
  `id_perencanaan_kebutuhan` int(11) NOT NULL,
  `id_skpd` varchar(64) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perencanaan_kebutuhan`
--

INSERT INTO `perencanaan_kebutuhan` (`id_perencanaan_kebutuhan`, `id_skpd`, `tahun`) VALUES
(1, '7.01.01.', 2018),
(2, '6.01.03.', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `pns`
--

CREATE TABLE `pns` (
  `nik` varchar(64) NOT NULL,
  `nama_pns` varchar(64) NOT NULL,
  `id_skpd` varchar(64) NOT NULL,
  `jabatan` varchar(64) NOT NULL,
  `eselon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pns`
--

INSERT INTO `pns` (`nik`, `nama_pns`, `id_skpd`, `jabatan`, `eselon`) VALUES
('161511038', 'Delvin Prestiadi', '1.01.01.', 'Pegawai', 5),
('161511039', 'Dewi', '1.01.01.', 'Pegawai', 3),
('161511059', 'Reza', '1.01.01.', 'Kepala Bagian', 3),
('1615511037', 'dafa', '1.01.01.', 'Pegawai', 4);

-- --------------------------------------------------------

--
-- Table structure for table `program_skpd`
--

CREATE TABLE `program_skpd` (
  `id_program` int(11) NOT NULL,
  `id_skpd` varchar(64) NOT NULL,
  `nama_program` varchar(64) DEFAULT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_skpd`
--

INSERT INTO `program_skpd` (`id_program`, `id_skpd`, `nama_program`, `tahun`) VALUES
(2, '1.01.01.', 'AKSI REAKSI', 2018),
(3, '1.01.01.', 'Seminar', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `kode_ruangan` varchar(3) NOT NULL,
  `nama_ruangan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`kode_ruangan`, `nama_ruangan`) VALUES
('R01', 'Ruangan Kerja'),
('R02', 'Ruangan Tamu'),
('R03', 'Ruangan Rapat'),
('R04', 'Ruangan Staf/Adc'),
('R05', 'Ruangan Tunggu');

-- --------------------------------------------------------

--
-- Table structure for table `skpd`
--

CREATE TABLE `skpd` (
  `id_skpd` varchar(64) NOT NULL,
  `nama_skpd` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skpd`
--

INSERT INTO `skpd` (`id_skpd`, `nama_skpd`) VALUES
('1.01.01.', 'DINAS PENDIDIKAN'),
('1.02.01.', 'DINAS KESEHATAN'),
('1.02.02.', 'RSU DAERAH CIBABAT'),
('1.03.01.', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG'),
('1.04.01.', 'DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN'),
('1.05.01.', 'SATUAN POLISI PAMONG PRAJA DAN PEMADAM KEBAKARAN'),
('1.05.02.', 'BADAN PENANGGULANGAN BENCANA DAERAH'),
('1.06.01.', 'DINAS SOSIAL, PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA, PEMB'),
('2.01.01.', 'DINAS TENAGA KERJA'),
('2.03.01.', 'DINAS PANGAN DAN PERTANIAN'),
('2.05.01.', 'DINAS LINGKUNGAN HIDUP'),
('2.06.01.', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL'),
('2.09.01.', 'DINAS PERHUBUNGAN'),
('2.10.01.', 'DINAS KOMUNIKASI, INFORMATIKA, KEARSIPAN DAN PERPUSTAKAAN'),
('2.11.01.', 'DINAS PERDAGANGAN, KOPERASI, USAHA KECIL DAN MENENGAH DAN PERIND'),
('2.12.01.', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU'),
('2.16.01.', 'DINAS KEBUDAYAAN, PARIWISATA, KEPEMUDAAN DAN OLAHRAGA'),
('4.01.01.', 'BADAN PERENCANAAN PEMBANGUNAN DAERAH'),
('4.02.01.', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH'),
('4.02.02.', 'BADAN PENGELOLA PENDAPATAN DAERAH'),
('4.03.01.', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA DAERAH'),
('5.01.01.', 'PPKD'),
('5.01.02.', 'DPRD'),
('5.01.03.', 'KEPALA DAERAH DAN WAKIL KEPALA DAERAH'),
('5.01.04.', 'SEKRETARIAT DAERAH'),
('5.01.05.', 'SEKRETARIAT DPRD'),
('5.01.06.', 'INSPEKTORAT KOTA'),
('6.01.01.', 'KECAMATAN CIMAHI UTARA'),
('6.01.02.', 'KECAMATAN CIMAHI TENGAH'),
('6.01.03.', 'KECAMATAN CIMAHI SELATAN'),
('7.01.01.', 'KANTOR KESATUAN BANGSA');

-- --------------------------------------------------------

--
-- Table structure for table `usulan_barang`
--

CREATE TABLE `usulan_barang` (
  `kode_usulan` int(10) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `kode_jabatan` varchar(3) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `kode_ruangan` varchar(3) NOT NULL,
  `kode_barang` varchar(4) NOT NULL,
  `jumlah` int(2) NOT NULL,
  `satuan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usulan_barang`
--

INSERT INTO `usulan_barang` (`kode_usulan`, `id_kegiatan`, `kode_jabatan`, `nip`, `kode_ruangan`, `kode_barang`, `jumlah`, `satuan`) VALUES
(1, 5, 'J02', '123', 'R02', 'B001', 1, 'unit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`kode_aturan`),
  ADD KEY `kode_jabatan` (`kode_jabatan`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `kode_ruangan` (`kode_ruangan`),
  ADD KEY `satuan` (`satuan`),
  ADD KEY `satuan_2` (`satuan`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `barang_optimasi`
--
ALTER TABLE `barang_optimasi`
  ADD PRIMARY KEY (`id_barang_optimasi`),
  ADD KEY `fk_kode_skpd` (`kode_skpd`),
  ADD KEY `fk_kode_jabatan` (`kode_jabatan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kode_jabatan`);

--
-- Indexes for table `kegiatan_program`
--
ALTER TABLE `kegiatan_program`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `id_program` (`id_program`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `max_barang`
--
ALTER TABLE `max_barang`
  ADD PRIMARY KEY (`id_perencanaan_kebutuhan`,`kode_barang`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `perencanaan_kebutuhan`
--
ALTER TABLE `perencanaan_kebutuhan`
  ADD PRIMARY KEY (`id_perencanaan_kebutuhan`),
  ADD KEY `id_skpd` (`id_skpd`);

--
-- Indexes for table `pns`
--
ALTER TABLE `pns`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `fk_id_skpd` (`id_skpd`);

--
-- Indexes for table `program_skpd`
--
ALTER TABLE `program_skpd`
  ADD PRIMARY KEY (`id_program`),
  ADD KEY `fk_id_skpd_2` (`id_skpd`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`kode_ruangan`);

--
-- Indexes for table `skpd`
--
ALTER TABLE `skpd`
  ADD PRIMARY KEY (`id_skpd`);

--
-- Indexes for table `usulan_barang`
--
ALTER TABLE `usulan_barang`
  ADD PRIMARY KEY (`kode_usulan`),
  ADD KEY `fk_kd_jbtn` (`kode_jabatan`),
  ADD KEY `fk_kd_ruangan` (`kode_ruangan`),
  ADD KEY `fk_kd_barang` (`kode_barang`),
  ADD KEY `fk_id_kegiatan` (`id_kegiatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_optimasi`
--
ALTER TABLE `barang_optimasi`
  MODIFY `id_barang_optimasi` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kegiatan_program`
--
ALTER TABLE `kegiatan_program`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `perencanaan_kebutuhan`
--
ALTER TABLE `perencanaan_kebutuhan`
  MODIFY `id_perencanaan_kebutuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `program_skpd`
--
ALTER TABLE `program_skpd`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usulan_barang`
--
ALTER TABLE `usulan_barang`
  MODIFY `kode_usulan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `aturan`
--
ALTER TABLE `aturan`
  ADD CONSTRAINT `kodebarang` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kodejabatan` FOREIGN KEY (`kode_jabatan`) REFERENCES `jabatan` (`kode_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `koderuangan` FOREIGN KEY (`kode_ruangan`) REFERENCES `ruangan` (`kode_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang_optimasi`
--
ALTER TABLE `barang_optimasi`
  ADD CONSTRAINT `fk_kode_jabatan` FOREIGN KEY (`kode_jabatan`) REFERENCES `jabatan` (`kode_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kode_skpd` FOREIGN KEY (`kode_skpd`) REFERENCES `skpd` (`id_skpd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kegiatan_program`
--
ALTER TABLE `kegiatan_program`
  ADD CONSTRAINT `kegiatan_program_ibfk_1` FOREIGN KEY (`id_program`) REFERENCES `program_skpd` (`id_program`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`username`) REFERENCES `pns` (`nik`);

--
-- Constraints for table `max_barang`
--
ALTER TABLE `max_barang`
  ADD CONSTRAINT `max_barang_ibfk_1` FOREIGN KEY (`id_perencanaan_kebutuhan`) REFERENCES `perencanaan_kebutuhan` (`id_perencanaan_kebutuhan`),
  ADD CONSTRAINT `max_barang_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`);

--
-- Constraints for table `perencanaan_kebutuhan`
--
ALTER TABLE `perencanaan_kebutuhan`
  ADD CONSTRAINT `perencanaan_kebutuhan_ibfk_1` FOREIGN KEY (`id_skpd`) REFERENCES `skpd` (`id_skpd`);

--
-- Constraints for table `pns`
--
ALTER TABLE `pns`
  ADD CONSTRAINT `fk_id_skpd` FOREIGN KEY (`id_skpd`) REFERENCES `skpd` (`id_skpd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `program_skpd`
--
ALTER TABLE `program_skpd`
  ADD CONSTRAINT `fk_id_skpd_2` FOREIGN KEY (`id_skpd`) REFERENCES `skpd` (`id_skpd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usulan_barang`
--
ALTER TABLE `usulan_barang`
  ADD CONSTRAINT `fk_id_kegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan_program` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kd_barang` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kd_jbtn` FOREIGN KEY (`kode_jabatan`) REFERENCES `jabatan` (`kode_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kd_ruangan` FOREIGN KEY (`kode_ruangan`) REFERENCES `ruangan` (`kode_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
