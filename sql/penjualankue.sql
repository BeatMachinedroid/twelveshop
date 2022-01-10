-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 04:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualankue`
--

-- --------------------------------------------------------

--
-- Table structure for table `acoount`
--

CREATE TABLE `acoount` (
  `iduser` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `telp` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `akses` enum('admin','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acoount`
--

INSERT INTO `acoount` (`iduser`, `username`, `nama`, `telp`, `alamat`, `password`, `status`, `date`, `akses`) VALUES
(3, 'yohanesseptian@gmail.com', 'admin', '0895705206794', 'bandar lampung', '653859609734bb48ee1b36cc4c6640e1', 1, '2021-12-13 17:00:00', 'admin'),
(5, 'yohanes@gmail.com', 'users', '0895705206794', 'bandar lampung', '653859609734bb48ee1b36cc4c6640e1', 1, '2021-12-13 17:00:00', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkate` int(11) NOT NULL,
  `gambark` text NOT NULL,
  `namakate` varchar(200) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkate`, `gambark`, `namakate`, `date`) VALUES
(1, 'donat.png', 'donat', '2021-12-17 17:00:00'),
(2, 'pizza.png', 'pizza', '2021-12-17 17:00:00'),
(3, 'Bakery.png', 'roti', '2021-12-17 17:00:00'),
(4, 'coffe.png', 'coffee', '2021-12-17 17:00:00'),
(5, 'Cake.png', 'kue', '2021-12-17 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kue`
--

CREATE TABLE `kue` (
  `idkue` int(11) NOT NULL,
  `idkate` int(11) DEFAULT NULL,
  `namakue` varchar(200) DEFAULT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `harga` decimal(10,0) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kue`
--

INSERT INTO `kue` (`idkue`, `idkate`, `namakue`, `deskripsi`, `harga`, `gambar`) VALUES
(2, 2, 'pizza full size\r\n', '', '10000', 'P2.png'),
(3, 1, 'Donat toping coklat strowberry\r\n', '', '10000', 'P8.png'),
(4, 1, 'Donat toping vanila\r\n', '', '10000', 'P8.png'),
(5, 1, 'Donat toping coklat kacang\r\n', '', '10000', 'P8.png'),
(6, 1, 'Donat toping green tea\r\n', '', '10000', 'P8.png');

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

CREATE TABLE `userorder` (
  `idorder` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idkue` int(11) NOT NULL,
  `namadituju` varchar(200) NOT NULL,
  `jumlah` char(100) NOT NULL,
  `alamatdituju` varchar(200) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `odate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userorder`
--

INSERT INTO `userorder` (`idorder`, `iduser`, `idkue`, `namadituju`, `jumlah`, `alamatdituju`, `total`, `odate`) VALUES
(1, 5, 2, 'yohanes septian', '4', 'bandar jaya barat', '50000', '2021-12-19 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acoount`
--
ALTER TABLE `acoount`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkate`);

--
-- Indexes for table `kue`
--
ALTER TABLE `kue`
  ADD PRIMARY KEY (`idkue`),
  ADD KEY `idkate` (`idkate`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`idorder`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idkue` (`idkue`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acoount`
--
ALTER TABLE `acoount`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kue`
--
ALTER TABLE `kue`
  MODIFY `idkue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userorder`
--
ALTER TABLE `userorder`
  MODIFY `idorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kue`
--
ALTER TABLE `kue`
  ADD CONSTRAINT `kue_ibfk_1` FOREIGN KEY (`idkate`) REFERENCES `kategori` (`idkate`);

--
-- Constraints for table `userorder`
--
ALTER TABLE `userorder`
  ADD CONSTRAINT `userorder_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `acoount` (`iduser`),
  ADD CONSTRAINT `userorder_ibfk_2` FOREIGN KEY (`idkue`) REFERENCES `kue` (`idkue`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
