-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 08:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moneymanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_Admin` int(11) NOT NULL,
  `username` varchar(21) NOT NULL,
  `password` varchar(100) NOT NULL,
  `kelas` varchar(21) NOT NULL,
  `hak` int(21) NOT NULL,
  `foto` varchar(37) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `ID_Chart` int(11) NOT NULL,
  `Nama_chart` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pembayaran`
--

CREATE TABLE `jenis_pembayaran` (
  `id_jenispembayaran` int(10) NOT NULL,
  `jenis_pembayaran` varchar(20) NOT NULL,
  `tanggal_pelunasan` date NOT NULL,
  `nama_pembayaran` varchar(20) NOT NULL,
  `bayarper` varchar(21) NOT NULL,
  `nominallunas` int(21) NOT NULL,
  `Total` int(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pembayaran`
--

INSERT INTO `jenis_pembayaran` (`id_jenispembayaran`, `jenis_pembayaran`, `tanggal_pelunasan`, `nama_pembayaran`, `bayarper`, `nominallunas`, `Total`) VALUES
(13, 'Kas', '2019-09-25', 'Khas', 'Bulan', 20000, 100000),
(15, 'Kas', '2019-09-04', 'TES', 'Sekali Bayar', 20000, 30000),
(16, 'Kas', '2019-09-13', 'coba', 'Sekali Bayar', 20000, 0),
(17, 'Kas', '2019-09-11', 'jjkdnakdjna', 'Bulan', 30000, 10000),
(18, 'Kas', '2019-09-11', 'ewe12', 'Bulan', 20000, 0),
(19, 'Kas', '2019-09-19', 'wwed', 'Minggu', 312313, 0);

-- --------------------------------------------------------

--
-- Table structure for table `keluaran`
--

CREATE TABLE `keluaran` (
  `id_keluaran` int(10) NOT NULL,
  `id_jenispembayaran` int(10) NOT NULL,
  `tanggal_pengeluaran` date NOT NULL,
  `nominal_pengeluaran` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID_PB` int(11) NOT NULL,
  `NIS` int(38) NOT NULL,
  `nominal_Bayar` int(21) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `id_jenispembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`ID_PB`, `NIS`, `nominal_Bayar`, `tanggal_bayar`, `id_jenispembayaran`) VALUES
(31, 315125243, 20000, '2019-09-04', 13),
(32, 831938111, 20000, '2019-09-12', 15),
(33, 91388111, 20000, '0000-00-00', 15),
(34, 4124131, 100000, '0000-00-00', 13),
(35, 4124131, 100000, '2019-09-04', 13),
(36, 82301231, 20000, '0000-00-00', 16),
(37, 82941893, 12000000, '2019-10-03', 17),
(38, 4124131, 10000, '0000-00-00', 17);

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `id_jenispembayaran` int(11) NOT NULL,
  `nominal_keluar` int(21) NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIS` int(38) NOT NULL,
  `NamaSiswa` varchar(36) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Jurusan` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS`, `NamaSiswa`, `Kelas`, `Jurusan`) VALUES
(4124131, 'Safaraz', '12', 'RPL'),
(31231321, 'Aswangga', '12', 'RPL'),
(82301231, 'Kafka', '12', 'RPL'),
(82941893, 'Andruw', '12', 'RPL'),
(91388111, 'Barit', '12', 'RPL'),
(315125243, 'Arief', '12', 'RPL'),
(515111123, 'Apis', '12', 'RPL'),
(829418949, 'Boim', '12', 'RPL'),
(831924821, 'Sidqi', '12', 'RPL'),
(831938111, 'Nurul', '12', 'RPL'),
(891238924, 'Nisa ', '12', 'RPL'),
(2144133131, 'Gondrong', '12', 'RPL'),
(2147483647, 'Lutfhi', '12', 'RPL');

-- --------------------------------------------------------

--
-- Stand-in structure for view `totalmasuk`
-- (See below for the actual view)
--
CREATE TABLE `totalmasuk` (
`id_jenispembayaran` int(10)
,`jenis_pembayaran` varchar(20)
,`nama_pembayaran` varchar(20)
,`total` decimal(42,0)
);

-- --------------------------------------------------------

--
-- Structure for view `totalmasuk`
--
DROP TABLE IF EXISTS `totalmasuk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `totalmasuk`  AS  select `jp`.`id_jenispembayaran` AS `id_jenispembayaran`,`jp`.`jenis_pembayaran` AS `jenis_pembayaran`,`jp`.`nama_pembayaran` AS `nama_pembayaran`,sum(`p`.`nominal_Bayar`) AS `total` from (`pembayaran` `p` join `jenis_pembayaran` `jp` on((`p`.`id_jenispembayaran` = `jp`.`id_jenispembayaran`))) group by `jp`.`id_jenispembayaran` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`ID_Chart`);

--
-- Indexes for table `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  ADD PRIMARY KEY (`id_jenispembayaran`);

--
-- Indexes for table `keluaran`
--
ALTER TABLE `keluaran`
  ADD PRIMARY KEY (`id_keluaran`),
  ADD KEY `id_jenispembayarann` (`id_jenispembayaran`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID_PB`),
  ADD KEY `id_jenispembayaran` (`id_jenispembayaran`),
  ADD KEY `NIS` (`NIS`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `id_jenispembayaran` (`id_jenispembayaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_Admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
  MODIFY `ID_Chart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  MODIFY `id_jenispembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `keluaran`
--
ALTER TABLE `keluaran`
  MODIFY `id_keluaran` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `ID_PB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keluaran`
--
ALTER TABLE `keluaran`
  ADD CONSTRAINT `keluaran_ibfk_1` FOREIGN KEY (`id_jenispembayaran`) REFERENCES `jenis_pembayaran` (`id_jenispembayaran`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `Pembayaran_ibfk_1` FOREIGN KEY (`id_jenispembayaran`) REFERENCES `jenis_pembayaran` (`id_jenispembayaran`),
  ADD CONSTRAINT `Pembayaran_ibfk_2` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
