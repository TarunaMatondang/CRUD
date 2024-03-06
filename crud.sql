-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Mar 2024 pada 06.56
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_barang`
--

CREATE TABLE `daftar_barang` (
  `nama_suplier` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `desk_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar_barang`
--

INSERT INTO `daftar_barang` (`nama_suplier`, `nama_barang`, `desk_barang`) VALUES
('SENTOSA JAYA', 'SEMEN', 'SEMEN TERBAIK SE INDONESIA'),
('BUTIK INDONESIA', 'GAMIS WANITA', 'GAMIS TERBAIK SE INDONESIA'),
('ADIDAS', 'SEPATU BOLA', 'SEPATU BOLA TERBAIK SE INDONESIA\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_suplier`
--

CREATE TABLE `daftar_suplier` (
  `nama_suplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar_suplier`
--

INSERT INTO `daftar_suplier` (`nama_suplier`) VALUES
('SENTOSA JAYA'),
('ADIDAS'),
('BUTIK INDONESIA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
