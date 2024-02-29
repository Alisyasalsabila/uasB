-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2022 pada 13.17
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(20) NOT NULL,
  `foto_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` varchar(100) NOT NULL,
  `stok_barang` int(100) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `spesifikasi_barang` text NOT NULL,
  `warna_barang` varchar(100) NOT NULL,
  `ukuran_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `foto_barang`, `nama_barang`, `harga_barang`, `stok_barang`, `deskripsi_barang`, `spesifikasi_barang`, `warna_barang`, `ukuran_barang`) VALUES
(1, 'sd.jpg', 'Seragam SD', '50.000', 130, 'baju nyaman dipakai ', 'baju tersedia lengan pendek ', 'Putih', 's'),
(7, 'sma.jpg', 'seragam sma', '50.000', 123, 'deskripsi', 'spesifikasi', 'abu', 'M'),
(9, 'olahraga.jpg', 'seragam olahraga', '50.000', 123, 'deskripsi', 'spesifikasi', 'hitam', 'XL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(100) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Seragam Olahraga'),
(2, 'Seragam SD'),
(3, 'Seragam SMP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_review`
--

CREATE TABLE `tbl_review` (
  `id_review` int(100) NOT NULL,
  `isi_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_review`
--

INSERT INTO `tbl_review` (`id_review`, `isi_review`) VALUES
(1, 'Seragam disini nyaman dipakai semua'),
(2, 'Seragam disini harganya terjangkau oleh kantong pelajar'),
(3, 'Seragamnya lucu lucu'),
(4, 'seragam grafika cakep');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(100) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `jumlah_beli` int(100) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `metode_bayar` varchar(100) NOT NULL,
  `total` int(100) NOT NULL,
  `alamat_kirim` varchar(100) NOT NULL,
  `id_refund` int(100) NOT NULL,
  `alasan_refund` text NOT NULL,
  `keterangan_refund` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomor_telepon` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `nama`, `email`, `nomor_telepon`, `password`, `level`) VALUES
('adi', 'adi', 'adi@gmail.com', '089673808115', 'd65c81cf756151229c67d150eac28fd6', 'admin'),
('althea', 'althea', 'althea@gmail.com', '086719391', '030c5f71c737e8c6af920ec09f82126d', 'user'),
('purnomo12', 'purnomo', 'purnomo@gmail.com', '086791243799', '030c5f71c737e8c6af920ec09f82126d', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `id_review` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
