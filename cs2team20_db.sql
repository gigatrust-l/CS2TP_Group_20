-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2025 at 01:51 PM
-- Server version: 8.0.44-0ubuntu0.22.04.1
-- PHP Version: 8.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs2team20_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('naturale-cache-ifza1234@icloud.com|90.212.22.35', 'i:1;', 1764854733),
('naturale-cache-ifza1234@icloud.com|90.212.22.35:timer', 'i:1764854733;', 1764854733);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cid` int NOT NULL,
  `c_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `c_email` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cid`, `c_name`, `c_email`) VALUES
(1, 'Test User', 'test@test.com'),
(2, 'Ethan', '240090270@aston.ac.uk'),
(3, 'Steve Tester', 'tester@test.co.uk'),
(4, 'a', 'a@a.c'),
(5, 'ifza', 'ifza.1234@icloud.com'),
(6, 'h w', '240184904@aston.ac.uk'),
(7, 'asadas', 'sadsadas@gmail.com'),
(8, 'sadsdadsads', 'sadsadasdad@gmail.com'),
(9, 'asdasda', 'asdsa@gmail.com'),
(10, 'asdadasd', 'adsadasd@gmail.com'),
(11, 'sadasdsa', 'dasdsadas@gmail.com'),
(12, 'sadsadasd', 'asdasd@gmail.com'),
(13, 'Hezekiah Calub', '230159329@aston.ac.uk'),
(14, 'Hasan Waheed', 'hasanw786@outlook.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `caid` int NOT NULL,
  `ca_cid` int NOT NULL,
  `ca_line1` text COLLATE utf8mb4_general_ci NOT NULL,
  `ca_line2` text COLLATE utf8mb4_general_ci NOT NULL,
  `ca_city` text COLLATE utf8mb4_general_ci NOT NULL,
  `ca_county` text COLLATE utf8mb4_general_ci NOT NULL,
  `ca_postcode` text COLLATE utf8mb4_general_ci NOT NULL,
  `ca_country` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`caid`, `ca_cid`, `ca_line1`, `ca_line2`, `ca_city`, `ca_county`, `ca_postcode`, `ca_country`) VALUES
(1, 1, '123 Test Street', 'Testville', 'Testcity', 'West Testlands', 'TE51 1TT', 'Testland'),
(2, 1, '456 Test Estate', 'Testville', 'Testcity', 'West Testlands', 'TE51 1TE', 'Testland'),
(3, 3, '123 Baker Street', 'Somewher', 'London', 'Greater London', 'L1 1LL', 'United Kingdon'),
(4, 4, 'a', 'a', 'a', 'a', 'a', 'a'),
(5, 4, 'o', 'o', 'o', 'o', 'o', 'o'),
(6, 5, '123 Baker Street', 'Somewher', 'London', 'Greater London', 'L1 1LL', 'United Kingdon'),
(7, 6, '123', '123', 'bham', 'eng', 'b11 123', 'dsf'),
(8, 7, 'sadasdsa', 'sadasda', 'sdasdsa', 'sadasdsa', 'sadsda', 'sadasd'),
(9, 8, 'sadasdasdsads', 'sadasdsadadsad', 'sdasadsadadsa', 'sdadsadasda', 'sdasdsa', 'sadasdsadas'),
(10, 9, 'dsadasdsa', 'sadasdas', 'asdadsa', 'sadasd', 'sadsada', 'asdasd'),
(11, 10, 'sdasdsad', 'sadasdsa', 'asdsadas', 'sadsada', 'sadasdas', 'sadsadsa'),
(12, 11, 'sadasdsa', 'sadasd', 'sadasd', 'sadsad', 'asdas', 'asdsad'),
(13, 12, 'asdasdas', 'sadasds', 'asdsad', 'asdasda', 'asdasd', 'asdasdas'),
(14, 1, '123 test lane', 'test', 'test', 'test', 'test', 'test'),
(15, 13, 'a', 'a', 'a', 'a', 'a', 'a'),
(16, 13, '123 test lane', '1', '11', '1', '1', '1'),
(17, 2, 'test', 'test', 'test', 'test', 'test', 'test'),
(18, 13, 'o', 'o', 'o', 'o', 'o', 'o'),
(19, 14, '145 Bromyard Road', 'Gsbs', 'Birmingham', 'Hshd', 'B11 3AY', 'United Kingdomhedh');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `e_id` int UNSIGNED NOT NULL,
  `e_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `e_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`e_id`, `e_name`, `e_email`, `e_subject`, `e_message`, `e_created`, `e_updated`) VALUES
(1, 'test', 'hcalub87@gmail.com', 'Order Enquiry', 'testing', '2025-11-25 19:23:26', '2025-11-25 19:23:26'),
(2, 'changedName of table to enquiries', 'test@test.com', 'Order Enquiry', 'testing', '2025-11-25 19:28:56', '2025-11-25 19:28:56'),
(3, 'Steve Tester', 'tester@test.co.uk', 'Website Feedback', 'This is a test', '2025-11-29 18:42:45', '2025-11-29 18:42:45'),
(4, 'sAMUEL', 'SAMUEL@GMAIL.COM', 'Technical Issue', 'I DONT LIKE YOUR WEBSITE', '2025-12-05 11:12:21', '2025-12-05 11:12:21');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int NOT NULL,
  `o_cid` int NOT NULL,
  `o_address` int NOT NULL,
  `o_status` text COLLATE utf8mb4_general_ci NOT NULL,
  `o_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `o_cid`, `o_address`, `o_status`, `o_price`) VALUES
