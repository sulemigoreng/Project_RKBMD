-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mei 2018 pada 03.01
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-skpd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(64) NOT NULL,
  `nama_barang` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`) VALUES
('10.01.01', 'Sedan'),
('10.01.02', 'Jeep'),
('10.01.03', 'Motor'),
('10.01.05', 'Meja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan_program`
--

CREATE TABLE `kegiatan_program` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(64) DEFAULT NULL,
  `output_kegiatan` text,
  `id_program` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan_program`
--

INSERT INTO `kegiatan_program` (`id_kegiatan`, `nama_kegiatan`, `output_kegiatan`, `id_program`) VALUES
(5, 'Pelatihan', 'Kebisaan dalam Praktik', 2),
(6, 'Seminar', 'Pengetahuan dan Ilmu', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `akses`) VALUES
('161511038', 'akihabara', 0),
('161511039', 'akses', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `max_barang`
--

CREATE TABLE `max_barang` (
  `id_perencanaan_kebutuhan` int(11) NOT NULL,
  `kode_barang` varchar(64) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `max_barang`
--

INSERT INTO `max_barang` (`id_perencanaan_kebutuhan`, `kode_barang`, `jumlah`, `satuan`) VALUES
(1, '10.01.01', 12, 'Unti'),
(1, '10.01.03', 16, 'Unit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perencanaan_kebutuhan`
--

