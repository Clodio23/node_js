-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2022 pada 13.48
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `absen` varchar(40) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_absen`
--

INSERT INTO `tb_absen` (`id`, `admin_id`, `nama`, `absen`, `keterangan`, `file`, `time`) VALUES
(1, 14, 'Hasan Tuahuns, S.Pd,M.Pd', 'masuk', 'hadir', 'FILE GURU.docx', '00:18:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `agama` varchar(50) NOT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `alamat_email` varchar(125) DEFAULT NULL,
  `alamat` varchar(75) DEFAULT NULL,
  `nuptk` varchar(50) DEFAULT NULL,
  `bidang_studi` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tugas_tambahan` varchar(50) DEFAULT NULL,
  `status_pegawai` varchar(60) NOT NULL,
  `status_keaktifan` varchar(100) NOT NULL,
  `status_nikah` varchar(100) NOT NULL,
  `tmt_pns` varchar(50) DEFAULT NULL,
  `tmt_cpns` varchar(50) DEFAULT NULL,
  `tmt_pangkat` varchar(50) DEFAULT NULL,
  `pangkat_golongan` varchar(50) DEFAULT NULL,
  `sumber_gaji` varchar(50) DEFAULT NULL,
  `npwp` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `tgl_inputdata` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `admin_id`, `nip`, `password`, `nik`, `nama_lengkap`, `tgl_lahir`, `jenis_kelamin`, `agama`, `no_hp`, `alamat_email`, `alamat`, `nuptk`, `bidang_studi`, `jabatan`, `tugas_tambahan`, `status_pegawai`, `status_keaktifan`, `status_nikah`, `tmt_pns`, `tmt_cpns`, `tmt_pangkat`, `pangkat_golongan`, `sumber_gaji`, `npwp`, `img`, `file`, `tgl_inputdata`) VALUES
