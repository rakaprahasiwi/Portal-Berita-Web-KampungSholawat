-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2019 at 07:37 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6323198_kamsholnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) UNSIGNED NOT NULL,
  `id_kategori` int(3) UNSIGNED NOT NULL DEFAULT '0',
  `judul` varchar(100) NOT NULL DEFAULT '',
  `gambar` text NOT NULL,
  `isi` text NOT NULL,
  `pengirim` varchar(15) NOT NULL DEFAULT '',
  `tanggal` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `byk_tonton` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul`, `gambar`, `isi`, `pengirim`, `tanggal`, `byk_tonton`) VALUES
(8, 4, 'Perang', './img/data/11.jpg', 'Dunia ini\r\n', 'Sukopo', '2019-01-21 03:14:15', 8),
(9, 5, 'Tawuran', './img/data/7.jpg', 'Banyak teror disini\r\n', 'Herman', '2019-01-04 14:02:13', 2),
(14, 6, 'Edit', './img/data/8.jpg', 'Edithgbuoyioypibypih ohuoguigou gougougiihvklhvhvi vivo vyi vyov viov o hvk hvk h vEdithgbuoyioypibypih ohuoguigou gougougiihvklhvhvi vivo vyi vyov viov o hvk hvk h vEdithgbuoyioypibypih ohuoguigou gougougiihvklhvhvi vivo vyi vyov viov o hvk hvk h vEdithgbuoyioypibypih ohuoguigou gougougiihvklhvhvi vivo vyi vyov viov o hvk hvk h vEdithgbuoyioypibypih ohuoguigou gougougiihvklhvhvi vivo vyi vyov viov o hvk hvk h vEdithgbuoyioypibypih ohuoguigou gougougiihvklhvhvi vivo vyi vyov viov o hvk hvk h vEdithgbuoyioypibypih ohuoguigou gougougiihvklhvhvi vivo vyi vyov viov o hvk hvk h vEdithgbuoyioypibypih ohuoguigou gougougiihvklhvhvi vivo vyi vyov viov o hvk hvk h vEdithgbuoyioypibypih ohuoguigou gougougiihvklhvhvi vivo vyi vyov viov o hvk hvk h vEdithgbuoyioypibypih ohuoguigou gougougiihvklhvhvi vivo vyi vyov viov o hvk hvk h vEdithgbuoyioypibypih ohuoguigou gougougiihvklhvhvi vivo vyi vyov viov o hvk hvk h vEdithgbuoyioypibypih ohuoguigou gougougiihvklhvhvi vivo vyi vyov viov o hvk hvk h vEdithgbuoyioypibypih ohuoguigou gougougiihvklhvhvi vivo vyi vyov viov o hvk hvk h v\r\n', 'Edit', '2019-01-06 15:42:38', 2),
(16, 6, 'faf', './img/data/wall.jpg', 'fasfsafsaf\r\n', 'lagi', '2019-01-06 18:02:18', 2),
(17, 6, 'Heboh raja raja arab beli emas', './img/data/h.jpg', 'mas mas nya mahal sekali\r\n', 'piter', '2019-01-08 09:20:16', 6),
(20, 6, 'mantul', './img/data/h.jpg', 'ggggggg\r\n', 'gdg', '2019-01-08 09:33:44', 7),
(18, 5, 'fadfadf', './img/data/d.jpg', 'fsgsdg\r\n', 'fadfaf', '2019-01-08 09:24:00', 4),
(19, 5, 'gadga', './img/data/h.jpg', 'gdgadga\r\n', 'fhaha', '2019-01-08 09:28:03', 2),
(21, 5, 'fafaf', './img/data/2.jpg', 'fasfasfsa\r\n', 'fafaf', '2019-01-08 09:41:41', 4);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id_download` int(3) NOT NULL,
  `nama_file` varchar(30) NOT NULL,
  `nm_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id_download`, `nama_file`, `nm_path`) VALUES
(7, 'Sejarah Masjid ', './filedownload/Pertemuan 11.pdf'),
(8, 'Politik Islam', './filedownload/responsi SA kelas sore.pdf'),
(9, 'Tata cara menikah', './filedownload/Pertemuan 11.pdf'),
(10, 'Belajar ngaji', './filedownload/responsi SA kelas sore.pdf'),
(11, 'Tuntunan Sholat', './filedownload/1202.5289.pdf'),
(21, 'Kumpulan Doa-doa', './filedownload/responsi SA kelas sore.pdf'),
(23, 'Sejarah Islam di Indonesia', './filedownload/Pertemuan 11.pdf'),
(24, 'Jadwal Sholat 2019', './filedownload/1202.5289.pdf'),
(25, 'Bacaan Ngaji Pemula', './filedownload/4608-9729-1-PB.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(3) NOT NULL,
  `nama_jadwal` varchar(20) NOT NULL,
  `info_lanjut` text NOT NULL,
  `alamat_jadwal` text NOT NULL,
  `ket_jadwal` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nama_jadwal`, `info_lanjut`, `alamat_jadwal`, `ket_jadwal`) VALUES
(1, 'Tabligh Akbar', 'Harap membawa makanan sendiri', 'Jalan Pemuda Kota Semarang', '2019-01-24'),
(2, 'Dakwah Hijrah', 'Berpakain muslim', 'Masjid Agung Jawa Tengah', '2019-01-13'),
(4, 'Kunjungan Pesantren', 'Berpakaian busana muslim dan membawa sajadah sendiri', 'Tembalang', '2019-01-05'),
(8, 'Pengajian Rutin', 'Dihadiri para habib', 'Masjid Agung Jawa Tengah', '2019-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) UNSIGNED NOT NULL,
  `nm_kategori` varchar(30) NOT NULL DEFAULT '',
  `deskripsi` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`, `deskripsi`) VALUES