CREATE TABLE `perencanaan_kebutuhan` (
  `id_perencanaan_kebutuhan` int(11) NOT NULL,
  `id_skpd` varchar(64) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perencanaan_kebutuhan`
--

INSERT INTO `perencanaan_kebutuhan` (`id_perencanaan_kebutuhan`, `id_skpd`, `tahun`) VALUES
(1, '7.01.01.', 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pns`
--

CREATE TABLE `pns` (
  `nik` varchar(64) NOT NULL,
  `nama_pns` varchar(64) NOT NULL,
  `skpd` varchar(64) NOT NULL,
  `jabatan` varchar(64) NOT NULL,
  `eselon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pns`
--

INSERT INTO `pns` (`nik`, `nama_pns`, `skpd`, `jabatan`, `eselon`) VALUES
('161511038', 'Delvin Prestiadi', 'KABUPATEN BANDUNG', 'Pegawai', 5),
('161511039', 'Dewi', 'BANDUNG BARAT', 'Pegawai', 3),
('161511059', 'Reza', 'Sumedang', 'Kepala Bagian', 3),
('1615511037', 'dafa', 'CIMAHI', 'Pegawai', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_skpd`
--

CREATE TABLE `program_skpd` (
  `id_program` int(11) NOT NULL,
  `nama_program` varchar(64) DEFAULT NULL,
  `id_perencanaan_kebutuhan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `program_skpd`
--

INSERT INTO `program_skpd` (`id_program`, `nama_program`, `id_perencanaan_kebutuhan`) VALUES
(2, 'AKSI REAKSI', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skpd`
--

CREATE TABLE `skpd` (
  `id_skpd` varchar(64) NOT NULL,
  `nama_skpd` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skpd`
--

INSERT INTO `skpd` (`id_skpd`, `nama_skpd`) VALUES
('1.01.01.', 'DINAS PENDIDIKAN'),
('1.02.01.', 'DINAS KESEHATAN'),
('1.02.02.', 'RSU DAERAH CIBABAT'),
('1.03.01.', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG'),
('1.04.01.', 'DINAS PERUMAHAN DAN KAWASAN PERMUKIMAN'),
('1.05.01.', 'SATUAN POLISI PAMONG PRAJA DAN PEMADAM KEBAKARAN'),
('1.05.02.', 'BADAN PENANGGULANGAN BENCANA DAERAH'),
('1.06.01.', 'DINAS SOSIAL, PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA, PEMB'),
('2.01.01.', 'DINAS TENAGA KERJA'),
('2.03.01.', 'DINAS PANGAN DAN PERTANIAN'),
('2.05.01.', 'DINAS LINGKUNGAN HIDUP'),
('2.06.01.', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL'),
('2.09.01.', 'DINAS PERHUBUNGAN'),
('2.10.01.', 'DINAS KOMUNIKASI, INFORMATIKA, KEARSIPAN DAN PERPUSTAKAAN'),
('2.11.01.', 'DINAS PERDAGANGAN, KOPERASI, USAHA KECIL DAN MENENGAH DAN PERIND'),
('2.12.01.', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU'),
('2.16.01.', 'DINAS KEBUDAYAAN, PARIWISATA, KEPEMUDAAN DAN OLAHRAGA'),
('4.01.01.', 'BADAN PERENCANAAN PEMBANGUNAN DAERAH'),
('4.02.01.', 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH'),
('4.02.02.', 'BADAN PENGELOLA PENDAPATAN DAERAH'),
('4.03.01.', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA DAERAH'),
('5.01.01.', 'PPKD'),
('5.01.02.', 'DPRD'),
('5.01.03.', 'KEPALA DAERAH DAN WAKIL KEPALA DAERAH'),
('5.01.04.', 'SEKRETARIAT DAERAH'),
('5.01.05.', 'SEKRETARIAT DPRD'),
('5.01.06.', 'INSPEKTORAT KOTA'),
('6.01.01.', 'KECAMATAN CIMAHI UTARA'),
('6.01.02.', 'KECAMATAN CIMAHI TENGAH'),
('6.01.03.', 'KECAMATAN CIMAHI SELATAN'),
('7.01.01.', 'KANTOR KESATUAN BANGSA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usulan_barang`
--

CREATE TABLE `usulan_barang` (
  `id_kegiatan` int(11) NOT NULL,
  `kode_barang` varchar(64) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `kegiatan_program`
--
ALTER TABLE `kegiatan_program`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `id_program` (`id_program`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `max_barang`
--
ALTER TABLE `max_barang`
  ADD PRIMARY KEY (`id_perencanaan_kebutuhan`,`kode_barang`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `perencanaan_kebutuhan`
--
ALTER TABLE `perencanaan_kebutuhan`
  ADD PRIMARY KEY (`id_perencanaan_kebutuhan`),
  ADD KEY `id_skpd` (`id_skpd`);

--
-- Indexes for table `pns`
--
ALTER TABLE `pns`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `program_skpd`
--
ALTER TABLE `program_skpd`
  ADD PRIMARY KEY (`id_program`),
  ADD KEY `id_perencanaan_kebutuhan` (`id_perencanaan_kebutuhan`);

--
-- Indexes for table `skpd`
--
ALTER TABLE `skpd`
  ADD PRIMARY KEY (`id_skpd`);

--
-- Indexes for table `usulan_barang`
--
ALTER TABLE `usulan_barang`
  ADD PRIMARY KEY (`id_kegiatan`,`kode_barang`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan_program`
--
ALTER TABLE `kegiatan_program`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `perencanaan_kebutuhan`
--
ALTER TABLE `perencanaan_kebutuhan`
  MODIFY `id_perencanaan_kebutuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `program_skpd`
--
ALTER TABLE `program_skpd`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kegiatan_program`
--
ALTER TABLE `kegiatan_program`
  ADD CONSTRAINT `kegiatan_program_ibfk_1` FOREIGN KEY (`id_program`) REFERENCES `program_skpd` (`id_program`);

--
-- Ketidakleluasaan untuk tabel `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`username`) REFERENCES `pns` (`nik`);

--
-- Ketidakleluasaan untuk tabel `max_barang`
--
ALTER TABLE `max_barang`
  ADD CONSTRAINT `max_barang_ibfk_1` FOREIGN KEY (`id_perencanaan_kebutuhan`) REFERENCES `perencanaan_kebutuhan` (`id_perencanaan_kebutuhan`),
  ADD CONSTRAINT `max_barang_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`);

--
-- Ketidakleluasaan untuk tabel `perencanaan_kebutuhan`
--
ALTER TABLE `perencanaan_kebutuhan`
  ADD CONSTRAINT `perencanaan_kebutuhan_ibfk_1` FOREIGN KEY (`id_skpd`) REFERENCES `skpd` (`id_skpd`);

--
-- Ketidakleluasaan untuk tabel `program_skpd`
--
ALTER TABLE `program_skpd`
  ADD CONSTRAINT `program_skpd_ibfk_1` FOREIGN KEY (`id_perencanaan_kebutuhan`) REFERENCES `perencanaan_kebutuhan` (`id_perencanaan_kebutuhan`);

--
-- Ketidakleluasaan untuk tabel `usulan_barang`
--
ALTER TABLE `usulan_barang`
  ADD CONSTRAINT `usulan_barang_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan_program` (`id_kegiatan`),
  ADD CONSTRAINT `usulan_barang_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