(27, 1, 1, 'Processing', 17.98),
(28, 5, 6, 'Processing', 8.99),
(29, 1, 1, 'Processing', 17.98),
(30, 6, 7, 'Processing', 8.99),
(31, 5, 6, 'Processing', 17.98),
(32, 1, 1, 'Processing', 8.99),
(33, 1, 1, 'Processing', 413.54),
(34, 1, 1, 'Processing', 26.97),
(35, 7, 8, 'Processing', 8.99),
(36, 1, 1, 'Processing', 5.99),
(37, 8, 9, 'Processing', 17.98),
(38, 8, 9, 'Processing', 0),
(39, 8, 9, 'Processing', 0),
(40, 8, 9, 'Processing', 0),
(41, 9, 10, 'Processing', 8.99),
(42, 10, 11, 'Processing', 26.97),
(43, 10, 11, 'Processing', 0),
(44, 10, 11, 'Processing', 0),
(45, 10, 11, 'Processing', 0),
(46, 11, 12, 'Processing', 8.99),
(47, 11, 12, 'Processing', 0),
(48, 11, 12, 'Processing', 0),
(49, 1, 1, 'Processing', 8.99),
(50, 1, 1, 'Processing', 11.98),
(51, 12, 13, 'Processing', 8.99),
(52, 1, 1, 'Processing', 8.99),
(53, 13, 15, 'Processing', 8.99),
(54, 13, 15, 'Processing', 8.99),
(55, 2, 17, 'Processing', 26.97),
(56, 13, 15, 'Processing', 8.99),
(57, 2, 17, 'Processing', 26.97),
(58, 14, 19, 'Processing', 5.99);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `oiid` int NOT NULL,
  `oi_oid` int NOT NULL,
  `oi_pid` int NOT NULL,
  `oi_quantity` int NOT NULL,
  `oi_ind_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`oiid`, `oi_oid`, `oi_pid`, `oi_quantity`, `oi_ind_price`) VALUES
(24, 27, 2, 2, 8.99),
(25, 28, 3, 1, 8.99),
(26, 29, 3, 2, 8.99),
(27, 30, 1, 1, 8.99),
(28, 31, 5, 2, 8.99),
(29, 32, 1, 1, 8.99),
(30, 33, 3, 46, 8.99),
(31, 34, 1, 3, 8.99),
(32, 35, 1, 1, 8.99),
(33, 36, 10, 1, 5.99),
(34, 37, 2, 2, 8.99),
(35, 41, 2, 1, 8.99),
(36, 42, 2, 3, 8.99),
(37, 46, 2, 1, 8.99),
(38, 49, 4, 1, 8.99),
(39, 50, 10, 2, 5.99),
(40, 51, 2, 1, 8.99),
(41, 52, 1, 1, 8.99),
(42, 53, 2, 1, 8.99),
(43, 54, 2, 1, 8.99),
(44, 55, 17, 3, 8.99),
(45, 56, 1, 1, 8.99),
(46, 57, 5, 3, 8.99),
(47, 58, 8, 1, 5.99);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('230159329@aston.ac.uk', '$2y$12$9JE/GPNQ3kdNdM9C.pil/useoRepRlTZ8Ey8Ro/33FpYxJU/hjhkq', '2025-12-05 12:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int NOT NULL,
  `p_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `p_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `p_price` decimal(4,2) NOT NULL,
  `p_image` text COLLATE utf8mb4_general_ci NOT NULL,
  `p_stock` int NOT NULL,
  `p_category` text COLLATE utf8mb4_general_ci NOT NULL,
  `p_feature` text COLLATE utf8mb4_general_ci NOT NULL,
  `p_ingredients` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `p_instructions` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `p_volume` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `p_name`, `p_description`, `p_price`, `p_image`, `p_stock`, `p_category`, `p_feature`, `p_ingredients`, `p_instructions`, `p_volume`) VALUES
(1, 'Curl Bloom Nourishing Mask', 'A deeply hydrating curl-care mask designed to restore softness, enhance natural curl patterns, and lock in long-lasting moisture. It revitalizes dry or fatigued curls while boosting definition and reducing frizz.', '8.99', 'media/products/product_1.png', 41, 'Hair Masks', 'Shea Butter', 'Shea Butter, Aloe Vera, Coconut Oil, Water', 'Apply to clean damp hair. Leave 10 minutes, then rinse.', 200),
(2, 'Silk Flow Smoothing Mask', 'A rich, smoothing treatment that helps soften rough texture, tame frizz, and enhance natural shine. Ideal for straight or wavy hair needing extra silkiness and manageability.', '8.99', 'media/products/product_2.png', 37, 'Hair Masks', 'Coconut Oil', 'Coconut Oil, Vitamin E, Water, Glycerin', 'Apply to damp hair. Leave 10 minutes and rinse.', 200),
(3, 'Pure Roots Scalp Detox Mask', 'A purifying mask formulated to cleanse buildup, rebalance the scalp, and help reduce dandruff. It leaves the scalp feeling refreshed, soothed, and invigorated.', '8.99', 'media/products/product_3.png', 0, 'Hair Masks', 'Tea Tree Oil', 'Tea Tree Oil, Peppermint Extract, Aloe Vera, Water', 'Massage into scalp. Leave 5–7 minutes. Rinse well.', 200),
(4, 'Oasis Quench Repair Mask', 'An intensive moisture-restoring mask designed to treat dry, brittle hair. It helps repair visible damage, improve softness, and restore elasticity for healthier-looking strands.', '8.99', 'media/products/product_4.png', 48, 'Hair Masks', 'Avocado Extract', 'Apply mid-lengths to ends. Leave 10 minutes. Rinse.', 'An intensive moisture-restoring mask designed to treat dry, brittle hair. It helps repair visible damage, improve softness, and restore elasticity for healthier-looking strands.', 200),
(5, 'Chromaglow Color Care Mask', 'A protective antioxidant-rich mask that nourishes color-treated hair, helping maintain vibrancy and shine. It shields strands from fading while restoring softness and smoothness.', '8.99', 'media/products/product_5.png', 44, 'Hair Masks', 'Pomegranate Seed Oil', 'Pomegranate Seed Oil, Antioxidants, Water, Glycerin', 'Apply evenly after shampoo. Leave 5–8 minutes. Rinse.', 200),
(6, 'Curl Revival Shampoo', 'Enhances natural curls and promotes curl definition. It does not remove natural oils,\r\ntaming hair frizz while providing deep hydration. Sulfate free. No parabens.', '5.99', 'media/products/product_6.png', 49, 'Shampoo', 'Shea Butter', 'Shea butter, Aloe Vera, Glycerin, Hibiscus Extract, Water', 'Wet the hair and scalp with water. Apply the desired amount of shampoo into the\r\nscalp, massage it evenly and let it sit for 3-4 minutes. Then rinse thoroughly with water. Repeat if\r\nnecessary.', 550),
(7, 'Luminous Sleek Shampoo', 'Parfum and sulfate free shampoo. Softens straight hair and smooths cuticles\r\nleaving a shiny glossy hair. No parabens.', '5.99', 'media/products/product_7.png', 49, 'Shampoo', 'Coconut Oil', 'Coconut Oil, Vitamin K and B, Castor Oil, Water, and Glycerin', 'Wet the hair and scalp with water. Apply the desired amount of shampoo into the\r\nscalp, massage it evenly and let it sit for 3-4 minutes. Then rinse thoroughly with water. Repeat if\r\nnecessary.', 550),
(8, 'Green Balance Detox Shampoo', 'Detoxification and purifying shampoo. Restores scalp balance by cleansing product\r\nbuildup and dandruff. Sulfate free. No parabens.', '5.99', 'media/products/product_8.png', 48, 'Shampoo', 'Tea Tree Oil', 'Tea Tree Oil, Aloe Vera, Water, Peppermint Extract, Vitamin E, Glycerin', 'Wet the hair and scalp with water. Apply the desired amount of shampoo into the\r\nscalp, massage it evenly and let it sit for 3-4 minutes. Then rinse thoroughly with water. Repeat if\r\nnecessary.', 550),
(9, 'Desert Dew Hydrating Shampoo', 'entle hydrating shampoo. Provides deep moisture for silky shinny hair. Sulfate free. No parabens.', '5.99', 'media/products/product_9.png', 49, 'Shampoo', 'Avocado Extract ', 'Avocado Extract, Water, Black Seed Oil, Jojoba Oil, Glycerin', 'Wet the hair and scalp with water. Apply the desired amount of shampoo into the\r\nscalp, massage it evenly and let it sit for 3-4 minutes. Then rinse thoroughly with water. Repeat if\r\nnecessary.', 550),
(10, 'Color Haven Repair Shampoo', 'Colour protecting shampoo, enhances colour vibration, restores shine and\r\nstrengthens hair fibres. Sulfate free. No parabens.', '5.99', 'media/products/product_10.png', 46, 'Shampoo', 'Pomegranate Seed Oil', 'Pomegranate Seed Oil, Polyphenols, Vitamin C, Vitamin E, Glycerin, Water', 'Wet the hair and scalp with water. Apply the desired amount of shampoo into the\r\nscalp, massage it evenly and let it sit for 3-4 minutes. Then rinse thoroughly with water. Repeat if\r\nnecessary.', 550),
(11, 'Velvet Spiral Conditioner', 'Softens, adds bounce, hydrates, and defines curls. Sulfate free. No parabens.', '6.99', 'media/products/product_11.png', 49, 'Conditioner', 'Shea Butter', 'Shea butter, Aloe Vera, Glycerin, Hibiscus Extract, Water', 'Take the desired amount of product and apply to wet hair after shampooing. Leave for 5\r\nminutes. Rinse thoroughly with water.', 550),
(12, 'Glass Veil Conditioner', 'Light conditioner. Provides mirror like shine to straight hair. Smooths the cuticles\r\nand reduces frizz. Sulfate free. No parabens.', '6.99', 'media/products/product_12.png', 49, 'Conditioner', 'Coconut Oil', 'Coconut Oil, Vitamin E, Vitamin A, Water, Glycerin, Aloe Vera', 'Take the desired amount of product and apply to wet hair after shampooing. Leave for 5\r\nminutes. Rinse thoroughly with water.', 550),
(13, 'Calm Scalp Conditioner', 'Detox conditioner. Refreshes scalp and prevents irritation. Sulfate free. No\r\nparabens.', '6.99', 'media/products/product_13.png', 49, 'Conditioner', 'Tea Tree Oil', 'Tea Tree Oil, Aloe Vera, Peppermint Extract, Vitamin C, Water', 'Take the desired amount of product and apply to wet hair after shampooing. Leave for 5\r\nminutes. Rinse thoroughly with water', 550),
(14, 'Moisture Bloom Conditioner', 'Deep hydration and moisture conditioner. Repairs split and dry ends, prevents\r\nbreakage and restores softness. Sulfate free. No parabens.', '6.99', 'media/products/product_14.png', 49, 'Conditioner', 'Avocado Extract', 'Avocado Extract, Water, Black Seed Oil, Jojoba Oil, Glycerin', 'Take the desired amount of product and apply to wet hair after shampooing. Leave for 5\r\nminutes. Rinse thoroughly with water.', 550),
(15, 'Radiant Restore Conditioner', 'Colour protecting conditioner. Restores colour vibration, adds smoothness and\r\nshine to colour damaged hair. Sulfate free. No parabens.', '6.99', 'media/products/product_15.png', 49, 'Conditioner', 'Pomegranate Seed Oil', 'Pomegranate Seed Oil, Polyphenols, Vitamin C, Vitamin E, Glycerin, Water', 'Take the desired amount of product and apply to wet hair after shampooing. Leave for 5\r\nminutes. Rinse thoroughly with water.', 550),
(16, 'Curl Essence Leave-In Cream', 'A rich yet lightweight leave-in cream that defines curls, reduces frizz, and adds softness without creating buildup. Perfect for everyday curl styling and nourishment.', '8.99', 'media/products/product_16.png', 49, 'Leave-In Conditioner', 'Shea Butter', 'Shea Butter, Aloe Vera, Coconut Oil, Water, Glycerin', 'Apply to damp curls and distribute evenly.', 400),
(17, 'Silk Glide Leave-In Spray', 'A smoothing leave-in spray that tames frizz, enhances manageability, and leaves hair sleek and shiny. Ideal for quick styling and daily touchups.', '8.99', 'media/products/product_17.png', 46, 'Leave-In Conditioner', 'Coconut Oil', 'Coconut Oil, Aloe Vera, Water, Glycerin, Vitamin E', 'Apply to damp curls and distribute evenly.', 400),
(18, 'Root Relief Leave-In Tonic', 'A refreshing scalp tonic that cools, soothes, and hydrates the scalp. It promotes a healthy environment for growth while adding lightweight moisture.', '8.99', 'media/products/product_18.png', 49, 'Leave-In Conditioner', 'Tea Tree Oil', 'Tea Tree Oil, Peppermint Extract, Aloe Vera, Water', 'Spray directly onto scalp. Do not rinse.', 400),
(19, 'Hydra Repair Leave-In Mist', 'A hydrating mist that strengthens and revitalizes dry hair. It enhances softness, helps prevent breakage, and provides instant moisture throughout the day.', '8.99', 'media/products/product_19.png', 49, 'Leave-In Conditioner', 'Avocado Extract', 'Avocado Extract, Jojoba Oil, Water, Glycerin', 'Spray onto hair and leave in.', 400),
(20, 'Color Shield Leave-In Spray', 'A protective leave-in formula designed to maintain color vibrancy, defend against fading, and add a radiant glossy finish to color-treated hair.', '8.99', 'media/products/product_20.png', 49, 'Leave-In Conditioner', 'Pomegranate Seed Oil', 'Pomegranate Seed Oil, Vitamin E, Water, Glycerin', 'Mist evenly over hair. Leave in.', 400),
(21, 'Soft Curl Diffuser', 'A flexible diffuser that enhances natural curls, reduces frizz, and minimizes heat damage. It distributes airflow evenly for defined, voluminous curl results.', '4.99', 'media/products/product_21.png', 49, 'Hair Accessory', 'Silicone', NULL, NULL, NULL),
(22, 'Gloss Paddle Brush', 'A smoothing paddle brush crafted to detangle, reduce breakage, and create sleek, polished styles. Ideal for medium to long straight or wavy hair.', '4.50', 'media/products/product_22.png', 49, 'Hair Accessory', 'Bamboo', NULL, NULL, NULL),
(23, 'Scalp Therapy Massager', 'A comfortable handheld massager that boosts scalp circulation, reduces tension, and helps support healthier hair growth when used regularly.', '4.99', 'media/products/product_23.png', 49, 'Hair Accessory', 'Silicone', NULL, NULL, NULL),
(24, 'Silk Pillow Scrunchies', 'Ultra-soft silk scrunchies designed to prevent breakage, reduce frizz, and help hair retain moisture overnight. Gentle on all hair types.', '6.99', 'media/products/product_24.png', 49, 'Hair Accessory', 'Mulberry Silk', NULL, NULL, NULL),
(25, 'Heat Shield Comb Set', 'A durable heat-resistant comb set ideal for styling with hot tools. Helps protect hair from damage while ensuring smooth, controlled styling.', '5.00', 'media/products/product_25.png', 49, 'Hair Accessory', 'Carbon Fiber', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `rid` int NOT NULL,
  `r_cid` int NOT NULL,
  `r_pid` int NOT NULL,
  `r_rating` int NOT NULL,
  `r_title` text COLLATE utf8mb4_general_ci NOT NULL,
  `r_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `r_image` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7T4j6LmR2Wrccc2xkdK64MHDO3oNeQ9mTkSSg20j', NULL, '66.249.88.135', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2V0T2RzWjdjdTJCWTJ3c0xjY0NFTHJid3J2YVEyb2tXYWNIZjZJcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9wcm9kdWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1764939355),
