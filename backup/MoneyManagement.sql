-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Agu 2019 pada 15.31
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MoneyManagement`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Admin`
--

CREATE TABLE `Admin` (
  `ID_Admin` int(11) NOT NULL,
  `username` varchar(21) NOT NULL,
  `password` varchar(100) NOT NULL,
  `kelas` varchar(21) NOT NULL,
  `hak` int(21) NOT NULL,
  `foto` varchar(37) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Pembayaran_Bulanan`
--

CREATE TABLE `Pembayaran_Bulanan` (
  `NIS` int(38) NOT NULL,
  `Bulan` varchar(21) NOT NULL,
  `Tahun` varchar(21) NOT NULL,
  `Pembayaran` int(21) NOT NULL,
  `ID_PB` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `Pembayaran_Bulanan`
--

INSERT INTO `Pembayaran_Bulanan` (`NIS`, `Bulan`, `Tahun`, `Pembayaran`, `ID_PB`) VALUES
(82941893, 'Januari', '2019', 20000, 8),
(82941893, 'Maret', '2019', 20000, 9),
(829418949, 'Maret', '2019', 20000, 12),
(82301231, 'Desember', '2019', 20000, 13),
(82301231, 'Januari', '2019', 20000, 14),
(82941893, 'Januari', '2018', 20000, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `Siswa`
--

CREATE TABLE `Siswa` (
  `NIS` int(38) NOT NULL,
  `NamaSiswa` varchar(36) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Jurusan` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `Siswa`
--

INSERT INTO `Siswa` (`NIS`, `NamaSiswa`, `Kelas`, `Jurusan`) VALUES
(1231, 'Oji', '12', 'RPL'),
(3123123, 'Aswangga', '10', 'RPL'),
(14125125, 'Nisa', '12', 'RPL'),
(82301231, 'Kafka Khalis Kurniawan', '12', 'RPL'),
(82941893, 'Andruw', '12', 'RPL'),
(131251512, 'dada', '10', 'RPL'),
(328381032, 'Ila', '12', 'RPL'),
(829418949, 'Boim', '12', 'RPL'),
(831938111, 'Nurul', '12', 'RPL'),
(2147483647, 'Arya', '12', 'RPL');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `V_Pembayaran`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `V_Pembayaran` (
`NamaSiswa` varchar(36)
,`Januari` text
,`Februari` text
,`Maret` text
,`April` text
,`Mei` text
,`Juni` text
,`Juli` text
,`Agustus` text
,`September` text
,`Oktober` text
,`November` text
,`Desember` text
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `V_TotalBulanan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `V_TotalBulanan` (
`NIS` int(38)
,`NamaSiswa` varchar(36)
,`TotalBayar` decimal(42,0)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `V_Pembayaran`
--
DROP TABLE IF EXISTS `V_Pembayaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `V_Pembayaran`  AS  select `s`.`NamaSiswa` AS `NamaSiswa`,group_concat(if((`pb`.`Bulan` = 'Januari'),`pb`.`Pembayaran`,NULL) separator ',') AS `Januari`,group_concat(if((`pb`.`Bulan` = 'Februari'),`pb`.`Pembayaran`,NULL) separator ',') AS `Februari`,group_concat(if((`pb`.`Bulan` = 'Maret'),`pb`.`Pembayaran`,NULL) separator ',') AS `Maret`,group_concat(if((`pb`.`Bulan` = 'April'),`pb`.`Pembayaran`,NULL) separator ',') AS `April`,group_concat(if((`pb`.`Bulan` = 'Mei'),`pb`.`Pembayaran`,NULL) separator ',') AS `Mei`,group_concat(if((`pb`.`Bulan` = 'Juni'),`pb`.`Pembayaran`,NULL) separator ',') AS `Juni`,group_concat(if((`pb`.`Bulan` = 'Juli'),`pb`.`Pembayaran`,NULL) separator ',') AS `Juli`,group_concat(if((`pb`.`Bulan` = 'Agustus'),`pb`.`Pembayaran`,NULL) separator ',') AS `Agustus`,group_concat(if((`pb`.`Bulan` = 'September'),`pb`.`Pembayaran`,NULL) separator ',') AS `September`,group_concat(if((`pb`.`Bulan` = 'Oktober'),`pb`.`Pembayaran`,NULL) separator ',') AS `Oktober`,group_concat(if((`pb`.`Bulan` = 'November'),`pb`.`Pembayaran`,NULL) separator ',') AS `November`,group_concat(if((`pb`.`Bulan` = 'Desember'),`pb`.`Pembayaran`,NULL) separator ',') AS `Desember` from (`Siswa` `s` join `Pembayaran_Bulanan` `pb` on((`s`.`NIS` = `pb`.`NIS`))) group by `s`.`NamaSiswa` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `V_TotalBulanan`
--
DROP TABLE IF EXISTS `V_TotalBulanan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `V_TotalBulanan`  AS  select `pb`.`NIS` AS `NIS`,`s`.`NamaSiswa` AS `NamaSiswa`,sum(`pb`.`Pembayaran`) AS `TotalBayar` from (`Pembayaran_Bulanan` `pb` join `Siswa` `s` on((`s`.`NIS` = `pb`.`NIS`))) group by `pb`.`NIS` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indeks untuk tabel `Pembayaran_Bulanan`
--
ALTER TABLE `Pembayaran_Bulanan`
  ADD PRIMARY KEY (`ID_PB`),
  ADD KEY `NIS` (`NIS`);

--
-- Indeks untuk tabel `Siswa`
--
ALTER TABLE `Siswa`
  ADD PRIMARY KEY (`NIS`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `Admin`
--
ALTER TABLE `Admin`
  MODIFY `ID_Admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `Pembayaran_Bulanan`
--
ALTER TABLE `Pembayaran_Bulanan`
  MODIFY `ID_PB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `Pembayaran_Bulanan`
--
ALTER TABLE `Pembayaran_Bulanan`
  ADD CONSTRAINT `Pembayaran_Bulanan_ibfk_1` FOREIGN KEY (`NIS`) REFERENCES `Siswa` (`NIS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
