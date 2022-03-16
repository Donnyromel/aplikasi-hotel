-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Mar 2022 pada 02.17
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(50) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `gambar`, `keterangan`) VALUES
(567, 'Wifi, Bathub, Breakfast, Kolam Renang', 'kamar4.jpg', 'hdfjsdhj'),
(4534, 'Wifi, Bathub, Breakfast, Kolam Renang', 'mio.jpg', 'hdfjsdhj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) DEFAULT NULL,
  `nama_hotel` varchar(50) DEFAULT NULL,
  `alamat_jalan` text DEFAULT NULL,
  `kabupaten` text DEFAULT NULL,
  `provinsi` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `kota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `alamat_jalan`, `kabupaten`, `provinsi`, `telepon`, `email`, `website`, `kota`) VALUES
(1, 'Hotel Hebat', 'Jalan Nitikan Baru', 'Yogyakarta', 'DI Yogyakarta', '0274370850', 'bron12@gmail.com', 'hotelhebat.netlify.app', 'Yogyakarta'),
(8784, 'Lingga', 'Jalan Masjid Besar,Rt042,Rw010,Purbayan,Kotagede,Yogyakarta', 'Yogyakarta', 'Yogyakarta', '083157744291', 'coeg22@gmaiil.com', 'ryu.netlify.app', 'Yogyakarta'),
(43242, 'Hayamuruk', 'Jalan Yos SUdarso', 'Bima', 'Nusa Tenggara Barat', '087656432122', 'a', 'yui.co.id', 'Bima'),
(231, 'Bro', 'Jalan Masjid Besar,Rt042,Rw010,Purbayan,Kotagede,Yogyakarta', 'Yogyakarta', 'DI Yogyakarta', '083157744291', 'coeg22@gmaiil.com', 'ryu.netlify.app', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `id_kamar_tipe` int(11) DEFAULT NULL,
  `nomor_kamar` int(11) DEFAULT NULL,
  `max_dewasa` int(11) DEFAULT NULL,
  `max_anak` int(11) DEFAULT NULL,
  `status_kamar` enum('kosong','terisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `id_kamar_tipe`, `nomor_kamar`, `max_dewasa`, `max_anak`, `status_kamar`) VALUES
(13, 1, 28, 1, 2, 'terisi'),
(2001, 200, 222, 3, 2, 'terisi'),
(8976, 8976, 120, 3, 0, 'terisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar_tipe`
--

CREATE TABLE `kamar_tipe` (
  `id_kamar_tipe` int(11) NOT NULL,
  `nama_kamar_tipe` varchar(50) DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `harga` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar_tipe`
--

INSERT INTO `kamar_tipe` (`id_kamar_tipe`, `nama_kamar_tipe`, `fasilitas`, `gambar`, `harga`) VALUES
(4, 'Family Room', 'Kamar ukuran 45m2, TV, AC, telepon, wifi, kamar mandi, bathtub, kulkas, room service, cleaning service, breakfast, swimming pool, dan air mineral', 'kamar6.jpg', 'Rp.850.000.00'),
(6, 'Double Room', 'Kamar ukuran 40m2, TV, AC, Wifi, DVD player, bed/twin bed, breakfast, kopi/teh & air mineral, kamar mandi,  bathtub dan air panas', 'kamar7.jpg', 'Rp.550.000.00'),
(123, 'Single Room', 'Kamar ukuran 37m2, TV, AC, Kamar Mandi, Kopi, & Air Mineral', 'kamar8.jpg', 'Rp.850.000.00'),
(200, 'Twin Room', 'Kamar ukuran 45m2, TV, AC, telepon, wifi, kamar mandi, bathtub, kulkas, room service, cleaning service, breakfast, swimming pool, dan air mineral', 'kamar6.jpg', 'Rp.550.000.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `id_tamu` int(11) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `biaya` varchar(11) DEFAULT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `id_tamu`, `check_in`, `check_out`, `biaya`, `time_in`, `time_out`) VALUES
(231, 212, '2022-02-25', '2022-02-26', 'Rp. 250.000', '00:00:14', '00:00:12'),
(2003, 2003, '0000-00-00', '0000-00-00', 'Rp.250.000', '00:00:00', '00:00:00'),
(4534, 453, '2022-02-25', '2022-02-26', 'Rp. 250.000', '19:20:00', '21:23:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `tipe_identitas` varchar(20) DEFAULT NULL,
  `kewarganegaraan` enum('wni','wna') DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nik`, `nama_lengkap`, `tipe_identitas`, `kewarganegaraan`, `alamat`, `provinsi`, `no_telp`, `email`) VALUES
(2002, '123', 'Coeg', 'Wirausaha', 'wni', 'Jalan Masjid Besar,Rt042,Rw010,Purbayan,Kotagede,Y', 'Yogyakarta', '089765443452', 'coeg22@gmaiil.com'),
(23222, '2003', 'Ahmad Musa', 'KTP', 'wni', 'Jalan Masjid Besar,Rt042,Rw010,Purbayan,Kotagede,Yogyakarta', 'DI Yogyakarta', '083157744291', 'Yuu23@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `level` enum('Admin','Resepsionis') DEFAULT NULL,
  `akses_terakhir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`, `akses_terakhir`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Admin', '2022-01-29'),
(2, 'cs1', '21232f297a57a5a743894a0e4a801fc3', 'Customer Service 1', 'Resepsionis', '2022-01-29'),
(123, '2131', 'a869ccbcbd9568808b8497e28275c7c8', 'Romel', 'Admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`) USING BTREE;

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`) USING BTREE;

--
-- Indeks untuk tabel `kamar_tipe`
--
ALTER TABLE `kamar_tipe`
  ADD PRIMARY KEY (`id_kamar_tipe`) USING BTREE;

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`) USING BTREE;

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4535;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98980;

--
-- AUTO_INCREMENT untuk tabel `kamar_tipe`
--
ALTER TABLE `kamar_tipe`
  MODIFY `id_kamar_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9010;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7700;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23223;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4533;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
