-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 12, 2026 at 02:40 PM
-- Server version: 8.0.45-0ubuntu0.22.04.1
-- PHP Version: 8.3.30

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
('naturale-cache-230159329@aston.ac.uk|88.97.161.57', 'i:2;', 1765279650),
('naturale-cache-230159329@aston.ac.uk|88.97.161.57:timer', 'i:1765279650;', 1765279650),
('naturale-cache-emmasmith@example.com|10.76.177.174', 'i:1;', 1769442866),
('naturale-cache-emmasmith@example.com|10.76.177.174:timer', 'i:1769442866;', 1769442866),
('naturale-cache-emmasmith@example.com|90.249.106.164', 'i:1;', 1769559576),
('naturale-cache-emmasmith@example.com|90.249.106.164:timer', 'i:1769559576;', 1769559576),
('naturale-cache-ifza1234@icloud.com|90.212.22.35', 'i:1;', 1764854733),
('naturale-cache-ifza1234@icloud.com|90.212.22.35:timer', 'i:1764854733;', 1764854733),
('naturale-cache-samuel_dsouza@outlook.com|10.76.112.50', 'i:1;', 1770728969),
('naturale-cache-samuel_dsouza@outlook.com|10.76.112.50:timer', 'i:1770728969;', 1770728969);

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
-- Table structure for table `chat_steps`
--

