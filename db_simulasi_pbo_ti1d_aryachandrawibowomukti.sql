-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Jun 2026 pada 07.07
-- Versi server: 8.0.30
-- Versi PHP: 8.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Basis data: `db_simulasi_pbo_ti1d_aryachandrawibowomukti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `id_pendaftaran` int NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `biaya_pendaftaran_dasar` int NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Kedinasan') NOT NULL,
  `pilihan_prodi` varchar(50) DEFAULT NULL,
  `lokasi_kampus` varchar(50) DEFAULT NULL,
  `jenis_prestasi` varchar(50) DEFAULT NULL,
  `tingkat_prestasi` varchar(30) DEFAULT NULL,
  `sk_ikatan_dinas` varchar(50) DEFAULT NULL,
  `instansi_sponsor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`id_pendaftaran`, `nama_calon`, `asal_sekolah`, `nilai_ujian`, `biaya_pendaftaran_dasar`, `jalur_pendaftaran`, `pilihan_prodi`, `lokasi_kampus`, `jenis_prestasi`, `tingkat_prestasi`, `sk_ikatan_dinas`, `instansi_sponsor`) VALUES
(1, 'Ahmad Fauzi', 'SMAN 1 Jakarta', 85.50, 200000, 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(2, 'Budi Santoso', 'SMKN 2 Bandung', 78.00, 200000, 'Reguler', 'Sistem Informasi', 'Kampus Kota', NULL, NULL, NULL, NULL),
(3, 'Citra Lestari', 'SMA Kristen 1', 90.25, 200000, 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(4, 'Dedi Wijaya', 'SMAN 3 Semarang', 82.10, 200000, 'Reguler', 'Sains Data', 'Kampus Utama', NULL, NULL, NULL, NULL),
(5, 'Eka Putri', 'MAN 1 Yogyakarta', 88.00, 200000, 'Reguler', 'Sistem Informasi', 'Kampus Kota', NULL, NULL, NULL, NULL),
(6, 'Fahmi Idris', 'SMKN 1 Surabaya', 75.40, 200000, 'Reguler', 'Teknik Komputer', 'Kampus Utama', NULL, NULL, NULL, NULL),
(7, 'Gita Gutawa', 'SMAN 5 Malang', 92.00, 200000, 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(8, 'Hendra Wijaya', 'SMAN 1 Solo', 95.00, 250000, 'Prestasi', NULL, NULL, 'Olimpiade Matematika', 'Nasional', NULL, NULL),
(9, 'Indah Permata', 'SMAN 2 Padang', 89.50, 250000, 'Prestasi', NULL, NULL, 'Futsal', 'Provinsi', NULL, NULL),
(10, 'Joko Susilo', 'SMAN 4 Medan', 87.00, 250000, 'Prestasi', NULL, NULL, 'Karya Ilmiah Remaja', 'Nasional', NULL, NULL),
(11, 'Kurniawati', 'SMAN 1 Denpasar', 91.20, 250000, 'Prestasi', NULL, NULL, 'Penyanyi Solo', 'Provinsi', NULL, NULL),
(12, 'Laksana Tri', 'SMKN 3 Makassar', 86.00, 250000, 'Prestasi', NULL, NULL, 'Lomba Kompetensi Siswa', 'Nasional', NULL, NULL),
(13, 'Mega Utami', 'SMAN 1 Palembang', 93.40, 250000, 'Prestasi', NULL, NULL, 'Tahfidz Qur\'an', 'Internasional', NULL, NULL),
(14, 'Naufal Abdi', 'SMAN 8 Jakarta', 96.00, 250000, 'Prestasi', NULL, NULL, 'Debat Bahasa Inggris', 'Nasional', NULL, NULL),
(15, 'Oki Setiawan', 'SMAN 1 Balikpapan', 84.00, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DH-2026-001', 'Kementerian Kominfo'),
(16, 'Putri Rahayu', 'SMAN 2 Samarinda', 88.50, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DH-2026-002', 'Badan Siber Sandi Negara'),
(17, 'Qomaruddin', 'MAN 2 Pontianak', 81.00, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DH-2026-003', 'Pemerintah Daerah Prov. Jabar'),
(18, 'Rini Astuti', 'SMAN 1 Banjarmasin', 89.00, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DH-2026-004', 'Kementerian Perhubungan'),
(19, 'Sultan Malik', 'SMAN 3 Manado', 85.75, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DH-2026-005', 'Kementerian ESDM'),
(20, 'Taufik Hidayat', 'SMAN 1 Ambon', 83.20, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DH-2026-006', 'Badan Pusat Statistik');

--
-- Indeks untuk tabel yang dibuang
--

--
-- Indeks untuk tabel `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  MODIFY `id_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
