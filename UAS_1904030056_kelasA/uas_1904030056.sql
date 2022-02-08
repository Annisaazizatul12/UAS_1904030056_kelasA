-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 08:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030056`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_marketzul`
--

CREATE TABLE `db_marketzul` (
  `id` int(10) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(100) NOT NULL,
  `stok_produk` int(10) NOT NULL,
  `gambar_produk` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_marketzul`
--

INSERT INTO `db_marketzul` (`id`, `id_produk`, `nama_produk`, `harga_produk`, `stok_produk`, `gambar_produk`) VALUES
(1, 201, 'ALBUM MUSIK', 1000000, 10, '1.jpg'),
(2, 202, 'LIGHTSTICK', 2000000, 20, '2.jpg'),
(3, 203, 'POSTER', 50000, 25, '3.jpg'),
(4, 204, 'KAOS EXO', 150000, 25, '4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_marketzul`
--
ALTER TABLE `db_marketzul`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
