-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 09:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `skydining`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `image`, `price`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Cade Phelps', '20220609135609.png', '955', 'veg', '2022-06-09 08:26:09', '2022-06-09 08:26:09'),
(2, 'Leigh Swanson', '20220609135620.png', '527', 'nonveg', '2022-06-09 08:26:20', '2022-06-09 08:26:20'),
(3, 'Trevor Pierce', '20220609135633.png', '559', 'veg', '2022-06-09 08:26:33', '2022-06-09 08:26:33'),
(4, 'test1', '20220610165430.webp', '100', 'veg', '2022-06-10 16:54:30', '2022-06-10 16:54:30');

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
(4, '2021_07_30_082247_create_admins_table', 1),
(5, '2022_05_27_163455_create_products_table', 1),
(6, '2022_05_30_201753_create_promocodes_table', 1),
(7, '2022_06_04_042548_create_customers_table', 1),
(8, '2022_06_04_133340_create_slots_table', 1),
(9, '2022_06_05_051840_create_orders_table', 1),
(10, '2022_06_05_090518_create_order_products_table', 1),
(11, '2022_06_08_091848_create_sessions_table', 1),
(12, '2022_06_09_042210_create_menus_table', 1),
(13, '2022_06_15_200854_create_registrations_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_product` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_req` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_no` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_name` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `people` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `date`, `month`, `year`, `slot`, `additional_product`, `special_req`, `gst_no`, `co_name`, `contact`, `people`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Erich', '15', '06', '2022', '1', NULL, NULL, NULL, NULL, NULL, '05', NULL, '2022-06-10 05:54:37', '2022-06-10 05:54:37'),
(2, 'Erich', '15', '06', '2022', '3', NULL, NULL, NULL, NULL, NULL, '05', NULL, '2022-06-10 05:54:53', '2022-06-10 05:54:53'),
(3, 'yash m', '15', '06', '2022', '1', NULL, NULL, NULL, NULL, NULL, '10', NULL, '2022-06-10 11:47:34', '2022-06-10 11:47:34'),
(4, 'Yash', '15', '06', '2022', '1', NULL, NULL, NULL, NULL, NULL, '16', NULL, '2022-06-10 16:49:08', '2022-06-10 16:49:08'),
(5, 'yash m', '15', '06', '2022', '1', NULL, NULL, NULL, NULL, NULL, '03', NULL, '2022-06-11 07:35:21', '2022-06-11 07:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `price`, `gst`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Cally Holder', '20220616102443.jpg', 'Iusto molestias illu', '78', NULL, 'n-veg', '2022-06-16 04:54:43', '2022-06-16 04:54:43'),
(2, 'Harrison Mcguire', '20220616102500.png', 'Aut necessitatibus q', '461', NULL, 'cold', '2022-06-16 04:55:00', '2022-06-16 04:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `promocodes`
--

CREATE TABLE `promocodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promocodes`
--

INSERT INTO `promocodes` (`id`, `name`, `discount`, `created_at`, `updated_at`) VALUES
(1, '98fcnk', '10', '2022-06-16 13:05:23', '2022-06-16 13:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slot_time` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `people` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razorpay_order_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razorpay_signature` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razorpay_payment_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `email`, `phone`, `slot_time`, `date`, `month`, `year`, `people`, `razorpay_order_id`, `razorpay_signature`, `razorpay_payment_id`, `total`, `created_at`, `updated_at`) VALUES
(1, 'Nihir Zala', 'zalanihir8866@gmail.com', '0971474270', 'Mollitia minim sunt', '17', '06', '2022', '10', 'order_JhtqZWXqqstJp1', '835116e5372337d0e004da11ffc681d6c3f7041ed072237d88be88626837ccdc', 'pay_JhtqvNtKnlTIuO', NULL, '2022-06-15 14:49:36', '2022-06-15 14:49:36'),
(2, 'Nihir Zala', 'zalanihir8866@gmail.com', '0971474270', 'Mollitia minim sunt', '17', '06', '2022', '10', 'order_JhttS3oq5UMXGa', '37f2bdd299e7d206df5ec0eef33166b03578e50cbf5ca49580620ba4a7d3e1d1', 'pay_JhttmumgkrggBq', NULL, '2022-06-15 14:52:18', '2022-06-15 14:52:18'),
(3, 'Wynter', 'pysucyf@mailinator.com', '1234567890', 'Mollitia minim sunt', '17', '06', '2022', '04', 'order_Ji8MbHAqDpEvdP', 'd4e3fcf325b894bc5eadf4622173bea6371bd2e72d7b42a6d55a9ec34e59cad4', 'pay_Ji8MtTRS6fsSmZ', NULL, '2022-06-16 05:01:31', '2022-06-16 05:01:31'),
(4, 'Wynter', 'pysucyf@mailinator.com', '1234567890', 'Mollitia minim sunt', '17', '06', '2022', '04', 'order_Ji8MbHAqDpEvdP', 'd4e3fcf325b894bc5eadf4622173bea6371bd2e72d7b42a6d55a9ec34e59cad4', 'pay_Ji8MtTRS6fsSmZ', NULL, '2022-06-16 05:03:04', '2022-06-16 05:03:04'),
(5, 'Wynter', 'pysucyf@mailinator.com', '1234567890', 'Mollitia minim sunt', '17', '06', '2022', '04', 'order_Ji8MbHAqDpEvdP', 'd4e3fcf325b894bc5eadf4622173bea6371bd2e72d7b42a6d55a9ec34e59cad4', 'pay_Ji8MtTRS6fsSmZ', NULL, '2022-06-16 05:03:17', '2022-06-16 05:03:17'),
(6, 'Wynter', 'pysucyf@mailinator.com', '1234567890', 'Mollitia minim sunt', '17', '06', '2022', '04', 'order_Ji8MbHAqDpEvdP', 'd4e3fcf325b894bc5eadf4622173bea6371bd2e72d7b42a6d55a9ec34e59cad4', 'pay_Ji8MtTRS6fsSmZ', NULL, '2022-06-16 05:03:26', '2022-06-16 05:03:26'),
(7, 'Wynter', 'pysucyf@mailinator.com', '1234567890', 'Mollitia minim sunt', '17', '06', '2022', '04', 'order_Ji8MbHAqDpEvdP', 'd4e3fcf325b894bc5eadf4622173bea6371bd2e72d7b42a6d55a9ec34e59cad4', 'pay_Ji8MtTRS6fsSmZ', NULL, '2022-06-16 05:06:37', '2022-06-16 05:06:37'),
(8, 'Piper', 'fehi@mailinator.com', '1234567890', 'Mollitia minim sunt', '17', '06', '2022', '10', 'order_Ji8TNJ8mLHdBpo', '536fe691bd04510f32eed426c6e12722f75a935df0c49137e9223742f2733e4b', 'pay_Ji8ThvF0bFdcTw', NULL, '2022-06-16 05:07:58', '2022-06-16 05:07:58'),
(9, 'Piper', 'fehi@mailinator.com', '1234567890', 'Mollitia minim sunt', '17', '06', '2022', '10', 'order_Ji8TNJ8mLHdBpo', '536fe691bd04510f32eed426c6e12722f75a935df0c49137e9223742f2733e4b', 'pay_Ji8ThvF0bFdcTw', NULL, '2022-06-16 05:09:31', '2022-06-16 05:09:31'),
(10, 'Shea', 'pibarazo@mailinator.com', '1234567890', 'Mollitia minim sunt', '17', '06', '2022', '05', 'order_Ji9wOl0VSw4LsL', 'c04562635bc7894df4a0c68611f25a43d8ae66925f291ba0b99ed4245c414f7a', 'pay_Ji9wiWVubGmYHd', NULL, '2022-06-16 06:34:09', '2022-06-16 06:34:09'),
(11, 'Shea', 'pibarazo@mailinator.com', '1234567890', 'Mollitia minim sunt', '17', '06', '2022', '05', 'order_Ji9wOl0VSw4LsL', 'c04562635bc7894df4a0c68611f25a43d8ae66925f291ba0b99ed4245c414f7a', 'pay_Ji9wiWVubGmYHd', NULL, '2022-06-16 06:35:43', '2022-06-16 06:35:43'),
(12, 'Shea', 'pibarazo@mailinator.com', '1234567890', 'Mollitia minim sunt', '17', '06', '2022', '05', 'order_Ji9wOl0VSw4LsL', 'c04562635bc7894df4a0c68611f25a43d8ae66925f291ba0b99ed4245c414f7a', 'pay_Ji9wiWVubGmYHd', '2500', '2022-06-16 06:41:54', '2022-06-16 06:41:54'),
(13, 'Shea', 'pibarazo@mailinator.com', '1234567890', 'Mollitia minim sunt', '17', '06', '2022', '05', 'order_Ji9wOl0VSw4LsL', 'c04562635bc7894df4a0c68611f25a43d8ae66925f291ba0b99ed4245c414f7a', 'pay_Ji9wiWVubGmYHd', '2500', '2022-06-16 06:43:16', '2022-06-16 06:43:16'),
(14, 'Shea', 'pibarazo@mailinator.com', '1234567890', 'Mollitia minim sunt', '17', '06', '2022', '05', 'order_Ji9wOl0VSw4LsL', 'c04562635bc7894df4a0c68611f25a43d8ae66925f291ba0b99ed4245c414f7a', 'pay_Ji9wiWVubGmYHd', '2500', '2022-06-16 06:44:16', '2022-06-16 06:44:16'),
(15, 'Shea', 'pibarazo@mailinator.com', '1234567890', 'Mollitia minim sunt', '17', '06', '2022', '05', 'order_Ji9wOl0VSw4LsL', 'c04562635bc7894df4a0c68611f25a43d8ae66925f291ba0b99ed4245c414f7a', 'pay_Ji9wiWVubGmYHd', '2500', '2022-06-16 06:45:00', '2022-06-16 06:45:00'),
(16, 'Nihir', 'test@rootways.com', '1234567890', 'Mollitia minim sunt', '17', '06', '2022', '03', 'order_JiA8xCAdARutM1', 'd26e2426e9996c89b20326b62269b87e5f6ad13443957c09e512e956b94696f3', 'pay_JiA9BzV0TMdqel', '1500', '2022-06-16 06:45:57', '2022-06-16 06:45:57'),
(17, 'Nihir', 'test@rootways.com', '1234567890', 'Mollitia minim sunt', '17', '06', '2022', '03', 'order_JiA8xCAdARutM1', 'd26e2426e9996c89b20326b62269b87e5f6ad13443957c09e512e956b94696f3', 'pay_JiA9BzV0TMdqel', '1500', '2022-06-16 06:53:56', '2022-06-16 06:53:56'),
(18, 'Nihir Zala', 'zalanihir8866@gmail.com', '0971474270', '10:00 AM', '16', '06', '2022', '10', 'order_JiEuJoUPD9s3cN', '4b73b8246dd5da5b964727a000e207fa3d915e5147d37e8a24ffb580e822806f', 'pay_JiEvo0nnwuUBXI', '20000', '2022-06-16 11:26:52', '2022-06-16 11:26:52'),
(19, 'Nihir Zala', 'zalanihir8866@gmail.com', '0971474270', 'Mollitia minim sunt', '17', '06', '2022', '02', 'order_JiF3ACFDv1l08D', 'ae94788cf23872f7a94e6efb7788085f6a9a94d86f2b2bf72c0ff042fe9f2c70', 'pay_JiF3cPyDBHBpTg', '1000', '2022-06-16 11:34:13', '2022-06-16 11:34:13'),
(20, 'Nihir Zala', 'zalanihir8866@gmail.com', '0971474270', 'Mollitia minim sunt', '17', '06', '2022', '06', 'order_JiFGLMoMSF05Ut', 'cebd0cd881b928f2d588daeef84a922a783c7d02d0c2614942c2bbbee4b2a800', 'pay_JiFHEEEzcQs0DR', '3000', '2022-06-16 11:47:15', '2022-06-16 11:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `veg_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nonveg_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `name`, `time`, `date`, `price`, `menu_id`, `created_at`, `updated_at`, `veg_id`, `nonveg_id`) VALUES
(1, 'Morning', '10:00 AM', '2022-06-15', '2000', 1, '2022-06-09 08:27:01', '2022-06-09 08:27:01', '3', '2'),
(2, 'Noon', '12:30 AM', '2022-06-15', '20000', 1, '2022-06-09 08:27:23', '2022-06-09 08:27:23', '1', '2'),
(3, 'Evening', '4:00 PM', '2022-06-15', '524', 1, '2022-06-09 08:27:45', '2022-06-09 08:27:45', '4', '2'),
(4, 'Night', '8:00 AM', '2022-06-15', '2000', 4, '2022-06-09 08:28:10', '2022-06-09 08:28:10', '3', '2'),
(5, 'Nihir Zala', 'Mollitia minim sunt', '2022-06-17', '500', 1, '2022-06-15 14:32:32', '2022-06-15 14:32:32', '1', '2'),
(6, 'Ishmael Fulton', 'Pariatur Voluptates', '2022-06-16', '3000', 4, '2022-06-16 03:58:55', '2022-06-16 03:58:55', '4', '2'),
(7, 'Aidan Brooks', 'At sed ea est natus', '2022-06-18', '5000', 3, '2022-06-16 04:00:13', '2022-06-16 04:00:13', '3', '2'),
(8, 'Karina Barnes', 'Doloribus in id sit', '2022-06-16', '6000', 2, '2022-06-16 04:02:20', '2022-06-16 04:02:20', '1', '2'),
(9, 'Cailin Hudson', 'Voluptates est unde', '2022-06-17', '941', 1, '2022-06-16 04:15:12', '2022-06-16 04:15:12', '1', '2'),
(10, 'Boris Rose', 'Esse duis adipisci e', '2022-06-18', '1000', NULL, '2022-06-16 13:11:09', '2022-06-16 13:11:09', '3', '2');

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
(1, 'admin', 'admin@example.com', NULL, '$2y$10$7Ds2Ufcph9eQ8zL9WNP2e.poHfpCng1C4pkSjLLFKE53fwOqdzt4K', NULL, '2022-06-09 08:17:18', '2022-06-09 08:17:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promocodes`
--
ALTER TABLE `promocodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `promocodes`
--
ALTER TABLE `promocodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
