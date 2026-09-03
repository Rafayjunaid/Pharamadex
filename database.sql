-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2026 at 05:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmadex`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `damaged_medicine`
--

CREATE TABLE `damaged_medicine` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Medicine_Name` varchar(255) NOT NULL,
  `Batch_Number` int(11) NOT NULL,
  `Quantity_Damaged` int(11) NOT NULL,
  `Reason_for_Damage` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `Type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `damaged_medicine`
--

INSERT INTO `damaged_medicine` (`id`, `Medicine_Name`, `Batch_Number`, `Quantity_Damaged`, `Reason_for_Damage`, `status`, `Type`, `created_at`, `updated_at`) VALUES
(1, 'Panadol', 1001, 5, 'Damaged packaging', 'pending', 'Tablet', '2026-08-30 11:13:45', '2026-08-30 11:13:45'),
(2, 'Brufen', 1002, 3, 'Broken tablets', 'pending', 'Tablet', '2026-08-30 11:13:45', '2026-08-30 11:13:45'),
(3, 'Augmentin', 1003, 2, 'Bottle leakage', 'pending', 'Syrup', '2026-08-30 11:13:45', '2026-08-30 11:13:45'),
(4, 'Ventolin', 1004, 1, 'Damaged inhaler', 'pending', 'Inhaler', '2026-08-30 11:13:45', '2026-08-30 11:13:45'),
(5, 'Polyfax', 1005, 4, 'Tube damaged', 'pending', 'Cream', '2026-08-30 11:13:45', '2026-08-30 11:13:45'),
(6, 'Amoxil', 1006, 6, 'Damaged capsules', 'pending', 'Capsule', '2026-08-30 11:13:45', '2026-08-30 11:13:45'),
(7, 'Ceftriaxone', 1007, 2, 'Broken vial', 'pending', 'Injection', '2026-08-30 11:13:45', '2026-08-30 11:13:45'),
(8, 'Systane', 1008, 3, 'Bottle leakage', 'pending', 'Drop', '2026-08-30 11:13:45', '2026-08-30 11:13:45'),
(9, 'Betnovate', 1009, 2, 'Expired packaging', 'pending', 'Cream', '2026-08-30 11:13:45', '2026-08-30 11:13:45'),
(10, 'Disprin', 1010, 8, 'Damaged packaging', 'pending', 'Tablet', '2026-08-30 11:13:45', '2026-08-30 11:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `expired_medicines`
--

CREATE TABLE `expired_medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Medicine_Name` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Expiry_Date` date NOT NULL,
  `Batch_Number` int(11) DEFAULT NULL,
  `Date_Discovered` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `Notes` text NOT NULL,
  `Type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expired_medicines`
--

