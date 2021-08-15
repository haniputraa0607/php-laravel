-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2021 at 05:54 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.24-(to be removed in future macOS)

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_transisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` bigint UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `company_name`, `company_email`, `company_website`, `company_logo`, `created_at`, `updated_at`) VALUES
(1, 'PT Kereta Api Indonesia', 'dokumen@kai.id', 'www.kai.id', 'kai_1629004681.png', '2021-08-14 22:18:01', '2021-08-14 22:18:01'),
(2, 'PT Telkom Indonesia Tbk', 'corporate_comm@telkom.co.id', 'www.telkom.co.id', 'telkom_1629004718.png', '2021-08-14 22:18:38', '2021-08-14 22:18:38'),
(3, 'Bakrie Group', 'bnbr.corcomm@bakrie.co.id', 'www.bakrie-brothers.com', 'bakrie_1629004747.png', '2021-08-14 22:19:07', '2021-08-14 22:19:07'),
(4, 'PT Bank Mandiri ', 'mandiricare@bankmandiri.co.id', 'www.bankmandiri.co.id', 'mandiri_1629004787.png', '2021-08-14 22:19:47', '2021-08-14 22:19:47'),
(5, 'PT. Panasonic Gobel Energy Indonesia', 'pecgi.recruitment@id.panasonic.com', 'www.panasonic.com', 'panasonic_1629004818.png', '2021-08-14 22:20:18', '2021-08-14 22:20:18'),
(6, 'Biznet Networks', 'sales@biznetnetworks.com', 'www.biznetnetworks.com', 'biznet_1629004841.png', '2021-08-14 22:20:41', '2021-08-14 22:20:41'),
(7, 'PT. Pos Indonesia', 'halopos@posindonesia.co.id', 'halopos@posindonesia.co.id', 'pos_1629004868.png', '2021-08-14 22:21:08', '2021-08-14 22:21:08'),
(8, 'PT Garuda Indonesia Tbk', 'customer@garuda-indonesia.com', 'www.garuda-indonesia.com', 'garuda_1629004896.png', '2021-08-14 22:21:36', '2021-08-14 22:21:36'),
(9, 'PT Perusahaan Perdagangan Indonesia', 'ppi.info@ptppi.co.id', 'www.ptppi.co.id', 'PPi_1629004920.png', '2021-08-14 22:22:00', '2021-08-14 22:22:00'),
(10, 'PT Frisian Flag Indonesia', 'layanan.peduli@frieslandcampina.com', 'www.frisianflag.com', 'frisianflag_1629004945.png', '2021-08-14 22:22:25', '2021-08-14 22:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` bigint UNSIGNED NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `employee_name`, `employee_email`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'Mahmud Prayoga S.Pd', 'pratiwi.kiandra@example.com', '2', '2021-08-14 22:34:00', '2021-08-14 22:34:00'),
(2, 'Praba Sihotang', 'empluk.suartini@example.net', '2', '2021-08-14 22:34:00', '2021-08-14 22:34:00'),
(3, 'Amalia Eka Winarsih', 'kpranowo@example.org', '4', '2021-08-14 22:34:00', '2021-08-14 22:34:00'),
(4, 'Cornelia Kuswandari', 'galih73@example.org', '5', '2021-08-14 22:34:00', '2021-08-14 22:34:00'),
(5, 'Taufik Nababan', 'ira.ardianto@example.com', '8', '2021-08-14 22:34:00', '2021-08-14 22:34:00'),
(6, 'Galur Kuswoyo', 'warji99@example.net', '10', '2021-08-14 22:34:00', '2021-08-14 22:34:00'),
(7, 'Cawisono Nashiruddin', 'oktaviani.maryanto@example.com', '3', '2021-08-14 22:34:00', '2021-08-14 22:34:00'),
(8, 'Galang Putra', 'garda55@example.com', '9', '2021-08-14 22:34:00', '2021-08-14 22:34:00'),
(9, 'Hartana Damanik', 'cprasetyo@example.net', '6', '2021-08-14 22:34:00', '2021-08-14 22:34:00'),
(10, 'Galar Gunarto S.Gz', 'xpudjiastuti@example.com', '8', '2021-08-14 22:34:00', '2021-08-14 22:34:00'),
(11, 'Daliman Tamba M.Pd', 'banggraini@example.com', '5', '2021-08-14 22:34:19', '2021-08-14 22:34:19'),
(12, 'Caturangga Hakim', 'vmandasari@example.org', '2', '2021-08-14 22:34:19', '2021-08-14 22:34:19'),
(13, 'Nyana Gading Pratama S.Ked', 'gunawan.opung@example.com', '3', '2021-08-14 22:34:19', '2021-08-14 22:34:19'),
(14, 'Maimunah Lestari', 'pudjiastuti.suci@example.com', '10', '2021-08-14 22:34:19', '2021-08-14 22:34:19'),
(15, 'Dalima Tania Purwanti S.Psi', 'mila.purwanti@example.org', '6', '2021-08-14 22:34:19', '2021-08-14 22:34:19'),
(16, 'Lantar Sihombing S.Psi', 'maryadi.karman@example.net', '1', '2021-08-14 22:34:19', '2021-08-14 22:34:19'),
(17, 'Laswi Mumpuni Mansur M.Farm', 'yolanda.galar@example.com', '4', '2021-08-14 22:34:19', '2021-08-14 22:34:19'),
(18, 'Fathonah Laksita', 'natsir.cici@example.org', '1', '2021-08-14 22:34:19', '2021-08-14 22:34:19'),
(19, 'Galur Dadap Dabukke', 'elvina.sirait@example.org', '4', '2021-08-14 22:34:19', '2021-08-14 22:34:19'),
(20, 'Elvina Aurora Rahayu S.Farm', 'jmayasari@example.org', '9', '2021-08-14 22:34:19', '2021-08-14 22:34:19'),
(21, 'Hanif Murtadha', 'hanif@gmail.com', '9', '2021-08-14 22:44:19', '2021-08-14 22:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_15_045239_create_companies_table', 2),
(5, '2021_08_15_045315_create_employees_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@transisi.id', NULL, '$2y$10$CgrBNalyhWNBbdLcGju.FO8F.cPrEkGIHFfsoRvutQmPoMkJB9MHa', NULL, '2021-08-14 21:43:13', '2021-08-14 21:43:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`),
  ADD UNIQUE KEY `companies_company_email_unique` (`company_email`),
  ADD UNIQUE KEY `companies_company_website_unique` (`company_website`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `employees_employee_email_unique` (`employee_email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