(8, 14, '196504241991031017', '196504', '8171022404650011', 'Hasan Tuahuns, S.Pd,M.Pd', 'Kulur, 24/04/1965', 'laki-laki', 'Islam', '082248214452', 'hasantuahuns04@gmail.com', 'Batu Merah Puncak; RT/RW. 05/06; Desa Batu Merah; Kec. Sirimau Kota Ambon; ', '3756743646200042', 'PKn', 'Guru Madya', 'Kepala Sekolah', 'PNS', 'Aktif', 'Menikah', '01-03-1993', '01-03-1991', '01-04-2018', 'Pembina Tkt.I IV-b', 'APBN', '47.748.6013.941.000', 'image1.jpeg', 'FILE GURU.docx', '0000-00-00 00:00:00'),
(9, 16, '196212011984032018', '196212', '8171034112620001', 'Elitha Rolly Ruhupatty, S.Pd', 'Paperu, 01/12/1962', 'perempuan', 'Kristen Protestan', '081316685763', 'litharuhupatty@gmail.com', 'Passo; RT/RW. 13/03; Kota Ambon', '5533740641300093', 'IPS  Ekonomi', 'Guru Madya', 'Wakil Kepala Sekolah Humas', 'PNS', 'Aktif', 'Menikah', '01-01-1986', '01-03-1984', '01-04-2017', 'Pembina Tkt.I IV-b', 'APBN', '47.687.059.7-941.000', 'image2.jpeg', 'data guru.JPG', '0000-00-00 00:00:00'),
(10, 17, '196406181986012003', '196406', '8171045806640002', 'Alexanderina Santjie Matatula, S.Pd', 'Akoon, 18/06/1964', 'perempuan', 'Kristen Protestan', '082197974070', 'alexismatatula64@gmail.com', 'Jl. Ir. M. Putuhena; RT/RW. 001/002; Desa Rumahtiga;Kec Teluk Ambon;97234', '1950742640300002', 'Matematika', 'Guru Madya', 'Wakil Kepala Sekolah Bidang Kurikulum', 'PNS', 'Aktif', 'Menikah', '01-10-1987', '01-10-1986', '01-10-2018', 'Pembina Tkt.I IV-b', 'APBN', '47.716.999.9-941.000', 'image3.jpeg', 'data guru.JPG', '0000-00-00 00:00:00'),
(11, 18, '196412051998021003', '196412', '8171040512640001', 'Drs. Nicolaas Donald Wattimury', 'Sanana, 05/12/1964', 'laki-laki', 'Kristen Protestan', '085243296234', 'nicolaasdwattimury@gmail.com', 'Rumahtiga  RT 001/003; Rumahtiga ; Kec. Teluk Ambon; 97234', '4537742643200023', 'IPS Ekonomi', 'Guru Madya', 'Wakil Kepala Sekolah Kesiswaan', 'PNS', 'Aktif', 'Menikah', '01-04-1999', '01-02-1998', '01-04-2017', 'Pembina Tkt.I IV-b', 'APBN', '47.717.016.1-941.000', 'image31.jpeg', 'data guru.JPG', '0000-00-00 00:00:00'),
(12, 19, '196809011997022002', '196809', '8171044109680001', 'Saartje Martje Manuhutu, S.Pd', 'Ambon, 01/09/1968', 'perempuan', 'Kristen Protestan', '081356211553', 'saartjemanuhutu@gmail.com', 'Rumahtiga  RT 001/003; Rumahtiga ; Kec. Teluk Ambon; 97234', '6233746647300013', 'Bahsa Indonesia', 'Guru Madya', 'Kepala Perpustakaan', 'PNS', 'Aktif', 'Menikah', '01-04-1998', '01-02-1997', '01-04-2017', 'Pembina Tkt.I IV-b', 'APBN', '47.640.499.1.947.000', 'image4.jpeg', 'FILE GURU.docx', '0000-00-00 00:00:00'),
(13, 21, '196910301996012001', '196910', '8171047010690001', 'Pertronela Kaihatu, S.Pd', 'Oma, 30/10/1969', 'perempuan', 'Kristen Protestan', '081248776210', 'kaihatunety@gmail.com', 'Jl. Udang I No. 69; RT/RW 003/00; Kel. Tihu - Kec. Teluk Ambon; 97234', '7362747648300003', 'PenjasReK', 'Guru Madya', '', 'PNS', 'Aktif', 'Menikah', '01-10-1997', '01-1-1996', '01-4-2018', 'Pembina Tkt.I IV-b', 'APBN', '47.717.022.9-941.000', 'image13.jpeg', 'data guru.JPG', '0000-00-00 00:00:00'),
(14, 22, '197106121995122001', '197106', '8171045206710003', 'Sarmalina Luanmasar, S.Pd', 'Fursuy, 12/06/1971', 'perempuan', 'Kristen Protestan', '082189360030', 'sarmalina1112@mail.com', 'Poka RT 003/001; Desa Poka; Kec. Teluk Ambon; 97234', '8944749650300012', 'IPA  Fisika', 'Guru Madya', '', 'PNS', 'Aktif', 'Menikah', '01-12-1995', '01-12-1995', '01-10-2018', 'Pembina Tkt.I IV-b', 'APBN', '47.717.026.0-941.000', 'image33.jpeg', 'FILE GURU.docx', '0000-00-00 00:00:00'),
(15, 23, '197110301998032010', '197110', '8171037010710001', 'Lydia Lientje Joseph, S.Pd', 'Ambon, 30/10/1971', 'perempuan', 'Kristen Protestan', '081343308730', 'lydia.matatula@gmail.com', 'Jl. Laksadia Leo Wattimena; RT/Rw. 032/007; Kel/Desa Passo; Kec. Baguala', '1362749651300043', 'Pendidikan agama Kristen', 'Guru Madya', '', 'PNS', 'Aktif', 'Menikah', '01-05-1999', '01-03-1998', '01-04-2018', 'Pembina Tkt.I IV-b', 'APBN', '47.687.033.2-941.000', 'image32.jpeg', 'FILE GURU.docx', '0000-00-00 00:00:00'),
(16, 24, '197011162000082001', '197011', '8171035611700001', 'Ruth Magdalena Maholle, S.Pd', 'Soakonora, 16/11/1970', 'perempuan', 'Kristen Protestan', '085344316942', 'ruthmaholle16@gmail.com', 'BTN Passo Indah Blok XI No RT 046/009; Passo; Kec. Baguala', '8448748650300023', 'IPS  Geografi', 'Guru Madya', 'Staf Kurikulum', 'PNS', 'Aktif', 'Menikah', '01-10-2001', '01-08-2000', '01-10-2018', 'Pembina Tkt.I IV-b', 'APBN', '47.687.039.9-941.000', 'image18.jpeg', 'FILE GURU.docx', '0000-00-00 00:00:00'),
(17, 25, '197003162005012010', '197003', '8171045603700002', 'Maharita Daya, S.Pd', 'Ternate, 16/03/1970', 'perempuan', 'Kristen Protestan', '085254091644', 'dayamaharitha@gmail.com', 'Rumahtiga; RT/Rw. 002/003; Desa Rumahtiga; Kec. Teluk Ambon; 97234', '1648748651300002', 'Bahasa Inggris', 'Guru Madya', '- Koord. Mapel Bahasa Inggris', 'PNS', 'Aktif', 'Menikah', '01-06-2006', '01-10-2005', '01-10-2019', 'Pembina Tkt.I IV-b', 'APBN', '97.885.255.6-941.000', 'image16.jpeg', 'data guru.JPG', '0000-00-00 00:00:00'),
(18, 26, '196202151983012003', '196202', '8171045502620001', 'Welmina  Nunumete', 'Hative Besar, 15/02/1962', 'perempuan', 'Kristen Protestan', '082197718187', 'wellynunumete@gmail.com', 'Hative besar; Desa Hative Besar; RT/RW. 018/004; Kec. Teluk Ambon; 97234', '2547740645300002', 'Bahsa Indonesia', 'Guru Madya', 'Staf Perpustakaan', 'PNS', 'Aktif', 'Menikah', '01-8-1984', '01-1-1983', '01-4-2012', 'Pembina IV-a', 'APBN', '54.295.919.2-941.000', 'image34.jpeg', 'FILE GURU.docx', '0000-00-00 00:00:00'),
(19, 27, '196209261984032008', '196209', '8171036609620001', 'Henderjeta Wattimena', 'Titawaai, 26/09/1962', 'perempuan', 'Kristen Protestan', '082198799445', 'henderjetawattimena@gmail.com', 'Waiheru; RT/RW. 020/008; Desa Waiheru; Kec. Baguala - Kota Ambon; 97233', '7258740643300003', 'Bahsa Indonesia', 'Guru Madya', 'Staf Perpustakaan', 'PNS', 'Aktif', 'Janda', '01-10-1986', '01-03-1984', '01-04-2007', 'Pembina IV-a', 'APBN', '88.597.879.1-941.000', 'image27.jpeg', 'FILE GURU.docx', '0000-00-00 00:00:00'),
(20, 28, '196305131986012005', '196305', '8171045305630001', 'Anastasia Tunjanan', 'Sanana, 13/05/1963', 'perempuan', 'Kristen Protestan', '081342506480', 'anasttunjanan@gmail.com', 'Jl. Ir. M. Putuhena; RT/RW. 001/013; Desa Rumahtiga;Kec Teluk Ambon;97234', '5845741644300002', 'Bahsa Indonesia', 'Guru Madya', 'Anggota  UKS', 'PNS', 'Aktif', 'Menikah', '01-10-1987', '01-10-1986', '01-10-2009', 'Pembina IV-a', 'APBN', '88.297.881.7-941.000', 'image46.jpeg', 'FILE GURU.docx', '0000-00-00 00:00:00'),
(21, 29, '196311241984112002', '196311', '8171046411630001', 'Theresia Dopen', 'Ambon, 24/11/1963', 'perempuan', 'Kristen Protestan', '', 'Theresiadopeng7@gmail.com', 'Kampung Pisang Laha RT 002/003; Laha; Kec. Teluk Ambon; 97234', '9456741642300023', 'Matematika', 'Guru Madya', '', 'pilihan...', 'pilihan...', 'pilihan...', '01-09-1986', '01-11-1984', '01-10-2011', 'Pembina IV-a', 'APBN', '47.718.297.6-941.000', 'image29.jpeg', 'FILE GURU.docx', '0000-00-00 00:00:00'),
(22, 30, '196203241989032005', '196203', '8171046403630001', 'Maria Maindjanga', 'Ngofakiaha, 24/03/1962', 'perempuan', 'Kristen Protestan', '082239223664', 'maindjangamaria918@gmail.com', 'Tantui - ASPOL;  Kec. Sirimau - Kota Ambon', '9656740641300022', 'IPA  Fisika', 'Guru Madya', 'Koord. Kesra', 'PNS', 'Aktif', 'Janda', '01-02-1991', '01-03-1989', '01-10-2014', 'Pembina IV-a', 'APBN', '47.687.037.3-941.000', 'image35.jpeg', 'FILE GURU.docx', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kurikulum`
--

CREATE TABLE `tb_kurikulum` (
  `id_kurikulum` int(11) NOT NULL,
  `jenis_kurikulum` varchar(100) NOT NULL,
  `mata_pelajaran` varchar(250) NOT NULL,
  `tahun_ajaran` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `pengampu` text NOT NULL,
  `tanggal_terima` date NOT NULL,
  `file_kurikulum` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kurikulum`
--

INSERT INTO `tb_kurikulum` (`id_kurikulum`, `jenis_kurikulum`, `mata_pelajaran`, `tahun_ajaran`, `kelas`, `pengampu`, `tanggal_terima`, `file_kurikulum`) VALUES
(2, '2013', 'Pendidikan Agama dan Budi Pekerti, Pendidikan Pancasila dan Kewarganegaraan, Bahasa Indonesia, Matematika, Ilmu Pengetahuan Alam, Ilmu Pengetahuan Sosial, Bahasa Inggris, Seni Budaya, Pendidikan Jasmani, Olahraga dan Kesehatan, Prakarya.', '2019/2020', 'VII, VIII Dan IX', 'J .  O  H  E  L  L  O,  S.Pd.', '2019-07-22', 'Dokumen I   2019__.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `password_hash` varchar(100) NOT NULL,
  `level` enum('admin','guru','pegawai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`admin_id`, `username`, `nip`, `password_hash`, `level`) VALUES
(10, 'super', '123456789', '$2y$10$MUOq/K.RZuqjFNyr2Of.Vu.mtgZCkY3WBedoq6cLaofCR4LbL6PU2', 'admin'),
(14, 'Hasan Tuahuns, S.Pd,M.Pd', '196504241991031017', '$2y$10$6/ha0Xmhp4llBfdEW9sd0egwKopd6PEByqwV6yTasX/MM2AtuJaZK', 'guru'),
(15, 'Jokbeth  A. Haumahu', '196509251987032011', '$2y$10$1ZGGC9JMPGIjuKJn6H8h/eginmoA7PYdb8U0FzcavFfYC9dEwB632', 'pegawai'),
(16, 'Elitha Rolly Ruhupatty, S.Pd', '196212011984032018', '$2y$10$kQZnVhbGR/44Sh5R0DbVluVfVtF0mm0bCQlBjByuNEO9BhefLF7zK', 'guru'),
(17, 'Alexanderina Santjie Matatula, S.Pd', '196406181986012003', '$2y$10$01XnPV7GcqJwu5lvRVtWL.YcxwfscrqlK9iB7WM3JjkPNHnWT3LnG', 'guru'),
(18, 'Drs. Nicolaas Donald Wattimury', '196412051998021003', '$2y$10$nDX220JyOyNNnVTD8o66aO2nAT2JWUo4UQIIoKVgigPwmiXdK.VI2', 'guru'),
(19, 'Saartje Martje Manuhutu, S.Pd', '196809011997022002', '$2y$10$sAIoHIsLHkrgjQ2c4yq6xu/beHsnFkC.s.2R.LMYHnn6RbAazdwvS', 'guru'),
(21, 'Pertronela Kaihatu, S.Pd', '196910301996012001', '$2y$10$uOTMLbYB6Hftogpcl4utae2QMhx7aF4GXcwD0uA7EbNXUvmG0BQWO', 'guru'),
(22, 'Sarmalina Luanmasar, S.Pd', '197106121995122001', '$2y$10$jUV9/S8UkRRYZrlYtv/npuL5RnEgiR1e1M91jFW38QhZ/0CdhoRde', 'guru'),
(23, 'Lydia Lientje Joseph, S.Pd', '197110301998032010', '$2y$10$nNMKuIsKR7m/1W7MgkUAP.lMrKbp9klmcU1fucCF/I7ruprPb2nva', 'guru'),
(24, 'Ruth Magdalena Maholle, S.Pd', '197011162000082001', '$2y$10$Mwfna/uarqQYB/ItUhoiPO2.8jOkgYYl10DXa9QZpDvJiv3kVU.OS', 'guru'),
(25, 'Maharita Daya, S.Pd', '197003162005012010', '$2y$10$cTe3.f1kxF1SDuLoMOmTjumQnieGFN/Qqfmg8Vdg8Ir/eALl4UXJe', 'guru'),
(26, 'Welmina  Nunumete', '196202151983012003', '$2y$10$qAW8T4VXSlP2V4HE0E/vOuDwdg2C5wDn1zZHKH3gBO5L3HdoV2BH.', 'guru'),
(27, 'Henderjeta Wattimena', '196209261984032008', '$2y$10$jBGybKE/Qbt8zhsaIqMHse2fGMunD1yRVxFxfkvQlsOUqEbAR2U42', 'guru'),
(28, 'Anastasia Tunjanan', '196305131986012005', '$2y$10$5YFKMjes/OLkzRNL29YeqeCxg5VE81.diMRITUslyb/BMbIS7qvxK', 'guru'),
(29, 'Theresia Dopen', '196311241984112002', '$2y$10$z7vXhe3cn/BY9hQYle8wku964x9MjVqWnmT2paLhW7IKc0IYhvpAO', 'guru'),
(30, 'Maria Maindjanga', '196203241989032005', '$2y$10$a9KJn.qL6BlBvD86OzSaLuzYYxEiP2BMlNnREYw894q3jx3t2KlGe', 'guru'),
(31, 'Hamida', '196805161987032001', '$2y$10$VMwdoo7d3CPdnjmgxrmhWuGIiI/X7Mp3tMdfhVPNVZsAyQSgtUgNC', 'pegawai'),
(32, 'Selfina Nunumete', '196509181986032018', '$2y$10$jVjQNb.CQqDeaTovQhfEVOxHjoAAN/9mLuPh2bo0qyVHcLAYo9bvi', 'pegawai'),
(33, 'Blandina Pattiwael', '196604151990012002', '$2y$10$BwrB7K0FwFVVr972NkUqoODlp/00vI9VWxXid2uEYEcQ2Iv4h0iI6', 'pegawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `nip` varchar(19) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nik` varchar(17) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `agama` varchar(50) NOT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `alamat_email` varchar(125) DEFAULT NULL,
  `alamat` varchar(75) DEFAULT NULL,
  `nuptk` varchar(50) DEFAULT NULL,
  `bidang_studi` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tugas_tambahan` varchar(50) DEFAULT NULL,
  `status_pegawai` varchar(60) NOT NULL,
  `status_keaktifan` varchar(100) NOT NULL,
  `status_nikah` varchar(100) NOT NULL,
  `tmt_pns` varchar(50) DEFAULT NULL,
  `tmt_cpns` varchar(50) DEFAULT NULL,
  `tmt_pangkat` varchar(50) DEFAULT NULL,
  `pangkat_golongan` varchar(50) DEFAULT NULL,
  `sumber_gaji` varchar(50) DEFAULT NULL,
  `npwp` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `tgl_inputdata` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id`, `admin_id`, `nip`, `password`, `nik`, `nama_lengkap`, `tgl_lahir`, `jenis_kelamin`, `agama`, `no_hp`, `alamat_email`, `alamat`, `nuptk`, `bidang_studi`, `jabatan`, `tugas_tambahan`, `status_pegawai`, `status_keaktifan`, `status_nikah`, `tmt_pns`, `tmt_cpns`, `tmt_pangkat`, `pangkat_golongan`, `sumber_gaji`, `npwp`, `img`, `file`, `tgl_inputdata`) VALUES
(1, 15, '196509251987032011', '196509', '8171036609650002', 'Jokbeth  A. Haumahu', 'Malteng, 25/09/1965', 'laki-laki', 'Kristen Protestan', '081318522555', 'bhaumahu65@gmail.com', 'Jl. Laksdya Leo Wattimena RT 029/006; Desa Passo; Kec. Baguala;97233', '-', '-', 'Pelaksana', 'Bendahara Gaji', 'PNS', 'Aktif', 'Janda', '01-10-1988', '01-30-1987', '01-04-2009', 'Penata Muda TK I III-b', 'APBN', '47.717.031.0-941.000', 'image23.jpeg', 'FILE PEGAWAI.docx', '0000-00-00 00:00:00'),
(2, 31, '196805161987032001', '196805', '8171045605680003', 'Hamida', 'Rumahtiga, 16/05/1968', 'perempuan', 'Islam', '081240109669', 'idahamida829@yahoo.co.id', 'Wailela Atas; RT/RW. 001/002; Desa Rumahtiga; Kec. Teluk Ambon; 97234', '-', '-', 'Pelaksana', 'Bendahara BOS/BOP', 'PNS', 'Aktif', 'pilihan...', '01-10-1988', '01-3-1987', '01-4-2018', 'Penata Muda TK I III-b', 'APBN', '47.687.050.6-941.000', 'image28.jpeg', 'FILE PEGAWAI.docx', '0000-00-00 00:00:00'),
(3, 32, '196509181986032018', '196509', '8171045809650002', 'Selfina Nunumete', 'HATIVE BESAR, 18/091965', 'perempuan', 'Kristen Protestan', '', 'silfinanunumete@gmail.com', 'Hative Besar; RT/RW. 007/001; Desa Hative Besar; Kec. Teluk Ambon; 97234', '-', '-', 'Pelaksana', '-', 'PNS', 'Aktif', 'Menikah', '01-10-1987', '01-03-1986', '01-04-2013', 'Pengatur II-c', 'APBN', '97.885.253.1-941.000', 'image24.jpeg', 'FILE PEGAWAI.docx', '0000-00-00 00:00:00'),
(4, 33, '196604151990012002', '196604', '8171015504660001', 'Blandina Pattiwael', 'Kairatu, 15/04/1966', 'perempuan', 'Kristen Protestan', '082147434089', 'pattiwaelblandina@yahoo.com', 'Jl. Dr. Kayadoe; RT/RW. 003/006; Kel/desa. Kudamati; Kec. Nusaniwe', '0747744645300012', '-', 'Pelaksana', 'Staf Perpustakaan', 'PNS', 'Aktif', 'Menikah', '01-12-1991', '01-10-1990', '01-04-2017', 'Pengatur II-c', 'APBN', '47.687.042.3-941.000', 'image8.jpeg', 'FILE PEGAWAI.docx', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sarana`
--

CREATE TABLE `tb_sarana` (
  `id_sarana` int(11) NOT NULL,
  `jenis_sarana` varchar(50) NOT NULL,
  `letak` varchar(30) NOT NULL,
  `kepemilikan` varchar(30) NOT NULL,
  `spesifikasi` varchar(30) NOT NULL,
  `jumlah` int(30) NOT NULL,
  `laik` int(30) NOT NULL,
  `tidak_laik` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sarana`
--

INSERT INTO `tb_sarana` (`id_sarana`, `jenis_sarana`, `letak`, `kepemilikan`, `spesifikasi`, `jumlah`, `laik`, `tidak_laik`) VALUES
(23, 'fdf', 'ffw', '342', '234', 234, 234, 234);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `kelas` varchar(40) NOT NULL,
  `angkatan` varchar(40) NOT NULL,
  `wali_kelas` varchar(40) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `kelas`, `angkatan`, `wali_kelas`, `file`) VALUES
(1, 'VII. 1', '2021', 'Louise Jochbeth Nahumury', 'kelas 7.1.xlsx'),
(2, 'VII. 2', '2021', 'Josephina Lestuny', 'kelas 7.2.xlsx'),
(3, 'VII. 3', '2021', 'Robert Alfons Matkusa', 'kelas 7.3.xlsx'),
(4, 'VII. 4', '2021', 'Dina Markus', 'kelas 7.4.xlsx'),
(5, 'VII. 5', '2021', 'Pertronela Kaihatu', 'kelas 7.5.xlsx'),
(6, 'VII. 6', '2021', 'Getreuida H. Nunumete', 'kelas 7.6.xlsx'),
(7, 'VII. 7', '2021', 'Marselina Jacoba Johanna Nikijuluw', 'kelas 7.7.xlsx'),
(8, 'VIII. 1', '2020', 'Nicoline Gaspersz', 'kelas 8.1.xlsx'),
(9, 'VIII. 2', '2020', 'Sarmalina Luanmasar', 'kelas 8.2.xlsx'),
(10, 'VIII. 3', '2020', 'Anita Dorce', 'kelas 8.3.xlsx'),
(11, 'VIII. 4', '2020', '', 'kelas 8.4.xlsx'),
(12, 'VIII. 5', '2020', '', 'kelas 8.5.xlsx'),
(13, 'VIII. 6', '2020', '', 'kelas 8.6.xlsx'),
(14, 'IX. 1', '2019', '', 'kelas 9.1.xlsx'),
(15, 'IX. 2', '2019', '', 'kelas 9.2.xlsx'),
(16, 'IX. 3', '2019', '', 'kelas 9.3.xlsx'),
(17, 'IX. 4', '2019', '', 'kelas 9.4.xlsx'),
(18, 'IX. 5', '2019', '', 'kelas 9.5.xlsx'),
(19, 'IX. 6', '2019', '', 'kelas 9.6.xlsx'),
(20, 'IX. 7', '2019', '', 'kelas 9.7.xlsx'),
(21, 'VII. 1', '2019', 'Pertronela Kaihatu, S.Pd', 'kelas 7.1.xlsx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `perihal_surat` text NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_terima` date NOT NULL,
  `file_surat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_surat`
--

INSERT INTO `tb_surat` (`id_surat`, `no_surat`, `perihal_surat`, `instansi`, `tanggal_surat`, `tanggal_terima`, `file_surat`) VALUES
(2, '1076/UN13.1.3/LL/2022', 'Permohonan : Melakukan Kegiatan Asistensi Mengajar dari bln maret-juni 2022', 'FKIP Unpatti', '2022-03-15', '2022-03-15', 'surat 1.docx'),
(3, '070/UN13.1.3.7.2.1/TU/2022', 'Izin Penelitian Awal', 'FKIP Unpatti', '2022-03-16', '2022-03-16', 'surat 2.docx'),
(4, '421.5/59/SMK.5/2022', 'mohon kesediaan menyampaikan pemberitahuan penerimaan peserta didik baru', 'SMK Negeri 5 Ambon', '2022-03-23', '2022-03-23', 'surat 3.docx'),
(5, '04/PAN-HARDIKNAS/KIP/04/2022', 'pemberitahuan kegiatan gebyar FKIP unpatti menyambut HARDIKNAS tahun 2022', 'FKIP Unpatti', '2022-04-04', '2022-04-04', 'surat 4.docx'),
(6, '58/KPAU-JRT/D.3/04/2022', 'mohon penggunaan ruang serbaguna', 'GPM Jemaat Rumahtiga', '2022-04-11', '2022-04-11', 'surat 5.docx'),
(7, '08/PAN-HARDIKNAS/KIP/04/2022', 'pemberitahuan perpanjangan kegiatan gebyar FKIP Unpatti Menyambut HARDIKNAS 2022', 'FKIP Unpatti', '2022-04-12', '2022-04-12', 'surat 6.docx'),
(8, '005/118/SMKK-A/S.KLR/IV/2022', 'enerimaan siswa baru tahun ajaran 2022/2023', 'SMKS Kesehatan Ambon', '2022-03-31', '2022-03-31', 'surat 7.docx'),
(9, '420.310/SMAN 13/2022', 'informasi PPDB T.A 2022/2023', 'SMA Negeri 13 Ambon', '2022-04-19', '2022-04-19', 'surat 8.docx'),
(10, '042/PRT/IV/2022', 'pemberitahuan sosialisasi tentang imunisasi', 'Puskesmas Poka/Rumahtiga', '2022-04-22', '2022-04-22', 'surat 9.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ujian`
--

CREATE TABLE `tb_ujian` (
  `id_ujian` int(11) NOT NULL,
  `nama_ujian` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL,
  `tanggal_ujian` date NOT NULL,
  `mata_pelajaran` varchar(40) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `pengampu` text NOT NULL,
  `file_ujian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ujian`
--

INSERT INTO `tb_ujian` (`id_ujian`, `nama_ujian`, `semester`, `tahun_ajaran`, `tanggal_ujian`, `mata_pelajaran`, `kelas`, `pengampu`, `file_ujian`) VALUES
(2, 'Ujian Satuan Pendidikan', 'Genap', '2021/2022', '2022-04-04', 'Matematika', 'IX', 'Alexanderina Santjie Matatula', 'USP MATEMATIKA 2022.docx'),
(3, 'Ujian Satuan Pendidikan', 'Genap', '2021/2022', '2022-04-04', 'Bahasa Indonesia', 'IX', 'Henderjeta Wattimena', 'SOAL USP BINDO_IX_2021-2022.docx'),
(4, 'Ujian Satuan Pendidikan', 'Genap', '2021/2022', '2022-04-05', 'Ilmu Pengetahuan Alam ', 'IX', 'Royani', 'USP IPA BARU.docx'),
(5, 'Ujian Satuan Pendidikan', 'Genap', '2021/2022', '2022-04-05', 'Pendidikan Agama Kristen dan Budi Pekert', 'IX', 'Lydia Lientje Joseph', 'USP AGAMA KRISTEN.doc'),
(6, 'Ujian Nasional', 'Genap', '2021/2022', '2022-04-05', 'Pendidikan Agama Islam dan Budi Pekerti', 'IX', 'Nur Masyita Makatita', 'USP AGAMA ISLAM.docx'),
(7, 'Ujian Satuan Pendidikan', 'Genap', '2021/2022', '2022-04-05', 'Pendidikan Agama Katholik dan Budi Peker', 'IX', 'Paulus Hunganwarin', 'USP KATOLIK .docx'),
(8, 'Ujian Satuan Pendidikan', 'Genap', '2021/2022', '2022-04-06', 'Bahasa Inggris', 'IX', 'Hanitha Pearella Saimima', 'USP BAHASA INGGRIS.docx'),
(9, 'ujian Satuan Pendidikan', 'Genap', '2021/2022', '2022-04-06', 'Ilmu Pengetahuan Sosial ', 'IX', 'Renny Pattikaihattu', 'USP IPS.docx'),
(10, 'Ujian Satuan Pendidikan', 'Genap', '2021/2022', '2022-04-07', 'Pendidikan Pancasila dan Kewarganegaraan', 'IX', 'Marselina Jacoba Johanna Nikijuluw', 'USP PPKn.docx');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `admin_id_2` (`admin_id`);

--
-- Indeks untuk tabel `tb_kurikulum`
--
ALTER TABLE `tb_kurikulum`
  ADD PRIMARY KEY (`id_kurikulum`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `admin_id_2` (`admin_id`);

--
-- Indeks untuk tabel `tb_sarana`
--
ALTER TABLE `tb_sarana`
  ADD PRIMARY KEY (`id_sarana`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `tb_ujian`
--
ALTER TABLE `tb_ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_kurikulum`
--
ALTER TABLE `tb_kurikulum`
  MODIFY `id_kurikulum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_sarana`
--
ALTER TABLE `tb_sarana`
  MODIFY `id_sarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_ujian`
--
ALTER TABLE `tb_ujian`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
