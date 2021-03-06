-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jun 2018 pada 12.52
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bimbingan`
--

CREATE TABLE `bimbingan` (
  `id_bimbingan` int(11) NOT NULL,
  `id_ta` int(11) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `nip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `deadline`
--

CREATE TABLE `deadline` (
  `id_jadwal` varchar(225) NOT NULL,
  `nm_jadwal` varchar(225) NOT NULL,
  `tgl_input` date NOT NULL,
  `tgl_batas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `deadline`
--

INSERT INTO `deadline` (`id_jadwal`, `nm_jadwal`, `tgl_input`, `tgl_batas`) VALUES
('01', 'Penginputan Judul', '2018-06-01', '2018-06-22'),
('02', 'Batas Penginputan Judul', '2018-06-24', '2018-06-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `nama_dosen` varchar(225) NOT NULL,
  `kuota` varchar(20) NOT NULL,
  `id_login` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama_dosen`, `kuota`, `id_login`, `id_prodi`) VALUES
('123123', 'Samsul', '4', 19, 1),
('1312312', 'Gilang', '1', 19, 3),
('E32112', 'Gilang', '4', 19, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` enum('mahasiswa','dosen','reviewer','koordinator') NOT NULL,
  `nama` varchar(112) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `email`, `username`, `password`, `level`, `nama`) VALUES
(17, 'ucihagilang74@gmail.com', 'mahasiswa', '123', 'mahasiswa', 'admin'),
(18, 'ucihagilang74@gmail.com', 'koordinator', '123', 'koordinator', 'Gilang Anugrah'),
(19, 'ucihagilang74@gmail.com', 'dosen', '123', 'dosen', 'Pak Dosen'),
(20, 'ucihagilangy75@gmail.com', 'reviewer', '123', 'reviewer', 'Dimas'),
(21, 'ucihagilang74@gmail.com', 'E31160622', '123', 'mahasiswa', 'Dimas'),
(22, 'ucihagilang74@gmail.com', 'admin', '123', 'mahasiswa', 'Dimas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `gol` varchar(225) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `gol`, `id_prodi`, `id_login`) VALUES
('E31160607', 'Gilang', 'B', 1, 17),
('E31160622', 'Dimas', 'B', 1, 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian`
--

CREATE TABLE `penelitian` (
  `id_penelitian` int(11) NOT NULL,
  `judul_penelitian` varchar(225) NOT NULL,
  `kuota` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penelitian`
--

INSERT INTO `penelitian` (`id_penelitian`, `judul_penelitian`, `kuota`, `nip`) VALUES
(4, ' ', 4, '123123'),
(5, 'asd', 4, '1312312');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`) VALUES
(1, 'MIF'),
(2, 'TKK'),
(3, 'TIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `file` varchar(2550) DEFAULT NULL,
  `nim` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `tanggal`, `waktu`, `tempat`, `file`, `nim`) VALUES
(12, '2018-06-01', '12:21:00', 'jember', 'logo polije.png', 'E31160607'),
(13, '2018-06-15', '12:21:00', 'jember', '9_Dota2-Rubick.jpg', 'E31160607'),
(14, '2018-06-20', '12:12:00', 'jember', 'IMG_0065.JPG', 'E31160607');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `hasil_review` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `id_ta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta`
--

CREATE TABLE `ta` (
  `id_ta` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tgl_input` date NOT NULL,
  `deskripsi` text NOT NULL,
  `nim` varchar(9) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `id_penelitian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ta`
--

INSERT INTO `ta` (`id_ta`, `judul`, `tgl_input`, `deskripsi`, `nim`, `nip`, `id_penelitian`) VALUES
(14, 'malam pertama', '2018-06-01', 'as', 'E31160607', '123123', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta_final`
--

CREATE TABLE `ta_final` (
  `id_final` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tgl_input` date NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `id_penelitian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ta_final`
--

INSERT INTO `ta_final` (`id_final`, `judul`, `tgl_input`, `deskripsi`, `nim`, `nip`, `id_penelitian`) VALUES
(17, 'malam pertama', '2018-06-08', 'asd\r\nasd', 'E31160607', '123123', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD PRIMARY KEY (`id_bimbingan`),
  ADD KEY `nim` (`nim`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_ta` (`id_ta`);

--
-- Indexes for table `deadline`
--
ALTER TABLE `deadline`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_login` (`id_login`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_prodi` (`id_prodi`),
  ADD KEY `id_login` (`id_login`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_ta` (`id_ta`);

--
-- Indexes for table `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`id_ta`),
  ADD KEY `nim` (`nim`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_penelitian` (`id_penelitian`);

--
-- Indexes for table `ta_final`
--
ALTER TABLE `ta_final`
  ADD PRIMARY KEY (`id_final`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nim` (`nim`),
  ADD KEY `id_penelitian` (`id_penelitian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bimbingan`
--
ALTER TABLE `bimbingan`
  MODIFY `id_bimbingan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ta`
--
ALTER TABLE `ta`
  MODIFY `id_ta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `ta_final`
--
ALTER TABLE `ta_final`
  MODIFY `id_final` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD CONSTRAINT `bimbingan_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bimbingan_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bimbingan_ibfk_3` FOREIGN KEY (`id_ta`) REFERENCES `ta` (`id_ta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dosen_ibfk_2` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  ADD CONSTRAINT `penelitian_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `proposal`
--
ALTER TABLE `proposal`
  ADD CONSTRAINT `proposal_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `ta` (`id_ta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ta`
--
ALTER TABLE `ta`
  ADD CONSTRAINT `ta_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ta_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ta_ibfk_3` FOREIGN KEY (`id_penelitian`) REFERENCES `penelitian` (`id_penelitian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ta_final`
--
ALTER TABLE `ta_final`
  ADD CONSTRAINT `ta_final_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ta_final_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ta_final_ibfk_3` FOREIGN KEY (`id_penelitian`) REFERENCES `penelitian` (`id_penelitian`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
