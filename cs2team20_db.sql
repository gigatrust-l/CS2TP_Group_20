-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2026 at 11:06 PM
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
('naturale-cache-&#039; /*!50000or*/ 1=1 --|88.170.43.205', 'i:1;', 1772127814),
('naturale-cache-&#039; /*!50000or*/ 1=1 --|88.170.43.205:timer', 'i:1772127814;', 1772127814),
('naturale-cache-&#039; /*!or*/ 1=1 --|88.170.43.205', 'i:1;', 1772127814),
('naturale-cache-&#039; /*!or*/ 1=1 --|88.170.43.205:timer', 'i:1772127814;', 1772127814),
('naturale-cache-&#039; and &#039;1&#039;=&#039;2&#039; --|88.170.43.205', 'i:1;', 1772127810),
('naturale-cache-&#039; and &#039;1&#039;=&#039;2&#039; --|88.170.43.205:timer', 'i:1772127810;', 1772127810),
('naturale-cache-&#039; like &#039;1|88.170.43.205', 'i:1;', 1772127815),
('naturale-cache-&#039; like &#039;1|88.170.43.205:timer', 'i:1772127815;', 1772127815),
('naturale-cache-&#039; not in (&#039;&#039;) --|88.170.43.205', 'i:1;', 1772127815),
('naturale-cache-&#039; not in (&#039;&#039;) --|88.170.43.205:timer', 'i:1772127815;', 1772127815),
('naturale-cache-&#039; or &#039;&#039;=&#039;|88.170.43.205', 'i:1;', 1772127811),
('naturale-cache-&#039; or &#039;&#039;=&#039;|88.170.43.205:timer', 'i:1772127811;', 1772127811),
('naturale-cache-&#039; or &#039;1&#039;%3d&#039;1&#039; --|88.170.43.205', 'i:1;', 1772127814),
('naturale-cache-&#039; or &#039;1&#039;%3d&#039;1&#039; --|88.170.43.205:timer', 'i:1772127814;', 1772127814),
('naturale-cache-&#039; or &#039;1&#039;=&#039;1&#039; --|88.170.43.205', 'i:2;', 1772127810),
('naturale-cache-&#039; or &#039;1&#039;=&#039;1&#039; --|88.170.43.205:timer', 'i:1772127810;', 1772127810),
('naturale-cache-&#039; or &#039;1&#039;=&#039;1&#039; #|88.170.43.205', 'i:1;', 1772127810),
('naturale-cache-&#039; or &#039;1&#039;=&#039;1&#039; #|88.170.43.205:timer', 'i:1772127810;', 1772127810),
('naturale-cache-&#039; or &#039;1&#039;=&#039;1&#039;/*|88.170.43.205', 'i:1;', 1772127812),
('naturale-cache-&#039; or &#039;1&#039;=&#039;1&#039;/*|88.170.43.205:timer', 'i:1772127812;', 1772127812),
('naturale-cache-&#039; or 1=1 --%00|88.170.43.205', 'i:1;', 1772127815),
('naturale-cache-&#039; or 1=1 --%00|88.170.43.205:timer', 'i:1772127815;', 1772127815),
('naturale-cache-&#039; or 1=1 --|88.170.43.205', 'i:2;', 1772127810),
('naturale-cache-&#039; or 1=1 --|88.170.43.205:timer', 'i:1772127810;', 1772127810),
('naturale-cache-&#039; or 1=1 #|88.170.43.205', 'i:1;', 1772127810),
('naturale-cache-&#039; or 1=1 #|88.170.43.205:timer', 'i:1772127810;', 1772127810),
('naturale-cache-&#039; or 1=1;--|88.170.43.205', 'i:1;', 1772127812),
('naturale-cache-&#039; or 1=1;--|88.170.43.205:timer', 'i:1772127812;', 1772127812),
('naturale-cache-&#039; union select null --|88.170.43.205', 'i:1;', 1772127815),
('naturale-cache-&#039; union select null --|88.170.43.205:timer', 'i:1772127815;', 1772127815),
('naturale-cache-&#039; union select null,null --|88.170.43.205', 'i:1;', 1772127815),
('naturale-cache-&#039; union select null,null --|88.170.43.205:timer', 'i:1772127815;', 1772127815),
('naturale-cache-&#039; union select null,null,null --|88.170.43.205', 'i:1;', 1772127816),
('naturale-cache-&#039; union select null,null,null --|88.170.43.205:timer', 'i:1772127816;', 1772127816),
('naturale-cache-&#039;) or (&#039;1&#039;=&#039;1&#039; --|88.170.43.205', 'i:1;', 1772127811),
('naturale-cache-&#039;) or (&#039;1&#039;=&#039;1&#039; --|88.170.43.205:timer', 'i:1772127811;', 1772127811),
('naturale-cache-&#039;) or (&#039;1&#039;=&#039;1&#039; #|88.170.43.205', 'i:1;', 1772127811),
('naturale-cache-&#039;) or (&#039;1&#039;=&#039;1&#039; #|88.170.43.205:timer', 'i:1772127811;', 1772127811),
('naturale-cache-&#039;) or 1=1;--|88.170.43.205', 'i:1;', 1772127813),
('naturale-cache-&#039;) or 1=1;--|88.170.43.205:timer', 'i:1772127813;', 1772127813),
('naturale-cache-&#039;/**/or/**/&#039;1&#039;=&#039;1&#039;/**/--|88.170.43.205', 'i:1;', 1772127813),
('naturale-cache-&#039;/**/or/**/&#039;1&#039;=&#039;1&#039;/**/--|88.170.43.205:timer', 'i:1772127813;', 1772127813),
('naturale-cache-&#039;/**/or/**/1=1--|88.170.43.205', 'i:1;', 1772127813),
('naturale-cache-&#039;/**/or/**/1=1--|88.170.43.205:timer', 'i:1772127813;', 1772127813),
('naturale-cache-02746bcc823e64268a390baa4a075bee', 'i:1;', 1772116096),
('naturale-cache-02746bcc823e64268a390baa4a075bee:timer', 'i:1772116096;', 1772116096),
('naturale-cache-065b1bad47a7c5cce5ff8c04e6a980d4', 'i:1;', 1772127812),
('naturale-cache-065b1bad47a7c5cce5ff8c04e6a980d4:timer', 'i:1772127812;', 1772127812),
('naturale-cache-06dce4a51750cf5340976c1aae17d9b9', 'i:1;', 1772127815),
('naturale-cache-06dce4a51750cf5340976c1aae17d9b9:timer', 'i:1772127815;', 1772127815),
('naturale-cache-0b0664be36adcf546dbef85b721bda18', 'i:1;', 1772725041),
('naturale-cache-0b0664be36adcf546dbef85b721bda18:timer', 'i:1772725041;', 1772725041),
('naturale-cache-240190961@aston.ac.uk|90.211.242.203', 'i:1;', 1772121128),
('naturale-cache-240190961@aston.ac.uk|90.211.242.203:timer', 'i:1772121128;', 1772121128),
('naturale-cache-2a42145c3e97e4fa33bfd1001577d242', 'i:2;', 1773071365),
('naturale-cache-2a42145c3e97e4fa33bfd1001577d242:timer', 'i:1773071365;', 1773071365),
('naturale-cache-3040589a5e88afa4ac510778b16bd1e6', 'i:1;', 1772127813),
('naturale-cache-3040589a5e88afa4ac510778b16bd1e6:timer', 'i:1772127813;', 1772127813),
('naturale-cache-3183c7fde7643f2a00112bdbc85ca495', 'i:1;', 1772127813),
('naturale-cache-3183c7fde7643f2a00112bdbc85ca495:timer', 'i:1772127813;', 1772127813),
('naturale-cache-32d31b796d5f92068d5d8dc218be4f53', 'i:1;', 1772127813),
('naturale-cache-32d31b796d5f92068d5d8dc218be4f53:timer', 'i:1772127813;', 1772127813),
('naturale-cache-3909d2e422a2ee97477bce01c499b9f5', 'i:1;', 1774215970),
('naturale-cache-3909d2e422a2ee97477bce01c499b9f5:timer', 'i:1774215970;', 1774215970),
('naturale-cache-3dae031a529e3124b44bfd269990b95d', 'i:2;', 1772127810),
('naturale-cache-3dae031a529e3124b44bfd269990b95d:timer', 'i:1772127810;', 1772127810),
('naturale-cache-441c8ed1c8c850c57ecbc511b8ae9843', 'i:1;', 1772127814),
('naturale-cache-441c8ed1c8c850c57ecbc511b8ae9843:timer', 'i:1772127814;', 1772127814),
('naturale-cache-4a8690ed9696d1d30e0a5c053f084b3b', 'i:1;', 1774209681),
('naturale-cache-4a8690ed9696d1d30e0a5c053f084b3b:timer', 'i:1774209681;', 1774209681),
('naturale-cache-4d2361ef502131c22b02267cf1e0e8a4', 'i:1;', 1774215994),
('naturale-cache-4d2361ef502131c22b02267cf1e0e8a4:timer', 'i:1774215994;', 1774215994),
('naturale-cache-53bd79f270fb9c3718bf7fd7df6606e3', 'i:1;', 1774218613),
('naturale-cache-53bd79f270fb9c3718bf7fd7df6606e3:timer', 'i:1774218613;', 1774218613),
('naturale-cache-55e84ac4605409a0d510e0c9aa8d11fb', 'i:1;', 1772127810),
('naturale-cache-55e84ac4605409a0d510e0c9aa8d11fb:timer', 'i:1772127810;', 1772127810),
('naturale-cache-58a529729abdfedf1f6a0f17c1ebdaf4', 'i:1;', 1772836527),
('naturale-cache-58a529729abdfedf1f6a0f17c1ebdaf4:timer', 'i:1772836527;', 1772836527),
('naturale-cache-5c532bc79d018dc9ac38283758c80d6f', 'i:1;', 1772127815),
('naturale-cache-5c532bc79d018dc9ac38283758c80d6f:timer', 'i:1772127815;', 1772127815),
('naturale-cache-5cb73e9308b7942fcb2bed29668c9e8e', 'i:1;', 1774209589),
('naturale-cache-5cb73e9308b7942fcb2bed29668c9e8e:timer', 'i:1774209589;', 1774209589),
('naturale-cache-5f0448203d901cad8fe0a10c4d09a204', 'i:1;', 1772127814),
('naturale-cache-5f0448203d901cad8fe0a10c4d09a204:timer', 'i:1772127814;', 1772127814),
('naturale-cache-5f27bf5f16b4ac417e73523f5e1b9088', 'i:1;', 1772127811),
('naturale-cache-5f27bf5f16b4ac417e73523f5e1b9088:timer', 'i:1772127811;', 1772127811),
('naturale-cache-62b0d96531422c2cbc2065104a8eaeef', 'i:1;', 1772127815),
('naturale-cache-62b0d96531422c2cbc2065104a8eaeef:timer', 'i:1772127815;', 1772127815),
('naturale-cache-670985cfc002fc4a9df5477c8e7a3509', 'i:1;', 1773858163),
('naturale-cache-670985cfc002fc4a9df5477c8e7a3509:timer', 'i:1773858163;', 1773858163),
('naturale-cache-7917f5b81a318b8ea79ef3669eb21cc0', 'i:1;', 1773931967),
('naturale-cache-7917f5b81a318b8ea79ef3669eb21cc0:timer', 'i:1773931967;', 1773931967),
('naturale-cache-7e40d15013de21fac558fa8c6115d6e2', 'i:1;', 1772127811),
('naturale-cache-7e40d15013de21fac558fa8c6115d6e2:timer', 'i:1772127811;', 1772127811),
('naturale-cache-8bad034f06425eb724f717c4c98cac56', 'i:1;', 1772127811),
('naturale-cache-8bad034f06425eb724f717c4c98cac56:timer', 'i:1772127811;', 1772127811),
('naturale-cache-985fbafc6095b8dfe53beb317b6b4a24', 'i:1;', 1772722849),
('naturale-cache-985fbafc6095b8dfe53beb317b6b4a24:timer', 'i:1772722849;', 1772722849),
('naturale-cache-9c3618e143cea32a9ce70f64b1989311', 'i:1;', 1772127811),
('naturale-cache-9c3618e143cea32a9ce70f64b1989311:timer', 'i:1772127811;', 1772127811),
('naturale-cache-a3d49062a9297f7d76b523e7fe166f5e', 'i:1;', 1772127812),
('naturale-cache-a3d49062a9297f7d76b523e7fe166f5e:timer', 'i:1772127812;', 1772127812),
('naturale-cache-aa@aa.co|86.164.209.175', 'i:1;', 1774209849),
('naturale-cache-aa@aa.co|86.164.209.175:timer', 'i:1774209849;', 1774209849),
('naturale-cache-abc34c66b29010570f43bc352d8d7297', 'i:1;', 1773932094),
('naturale-cache-abc34c66b29010570f43bc352d8d7297:timer', 'i:1773932094;', 1773932094),
('naturale-cache-admin&#039; --|88.170.43.205', 'i:1;', 1772127811),
('naturale-cache-admin&#039; --|88.170.43.205:timer', 'i:1772127811;', 1772127811),
('naturale-cache-admin&#039; #|88.170.43.205', 'i:1;', 1772127811),
('naturale-cache-admin&#039; #|88.170.43.205:timer', 'i:1772127811;', 1772127811),
('naturale-cache-admin&#039;;--|88.170.43.205', 'i:1;', 1772127813),
('naturale-cache-admin&#039;;--|88.170.43.205:timer', 'i:1772127813;', 1772127813),
('naturale-cache-admin&#039;/**/--|88.170.43.205', 'i:1;', 1772127813),
('naturale-cache-admin&#039;/**/--|88.170.43.205:timer', 'i:1772127813;', 1772127813),
('naturale-cache-admin&#039;/*|88.170.43.205', 'i:1;', 1772127812),
('naturale-cache-admin&#039;/*|88.170.43.205:timer', 'i:1772127812;', 1772127812),
('naturale-cache-admin&#039;%20--|88.170.43.205', 'i:1;', 1772127814),
('naturale-cache-admin&#039;%20--|88.170.43.205:timer', 'i:1772127814;', 1772127814),
('naturale-cache-afbac64d347a075e80dcd0cf328b81cf', 'i:1;', 1772127811),
('naturale-cache-afbac64d347a075e80dcd0cf328b81cf:timer', 'i:1772127811;', 1772127811),
('naturale-cache-aff0fa2525f7f73292d70f2c05cf71e6', 'i:1;', 1772127813),
('naturale-cache-aff0fa2525f7f73292d70f2c05cf71e6:timer', 'i:1772127813;', 1772127813),
('naturale-cache-asdkjh3kj4h|88.170.43.205', 'i:5;', 1772127809),
('naturale-cache-asdkjh3kj4h|88.170.43.205:timer', 'i:1772127809;', 1772127809),
('naturale-cache-b007992607fdec9093d6052651557bbf', 'i:1;', 1774209849),
('naturale-cache-b007992607fdec9093d6052651557bbf:timer', 'i:1774209849;', 1774209849),
('naturale-cache-b4b58a5afe3278dabd7637013ccb7f59', 'i:1;', 1773932183),
('naturale-cache-b4b58a5afe3278dabd7637013ccb7f59:timer', 'i:1773932183;', 1773932183),
('naturale-cache-b7fcad0e77ec4b8ff1568c4fc8735e3b', 'i:1;', 1772127815),
('naturale-cache-b7fcad0e77ec4b8ff1568c4fc8735e3b:timer', 'i:1772127815;', 1772127815),
('naturale-cache-bbf013bfc5312c2a96499bd5db0a996c', 'i:1;', 1772127812),
('naturale-cache-bbf013bfc5312c2a96499bd5db0a996c:timer', 'i:1772127812;', 1772127812),
('naturale-cache-bc17ef6596ac87cce9b2174e2deb03e8', 'i:2;', 1772127810),
('naturale-cache-bc17ef6596ac87cce9b2174e2deb03e8:timer', 'i:1772127810;', 1772127810),
('naturale-cache-bd0c712c1269deefa51ae8ab54c0b22f', 'i:1;', 1772107841),
('naturale-cache-bd0c712c1269deefa51ae8ab54c0b22f:timer', 'i:1772107841;', 1772107841),
('naturale-cache-c1738ad4ec778e88bcaf249c6175d644', 'i:1;', 1772127815),
('naturale-cache-c1738ad4ec778e88bcaf249c6175d644:timer', 'i:1772127815;', 1772127815),
('naturale-cache-c2b33abe1eb96735b8e2921476168241', 'i:1;', 1772127812),
('naturale-cache-c2b33abe1eb96735b8e2921476168241:timer', 'i:1772127812;', 1772127812),
('naturale-cache-c3eccf41effbbce9bcec9621d1757d95', 'i:1;', 1772127812),
('naturale-cache-c3eccf41effbbce9bcec9621d1757d95:timer', 'i:1772127812;', 1772127812),
('naturale-cache-c56bb9ed00e5604c72738f6c7014f399', 'i:1;', 1774211907),
('naturale-cache-c56bb9ed00e5604c72738f6c7014f399:timer', 'i:1774211907;', 1774211907),
('naturale-cache-c7fbd9f613a97a30a7c964f4d7218de4', 'i:1;', 1774216527),
('naturale-cache-c7fbd9f613a97a30a7c964f4d7218de4:timer', 'i:1774216527;', 1774216527),
('naturale-cache-ca302ac5aaba04d431e8857e9d1b840b', 'i:1;', 1772127811),
('naturale-cache-ca302ac5aaba04d431e8857e9d1b840b:timer', 'i:1772127811;', 1772127811),
('naturale-cache-cd050624f40871bd6be65bb124e6b3df', 'i:1;', 1773326662),
('naturale-cache-cd050624f40871bd6be65bb124e6b3df:timer', 'i:1773326662;', 1773326662),
('naturale-cache-ce11618f74d4748d3b92b912c5d43fa0', 'i:1;', 1773931939),
('naturale-cache-ce11618f74d4748d3b92b912c5d43fa0:timer', 'i:1773931939;', 1773931939),
('naturale-cache-d23fe656a557d0d7ddc1c3e76ce58c30', 'i:1;', 1772127814),
('naturale-cache-d23fe656a557d0d7ddc1c3e76ce58c30:timer', 'i:1772127814;', 1772127814),
('naturale-cache-d45916610686087a20905da22e8336f2', 'i:5;', 1772127809),
('naturale-cache-d45916610686087a20905da22e8336f2:timer', 'i:1772127809;', 1772127809),
('naturale-cache-df9aa23a08d93bf8f4b7b164ced84d60', 'i:1;', 1772127810),
('naturale-cache-df9aa23a08d93bf8f4b7b164ced84d60:timer', 'i:1772127810;', 1772127810),
('naturale-cache-e0176b6c56b91a38b95d8a88d4847e94', 'i:1;', 1772127810),
('naturale-cache-e0176b6c56b91a38b95d8a88d4847e94:timer', 'i:1772127810;', 1772127810),
('naturale-cache-e47b4bba6be4799e2d4c2a10e9c8d4b5', 'i:1;', 1772127814),
('naturale-cache-e47b4bba6be4799e2d4c2a10e9c8d4b5:timer', 'i:1772127814;', 1772127814),
('naturale-cache-eaa9501ae7545aec93f541088d11289e', 'i:1;', 1772127816),
('naturale-cache-eaa9501ae7545aec93f541088d11289e:timer', 'i:1772127816;', 1772127816),
('naturale-cache-eb8a742efb64447d5b7675ca3532d0c8', 'i:1;', 1772127813),
('naturale-cache-eb8a742efb64447d5b7675ca3532d0c8:timer', 'i:1772127813;', 1772127813),
('naturale-cache-eee10111ab16f9093b0b5b69fb8a171d', 'i:1;', 1772127809),
('naturale-cache-eee10111ab16f9093b0b5b69fb8a171d:timer', 'i:1772127809;', 1772127809),
('naturale-cache-fb96c52aef7191114632fb50691f421c', 'i:1;', 1772121128),
('naturale-cache-fb96c52aef7191114632fb50691f421c:timer', 'i:1772121128;', 1772121128),
('naturale-cache-fortify.2fa_codes.049b2e43779dda39459f88efe97be3cc', 'i:59093262;', 1772797943),
('naturale-cache-fortify.2fa_codes.2b69c3c5ef2733289540522571ce3eca', 'i:59110540;', 1773316281),
('naturale-cache-fortify.2fa_codes.2bdddc09d9c92d31b55d89fcef221720', 'i:59129002;', 1773870138),
('naturale-cache-fortify.2fa_codes.2e998ed7fb1e7736c17c570b9a314a68', 'i:59099304;', 1772979196),
('naturale-cache-fortify.2fa_codes.37781357e4707153478f32df56f12668', 'i:59094546;', 1772836449),
('naturale-cache-fortify.2fa_codes.4cc4f2e9c0633976cc0b42ee0af06813', 'i:59128977;', 1773869381),
('naturale-cache-fortify.2fa_codes.746a93f94a4288a7328933e9249b0383', 'i:59099090;', 1772972778),
('naturale-cache-fortify.2fa_codes.76ca953f369762cf49d8e64f0886aef8', 'i:59131069;', 1773932146),
('naturale-cache-fortify.2fa_codes.7970bd58ca39dd27820635d4a8c9b82f', 'i:59140531;', 1774215994),
('naturale-cache-fortify.2fa_codes.e54d7eb5bb5245aa112fb1a74f7b513d', 'i:59094548;', 1772836527),
('naturale-cache-q or 1=1 --|88.170.43.205', 'i:1;', 1772127812),
('naturale-cache-q or 1=1 --|88.170.43.205:timer', 'i:1772127812;', 1772127812),
('naturale-cache-q or q1q=q1q --|88.170.43.205', 'i:1;', 1772127812),
('naturale-cache-q or q1q=q1q --|88.170.43.205:timer', 'i:1772127812;', 1772127812),
('naturale-cache-q or qq=q|88.170.43.205', 'i:1;', 1772127812),
('naturale-cache-q or qq=q|88.170.43.205:timer', 'i:1772127812;', 1772127812),
('naturale-cache-samuel_dsouza@outlook.com|86.164.209.175', 'i:1;', 1774209589),
('naturale-cache-samuel_dsouza@outlook.com|86.164.209.175:timer', 'i:1774209589;', 1774209589),
('naturale-cache-test@example.com|86.166.253.99', 'i:1;', 1773858163),
('naturale-cache-test@example.com|86.166.253.99:timer', 'i:1773858163;', 1773858163),
('naturale-cache-test@test.commm|86.164.209.175', 'i:1;', 1774211907),
('naturale-cache-test@test.commm|86.164.209.175:timer', 'i:1774211907;', 1774211907),
('naturale-cache-testuser999|88.170.43.205', 'i:1;', 1772127809),
('naturale-cache-testuser999|88.170.43.205:timer', 'i:1772127809;', 1772127809);

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
  `c_email` text COLLATE utf8mb4_general_ci NOT NULL,
  `c_uid` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cid`, `c_name`, `c_email`, `c_uid`) VALUES
(1, 'Test User', 'test@test.com', 1),
(2, 'Ethan', '240090270@aston.ac.uk', 2),
(5, 'ifza', 'ifza.1234@icloud.com', 3),
(13, 'Hezekiah Calub', '230159329@aston.ac.uk', 4),
(18, 'Emma Smith', 'emmasmith@example.com', 5),
(19, 'Kanban Default', 'asd@asd.sad', 6),
(22, 'Headunit', 'headunitvan666@gmail.com', 7),
(23, 'Naturale Support', 'naturalehelpdesk@gmail.com', 9),
(27, 'a', 'aa@aa.co', NULL);

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
(6, 5, '123 Baker Street', 'Somewher', 'London', 'Greater London', 'L1 1LL', 'United Kingdon'),
(14, 1, '123 test lane', 'test', 'test', 'test', 'test', 'test'),
(15, 13, 'a', 'a', 'a', 'a', 'a', 'a'),
(16, 13, '123 test lane', '1', '11', '1', '1', '1'),
(17, 2, 'test', 'test', 'test', 'test', 'test', 'test'),
(18, 13, 'o', 'o', 'o', 'o', 'o', 'o'),
(23, 18, '1', 'Aston St', 'Birmingham', 'West Midlands', 'B4 7ET', 'United Kingdom'),
(24, 19, '69 Jot street', '69 Jot street', 'Jotville', 'jotopia', 'JO60 ORU', 'jotopia'),
(25, 1, 'sadsfsaf', 'safsasafsaddddddd', 'afsfsafsaf', 'safsafsafsaf', 'afsfsafasf', 'safsafsaf'),
(26, 22, 'a', 'a', 'a', 'a', 'a', 'a'),
(27, 23, 'Line1', 'Line2', 'City', 'County', 'Postcode', 'Country'),
(31, 27, 'a', 'a', 'a', 'a', 'a', 'a'),
(32, 27, '1', '1', '1', '1', '1', '1');

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
(5, 'Kanban Default', 'asd@asd.sad', 'Order Enquiry', 'Where is my order?', '2026-02-03 12:20:23', '2026-02-03 12:20:23'),
(6, 'test', 'test@test.com', 'Order Enquiry', 'adsafa', '2026-03-22 22:39:12', '2026-03-22 22:39:12');

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
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `latin` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `image_hero` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ingred_img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ingred_comment` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `before_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `after_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`, `slug`, `latin`, `description`, `image_hero`, `ingred_img`, `ingred_comment`, `before_image`, `after_image`) VALUES
(1, 'Avocado Extract', 'avocado-extract', 'persea gratissima', 'At Naturale, we believe that avocado extract is an excellent ingredient for treating damaged and dry hair. The combination of vitamins, minerals, fatty acids (such as oleic and linolenic acids) provide a deep hydration that repairs dry, broken and damaged hair. Avocado extract nourishes from the roots to the cuticles of the hair, restoring its softness and strength. It works as a natural barrier that protects the hair from heat, chemicals or environmental stress.\r\n\r\nWe offer a range of avocado-extract based products tailored to perfection to help our customers nourish their strands, making them shiny, soft, well-hydrated and easy to style', 'media/media_webp/ingredients/avocadoExtract.webp', 'media/media_webp/ingredients/avocado.webp', 'Deep moisture and restoration', 'before-avocado', 'after-avocado'),
(2, 'Shea Butter', 'shea-butter', 'vitellaria paradoxa', 'At Naturale, we choose shea butter as one of our main ingredients because of its many nourishing properties. Shea butter deeply moisturises and defines curls. It seals hydration, provides strength to the hair strands, and reduces frizz. Its hight vitamin A and vitamin E contents helps restore the hair elasticity, making the hair softer, bouncier and more manageable.\r\n\r\nThese characteristics make shea butter the best ingredient for curly hair. At Naturale, we provide the perfect complete routine products for curly hair, crafted to enhance hair definition, hydrate and maintain curl’s health.', 'media/media_webp/ingredients/sheaButter.webp', 'media/media_webp/ingredients/shea.webp', 'Intense hydration and frizz control', 'before-shea', 'after-shea'),
(3, 'Pomegranate Seed Oil', 'pomegranate-oil', 'punica granatum', 'At Naturale, we choose pomegranate seed oil as one of our main ingredients because of its antioxidant properties. It strengthens the hair and provides colour-protecting benefits. This oil has a high concentration of polyphenols that prevent colour fading by acting as a hair shield from UV radiation, free-radicals, and environmental stress. It is a lightweight oil that strengthens the hair fibre, enhances the colour vibration, restores shine, and does not leave any greasy feeling.\r\n\r\nAll together, these qualities make pomegranate seed oil ideal for dyed or chemically treated hair. Naturale offers a range of products for the kind of hair that needs protection and luminosity.', 'media/media_webp/ingredients/pomegranateOil.webp', 'media/media_webp/ingredients/pomegranate.webp', 'Hair strengthening and shine enhancement', 'before-pomegranate', 'after-pomegranate'),
(4, 'Tea Tree Oil', 'tea-tree-oil', 'melaleuca alternifolia', 'At Naturale, we selected tea tree oil to be one of our main ingredients. A very well known oil for its powerful antibacterial and purifying properties. Tea tree oil makes sure to keep the scalp clean and balanced, reducing the product buildup, fighting dandruff, and soothing irritation. Perfect for those with an itchy scalp who need a refreshing detox to give a healthy environment to their scalp.\r\n\r\nWe offer the best products to keep a healthy clean scalp, a complete routine to deeply cleanse and revitalise our customers scalp.', 'media/media_webp/ingredients/teaTreeOil.webp', 'media/media_webp/ingredients/teatree.webp', 'Scalp soothing and dandruff reduction', 'before-tea-tree', 'after-tea-tree'),
(5, 'Coconut Oil', 'coconut-oil', 'cocos nucifera', 'At Naturale, we choose coconut oil as one of our main ingredients because of its ability to penetrate the hair fibre providing it with strength. It is a lightweight oil that smooths the cuticles and reduces frizz which improves the hair texture overall, leaving a smooth and silky hair without making it greasy. Coconut oil also supports the scalp health, protecting the hair against daily damage, breakage and dryness.\r\n\r\nThese benefits make coconut oil a perfect match for those with straight hair, and here we offer a range of products specially suited for those who want to give their hair the softness, smoothness, and long-lasting shine it needs.', 'media/media_webp/ingredients/coconutOil.webp', 'media/media_webp/ingredients/coconut.webp', 'Hair nourishment and hair breakage prevention', 'before-coconut', 'after-coconut');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_product`
--

