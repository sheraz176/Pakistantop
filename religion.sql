-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 09:50 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `religion`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_area_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `lat`, `lng`, `map_area_name`, `created_at`, `updated_at`) VALUES
(3, 'johar town f block', '55.829669', '38.696467', 'Russian Federation, Moscow Region, Pavlovskiy Posad City District', '2022-11-29 03:11:34', '2022-11-29 04:28:42'),
(4, 'test', '55.786516', '37.610035', 'Russian Federation, Moscow, Oktyabrsky Lane, 11', '2022-11-29 04:44:16', '2022-11-29 04:44:16'),
(6, 'Shymkent', '42.340782', '69.596329', 'Shymkent', '2022-11-29 09:39:38', '2022-11-29 09:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leader`
--

CREATE TABLE `leader` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leader`
--

INSERT INTO `leader` (`id`, `name`, `image`, `email`, `description`, `place_id`, `religion_id`, `created_at`, `updated_at`, `address`, `icon`) VALUES
(7, 'Myra Pate', 'leader/Vs9Y1Wr84QGRjc9YchefZCn1TOyEyuRR63ogBI4y.png', 'bubiv@mailinator.com', '<div>cdjmksdncvksdn</div>', '2', '1', '2022-12-01 18:43:49', '2022-12-01 18:43:49', NULL, NULL),
(11, 'sheraz AlI', 'leader/IgHGK4mFArcTfyYE8WHG1iBQDMVKuGDbxjiVTXhJ.png', 'sherazdeveloper76@gmail.com', '<div>x jxisocjsioncsdi kcnsoidbcnisdob skc basiobcisoabcisa</div>', '5', '1', '2022-12-01 19:47:30', '2022-12-01 19:47:30', '290 F Block Johr Town Lahore', 'icon/ibEV7O54DDDDIa6FDf8fcnIKAnOK0xMHJUnkQPZa.png'),
(12, 'Jeremy Yates', 'leader/k9n6c8ctEM3TeccLedej1WWb7il6la9byN8t3Q4t.png', 'gewec@mailinator.com', '<div><br></div>', '4', '1', '2022-12-01 19:57:36', '2022-12-01 19:57:36', 'Iste recusandae Lab', 'icon/h7UIloTkMvSWeQ11wKIujbIdYU4LGDlcgCsemVwF.png');

-- --------------------------------------------------------

--
-- Table structure for table `leave_request_verification`
--

CREATE TABLE `leave_request_verification` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_object` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_request_verification`
--

INSERT INTO `leave_request_verification` (`id`, `full_name`, `email`, `message`, `file`, `map_object`, `created_at`, `updated_at`, `lat`, `long`) VALUES
(2, 'sheraz AlI', 'sherazdeveloper76@gmail.com', '<div>kldcmksdcmsk</div>', 'leave_request_verification/sQBNvNw82zgQSmP6mAWCaLqLbRy1PLI1o9aVYOhY.jpg', 'qbbababa', '2022-11-14 18:15:11', '2022-11-14 18:15:11', NULL, NULL),
(3, 'ugyugy', 'sherazdeveloper76@gmail.com', 'uihughuigbuigbugb', 'leave_request_verification/N9lcKCeGXimK8Lw26PUkFvpTgbjIodeS0ahhVPab.pdf', 'null', '2022-11-23 21:00:28', '2022-11-23 21:00:28', NULL, NULL),
(4, 'ugyugy', 'sherazdeveloper76@gmail.com', 'uihughuigbuigbugb', 'leave_request_verification/ZSfew1XEcUCx9jtuCiPS0gKZpAICA2z5M7hV85fq.pdf', 'null', '2022-11-23 21:00:29', '2022-11-23 21:00:29', NULL, NULL),
(5, 'ugyugy', 'sherazdeveloper76@gmail.com', 'uihughuigbuigbugb', 'leave_request_verification/0Czbq1MZwX4SNUFMsbUW0hgaKk22niAKF74IGcuI.pdf', 'null', '2022-11-23 21:00:30', '2022-11-23 21:00:30', NULL, NULL),
(6, 'ugyugy', 'sherazdeveloper76@gmail.com', 'uihughuigbuigbugb', 'leave_request_verification/CZ8MB2DiNBiJSNRnaUj8aOwCxZDLv46MLknlo2VR.pdf', 'null', '2022-11-23 21:00:37', '2022-11-23 21:00:37', NULL, NULL),
(7, 'ugyugy', 'sherazdeveloper76@gmail.com', 'uihughuigbuigbugb', 'leave_request_verification/XEw6S1f2Ajah9pxk8JkRmb0XpmsXFTqPYbcix1GB.pdf', 'null', '2022-11-23 21:00:38', '2022-11-23 21:00:38', NULL, NULL),
(8, 'ugyugy', 'sherazdeveloper76@gmail.com', 'uihughuigbuigbugb', 'leave_request_verification/Lhh1s0jKILdOccjCYpqNl49cUCF1IEqiWNz6I29I.pdf', 'null', '2022-11-23 21:00:38', '2022-11-23 21:00:38', NULL, NULL),
(9, 'ugyugy', 'sherazdeveloper76@gmail.com', 'uihughuigbuigbugb', 'leave_request_verification/W1vsQIL0MJv1FDtUuSIbANI4ZrxXWazY7dtEeyuz.pdf', 'null', '2022-11-23 21:00:38', '2022-11-23 21:00:38', NULL, NULL),
(10, 'ugyugy', 'sherazdeveloper76@gmail.com', 'uihughuigbuigbugb', 'leave_request_verification/yCVTCS17uWZr1psPG4RwxDSJjidhKlgpfLQW989A.pdf', 'null', '2022-11-23 21:00:39', '2022-11-23 21:00:39', NULL, NULL),
(11, 'ugyugy', 'sherazdeveloper76@gmail.com', 'uihughuigbuigbugb', 'leave_request_verification/0ENc7yXo1ImKmp3ntge8az8d8be8SmBnYzQJTd8t.pdf', 'null', '2022-11-23 21:00:39', '2022-11-23 21:00:39', NULL, NULL),
(12, 'ugyugy', 'sherazdeveloper76@gmail.com', 'uihughuigbuigbugb', 'leave_request_verification/aeLQ5NQstYcohOURfFIXEizZQ7A2OVNTGvEn4hWk.pdf', 'null', '2022-11-23 21:00:40', '2022-11-23 21:00:40', NULL, NULL),
(13, 'ugyugy', 'sherazdeveloper76@gmail.com', 'uihughuigbuigbugb', 'leave_request_verification/MgmXoJvUknWvBwYezMG9oIfUiQuUlmIECUZaoXQP.pdf', 'null', '2022-11-23 21:00:40', '2022-11-23 21:00:40', NULL, NULL),
(14, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/6HurgpVnvpCm5ECFysaeeCJyAiyrAT7waayFOqMm.pdf', 'null', '2022-11-23 21:11:43', '2022-11-23 21:11:43', NULL, NULL),
(15, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/IB7GWGIMxZwZy30I3RcZDJcbykwi57x4y9yKGcay.pdf', 'null', '2022-11-23 21:11:44', '2022-11-23 21:11:44', NULL, NULL),
(16, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/XluUvuIt2Yfh9JH1MG7z0Y9XBlW9biCGHhttcXQv.pdf', 'null', '2022-11-23 21:11:46', '2022-11-23 21:11:46', NULL, NULL),
(17, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/YlgSNOdWmRMTVZUR57uLUw6Kc9bOUWAFzwm95krS.pdf', 'null', '2022-11-23 21:11:46', '2022-11-23 21:11:46', NULL, NULL),
(18, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/ykdjDgv5eLqA6PYf5eHAHiKOoykKqYYQ0G73dUjZ.pdf', 'null', '2022-11-23 21:11:46', '2022-11-23 21:11:46', NULL, NULL),
(19, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/sA1xUpKiSnzFylg7VN5C2X2n7amq386HAMHhs6IZ.pdf', 'null', '2022-11-23 21:11:47', '2022-11-23 21:11:47', NULL, NULL),
(20, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/LDnAeC4d2YqaLqKk97RnUkauD3ykS4oL8mxxRPLp.pdf', 'null', '2022-11-23 21:11:47', '2022-11-23 21:11:47', NULL, NULL),
(21, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/OrwdEMcbaFtunS7fpuv28UF8JOjkd6bkIIsPIXoe.pdf', 'null', '2022-11-23 21:11:48', '2022-11-23 21:11:48', NULL, NULL),
(22, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/qzvRfZT5fQ4xPDmWUpiRjbtORwxXv6OnOju3XFR7.pdf', 'null', '2022-11-23 21:11:48', '2022-11-23 21:11:48', NULL, NULL),
(23, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/pjIP3uS7l44EiUg2b8ZAtFVFYESIFtZv7uLU2z6w.pdf', 'null', '2022-11-23 21:11:48', '2022-11-23 21:11:48', NULL, NULL),
(24, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/FKoKDguTr7HtxKPyVaCXZ6vZ9X41k4L8EP6bFqrd.pdf', 'null', '2022-11-23 21:11:49', '2022-11-23 21:11:49', NULL, NULL),
(25, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/xIOr3DgxezJCzFCSci44FoumZZVv8P4cyChCBZi7.pdf', 'null', '2022-11-23 21:11:50', '2022-11-23 21:11:50', NULL, NULL),
(26, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/CVNeL99XqhEsT0V8TpeEhJoowd94heJ5k6if4hTN.pdf', 'null', '2022-11-23 21:11:50', '2022-11-23 21:11:50', NULL, NULL),
(27, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/THyXS4H7FetAognxVAxwUdkMKHmtc6f2ArucGARu.pdf', 'null', '2022-11-23 21:11:51', '2022-11-23 21:11:51', NULL, NULL),
(28, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/5ezkkGnvd8hYrbRJrE7Bk9BrWuE7Va5DZjFNjFoE.pdf', 'null', '2022-11-23 21:11:51', '2022-11-23 21:11:51', NULL, NULL),
(29, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/bdTwqjBukALGZsKr41RIuf6gyRIDZm1PGrXkhP92.pdf', 'null', '2022-11-23 21:11:51', '2022-11-23 21:11:51', NULL, NULL),
(30, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/I2FjIiL9PB577F3QZW9QktaoQOiQwMaWvg95Bjam.pdf', 'null', '2022-11-23 21:11:52', '2022-11-23 21:11:52', NULL, NULL),
(31, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/jNZPjUQCg8E1Q0jFxjMxiyKO2lfMYBBPuJMvwtXP.pdf', 'null', '2022-11-23 21:11:52', '2022-11-23 21:11:52', NULL, NULL),
(32, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/z7dmJ5hM9GpequyD7EVZkridqAtr7buFDjss2KcC.pdf', 'null', '2022-11-23 21:11:52', '2022-11-23 21:11:52', NULL, NULL),
(33, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/R0cVryKPSCYuP7bo1sH9ifjWD09SgOrgvudzeIMC.pdf', 'null', '2022-11-23 21:11:53', '2022-11-23 21:11:53', NULL, NULL),
(34, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/O07cnxZ2LQnEPgNYuODZ4j8Nnmlmo1ZVVu5gp4cS.pdf', 'null', '2022-11-23 21:11:53', '2022-11-23 21:11:53', NULL, NULL),
(35, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/kKn88flQ379TLi6UJctPEneLRoZIycpMhXLWNd3P.pdf', 'null', '2022-11-23 21:11:53', '2022-11-23 21:11:53', NULL, NULL),
(36, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/2TgFd9sRMHgGwrArN6yTebPvROlTFmCZX0x644DI.pdf', 'null', '2022-11-23 21:11:54', '2022-11-23 21:11:54', NULL, NULL),
(37, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/Rk3CrPtDChN1CILw9QHCnKUgWsBZqPEyjz63BkV4.pdf', 'null', '2022-11-23 21:11:54', '2022-11-23 21:11:54', NULL, NULL),
(38, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/JueUa1NiUUr7kUVvqc1a01A5LFIj4lPRBllMwcYi.pdf', 'null', '2022-11-23 21:11:54', '2022-11-23 21:11:54', NULL, NULL),
(39, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/oesm8DK1WGuLGK7iG4iA1qI3xyhDxJXkatRdfz7h.pdf', 'null', '2022-11-23 21:11:55', '2022-11-23 21:11:55', NULL, NULL),
(40, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/x3D6vi0NCzs6UjumL802ZUcCmCrhiBdRsjLN2taS.pdf', 'null', '2022-11-23 21:11:55', '2022-11-23 21:11:55', NULL, NULL),
(41, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/D1Dv1bAIEzPmEOgjc0hvwFL8sWux9WzSjSb75hdt.pdf', 'null', '2022-11-23 21:11:55', '2022-11-23 21:11:55', NULL, NULL),
(42, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'fiojgiejgief', 'leave_request_verification/9kA37v3BYSYZKCaKFf0eX7LuNxm8qIvX5jZ2Ssei.pdf', 'null', '2022-11-23 21:11:56', '2022-11-23 21:11:56', NULL, NULL),
(43, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'iojihui', 'leave_request_verification/NOPJ54SZbkpYoGBpqEmiMZWQmO5YKr1LZsKpwwNQ.png', 'null', '2022-11-23 21:15:27', '2022-11-23 21:15:27', NULL, NULL),
(44, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'iojihui', 'leave_request_verification/22F5YX7BlJp1u1p0SQZLTKSYrjGraMmFR1XZUKg4.png', 'null', '2022-11-23 21:15:29', '2022-11-23 21:15:29', NULL, NULL),
(45, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'iojihui', 'leave_request_verification/YHluTi6E60RJ5grV3SRcB0xll3RyEQI8r8p7ILpB.png', 'null', '2022-11-23 21:15:29', '2022-11-23 21:15:29', NULL, NULL),
(46, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'iojihui', 'leave_request_verification/FyDCDypbYhyYBYrqk1AC5u5KY50rRmuZcsrexO8J.png', 'null', '2022-11-23 21:15:38', '2022-11-23 21:15:38', NULL, NULL),
(47, 'user', 'user@gmail.com', 'user', 'leave_request_verification/2buEDbcPH00iDopHsV2wtpKB0o3OiTssPieKinlC.pdf', 'null', '2022-11-23 21:18:04', '2022-11-23 21:18:04', NULL, NULL),
(48, 'user', 'user@gmail.com', 'user', 'leave_request_verification/v0JYKZC2dXUFZepDYd84iY2sHUK3SG6j13KeK8O0.pdf', 'null', '2022-11-23 21:18:06', '2022-11-23 21:18:06', NULL, NULL),
(49, 'user', 'user@gmail.com', 'user', 'leave_request_verification/PZytLMp1k3mTCStmXaMr721e8aHVpsjfa2TpXFaf.pdf', 'null', '2022-11-23 21:18:07', '2022-11-23 21:18:07', NULL, NULL),
(50, 'user', 'user@gmail.com', 'user', 'leave_request_verification/5oPkMERgmH49IALLOrtW7tBkMpmW0vZa90gk7bsu.pdf', 'null', '2022-11-23 21:18:08', '2022-11-23 21:18:08', NULL, NULL),
(51, 'user', 'user@gmail.com', 'user', 'leave_request_verification/GAVGcp1Mz4ll8y40x9uxkgrGumAJo3TKvrQT7gnn.pdf', 'null', '2022-11-23 21:18:08', '2022-11-23 21:18:08', NULL, NULL),
(52, 'user', 'user@gmail.com', 'user', 'leave_request_verification/ZDVpcZ8zRf8Pq9acKErPwP8IcRZ7DyO3JLIrrhMX.pdf', 'null', '2022-11-23 21:18:08', '2022-11-23 21:18:08', NULL, NULL),
(53, 'user', 'user@gmail.com', 'user', 'leave_request_verification/XAhEJrD1AtZsRxtd7Va2jyokB48Edyc4FBDw1vMt.pdf', 'null', '2022-11-23 21:18:09', '2022-11-23 21:18:09', NULL, NULL),
(54, 'user', 'user@gmail.com', 'user', 'leave_request_verification/JF4femyvSRoJ9ecWGDQHBSCNxWj8bB7BDlBEqxj8.pdf', 'null', '2022-11-23 21:18:09', '2022-11-23 21:18:09', NULL, NULL),
(55, 'user', 'user@gmail.com', 'user', 'leave_request_verification/KkkrhxVQcuKWgusiWX78mEpTiNnFUKw8IfKiC9in.pdf', 'null', '2022-11-23 21:18:10', '2022-11-23 21:18:10', NULL, NULL),
(56, 'user', 'user@gmail.com', 'user', 'leave_request_verification/8R7E1kdOQYRywh4DYKyXlPidr0couPrNdZDI4vmK.pdf', 'null', '2022-11-23 21:18:15', '2022-11-23 21:18:15', NULL, NULL),
(57, 'user', 'user@gmail.com', 'user', 'leave_request_verification/5xLpHsXsoxGlwEalcmExwZNNdKbtaHgU4KfPqKBT.pdf', 'null', '2022-11-23 21:18:16', '2022-11-23 21:18:16', NULL, NULL),
(58, 'user', 'user@gmail.com', 'user', 'leave_request_verification/ljCO0J8pgFgGT2dtKqNXsruYdm9StLc5fU1yPzyW.pdf', 'null', '2022-11-23 21:18:16', '2022-11-23 21:18:16', NULL, NULL),
(59, 'user', 'user@gmail.com', 'user', 'leave_request_verification/ByGD5YmGu8QqlutI2bwbOtYhO01CNkdkDtPwbE4Y.pdf', 'null', '2022-11-23 21:18:16', '2022-11-23 21:18:16', NULL, NULL),
(60, 'user', 'user@gmail.com', 'user', 'leave_request_verification/PLMMixOFGRZmTM4LxXAabOdPZal3xAa4xu2XLefe.pdf', 'null', '2022-11-23 21:18:17', '2022-11-23 21:18:17', NULL, NULL),
(61, 'user', 'user@gmail.com', 'user', 'leave_request_verification/jCxVZaW5e97f0YEjv2wiAkL33tbEGkVjoayrciaH.pdf', 'null', '2022-11-23 21:18:17', '2022-11-23 21:18:17', NULL, NULL),
(62, 'user', 'user@gmail.com', 'user', 'leave_request_verification/fs1wTxh9o51gkQMosV149Z9IiPM3d7qtVBUqntUv.pdf', 'null', '2022-11-23 21:18:18', '2022-11-23 21:18:18', NULL, NULL),
(63, 'user', 'user@gmail.com', 'user', 'leave_request_verification/WFdymbWdbDoRJ12C8dF4RmzNfWuQCWe4cP2QBlO1.pdf', 'null', '2022-11-23 21:18:18', '2022-11-23 21:18:18', NULL, NULL),
(64, 'user', 'user@gmail.com', 'user', 'leave_request_verification/iHvvMozPTuuWVquaZbyLBfU4uefNJJTKojUqWMhD.pdf', 'null', '2022-11-23 21:18:18', '2022-11-23 21:18:18', NULL, NULL),
(65, 'user', 'user@gmail.com', 'user', 'leave_request_verification/iFEyGxmNCMXW8eDtYYZxJA7UUgM3zEYtfWr8tKWL.pdf', 'null', '2022-11-23 21:18:19', '2022-11-23 21:18:19', NULL, NULL),
(66, 'user', 'user@gmail.com', 'user', 'leave_request_verification/yWmw5cI5wDfr12JpJ1xOkSz9UsCubDkUxfQWefjH.pdf', 'null', '2022-11-23 21:18:19', '2022-11-23 21:18:19', NULL, NULL),
(67, 'user', 'user@gmail.com', 'user', 'leave_request_verification/CJicVP5gPTNIziYyBBcmu52rY0Hsss4ABB0ZPJTq.pdf', 'null', '2022-11-23 21:18:20', '2022-11-23 21:18:20', NULL, NULL),
(68, 'user', 'user@gmail.com', 'user', 'leave_request_verification/9WAVfC6tM74AwuE2OAsCr6WTRN5fFag4lNvY7bbX.pdf', 'null', '2022-11-23 21:18:20', '2022-11-23 21:18:20', NULL, NULL),
(69, 'user', 'user@gmail.com', 'user', 'leave_request_verification/CuzYfGbMqm8MGGPoRc70jJsj1z90dKNz8vikuxZM.pdf', 'null', '2022-11-23 21:18:20', '2022-11-23 21:18:20', NULL, NULL),
(70, 'user', 'user@gmail.com', 'user', 'leave_request_verification/qxvgn166gtPpUl5h1nVky06qOWgBVGde2jjo99kE.pdf', 'null', '2022-11-23 21:18:21', '2022-11-23 21:18:21', NULL, NULL),
(71, 'user', 'user@gmail.com', 'user', 'leave_request_verification/nl98KWITpHwRh5QMLTiQaVkKvLqtbBbj9ucQxZyH.pdf', 'null', '2022-11-23 21:18:39', '2022-11-23 21:18:39', NULL, NULL),
(72, 'user', 'user@gmail.com', 'user', 'leave_request_verification/FWKDHOG5nl0gjeMsDaUZ4Bs6LlZsEZFlrZo17EUT.pdf', 'null', '2022-11-23 21:18:49', '2022-11-23 21:18:49', NULL, NULL),
(73, 'user', 'user@gmail.com', 'user', 'leave_request_verification/7YZS23X2SYLCBior8elU8u8ucqCzrHPt7EajnPbh.pdf', 'null', '2022-11-23 21:18:49', '2022-11-23 21:18:49', NULL, NULL),
(74, 'user', 'user@gmail.com', 'user', 'leave_request_verification/tsXf6xdfETrAdHMawyTn1KpvL0qPHjVq0W3iz8pC.pdf', 'null', '2022-11-23 21:18:50', '2022-11-23 21:18:50', NULL, NULL),
(75, 'user', 'user@gmail.com', 'user', 'leave_request_verification/aV0QxwG2bi25PRQvRpCaCHKpVLEcxYTCucKq7anK.pdf', 'null', '2022-11-23 21:18:50', '2022-11-23 21:18:50', NULL, NULL),
(76, 'user', 'user@gmail.com', 'user', 'leave_request_verification/Qv90RIMXiZ7qo15Ek0GV4vI3c9JN7KQ8g5qvvzCq.pdf', 'null', '2022-11-23 21:18:50', '2022-11-23 21:18:50', NULL, NULL),
(77, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/FAGUaNz9qwSqvNfrPzOXHjsfoi1hwEzstrfs2ZjU.pdf', 'null', '2022-11-23 21:21:03', '2022-11-23 21:21:03', NULL, NULL),
(78, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/TbMrcWfSLAaugg6QmTujzHf07ZMMZ4by18pFXALq.pdf', 'null', '2022-11-23 21:21:04', '2022-11-23 21:21:04', NULL, NULL),
(79, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/gdFC1BKt9k0j22AmUym51UuCr92VfL3LoKBx5Yg9.pdf', 'null', '2022-11-23 21:21:05', '2022-11-23 21:21:05', NULL, NULL),
(80, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/HRdwRStZiMgSumKUKB59NqgDzitrfwVE6m3uZREk.pdf', 'null', '2022-11-23 21:21:17', '2022-11-23 21:21:17', NULL, NULL),
(81, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/X4kKbZviYZrBy1eR9gMcOpdN7ShRHoqoV8UQhSPV.pdf', 'null', '2022-11-23 21:21:18', '2022-11-23 21:21:18', NULL, NULL),
(82, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/ix5Z8VsiBGxF0FVuUqRO6SdJU5GsOjlgmyKYw88W.pdf', 'null', '2022-11-23 21:21:19', '2022-11-23 21:21:19', NULL, NULL),
(83, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/DrDDDsGG12OuVFBiKXVqyYVHbEjmYJwKF2GBJtM2.pdf', 'null', '2022-11-23 21:21:19', '2022-11-23 21:21:19', NULL, NULL),
(84, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/BSBxKcGAP6o9Bhd80XJXgQa0J6TElrguHVJQQr0Y.pdf', 'null', '2022-11-23 21:21:20', '2022-11-23 21:21:20', NULL, NULL),
(85, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/g3djfzowCMAJvKHockkvDcKdvYnH0Oj52TTmQYpP.pdf', 'null', '2022-11-23 21:21:20', '2022-11-23 21:21:20', NULL, NULL),
(86, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/PCZgcr52RCVCmW9dl3lzju6XfTV7jadnHNW5EfbE.pdf', 'null', '2022-11-23 21:21:21', '2022-11-23 21:21:21', NULL, NULL),
(87, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/tR1a6BxfzkLRFVDXIqRK1PieOr1QV0msIXzBnGEn.pdf', 'null', '2022-11-23 21:21:21', '2022-11-23 21:21:21', NULL, NULL),
(88, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/DX6bPrwov36B48RFkLhaTXTRzgAbJOmyRzMXzirv.pdf', 'null', '2022-11-23 21:21:21', '2022-11-23 21:21:21', NULL, NULL),
(89, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/5RU0FUrNO5F9kqbtfKNCKgP5CIN4ArAZRD3sU4mS.pdf', 'null', '2022-11-23 21:21:21', '2022-11-23 21:21:21', NULL, NULL),
(90, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/SAZhqLXuNjOXgz9wwcNftnjVjT4JZyWdBXgMIw9u.pdf', 'null', '2022-11-23 21:21:22', '2022-11-23 21:21:22', NULL, NULL),
(91, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/iO1KMOaXcDZp1HJ5n4rmKD35EB2hkgtR3GbkOWwd.pdf', 'null', '2022-11-23 21:21:22', '2022-11-23 21:21:22', NULL, NULL),
(92, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/ETvjmZe18mZS3ew0g6qhJGckE1wkkI3CKeDG5usS.pdf', 'null', '2022-11-23 21:21:23', '2022-11-23 21:21:23', NULL, NULL),
(93, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/glxF8khszX32TAPPg8RUnWhudOKdpe7eynPzmn8N.pdf', 'null', '2022-11-23 21:21:23', '2022-11-23 21:21:23', NULL, NULL),
(94, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/K0j5FO8nDy3LutINeL7ogcJ6jwqohCucq04i8B61.pdf', 'null', '2022-11-23 21:21:27', '2022-11-23 21:21:27', NULL, NULL),
(95, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/2fBD4th16YliX9bRL49rLojKKW5GI1ixfq7YZAvg.pdf', 'null', '2022-11-23 21:21:52', '2022-11-23 21:21:52', NULL, NULL),
(96, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/5qnJXqheDPnWHRsKoq99QG4FaQPHf1jkwxlDWn1Y.pdf', 'null', '2022-11-23 21:22:34', '2022-11-23 21:22:34', NULL, NULL),
(97, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/8YCNsAQICB71thvRnJ3xW3x14fTsoN4CmTPZqZSn.pdf', 'null', '2022-11-23 21:22:39', '2022-11-23 21:22:39', NULL, NULL),
(98, 'sheraz AlI', 'sherazdeveloper76@gmail.com', 'oijihuihuhuh anas', 'leave_request_verification/0pPkllFXCucLQTRxazRBHqDuxZPKCeLEeWU0rJI1.pdf', 'null', '2022-11-23 21:22:56', '2022-11-23 21:22:56', NULL, NULL),
(99, 'Wade Ashley', 'reder@mailinator.com', 'Eos voluptatem repu', 'leave_request_verification/jt8xjje0HGfEYBOVw3L9egtf3cvNutn5q8lMjhEf.png', 'null', '2022-11-23 21:29:52', '2022-11-23 21:29:52', NULL, NULL),
(100, 'Wade Ashley', 'reder@mailinator.com', 'Eos voluptatem repu', 'leave_request_verification/J1A0DGitqTfHNHCPcOSnQzlbdgDZclaeG4JwXUfj.png', 'null', '2022-11-23 21:30:08', '2022-11-23 21:30:08', NULL, NULL),
(101, 'Shelby Gomez', 'bavimoveg@mailinator.com', 'In praesentium paria', 'leave_request_verification/c12y5XYJFlDepDiQ013oMwj0oE4wAXgQjuMExpKh.pdf', 'null', '2022-11-23 21:50:48', '2022-11-23 21:50:48', NULL, NULL),
(102, 'Shelby Gomez', 'bavimoveg@mailinator.com', 'In praesentium paria', 'leave_request_verification/8V2pjrnn5YkKdIjtA5KNqx4WweMyz8R6NccUtWCu.pdf', 'null', '2022-11-23 21:50:57', '2022-11-23 21:50:57', NULL, NULL),
(103, 'Shelby Gomez', 'bavimoveg@mailinator.com', 'In praesentium paria', 'leave_request_verification/v3tlnX4ekMbFv0UXfh4aDh0Qem7nNrSvVLybXmWP.pdf', 'null', '2022-11-23 21:50:58', '2022-11-23 21:50:58', NULL, NULL),
(104, 'Shelby Gomez', 'bavimoveg@mailinator.com', 'In praesentium paria', 'leave_request_verification/0eEiSuLg9vO8BSubB3XDD4ErSS4CmuZA1w5OkdPd.pdf', 'null', '2022-11-23 21:50:58', '2022-11-23 21:50:58', NULL, NULL),
(105, 'Shelby Gomez', 'bavimoveg@mailinator.com', 'In praesentium paria', 'leave_request_verification/7auJKb2EJNt5SSRuHdmkUy1JSQJoMs7sF9aeYx4U.pdf', 'null', '2022-11-23 21:50:58', '2022-11-23 21:50:58', NULL, NULL),
(106, 'Shelby Gomez', 'bavimoveg@mailinator.com', 'In praesentium paria', 'leave_request_verification/rGZ95P9xmchUiWa3UKXOOb6Fo6waOeBIp19SDt74.pdf', 'null', '2022-11-23 21:50:59', '2022-11-23 21:50:59', NULL, NULL),
(107, 'Shelby Gomez', 'bavimoveg@mailinator.com', 'In praesentium paria', 'leave_request_verification/kxTC93ZAEntQxzq5pRDoXUMr8L9wXFGRbQUw0jDO.pdf', 'null', '2022-11-23 21:50:59', '2022-11-23 21:50:59', NULL, NULL),
(108, 'Shelby Gomez', 'bavimoveg@mailinator.com', 'In praesentium paria', 'leave_request_verification/ZeIxphCX2j64Wu1eugWLkeai5L3qfN4gKvdmVFUO.pdf', 'null', '2022-11-23 21:50:59', '2022-11-23 21:50:59', NULL, NULL),
(109, 'Shelby Gomez', 'bavimoveg@mailinator.com', 'In praesentium paria', 'leave_request_verification/ePu5fsxn0FZfev8PNAXDvQ0xJebWyqgGjewYTBQh.pdf', 'null', '2022-11-23 21:51:00', '2022-11-23 21:51:00', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_09_135640_create_permission_tables', 1),
(5, '2020_10_09_135732_create_products_table', 1),
(6, '2022_11_08_134342_create_leave_request_verification_table', 2),
(7, '2022_11_08_134742_create_regulations_table', 2),
(8, '2022_11_08_134759_create_religion_and_socity_table', 2),
(9, '2022_11_08_134814_create_reference_information_table', 2),
(10, '2022_11_08_134827_create_news_table', 2),
(11, '2022_11_08_134842_create_video_table', 2),
(12, '2022_11_23_082608_alter_regulations1_columns_add_table', 3),
(13, '2022_11_24_072637_alter_religion_and_socity_columns_add_table', 4),
(14, '2022_11_24_073808_alter_religion_and_socity_columns_add_table', 5),
(15, '2022_11_25_124958_alter_video_columns_add_table', 6),
(16, '2022_11_25_125348_alter_video1_columns_add_table', 6),
(17, '2022_11_28_085121_alter_leave_request_verification_columns_add_table', 6),
(18, '2022_11_29_052409_create_areas_table', 7),
(20, '2022_11_29_093251_create_places_table', 8),
(21, '2022_11_30_074047_create_religion_icons_table', 9),
(22, '2022_11_30_080401_alter_religion_and_society_column_add_table', 10),
(24, '2022_12_01_062512_leader_table', 11),
(25, '2022_12_01_113445_alter_leader_columns_add_table', 12),
(26, '2022_12_01_130753_alter_religion_and_socity1_columns_add_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `mode`
--

CREATE TABLE `mode` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mode`
--

INSERT INTO `mode` (`id`, `status`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `news_title`, `news_description`, `created_at`, `updated_at`) VALUES
(16, 'news/Bz9I5YrRaiVOogq93sEIewlWle1DrY8PRf0BsB6M.jpg', 'وفاقی حکومت نے معیشت کی بحالی کے لیے منصوبہ تیار کر لیا', 'انہوں نے ایک سوال کے جواب میں بتایا کہ اگر انہیں اقرا عزیز، سارہ خان اور ماہرہ خان میں سے کسی ایک کے ساتھ کام کرنا کا کہا جائے تو وہ ماہرہ خان کے ساتھ کام کرنا چاہیں گے، کیوں کہ انہوں نے آج تک ان کے ساتھ کام نہیں کیا۔ایک اور سوال کے جواب میں انہوں نے بتایا کہ وہ سینئر اداکاروں طلعت حسین اور فردوس جمال کو اپنا مینٹور مانتے ہیں اور انہوں نے ان کی اداکاری دیکھ دیکھ کر بہت کچھ سیکھا۔\r\nاسی حوالے سے بات کرتے ہوئے انہوں نے یہ بھی واضح کیا کہ انہیں فردوس جمال کی یہ بات بری نہیں لگی تھی، جس میں انہوں نے عمران اشرف کے لیے کہا تھا کہ انہیں اداکاری نہیں آتی۔عمران اشرف نے کہا کہ فردوس جمال ایک طرح سے ان کے والد کی طرح ہیں، والد بھی انہیں اکثر بولتے دیتے ہیں کہ انہیں اداکاری نہیں آتی۔انہوں نے کہا کہ اس وقت ان کی زندگی کا سب سے بڑا مقصد بیٹے کی پرورش اور زندگی ہے۔\r\nانہوں نے کہا کہ وہ دن میں 25بار بیٹے کے جسم کو دیکھ کر ان سے پوچھتے رہتے ہیں کہ انہیں کہیں چوٹ تو نہیں لگی، کہیں درد تو نہیں ہو رہا ۔ایک سوال کے جواب میں انہوں نے طلاق کے بعد اپنی زندگی میں آنیوالی مشکلات پر کھل کر بات کرنے سے معذرت کی اور کہا کہ وہ کوئی ایسی بات نہیں کہیں گے جس مستقبل میں سن کر ان کے بیٹے انہیں غلط سمجھیں۔ انہوں نے کہا کہ وہ بیٹے کی خاطر خاموش ہیں اور ان کے لیے اس وقت بیٹے کی زندگی سے بڑھ کر کچھ بھی نہیں۔انہوں نے کرن اشفاق سے طلاق کے بعد آنے والی مشکلات پر بات کرنے سے معذرت کرتے ہوئے مداحوں سے اپیل کی کہ وہ ان کیلئے ان کی سابق اہلیہ اور بیٹے کے لیے دعا کریں۔', '2023-01-29 15:05:45', '2023-01-29 16:51:47'),
(17, 'news/uRg5PolYtRDYkca6kWm2jS1jl1GFuq1dbCrEFWqt.jpg', 'حکومت کا پٹرولیم مصنوعات کی قیمتوں میں بڑے اضافے کا اعلان', '<div><h1 class=\"fs24 lh48 urdu ar rtl\" style=\"transition-duration: 0.5s; margin-bottom: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: 48px; font-family: nastliq, sans-serif; vertical-align: baseline; color: rgb(0, 0, 128); text-align: justify; direction: rtl !important;\">حکومت کا پٹرولیم مصنوعات کی قیمتوں میں بڑے اضافے کا اعلان</h1></div>', '2023-01-29 15:20:28', '2023-01-29 15:20:28'),
(18, 'news/RieWFsQU5DH1UxTFS3SeURHDjwUM6OQJrn4VnW5g.jpg', 'آئی ایم ایف کی شرائط سب کو رلائیں گی اور ذبح خانےمیں لے جائیں گی، شیخ رشید احم', '<div><h1 class=\"fs24 lh48 urdu ar rtl\" style=\"transition-duration: 0.5s; margin-bottom: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: 48px; font-family: nastliq, sans-serif; vertical-align: baseline; color: rgb(0, 0, 128); text-align: justify; direction: rtl !important;\">آئی ایم ایف کی شرائط سب کو رلائیں گی اور ذبح خانےمیں لے جائیں گی، شیخ رشید احم</h1></div>', '2023-01-29 15:45:44', '2023-01-29 15:45:44'),
(19, 'news/tJgKA2XzY8bjJx9NdQ4zzfXMrvCf7CJnw4muFkR9.jpg', 'غیرقانونی تارکین وطن کو واپس نہ بلایا تو ویزا پابندیاں لگا دیں گے: یورپی یونین', '<div><h1 class=\"fs24 lh48 urdu ar rtl\" style=\"transition-duration: 0.5s; margin-bottom: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: 48px; font-family: nastliq, sans-serif; vertical-align: baseline; color: rgb(0, 0, 128); text-align: justify; direction: rtl !important;\">غیرقانونی تارکین وطن کو واپس نہ بلایا تو ویزا پابندیاں لگا دیں گے: یورپی یونین</h1></div>', '2023-01-29 15:46:30', '2023-01-29 15:46:30'),
(20, 'news/YTmmZekkTRUev4Cml9VofDTNA3rOxbIZXbrknZOL.jpg', '’حکومت ابھی گیس کی قیمت بھی بڑھائے گی‘ سابق وزیر خزانہ کا دعویٰ', '<div><h1 class=\"fs24 lh48 urdu ar rtl\" style=\"transition-duration: 0.5s; margin-bottom: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: inherit; font-stretch: inherit; font-size: 24px; line-height: 48px; font-family: nastliq, sans-serif; vertical-align: baseline; color: rgb(0, 0, 128); text-align: justify; direction: rtl !important;\">’حکومت ابھی گیس کی قیمت بھی بڑھائے گی‘ سابق وزیر خزانہ کا دعویٰ</h1></div>', '2023-01-29 15:47:17', '2023-01-29 15:47:17');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_area_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confession_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `title`, `image`, `phone_no`, `email`, `description`, `lat`, `lng`, `map_area_name`, `confession_type`, `building_type`, `area_type`, `created_at`, `updated_at`) VALUES
(1, 'mosque 1', 'places/t7J9fWWpX3rmKRj0wONqLQSOb0PyExf9uQY7vY0U.png', '+923036141210', 'adaanas934342@gmail.com', '<div><br></div>', '31.518846', '74.303197', 'Pakistan, Province of Punjab, Lahore', '1', 'religious_building', '3', '2022-11-29 07:23:57', '2022-11-29 07:23:57'),
(2, 'mosque 2', 'places/pkvqa11UYN2r2LETPNy4Ztzf2VE0CuZplbeWzJXo.png', '+923036141210', 'nukta360@gmail.com', '<div><br></div>', '31.518846', '74.303197', 'Pakistan, Province of Punjab, Lahore', '1', 'religious_building', '3', '2022-11-29 07:38:34', '2022-11-29 07:38:34'),
(3, 'mosque 3', 'places/NLgOAkGs3fCipG9mK8rIuDUyxppk4ejVQNwr2ITw.png', '+923036141210', 'nukta360@gmail.com', '<div><br></div>', '42.316214', '69.581481', 'Kazakhstan, Shymkent, Respýblıka dańǵyly, 9Б', '1', 'religious_building', '6', '2022-11-29 09:49:32', '2022-11-29 09:49:32'),
(4, 'mosque 4', 'places/6SyqFe6haNTnhjzjzWruBNeaulRxVtYPxo3Nronm.png', '+923036141210', 'adaanas92@gmail.com', '<div><br></div>', '42.356223', '69.641695', 'Kazakhstan, Shymkent, Nursát-2 shaǵyn aýdany', '1', 'religious_building', '6', '2022-11-29 12:16:37', '2022-11-29 12:16:37'),
(5, 'mosque 5', 'places/6SyqFe6haNTnhjzjzWruBNeaulRxVtYPxo3Nronm.png', '+923036141210', 'adaanas92@gmail.com', '<div><br></div>', '55.763338', '37.565466', 'Kazakhstan, Shymkent, Nursát-2 shaǵyn aýdany', '1', 'religious_building', '6', '2022-11-29 12:16:37', '2022-11-29 12:16:37'),
(6, 'mosque 6', 'places/6SyqFe6haNTnhjzjzWruBNeaulRxVtYPxo3Nronm.png', '+923036141210', 'adaanas92@gmail.com', '<div><br></div>', '55.744522', '37.616378', 'Kazakhstan, Shymkent, Nursát-2 shaǵyn aýdany', '1', 'religious_building', '6', '2022-11-29 12:16:37', '2022-11-29 12:16:37'),
(7, 'mosque 7', 'places/6SyqFe6haNTnhjzjzWruBNeaulRxVtYPxo3Nronm.png', '+923036141210', 'adaanas92@gmail.com', '<div><br></div>', '55.77597', '37.5129', 'Kazakhstan, Shymkent, Nursát-2 shaǵyn aýdany', '1', 'religious_building', '6', '2022-11-29 12:16:37', '2022-11-29 12:16:37'),
(8, 'mosque 8', 'places/6SyqFe6haNTnhjzjzWruBNeaulRxVtYPxo3Nronm.png', '+923036141210', 'adaanas92@gmail.com', '<div><br></div>', '55.679195', '37.600961', 'Kazakhstan, Shymkent, Nursát-2 shaǵyn aýdany', '1', 'religious_building', '6', '2022-11-29 12:16:37', '2022-11-29 12:16:37'),
(9, 'mosque 9', 'places/6SyqFe6haNTnhjzjzWruBNeaulRxVtYPxo3Nronm.png', '+923036141210', 'adaanas92@gmail.com', '<div><br></div>', '55.746099', '37.434113', 'Kazakhstan, Shymkent, Nursát-2 shaǵyn aýdany', '1', 'religious_building', '6', '2022-11-29 12:16:37', '2022-11-29 12:16:37'),
(10, 'Christian place', 'places/SQOLbGadwJxBcLhDow2RPnJVZRfI7CSOKlY8aATa.png', '+923036141210', 'nukta360@gmail.com', '<div>des</div>', '42.312521', '69.600714', 'Kazakhstan, Shymkent, Qazybek Bı kóshesi, 7', '2', 'religious_building', '6', '2022-11-30 04:25:22', '2022-11-30 04:25:22'),
(11, 'Branch of the Republican Islamic Religious Association \"Spiritual Administration of Muslims of Kazakhstan\", Vainakh Mosque', 'places/eiIkBzhpuSsLtT7Qctwd7xjYSFfq3LN9uG44ToZ5.png', '+923036141210', 'nukta360@gmail.com', '<div><div><strong style=\"margin: 0px; padding: 0px; outline: none;\">Date of registration/re-registration</strong></div><div><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">12/22/1999, 08/17/2012</font></div><div><strong style=\"margin: 0px; padding: 0px; outline: none;\">Land area</strong></div><div><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">Land area 0.1878 ha</font></div><div><strong style=\"margin: 0px; padding: 0px; outline: none;\">Building area</strong></div><div><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">1011.4 sq.m</font></div><div><strong style=\"margin: 0px; padding: 0px; outline: none;\">Constant number of parishioners</strong></div><div><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">40</font></div><div><strong style=\"margin: 0px; padding: 0px; outline: none;\">Availability of a ramp</strong></div><div><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">There is</font></div><div><strong style=\"margin: 0px; padding: 0px; outline: none;\">Number of clergy</strong></div><div><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">3</font></div><div><strong style=\"margin: 0px; padding: 0px; outline: none;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">BIN, RNN, reg.&nbsp;</font><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">room</font></font></strong></div><div><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">991241015631</font></div><div><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">600500535273</font></div><div><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">1551-1910-F-L</font></div><div><strong style=\"margin: 0px; padding: 0px; outline: none;\">Number of parishioners on holidays</strong></div><div><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">1000 people</font></div><div><strong style=\"margin: 0px; padding: 0px; outline: none;\">Number of parishioners for a five-time prayer</strong></div><div><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">100</font></div><div><strong style=\"margin: 0px; padding: 0px; outline: none;\">Availability of CCTV cameras</strong></div><div><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">Not</font></div></div>', '42.294756', '69.637194', 'Kazakhstan, Shymkent, Enbekshi District', '1', 'literature_and_paraphernalia', '6', '2022-11-30 06:38:03', '2022-11-30 06:38:03'),
(12, 'Branch of the Republican Islamic Religious Association \"Spiritual Administration of Muslims of Kazakhstan\", Vainakh Mosque', 'places/wmJbmAS74FydE6wVi9AsQGQTkMYlHQoxp5cNgcG6.png', '+923036141210', 'nukta360@gmail.com', '<div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><strong style=\"margin: 0px; padding: 0px; outline: none;\">Date of registration/re-registration</strong></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">12/22/1999, 08/17/2012</font></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><strong style=\"margin: 0px; padding: 0px; outline: none;\">Land area</strong></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">Land area 0.1878 ha</font></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><strong style=\"margin: 0px; padding: 0px; outline: none;\">Building area</strong></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">1011.4 sq.m</font></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><strong style=\"margin: 0px; padding: 0px; outline: none;\">Constant number of parishioners</strong></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">40</font></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><strong style=\"margin: 0px; padding: 0px; outline: none;\">Availability of a ramp</strong></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">There is</font></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><strong style=\"margin: 0px; padding: 0px; outline: none;\">Number of clergy</strong></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">3</font></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><strong style=\"margin: 0px; padding: 0px; outline: none;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">BIN, RNN, reg.&nbsp;</font><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">room</font></font></strong></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">991241015631</font></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">600500535273</font></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">1551-1910-F-L</font></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><strong style=\"margin: 0px; padding: 0px; outline: none;\">Number of parishioners on holidays</strong></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">1000 people</font></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><strong style=\"margin: 0px; padding: 0px; outline: none;\">Number of parishioners for a five-time prayer</strong></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">100</font></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><strong style=\"margin: 0px; padding: 0px; outline: none;\">Availability of CCTV cameras</strong></div><div style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 18px;\"><font style=\"margin: 0px; padding: 0px; outline: none; vertical-align: inherit;\">Not</font></div></div>', '42.319594', '69.649762', 'Kazakhstan, Shymkent, Novostroıka-2 qysqa kóshesі, 9', '1', 'religious_building', '6', '2022-11-30 07:15:09', '2022-11-30 07:15:09'),
(13, 'sheraz', '', '03008758478', 'sherazdeveloper76@gmail.com', '<div><b><i><span style=\"font-size:18px;\">testing</span></i></b></div>', '42.294756', '69.637194', 'Kazakhstan, Shymkent, Enbekshi District', '3', 'religious_building', '6', '2022-12-01 14:12:22', '2022-12-01 14:12:22'),
(14, 'Eveniet nihil autem', 'places/gAUey1CXPyZEzhzoSB95cAUpduX2geqvlVn8p36q.png', '+1 (426) 148-6508', 'puguj@mailinator.com', '<div><br></div>', '42.403937', '69.875266', 'Kazakhstan, Túrkistan oblysy, Sairam District', '5', 'prayer_room', '6', '2022-12-01 22:17:49', '2022-12-01 22:17:49'),
(15, 'Ut iste impedit deb', '', '+1 (624) 638-3255', 'zanotywit@mailinator.com', '<div><br></div>', '44.29477', '68.676347', 'Kazakhstan, Túrkistan oblysy', '2', 'religious_building', '6', '2022-12-01 22:18:49', '2022-12-01 22:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reference_information`
--

CREATE TABLE `reference_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reference_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_descripition` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reference_information`
--

INSERT INTO `reference_information` (`id`, `reference_title`, `reference_descripition`, `created_at`, `updated_at`) VALUES
(2, 'djhefgewhj', '<div>jdsjchdsjfdj</div>', '2022-11-14 19:37:13', '2022-11-14 19:37:13'),
(3, 'testing in the how are you?', 'skxjsakhxnjsaxbnasjxbs', '2022-11-23 20:16:47', '2022-11-23 20:18:24'),
(4, 'who', '<div>dcjdsjcnkncjwcionfkwdoncfwo</div><div>dcjwcniwdonciwoniwo]</div><div>spodjowpjcowenikcnikwenocikwenoicfnw</div>', '2022-11-23 20:20:18', '2022-11-23 20:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `regulations`
--

CREATE TABLE `regulations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regulations`
--

INSERT INTO `regulations` (`id`, `file`, `created_at`, `updated_at`, `title`) VALUES
(3, 'regulations/aVNhdMaLK2ILmjzj89fo9rKoCF774ZDt21mKloEF.pdf', '2022-11-23 16:39:08', '2022-11-23 16:39:08', 'Конституция Республики Казахстан'),
(4, 'regulations/7cEwTtQw1pOhgmr51PI9R2HtduroqDU6bcJZflwI.pdf', '2022-11-23 16:39:55', '2022-11-23 16:39:55', 'Закон Республики Казахстан \"О религиозной деятельности и религиозных объединениях\"'),
(5, 'regulations/mRr9Vj4EwkFjstqQOmTNjJIaO8I1jwwgdDFnrKs3.png', '2022-11-23 16:40:25', '2022-11-23 16:40:25', 'О создании Совета по связям с религиозными объединениями'),
(6, 'regulations/4KbpI9NwVKKRG7KgO7TWzErh19iz3QwCnukuG2Lq.png', '2022-11-23 16:40:54', '2022-11-23 16:49:40', 'Об утверждении положения и состава Совета');

-- --------------------------------------------------------

--
-- Table structure for table `religion_and_socity`
--

CREATE TABLE `religion_and_socity` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `religion_and_socity`
--

INSERT INTO `religion_and_socity` (`id`, `title`, `image`, `created_at`, `updated_at`, `description`, `icon_id`, `intro`) VALUES
(1, 'Islam', 'religion_and_socity/vKIfqseURrA1nTRG8AKWt7XdXn808Ol5QGixt6P9.png', '2022-11-24 15:39:11', '2022-12-01 21:14:39', '<div><font style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: \" roboto=\"\" condensed\",=\"\" sans-serif;=\"\" font-size:=\"\" 20px;=\"\" vertical-align:=\"\" inherit;\"=\"\">Islam (Arabic, islam - tradition, entrusting oneself (to God), lit. - obedience) is a monotheistic religion, one of the world religions (along with Christianity and Buddhism), its followers are Muslims.&nbsp;</font><font style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: \" roboto=\"\" condensed\",=\"\" sans-serif;=\"\" font-size:=\"\" 20px;=\"\" vertical-align:=\"\" inherit;\"=\"\">Originated in Arabia in the 7th century.&nbsp;</font><font style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: \" roboto=\"\" condensed\",=\"\" sans-serif;=\"\" font-size:=\"\" 20px;=\"\" vertical-align:=\"\" inherit;\"=\"\">The founder is Mohammed.</font><br></div>', '1', 'Free Islamic Intro Template/Islamic After Effect - Top Islamic Intro After Effects Templates · Free Motion Graphics Background Animation.'),
(2, 'Christianity', 'religion_and_socity/oByfWKb7Ma34ucLJjIR9c5mJU00lkmjozjjdm4tN.png', '2022-11-24 16:03:00', '2022-11-30 04:22:59', '<div><font style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: \" roboto=\"\" condensed\",=\"\" sans-serif;=\"\" font-size:=\"\" 20px;=\"\" background-color:=\"\" rgb(244,=\"\" 244,=\"\" 244);=\"\" vertical-align:=\"\" inherit;\"=\"\">Christianity is one of the three so-called.&nbsp;</font><font style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: \" roboto=\"\" condensed\",=\"\" sans-serif;=\"\" font-size:=\"\" 20px;=\"\" background-color:=\"\" rgb(244,=\"\" 244,=\"\" 244);=\"\" vertical-align:=\"\" inherit;\"=\"\">world religions (along with Buddhism and Islam).&nbsp;</font><font style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: \" roboto=\"\" condensed\",=\"\" sans-serif;=\"\" font-size:=\"\" 20px;=\"\" background-color:=\"\" rgb(244,=\"\" 244,=\"\" 244);=\"\" vertical-align:=\"\" inherit;\"=\"\">It has three main directions: Orthodoxy, Catholicism, Protestantism.</font><br></div>', '2', NULL),
(3, 'Buddhism', 'religion_and_socity/e51F3EH1vxgAJUmSenDUC5Pk0T0HHNc4svQYH9MP.png', '2022-11-24 16:04:06', '2022-12-01 14:12:52', '<div><font style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: \" roboto=\"\" condensed\",=\"\" sans-serif;=\"\" font-size:=\"\" 20px;=\"\" vertical-align:=\"\" inherit;\"=\"\">Buddhism is one of the three world religions.&nbsp;</font><font style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: \" roboto=\"\" condensed\",=\"\" sans-serif;=\"\" font-size:=\"\" 20px;=\"\" vertical-align:=\"\" inherit;\"=\"\">Its founder is Shakya Muni, a sage from the Shakya family.&nbsp;</font><font style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: \" roboto=\"\" condensed\",=\"\" sans-serif;=\"\" font-size:=\"\" 20px;=\"\" vertical-align:=\"\" inherit;\"=\"\">Subsequently, he will be called Buddha, which means \"enlightened.\"&nbsp;</font><font style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: \" roboto=\"\" condensed\",=\"\" sans-serif;=\"\" font-size:=\"\" 20px;=\"\" vertical-align:=\"\" inherit;\"=\"\">This religion originated in India.</font><br></div>', '3', NULL),
(4, 'Jewish religion', 'religion_and_socity/MZzyg9Fmb0rr1TWJXJU20imIF829oQ1l325J28e9.png', '2022-11-24 16:05:09', '2022-11-24 16:13:22', '<div><font style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: \"Roboto Condensed\", sans-serif; font-size: 20px; background-color: rgb(244, 244, 244); vertical-align: inherit;\">Judaism is the oldest of the Abrahamic religions in the world. </font><font style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: \"Roboto Condensed\", sans-serif; font-size: 20px; background-color: rgb(244, 244, 244); vertical-align: inherit;\">Judaism is practiced by 15 million people, of which 5 million live in Israel.</font><br></div>', NULL, NULL),
(5, 'New religions', 'religion_and_socity/bnNw1YggF1VpMrTSejt28c7sxBMUAcmpJV3uSlet.png', '2022-11-24 16:17:37', '2022-11-24 16:17:37', '<div><font style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 20px; vertical-align: inherit;\">The history of the emergence of some new religious associations is connected with other pre-existing religious organizations.&nbsp;</font><font style=\"margin: 0px; padding: 0px; outline: none; color: rgb(0, 0, 0); font-family: &quot;Roboto Condensed&quot;, sans-serif; font-size: 20px; vertical-align: inherit;\">New religious associations are very diverse in ideology and activities.</font><br></div>', NULL, NULL),
(6, 'new religion', 'religion_and_socity/OgiFAErsAbdIvVuUWCdcTnE4hY5dk3GnqAwBJCvp.png', '2022-11-30 03:20:41', '2022-11-30 03:23:55', '<div>lorem ipsum</div>', '5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `religion_icons`
--

CREATE TABLE `religion_icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `religion_icons`
--

INSERT INTO `religion_icons` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Islam', 'https://religionmap.kz/upload/images/nf7rdah00g0w8owwk4s8.svg', '2022-11-30 03:01:26', '2022-11-30 03:01:26'),
(2, 'Christianity', 'https://religionmap.kz/upload/images/hy7yukd8ptkwwg08csco.svg', '2022-11-30 03:01:26', '2022-11-30 03:01:26'),
(3, 'Buddhism', 'https://religionmap.kz/upload/images/oyg1q7rypi8gcg8wcwcs.svg', '2022-11-30 03:01:26', '2022-11-30 03:01:26'),
(4, 'Jewish religion', 'https://religionmap.kz/upload/images/dvju2gmnun4ggcokocw8.svg', '2022-11-30 03:01:26', '2022-11-30 03:01:26'),
(5, 'New religions', 'https://religionmap.kz/upload/images/rfjetx2hdg0css0k0w44.svg', '2022-11-30 03:01:26', '2022-11-30 03:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-11-08 21:21:50', '2022-11-08 21:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$mWDIxc1v2doEu2s7zPk8HO.2sGKDkEO./ztqLbiwe6JEX72i4uNE6', 'WFq4CTyZiCJHf1QXuM5ARaZrA3hGHYEUP9hTFZoKMntENGvIHSMeN6ot6AAE', '2022-11-08 21:21:50', '2022-11-08 21:21:50'),
(3, 'name', 'email', NULL, '$2y$10$FiPXpQVsbajq5IVUznfgluoYcP5/NPR3NJ9mszONpDvqHTHbh2VHG', NULL, '2023-01-31 22:01:00', '2023-01-31 22:01:00'),
(4, 'sheraz', 'sherazdeveloper76@gmail.com', NULL, '$2y$10$HFdynkqpC3yZtUmh1TTJI.xAR3QA7iVkXvIp0atNYJ9jpilVYL/lW', NULL, '2023-01-31 22:01:00', '2023-01-31 22:01:00'),
(9, 'ali', 'ali@gmail.com', NULL, '$2y$10$90oe3Z9x/Oil6h4oFhscMux/6bPbRPyIIqxbkAqS2Q/ncnxXl15l2', NULL, '2023-01-31 22:11:04', '2023-01-31 22:11:04'),
(10, 'sherazali', 'she@gmail.com', NULL, '$2y$10$97T1Kv8i2aoUN3By1TOCKeUSXf0PMNht9Ofo8Y6zksr5kpUWg0BRG', NULL, '2023-01-31 22:11:04', '2023-01-31 22:11:04'),
(11, 'anas', 'anas@gmail.com', NULL, '$2y$10$Se.bi.n75oNZ.9iST8Vd/.P1dd.HHEhmzRahPmMOxZNp2tE2dQhLu', NULL, '2023-01-31 22:11:05', '2023-01-31 22:11:05'),
(12, 'my', 'my@gmail.com', NULL, '$2y$10$5UPdStW6Y2HktxTbP4MiSuHHcnCdwNBHx7VdqaixbMspJKQHO7wxO', NULL, '2023-01-31 22:11:05', '2023-01-31 22:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `video_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `created_at`, `updated_at`, `video_url`) VALUES
(5, 'پٹرول اور ڈیزل مزید مہنگا کیا جائے گا جب کہ حکومت گیس کی قیمت بھی بڑھائے گی، جس کے ساتھ ہی اب کھانے پینے کی اشیاء کی قیمتوں میں 45 سے 50 فیصد اضافہ ہوجائے گا', '2023-01-29 16:10:36', '2023-01-29 16:10:36', '<iframe width=\"644\" height=\"362\" src=\"https://www.youtube.com/embed/sUKwTVAc0Vo\" title=\"ARY NEWS LIVE | Latest Pakistan News 24/7 | Headlines, Bulletins, Breaking News & Exclusive Coverage\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(6, 'کوئٹہ سے کراچی جانے والی مسافر کوچ کھائی میں', '2023-01-29 16:18:16', '2023-01-29 16:18:16', '<iframe width=\"644\" height=\"362\" src=\"https://www.youtube.com/embed/6WGM2B9py-M\" title=\"ARY News Headlines | 9 AM | 29th January 2023\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(7, 'دارالحکومت کوئٹہ سے کراچی جانے والی مسافر بس لسبیلہ کے قریب حادثے کا شکار ہوگئی', '2023-01-29 16:19:33', '2023-01-29 16:19:33', '<iframe width=\"644\" height=\"362\" src=\"https://www.youtube.com/embed/YlKY5PU4M4E\" title=\"🔴 BOL NEWS LIVE | Latest Pakistan News 24/7 | Headlines Bulletins Breaking News & Exclusive Coverage\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(8, '48 افراد سوار تھے، حادثے کے بعد 3 افراد کو فوری طور پر ریسکیو کرلیا گیا لیکن اس کے بعد بس میں آگ لگنے کے باعث دیگر افراد پھنس کر رہ گئے', '2023-01-29 16:25:15', '2023-01-29 16:25:15', '<iframe width=\"644\" height=\"362\" src=\"https://www.youtube.com/embed/DpuGzdb9VAI\" title=\"Highlights: 2nd T20I at Colombo, RPICS – Pakistan in Sri Lanka 2015\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leader`
--
ALTER TABLE `leader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_request_verification`
--
ALTER TABLE `leave_request_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mode`
--
ALTER TABLE `mode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference_information`
--
ALTER TABLE `reference_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regulations`
--
ALTER TABLE `regulations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religion_and_socity`
--
ALTER TABLE `religion_and_socity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religion_icons`
--
ALTER TABLE `religion_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leader`
--
ALTER TABLE `leader`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `leave_request_verification`
--
ALTER TABLE `leave_request_verification`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `mode`
--
ALTER TABLE `mode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reference_information`
--
ALTER TABLE `reference_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `regulations`
--
ALTER TABLE `regulations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `religion_and_socity`
--
ALTER TABLE `religion_and_socity`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `religion_icons`
--
ALTER TABLE `religion_icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
