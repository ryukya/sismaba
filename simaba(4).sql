-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2015 at 06:08 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simaba`
--

-- --------------------------------------------------------

--
-- Table structure for table `id_level_adm_um`
--

CREATE TABLE IF NOT EXISTS `id_level_adm_um` (
  `id_level_adm` varchar(1) NOT NULL,
  `level_adm_um` varchar(20) NOT NULL,
  PRIMARY KEY (`id_level_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `id_level_adm_um`
--

INSERT INTO `id_level_adm_um` (`id_level_adm`, `level_adm_um`) VALUES
('a', 'admin kemahasiswaan'),
('b', 'admin akademik'),
('c', 'Sekretaris I'),
('d', 'dekan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tb_data_mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `password` varchar(10) NOT NULL,
  `akademik_masuk` year(4) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `no_telp` varchar(10) NOT NULL,
  `alamat_email` varchar(30) NOT NULL,
  `akun_twitter` varchar(20) NOT NULL,
  `kota_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_jenis_kelamin` varchar(1) NOT NULL,
  `agama` varchar(8) NOT NULL,
  `warga_negara` varchar(3) NOT NULL,
  `id_status_sipil` varchar(2) DEFAULT NULL,
  `id_golongan_darah` varchar(1) DEFAULT NULL,
  `alamat_tinggal` varchar(25) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `id_ukt_mahasiswa` varchar(1) NOT NULL,
  `id_status_bm` int(1) DEFAULT NULL,
  `sumber_biaya` varchar(10) NOT NULL,
  `ekstrakulikuler` varchar(10) NOT NULL,
  `jumlah_saudara` int(2) NOT NULL,
  `asal_sma` varchar(30) NOT NULL,
  `alamat_sekolah` varchar(25) NOT NULL,
  `telp_fax_sekolah` varchar(12) NOT NULL,
  `id_jurusan_sma` varchar(1) NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `jumlah_pelajaran_uan` int(1) NOT NULL,
  `jumlah_nilai_uan` float NOT NULL,
  `tl_di_ijazah` varchar(15) NOT NULL,
  `nama_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `alamat_ortu` varchar(25) NOT NULL,
  `no_telp_hp` int(13) NOT NULL,
  `id_pendidikan_ortu` varchar(1) DEFAULT NULL,
  `id_pekerjaan` varchar(3) NOT NULL,
  `id_penghasilan` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`nim`),
  KEY `id_jalur_seleksi` (`id_jenis_kelamin`),
  KEY `id_pekerjaan` (`id_pekerjaan`,`id_penghasilan`),
  KEY `id_penghasilan` (`id_penghasilan`),
  KEY `id_pendidikan_ortu` (`id_pendidikan_ortu`),
  KEY `id_status_sipil` (`id_status_sipil`),
  KEY `id_golongan_darah` (`id_golongan_darah`),
  KEY `id_jurusan_sma` (`id_jurusan_sma`),
  KEY `id_ukt_mahasiswa` (`id_ukt_mahasiswa`),
  KEY `id_status_bm` (`id_status_bm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data_mahasiswa`
--

INSERT INTO `tb_data_mahasiswa` (`nim`, `password`, `akademik_masuk`, `nama`, `no_telp`, `alamat_email`, `akun_twitter`, `kota_lahir`, `tanggal_lahir`, `id_jenis_kelamin`, `agama`, `warga_negara`, `id_status_sipil`, `id_golongan_darah`, `alamat_tinggal`, `no_ktp`, `id_ukt_mahasiswa`, `id_status_bm`, `sumber_biaya`, `ekstrakulikuler`, `jumlah_saudara`, `asal_sma`, `alamat_sekolah`, `telp_fax_sekolah`, `id_jurusan_sma`, `tahun_lulus`, `jumlah_pelajaran_uan`, `jumlah_nilai_uan`, `tl_di_ijazah`, `nama_ayah`, `nama_ibu`, `alamat_ortu`, `no_telp_hp`, `id_pendidikan_ortu`, `id_pekerjaan`, `id_penghasilan`) VALUES
('162410101055', '1', 2016, 'Future', '081956784', 'futur@mail.com', '@wushi wush', 'Mirai', '1995-12-29', 'L', 'Katolik', 'WNI', 'BK', 'o', 'JL manggis 23', '2112', 'A', 0, 'Orang tua', 'none', 2, 'SMA manggis', 'JL manggis2', '021334568', '2', 2015, 4, 320, 'Mirai', 'Minggir', 'Kiri', 'JL kiri kanan', 81323365, 'B', 'nly', 'A'),
('162410102', '', 0000, 'wordpress', '', '', '', 'sdgsdg', '1996-12-30', 'L', '', '', NULL, NULL, 'dghfdh', '', 'C', NULL, '', '', 0, 'fggfjfgjf', '', '', '1', 0000, 0, 0, '', 'sdsdd', 'dddd', '', 0, NULL, 'dll', NULL),
('162410103', 'miku', 0000, 'Miku', '', '', '', 'Tongko', '1996-12-21', 'P', '', '', NULL, NULL, 'JL Rurum 01', '', 'B', NULL, '', '', 0, 'SMA Mufufu', '', '', '4', 0000, 0, 0, '', 'Soichi', 'Mia', '', 0, NULL, 'gru', NULL),
('162410105', 'miku', 0000, 'Miku', '', '', '', 'Tongko', '1996-12-21', 'P', '', '', NULL, NULL, 'JL Rurum 01', '', 'B', NULL, '', '', 0, 'SMA Mufufu', '', '', '4', 0000, 0, 0, '', 'Soichi', 'Mia', '', 0, NULL, 'gru', NULL),
('162410106', '', 0000, 'wordpress', '', '', '', 'sdgsdg', '1996-12-30', 'L', '', '', NULL, NULL, 'dghfdh', '', 'C', NULL, '', '', 0, 'fggfjfgjf', '', '', '1', 0000, 0, 0, '', 'sdsdd', 'dddd', '', 0, NULL, 'dll', NULL),
('162410107', 'miku', 0000, 'Miku', '', '', '', 'Tongko', '1996-12-21', 'P', '', '', NULL, NULL, 'JL Rurum 01', '', 'B', NULL, '', '', 0, 'SMA Mufufu', '', '', '4', 0000, 0, 0, '', 'Soichi', 'Mia', '', 0, NULL, 'gru', NULL),
('162410108', '', 0000, 'wordpress', '', '', '', 'sdgsdg', '1996-12-30', 'L', '', '', NULL, NULL, 'dghfdh', '', 'C', NULL, '', '', 0, 'fggfjfgjf', '', '', '1', 0000, 0, 0, '', 'sdsdd', 'dddd', '', 0, NULL, 'dll', NULL),
('162410109', 'miku', 0000, 'Miku', '', '', '', 'Tongko', '1996-12-21', 'P', '', '', NULL, NULL, 'JL Rurum 01', '', 'B', NULL, '', '', 0, 'SMA Mufufu', '', '', '4', 0000, 0, 0, '', 'Soichi', 'Mia', '', 0, NULL, 'gru', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakultas`
--

CREATE TABLE IF NOT EXISTS `tb_fakultas` (
  `id_fakultas` varchar(2) NOT NULL,
  `nama_fakultas` varchar(20) NOT NULL,
  PRIMARY KEY (`id_fakultas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_fakultas`
--

INSERT INTO `tb_fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
('fe', 'fakultas ekonomi'),
('ff', 'fakultas farmasi'),
('fh', 'fakultas hukum'),
('fk', 'fakultas kedokteran'),
('fp', 'faperta'),
('fs', 'fakultas sastra'),
('ft', 'fakultas teknik'),
('ik', 'fakultas keperawatan'),
('it', 'fakultas komputer'),
('kg', 'F. kedokteran gigi'),
('km', 'fkm'),
('kp', 'fkip'),
('mp', 'fmipa'),
('sp', 'fisip'),
('tp', 'ftp');

-- --------------------------------------------------------

--
-- Table structure for table `tb_golongan_darah`
--

CREATE TABLE IF NOT EXISTS `tb_golongan_darah` (
  `id_gol_darah` varchar(1) NOT NULL,
  `golongan_darah` varchar(2) NOT NULL,
  PRIMARY KEY (`id_gol_darah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_golongan_darah`
--

INSERT INTO `tb_golongan_darah` (`id_gol_darah`, `golongan_darah`) VALUES
('a', 'A'),
('b', 'B'),
('o', 'O'),
('z', 'AB');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_um`
--

CREATE TABLE IF NOT EXISTS `tb_jadwal_um` (
  `id_jadwal` int(3) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `subjek_tes` varchar(10) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_jadwal_um`
--

INSERT INTO `tb_jadwal_um` (`id_jadwal`, `tanggal`, `subjek_tes`, `start_time`, `end_time`) VALUES
(1, '2016-07-11', 'TKD', '07:00:00', '08:50:00'),
(2, '2016-07-12', 'IPA', '09:00:00', '10:50:00'),
(3, '2016-07-11', 'Bahasa', '09:00:00', '10:50:00'),
(4, '2016-07-12', 'IPS', '07:00:00', '08:50:00'),
(5, '2015-12-12', 'IPS', '07:00:00', '09:00:00'),
(6, '2015-12-12', 'MIPA', '07:00:00', '09:00:00'),
(7, '2015-12-16', 'Bahasa', '09:00:00', '11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jalur_seleksi`
--

CREATE TABLE IF NOT EXISTS `tb_jalur_seleksi` (
  `id_jalur` int(1) NOT NULL,
  `nama_jalur_seleksi` varchar(10) NOT NULL,
  PRIMARY KEY (`id_jalur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jalur_seleksi`
--

INSERT INTO `tb_jalur_seleksi` (`id_jalur`, `nama_jalur_seleksi`) VALUES
(1, 'SNMPTN'),
(2, 'SBMPTN'),
(3, 'UM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_kelamin`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_kelamin` (
  `id_jenis_kelamin` varchar(1) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  PRIMARY KEY (`id_jenis_kelamin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_kelamin`
--

INSERT INTO `tb_jenis_kelamin` (`id_jenis_kelamin`, `jenis_kelamin`) VALUES
('L', 'Laki-laki'),
('P', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan_sma`
--

CREATE TABLE IF NOT EXISTS `tb_jurusan_sma` (
  `id_jurusan_sma` varchar(1) NOT NULL,
  `jurusan_sma` varchar(10) NOT NULL,
  PRIMARY KEY (`id_jurusan_sma`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan_sma`
--

INSERT INTO `tb_jurusan_sma` (`id_jurusan_sma`, `jurusan_sma`) VALUES
('1', 'IPA'),
('2', 'IPS'),
('3', 'Bahasa'),
('4', 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi_ujian_um`
--

CREATE TABLE IF NOT EXISTS `tb_lokasi_ujian_um` (
  `id_lokasi` varchar(5) NOT NULL,
  `nama_lokasi` varchar(30) NOT NULL,
  `kapasitas` int(2) NOT NULL,
  `terisi` int(2) NOT NULL,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi_ujian_um`
--

INSERT INTO `tb_lokasi_ujian_um` (`id_lokasi`, `nama_lokasi`, `kapasitas`, `terisi`) VALUES
('rua01', 'Ruang Kuliah 001 PSSI', 70, 0),
('rua02', 'Ruang Kuliah 002 PSSI', 40, 0),
('rua03', 'Ruang Kuliah 003 PSSI', 70, 0),
('rua04', 'Ruang Kuliah 004 PSSI', 50, 0),
('rua05', 'Ruang Kuliah 005 PSSI', 70, 0),
('rua06', 'Ruang kuliah 06 PSSI', 50, 0),
('rua07', 'Ruang Kuliah 007 PSSI', 70, 0),
('rua09', 'Ruang kuliah 09  PSSI', 40, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai_simaba`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai_simaba` (
  `nip` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama_pegawai` varchar(20) NOT NULL,
  `id_lvl_adm_um` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `id_lvl_adm_um` (`id_lvl_adm_um`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai_simaba`
--

INSERT INTO `tb_pegawai_simaba` (`nip`, `password`, `nama_pegawai`, `id_lvl_adm_um`) VALUES
('132410101066', '1', 'AkademikSI', 'b'),
('132410101086', '1234', 'Felisia', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE IF NOT EXISTS `tb_pekerjaan` (
  `id_pekerjaan` varchar(3) NOT NULL,
  `nama_pekerjaan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pekerjaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`) VALUES
('dll', 'Lain-lain'),
('dtr', 'Dokter'),
('gru', 'guru / dosen'),
('nly', 'nelayan'),
('p', 'PNS'),
('ptn', 'petani'),
('sws', 'pegawai swasta'),
('wrs', 'wiraswasta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan_ortu`
--

CREATE TABLE IF NOT EXISTS `tb_pendidikan_ortu` (
  `id_pendidikan_ortu` varchar(1) NOT NULL,
  `tingkat_pendidikan` varchar(14) NOT NULL,
  PRIMARY KEY (`id_pendidikan_ortu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendidikan_ortu`
--

INSERT INTO `tb_pendidikan_ortu` (`id_pendidikan_ortu`, `tingkat_pendidikan`) VALUES
('A', 'SD'),
('B', 'SMP'),
('C', 'SMA / SLTA'),
('D', 'S1'),
('E', 'S2'),
('F', 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penghasilan`
--

CREATE TABLE IF NOT EXISTS `tb_penghasilan` (
  `id_penghasilan` varchar(1) NOT NULL,
  `rentang_penghasilan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_penghasilan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penghasilan`
--

INSERT INTO `tb_penghasilan` (`id_penghasilan`, `rentang_penghasilan`) VALUES
('A', '<= 500.000'),
('B', 'Rp 500.000 - Rp 1.000.000'),
('C', 'Rp 1.000.000 - Rp 2.500.000'),
('D', 'Rp 2.500.000 - Rp 5.000.000'),
('E', '> Rp 5.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta_um`
--

CREATE TABLE IF NOT EXISTS `tb_peserta_um` (
  `id_peserta` varchar(13) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nama_peserta` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Tempat_Lahir` varchar(15) NOT NULL,
  `alamat_tinggal` varchar(25) NOT NULL,
  `Nama_Ayah` varchar(20) NOT NULL,
  `Nama_Ibu` varchar(20) NOT NULL,
  `id_pekerjaan` varchar(3) DEFAULT NULL,
  `nama_sma_smk` varchar(30) NOT NULL,
  `id_jurusan_sma` varchar(1) DEFAULT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `rata_rata_nilai_un` float NOT NULL,
  `id_prodi_pilihan` varchar(4) DEFAULT NULL,
  `id_lokasi` varchar(5) NOT NULL,
  `nilai_um_tkd` float NOT NULL,
  `nilai_um_bahasa` float NOT NULL,
  `nilai_um_mipa` float NOT NULL,
  `nilai_total` int(3) NOT NULL,
  `id_editable` int(11) NOT NULL,
  `status_lulus` varchar(1) NOT NULL,
  `validasi_data_mhs` int(1) NOT NULL,
  `id_ukt_mahasiswa` varchar(1) DEFAULT NULL,
  `ver_ukt_kmhs` int(1) NOT NULL,
  `ver_ukt_skr1` int(1) NOT NULL,
  `ver_ukt_dekan` int(1) NOT NULL,
  `verifikasi_data_mhs` int(1) NOT NULL,
  PRIMARY KEY (`id_peserta`),
  KEY `id_jenis_kelamin` (`jenis_kelamin`),
  KEY `jurusan_sma` (`id_jurusan_sma`,`id_prodi_pilihan`),
  KEY `id_ukt_mahasiswa` (`id_ukt_mahasiswa`),
  KEY `id_lokasi` (`id_lokasi`),
  KEY `id_pekerjaan` (`id_pekerjaan`),
  KEY `id_jurusan_sma` (`id_jurusan_sma`),
  KEY `id_prodi_pilihan` (`id_prodi_pilihan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peserta_um`
--

INSERT INTO `tb_peserta_um` (`id_peserta`, `password`, `nama_peserta`, `jenis_kelamin`, `Tanggal_Lahir`, `Tempat_Lahir`, `alamat_tinggal`, `Nama_Ayah`, `Nama_Ibu`, `id_pekerjaan`, `nama_sma_smk`, `id_jurusan_sma`, `tahun_lulus`, `rata_rata_nilai_un`, `id_prodi_pilihan`, `id_lokasi`, `nilai_um_tkd`, `nilai_um_bahasa`, `nilai_um_mipa`, `nilai_total`, `id_editable`, `status_lulus`, `validasi_data_mhs`, `id_ukt_mahasiswa`, `ver_ukt_kmhs`, `ver_ukt_skr1`, `ver_ukt_dekan`, `verifikasi_data_mhs`) VALUES
('56513575b40e3', 'vCKc9s6b', '', NULL, '0000-00-00', '', '', '', '', NULL, '', NULL, 0000, 0, NULL, 'rua01', 20, 0, 20, 0, 1, 'T', 1, NULL, 0, 0, 0, 0),
('566bc01313e09', 'aaa', 'NOmnom', 'P', '0000-00-00', 'Jember', 'JL Demak 20', 'MIkado', 'Soloa', 'gru', 'SMA Gapena', '4', 2015, 80, 'psti', 'rua03', 70, 75, 80, 225, 1, 'L', 1, NULL, 0, 0, 0, 0),
('566e4602bbbab', 'miku', 'Miku', 'P', '1996-12-21', 'Tongko', 'JL Rurum 01', 'Soichi', 'Mia', 'gru', 'SMA Mufufu', '4', 2013, 87, 'psti', 'rua05', 80, 80, 70, 230, 1, 'L', 1, 'B', 1, 1, 1, 1),
('566e54bbe7d2a', 'aaaa', 'Komik', 'P', '1996-10-21', 'Jember', 'JL Rurum 11', 'cerpun', 'vivi', 'nly', 'SMA Mufufu', '3', 2014, 75, 'pssi', 'rua01', 80, 50, 70, 200, 1, 'L', 1, NULL, 0, 0, 0, 0),
('566fc09cb70eb', '', 'wordpress', 'L', '1996-12-30', 'sdgsdg', 'dghfdh', 'sdsdd', 'dddd', 'dll', 'fggfjfgjf', '1', 2014, 85, 'psti', 'rua04', 80, 80, 80, 240, 1, 'L', 1, 'C', 0, 0, 0, 1),
('567016b3b5d68', '1', 'Multi', 'P', '1995-02-02', 'Deka city', 'JL Ruruma', 'A', 'B', 'dll', 'SMA  Humaian', '1', 2015, 65, 'pssi', 'rua03', 50, 60, 70, 180, 0, '', 0, NULL, 0, 0, 0, 0),
('5670172d06096', 'a', 'Lebay boy', 'L', '1996-12-30', 'Jembar', 'JL bar', 'WE', 'WA', 'dtr', 'SMA Mufufu', '1', 2013, 87, 'psti', 'rua01', 100, 100, 70, 270, 1, 'L', 0, NULL, 0, 0, 0, 0),
('5670176b6d356', 'lili', 'Lili', 'P', '1996-12-01', 'guatemala', 'Jl barbie 4', 'KIKI', 'Lokia', 'gru', 'SMA INdah', '1', 2015, 80, 'pssi', 'rua02', 60, 100, 50, 210, 1, 'T', 0, NULL, 0, 0, 0, 0),
('joni', '1234', 'Joni Aja', 'P', '1994-02-22', 'Geger', 'Jl barbie 4', 'mukli', 'mimi', 'dll', 'SMA Klimis', '1', 2012, 80, 'pssi', 'rua02', 90, 75, 50, 215, 1, 'T', 1, NULL, 0, 0, 0, 0),
('mimi', 'password', 'mimi meong', 'P', '2015-07-20', '', '', '', '', 'p', '', '2', 0000, 0, 'pssi', 'rua01', 90, 90, 80, 90, 1, 'L', 0, NULL, 0, 0, 0, 0),
('peserta1', 'pwd1', 'Meme', 'L', '0000-00-00', 'Jember', 'Jl meme 2', 'Komik ', 'Cartun', 'p', 'sma kaka 2', '1', 0000, 0, 'pssi', 'rua01', 75, 50, 75, 200, 1, 'L', 1, NULL, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE IF NOT EXISTS `tb_prodi` (
  `id_prodi` varchar(4) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL,
  `batas_nilai_minimal` int(3) NOT NULL,
  `kuota_maksimal` int(4) NOT NULL,
  `id_fakultas` varchar(2) NOT NULL,
  PRIMARY KEY (`id_prodi`),
  KEY `id_fakultas` (`id_fakultas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `nama_prodi`, `batas_nilai_minimal`, `kuota_maksimal`, `id_fakultas`) VALUES
('Agri', 'Agribisnis', 0, 0, 'fp'),
('Agro', 'Agroteknologi', 0, 0, 'fp'),
('Aknt', 'Akuntansi', 0, 0, 'fe'),
('biol', 'Biologi', 0, 0, 'mp'),
('dktr', 'Pendidikan Dokter', 0, 0, 'fk'),
('ekbg', 'Ekonomi Pembangunan', 0, 0, 'fe'),
('fisk', 'Fisika', 0, 0, 'mp'),
('frms', 'Farmasi', 0, 0, 'ff'),
('gigi', 'Pendidikan Dokter Gigi', 0, 0, 'kg'),
('hkum', 'Ilmu Hukum', 0, 0, 'fh'),
('iksm', 'Ilmu Kesehatan Masyarakat', 0, 0, 'km'),
('ikso', 'Ilmu Kesejahteraan Sosial', 0, 0, 'sp'),
('ilab', 'Ilmu Administrasi Bisnis', 0, 0, 'sp'),
('ilan', 'Ilmu Administrasi Negara', 0, 0, 'sp'),
('ilhi', 'Ilmu Hubungan Internasional', 0, 0, 'sp'),
('ilss', 'Ilmu Sejarah', 0, 0, 'fs'),
('kimi', 'Kimia', 0, 0, 'mp'),
('mnjm', 'Manajemen', 0, 0, 'fe'),
('mtmk', 'Matematika', 0, 0, 'mp'),
('pbio', 'Pendidikan Biologi', 0, 0, 'kp'),
('pbsi', 'Pendidikan Bahasa dan Sastra I', 0, 0, 'kp'),
('peko', 'Pendidikan Ekonomi', 0, 0, 'kp'),
('pels', 'Pendidikan Luar Sekolah', 0, 0, 'kp'),
('peng', 'Pendidikan Bahasa Inggris', 0, 0, 'kp'),
('pfis', 'Pendidikan Fisika', 0, 0, 'kp'),
('pgsd', 'Pendidikan Guru Sekolah Dasar', 0, 0, 'kp'),
('pmat', 'Pendidikan Matematika', 0, 0, 'kp'),
('prpj', 'Perpajakan', 0, 0, 'sp'),
('psej', 'Pendidikan Sejarah', 0, 0, 'kp'),
('pssi', 'Sistem Informasi', 250, 50, 'it'),
('psti', 'Teknologi Informasi', 225, 75, 'it'),
('ptvs', 'Pertelevisian', 0, 0, 'fs'),
('rwat', 'Ilmu Keperawwatan', 0, 0, 'ik'),
('seng', 'Sastra Inggris', 0, 0, 'fs'),
('sind', 'Sastra Indonesia', 0, 0, 'fs'),
('sosi', 'Sosiologi', 0, 0, 'sp'),
('telk', 'Teknik Elektro', 0, 0, 'ft'),
('tesp', 'Teknik Sipil', 0, 0, 'ft'),
('tmsn', 'Teknik Mesin', 0, 0, 'ft'),
('tper', 'Teknik Pertanian', 0, 0, 'tp'),
('uspw', 'Usaha Perjalanan Wisata', 0, 0, 'sp');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_bm`
--

CREATE TABLE IF NOT EXISTS `tb_status_bm` (
  `id_status_bm` int(1) NOT NULL,
  `status_bm` varchar(5) NOT NULL,
  PRIMARY KEY (`id_status_bm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_bm`
--

INSERT INTO `tb_status_bm` (`id_status_bm`, `status_bm`) VALUES
(0, 'Ya'),
(1, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_ktp`
--

CREATE TABLE IF NOT EXISTS `tb_status_ktp` (
  `id_status_sipil` varchar(2) NOT NULL,
  `status` varchar(12) NOT NULL,
  PRIMARY KEY (`id_status_sipil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_ktp`
--

INSERT INTO `tb_status_ktp` (`id_status_sipil`, `status`) VALUES
('BK', 'Belum Kawin'),
('DD', 'Duda'),
('JD', 'Janda'),
('K', 'Kawin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ukt_mhs`
--

CREATE TABLE IF NOT EXISTS `tb_ukt_mhs` (
  `id_ukt_mahasiswa` varchar(1) NOT NULL,
  `nominal` varchar(10) NOT NULL,
  `tahun_akademik` year(4) NOT NULL,
  `id_prodi` varchar(4) NOT NULL,
  `id_jalur` int(1) NOT NULL,
  PRIMARY KEY (`id_ukt_mahasiswa`),
  KEY `id_prodi` (`id_prodi`),
  KEY `id_jalur` (`id_jalur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ukt_mhs`
--

INSERT INTO `tb_ukt_mhs` (`id_ukt_mahasiswa`, `nominal`, `tahun_akademik`, `id_prodi`, `id_jalur`) VALUES
('A', '5.500.000', 2016, 'pssi', 3),
('B', '6.500.000', 2016, 'pssi', 3),
('C', '9.000.000', 2016, 'pssi', 3),
('D', '12.000.000', 2016, 'pssi', 3),
('E', '3.000.000', 2016, 'pssi', 1),
('F', '4.500.000', 2016, 'pssi', 1),
('G', '7.000.000', 2016, 'pssi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(30) NOT NULL,
  `password_user` varchar(32) NOT NULL,
  `level_user` int(3) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `level_user` (`level_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `password_user`, `level_user`) VALUES
(1, '162410101075', '1234', 1),
(2, '162410101024', '4321', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_level`
--

CREATE TABLE IF NOT EXISTS `tb_user_level` (
  `user_level` int(3) NOT NULL,
  `ket_user_level` varchar(20) NOT NULL,
  PRIMARY KEY (`user_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_level`
--

INSERT INTO `tb_user_level` (`user_level`, `ket_user_level`) VALUES
(1, 'Mahasiswa');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_data_mahasiswa`
--
ALTER TABLE `tb_data_mahasiswa`
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_10` FOREIGN KEY (`id_pekerjaan`) REFERENCES `tb_pekerjaan` (`id_pekerjaan`),
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_13` FOREIGN KEY (`id_ukt_mahasiswa`) REFERENCES `tb_ukt_mhs` (`id_ukt_mahasiswa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_14` FOREIGN KEY (`id_status_bm`) REFERENCES `tb_status_bm` (`id_status_bm`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_3` FOREIGN KEY (`id_penghasilan`) REFERENCES `tb_penghasilan` (`id_penghasilan`),
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_5` FOREIGN KEY (`id_pendidikan_ortu`) REFERENCES `tb_pendidikan_ortu` (`id_pendidikan_ortu`),
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_6` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `tb_jenis_kelamin` (`id_jenis_kelamin`),
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_7` FOREIGN KEY (`id_status_sipil`) REFERENCES `tb_status_ktp` (`id_status_sipil`),
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_8` FOREIGN KEY (`id_golongan_darah`) REFERENCES `tb_golongan_darah` (`id_gol_darah`),
  ADD CONSTRAINT `tb_data_mahasiswa_ibfk_9` FOREIGN KEY (`id_jurusan_sma`) REFERENCES `tb_jurusan_sma` (`id_jurusan_sma`);

--
-- Constraints for table `tb_pegawai_simaba`
--
ALTER TABLE `tb_pegawai_simaba`
  ADD CONSTRAINT `tb_pegawai_simaba_ibfk_2` FOREIGN KEY (`id_lvl_adm_um`) REFERENCES `id_level_adm_um` (`id_level_adm`);

--
-- Constraints for table `tb_peserta_um`
--
ALTER TABLE `tb_peserta_um`
  ADD CONSTRAINT `tb_peserta_um_ibfk_2` FOREIGN KEY (`jenis_kelamin`) REFERENCES `tb_jenis_kelamin` (`id_jenis_kelamin`),
  ADD CONSTRAINT `tb_peserta_um_ibfk_4` FOREIGN KEY (`id_lokasi`) REFERENCES `tb_lokasi_ujian_um` (`id_lokasi`),
  ADD CONSTRAINT `tb_peserta_um_ibfk_5` FOREIGN KEY (`id_pekerjaan`) REFERENCES `tb_pekerjaan` (`id_pekerjaan`),
  ADD CONSTRAINT `tb_peserta_um_ibfk_6` FOREIGN KEY (`id_jurusan_sma`) REFERENCES `tb_jurusan_sma` (`id_jurusan_sma`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_peserta_um_ibfk_7` FOREIGN KEY (`id_prodi_pilihan`) REFERENCES `tb_prodi` (`id_prodi`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_peserta_um_ibfk_8` FOREIGN KEY (`id_ukt_mahasiswa`) REFERENCES `tb_ukt_mhs` (`id_ukt_mahasiswa`);

--
-- Constraints for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD CONSTRAINT `tb_prodi_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `tb_fakultas` (`id_fakultas`);

--
-- Constraints for table `tb_ukt_mhs`
--
ALTER TABLE `tb_ukt_mhs`
  ADD CONSTRAINT `tb_ukt_mhs_ibfk_1` FOREIGN KEY (`id_jalur`) REFERENCES `tb_jalur_seleksi` (`id_jalur`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ukt_mhs_ibfk_2` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id_prodi`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`level_user`) REFERENCES `tb_user_level` (`user_level`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