CREATE TABLE `chat_steps` (
  `csid` int NOT NULL,
  `cs_message` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `cs_options` json NOT NULL,
  `cs_timestamps` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

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
(14, 'Hasan Waheed', 'hasanw786@outlook.com'),
(15, 'TestOne', 'testone@gmail.com'),
(16, 'asdasdas', 'asdasdasdasd@gmail.com'),
(17, 'Jot', 'Jot@jot.com'),
(18, 'Emma Smith', 'emmasmith@example.com'),
(19, 'Kanban Default', 'asd@asd.sad');

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
(19, 14, '145 Bromyard Road', 'Gsbs', 'Birmingham', 'Hshd', 'B11 3AY', 'United Kingdomhedh'),
(20, 15, 'Aston University', 'Cute Main Building', 'Birmingham', 'Example', 'B1 A1', 'Country1'),
(21, 16, 'asdasdasd', 'asdasdas', 'sadasdas', 'sdasdas', 'sadsadas', 'sdadsa'),
(22, 17, '69 Jot street', '69 Jot street', 'Jotville', 'jotopia', 'JO60 ORU', 'jotopia'),
(23, 18, '1', 'Aston St', 'Birmingham', 'West Midlands', 'B4 7ET', 'United Kingdom'),
(24, 19, '69 Jot street', '69 Jot street', 'Jotville', 'jotopia', 'JO60 ORU', 'jotopia');

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
(4, 'sAMUEL', 'SAMUEL@GMAIL.COM', 'Technical Issue', 'I DONT LIKE YOUR WEBSITE', '2025-12-05 11:12:21', '2025-12-05 11:12:21'),
(5, 'Kanban Default', 'asd@asd.sad', 'Order Enquiry', 'Where is my order?', '2026-02-03 12:20:23', '2026-02-03 12:20:23');

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
-- Table structure for table `knowledge_base`
--

CREATE TABLE `knowledge_base` (
  `kbid` int NOT NULL,
  `kb_keyword` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `kb_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `knowledge_base`
--

INSERT INTO `knowledge_base` (`kbid`, `kb_keyword`, `kb_content`) VALUES
(1, 'track, delivery, status, shipping, courier, international', 'Orders ship within 1-2 business days. Tracking is available <a href=\"https://cs2team20.cs2410-web01pvm.aston.ac.uk/orders\">here</a>. We ship globally, but international orders may take 10-14 days. If not signed in, contact support <a href=\"/contact\">here</a>.'),
(2, 'return, refund, money back, exchange, cancel order, broken bottle', 'Strict Rule: Do not process refunds here. Tell the user to email NaturaleHelpDesk@gmail.com with their order number. Note: We only accept returns for unopened products within 30 days.'),
(3, 'vegan, sulfate, paraben, natural, chemicals, organic, ingredient, ingredients', 'Naturale is 100% vegan and sulfate-free. We use cold-pressed oils. See our full ingredient list here: <a href=\"/ingredients\" class=\"text-decoration-none\">Ingredients</a>.'),
(4, 'password, login, change email, delete account, dashboard', 'You can manage your personal details and order history in your Naturale Account Dashboard. If you forgot your password, use the \'Forgot Password\' link on the login page. The link to the account section is https://cs2team20.cs2410-web01pvm.aston.ac.uk/dashboard'),
(5, 'orders, order, view order', 'You can view your order if logged in https://cs2team20.cs2410-web01pvm.aston.ac.uk/orders. If not logged in at time of order contact support https://cs2team20.cs2410-web01pvm.aston.ac.uk/contact');

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
(58, 14, 19, 'Processing', 5.99),
(59, 15, 20, 'Processing', 12.98),
(60, 1, 1, 'Processing', 98.89),
(61, 1, 1, 'Processing', 89.9),
(62, 16, 21, 'Processing', 6.99),
(63, 17, 22, 'Processing', 431.52),
(64, 18, 23, 'Processing', 8.99),
(65, 19, 24, 'Processing', 5.99);

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
(47, 58, 8, 1, 5.99),
(48, 59, 12, 1, 6.99),
(49, 59, 8, 1, 5.99),
(50, 60, 2, 11, 8.99),
(51, 61, 2, 10, 8.99),
(52, 62, 12, 1, 6.99),
(53, 63, 4, 48, 8.99),
(54, 64, 1, 1, 8.99),
(55, 65, 10, 1, 5.99);

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
('230159329@aston.ac.uk', '$2y$12$5F4jva1nPpWGi/bpBHzcaO/81R71X.JXeVYj3Bllo9do8ogLBtX9C', '2025-12-09 11:39:12');

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
(1, 'Curl Bloom Nourishing Mask', 'A deeply hydrating curl-care mask designed to restore softness, enhance natural curl patterns, and lock in long-lasting moisture. It revitalizes dry or fatigued curls while boosting definition and reducing frizz.', '8.99', 'media/media_webp/products/product_1.webp', 40, 'Hair Masks', 'Shea Butter', 'Shea Butter, Aloe Vera, Coconut Oil, Water', 'Apply to clean damp hair. Leave 10 minutes, then rinse.', 200),
(2, 'Silk Flow Smoothing Mask', 'A rich, smoothing treatment that helps soften rough texture, tame frizz, and enhance natural shine. Ideal for straight or wavy hair needing extra silkiness and manageability.', '8.99', 'media/media_webp/products/product_2.webp', 16, 'Hair Masks', 'Coconut Oil', 'Coconut Oil, Vitamin E, Water, Glycerin', 'Apply to damp hair. Leave 10 minutes and rinse.', 200),
(3, 'Pure Roots Scalp Detox Mask', 'A purifying mask formulated to cleanse buildup, rebalance the scalp, and help reduce dandruff. It leaves the scalp feeling refreshed, soothed, and invigorated.', '8.99', 'media/media_webp/products/product_3.webp', 0, 'Hair Masks', 'Tea Tree Oil', 'Tea Tree Oil, Peppermint Extract, Aloe Vera, Water', 'Massage into scalp. Leave 5–7 minutes. Rinse well.', 200),
(4, 'Oasis Quench Repair Mask', 'An intensive moisture-restoring mask designed to treat dry, brittle hair. It helps repair visible damage, improve softness, and restore elasticity for healthier-looking strands.', '8.99', 'media/media_webp/products/product_4.webp', 0, 'Hair Masks', 'Avocado Extract', 'Apply mid-lengths to ends. Leave 10 minutes. Rinse.', 'An intensive moisture-restoring mask designed to treat dry, brittle hair. It helps repair visible damage, improve softness, and restore elasticity for healthier-looking strands.', 200),
(5, 'Chromaglow Color Care Mask', 'A protective antioxidant-rich mask that nourishes color-treated hair, helping maintain vibrancy and shine. It shields strands from fading while restoring softness and smoothness.', '8.99', 'media/media_webp/products/product_5.webp', 44, 'Hair Masks', 'Pomegranate Seed Oil', 'Pomegranate Seed Oil, Antioxidants, Water, Glycerin', 'Apply evenly after shampoo. Leave 5–8 minutes. Rinse.', 200),
(6, 'Curl Revival Shampoo', 'Enhances natural curls and promotes curl definition. It does not remove natural oils,\r\ntaming hair frizz while providing deep hydration. Sulfate free. No parabens.', '5.99', 'media/media_webp/products/product_6.webp', 49, 'Shampoo', 'Shea Butter', 'Shea butter, Aloe Vera, Glycerin, Hibiscus Extract, Water', 'Wet the hair and scalp with water. Apply the desired amount of shampoo into the\r\nscalp, massage it evenly and let it sit for 3-4 minutes. Then rinse thoroughly with water. Repeat if\r\nnecessary.', 550),
(7, 'Luminous Sleek Shampoo', 'Parfum and sulfate free shampoo. Softens straight hair and smooths cuticles\r\nleaving a shiny glossy hair. No parabens.', '5.99', 'media/media_webp/products/product_7.webp', 49, 'Shampoo', 'Coconut Oil', 'Coconut Oil, Vitamin K and B, Castor Oil, Water, and Glycerin', 'Wet the hair and scalp with water. Apply the desired amount of shampoo into the\r\nscalp, massage it evenly and let it sit for 3-4 minutes. Then rinse thoroughly with water. Repeat if\r\nnecessary.', 550),
(8, 'Green Balance Detox Shampoo', 'Detoxification and purifying shampoo. Restores scalp balance by cleansing product\r\nbuildup and dandruff. Sulfate free. No parabens.', '5.99', 'media/media_webp/products/product_8.webp', 47, 'Shampoo', 'Tea Tree Oil', 'Tea Tree Oil, Aloe Vera, Water, Peppermint Extract, Vitamin E, Glycerin', 'Wet the hair and scalp with water. Apply the desired amount of shampoo into the\r\nscalp, massage it evenly and let it sit for 3-4 minutes. Then rinse thoroughly with water. Repeat if\r\nnecessary.', 550),
(9, 'Desert Dew Hydrating Shampoo', 'entle hydrating shampoo. Provides deep moisture for silky shinny hair. Sulfate free. No parabens.', '5.99', 'media/media_webp/products/product_9.webp', 49, 'Shampoo', 'Avocado Extract ', 'Avocado Extract, Water, Black Seed Oil, Jojoba Oil, Glycerin', 'Wet the hair and scalp with water. Apply the desired amount of shampoo into the\r\nscalp, massage it evenly and let it sit for 3-4 minutes. Then rinse thoroughly with water. Repeat if\r\nnecessary.', 550),
(10, 'Color Haven Repair Shampoo', 'Colour protecting shampoo, enhances colour vibration, restores shine and\r\nstrengthens hair fibres. Sulfate free. No parabens.', '5.99', 'media/media_webp/products/product_10.webp', 45, 'Shampoo', 'Pomegranate Seed Oil', 'Pomegranate Seed Oil, Polyphenols, Vitamin C, Vitamin E, Glycerin, Water', 'Wet the hair and scalp with water. Apply the desired amount of shampoo into the\r\nscalp, massage it evenly and let it sit for 3-4 minutes. Then rinse thoroughly with water. Repeat if\r\nnecessary.', 550),
(11, 'Velvet Spiral Conditioner', 'Softens, adds bounce, hydrates, and defines curls. Sulfate free. No parabens.', '6.99', 'media/media_webp/products/product_11.webp', 49, 'Conditioner', 'Shea Butter', 'Shea butter, Aloe Vera, Glycerin, Hibiscus Extract, Water', 'Take the desired amount of product and apply to wet hair after shampooing. Leave for 5\r\nminutes. Rinse thoroughly with water.', 550),
(12, 'Glass Veil Conditioner', 'Light conditioner. Provides mirror like shine to straight hair. Smooths the cuticles\r\nand reduces frizz. Sulfate free. No parabens.', '6.99', 'media/media_webp/products/product_12.webp', 47, 'Conditioner', 'Coconut Oil', 'Coconut Oil, Vitamin E, Vitamin A, Water, Glycerin, Aloe Vera', 'Take the desired amount of product and apply to wet hair after shampooing. Leave for 5\r\nminutes. Rinse thoroughly with water.', 550),
(13, 'Calm Scalp Conditioner', 'Detox conditioner. Refreshes scalp and prevents irritation. Sulfate free. No\r\nparabens.', '6.99', 'media/media_webp/products/product_13.webp', 49, 'Conditioner', 'Tea Tree Oil', 'Tea Tree Oil, Aloe Vera, Peppermint Extract, Vitamin C, Water', 'Take the desired amount of product and apply to wet hair after shampooing. Leave for 5\r\nminutes. Rinse thoroughly with water', 550),
(14, 'Moisture Bloom Conditioner', 'Deep hydration and moisture conditioner. Repairs split and dry ends, prevents\r\nbreakage and restores softness. Sulfate free. No parabens.', '6.99', 'media/media_webp/products/product_14.webp', 49, 'Conditioner', 'Avocado Extract', 'Avocado Extract, Water, Black Seed Oil, Jojoba Oil, Glycerin', 'Take the desired amount of product and apply to wet hair after shampooing. Leave for 5\r\nminutes. Rinse thoroughly with water.', 550),
(15, 'Radiant Restore Conditioner', 'Colour protecting conditioner. Restores colour vibration, adds smoothness and\r\nshine to colour damaged hair. Sulfate free. No parabens.', '6.99', 'media/media_webp/products/product_15.webp', 49, 'Conditioner', 'Pomegranate Seed Oil', 'Pomegranate Seed Oil, Polyphenols, Vitamin C, Vitamin E, Glycerin, Water', 'Take the desired amount of product and apply to wet hair after shampooing. Leave for 5\r\nminutes. Rinse thoroughly with water.', 550),
(16, 'Curl Essence Leave-In Cream', 'A rich yet lightweight leave-in cream that defines curls, reduces frizz, and adds softness without creating buildup. Perfect for everyday curl styling and nourishment.', '8.99', 'media/media_webp/products/product_16.webp', 49, 'Leave-In Conditioner', 'Shea Butter', 'Shea Butter, Aloe Vera, Coconut Oil, Water, Glycerin', 'Apply to damp curls and distribute evenly.', 400),
(17, 'Silk Glide Leave-In Spray', 'A smoothing leave-in spray that tames frizz, enhances manageability, and leaves hair sleek and shiny. Ideal for quick styling and daily touchups.', '8.99', 'media/media_webp/products/product_17.webp', 46, 'Leave-In Conditioner', 'Coconut Oil', 'Coconut Oil, Aloe Vera, Water, Glycerin, Vitamin E', 'Apply to damp curls and distribute evenly.', 400),
(18, 'Root Relief Leave-In Tonic', 'A refreshing scalp tonic that cools, soothes, and hydrates the scalp. It promotes a healthy environment for growth while adding lightweight moisture.', '8.99', 'media/media_webp/products/product_18.webp', 49, 'Leave-In Conditioner', 'Tea Tree Oil', 'Tea Tree Oil, Peppermint Extract, Aloe Vera, Water', 'Spray directly onto scalp. Do not rinse.', 400),
(19, 'Hydra Repair Leave-In Mist', 'A hydrating mist that strengthens and revitalizes dry hair. It enhances softness, helps prevent breakage, and provides instant moisture throughout the day.', '8.99', 'media/media_webp/products/product_19.webp', 49, 'Leave-In Conditioner', 'Avocado Extract', 'Avocado Extract, Jojoba Oil, Water, Glycerin', 'Spray onto hair and leave in.', 400),
(20, 'Color Shield Leave-In Spray', 'A protective leave-in formula designed to maintain color vibrancy, defend against fading, and add a radiant glossy finish to color-treated hair.', '8.99', 'media/media_webp/products/product_20.webp', 49, 'Leave-In Conditioner', 'Pomegranate Seed Oil', 'Pomegranate Seed Oil, Vitamin E, Water, Glycerin', 'Mist evenly over hair. Leave in.', 400),
(21, 'Soft Curl Diffuser', 'A flexible diffuser that enhances natural curls, reduces frizz, and minimizes heat damage. It distributes airflow evenly for defined, voluminous curl results.', '4.99', 'media/media_webp/products/product_21.webp', 49, 'Hair Accessory', 'Silicone', NULL, NULL, NULL),
(22, 'Gloss Paddle Brush', 'A smoothing paddle brush crafted to detangle, reduce breakage, and create sleek, polished styles. Ideal for medium to long straight or wavy hair.', '4.50', 'media/media_webp/products/product_22.webp', 49, 'Hair Accessory', 'Bamboo', NULL, NULL, NULL),
(23, 'Scalp Therapy Massager', 'A comfortable handheld massager that boosts scalp circulation, reduces tension, and helps support healthier hair growth when used regularly.', '4.99', 'media/media_webp/products/product_23.webp', 49, 'Hair Accessory', 'Silicone', NULL, NULL, NULL),
(24, 'Silk Pillow Scrunchies', 'Ultra-soft silk scrunchies designed to prevent breakage, reduce frizz, and help hair retain moisture overnight. Gentle on all hair types.', '6.99', 'media/media_webp/products/product_24.webp', 49, 'Hair Accessory', 'Mulberry Silk', NULL, NULL, NULL),
(25, 'Heat Shield Comb Set', 'A durable heat-resistant comb set ideal for styling with hot tools. Helps protect hair from damage while ensuring smooth, controlled styling.', '5.00', 'media/media_webp/products/product_25.webp', 49, 'Hair Accessory', 'Carbon Fiber', NULL, NULL, NULL);

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
('34qt8KjtzhJd3JqZJVmKjKzKyrFXagMRBWCG51P4', NULL, '18.209.183.169', 'Iframely/1.3.1 (+https://iframely.com/docs/about) Atlassian', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOFZRdlpoZVZJclJYTm1hQWM5NDBsUlJqcVp5ZlFMaFZuazhLVXFRSCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ayI7czo1OiJyb3V0ZSI7czo1OiJpbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1770906370),
('4W2Vuloq6x4n3ZD6U2KuoY7ytFTsmq2YddnIIKoR', NULL, '10.76.190.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibEZCUlprQjBuaEhhdllvSENBV1JCQ09wRHEwQzk1ZW9Tc3d3SWJaTSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ayI7czo1OiJyb3V0ZSI7czo1OiJpbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1770907145),
('5J1nnhGisrnRfQFbADcLTTyKcC3wykWoG4CrNJH3', NULL, '51.79.137.237', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNzE2Y1lZWEEzYUxYalZxSENjM2VPREkxaElGZEIzbWZYb2ZLZTFCRCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9jczJ0ZWFtMjAuY3MyNDEwLXdlYjAxcHZtLmFzdG9uLmFjLnVrIjtzOjU6InJvdXRlIjtzOjU6ImluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1770903397),
('9KL7rJ0rbHZm7IQIFbSZDRM1Evv541xTMwAdA9Ns', NULL, '10.76.187.216', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:147.0) Gecko/20100101 Firefox/147.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia28yMmlDVHNvMEZkeVh4WkZxRmVoWVFMb0QySkJLVENsTWZ6OVk5aiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTA6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9jaGF0IjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjEyOiJjaGF0X2hpc3RvcnkiO2E6Nzp7aTowO2E6NDp7czo2OiJzZW5kZXIiO3M6MzoiYm90IjtzOjQ6InRleHQiO3M6ODM6IldlbGNvbWUgdG8gTmF0dXJhbGUgU3VwcG9ydCEgVHlwZSBvciBjbGljayBhbiBvcHRpb24gYmVsb3cgdG8gZ2V0IG1vcmUgaW5mb3JtYXRpb24uIjtzOjQ6InRpbWUiO3M6NToiMTQ6MjkiO3M6ODoiaXNCdXR0b24iO2I6MDt9aToxO2E6NDp7czo2OiJzZW5kZXIiO3M6MzoiYm90IjtzOjQ6InRleHQiO3M6MTQ6IkFib3V0IE5hdHVyYWxlIjtzOjQ6InRpbWUiO3M6NToiMTQ6MjkiO3M6ODoiaXNCdXR0b24iO2I6MTt9aToyO2E6NDp7czo2OiJzZW5kZXIiO3M6MzoiYm90IjtzOjQ6InRleHQiO3M6MjM6IlByb2R1Y3QgUmVjb21tZW5kYXRpb25zIjtzOjQ6InRpbWUiO3M6NToiMTQ6MjkiO3M6ODoiaXNCdXR0b24iO2I6MTt9aTozO2E6NDp7czo2OiJzZW5kZXIiO3M6MzoiYm90IjtzOjQ6InRleHQiO3M6MTc6Ik9yZGVyIGluZm9ybWF0aW9uIjtzOjQ6InRpbWUiO3M6NToiMTQ6MjkiO3M6ODoiaXNCdXR0b24iO2I6MTt9aTo0O2E6NDp7czo2OiJzZW5kZXIiO3M6MzoiYm90IjtzOjQ6InRleHQiO3M6MTY6IkN1c3RvbWVyIFN1cHBvcnQiO3M6NDoidGltZSI7czo1OiIxNDoyOSI7czo4OiJpc0J1dHRvbiI7YjoxO31pOjU7YTo0OntzOjY6InNlbmRlciI7czo0OiJ1c2VyIjtzOjQ6InRleHQiO3M6MTI6ImhlbGxvIG1yIGJvdCI7czo0OiJ0aW1lIjtzOjU6IjE0OjI5IjtzOjg6ImlzQnV0dG9uIjtiOjA7fWk6NjthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjUzOiJJIGRpZG4ndCB1bmRlcnN0YW5kIHRoYXQuIFR5cGUgJ2hlbHAnIHRvIHNlZSBvcHRpb25zLiI7czo0OiJ0aW1lIjtzOjU6IjE0OjI5IjtzOjg6ImlzQnV0dG9uIjtiOjA7fX19', 1770906553),
('bcjNOvQ5T9hH2FnXq01ZPXmQsWX6NUOmCLcdyVWY', NULL, '51.79.137.237', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidG5MTWg1WWxSdGs1S2NwVUFPRFJwckhhaVRJSlRDMGdOd2NrM1pyOCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9jczJ0ZWFtMjAuY3MyNDEwLXdlYjAxcHZtLmFzdG9uLmFjLnVrIjtzOjU6InJvdXRlIjtzOjU6ImluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1770903397),
('cQLQ6vHPsErLfAHO7z95AtYuvp6IRI90eZQrtWTr', NULL, '10.76.190.154', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaFQwaHJmakZFNGVTaWRQbzNMR0lXVVRTd2QwWEc4bzJEVjFVZGE1NiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTA6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9jaGF0IjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjEyOiJjaGF0X2hpc3RvcnkiO2E6MTQ6e2k6MDthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjgzOiJXZWxjb21lIHRvIE5hdHVyYWxlIFN1cHBvcnQhIFR5cGUgb3IgY2xpY2sgYW4gb3B0aW9uIGJlbG93IHRvIGdldCBtb3JlIGluZm9ybWF0aW9uLiI7czo0OiJ0aW1lIjtzOjU6IjE0OjIzIjtzOjg6ImlzQnV0dG9uIjtiOjA7fWk6MTthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjE0OiJBYm91dCBOYXR1cmFsZSI7czo0OiJ0aW1lIjtzOjU6IjE0OjIzIjtzOjg6ImlzQnV0dG9uIjtiOjE7fWk6MjthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjIzOiJQcm9kdWN0IFJlY29tbWVuZGF0aW9ucyI7czo0OiJ0aW1lIjtzOjU6IjE0OjIzIjtzOjg6ImlzQnV0dG9uIjtiOjE7fWk6MzthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjE3OiJPcmRlciBpbmZvcm1hdGlvbiI7czo0OiJ0aW1lIjtzOjU6IjE0OjIzIjtzOjg6ImlzQnV0dG9uIjtiOjE7fWk6NDthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjE2OiJDdXN0b21lciBTdXBwb3J0IjtzOjQ6InRpbWUiO3M6NToiMTQ6MjMiO3M6ODoiaXNCdXR0b24iO2I6MTt9aTo1O2E6NDp7czo2OiJzZW5kZXIiO3M6NDoidXNlciI7czo0OiJ0ZXh0IjtzOjIzOiJQcm9kdWN0IFJlY29tbWVuZGF0aW9ucyI7czo0OiJ0aW1lIjtzOjU6IjE0OjIzIjtzOjg6ImlzQnV0dG9uIjtiOjA7fWk6NjthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjc5OiJZb3UgY2FuIHZpZXcgaW5mb3JtYXRpb24gYWJvdXQgb3VyIGluZ3JlZGllbnRzIDxhIGhyZWY9Ii9pbmdyZWRpZW50cyI+aGVyZS48L2E+IjtzOjQ6InRpbWUiO3M6NToiMTQ6MjMiO3M6ODoiaXNCdXR0b24iO2I6MDt9aTo3O2E6NDp7czo2OiJzZW5kZXIiO3M6NDoidXNlciI7czo0OiJ0ZXh0IjtzOjE3OiJPcmRlciBpbmZvcm1hdGlvbiI7czo0OiJ0aW1lIjtzOjU6IjE0OjIzIjtzOjg6ImlzQnV0dG9uIjtiOjA7fWk6ODthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjc0OiJZb3UgY2FuIHZpZXcgeW91ciBvcmRlcnMgPGEgaHJlZj0iL29yZGVycyI+aGVyZTwvYT4gaWYgeW91IHdlcmUgbG9nZ2VkIGluLiI7czo0OiJ0aW1lIjtzOjU6IjE0OjIzIjtzOjg6ImlzQnV0dG9uIjtiOjA7fWk6OTthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjE2MDoiSWYgbm90LCBZb3UgY2FuIHJlYWNoIG91dCB0byBzdXBwb3J0IDxhIGhyZWY9Ii9jb250YWN0Ij5oZXJlPC9hPiBvciBzZW5kIGFuIGVtYWlsIHRvIDxhIGhyZWY9Im1haWx0bzpOYXR1cmFsZUhlbHBEZXNrQGdtYWlsLmNvbSI+TmF0dXJhbGVIZWxwRGVza0BnbWFpbC5jb20uPC9hPiI7czo0OiJ0aW1lIjtzOjU6IjE0OjIzIjtzOjg6ImlzQnV0dG9uIjtiOjA7fWk6MTA7YTo0OntzOjY6InNlbmRlciI7czo0OiJ1c2VyIjtzOjQ6InRleHQiO3M6MTY6IkN1c3RvbWVyIFN1cHBvcnQiO3M6NDoidGltZSI7czo1OiIxNDoyMyI7czo4OiJpc0J1dHRvbiI7YjowO31pOjExO2E6NDp7czo2OiJzZW5kZXIiO3M6MzoiYm90IjtzOjQ6InRleHQiO3M6MTUyOiJZb3UgY2FuIHJlYWNoIG91dCB0byBzdXBwb3J0IDxhIGhyZWY9Ii9jb250YWN0Ij5oZXJlPC9hPiBvciBzZW5kIGFuIGVtYWlsIHRvIDxhIGhyZWY9Im1haWx0bzpOYXR1cmFsZUhlbHBEZXNrQGdtYWlsLmNvbSI+TmF0dXJhbGVIZWxwRGVza0BnbWFpbC5jb20uPC9hPiI7czo0OiJ0aW1lIjtzOjU6IjE0OjIzIjtzOjg6ImlzQnV0dG9uIjtiOjA7fWk6MTI7YTo0OntzOjY6InNlbmRlciI7czo0OiJ1c2VyIjtzOjQ6InRleHQiO3M6MTQ6IkFib3V0IE5hdHVyYWxlIjtzOjQ6InRpbWUiO3M6NToiMTQ6MjMiO3M6ODoiaXNCdXR0b24iO2I6MDt9aToxMzthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjE2NToiTmF0dXJhbGUgaXMgdGhlIHByZW1pZXIgZGVzdGluYXRpb24gZm9yIGVjb2ZyaWVuZGx5LCBuYXR1cmFsLCBhbmQgb3JnYW5pYyBoYWlyY2FyZSBwcm9kdWN0cy4gVG8gc2VlIG1vcmUgYWJvdXQgdXMsIHZpZXcgb3VyIGFib3V0IHVzIHBhZ2UgPGEgaHJlZj0iL2Fib3V0Ij5oZXJlLjwvYT4gIjtzOjQ6InRpbWUiO3M6NToiMTQ6MjMiO3M6ODoiaXNCdXR0b24iO2I6MDt9fX0=', 1770906209),
('faQQjTGgV8ZosrCYkkZ4A57au27savoccFfScgxW', NULL, '10.76.188.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36 OPR/126.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2N1anBsVUxnR05HTDVMMDBGQVQybE4ycmVzUFBDcVZLTE5jWEg5RyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTM6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9jb250YWN0IjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1770906564),
('FBzdvCL7zsCLqCue4U9kJ4ce294fyvVrrClqsxPt', NULL, '10.76.112.50', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRkVQOFZDSXFhRXlMZm50bWM3aHozUXNWS2V5TE9sYkVGOWgzdzdTdiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTA6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9jaGF0IjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjEyOiJjaGF0X2hpc3RvcnkiO2E6MTY6e2k6MDthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjgzOiJXZWxjb21lIHRvIE5hdHVyYWxlIFN1cHBvcnQhIFR5cGUgb3IgY2xpY2sgYW4gb3B0aW9uIGJlbG93IHRvIGdldCBtb3JlIGluZm9ybWF0aW9uLiI7czo0OiJ0aW1lIjtzOjU6IjExOjU4IjtzOjg6ImlzQnV0dG9uIjtiOjA7fWk6MTthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjE0OiJBYm91dCBOYXR1cmFsZSI7czo0OiJ0aW1lIjtzOjU6IjExOjU4IjtzOjg6ImlzQnV0dG9uIjtiOjE7fWk6MjthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjIzOiJQcm9kdWN0IFJlY29tbWVuZGF0aW9ucyI7czo0OiJ0aW1lIjtzOjU6IjExOjU4IjtzOjg6ImlzQnV0dG9uIjtiOjE7fWk6MzthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjE3OiJPcmRlciBpbmZvcm1hdGlvbiI7czo0OiJ0aW1lIjtzOjU6IjExOjU4IjtzOjg6ImlzQnV0dG9uIjtiOjE7fWk6NDthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjE2OiJDdXN0b21lciBTdXBwb3J0IjtzOjQ6InRpbWUiO3M6NToiMTE6NTgiO3M6ODoiaXNCdXR0b24iO2I6MTt9aTo1O2E6NDp7czo2OiJzZW5kZXIiO3M6NDoidXNlciI7czo0OiJ0ZXh0IjtzOjM6IkhlaiI7czo0OiJ0aW1lIjtzOjU6IjExOjU4IjtzOjg6ImlzQnV0dG9uIjtiOjA7fWk6NjthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjUzOiJJIGRpZG4ndCB1bmRlcnN0YW5kIHRoYXQuIFR5cGUgJ2hlbHAnIHRvIHNlZSBvcHRpb25zLiI7czo0OiJ0aW1lIjtzOjU6IjExOjU4IjtzOjg6ImlzQnV0dG9uIjtiOjA7fWk6NzthOjQ6e3M6Njoic2VuZGVyIjtzOjQ6InVzZXIiO3M6NDoidGV4dCI7czoxNjoiQ3VzdG9tZXIgU3VwcG9ydCI7czo0OiJ0aW1lIjtzOjU6IjExOjU5IjtzOjg6ImlzQnV0dG9uIjtiOjA7fWk6ODthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjE1MjoiWW91IGNhbiByZWFjaCBvdXQgdG8gc3VwcG9ydCA8YSBocmVmPSIvY29udGFjdCI+aGVyZTwvYT4gb3Igc2VuZCBhbiBlbWFpbCB0byA8YSBocmVmPSJtYWlsdG86TmF0dXJhbGVIZWxwRGVza0BnbWFpbC5jb20iPk5hdHVyYWxlSGVscERlc2tAZ21haWwuY29tLjwvYT4iO3M6NDoidGltZSI7czo1OiIxMTo1OSI7czo4OiJpc0J1dHRvbiI7YjowO31pOjk7YTo0OntzOjY6InNlbmRlciI7czo0OiJ1c2VyIjtzOjQ6InRleHQiO3M6MTc6Ik9yZGVyIGluZm9ybWF0aW9uIjtzOjQ6InRpbWUiO3M6NToiMTE6NTkiO3M6ODoiaXNCdXR0b24iO2I6MDt9aToxMDthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjc0OiJZb3UgY2FuIHZpZXcgeW91ciBvcmRlcnMgPGEgaHJlZj0iL29yZGVycyI+aGVyZTwvYT4gaWYgeW91IHdlcmUgbG9nZ2VkIGluLiI7czo0OiJ0aW1lIjtzOjU6IjExOjU5IjtzOjg6ImlzQnV0dG9uIjtiOjA7fWk6MTE7YTo0OntzOjY6InNlbmRlciI7czozOiJib3QiO3M6NDoidGV4dCI7czoxNjA6IklmIG5vdCwgWW91IGNhbiByZWFjaCBvdXQgdG8gc3VwcG9ydCA8YSBocmVmPSIvY29udGFjdCI+aGVyZTwvYT4gb3Igc2VuZCBhbiBlbWFpbCB0byA8YSBocmVmPSJtYWlsdG86TmF0dXJhbGVIZWxwRGVza0BnbWFpbC5jb20iPk5hdHVyYWxlSGVscERlc2tAZ21haWwuY29tLjwvYT4iO3M6NDoidGltZSI7czo1OiIxMTo1OSI7czo4OiJpc0J1dHRvbiI7YjowO31pOjEyO2E6NDp7czo2OiJzZW5kZXIiO3M6NDoidXNlciI7czo0OiJ0ZXh0IjtzOjIzOiJQcm9kdWN0IFJlY29tbWVuZGF0aW9ucyI7czo0OiJ0aW1lIjtzOjU6IjExOjU5IjtzOjg6ImlzQnV0dG9uIjtiOjA7fWk6MTM7YTo0OntzOjY6InNlbmRlciI7czozOiJib3QiO3M6NDoidGV4dCI7czo3OToiWW91IGNhbiB2aWV3IGluZm9ybWF0aW9uIGFib3V0IG91ciBpbmdyZWRpZW50cyA8YSBocmVmPSIvaW5ncmVkaWVudHMiPmhlcmUuPC9hPiI7czo0OiJ0aW1lIjtzOjU6IjExOjU5IjtzOjg6ImlzQnV0dG9uIjtiOjA7fWk6MTQ7YTo0OntzOjY6InNlbmRlciI7czo0OiJ1c2VyIjtzOjQ6InRleHQiO3M6MTQ6IkFib3V0IE5hdHVyYWxlIjtzOjQ6InRpbWUiO3M6NToiMTE6NTkiO3M6ODoiaXNCdXR0b24iO2I6MDt9aToxNTthOjQ6e3M6Njoic2VuZGVyIjtzOjM6ImJvdCI7czo0OiJ0ZXh0IjtzOjE2NToiTmF0dXJhbGUgaXMgdGhlIHByZW1pZXIgZGVzdGluYXRpb24gZm9yIGVjb2ZyaWVuZGx5LCBuYXR1cmFsLCBhbmQgb3JnYW5pYyBoYWlyY2FyZSBwcm9kdWN0cy4gVG8gc2VlIG1vcmUgYWJvdXQgdXMsIHZpZXcgb3VyIGFib3V0IHVzIHBhZ2UgPGEgaHJlZj0iL2Fib3V0Ij5oZXJlLjwvYT4gIjtzOjQ6InRpbWUiO3M6NToiMTE6NTkiO3M6ODoiaXNCdXR0b24iO2I6MDt9fX0=', 1770897570),
('O1RxLxQquyDEIMAxyNOo4uDjZBDlaIrCfHttAwt5', NULL, '10.76.112.50', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoibndWTWlpZHhobTVIZVJXR09YWjBaRU5SdUFVZzJYYXlnWnVUdVRMUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1770906706),
('oazrdlV90Z5wIn3CFfme66jm5ib2De6kXykzITyY', 1, '10.76.249.3', 'Mozilla/5.0 (X11; Linux x86_64; rv:147.0) Gecko/20100101 Firefox/147.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOFhNbFZnc3ZLYTlQbnZzME1oYm5la0pNeHBHYXdLVXhYZWlhMU52aiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTc6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9pbmdyZWRpZW50cyI7czo1OiJyb3V0ZSI7czoxMjoiL2luZ3JlZGllbnRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjEyOiJjaGF0X2hpc3RvcnkiO2E6Mzp7aTowO2E6NDp7czo2OiJzZW5kZXIiO3M6MzoiYm90IjtzOjQ6InRleHQiO3M6NTQ6IldlbGNvbWUgdG8gTmF0dXJhbGUgU3VwcG9ydCEgSG93IG1heSBJIGhlbHAgeW91IHRvZGF5PyI7czo0OiJ0aW1lIjtzOjU6IjE0OjE2IjtzOjg6ImlzQnV0dG9uIjtiOjA7fWk6MTthOjQ6e3M6Njoic2VuZGVyIjtzOjQ6InVzZXIiO3M6NDoidGV4dCI7czoyMzoiaG93IGRvIGkgdmlldyBteSBvcmRlcnMiO3M6NDoidGltZSI7czo1OiIxNDoxNiI7czo4OiJpc0J1dHRvbiI7YjowO31pOjI7YTo0OntzOjY6InNlbmRlciI7czozOiJib3QiO3M6NDoidGV4dCI7czo5MzoiSSBhbSBoYXZpbmcgdHJvdWJsZSBjb25uZWN0aW5nIHJpZ2h0IG5vdy4gUGxlYXNlIGNvbnRhY3Qgc3VwcG9ydCA8YSBocmVmPSIvY29udGFjdCI+aGVyZTwvYT4uIjtzOjQ6InRpbWUiO3M6NToiMTQ6MTYiO3M6ODoiaXNCdXR0b24iO2I6MDt9fX0=', 1770906155),
('S6ZKIJZywGPIIZ39MoQJqVOo9aCPJwi86MvEj2BT', NULL, '10.76.189.123', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.5 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3AzY2szMmQybHJGdW5kcG9tMWQ1RlQ1N2oydkMzdXRsNzE2REpIQyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTY6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9wcm9kdWN0cy8xIjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1770905608);

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
(1, 'Test User', 'test@test.com', NULL, '$2y$12$NsHSLGwis02pq1WzT6MZIOKC6qpsGwQuaTuVh7oRaH25opzLfFt/C', 'SMSu7nt3qlfOhaU9tsJtGPe1sW166zpNBbHYU7FI8RmIlaBMyviDji4T10SW', '2025-10-21 18:33:32', '2025-10-21 18:33:32'),
(2, 'Ethan', '240090270@aston.ac.uk', NULL, '$2y$12$nSCXPsSoiOggti49.uwxLOcrXDGHKOE1Kkjl0f12aYnjUYhjuQV9u', 'OGfdE9sNiK9iG9ApeKwxij7nip3A0vhSOIha4QxzsQTEM108DCu9oSgTTELb', '2025-11-24 18:32:09', '2025-11-24 18:33:50'),
(3, 'ifza', 'ifza.1234@icloud.com', NULL, '$2y$12$2mgsNRobfpPUgPIxfb2U8.QBhL2dnZqu.kqRM4Yb3n6lymv16onHe', NULL, '2025-11-30 00:03:40', '2025-11-30 00:03:40'),
(4, 'Hezekiah Calub', '230159329@aston.ac.uk', NULL, '$2y$12$ZTQ0wtIvGG.PWFT144cE8eFpEE62ZAXlxjJhrrxFLlYHWLfIq666O', NULL, '2025-12-05 11:47:53', '2025-12-05 11:48:15'),
(5, 'Emma Smith', 'emmasmith@example.com', NULL, '$2y$12$r7qn6N2jZ4nePwG.KZjjJOEUbLgbFuPArpogrdD7.m8XjLR5/Nutq', NULL, '2026-01-26 15:53:46', '2026-01-26 15:53:46'),
(6, 'Kanban Default', 'asd@asd.sad', NULL, '$2y$12$UnVuf3pNrFA8VD4dtzgFP.uCunCUnXz457wTsFjTs9uUIKH7TQGR2', NULL, '2026-02-10 13:21:42', '2026-02-10 13:21:42');

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
-- Indexes for table `chat_steps`
--
ALTER TABLE `chat_steps`
  ADD PRIMARY KEY (`csid`);

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
-- Indexes for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  ADD PRIMARY KEY (`kbid`);

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
  MODIFY `cid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `caid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `e_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  MODIFY `kbid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `oiid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
