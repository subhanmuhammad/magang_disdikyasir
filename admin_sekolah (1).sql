-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 05:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `asal_sekolah`
--

CREATE TABLE `asal_sekolah` (
  `id` int(11) NOT NULL,
  `pendik_id` varchar(11) NOT NULL,
  `nomor_seri_ijazah` varchar(60) NOT NULL,
  `nomor_seri_skhun` varchar(60) NOT NULL,
  `nomor_ujian_nasional` varchar(30) NOT NULL,
  `npsn_sekolah_asal` varchar(30) NOT NULL,
  `nama_sekolah_asal` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asal_sekolah`
--

INSERT INTO `asal_sekolah` (`id`, `pendik_id`, `nomor_seri_ijazah`, `nomor_seri_skhun`, `nomor_ujian_nasional`, `npsn_sekolah_asal`, `nama_sekolah_asal`, `created_at`, `updated_at`) VALUES
(1, '1', '2313', '213', '2321', '2313', 'sadsa', '2022-04-20 21:12:22', '2022-04-20 21:12:22'),
(2, '2', '2313', '233', '2333', '233', '2333', '2022-04-20 21:34:45', '2022-04-20 21:34:45'),
(3, '3', '2', '3213', '2313', '3213', 'C:\\xampp\\tmp\\php3421.tmp', '2022-04-27 20:41:27', '2022-04-27 20:41:27'),
(5, '5', '38923', '38203', '3292893', '3238492', 'smk negeri 3 palu', '2022-05-24 03:56:22', '2022-05-24 03:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `penulis`, `gambar`, `link`) VALUES
(5, 'Dinas Pendidikan dan Kebudayaan Provinsi Sulawesi Tengah dan Universitas Tadulako bersepakat membangun sebuah Aplikasi.', 'sehubungan dengan perkembangan teknologi informasi dan mitigasi kebencanaan Dinas Pendidikan dan Kebudayaan Prov. Sulteng dan Universitas Tadulako bersepakat membangun sistem Aplikasi Satuan Pendidikan Aman Bencana. rapat yang berlangsung di dinas pendidikan dan kebudayaan prov. sulteng di pimpin langsung oleh kepala Dinas Yudiawati V. Windarussliana, SKM., M.Kes dan di ikuti Ketua jurusan Teknologi informasi fakultas teknik universitas tadulako Dr. Ir. H. M Yazdi Pusadan, S.Kom., M.Eng, kepala sub bagian kepegawaian dan umum Tasnima, SE, dan koordinator Pusdapendik Much Chusni, SE., MM', 'Muh. Haris', 'adhahda', 'http://localhost/websekolah_adminsekolah_master/public/img/1656484704990.1.jpg'),
(7, 'Haris Memasak Ikan Goreng', 'saya pergi ke pasar membeli ikan untuk makan ikan ikan itu sudah mati lalu saya goreng', 'Subhan', 'afsdfsfsf', 'http://localhost/websekolah_adminsekolah_master/public/img/1656482676739.Desert.jpg'),
(8, 'fsfsfsfs', 'sfasfasfasfas', 'asfasfasf', 'asfasfaf', 'http://localhost/websekolah_adminsekolah_master/public/img/1656482863612.Jellyfish.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `biodata_siswa`
--

CREATE TABLE `biodata_siswa` (
  `id` int(11) NOT NULL,
  `pendik_id` varchar(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tempat_lahir` varchar(60) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama_id` varchar(20) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `kebutuhan_khusus` enum('Ya','Tidak') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata_siswa`
--

INSERT INTO `biodata_siswa` (`id`, `pendik_id`, `nama_lengkap`, `jenis_kelamin`, `nisn`, `nis`, `nik`, `tempat_lahir`, `tanggal_lahir`, `agama_id`, `jurusan`, `kebutuhan_khusus`, `gambar`, `link`, `created_at`, `updated_at`) VALUES
(28, '14', 'Muh. Haris', 'Laki-laki', '9922661', '9882199', '72019298271', 'TOLITOLI', '2022-06-22', 'Agama', 'Teknik Komputer dan Jaringan', 'Tidak', '1657008281419.DSC_0443.JPG', 'http://localhost/websekolah_adminsekolah_master/public/img/1657008281419.DSC_0443.JPG', '2022-06-28 22:59:47', '2022-07-05 00:04:41'),
(29, '15', 'Yasir Amar Safri', 'Laki-laki', '9922669', '9777261', '72019298279', 'TOLITOLI', '2022-06-29', 'Islam', 'Kepererawatan', 'Tidak', '1656486501645.2.jpg', 'http://localhost/websekolah_adminsekolah_master/public/img/1656486501645.2.jpg', '2022-06-28 23:08:21', '2022-06-28 23:08:21'),
(30, '16', 'Muhammad Subhan', 'Laki-laki', '9922668', '9773882', '72019298271', 'PALU', '2022-06-22', 'Islam', 'Akuntansi', 'Ya', '1656486647122.3.jpg', 'http://localhost/websekolah_adminsekolah_master/public/img/1656486647122.3.jpg', '2022-06-28 23:10:47', '2022-06-28 23:10:47'),
(31, '17', 'Gusti Komang Bawe Saputra', 'Laki-laki', '9922612', '9777216', '72019298272', 'BOUL', '2022-06-01', 'Kristen', 'Perkantoran', 'Tidak', '1656486927584.4.jpg', 'http://localhost/websekolah_adminsekolah_master/public/img/1656486927584.4.jpg', '2022-06-28 23:13:05', '2022-06-28 23:15:27'),
(32, '18', 'reza', 'Laki-laki', '1223565', '1223565', '567684', 'palu', '2001-08-01', 'Islam', 'managemen', 'Tidak', '1657705718814.faqih].jpeg', 'http://localhost/websekolah_adminsekolah_master/public/img/1657705718814.faqih].jpeg', '2022-07-13 01:48:38', '2022-07-13 01:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `data_alumni`
--

CREATE TABLE `data_alumni` (
  `id` int(11) NOT NULL,
  `nama_alumni` varchar(30) NOT NULL,
  `sekolah_id` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_arsip`
--

CREATE TABLE `data_arsip` (
  `id` int(11) NOT NULL,
  `nama_arsip` varchar(30) NOT NULL,
  `file` varchar(60) NOT NULL,
  `sekolah_id` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` int(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(60) NOT NULL,
  `mata_pelajaran` varchar(255) NOT NULL,
  `masa_kerja` varchar(255) NOT NULL,
  `pendik_terakhir` varchar(255) NOT NULL,
  `status_perkawinan` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id`, `nama`, `nip`, `jabatan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `mata_pelajaran`, `masa_kerja`, `pendik_terakhir`, `status_perkawinan`, `alamat`, `no_hp`, `gambar`, `link`, `created_at`, `updated_at`) VALUES
(3, 'Muh.Haris.S.Kom', 1992001121, 'Guru Honor', 'Donggala', '2022-06-01', 'Laki-laki', 'Agama', 'Guru Matematika', '10 Tahun 4 Bulan', 'S1 Sarjana Pendidika', 'Status Perkawinan', 'Jalan Pendidikan', '081254662112', '1656605459849.4.jpg', 'http://localhost/websekolah_adminsekolah_master/public/img/1656605459849.4.jpg', '2022-06-30 16:10:59', '2022-06-30 08:10:59'),
(4, 'Gusti Komang Bawe Saputra', 192771221, 'Guru Honor', 'Donggala', '2022-07-05', 'Laki-laki', 'Islam', 'Guru Matematika', '10 Tahun 4 Bulan', 'S1 Sarjana Pendidika', 'Laki-laki', 'Jln. Pendidikan', '0854664446', '1657008153973.3.jpg', 'http://localhost/websekolah_adminsekolah_master/public/img/1657008153973.3.jpg', '2022-07-05 00:02:33', '2022-07-05 00:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `data_kejuruan`
--

CREATE TABLE `data_kejuruan` (
  `id` int(11) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `sekolah_id` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kejuruan`
--

INSERT INTO `data_kejuruan` (`id`, `nama_jurusan`, `gambar`, `link`, `keterangan`, `sekolah_id`, `created_at`, `updated_at`) VALUES
(30, 'Teknik Informasi Dan Jaringan', '1656478581123.perkantoran.svg', 'http://localhost/websekolah_adminsekolah_master/public/img/1656478581123.perkantoran.svg', 'Tkj Merupakan Sebuah Jurusan', '1', '2022-06-28 20:56:21', '2022-06-28 20:56:21'),
(33, 'Perkantoran', '1657009567575.perkantoran1.svg', 'http://localhost/websekolah_adminsekolah_master/public/img/1657009567575.perkantoran1.svg', 'Perkantoran Merupakan', '1', '2022-06-28 22:24:02', '2022-07-05 00:26:07'),
(34, 'Rekayasa Perangkat Lunak', '1657009528553.rpl1.svg', 'http://localhost/websekolah_adminsekolah_master/public/img/1657009528553.rpl1.svg', 'RPL Merupaka Sebuah Jurusan', '1', '2022-07-05 00:25:28', '2022-07-05 00:25:28'),
(35, 'penerbangan', '1657102489817.undraw_Aircraft_re_m05i.png', 'http://localhost/websekolah_adminsekolah_master/public/img/1657102489817.undraw_Aircraft_re_m05i.png', 'ini jurusan perneebangan', '1', '2022-07-06 03:14:49', '2022-07-06 03:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `data_sarpras`
--

CREATE TABLE `data_sarpras` (
  `id` int(11) NOT NULL,
  `sekolah_id` varchar(11) NOT NULL,
  `sarpras_jenis_id` varchar(100) NOT NULL,
  `jumlah` int(30) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_sarpras`
--

INSERT INTO `data_sarpras` (`id`, `sekolah_id`, `sarpras_jenis_id`, `jumlah`, `gambar`, `link`, `created_at`, `updated_at`) VALUES
(11, '1', 'Ruang Kepala Sekolah', 1, '1656484704990.1.jpg', 'http://localhost/websekolah_adminsekolah_master/public/img/1656484704990.1.jpg', '2022-06-28 22:38:24', '2022-06-28 22:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolah`
--

CREATE TABLE `data_sekolah` (
  `id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL,
  `status` enum('Calon','Baru','Lulus') NOT NULL,
  `sekolah_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_tes`
--

CREATE TABLE `data_tes` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_tes`
--

INSERT INTO `data_tes` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(7, 'SADSA', '2022-04-12 19:29:22', '2022-04-12 19:29:22'),
(8, 'dsd', '2022-04-24 23:48:45', '2022-04-24 23:48:45'),
(9, 'dsd', '2022-04-24 23:51:00', '2022-04-24 23:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id` int(11) NOT NULL,
  `nama_ekstrakulikuler` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `sekolah_id` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id`, `nama_ekstrakulikuler`, `gambar`, `link`, `sekolah_id`, `created_at`, `updated_at`) VALUES
(17, 'Pramuka', '1656485699253.8.jpg', 'http://localhost/websekolah_adminsekolah_master/public/img/1656485699253.8.jpg', '1', '2022-06-28 22:54:59', '2022-06-28 22:54:59'),
(18, 'Pramuka', '1656486197502.4.jpg', 'http://localhost/websekolah_adminsekolah_master/public/img/1656486197502.4.jpg', '1', '2022-06-28 23:03:17', '2022-06-28 23:03:17'),
(19, 'PMR', '1656486255338.pmr3.jpg', 'http://localhost/websekolah_adminsekolah_master/public/img/1656486255338.pmr3.jpg', '1', '2022-06-28 23:04:15', '2022-06-28 23:04:15'),
(20, 'PMR', '1656486274534.pmr2.jpg', 'http://localhost/websekolah_adminsekolah_master/public/img/1656486274534.pmr2.jpg', '1', '2022-06-28 23:04:34', '2022-06-28 23:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `angkatan` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `No_Hp` int(13) NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Fakultas` varchar(10) NOT NULL,
  `Jurusan` varchar(20) NOT NULL,
  `Prodi` varchar(20) NOT NULL,
  `Konsentrasi` varchar(20) NOT NULL,
  `Wali` varchar(40) NOT NULL,
  `Tinggi_Badan` int(3) NOT NULL,
  `Berat_Badan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendik`
--

CREATE TABLE `pendik` (
  `id` int(11) NOT NULL,
  `status` varchar(60) NOT NULL,
  `sekolah_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendik`
--

INSERT INTO `pendik` (`id`, `status`, `sekolah_id`, `created_at`, `updated_at`) VALUES
(1, 'Baru', 1, '2022-04-20 20:00:53', '2022-04-20 20:00:53'),
(2, 'Baru', 1, '2022-04-20 20:01:49', '2022-04-20 20:01:49'),
(3, 'Baru', 1, '2022-04-27 20:40:44', '2022-04-27 20:40:44'),
(4, 'Baru', 1, '2022-05-12 05:03:48', '2022-05-12 05:03:48'),
(5, 'Baru', 1, '2022-05-24 03:53:09', '2022-05-24 03:53:09'),
(6, 'Baru', 1, '2022-05-24 05:22:13', '2022-05-24 05:22:13'),
(7, 'Baru', 1, '2022-05-27 05:53:45', '2022-05-27 05:53:45'),
(8, 'Baru', 1, '2022-05-28 22:58:07', '2022-05-28 22:58:07'),
(9, 'Baru', 1, '2022-06-27 07:38:15', '2022-06-27 07:38:15'),
(10, 'Baru', 1, '2022-06-27 07:52:10', '2022-06-27 07:52:10'),
(11, 'Baru', 1, '2022-06-27 08:14:41', '2022-06-27 08:14:41'),
(12, 'Baru', 1, '2022-06-27 08:17:36', '2022-06-27 08:17:36'),
(13, 'Baru', 1, '2022-06-28 04:02:55', '2022-06-28 04:02:55'),
(14, 'Baru', 1, '2022-06-28 22:59:47', '2022-06-28 22:59:47'),
(15, 'Baru', 1, '2022-06-28 23:08:21', '2022-06-28 23:08:21'),
(16, 'Baru', 1, '2022-06-28 23:10:46', '2022-06-28 23:10:46'),
(17, 'Baru', 1, '2022-06-28 23:13:04', '2022-06-28 23:13:04'),
(18, 'Baru', 1, '2022-07-13 01:48:38', '2022-07-13 01:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `pendik_domisili`
--

CREATE TABLE `pendik_domisili` (
  `id` int(11) NOT NULL,
  `pendik_id` varchar(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `dusun` varchar(90) NOT NULL,
  `kelurahan` varchar(90) NOT NULL,
  `kecamatan` varchar(90) NOT NULL,
  `kab_kota_id` varchar(11) NOT NULL,
  `transportasi_id` varchar(11) NOT NULL,
  `jenis_tinggal_id` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendik_domisili`
--

INSERT INTO `pendik_domisili` (`id`, `pendik_id`, `alamat`, `dusun`, `kelurahan`, `kecamatan`, `kab_kota_id`, `transportasi_id`, `jenis_tinggal_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'dsadsa', 'a', '1', '1', '1', '1', '1', '2022-04-20 21:36:17', '2022-04-20 21:36:17'),
(2, '2', 'dsadsa', 'dasd', 'dsfds', '1', '321', '321', '1', '2022-04-20 23:03:43', '2022-04-20 23:03:43'),
(5, '5', 'jalan jamur', '2', 'balaroa', 'palu barat', 'palu', 'motor', 'wali', '2022-05-24 04:16:12', '2022-05-24 04:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `pendik_kks`
--

CREATE TABLE `pendik_kks` (
  `id` int(11) NOT NULL,
  `pendik_id` varchar(11) NOT NULL,
  `kks_no` varchar(30) NOT NULL,
  `pkh_status` varchar(30) NOT NULL,
  `pkh_nomor` varchar(30) NOT NULL,
  `pip_status` varchar(30) NOT NULL,
  `pip_alasan` varchar(100) NOT NULL,
  `kip_status` varchar(30) NOT NULL,
  `kip_nomor` varchar(30) NOT NULL,
  `kip_nama_tertera` varchar(90) NOT NULL,
  `kip_alasan_menolok` text NOT NULL,
  `no_akta_lahir` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendik_kks`
--

INSERT INTO `pendik_kks` (`id`, `pendik_id`, `kks_no`, `pkh_status`, `pkh_nomor`, `pip_status`, `pip_alasan`, `kip_status`, `kip_nomor`, `kip_nama_tertera`, `kip_alasan_menolok`, `no_akta_lahir`, `created_at`, `updated_at`) VALUES
(1, '1', '232', 'sda', '21', 'dd', 'dls;d', 'd', '21', 'dsd', 'ldl', '23', '2022-04-20 23:37:47', '2022-04-20 23:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `pendik_ortu`
--

CREATE TABLE `pendik_ortu` (
  `id` int(11) NOT NULL,
  `pendik_id` varchar(11) NOT NULL,
  `ayah_nama` varchar(90) NOT NULL,
  `ayah_kebutuhan_khusus` enum('Ya','Tidak') NOT NULL,
  `ayah_pekerjaan` varchar(90) NOT NULL,
  `ayah_penghasilan` varchar(90) NOT NULL,
  `ayah_pendidikan` varchar(90) NOT NULL,
  `ibu_nama` varchar(90) NOT NULL,
  `ibu_kebutuhan_khusus` enum('Ya','Tidak') NOT NULL,
  `ibu_pekerjaan` varchar(90) NOT NULL,
  `ibu_penghasilan` varchar(90) NOT NULL,
  `ibu_pendidikan` varchar(90) NOT NULL,
  `wali_nama` varchar(90) DEFAULT NULL,
  `wali_pekerjaan` varchar(90) DEFAULT NULL,
  `wali_pendidikan` varchar(90) DEFAULT NULL,
  `wali_penghasilan` varchar(90) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendik_ortu`
--

INSERT INTO `pendik_ortu` (`id`, `pendik_id`, `ayah_nama`, `ayah_kebutuhan_khusus`, `ayah_pekerjaan`, `ayah_penghasilan`, `ayah_pendidikan`, `ibu_nama`, `ibu_kebutuhan_khusus`, `ibu_pekerjaan`, `ibu_penghasilan`, `ibu_pendidikan`, `wali_nama`, `wali_pekerjaan`, `wali_pendidikan`, `wali_penghasilan`, `created_at`, `updated_at`) VALUES
(3, '1', 'DSG 12', 'Ya', 'asf', 'YU', 'afasf', 'afasf', 'Tidak', 'afaf', 'asfaf', 'afaf', 'afaf', 'afa', 'asfafs', 'asfaf', '2022-04-20 20:04:15', '2022-04-20 21:49:35'),
(4, '2', 'DSG', 'Ya', 'fsdf', '324', 'fdsf', 'vxcv', 'Tidak', 'cvc', 'vcxv', 'xcvx', 'cxvc', 'xvc', 'dfsfz', '4324', '2022-04-20 23:01:10', '2022-04-20 23:01:10'),
(5, '4', 'jdosjods', 'Ya', 'wiraswasta', '1.000.000', 'kj', 'YUY', 'Tidak', 'kdskd', '2000000', 'sma', 'dsdd', 'jk', 'sma', '19990', '2022-05-12 05:05:00', '2022-05-12 05:05:00'),
(6, '5', 'safri', 'Ya', 'wiraswasta', '1.000.000', 'sma', 'eva', 'Ya', 'urt', '2000000', 'sma', 'santi', 'urt', 'sma', '5000000', '2022-05-24 03:55:46', '2022-05-24 03:55:46'),
(7, '7', 'haris', 'Tidak', 'wiraswasta', '1.000.000', 'sma', 'rani', 'Ya', 'urt', '2000000', 'sma', 'haris', 'urt', 'sma', '1000000', '2022-05-27 05:55:45', '2022-05-27 05:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `pendik_periodik`
--

CREATE TABLE `pendik_periodik` (
  `id` int(11) NOT NULL,
  `pendik_id` varchar(11) NOT NULL,
  `tinggi_badan` float NOT NULL,
  `jarak_tempat_tinggal` varchar(20) NOT NULL,
  `waktu_tempuh` varchar(11) NOT NULL,
  `jumlah_saudara_kandung` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendik_periodik`
--

INSERT INTO `pendik_periodik` (`id`, `pendik_id`, `tinggi_badan`, `jarak_tempat_tinggal`, `waktu_tempuh`, `jumlah_saudara_kandung`, `created_at`, `updated_at`) VALUES
(1, 'SMK', 2121, '321', '3213', 2, '2022-04-20 00:15:54', '2022-04-20 00:15:54'),
(2, '1', 12, '21', '21', 2, '2022-04-20 23:34:28', '2022-04-20 23:34:28'),
(3, '5', 180, '1 km', '20 menit', 2, '2022-05-24 03:58:53', '2022-05-24 03:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `sarpras_jenis`
--

CREATE TABLE `sarpras_jenis` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekolah_id` int(11) NOT NULL,
  `pendik_id` int(20) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `roles`, `sekolah_id`, `pendik_id`, `password`, `created_at`, `updated_at`) VALUES
('3', 'superadmin', 'superadmin', 1, 1, '$2y$10$rGj4eeTDCGxTh7Wom8HcCesZEMvmXyvz4nLI9Subxxavdq9KHHFuS', '2021-06-26 21:15:05', '2021-06-26 21:15:05'),
('5', 'adminsiswa', 'adminsiswa', 10, 15, '123', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asal_sekolah`
--
ALTER TABLE `asal_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_alumni`
--
ALTER TABLE `data_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_arsip`
--
ALTER TABLE `data_arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kejuruan`
--
ALTER TABLE `data_kejuruan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_sarpras`
--
ALTER TABLE `data_sarpras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_tes`
--
ALTER TABLE `data_tes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendik`
--
ALTER TABLE `pendik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendik_domisili`
--
ALTER TABLE `pendik_domisili`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendik_kks`
--
ALTER TABLE `pendik_kks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendik_ortu`
--
ALTER TABLE `pendik_ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendik_periodik`
--
ALTER TABLE `pendik_periodik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asal_sekolah`
--
ALTER TABLE `asal_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `data_alumni`
--
ALTER TABLE `data_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_arsip`
--
ALTER TABLE `data_arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_kejuruan`
--
ALTER TABLE `data_kejuruan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `data_sarpras`
--
ALTER TABLE `data_sarpras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_tes`
--
ALTER TABLE `data_tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendik`
--
ALTER TABLE `pendik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pendik_domisili`
--
ALTER TABLE `pendik_domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendik_kks`
--
ALTER TABLE `pendik_kks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendik_ortu`
--
ALTER TABLE `pendik_ortu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pendik_periodik`
--
ALTER TABLE `pendik_periodik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