CREATE TABLE `ingredient_product` (
  `id` int NOT NULL,
  `ingredient_id` int NOT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredient_product`
--

INSERT INTO `ingredient_product` (`id`, `ingredient_id`, `product_id`) VALUES
(1, 1, 9),
(2, 1, 14),
(3, 1, 19),
(4, 1, 4),
(5, 2, 6),
(6, 2, 11),
(7, 2, 16),
(8, 2, 1),
(9, 3, 10),
(10, 3, 15),
(11, 3, 20),
(12, 3, 5),
(13, 4, 8),
(14, 4, 13),
(15, 4, 18),
(16, 4, 3),
(17, 5, 7),
(18, 5, 12),
(19, 5, 17),
(20, 5, 2);

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
(5, 'orders, order, view order', 'You can view your order if logged in https://cs2team20.cs2410-web01pvm.aston.ac.uk/orders. If not logged in at time of order contact support https://cs2team20.cs2410-web01pvm.aston.ac.uk/contact'),
(6, 'basket, cart', 'You can view your cart https://cs2team20.cs2410-web01pvm.aston.ac.uk/cart. ');

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
  `o_price` double NOT NULL,
  `o_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `o_cid`, `o_address`, `o_status`, `o_price`, `o_timestamp`) VALUES
(27, 1, 1, 'cancelled', 17.98, '2026-02-16 22:42:34'),
(28, 5, 6, 'Processing', 8.99, '2026-02-16 22:42:34'),
(29, 1, 1, 'Processing', 17.98, '2026-02-16 22:42:34'),
(31, 5, 6, 'Processing', 17.98, '2026-02-16 22:42:34'),
(32, 1, 1, 'Processing', 8.99, '2026-02-16 22:42:34'),
(33, 1, 1, 'Processing', 413.54, '2026-02-16 22:42:34'),
(34, 1, 1, 'Processing', 26.97, '2026-02-16 22:42:34'),
(36, 1, 1, 'Processing', 5.99, '2026-02-16 22:42:34'),
(49, 1, 1, 'Processing', 8.99, '2026-02-16 22:42:34'),
(50, 1, 1, 'Processing', 11.98, '2026-02-16 22:42:34'),
(52, 1, 1, 'Processing', 8.99, '2026-02-16 22:42:34'),
(55, 2, 17, 'refund requested', 26.97, '2026-02-16 22:42:34'),
(57, 2, 17, 'Processing', 26.97, '2026-02-16 22:42:34'),
(60, 1, 1, 'Processing', 98.89, '2026-02-16 22:42:34'),
(61, 1, 1, 'Processing', 89.9, '2026-02-16 22:42:34'),
(64, 18, 23, 'Processing', 8.99, '2026-02-16 22:42:34'),
(65, 19, 24, 'Processing', 5.99, '2026-02-16 22:42:34'),
(66, 1, 1, 'Processing', 8.99, '2026-02-16 22:42:34'),
(67, 1, 14, 'Processing', 8.99, '2026-02-16 22:43:06'),
(68, 1, 1, 'refund requested', 23.97, '2026-03-07 16:54:59'),
(69, 2, 17, 'Processing', 8.99, '2026-03-08 12:25:33'),
(70, 2, 17, 'Processing', 13.98, '2026-03-08 12:27:03'),
(71, 2, 17, 'Processing', 4.99, '2026-03-08 12:33:25'),
(72, 2, 17, 'Processing', 4.99, '2026-03-08 13:14:48'),
(73, 2, 17, 'Processing', 4.99, '2026-03-08 13:16:59'),
(74, 2, 17, 'Processing', 4.99, '2026-03-08 13:22:02'),
(75, 1, 1, 'Processing', 6.99, '2026-03-08 14:11:43'),
(76, 2, 17, 'cancelled', 13.98, '2026-03-08 14:12:28'),
(77, 2, 17, 'cancelled', 13.98, '2026-03-08 18:49:32'),
(78, 2, 17, 'cancelled', 11.98, '2026-03-08 19:00:45'),
(79, 2, 17, 'cancelled', 13.98, '2026-03-08 19:03:08'),
(80, 1, 25, 'Processing', 5.99, '2026-03-12 14:42:05'),
(81, 22, 26, 'cancelled', 13.98, '2026-03-17 22:38:01'),
(82, 2, 17, 'cancelled', 13.98, '2026-03-18 21:28:54'),
(83, 2, 17, 'Processing', 13.98, '2026-03-19 15:08:10'),
(85, 2, 17, 'Processing', 4.99, '2026-03-19 15:28:31'),
(86, 23, 27, 'Processing', 8.99, '2026-03-19 15:31:15'),
(87, 23, 27, 'Processing', 6.99, '2026-03-19 15:32:36'),
(91, 27, 31, 'Processing', 13.98, '2026-03-21 21:27:09'),
(92, 1, 2, 'Processing', 8.99, '2026-03-21 21:29:35'),
(93, 27, 31, 'Processing', 13.98, '2026-03-22 21:26:18'),
(94, 27, 32, 'Processing', 13.98, '2026-03-22 21:32:48'),
(95, 27, 32, 'Processing', 13.98, '2026-03-22 21:33:47'),
(96, 2, 17, 'Processing', 11.98, '2026-03-22 21:45:57');

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
(28, 31, 5, 2, 8.99),
(29, 32, 1, 1, 8.99),
(30, 33, 3, 46, 8.99),
(31, 34, 1, 3, 8.99),
(33, 36, 10, 1, 5.99),
(38, 49, 4, 1, 8.99),
(39, 50, 10, 2, 5.99),
(41, 52, 1, 1, 8.99),
(44, 55, 17, 3, 8.99),
(46, 57, 5, 3, 8.99),
(50, 60, 2, 11, 8.99),
(51, 61, 2, 10, 8.99),
(54, 64, 1, 1, 8.99),
(55, 65, 10, 1, 5.99),
(56, 66, 1, 1, 8.99),
(57, 67, 16, 1, 8.99),
(58, 68, 2, 2, 8.99),
(59, 68, 10, 1, 5.99),
(60, 69, 1, 1, 8.99),
(61, 70, 0, 1, 4.99),
(62, 70, 0, 1, 4.99),
(63, 71, 0, 1, 4.99),
(64, 72, 0, 1, 4.99),
(65, 73, 0, 1, 4.99),
(66, 74, 0, 1, 4.99),
(67, 75, 15, 1, 6.99),
(68, 76, 16, 1, 8.99),
(69, 76, 0, 1, 4.99),
(70, 77, 1, 1, 8.99),
(71, 77, 0, 1, 4.99),
(72, 78, 15, 1, 6.99),
(73, 78, 0, 1, 4.99),
(74, 79, 1, 1, 8.99),
(75, 79, 0, 1, 4.99),
(76, 80, 9, 1, 5.99),
(77, 81, 1, 1, 8.99),
(78, 81, 0, 1, 4.99),
(79, 82, 1, 1, 8.99),
(80, 82, 0, 1, 4.99),
(81, 83, 1, 1, 8.99),
(82, 83, 0, 1, 4.99),
(85, 85, 0, 1, 4.99),
(86, 86, 1, 1, 8.99),
(87, 87, 12, 1, 6.99),
(93, 91, 1, 1, 8.99),
(94, 91, 0, 1, 4.99),
(95, 92, 1, 1, 8.99),
(96, 93, 1, 1, 8.99),
(97, 93, 0, 1, 4.99),
(98, 94, 1, 1, 8.99),
(99, 94, 0, 1, 4.99),
(100, 95, 1, 1, 8.99),
(101, 95, 0, 1, 4.99),
(102, 96, 12, 1, 6.99),
(103, 96, 0, 1, 4.99);

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
  `p_feature` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `p_ingredients` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `p_instructions` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `p_volume` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `p_name`, `p_description`, `p_price`, `p_image`, `p_stock`, `p_category`, `p_feature`, `p_ingredients`, `p_instructions`, `p_volume`) VALUES
