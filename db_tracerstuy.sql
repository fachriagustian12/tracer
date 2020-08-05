-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2020 at 07:02 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tracerstuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang_pekerjaan`
--

CREATE TABLE `bidang_pekerjaan` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang_pekerjaan`
--

INSERT INTO `bidang_pekerjaan` (`id`, `nama`) VALUES
(1, 'System Analyst, Programmer, Project Manager Etc'),
(2, 'Network Engineer, Etc'),
(3, 'Pentester, Etc'),
(4, 'Non IT'),
(5, 'Tidak Bekerja'),
(6, 'Kuliah');

-- --------------------------------------------------------

--
-- Table structure for table `centroid`
--

CREATE TABLE `centroid` (
  `id` int(3) NOT NULL,
  `x` int(3) NOT NULL,
  `y` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centroid`
--

INSERT INTO `centroid` (`id`, `x`, `y`) VALUES
(1, 2, 3),
(2, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_pertanyaan`
--

CREATE TABLE `jawaban_pertanyaan` (
  `id` int(10) NOT NULL,
  `id_survei` int(10) NOT NULL,
  `id_pertanyaan` int(10) NOT NULL,
  `jawaban` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konsentrasi`
--

CREATE TABLE `konsentrasi` (
  `id` int(10) NOT NULL,
  `konsentrasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsentrasi`
--

INSERT INTO `konsentrasi` (`id`, `konsentrasi`) VALUES
(1, 'Management Data'),
(2, 'Security'),
(3, 'Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id` int(11) NOT NULL,
  `id_user` int(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_buat` varchar(255) NOT NULL,
  `tgl_akhir` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id`, `id_user`, `judul`, `deskripsi`, `tgl_buat`, `tgl_akhir`, `foto`, `status`) VALUES
(4, 47, 'asdasd', '<p>asdasdasd</p>', '29 08 2020', '31 08 2020', 'admin1.jpg', 'unpublish');

-- --------------------------------------------------------

--
-- Table structure for table `survei`
--

CREATE TABLE `survei` (
  `id` int(10) NOT NULL,
  `nama_survei` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_mulai` varchar(15) NOT NULL,
  `tgl_berahkir` varchar(15) NOT NULL,
  `tgl_update` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survei`
--

INSERT INTO `survei` (`id`, `nama_survei`, `deskripsi`, `tgl_mulai`, `tgl_berahkir`, `tgl_update`) VALUES
(1, 'Survey Testing 1', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.\r\n\r\n\r\n', '16 07 2020', '', '19 07 2020'),
(4, 'Survei alumni informatika', 'survei ini di adakan untuk mengetahui rekam jejak alumni prodi informatika', '17 09 2020', '26 09 2020', '19 07 2020');

-- --------------------------------------------------------

--
-- Table structure for table `survei_jawaban`
--

CREATE TABLE `survei_jawaban` (
  `id` int(3) NOT NULL,
  `id_survey` int(3) NOT NULL,
  `id_pertanyaan` int(3) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `survei_pertanyaan`
--

CREATE TABLE `survei_pertanyaan` (
  `id` int(3) NOT NULL,
  `id_survei` int(3) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `id_user_grup` int(10) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tahun_lulus` varchar(30) NOT NULL,
  `mulai_kerja` varchar(30) NOT NULL,
  `angkatan` varchar(50) NOT NULL,
  `konsentrasi` varchar(50) NOT NULL,
  `bidang_pekerjaan` varchar(50) NOT NULL,
  `alamat_kerja` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_user_grup`, `nama_depan`, `nama_belakang`, `jenis_kelamin`, `tgl_lahir`, `telp`, `email`, `alamat`, `username`, `password`, `tahun_lulus`, `mulai_kerja`, `angkatan`, `konsentrasi`, `bidang_pekerjaan`, `alamat_kerja`, `kota`, `foto`, `status`) VALUES
(1, 1, 'Bagja septian', 'munawar', 'L', '2020-06-01', '083821354485', 'bagja672@gmail.com', '', 'bagjaseptian', '493fd8c3e10972043bcb48e4743a2587', '2020-06-25', '2020-06-25', '', '', '', '', '0', '', ''),
(24, 1, 'admin', 'istrator', 'L', '', '', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', '', '', '', '', '', '', 'aktif'),
(27, 2, 'Dosen', 'Test', 'L', '', '0832827371', 'iwanabadi@gmail.com', 'jl karapitan no11', 'dosentest', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', '', '', 'admin3.jpg', 'aktif'),
(29, 2, 'BJ', 'SP', 'L', '', '123131313', 'traos.corp@gmail.com', 'bandung', 'bj123', 'a4165381b7249b57a8c4589fe96b6fc5', '', '', '', '', '', '', '', '1267016_4cb469fb-1e44-414a-95dc-b3b6eb5e03b2_(1).png', 'aktif'),
(47, 3, 'Budiman', 'rahayu', 'L', '03 August 2020', '0821435784932', 'fahmyal080397@gmail.com', 'jl karapitan no11', 'budiman', '456b39e6cf4fdc9bda6b84b0a0b557dd', '2019', '2019', '2015', '1', '1', 'Jalan Taman sari no 109', 'Bandung', 'admin.jpg', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user_grup`
--

CREATE TABLE `user_grup` (
  `id` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `Deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_grup`
--

INSERT INTO `user_grup` (`id`, `status`, `Deskripsi`) VALUES
(1, 'Admin', 'administrator'),
(2, 'panitia', 'panitia tracer'),
(3, 'alumni', 'Alumni informatika Unla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang_pekerjaan`
--
ALTER TABLE `bidang_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centroid`
--
ALTER TABLE `centroid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban_pertanyaan`
--
ALTER TABLE `jawaban_pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsentrasi`
--
ALTER TABLE `konsentrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survei_jawaban`
--
ALTER TABLE `survei_jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pertanyaan` (`id_pertanyaan`),
  ADD KEY `id_survey` (`id_survey`);

--
-- Indexes for table `survei_pertanyaan`
--
ALTER TABLE `survei_pertanyaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_survey` (`id_survei`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_grup`
--
ALTER TABLE `user_grup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang_pekerjaan`
--
ALTER TABLE `bidang_pekerjaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `centroid`
--
ALTER TABLE `centroid`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jawaban_pertanyaan`
--
ALTER TABLE `jawaban_pertanyaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konsentrasi`
--
ALTER TABLE `konsentrasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `survei`
--
ALTER TABLE `survei`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `survei_jawaban`
--
ALTER TABLE `survei_jawaban`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survei_pertanyaan`
--
ALTER TABLE `survei_pertanyaan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user_grup`
--
ALTER TABLE `user_grup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
