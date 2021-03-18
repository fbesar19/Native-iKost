-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 05:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikost2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kode_admin` varchar(14) NOT NULL,
  `username_admin` varchar(30) NOT NULL,
  `password_admin` varchar(12) NOT NULL,
  `kode_pemilik_kost` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kode_admin`, `username_admin`, `password_admin`, `kode_pemilik_kost`) VALUES
('A001', 'fikri', '12345678', 'P001'),
('A002', 'dio', '12345678', 'P003'),
('A003', 'dewi', '12345678', 'P004'),
('A004', 'erbina', '12345678', 'P005');

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `kode_transaksi` varchar(14) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jumlah_uang` varchar(50) NOT NULL,
  `kode_admin` varchar(14) NOT NULL,
  `nim` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kost`
--

CREATE TABLE `kost` (
  `kode_kost` varchar(14) NOT NULL,
  `nama_kost` varchar(50) NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `status_kamar_kost` varchar(10) NOT NULL,
  `fasilitas_kost` varchar(50) NOT NULL,
  `tarif_kost` int(11) NOT NULL,
  `alamat_kost` varchar(50) NOT NULL,
  `deskripsi_kost` varchar(200) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `kode_pemilik_kost` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kost`
--

INSERT INTO `kost` (`kode_kost`, `nama_kost`, `jumlah_kamar`, `status_kamar_kost`, `fasilitas_kost`, `tarif_kost`, `alamat_kost`, `deskripsi_kost`, `foto`, `kode_pemilik_kost`) VALUES
('K001', 'Kost Tentram Palmerah', 4, 'cowok', 'AC', 450, 'Jalan Juragan Sinda II. No 24 Kukusan Teknik UI. D', 'Dekat Ke Jalan Raya', '1.jpg', 'P001'),
('K002', 'Kost Tentram Laksana', 3, 'cewek', 'AC Internet', 550, 'Jln kedondong RT 01 RW 08 pondok Cina', 'Dekat Ke Jalan Raya', '2.jpg', 'P002'),
('K003', 'Kost Chintya', 7, 'cowok', 'AC Lemari', 400, 'Jl.Pinang 3 Pondok Cina', 'Dekat Ke Jalan Raya', '3.jpg', 'P003'),
('K004', 'Kost Syariah', 8, 'campur', 'Internet', 600, 'Jl. Mandor Goeng, Kutek', 'Dekat Ke Jalan Raya', '4.jpg', 'P005'),
('K005', 'Wisma Griya Arista', 5, 'cewek', 'AC', 500, 'Jl. Kober Gang ', 'Dekat Ke Jalan Raya', '5.jpg', 'P004'),
('K006', 'Pondok Astri', 8, 'cewek', 'AC Kamar Md Dalam', 450, 'Jl Mawar, Kober.', 'Dekat Ke Jalan Raya', '6.jpg', 'P009'),
('K007', 'Paviliun Salkia', 8, 'campur', 'AC Meja Kursi', 480, 'Jl. Sawo No. 12', 'Dekat Ke Jalan Raya', '7.jpg', 'P006'),
('K008', 'Nanda Kost', 8, 'cowok', 'TV Internet', 490, 'Jln Pinang I no 11', 'Dekat Ke Jalan Raya', '8.jpg', 'P008'),
('K009', 'Wisma Putri Bhayangkara', 8, 'cewek', 'TV', 450, 'Jln Pinang I no 8', 'Dekat Ke Jalan Raya', '9.jpg', 'P010'),
('K010', 'Wisma Hijau 1', 8, 'cowok', 'Meja Kursi', 500, 'jln.sukabirus', 'Dekat Ke Jalan Raya', '10.jpg', 'P007');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `username_mhs` varchar(50) NOT NULL,
  `password_mhs` varchar(12) NOT NULL,
  `email_mhs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mhs`, `username_mhs`, `password_mhs`, `email_mhs`) VALUES
('1181700567', 'Aldi Ramdhan', 'aldiramdhan', '1234567817', 'aldi@gmail.com'),
('6706170001', 'Nur Hidayat', 'dionurhidayat', '123456', 'dendy@gmail.com'),
('6706170015', 'Qoyyum Saputra', 'qoyyum saputra', '1234567818', 'qoyyum@gmail.com'),
('6706170049', 'Sadli Putra', 'sadliputra', '1234567814', 'sadli@gmail.com'),
('6706172006', 'M. Fauqi ', 'fauqifikriansyah', '1234567812', 'fauqi@gmail.com'),
('6706174002', 'Intan Kusuma', 'intankusuma', '1234567815', 'intan@gmail.com'),
('6706174033', 'Fikri Firdaus', 'fikrifirdaus', '1234567890', 'ffirdaus@gmail.com'),
('6706174043', 'Erbina Selvia', 'erbinaselvia', '1234567810', 'erbina@gmail.com'),
('6706174059', 'Fariq Assiddik', 'fariq12345', '1234567813', 'fariq@gmail.com'),
('6706174213', 'Haririel Fikri', 'Haririelfikri', '1234567816', 'haririel@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik_kost`
--

CREATE TABLE `pemilik_kost` (
  `kode_pemilik_kost` varchar(14) NOT NULL,
  `username_pemilik` varchar(30) NOT NULL,
  `password_pemilik` varchar(14) NOT NULL,
  `email_pemilik` varchar(30) NOT NULL,
  `nm_pemilik_kost` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik_kost`
--

INSERT INTO `pemilik_kost` (`kode_pemilik_kost`, `username_pemilik`, `password_pemilik`, `email_pemilik`, `nm_pemilik_kost`) VALUES
('P001', 'agus001', '987654321', 'agus1@gmail.com', 'agus'),
('P002', 'armin002', '987654312', 'armin@gmail.com', 'armin'),
('P003', 'jaya003', '987654123', 'jaya@gmail.com', 'jaya'),
('P004', 'sati004', '987654213', 'sati@gmail.com', 'sati'),
('P005', 'fadil005', '987653214', 'fadil@gmail.com', 'fadil'),
('P006', 'bagus006', '987652314', 'bagus@gmail.com', 'bagus'),
('P007', 'bgas007', '987651423', 'bgas@gmail.com', 'bgas'),
('P008', 'roso008', '987652413', 'roso@gmail.com', 'roso'),
('P009', 'ratih009', '987653412', 'ratih@gmail.com', 'ratih'),
('P010', 'rahmi010', '987651432', 'rahmi@gmail.com', 'rahmi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kode_admin`),
  ADD KEY `kode_pemilik_kost` (`kode_pemilik_kost`);

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `kode_admin` (`kode_admin`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `kost`
--
ALTER TABLE `kost`
  ADD PRIMARY KEY (`kode_kost`),
  ADD KEY `kode_pemilik_kost` (`kode_pemilik_kost`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pemilik_kost`
--
ALTER TABLE `pemilik_kost`
  ADD PRIMARY KEY (`kode_pemilik_kost`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`kode_pemilik_kost`) REFERENCES `pemilik_kost` (`kode_pemilik_kost`);

--
-- Constraints for table `bayar`
--
ALTER TABLE `bayar`
  ADD CONSTRAINT `bayar_ibfk_1` FOREIGN KEY (`kode_admin`) REFERENCES `admin` (`kode_admin`),
  ADD CONSTRAINT `bayar_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

--
-- Constraints for table `kost`
--
ALTER TABLE `kost`
  ADD CONSTRAINT `kost_ibfk_1` FOREIGN KEY (`kode_pemilik_kost`) REFERENCES `pemilik_kost` (`kode_pemilik_kost`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
