-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 30, 2023 at 05:40 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kas_ci3`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kas`
--

CREATE TABLE `tb_kas` (
  `kas_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pemasukan` int(11) DEFAULT NULL,
  `pengeluaran` int(11) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kas`
--

INSERT INTO `tb_kas` (`kas_id`, `tanggal`, `pemasukan`, `pengeluaran`, `keterangan`) VALUES
(1, '2023-05-25', 100000, NULL, 'test'),
(2, '2023-05-31', 100000, NULL, 'test 2'),
(4, '2023-06-30', 2000000, NULL, 'test\r\n'),
(5, '2023-06-29', 20000, NULL, 'tetst'),
(6, '2023-06-30', 10000, NULL, 'sakdhka'),
(9, '2023-06-29', NULL, 200000, 'test'),
(10, '2023-06-30', NULL, 100000, 'tidak tau'),
(11, '2023-06-30', 50000, NULL, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `nama_lengkap`, `username`, `password`, `created_at`) VALUES
(1, 'Administrator', 'admin', '$2y$10$zyI3dPmGpm1dFD0Rx8siNuw5obNLqDONeIICFiKQrzcMU.p2.s1yO', '2023-06-29 18:51:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kas`
--
ALTER TABLE `tb_kas`
  ADD PRIMARY KEY (`kas_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kas`
--
ALTER TABLE `tb_kas`
  MODIFY `kas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
