-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 10:13 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datakarya`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bidang`
--

CREATE TABLE `tb_bidang` (
  `ID_BIDANG` int(11) NOT NULL,
  `BIDANG_DATA` varchar(20) NOT NULL,
  `KET_BIDANG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bidang`
--

INSERT INTO `tb_bidang` (`ID_BIDANG`, `BIDANG_DATA`, `KET_BIDANG`) VALUES
(1, 'MANAGEMENT DATA', 'Konsentrasi management data'),
(2, 'JARINGAN', 'Membuat atau merancang sebuah jaringan'),
(3, 'SECURITY', 'Keamanan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `ID_DATA` int(11) NOT NULL,
  `NO_USER` varchar(20) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `JUDUL_DATA` varchar(255) NOT NULL,
  `ABSTRAK_DATA` text NOT NULL,
  `BIDANG_DATA` varchar(20) NOT NULL,
  `JENIS_DATA` varchar(20) NOT NULL,
  `TAHUN_DATA` year(4) NOT NULL,
  `NAMA_BERKAS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`ID_DATA`, `NO_USER`, `NAME`, `JUDUL_DATA`, `ABSTRAK_DATA`, `BIDANG_DATA`, `JENIS_DATA`, `TAHUN_DATA`, `NAMA_BERKAS`) VALUES
(2, '41155050160001', 'Dewi Permatasari', 'Rancang Bangun Sistem File Sharing Menggunakan Server Massage Block (SMB) Dikombinasikan Dengan Point To Point Protocol Over Ethernet (PPPOE) Server Pada Mikrotik', 'Rancang Bangun Sistem File Sharing Menggunakan Server Massage Block (SMB) Dikombinasikan Dengan Point To Point Protocol Over Ethernet (PPPOE) Server Pada Mikrotik', 'JARINGAN', 'MIKROTIK', 2020, ''),
(3, '41155050160033', 'Lora Pradita Dasrul', 'Pengujian Dan Penilaian Kerentanan Keamanan Website Darnelinc.com Menggunakan Model Dread', 'Pengujian Dan Penilaian Kerentanan Keamanan Website Darnelinc.com Menggunakan Model Dread', 'SECURITY', 'KEAMANAN WEBSITE', 2020, ''),
(4, '41155050160018', 'Bagas Badriawan', 'RANCANG BANGUN APLIKASI PENYEWAAN KENDARAAN BERBASIS ANDROID MENGGUNAKAN METODE PROTOTYPE \r\n(Studi Kasus : CV. Sari Tani Bandung)', 'Industri Jasa adalah perusahaan yang memberikan layanan jasa kepada konsumen yang membutuhkan. CV. Sari Tani merupakan salah satu perusahaan swasta yang bergerak dalam bidang jasa yang beralamatkan di Bandung, Jasa yang ditawarkan yaitu penyewaan kendaraan, salah satunya adalah mobil low mvp atau dalam kata lain mobil keluarga, yang diperuntukan untuk masyarakat umum yang ingin menyewa mobil untuk perjalanan tertentu.\r\n\r\nPada penelitian ini dirancang suatu sistem penyewaan kendaraan untuk pemesanan dan pengolahan data menggunakan metode prototype. Dengan sistem ini diharapkan dapat memudahkan staff CV. Sari Tani dalam mengolah datanya, serta sistem tersebut memberikan kemudahan untuk konsumen dalam pemesanan dikarenakan sistem bersifat online, sehingga konsumen dapat mengetahui informasi mobil secara real time. \r\n\r\nDari penelitian ini menghasilkan apalikasi penyewaan kendaraan menggunakan metode prototype. Untuk memudahkan staff CV. Sari Tani dalam melakukan pengolahan datanya.', 'MANAGEMENT DATA', 'ANDROID', 2020, ''),
(5, '41155050160108', 'Ummaya Agustina', 'SISTEM PENDUKUNG KEPUTUSAN KOPERASI SIMPAN PINJAM KARTIKA WIROTAMA MENGGUNAKAN METODE SIMPLE ADDITIVE WEIGHTHING ', 'Koperasi adalah salah satu badan usaha yang memiliki tugas untuk mensejahterakan anggota, koperasi kartika wirotama menyediakan beberapa jasa didalamnya yakni jasa simpanan uang, peminjaman uang dan toko. Pada saat penentuan pinjaman uang pihak koperasi seringkali kewalahan dalam menentukan layak tidaknya anggota menerima pinjaman uang. Untuk menunjang dalam keputusan pinjaman maka sistem pendukung keputusan diperlukan. Sistem yang akan dibuat menggunakan metode Simple Additive Weighting, akan merubah pembuat keputusan dari manual menjadi sebuah sistem yang dibuat berbasis web menggunakan framework Codeigniter dengan adanya sistem pendukung keputusan ini diharapkan dapat mempermudah pihak koperasi dalam pengambilan keputusan dan metode SAW yang digunakan diharapkan dapat membantu untuk mempercepat proses pemilihan.', 'MANAGEMENT DATA', 'CODEIGNITER', 2020, ''),
(30, '41155050160030', 'Rezza Fitria', 'RANCANG BANGUN SISTEM PENGELOLAAN DATA KARYA ILMIAH BERBASIS WEB DENGAN METODE PENCARIAN DATA MENGGUNAKAN ALGORITMA KNUTH MORRIS PRATT', 'Karya Ilmiah merupakan salah satu ciri pokok kegiatan perguruan tinggi dapat berupa tugas akhir, skripsi, tesis, disertasi, artikel, makalah, dan laporan penelitian. Karya ilmiah dapat dijadikan sebagai bahan referensi maupun sebagai bahan acuan untuk penelitian selanjutnya. Di Program Studi Teknik Informatika Universitas Langlangbuana pengelolaan data karya ilmiah belum dilakukan secara digital. Sedangkan setiap tahun karya ilmiah tersebut semakin bertambah. Diperlukan suatu sistem yang dapat mengelola dan memuat data karya ilmiah tersebut. Maka dibuatlah sebuah website dengan menggunakan metode V Model, framework CodeIgniter, pengolahan database menggunakan MySql dan fitur pencarian data menggunakan algoritma knuth-morris-pratt.                                                                                        ', 'MANAGEMENT DATA', 'CODEIGNITER', 2020, '959f32103eed1b255d8a9a0a1dd21b73.pdf'),
(31, '41155050160002', 'ABC', 'ABC', 'ABC', 'SECURITY', 'KEAMANAN WEBSITE', 2019, ''),
(32, '41155050160003', 'DEF', 'DEF', 'DEF', 'JARINGAN', 'WINBOX', 2019, ''),
(33, '41155050160004', 'GHI', 'GHI', 'GHI', 'JARINGAN', 'VMWARE', 2020, ''),
(34, '41155050160005', 'JKL', 'JKL', 'JKL', 'SECURITY', 'KEAMANAN JARINGAN', 2019, ''),
(37, '41155050160006', 'Muhamad Ridwan', 'Penyewaan Kamera', 'Kamera adalah', 'MANAGEMENT DATA', 'AI', 2019, ''),
(38, '41155050160007', 'Agil Nurazizah', 'Pendataan PKL Gasibu', 'cvkhsbvjhsvs', 'MANAGEMENT DATA', 'PHPVATIVE', 2020, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `ID_JENIS` int(11) NOT NULL,
  `BIDANG_DATA` varchar(20) NOT NULL,
  `JENIS_DATA` varchar(20) NOT NULL,
  `KET_JENIS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`ID_JENIS`, `BIDANG_DATA`, `JENIS_DATA`, `KET_JENIS`) VALUES
(1, 'MANAGEMENT DATA', 'AI', 'Artificial Intelegence'),
(2, 'MANAGEMENT DATA', 'ANDROID', 'Membuat Aplikasi Android'),
(3, 'MANAGEMENT DATA', 'CODEIGNITER', 'Membuat Website dengan Codeigniter'),
(4, 'MANAGEMENT DATA', 'PHPNATIVE', 'Membuat Website dengan PHP Native'),
(5, 'JARINGAN', 'VMWARE', 'Mengkonfigurasi Jaringan Menggunakan VMWARE'),
(6, 'JARINGAN', 'WINBOX', 'Mengkonfigurasi Jaringan Menggunakan WINBOX'),
(7, 'JARINGAN', 'MIKROTIK', 'Mengkonfigurasi Jaringan Menggunakan MIKROTIK'),
(8, 'SECURITY', 'KEAMANAN JARINGAN', 'Merancang atau menganalisis sebuah keamanan jaringan'),
(9, 'SECURITY', 'KEAMANAN WEBSITE', 'Merancang atau menganalisis sebuah keamanan jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `ID_USER` int(11) NOT NULL,
  `NO_USER` varchar(20) NOT NULL,
  `NAME` varchar(225) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `NO_TELP` varchar(20) NOT NULL,
  `LEVEL` enum('Admin','Dosen','Mahasiswa') NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`ID_USER`, `NO_USER`, `NAME`, `EMAIL`, `NO_TELP`, `LEVEL`, `PASSWORD`) VALUES
(1, '41155050160030', 'Rezza Fitria', 'rezzafitria@gmail.com', '082132442618', 'Mahasiswa', 'rezzafit'),
(2, '11223344', 'Wahyu Purnama Sari', 'wahyupurnamsari@gmail.com', '088888888888', 'Dosen', 'dosenwahyu'),
(3, '12345678', 'Admin', 'admin@gmail.com', '08989898989', 'Admin', 'admin'),
(4, '41155050160108', 'Ummaya Agustina', 'ummaya@gmail.com', '0888776556', 'Mahasiswa', 'ummaya'),
(5, '41155050160018', 'Bagas Badriawan', 'bagasbdr@gmail.com', '088888888888', 'Mahasiswa', 'bagasbdr'),
(6, '41155050160001', 'Dewi Permatasari', 'dewip@gmail.com', '088887777', 'Mahasiswa', 'dewip'),
(7, '41155050160033', 'Lora Pradita Dasrul', 'elpede@ygmail.com', '0888888', 'Mahasiswa', 'lora'),
(8, '41155050160022', 'Nadira Marsha Ramdhanty', 'nkarsiwan@gmail.com', '082235234516', 'Mahasiswa', 'nadira');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  ADD PRIMARY KEY (`ID_BIDANG`),
  ADD UNIQUE KEY `BIDANG_DATA` (`BIDANG_DATA`);

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`ID_DATA`),
  ADD UNIQUE KEY `JUDUL_DATA` (`JUDUL_DATA`),
  ADD KEY `NO_USER` (`NO_USER`),
  ADD KEY `NAME` (`NAME`),
  ADD KEY `BIDANG_DATA` (`BIDANG_DATA`);

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`ID_JENIS`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`ID_USER`),
  ADD UNIQUE KEY `NO_USER` (`NO_USER`),
  ADD UNIQUE KEY `NAME` (`NAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  MODIFY `ID_BIDANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `ID_DATA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `ID_JENIS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
