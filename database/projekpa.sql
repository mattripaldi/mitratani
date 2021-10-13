-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 12:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_monitorings`
--

CREATE TABLE `jadwal_monitorings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_induk_pesanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fase_pendahuluan` date NOT NULL,
  `fase_vegetatif` date NOT NULL,
  `fase_berbunga` date NOT NULL,
  `fase_masak` date NOT NULL,
  `pesanan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_monitorings`
--

INSERT INTO `jadwal_monitorings` (`id`, `nomor_induk_pesanan`, `fase_pendahuluan`, `fase_vegetatif`, `fase_berbunga`, `fase_masak`, `pesanan_id`, `created_at`, `updated_at`) VALUES
(7, 'psn/123/101', '2021-09-15', '2021-09-15', '2021-10-18', '2021-10-20', 14, '2021-09-14 21:10:12', '2021-09-14 21:10:12'),
(9, 'psn/123/124', '2021-09-15', '2021-09-15', '2021-09-16', '2021-09-16', 15, '2021-09-14 23:44:13', '2021-09-14 23:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `lahan_pelanggans`
--

CREATE TABLE `lahan_pelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas_lahan` int(11) NOT NULL,
  `sejarah_lahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_lahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pelanggan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lahan_pelanggans`
--

INSERT INTO `lahan_pelanggans` (`id`, `nama_lahan`, `alamat`, `luas_lahan`, `sejarah_lahan`, `status_lahan`, `pelanggan_id`, `created_at`, `updated_at`) VALUES
(1, 'lahan safaat', 'Tamansuruh', 2, 'inpari', NULL, 2, '2021-09-09 01:15:43', '2021-09-09 01:15:43'),
(2, 'lahan lala', 'Cluring', 1, 'inpari 12', NULL, 3, '2021-09-09 03:03:21', '2021-09-09 03:03:21'),
(3, 'Sawah Mendut', 'Mendut banyuwangi', 2, 'inpari33', 'aktif', 4, '2021-09-13 07:15:53', '2021-09-13 07:15:53'),
(4, 'sawahnya dhika', 'songgon', 1, 'inpari 32', 'deleted', 5, '2021-09-14 04:46:22', '2021-09-14 06:57:46'),
(5, 'sawah mojoroto', 'banyuwangi', 1, 'inpari 33', 'deleted', 5, '2021-09-14 05:39:34', '2021-09-14 06:57:41'),
(6, 'lahan karangrejo', 'karang rejo banyuwangi', 1, 'inpari 32', 'aktif', 5, '2021-09-14 07:58:25', '2021-09-14 07:58:25'),
(7, 'sawah kenjo', 'Kenjo, Glagah, Banyuwangi', 1, 'mekongga', 'aktif', 5, '2021-09-14 07:58:54', '2021-09-14 07:58:54'),
(8, 'Sawah Kertosari', 'Kertosari, Banyuwangi (Uniba ke Timur)', 1, 'mekongga', 'aktif', 4, '2021-09-14 20:54:15', '2021-09-14 20:54:15'),
(9, 'sawah baru', 'Tamansuruh, Glagah, Banyuwangi', 1, 'inpari 13', 'aktif', 4, '2021-09-14 23:26:45', '2021-09-14 23:27:05'),
(10, 'sawah tamansuruh', 'tamansuruh', 1, 'inpari 3', 'aktif', 7, '2021-10-04 01:20:18', '2021-10-04 01:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(53, '2014_10_12_000000_create_users_table', 1),
(54, '2014_10_12_100000_create_password_resets_table', 1),
(55, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(56, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(57, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(58, '2016_06_01_000004_create_oauth_clients_table', 1),
(59, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(60, '2019_08_19_000000_create_failed_jobs_table', 1),
(61, '2021_06_04_142758_create_pelanggans_table', 1),
(62, '2021_06_06_160853_create_lahan_pelanggans_table', 1),
(63, '2021_08_04_062845_create_varietas_padis_table', 2),
(64, '2021_08_04_063129_create_stok_padis_table', 3),
(65, '2021_08_07_135858_create_jadwal_monitoring', 4),
(66, '2021_08_05_024445_create_pesanans_table', 5),
(67, '2021_08_07_075532_create_lahan_pelanggans_table', 6),
(68, '2021_08_07_135858_create_jadwal_monitorings', 6),
(69, '2021_08_19_132626_create_pemeriksaan_awals_table', 6),
(70, '2021_08_19_133601_create_pemeriksaan_lanjuts_table', 6),
(71, '2021_09_09_143422_create_pemeriksaan_awals_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('02c74fc7cf3c93532da3f735befa557108e842916a248e56f8a85c29e49c52e6a29f8c47bcadb1d8', 5, 1, 'AccessToken', '[]', 0, '2021-09-14 05:37:28', '2021-09-14 05:37:28', '2022-09-14 12:37:28'),
('04bf6509c6664043424f7161a3e4429b25e1e76230f9ec98bd4c5d78df15d03808633f22ce3db5b7', 2, 1, 'AccessToken', '[]', 0, '2021-09-09 01:13:58', '2021-09-09 01:13:58', '2022-09-09 08:13:58'),
('18d4a7e9f3bc37034a041308b31ece25bd4d9f7ecfee029e833cefb8681f4f122816f5b441632e90', 27, 1, 'AccessToken', '[]', 0, '2021-09-14 21:11:23', '2021-09-14 21:11:23', '2022-09-15 04:11:23'),
('2067a431445f8578f83c146f7cb7b32b8cd44135c294480870d728925e431cca0ce41722251fa3af', 5, 1, 'AccessToken', '[]', 0, '2021-09-14 04:42:06', '2021-09-14 04:42:06', '2022-09-14 11:42:06'),
('244f0b052368a42f0d4b70da1520d2f81cd848590f4911468424ece66a75d8c9944c7785f8ca833f', 22, 1, 'AccessToken', '[]', 0, '2021-09-13 07:25:27', '2021-09-13 07:25:27', '2022-09-13 14:25:27'),
('2cadd3d076efee3f41775643f9ba28944ab1f978b3ea96e196f8ad59bc558a3973647c796c6480d9', 27, 1, 'AccessToken', '[]', 0, '2021-09-14 23:46:25', '2021-09-14 23:46:25', '2022-09-15 06:46:25'),
('34659f596d0b5113039b5d1d7b8b9588984b3cb712661e85aa8e2779bf4821ba16cbd21e13f0da6e', 2, 1, 'AccessToken', '[]', 0, '2021-09-09 01:14:26', '2021-09-09 01:14:26', '2022-09-09 08:14:26'),
('49cbe9583aeb473908d42feccea30ac88d5702577c3251e8b9d3bf327c6d44c55f1d74d4c7a9dadb', 5, 1, 'AccessToken', '[]', 0, '2021-10-04 00:59:24', '2021-10-04 00:59:24', '2022-10-04 07:59:24'),
('6170152855e04c4129e8efa3b0092a4f8b9991b31c9562b6ea65b66916556dc3353087662e37a320', 2, 1, 'AccessToken', '[]', 0, '2021-09-09 01:26:04', '2021-09-09 01:26:04', '2022-09-09 08:26:04'),
('668ba4c5b9fd04f87afe965dd3f44f6413e07dda4246b07b5411a2ea3313802e628d03112e8737e2', 7, 1, 'AccessToken', '[]', 0, '2021-10-04 01:01:42', '2021-10-04 01:01:42', '2022-10-04 08:01:42'),
('844cf6597c411d4d80f72645b1b81be23a3a49542c95d7a96346465742af5aac784055ebf92a15b8', 5, 1, 'AccessToken', '[]', 0, '2021-09-14 06:55:50', '2021-09-14 06:55:50', '2022-09-14 13:55:50'),
('9020fe117d1202a0e0ea7f07834a582483862dd6850ef32a6fd6dd6a6dcc7812a2e87792a6f9fce6', 4, 1, 'AccessToken', '[]', 0, '2021-09-14 23:25:12', '2021-09-14 23:25:12', '2022-09-15 06:25:12'),
('93e1b22e73154afd10a6a89f169dd5fed29d2b1ea3a67b1d411299e4b509043e2c66f91ea462cc23', 13, 1, 'AccessToken', '[]', 0, '2021-09-14 07:01:03', '2021-09-14 07:01:03', '2022-09-14 14:01:03'),
('95cd91d9dfc2bd28b99349852f506fcaee2e5d99cb0ea350c4de5f37bf11622a1c8ae92099ccd734', 22, 1, 'AccessToken', '[]', 0, '2021-09-14 04:48:32', '2021-09-14 04:48:32', '2022-09-14 11:48:32'),
('a3285761c517199640a9840ad88757d14dc54304d9bd9d2bd4e790c234c96109cc90a63300068b17', 22, 1, 'AccessToken', '[]', 0, '2021-09-14 00:50:26', '2021-09-14 00:50:26', '2022-09-14 07:50:26'),
('aa10a43903608ed620f82ab86d9a0d88fa7025a624148f98029968f4611de66a12546fcf30228225', 4, 1, 'AccessToken', '[]', 0, '2021-09-13 07:11:30', '2021-09-13 07:11:30', '2022-09-13 14:11:30'),
('b18168a57d9e8b2963db77d3a2c6dbc4df429b26fddb631c1952179d228061f5d7eb9b763ac1aafb', 5, 1, 'AccessToken', '[]', 0, '2021-09-14 06:54:07', '2021-09-14 06:54:07', '2022-09-14 13:54:07'),
('c7ce9fe390fea2e24f97204a14256f53427fd6596139935d3379abd5820c3356438442d7be0f5ad0', 7, 1, 'AccessToken', '[]', 0, '2021-10-04 01:15:43', '2021-10-04 01:15:43', '2022-10-04 08:15:43'),
('ceac7bc91acc5b035f5880aff469f0204fb14c733ed3a2bd240c89739745e9e2abb310db921e2d53', 3, 1, 'AccessToken', '[]', 0, '2021-09-09 01:49:12', '2021-09-09 01:49:12', '2022-09-09 08:49:12'),
('cfcec59e559d8310c04e3641c59e527d76d228d2034834b4fa7356a69760e539dc8ff2cd7ec6e311', 4, 1, 'AccessToken', '[]', 0, '2021-09-14 20:27:18', '2021-09-14 20:27:18', '2022-09-15 03:27:18'),
('d40719d0e9be9506551d21a48d7b8a2f5ee7532a3634a0bccd7b579fc23daaa721158d0d742dc092', 27, 1, 'AccessToken', '[]', 0, '2021-09-14 23:29:50', '2021-09-14 23:29:50', '2022-09-15 06:29:50'),
('d8479bda2100ec4d0bb0a0705b42f361f8b64744a6ccdc349db13183a1ef50b62f700149c1ca657a', 5, 1, 'AccessToken', '[]', 0, '2021-09-14 07:56:15', '2021-09-14 07:56:15', '2022-09-14 14:56:15'),
('dd526dcb3760f139126a09730fa64fdddd40310c03843daf23d1220e39ba8777a57b65ad0079d31c', 4, 1, 'AccessToken', '[]', 0, '2021-09-13 22:30:43', '2021-09-13 22:30:43', '2022-09-14 05:30:43'),
('e71f631fa1303a68cef02c3f6cc5efbb9c5230fac329acf1abd4f9dff2b0a06bfca1d138c66de3f5', 4, 1, 'AccessToken', '[]', 0, '2021-09-13 07:33:31', '2021-09-13 07:33:31', '2022-09-13 14:33:31'),
('f80398263916acb84e9eaf7498977c1575bae5e1bfea2037f02a1943f591a15c1ebf4642a37497b3', 4, 1, 'AccessToken', '[]', 0, '2021-09-14 22:02:39', '2021-09-14 22:02:39', '2022-09-15 05:02:39'),
('f9c8f4b38802177db9da8fc047d240544234aa36196e9fcd3b7e9fdd62f1e7bbe166c42d2cc06264', 5, 1, 'AccessToken', '[]', 0, '2021-09-14 06:54:47', '2021-09-14 06:54:47', '2022-09-14 13:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', '2T2JHdfmZlxgX8WRCmnKbUyvb80YLdpmsshDrDhp', NULL, 'http://localhost', 1, 0, 0, '2021-09-09 01:13:51', '2021-09-09 01:13:51'),
(2, NULL, 'Laravel Password Grant Client', 'uxxK7uExPVRQu65wKeeNaC0NmuUzGZJwNjAcXo2d', 'users', 'http://localhost', 0, 1, 0, '2021-09-09 01:13:51', '2021-09-09 01:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-09-09 01:13:51', '2021-09-09 01:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fcm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `name`, `nik`, `nama_lengkap`, `alamat`, `telepon`, `jenis_kelamin`, `email_verified_at`, `password`, `fcm`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wahyu Safaat', '3510176009000001', 'wahyu12', 'Tamansuruh', '085455345123', 'laki-laki', NULL, '12345', 'f818_4pkSxyPL6E-lq5qLj:APA91bEHGTTa9m_hmxgc__lx5ujAw6AmPW-dFIh6vJ_qLnLVS0bvr-lpkkb5dk0BbyD8zN945AYpQIG6mVCqQMWpfoxdZ5yZX9MlEdeYM-gp7xQ_P3dhj2HZUvGMiv6nswE8M3AqqEh8', NULL, NULL, '2021-10-04 00:57:41'),
(4, 'Iqbal Baihaqi', '3510173009000001', 'iqbal123', 'Banyuwangi', '085464894646', 'laki-laki', NULL, '$2y$10$UAXUyQtWJPDi4fiOTji4XekYXUOJWh7xhCoXfq1kpr.Xl1iQSKF8W', 'f818_4pkSxyPL6E-lq5qLj:APA91bEHGTTa9m_hmxgc__lx5ujAw6AmPW-dFIh6vJ_qLnLVS0bvr-lpkkb5dk0BbyD8zN945AYpQIG6mVCqQMWpfoxdZ5yZX9MlEdeYM-gp7xQ_P3dhj2HZUvGMiv6nswE8M3AqqEh8', NULL, '2021-09-13 07:11:10', '2021-09-13 22:30:41'),
(5, 'Dhikaa', '3510175009000001', 'dhikabahri123', 'Banyuwangi', '082223221221', 'laki-laki', NULL, '$2y$10$yLQuW2pkRIt7P1IfBw2b8OmHVecoSWpVBKWFuauGcEgEs86zuQDFq', 'f818_4pkSxyPL6E-lq5qLj:APA91bEHGTTa9m_hmxgc__lx5ujAw6AmPW-dFIh6vJ_qLnLVS0bvr-lpkkb5dk0BbyD8zN945AYpQIG6mVCqQMWpfoxdZ5yZX9MlEdeYM-gp7xQ_P3dhj2HZUvGMiv6nswE8M3AqqEh8', NULL, '2021-09-14 04:41:53', '2021-09-14 04:42:06'),
(6, 'Muhammad Iqbal', '3510150188100111', 'iqbalbaihaqi12', 'Kertosari Banyuwangi', '085166845004', 'laki-laki', NULL, '$2y$10$t3.b4lmu14b0zlTcJD037ujiDJKlCSqYOYsZ9qg6Cp4MpGdSgnPfa', NULL, NULL, '2021-09-14 23:24:38', '2021-09-14 23:24:38'),
(7, 'jamroni', '346949404664949', 'muhammad jamroni', 'Banyuwangi', '085212369845', 'laki-laki', NULL, '$2y$10$kUH7sY4u6JccDI8a90XOIOOtsGGLBCz3TX0ialvEfueVp2rY8BI/6', NULL, NULL, '2021-10-04 01:01:32', '2021-10-04 01:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan_awals`
--

