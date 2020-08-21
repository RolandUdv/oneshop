-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2020 at 08:00 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oneshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `service_price` decimal(6,2) DEFAULT 0.00,
  `service_length` tinyint(6) NOT NULL DEFAULT 0,
  `dateofbooking` date NOT NULL,
  `timeslot` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'N/A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `created_at`, `updated_at`, `user_id`, `username`, `firstname`, `surname`, `email`, `service_id`, `service_name`, `service_price`, `service_length`, `dateofbooking`, `timeslot`) VALUES
(1, '2020-02-19 00:00:00', '2020-02-19 19:57:50', 1, 'admin', 'admin', 'admin', '', 5, 'Nice Haircut', '4.99', 0, '0000-00-00', ''),
(4, '2020-02-22 00:00:00', '2020-02-22 00:33:55', 3, 'Bob', 'safasfasf', 'sfafsafsa', '', 4, '4', '4.00', 4, '0000-00-00', '12:00'),
(85, '2020-07-26 18:46:24', '2020-07-26 18:46:24', 37, 'admin', 'admin', 'admin', 'admin@admin.com', 21, 'Skin Fade', '18.00', 0, '2020-07-30', '10:00'),
(86, '2020-07-26 18:47:41', '2020-07-26 18:47:41', 37, 'admin', 'admin', 'admin', 'admin@admin.com', 21, 'Skin Fade', '18.00', 0, '2020-04-12', '10:00'),
(87, '2020-07-26 18:48:01', '2020-07-26 18:48:01', 37, 'admin', 'admin', 'admin', 'admin@admin.com', 21, 'Skin Fade', '18.00', 0, '2020-07-15', '10:00'),
(88, '2020-07-26 18:51:38', '2020-07-26 18:51:38', 37, 'admin', 'admin', 'admin', 'admin@admin.com', 21, 'Skin Fade', '18.00', 0, '2020-07-31', '10:00'),
(89, '2020-07-26 19:01:06', '2020-07-26 19:01:06', 37, 'admin', 'admin', 'admin', 'admin@admin.com', 21, 'Skin Fade', '18.00', 0, '2020-08-01', '10:00'),
(90, '2020-07-26 19:01:20', '2020-07-26 19:01:20', 37, 'admin', 'admin', 'admin', 'admin@admin.com', 25, 'Mens Restyle', '4.00', 0, '2020-08-01', '10:30'),
(91, '2020-08-19 14:55:35', '2020-08-19 14:55:35', 37, 'admin', 'admin', 'admin', 'admin@admin.com', 23, 'Haircut', '14.00', 0, '2020-09-01', '11:00'),
(92, '2020-08-19 15:41:21', '2020-08-19 15:41:21', 37, 'admin', 'admin', 'admin', 'admin@admin.com', 25, 'Mens Restyle', '40.00', 0, '2020-09-06', '14:30'),
(93, '2020-08-19 16:21:16', '2020-08-19 16:21:16', 37, 'admin', 'admin', 'admin', 'admin@admin.com', 25, 'Mens Restyle', '40.00', 0, '2020-09-09', '16:30'),
(94, '2020-08-19 16:21:31', '2020-08-19 16:21:31', 37, 'admin', 'admin', 'admin', 'admin@admin.com', 21, 'Skin Fade', '18.00', 0, '2020-08-23', '15:00'),
(95, '2020-08-19 16:21:50', '2020-08-19 16:21:50', 37, 'admin', 'admin', 'admin', 'admin@admin.com', 24, 'Gents Trim', '15.00', 0, '2020-08-21', '12:30'),
(96, '2020-08-19 16:43:24', '2020-08-19 16:43:24', 40, 'Jack', 'Jack', 'Taylor', 'demo2@demo.com', 21, 'Skin Fade', '18.00', 0, '2020-08-29', '11:30'),
(97, '2020-08-19 16:43:44', '2020-08-19 16:43:44', 40, 'Jack', 'Jack', 'Taylor', 'demo2@demo.com', 29, 'VIP Service', '25.00', 0, '2020-09-08', '13:30'),
(98, '2020-08-19 16:46:57', '2020-08-19 16:46:57', 41, 'James', 'James', 'Mcgee', 'demo3@demo.com', 28, 'Children\'s Trim', '10.00', 0, '2020-08-23', '15:30'),
(99, '2020-08-19 16:47:21', '2020-08-19 16:47:21', 41, 'James', 'James', 'Mcgee', 'demo3@demo.com', 24, 'Gents Trim', '15.00', 0, '2020-09-09', '17:30'),
(100, '2020-08-19 16:48:57', '2020-08-19 16:48:57', 42, 'Alishia23', 'Alishia', 'Goodman', 'demo4@demo.com', 29, 'VIP Service', '25.00', 0, '2020-08-20', '10:30'),
(101, '2020-08-19 16:49:07', '2020-08-19 16:49:07', 42, 'Alishia23', 'Alishia', 'Goodman', 'demo4@demo.com', 21, 'Skin Fade', '18.00', 0, '2020-09-01', '11:00'),
(102, '2020-08-19 16:56:10', NULL, 43, 'carla53', 'Carla', 'Nixon', 'demo5@demo.com', 28, 'Children\'s Trim', '10.00', 0, '2020-08-22', '10:30'),
(103, '2020-08-19 16:56:19', '2020-08-19 16:56:19', 43, 'carla53', 'Carla', 'Nixon', 'demo5@demo.com', 28, 'Children\'s Trim', '10.00', 0, '2020-09-09', '11:30'),
(104, '2020-08-19 16:58:06', '2020-08-19 16:58:06', 44, 'dennis421', 'Dennis', 'Liu', 'demo6@demo.com', 23, 'Haircut', '14.00', 0, '2020-08-23', '17:00'),
(105, '2020-08-19 16:58:39', '2020-08-19 16:58:39', 44, 'dennis421', 'Dennis', 'Liu', 'demo6@demo.com', 23, 'Haircut', '14.00', 0, '2020-08-19', '10:00'),
(106, '2020-08-19 22:02:33', '2020-08-19 22:02:33', 37, 'admin', 'Admin', 'Admin', 'admin@admin.com', 24, 'Gents Trim', '15.00', 0, '2020-08-20', NULL),
(107, '2020-08-19 22:06:51', NULL, 37, 'admin', 'Admin', 'Admin', 'admin@admin.com', 24, 'Gents Trim', '15.00', 0, '2020-08-23', '16:00'),
(108, '2020-08-21 15:11:20', '2020-08-21 15:11:20', 45, 'test123', 'Testing', 'Jack', 'test@test.com', 21, 'Skin Fade', '18.00', 0, '2020-09-01', '11:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Barber Shop', NULL, '2020-02-18 23:35:37'),
(2, 'Tattoo Saloon', NULL, '2020-02-22 01:13:10'),
(3, 'Beauty Shop', NULL, '2020-02-22 01:13:21'),
(4, 'Haircut', NULL, NULL),
(5, 'Barber Shop', NULL, NULL),
(8, 'Barber', '2020-02-18 23:34:12', '2020-02-18 23:34:12'),
(9, 'Barber', '2020-02-18 23:34:13', '2020-02-18 23:34:13'),
(10, 'Barber', '2020-02-18 23:34:13', '2020-02-18 23:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `homepage_id` bigint(20) UNSIGNED NOT NULL,
  `text_heading` varchar(255) NOT NULL,
  `text_description` mediumtext NOT NULL,
  `right_image` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover_image` varchar(255) NOT NULL,
  `cover_heading` varchar(255) DEFAULT NULL,
  `cover_description` varchar(255) DEFAULT NULL,
  `cover_heading2` varchar(255) DEFAULT NULL,
  `cover_description2` varchar(255) DEFAULT NULL,
  `cover_image2` varchar(255) NOT NULL,
  `cover_heading3` varchar(255) DEFAULT NULL,
  `cover_description3` varchar(255) DEFAULT NULL,
  `cover_image3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`homepage_id`, `text_heading`, `text_description`, `right_image`, `updated_at`, `cover_image`, `cover_heading`, `cover_description`, `cover_heading2`, `cover_description2`, `cover_image2`, `cover_heading3`, `cover_description3`, `cover_image3`) VALUES
