-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2022 pada 13.16
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museum_sandi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `username` varchar(99) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `pesan` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `email`, `phone`, `pesan`) VALUES
(1, 'zehan', 'zehan@gmail.com', 2147483647, '123'),
(2, 'faris', 'fatkurrizal12@gmail.com', 2147483647, 'asdasd'),
(3, 'isnaisni', 'isnaini@gmail.com', 2147483647, 'Testing input feedback');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(99) NOT NULL,
  `username` varchar(99) NOT NULL,
  `Keterangan` varchar(999) NOT NULL,
  `Jumlah` int(99) NOT NULL,
  `Jam` time(6) NOT NULL,
  `Tanggal` date NOT NULL,
  `status` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id`, `username`, `Keterangan`, `Jumlah`, `Jam`, `Tanggal`, `status`) VALUES
(2, 'fikry', 'asdasdasd', 11, '10:04:11.000000', '2022-10-03', 'Disetujui'),
(3, 'asdas', 'asd', 123123, '00:00:00.000000', '0123-03-12', 'Batal'),
(4, 'faris', 'asd', 12, '00:00:00.000000', '0012-12-12', 'Disetujui'),
(5, 'faris', 'asdas', 2, '00:00:00.000000', '0000-00-00', 'Menunggu'),
(6, 'fikry', 'asdasas', 2, '00:00:00.000000', '0000-00-00', 'Menunggu'),
(7, 'fikry', 'asdas', 12, '12:12:00.000000', '1212-12-12', 'Menunggu'),
(8, 'faris', 'asdasdsa', 12312, '03:17:00.000000', '2022-10-06', 'Menunggu'),
(9, 'faris', '12asdasd', 22, '12:12:00.000000', '2222-02-22', 'Menunggu'),
(10, 'isnaini', 'reservasi', 12, '17:19:00.000000', '2022-10-07', 'Disetujui'),
(11, 'isnaini', 'testing', 12, '14:16:00.000000', '2022-10-06', 'Disetujui'),
(12, 'isnaini', 'test', 1, '16:20:00.000000', '2022-10-06', 'Waiting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `phone` varchar(99) NOT NULL,
  `addrees` varchar(99) NOT NULL,
  `gender` varchar(99) NOT NULL,
  `role` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `phone`, `addrees`, `gender`, `role`) VALUES
(1, 'faris', 'farisfaris', 'faris@gmail.com', '1111', 'yk', 'L', 'user'),
(2, 'Zehan', '1asd', 'zehan@gmail.com', '85388187787', 'yk', 'Laki Laki', 'user'),
(15, 'admin', 'admin123', 'admin@gmail.com', '123123123', 'adminYK', 'Laki Laki', 'admin'),
(17, 'isnaini', 'isna', 'isnaini@gmail.com', '123123', 'yogyakarta', 'Perempuan', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
