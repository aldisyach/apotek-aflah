-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2020 pada 09.25
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aflah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `is_obat`
--

CREATE TABLE `is_obat` (
  `kode_obat` varchar(7) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `is_obat`
--

INSERT INTO `is_obat` (`kode_obat`, `nama_obat`, `kategori`, `harga_beli`, `harga_jual`, `satuan`, `stok`, `created_user`, `created_date`, `updated_user`, `updated_date`) VALUES
('B000001', 'Albusmin', 'Bebas Tablet', 65000, 65000, 'Strip', 50, 1, '2020-08-19 12:19:42', 1, '2020-08-19 12:19:42'),
('B000002', 'Adem Sari', 'Bebas Tablet', 2500, 2500, 'Kotak', 65, 1, '2020-08-19 12:20:24', 1, '2020-08-19 12:46:48'),
('B000003', 'Alphamol', 'Bebas Tablet', 4000, 4000, 'Strip', 50, 1, '2020-08-19 12:20:56', 1, '2020-08-19 12:20:56'),
('B000004', 'Alpara tab', 'Bebas Tablet', 8000, 8000, 'Strip', 50, 1, '2020-08-19 12:21:33', 1, '2020-08-19 12:21:33'),
('B000005', 'Ambeven', 'Bebas Tablet', 17000, 17000, 'Strip', 50, 1, '2020-08-19 12:22:00', 1, '2020-08-19 12:41:38'),
('B000006', 'Antangin Tablet', 'Bebas Tablet', 3000, 3000, 'Strip', 50, 1, '2020-08-19 12:22:23', 1, '2020-08-19 12:22:23'),
('B000007', 'Antimo Tablet', 'Bebas Tablet', 5000, 5000, 'Strip', 50, 1, '2020-08-19 12:22:41', 1, '2020-08-19 12:22:41'),
('B000008', 'Asifid kapsul', 'Bebas Tablet', 24000, 24000, 'Strip', 50, 1, '2020-08-19 12:23:11', 1, '2020-08-19 12:23:11'),
('B000009', 'Antasida tablet', 'Bebas Tablet', 7000, 7000, 'Strip', 50, 1, '2020-08-19 12:24:20', 1, '2020-08-19 12:24:20'),
('B000010', 'Atumy tablet', 'Bebas Tablet', 3000, 3000, 'Strip', 50, 1, '2020-08-19 12:24:40', 1, '2020-08-19 12:24:40'),
('B000011', 'Aspilet', 'Bebas Tablet', 7500, 7500, 'Strip', 50, 1, '2020-08-19 12:24:59', 1, '2020-08-19 12:24:59'),
('B000012', 'Alleron', 'Bebas Tablet', 2000, 2000, 'Strip', 50, 1, '2020-08-19 12:25:34', 1, '2020-08-19 12:25:34'),
('B000013', 'Becom-c', 'Bebas Tablet', 16000, 16000, 'Strip', 50, 1, '2020-08-19 12:25:58', 1, '2020-08-19 12:25:58'),
('B000014', 'Biolysin anggur', 'Bebas Tablet', 15000, 15000, 'Strip', 50, 1, '2020-08-19 12:26:21', 1, '2020-08-19 12:26:21'),
('B000015', 'Biolysin jeruk', 'Bebas Tablet', 15000, 15000, 'Strip', 50, 1, '2020-08-19 12:26:35', 1, '2020-08-19 12:26:35'),
('B000016', 'Biolysin stroberi', 'Bebas Tablet', 15000, 15000, 'Strip', 50, 1, '2020-08-19 12:26:57', 1, '2020-08-19 12:26:57'),
('B000017', 'Biogastron', 'Bebas Tablet', 5000, 5000, 'Strip', 50, 1, '2020-08-19 12:27:26', 1, '2020-08-19 12:27:26'),
('B000018', 'Bisolvon tab 40\'s', 'Bebas Tablet', 12000, 12000, 'Strip', 50, 1, '2020-08-19 12:27:49', 1, '2020-08-19 12:27:49'),
('B000019', 'Bisolvon tab 100\'s', 'Bebas Tablet', 24000, 24000, 'Strip', 50, 1, '2020-08-19 12:28:08', 1, '2020-08-19 12:28:08'),
('B000020', 'Bodrex', 'Bebas Tablet', 4000, 4000, 'Strip', 50, 1, '2020-08-19 12:28:27', 1, '2020-08-19 12:28:27'),
('B000021', 'Bodrex Extra', 'Bebas Tablet', 2500, 2500, 'Strip', 50, 1, '2020-08-19 12:28:45', 1, '2020-08-19 12:28:45'),
('B000022', 'Bodrex Batuk Berdahak', 'Bebas Tablet', 2000, 2000, 'Strip', 50, 1, '2020-08-19 12:29:10', 1, '2020-08-19 12:29:10'),
('B000023', 'Bodrex Flu Batuk Tak Berdahak', 'Bebas Tablet', 2000, 2000, 'Strip', 50, 1, '2020-08-19 12:29:30', 1, '2020-08-19 12:29:30'),
('B000024', 'Bodrex Migra', 'Bebas Tablet', 2500, 2500, 'Strip', 50, 1, '2020-08-19 12:29:44', 1, '2020-08-19 12:29:44'),
('B000025', 'Bodrexin tab', 'Bebas Tablet', 4500, 4500, 'Strip', 50, 1, '2020-08-19 12:30:03', 1, '2020-08-19 12:30:03'),
('B000026', 'Bufantacid tab', 'Bebas Tablet', 2500, 2500, 'Strip', 50, 1, '2020-08-19 12:30:27', 1, '2020-08-19 12:30:27'),
('B000027', 'Biovisin', 'Bebas Tablet', 30000, 30000, 'Strip', 50, 1, '2020-08-19 12:30:47', 1, '2020-08-19 12:30:47'),
('B000028', 'Bronkis tab', 'Bebas Tablet', 2000, 2000, 'Strip', 50, 1, '2020-08-19 12:31:04', 1, '2020-08-19 12:31:04'),
('B000029', 'Bronsolvan tablet', 'Bebas Tablet', 5000, 5000, 'Strip', 50, 1, '2020-08-19 12:31:26', 1, '2020-08-19 12:31:26'),
('B000030', 'Calcifar', 'Bebas Tablet', 2500, 2500, 'Strip', 50, 1, '2020-08-19 12:31:50', 1, '2020-08-19 12:31:50'),
('B000031', 'Calcivar plus', 'Bebas Tablet', 3000, 3000, 'Strip', 50, 1, '2020-08-19 12:32:18', 1, '2020-08-19 12:32:18'),
('B000032', 'Caviplex tab', 'Bebas Tablet', 5000, 5000, 'Strip', 50, 1, '2020-08-19 12:33:00', 1, '2020-08-19 12:33:00'),
('B000033', 'CDR Eff 10\'s', 'Bebas Tablet', 44000, 44000, 'Strip', 50, 1, '2020-08-19 12:33:39', 1, '2020-08-19 12:33:39'),
('B000034', 'CDR Eff 15\'s', 'Bebas Tablet', 60000, 60000, 'Strip', 50, 1, '2020-08-19 12:33:59', 1, '2020-08-19 12:33:59'),
('B000035', 'Ciflon Kapl', 'Bebas Tablet', 65000, 65000, 'Strip', 50, 1, '2020-08-19 12:34:21', 1, '2020-08-19 12:34:21'),
('B000036', 'CTM tab 4mg', 'Bebas Tablet', 2000, 2000, 'Strip', 50, 1, '2020-08-19 12:34:44', 1, '2020-08-19 12:34:44'),
('B000037', 'Contrexyn', 'Bebas Tablet', 1000, 1000, 'Strip', 50, 1, '2020-08-19 12:35:06', 1, '2020-08-19 12:35:06'),
('B000038', 'Curcurma tablet', 'Bebas Tablet', 14000, 14000, 'Strip', 50, 1, '2020-08-19 12:35:21', 1, '2020-08-19 12:35:21'),
('B000039', 'Custodiol', 'Bebas Tablet', 6000, 6000, 'Strip', 50, 1, '2020-08-19 12:35:41', 1, '2020-08-19 12:35:41'),
('B000040', 'Cerebrovit x cel', 'Bebas Tablet', 19000, 19000, 'Strip', 50, 1, '2020-08-19 12:36:12', 1, '2020-08-19 12:36:12'),
('B000041', 'Combatrin tablet', 'Bebas Tablet', 16000, 16000, 'Strip', 50, 1, '2020-08-19 12:36:30', 1, '2020-08-19 12:36:30'),
('B000042', 'Combatrin sirup', 'Bebas Tablet', 19000, 19000, 'Strip', 50, 1, '2020-08-19 12:36:46', 1, '2020-08-19 12:36:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `is_obat_keluar`
--

CREATE TABLE `is_obat_keluar` (
  `kode_transaksi_keluar` varchar(15) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `kode_obat` varchar(7) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `is_obat_masuk`
--

CREATE TABLE `is_obat_masuk` (
  `kode_transaksi` varchar(15) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `kode_obat` varchar(7) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `is_obat_masuk`
--

INSERT INTO `is_obat_masuk` (`kode_transaksi`, `tanggal_masuk`, `kode_obat`, `jumlah_masuk`, `created_user`, `created_date`) VALUES
('TM-2020-0000001', '2020-08-19', 'B000002', 15, 1, '2020-08-19 12:46:48');

--
-- Trigger `is_obat_masuk`
--
DELIMITER $$
CREATE TRIGGER `delete_barang_masuk` AFTER DELETE ON `is_obat_masuk` FOR EACH ROW BEGIN
 UPDATE is_obat
 SET stok = stok - OLD.jumlah_masuk
 WHERE
 kode_obat = OLD.kode_obat;
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `is_users`
--

CREATE TABLE `is_users` (
  `id_user` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `hak_akses` enum('Super Admin','Manajer','Gudang') NOT NULL,
  `status` enum('aktif','blokir') NOT NULL DEFAULT 'aktif',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `is_users`
--

INSERT INTO `is_users` (`id_user`, `username`, `nama_user`, `password`, `email`, `telepon`, `foto`, `hak_akses`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Aldi Yansyach', '507c0185a5131ca82acd3b648177b0cf', 'aldi.yansyachh@gmail.com', '085774205404', 'cipamingkis-love.jpeg', 'Super Admin', 'aktif', '2017-04-01 08:15:15', '2020-10-12 07:20:06'),
(2, 'Owner', 'Owner', '0daec31855ff47de32f99ee04511fcff', '', '', 'kadina.png', 'Manajer', 'aktif', '2017-04-01 08:15:15', '2020-10-12 07:24:14'),
(3, 'gudang', 'Warehouse', 'ecad8d762b80d5c64f62c89355f62d3a', '', '087558454545', '', 'Gudang', 'aktif', '2017-04-01 08:15:15', '2020-10-12 07:23:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `is_obat`
--
ALTER TABLE `is_obat`
  ADD PRIMARY KEY (`kode_obat`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `updated_user` (`updated_user`);

--
-- Indeks untuk tabel `is_obat_keluar`
--
ALTER TABLE `is_obat_keluar`
  ADD PRIMARY KEY (`kode_transaksi_keluar`),
  ADD KEY `created_user` (`created_user`),
  ADD KEY `kode_obat` (`kode_obat`);

--
-- Indeks untuk tabel `is_obat_masuk`
--
ALTER TABLE `is_obat_masuk`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `id_barang` (`kode_obat`),
  ADD KEY `created_user` (`created_user`);

--
-- Indeks untuk tabel `is_users`
--
ALTER TABLE `is_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`hak_akses`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `is_users`
--
ALTER TABLE `is_users`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `is_obat`
--
ALTER TABLE `is_obat`
  ADD CONSTRAINT `is_obat_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `is_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `is_obat_ibfk_2` FOREIGN KEY (`updated_user`) REFERENCES `is_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `is_obat_keluar`
--
ALTER TABLE `is_obat_keluar`
  ADD CONSTRAINT `is_obat_keluar_ibfk_1` FOREIGN KEY (`created_user`) REFERENCES `is_obat` (`created_user`);

--
-- Ketidakleluasaan untuk tabel `is_obat_masuk`
--
ALTER TABLE `is_obat_masuk`
  ADD CONSTRAINT `is_obat_masuk_ibfk_1` FOREIGN KEY (`kode_obat`) REFERENCES `is_obat` (`kode_obat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `is_obat_masuk_ibfk_2` FOREIGN KEY (`created_user`) REFERENCES `is_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
