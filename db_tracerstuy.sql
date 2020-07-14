-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 14 Jul 2020 pada 07.09
-- Versi server: 5.7.24
-- Versi PHP: 7.2.19

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
-- Struktur dari tabel `jawaban_pertanyaan`
--

CREATE TABLE `jawaban_pertanyaan` (
  `id` int(10) NOT NULL,
  `id_pertanyaan` int(10) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `penjelasan` text NOT NULL,
  `id_survei` int(10) NOT NULL,
  `id_grup_pertanyaan` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `loker`
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
-- Dumping data untuk tabel `loker`
--

INSERT INTO `loker` (`id`, `id_user`, `judul`, `deskripsi`, `tgl_buat`, `tgl_akhir`, `foto`, `status`) VALUES
(1, 28, 'testing', '<p>ojokpkppkl</p>', '09 07 2020', '11 07 2020', 'download1.png', 'unpublish'),
(2, 28, 'Lowongan 2 Test', '<p>wqewqeqwe</p>', '10 07 2020', '16 07 2020', 'admin.jpg', 'unpublish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `pekerjaan`) VALUES
(1, 'Bidang IT'),
(2, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_pekerjaan`
--

CREATE TABLE `sub_pekerjaan` (
  `id` int(10) NOT NULL,
  `id_pekerjaan` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_pekerjaan`
--

INSERT INTO `sub_pekerjaan` (`id`, `id_pekerjaan`, `nama`) VALUES
(1, 1, 'ManajemenData'),
(2, 1, 'Jaringan'),
(3, 1, 'Security');

-- --------------------------------------------------------

--
-- Struktur dari tabel `survei`
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
-- Dumping data untuk tabel `survei`
--

INSERT INTO `survei` (`id`, `nama_survei`, `deskripsi`, `tgl_mulai`, `tgl_berahkir`, `tgl_update`) VALUES
(1, 'Survey Testing 1', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.\r\n\r\n\r\n', '2020-07-10', '2020-07-10', '2020-07-10'),
(3, 'Survey Testing 2', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.\r\n', '2020-07-13', '2020-07-17', '2020-07-13');
<<<<<<< HEAD
-- --------------------------------------------------------
--
-- Struktur dari tabel `survei_jawaban`
--
=======

-- --------------------------------------------------------

--
-- Struktur dari tabel `survei_jawaban`
--

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
CREATE TABLE `survei_jawaban` (
  `id` int(3) NOT NULL,
  `id_survey` int(3) NOT NULL,
  `id_pertanyaan` int(3) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
<<<<<<< HEAD
--
-- Dumping data untuk tabel `survei_jawaban`
--
=======

--
-- Dumping data untuk tabel `survei_jawaban`
--

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
INSERT INTO `survei_jawaban` (`id`, `id_survey`, `id_pertanyaan`, `jawaban`) VALUES
(1, 1, 1, 'Answer testing 1'),
(2, 1, 1, 'Answer Testing 2'),
(3, 1, 1, 'Answer Testing 3'),
(4, 1, 2, 'Answering testing 1'),
(5, 1, 2, 'Answering Testing 2');
<<<<<<< HEAD
-- --------------------------------------------------------
--
-- Struktur dari tabel `survei_pertanyaan`
--
=======

-- --------------------------------------------------------

--
-- Struktur dari tabel `survei_pertanyaan`
--

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
CREATE TABLE `survei_pertanyaan` (
  `id` int(3) NOT NULL,
  `id_survei` int(3) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
<<<<<<< HEAD
--
-- Dumping data untuk tabel `survei_pertanyaan`
--
INSERT INTO `survei_pertanyaan` (`id`, `id_survei`, `pertanyaan`) VALUES
(1, 1, 'Testing pertanyaan 1'),
(2, 1, 'Testing pertanyaan 2');
-- --------------------------------------------------------
--
-- Struktur dari tabel `tabel_grup_pertanyaan`
--
=======

--
-- Dumping data untuk tabel `survei_pertanyaan`
--

INSERT INTO `survei_pertanyaan` (`id`, `id_survei`, `pertanyaan`) VALUES
(1, 1, 'Testing pertanyaan 1'),
(2, 1, 'Testing pertanyaan 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_grup_pertanyaan`
--

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
CREATE TABLE `tabel_grup_pertanyaan` (
  `id` int(10) NOT NULL,
  `id_pertanyaan` int(10) NOT NULL,
  `id_survei` int(10) NOT NULL,
  `nama_grup` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `perintah` varchar(50) NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
<<<<<<< HEAD
-- --------------------------------------------------------
--
-- Struktur dari tabel `tabel_pertanyaan`
--
=======

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pertanyaan`
--

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
CREATE TABLE `tabel_pertanyaan` (
  `id` int(10) NOT NULL,
  `id_grup_pertanyaan` int(10) NOT NULL,
  `pertanyaan` varchar(200) NOT NULL,
  `pilihan` varchar(50) NOT NULL,
  `butuh_penjelasan` varchar(200) NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
<<<<<<< HEAD
-- --------------------------------------------------------
--
-- Struktur dari tabel `user`
--
=======

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
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
<<<<<<< HEAD
--
-- Dumping data untuk tabel `user`
--
=======

--
-- Dumping data untuk tabel `user`
--

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
INSERT INTO `user` (`id`, `id_user_grup`, `nama_depan`, `nama_belakang`, `jenis_kelamin`, `tgl_lahir`, `telp`, `email`, `alamat`, `username`, `password`, `tahun_lulus`, `mulai_kerja`, `angkatan`, `pekerjaan`, `bidang_pekerjaan`, `jabatan`, `alamat_kerja`, `kota`, `foto`, `status`) VALUES
(1, 1, 'Bagja septian', 'munawar', 'L', '2020-06-01', '083821354485', 'bagja672@gmail.com', '', 'bagjaseptian', '493fd8c3e10972043bcb48e4743a2587', '2020-06-25', '2020-06-25', '', '', '', '', '', '0', '', ''),
(2, 3, 'Sergi Apriatna', 'Djumantara', 'L', '1996-04-08', '087823354485', 'sergi@gmail.com', 'CIparay', 'sergi', '493fd8c3e10972043bcb48e4743a2587', '2020-06-25', '2021-06-25', '2016', '', 'Programmer', '', 'Karapitan', 'Bandung', 'bj.jpg', 'aktif'),
(3, 3, 'Lora', 'pradita', 'P', '1996-04-08', '0827362272', 'lora@gmail.com', 'bandung', 'lora', '493fd8c3e10972043bcb48e4743a2587', '2020-06-25', '2021-06-25', '2016', '', 'SPG', '', 'Karapitan', 'bandung', '', 'nonaktif'),
(15, 3, 'Bagja septian', 'arief rahman', 'L', '09 06 2020', '08821354485', 'beje4355@gmail.com', 'Jl. KH. SYAHDAN RT 07', 'beje', '493fd8c3e10972043bcb48e4743a2587', '2020', '2020', '2016', '1', 'ManajemenData', 'Programmer', 'jl haji daslim', 'bandung', 'IMG_8568.jpg', 'nonaktif'),
(16, 3, 'fahri', 'pantau', 'L', '03 06 2020', '08821354485', 'elsa@gmail.com', 'Jl. KH. SYAHDAN RT 07', 'rudi', '493fd8c3e10972043bcb48e4743a2587', '2020', '2020', '2014', '2', 'PNS', 'Staff Kementrian', 'jl haji daslim', 'bandung', 'IMG_8568.jpg', 'nonaktif'),
(17, 3, 'Bagja septian', 'arief rahman', 'L', '09 06 2020', '08821354485', 'beje4355@gmail.com', 'Caringin', 'admin', '493fd8c3e10972043bcb48e4743a2587', '2027', '2023', '2020', '1', 'ManajemenData', 'Network enginer', 'jl haji daslim', 'bandung', 'excellence_delivery_shiping_transportation_car_travel-128.png', 'nonaktif'),
(18, 3, 'jon', 'Munawar12', 'L', '09 07 2020', '08821354485', 'adminbiobses@gmail.com', 'Caringin', 'admin', '493fd8c3e10972043bcb48e4743a2587', '2020', '2020', '2020', '2', 'Pilih', 'Bos', 'jl haji daslim', 'bandung', 'images.jpg', 'aktif'),
(19, 3, 'irwin', 'supriadi', 'L', '20 05 2000', '08821354485', 'beje4355@gmail.com', 'ciwidey', 'irwin', '493fd8c3e10972043bcb48e4743a2587', '2027', '2023', '2013', '1', 'Jaringan', 'Dosen UNLA', 'Bandung', 'bandung', 'WhatsApp_Image_2020-01-28_at_19_16_50.jpeg', 'aktif'),
(20, 3, 'aria', 'wiguna', 'L', '28 07 2020', '08821354485', 'ariawira@gmail.com', 'Caringin', 'arai', '493fd8c3e10972043bcb48e4743a2587', '2027', '2020', '2015', '2', 'Wirausaha', 'Owner', 'Bandung', 'Bandung', 'Logo-Alfabeta.png', 'aktif'),
(21, 3, 'bagja septian', 'munawar', 'L', '29 09 1996', '083821354485', 'bagja572@gmail.com', 'kotabaru VII no 11', 'bagja96', '493fd8c3e10972043bcb48e4743a2587', '2020', '2020', '1996', '1', 'ManajemenData', 'Programmer', 'jl Buahbatu no 52 ', 'Bandung', 'download.png', 'nonaktif'),
(22, 3, 'Sergi apriatna', 'Djumantara', 'L', '08 04 1996', '083823335582', 'sergi@gmail.com', 'Jl ciparay', 'apriatna', '493fd8c3e10972043bcb48e4743a2587', '2021', '2022', '2016', '1', 'Security', 'White Hat', 'jl Buahbatu no 52 ', 'Bandung', 'download.png', 'nonaktif'),
(24, 1, 'admin', 'istrator', 'L', '', '', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', '', '', '', '', '', '', '', ''),
(27, 2, 'Iwan', 'Abadi selamanya', 'L', '', '0832827371', 'iwanabadi@gmail.com', 'jl karapitan no11', 'iwanabadi', '01ccce480c60fcdb67b54f4509ffdb56', '', '', '', '', '', '', '', '', 'admin3.jpg', 'nonaktif'),
(28, 3, 'Budiman', 'Rahayu', 'L', '16 October 1996', '0821435784932', 'budiman@gmail.com', 'Jalan Mekar Cinta no 124', 'budiman', '456b39e6cf4fdc9bda6b84b0a0b557dd', '2019', '2020', '2015', '1', 'Jaringan', 'IT Support', 'Jalan Taman sari no 109', 'Bandung', 'admin.jpg', 'nonaktif');
<<<<<<< HEAD
-- --------------------------------------------------------
--
-- Struktur dari tabel `user_grup`
--
=======

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_grup`
--

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
CREATE TABLE `user_grup` (
  `id` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `Deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
<<<<<<< HEAD
--
-- Dumping data untuk tabel `user_grup`
--
=======

--
-- Dumping data untuk tabel `user_grup`
--

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
INSERT INTO `user_grup` (`id`, `status`, `Deskripsi`) VALUES
(1, 'Admin', 'administrator'),
(2, 'panitia', 'panitia tracer'),
(3, 'alumni', 'Alumni informatika Unla');
<<<<<<< HEAD
--
-- Indexes for dumped tables
--
=======

--
-- Indexes for dumped tables
--

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- Indeks untuk tabel `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id`);
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- Indeks untuk tabel `sub_pekerjaan`
--
ALTER TABLE `sub_pekerjaan`
  ADD PRIMARY KEY (`id`);
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- Indeks untuk tabel `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`id`);
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- Indeks untuk tabel `survei_jawaban`
--
ALTER TABLE `survei_jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pertanyaan` (`id_pertanyaan`),
  ADD KEY `id_survey` (`id_survey`);
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- Indeks untuk tabel `survei_pertanyaan`
--
ALTER TABLE `survei_pertanyaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_survey` (`id_survei`);
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- Indeks untuk tabel `tabel_grup_pertanyaan`
--
ALTER TABLE `tabel_grup_pertanyaan`
  ADD PRIMARY KEY (`id`);
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- Indeks untuk tabel `tabel_pertanyaan`
--
ALTER TABLE `tabel_pertanyaan`
  ADD PRIMARY KEY (`id`);
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- Indeks untuk tabel `user_grup`
--
ALTER TABLE `user_grup`
  ADD PRIMARY KEY (`id`);
<<<<<<< HEAD
--
-- AUTO_INCREMENT untuk tabel yang dibuang
--
=======

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- AUTO_INCREMENT untuk tabel `loker`
--
ALTER TABLE `loker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- AUTO_INCREMENT untuk tabel `sub_pekerjaan`
--
ALTER TABLE `sub_pekerjaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- AUTO_INCREMENT untuk tabel `survei`
--
ALTER TABLE `survei`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- AUTO_INCREMENT untuk tabel `survei_jawaban`
--
ALTER TABLE `survei_jawaban`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- AUTO_INCREMENT untuk tabel `survei_pertanyaan`
--
ALTER TABLE `survei_pertanyaan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- AUTO_INCREMENT untuk tabel `tabel_grup_pertanyaan`
--
ALTER TABLE `tabel_grup_pertanyaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- AUTO_INCREMENT untuk tabel `tabel_pertanyaan`
--
ALTER TABLE `tabel_pertanyaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- AUTO_INCREMENT untuk tabel `user_grup`
--
ALTER TABLE `user_grup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
<<<<<<< HEAD
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--
=======

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- Ketidakleluasaan untuk tabel `survei_jawaban`
--
ALTER TABLE `survei_jawaban`
  ADD CONSTRAINT `survei_jawaban_ibfk_1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `survei_pertanyaan` (`id`),
  ADD CONSTRAINT `survei_jawaban_ibfk_2` FOREIGN KEY (`id_survey`) REFERENCES `survei` (`id`);
<<<<<<< HEAD
=======

>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
--
-- Ketidakleluasaan untuk tabel `survei_pertanyaan`
--
ALTER TABLE `survei_pertanyaan`
  ADD CONSTRAINT `survei_pertanyaan_ibfk_1` FOREIGN KEY (`id_survei`) REFERENCES `survei` (`id`);
COMMIT;
<<<<<<< HEAD
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
=======

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
>>>>>>> e021e2be8548dc863ea72ca10b6cace0ef356541
