-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 11:16 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(12, 'K3'),
(13, 'All'),
(14, 'asdd');

-- --------------------------------------------------------

--
-- Table structure for table `bantingan`
--

CREATE TABLE `bantingan` (
  `id_bantingan` int(11) NOT NULL,
  `tgl_ban` date DEFAULT NULL,
  `tippler_cap_5ton` varchar(50) DEFAULT NULL,
  `sfb_conveyor01` varchar(50) DEFAULT NULL,
  `sfb_conveyor02` varchar(50) DEFAULT NULL,
  `threser01` varchar(50) DEFAULT NULL,
  `threser02` varchar(25) DEFAULT NULL,
  `threser03` varchar(50) DEFAULT NULL,
  `discharge_conveyor01` varchar(50) DEFAULT NULL,
  `discharge_conveyor02` varchar(50) DEFAULT NULL,
  `discharge_conveyor03` varchar(50) DEFAULT NULL,
  `eb_conveyor` varchar(50) DEFAULT NULL,
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boiler`
--

CREATE TABLE `boiler` (
  `id_boiler` int(11) NOT NULL,
  `fsc` varchar(50) NOT NULL,
  `bfdc` varchar(50) NOT NULL,
  `mfs` varchar(50) NOT NULL,
  `mfdc` varchar(50) NOT NULL,
  `bfrc` varchar(50) NOT NULL,
  `steam_b01` varchar(25) NOT NULL,
  `dust_ca__l01` varchar(25) NOT NULL,
  `dust_ca__l02` varchar(25) NOT NULL,
  `ash_c_01` varchar(25) NOT NULL,
  `ash_c_02` varchar(25) NOT NULL,
  `ash_c_03` varchar(25) NOT NULL,
  `ash_c_04` varchar(25) NOT NULL,
  `id_fan01` varchar(25) NOT NULL,
  `fd_fan01` varchar(25) NOT NULL,
  `sa_fan01` varchar(25) NOT NULL,
  `ff_fan01` varchar(25) NOT NULL,
  `fac_01` varchar(25) NOT NULL,
  `fac_02` varchar(25) NOT NULL,
  `fac_03` varchar(25) NOT NULL,
  `compresor_01` varchar(25) NOT NULL,
  `boiler_fp01` varchar(25) NOT NULL,
  `boiler_fp02` varchar(25) NOT NULL,
  `thermal_dearator` varchar(25) NOT NULL,
  `daeratorpump_01` varchar(25) NOT NULL,
  `dearatorpump_02` varchar(25) NOT NULL,
  `cd_pump01` varchar(25) NOT NULL,
  `cd_pump02` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boiler`
--

INSERT INTO `boiler` (`id_boiler`, `fsc`, `bfdc`, `mfs`, `mfdc`, `bfrc`, `steam_b01`, `dust_ca__l01`, `dust_ca__l02`, `ash_c_01`, `ash_c_02`, `ash_c_03`, `ash_c_04`, `id_fan01`, `fd_fan01`, `sa_fan01`, `ff_fan01`, `fac_01`, `fac_02`, `fac_03`, `compresor_01`, `boiler_fp01`, `boiler_fp02`, `thermal_dearator`, `daeratorpump_01`, `dearatorpump_02`, `cd_pump01`, `cd_pump02`, `tanggal`, `ket`) VALUES
(1, 'Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', '', 'Tidak Normal', 'Normal', 'Normal', 'Tidak Normal', 'Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Normal', 'Tidak Normal', 'Tidak Normal', 'Normal', 'Rusak', 'Tidak Normal', 'Standby', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', '2023-02-15', 'assdasdadad');

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
-- Table structure for table `breakdown`
--

CREATE TABLE `breakdown` (
  `id_bt` int(11) NOT NULL,
  `tgl_bt` date NOT NULL,
  `nilai` varchar(20) NOT NULL,
  `ket_bt` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakdown`
--

INSERT INTO `breakdown` (`id_bt`, `tgl_bt`, `nilai`, `ket_bt`) VALUES
(2, '2023-02-08', '2.50', '1. Tanggal 8 Februari2023 Ada Permasalahan di transfer C No 01'),
(4, '2023-02-10', '3.17', ''),
(5, '2023-02-10', '2.51', '');

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
(4, 12, 'First AIDER'),
(5, 3, 'Har'),
(6, 13, 'Manager');

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
(5, 'Assistent'),
(6, 'Superadmin');

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
-- Table structure for table `klarifikasi`
--

CREATE TABLE `klarifikasi` (
  `id_klarifikasi` int(11) NOT NULL,
  `vibrating_screen01` varchar(50) DEFAULT NULL,
  `vibrating_screen02` varchar(50) DEFAULT NULL,
  `vibrating_screen03` varchar(50) DEFAULT NULL,
  `vibrating_screen04` varchar(50) DEFAULT NULL,
  `cop_ssc_01` varchar(50) DEFAULT NULL,
  `cop_ssc_02` varchar(50) DEFAULT NULL,
  `cop_ssc_03` varchar(50) DEFAULT NULL,
  `cop_ssc_04` varchar(50) DEFAULT NULL,
  `sand_cyclone_ssc01` varchar(50) DEFAULT NULL,
  `sand_cyclone_ssc02` varchar(50) DEFAULT NULL,
  `vacum_dryer_w__c_pump_01` varchar(50) DEFAULT NULL,
  `pop_01` varchar(50) DEFAULT NULL,
  `pop_02` varchar(50) DEFAULT NULL,
  `dotp_01` varchar(50) DEFAULT NULL,
  `dotp_02` varchar(50) DEFAULT NULL,
  `flow_meter` varchar(50) DEFAULT NULL,
  `orp_01` varchar(50) DEFAULT NULL,
  `orp_02` varchar(50) DEFAULT NULL,
  `slugepump_01` varchar(50) DEFAULT NULL,
  `slugedump_02` varchar(50) DEFAULT NULL,
  `decanter_01` varchar(50) DEFAULT NULL,
  `decanter_02` varchar(50) DEFAULT NULL,
  `dcc` varchar(50) DEFAULT NULL,
  `heavyphase_p01` varchar(50) DEFAULT NULL,
  `heavyphase_p02` varchar(50) DEFAULT NULL,
  `lighphase_p01` varchar(50) DEFAULT NULL,
  `lighphase_p02` varchar(50) DEFAULT NULL,
  `sluge_s01` varchar(50) DEFAULT NULL,
  `sluge_s02` varchar(50) DEFAULT NULL,
  `sluge_s03` varchar(50) DEFAULT NULL,
  `rsp_01_tfp_2` varchar(50) DEFAULT NULL,
  `rsp_02_tfp_2` varchar(50) DEFAULT NULL,
  `sop_01` varchar(50) DEFAULT NULL,
  `sop_02` varchar(50) DEFAULT NULL,
  `hwp_01` varchar(50) DEFAULT NULL,
  `hwp_02` varchar(50) DEFAULT NULL,
  `compresor` varchar(25) DEFAULT NULL,
  `fat_pit` varchar(25) DEFAULT NULL,
  `oiltank_1` varchar(25) DEFAULT NULL,
  `oiltank_2` varchar(25) DEFAULT NULL,
  `buffertank_decanter` varchar(25) DEFAULT NULL,
  `bt_ss` varchar(25) DEFAULT NULL,
  `recovery_tank` varchar(25) DEFAULT NULL,
  `sluge_tank` varchar(25) DEFAULT NULL,
  `ket` text,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klarifikasi`
--

INSERT INTO `klarifikasi` (`id_klarifikasi`, `vibrating_screen01`, `vibrating_screen02`, `vibrating_screen03`, `vibrating_screen04`, `cop_ssc_01`, `cop_ssc_02`, `cop_ssc_03`, `cop_ssc_04`, `sand_cyclone_ssc01`, `sand_cyclone_ssc02`, `vacum_dryer_w__c_pump_01`, `pop_01`, `pop_02`, `dotp_01`, `dotp_02`, `flow_meter`, `orp_01`, `orp_02`, `slugepump_01`, `slugedump_02`, `decanter_01`, `decanter_02`, `dcc`, `heavyphase_p01`, `heavyphase_p02`, `lighphase_p01`, `lighphase_p02`, `sluge_s01`, `sluge_s02`, `sluge_s03`, `rsp_01_tfp_2`, `rsp_02_tfp_2`, `sop_01`, `sop_02`, `hwp_01`, `hwp_02`, `compresor`, `fat_pit`, `oiltank_1`, `oiltank_2`, `buffertank_decanter`, `bt_ss`, `recovery_tank`, `sluge_tank`, `ket`, `tanggal`) VALUES
(1, 'Tidak Normal', 'Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'asdasdasd', '2023-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `kualitas_brondolan`
--

CREATE TABLE `kualitas_brondolan` (
  `id_kb` int(20) NOT NULL,
  `to_tbs` varchar(20) NOT NULL,
  `segar` varchar(20) NOT NULL,
  `busuk` varchar(20) NOT NULL,
  `sampah` varchar(20) NOT NULL,
  `tgl_kb` date NOT NULL,
  `ket_kb` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kualitas_brondolan`
--

INSERT INTO `kualitas_brondolan` (`id_kb`, `to_tbs`, `segar`, `busuk`, `sampah`, `tgl_kb`, `ket_kb`) VALUES
(1, '1.86', '73.77', '20.49', '4.10', '2023-01-31', '');

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
-- Table structure for table `losses`
--

CREATE TABLE `losses` (
  `id_ls` int(20) NOT NULL,
  `total_oiloss` varchar(20) NOT NULL,
  `olebp` varchar(20) NOT NULL,
  `olfp` varchar(20) NOT NULL,
  `ols` varchar(20) NOT NULL,
  `olfe` varchar(20) NOT NULL,
  `tkl` varchar(20) NOT NULL,
  `kle` varchar(20) NOT NULL,
  `klfc` varchar(20) NOT NULL,
  `kll_1` varchar(20) NOT NULL,
  `kll_2` varchar(20) NOT NULL,
  `klh` varchar(20) NOT NULL,
  `tgl_ls` date NOT NULL,
  `ket_ls` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `losses`
--

INSERT INTO `losses` (`id_ls`, `total_oiloss`, `olebp`, `olfp`, `ols`, `olfe`, `tkl`, `kle`, `klfc`, `kll_1`, `kll_2`, `klh`, `tgl_ls`, `ket_ls`) VALUES
(1, '1.26', '0.00', '0.50', '0.09', '0.47', '0.15', '0.02', '0.08', '0.02', '0.01', '0.02', '2023-01-31', '');

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
-- Table structure for table `nut_kernel`
--

CREATE TABLE `nut_kernel` (
  `id_nutkernel` int(11) NOT NULL,
  `hcbc` varchar(25) DEFAULT NULL,
  `fcf_a__l_01` varchar(25) DEFAULT NULL,
  `fcf_a__l_02` varchar(25) DEFAULT NULL,
  `npd_01` varchar(25) DEFAULT NULL,
  `npd_02` varchar(25) DEFAULT NULL,
  `inclened_wnc_01` varchar(25) DEFAULT NULL,
  `inclened_wnc_02` varchar(25) DEFAULT NULL,
  `wet_ne_01` varchar(25) DEFAULT NULL,
  `wet_ne_02` varchar(25) DEFAULT NULL,
  `nut_df_a__l01` varchar(25) DEFAULT NULL,
  `primari_wf_a__l01` varchar(25) DEFAULT NULL,
  `primari_wf_a__l02` varchar(25) DEFAULT NULL,
  `scondary_wf_a__l01` varchar(25) DEFAULT NULL,
  `scondary_wf_a__l02` varchar(25) DEFAULT NULL,
  `nut_hopper` varchar(25) DEFAULT NULL,
  `rm_01` varchar(25) DEFAULT NULL,
  `rm_02` varchar(25) DEFAULT NULL,
  `rm_03` varchar(25) DEFAULT NULL,
  `rm_04` varchar(25) DEFAULT NULL,
  `cmc_01` varchar(25) DEFAULT NULL,
  `cmc_02` varchar(25) DEFAULT NULL,
  `cms` varchar(25) DEFAULT NULL,
  `hp01_line1` varchar(25) DEFAULT NULL,
  `hp02_line1` varchar(25) DEFAULT NULL,
  `hp03_line1` varchar(25) DEFAULT NULL,
  `hp01_line2` varchar(25) DEFAULT NULL,
  `hp02_line2` varchar(25) DEFAULT NULL,
  `hp03_line2` varchar(25) DEFAULT NULL,
  `wetshell_c` varchar(25) DEFAULT NULL,
  `wetshell_tf` varchar(25) DEFAULT NULL,
  `wkc_01` varchar(25) DEFAULT NULL,
  `wkc_02` varchar(25) DEFAULT NULL,
  `wkc_03` varchar(25) DEFAULT NULL,
  `wke_01` varchar(25) DEFAULT NULL,
  `wke_02` varchar(25) DEFAULT NULL,
  `wkdc` varchar(25) DEFAULT NULL,
  `kds_hf01` varchar(25) DEFAULT NULL,
  `kds_hf02` varchar(25) DEFAULT NULL,
  `kds_hf03` varchar(25) DEFAULT NULL,
  `bottom_kc` varchar(25) DEFAULT NULL,
  `dry_ktf` varchar(25) DEFAULT NULL,
  `kbs_01` varchar(25) DEFAULT NULL,
  `ltds_al1` varchar(25) DEFAULT NULL,
  `ltds_al2` varchar(25) DEFAULT NULL,
  `kernel_silo1` varchar(25) DEFAULT NULL,
  `kernel_silo2` varchar(25) DEFAULT NULL,
  `kernel_silo3` varchar(25) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nut_kernel`
--

INSERT INTO `nut_kernel` (`id_nutkernel`, `hcbc`, `fcf_a__l_01`, `fcf_a__l_02`, `npd_01`, `npd_02`, `inclened_wnc_01`, `inclened_wnc_02`, `wet_ne_01`, `wet_ne_02`, `nut_df_a__l01`, `primari_wf_a__l01`, `primari_wf_a__l02`, `scondary_wf_a__l01`, `scondary_wf_a__l02`, `nut_hopper`, `rm_01`, `rm_02`, `rm_03`, `rm_04`, `cmc_01`, `cmc_02`, `cms`, `hp01_line1`, `hp02_line1`, `hp03_line1`, `hp01_line2`, `hp02_line2`, `hp03_line2`, `wetshell_c`, `wetshell_tf`, `wkc_01`, `wkc_02`, `wkc_03`, `wke_01`, `wke_02`, `wkdc`, `kds_hf01`, `kds_hf02`, `kds_hf03`, `bottom_kc`, `dry_ktf`, `kbs_01`, `ltds_al1`, `ltds_al2`, `kernel_silo1`, `kernel_silo2`, `kernel_silo3`, `tanggal`, `ket`) VALUES
(4, 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', '2023-02-15', 'asdasdasdasd');

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
(5, 'CPKA0005', 'Muhammad Al Farelza', 2, 4),
(6, 'CPKA0006', 'David', 1, 2),
(7, 'CPKA0007', 'Zayn', 5, 2),
(8, 'CPKA0008', 'Bambang', 1, 1),
(9, 'CPKA0009', 'Superadmin', 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan_buah`
--

CREATE TABLE `penerimaan_buah` (
  `id_pb` int(11) NOT NULL,
  `w_1` varchar(20) DEFAULT NULL,
  `w_2` varchar(20) DEFAULT NULL,
  `fc_1` varchar(20) DEFAULT NULL,
  `fc_2` varchar(20) DEFAULT NULL,
  `tgl_pb` date NOT NULL,
  `lori` varchar(20) DEFAULT NULL,
  `ket_pb` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerimaan_buah`
--

INSERT INTO `penerimaan_buah` (`id_pb`, `w_1`, `w_2`, `fc_1`, `fc_2`, `tgl_pb`, `lori`, `ket_pb`) VALUES
(1, 'Normal', 'Normal', 'Normal', 'Normal', '2023-02-08', 'Tidak Normal', 'tgl 8 Feb Lori ada kendala'),
(3, 'Normal', 'Rusak', 'Tidak Normal', 'Standby', '2023-02-02', 'Normal', '11'),
(4, 'Normal', 'Tidak Normal', 'Standby', 'Standby', '2023-02-01', 'Normal', 'amaaan'),
(6, 'Normal', 'Normal', 'Normal', 'Normal', '2023-01-31', 'Normal', 'sip'),
(8, 'Normal', 'Normal', 'Normal', 'Normal', '2023-01-31', 'Normal', 'zzz'),
(9, 'Normal', 'Tidak Normal', 'Normal', 'Tidak Normal', '2023-01-31', 'Normal', 'xxxas'),
(10, '', 'Normal', 'Normal', 'Normal', '2023-02-02', 'Normal', 'bbb'),
(11, 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', '2023-02-14', 'Tidak Normal', 'dgh'),
(13, 'Normal', 'Normal', 'Normal', 'Normal', '1212-12-12', 'Normal', 'coba lukman');

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
-- Table structure for table `pengolahan_limbah`
--

CREATE TABLE `pengolahan_limbah` (
  `id_lim` int(11) NOT NULL,
  `turboaerator_eo2_tj01` varchar(25) NOT NULL,
  `turboaerator_eo2_tj02` varchar(20) NOT NULL,
  `anaerobic_p01` varchar(30) NOT NULL,
  `anaerobic_p02` varchar(30) NOT NULL,
  `sirkulasi_p01` varchar(30) NOT NULL,
  `sirkulasi_p02` varchar(30) NOT NULL,
  `aplikasi_p01` varchar(30) NOT NULL,
  `aplikasi_p02` varchar(30) NOT NULL,
  `aplikasi_p03` varchar(30) NOT NULL,
  `debit_limbah` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `performance_mill`
--

CREATE TABLE `performance_mill` (
  `id_pm` int(20) NOT NULL,
  `oil_extract` varchar(20) NOT NULL,
  `ffa` varchar(20) NOT NULL,
  `moisture_cpo` varchar(20) NOT NULL,
  `dirt_cpo` varchar(20) NOT NULL,
  `kernel_extract` varchar(20) NOT NULL,
  `moisture_kernel` varchar(20) NOT NULL,
  `dirt_kernel` varchar(20) NOT NULL,
  `breakdown` varchar(20) DEFAULT NULL,
  `tgl_pm` date NOT NULL,
  `ket_pm` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance_mill`
--

INSERT INTO `performance_mill` (`id_pm`, `oil_extract`, `ffa`, `moisture_cpo`, `dirt_cpo`, `kernel_extract`, `moisture_kernel`, `dirt_kernel`, `breakdown`, `tgl_pm`, `ket_pm`) VALUES
(1, '20.11', '5.84', '0.18', '0.022', '4.47', '2.92', '3.77', NULL, '2023-01-31', '');

-- --------------------------------------------------------

--
-- Table structure for table `press`
--

CREATE TABLE `press` (
  `id_press` int(11) NOT NULL,
  `bottom_cross_conveyor` varchar(50) NOT NULL,
  `fruit_evalator01` varchar(50) NOT NULL,
  `fruit_evalator02` varchar(50) NOT NULL,
  `fruit_evalator03` varchar(50) NOT NULL,
  `top_fdc` varchar(50) NOT NULL,
  `digester01` varchar(50) NOT NULL,
  `digester02` varchar(50) NOT NULL,
  `digester03` varchar(50) NOT NULL,
  `digester04` varchar(50) NOT NULL,
  `digester05` varchar(50) NOT NULL,
  `press01` varchar(50) NOT NULL,
  `press02` varchar(50) NOT NULL,
  `press03` varchar(50) NOT NULL,
  `press04` varchar(50) NOT NULL,
  `press05` varchar(50) NOT NULL,
  `sand_trap_tank` varchar(50) NOT NULL,
  `screen_waste_conveyor01` varchar(50) NOT NULL,
  `screen_waste_conveyor02` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `press`
--

INSERT INTO `press` (`id_press`, `bottom_cross_conveyor`, `fruit_evalator01`, `fruit_evalator02`, `fruit_evalator03`, `top_fdc`, `digester01`, `digester02`, `digester03`, `digester04`, `digester05`, `press01`, `press02`, `press03`, `press04`, `press05`, `sand_trap_tank`, `screen_waste_conveyor01`, `screen_waste_conveyor02`, `keterangan`, `tanggal`) VALUES
(1, 'Normal', 'Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Normal', 'Tidak Normal', 'Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'adsasdasd', '2023-02-15');

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
-- Table structure for table `rebusan_proses`
--

CREATE TABLE `rebusan_proses` (
  `id_reb` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `fruit_tc01` varchar(20) DEFAULT NULL,
  `fruit_tc02` varchar(20) DEFAULT NULL,
  `sterilizer01` varchar(20) DEFAULT NULL,
  `sterilizer02` varchar(20) DEFAULT NULL,
  `sterilizer03` varchar(20) DEFAULT NULL,
  `drawbrige01` varchar(20) DEFAULT NULL,
  `drawbrige02` varchar(20) DEFAULT NULL,
  `drawbrige03` varchar(20) DEFAULT NULL,
  `power_pack1` varchar(20) DEFAULT NULL,
  `power_pack2` varchar(20) DEFAULT NULL,
  `power_pack3` varchar(20) DEFAULT NULL,
  `hut01` varchar(20) DEFAULT NULL,
  `hut02` varchar(20) DEFAULT NULL,
  `hut03` varchar(20) DEFAULT NULL,
  `hut04` varchar(20) DEFAULT NULL,
  `hut05` varchar(20) DEFAULT NULL,
  `hut06` varchar(20) DEFAULT NULL,
  `hut07` varchar(20) DEFAULT NULL,
  `blowdown_chambers` varchar(20) DEFAULT NULL,
  `ket_reb` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rebusan_proses`
--

INSERT INTO `rebusan_proses` (`id_reb`, `tanggal`, `fruit_tc01`, `fruit_tc02`, `sterilizer01`, `sterilizer02`, `sterilizer03`, `drawbrige01`, `drawbrige02`, `drawbrige03`, `power_pack1`, `power_pack2`, `power_pack3`, `hut01`, `hut02`, `hut03`, `hut04`, `hut05`, `hut06`, `hut07`, `blowdown_chambers`, `ket_reb`) VALUES
(1, '2023-02-13', 'Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Normal', 'Normal', 'Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Normal', 'Normal', 'Normal', 'Tidak Normal', 'Tidak Normal', 'Tidak Normal', 'Normal', 'Normal', 'Normal', '123');

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
-- Table structure for table `tangki_timbun`
--

CREATE TABLE `tangki_timbun` (
  `id_tt` int(11) NOT NULL,
  `st1` varchar(20) NOT NULL,
  `st2` varchar(20) NOT NULL,
  `odp1` varchar(20) NOT NULL,
  `odp2` varchar(20) NOT NULL,
  `tgl_tt` date NOT NULL,
  `ket_tt` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbs_eksternal`
--

CREATE TABLE `tbs_eksternal` (
  `id_eks` int(20) NOT NULL,
  `unripe` varchar(20) NOT NULL,
  `under` varchar(20) NOT NULL,
  `ripe` varchar(20) NOT NULL,
  `over_r` varchar(20) NOT NULL,
  `empty_b` varchar(20) NOT NULL,
  `abnormal` varchar(20) NOT NULL,
  `long_stalk` varchar(20) NOT NULL,
  `tgl_eks` date NOT NULL,
  `ket_eks` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbs_eksternal`
--

INSERT INTO `tbs_eksternal` (`id_eks`, `unripe`, `under`, `ripe`, `over_r`, `empty_b`, `abnormal`, `long_stalk`, `tgl_eks`, `ket_eks`) VALUES
(1, '0.00', '8.00', '74.50', '15.00', '0.00', '0.00', '2.50', '2023-01-31', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbs_internal`
--

CREATE TABLE `tbs_internal` (
  `id_inter` int(20) NOT NULL,
  `unripe` varchar(20) NOT NULL,
  `under` varchar(20) NOT NULL,
  `ripe` varchar(20) NOT NULL,
  `over_r` varchar(20) NOT NULL,
  `empty_b` varchar(20) NOT NULL,
  `abnormal` varchar(20) NOT NULL,
  `long_stalk` varchar(20) NOT NULL,
  `tgl_inter` date NOT NULL,
  `ket_inter` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbs_internal`
--

INSERT INTO `tbs_internal` (`id_inter`, `unripe`, `under`, `ripe`, `over_r`, `empty_b`, `abnormal`, `long_stalk`, `tgl_inter`, `ket_inter`) VALUES
(1, '2.13', '0.95', '91.60', '3.55', '1.78', '0.00', '0.12', '2023-01-31', '');

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
  `level` enum('Manager','Administrator','Admin_LAB','Admin_Proses','Admin_Maintenance','Admin_K3','Operator_Lab','Operator_Proses','Operator_Maintenaance','Operator_K3','Admin_Har','Superadmin') NOT NULL,
  `status` text NOT NULL,
  `foto` text NOT NULL,
  `id_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `status`, `foto`, `id_pegawai`) VALUES
(1, 'Rusyaidi Shadik Uchtary', 'Admin', 'Admin', 'Administrator', 'Aktif', 'cpka.png', 4),
(2, 'Muhammad Mahli', 'Admin Lab', 'Admin Lab', 'Admin_LAB', 'Aktif', 'cpka.png', 1),
(3, 'Muhammad Al Farelza', 'Operator Lab', 'Operator Lab', 'Operator_Lab', 'Aktif', 'WhatsApp Image 2022-12-14 at 09.35.06.jpeg', 5),
(4, 'Intan Nuril Azizah', 'Admin Proses', 'Admin Proses', 'Admin_Proses', 'Aktif', '', 6),
(5, 'Trevina Sabrina Erin', 'Admin Maintenance', 'Admin Maintenance', 'Admin_Maintenance', 'Aktif', '', 7),
(6, 'Manager', 'Manager', 'Manager', 'Manager', 'Aktif', '', 8),
(7, 'Superadmin', 'superadmin', 'superadmin', 'Superadmin', 'Aktif', '', 9),
(8, 'Widia Wulandari', 'Admin K3', 'Admin K3', 'Admin_K3', 'Aktif', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `water_treatment`
--

CREATE TABLE `water_treatment` (
  `id_water_treatment` int(11) NOT NULL,
  `waterintake_p01` varchar(15) DEFAULT NULL,
  `waterintake_02` varchar(30) DEFAULT NULL,
  `rawwater_p01` varchar(30) DEFAULT NULL,
  `rawwater_p02` varchar(30) DEFAULT NULL,
  `sandfilter_p01` varchar(30) DEFAULT NULL,
  `sandfilter_p02` varchar(30) DEFAULT NULL,
  `softener_p01` varchar(30) DEFAULT NULL,
  `softener_p02` varchar(30) DEFAULT NULL,
  `cdp_soda` varchar(30) DEFAULT NULL,
  `cdp_alum` varchar(30) DEFAULT NULL,
  `cdp_pholymer` varchar(30) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `bantingan`
--
ALTER TABLE `bantingan`
  ADD PRIMARY KEY (`id_bantingan`);

--
-- Indexes for table `boiler`
--
ALTER TABLE `boiler`
  ADD PRIMARY KEY (`id_boiler`);

--
-- Indexes for table `boiler_proses`
--
ALTER TABLE `boiler_proses`
  ADD PRIMARY KEY (`id_boiler`);

--
-- Indexes for table `breakdown`
--
ALTER TABLE `breakdown`
  ADD PRIMARY KEY (`id_bt`);

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
-- Indexes for table `kualitas_brondolan`
--
ALTER TABLE `kualitas_brondolan`
  ADD PRIMARY KEY (`id_kb`);

--
-- Indexes for table `lab_k3`
--
ALTER TABLE `lab_k3`
  ADD PRIMARY KEY (`id_lab_k3`);

--
-- Indexes for table `losses`
--
ALTER TABLE `losses`
  ADD PRIMARY KEY (`id_ls`);

--
-- Indexes for table `maintenance_lab`
--
ALTER TABLE `maintenance_lab`
  ADD PRIMARY KEY (`id_maintenance_lab`);

--
-- Indexes for table `nut_kernel`
--
ALTER TABLE `nut_kernel`
  ADD PRIMARY KEY (`id_nutkernel`);

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
-- Indexes for table `penerimaan_buah`
--
ALTER TABLE `penerimaan_buah`
  ADD PRIMARY KEY (`id_pb`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `pengolahan_limbah`
--
ALTER TABLE `pengolahan_limbah`
  ADD PRIMARY KEY (`id_lim`);

--
-- Indexes for table `performance_mill`
--
ALTER TABLE `performance_mill`
  ADD PRIMARY KEY (`id_pm`);

--
-- Indexes for table `press`
--
ALTER TABLE `press`
  ADD PRIMARY KEY (`id_press`);

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
-- Indexes for table `rebusan_proses`
--
ALTER TABLE `rebusan_proses`
  ADD PRIMARY KEY (`id_reb`);

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
-- Indexes for table `tangki_timbun`
--
ALTER TABLE `tangki_timbun`
  ADD PRIMARY KEY (`id_tt`);

--
-- Indexes for table `tbs_eksternal`
--
ALTER TABLE `tbs_eksternal`
  ADD PRIMARY KEY (`id_eks`);

--
-- Indexes for table `tbs_internal`
--
ALTER TABLE `tbs_internal`
  ADD PRIMARY KEY (`id_inter`);

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
-- Indexes for table `water_treatment`
--
ALTER TABLE `water_treatment`
  ADD PRIMARY KEY (`id_water_treatment`);

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
  MODIFY `id_bagian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `boiler_proses`
--
ALTER TABLE `boiler_proses`
  MODIFY `id_boiler` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `breakdown`
--
ALTER TABLE `breakdown`
  MODIFY `id_bt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `catatan_sk`
--
ALTER TABLE `catatan_sk`
  MODIFY `id_sk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `kualitas_brondolan`
--
ALTER TABLE `kualitas_brondolan`
  MODIFY `id_kb` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lab_k3`
--
ALTER TABLE `lab_k3`
  MODIFY `id_lab_k3` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `losses`
--
ALTER TABLE `losses`
  MODIFY `id_ls` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penerimaan_buah`
--
ALTER TABLE `penerimaan_buah`
  MODIFY `id_pb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `performance_mill`
--
ALTER TABLE `performance_mill`
  MODIFY `id_pm` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_shift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sterilizer_proses`
--
ALTER TABLE `sterilizer_proses`
  MODIFY `id_st` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tangki_timbun`
--
ALTER TABLE `tangki_timbun`
  MODIFY `id_tt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbs_eksternal`
--
ALTER TABLE `tbs_eksternal`
  MODIFY `id_eks` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbs_internal`
--
ALTER TABLE `tbs_internal`
  MODIFY `id_inter` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tippler_proses`
--
ALTER TABLE `tippler_proses`
  MODIFY `id_tp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `water_treatment`
--
ALTER TABLE `water_treatment`
  MODIFY `id_water_treatment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wtp_lab`
--
ALTER TABLE `wtp_lab`
  MODIFY `id_wtp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
