-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 09:08 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpka`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id_arsip` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id_arsip`, `id_user`, `judul`, `file`) VALUES
(4, 3, 'asdadad', 'Pedoman IT Proyek.pdf'),
(5, 3, 'WTP 14 DESEMBER 2022', 'Otika - Admin Dashboard Template.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE `bagian` (
  `id_bagian` int(11) NOT NULL,
  `bagian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id_bagian`, `bagian`) VALUES
(1, 'Press'),
(2, 'Boiler'),
(3, 'WTP'),
(4, 'Turbin'),
(5, 'Tippler'),
(6, 'Klarifikasi'),
(7, 'Genzet'),
(8, 'Stilizer'),
(9, 'Storage Tank'),
(10, 'Greding'),
(11, 'Bengkel'),
(12, 'K3');

-- --------------------------------------------------------

--
-- Table structure for table `boiler_proses`
--

CREATE TABLE `boiler_proses` (
  `id_boiler` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `deaerator_temp` varchar(50) NOT NULL,
  `fecd_tank_kgcm2` varchar(25) NOT NULL,
  `shoot_blowing` varchar(50) NOT NULL,
  `shoot_outlet_vacum_mmh2o` varchar(50) NOT NULL,
  `preasure_indicator_controller_kgcm2` varchar(50) NOT NULL,
  `vlue_gas_exit_temp_c` varchar(50) NOT NULL,
  `recorder_water_flow` varchar(50) NOT NULL,
  `recorder_steam_flow` varchar(50) NOT NULL,
  `boiler_blow_down` varchar(50) NOT NULL,
  `idf_amp` varchar(50) NOT NULL,
  `saf_amp` varchar(50) NOT NULL,
  `fdf_amp` varchar(50) NOT NULL,
  `fff_amp` varchar(50) NOT NULL,
  `feed_wtf_pump_amp` varchar(50) NOT NULL,
  `hour_meter_id_fen` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `ass_processing` int(11) NOT NULL,
  `operator1` int(11) NOT NULL,
  `shift1_ass` varchar(50) NOT NULL,
  `shift2_ass` varchar(50) NOT NULL,
  `shift1_operator` varchar(50) NOT NULL,
  `shift2_operator` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catatan_sk`
--

CREATE TABLE `catatan_sk` (
  `id_sk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `hari` text NOT NULL,
  `jam` time NOT NULL,
  `v_dryer_tekanan1` varchar(100) NOT NULL,
  `v_dryer_tekanan2` varchar(100) NOT NULL,
  `temperatur umpan_st1` varchar(100) NOT NULL,
  `temperatur umpan_st2` varchar(100) NOT NULL,
  `temperatur umpan_cot1` varchar(100) NOT NULL,
  `temperatur umpan_cot2` varchar(100) NOT NULL,
  `hot_water` varchar(100) NOT NULL,
  `temperatur_pot1` varchar(100) NOT NULL,
  `temperatur_pot2` varchar(100) NOT NULL,
  `temperatur_decanter1` varchar(100) NOT NULL,
  `temperatur_decanter2` varchar(100) NOT NULL,
  `temperatur_separator1` varchar(100) NOT NULL,
  `temperatur_separator2` varchar(100) NOT NULL,
  `temperatur_separator3` varchar(100) NOT NULL,
  `jam_km_decanter_awal` varchar(100) NOT NULL,
  `jam_km_decanter_akhir` varchar(100) NOT NULL,
  `jam_km_decanter_selisih` varchar(100) NOT NULL,
  `jam_km_separator_awal` varchar(100) NOT NULL,
  `jam_km_separator_akhir` varchar(100) NOT NULL,
  `jam_km_separator_selisih` varchar(100) NOT NULL,
  `jam_km_ofm_awal` varchar(100) NOT NULL,
  `jam_km_ofm_akhir` varchar(100) NOT NULL,
  `jam_km_ofm_selisih` varchar(100) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `divisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `id_bagian`, `divisi`) VALUES