(4, 'Nasional', 'nasional'),
(5, 'Daerah', 'daerah'),
(6, 'Internasional', 'internasional');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(3) NOT NULL,
  `id_berita` int(4) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `komen` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_berita`, `nama`, `email`, `komen`, `tanggal`) VALUES
(11, 21, 'coba', 'kdnal@kgna', 'gndsklgnsldnglsdgn', '2019-01-08 20:59:48'),
(12, 21, 'komen', 'sjn@jgn.vom', 'jwivrjhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh\r\nfiegewigegwek\'geuwgw\r\ngwehgwehg', '2019-01-08 21:00:55'),
(13, 14, 'john', 'john@gmai.vom', 'komentar', '2019-01-08 21:02:03'),
(14, 20, 'tes', 'tes@gma.co', 'fsjgskjgnksdfad', '2019-01-08 21:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(3) NOT NULL,
  `nama_kontak` varchar(50) NOT NULL,
  `email_kontak` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama_kontak`, `email_kontak`, `telepon`, `pesan`) VALUES
(2, 'tes', 'tes@gmaul.com', '319581398', 'apa aaubanfkas'),
(3, 'leo', 'leo@gmail.com', '038410358708', 'semoga dapat A. amiin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'cobaa', '5ad33b6afab4c22a186a711e425a5bab'),
(6, 'raka p', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'tambah', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(3) NOT NULL,
  `nama_video` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `nama_video`, `link`) VALUES
(2, 'Ya Nabi Salam', 'https://www.youtube.com/embed/pJhfNnYXr4g'),
(3, 'Pernikahan Raja Dunia', 'https://www.youtube.com/embed/DSA9qFhl47c'),
(4, 'Law Kana Bainanal Habib', 'https://www.youtube.com/embed/W5OcxPOrQtU'),
(5, 'Maher Zain - Thank You Allah', 'https://www.youtube.com/embed/RBrdl0v_anc');

-- --------------------------------------------------------

--
-- Table structure for table `zawiyah`
--

CREATE TABLE `zawiyah` (
  `id_zawiyah` int(3) NOT NULL,
  `nama_zawiyah` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `link_maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zawiyah`
--

INSERT INTO `zawiyah` (`id_zawiyah`, `nama_zawiyah`, `alamat`, `email`, `telp`, `link_maps`) VALUES
(3, 'john', 'jalan madu', 'fff@gmail.com', '13413515135', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.0634763269819!2d110.40911352916628!3d-6.979338399684863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4c690900c9%3A0xc35da2c42f8cc0a3!2sJl.+Sadewa+3+No.17%2C+Pendrikan+Kidul%2C+Semarang+Tengah%2C+Kota+Semarang%2C+Jawa+Tengah+50131!5e0!3m2!1sid!2sid!4v1547038302203'),
(4, 'Toti', 'qdqdgwgvwgwv', 'toti@gmaul.com', '315151', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.0567222989476!2d110.40835972916622!3d-6.982530499684723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ec8e324c3%3A0x7bc885e26e2af4ac!2sKelompok+Bermain+Kartikasiwi!5e0!3m2!1sid!2sid!4v1547104684948'),
(5, 'matic', 'panturra', 'matic@gmail.com', '0927461718', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.0550970735911!2d110.4092269291502!3d-6.983298399684696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4edd919575%3A0xa367f91b9f54cb02!2sJl.+Bukan%2C+Sekayu%2C+Semarang+Tengah%2C+Kota+Semarang%2C+Jawa+Tengah+50132!5e0!3m2!1sid!2sid!4v1547104748932'),
(6, 'mali', 'tugu muda', 'mali@gmai.con', '087205730', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.0505169563629!2d110.41058682915018!3d-6.985461999684596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4f831ec863%3A0xb5fe7a0e026ddf82!2sAvila!5e0!3m2!1sid!2sid!4v1547104788314'),
(7, 'Masjid Agung Jawa Tengah', 'Jl. Gajah Raya, Sambirejo, Gayamsari, Kota Semarang, Jawa Tengah 50166', 'majt@mail.com', '(024) 6725412', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.218953282466!2d110.4429353143283!3d-6.983467894955105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ca91bb1aaad%3A0x6d8e7a3ecfc69cc8!2sMasjid+Agung+Jawa+Tengah!5e0!3m2!1sid!2sid!4v1547134781949');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `zawiyah`
--
ALTER TABLE `zawiyah`
  ADD PRIMARY KEY (`id_zawiyah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `zawiyah`
--
ALTER TABLE `zawiyah`
  MODIFY `id_zawiyah` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