INSERT INTO `expired_medicines` (`id`, `Medicine_Name`, `Quantity`, `Expiry_Date`, `Batch_Number`, `Date_Discovered`, `status`, `Notes`, `Type`, `created_at`, `updated_at`) VALUES
(1, 'Panadol', 10, '2026-01-15', 1001, '0000-00-00', 'pending', '', 'Tablet', '2026-08-30 11:14:22', '2026-08-30 11:14:22'),
(2, 'Brufen', 6, '2026-02-20', 1002, '0000-00-00', 'pending', '', 'Tablet', '2026-08-30 11:14:22', '2026-08-30 11:14:22'),
(3, 'Augmentin', 4, '2025-12-10', 1003, '0000-00-00', 'pending', '', 'Syrup', '2026-08-30 11:14:22', '2026-08-30 11:14:22'),
(4, 'Ceftriaxone', 3, '2026-03-05', 1004, '0000-00-00', 'pending', '', 'Injection', '2026-08-30 11:14:22', '2026-08-30 11:14:22'),
(5, 'Systane', 5, '2026-01-28', 1005, '0000-00-00', 'pending', '', 'Drop', '2026-08-30 11:14:22', '2026-08-30 11:14:22'),
(6, 'Polyfax', 7, '2025-11-18', 1006, '0000-00-00', 'pending', '', 'Cream', '2026-08-30 11:14:22', '2026-08-30 11:14:22'),
(7, 'Amoxil', 12, '2026-02-08', 1007, '0000-00-00', 'pending', '', 'Capsule', '2026-08-30 11:14:22', '2026-08-30 11:14:22'),
(8, 'Ventolin', 2, '2025-10-25', 1008, '0000-00-00', 'pending', '', 'Inhaler', '2026-08-30 11:14:22', '2026-08-30 11:14:22'),
(9, 'Betnovate', 5, '2026-03-12', 1009, '0000-00-00', 'pending', '', 'Cream', '2026-08-30 11:14:22', '2026-08-30 11:14:22'),
(10, 'Disprin', 15, '2025-12-30', 1010, '0000-00-00', 'pending', '', 'Tablet', '2026-08-30 11:14:22', '2026-08-30 11:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Medicine_Name` varchar(255) NOT NULL,
  `Batch_Number` int(11) DEFAULT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 0,
  `Expiry_Date` date DEFAULT NULL,
  `Type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `Medicine_Name`, `Batch_Number`, `Quantity`, `Expiry_Date`, `Type`, `created_at`, `updated_at`) VALUES
(1, 'Panadol', 1001, 118, '2027-01-15', 'Tablet', '2026-08-30 11:32:03', '2026-08-30 06:32:08'),
(2, 'Brufen', 1002, 85, '2026-12-20', 'Tablet', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(3, 'Augmentin', 1003, 48, '2026-10-10', 'Syrup', '2026-08-30 11:32:03', '2026-08-30 06:32:50'),
(4, 'Amoxil', 1004, 100, '2027-03-18', 'Capsule', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(5, 'Ceftriaxone', 1005, 40, '2026-11-05', 'Injection', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(6, 'Systane', 1006, 65, '2027-02-28', 'Drop', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(7, 'Polyfax', 1007, 45, '2026-09-25', 'Cream', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(8, 'Betnovate', 1008, 55, '2027-04-12', 'Cream', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(9, 'Ventolin', 1009, 30, '2026-12-05', 'Inhaler', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(10, 'Disprin', 1010, 150, '2027-01-30', 'Tablet', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(11, 'Calpol', 1011, 70, '2026-08-15', 'Syrup', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(12, 'Flagyl', 1012, 90, '2027-05-20', 'Tablet', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(13, 'Ciproxin', 1013, 75, '2027-05-20', 'Tablet', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(14, 'Azomax', 1014, 60, '0000-00-00', '2027-06-15', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(15, 'Brufen Syrup', 1015, 40, '2026-11-30', 'Syrup', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(16, 'Hydrocortisone', 1016, 35, '2027-02-10', 'Cream', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(17, 'Insulin', 1017, 25, '2026-10-25', 'Injection', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(18, 'Diclofenac', 1018, 80, '2027-03-05', 'Tablet', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(19, 'Omeprazole', 1019, 110, '2027-07-18', 'Capsule', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(20, 'Loratadine', 1020, 95, '2027-01-12', 'Tablet', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(21, 'ORS', 1021, 100, '2026-09-10', 'Powder', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(22, 'Dextrose', 1022, 30, '2026-12-28', 'Injection', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(23, 'Salbutamol', 1023, 45, '2027-03-22', 'Inhaler', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(24, 'Moxifloxacin', 1024, 60, '2027-05-14', 'Drop', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(25, 'Clotrimazole', 1025, 50, '2026-11-18', 'Cream', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(26, 'Loperamide', 1026, 70, '2027-02-25', 'Capsule', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(27, 'Cetirizine', 1027, 120, '2027-04-30', 'Tablet', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(28, 'Domperidone', 1028, 85, '2026-10-15', 'Syrup', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(29, 'Ranitidine', 1029, 65, '2026-08-05', 'Tablet', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(30, 'Lidocaine', 1030, 35, '2027-06-20', 'Injection', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(31, 'Fucidin', 1031, 40, '2027-01-25', 'Cream', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(32, 'Nasonex', 1032, 25, '2026-12-15', 'Spray', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(33, 'Otrivin', 1033, 55, '2027-03-30', 'Drop', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(34, 'Calamine', 1034, 45, '2027-05-08', 'Lotion', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(35, 'Gaviscon', 1035, 60, '2026-10-05', 'Syrup', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(36, 'Vitamin C', 1036, 100, '2027-07-10', 'Tablet', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(37, 'Neurobion', 1037, 75, '2027-02-18', 'Injection', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(38, 'Mebendazole', 1038, 90, '2026-11-12', 'Tablet', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(39, 'Albendazole', 1039, 80, '2027-04-05', 'Suspension', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(40, 'Ketoconazole', 1040, 45, '2026-09-30', 'Cream', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(41, 'Paracetamol', 1041, 130, '2027-08-15', 'Tablet', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(42, 'Esomeprazole', 1042, 90, '2027-06-30', 'Capsule', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(43, 'Cefixime', 1043, 55, '2026-12-10', 'Syrup', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(44, 'Metformin', 1044, 150, '2027-05-25', 'Tablet', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(45, 'Aspirin', 1045, 100, '2026-10-20', 'Tablet', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(46, 'Heparin', 1046, 20, '2027-01-08', 'Injection', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(47, 'Mupirocin', 1047, 35, '2027-03-15', 'Ointment', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(48, 'Diclofenac Gel', 1048, 50, '2026-11-25', 'Gel', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(49, 'Chloramphenicol', 1049, 40, '2027-02-05', 'Drop', '2026-08-30 11:32:03', '2026-08-30 11:32:03'),
(50, 'Zinc Oxide', 1050, 60, '2027-07-25', 'Cream', '2026-08-30 11:32:03', '2026-08-30 11:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_return`
--

CREATE TABLE `medicine_return` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Medicine_Name` varchar(255) NOT NULL,
  `Batch_Number` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Customer` varchar(255) NOT NULL,
  `Condition_Of_Medicine` text NOT NULL,
  `Reason_for_Return` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `Type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicine_return`
--

INSERT INTO `medicine_return` (`id`, `Medicine_Name`, `Batch_Number`, `Quantity`, `Customer`, `Condition_Of_Medicine`, `Reason_for_Return`, `status`, `Type`, `created_at`, `updated_at`) VALUES
(1, 'Panadol', 1001, 2, 'Ahmed Khan', 'Good condition', 'Customer returned unused medicine', 'pending', 'Tablet', '2026-08-30 11:16:10', '2026-08-30 11:16:10'),
(2, 'Brufen', 1002, 1, 'Muhammad Ali', 'Good condition', 'Wrong medicine purchased', 'pending', 'Tablet', '2026-08-30 11:16:10', '2026-08-30 11:16:10'),
(3, 'Augmentin', 1003, 2, 'Hassan Ahmed', 'Good condition', 'Customer purchased wrong medicine', 'pending', 'Syrup', '2026-08-30 11:16:10', '2026-08-30 11:16:10'),
(4, 'Ceftriaxone', 1004, 3, 'Usman Raza', 'Damaged packaging', 'Packaging was damaged', 'pending', 'Injection', '2026-08-30 11:16:10', '2026-08-30 11:16:10'),
(5, 'Systane', 1005, 1, 'Bilal Shah', 'Good condition', 'Customer changed requirement', 'pending', 'Drop', '2026-08-30 11:16:10', '2026-08-30 11:16:10'),
(6, 'Polyfax', 1006, 2, 'Hamza Tariq', 'Good condition', 'Wrong product supplied', 'pending', 'Cream', '2026-08-30 11:16:10', '2026-08-30 11:16:10'),
(7, 'Amoxil', 1007, 4, 'Saad Ahmed', 'Good condition', 'Customer returned unused capsules', 'pending', 'Capsule', '2026-08-30 11:16:10', '2026-08-30 11:16:10'),
(8, 'Ventolin', 1008, 1, 'Danish Khan', 'Damaged packaging', 'Inhaler packaging was damaged', 'rejected', 'Inhaler', '2026-08-30 11:16:10', '2026-08-30 06:48:55'),
(9, 'Betnovate', 1009, 2, 'Ali Hassan', 'Good condition', 'Customer received incorrect product', 'pending', 'Cream', '2026-08-30 11:16:10', '2026-08-30 11:16:10'),
(10, 'Disprin', 1010, 5, 'Usman Ahmed', 'Good condition', 'Customer returned excess quantity', 'pending', 'Tablet', '2026-08-30 11:16:10', '2026-08-30 11:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_sold`
--

CREATE TABLE `medicine_sold` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Medicine_Name` varchar(255) NOT NULL,
  `Batch_Number` int(11) DEFAULT NULL,
  `Customer_Name` varchar(255) DEFAULT NULL,
  `Quantity_Sold` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `Type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicine_sold`
--

INSERT INTO `medicine_sold` (`id`, `Medicine_Name`, `Batch_Number`, `Customer_Name`, `Quantity_Sold`, `status`, `Type`, `created_at`, `updated_at`) VALUES
(1, 'Panadol', 1001, 'Ahmed Khan', 2, 'approved', 'Tablet', '2026-08-30 11:13:18', '2026-08-30 06:32:08'),
(2, 'Brufen', 1002, 'Muhammad Ali', 1, 'rejected', 'Tablet', '2026-08-30 11:13:18', '2026-08-30 06:32:13'),
(3, 'Augmentin', 1003, 'Hassan Ahmed', 2, 'approved', 'Syrup', '2026-08-30 11:13:18', '2026-08-30 06:32:50'),
(4, 'Ventolin', 1004, 'Usman Raza', 1, 'rejected', 'Inhaler', '2026-08-30 11:13:18', '2026-08-30 06:48:04'),
(5, 'Polyfax', 1005, 'Bilal Shah', 3, 'pending', 'Cream', '2026-08-30 11:13:18', '2026-08-30 11:13:18'),
(6, 'Amoxil', 1006, 'Hamza Tariq', 4, 'pending', 'Capsule', '2026-08-30 11:13:18', '2026-08-30 11:13:18'),
(7, 'Ceftriaxone', 1007, 'Saad Ahmed', 2, 'pending', 'Injection', '2026-08-30 11:13:18', '2026-08-30 11:13:18'),
(8, 'Systane', 1008, 'Ali Hassan', 1, 'pending', 'Drop', '2026-08-30 11:13:18', '2026-08-30 11:13:18'),
(9, 'Betnovate', 1009, 'Danish Khan', 2, 'pending', 'Cream', '2026-08-30 11:13:18', '2026-08-30 11:13:18'),
(10, 'Disprin', 1010, 'Usman Ahmed', 5, 'pending', 'Tablet', '2026-08-30 11:13:18', '2026-08-30 11:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_08_26_160023_medicine__sold', 1),
(5, '2026_08_27_012704_quantity_received', 1),
(6, '2026_08_27_013412_damaged_medicine', 1),
(7, '2026_08_27_014252_expired__medicine', 1),
(8, '2026_08_27_015211_medicine__return', 1),
(9, '2026_08_27_164423_create_medicines_table', 1),
(10, '2026_08_30_181028_add_status_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quantity_received`
--

CREATE TABLE `quantity_received` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Medicine_Name` varchar(255) NOT NULL,
  `Batch_Number` int(11) DEFAULT NULL,
  `Supplier` varchar(255) DEFAULT NULL,
  `Quantity_Received` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `Type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quantity_received`
--

INSERT INTO `quantity_received` (`id`, `Medicine_Name`, `Batch_Number`, `Supplier`, `Quantity_Received`, `status`, `Type`, `created_at`, `updated_at`) VALUES
(1, 'Panadol', 1001, 'Getz Pharma', 100, 'pending', 'Tablet', '2026-08-30 11:17:25', '2026-08-30 11:17:25'),
(2, 'Brufen', 1002, 'Abbott Laboratories', 80, 'pending', 'Tablet', '2026-08-30 11:17:25', '2026-08-30 11:17:25'),
(3, 'Augmentin', 1003, 'GlaxoSmithKline', 50, 'pending', 'Syrup', '2026-08-30 11:17:25', '2026-08-30 11:17:25'),
(4, 'Ceftriaxone', 1004, 'Sami Pharmaceuticals', 40, 'pending', 'Injection', '2026-08-30 11:17:25', '2026-08-30 11:17:25'),
(5, 'Systane', 1005, 'Alcon Pakistan', 60, 'pending', 'Drop', '2026-08-30 11:17:25', '2026-08-30 11:17:25'),
(6, 'Polyfax', 1006, 'Ferozsons Laboratories', 45, 'pending', 'Cream', '2026-08-30 11:17:25', '2026-08-30 11:17:25'),
(7, 'Amoxil', 1007, 'GlaxoSmithKline', 120, 'pending', 'Capsule', '2026-08-30 11:17:25', '2026-08-30 11:17:25'),
(8, 'Ventolin', 1008, 'GlaxoSmithKline', 35, 'pending', 'Inhaler', '2026-08-30 11:17:25', '2026-08-30 11:17:25'),
(9, 'Betnovate', 1009, 'GlaxoSmithKline', 55, 'pending', 'Cream', '2026-08-30 11:17:25', '2026-08-30 11:17:25'),
(10, 'Disprin', 1010, 'Reckitt', 150, 'pending', 'Tablet', '2026-08-30 11:17:25', '2026-08-30 11:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `created_at`, `updated_at`, `status`) VALUES
(1, 'rafay', 'rafay@gmail.com', 'admin', 'rafay123', NULL, '2026-08-30 13:13:53', 'active'),
(2, 'taheer', 'taheer@gmail.com', 'staff', 'taheer', '2026-08-30 12:26:04', '2026-09-01 06:50:35', 'active'),
(3, 'taheer', 'tahee3r@gmail.com', 'staff', 'taheer', '2026-08-30 12:27:47', '2026-08-30 12:27:47', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `damaged_medicine`
--
ALTER TABLE `damaged_medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expired_medicines`
--
ALTER TABLE `expired_medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `medicines_medicine_name_batch_number_unique` (`Medicine_Name`,`Batch_Number`);

--
-- Indexes for table `medicine_return`
--
ALTER TABLE `medicine_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_sold`
--
ALTER TABLE `medicine_sold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `quantity_received`
--
ALTER TABLE `quantity_received`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `damaged_medicine`
--
ALTER TABLE `damaged_medicine`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expired_medicines`
--
ALTER TABLE `expired_medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `medicine_return`
--
ALTER TABLE `medicine_return`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `medicine_sold`
--
ALTER TABLE `medicine_sold`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quantity_received`
--
ALTER TABLE `quantity_received`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