(0, 'Shipping', 'Next working day delivery on orders before 12pm', '4.99', '', 2147483628, 'shipping', '', NULL, NULL, NULL),
(1, 'Curl Bloom Nourishing Mask', 'A deeply hydrating curl-care mask designed to restore softness, enhance natural curl patterns, and lock in long-lasting moisture. It revitalizes dry or fatigued curls while boosting definition and reducing frizz.', '8.99', 'media/media_webp/products/product_1.webp', 27, 'Hair Masks', 'Shea Butter', 'Shea Butter, Aloe Vera, Coconut Oil, Water', 'Apply to clean damp hair. Leave 10 minutes, then rinse.', 200),
(2, 'Silk Flow Smoothing Mask', 'A rich, smoothing treatment that helps soften rough texture, tame frizz, and enhance natural shine. Ideal for straight or wavy hair needing extra silkiness and manageability.', '8.99', 'media/media_webp/products/product_2.webp', 4, 'Hair Masks', 'Coconut Oil', 'Coconut Oil, Vitamin E, Water, Glycerin', 'Apply to damp hair. Leave 10 minutes and rinse.', 200),
(3, 'Pure Roots Scalp Detox Mask', 'A purifying mask formulated to cleanse buildup, rebalance the scalp, and help reduce dandruff. It leaves the scalp feeling refreshed, soothed, and invigorated.', '8.99', 'media/media_webp/products/product_3.webp', 0, 'Hair Masks', 'Tea Tree Oil', 'Tea Tree Oil, Peppermint Extract, Aloe Vera, Water', 'Massage into scalp. Leave 5–7 minutes. Rinse well.', 200),
(4, 'Oasis Quench Repair Mask', 'An intensive moisture-restoring mask designed to treat dry, brittle hair. It helps repair visible damage, improve softness, and restore elasticity for healthier-looking strands.', '8.99', 'media/media_webp/products/product_4.webp', 0, 'Hair Masks', 'Avocado Extract', 'Apply mid-lengths to ends. Leave 10 minutes. Rinse.', 'An intensive moisture-restoring mask designed to treat dry, brittle hair. It helps repair visible damage, improve softness, and restore elasticity for healthier-looking strands.', 200),
(5, 'Chromaglow Color Care Mask', 'A protective antioxidant-rich mask that nourishes color-treated hair, helping maintain vibrancy and shine. It shields strands from fading while restoring softness and smoothness.', '8.99', 'media/media_webp/products/product_5.webp', 44, 'Hair Masks', 'Pomegranate Seed Oil', 'Pomegranate Seed Oil, Antioxidants, Water, Glycerin', 'Apply evenly after shampoo. Leave 5–8 minutes. Rinse.', 200),
(6, 'Curl Revival Shampoo', 'Enhances natural curls and promotes curl definition. It does not remove natural oils,\r\ntaming hair frizz while providing deep hydration. Sulfate free. No parabens.', '5.99', 'media/media_webp/products/product_6.webp', 49, 'Shampoo', 'Shea Butter', 'Shea butter, Aloe Vera, Glycerin, Hibiscus Extract, Water', 'Wet the hair and scalp with water. Apply the desired amount of shampoo into the\r\nscalp, massage it evenly and let it sit for 3-4 minutes. Then rinse thoroughly with water. Repeat if\r\nnecessary.', 550),
(7, 'Luminous Sleek Shampoo', 'Parfum and sulfate free shampoo. Softens straight hair and smooths cuticles\r\nleaving a shiny glossy hair. No parabens.', '5.99', 'media/media_webp/products/product_7.webp', 49, 'Shampoo', 'Coconut Oil', 'Coconut Oil, Vitamin K and B, Castor Oil, Water, and Glycerin', 'Wet the hair and scalp with water. Apply the desired amount of shampoo into the\r\nscalp, massage it evenly and let it sit for 3-4 minutes. Then rinse thoroughly with water. Repeat if\r\nnecessary.', 550),
(8, 'Green Balance Detox Shampoo', 'Detoxification and purifying shampoo. Restores scalp balance by cleansing product\r\nbuildup and dandruff. Sulfate free. No parabens.', '5.99', 'media/media_webp/products/product_8.webp', 47, 'Shampoo', 'Tea Tree Oil', 'Tea Tree Oil, Aloe Vera, Water, Peppermint Extract, Vitamin E, Glycerin', 'Wet the hair and scalp with water. Apply the desired amount of shampoo into the\r\nscalp, massage it evenly and let it sit for 3-4 minutes. Then rinse thoroughly with water. Repeat if\r\nnecessary.', 550),
(9, 'Desert Dew Hydrating Shampoo', 'entle hydrating shampoo. Provides deep moisture for silky shinny hair. Sulfate free. No parabens.', '5.99', 'media/media_webp/products/product_9.webp', 48, 'Shampoo', 'Avocado Extract ', 'Avocado Extract, Water, Black Seed Oil, Jojoba Oil, Glycerin', 'Wet the hair and scalp with water. Apply the desired amount of shampoo into the\r\nscalp, massage it evenly and let it sit for 3-4 minutes. Then rinse thoroughly with water. Repeat if\r\nnecessary.', 550),
(10, 'Color Haven Repair Shampoo', 'Colour protecting shampoo, enhances colour vibration, restores shine and\r\nstrengthens hair fibres. Sulfate free. No parabens.', '5.99', 'media/media_webp/products/product_10.webp', 44, 'Shampoo', 'Pomegranate Seed Oil', 'Pomegranate Seed Oil, Polyphenols, Vitamin C, Vitamin E, Glycerin, Water', 'Wet the hair and scalp with water. Apply the desired amount of shampoo into the\r\nscalp, massage it evenly and let it sit for 3-4 minutes. Then rinse thoroughly with water. Repeat if\r\nnecessary.', 550),
(11, 'Velvet Spiral Conditioner', 'Softens, adds bounce, hydrates, and defines curls. Sulfate free. No parabens.', '6.99', 'media/media_webp/products/product_11.webp', 49, 'Conditioner', 'Shea Butter', 'Shea butter, Aloe Vera, Glycerin, Hibiscus Extract, Water', 'Take the desired amount of product and apply to wet hair after shampooing. Leave for 5\r\nminutes. Rinse thoroughly with water.', 550),
(12, 'Glass Veil Conditioner', 'Light conditioner. Provides mirror like shine to straight hair. Smooths the cuticles\r\nand reduces frizz. Sulfate free. No parabens.', '6.99', 'media/media_webp/products/product_12.webp', 45, 'Conditioner', 'Coconut Oil', 'Coconut Oil, Vitamin E, Vitamin A, Water, Glycerin, Aloe Vera', 'Take the desired amount of product and apply to wet hair after shampooing. Leave for 5\r\nminutes. Rinse thoroughly with water.', 550),
(13, 'Calm Scalp Conditioner', 'Detox conditioner. Refreshes scalp and prevents irritation. Sulfate free. No\r\nparabens.', '6.99', 'media/media_webp/products/product_13.webp', 49, 'Conditioner', 'Tea Tree Oil', 'Tea Tree Oil, Aloe Vera, Peppermint Extract, Vitamin C, Water', 'Take the desired amount of product and apply to wet hair after shampooing. Leave for 5\r\nminutes. Rinse thoroughly with water', 550),
(14, 'Moisture Bloom Conditioner', 'Deep hydration and moisture conditioner. Repairs split and dry ends, prevents\r\nbreakage and restores softness. Sulfate free. No parabens.', '6.99', 'media/media_webp/products/product_14.webp', 49, 'Conditioner', 'Avocado Extract', 'Avocado Extract, Water, Black Seed Oil, Jojoba Oil, Glycerin', 'Take the desired amount of product and apply to wet hair after shampooing. Leave for 5\r\nminutes. Rinse thoroughly with water.', 550),
(15, 'Radiant Restore Conditioner', 'Colour protecting conditioner. Restores colour vibration, adds smoothness and\r\nshine to colour damaged hair. Sulfate free. No parabens.', '6.99', 'media/media_webp/products/product_15.webp', 47, 'Conditioner', 'Pomegranate Seed Oil', 'Pomegranate Seed Oil, Polyphenols, Vitamin C, Vitamin E, Glycerin, Water', 'Take the desired amount of product and apply to wet hair after shampooing. Leave for 5\r\nminutes. Rinse thoroughly with water.', 550),
(16, 'Curl Essence Leave-In Cream', 'A rich yet lightweight leave-in cream that defines curls, reduces frizz, and adds softness without creating buildup. Perfect for everyday curl styling and nourishment.', '8.99', 'media/media_webp/products/product_16.webp', 47, 'Leave-In Conditioner', 'Shea Butter', 'Shea Butter, Aloe Vera, Coconut Oil, Water, Glycerin', 'Apply to damp curls and distribute evenly.', 400),
(17, 'Silk Glide Leave-In Spray', 'A smoothing leave-in spray that tames frizz, enhances manageability, and leaves hair sleek and shiny. Ideal for quick styling and daily touchups.', '8.99', 'media/media_webp/products/product_17.webp', 46, 'Leave-In Conditioner', 'Coconut Oil', 'Coconut Oil, Aloe Vera, Water, Glycerin, Vitamin E', 'Apply to damp curls and distribute evenly.', 400),
(18, 'Root Relief Leave-In Tonic', 'A refreshing scalp tonic that cools, soothes, and hydrates the scalp. It promotes a healthy environment for growth while adding lightweight moisture.', '8.99', 'media/media_webp/products/product_18.webp', 49, 'Leave-In Conditioner', 'Tea Tree Oil', 'Tea Tree Oil, Peppermint Extract, Aloe Vera, Water', 'Spray directly onto scalp. Do not rinse.', 400),
(19, 'Hydra Repair Leave-In Mist', 'A hydrating mist that strengthens and revitalizes dry hair. It enhances softness, helps prevent breakage, and provides instant moisture throughout the day.', '8.99', 'media/media_webp/products/product_19.webp', 49, 'Leave-In Conditioner', 'Avocado Extract', 'Avocado Extract, Jojoba Oil, Water, Glycerin', 'Spray onto hair and leave in.', 400),
(20, 'Color Shield Leave-In Spray', 'A protective leave-in formula designed to maintain color vibrancy, defend against fading, and add a radiant glossy finish to color-treated hair.', '8.99', 'media/media_webp/products/product_20.webp', 49, 'Leave-In Conditioner', 'Pomegranate Seed Oil', 'Pomegranate Seed Oil, Vitamin E, Water, Glycerin', 'Mist evenly over hair. Leave in.', 400),
(21, 'Soft Curl Diffuser', 'A flexible diffuser that enhances natural curls, reduces frizz, and minimizes heat damage. It distributes airflow evenly for defined, voluminous curl results.', '4.99', 'media/media_webp/products/product_21.webp', 49, 'Hair Accessory', '', NULL, NULL, NULL),
(22, 'Gloss Paddle Brush', 'A smoothing paddle brush crafted to detangle, reduce breakage, and create sleek, polished styles. Ideal for medium to long straight or wavy hair.', '4.50', 'media/media_webp/products/product_22.webp', 49, 'Hair Accessory', '', NULL, NULL, NULL),
(23, 'Scalp Therapy Massager', 'A comfortable handheld massager that boosts scalp circulation, reduces tension, and helps support healthier hair growth when used regularly.', '4.99', 'media/media_webp/products/product_23.webp', 49, 'Hair Accessory', '', NULL, NULL, NULL),
(24, 'Silk Pillow Scrunchies', 'Ultra-soft silk scrunchies designed to prevent breakage, reduce frizz, and help hair retain moisture overnight. Gentle on all hair types.', '6.99', 'media/media_webp/products/product_24.webp', 49, 'Hair Accessory', '', NULL, NULL, NULL),
(25, 'Heat Shield Comb Set', 'A durable heat-resistant comb set ideal for styling with hot tools. Helps protect hair from damage while ensuring smooth, controlled styling.', '5.00', 'media/media_webp/products/product_25.webp', 49, 'Hair Accessory', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `rid` int NOT NULL,
  `r_cid` int NOT NULL,
  `r_pid` int NOT NULL,
  `r_rating` int NOT NULL,
  `r_anonymous` tinyint(1) NOT NULL DEFAULT '0',
  `r_title` text COLLATE utf8mb4_general_ci NOT NULL,
  `r_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `r_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `r_approved` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`rid`, `r_cid`, `r_pid`, `r_rating`, `r_anonymous`, `r_title`, `r_description`, `r_image`, `r_approved`) VALUES