('7Wv4xDMFj6DghEim6xowtSkYHKeOCg90cILS2Hq9', NULL, '74.125.210.105', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieURkSXJ1MHhDTFNJU3hYMUJvWFRVWkc2ZGl1RjAwYWMzcjhFUVAzTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzA6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9wcm9kdWN0cz9uYW1lPVNpbGsmdHlwZT0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1764939470),
('aOlnVvbyxaSpTxmIoufGMkx99PZuchnXGRudOjNQ', NULL, '104.47.11.62', '', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoibFFkWHNVYzV5bXNZQjk2V0l6b1hUQzUxdkt0TjlDV24yazZCSWhrZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1764934943),
('atRhjsXLu32JZ2JPplQwhJ2rxvN7BlVXUxcE6eaV', NULL, '148.252.149.186', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_7_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/142.0.7444.148 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOGJwbDN6Vm1iZ1BwVHZUNDNMRFg5eUNVd2pJQmdWSDd3R0pTV25MaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9wcm9kdWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1764942106),
('B5gMxvEWasr9KmCIFK4852rxiVNbdK3qkGYPPy9i', NULL, '74.125.208.73', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWjd3Y1Y4ZllaVXMyNG5NdjV6aEI3eGhZekduaVRuSW53dVgwa0d3diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9wcm9kdWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1764939355),
('bHwihBh4WZlKPa9EOynl6YwQaq7GGpFmKWr2y0mv', NULL, '74.125.210.104', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3hJSEk1dzVOSlVxblV5YzE3S25laTJuNUdiMFNHNWd0V3NFRnpSTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzA6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9wcm9kdWN0cz9uYW1lPVNpbGsmdHlwZT0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1764939470),
('DkwrBditC35u6hriRSIeY8VVYccRxLSpWLR1VSUy', NULL, '66.249.83.136', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieHQ2aUpHUExrNWVSaEIxTWRwTDZiSTQ0UjA1ME1kUGVwVXpMVTBkYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9wcm9kdWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1764939355),
('Ehf42LkDIr0OU7q4BOg31SgQoNfZ6mddgY3PE789', NULL, '66.249.93.234', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUmhMclY1MkFjUjZ0bkJFOEJyeHA3bHZ3c2xiOHRQWXY3OEFWWU5LVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzA6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9wcm9kdWN0cz9uYW1lPVNpbGsmdHlwZT0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1764939469),
('fzDivTSZLxARtlGjYVrSAiFhksGPziCNqMYDavsd', NULL, '86.136.66.177', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQndibnZ3ajhIS212c0hnWGRxNzZVR1NjNnRMSlptekdhOHRDbFNlcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1764935262),
('HKmKLJ67ZBzUmOCCJBc8aLJbfMKfwjGCX1AWGF5N', NULL, '52.123.138.160', 'Mozilla/5.0 (Windows NT 6.1; WOW64) SkypeUriPreview Preview/0.5 skype-url-preview@microsoft.com', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib3N2SUU3U0ZJR3YxTHM3emFJZm5VVXE5MUZVZXd0UzRTQ2lGaGxVZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1764934941),
('juaiIpCUyXWBGlgyjLn1KbDLWeiK5Gn0A2lFhn5S', 4, '5.151.181.26', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:145.0) Gecko/20100101 Firefox/145.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZHhTVElMMmZXckJuZGtGcWpLRFIxSEt3Tk1LZVI5R2hXN0lleWt1RiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9vcmRlcnMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O3M6MTI6ImNoZWNrb3V0Q2FydCI7YToxOntpOjA7YToyOntzOjM6InBpZCI7czoxOiIxIjtzOjg6InF1YW50aXR5IjtzOjE6IjEiO319fQ==', 1764937766),
('OGLmWwK7TTd5h8iC4KSUAyNPEvywkj1p92HJEYJG', NULL, '52.123.138.164', 'Mozilla/5.0 (Windows NT 6.1; WOW64) SkypeUriPreview Preview/0.5 skype-url-preview@microsoft.com', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib1dPYjV6NWptNGh1V1pSaGFMVnQ1S211MVNlMnVmMUNWTG5yWjZHdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1764935260),
('pnqmDfVvMuH5PSoXfzXlqRojh0bM32ST8GjEILHU', NULL, '93.96.74.153', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR25wN04xeFY4aGF5WHlPenhLdkJvcUJ5U21jeUNiUm9lcEdaWUhPVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTI6ImNoZWNrb3V0Q2FydCI7YToxOntpOjA7YToyOntzOjM6InBpZCI7czoxOiI4IjtzOjg6InF1YW50aXR5IjtzOjE6IjEiO319fQ==', 1764939486),
('saw6z8FL53lZmNUSgsV965m6k6h1JTJm9ygBqV98', NULL, '104.47.11.126', '', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoid3R3bmlTWTVqNWpWOHNodnNvSkxsMHFTQ1BLVEphZ0M0bzlIN0RkQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1764935262),
('VZv5TkfgtitTxEDulvHJjYNllSCEcTIKyt6DsKVl', 2, '10.76.185.47', 'Mozilla/5.0 (X11; Linux x86_64; rv:145.0) Gecko/20100101 Firefox/145.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZlA4NjNSdGVRTWlHQTBZTGpCYWV2eTdBdkJXM1EzbHhWN1VwWWx0YiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzY6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9wcm9kdWN0cz90eXBlPUhhaXIlMjBBY2Nlc3NvcnkiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTI6ImNoZWNrb3V0Q2FydCI7YToxOntpOjA7YToyOntzOjM6InBpZCI7czoxOiI1IjtzOjg6InF1YW50aXR5IjtzOjE6IjMiO319fQ==', 1764942568),
('ZCJDF6EKq0JXJPtveReUN677bHhTHHaktm1uCUbL', NULL, '5.151.181.27', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.5 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSHBlWDRVVDZSRUx1NHZ6dEIyU3RMZWZmdmtES3JRTGtFRzVFQ28wTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTY6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9wcm9kdWN0cy83Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1764941456),
('ZzgjBBMcvLfep8SgoTWvwRVMA10SNAGFSrB44SGO', NULL, '86.136.66.177', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR1dCTmFSaFhva0Ezak9lZE1ibjVyenlDcFdnQW16YXpxcFZsdHN4cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTc6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9zaGVhLWJ1dHRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1764942675);

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
(1, 'Test User', 'test@test.com', NULL, '$2y$12$NsHSLGwis02pq1WzT6MZIOKC6qpsGwQuaTuVh7oRaH25opzLfFt/C', NULL, '2025-10-21 18:33:32', '2025-10-21 18:33:32'),
(2, 'Ethan', '240090270@aston.ac.uk', NULL, '$2y$12$nSCXPsSoiOggti49.uwxLOcrXDGHKOE1Kkjl0f12aYnjUYhjuQV9u', 'OGfdE9sNiK9iG9ApeKwxij7nip3A0vhSOIha4QxzsQTEM108DCu9oSgTTELb', '2025-11-24 18:32:09', '2025-11-24 18:33:50'),
(3, 'ifza', 'ifza.1234@icloud.com', NULL, '$2y$12$2mgsNRobfpPUgPIxfb2U8.QBhL2dnZqu.kqRM4Yb3n6lymv16onHe', NULL, '2025-11-30 00:03:40', '2025-11-30 00:03:40'),
(4, 'Hezekiah Calub', '230159329@aston.ac.uk', NULL, '$2y$12$ZTQ0wtIvGG.PWFT144cE8eFpEE62ZAXlxjJhrrxFLlYHWLfIq666O', NULL, '2025-12-05 11:47:53', '2025-12-05 11:48:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`caid`),
  ADD KEY `ca_cid` (`ca_cid`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`e_id`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `cid` (`o_cid`),
  ADD KEY `o_address` (`o_address`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`oiid`),
  ADD KEY `oid` (`oi_oid`),
  ADD KEY `pid` (`oi_pid`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `r_cid` (`r_cid`),
  ADD KEY `r_pid` (`r_pid`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `caid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `e_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `oiid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=551;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `rid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD CONSTRAINT `customer_address_ibfk_1` FOREIGN KEY (`ca_cid`) REFERENCES `customers` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`o_cid`) REFERENCES `customers` (`cid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`o_address`) REFERENCES `customer_address` (`caid`) ON UPDATE CASCADE;

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`oi_oid`) REFERENCES `orders` (`oid`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_item_ibfk_2` FOREIGN KEY (`oi_pid`) REFERENCES `products` (`pid`) ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`r_cid`) REFERENCES `customers` (`cid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`r_pid`) REFERENCES `products` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
