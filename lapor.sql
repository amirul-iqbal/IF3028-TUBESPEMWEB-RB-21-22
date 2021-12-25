-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2021 pada 16.51
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `aspek` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `isi`, `aspek`, `tanggal`, `file`) VALUES
(1, 'Cinta itu perang, yakni perang yang hebat dalam rohani manusia. Jika ia menang, akan didapati orang yang tulus ikhlas, luas pikiran, sabar dan tenang hati. Jika ia kalah, akan didapati orang yang putus asa, sesat, lemah hati, kecil perasaan dan bahkan kadang-kadang hilang kepercayaan pada diri sendiri.Cinta itu perang, yakni perang yang hebat dalam rohani manusia. Jika ia menang, akan didapati orang yang tulus ikhlas, luas pikiran, sabar dan tenang hati. Jika ia kalah, akan didapati orang yang putus asa, sesat, lemah hati, kecil perasaan dan bahkan kadang-kadang hilang kepercayaan pada diri sendiri.Cinta itu perang, yakni perang yang hebat dalam rohani manusia. Jika ia menang, akan didapati orang yang tulus ikhlas, luas pikiran, sabar dan tenang hati. Jika ia kalah, akan didapati orang yang putus asa, sesat, lemah hati, kecil perasaan dan bahkan kadang-kadang hilang kepercayaan pada diri sendiri.', 'Infrastruktur', '2021-12-25 21:02:48', 'EjJV6cbUwAIRXJr.jpg'),
(2, 'Indonesia ke final Piala AFF 2020. Skuad Garuda melaju usai mengalahkan tuan rumah Singapura dengan skor 4-2 di semifinal leg kedua.\r\nBertanding di National Stadium, Singapura, Sabtu (25/12/2021), Indonesia mendominasi sejak awal. Ezra Walian membawa tim Merah Putih memimpin di menit ke-11.\r\nDi akhir babak pertama, Singapura bermain dengan 10 orang. Safuwan Baharudin diusir usai menyikut Rizky Ridho. Namun, tuan rumah bisa menyamakan skor tak lama berselang, lewat Song Ui-young. Skor 1-1 bertahan hingga jeda.\r\nBaca artikel sepakbola, \"Kalahkan Singapura, Indonesia ke Final Piala AFF 2020!\" selengkapnya https://sport.detik.com/sepakbola/liga-indonesia/d-5870613/kalahkan-singapura-indonesia-ke-final-piala-aff-2020.', 'mahasiswa', '2021-12-25 22:51:21', 'indonesia-vs-singapura.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
