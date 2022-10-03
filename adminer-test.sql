-- Adminer 4.8.1 MySQL 5.7.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `construction_renters_app` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `construction_renters_app`;

DROP TABLE IF EXISTS `expenditures`;
CREATE TABLE `expenditures` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `expenditures` (`id`, `tag`, `tujuan`, `keterangan`, `total_biaya`, `created_at`, `updated_at`) VALUES
(4,	'Pergantian',	'Pergantian Spare Part',	'Bagian yang diganti adalah busi',	'200000',	'2022-08-26 22:02:25',	'2022-08-26 22:02:25');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `locations`;
CREATE TABLE `locations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longtitude` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `locations` (`id`, `nama_lokasi`, `deskripsi`, `latitude`, `longtitude`, `created_at`, `updated_at`) VALUES
(1,	'Pekanbaru',	'jalan pahlawan kerja gg bismillah',	-8.5830695,	116.3202515,	'2022-08-20 18:39:10',	'2022-08-20 18:39:10'),
(2,	'Perawang',	'BTN Cendrawasih',	-8.5830695,	116.3202515,	'2022-08-20 18:39:10',	'2022-08-20 18:39:10'),
(5,	'Bukittinggi',	'Sumatra Barat',	-0.303918,	100.383479,	'2022-08-21 01:51:47',	'2022-08-21 01:56:18'),
(6,	'jambi',	'lorem',	-1.609972,	103.607254,	'2022-08-23 20:39:33',	'2022-08-23 20:39:56');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(5,	'2022_08_05_215347_add_column_is_admin_at_table_user',	1),
(6,	'2022_08_05_232639_create_table_tools',	1),
(7,	'2022_08_07_072422_create_renter_table',	1),
(8,	'2022_08_07_084949_create_transactions_table',	1),
(9,	'2022_08_14_010918_add_column_status_penggunaan',	1),
(10,	'2022_08_20_072208_add_column_lat_and_long_for_table_transaction',	1),
(11,	'2022_08_20_215536_create_locations_table',	1),
(12,	'2022_08_26_214953_add_column_user_id_in_table_renter',	2),
(13,	'2022_08_26_233855_create_table_expeditures',	3);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `renters`;
CREATE TABLE `renters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_penyewa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `renters` (`id`, `nama_perusahaan`, `alamat`, `nama_penyewa`, `alamat_penyewa`, `nik`, `pekerjaan`, `status`, `created_at`, `updated_at`, `user_id`) VALUES
(1,	'youth',	'perawang',	'rias griamory',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'00003',	'programmer',	'Pihak Penyewa',	'2022-08-20 18:41:18',	'2022-08-20 18:41:18',	0),
(2,	'step up dev',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'Rian',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'1231',	'programmer',	'Pihak Penyewa',	'2022-08-20 19:32:23',	'2022-08-20 19:32:23',	0),
(3,	'youth',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'rias griamory',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'119',	'programmer',	'Pihak Penyewa',	'2022-08-20 19:39:45',	'2022-08-20 19:39:45',	0),
(4,	'morse',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'key',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'111122',	'programmer',	'Pihak Penyewa',	'2022-08-21 01:57:24',	'2022-08-21 01:57:24',	0),
(5,	'make',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'shinici kudo',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'222211',	'programmer',	'Pihak Penyewa',	'2022-08-21 01:59:10',	'2022-08-21 01:59:10',	0),
(6,	'sumatera maju',	'riau',	'doni',	'pekanbaru',	'020304',	'programmer',	'Pihak Penyewa',	'2022-08-22 08:18:19',	'2022-08-22 08:18:19',	0),
(7,	'Riau Berkembang',	'Duri',	'Soni',	'Duri',	'011129',	'programmer',	'Pihak Penyewa',	'2022-08-22 08:20:15',	'2022-08-22 08:20:15',	0),
(8,	'Jawara Code',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'rias griamory',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'224442',	'programmer',	'Pihak Penyewa',	'2022-08-22 08:26:37',	'2022-08-22 08:26:37',	0),
(9,	'More Tech',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'roni',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'111555',	'programmer',	'Pihak Penyewa',	'2022-08-22 08:48:03',	'2022-08-22 08:48:03',	0),
(10,	'moka pos',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'rias griamory',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'333445',	'programmer',	'Pihak Penyewa',	'2022-08-22 08:51:54',	'2022-08-22 08:51:54',	0),
(11,	'insigt pos',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'rias griamory',	'Kelurahan: Perawang Barat Kecamatan: Tualang, Perumahan BTN Cendrawasih Blok F1 No.08',	'44552',	'programmer',	'Pihak Penyewa',	'2022-08-22 08:53:29',	'2022-08-22 08:53:29',	0),
(12,	'test',	'bukit tinggi',	'rian',	'jdjd',	'121298',	'programmer',	'Pihak Penyewa',	'2022-08-23 20:47:57',	'2022-08-23 20:47:57',	0),
(13,	'stv',	'pekanbaru',	'rias griamory',	'pekanbaru',	'000002',	'programmer',	'Pihak Penyewa',	'2022-08-26 14:38:30',	'2022-08-26 14:38:30',	3);

DROP TABLE IF EXISTS `tools`;
CREATE TABLE `tools` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_alat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_ketersedian` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tools` (`id`, `nama_alat`, `tipe`, `gambar`, `jumlah_ketersedian`, `status`, `kondisi`, `created_at`, `updated_at`) VALUES
(1,	'Traktor',	'Ladang',	'2410566.jpg',	-2,	'Stand By',	'Baik',	'2022-08-20 18:40:38',	'2022-08-26 22:01:24');

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `renter_id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL,
  `lama_penyewaan` int(11) NOT NULL,
  `latitude` double DEFAULT NULL,
  `longtitude` double DEFAULT NULL,
  `total_biaya` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_penggunaan` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transactions` (`id`, `renter_id`, `tool_id`, `lama_penyewaan`, `latitude`, `longtitude`, `total_biaya`, `created_at`, `updated_at`, `status_penggunaan`) VALUES
