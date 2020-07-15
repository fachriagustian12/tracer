-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 02:15 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

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
-- Table structure for table `jawaban_pertanyaan`
--

CREATE TABLE `jawaban_pertanyaan` (
  `id` int(10) NOT NULL,
  `id_survei` int(10) NOT NULL,
  `id_pertanyaan` int(10) NOT NULL,
  `jawaban` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban_pertanyaan`
--

INSERT INTO `jawaban_pertanyaan` (`id`, `id_survei`, `id_pertanyaan`, `jawaban`, `id_user`) VALUES
(16, 4, 4, 6, 28),
(17, 4, 5, 12, 28),
(18, 4, 7, 21, 28),
(19, 4, 8, 23, 28),
(20, 1, 1, 1, 28),
(21, 1, 2, 5, 28),
(22, 4, 4, 6, 30),
(23, 4, 5, 12, 30),
(24, 4, 7, 22, 30),
(25, 4, 8, 24, 30),
(26, 4, 4, 9, 31),
(27, 4, 5, 14, 31),
(28, 4, 7, 21, 31),
(29, 4, 8, 24, 31),
(30, 4, 4, 9, 32),
(31, 4, 5, 10, 32),
(32, 4, 7, 22, 32),
(33, 4, 8, 24, 32),
(34, 4, 4, 7, 33),
(35, 4, 5, 14, 33),
(36, 4, 7, 22, 33),
(37, 4, 8, 24, 33),
(38, 4, 4, 9, 34),
(39, 4, 5, 10, 34),
(40, 4, 7, 21, 34),
(41, 4, 8, 24, 34),
(42, 4, 4, 9, 35),
(43, 4, 5, 11, 35),
(44, 4, 7, 20, 35),
(45, 4, 8, 23, 35),
(46, 4, 4, 7, 36),
(47, 4, 5, 12, 36),
(48, 4, 7, 22, 36),
(49, 4, 8, 23, 36),
(50, 4, 4, 6, 37),
(51, 4, 5, 14, 37),
(52, 4, 7, 21, 37),
(53, 4, 8, 24, 37),
(54, 4, 4, 7, 38),
(55, 4, 5, 14, 38),
(56, 4, 7, 20, 38),
(57, 4, 8, 24, 38),
(58, 4, 4, 6, 39),
(59, 4, 5, 12, 39),
(60, 4, 7, 20, 39),
(61, 4, 8, 24, 39),
(62, 4, 4, 6, 40),
(63, 4, 5, 10, 40),
(64, 4, 7, 20, 40),
(65, 4, 8, 24, 40),
(66, 4, 4, 6, 41),
(67, 4, 5, 10, 41),
(68, 4, 7, 20, 41),
(69, 4, 8, 24, 41),
(70, 4, 4, 6, 42),
(71, 4, 5, 12, 42),
(72, 4, 7, 22, 42),
(73, 4, 8, 23, 42),
(77, 4, 4, 7, 44),
(78, 4, 5, 14, 44),
(79, 4, 7, 22, 44),
(80, 4, 8, 24, 44),
(81, 4, 4, 6, 45),
(82, 4, 5, 12, 45),
(83, 4, 7, 21, 45),
(84, 4, 8, 24, 45),
(85, 4, 4, 7, 46),
(86, 4, 5, 12, 46),
(87, 4, 7, 22, 46),
(88, 4, 8, 24, 46);

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
(1, 28, 'testing', '<p>ojokpkppkl</p>', '09 07 2020', '11 07 2020', 'download1.png', 'unpublish'),
(2, 28, 'Lowongan 2 Test', '<p>wqewqeqwe</p>', '10 07 2020', '16 07 2020', 'admin.jpg', 'unpublish'),
(3, 21, 'Programmer java', '<p>dibutuhkan segera</p>', '26 07 2020', '28 07 2020', '1267016_4cb469fb-1e44-414a-95dc-b3b6eb5e03b2_(1)2.png', 'unpublish');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `pekerjaan`) VALUES
(1, 'Bidang IT'),
(2, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `sub_pekerjaan`
--

CREATE TABLE `sub_pekerjaan` (
  `id` int(10) NOT NULL,
  `id_pekerjaan` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_pekerjaan`
--

INSERT INTO `sub_pekerjaan` (`id`, `id_pekerjaan`, `nama`) VALUES
(1, 1, 'ManajemenData'),
(2, 1, 'Jaringan'),
(3, 1, 'Security');

-- --------------------------------------------------------

--
-- Table structure for table `survei`
--

CREATE TABLE `survei` (
  `id` int(10) NOT NULL,
  `nama_survei` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_berahkir` date NOT NULL,
  `tgl_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survei`
--

INSERT INTO `survei` (`id`, `nama_survei`, `deskripsi`, `tgl_mulai`, `tgl_berahkir`, `tgl_update`) VALUES
(1, 'Survey Testing 1', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.\r\n\r\n\r\n', '2020-07-10', '2020-07-10', '2020-07-10'),
(3, 'Survey Testing 2', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.\r\n', '2020-07-13', '2020-07-17', '2020-07-13'),
(4, 'Survei alumni informatika', 'survei ini di adakan untuk mengetahui rekam jejak alumni prodi informatika', '0000-00-00', '0000-00-00', '0000-00-00'),
(5, 'survei test2', 'testing 2', '0000-00-00', '0000-00-00', '0000-00-00');

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

--
-- Dumping data for table `survei_jawaban`
--

INSERT INTO `survei_jawaban` (`id`, `id_survey`, `id_pertanyaan`, `jawaban`) VALUES
(1, 1, 1, 'Answer testing 1'),
(2, 1, 1, 'Answer Testing 2'),
(3, 1, 1, 'Answer Testing 3'),
(4, 1, 2, 'Answering testing 1'),
(5, 1, 2, 'Answering Testing 2'),
(6, 4, 4, 'Sebelum lulus'),
(7, 4, 4, '1-3 bulan'),
(8, 4, 4, '3-6 bulan'),
(9, 4, 4, '6-12 bulan'),
(10, 4, 5, 'Iklan di koran/majalah, brosur'),
(11, 4, 5, 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada'),
(12, 4, 5, 'Saya pergi ke UNLA Career Centre'),
(13, 4, 5, 'Saya pergi ke bursa kerja lainnya'),
(14, 4, 5, 'Saya dihubungi oleh perusahaan'),
(15, 4, 6, 'Gaji yang tidak sesuai'),
(16, 4, 6, 'Suasana kerja yang kurang nyaman'),
(17, 4, 6, 'Ingin mencari pengalaman kerja yang lainnya'),
(18, 4, 7, 'Sangat sesuai'),
(19, 4, 7, 'Sesuai'),
(20, 4, 7, 'Ragu-ragu'),
(21, 4, 7, 'Tidak sesuai'),
(22, 4, 7, 'Sangat tidak sesuai'),
(23, 4, 8, 'Tidak memperoleh pekerjaan sesuai bidang ilmu'),
(24, 4, 8, 'Akan memilih pekerjaan yang sesuai di masa lain');

-- --------------------------------------------------------

--
-- Table structure for table `survei_pertanyaan`
--

CREATE TABLE `survei_pertanyaan` (
  `id` int(3) NOT NULL,
  `id_survei` int(3) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survei_pertanyaan`
--

INSERT INTO `survei_pertanyaan` (`id`, `id_survei`, `pertanyaan`) VALUES
(1, 1, 'Testing pertanyaan 1'),
(2, 1, 'Testing pertanyaan 2'),
(4, 4, 'Berapa lama waktu yang anda perlukan untuk mendapatkan pekerjaan pada saat anda baru lulus kuliah ?'),
(5, 4, 'Bagaimana anda mencari pekerjaan setelah lulus ?'),
(7, 4, 'Jika ada, apa alasan anda sehingga pindah ke tempat kerja yang lain :'),
(8, 4, 'Menurut anda, apakah pekerjaan anda sekarang sesuai dengan ilmu yang anda dapat dari Jurusan Teknik Informatika ?');

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
  `pekerjaan` varchar(50) NOT NULL,
  `bidang_pekerjaan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat_kerja` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_user_grup`, `nama_depan`, `nama_belakang`, `jenis_kelamin`, `tgl_lahir`, `telp`, `email`, `alamat`, `username`, `password`, `tahun_lulus`, `mulai_kerja`, `angkatan`, `pekerjaan`, `bidang_pekerjaan`, `jabatan`, `alamat_kerja`, `kota`, `foto`, `status`) VALUES
(1, 1, 'Bagja septian', 'munawar', 'L', '2020-06-01', '083821354485', 'bagja672@gmail.com', '', 'bagjaseptian', '493fd8c3e10972043bcb48e4743a2587', '2020-06-25', '2020-06-25', '', '', '', '', '', '0', '', ''),
(2, 3, 'Sergi Apriatna', 'Djumantara', 'L', '1996-04-08', '087823354485', 'sergi@gmail.com', 'CIparay', 'sergi', '493fd8c3e10972043bcb48e4743a2587', '2020-06-25', '2021-06-25', '2016', '', 'Programmer', '', 'Karapitan', 'Bandung', 'bj.jpg', 'aktif'),
(3, 3, 'Lora', 'pradita', 'P', '1996-04-08', '0827362272', 'lora@gmail.com', 'bandung', 'lora', '493fd8c3e10972043bcb48e4743a2587', '2020-06-25', '2021-06-25', '2016', '', 'SPG', '', 'Karapitan', 'bandung', '', 'aktif'),
(24, 1, 'admin', 'istrator', 'L', '', '', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', '', '', '', '', '', '', '', 'aktif'),
(27, 2, 'Iwan', 'Abadi selamanya', 'L', '', '0832827371', 'iwanabadi@gmail.com', 'jl karapitan no11', 'iwanabadi', '01ccce480c60fcdb67b54f4509ffdb56', '', '', '', '', '', '', '', '', 'admin3.jpg', 'aktif'),
(28, 3, 'Budiman', 'Rahayu', 'L', '16 October 1996', '0821435784932', 'budiman@gmail.com', 'Jalan Mekar Cinta no 124', 'budiman', '456b39e6cf4fdc9bda6b84b0a0b557dd', '2019', '2020', '2015', '1', 'Jaringan', 'IT Support', 'Jalan Taman sari no 109', 'Bandung', 'admin.jpg', 'aktif'),
(29, 2, 'BJ', 'SP', 'L', '', '123131313', 'traos.corp@gmail.com', 'bandung', 'bj123', 'a4165381b7249b57a8c4589fe96b6fc5', '', '', '', '', '', '', '', '', '1267016_4cb469fb-1e44-414a-95dc-b3b6eb5e03b2_(1).png', 'nonaktif'),
(30, 3, 'Sultan aria', 'wiradenata', 'P', '06  2000', '081395293429', 'ariawira@gmail.com', 'Jl paledang no 29', 'ariawira', 'bf545de9b5a377d42966434bee6aeaed', '2021', '2022', '2017', '1', 'Jaringan', 'Network enginerr', 'jl buahbatu', 'Bandung', 'admin.png', 'aktif'),
(31, 3, 'Febrianto', 'Rahmadi', 'L', '26  1997', '08237514637', 'Febrianto@gmail.com', 'Cipedes Bandung', 'wowo', '1d74532f9f1977468454602d6c0d8936', '2020', '2020', '2015', '1', 'Jaringan', 'Network enginerr', 'Jl turangga no 20', 'Bandung', 'admin.png', 'aktif'),
(32, 3, 'Hendra', 'yana', 'L', '14  1993', '083938472645', 'hendra@gmail.com', 'Jl cigondewah', 'hendra', 'a04cca766a885687e33bc6b114230ee9', '2016', '2020', '2012', '1', 'Security', 'Pentester', 'Jl tamansari', 'Bandung', 'admin.png', 'aktif'),
(33, 3, 'Uci ', 'Yulianto', 'P', '25  1996', '082385251172', 'uci@gmail.com', 'jl sukagalih', 'uci', 'e208ca42644926ebb0dc4fe7167f25d7', '2020', '2021', '2015', '2', 'EDITOR', 'STAFF EDITOR BUKU', 'Jl gegerkalong hilir', 'Bandung', 'admin.png', 'aktif'),
(34, 3, 'Topan ', 'nurdiansyah', 'L', '01  1996', '08382473546', 'topan@gmail.com', 'jl.tegalega', 'topan', '2b165d92e828c00b5b83f9dc3eb7cc20', '1990', '2018', '2017', '1', 'ManajemenData', 'PROGRAMMER', 'jl malabar', 'Bandung', 'admin.png', 'aktif'),
(35, 3, 'Panca', 'wiguna', 'L', '29  1991', '08382473546', 'panca@gmail.com', 'jl caringin', 'panca', 'c9e023417fa66e852e4d1f920c051017', '2018', '2020', '2013', '1', 'ManajemenData', 'STAFF IT', 'jl buahbatu', 'Bandung', 'admin.png', 'aktif'),
(36, 3, 'Ridwan', 'zulkipli', 'L', '06  1991', '081387482837', 'ridwan@gmail.com', 'jl luna', 'ridwanz', '5cdc202ffe73637b8a7068fabe4ad970', '2015', '2015', '2011', '1', 'ManajemenData', 'Sistem analis', 'Jl turangga', 'Bandung', 'admin.png', 'aktif'),
(37, 3, 'Octa', 'yuda', 'L', '06  1996', '08273362783', 'octa@gmail.com', 'Jl soreang', 'octay', 'f732e64dac6a4d846b6fbf086382229a', '2017', '2021', '2013', '1', 'ManajemenData', 'Programmer', 'Jl buah batu no 911', 'Bandung', 'admin.png', 'aktif'),
(38, 3, 'Hari', 'setiadi', 'L', '22  1997', '0827372836', 'hari@gmail.com', 'jl kopo bandung', 'domon', '69d469c6825b06a50d4f3ee4bad532bb', '2019', '2020', '2014', '2', 'Wiraswasta', 'Owner', 'Jl buah batu no 911', 'Bandung', 'admin.png', 'aktif'),
(39, 3, 'Elsa', 'meinar', 'P', '25  1997', '008327352617', 'eslameinar@gmail.com', 'bandung', 'elsameinar', '1fc277ac4607594172a47aea29956202', '2020', '2021', '2017', '1', 'ManajemenData', 'Android Programmer', 'Jl bandung', 'bandung', 'admin.png', 'aktif'),
(40, 3, 'anisya', 'khotimah', 'L', '01  2020', '08387365829', 'anis@gmail.com', 'jl rancamanyar', 'anisya1', '4987b6a7b3d413a5d0c45963412bc110', '2020', '2020', '2015', '2', 'Sosial', 'Koor jabar bergerakbidang sosial', 'JL diponegoro', 'Bandung', 'admin.png', 'aktif'),
(41, 3, 'Iqbal', 'nur Ikhsan', 'L', '14  1994', '0823737283', 'iqbal@gmail.com', 'Majalengka', 'donjon', '4f745d6a2d27279d5f7e1240890a6d20', '2017', '2019', '2013', '1', 'Jaringan', 'Network Engineer', 'Majalengka', 'majalengka', 'admin.png', 'aktif'),
(42, 3, 'shelli', 'fitri', 'L', '25  1995', '0838233653', 'shelli@gmail.com', 'jl banjaran', 'shelli', 'ab90518c60f64b8ad57b53c901272726', '2020', '2020', '2017', '2', 'Pemerintahan', 'Sekdes', 'Banjaran', 'Kab Bandung', 'admin.png', 'aktif'),
(43, 3, 'Hendro ', 'Prayitno', 'L', '29  1996', '08273362736', 'edoedmodo@gmail.com', 'Bandung', 'edoedmodo', '631373560f734c9283531ba841a1f486', '2020', '2021', '2021', '1', 'ManajemenData', 'Programmer', 'Jl buah batu no 911', 'Bandung', 'admin.png', 'aktif'),
(44, 3, 'Andi ', 'Yanto', 'L', '27  2020', '082736352737', 'andyhome@gmail.com', 'bandung', 'andyt', '531d9a7714e669b01d190bed3bebbb5a', '2020', '2021', '2015', '1', 'Jaringan', 'Lan tester', 'JL diponegoro', 'Bandung', 'admin.png', 'aktif'),
(45, 3, 'irfan', 'rizkianto', 'L', '25  1996', '0827336273', 'irfanri@gmail.com', 'Bandung', 'irfangaling', '5b2a3b200aaf120e3e88d256b2731514', '2020', '2014', '2015', '1', 'Security', 'white hat', 'Jl bandung', 'bandung', 'admin.png', 'aktif'),
(46, 3, 'Bagja ', 'Septian', 'L', '12  1996', '083726351515', 'Bagja672@gmail', 'bandung', 'bagjasep', 'c5880f2c678a2a3971328247ff0fb7db', '2020', '2020', '2016', '1', 'ManajemenData', 'Big data analis', 'Jl buah batu no 911', 'Bandung', 'admin.png', 'aktif');

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
-- Indexes for table `jawaban_pertanyaan`
--
ALTER TABLE `jawaban_pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_pekerjaan`
--
ALTER TABLE `sub_pekerjaan`
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
-- AUTO_INCREMENT for table `jawaban_pertanyaan`
--
ALTER TABLE `jawaban_pertanyaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_pekerjaan`
--
ALTER TABLE `sub_pekerjaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `survei`
--
ALTER TABLE `survei`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `survei_jawaban`
--
ALTER TABLE `survei_jawaban`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `survei_pertanyaan`
--
ALTER TABLE `survei_pertanyaan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user_grup`
--
ALTER TABLE `user_grup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
