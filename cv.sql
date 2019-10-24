-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Okt 2019 pada 03.52
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `biodata_id` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `place` varchar(255) NOT NULL,
  `date` varchar(10) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `moto` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `resume` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`biodata_id`, `name`, `sex`, `place`, `date`, `religion`, `moto`, `address`, `location`, `email`, `phone`, `resume`, `foto`, `perubahan`) VALUES
('5d49a3ea21', 'reynaldi fp', 'Male', 'lowokwaru', '06-08-2000', 'Islam', 'pelajar', 'RT/RW 03/02 jatimulyo', 'Malang, Jawa Timur, Indonesia', 'reynaldifp2000@gmail.com', '0341484336', '<p>pelajar rpl.</p>', '5d49a3ea21.jpg', '2019-10-23 07:34:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `education_id` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`education_id`, `nama`, `tahun`, `keterangan`, `perubahan`) VALUES
('5d5023bb56', 'sd ketawanggedhe 2', '2006 - 2012', '<p>sekolah dasar</p>', '2019-10-23 07:37:50'),
('5d502450c3', 'smp lab um malang', '2013-2016', '<p>sekolah menengah pertama</p>', '2019-10-23 07:39:15'),
('5d50247e28', 'smkn5 malang', '2007 - 2010', '<p>Vocational High School in it</p>', '2019-10-23 07:39:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `experience`
--

CREATE TABLE `experience` (
  `experiencce_id` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `experience`
--

INSERT INTO `experience` (`experiencce_id`, `nama`, `tahun`, `keterangan`, `perubahan`) VALUES
('5d50356a30', 'sd ketawangedhe', '2006-2013', '<p>pelajar</p>', '2019-10-24 01:43:57'),
('5d50358411', 'smp lab um', '2013-2017', '<p>pelajar</p>', '2019-10-24 01:44:30'),
('5db10220e6', 'smkn 5 malang', '2017-2019', '<p>pelajar</p>', '2019-10-24 01:45:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `info_id` varchar(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `value` varchar(10) NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`info_id`, `judul`, `icon`, `value`, `perubahan`) VALUES
('5d50391d14', 'PROJECT WORKING', 'icon-briefcase', '2', '2019-08-11 15:56:31'),
('5d5039caa9', 'PROJECT DONE', 'icon-check', '15', '2019-08-11 15:52:42'),
('5d5039ebad', 'AWARDS RECEIVED', 'icon-diamond', '10', '2019-08-11 15:53:15'),
('5d503a0673', 'HAPPY CLIENTS', 'icon-heart', '15', '2019-08-11 15:53:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `register_id` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `member_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `portofolio_id` varchar(10) NOT NULL,
  `nama` text NOT NULL,
  `katagori` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`portofolio_id`, `nama`, `katagori`, `link`, `foto`, `perubahan`) VALUES
('5d504106c2', 'Pejuangreceh', 'website', 'http://pejuangreceh.com/', '5d504106c2.jpg', '2019-08-11 16:34:09'),
('5d50418a41', 'POLMANBABEL', 'website', 'https://www.polman-babel.ac.id/', '5d50418a41.jpg', '2019-08-11 16:34:45'),
('5d50444b0f', 'Bromo', 'website', 'http://bromotenggersemeru.org/', '5d50444b0f.jpg', '2019-10-10 04:28:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill`
--

CREATE TABLE `skill` (
  `id` int(1) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skill`
--

INSERT INTO `skill` (`id`, `nama`, `icon`, `keterangan`, `perubahan`) VALUES
(1, 'FULL STACK DEVELOPER', 'icon-grid', '<p>Build front-end and back-end website and application</p>', '2019-10-10 03:27:57'),
(2, 'GRAPHIC DESIGN', 'icon-layers', '<p>Web desain, Movie &amp; multimedia, Product identity, and Packaging</p>', '2019-10-10 03:28:46'),
(3, 'BUSINESS BRANDING', 'icon-briefcase', '<p>Build a business plan to meet the desired target company</p>', '2019-10-10 03:28:14'),
(4, 'CONSULTANCY', 'icon-bubbles', '<p>Providing advisory services in the area of IT expertise</p>', '2019-10-10 03:28:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosmed`
--

CREATE TABLE `sosmed` (
  `id` int(1) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `perubahan` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sosmed`
--

INSERT INTO `sosmed` (`id`, `nama`, `link`, `icon`, `perubahan`) VALUES
(1, 'Facebook', 'https://www.facebook.com/53N5451', 'facebook', '0000-00-00 00:00:00'),
(2, 'Twitter', 'https://twitter.com/dianpw6901', 'twitter', '0000-00-00 00:00:00'),
(3, 'Instagram', 'https://www.instagram.com/dianpw/', 'instagram', '0000-00-00 00:00:00'),
(4, 'linkedin', 'https://www.linkedin.com/in/dian-purwanto-1ab59362/', 'linkedin', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`biodata_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experiencce_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`portofolio_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