CREATE TABLE `pemeriksaan_awals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `pesanan_id` bigint(20) UNSIGNED NOT NULL,
  `letak_areal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'salah',
  `luas_areal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'salah',
  `isolasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'salah',
  `sejarah_lapang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'salah',
  `asal_jumlah_benih` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'salah',
  `catatan` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tanam Benih Sesuai Rencana',
  `kesimpulan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemeriksaan_awals`
--

INSERT INTO `pemeriksaan_awals` (`id`, `users_id`, `pesanan_id`, `letak_areal`, `luas_areal`, `isolasi`, `sejarah_lapang`, `asal_jumlah_benih`, `catatan`, `kesimpulan`, `validasi`, `created_at`, `updated_at`) VALUES
(1, 11, 4, 'salah', 'salah', 'salah', 'salah', 'salah', '\'Tanam Benih Sesuai Rencana\'', 'Test', NULL, NULL, NULL),
(2, 22, 6, 'benar', 'benar', 'benar', 'benar', 'benar', 'tidak ass', 'oke', NULL, '2021-09-13 07:26:09', '2021-09-13 07:26:09'),
(3, 13, 13, 'benar', 'benar', 'benar', 'benar', 'benar', 'tidak ada catatan', 'tanam benih sesuai rencana', NULL, '2021-09-14 07:04:25', '2021-09-14 07:04:25'),
(4, 27, 14, 'benar', 'benar', 'benar', 'benar', 'benar', 'tidakal ada catatan', 'sebar benih sesuai rencana', NULL, '2021-09-14 21:27:36', '2021-09-14 21:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan_lanjuts`
--

