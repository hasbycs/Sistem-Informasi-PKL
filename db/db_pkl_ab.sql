-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Okt 2017 pada 17.04
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pkl_ab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `angkatan`
--

CREATE TABLE IF NOT EXISTS `angkatan` (
`id` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `kaprodi` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `angkatan`
--

INSERT INTO `angkatan` (`id`, `tahun`, `kaprodi`) VALUES
(1, '2017/2018', '19770504 200501 2 003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapembimbing`
--

CREATE TABLE IF NOT EXISTS `datapembimbing` (
`id` int(11) NOT NULL,
  `mahasiswa` varchar(10) NOT NULL,
  `pembimbing` varchar(10) NOT NULL,
  `ankt_bp` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datapembimbing`
--

INSERT INTO `datapembimbing` (`id`, `mahasiswa`, `pembimbing`, `ankt_bp`) VALUES
(2, '1401062042', '0001118101', '2015'),
(3, '1501061019', '0012087702', '2015'),
(4, '1501061034', '0011086109', '2015'),
(5, '1501062041', '0012087702', '2015'),
(6, '1501062061', '0009047602', '2015'),
(7, '1501061047', '1019860212', '2015'),
(9, '1501061018', '0009026904', '2015'),
(10, '1501061008', '0012056209', '2015'),
(11, '1501061004', '0004057706', '2015'),
(12, '1501061043', '0004057706', '2015'),
(13, '1501062031', '0003047406', '2015'),
(14, '1401092003', '0009047602', '2015'),
(15, '1501062033', '0007106901', '2015'),
(16, '1501061009', '0012087702', '2015'),
(17, '1501062011', '0008067102', '2015'),
(18, '1501061030', '0004047605', '2015'),
(19, '1501061052', '0009026904', '2015'),
(20, '1501062056', '0001118101', '2015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `dsn_nidn` varchar(10) NOT NULL,
  `dsn_nip` varchar(30) NOT NULL,
  `dsn_nama` varchar(70) NOT NULL,
  `dsn_notelp` varchar(15) NOT NULL,
  `dsn_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`dsn_nidn`, `dsn_nip`, `dsn_nama`, `dsn_notelp`, `dsn_email`) VALUES
('0001117506', '19751101 200312 2 003', 'Dr. Yosi Suryani, SE.,M.Si', '', ''),
('0001118101', '19811101 200604 2 001', 'Variyetmi Wira, SE.,MM', '', ''),
('0003047406', '19740403 200501 2 001', 'Endang Afriyeni, SE.,M.Si', '', ''),
('0004047605', '19760404 200701 2 001', 'Ariani Tanjung, SS, M.Hum', '', ''),
('0004057706', '19770504 200501 2 003', 'Nurhayati, SE, MM', '', ''),
('0004087205', '19720804 200604 1 002', 'Willson Gustiawan, SE.,M.Si', '', ''),
('0004128202', '19821204 200604 2 002', 'Ika Yuanita, SE.,MM', '', ''),
('0006086505', '19650806 199003 2 002', 'Jumyetti, SE.,M.Si', '', ''),
('0007016706', '19670107 199203 2 002', 'Dra. Fitri Adona, M.Si', '', ''),
('0007017503', '19750107 200312 2 002', 'Dr. Primadona, SE.,M.Si', '', ''),
('0007018002', '19800107 200501 2 002', 'Afifah, SE., M.Si', '', ''),
('0007106901', '19691007 199802 2 001', 'Neneng Okterina, SH.,MH', '', ''),
('0008067102', '19710608 199802 1 001', 'Emrizal, SE.,MM', '', ''),
('0008098501', '19850908 200812 2 001', 'Ranti Komala Dewi, SS.,M.Par.,MGATH', '', ''),
('0008117604', '19761108 200012 1 001', 'Novirwan Trinanto, SE.,M.Si', '', ''),
('0009026904', '19690209 200003 2 001', 'Dr. Dra. Arni Utamaningsih, M.Si', '', ''),
('0009047104', '19710409 199803 1 003', 'Alhapen Ruslin Chandra, SE.,MT.,M.Com', '082345712323', ''),
('0009047602', '19760409 200312 2 001', 'Tuti Azra, S.E.,M.M', '', ''),
('0011047203', '19720411 199802 2 001', 'Elni Sumiarti, SE.,M.Si', '', ''),
('0011086109', '19610811 199803 2 001', 'Eva Yoyet, SE.,M.Si', '', ''),
('0011125508', '19551211 199303 1 001', 'Drs. M. Ridwan', '', ''),
('0012056209', '19620512 199003 2 001', 'Yenida, SE.,M.Si', '', ''),
('0012087702', '19770812 200501 2 003', 'Gustina, SE, M.Sc FIN', '', ''),
('0013088603', '19860813 201404 2 001', 'Deni Wahyuni, S.Pd.I.,MA', '', ''),
('0014107906', '19791014 200212 2 003', 'Imelda M. Nur, SE.,M.H.R.M', '', ''),
('0015058203', '19820515 200812 2 002', 'Deni Endriani, SS.,M.Par., MGSVT', '', ''),
('0015077505', '19750715 200501 2 002', 'Imelda Indah Lestari, S.S., M.Hum', '', ''),
('0017037504', '19750317 200003 2 002', 'Fisla Wirda, SE.,M.Si', '', ''),
('0018067807', '19780618 200812 2 002', 'Rini Eka Sari, SS.,M.Par', '', ''),
('0020097809', '19780920 200112 1 002', 'Sepri Neswardi, SE.,MM, M.Si', '', ''),
('0020117406', '19741120 200801 2 006', 'Novadilastri, SE.,MM', '', ''),
('0022087204', '19720822 200112 1 001', 'Benny Chandra, SE.,MM', '', ''),
('0022108403', '19841022 201404 2 001', 'Yudhytia Wimeina, SE.,MM', '', ''),
('0025057706', '19770525 200012 1 002', 'Sarmiadi, SE.,MM', '', ''),
('0028067104', '19710628 200112 2 001', 'Iwadiah, SE', '', ''),
('1001018000', '19800101 000000 0 005', 'Winda Diana', '', ''),
('1001018001', '19800101 000000 0 003', 'Zulkifli Azra', '', ''),
('1001018002', '19800101 000000 0 006', 'Trisna Putra', '', ''),
('1001048602', '19860401 000000 0 001', 'Siti Aisyah Sucihati, E.A., SST.,M.Par', '', ''),
('1002049100', '19910402 000000 0 001', 'Mega Dwiyanti, SH., MH', '', ''),
('1017018701', '19870117 000000 0 000', 'Abdiani Khairat Nadra, S.ST.,M.Par', '', ''),
('1019710217', '19710217 000000 0 000', 'Asril', '', ''),
('1019860212', '19860212 000000 0 001', 'Adek Kurnia Fiza, SST. Par, M.Par', '', ''),
('1231231313', '122222222223123123', 'roci', '08232321121', 'hasbi@gmail.com'),
('8897140017', '19850330 201109 1 000', 'Rafidola Mareta Riesa, S.ST.Par.,M.Sc', '', ''),
('9910005390', '19800101 000000 0 004', 'Drs. H Herry Zulman, Akt. MSc.', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kls` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kls`) VALUES
('III.A'),
('III.B'),
('III.C'),
('III.D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporanpkl`
--

CREATE TABLE IF NOT EXISTS `laporanpkl` (
  `bp` varchar(10) NOT NULL,
  `judul` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporanpkl`
--

INSERT INTO `laporanpkl` (`bp`, `judul`) VALUES
('1501061004', 'penelitian tentang peran BPOM dalam menangani peredaran produk Obat-obatan di sumbar'),
('1501061019', 'Laporan pada pt. Insani'),
('1501061030', 'sistem in');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `mhs_bp` varchar(10) NOT NULL,
  `mhs_nama` varchar(50) NOT NULL,
  `mhs_kelas` varchar(10) NOT NULL,
  `mhs_tempat_lahir` varchar(30) NOT NULL,
  `mhs_tgl_lahir` date DEFAULT NULL,
  `mhs_prodi` varchar(30) NOT NULL,
  `mhs_jurusan` varchar(30) NOT NULL,
  `mhs_tahun` varchar(4) NOT NULL,
  `mhs_email` varchar(30) NOT NULL,
  `mhs_notelp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`mhs_bp`, `mhs_nama`, `mhs_kelas`, `mhs_tempat_lahir`, `mhs_tgl_lahir`, `mhs_prodi`, `mhs_jurusan`, `mhs_tahun`, `mhs_email`, `mhs_notelp`) VALUES
('1401062042', 'Aris Pratama', 'III.A', '', '2017-09-29', 'Administrasi Bisnis', 'Administrasi Niaga', '2015', 'email', '8'),
('1401092003', 'Mifta Ramadhani', 'III.B', 'Batipuh', '2017-09-01', 'Administrasi Bisnis', 'Administrasi Niaga', '2015', 'miftazel@gmail.com', '08212111212'),
('1501061004', 'Rezi Utami Putri', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061005', 'Abzuli Nurul Jannah', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061008', 'Delta Novendra', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061009', 'Refna Julita', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061013', 'Midya Lestari Dewi', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061018', 'Aljumpati Agus', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061019', 'Puspita Wulandari', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061024', 'Erlina', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061027', 'Mai Yoila Gustiawan', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061029', 'Mulya Zanita', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061030', 'Ismimarta', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061031', 'Vesensia Veronika Manik', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061034', 'Monica Meisarani', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061041', 'Weni Eka Putra', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061043', 'Merisa Herry', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061047', 'Rima Novika', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501061052', 'Sutya Adi Pratama', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501062011', 'Fitri Hanifa', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501062031', 'Mai Ratna Juita', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501062033', 'Adlin Fiyya Pasaga', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501062035', 'Intan Fitrina', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501062037', 'Fayyed Ahmad Syaqi', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501062041', 'Andi Saputra', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501062049', 'Jefri Saputra', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501062056', 'Fathatur Rahmi', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n'),
('1501062061', 'Dhebbie Sintia Putri', 'III.A', '', NULL, 'Administrasi Bisnis', 'Administrasi Niaga', '2015', '', '\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1500449347),
('m130524_201442_init', 1500449354),
('m140602_111327_create_menu_table', 1501946411),
('m160312_050000_create_user', 1501946411);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
`pd_id` int(11) NOT NULL,
  `pd_bp` varchar(10) NOT NULL,
  `pd_instansi` int(11) NOT NULL,
  `pd_tgl_mulai` date NOT NULL,
  `pd_tgl_selesai` date NOT NULL,
  `pd_pbblap` varchar(30) NOT NULL COMMENT 'nama pembimbing lapangan',
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`pd_id`, `pd_bp`, `pd_instansi`, `pd_tgl_mulai`, `pd_tgl_selesai`, `pd_pbblap`, `tahun`) VALUES
(2, '1501061018', 2, '2017-10-04', '2017-10-06', 'Dery Okta', 1),
(3, '1501061008', 11, '2017-10-06', '2017-10-13', 'Sonya Fatmala', 1),
(4, '1501061004', 19, '2017-09-20', '2017-10-07', 'Muhammad Rafiq', 1),
(5, '1401092003', 2, '2017-11-02', '2017-11-03', 'hasbi', 1),
(6, '1501061019', 8, '2017-10-27', '2017-10-23', 'udin', 1),
(7, '1501061009', 1, '2017-11-02', '2017-11-02', 'Qorry', 1),
(8, '1501062011', 44, '2017-10-27', '2017-11-04', '', 1),
(9, '1501061030', 41, '2017-10-26', '2017-11-03', '', 1),
(10, '1501061052', 3, '2017-10-28', '2017-10-31', '', 1),
(11, '1501062056', 43, '2017-11-04', '2017-12-08', '', 1),
(12, '1501062061', 18, '2017-10-26', '2017-11-04', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
`id` int(11) NOT NULL,
  `nama_provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama_provinsi`) VALUES
(1, 'Aceh'),
(2, 'Sumatera Utara'),
(3, 'Sumatera Barat'),
(4, 'Jambi'),
(5, 'Riau'),
(6, 'Kepulauan Riau'),
(7, 'Bengkulu'),
(8, 'Sumatera Selatan'),
(9, 'Bangka Belitung'),
(10, 'Lampung'),
(11, 'Banten'),
(12, 'DKI Jakarta'),
(13, 'Jawa Barat'),
(14, 'Jawa Tengah'),
(15, 'DI Yogyakarta'),
(16, 'Jawa Timur'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Tengah'),
(22, 'Kalimantan Selatan'),
(23, 'Kalimantan Timur'),
(24, 'Kalimantan Utara'),
(25, 'Sulawesi Utara'),
(26, 'Gorontalo'),
(27, 'Sulawesi Tengah'),
(28, 'Sulawesi Barat'),
(29, 'Sulawesi Selatan'),
(30, 'Sulawesi Tenggara'),
(31, 'Maluku'),
(32, 'Maluku Utara'),
(33, 'Papua Barat'),
(34, 'Papua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangsidang`
--

CREATE TABLE IF NOT EXISTS `ruangsidang` (
`id` int(11) NOT NULL,
  `noLokal` varchar(30) NOT NULL,
  `gedung` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruangsidang`
--

INSERT INTO `ruangsidang` (`id`, `noLokal`, `gedung`) VALUES
(4, 'Ruang Jurusan', 'Ged Ab'),
(5, 'Ruang Referensi ', 'Ged AB'),
(6, 'Labor Simulasi', 'Ged AB'),
(7, 'V104', 'Ged V');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sidang`
--

CREATE TABLE IF NOT EXISTS `sidang` (
`s_id` int(11) NOT NULL,
  `s_bp` varchar(10) NOT NULL,
  `s_tgl_sidang` date NOT NULL,
  `s_ruang` int(11) NOT NULL,
  `s_jam` varchar(15) NOT NULL,
  `s_jam2` varchar(15) NOT NULL,
  `s_pembimbing` varchar(70) NOT NULL,
  `s_penguji` varchar(10) NOT NULL,
  `s_tempat_pkl` varchar(70) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sidang`
--

INSERT INTO `sidang` (`s_id`, `s_bp`, `s_tgl_sidang`, `s_ruang`, `s_jam`, `s_jam2`, `s_pembimbing`, `s_penguji`, `s_tempat_pkl`) VALUES
(22, '1501061018', '2017-09-29', 4, '05:45 PM', '05:45 PM', 'Dr. Dra. Arni Utamaningsih, M.Si', '0004047605', 'PT Enseval Mega Trading Tbk, Cabang Padang'),
(25, '1501061008', '2017-11-01', 4, '05:45 AM', '05:45 PM', 'Yenida, SE.,M.Si', '0001118101', 'PT Bukit Asam Unit Pelabuhan Tarahan'),
(26, '1501061004', '2017-10-07', 4, '06:00 AM', '06:00 AM', 'Nurhayati, SE, MM', '0001118101', 'Badan Pusat Statistik Kota Padang'),
(27, '1401092003', '2017-11-03', 4, '04:45 PM', '04:45 PM', 'Tuti Azra, S.E.,M.M', '0001118101', 'PT Enseval Mega Trading Tbk, Cabang Padang'),
(28, '1501062011', '2017-11-04', 4, '06:30 AM', '09:30 AM', 'Emrizal, SE.,MM', '0004047605', 'PT. Bank Pembangunan Daerah Cabang Siteba'),
(29, '1501061030', '2017-10-02', 5, '01:30 PM', '01:30 PM', 'Ariani Tanjung, SS, M.Hum', '0011125508', 'PT. Trakindo Utama Padang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahunbp`
--

CREATE TABLE IF NOT EXISTS `tahunbp` (
  `angkatan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahunbp`
--

INSERT INTO `tahunbp` (`angkatan`) VALUES
('2015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempatpkl`
--

CREATE TABLE IF NOT EXISTS `tempatpkl` (
`p_id` int(11) NOT NULL,
  `p_nama` varchar(70) NOT NULL,
  `p_provinsi` int(11) NOT NULL,
  `p_alamat` text NOT NULL,
  `p_email` varchar(30) NOT NULL,
  `p_notelp` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tempatpkl`
--

INSERT INTO `tempatpkl` (`p_id`, `p_nama`, `p_provinsi`, `p_alamat`, `p_email`, `p_notelp`) VALUES
(1, 'PT Tidar Kerinci Agung (TKA)\r\n', 3, 'Sungai Talang Nagari Talao Kecamatan Sangir Balai Janggo Kabupaten Solok Selatan Sumatera Barat\r\n', '', '082383603000 (Pak Andi)'),
(2, 'PT Enseval Mega Trading Tbk, Cabang Padang', 3, 'Jalan By Pass Km.10 Padang', '@gmail', '08126762960/08116692960 (Bapak Abdul Razak)'),
(3, 'PT Pertamina (Persero) ', 3, 'Jl. Veteran 60 Bandar Purus Padang', '', ''),
(4, 'PT Semen Padang', 3, 'Jl. Raya Indarung Padang', '', '08126785610 (Bpk. Simon)'),
(5, 'PT PLN (Persero) Wilayah Sumbar', 3, 'Jalan Dr. Wahidin No 8 Kota Padang, Sumatera Barat. Kode Pos : 25122', '', ''),
(6, 'PT PLN (Persero) Area Padang', 3, 'Jl. S .Parman 221 Ulak Karang Padang', '', '-'),
(7, 'PT PLN (Area Padang)', 3, 'Jalan By Pass Km 6, Lubuk Begalung, Padang', '', ''),
(8, 'PT PLN (Persero) Area Bukittinggi', 3, 'Jalan Jendral Sudirman No 1, Bukittinggi 26138', '', '085363116644 (Bapak Yulendri)'),
(9, 'Pusat KUD Sumatera Barat', 3, 'Jl. Jakarta Ulak Karang Timur 34 Padang', '', '(0751) 481164'),
(10, 'Badan Pusat Statistik', 3, 'Jl. Khatib Sulaiman 48 Padang', '', '085263321509 (Bu Ira)'),
(11, 'PT Bukit Asam Unit Pelabuhan Tarahan', 10, 'Jl. Soekarno Hatta Km.15 Tarahan Bandar Lampung kode pos: 35241', '', ''),
(12, 'PT Bridgestone Sumatera Rubber Estate', 2, 'Jl. Dolok Merangir Satu, Pos Serbalawan Dolok Merangir, Dolok Batu Nanggar Kabupaten Simalungun, Sumatera Utara kode pos: 21155', '', '(0622) 64098'),
(13, 'PT Hino Motors Manufacturing Indonesia', 13, 'Kawasan Industri Kota Bukit Indah Jl Damar Blok D1 no.1 Purwakarta, Jawa Barat', '', '8991622358'),
(14, 'PT Pertamina (Persero) RU II Dumai', 5, 'Jl. Raya Kilang Putri Tujuh Dumai', '', ''),
(15, 'PT Telekomunikasi Seluler (TELKOMSEL) Branch Padang', 3, 'Jl. Khatib Sulaiman 51 Padang kode pos: 25135 Sumatera Barat', '', ''),
(16, 'PT HM Sampoerna Padang', 3, 'Jl. By Pass Teluk Bayur Km.16 RT021/RW006', '', ''),
(17, 'PT Sucofindo (Persero) Cabang Padang', 3, 'Jl. Batang Agam 7 Raden Saleh Padang, Sumatera Barat', '', '(0751) 443100/442920/443509'),
(18, 'PT Agung Automall Pekanbaru III', 5, 'Jl. S.M. Amin Simpang Baru Kec. Tampan Pekanbaru', '', ''),
(19, 'Badan Pusat Statistik Kota Padang', 3, 'Jl. By Pass Km no.13 Sungai Sapih, Kuranji Padang, Sumatera Barat', '', '081363415085 (Sofdi Sariban)'),
(20, 'Bank Pembangunan Daerah (BPD) Cabang Utama Padang', 3, 'Jalan Pemuda No 21 Olo Padang Barat, Padang', '', '082387477349 (Buk Rosmiati)'),
(21, 'PT PLN Persero Rayon Sawahlunto', 3, 'Kompleks PLN Pembangkitan Sektor Ombilin, Jalan Prof. Muh Yamin, Kec. Talawi Kota Sawahlunto', '', ''),
(22, 'PT Pelindo II Cabang Teluk Bayur', 3, 'Jalan Semarang No 3 Teluk Bayur Padang Sumatera Barat', '', '081275021201 (Bapak Yopi Eka Anroni)'),
(23, 'Dinas Kesehatan Provinsi Sumatera Barat', 3, 'Jalan Perintis Kemerdekaan No. 65A Jati, Padang Timur, Kota Padang, Sumatera Barat', '', 'Incim :081374806366'),
(24, 'PT Indofood Sukses Makmur, Tbk', 5, 'Jalan Kaharuddin Nasution Km No 12, Maharatu, Marpoyan Dumai, Kota Pekanbaru, Riau 28284. Telp (0761) 71883', '', '082172848079 (Bapak Rahman, Bagian Personalia)'),
(25, 'Badan Pusat Statistik Kabupaten Pasaman', 3, 'Jalan Jendral Sudirman No 66 Lubuk Sikaping Kab. Pasaman. Telp : (0751) 20062', '', ''),
(26, 'Bank Nagari Cabang Pulau Punjung Dharmasraya', 3, 'Jalan Lintas Sumatera Km 2 (Pulau Punjung) Dharmasraya, Sumatera Barat, 26073, Indonesia', '', ''),
(27, 'Kantor Bupati Kab. Lima Puluh Kota', 3, 'Jalan Raya Negara Km. 10, Harau, Sarilamak, Kab. 50 Kota', '', '081371921585 (Ibuk Susi)'),
(28, 'Badan Amil Zakat Nasional', 3, 'Jalan By Pass Km. 12 Kel. Sungai Sapih, Kec. Kuranji Padang, Sumatera Barat, Indonesia. Telp/Fax : (0751) 497873', '', ''),
(29, 'Kantor Pelayanan Pajak (KPP) Pratama Padang Dua', 3, 'Jalan Pemuda No. 49 Kel. Marapak, Kec. Padang Barat, Padang.', '', '085365244035 (Pak Indra)'),
(30, 'PT Kunango Jantan', 3, 'Jalan By Pass Km 25, Kel. Kanagarian Kasang, Kec. Batang Anai, Padang', '', '081275393617 (Pak Indra)'),
(31, 'PT Saipem Indonesia Karimun Branch', 5, 'Jalan Raya Haji Fisabiliah, Kota Tanjung Balai Karimun, Provinsi Riau, Indonesia, Kode Pos : 29635', '', ''),
(32, 'PT. Panay Farmalab Pedagang Besar Farmasi ', 3, 'Jl. Sawahan Dalam IV, No. 18 & 20, Padang', '', '0811665046 (Pak Yusri)'),
(33, 'PT. Rekind', 12, 'Jl. Kalibata Timur 1, No. 36, Jakarta Selatan 12740', '', '082114317131 ( Bpk. Dian Pasya )'),
(34, 'Kantor Pelayanan Pajak (KPP) Pratama Padang', 3, 'Jl. Bagindo Azis Chan No. 26 Sawahan, Padang Timur, Kota Padang', '', ''),
(35, 'PT. Schneider Manufacturing', 6, 'Batamindo Industrial Part, Jl. Beringin, No. 16, Mukakuning Batam', '', '085376125920 (Eruawan Ziliwu)'),
(36, 'PT. Zikrul Bestari Buana Murni', 12, 'Jl. Waru NO.20-B, Rawamangun, Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220 Telp. (021) 4752434', '', ''),
(37, 'PT. Tirta Investama (Aqua.Solok Plant)', 3, 'Jl. Lintas Padang-Solok Km 37, Jorong Kayu Aro, Kec. Gunung Talang, Kab. Solok', '', '082284862638 (Fadli)'),
(38, 'Kantor Pelayanan Pembendaharaan Negara (KPPN) Muaro Bungo', 4, 'Jl. Sultan Thaha No. 102, Muaro Bungo, Jambi', '', ''),
(39, 'PDAM Kota Padang ', 3, 'Jl. H. Agus Salim, No. 10, Sawahan, Padang', '', ''),
(40, 'Kantor Pelayanan Pajak (KPP) Pratama Bukittinggi', 3, 'Jl. Havid Jalil, No. 7D, Tarok Bungo, Sumatera Barat 26136', '', ''),
(41, 'PT. Trakindo Utama Padang', 3, 'Jl.Letjen S.Parman 242 Ulak Karang Barat Padang Utara', '', ''),
(42, 'PT. Dempo Andalas Samudera', 3, 'Komplek Pelabuhan Perikanan Samudera Bungus,          Jl. Raya Padang-Painan Km16 Bungus, Padang', '', 'Yusri Handarini, S.S.T.Pi : 0811109940'),
(43, 'PT. Andalan Mitra Prestasi Padang', 3, 'Jl. S. Parman 80-82 Lolong, Padang Telp. (0751)7059045', '', ''),
(44, 'PT. Bank Pembangunan Daerah Cabang Siteba', 3, 'Jl. Raya Siteba, Surau Gadang Nanggalo, Kota Padang, Sumatera Barat Telp. (0751) 7051849', '', ''),
(45, 'PT. Medion Cabang Payakumbuh', 3, 'Jl. Tan Malaka Limpasi, Payakumbuh', '', ''),
(46, 'PT. Pegadaian (persero) Cabang Tarandam Padang', 3, 'Jl. Proklamasi No. 22 Tarandam, Padang Timur, Kota Padang ', '', 'Mahyu : 081363480196'),
(47, 'PT. ALTRAK 1978', 3, 'Jl. By Pass Km 16,5 Kel. Air Pacah, Kec. Koto Tangah, Padang 25176', '', 'Yuza Pelika, A.Md : 082389230231'),
(48, 'PT. Angkasa Pura 2 BIM', 3, 'Jl.Mr.Sutan M.Rasyid, ketaping, kec Batang anai Kab. Padang Pariaman Sumbar', '', ''),
(49, 'Kantor Cabang BRI Pariaman', 3, 'Jl. Merdeka No. 21 Pariaman, Telp. (0751) 91025, Fax. (0751) 91365', '', 'Muhammad Surya : 08127415303'),
(50, 'PT. BPR Danagung', 15, 'Jl. Solo KM.11,Purwomartani, Kelasan Yogyakarta', '', '(0274) 496184');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `namaLengkap` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` smallint(6) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `namaLengkap`, `auth_key`, `password_hash`, `password_reset_token`, `role`, `status`, `created_at`, `updated_at`) VALUES
(15, 'admin', 'admin', '2ApyHxC2blPdcX90GX8TjfuMNMDE8rlY', '$2y$13$r4FtzUE2cEwGGi1Ef/cbJ.dbxgixOyL0oNIQflLq5ZqouDlt81XoO', NULL, 1, 10, 1505287419, 1505287419),
(27, '0009047104', 'Alhapen Ruslin Chandra, SE.,MT.,M.Com', 'RoATPHIBChNOzUpfMHRvOISYzJk4CXsA', '$2y$13$Je/YChgRb2ZzVX93z3Qp..LDav/BFvUMz3fBo2PT2KurD5dO8BXwy', NULL, 3, 10, 1505803839, 1505803839),
(29, '1501061024', 'Erlina', 'g0W1RRVvr1GeJFMm5yFqZMgyVapLxs-9', '$2y$13$OElyHdV2KiTlZbiuJ.6t3u/3tH9VJfP5MZ2lQMcCtcfdfXGWZ4nH.', NULL, 2, 10, 1506128373, 1506128373),
(30, '0003047406', 'Endang Afriyeni, SE.,M.Si', 'A4Na3wzTK6DBUUN3hXFR97-SdKZrqkle', '$2y$13$wZB/uO691Jk93JsS4FTEW.hkMtkGdf/HoAMZvBKyVHyPKROrT8QDW', NULL, 3, 10, 1506158534, 1506158534),
(31, '1501061004', 'Rezi Utami Putri', 'i-L8zw2WLo2Za7BCl62vXaid7_ddBarz', '$2y$13$DEFC8hWz.L.2CQMRh17WE.LkqeLcgxv56oXv0D51o48xvVWintbI2', NULL, 2, 10, 1506175024, 1506175024),
(32, '0004057706', 'Nurhayati, SE, MM', 'KV5OLfDwzeHgeYBUZgHOTzSu_ce-zmyz', '$2y$13$H3Bl.zuDcYrkSot9tCH0beWvbx9VUcNn9WneduvWuW/JAC9yFr6yC', NULL, 3, 10, 1506567976, 1506567976),
(33, '1501061019', 'Puspita Wulandari', 'jHZufL2itIQUH_AIUChZrZajg3IWc-kJ', '$2y$13$8yuOWNUFutCWEHi0Nr9.I.MbrnDVTVN0ZFsijmErvRlK0HxPplrUG', NULL, 2, 10, 1507114543, 1507114543),
(34, '0007106901', 'Neneng Okterina, SH.,MH', 'td9HkvvErkNk0Eurmqy67lHoQYaWKk_t', '$2y$13$euzzg/zb3AWGwgER2HtgZOB7JrXq1NRu2cFC8BkMQZ0G.DXLWlRVG', NULL, 3, 10, 1507114702, 1507114702),
(35, '1501062011', 'Fitri Hanifa', '_fbuatKr_eL6XHN9O52o0-1aN92QLHsY', '$2y$13$qN.798fq/XHAqSfn5NHgN.k4AImu5fi9A5sWSqqfrZrdb2KtaHYr2', NULL, 2, 10, 1507160374, 1507160374),
(36, '0009047602', 'Tuti Azra, S.E.,M.M', 'E2_UcA60En8WEQtfY5Kq4pj0aqcXFIQp', '$2y$13$CEvttKYpGkf3ntsE6bj.eOnVEhdOeLC9zYpIBeqAhnjJSy.cSIpya', NULL, 3, 10, 1507160538, 1507160538),
(37, '1501061030', 'Ismimarta', '61FxQbe5-hFYphvZZlL5VK7W6txMeR6R', '$2y$13$gfVqp0pHFbXFdOxZGtiyl.emfyWFlG0AEhEjKQP4AKM9OVlFhBRue', NULL, 2, 10, 1507185044, 1507185044),
(38, '1501061052', 'Sutya Adi Pratama', 'n0I23Om8kMpW83sbypIl4qNo_gZJ7vu7', '$2y$13$JgcuqvFVfjmlb1VnhIIVhujp/15GfODdSNH3HArra.esd3zdLlkN2', NULL, 2, 10, 1507187789, 1507187789),
(39, '1501062056', 'Fathatur Rahmi', '4o1sAvAXrzTXY7hHU0RK4KVYKIOW_8f8', '$2y$13$XAxwwECVaAd3lj0RMI4PBO03gWwju3lEftzGkCqW1QWHkhWY3yBIy', NULL, 2, 10, 1507187874, 1507187874),
(40, '1501062061', 'Dhebbie Sintia Putri', 'ckcxTQqyEtGjOJltCYtmjI45apxIZjLA', '$2y$13$z5MC8GF4ggZcxh5CuLVwwOKP.8vS8dyX6EKnuEo8tBiFxiTvcvYtu', NULL, 2, 10, 1507187991, 1507187991);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angkatan`
--
ALTER TABLE `angkatan`
 ADD PRIMARY KEY (`id`), ADD KEY `kaprodi` (`kaprodi`), ADD KEY `kaprodi_2` (`kaprodi`);

--
-- Indexes for table `datapembimbing`
--
ALTER TABLE `datapembimbing`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `mahasiswa` (`mahasiswa`), ADD KEY `mahasiswa_2` (`mahasiswa`), ADD KEY `pembimbing` (`pembimbing`), ADD KEY `mahasiswa_3` (`mahasiswa`), ADD KEY `pembimbing_2` (`pembimbing`), ADD KEY `tahunajaran_id` (`ankt_bp`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
 ADD PRIMARY KEY (`dsn_nidn`), ADD UNIQUE KEY `dsn_nama` (`dsn_nama`), ADD UNIQUE KEY `dsn_nip` (`dsn_nip`), ADD KEY `dsn_nip_2` (`dsn_nip`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`kls`);

--
-- Indexes for table `laporanpkl`
--
ALTER TABLE `laporanpkl`
 ADD PRIMARY KEY (`bp`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`mhs_bp`), ADD UNIQUE KEY `mhs_bp` (`mhs_bp`), ADD UNIQUE KEY `mhs_nama` (`mhs_nama`), ADD KEY `mhs_kelas` (`mhs_kelas`), ADD KEY `mhs_tahun` (`mhs_tahun`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
 ADD PRIMARY KEY (`pd_id`), ADD UNIQUE KEY `pd_bp` (`pd_bp`), ADD KEY `pd_instansi` (`pd_instansi`), ADD KEY `pd_bp_2` (`pd_bp`), ADD KEY `tahun` (`tahun`), ADD KEY `tahun_2` (`tahun`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangsidang`
--
ALTER TABLE `ruangsidang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidang`
--
ALTER TABLE `sidang`
 ADD PRIMARY KEY (`s_id`), ADD UNIQUE KEY `s_bp` (`s_bp`), ADD KEY `s_pembimbing` (`s_pembimbing`), ADD KEY `s_penguji` (`s_penguji`), ADD KEY `s_pembimbing_2` (`s_pembimbing`), ADD KEY `s_bp_2` (`s_bp`), ADD KEY `s_tempat_pkl` (`s_tempat_pkl`), ADD KEY `s_ruang` (`s_ruang`), ADD KEY `s_bp_3` (`s_bp`), ADD KEY `s_penguji_2` (`s_penguji`);

--
-- Indexes for table `tahunbp`
--
ALTER TABLE `tahunbp`
 ADD PRIMARY KEY (`angkatan`);

--
-- Indexes for table `tempatpkl`
--
ALTER TABLE `tempatpkl`
 ADD PRIMARY KEY (`p_id`), ADD KEY `provinsi` (`p_provinsi`), ADD KEY `p_provinsi` (`p_provinsi`), ADD KEY `p_provinsi_2` (`p_provinsi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angkatan`
--
ALTER TABLE `angkatan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `datapembimbing`
--
ALTER TABLE `datapembimbing`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `ruangsidang`
--
ALTER TABLE `ruangsidang`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sidang`
--
ALTER TABLE `sidang`
MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tempatpkl`
--
ALTER TABLE `tempatpkl`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `angkatan`
--
ALTER TABLE `angkatan`
ADD CONSTRAINT `angkatan_ibfk_1` FOREIGN KEY (`kaprodi`) REFERENCES `dosen` (`dsn_nip`);

--
-- Ketidakleluasaan untuk tabel `datapembimbing`
--
ALTER TABLE `datapembimbing`
ADD CONSTRAINT `datapembimbing_ibfk_1` FOREIGN KEY (`pembimbing`) REFERENCES `dosen` (`dsn_nidn`),
ADD CONSTRAINT `datapembimbing_ibfk_2` FOREIGN KEY (`ankt_bp`) REFERENCES `tahunbp` (`angkatan`),
ADD CONSTRAINT `fk_pembimbing_mhs` FOREIGN KEY (`mahasiswa`) REFERENCES `mahasiswa` (`mhs_bp`);

--
-- Ketidakleluasaan untuk tabel `laporanpkl`
--
ALTER TABLE `laporanpkl`
ADD CONSTRAINT `laporanpkl_ibfk_1` FOREIGN KEY (`bp`) REFERENCES `pendaftaran` (`pd_bp`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`mhs_kelas`) REFERENCES `kelas` (`kls`),
ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`mhs_tahun`) REFERENCES `tahunbp` (`angkatan`);

--
-- Ketidakleluasaan untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
ADD CONSTRAINT `fk_pendaftaran_mahasiswa` FOREIGN KEY (`pd_bp`) REFERENCES `mahasiswa` (`mhs_bp`),
ADD CONSTRAINT `fk_pendaftaran_tempatpkl` FOREIGN KEY (`pd_instansi`) REFERENCES `tempatpkl` (`p_id`),
ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`tahun`) REFERENCES `angkatan` (`id`);

--
-- Ketidakleluasaan untuk tabel `sidang`
--
ALTER TABLE `sidang`
ADD CONSTRAINT `sidang_ibfk_2` FOREIGN KEY (`s_bp`) REFERENCES `pendaftaran` (`pd_bp`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `sidang_ibfk_3` FOREIGN KEY (`s_penguji`) REFERENCES `dosen` (`dsn_nidn`),
ADD CONSTRAINT `sidang_ibfk_4` FOREIGN KEY (`s_ruang`) REFERENCES `ruangsidang` (`id`);

--
-- Ketidakleluasaan untuk tabel `tempatpkl`
--
ALTER TABLE `tempatpkl`
ADD CONSTRAINT `tempatpkl_ibfk_1` FOREIGN KEY (`p_provinsi`) REFERENCES `provinsi` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
