-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2024 pada 07.34
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simitra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukti_pembayaran`
--

CREATE TABLE `bukti_pembayaran` (
  `id_bukti` varchar(10) NOT NULL,
  `id_invoice` varchar(20) DEFAULT NULL,
  `id_order` varchar(10) DEFAULT NULL,
  `tanggal_pembayaran` date DEFAULT NULL,
  `bukti_pembayaran` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bukti_pembayaran`
--

INSERT INTO `bukti_pembayaran` (`id_bukti`, `id_invoice`, `id_order`, `tanggal_pembayaran`, `bukti_pembayaran`) VALUES
('BKT01', 'INV99999', 'ORD0123', '2024-03-15', 0x626f792e706e67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ceklist_fumigasi`
--

CREATE TABLE `ceklist_fumigasi` (
  `id_ceklis` varchar(10) NOT NULL,
  `id_order` varchar(10) DEFAULT NULL,
  `id_order_container` varchar(20) DEFAULT NULL,
  `tanggal_order` date NOT NULL,
  `ceklist_fumigasi` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ceklist_fumigasi`
--

INSERT INTO `ceklist_fumigasi` (`id_ceklis`, `id_order`, `id_order_container`, `tanggal_order`, `ceklist_fumigasi`) VALUES
('L001', 'ORD0123', 'ORD0123-1', '2024-03-12', 0x4e6176792053696d706c65204d6f6465726e204c696e6520496e6475737472696573204c6f676f2e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_customer`
--

CREATE TABLE `data_customer` (
  `id_customer` varchar(10) NOT NULL,
  `nama_customer` varchar(50) DEFAULT NULL,
  `alamat_customer` varchar(100) DEFAULT NULL,
  `telp_customer` varchar(15) DEFAULT NULL,
  `email_customer` varchar(50) DEFAULT NULL,
  `attn` varchar(20) NOT NULL,
  `tin` varchar(20) NOT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `phone_pic` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_customer`
--

INSERT INTO `data_customer` (`id_customer`, `nama_customer`, `alamat_customer`, `telp_customer`, `email_customer`, `attn`, `tin`, `pic`, `phone_pic`) VALUES
('C001', 'ABC', 'Semarang', '09876', 'abc@gmail.com', 'XXX', 'XXX', 'Toni', '0987'),
('C002', 'XYZ', 'Jakarta', '0231', 'xyz@gmail.com', 'XLZ', '125', 'Aldi', '0888');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_harga`
--

CREATE TABLE `data_harga` (
  `id_data_standar` varchar(15) NOT NULL,
  `id_standar` varchar(10) DEFAULT NULL,
  `volume` varchar(10) DEFAULT NULL,
  `treatment` varchar(10) DEFAULT NULL,
  `bbb_standar` decimal(20,2) DEFAULT NULL,
  `btk_standar` decimal(20,2) DEFAULT NULL,
  `bop_standar` decimal(20,2) DEFAULT NULL,
  `hpp` decimal(20,2) DEFAULT NULL,
  `markup` decimal(20,2) DEFAULT NULL,
  `harga_jual` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_harga`
--

INSERT INTO `data_harga` (`id_data_standar`, `id_standar`, `volume`, `treatment`, `bbb_standar`, `btk_standar`, `bop_standar`, `hpp`, `markup`, `harga_jual`) VALUES
('F001', 'feet', '20', 'FCL', 200000.00, 200000.00, 200000.00, 600000.00, 120.00, 7200000.00),
('L001', 'hc', '90', 'LCL', 450000.00, 450000.00, 450000.00, 1350000.00, 110.00, 1485000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hpp_feet`
--

CREATE TABLE `data_hpp_feet` (
  `id_standar` varchar(10) NOT NULL,
  `bbb_feet` decimal(20,2) DEFAULT NULL,
  `btk_feet` decimal(20,2) DEFAULT NULL,
  `bop_feet` decimal(20,2) DEFAULT NULL,
  `jumlah_hpp_feet` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_hpp_feet`
--

INSERT INTO `data_hpp_feet` (`id_standar`, `bbb_feet`, `btk_feet`, `bop_feet`, `jumlah_hpp_feet`) VALUES
('feet', 10000.00, 10000.00, 10000.00, 30000.00),
('hc', 5000.00, 5000.00, 5000.00, 15000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_importer`
--

CREATE TABLE `data_importer` (
  `id_importer` varchar(10) NOT NULL,
  `nama_importer` varchar(50) DEFAULT NULL,
  `alamat_importer` varchar(100) DEFAULT NULL,
  `telp_importer` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `usci` varchar(50) DEFAULT NULL,
  `pic` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_importer`
--

INSERT INTO `data_importer` (`id_importer`, `nama_importer`, `alamat_importer`, `telp_importer`, `fax`, `usci`, `pic`) VALUES
('I001', 'PIL', 'China', '0213', '0214', '1234', '123'),
('I002', 'ZZZ', 'Taiwan', '0999', '0999', '999', '999');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_order`
--

CREATE TABLE `data_order` (
  `id_order` varchar(10) NOT NULL,
  `id_order_container` varchar(10) DEFAULT NULL,
  `tanggal_order` date DEFAULT NULL,
  `id_customer` varchar(10) DEFAULT NULL,
  `nama_customer` varchar(50) DEFAULT NULL,
  `telp_customer` varchar(15) DEFAULT NULL,
  `alamat_customer` varchar(100) DEFAULT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `phone_pic` varchar(15) DEFAULT NULL,
  `jumlah_order` int(15) DEFAULT NULL,
  `id_data_standar` varchar(15) DEFAULT NULL,
  `treatment` varchar(10) DEFAULT NULL,
  `volume` varchar(10) DEFAULT NULL,
  `place_fumigation` varchar(50) DEFAULT NULL,
  `stuffing_date` date DEFAULT NULL,
  `container` varchar(20) DEFAULT NULL,
  `container_volume` varchar(20) DEFAULT NULL,
  `commodity` varchar(20) DEFAULT NULL,
  `vessel` varchar(10) DEFAULT NULL,
  `closing_time` datetime DEFAULT NULL,
  `destination` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_order`
--

INSERT INTO `data_order` (`id_order`, `id_order_container`, `tanggal_order`, `id_customer`, `nama_customer`, `telp_customer`, `alamat_customer`, `pic`, `phone_pic`, `jumlah_order`, `id_data_standar`, `treatment`, `volume`, `place_fumigation`, `stuffing_date`, `container`, `container_volume`, `commodity`, `vessel`, `closing_time`, `destination`) VALUES
('OR01', 'OR01-1', '2024-03-29', 'C001', 'ABC', '0987', 'Semarang', 'Toni', '0888', 1, 'F001', 'FCL', '20', 'Depo Pelindo Semarang', '2024-03-29', 'C1', 'CV1', 'Sonokeling', 'Highway1', '2024-03-15 17:34:00', 'China'),
('ORD0123', 'ORD0123-1', '2024-03-12', 'C001', 'ABC', '0987', 'Semarang', 'Toni', '0987', 2, 'F001', 'FCL', '20', 'Depo Pelindo Semarang', '2024-03-16', 'P00001', 'P123456', 'Sonokeling', 'V99999', '2024-03-16 14:00:00', 'China'),
('ORD124', 'CONT457', '2024-03-11', 'C002', 'XYZ', '0231', 'Jakarta', 'Aldi', '888', 150, 'L001', 'FCL', '90hc', 'Fumigation Place B', '2024-03-13', 'Container B', '200CBM', 'Goods B', 'Vessel B', '2024-03-16 00:00:00', 'Amerika'),
('RO0001', 'RO0001-1', '2024-03-13', 'C002', 'XYZ', '0231', 'Jakarta', 'Aldi', '0888', 2, 'F001', 'FCL', '40', 'Depo Pelindo Semarang', '2024-03-16', 'CX00001', 'CVX00001', 'Sonokeling', 'Highway', '2024-03-18 09:20:00', 'China');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` varchar(10) NOT NULL,
  `nama_pegawai` varchar(50) DEFAULT NULL,
  `alamat_pegawai` varchar(50) DEFAULT NULL,
  `telp_pegawai` varchar(15) DEFAULT NULL,
  `posisi` varchar(50) DEFAULT NULL,
  `noreg_fumigasi` varchar(10) DEFAULT NULL,
  `gaji_pokok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nama_pegawai`, `alamat_pegawai`, `telp_pegawai`, `posisi`, `noreg_fumigasi`, `gaji_pokok`) VALUES
('P001', 'Bambang', 'Semarang', '0987', 'Direktur', '', 7000000),
('P010', 'Asep', 'Semarang', '0111', 'Fumigator', '123', 3000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_persediaan`
--

CREATE TABLE `data_persediaan` (
  `id_persediaan` varchar(10) NOT NULL,
  `nama_persediaan` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `saldo` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_persediaan`
--

INSERT INTO `data_persediaan` (`id_persediaan`, `nama_persediaan`, `quantity`, `saldo`) VALUES
('B001', 'Methyl Bromide', 50, 200000000.00),
('B002', 'Sarung Tangan', 5, 2000000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_persyaratan`
--

CREATE TABLE `data_persyaratan` (
  `no_persyaratan` varchar(10) NOT NULL,
  `id_order` varchar(10) DEFAULT NULL,
  `id_order_container` varchar(10) DEFAULT NULL,
  `tanggal_order` date DEFAULT NULL,
  `nama_driver` varchar(50) DEFAULT NULL,
  `telp_driver` varchar(15) DEFAULT NULL,
  `shipment_instruction` longblob DEFAULT NULL,
  `packing_list` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_persyaratan`
--

INSERT INTO `data_persyaratan` (`no_persyaratan`, `id_order`, `id_order_container`, `tanggal_order`, `nama_driver`, `telp_driver`, `shipment_instruction`, `packing_list`) VALUES
('P001', 'ORD0123', 'ORD0123-1', '2024-03-12', '099999', 'logoH-removebg-', 0x6c6f676f6f2e706e67, 0x6c6f676f322e706e67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `posisi` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`username`, `nama_lengkap`, `posisi`, `email`, `password`) VALUES
('admin', 'Nadia', 'Admin', 'admin@mail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user_logs`
--

CREATE TABLE `data_user_logs` (
  `tanggal_login` datetime DEFAULT NULL,
  `posisi` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_customer`
--

CREATE TABLE `detail_customer` (
  `id_detail_customer` varchar(10) NOT NULL,
  `id_customer` varchar(10) DEFAULT NULL,
  `termin` varchar(20) DEFAULT NULL,
  `tanggal_input` date DEFAULT NULL,
  `total_penjualan` int(10) DEFAULT NULL,
  `penerimaan` int(11) DEFAULT NULL,
  `saldo_akhir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_customer`
--

INSERT INTO `detail_customer` (`id_detail_customer`, `id_customer`, `termin`, `tanggal_input`, `total_penjualan`, `penerimaan`, `saldo_akhir`) VALUES
('DC001', 'C001', 'n/14', '2024-03-11', 3000000, 1000000, 2000000),
('DC002', 'C002', 'n/30', '2024-03-01', 1000000, 0, 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `draft_pelayaran`
--

CREATE TABLE `draft_pelayaran` (
  `id_draft` varchar(10) NOT NULL,
  `id_order` varchar(10) DEFAULT NULL,
  `id_order_container` varchar(10) DEFAULT NULL,
  `tanggal_order` date NOT NULL,
  `draft_pelayaran` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `draft_pelayaran`
--

INSERT INTO `draft_pelayaran` (`id_draft`, `id_order`, `id_order_container`, `tanggal_order`, `draft_pelayaran`) VALUES
('D001', 'ORD0123', 'ORD0123-1', '2024-03-12', 0x53637265656e73686f74202832292e706e67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hpp_sesungguhnya`
--

CREATE TABLE `hpp_sesungguhnya` (
  `id_beban_hpp` varchar(20) NOT NULL,
  `tanggal_input` date DEFAULT NULL,
  `bbb_sesungguhnya` decimal(20,2) DEFAULT NULL,
  `btk_sesungguhnya` decimal(20,2) DEFAULT NULL,
  `bop_sesungguhnya` decimal(20,2) DEFAULT NULL,
  `hpp_sesungguhnya` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hpp_sesungguhnya`
--

INSERT INTO `hpp_sesungguhnya` (`id_beban_hpp`, `tanggal_input`, `bbb_sesungguhnya`, `btk_sesungguhnya`, `bop_sesungguhnya`, `hpp_sesungguhnya`) VALUES
('H002', '2024-03-12', 10000000.00, 10000000.00, 10000000.00, 30000000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` varchar(20) NOT NULL,
  `tanggal_invoice` date DEFAULT NULL,
  `id_order` varchar(10) DEFAULT NULL,
  `nama_customer` varchar(50) DEFAULT NULL,
  `alamat_customer` varchar(100) DEFAULT NULL,
  `id_sertif` varchar(10) DEFAULT NULL,
  `no_bl` varchar(50) DEFAULT NULL,
  `shipper` varchar(50) DEFAULT NULL,
  `destination` varchar(20) DEFAULT NULL,
  `commodity` varchar(20) DEFAULT NULL,
  `stuffing_date` date DEFAULT NULL,
  `closing_time` datetime DEFAULT NULL,
  `id_recordsheet` varchar(10) DEFAULT NULL,
  `applied_dose_rate` int(11) DEFAULT NULL,
  `treatment` varchar(10) DEFAULT NULL,
  `jumlah_order` int(5) DEFAULT NULL,
  `volume` varchar(10) DEFAULT NULL,
  `container` varchar(20) DEFAULT NULL,
  `id_data_standar` varchar(15) DEFAULT NULL,
  `harga_jual` decimal(20,2) DEFAULT NULL,
  `total_penjualan` decimal(20,2) DEFAULT NULL,
  `ppn` decimal(20,2) DEFAULT NULL,
  `jumlah_dibayar` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `tanggal_invoice`, `id_order`, `nama_customer`, `alamat_customer`, `id_sertif`, `no_bl`, `shipper`, `destination`, `commodity`, `stuffing_date`, `closing_time`, `id_recordsheet`, `applied_dose_rate`, `treatment`, `jumlah_order`, `volume`, `container`, `id_data_standar`, `harga_jual`, `total_penjualan`, `ppn`, `jumlah_dibayar`) VALUES
('INV99999', '2024-03-18', 'RO0001', 'XYZ', 'Jakarta', 'S0001', 'BL9999', 'PIL', 'China', 'Sonokeling', '2024-03-16', '2024-03-16 12:00:00', 'RD001', 10, 'FCL', 2, '40', 'CX00001', 'F001', 7200000.00, 7200000.00, 0.00, 7200000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_persediaan`
--

CREATE TABLE `kartu_persediaan` (
  `id_kartu_persediaan` varchar(10) NOT NULL,
  `id_persediaan` varchar(10) DEFAULT NULL,
  `nama_persediaan` varchar(50) DEFAULT NULL,
  `tanggal_input` date DEFAULT NULL,
  `harga_masuk` decimal(20,2) DEFAULT NULL,
  `jumlah_masuk` int(11) DEFAULT NULL,
  `total_masuk` decimal(20,2) DEFAULT NULL,
  `harga_keluar` decimal(20,2) DEFAULT NULL,
  `jumlah_keluar` int(11) DEFAULT NULL,
  `total_keluar` decimal(20,2) DEFAULT NULL,
  `harga_saldo` decimal(20,2) DEFAULT NULL,
  `jumlah_saldo` int(11) DEFAULT NULL,
  `total_saldo` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kartu_persediaan`
--

INSERT INTO `kartu_persediaan` (`id_kartu_persediaan`, `id_persediaan`, `nama_persediaan`, `tanggal_input`, `harga_masuk`, `jumlah_masuk`, `total_masuk`, `harga_keluar`, `jumlah_keluar`, `total_keluar`, `harga_saldo`, `jumlah_saldo`, `total_saldo`) VALUES
('KB001', 'B001', 'Methyl Bromide', '2024-03-22', 0.00, 0, 0.00, 2000000.00, 10, 2000000.00, 2000000.00, 40, 180000000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keu_akun`
--

CREATE TABLE `keu_akun` (
  `kode_akun` varchar(10) NOT NULL,
  `nama_akun` varchar(100) DEFAULT NULL,
  `jenis_akun` varchar(20) DEFAULT NULL,
  `kelompok_akun` varchar(20) DEFAULT NULL,
  `saldo_akun` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keu_akun`
--

INSERT INTO `keu_akun` (`kode_akun`, `nama_akun`, `jenis_akun`, `kelompok_akun`, `saldo_akun`) VALUES
('1110', 'Kas', 'debet', 'aset', 2000000.00),
('4110', 'Pendapatan', 'kredit', 'pendapatan', 2000000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keu_aset_tetap`
--

CREATE TABLE `keu_aset_tetap` (
  `kode_at` varchar(10) NOT NULL,
  `jenis_at` varchar(50) DEFAULT NULL,
  `nama_at` varchar(100) DEFAULT NULL,
  `jumlah_at` int(11) DEFAULT NULL,
  `keberadaan_at` varchar(10) DEFAULT NULL,
  `tahun_perolehan` int(11) DEFAULT NULL,
  `umur_ekonomis` int(11) DEFAULT NULL,
  `harga_perolehan` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keu_aset_tetap`
--

INSERT INTO `keu_aset_tetap` (`kode_at`, `jenis_at`, `nama_at`, `jumlah_at`, `keberadaan_at`, `tahun_perolehan`, `umur_ekonomis`, `harga_perolehan`) VALUES
('AT001', 'Tanah dan Bangunan', 'Rumah', 1, 'Kantor', 2012, 20, 1000000000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keu_buku_besar`
--

CREATE TABLE `keu_buku_besar` (
  `id_buku_besar` int(11) NOT NULL,
  `id_detail_jurnal` int(11) DEFAULT NULL,
  `nama_akun` varchar(100) DEFAULT NULL,
  `periode_awal` date DEFAULT NULL,
  `periode_akhir` date DEFAULT NULL,
  `no_jurnal` varchar(10) DEFAULT NULL,
  `tanggal_jurnal` date DEFAULT NULL,
  `no_bukti` varchar(10) DEFAULT NULL,
  `uraian_jurnal` varchar(255) DEFAULT NULL,
  `debet` decimal(20,2) DEFAULT NULL,
  `kredit` decimal(20,2) DEFAULT NULL,
  `saldo_akun` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keu_detail_jurnal`
--

CREATE TABLE `keu_detail_jurnal` (
  `id_detail_jurnal` int(11) NOT NULL,
  `no_jurnal` varchar(10) DEFAULT NULL,
  `kode_akun` varchar(10) DEFAULT NULL,
  `nama_akun` varchar(100) DEFAULT NULL,
  `debet` decimal(20,2) DEFAULT NULL,
  `kredit` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keu_detail_jurnal`
--

INSERT INTO `keu_detail_jurnal` (`id_detail_jurnal`, `no_jurnal`, `kode_akun`, `nama_akun`, `debet`, `kredit`) VALUES
(1, 'JU0001', '1110', 'Kas', 100.00, NULL),
(2, 'JU0001', '4110', 'Pendapatan', NULL, 100.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keu_detail_supplier`
--

CREATE TABLE `keu_detail_supplier` (
  `id_detail_supplier` varchar(10) NOT NULL,
  `id_supplier` varchar(10) DEFAULT NULL,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `termin_pembayaran` varchar(20) DEFAULT NULL,
  `tanggal_input` date DEFAULT NULL,
  `pembelian` decimal(20,2) DEFAULT NULL,
  `pembayaran` decimal(20,2) DEFAULT NULL,
  `saldo_akhir_supplier` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keu_detail_supplier`
--

INSERT INTO `keu_detail_supplier` (`id_detail_supplier`, `id_supplier`, `nama_supplier`, `termin_pembayaran`, `tanggal_input`, `pembelian`, `pembayaran`, `saldo_akhir_supplier`) VALUES
('DS001', 'S001', 'Jaya', 'n/30', '2024-03-12', 3000000.00, 0.00, 3000000.00),
('DS002', 'S001', 'Jaya', 'n/30', '2024-03-22', 4000000.00, 3000000.00, 4000000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keu_jurnal`
--

CREATE TABLE `keu_jurnal` (
  `no_jurnal` varchar(10) NOT NULL,
  `tanggal_jurnal` date DEFAULT NULL,
  `no_bukti` varchar(10) DEFAULT NULL,
  `uraian_jurnal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keu_jurnal`
--

INSERT INTO `keu_jurnal` (`no_jurnal`, `tanggal_jurnal`, `no_bukti`, `uraian_jurnal`) VALUES
('JU0001', '2024-03-15', 'B00001', 'Pendapatan dari ABC'),
('JU9999', '2024-03-15', 'B99999', 'Pembayaran listrik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keu_penggajian`
--

CREATE TABLE `keu_penggajian` (
  `id_penggajian` varchar(10) NOT NULL,
  `tanggal_input` date DEFAULT NULL,
  `id_pegawai` varchar(10) DEFAULT NULL,
  `nama_pegawai` varchar(50) DEFAULT NULL,
  `gaji_pokok` decimal(20,2) DEFAULT NULL,
  `bonus` decimal(20,2) DEFAULT NULL,
  `tunjangan_lembur` decimal(20,2) DEFAULT NULL,
  `iuran` decimal(20,2) DEFAULT NULL,
  `gaji_bersih` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keu_penggajian`
--

INSERT INTO `keu_penggajian` (`id_penggajian`, `tanggal_input`, `id_pegawai`, `nama_pegawai`, `gaji_pokok`, `bonus`, `tunjangan_lembur`, `iuran`, `gaji_bersih`) VALUES
('PG001', '2024-03-11', 'P001', 'Bambang', 7000000.00, 1000000.00, 0.00, 500000.00, 7500000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keu_penyusutan_at`
--

CREATE TABLE `keu_penyusutan_at` (
  `kode_penyusutan_at` varchar(10) NOT NULL,
  `kode_at` varchar(10) DEFAULT NULL,
  `jenis_at` varchar(50) DEFAULT NULL,
  `nama_at` varchar(100) DEFAULT NULL,
  `total_perolehan` decimal(20,2) DEFAULT NULL,
  `tanggal_penyusutan` date DEFAULT NULL,
  `tahun_ke` int(11) DEFAULT NULL,
  `beban_penyusutan` decimal(20,2) DEFAULT NULL,
  `akumulasi_penyusutan` decimal(20,2) DEFAULT NULL,
  `nilai_buku` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keu_penyusutan_at`
--

INSERT INTO `keu_penyusutan_at` (`kode_penyusutan_at`, `kode_at`, `jenis_at`, `nama_at`, `total_perolehan`, `tanggal_penyusutan`, `tahun_ke`, `beban_penyusutan`, `akumulasi_penyusutan`, `nilai_buku`) VALUES
('PAT002', 'AT001', 'Tanah dan Bangunan', 'Rumah', 1000000000.00, '2024-03-31', 5, 50000000.00, 100000000.00, 10000000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keu_supplier`
--

CREATE TABLE `keu_supplier` (
  `id_supplier` varchar(10) NOT NULL,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `alamat_supplier` varchar(100) DEFAULT NULL,
  `telepon_supplier` varchar(15) DEFAULT NULL,
  `email_supplier` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keu_supplier`
--

INSERT INTO `keu_supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `telepon_supplier`, `email_supplier`) VALUES
('S001', 'Jaya', 'Jakarta', '0231', 'jaya@mail.com'),
('S002', 'Abadi', 'Bandung', '0234', 'abadi@mail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `metil_recordsheet`
--

CREATE TABLE `metil_recordsheet` (
  `id_recordsheet` varchar(10) NOT NULL,
  `id_order` varchar(10) DEFAULT NULL,
  `id_order_container` varchar(20) DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `daff_prescribed_doses_rate` int(5) DEFAULT NULL,
  `forecast_minimum_temperature` int(5) DEFAULT NULL,
  `exposure_period` int(5) DEFAULT NULL,
  `applied_dose_rate` int(5) DEFAULT NULL,
  `dokumen_metil_recordsheet` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `metil_recordsheet`
--

INSERT INTO `metil_recordsheet` (`id_recordsheet`, `id_order`, `id_order_container`, `tanggal_selesai`, `daff_prescribed_doses_rate`, `forecast_minimum_temperature`, `exposure_period`, `applied_dose_rate`, `dokumen_metil_recordsheet`) VALUES
('RD001', 'ORD0123', 'ORD0123-1', '2024-03-28', 10, 24, 28, 10, 'top-10-on-demand-courier-delivery-apps.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemakaian_mb`
--

CREATE TABLE `pemakaian_mb` (
  `id_pemakaian` varchar(10) NOT NULL,
  `tanggal_mulai` datetime DEFAULT NULL,
  `id_persediaan` varchar(10) DEFAULT NULL,
  `saldo_akhir_persediaan` int(11) DEFAULT NULL,
  `tanggal_selesai` datetime DEFAULT NULL,
  `pemakaian_persediaan` int(11) DEFAULT NULL,
  `berat_akhir` int(11) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemakaian_mb`
--

INSERT INTO `pemakaian_mb` (`id_pemakaian`, `tanggal_mulai`, `id_persediaan`, `saldo_akhir_persediaan`, `tanggal_selesai`, `pemakaian_persediaan`, `berat_akhir`, `keterangan`) VALUES
('PK001', '2024-03-13 13:12:00', 'B001', 20, '2024-03-13 14:13:00', 5, 16, 'Pemakaian 5 kontainer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemberitahuan`
--

CREATE TABLE `pemberitahuan` (
  `id_kegiatan` varchar(20) NOT NULL,
  `id_order` varchar(10) DEFAULT NULL,
  `id_order_container` varchar(20) DEFAULT NULL,
  `container` varchar(20) DEFAULT NULL,
  `volume` varchar(10) DEFAULT NULL,
  `jam_mulai` datetime DEFAULT NULL,
  `jam_selesai` datetime DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemberitahuan`
--

INSERT INTO `pemberitahuan` (`id_kegiatan`, `id_order`, `id_order_container`, `container`, `volume`, `jam_mulai`, `jam_selesai`, `keterangan`) VALUES
('KG001', 'ORD0123', 'ORD0123-1', 'P00001', '20', '2024-03-13 13:30:00', '2024-03-13 14:30:00', 'ABC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_hpp`
--

CREATE TABLE `rekap_hpp` (
  `id_rekap` varchar(10) NOT NULL,
  `tanggal_input` date DEFAULT NULL,
  `id_data_standar` varchar(10) DEFAULT NULL,
  `id_rekap_penjualan` varchar(10) DEFAULT NULL,
  `volume` varchar(10) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `hpp` decimal(20,2) DEFAULT NULL,
  `total_hpp` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rekap_hpp`
--

INSERT INTO `rekap_hpp` (`id_rekap`, `tanggal_input`, `id_data_standar`, `id_rekap_penjualan`, `volume`, `quantity`, `hpp`, `total_hpp`) VALUES
('RHPP01', '2024-03-15', 'F001', 'RPENJ1', '20', 100, 600000.00, 60000000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_penjualan`
--

CREATE TABLE `rekap_penjualan` (
  `id_rekap_penjualan` varchar(10) NOT NULL,
  `id_invoice` varchar(20) DEFAULT NULL,
  `tanggal_invoice` date DEFAULT NULL,
  `volume` varchar(10) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_penjualan` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rekap_penjualan`
--

INSERT INTO `rekap_penjualan` (`id_rekap_penjualan`, `id_invoice`, `tanggal_invoice`, `volume`, `quantity`, `total_penjualan`) VALUES
('RPENJ1', 'INV99999', '2024-03-18', '20', 11, 100000000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertif` varchar(10) NOT NULL,
  `id_reg` varchar(10) DEFAULT NULL,
  `target_fumigasi` varchar(50) DEFAULT NULL,
  `commodity` varchar(20) DEFAULT NULL,
  `consignment` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `pol` varchar(20) DEFAULT NULL,
  `destination` varchar(20) DEFAULT NULL,
  `id_order` varchar(10) DEFAULT NULL,
  `id_order_container` varchar(10) DEFAULT NULL,
  `nama_customer` varchar(50) DEFAULT NULL,
  `telp_customer` varchar(15) DEFAULT NULL,
  `attn` varchar(20) DEFAULT NULL,
  `tin` varchar(20) DEFAULT NULL,
  `id_importer` varchar(10) DEFAULT NULL,
  `nama_importer` varchar(50) DEFAULT NULL,
  `alamat_importer` varchar(100) DEFAULT NULL,
  `telp_importer` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `usci` varchar(50) DEFAULT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `id_recordsheet` varchar(10) DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `daff_prescribed_doses_rate` int(5) DEFAULT NULL,
  `forecast_minimum_temperature` int(5) DEFAULT NULL,
  `exposure_period` int(5) DEFAULT NULL,
  `applied_dose_rate` int(5) DEFAULT NULL,
  `fumigation_conducted` varchar(50) DEFAULT NULL,
  `container` varchar(20) DEFAULT NULL,
  `wrapping` varchar(10) DEFAULT NULL,
  `tanggal_sertif` date DEFAULT NULL,
  `no_reg` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sertifikat`
--

INSERT INTO `sertifikat` (`id_sertif`, `id_reg`, `target_fumigasi`, `commodity`, `consignment`, `country`, `pol`, `destination`, `id_order`, `id_order_container`, `nama_customer`, `telp_customer`, `attn`, `tin`, `id_importer`, `nama_importer`, `alamat_importer`, `telp_importer`, `fax`, `usci`, `pic`, `id_recordsheet`, `tanggal_selesai`, `daff_prescribed_doses_rate`, `forecast_minimum_temperature`, `exposure_period`, `applied_dose_rate`, `fumigation_conducted`, `container`, `wrapping`, `tanggal_sertif`, `no_reg`) VALUES
('S0001', 'REG01', 'Both Commodity and Packing', 'Sonokeling', 'BL NNO SQK', 'Indonesia', 'Semarang, Indonesia', 'China', 'RO0001', 'RO0001-1', 'XYZ', '0231', '9999', '9999', 'I001', 'PIL', 'China', '0213', '0214', '1234', '123', 'RD001', '2024-03-28', 10, 24, 28, 10, 'Sheeted Container/s', 'CX00001', 'Yes', '2024-03-30', '101010');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_pemberitahuan`
--

CREATE TABLE `surat_pemberitahuan` (
  `id_pemberitahuan` varchar(20) NOT NULL,
  `id_order` varchar(10) DEFAULT NULL,
  `id_order_container` varchar(20) DEFAULT NULL,
  `commodity` varchar(50) DEFAULT NULL,
  `container` varchar(20) DEFAULT NULL,
  `place_fumigation` varchar(50) DEFAULT NULL,
  `fumigan` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `dimohon_kesediaan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_pemberitahuan`
--

INSERT INTO `surat_pemberitahuan` (`id_pemberitahuan`, `id_order`, `id_order_container`, `commodity`, `container`, `place_fumigation`, `fumigan`, `tanggal`, `tanggal_selesai`, `dimohon_kesediaan`) VALUES
('PK0001', 'ORD0123', 'ORD0123-1', 'Sonokeling', 'P00001', 'Depo Pelindo Semarang', 'Methyl Bromide', '2024-03-15', '2024-03-20', 'Tidak Memasuki dan menyuruh orang-orang yang berada di bawah pengawasan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_perintah_kerja`
--

CREATE TABLE `surat_perintah_kerja` (
  `id_spk` varchar(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `place_fumigation` varchar(50) DEFAULT NULL,
  `jumlah_kontainer` int(11) DEFAULT NULL,
  `id_order` varchar(10) DEFAULT NULL,
  `id_order_container` varchar(20) DEFAULT NULL,
  `container` varchar(20) DEFAULT NULL,
  `volume` varchar(10) DEFAULT NULL,
  `fumigan` varchar(50) DEFAULT NULL,
  `dosis` int(5) DEFAULT NULL,
  `id_pegawai` varchar(10) DEFAULT NULL,
  `fumigator` varchar(50) DEFAULT NULL,
  `helper1` varchar(50) DEFAULT NULL,
  `helper2` varchar(50) DEFAULT NULL,
  `helper3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_perintah_kerja`
--

INSERT INTO `surat_perintah_kerja` (`id_spk`, `tanggal`, `place_fumigation`, `jumlah_kontainer`, `id_order`, `id_order_container`, `container`, `volume`, `fumigan`, `dosis`, `id_pegawai`, `fumigator`, `helper1`, `helper2`, `helper3`) VALUES
('SPK001', '2024-03-12', 'Depo Pelindo Semarang', 2, 'ORD0123', 'ORD0123-1', 'P00001', '20', 'Methyl Bromide', 20, 'P010', 'Asep', '', '', ''),
('SPK002', '2024-03-02', 'Depo Pelindo Semarang', 3, 'ORD124', 'CONT457', 'Container A', '20', 'Methyl Bromide', 20, 'P010', 'Asep', 'Bima', 'Danang', 'Tono');

-- --------------------------------------------------------

--
-- Struktur dari tabel `verifikasi_order`
--

CREATE TABLE `verifikasi_order` (
  `id_verifikasi` varchar(10) NOT NULL,
  `id_order` varchar(10) DEFAULT NULL,
  `id_order_container` varchar(20) DEFAULT NULL,
  `tanggal_order` date DEFAULT NULL,
  `id_customer` varchar(10) DEFAULT NULL,
  `nama_customer` varchar(50) DEFAULT NULL,
  `alamat_customer` varchar(100) DEFAULT NULL,
  `commodity` varchar(20) DEFAULT NULL,
  `stuffing_date` date DEFAULT NULL,
  `closing_time` datetime DEFAULT NULL,
  `waktu` varchar(20) DEFAULT NULL,
  `tujuan` varchar(20) DEFAULT NULL,
  `destination` varchar(20) DEFAULT NULL,
  `kondisi_status` varchar(30) DEFAULT NULL,
  `packing` varchar(30) DEFAULT NULL,
  `place_fumigation` varchar(50) DEFAULT NULL,
  `kesimpulan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `verifikasi_order`
--

INSERT INTO `verifikasi_order` (`id_verifikasi`, `id_order`, `id_order_container`, `tanggal_order`, `id_customer`, `nama_customer`, `alamat_customer`, `commodity`, `stuffing_date`, `closing_time`, `waktu`, `tujuan`, `destination`, `kondisi_status`, `packing`, `place_fumigation`, `kesimpulan`) VALUES
('VO0001', 'RO0001', 'RO0001-1', '2024-03-13', 'C001', 'XYZ', 'Jakarta', 'Sonokeling', '2024-03-16', '2024-03-18 09:20:00', 'Cukup', 'Export', 'China', 'Finish', 'Plastik Wrapping', 'Memenuhi Syarat', 'Tidak Bisa Dilakukan Fumigasi'),
('VO098111', 'ORD0123', 'ORD0123-1', '2024-03-12', 'C001', 'ABC', 'Semarang', 'Sonokeling', '2024-03-16', '2024-03-16 14:00:00', 'Cukup', 'Export', 'China', 'Asalan', 'Karung Goni', 'Memenuhi Syarat', 'Bisa Dilakukan Fumigasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD PRIMARY KEY (`id_bukti`),
  ADD KEY `id_invoice` (`id_invoice`),
  ADD KEY `id_order` (`id_order`);

--
-- Indeks untuk tabel `ceklist_fumigasi`
--
ALTER TABLE `ceklist_fumigasi`
  ADD PRIMARY KEY (`id_ceklis`),
  ADD KEY `id_order` (`id_order`);

--
-- Indeks untuk tabel `data_customer`
--
ALTER TABLE `data_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `data_harga`
--
ALTER TABLE `data_harga`
  ADD PRIMARY KEY (`id_data_standar`),
  ADD KEY `id_standar` (`id_standar`);

--
-- Indeks untuk tabel `data_hpp_feet`
--
ALTER TABLE `data_hpp_feet`
  ADD PRIMARY KEY (`id_standar`);

--
-- Indeks untuk tabel `data_importer`
--
ALTER TABLE `data_importer`
  ADD PRIMARY KEY (`id_importer`);

--
-- Indeks untuk tabel `data_order`
--
ALTER TABLE `data_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_customer` (`id_customer`) USING BTREE,
  ADD KEY `id_data_standar` (`id_data_standar`) USING BTREE;

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `data_persediaan`
--
ALTER TABLE `data_persediaan`
  ADD PRIMARY KEY (`id_persediaan`);

--
-- Indeks untuk tabel `data_persyaratan`
--
ALTER TABLE `data_persyaratan`
  ADD PRIMARY KEY (`no_persyaratan`),
  ADD KEY `id_order` (`id_order`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `data_user_logs`
--
ALTER TABLE `data_user_logs`
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `detail_customer`
--
ALTER TABLE `detail_customer`
  ADD PRIMARY KEY (`id_detail_customer`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indeks untuk tabel `draft_pelayaran`
--
ALTER TABLE `draft_pelayaran`
  ADD PRIMARY KEY (`id_draft`),
  ADD KEY `id_order` (`id_order`);

--
-- Indeks untuk tabel `hpp_sesungguhnya`
--
ALTER TABLE `hpp_sesungguhnya`
  ADD PRIMARY KEY (`id_beban_hpp`);

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_sertif` (`id_sertif`),
  ADD KEY `id_data_standar` (`id_data_standar`),
  ADD KEY `id_recordsheet` (`id_recordsheet`) USING BTREE;

--
-- Indeks untuk tabel `kartu_persediaan`
--
ALTER TABLE `kartu_persediaan`
  ADD PRIMARY KEY (`id_kartu_persediaan`),
  ADD KEY `id_persediaan` (`id_persediaan`);

--
-- Indeks untuk tabel `keu_akun`
--
ALTER TABLE `keu_akun`
  ADD PRIMARY KEY (`kode_akun`);

--
-- Indeks untuk tabel `keu_aset_tetap`
--
ALTER TABLE `keu_aset_tetap`
  ADD PRIMARY KEY (`kode_at`);

--
-- Indeks untuk tabel `keu_buku_besar`
--
ALTER TABLE `keu_buku_besar`
  ADD PRIMARY KEY (`id_buku_besar`),
  ADD KEY `no_jurnal` (`no_jurnal`),
  ADD KEY `id_detail_jurnal` (`id_detail_jurnal`);

--
-- Indeks untuk tabel `keu_detail_jurnal`
--
ALTER TABLE `keu_detail_jurnal`
  ADD PRIMARY KEY (`id_detail_jurnal`),
  ADD KEY `kode_akun` (`kode_akun`),
  ADD KEY `no_jurnal` (`no_jurnal`);

--
-- Indeks untuk tabel `keu_detail_supplier`
--
ALTER TABLE `keu_detail_supplier`
  ADD PRIMARY KEY (`id_detail_supplier`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indeks untuk tabel `keu_jurnal`
--
ALTER TABLE `keu_jurnal`
  ADD PRIMARY KEY (`no_jurnal`);

--
-- Indeks untuk tabel `keu_penggajian`
--
ALTER TABLE `keu_penggajian`
  ADD PRIMARY KEY (`id_penggajian`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indeks untuk tabel `keu_penyusutan_at`
--
ALTER TABLE `keu_penyusutan_at`
  ADD PRIMARY KEY (`kode_penyusutan_at`),
  ADD KEY `kode_at` (`kode_at`);

--
-- Indeks untuk tabel `keu_supplier`
--
ALTER TABLE `keu_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `metil_recordsheet`
--
ALTER TABLE `metil_recordsheet`
  ADD PRIMARY KEY (`id_recordsheet`),
  ADD KEY `id_order` (`id_order`);

--
-- Indeks untuk tabel `pemakaian_mb`
--
ALTER TABLE `pemakaian_mb`
  ADD PRIMARY KEY (`id_pemakaian`),
  ADD KEY `id_persediaan` (`id_persediaan`);

--
-- Indeks untuk tabel `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `id_order` (`id_order`);

--
-- Indeks untuk tabel `rekap_hpp`
--
ALTER TABLE `rekap_hpp`
  ADD PRIMARY KEY (`id_rekap`),
  ADD KEY `id_data_standar` (`id_data_standar`),
  ADD KEY `id_rekap_penjualan` (`id_rekap_penjualan`);

--
-- Indeks untuk tabel `rekap_penjualan`
--
ALTER TABLE `rekap_penjualan`
  ADD PRIMARY KEY (`id_rekap_penjualan`),
  ADD KEY `id_invoice` (`id_invoice`);

--
-- Indeks untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id_sertif`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_importer` (`id_importer`),
  ADD KEY `id_recordsheet` (`id_recordsheet`) USING BTREE;

--
-- Indeks untuk tabel `surat_pemberitahuan`
--
ALTER TABLE `surat_pemberitahuan`
  ADD PRIMARY KEY (`id_pemberitahuan`),
  ADD KEY `id_order` (`id_order`);

--
-- Indeks untuk tabel `surat_perintah_kerja`
--
ALTER TABLE `surat_perintah_kerja`
  ADD PRIMARY KEY (`id_spk`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indeks untuk tabel `verifikasi_order`
--
ALTER TABLE `verifikasi_order`
  ADD PRIMARY KEY (`id_verifikasi`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_customer` (`id_customer`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keu_buku_besar`
--
ALTER TABLE `keu_buku_besar`
  MODIFY `id_buku_besar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keu_detail_jurnal`
--
ALTER TABLE `keu_detail_jurnal`
  MODIFY `id_detail_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD CONSTRAINT `bukti_pembayaran_ibfk_1` FOREIGN KEY (`id_invoice`) REFERENCES `invoice` (`id_invoice`),
  ADD CONSTRAINT `bukti_pembayaran_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `data_order` (`id_order`);

--
-- Ketidakleluasaan untuk tabel `ceklist_fumigasi`
--
ALTER TABLE `ceklist_fumigasi`
  ADD CONSTRAINT `ceklist_fumigasi_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `data_order` (`id_order`);

--
-- Ketidakleluasaan untuk tabel `data_harga`
--
ALTER TABLE `data_harga`
  ADD CONSTRAINT `data_harga_ibfk_1` FOREIGN KEY (`id_standar`) REFERENCES `data_hpp_feet` (`id_standar`);

--
-- Ketidakleluasaan untuk tabel `data_order`
--
ALTER TABLE `data_order`
  ADD CONSTRAINT `fk_data_order_customer` FOREIGN KEY (`id_customer`) REFERENCES `data_customer` (`id_customer`),
  ADD CONSTRAINT `fk_data_order_harga` FOREIGN KEY (`id_data_standar`) REFERENCES `data_harga` (`id_data_standar`),
  ADD CONSTRAINT `id_customer` FOREIGN KEY (`id_customer`) REFERENCES `data_customer` (`id_customer`),
  ADD CONSTRAINT `id_data_standar` FOREIGN KEY (`id_data_standar`) REFERENCES `data_harga` (`id_data_standar`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `data_persyaratan`
--
ALTER TABLE `data_persyaratan`
  ADD CONSTRAINT `data_persyaratan_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `data_order` (`id_order`);

--
-- Ketidakleluasaan untuk tabel `data_user_logs`
--
ALTER TABLE `data_user_logs`
  ADD CONSTRAINT `data_user_logs_ibfk_1` FOREIGN KEY (`username`) REFERENCES `data_user` (`username`);

--
-- Ketidakleluasaan untuk tabel `detail_customer`
--
ALTER TABLE `detail_customer`
  ADD CONSTRAINT `detail_customer_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `data_customer` (`id_customer`);

--
-- Ketidakleluasaan untuk tabel `draft_pelayaran`
--
ALTER TABLE `draft_pelayaran`
  ADD CONSTRAINT `draft_pelayaran_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `data_order` (`id_order`);

--
-- Ketidakleluasaan untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `data_order` (`id_order`),
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`id_sertif`) REFERENCES `sertifikat` (`id_sertif`),
  ADD CONSTRAINT `invoice_ibfk_3` FOREIGN KEY (`id_recordsheet`) REFERENCES `metil_recordsheet` (`id_recordsheet`),
  ADD CONSTRAINT `invoice_ibfk_4` FOREIGN KEY (`id_data_standar`) REFERENCES `data_harga` (`id_data_standar`);

--
-- Ketidakleluasaan untuk tabel `kartu_persediaan`
--
ALTER TABLE `kartu_persediaan`
  ADD CONSTRAINT `kartu_persediaan_ibfk_1` FOREIGN KEY (`id_persediaan`) REFERENCES `data_persediaan` (`id_persediaan`);

--
-- Ketidakleluasaan untuk tabel `keu_buku_besar`
--
ALTER TABLE `keu_buku_besar`
  ADD CONSTRAINT `keu_buku_besar_ibfk_1` FOREIGN KEY (`no_jurnal`) REFERENCES `keu_jurnal` (`no_jurnal`),
  ADD CONSTRAINT `keu_buku_besar_ibfk_2` FOREIGN KEY (`id_detail_jurnal`) REFERENCES `keu_detail_jurnal` (`id_detail_jurnal`);

--
-- Ketidakleluasaan untuk tabel `keu_detail_jurnal`
--
ALTER TABLE `keu_detail_jurnal`
  ADD CONSTRAINT `keu_detail_jurnal_ibfk_1` FOREIGN KEY (`kode_akun`) REFERENCES `keu_akun` (`kode_akun`),
  ADD CONSTRAINT `keu_detail_jurnal_ibfk_2` FOREIGN KEY (`no_jurnal`) REFERENCES `keu_jurnal` (`no_jurnal`);

--
-- Ketidakleluasaan untuk tabel `keu_detail_supplier`
--
ALTER TABLE `keu_detail_supplier`
  ADD CONSTRAINT `keu_detail_supplier_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `keu_supplier` (`id_supplier`);

--
-- Ketidakleluasaan untuk tabel `keu_penggajian`
--
ALTER TABLE `keu_penggajian`
  ADD CONSTRAINT `keu_penggajian_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `data_pegawai` (`id_pegawai`);

--
-- Ketidakleluasaan untuk tabel `keu_penyusutan_at`
--
ALTER TABLE `keu_penyusutan_at`
  ADD CONSTRAINT `keu_penyusutan_at_ibfk_1` FOREIGN KEY (`kode_at`) REFERENCES `keu_aset_tetap` (`kode_at`);

--
-- Ketidakleluasaan untuk tabel `metil_recordsheet`
--
ALTER TABLE `metil_recordsheet`
  ADD CONSTRAINT `metil_recordsheet_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `data_order` (`id_order`);

--
-- Ketidakleluasaan untuk tabel `pemakaian_mb`
--
ALTER TABLE `pemakaian_mb`
  ADD CONSTRAINT `pemakaian_mb_ibfk_1` FOREIGN KEY (`id_persediaan`) REFERENCES `data_persediaan` (`id_persediaan`);

--
-- Ketidakleluasaan untuk tabel `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
  ADD CONSTRAINT `pemberitahuan_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `data_order` (`id_order`);

--
-- Ketidakleluasaan untuk tabel `rekap_hpp`
--
ALTER TABLE `rekap_hpp`
  ADD CONSTRAINT `rekap_hpp_ibfk_1` FOREIGN KEY (`id_data_standar`) REFERENCES `data_harga` (`id_data_standar`),
  ADD CONSTRAINT `rekap_hpp_ibfk_2` FOREIGN KEY (`id_rekap_penjualan`) REFERENCES `rekap_penjualan` (`id_rekap_penjualan`);

--
-- Ketidakleluasaan untuk tabel `rekap_penjualan`
--
ALTER TABLE `rekap_penjualan`
  ADD CONSTRAINT `rekap_penjualan_ibfk_1` FOREIGN KEY (`id_invoice`) REFERENCES `invoice` (`id_invoice`);

--
-- Ketidakleluasaan untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD CONSTRAINT `sertifikat_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `data_order` (`id_order`),
  ADD CONSTRAINT `sertifikat_ibfk_2` FOREIGN KEY (`id_importer`) REFERENCES `data_importer` (`id_importer`),
  ADD CONSTRAINT `sertifikat_ibfk_3` FOREIGN KEY (`id_recordsheet`) REFERENCES `metil_recordsheet` (`id_recordsheet`);

--
-- Ketidakleluasaan untuk tabel `surat_pemberitahuan`
--
ALTER TABLE `surat_pemberitahuan`
  ADD CONSTRAINT `surat_pemberitahuan_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `data_order` (`id_order`);

--
-- Ketidakleluasaan untuk tabel `surat_perintah_kerja`
--
ALTER TABLE `surat_perintah_kerja`
  ADD CONSTRAINT `surat_perintah_kerja_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `data_order` (`id_order`),
  ADD CONSTRAINT `surat_perintah_kerja_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `data_pegawai` (`id_pegawai`);

--
-- Ketidakleluasaan untuk tabel `verifikasi_order`
--
ALTER TABLE `verifikasi_order`
  ADD CONSTRAINT `verifikasi_order_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `data_order` (`id_order`),
  ADD CONSTRAINT `verifikasi_order_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `data_customer` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