(1, 1, 1, 5, 0, 'Best Product Ever', 'Yeah uh so I think this is great, like the greatest product ever, I never though I would find something this good but I did.', NULL, 1),
(2, 13, 1, 2, 1, 'Its ok i guess', 'I dont get all the hype, i am still bald.', NULL, 1),
(5, 22, 1, 4, 1, 'Really happy with this', 'Took a little while to see results but overall I am pleased with my purchase. Would buy again.', NULL, 1),
(6, 22, 1, 3, 1, 'Decent, not amazing', 'Does what it says on the tin. Nothing extraordinary but it gets the job done.', NULL, 1),
(7, 22, 1, 1, 1, 'Not for me', 'Tried it for two weeks and saw no difference whatsoever. Very disappointed.', NULL, 1),
(8, 22, 2, 5, 1, 'Absolutely love it', 'I was skeptical at first but this completely won me over. Cannot imagine going without it now.', NULL, 1),
(9, 22, 2, 4, 1, 'Great value', 'Really good quality for the price. Fast delivery too which was a nice bonus.', NULL, 1),
(10, 22, 3, 2, 1, 'A bit underwhelming', 'Expected more based on the description. It works but barely meets expectations.', NULL, 1),
(11, 22, 4, 5, 1, 'Exceeded expectations', 'I bought this on a whim and it turned out to be one of the best purchases I have made this year.', NULL, 1),
(12, 22, 4, 5, 1, 'Outstanding quality', 'The quality is top notch. You can really tell a lot of care went into making this. Highly recommend.', NULL, 1),
(13, 22, 4, 4, 1, 'Very satisfied', 'Works exactly as described. Arrived quickly and well packaged. Will definitely order again.', NULL, 1),
(14, 22, 4, 3, 1, 'It is alright', 'Not bad, not great. Does the job but I am not sure I would rush to repurchase.', NULL, 1),
(15, 22, 5, 1, 1, 'Waste of money', 'Genuinely cannot believe I spent money on this. Returned it immediately. Save your cash.', NULL, 1),
(16, 22, 5, 2, 1, 'Not impressed', 'I had high hopes but this fell short. The quality is not great and it feels a bit cheap.', NULL, 1),
(17, 22, 6, 5, 1, 'Perfect in every way', 'From the packaging to the product itself, everything about this is excellent. Five stars without hesitation.', NULL, 1),
(18, 22, 6, 4, 1, 'Really good', 'Solid product, does exactly what it promises. I have already recommended it to a few friends.', NULL, 1),
(19, 22, 6, 3, 1, 'Average experience', 'Nothing special but nothing terrible either. Middle of the road for me.', NULL, 1),
(20, 22, 7, 5, 1, 'Could not ask for more', 'Genuinely impressed. Does everything I needed and more. Delivery was fast and it arrived in great condition.', NULL, 1),
(21, 22, 8, 2, 1, 'Needs improvement', 'There are some good ideas here but the execution is lacking. Hopefully they improve it in future.', NULL, 1),
(22, 22, 8, 3, 1, 'Okay for the price', 'You get what you pay for I suppose. It is functional but do not expect miracles.', NULL, 1),
(23, 22, 8, 4, 1, 'Pleasantly surprised', 'Was not sure what to expect but this turned out to be a solid buy. Happy with it overall.', NULL, 1),
(24, 22, 9, 5, 1, 'Brilliant, simple as that', 'I rarely leave reviews but this deserved one. Just brilliant. Will be buying more from this brand.', NULL, 1),
(25, 22, 9, 4, 1, 'Really solid', 'Good all round. Nothing to complain about and plenty to be happy with. Recommended.', NULL, 1),
(26, 22, 10, 1, 1, 'Terrible experience', 'This did nothing for me. I followed all the instructions and got zero results. Very frustrating.', NULL, 1),
(27, 22, 11, 3, 1, 'Middle of the road', 'It does what it claims but I would not say it blew me away. Fine for the price.', NULL, 1),
(28, 22, 11, 4, 1, 'Good purchase', 'Happy with this overall. It arrived promptly and works as expected. Would recommend.', NULL, 1),
(29, 22, 11, 5, 1, 'Genuinely great', 'This is exactly what I was looking for. Works perfectly and the quality is excellent.', NULL, 1),
(30, 22, 11, 2, 1, 'Not what I hoped for', 'A little underwhelming honestly. I expected better based on the reviews but it let me down.', NULL, 1),
(31, 22, 12, 4, 1, 'Very happy', 'Does the job and does it well. Good quality and arrived in great condition. No complaints.', NULL, 1),
(32, 22, 12, 5, 1, 'Love it', 'This is fantastic. I use it all the time now. Best thing I have bought in a while.', NULL, 1),
(33, 22, 13, 3, 1, 'It is fine', 'Not exceptional but perfectly usable. I would consider buying it again if I needed to.', NULL, 1),
(34, 22, 14, 1, 1, 'Avoid this', 'Stopped working very quickly and customer service was unhelpful. Would not recommend to anyone.', NULL, 1),
(35, 22, 14, 2, 1, 'Disappointing', 'Looked promising but did not live up to the hype at all. Would not buy again.', NULL, 1),
(36, 22, 14, 3, 1, 'Serviceable', 'It works well enough but there are probably better options out there. Reasonable for the cost though.', NULL, 1),
(37, 22, 15, 5, 1, 'Highly recommend', 'Absolutely worth every penny. I have tried similar things before and this is by far the best.', NULL, 1),
(38, 22, 15, 4, 1, 'Very good indeed', 'Impressed with the quality. Everything about it feels well made. Delivery was quick too.', NULL, 1),
(39, 22, 16, 2, 1, 'Left me wanting more', 'I wanted to love this but it just did not perform the way I hoped. A bit of a letdown.', NULL, 1),
(40, 22, 17, 5, 1, 'Simply the best', 'I have bought a lot of products like this and this one stands head and shoulders above the rest.', NULL, 1),
(41, 22, 17, 5, 1, 'Cannot fault it', 'Every aspect of this is excellent. Would give six stars if I could. Genuinely delighted with it.', NULL, 1),
(42, 22, 17, 4, 1, 'Really good stuff', 'Solid quality, great value. I will definitely be purchasing again. Would recommend to friends and family.', NULL, 1),
(43, 22, 17, 3, 1, 'Decent enough', 'Does what it says. Nothing groundbreaking but it is reliable and I have no major complaints.', NULL, 1),
(44, 22, 17, 1, 1, 'Not worth it', 'Really did not work for me at all. Would not purchase again. Disappointed given the price.', NULL, 1),
(45, 22, 18, 4, 1, 'Good buy', 'Happy with this purchase. It works well and feels like good quality. Fast shipping too.', NULL, 1),
(46, 22, 18, 3, 1, 'Okay overall', 'It is a reasonable product. Not life-changing but does what it needs to. Fair value I think.', NULL, 1),
(47, 22, 19, 5, 1, 'Absolutely fantastic', 'I cannot speak highly enough of this. It works brilliantly and I noticed a difference straight away.', NULL, 1),
(48, 22, 20, 2, 1, 'Would not buy again', 'Just did not do it for me. Felt a bit gimmicky to be honest. Others might like it but I did not.', NULL, 1),
(49, 22, 20, 4, 1, 'Impressed', 'Really pleased with this. Works well and feels like a quality product. Will be back for more.', NULL, 1),
(50, 22, 20, 5, 1, 'Wow, just wow', 'Did not expect to be this happy with a purchase. Brilliant product, fast delivery, great all round.', NULL, 1),
(51, 22, 21, 3, 1, 'It does the job', 'Nothing special to report. It works as advertised and that is about all I can say. Fair enough.', NULL, 1),
(52, 22, 22, 5, 1, 'Phenomenal', 'This exceeded every expectation I had. Cannot believe how good it is. Absolute must-buy.', NULL, 1),
(53, 22, 22, 4, 1, 'Really pleased', 'Great product at a fair price. Arrived well packaged and works exactly as described. Thumbs up.', NULL, 1),
(54, 22, 22, 2, 1, 'Not great', 'I wanted this to work but it just did not. Might suit others but it was not right for me.', NULL, 1),
(55, 22, 22, 1, 1, 'Very poor', 'Stopped working after just a few days. Really low quality. Save your money and look elsewhere.', NULL, 1),
(56, 22, 23, 4, 1, 'Solid choice', 'Good quality product that does what it claims. Happy to recommend to anyone considering it.', NULL, 1),
(57, 22, 23, 5, 1, 'Loved everything about it', 'From start to finish a great experience. The product is brilliant and I will definitely reorder.', NULL, 1),
(58, 22, 24, 3, 1, 'Take it or leave it', 'It is an okay product. Not something I would rave about but not something I would warn against either.', NULL, 1),
(59, 22, 25, 5, 1, 'Top quality', 'Really impressed with this. Exactly what I needed and it works perfectly. Great purchase overall.', NULL, 1),
(60, 22, 25, 3, 1, 'Fairly average', 'It is okay. Does the job but nothing that makes it stand out from similar products I have used.', NULL, 1),
(61, 22, 25, 1, 1, 'Really disappointed', 'Had high hopes but this let me down. Does not perform as advertised at all. Would not recommend.', NULL, 1);

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
('5aiopvaDCAvGbwfFga6zLIH7JUKwLQ0LAzxRhheO', NULL, '86.164.209.175', 'Mozilla/5.0 (X11; Linux x86_64; rv:148.0) Gecko/20100101 Firefox/148.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUVhQdzdLbE5TWEgwU2J1U0xSYnltNTM3cG1TdEVmUkJnQndCWlBhYiI7czo0OiJjYXJ0IjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToyOntzOjM6InVybCI7czo2MjoiaHR0cHM6Ly9jczJ0ZWFtMjAuY3MyNDEwLXdlYjAxcHZtLmFzdG9uLmFjLnVrL2NoZWNrb3V0L2RldGFpbHMiO3M6NToicm91dGUiO3M6MTM6ImNoZWNrb3V0LnZpZXciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774217512),
('5o4exYlrUAEpmR6z3AMQrQgGpLgRmQpgZjIfLket', NULL, '86.164.209.175', 'Mozilla/5.0 (X11; Linux x86_64; rv:148.0) Gecko/20100101 Firefox/148.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUkp3WjJGcXVLWkNvNXhmajVrdFdSY2Rod0VpbHBKUmU0UGRLRjFCMiI7czoxNzoiY2hlY2tvdXQtcmVkaXJlY3QiO3M6NDoidHJ1ZSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NjA6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9jaGVja291dC9sb2dpbiI7czo1OiJyb3V0ZSI7czoxNDoiY2hlY2tvdXQubG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774213679),
('67tlFiQP0w9Z1tRIhTukDEFclwtnFCMiKfh4S1n6', NULL, '86.164.209.175', 'Mozilla/5.0 (X11; Linux x86_64; rv:148.0) Gecko/20100101 Firefox/148.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMlVNMFg4WFZBSjB3b0hBcWdzNzdFUkZPMEVyQ3pFODM3Yk91QUtQVCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NzM6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9pbmdyZWRpZW50cy9hdm9jYWRvLWV4dHJhY3QiO3M6NToicm91dGUiO047fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1774220103),
('78YpUIoMCDdvcKh053VLuMigs1Y4oKge07hjvJYr', NULL, '86.164.209.175', 'Mozilla/5.0 (X11; Linux x86_64; rv:148.0) Gecko/20100101 Firefox/148.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieEUwaG1UN3h3WGhYSUFWc0NMUW9hSFR0T0t1Tjd5WTVFV0pSS3hzZCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NjM6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9jaGVja291dC9jb21wbGV0ZSI7czo1OiJyb3V0ZSI7czoxNzoiY2hlY2tvdXQuY29tcGxldGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774214859),
('bFVDQbxzRtx6HxoUGNbCYUlhMVXUgDtP1WJRf8pp', NULL, '86.164.209.175', 'Mozilla/5.0 (X11; Linux x86_64; rv:148.0) Gecko/20100101 Firefox/148.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSTdBUHR3VlBTTjBnd2hsbUF2QkRwNUx3M0JYUDB0UXpnOXd5NHlXRiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NjM6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9jaGVja291dC9jb21wbGV0ZSI7czo1OiJyb3V0ZSI7czoxNzoiY2hlY2tvdXQuY29tcGxldGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774215470),
('E31korBtjA3JuV0qAJqHJ4ciudXRdYkFeddT2r14', NULL, '86.164.209.175', 'Mozilla/5.0 (X11; Linux x86_64; rv:148.0) Gecko/20100101 Firefox/148.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUk16MU9KWWFmRDE2OEhwMDBkVjFnUk45cWNTR0k4TXVxRmtHYVByMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NjQ6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9wcm9kdWN0cz9uYW1lPXRlc3QiO3M6NToicm91dGUiO3M6ODoicHJvZHVjdHMiO319', 1774220641),
('G0eQCLuBZY4fHPU2jYbeS0LoK9dV08d9KqwHzn67', NULL, '138.186.117.57', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZkxnaDhKVE1SRG5sd1ZLblQyTDRDRnltaTh5V1laYjdxQ29NVzJYUCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6ODA6Imh0dHBzOi8vd3d3LmNzMnRlYW0yMC5jczI0MTAtd2ViMDFwdm0uYXN0b24uYWMudWsvcHJvZHVjdHM/dHlwZT1IYWlyJTIwQWNjZXNzb3J5IjtzOjU6InJvdXRlIjtzOjg6InByb2R1Y3RzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1774214595),
('ICi60oIZfAtcmUd9RVmC72K0ZfU44oEPgBUE6uac', NULL, '86.164.209.175', 'Mozilla/5.0 (X11; Linux x86_64; rv:148.0) Gecko/20100101 Firefox/148.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicmhpdmZKcUlYQlpuSkQyTnhXa3NpUnFsQzBSYTRIQTZ4cEszTmVsNiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTQ6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9zaGlwcGluZyI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1774218705),
('Juy4lobqclnmWRpu5huKDxG3cWlxkiYZEVxuOVAf', NULL, '86.164.209.175', 'Mozilla/5.0 (X11; Linux x86_64; rv:148.0) Gecko/20100101 Firefox/148.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWDFVZ1JxM09EdU40RDllRndkRjFUUTU5YklqODU3R0tXU0s2QllVcyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTQ6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9zaGlwcGluZyI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1774218643),
('Syp6fzpYraD2sMFosxU2tqsF0iNsfdJQEIzhzf2e', NULL, '86.164.209.175', 'Mozilla/5.0 (X11; Linux x86_64; rv:148.0) Gecko/20100101 Firefox/148.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2k1WDNwRjRMTmhCb29PblA3dGxhUkE4QnpWUEhFU0FHbWE3VTIyQiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTA6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9jYXJ0IjtzOjU6InJvdXRlIjtzOjk6ImNhcnQudmlldyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1774217513),
('tZfS7elt6SN3BPtPjwU2867WabjnpENCtG8pZV2Q', NULL, '86.164.209.175', 'Mozilla/5.0 (X11; Linux x86_64; rv:148.0) Gecko/20100101 Firefox/148.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiamt4VHV5RU1PSFdXSlBiOUJ3WWtuS2s5bkczVkx3NVZ2ZGlDb3VIYiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Njk6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9pbmdyZWRpZW50cy9zaGVhLWJ1dHRlciI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1774219456),
('w1OB0NqftxJMcTAJjJGNaj76mNBLZzkBkX33110Y', NULL, '94.10.6.45', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:148.0) Gecko/20100101 Firefox/148.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUHlvNmdyaVFjVFdIV2VzOUJ4a25DampHZG9TVk8xNEp1M21LUUNuRyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ayI7czo1OiJyb3V0ZSI7czo1OiJpbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1774217192),
('x94v8ClhVlaWz7sW0arH6CyzSyASLlO37tcQis8H', 1, '86.166.253.99', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMU0ySEhOd29sakpkZGZuc2ZGNmNnZUladHJWSTBTY2h4YnQ2Q0s1QyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTU6Imh0dHBzOi8vY3MydGVhbTIwLmNzMjQxMC13ZWIwMXB2bS5hc3Rvbi5hYy51ay9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6OToiZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJ0YWItcGFnZSI7TjtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1774218559);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isAdmin` enum('customer','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `subscribed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `google_id`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`, `isAdmin`, `subscribed`) VALUES
(1, 'Testy User', NULL, 'test@test.com', '2026-02-16 18:49:11', '$2y$12$zc.5yqf0XUJUqLg11a2kdeqrT778BowGb8jva0IPs5u2QecXqtXmO', NULL, NULL, NULL, 'jkaZANrAsJZ431Lgcq0smEryL2QSEzCPWQrpcQb6Qs36Uzrav9x84fl4A3VT', '2025-10-21 18:33:32', '2026-03-06 22:40:50', 'customer', 1),
(2, 'Ethan', NULL, '240090270@aston.ac.uk', '2026-02-16 19:07:46', '$2y$12$nSCXPsSoiOggti49.uwxLOcrXDGHKOE1Kkjl0f12aYnjUYhjuQV9u', 'eyJpdiI6Imozb25YV1ZGVUdYelpXWlp3aXZMdnc9PSIsInZhbHVlIjoiOWRNVnVxTUpsZjhOWG1ZbXpDdFFCRVhpRmgxK1RxT2xjNjM5YzlaSjBCcz0iLCJtYWMiOiJjY2JkYjU0ZTBkODMzMGE5MTZhY2NmZGM1NDA5ZWI0YTRjMjkyMzM0NjNlYTk5OTFkNWRlZTkwODIwZjk4Njg3IiwidGFnIjoiIn0=', 'eyJpdiI6ImkwRUtMY2t3VzVCdUIzUHB6SnJLRGc9PSIsInZhbHVlIjoiNW5UT29KWjQxRktXbXVGdkRXUGdDZ3JkUkgwVVordzNFTE5odWhmODRMUGd0ME5QS3VYM0xNOXhuVFNTcjB6QmJBM2NjK2ZhVzNJUXBVdVE5SjZ5VXRBZ2hrb3M5bDZoa3hJYTYwMkxyaUhHa3lWbFFHZHh4L0lQOVpvYmtwMGZLN2VVK0UzZ21hcElnT25xSzlJZTgzRWw0alZFaW9DdWtSMzExaG5qc0NLblkvTlVTMzVyVTRjWDd4STlkUW53QUNMSW5kYVZOR3lTRXJUTXh1eDVmS3AyNzF3SEU1b0srN1lBVnp1dzhudm5zSHJNVFYrdnQwUEN3NEd6eGdGd1EzOGJBQVJHQjYwSUo5cVNiZWZiMXc9PSIsIm1hYyI6ImNiZGI2YzVlN2EwOWM1MGVhOTA4MGFjNGI4YWUwOTUxNWZmOTM5Nzg4ZjQzNDQ2MTU4NGQ3M2I1YTUzODgxZDIiLCJ0YWciOiIifQ==', '2026-02-17 21:45:27', NULL, '2025-11-24 18:32:09', '2026-02-19 14:58:25', 'customer', 0),
(3, 'ifza', NULL, 'ifza.1234@icloud.com', NULL, '$2y$12$2mgsNRobfpPUgPIxfb2U8.QBhL2dnZqu.kqRM4Yb3n6lymv16onHe', NULL, NULL, NULL, NULL, '2025-11-30 00:03:40', '2025-11-30 00:03:40', 'customer', 0),
(4, 'Hezekiah Calub', NULL, '230159329@aston.ac.uk', NULL, '$2y$12$ZTQ0wtIvGG.PWFT144cE8eFpEE62ZAXlxjJhrrxFLlYHWLfIq666O', NULL, NULL, NULL, NULL, '2025-12-05 11:47:53', '2025-12-05 11:48:15', 'customer', 0),
(5, 'Emma Smith', NULL, 'emmasmith@example.com', NULL, '$2y$12$r7qn6N2jZ4nePwG.KZjjJOEUbLgbFuPArpogrdD7.m8XjLR5/Nutq', NULL, NULL, NULL, NULL, '2026-01-26 15:53:46', '2026-01-26 15:53:46', 'customer', 0),
(6, 'Kanban Default', NULL, 'asd@asd.sad', NULL, '$2y$12$UnVuf3pNrFA8VD4dtzgFP.uCunCUnXz457wTsFjTs9uUIKH7TQGR2', NULL, NULL, NULL, NULL, '2026-02-10 13:21:42', '2026-02-10 13:21:42', 'customer', 0),
(7, 'Headunit', '102327321934308899532', 'headunitvan666@gmail.com', NULL, '$2y$12$Eu0e8UcUxljQ1eA7ON1oBulcgO/s4s6RMINmXRaOaLOO6UT3UX54i', NULL, NULL, NULL, NULL, '2026-02-12 15:15:02', '2026-02-12 15:15:02', 'customer', 0),
(8, 'Sharon D\'souza', '112704981429629716778', 'shadso2012@gmail.com', NULL, '$2y$12$qRq/2p7nkRvR6zl12Fp2deVWT7DEfDsasQ6LlU6wj27cw7/YNdyNa', NULL, NULL, NULL, NULL, '2026-02-12 15:43:46', '2026-02-12 15:43:46', 'customer', 0),
(9, 'Naturale Support', '108256848760918538326', 'naturalehelpdesk@gmail.com', '2026-02-17 22:03:25', '$2y$12$brrMzJupH/JKYvvPNhTqLuqnnyZp4vThYrjGMHymN8TbO5E.zuYuC', NULL, NULL, NULL, NULL, '2026-02-16 20:00:42', '2026-02-16 20:00:42', 'admin', 1),
(10, 'HW786LEGEND', '112451828911674993144', 'hw786legend@gmail.com', NULL, '$2y$12$K9RqvNJrQhBRpQcFDNWzI.hsc1xG1fKyXtrhv7.XW2zix.8K8QMZ6', NULL, NULL, NULL, NULL, '2026-02-19 15:22:36', '2026-02-19 15:22:36', 'customer', 0),
(11, 'Samuel D\'souza', '101710726500306880169', 'samuel_dsouza@outlook.com', NULL, '$2y$12$r5pNN2wD223JDvUsznOyHu4y.7K7TkriTLmFWhVWTYUcrBfNB0.Ri', NULL, NULL, NULL, NULL, '2026-03-13 13:17:16', '2026-03-13 13:17:16', 'customer', 0),
(12, 'testroute', NULL, 'testroute@test.com', '2026-03-18 22:13:07', '$2y$12$vXWzecrbvLQZRoUmINtwWuyGsz/qkyYo.c6p1i001kAzpuzaVrkG6', NULL, NULL, NULL, NULL, '2026-03-18 22:12:54', '2026-03-18 22:12:54', 'admin', 0),
(19, 'te', NULL, 'aa@aa.co', NULL, '$2y$12$JVwWlUrAqa2TQ.4kEuLiS.CoIdjteKXPDQ8IvG6Rk3iM7VPkujqDK', NULL, NULL, NULL, NULL, '2026-03-22 21:24:13', '2026-03-22 21:24:13', 'customer', 0);

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
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `c_uid` (`c_uid`);

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
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`pid`),
  ADD KEY `p_feature` (`p_feature`);

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
  MODIFY `cid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `caid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `e_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  MODIFY `kbid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `oiid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=553;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `rid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