(1, 'Situated in the centre of Northampton Town', 'It\'s set amongst some of the town\'s finest stores, pubs and restaurants. OneShop offers the finest mens and children\'s hairdressing and barber services in Northampton.\r\n\r\nStep inside the OneShop and you will find a classically styled Gentleman\'s Barber Shop. Dark wood cabinets complimented by marble work surfaces and antique brass fittings. Classic red Belmont barber chairs and an Edwardian Chesterfield sofa complete the look to give a calm and relaxing atmosphere.', 'Best-Barbershops-in-Perth_1596284058.jpg', '2020-08-01 13:29:04', 'Bristol_Shop_fd04328b-1ada-485d-ba7b-34070f18597d_2048x_1596291740.jpg', 'Support your local barbershop!', 'Get up to 40% off on your 5th visit', 'Awarded as \"Best Local\" barbershop in 2020', NULL, 'barbering_1596291749.jpg', 'Refer 3 friends for a £10 coupon!', NULL, 'fest02_1596291378.jpg');

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
(3, '2019_12_17_172252_create_stores_table', 1),
(4, '2020_02_16_192241_create_services_table', 2),
(5, '2020_02_16_192316_create_staff_table', 3),
(6, '2020_02_16_192330_create_reviews_table', 3),
(7, '2020_02_16_192340_create_categories_table', 3),
(8, '2020_02_18_211016_create_bookings_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Opentimes`
--

CREATE TABLE `Opentimes` (
  `opentimes_id` bigint(20) UNSIGNED NOT NULL,
  `days` varchar(50) NOT NULL,
  `open_time` varchar(50) NOT NULL DEFAULT '-',
  `close_time` varchar(50) NOT NULL DEFAULT 'Closed',
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Opentimes`
--

INSERT INTO `Opentimes` (`opentimes_id`, `days`, `open_time`, `close_time`, `updated_at`) VALUES
(1, 'Monday', '10:00', '18:00', '2020-03-04 17:25:06'),
(2, 'Tuesday', '10:00', '19:00', '2020-03-04 17:26:29'),
(3, 'Wednesday', '11:00', '20:00', '2020-03-04 17:26:14'),
(4, 'Thursday', '09:00', '20:00', '2020-02-28 19:29:05'),
(5, 'Friday', '09:00', '20:00', '2020-02-28 19:28:57'),
(6, 'Saturday', 'Closed', '-', '2020-03-04 17:31:11'),
(7, 'Sunday', '11:00', '14:00', '2020-02-28 19:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('bobbb@hotmail.com', '$2y$10$O5dv85G/L3S.TY9wMn8uAuFvMWX9C2AjQ1o/If8pmZ0FOj6PM9Va6', '2020-02-22 19:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `user_id`, `profile_image`, `username`, `firstname`, `surname`, `description`, `rating`, `created_at`, `updated_at`) VALUES
(7, 7, '-', 'test', 'Test', 'Test', 'This is a fantastic service', 5, '2020-02-27 20:57:28', '2020-02-27 20:57:28'),
(8, 5, '-', 'admin', 'Admin', 'Admin', 'Wow, this was fantastic, professional and quick', 5, '2020-02-27 21:21:52', '2020-08-19 14:16:24'),
(14, 37, '-', 'admin', 'Admin', 'Admin', 'This was a wonderful service by Brand!!!', 3, '2020-02-28 02:46:51', '2020-02-29 00:57:09'),
(15, 37, '-', 'admin', 'Admin', 'Admin', 'I wasn\'t offered an option to reschedule, avoid', 1, '2020-08-19 16:40:12', '2020-08-19 16:40:12'),
(16, 37, '-', 'admin', 'Admin', 'Admin', 'Staff was very professional but I had to wait 5 minutes', 4, '2020-08-19 16:40:57', '2020-08-19 16:40:57'),
(17, 37, '-', 'admin', 'Admin', 'Admin', 'It was excellent', 4, '2020-08-19 16:41:17', '2020-08-19 16:41:17'),
(18, 39, '-', 'demo', 'Jamie', 'Smith', 'It was excellent', 5, '2020-08-19 16:42:19', '2020-08-19 16:42:19'),
(19, 40, '-', 'Jack', 'Jack', 'Taylor', 'Amazing, will be back!', 5, '2020-08-19 16:43:15', '2020-08-19 16:43:15'),
(20, 41, '-', 'James', 'James', 'Mcgee', 'Fantastic, much recommended', 5, '2020-08-19 16:46:45', '2020-08-19 16:46:45'),
(21, 42, '-', 'Alishia23', 'Alishia', 'Goodman', 'Booked it for my friend, he loved it', 5, '2020-08-19 16:49:25', '2020-08-19 16:49:25'),
(22, 43, '-', 'carla53', 'Carla', 'Nixon', 'I\'ve booked it for my son who absolutely loved it. Staff was very nice. Recommended!', 5, '2020-08-19 16:56:59', '2020-08-19 16:56:59'),
(23, 44, '-', 'dennis421', 'Dennis', 'Liu', 'Only been once but it was great, staff are professional', 5, '2020-08-19 16:58:29', '2020-08-19 16:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_price` decimal(6,2) NOT NULL,
  `service_length` tinyint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_description`, `service_price`, `service_length`, `created_at`, `updated_at`) VALUES
(21, 'Skin Fade', 'Haircut', '18.00', 1, '2020-02-22 00:42:08', '2020-02-22 00:42:08'),
(23, 'Haircut', 'Haircut', '14.00', 1, '2020-02-22 00:42:45', '2020-02-22 00:42:45'),
(24, 'Gents Trim', 'Haircut including beard trimming', '15.00', 1, '2020-02-22 00:43:00', '2020-02-22 00:43:00'),
(25, 'Mens Restyle', 'Complete restyle using all of our Grade A rated shampoo and other professional accessories to make you look your best', '40.00', 1, '2020-02-22 02:59:41', '2020-08-19 19:31:43'),
(28, 'Children\'s Trim', 'Children\'s haircut', '10.00', 1, '2020-02-22 22:16:00', '2020-02-24 23:25:10'),
(29, 'VIP Service', 'Haircut, Beard Cut, Hair/Beard Wash using our own Grade A rated and verified shampoo', '25.00', 1, '2020-02-26 23:06:53', '2020-02-26 23:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `admin_rights` tinyint(4) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_dob` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `admin_rights`, `username`, `firstname`, `surname`, `staff_dob`, `email`, `password`, `phone_no`, `created_at`, `updated_at`) VALUES
(2, 1, 'roland58', 'Roland', 'Udvarlaki', '2019-09-05', 'test@example.com', 'test', '23558', '2020-02-18 06:23:41', '2020-02-19 02:48:02'),
(3, NULL, 'test', 'test', 'test', '2015-11-11', 'test@example.com', 'test', '23558', '2020-02-18 06:24:35', '2020-02-18 06:24:35'),
(4, 0, '12345567', 'test', 'test', '2015-11-11', 'test@example.com', 'test', '23558', '2020-02-18 06:24:53', '2020-02-18 22:51:54'),
(5, 0, 'admin', 'test', 'test', '2015-11-11', 'test@example.com', 'test', '5555', '2020-02-18 06:25:13', '2020-02-19 03:01:58'),
(6, NULL, 'test', 'test', 'test', '2015-11-11', 'test@example.com', 'test', '23558', '2020-02-18 07:13:36', '2020-02-18 07:13:36'),
(7, NULL, 'test', 'test', 'test', '2015-11-11', 'test@example.com', 'test', '23558', '2020-02-18 07:13:46', '2020-02-18 07:13:46'),
(9, NULL, 'test', 'test', 'test', '2015-11-11', 'test@example.com', 'test', '23558', '2020-02-18 07:13:48', '2020-02-18 07:13:48'),
(10, NULL, 'test', 'test', 'test', '2015-11-11', 'test@example.com', 'test', '23558', '2020-02-18 07:13:49', '2020-02-18 07:13:49'),
(20, 0, 'testone', 'fssf', 'sffsfs', '2020-02-21', 'testone@gmail.com', 'test1', '532523', '2020-02-23 20:20:57', '2020-02-23 20:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `store_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_information` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `store_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_no` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qr_code` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `open_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `close_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`store_id`, `store_name`, `store_information`, `store_category`, `owner_name`, `staff_name`, `phone_no`, `house_no`, `address`, `city`, `county`, `country`, `postcode`, `qr_code`, `open_time`, `close_time`, `created_at`, `updated_at`) VALUES
(1, 'Fadez', '-', NULL, 'Bob', 'Jack', '01604 123456', 55, 'Gold Street', 'Northampton', 'Northamptonshire', 'United Kingdom', 'NN1 1AP', '', '', '', NULL, '2020-02-28 18:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isAdmin` tinyint(2) NOT NULL DEFAULT 0,
  `isStaff` tinyint(2) NOT NULL DEFAULT 0,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `isAdmin`, `isStaff`, `username`, `firstname`, `surname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 0, 0, 'admin', 'admin', 'admin', 'aadmin@admin.com', NULL, '$2y$10$t7vFanXWqNrVEiIjWeKxqePdl8NybJgthy7rU3uXcVCjWBWKVyJrO', NULL, '2020-02-22 04:52:47', '2020-02-22 04:52:47'),
(6, 0, 0, 'admin', 'Roland', 'Udvarlaki', 'admin@example.com', NULL, '$2y$10$ut/zmG2EmdwlduWkEzjKOeQ1wwGOobSXe5wRfdz2m7mAnplRrm9ka', NULL, '2020-02-22 14:33:58', '2020-02-22 14:33:58'),
(7, 0, 1, 'test', 'Test', 'Test', 'test@gmail.com', NULL, '$2y$10$sIv7jRmoULLDz2m9fERXke5nGrND/6ufmH/S5Mlmsr3rBtZjtFqQC', NULL, '2020-02-22 15:32:54', '2020-02-22 15:32:54'),
(8, 0, 0, 'hello', 'hello', 'hello', 'hello@hello.com', NULL, '$2y$10$4pqwhxupVyeYKHFSchFrZ..lknPxGAmmQmNp.xWqhdZnuqiRzkeGW', NULL, '2020-02-22 20:00:00', '2020-02-22 20:33:20'),
(9, 0, 0, 'helloworld', 'helloworld', 'helloworld', 'helloworld@lol.com', NULL, '$2y$10$XTpoRmClKwynTi72VRKhDubk.T2QT4/wgs1Oul7J78rqAk/0oa/TO', NULL, '2020-02-22 20:02:01', '2020-02-22 20:21:02'),
(37, 1, 1, 'admin', 'Admin', 'Admin', 'admin@admin.com', NULL, '$2y$10$RcErWp3ePno91kKv1iNDVO5LIPbbT3gZTGtW0CRN0/ldn2RCGnrRG', 'NSZGKdOSUXX8p1xKeVox3tEydcRcrI3vuApbLnQrTylr3g8PnHP4zFoGkxXI', '2020-02-22 22:24:04', '2020-02-22 22:24:04'),
(39, 0, 0, 'demo', 'Jamie', 'Smith', 'demo@demo.com', NULL, '$2y$10$duJYINLz14GHlh9USsZVxuV.ZECXAUAbTdeCONa22tGfkT5Xvqayu', NULL, '2020-08-19 16:42:07', '2020-08-19 16:42:07'),
(40, 0, 0, 'Jack', 'Jack', 'Taylor', 'demo2@demo.com', NULL, '$2y$10$sNCmD0zTW6HYWXD2zdlZc.8Qy7d5GEeZKkgbBPfLa4J3c36fOm3JS', NULL, '2020-08-19 16:42:59', '2020-08-19 16:42:59'),
(41, 0, 0, 'James', 'James', 'Mcgee', 'demo3@demo.com', NULL, '$2y$10$R.NGgrtYKoEHOoaE.wBrluxxCT/Avi.457qalPrKOcHBD5TDJxOWu', NULL, '2020-08-19 16:46:26', '2020-08-19 16:46:26'),
(42, 0, 0, 'Alishia23', 'Alishia', 'Goodman', 'demo4@demo.com', NULL, '$2y$10$DsV27nplwaL/SYHLkolrP.HmidNZWboBTFy87hHafrWF9zwqKDByy', NULL, '2020-08-19 16:48:45', '2020-08-19 16:48:45'),
(43, 0, 0, 'carla53', 'Carla', 'Nixon', 'demo5@demo.com', NULL, '$2y$10$/pvAr8X1eTNeqlIOjGZUw.IThiWvyTdJvB8BqH2438IRO..PKH0Ky', NULL, '2020-08-19 16:55:59', '2020-08-19 16:55:59'),
(44, 0, 0, 'dennis421', 'Dennis', 'Liu', 'demo6@demo.com', NULL, '$2y$10$UnGkZODoVecLT0cgg8KGXugqgqSp1de8ieOcwfY/tylCagtd0ykZ2', NULL, '2020-08-19 16:57:53', '2020-08-19 16:57:53'),
(45, 1, 1, 'test123', 'Testing', 'Jack', 'test@test.com', NULL, '$2y$10$cIx9XVuHgbZEhfVknY1XTeXbUm2gQ3R0XPqjZs8EQci4gaku9RsB.', NULL, '2020-08-21 14:05:43', '2020-08-21 14:05:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`homepage_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Opentimes`
--
ALTER TABLE `Opentimes`
  ADD PRIMARY KEY (`opentimes_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `service_name` (`service_name`),
  ADD KEY `service_price` (`service_price`),
  ADD KEY `service_description` (`service_description`(768)),
  ADD KEY `service_length` (`service_length`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firstname` (`firstname`),
  ADD KEY `surname` (`surname`),
  ADD KEY `username` (`username`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `homepage_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Opentimes`
--
ALTER TABLE `Opentimes`
  MODIFY `opentimes_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `store_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
