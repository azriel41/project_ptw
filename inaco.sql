-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.3.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for inaco
CREATE DATABASE IF NOT EXISTS `inaco` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `inaco`;

-- Dumping structure for table inaco.departemen
CREATE TABLE IF NOT EXISTS `departemen` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_departemen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table inaco.departemen: ~0 rows (approximately)
/*!40000 ALTER TABLE `departemen` DISABLE KEYS */;
/*!40000 ALTER TABLE `departemen` ENABLE KEYS */;

-- Dumping structure for table inaco.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table inaco.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table inaco.karyawan
CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` int(11) NOT NULL,
  `nik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_identitas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kawin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table inaco.karyawan: ~0 rows (approximately)
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
REPLACE INTO `karyawan` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `no_identitas`, `pendidikan`, `jenis_kelamin`, `agama`, `alamat`, `status_kawin`, `status_kerja`, `keterangan`, `status`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, '001', 'tes', 'ngawi', '2020-04-09 00:00:00', '239', 'SMP', 'PEREMPUAN', 'ISLAM', 'wad', 'KAWIN', 'Tetap', 'sa', 'true', 'karyawan_1.jpeg', 'administrator', 'administrator', '2020-04-07 02:02:17', '2020-04-07 02:02:17'),
	(2, '001', 'tes', 'ngawi', '2020-04-09 00:00:00', '239', 'SMP', 'PEREMPUAN', 'ISLAM', 'wad', 'KAWIN', 'Tetap', 'sa', 'true', 'karyawan_2.jpeg', 'administrator', 'administrator', '2020-04-07 02:04:28', '2020-04-07 02:04:28'),
	(3, '001', 'tes', 'ngawi', '2020-04-09 00:00:00', '239', 'SMP', 'PEREMPUAN', 'ISLAM', 'wad', 'KAWIN', 'Tetap', 'sa', 'true', 'karyawan_3.jpeg', 'administrator', 'administrator', '2020-04-07 02:04:35', '2020-04-07 02:04:35'),
	(4, '001', 'tes', 'ngawi', '2020-04-09 00:00:00', '239', 'SMP', 'PEREMPUAN', 'ISLAM', 'wad', 'KAWIN', 'Tetap', 'sa', 'true', 'karyawan_4.jpeg', 'administrator', 'administrator', '2020-04-07 02:04:55', '2020-04-07 02:04:55'),
	(5, '001', 'tes', 'ngawi', '2020-04-09 00:00:00', '239', 'SMP', 'PEREMPUAN', 'ISLAM', 'wad', 'KAWIN', 'Tetap', 'sa', 'true', 'karyawan_5.jpeg', 'administrator', 'administrator', '2020-04-07 02:05:00', '2020-04-07 02:05:00'),
	(6, '001', 'tes', 'ngawi', '2020-04-09 00:00:00', '239', 'SMP', 'PEREMPUAN', 'ISLAM', 'wad', 'KAWIN', 'Tetap', 'sa', 'true', 'karyawan_6.jpeg', 'administrator', 'administrator', '2020-04-07 02:05:11', '2020-04-07 02:05:11'),
	(7, '001', 'tes', 'ngawi', '2020-04-09 00:00:00', '239', 'SMP', 'PEREMPUAN', 'ISLAM', 'wad', 'KAWIN', 'Tetap', 'sa', 'true', 'karyawan_7.jpeg', 'administrator', 'administrator', '2020-04-07 02:06:05', '2020-04-07 02:06:05'),
	(8, '001', 'tes', 'ngawi', '2020-04-09 00:00:00', '239', 'SMP', 'PEREMPUAN', 'ISLAM', 'wad', 'KAWIN', 'Tetap', 'sa', 'true', 'karyawan_8.jpeg', 'administrator', 'administrator', '2020-04-07 02:06:28', '2020-04-07 02:06:28'),
	(9, '001', 'tes', 'ngawi', '2020-04-09 00:00:00', '239', 'SMP', 'PEREMPUAN', 'ISLAM', 'wad', 'KAWIN', 'Tetap', 'sa', 'true', 'karyawan_9.jpeg', 'administrator', 'administrator', '2020-04-07 02:06:37', '2020-04-07 02:06:37'),
	(10, '001', 'tes', 'ngawi', '2020-04-09 00:00:00', '239', 'SMP', 'PEREMPUAN', 'ISLAM', 'wad', 'KAWIN', 'Tetap', 'sa', 'true', 'karyawan_10.jpeg', 'administrator', 'administrator', '2020-04-07 02:07:09', '2020-04-07 02:07:09'),
	(11, '001', 'tes', 'ngawi', '2020-04-09 00:00:00', '239', 'SMP', 'PEREMPUAN', 'ISLAM', 'wad', 'KAWIN', 'Tetap', 'sa', 'true', 'karyawan_11.jpeg', 'administrator', 'administrator', '2020-04-07 02:07:44', '2020-04-07 02:07:44');
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;

-- Dumping structure for table inaco.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table inaco.migrations: ~5 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_04_06_220956_create_departemen_table', 2),
	(5, '2020_04_07_001646_karyawan', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table inaco.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table inaco.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table inaco.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` int(10) DEFAULT NULL,
  `hakakses` int(10) DEFAULT NULL,
  `last_session_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table inaco.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `fullname`, `nik`, `hakakses`, `last_session_id`) VALUES
	(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$PLXSl/iGTjiw6Z0lAbYllueOZ03CCvRmvGL54RS9wNw75WbhqdF8C', NULL, '2020-02-13 06:51:15', '2020-02-13 06:51:15', 'administrator', 12345, 1, '');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
