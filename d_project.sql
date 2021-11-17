-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Nov 2021 pada 12.28
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_pengguna`, `tanggal`, `keterangan`) VALUES
(6, 2, '2021-07-29', 'hadir'),
(7, 3, '2021-07-29', 'hadir'),
(8, 4, '2021-07-29', 'tidak hadir'),
(15, 6, '2021-07-29', 'sakit'),
(16, 5, '2021-07-29', 'tidak hadir'),
(17, 7, '2021-07-29', 'hadir'),
(18, 8, '2021-07-29', 'lainnya'),
(19, 2, '2021-07-30', 'hadir'),
(20, 3, '2021-07-30', 'hadir'),
(21, 4, '2021-07-30', 'hadir'),
(22, 5, '2021-07-30', 'izin'),
(23, 6, '2021-07-30', 'sakit'),
(24, 7, '2021-07-30', 'izin'),
(25, 8, '2021-07-30', 'hadir'),
(26, 2, '2021-07-31', 'hadir'),
(38, 10, '2021-07-30', 'hadir'),
(39, 3, '2021-07-31', 'hadir'),
(40, 3, '2021-08-05', 'izin'),
(41, 4, '2021-08-05', 'hadir'),
(42, 5, '2021-08-05', 'tidak hadir'),
(43, 3, '2021-11-17', 'hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id_aktivitas` int(11) NOT NULL,
  `id_absensi` int(11) NOT NULL,
  `aktivitas_harian` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aktivitas`
--

INSERT INTO `aktivitas` (`id_aktivitas`, `id_absensi`, `aktivitas_harian`, `gambar`) VALUES
(9, 20, 'menyapu', ''),
(10, 21, 'makan', ''),
(11, 25, 'belanja', ''),
(12, 38, 'vvv', ''),
(13, 41, 'menyapu', ''),
(17, 43, 'tes3', 'kerangka_pikir1.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `password`, `alamat`, `telepon`, `jabatan`, `level`) VALUES
(1, 'riki', '12345', 'jl. Undata No 10', '0823242526', 'admin', 'admin'),
(3, 'eiger', '123', 'jl.undata', '085796175565', 'bendahara', 'user'),
(4, 'fikri', '123', 'jl.undata', '123', 'pegawai desa', 'user'),
(5, 'Sarifuddin Lamakarate', '123', 'Jl.undata No. 12', '085796175565', 'kepala desa', 'user'),
(6, 'bebas', '123', 'jl.undata', '123', 'Dokter Jantung', 'user'),
(7, 'pendi', '123', 'jl.undata', '085796175565', 'Guru Biologi', 'user'),
(8, 'amattttttttttttt', '123', 'jl.undata', '121212', 'bendahata', 'user'),
(90, 'valkri', '123', 'jl.undata', '085796175565', 'kepala desa', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_desa`
--

CREATE TABLE `profil_desa` (
  `id_profil_desa` int(11) NOT NULL,
  `total_dusun` varchar(100) NOT NULL,
  `jumlah_penduduk` varchar(100) NOT NULL,
  `luas_area` varchar(100) NOT NULL,
  `letak_geografis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_desa`
--

INSERT INTO `profil_desa` (`id_profil_desa`, `total_dusun`, `jumlah_penduduk`, `luas_area`, `letak_geografis`) VALUES
(2, '7', '560', '1233', '0087349, -00097460'),
(3, '10', '10', '10', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_kantor_desa`
--

CREATE TABLE `profil_kantor_desa` (
  `id_profil_kantor_desa` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_kantor_desa`
--

INSERT INTO `profil_kantor_desa` (`id_profil_kantor_desa`, `jenis`, `gambar`) VALUES
(2, 'struktur organisasi', 'struktur1.jpg'),
(13, 'kepala desa', 'undraw_Growth_curve_re_t5s7.png'),
(14, 'pegawai', 'undraw_Experts_re_i40h.png'),
(15, 'warga desa', 'undraw_Group_selfie_re_h8gb.png'),
(16, 'kantor', 'WhatsApp_Image_2021-08-01_at_16_50_00.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indeks untuk tabel `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `profil_desa`
--
ALTER TABLE `profil_desa`
  ADD PRIMARY KEY (`id_profil_desa`);

--
-- Indeks untuk tabel `profil_kantor_desa`
--
ALTER TABLE `profil_kantor_desa`
  ADD PRIMARY KEY (`id_profil_kantor_desa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id_aktivitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `profil_desa`
--
ALTER TABLE `profil_desa`
  MODIFY `id_profil_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profil_kantor_desa`
--
ALTER TABLE `profil_kantor_desa`
  MODIFY `id_profil_kantor_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
