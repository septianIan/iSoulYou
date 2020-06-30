-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2019 pada 05.29
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lomba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aboutconntactsupp`
--

CREATE TABLE `aboutconntactsupp` (
  `id` int(11) NOT NULL,
  `conntactsupport` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aboutconntactsupp`
--

INSERT INTO `aboutconntactsupp` (`id`, `conntactsupport`) VALUES
(2, 'ISOULYOU merupakan sebuah aplikasi yang berbasis web, yang berguna untuk membantu pemerintahan dalam menangani kasus gangguan jiwa.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aboutcontent1`
--

CREATE TABLE `aboutcontent1` (
  `id` int(11) NOT NULL,
  `dapatMenjangkauWilayah` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aboutcontent1`
--

INSERT INTO `aboutcontent1` (`id`, `dapatMenjangkauWilayah`) VALUES
(1, 'ISOULYOU merupakan sebuah aplikasi yang berbasis web, yang berguna untuk membantu pemerintahan dalam menangani kasus gangguan jiwa.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aboutcontent2`
--

CREATE TABLE `aboutcontent2` (
  `id` int(11) NOT NULL,
  `pelayananyangbaik` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aboutcontent2`
--

INSERT INTO `aboutcontent2` (`id`, `pelayananyangbaik`) VALUES
(1, 'ISOULYOU merupakan sebuah aplikasi yang berbasis web, yang berguna untuk membantu pemerintahan dalam menangani kasus gangguan jiwa.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aboutcontent3`
--

CREATE TABLE `aboutcontent3` (
  `id` int(11) NOT NULL,
  `isiDataLaporan` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aboutcontent3`
--

INSERT INTO `aboutcontent3` (`id`, `isiDataLaporan`) VALUES
(1, 'ISOULYOU merupakan sebuah aplikasi yang berbasis web, yang berguna untuk membantu pemerintahan dalam menangani kasus gangguan jiwa.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aboutcontent4`
--

CREATE TABLE `aboutcontent4` (
  `id` int(11) NOT NULL,
  `memilihOpsi` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aboutcontent4`
--

INSERT INTO `aboutcontent4` (`id`, `memilihOpsi`) VALUES
(1, 'ISOULYOU merupakan sebuah aplikasi yang berbasis web, yang berguna untuk membantu pemerintahan dalam menangani kasus gangguan jiwa.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aboutcontent5`
--

CREATE TABLE `aboutcontent5` (
  `id` int(11) NOT NULL,
  `berangkat` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aboutcontent5`
--

INSERT INTO `aboutcontent5` (`id`, `berangkat`) VALUES
(1, 'ISOULYOU merupakan sebuah aplikasi yang berbasis web, yang berguna untuk membantu pemerintahan dalam menangani kasus gangguan jiwa.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aboutcontent6`
--

CREATE TABLE `aboutcontent6` (
  `id` int(11) NOT NULL,
  `pelayananTerbaik` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aboutcontent6`
--

INSERT INTO `aboutcontent6` (`id`, `pelayananTerbaik`) VALUES
(1, 'ISOULYOU merupakan sebuah aplikasi yang berbasis web, yang berguna untuk membantu pemerintahan dalam menangani kasus gangguan jiwa.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `noTelp` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contactus`
--

INSERT INTO `contactus` (`id`, `alamat`, `noTelp`, `email`) VALUES
(1, 'alamat', '123456789', 'email@mail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor`
--

CREATE TABLE `lapor` (
  `id` int(11) NOT NULL,
  `namaPelapor` varchar(191) NOT NULL,
  `noTelp` varchar(15) NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `jam` varchar(191) NOT NULL,
  `tanggal` varchar(191) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lapor`
--

INSERT INTO `lapor` (`id`, `namaPelapor`, `noTelp`, `alamat`, `image`, `jam`, `tanggal`, `status`) VALUES
(1, 'Septian Aditama', '0972415267', 'jl soekarno hatta', 'razia-gelandangan-dan.jpg', '02:48:35', '02-Dec-2019', 1),
(2, 'zulfikar', '654646461', 'jl sawojajar', 'th (1).jpg', '02:56:16', '02-Dec-2019', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginuser`
--

CREATE TABLE `loginuser` (
  `id` int(11) NOT NULL,
  `user` varchar(90) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loginuser`
--

INSERT INTO `loginuser` (`id`, `user`, `username`, `password`) VALUES
(1, 'admin\r\n', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `judul`, `image`, `desk`) VALUES
(16, 'I Soul You', 'bg1.jpg', 'ISOULYOU merupakan sebuah aplikasi yang berbasis web, yang berguna untuk membantu pemerintahan dalam menangani kasus gangguan jiwa.'),
(17, 'I Soul You', 'bg3.jpg', 'ISOULYOU merupakan sebuah aplikasi yang berbasis web, yang berguna untuk membantu pemerintahan dalam menangani kasus gangguan jiwa. ISOULYOU merupakan sebuah aplikasi yang berbasis web, yang berguna untuk membantu pemerintahan dalam menangani kasus gangguan jiwa.'),
(18, 'Sang Babi update', 'IMG_20191028_182206.jpg', 'desk update');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanya`
--

CREATE TABLE `tanya` (
  `id` int(11) NOT NULL,
  `namaKamu` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `jam` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanya`
--

INSERT INTO `tanya` (`id`, `namaKamu`, `email`, `subject`, `pesan`, `jam`, `tanggal`, `status`) VALUES
(1, 'ZUlfikar', 'admin@mail.com', 'subject', 'pesan', '10:18:18', '2019-12-02', 1),
(2, 'ian', 'ianditama141@gmail.c', 'EHEHEHE', 'mass', '10:26:18', '02-Dec-2019', 1),
(3, 'qqq', 'qqq', 'qq', '1000 Lebih orang yang mengakhiri hidupnya akibat keadaan mental yang tidak stabil. maka dari itu, ayo lapor atau konsultasi di ISOULYOU', '12:15:31', '02-Dec-2019', 1),
(4, 'SONI NUR', 'ian@gmail.com', 'subject', 'pesan', '02:14:20', '03-Dec-2019', 0),
(5, 'LISA INDAH WARDANI', 'lisaindahwardani31@g', 'Pelapor', 'Mohon cepat ditanggapi orang istimewa tersebut sering merusak barang -arang di lingkungan saya.', '02:22:34', '03-Dec-2019', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentangkami`
--

CREATE TABLE `tentangkami` (
  `id` int(11) NOT NULL,
  `tentangKami` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentangkami`
--

INSERT INTO `tentangkami` (`id`, `tentangKami`) VALUES
(1, 'SOULYOU merupakan sebuah aplikasi yang berbasis web, yang berguna untuk membantu pemerintahan dalam menangani kasus gangguan jiwa.\r\n\r\nGangguan Jiwa di Indonesia sendiri sudah tidak dapat dipandang sebelah matalagi, sudah banyak orang bunuh diri akibat tekanan dari lingkungan sekitar dan penanganan gangguan jiwa yang dipasung merupakan cara yang salah. maka segera konsultasikan dan laporkan.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aboutconntactsupp`
--
ALTER TABLE `aboutconntactsupp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aboutcontent1`
--
ALTER TABLE `aboutcontent1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aboutcontent2`
--
ALTER TABLE `aboutcontent2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aboutcontent3`
--
ALTER TABLE `aboutcontent3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aboutcontent4`
--
ALTER TABLE `aboutcontent4`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aboutcontent5`
--
ALTER TABLE `aboutcontent5`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aboutcontent6`
--
ALTER TABLE `aboutcontent6`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `loginuser`
--
ALTER TABLE `loginuser`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tanya`
--
ALTER TABLE `tanya`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tentangkami`
--
ALTER TABLE `tentangkami`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aboutconntactsupp`
--
ALTER TABLE `aboutconntactsupp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `aboutcontent1`
--
ALTER TABLE `aboutcontent1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `aboutcontent2`
--
ALTER TABLE `aboutcontent2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `aboutcontent3`
--
ALTER TABLE `aboutcontent3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `aboutcontent4`
--
ALTER TABLE `aboutcontent4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `aboutcontent5`
--
ALTER TABLE `aboutcontent5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `aboutcontent6`
--
ALTER TABLE `aboutcontent6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `loginuser`
--
ALTER TABLE `loginuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tanya`
--
ALTER TABLE `tanya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tentangkami`
--
ALTER TABLE `tentangkami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