(1,	1,	1,	1,	-8.5830695,	116.3202515,	2900000,	'2022-08-20 18:41:28',	'2022-08-20 18:41:28',	1),
(2,	2,	1,	1,	-8.5830695,	116.3202515,	2900000,	'2022-08-20 19:33:34',	'2022-08-20 19:33:34',	1),
(3,	3,	1,	1,	-8.5830695,	116.3202515,	2900000,	'2022-08-20 19:42:02',	'2022-08-20 19:42:02',	1),
(4,	4,	1,	1,	-8.5830695,	116.3202515,	2900000,	'2022-08-21 01:57:30',	'2022-08-21 01:57:30',	1),
(5,	5,	1,	1,	-0.303918,	100.383479,	2900000,	'2022-08-21 01:59:19',	'2022-08-21 01:59:19',	1),
(6,	6,	1,	2,	-0.303918,	100.383479,	5300000,	'2022-08-22 08:18:30',	'2022-08-22 08:18:30',	1),
(7,	7,	1,	2,	-0.303918,	100.383479,	5300000,	'2022-08-22 08:20:23',	'2022-08-22 08:20:23',	1),
(8,	8,	1,	2,	-0.303918,	100.383479,	5300000,	'2022-08-22 08:26:45',	'2022-08-22 08:26:45',	1),
(9,	9,	1,	1,	-8.5830695,	116.3202515,	2900000,	'2022-08-22 08:48:08',	'2022-08-22 08:48:08',	1),
(10,	10,	1,	1,	-0.303918,	100.383479,	2900000,	'2022-08-22 08:52:01',	'2022-08-22 08:52:01',	1),
(11,	11,	1,	1,	-0.303918,	100.383479,	2900000,	'2022-08-22 08:53:36',	'2022-08-22 08:53:36',	1),
(12,	12,	1,	3,	-8.5830695,	116.3202515,	7700000,	'2022-08-23 20:48:19',	'2022-08-23 20:48:19',	1),
(13,	13,	1,	1,	-1.609972,	103.607254,	2900000,	'2022-08-26 14:58:23',	'2022-08-26 15:19:07',	0),
(14,	13,	1,	3,	-0.303918,	100.383479,	7700000,	'2022-08-26 22:01:24',	'2022-08-26 22:01:24',	1);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1,	'admin',	'admin@gmail.com',	'2022-08-20 18:38:50',	'$2y$10$YrrpzjoWY0xu5WiBkkWIOe0Ul84tNnNVoJhWwn4m2C2cNYJzpBsga',	NULL,	'2022-08-20 18:38:51',	'2022-08-20 18:38:51',	1),
(2,	'diyaz',	'diyaz@gmail.com',	'2022-08-20 18:38:50',	'$2y$10$R6BwikRYB//Y.todMRr01utgEWxUtxqqvMeJLrb4ARSUWRjJ7Kuvu',	NULL,	'2022-08-20 18:38:51',	'2022-08-20 18:38:51',	0),
(3,	'rias griamory',	'user@gmail.com',	NULL,	'$2y$10$6GJPmmPP1hBzTgHR6IBQUOT0rVc/6u3AkQYADK29ZLUufsZUIUfFO',	NULL,	'2022-08-26 14:38:30',	'2022-08-26 14:38:30',	0);

-- 2022-08-27 05:15:14