CREATE TABLE `pemeriksaan_lanjuts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pemeriksaan_awal_id` bigint(20) UNSIGNED NOT NULL,
  `jenis_pemeriksaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isolasi_timur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isolasi_barat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isolasi_selatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isolasi_utara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` time DEFAULT NULL,
  `sifat_penanaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serangan_hama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perkiraan_tanggal_panen` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perkiraan_produksi` decimal(8,2) DEFAULT NULL,
  `jumlah_contoh_pemeriksaan` decimal(8,2) NOT NULL,
  `inbrida_cvl1` int(11) DEFAULT NULL,
  `inbrida_cvl2` int(11) DEFAULT NULL,
  `inbrida_cvl3` int(11) DEFAULT NULL,
  `inbrida_cvl4` int(11) DEFAULT NULL,
  `status_pemeriksaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_monitoring` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemeriksaan_lanjuts`
--

INSERT INTO `pemeriksaan_lanjuts` (`id`, `pemeriksaan_awal_id`, `jenis_pemeriksaan`, `isolasi_timur`, `isolasi_barat`, `isolasi_selatan`, `isolasi_utara`, `barier`, `waktu`, `sifat_penanaman`, `serangan_hama`, `perkiraan_tanggal_panen`, `perkiraan_produksi`, `jumlah_contoh_pemeriksaan`, `inbrida_cvl1`, `inbrida_cvl2`, `inbrida_cvl3`, `inbrida_cvl4`, `status_pemeriksaan`, `foto_monitoring`, `created_at`, `updated_at`) VALUES
(1, 1, 'Vegetatif', 'dasda', 'dsada', 'dsada', 'dsadaa', 'ffsfs', '50:25:14', 'opo', 'dsada', '2021-09-15', '3.11', '12.00', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(2, 2, 'Vegetatif', 'cukup', 'cukup', 'cukup', 'cukup', '2', NULL, 'sesuai', 'ada terkendali', NULL, NULL, '100.00', NULL, NULL, NULL, NULL, 'tidak lulus', '09202113_Vegetatif_1631543516265_croppedImg.jpg', '2021-09-13 07:32:01', '2021-09-14 02:05:12'),
(3, 2, 'Berbunga', 'cukup', 'kurang', 'cukup', 'kurang', '2', NULL, 'tidak sesuai', 'ada tidak terkendali', NULL, NULL, '100.00', NULL, NULL, NULL, NULL, 'tidak lulus', '09202113_Berbunga_1631543559634_croppedImg.jpg', '2021-09-13 07:32:51', '2021-09-14 02:17:15'),
(4, 2, 'Masak', 'cukup', 'cukup', 'kurang', 'cukup', '1', NULL, 'tidak sesuai', 'ada tidak terkendali', NULL, NULL, '100.00', NULL, NULL, NULL, NULL, 'tidak lulus', '09202113_Masak_1631543592144_croppedImg.jpg', '2021-09-13 07:33:16', '2021-09-14 02:23:41'),
(5, 3, 'Vegetatif', 'cukup', 'cukup', 'cukup', 'cukup', '2', NULL, 'sesuai', 'ada terkendali', NULL, NULL, '100.00', NULL, NULL, NULL, NULL, 'lulus', '09202114_Vegetatif_1631628354973_croppedImg.jpg', '2021-09-14 07:06:04', '2021-09-14 08:08:11'),
(6, 3, 'Berbunga', 'cukup', 'cukup', 'cukup', 'cukup', '2', NULL, 'sesuai', 'ada terkendali', NULL, NULL, '100.00', NULL, NULL, NULL, NULL, NULL, '09202114_Berbunga_1631628397767_croppedImg.jpg', '2021-09-14 07:06:51', '2021-09-14 07:06:51'),
(7, 4, 'Vegetatif', 'cukup', 'cukup', 'cukup', 'cukup', '1', '12:00:00', 'sesuai', 'ada terkendali', '07/10/2001', '1000.00', '100.00', 1, NULL, NULL, NULL, 'lulus', '09202115_Vegetatif_1631682104902_croppedImg.jpg', '2021-09-14 22:01:53', '2021-09-14 23:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_induk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sebar` date NOT NULL,
  `tgl_tanam` date NOT NULL,
  `total_benih` int(11) NOT NULL,
  `total_harga_benih` int(11) NOT NULL,
  `total_harga_jasa` int(11) NOT NULL,
  `total_biaya` int(11) NOT NULL,
  `lahan_pelanggan_id` bigint(20) UNSIGNED NOT NULL,
  `stok_padi_id` bigint(20) UNSIGNED NOT NULL,
  `status_pesanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `nomor_induk`, `tgl_sebar`, `tgl_tanam`, `total_benih`, `total_harga_benih`, `total_harga_jasa`, `total_biaya`, `lahan_pelanggan_id`, `stok_padi_id`, `status_pesanan`, `created_at`, `updated_at`) VALUES
(14, 'psn/123/101', '2021-09-23', '2021-10-21', 60, 2100000, 1400000, 3500000, 3, 5, 'Fase Vegetatif', '2021-09-14 21:08:27', '2021-09-14 21:08:49'),
(15, 'psn/123/124', '2021-09-18', '2021-10-21', 30, 900000, 700000, 1600000, 9, 3, 'Lunas', '2021-09-14 23:27:47', '2021-09-14 23:37:13'),
(16, NULL, '2021-10-04', '2021-10-04', 30, 900000, 700000, 1600000, 10, 3, 'Menunggu Pembayaran', '2021-10-04 01:20:54', '2021-10-04 01:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `stok_padis`
--

CREATE TABLE `stok_padis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_varietas_padi` bigint(20) UNSIGNED NOT NULL,
  `tanggal_beli_benih` date NOT NULL,
  `harga_beli_sak` int(11) NOT NULL,
  `harga_jual_sak` int(11) NOT NULL,
  `harga_jual_kg` int(11) NOT NULL,
  `perkiraan_laba` int(11) DEFAULT NULL,
  `jumlah_stok` double(5,2) NOT NULL,
  `tanggal_kadaluarsa` date NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_benih` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_benih` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stok_padis`
--

INSERT INTO `stok_padis` (`id`, `id_varietas_padi`, `tanggal_beli_benih`, `harga_beli_sak`, `harga_jual_sak`, `harga_jual_kg`, `perkiraan_laba`, `jumlah_stok`, `tanggal_kadaluarsa`, `label`, `kelas_benih`, `supplier_benih`, `created_at`, `updated_at`) VALUES
(3, 16, '2021-09-24', 150000, 200000, 30000, NULL, 40.00, '2022-02-09', '-', 'Kelas Dasar', 'UD Mitra Jaya Banyuwangi', '2021-09-09 08:38:18', '2021-10-04 01:20:54'),
(4, 17, '2021-09-15', 150000, 200000, 30000, NULL, 150.00, '2022-08-17', '-', 'Kelas Dasar', 'UD Mitra Jaya Banyuwangi', '2021-09-14 20:56:03', '2021-09-14 20:56:03'),
(5, 18, '2021-09-16', 150000, 250000, 35000, NULL, 140.00, '2022-09-28', '-', 'Kelas Dasar', 'UD Mitra Jaya Banyuwangi', '2021-09-14 20:57:43', '2021-09-14 21:08:27'),
(6, 19, '2021-09-15', 165000, 250000, 35000, NULL, 200.00, '2022-11-22', '-', 'Kelas Dasar', 'UD Mitra Jaya Banyuwangi', '2021-09-14 20:58:38', '2021-09-14 20:58:38'),
(7, 20, '2021-09-15', 150000, 200000, 30000, NULL, 200.00, '2022-06-14', '-', 'Kelas Dasar', 'UD Mitra Jaya Banyuwangi', '2021-09-14 20:59:20', '2021-09-14 20:59:20'),
(8, 21, '2021-09-16', 100, 150, 35000, NULL, 200.00, '2021-10-15', '-', 'Kelas Dasar', 'UD Mitra Jaya Banyuwangi', '2021-09-14 23:36:29', '2021-09-14 23:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','pimpinan','petugas lapang') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nik`, `nama_lengkap`, `alamat`, `telepon`, `jenis_kelamin`, `role`, `password`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'lailaliany', '3510066604000001', 'Laila Liany', 'Cluring', '085258834245', 'Perempuan', 'admin', '$2y$10$8yqbng2O68CQfwS9nE9gieW0Dhy8eoHvz3JkPp6GAzwUyskY1Mntu', '', NULL, '2021-06-30 01:46:22', '2021-07-07 03:10:07'),
(12, 'dikaher123', '3510066705000001', 'Dika Hermawan', 'Banyuwangi', '087656740009', 'Laki-Laki', 'admin', '$2y$10$Em3S9t4xnh7BpE9KVGX67.A0BeLTBTtKEKl18cFxSA6hEZFZ1o9uq', '', NULL, '2021-06-30 01:47:57', '2021-06-30 01:47:57'),
(13, 'husnul12', '3510260009000005', 'Husnul Alfaini', 'Banyuwangi', '089767809009', 'Laki-Laki', 'admin', '$2y$10$43jRHVLepqnGfZziu32FSOJ2bWU4.YU2ZjBLHkVpMIzKJ7257in.C', '', NULL, '2021-06-30 02:53:23', '2021-06-30 02:53:23'),
(20, 'ade12', '3510181709000008', 'Ade Lestiou', 'Purwoharjo', '085678908454', 'Laki-Laki', 'pimpinan', '$2y$10$CnmwZY0c44xP8v8yidMa1uGAeerqWT8R2db.7so1HylSw9ML.MEpy', '', NULL, '2021-06-30 03:01:08', '2021-06-30 03:01:08'),
(26, 'nadia123', '3510181709000010', 'Nadiatus Sholeha', 'Badean', '085258834246', 'Perempuan', 'admin', '$2y$10$GZBqBMaN9tdxAdHo3kysfugrf/uje5QR8Mzlz4vVjUva.pXCoBQyK', '1.jpg', NULL, '2021-09-14 20:26:09', '2021-09-14 20:26:09'),
(27, 'aat123', '3510181709000011', 'Wahyu Safaat', 'Banyuwangi', '085258834247', 'Laki-Laki', 'petugas lapang', '$2y$10$E1BqhZ6/tywpUX1HgITGsO1XLIrWg0KGw6ewOb/AHPviHtDI7yM7q', 'builder.png', NULL, '2021-09-14 20:27:58', '2021-09-14 20:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `varietas_padis`
--

CREATE TABLE `varietas_padis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_varietas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_varietas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_varietas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `varietas_padis`
--

INSERT INTO `varietas_padis` (`id`, `nama_varietas`, `deskripsi_varietas`, `foto_varietas`, `created_at`, `updated_at`) VALUES
(16, 'inpari 12', 'Cocok ditanam di ekosistem sawah tadah hujan dataran rendah sampai ketinggian 600 dpl. Tahan terhadap penyakit blas ras 033, Agak tahan terhadap penyakit blas ras 133 dan 073, Agak rentan terhadap penyakit Hawar Daun Bakteri strain III, IV, dan VII, Rentan terhadap penyakit tungro', 'inpari12.jpg', '2021-09-06 02:43:49', '2021-09-14 20:46:31'),
(17, 'Ciherang', 'Tahan terhadap wereng coklat biotipe 2 dan agak tahan biotipe 3. Tahan terhadap hawar daun bakteri strain III dan IV. Baik ditanam di lahan sawah irigasi dataran rendah sampai 5000 m dpl.', 'ciherang.jpg', '2021-09-14 20:47:58', '2021-09-14 20:47:58'),
(18, 'Mekongga', 'varietas padi mekongga dengam potensi hasil yang lebih tinggi dari varietas aslinya, yaitu berkisar 9 ton/ha, dan di namakan super karena masa tanam yang lebih pendek 15 hari.', 'mekongga.jpg', '2021-09-14 20:49:24', '2021-09-14 20:49:24'),
(19, 'Situ Bagendit', 'Situ Bagendit dapat tumbuh di lahan sawah maupun di lahan kering dengan tinggi sekitar 99 -105 cm. Batang dan daunnya berwarna hijau. Jumlah anakan yang dihasilkan oleh varietas Situ Bagendit bisa mencapai 12-13 batang per rumpun. Gabahnya dapat dilihat berbentuk panjang dan ramping berwarna kuning bersih.', 'situbagendit.jpg', '2021-09-14 20:51:37', '2021-09-14 20:51:37'),
(20, 'Apu Buru', 'ketahanan terhadap wereng cokelat biotipe 2 dan rentan biotipe 3, selain itu varietas   Way Apo Buru mempunyai ketahanan terhadap penyakit Hawar Daun Bakteri strain III dan IV. Umur tanaman 115 -120 hari dan memilki potensi produksi yang cukup tinggi.', 'apuburu.jpg', '2021-09-14 20:54:23', '2021-09-14 20:54:23'),
(21, 'Inpari 32', 'Cocok ditanam di ekosistem sawah tadah hujan dataran rendah sampai ketinggian 600 dpl. Tahan terhadap penyakit blas ras 033, Agak tahan terhadap penyakit blas ras 133 dan 073, Agak rentan terhadap penyakit Hawar Daun Bakteri strain III, IV, dan VII, Rentan terhadap penyakit tungro', 'ciherang.jpg', '2021-09-14 23:35:47', '2021-09-14 23:35:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_monitorings`
--
ALTER TABLE `jadwal_monitorings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jadwal_monitorings_nomor_induk_pesanan_unique` (`nomor_induk_pesanan`);

--
-- Indexes for table `lahan_pelanggans`
--
ALTER TABLE `lahan_pelanggans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemeriksaan_awals`
--
ALTER TABLE `pemeriksaan_awals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemeriksaan_lanjuts`
--
ALTER TABLE `pemeriksaan_lanjuts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pesanans_nomor_induk_unique` (`nomor_induk`);

--
-- Indexes for table `stok_padis`
--
ALTER TABLE `stok_padis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stok_padis_id_varietas_padi_foreign` (`id_varietas_padi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varietas_padis`
--
ALTER TABLE `varietas_padis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_monitorings`
--
ALTER TABLE `jadwal_monitorings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lahan_pelanggans`
--
ALTER TABLE `lahan_pelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemeriksaan_awals`
--
ALTER TABLE `pemeriksaan_awals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemeriksaan_lanjuts`
--
ALTER TABLE `pemeriksaan_lanjuts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `stok_padis`
--
ALTER TABLE `stok_padis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `varietas_padis`
--
ALTER TABLE `varietas_padis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stok_padis`
--
ALTER TABLE `stok_padis`
  ADD CONSTRAINT `stok_padis_id_varietas_padi_foreign` FOREIGN KEY (`id_varietas_padi`) REFERENCES `varietas_padis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