(1, 1, 'Prosess'),
(2, 3, 'Lab'),
(3, 11, 'Maintenance'),
(4, 12, 'First AIDER');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Administrator Kantor'),
(2, 'Admin'),
(3, 'Manager'),
(4, 'Operator'),
(5, 'Assistent');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_shift`
--

CREATE TABLE `jadwal_shift` (
  `id_jadwal_shift` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_shift` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_shift`
--

INSERT INTO `jadwal_shift` (`id_jadwal_shift`, `id_user`, `id_shift`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kantor_k3`
--

CREATE TABLE `kantor_k3` (
  `id_kantor_k3` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `item_audit` varchar(100) NOT NULL,
  `item_pengecekan` text NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `temuan` text NOT NULL,
  `corectiv_action` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `jan` varchar(100) NOT NULL,
  `no_item_check` varchar(100) NOT NULL,
  `min_point` varchar(100) NOT NULL,
  `actual_point` varchar(100) NOT NULL,
  `point_yang_dinilai` varchar(100) NOT NULL,
  `total_nilai` varchar(100) NOT NULL,
  `nilai_rata_rata` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `penilaian` varchar(100) NOT NULL,
  `hasil_evaluasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lab_k3`
--

CREATE TABLE `lab_k3` (
  `id_lab_k3` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `item_audit` varchar(100) NOT NULL,
  `item_pengecekan` varchar(100) NOT NULL,
  `nilai` int(11) NOT NULL,
  `temuan` varchar(100) NOT NULL,
  `corectiv_action` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `jan` varchar(100) NOT NULL,
  `no_item_check` int(11) NOT NULL,
  `min_point` int(11) NOT NULL,
  `actual_point` int(11) NOT NULL,
  `point_yang_dinilai` int(11) NOT NULL,
  `total_nilai` int(11) NOT NULL,
  `nilai_rata_rata` int(11) NOT NULL,
  `note` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `penilaian` varchar(100) NOT NULL,
  `hasil_evaluasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_lab`
--

CREATE TABLE `maintenance_lab` (
  `id_maintenance_lab` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `item_audit` varchar(100) NOT NULL,
  `item_pengecekan` varchar(100) NOT NULL,
  `nilai` int(11) NOT NULL,
  `temuan` varchar(100) NOT NULL,
  `corectiv_action` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `jan` varchar(100) NOT NULL,
  `no_item_check` int(11) NOT NULL,
  `min_point` int(11) NOT NULL,
  `actual_point` int(11) NOT NULL,
  `point_yang_dinilai` int(11) NOT NULL,
  `total_nilai` int(11) NOT NULL,
  `nilai_rata_rata` int(11) NOT NULL,
  `note` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `penilaian` varchar(100) NOT NULL,
  `hasil_evaluasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `operasi_genset_proses`
--

CREATE TABLE `operasi_genset_proses` (
  `id_og` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `no_dokumen` varchar(50) NOT NULL,
  `revisi` varchar(25) NOT NULL,
  `tanggal_berlaku` date NOT NULL,
  `halaman` varchar(20) NOT NULL,
  `hari` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `meter_jam` varchar(50) NOT NULL,
  `om_tek` varchar(50) NOT NULL,
  `om_temp` varchar(50) NOT NULL,
  `temp_air_pendingin` varchar(50) NOT NULL,
  `rpm_mesin` varchar(50) NOT NULL,
  `volt_batt` varchar(50) NOT NULL,
  `volt_generator` varchar(50) NOT NULL,
  `ampere_r` varchar(50) NOT NULL,
  `ampere_s` varchar(50) NOT NULL,
  `ampere_t` varchar(50) NOT NULL,
  `hz` varchar(50) NOT NULL,
  `rf` varchar(50) NOT NULL,
  `kwh` varchar(50) NOT NULL,
  `pemakaian_solar_ltr` varchar(50) NOT NULL,
  `kw` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `ass_processing` int(11) NOT NULL,
  `operator1` int(11) NOT NULL,
  `shift1_ass` varchar(50) NOT NULL,
  `shift2_ass` varchar(50) NOT NULL,
  `shift_operator1` varchar(50) NOT NULL,
  `shift_operator2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_card` varchar(10) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_card`, `nama_lengkap`, `id_divisi`, `id_jabatan`) VALUES
(1, 'CPKA0001', 'Intan Nuril Azizah', 2, 2),
(2, 'CPKA0002', 'Widya Wulandari', 1, 2),
(3, 'CPKA0003', 'Trevina Sabrina Erin', 3, 2),
(4, 'CPKA0004', 'Rusyaidi Shadik Uchtary', 4, 1),
(5, 'CPKA0005', 'Muhammad Al Farelza', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `nama` text NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `nama`, `komentar`) VALUES
(1, 's', 's'),
(2, 'sdfdsfsdf', 'fsdfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `proses_k3`
--

CREATE TABLE `proses_k3` (
  `id_proses_k3` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `item_audit` varchar(100) NOT NULL,
  `item_pengecekan` varchar(100) NOT NULL,
  `nilai` int(11) NOT NULL,
  `temuan` varchar(100) NOT NULL,
  `corectiv_action` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `no_item_check` int(11) NOT NULL,
  `min_point` int(11) NOT NULL,
  `actual_point` int(11) NOT NULL,
  `point_yang_dinilai` int(11) NOT NULL,
  `total_nilai` int(11) NOT NULL,
  `nilai_rata_rata` int(11) NOT NULL,
  `note` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `penilaian` varchar(100) NOT NULL,
  `hasil_evaluasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `puas`
--

CREATE TABLE `puas` (
  `id_puas` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `station_substation` int(11) NOT NULL,
  `sat` int(11) NOT NULL,
  `std` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `quality control` int(11) NOT NULL,
  `performance_mill` int(11) NOT NULL,
  `loses` int(11) NOT NULL,
  `kualitas_tbs_tbs_internal` int(11) NOT NULL,
  `tbs_eksternal` int(11) NOT NULL,
  `kualitas_brondolan` int(11) NOT NULL,
  `maintenance` varchar(50) NOT NULL,
  `station_penerimaan buah` varchar(50) NOT NULL,
  `station_rebusan` varchar(50) NOT NULL,
  `station_bantingan` varchar(50) NOT NULL,
  `station_press` varchar(50) NOT NULL,
  `station_klarifikasi` varchar(50) NOT NULL,
  `station_nut_dan_kernel` varchar(50) NOT NULL,
  `station_boiler` varchar(50) NOT NULL,
  `station_kamar_mesin` varchar(50) NOT NULL,
  `station_tangki_timbunn` varchar(50) NOT NULL,
  `station_water_treatment` varchar(50) NOT NULL,
  `station_pengolahan_limbah` varchar(50) NOT NULL,
  `station_janjang_kosong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id_shift` int(11) NOT NULL,
  `shift` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id_shift`, `shift`, `keterangan`) VALUES
(1, 'Shift 1', 'acc.png'),
(2, 'Shift 2', 'acc.png');

-- --------------------------------------------------------

--
-- Table structure for table `sterilizer_proses`
--

CREATE TABLE `sterilizer_proses` (
  `id_st` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_st` varchar(50) NOT NULL,
  `tutup_pintu` time NOT NULL,
  `isi_uappertama` time NOT NULL,
  `tekanan_gaugepeak1_akhir` varchar(50) NOT NULL,
  `tekanan_gaugepeak2_akhir` varchar(50) NOT NULL,
  `tekanan_geugepeak3_akhir` varchar(50) NOT NULL,
  `buang_uapterakhir` varchar(50) NOT NULL,
  `buka_pintu` time NOT NULL,
  `keterangan` text NOT NULL,
  `ass_procesing` int(11) NOT NULL,
  `operator1` int(11) NOT NULL,
  `shift1_ass` varchar(50) NOT NULL,
  `shift2_ass` varchar(50) NOT NULL,
  `shift_procesing1` varchar(50) NOT NULL,
  `shift_procesing2` varchar(50) NOT NULL,
  `tekanan_gaugepeak1_awal` varchar(50) NOT NULL,
  `tekanan_gaugepeak2_awal` varchar(50) NOT NULL,
  `tekanan_gaugepeak3_awal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tippler_proses`
--

CREATE TABLE `tippler_proses` (
  `id_tp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `hari` text NOT NULL,
  `tanggal` date NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `jmlh_lori` varchar(100) NOT NULL,
  `jumlah_lori` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('Manager','Administrator','Admin_LAB','Admin_Proses','Admin_Maintenance','Admin_K3','Operator_Lab','Operator_Proses','Operator_Maintenaance','Operator_K3') NOT NULL,
  `status` text NOT NULL,
  `foto` text NOT NULL,
  `id_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `status`, `foto`, `id_pegawai`) VALUES
(1, 'Rusyaidi Shadik Uchtary', 'Admin', 'Admin', 'Administrator', 'Aktif', 'WhatsApp Image 2022-12-06 at 11.00.17.jpeg', 4),
(2, 'Intan Nuril Azizah', 'Admin Lab', 'Admin Lab', 'Admin_LAB', 'Aktif', '2001301139_Widya Wulandari.jpg', 1),
(3, 'Muhammad Al Farelza', 'Operator Lab', 'Operator Lab', 'Operator_Lab', 'Aktif', 'WhatsApp Image 2022-12-14 at 09.35.06.jpeg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `wtp_lab`
--

CREATE TABLE `wtp_lab` (
  `id_wtp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `start_water_intake` time NOT NULL,
  `stop_water_intake` time NOT NULL,
  `start_raw_water` time NOT NULL,
  `stop_raw_water` time NOT NULL,
  `start_sand_filter1` time NOT NULL,
  `stop_sand_filter1` time NOT NULL,
  `start_sand_filter2` time NOT NULL,
  `stop_sand_filter2` time NOT NULL,
  `start_softener1` time NOT NULL,
  `stop_softener1` time NOT NULL,
  `start_softener2` time NOT NULL,
  `stop_softener2` time NOT NULL,
  `start_pump_domestic1` time NOT NULL,
  `stop_pump_domestic1` time NOT NULL,
  `start_pump_domestic2` time NOT NULL,
  `stop_pump_domestic2` time NOT NULL,
  `soda` varchar(50) NOT NULL,
  `alum` varchar(50) NOT NULL,
  `N3273` varchar(50) NOT NULL,
  `N214` varchar(50) NOT NULL,
  `N2811` varchar(50) NOT NULL,
  `polymer` varchar(50) NOT NULL,
  `NaCL` varchar(50) NOT NULL,
  `proses_awal` varchar(50) NOT NULL,
  `proses_akhir` varchar(20) NOT NULL,
  `boiler_awal` varchar(50) NOT NULL,
  `boiler_akhir` varchar(20) NOT NULL,
  `domestic_awal` varchar(50) NOT NULL,
  `domestic_akhir` varchar(20) NOT NULL,
  `waduk` varchar(50) NOT NULL,
  `sungai` varchar(50) NOT NULL,
  `id_jadwal_shift` int(11) NOT NULL,
  `status_operator` varchar(20) NOT NULL,
  `status_admin` varchar(20) NOT NULL,
  `status_ass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wtp_lab`
--

INSERT INTO `wtp_lab` (`id_wtp`, `id_user`, `tanggal`, `start_water_intake`, `stop_water_intake`, `start_raw_water`, `stop_raw_water`, `start_sand_filter1`, `stop_sand_filter1`, `start_sand_filter2`, `stop_sand_filter2`, `start_softener1`, `stop_softener1`, `start_softener2`, `stop_softener2`, `start_pump_domestic1`, `stop_pump_domestic1`, `start_pump_domestic2`, `stop_pump_domestic2`, `soda`, `alum`, `N3273`, `N214`, `N2811`, `polymer`, `NaCL`, `proses_awal`, `proses_akhir`, `boiler_awal`, `boiler_akhir`, `domestic_awal`, `domestic_akhir`, `waduk`, `sungai`, `id_jadwal_shift`, `status_operator`, `status_admin`, `status_ass`) VALUES
(4, 1, '2022-12-30', '00:56:00', '00:53:00', '00:58:00', '00:59:00', '00:59:00', '00:59:00', '00:57:00', '00:57:00', '00:58:00', '00:59:00', '00:55:00', '00:59:00', '00:57:00', '00:59:00', '00:55:00', '00:56:00', '213', '2', '2', '2', '2', '2', '2', '23', '2', '2', '2', '2', '2', '2', '2', 1, 'Hilang', 'Selesai', ''),
(5, 3, '2022-12-15', '11:03:00', '11:02:00', '11:04:00', '04:00:00', '11:05:00', '11:05:00', '11:04:00', '11:05:00', '11:04:00', '11:05:00', '11:06:00', '11:04:00', '11:06:00', '11:07:00', '11:06:00', '03:01:00', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1', '1', 1, 'Hilang', 'Selesai', ''),
(6, 3, '2022-12-15', '18:59:00', '20:00:00', '21:58:00', '23:03:00', '22:58:00', '22:58:00', '18:02:00', '18:59:00', '18:03:00', '18:04:00', '18:02:00', '18:02:00', '18:02:00', '18:03:00', '18:04:00', '18:03:00', '122', '122', '122', '122', '122', '122', '122', '122', '122', '122', '122', '122', '122', '122', '122', 1, 'Hilang', 'Selesai', 'Menunggu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `boiler_proses`
--
ALTER TABLE `boiler_proses`
  ADD PRIMARY KEY (`id_boiler`);

--
-- Indexes for table `catatan_sk`
--
ALTER TABLE `catatan_sk`
  ADD PRIMARY KEY (`id_sk`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jadwal_shift`
--
ALTER TABLE `jadwal_shift`
  ADD PRIMARY KEY (`id_jadwal_shift`);

--
-- Indexes for table `kantor_k3`
--
ALTER TABLE `kantor_k3`
  ADD PRIMARY KEY (`id_kantor_k3`);

--
-- Indexes for table `lab_k3`
--
ALTER TABLE `lab_k3`
  ADD PRIMARY KEY (`id_lab_k3`);

--
-- Indexes for table `maintenance_lab`
--
ALTER TABLE `maintenance_lab`
  ADD PRIMARY KEY (`id_maintenance_lab`);

--
-- Indexes for table `operasi_genset_proses`
--
ALTER TABLE `operasi_genset_proses`
  ADD PRIMARY KEY (`id_og`),
  ADD KEY `id_og` (`id_og`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `proses_k3`
--
ALTER TABLE `proses_k3`
  ADD PRIMARY KEY (`id_proses_k3`);

--
-- Indexes for table `puas`
--
ALTER TABLE `puas`
  ADD PRIMARY KEY (`id_puas`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id_shift`);

--
-- Indexes for table `sterilizer_proses`
--
ALTER TABLE `sterilizer_proses`
  ADD PRIMARY KEY (`id_st`);

--
-- Indexes for table `tippler_proses`
--
ALTER TABLE `tippler_proses`
  ADD PRIMARY KEY (`id_tp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wtp_lab`
--
ALTER TABLE `wtp_lab`
  ADD PRIMARY KEY (`id_wtp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id_bagian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `boiler_proses`
--
ALTER TABLE `boiler_proses`
  MODIFY `id_boiler` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `catatan_sk`
--
ALTER TABLE `catatan_sk`
  MODIFY `id_sk` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jadwal_shift`
--
ALTER TABLE `jadwal_shift`
  MODIFY `id_jadwal_shift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kantor_k3`
--
ALTER TABLE `kantor_k3`
  MODIFY `id_kantor_k3` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lab_k3`
--
ALTER TABLE `lab_k3`
  MODIFY `id_lab_k3` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `maintenance_lab`
--
ALTER TABLE `maintenance_lab`
  MODIFY `id_maintenance_lab` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `operasi_genset_proses`
--
ALTER TABLE `operasi_genset_proses`
  MODIFY `id_og` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `proses_k3`
--
ALTER TABLE `proses_k3`
  MODIFY `id_proses_k3` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `puas`
--
ALTER TABLE `puas`
  MODIFY `id_puas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id_shift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sterilizer_proses`
--
ALTER TABLE `sterilizer_proses`
  MODIFY `id_st` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tippler_proses`
--
ALTER TABLE `tippler_proses`
  MODIFY `id_tp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `wtp_lab`
--
ALTER TABLE `wtp_lab`
  MODIFY `id_wtp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
