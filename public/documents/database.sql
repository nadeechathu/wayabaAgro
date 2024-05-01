-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 08:42 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinity`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `order_id`, `customer_id`, `type`, `first_name`, `last_name`, `email`, `company`, `address_line1`, `address_line2`, `country`, `city`, `state`, `zip`, `phone`, `active_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 0, 'fname2', 'lname2', 'gui.hamporium@gmail.com', 'GUI', 'line12', 'line22', 'Australia', 'kadawatha', 'state', '11352', '+61654987455', 0, '2022-03-02 17:22:45', '2022-03-02 17:22:45'),
(2, 1, 1, 1, 1, 'fname2', 'lname2', 'gui.hamporium@gmail.com', 'GUI', 'line12', 'line22', 'Australia', 'kadawatha', 'state', '11352', '+61654987455', 0, '2022-03-02 17:22:45', '2022-03-02 17:22:45'),
(3, 1, 4, 1, 0, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'kadawatha', 'colombo', '11325', '+942222222', 0, '2022-03-11 02:56:07', '2022-03-11 02:56:07'),
(4, 1, 4, 1, 1, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'kadawatha', 'colombo', '11325', '+942222222', 0, '2022-03-11 02:56:07', '2022-03-11 02:56:07'),
(5, 1, 5, 1, 0, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'kadawatha', 'colombo', '11325', '+942222222', 0, '2022-03-11 02:56:28', '2022-03-11 02:56:28'),
(6, 1, 5, 1, 1, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'kadawatha', 'colombo', '11325', '+942222222', 0, '2022-03-11 02:56:28', '2022-03-11 02:56:28'),
(7, 1, 6, 1, 0, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'kadawatha', 'colombo', '11325', '+942222222', 0, '2022-03-11 02:59:12', '2022-03-11 02:59:12'),
(8, 1, 6, 1, 1, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'kadawatha', 'colombo', '11325', '+942222222', 0, '2022-03-11 02:59:13', '2022-03-11 02:59:13'),
(9, 1, 7, 1, 0, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'kadawatha', 'colombo', '11325', '+942222222', 0, '2022-03-11 03:37:52', '2022-03-11 03:37:52'),
(10, 1, 7, 1, 1, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'kadawatha', 'colombo', '11325', '+942222222', 0, '2022-03-11 03:37:52', '2022-03-11 03:37:52'),
(11, 1, 8, 1, 0, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'kadawatha', 'colombo', '11325', '+942222222', 0, '2022-03-11 03:53:41', '2022-03-11 03:53:41'),
(12, 1, 8, 1, 1, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'kadawatha', 'colombo', '11325', '+942222222', 0, '2022-03-11 03:53:41', '2022-03-11 03:53:41'),
(13, 1, 9, 1, 0, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'Paragahakele', 'colombo', '32031', '+942222222', 0, '2022-03-18 05:00:07', '2022-03-18 05:00:07'),
(14, 1, 9, 1, 1, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Sri Lanka', 'Panama', 'colombo', '32508', '+942222222', 0, '2022-03-18 05:00:07', '2022-03-18 05:00:07'),
(15, 1, 10, 1, 0, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Sri Lanka', 'Kadawatha', 'colombo', '11850', '+942222222', 0, '2022-03-18 05:04:45', '2022-03-18 05:04:45'),
(16, 1, 10, 1, 1, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Sri Lanka', 'Kadawatha', 'colombo', '11850', '+942222222', 0, '2022-03-18 05:04:45', '2022-03-18 05:04:45'),
(17, 1, 11, 1, 0, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'Colombo 7', 'colombo', '700', '+942222222', 0, '2022-03-18 05:08:19', '2022-03-18 05:08:19'),
(18, 1, 11, 1, 1, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'Colombo 7', 'colombo', '700', '+942222222', 0, '2022-03-18 05:08:19', '2022-03-18 05:08:19'),
(19, 1, 1, 1, 0, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Sri Lanka', 'Ambagahawatta', 'colombo', '90326', '+942222222222', 0, '2022-03-28 06:26:13', '2022-03-28 06:26:13'),
(20, 1, 1, 1, 1, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Sri Lanka', 'Ambagahawatta', 'colombo', '90326', '+942222222222', 0, '2022-03-28 06:26:13', '2022-03-28 06:26:13'),
(21, 1, 2, 1, 0, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'Ambagahawatta', 'colombo', '90326', '+94612222222', 0, '2022-03-28 07:13:08', '2022-03-28 07:13:08'),
(22, 1, 2, 1, 1, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'Ambagahawatta', 'colombo', '90326', '+940612222222', 0, '2022-03-28 07:13:08', '2022-03-28 07:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_src` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 => no show, 1 => show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `image_src`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'images/uploads/advertisements/2022/03/20220308052640banner-3.png', 'Advertisement 1', 'Advertisement 1', 0, '2022-03-07 23:56:40', '2022-03-07 23:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_status` int(11) NOT NULL DEFAULT 0 COMMENT '0 => no show, 1 => show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_logo`, `brand_name`, `brand_status`, `created_at`, `updated_at`) VALUES
(1, 'images/uploads/brands/20220318171750202203181659525 (1).png', 'brand 1', 1, NULL, '2022-03-18 11:47:50'),
(2, 'images/uploads/brands/20220318171756202203181700123.png', 'brand 2', 1, NULL, '2022-03-18 11:47:56'),
(3, 'images/uploads/brands/20220318171806202203181701194.png', 'brand 3', 1, '2022-03-18 11:48:06', '2022-03-18 11:48:06'),
(4, 'images/uploads/brands/20220318171848202203181701335 (1).png', 'brand 4', 1, '2022-03-18 11:48:48', '2022-03-18 11:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 => inactive, 1 => active',
  `type` int(11) NOT NULL DEFAULT 0 COMMENT '0 => post, 1 => product',
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canonical_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `slug`, `status`, `type`, `category_image`, `page_title`, `meta_tag_description`, `meta_keywords`, `canonical_url`, `created_at`, `updated_at`) VALUES
(1, 'Category 1', 'category 1 desc1', 'cat-1', 1, 1, 'images/uploads/categories/1642743051.png', NULL, NULL, NULL, NULL, '2021-12-23 01:34:40', '2022-03-29 10:28:10'),
(2, 'Category 2', 'category 2 description', 'cat-2', 1, 1, 'images/uploads/categories/1642743621.png', 'test title', 'test description', 'test,keyword', 'http://127.0.0.1:8000/admin/categories', '2021-12-30 00:19:25', '2022-03-09 02:08:49'),
(3, 'Category 3', 'Category 3', 'cat-3', 1, 0, 'images/uploads/categories/1642743628.png', 'Category 3', 'Category 3', 'Category3', 'http://127.0.0.1:8000/admin/categories', '2021-12-30 23:52:41', '2022-01-21 00:10:28'),
(4, 'Category 4', 'Category 4', 'cat-44', 1, 0, 'images/uploads/categories/1642743635.png', 'cat4', 'description', 'keywords', 'http://127.0.0.1:8000/admin/categories', '2022-01-10 02:14:05', '2022-01-21 00:10:35'),
(5, 'Category 5', 'Category 5', 'cat-5', 1, 1, 'images/uploads/categories/1647948878.png', 'Category 5', 'Category 5', 'Category 5', 'Category 5', '2022-03-22 11:34:38', '2022-03-22 12:10:30'),
(6, 'Category 6', 'Category 6', 'cat-6', 1, 1, 'images/uploads/categories/1648016070.png', 'Category 6', 'Category 6', 'Category 6', 'Category 6', '2022-03-23 06:14:30', '2022-03-23 06:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `child_categories`
--

CREATE TABLE `child_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `child_category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_category_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 => inactive, 1 => active',
  `type` int(11) NOT NULL DEFAULT 0 COMMENT '0 => post, 1 => product',
  `child_category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canonical_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_categories`
--

INSERT INTO `child_categories` (`id`, `sub_category_id`, `child_category_name`, `child_category_description`, `slug`, `status`, `type`, `child_category_image`, `canonical_url`, `meta_keywords`, `meta_tag_description`, `page_title`, `created_at`, `updated_at`) VALUES
(1, 2, 'test child category 1', 'test child category 1', 'child-cat-1', 1, 1, 'images/uploads/categories/1648016392.png', 'child-cat-1', 'child-cat-1', 'child-cat-1', 'child-cat-1', '2022-03-23 06:19:52', '2022-03-29 10:51:37'),
(2, 2, 'child category 2', 'child category 2', 'child-cat-2', 1, 1, 'images/uploads/categories/1648025757.png', 'child-cat-2', 'child-cat-2', 'child-cat-2', 'child-cat-2', '2022-03-23 08:55:57', '2022-03-23 08:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `entity` int(11) NOT NULL DEFAULT 0 COMMENT '0 => posts, 1 => products',
  `entity_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 => new, 1 => replied',
  `show` int(11) NOT NULL DEFAULT 0 COMMENT '0 => no show, 1 => show',
  `is_approved` int(11) NOT NULL DEFAULT 0 COMMENT '0 => not approved, 1 => approved',
  `reply_allowed` int(11) NOT NULL DEFAULT 1 COMMENT '0 => replies not allowed, 1 => replies allowed',
  `type` int(11) NOT NULL DEFAULT 0 COMMENT '0 => comments, 1 => reviews',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `entity`, `entity_id`, `status`, `show`, `is_approved`, `reply_allowed`, `type`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, 0, 1, 1, 0, 1, 1, 0, '2022-01-05 03:07:18', '2022-01-18 00:17:46'),
(2, NULL, 12, 0, 1, 0, 0, 0, 1, 0, '2022-01-17 23:54:14', '2022-01-17 23:54:14'),
(3, NULL, 12, 0, 1, 0, 0, 0, 1, 0, '2022-01-17 23:57:02', '2022-01-17 23:57:02'),
(4, '<p>test1234</p>', 12, 0, 1, 0, 0, 0, 1, 0, '2022-01-18 00:07:06', '2022-01-18 00:07:06'),
(5, '<p>test edited</p>', 2, 0, 1, 0, 0, 0, 1, 0, '2022-01-18 00:17:33', '2022-01-18 00:35:04'),
(6, '<p>test comment edited</p>', 2, 0, 1, 0, 0, 0, 1, 0, '2022-01-18 00:36:46', '2022-01-18 00:36:59'),
(7, '<p>test admin comment</p>', 3, 0, 1, 0, 0, 0, 1, 0, '2022-01-18 01:48:25', '2022-01-18 01:48:25'),
(8, '<p>test comment admin</p>', 1, 0, 3, 0, 0, 1, 1, 0, '2022-01-21 00:39:05', '2022-01-21 00:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies`
--

CREATE TABLE `comment_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` int(11) NOT NULL,
  `reply` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_replies`
--

INSERT INTO `comment_replies` (`id`, `comment_id`, `reply`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '<p>will upload a template</p>', 1, '2022-01-05 03:16:00', '2022-01-05 03:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dial_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 => no show, 1 => show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`, `dial_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'LK', 'Sri Lanka', '+94', 1, '2022-03-11 05:29:25', '2022-03-11 05:29:25'),
(2, 'AUS', 'Australia', '+61', 1, '2022-03-11 05:29:47', '2022-03-11 05:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_type` int(11) NOT NULL DEFAULT 0 COMMENT '0 => fixed, 1 => percentage',
  `coupon_value` decimal(10,2) NOT NULL DEFAULT 0.00,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned` int(11) NOT NULL DEFAULT 0,
  `customer_id` int(11) DEFAULT NULL,
  `expiry_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `status`, `coupon_code`, `coupon_type`, `coupon_value`, `coupon_name`, `assigned`, `customer_id`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, 0, '0', 0, '300.00', 'Coupon1', 0, NULL, '2022-03-29 18:30:00', '2022-03-10 03:08:38', '2022-03-13 23:37:25'),
(2, 1, '0', 0, '250.00', 'Coupon2', 0, NULL, '2022-03-14 04:11:28', '2022-03-10 03:35:45', '2022-03-13 23:36:48'),
(3, 1, '0', 0, '450.00', 'Coupon 3', 0, NULL, '2022-03-31 06:59:00', '2022-03-13 23:38:04', '2022-03-28 06:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `status`, `user_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'fname', 'lname', 'gui.hamporium@gmail.com', '+611234567898', 'line1 line2', '2022-02-10 13:54:43', '2022-02-24 18:05:49'),
(13, 1, 2, 'User', 'Dev', 'user@gmail.com', '0725555555', NULL, '2022-02-28 20:14:52', '2022-02-28 20:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `customer_addresses`
--

CREATE TABLE `customer_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `active_status` int(11) NOT NULL DEFAULT 0 COMMENT '0 => inactive, 1 => active',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_addresses`
--

INSERT INTO `customer_addresses` (`id`, `customer_id`, `type`, `active_status`, `first_name`, `last_name`, `email`, `company`, `address_line1`, `address_line2`, `country`, `state`, `city`, `zip`, `phone`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, 'fname', 'lname', 'lahiru@guisrilanka.com', 'comp', 'line1', 'line2', 'Australia', 'colombo', 'Ambagahawatta', '90326', '+61+612222222', '2022-03-11 02:43:09', '2022-03-18 05:48:03'),
(2, 1, 1, 1, 'fname', 'lname', 'lname@gmail.com', 'cmp', 'line1', 'line2', 'Sri Lanka', 'Colombo', 'Dewalapola', '11102', '+61+611234567898', NULL, '2022-03-18 05:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `email_settings`
--

CREATE TABLE `email_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encryption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 => inactive, 1 => active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_settings`
--

INSERT INTO `email_settings` (`id`, `mailer`, `host`, `port`, `username`, `password`, `encryption`, `from_address`, `from_name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'smtp', 'smtp.googlemail.com', '465', 'gui.hamporium@gmail.com', 'gui.ham@123', 'ssl', 'gui.hamporium@gmail.com', 'gui', 1, '2022-01-06 00:42:43', '2022-01-07 01:36:15');

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
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `setting_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `setting_key`, `description`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'GUI ECOM', NULL, '2022-12-15 06:59:13'),
(2, 'site_description', 'Site description goes here', NULL, NULL),
(3, 'site_logo', 'images/uploads/logo/1641796699.jpg', NULL, '2022-01-10 01:08:19'),
(4, 'analytics', NULL, NULL, NULL),
(5, 'facebook_link', '#', NULL, '2022-01-20 23:43:32'),
(6, 'instagram_link', '#', NULL, '2022-01-20 23:32:17'),
(7, 'twitter_link', '#', NULL, '2022-01-20 23:32:17'),
(8, 'youtube_link', '#', NULL, '2022-01-20 23:32:17'),
(9, 'currency_symbol', 'Rs.', NULL, '2022-03-16 06:00:14'),
(10, 'free_shipping', '0', NULL, '2022-03-16 05:22:11'),
(11, 'coupons_enabled', '1', NULL, '2022-03-16 05:22:35'),
(12, 'low_stock_margin', '3', NULL, '2022-03-16 05:26:23'),
(13, 'admin_email', 'shashika@guisrilanka.com', NULL, '2022-03-28 06:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) DEFAULT NULL,
  `src` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 => no show, 1 => show',
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'can be a post image product image etc',
  `entity_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `type`, `src`, `alt_text`, `status`, `heading`, `caption`, `entity`, `entity_id`, `created_at`, `updated_at`) VALUES
(1, 0, 'images/uploads/slider/1648453713.png', 'image 1', 1, 'heading 1', 'caption 1', NULL, NULL, NULL, '2022-03-28 07:48:33'),
(2, 0, 'images/uploads/slider/1648453722.png', 'image 2', 1, 'heading 2', 'caption 2', NULL, NULL, NULL, '2022-03-28 07:48:42'),
(3, 0, 'images/uploads/slider/1648453730.png', 'image 3', 1, 'heading 3', 'caption 3', NULL, NULL, NULL, '2022-03-28 07:48:50'),
(5, 1, 'images/uploads/posts/1641371476.jpg', NULL, 0, NULL, NULL, 'post', 1, '2022-01-05 03:01:17', '2022-01-05 03:01:17'),
(6, 1, 'images/uploads/posts/1642744333.png', NULL, 0, NULL, NULL, 'post', 2, '2022-01-05 03:24:08', '2022-01-21 00:22:13'),
(9, 1, 'images/uploads/posts/1642745203.png', NULL, 0, NULL, NULL, 'post', 3, '2022-01-21 00:36:43', '2022-01-21 00:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linked_products`
--

CREATE TABLE `linked_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_product_id` bigint(20) NOT NULL,
  `linked_product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `linked_products`
--

INSERT INTO `linked_products` (`id`, `parent_product_id`, `linked_product_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `measurement_units`
--

CREATE TABLE `measurement_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0 COMMENT '0 => weight',
  `symbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 => inactive. 1 => active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `measurement_units`
--

INSERT INTO `measurement_units` (`id`, `type`, `symbol`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'kg', 'weight in kilograms', 0, '2022-01-31 21:04:23', '2022-01-31 21:04:23');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_09_101328_add_columns_to_users_table', 1),
(6, '2021_12_09_114336_create_table_roles', 1),
(7, '2021_12_10_091632_create_categories_table', 1),
(8, '2021_12_10_112107_create_tags_table', 1),
(9, '2021_12_13_040451_create_posts_table', 1),
(10, '2021_12_16_082612_create_comments_table', 1),
(11, '2021_12_16_090052_create_comment_replies_table', 1),
(12, '2021_12_17_090618_create_tag_post_table', 1),
(13, '2021_12_20_090142_create_pages_table', 1),
(14, '2021_12_20_091207_create_page_descriptions_table', 1),
(15, '2021_12_20_091952_create_page_meta_data', 1),
(16, '2021_12_21_052302_add_column_category_image_to_categories_table', 1),
(17, '2021_12_21_055842_add_column_user_image_to_users_table', 1),
(18, '2021_12_23_073933_add_column_permission_type_to_permissions_table', 2),
(21, '2021_12_28_074213_create_images_table', 3),
(22, '2021_12_28_074717_create_general_settings_table', 3),
(25, '2021_12_28_102416_add_columns_to_posts_table', 4),
(26, '2021_12_29_064855_add_column_slug_to_posts_table', 4),
(27, '2021_12_31_045951_add_seo_columns_to_categories_table', 5),
(28, '2021_12_31_054657_add_canonical_url_column_to_page_meta_data_table', 6),
(30, '2021_12_31_055751_rename_columns_in_page_meta_data_table', 7),
(44, '2022_01_03_065540_create_site_settings_table', 8),
(45, '2022_01_03_084539_create_site_templates_table', 8),
(46, '2022_01_03_114521_add_column_alt_text_to_images_table', 8),
(47, '2022_01_05_102410_create_user_subscriptions_table', 9),
(49, '2022_01_06_044841_create_email_settings_table', 10),
(50, '2022_01_07_084902_add_reset_token_to_users_table', 11),
(52, '2022_01_10_030610_add_image_columns_to_images_table', 12),
(54, '2022_01_10_065724_create_sub_categories_table', 13),
(55, '2022_01_10_121222_add_column_to_pages_table', 14),
(56, '2022_01_10_070524_add_page-banner_to_pages_table', 15),
(57, '2022_01_10_150204_add_template_image_to_site_templates_table', 15),
(58, '2022_01_10_150928_add_banner_template_to_site_settings_table', 15),
(65, '2022_03_03_065647_create_products_table', 16),
(66, '2022_03_03_065955_create_product_images_table', 16),
(67, '2022_03_03_070213_create_product_inventories_table', 16),
(68, '2022_03_03_070417_create_product_inventory_histories_table', 16),
(69, '2022_03_03_071030_create_user_logs_table', 16),
(70, '2022_03_03_074916_create_measurement_units_table', 16),
(71, '2022_03_03_081840_create_orders_table', 17),
(72, '2022_03_03_081852_create_order_items_table', 17),
(73, '2022_03_03_081912_create_addresses_table', 17),
(78, '2022_03_03_084815_create_customers_table', 18),
(79, '2022_03_03_084825_create_customer_addresses_table', 18),
(80, '2022_03_03_085314_create_wishlist_table', 18),
(81, '2022_03_03_085451_create_zones_table', 18),
(82, '2022_03_03_111802_create_promotions_table', 19),
(83, '2022_03_03_111855_add_promotion_id_to_products_table', 19),
(84, '2022_03_04_045924_add_columns_to_products_table', 20),
(85, '2022_03_07_043812_add_column_not_reserved_reason_to_order_items_table', 21),
(87, '2022_03_07_050211_add_column_order_number_to_product_inventory_histories_table', 22),
(88, '2022_03_07_075814_create_order_statuses_table', 23),
(89, '2022_03_07_080014_create_order_status_histories_table', 24),
(90, '2022_03_07_085833_change_column_tracking_number_in_orders_table', 25),
(91, '2022_03_07_111846_create_linked_products_table', 26),
(92, '2022_03_07_115041_create_advertisements_table', 27),
(93, '2022_03_08_083041_create_user_inquiries_table', 28),
(94, '2022_03_08_070411_create_coupons_table', 29),
(95, '2022_03_09_052757_add_featured_column_to_products_table', 30),
(96, '2022_03_09_064332_create_product_has_categories_table', 31),
(99, '2022_03_10_072151_add_status_column_to_coupons_table', 32),
(101, '2022_03_11_085319_add_column_coupon_name_to_orders_table', 33),
(102, '2022_03_11_044209_create_countries_table', 34),
(103, '2022_03_11_060629_create_sidebar_settings_table', 34),
(104, '2022_03_14_045712_add_column_expiry_date_to_coupons_table', 35),
(105, '2022_03_14_105940_add_column_short_description_to_products_table', 36),
(106, '2022_03_14_135504_add_status_column_to_user_inquiries_table', 37),
(107, '2022_03_14_162359_create_jobs_table', 38),
(108, '2022_03_14_155418_create_reviews_table', 39),
(109, '2022_03_14_172603_add_column_to_reviews_table', 40),
(111, '2022_03_15_162650_add_status_column_to_customers_table', 41),
(112, '2022_03_16_123855_add_columns_to_promotions_table', 42),
(115, '2022_03_18_113954_create_brands_table', 43),
(116, '2022_03_18_114755_add_column_brand_id_to_products_table', 43),
(117, '2022_03_22_110921_add_new_arrival_column_to_products_table', 44),
(122, '2022_03_23_100911_create_child_categories_table', 45),
(123, '2022_03_23_121015_add_category_columns_to_products_table', 46),
(124, '2022_03_24_095856_create_quotations_table', 47),
(126, '2022_03_24_100243_create_quotation_items_table', 48),
(128, '2022_03_25_125635_create_variants_table', 49),
(130, '2022_03_25_160421_add_column_variant_id_to_product_inventories_table', 50),
(131, '2022_03_25_161226_add_column_variant_id_to_product_inventory_histories_table', 51),
(132, '2022_03_28_113541_add_variant_id_column_to_order_items_table', 52);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tracking_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.0000',
  `zone_id` bigint(20) DEFAULT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0,
  `inventory_status` int(11) NOT NULL DEFAULT 0,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `cancelled_reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `order_total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `sub_total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `discount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `shipping_cost` decimal(10,2) NOT NULL DEFAULT 0.00,
  `total_weight` decimal(10,3) NOT NULL DEFAULT 0.000,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tracking_number`, `zone_id`, `order_status`, `inventory_status`, `is_approved`, `cancelled_reason`, `customer_id`, `order_total`, `sub_total`, `discount`, `shipping_cost`, `total_weight`, `payment_method`, `notes`, `coupon_id`, `coupon_discount`, `created_at`, `updated_at`) VALUES
(1, 'ORD202203281156131', 2, 1, 1, 0, NULL, 1, '2650.00', '2500.00', '0.00', '150.00', '1.000', 'COD', NULL, NULL, NULL, '2022-03-28 06:26:13', '2022-03-28 06:26:13'),
(2, 'ORD202203281243072', 2, 1, 1, 0, NULL, 1, '1350.00', '1200.00', '0.00', '150.00', '0.500', 'COD', NULL, NULL, NULL, '2022-03-28 07:13:07', '2022-03-28 07:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `weight` decimal(10,2) NOT NULL DEFAULT 0.00,
  `discount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `is_reserved` int(11) NOT NULL DEFAULT 0,
  `not_reserved_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual_reserved_quantity` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `variant_id`, `product_name`, `quantity`, `unit_price`, `weight`, `discount`, `is_reserved`, `not_reserved_reason`, `actual_reserved_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Product 1 Variant 1', 1, '1200.00', '0.50', '0.00', 1, NULL, 1, '2022-03-28 06:26:13', '2022-03-28 06:26:13'),
(2, 1, 1, 2, 'Product 1 Variant 2', 1, '1300.00', '0.50', '0.00', 1, NULL, 1, '2022-03-28 06:26:13', '2022-03-28 06:26:13'),
(3, 2, 1, 1, 'Product 1 - Variant 1', 1, '1200.00', '0.50', '0.00', 1, NULL, 1, '2022-03-28 07:13:07', '2022-03-28 07:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `status_name`, `created_at`, `updated_at`) VALUES
(1, 'Pending', '2022-03-07 03:17:03', '2022-03-07 03:17:03'),
(2, 'Confirmed', '2022-03-07 03:18:54', '2022-03-07 03:18:54'),
(3, 'In Process', '2022-03-07 03:19:23', '2022-03-07 03:19:23'),
(4, 'Dispatched', '2022-03-07 03:19:37', '2022-03-07 03:19:37'),
(5, 'Fulfilled', '2022-03-07 03:19:49', '2022-03-07 03:19:49'),
(6, 'Cancellation Requested', '2022-03-07 03:19:59', '2022-03-07 03:19:59'),
(7, 'Cancelled', '2022-03-07 03:20:07', '2022-03-07 03:20:07'),
(8, 'Refund Requested', '2022-03-14 07:43:52', '2022-03-14 07:43:52'),
(9, 'Refunded', '2022-03-14 07:44:02', '2022-03-14 07:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `order_status_histories`
--

CREATE TABLE `order_status_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `order_status_id` int(11) NOT NULL,
  `changed_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_status_histories`
--

INSERT INTO `order_status_histories` (`id`, `order_id`, `order_status_id`, `changed_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2022-03-28 06:26:13', '2022-03-28 06:26:13'),
(2, 2, 1, 1, '2022-03-28 07:13:07', '2022-03-28 07:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visibility` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '0 => hidden, 1 => visible',
  `entered_by` bigint(20) DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_heading`, `slug`, `page_banner`, `visibility`, `entered_by`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', 'http://127.0.0.1:8001/images/uploads/banner-images/1642743108.png', '1', 1, 2, '2022-01-05 03:04:08', '2022-01-21 00:01:48'),
(2, 'Our Mission', 'mission', 'http://127.0.0.1:8001/images/uploads/banner-images/1642743077.png', '1', 1, 0, '2022-01-10 05:47:05', '2022-01-21 00:01:17'),
(3, 'Our Vision', 'vision', 'http://127.0.0.1:8001/images/uploads/banner-images/1642743091.png', '1', 1, 1, '2022-01-19 06:23:24', '2022-01-21 00:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `page_descriptions`
--

CREATE TABLE `page_descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_id` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_descriptions`
--

INSERT INTO `page_descriptions` (`id`, `page_id`, `content`, `language_id`, `created_at`, `updated_at`) VALUES
(1, 1, '<h2>What is an About Us page?</h2>\r\n\r\n<p>An &quot;About Us&quot; Page is where you reveal your brand story, business values, mission, and experiences.&nbsp;</p>\r\n\r\n<p>Now the question is: why would you want to share all this information and make it appealing? The answer is simple: you want to tell your audience who you are, show them what you are good at, and tell them you are worthy of their trust.</p>\r\n\r\n<p>Think for a moment: would you rather purchase from a business you know nothing about, or would you go for somebody with a friendly face shared on their About page and a story that you find exciting? The latter one, right?&nbsp;</p>\r\n\r\n<p>A great About Us page not just portrays your story, qualities and provides an insight on how your business started, but it also helps you sell. When visitors become familiar with your story and connect with it, they&#39;re probably going to purchase from you. A well-planned About Us page can do this!</p>', 0, '2022-01-05 03:04:08', '2022-01-05 03:04:08'),
(2, 2, '<h1>What Is a Mission Statement?</h1>\r\n\r\n<p><br />\r\nA mission statement is used by a company to explain, in simple and concise terms, its purpose(s) for being. The statement is generally short, either a single sentence or a short paragraph.</p>\r\n\r\n<p>KEY TAKEAWAYS<br />\r\nA mission statement is used by a company to explain, in simple and concise terms, its purpose(s) for being.<br />\r\nIt is usually one sentence or a short paragraph, explaining a company&#39;s culture, values, and ethics.<br />\r\nMission statements serve several purposes, including motivating employees and reassuring investors of the company&#39;s future.<br />\r\nHow a Mission Statement Works<br />\r\nMission statements serve a dual purpose by helping employees remain focused on the tasks at hand, and encouraging them to find innovative ways of moving toward increasing their productivity with the eye to achieving company goals.</p>\r\n\r\n<p>A company&rsquo;s mission statement defines its culture, values, ethics, fundamental goals, and agenda. Furthermore, it defines how each of these applies to the company&#39;s&nbsp;stakeholders&mdash;its employees, distributors, suppliers, shareholders, and the community at large. These entities can use this statement to align their goals with that of the company.</p>\r\n\r\n<p>The statement reveals what the company does, how it does it, and why it does it. Prospective investors may also refer to the mission statement to see if the values of the company align with theirs. For example, an&nbsp;ethical investor&nbsp;against tobacco products would probably not invest in a company whose mission is to be the largest global manufacturer of cigarettes.</p>', 0, '2022-01-10 05:47:05', '2022-01-10 05:47:05'),
(3, 3, '<h1>Create a business vision</h1>\r\n\r\n<p>A vision is a vivid mental image of what you want your business to be at some point in the future, based on your goals and aspirations. Having a vision will give your business a clear focus, and can stop you heading in the wrong direction.</p>\r\n\r\n<p>The best way to formalise and communicate the vision you have for your business is to write a vision statement.</p>\r\n\r\n<p>A vision statement captures, in writing, the essence of where you want to take your business, and can inspire you and your staff to reach your goals.</p>\r\n\r\n<h2>What to include in a vision statement</h2>\r\n\r\n<p>A vision statement should communicate your ideal long-term business goals, and it should reflect your view of the world and your business&#39;s place in it.</p>', 0, '2022-01-19 06:23:24', '2022-01-19 06:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `page_meta_data`
--

CREATE TABLE `page_meta_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canonical_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_meta_data`
--

INSERT INTO `page_meta_data` (`id`, `page_id`, `page_title`, `meta_tag_description`, `meta_keywords`, `canonical_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'About Us', 'About us page description', 'about-us-keywords', 'http://127.0.0.1:8000/admin/categories', '2022-01-05 03:04:08', '2022-01-05 03:04:08'),
(2, 2, 'Our Mission', 'mission-description', 'mission-keywords', 'http://127.0.0.1:8000/admin/categories', '2022-01-10 05:47:05', '2022-01-10 05:47:05'),
(3, 3, 'Vision', 'vision description', 'keywords', 'url', '2022-01-19 06:23:25', '2022-01-19 06:23:25');

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
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'view_posts', 'post', NULL, NULL),
(2, 'add_posts', 'post', NULL, NULL),
(3, 'edit_posts', 'post', NULL, NULL),
(4, 'delete_posts', 'post', NULL, NULL),
(5, 'view_categories', 'category', NULL, NULL),
(6, 'add_categories', 'category', NULL, NULL),
(7, 'edit_categories', 'category', NULL, NULL),
(8, 'delete_categories', 'category', NULL, NULL),
(9, 'view_tags', 'tag', NULL, NULL),
(10, 'add_tags', 'tag', NULL, NULL),
(11, 'edit_tags', 'tag', NULL, NULL),
(12, 'delete_tags', 'tag', NULL, NULL),
(13, 'view_users', 'user', NULL, NULL),
(14, 'add_users', 'user', NULL, NULL),
(15, 'add_comments', 'comment', NULL, NULL),
(16, 'edit_comments', 'comment', NULL, NULL),
(17, 'delete_comments', 'comment', NULL, NULL),
(18, 'approve_posts', 'post', NULL, NULL),
(19, 'view_comments', 'comment', NULL, NULL),
(20, 'add_pages', 'pages', NULL, NULL),
(21, 'view_pages', 'pages', NULL, NULL),
(22, 'add_permissions', 'user', '2021-12-23 05:47:19', '2021-12-23 05:47:19'),
(25, 'delete_permissions', 'user', '2021-12-23 22:46:44', '2021-12-23 23:18:09'),
(26, 'edit_permissions', 'user', '2021-12-23 23:18:46', '2021-12-23 23:18:46'),
(27, 'view_permissions', 'user', '2021-12-23 23:20:10', '2021-12-23 23:20:10'),
(28, 'reply_comments', 'comment', '2021-12-23 23:27:36', '2021-12-23 23:27:36'),
(29, 'change_comment_status', 'comment', '2021-12-23 23:27:52', '2021-12-23 23:39:17'),
(30, 'page_visibility_change', 'pages', '2021-12-23 23:28:09', '2021-12-23 23:28:09'),
(31, 'page_published_status_change', 'pages', '2021-12-23 23:28:33', '2021-12-23 23:28:33'),
(32, 'approve_comments', 'comment', '2021-12-23 23:34:21', '2021-12-23 23:34:21'),
(33, 'edit_pages', 'pages', '2021-12-24 01:15:28', '2021-12-24 01:15:28'),
(34, 'delete_pages', 'pages', '2021-12-24 01:15:38', '2021-12-24 01:16:34'),
(35, 'site_settings', 'settings', '2021-12-28 02:32:01', '2021-12-28 02:32:01'),
(36, 'edit_users', 'user', '2022-01-05 00:31:13', '2022-01-05 00:31:13'),
(37, 'view_products', 'products', '2022-03-03 02:12:52', '2022-03-03 02:12:52'),
(38, 'add_products', 'products', '2022-03-03 02:13:08', '2022-03-03 02:13:08'),
(39, 'edit_products', 'products', '2022-03-03 02:13:18', '2022-03-03 02:13:18'),
(40, 'delete_products', 'products', '2022-03-03 02:13:29', '2022-03-03 02:13:29'),
(41, 'view_inventory', 'inventory', '2022-03-03 02:40:31', '2022-03-03 02:40:31'),
(42, 'update_inventory', 'inventory', '2022-03-03 02:40:48', '2022-03-03 02:40:48'),
(43, 'view_inventory_history', 'inventory', '2022-03-03 02:41:00', '2022-03-03 02:41:00'),
(44, 'manual_inventory_reserve', 'inventory', '2022-03-03 02:41:13', '2022-03-03 02:41:13'),
(45, 'view_zones', 'zones', '2022-03-03 05:40:23', '2022-03-03 05:40:23'),
(46, 'add_zones', 'zones', '2022-03-03 05:40:37', '2022-03-03 05:40:37'),
(47, 'edit_zones', 'zones', '2022-03-03 05:40:58', '2022-03-03 05:40:58'),
(48, 'delete_zones', 'zones', '2022-03-03 05:41:11', '2022-03-03 05:41:11'),
(49, 'view_promotions', 'promotions', '2022-03-03 23:21:40', '2022-03-03 23:21:40'),
(50, 'assign_promotions', 'promotions', '2022-03-03 23:21:50', '2022-03-03 23:21:50'),
(51, 'add_promotions', 'promotions', '2022-03-03 23:38:07', '2022-03-03 23:38:07'),
(52, 'edit_promotions', 'promotions', '2022-03-03 23:38:15', '2022-03-03 23:38:15'),
(53, 'delete_promotions', 'promotions', '2022-03-03 23:38:23', '2022-03-03 23:38:23'),
(54, 'view_orders', 'orders', '2022-03-07 03:00:30', '2022-03-07 03:00:30'),
(55, 'invoices_and_packing_slips', 'orders', '2022-03-07 03:00:41', '2022-03-07 03:00:41'),
(56, 'view_cancelled_orders', 'orders', '2022-03-07 03:00:50', '2022-03-07 03:00:50'),
(57, 'view_order_status', 'orders', '2022-03-07 03:00:58', '2022-03-07 03:00:58'),
(58, 'manual_inventory_reserve', 'orders', '2022-03-07 03:01:05', '2022-03-07 03:01:05'),
(59, 'edit_orders', 'orders', '2022-03-07 03:04:52', '2022-03-07 03:04:52'),
(60, 'approve_orders', 'orders', '2022-03-07 03:05:00', '2022-03-07 03:05:00'),
(61, 'change_order_status', 'orders', '2022-03-07 03:05:15', '2022-03-07 03:05:15'),
(62, 'cancel_orders', 'orders', '2022-03-07 03:05:30', '2022-03-07 03:05:30'),
(63, 'add_order_status', 'settings', '2022-03-07 03:07:25', '2022-03-07 03:07:25'),
(64, 'edit_order_status', 'settings', '2022-03-07 03:17:32', '2022-03-07 03:17:32'),
(65, 'request_order_cancellation', 'orders', '2022-03-07 03:23:03', '2022-03-07 05:05:04'),
(66, 'approve_cancellations', 'orders', '2022-03-07 05:21:12', '2022-03-07 05:21:12'),
(67, 'view_advertisements', 'advertisements', '2022-03-07 23:55:31', '2022-03-07 23:55:31'),
(68, 'add_advertisements', 'advertisements', '2022-03-07 23:55:39', '2022-03-07 23:55:39'),
(69, 'edit_advertisements', 'advertisements', '2022-03-07 23:55:49', '2022-03-07 23:55:49'),
(70, 'delete_advertisements', 'advertisements', '2022-03-07 23:55:58', '2022-03-07 23:55:58'),
(71, 'view_inquiries', 'inquiries', '2022-03-08 03:27:36', '2022-03-08 03:27:36'),
(72, 'view_admin_panel', 'settings', '2022-03-08 04:09:30', '2022-03-08 04:09:30'),
(73, 'add_coupons', 'marketing', '2022-03-10 01:47:59', '2022-03-10 01:47:59'),
(74, 'view_coupons', 'marketing', '2022-03-10 01:57:34', '2022-03-10 01:57:34'),
(75, 'edit_coupons', 'marketing', '2022-03-10 01:58:01', '2022-03-10 01:58:01'),
(76, 'delete_coupons', 'marketing', '2022-03-10 01:58:13', '2022-03-10 01:58:13'),
(77, 'view_customers', 'user', '2022-03-15 11:04:15', '2022-03-15 11:04:15'),
(78, 'change_review_status', 'products', '2022-03-15 12:09:37', '2022-03-15 12:09:37'),
(79, 'view_quotations', 'orders', '2022-03-24 06:10:05', '2022-03-24 06:10:05'),
(80, 'view_variants', 'products', '2022-03-25 07:56:45', '2022-03-25 07:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\APIModels\\User', 1, 'auth_token', 'f944e3ed5224a50ba665451021e510a379a383c6f7f7e61e6212d34a7b7ebac3', '[\"*\"]', NULL, '2021-12-27 05:18:49', '2021-12-27 05:18:49'),
(2, 'App\\Models\\APIModels\\User', 1, 'auth_token', '2477220cb22af668fd4d238ab5368d96a3b53958a4562afe7e8a1519465537e7', '[\"*\"]', NULL, '2021-12-27 05:18:59', '2021-12-27 05:18:59'),
(3, 'App\\Models\\APIModels\\User', 1, 'auth_token', '73643bbf89479095c4528b6d930c109b3e27fecb53f7da4abc196d1ff61584cf', '[\"*\"]', '2021-12-27 05:20:47', '2021-12-27 05:20:29', '2021-12-27 05:20:47'),
(4, 'App\\Models\\APIModels\\User', 1, 'auth_token', '0b74753b64a5b69bc5d4e3c56698e0562c71e5790c16ca216c78ce90be72c42d', '[\"*\"]', NULL, '2021-12-27 05:22:00', '2021-12-27 05:22:00'),
(5, 'App\\Models\\APIModels\\User', 1, 'auth_token', 'e57c74ca3a49e0ddcc5825ad416ef05bcbf9c9b10ddd4e361f9f65cdfb2feac7', '[\"*\"]', NULL, '2021-12-27 05:22:45', '2021-12-27 05:22:45'),
(6, 'App\\Models\\APIModels\\User', 1, 'auth_token', 'e9acf9773886083b1fffb19fb8aae41fc54feff11b84799dceba1ec85fc5e441', '[\"*\"]', NULL, '2021-12-27 05:22:55', '2021-12-27 05:22:55'),
(7, 'App\\Models\\APIModels\\User', 1, 'auth_token', 'd589b95f78bd2faf4fd0f154541f1c2edf361f646b786d6f316bf8049df114d6', '[\"*\"]', NULL, '2021-12-29 05:53:17', '2021-12-29 05:53:17'),
(8, 'App\\Models\\APIModels\\User', 1, 'auth_token', 'c4cf7b59a3d007bc93dd295453e8a1464c4c7864a53824ac654030875ac7f86c', '[\"*\"]', NULL, '2021-12-30 02:41:19', '2021-12-30 02:41:19'),
(9, 'App\\Models\\APIModels\\User', 2, 'auth_token', 'f132d7df08e5b557d0a8dcf4862631e44868c8846b9a396e9ed65f959de0809c', '[\"*\"]', NULL, '2021-12-30 02:44:00', '2021-12-30 02:44:00'),
(10, 'App\\Models\\APIModels\\User', 2, 'auth_token', '1020c03395efafae4566da64eb3cfcf393f1cd9ce0ce2bf8b641499b74c44905', '[\"*\"]', NULL, '2021-12-30 02:46:31', '2021-12-30 02:46:31'),
(11, 'App\\Models\\APIModels\\User', 2, 'auth_token', 'e82b0f24c23fc3603d98035e7f3e9eaac6054df43c3f6f4244a273d8b008c955', '[\"*\"]', NULL, '2021-12-30 02:47:58', '2021-12-30 02:47:58'),
(12, 'App\\Models\\APIModels\\User', 2, 'auth_token', '60b0b7135a7c63cbca3c9ce17fa2fca181cc90d25c105e554a3396bec5a679e9', '[\"*\"]', NULL, '2021-12-30 02:51:24', '2021-12-30 02:51:24'),
(13, 'App\\Models\\APIModels\\User', 2, 'auth_token', '7e87238df4c15bb972315bfd5d2c13fa654a3a7d874f27a743ace51fb0e9499b', '[\"*\"]', NULL, '2021-12-30 02:52:43', '2021-12-30 02:52:43'),
(14, 'App\\Models\\APIModels\\User', 2, 'auth_token', '299ead4b08af3b6b7bc4488797d06305630bf3fbd8cb01dfcb49b0c324be0e8f', '[\"*\"]', NULL, '2021-12-30 02:54:30', '2021-12-30 02:54:30'),
(15, 'App\\Models\\APIModels\\User', 1, 'auth_token', 'b820ea90c64b2080c6d7a96860de9bf3dfa66469f3080ec1d0ec88b61678107e', '[\"*\"]', NULL, '2021-12-30 02:56:27', '2021-12-30 02:56:27'),
(16, 'App\\Models\\APIModels\\User', 1, 'auth_token', '67f979fa035a7357520b768cb154050386b87c3f03695f21ad2f5ecda1d39fe8', '[\"*\"]', '2021-12-30 03:04:51', '2021-12-30 03:04:41', '2021-12-30 03:04:51'),
(17, 'App\\Models\\APIModels\\User', 1, 'auth_token', 'ea565cdb68ef07f444587040be01df551fb94560cb55b29607b36c46f4d96ae3', '[\"*\"]', '2021-12-30 03:20:29', '2021-12-30 03:19:30', '2021-12-30 03:20:29'),
(18, 'App\\Models\\APIModels\\User', 1, 'auth_token', '34bcf05aa41c8285e52dbc5bcc94b40b4accc3cbe79aa8545de0fd0201149a32', '[\"*\"]', '2021-12-30 03:27:06', '2021-12-30 03:26:08', '2021-12-30 03:27:06'),
(19, 'App\\Models\\APIModels\\User', 2, 'auth_token', '3ee3a62be59ff36b64d0313cafe2323336a4796aeb6d8f814a254383b463e347', '[\"*\"]', NULL, '2021-12-30 03:35:56', '2021-12-30 03:35:56'),
(20, 'App\\Models\\APIModels\\User', 2, 'auth_token', '0344314117f9e57fdb752bf287dff414601981f043f8f6a6accb62ec1710255e', '[\"*\"]', '2021-12-30 03:38:17', '2021-12-30 03:37:20', '2021-12-30 03:38:17'),
(21, 'App\\Models\\APIModels\\User', 2, 'auth_token', 'f97e1582a216c597c5a2d9247ea18a0f4767300ee26f337600049ab08c1bc5f7', '[\"*\"]', '2021-12-30 03:49:45', '2021-12-30 03:49:20', '2021-12-30 03:49:45'),
(22, 'App\\Models\\APIModels\\User', 2, 'auth_token', '9a4983b80ab60c232b1a393ad336efd56e6bcb961371c9bb5961c95e6afb0857', '[\"*\"]', '2021-12-30 03:51:52', '2021-12-30 03:51:51', '2021-12-30 03:51:52'),
(23, 'App\\Models\\APIModels\\User', 1, 'auth_token', '475d075884829ea4e54b9b470ca979061ce37ccfbf1e4c8ca854a0224d1116cc', '[\"*\"]', '2021-12-30 03:59:25', '2021-12-30 03:58:46', '2021-12-30 03:59:25'),
(24, 'App\\Models\\APIModels\\User', 2, 'auth_token', '2764e42e5704b0ea06b68570bf56a859be74015bdeb8c02cba9aafc998ef536f', '[\"*\"]', '2021-12-30 04:06:16', '2021-12-30 04:05:38', '2021-12-30 04:06:16'),
(25, 'App\\Models\\APIModels\\User', 2, 'auth_token', 'f6bb96d683f9308b5dd16a34e3979b243f821ab4724fb4dc40f0be4400de8527', '[\"*\"]', '2021-12-30 04:07:28', '2021-12-30 04:07:27', '2021-12-30 04:07:28'),
(26, 'App\\Models\\APIModels\\User', 2, 'auth_token', '13a4105e76ecd8a071561cdcf378b64ac26e5625c6f5a5ddf6c4a15299c71e91', '[\"*\"]', '2021-12-30 04:46:39', '2021-12-30 04:46:37', '2021-12-30 04:46:39'),
(27, 'App\\Models\\APIModels\\User', 2, 'auth_token', '98918921a84185a609023ebcb3411fcc2ea3b8b8375beddaccd31d21ec02f24a', '[\"*\"]', '2021-12-30 04:55:08', '2021-12-30 04:54:52', '2021-12-30 04:55:08'),
(28, 'App\\Models\\APIModels\\User', 2, 'auth_token', '7771d5bc23e428df13215f6766bfa2dd68ce20adc8cdfd8e00d0e32746c9d6cb', '[\"*\"]', '2021-12-30 04:57:29', '2021-12-30 04:57:08', '2021-12-30 04:57:29'),
(29, 'App\\Models\\APIModels\\User', 2, 'auth_token', '425c08cd1824b63cf357450d540bdbe4f27c6c58410abfde020301f17ad7fa59', '[\"*\"]', NULL, '2021-12-30 04:58:49', '2021-12-30 04:58:49'),
(30, 'App\\Models\\APIModels\\User', 2, 'auth_token', '73847f270e0b493d47e7224446454976936f2bdd0e1cb57b6e081fb19587889e', '[\"*\"]', '2021-12-30 05:01:35', '2021-12-30 05:01:21', '2021-12-30 05:01:35'),
(31, 'App\\Models\\APIModels\\User', 2, 'auth_token', '3a45a6b1098cd0f6ade3291a7eef0e958d55cc731dfdd6805b884309e71179f0', '[\"*\"]', '2021-12-30 05:03:26', '2021-12-30 05:03:00', '2021-12-30 05:03:26'),
(32, 'App\\Models\\APIModels\\User', 2, 'auth_token', '979f5563f822308a30f08c876f9d65f522bac40faeaeec97af17018a704eae33', '[\"*\"]', '2021-12-30 05:07:31', '2021-12-30 05:07:17', '2021-12-30 05:07:31'),
(33, 'App\\Models\\APIModels\\User', 1, 'auth_token', '2f20dfc92bbb7177c70ec2e3df3aaaf373e62b9bb4342073952a3433c222e349', '[\"*\"]', NULL, '2021-12-30 05:11:17', '2021-12-30 05:11:17'),
(34, 'App\\Models\\APIModels\\User', 1, 'auth_token', '2a04ba73e7a2dbaee13ca458de661f75e7f60a86cb2eea172aec5dcc40a0e10a', '[\"*\"]', '2021-12-30 05:13:35', '2021-12-30 05:13:20', '2021-12-30 05:13:35'),
(35, 'App\\Models\\APIModels\\User', 2, 'auth_token', '1fc491f1d24fe54cee5c44b28661499292fe3ddb8651c2cd460ae3f52e4edd42', '[\"*\"]', NULL, '2021-12-30 05:25:24', '2021-12-30 05:25:24'),
(36, 'App\\Models\\APIModels\\User', 1, 'auth_token', 'b1628e9819589e46598ea20fd665cbde8a03180e4878c7fcb50903c7bb4bd5cd', '[\"*\"]', '2021-12-30 05:26:17', '2021-12-30 05:26:01', '2021-12-30 05:26:17'),
(37, 'App\\Models\\APIModels\\User', 2, 'auth_token', '2e8436418dcb07f679f5326bfba81a1a20679b8ef3faaa28444403182f45cdf5', '[\"*\"]', NULL, '2021-12-30 06:17:10', '2021-12-30 06:17:10'),
(38, 'App\\Models\\APIModels\\User', 10, 'auth_token', '394562eb165daf22b40d20504ba45694f44d0fe17100c806dee3a62689011cce', '[\"*\"]', '2021-12-30 22:46:11', '2021-12-30 22:45:47', '2021-12-30 22:46:11'),
(39, 'App\\Models\\APIModels\\User', 2, 'auth_token', 'eeb1192e041f659cd73524282b60952dad9310a791658b67824de3e84bca2bd0', '[\"*\"]', NULL, '2022-01-02 22:59:46', '2022-01-02 22:59:46'),
(40, 'App\\Models\\APIModels\\User', 2, 'auth_token', '0a693bdd7f88267cd150336d7981de378ad26785afc223ae8b31a59bb829dda3', '[\"*\"]', NULL, '2022-01-03 05:28:35', '2022-01-03 05:28:35'),
(41, 'App\\Models\\APIModels\\User', 2, 'auth_token', '7dec88a490cf8cb2c75f5de6d90a54be948ad2a8f86ad186990fe1752d69a2ce', '[\"*\"]', NULL, '2022-01-04 11:44:08', '2022-01-04 11:44:08'),
(42, 'App\\Models\\APIModels\\User', 2, 'auth_token', '99654af1c4d9a5fa241c36cdb63f09f8181b7bca2dbf8acb3b4d0dd96c84c2f1', '[\"*\"]', NULL, '2022-01-05 00:21:47', '2022-01-05 00:21:47'),
(43, 'App\\Models\\APIModels\\User', 2, 'auth_token', '302fca5e942a7f52560d05095dc1809ec6ea35fe49b82c6160fab93bc3d52997', '[\"*\"]', '2022-01-05 00:47:23', '2022-01-05 00:47:09', '2022-01-05 00:47:23'),
(44, 'App\\Models\\APIModels\\User', 2, 'auth_token', 'ecec5b2fd25203ae365ebe5c30381e92334b034eefb864f52a3416c2a2837785', '[\"*\"]', NULL, '2022-01-05 02:30:25', '2022-01-05 02:30:25'),
(45, 'App\\Models\\APIModels\\User', 2, 'auth_token', 'cf893553deb5c6399a8935db3bbcfaccd5cb37ae18e49406ff36173589de9ed9', '[\"*\"]', NULL, '2022-01-05 02:31:18', '2022-01-05 02:31:18'),
(46, 'App\\Models\\APIModels\\User', 2, 'auth_token', '8d2957188c482250c0e5133b98a33b8c3fba0ef044065eed9a01a0241d3aa44c', '[\"*\"]', '2022-01-05 03:07:18', '2022-01-05 03:07:00', '2022-01-05 03:07:18'),
(47, 'App\\Models\\APIModels\\User', 1, 'auth_token', 'a985e389d246a3cb06f9b5b17cc29ee8f3198160aafcca222eb3a7316fbbb473', '[\"*\"]', '2022-01-05 03:16:00', '2022-01-05 03:15:41', '2022-01-05 03:16:00'),
(48, 'App\\Models\\APIModels\\User', 2, 'auth_token', '378d2c5ac1c5f7bf44c720b1ec63992d66144800c7c817e383336e90ad06e37b', '[\"*\"]', NULL, '2022-01-05 06:39:53', '2022-01-05 06:39:53'),
(49, 'App\\Models\\APIModels\\User', 2, 'auth_token', 'a21d5ed0e3128c8152fb92a11caa8fa598e67de5373793ccf530903b2874b635', '[\"*\"]', NULL, '2022-01-05 06:49:17', '2022-01-05 06:49:17'),
(50, 'App\\Models\\APIModels\\User', 2, 'auth_token', 'd1eddb48393ddcd304624595a9ce33a04b7d3f1782c97bc8cbee7b06090cced9', '[\"*\"]', NULL, '2022-01-05 22:02:03', '2022-01-05 22:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 => draft, 1 => published',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL DEFAULT 0 COMMENT '0 => blog, 1 => news',
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `is_approved` int(11) NOT NULL COMMENT '0 => not approved, 1 => approved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `status`, `slug`, `featured`, `type`, `user_id`, `category_id`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 'Complaint Letter to Police for Land Encroachment', '<p>Use these sample letters as a guide to write a complaint letter to your district / area Police over illegal land encroachment by a neighbor, business or other individual in an area.</p>\r\n\r\n<h1>Sample Complaint Letter to Police for Land Encroachment #1</h1>\r\n\r\n<p>Dear Sir,</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This is to complain against [Name] who is constructing a house down our lane for quite a few months. On account of this construction, the pavements are always full of sand, heaps and bricks. I suggest that you visit our area for a first hand appraisal of the situation. 1 hope you will take immediate action in the interest of better living conditions for citizens of this locality. I will be thankful for an early action.</p>\r\n\r\n<p>Thanks.</p>\r\n\r\n<p>Yours faithfully,</p>\r\n\r\n<p>Your Name</p>\r\n\r\n<h2>Sample Complaint Letter to Police for Land Encroachment #2</h2>\r\n\r\n<p>The Sender&rsquo;s Name,<br />\r\nDoor Number and Street&rsquo;s Name,<br />\r\nArea Name,<br />\r\nCity.<br />\r\nPostal Code : XXXXXX<br />\r\nPhone Number : 0000 &ndash; 123456789</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Date :</p>\r\n\r\n<p>Dear Sir,</p>\r\n\r\n<p>This is to lodge a complaint to you that a cycle repairing shop owner has encroached the footpath near the third pollar of the railway bridge</p>\r\n\r\n<p>You are requested to take immediate action against such encroachment lest the other people are encouraged to follow the example.</p>\r\n\r\n<p>I am sure that you will take necessary steps in order to check the encroachment on public places immediately.</p>\r\n\r\n<p>Thanking you in anticipation.</p>\r\n\r\n<p>Yours faithfully,<br />\r\nName</p>', 1, 'complaint-letter', 1, 0, 1, 1, 1, '2022-01-05 03:01:16', '2022-01-05 03:01:24'),
(2, 'Employment Acceptance Letter', '<p>A job offer acceptance letter is a letter you write to a new employer once you have made the decision to take on a job that&rsquo;s been offered to you. Writing an employment acceptance letter is a good policy for any job seeker who&rsquo;s decided to take a job offer. For one thing, it reinforces your professional approach. It also gives you the chance to document a few key things about your new job, such as your title, supervisor, salary and benefits.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>An employment offer acceptance letter should be well planned and well written. Check it carefully for typos and errors, you want to be sure it presents you in a professional light and reinforces that the employer made the right choice! Take a look at some sample employment acceptance letters below to help you write one.</p>\r\n\r\n<h2>Sample Employment Acceptance Letter #1</h2>\r\n\r\n<p>[Date]</p>\r\n\r\n<p>[Mr./Ms. Full name]<br />\r\n[Title]<br />\r\n[Employer name]<br />\r\n[Employer street address]<br />\r\n[City, state zip code]</p>\r\n\r\n<p>Dear [Mr./Ms. Name]:</p>\r\n\r\n<p>It is with great pleasure that I accept your offer to join [employer name] as a [position title] under [supervisor name]. The goals you outlined for the position are well-matched to my abilities, and I consider it a privilege to join your team.</p>\r\n\r\n<p>As we discussed, my annual salary will be [salary], and medical benefits will commence after 30 days of employment.</p>\r\n\r\n<p>[Mr./Ms. last name], thank you for making the interview process enjoyable. I look forward to working with you and the [employer name] team. I will report to work on [date]. In the meantime, feel free to call me at (555) 555-5555.</p>\r\n\r\n<p>Sincerely,<br />\r\n[Your name]</p>\r\n\r\n<h2>Sample Job Acceptance Letter #2</h2>\r\n\r\n<p>Your Name<br />\r\nYour Address<br />\r\nYour City, State, Zip Code<br />\r\nYour Phone Number<br />\r\nYour Email<br />\r\nDate</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mrs [Name]<br />\r\nHuman Resources Manager<br />\r\n[Company Name]<br />\r\nAddress<br />\r\nCity, State, Zip Code</p>\r\n\r\n<p>Dear Mrs [Name]<br />\r\nThank you for offering me the position of [Position Name] with [Company Name]. I am pleased to accept this offer and look forward to starting employment with your company on [start date].</p>\r\n\r\n<p>As we discussed, my starting salary will be [amount] and health and life insurance benefits will be provided after 60 days of employment.</p>\r\n\r\n<p>Thank you again for giving me this wonderful opportunity. I am eager to join your team and make a positive contribution to the company.</p>\r\n\r\n<p>If there is any further information or paperwork you need me to complete, please let me know and I will arrange it as soon as possible.</p>\r\n\r\n<p>Sincerely,</p>\r\n\r\n<p>Your signature</p>\r\n\r\n<p>Typed name</p>\r\n\r\n<h2>Employment Acceptance Letter Template #3</h2>\r\n\r\n<p>Mr [Name]<br />\r\nHuman Resources Manager<br />\r\n[Company Name]<br />\r\nAddress<br />\r\nCity, State, Zip Code<br />\r\nDate<br />\r\n<br />\r\nDear Mr [Name]<br />\r\nI was very happy to receive the news today that you are offering me the position of [Position Name] at [Company Name].<br />\r\nPlease accept this letter as my formal acceptance of your offer.As we agreed during our last meeting my annual salary will be [amount], and</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>I understand that I will receive a full wage during my initial four weeks training and probationary period.I would like to thank you once again for offering me this opportunity to work for a reputable and exciting company.</p>\r\n\r\n<p>I am excited and looking forward to the [date] when I start working with you and also meet my new work colleagues.</p>\r\n\r\n<p>Yours sincerely,<br />\r\n[Your Name]</p>', 1, 'employment-acceptance', 1, 0, 1, 1, 0, '2022-01-05 03:24:08', '2022-01-19 06:25:57'),
(3, 'Test User Post', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 1, 'test-user-post', 1, 0, 2, 2, 1, '2022-01-21 00:36:42', '2022-01-21 00:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'sku',
  `product_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 => draft, 1 => active',
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `child_category_id` int(11) DEFAULT NULL,
  `new_arrival` int(11) NOT NULL DEFAULT 0,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `featured` int(11) NOT NULL DEFAULT 0,
  `unit_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `selling_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `packing_cost` decimal(10,2) NOT NULL DEFAULT 0.00,
  `weight` decimal(6,2) NOT NULL DEFAULT 0.00,
  `weight_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promotion_id` bigint(20) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_code`, `product_description`, `short_description`, `status`, `category_id`, `sub_category_id`, `child_category_id`, `new_arrival`, `is_approved`, `featured`, `unit_price`, `selling_price`, `packing_cost`, `weight`, `weight_unit`, `promotion_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, 'Product 1', 'PRO1', '<p>Product 1</p>', '<p>Product 1</p>', 1, 1, 2, 1, 1, 0, 1, '1000.00', '1100.00', '0.00', '0.50', 'kg', NULL, NULL, '2022-03-25 10:48:24', '2022-03-30 09:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `product_has_categories`
--

CREATE TABLE `product_has_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `src`, `alt_text`, `sort_order`, `is_featured`, `created_at`, `updated_at`) VALUES
(1, 1, 'images/uploads/product/2022/03/20220325161825cat-img-112 - Copy.png', NULL, NULL, 0, NULL, NULL),
(2, 1, 'images/uploads/product/2022/03/202203291214113cat-img-112 - Copy.png', NULL, NULL, 1, NULL, '2022-03-29 06:44:11'),
(3, 1, 'images/uploads/product/2022/03/20220329120717cat-img-112 - Copy.png', NULL, NULL, 0, NULL, NULL),
(4, 1, 'images/uploads/product/2022/03/202203291214112cat-img-112 - Copy.png', NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_inventories`
--

CREATE TABLE `product_inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `master_quantity` bigint(20) NOT NULL DEFAULT 0,
  `reserved_quantity` bigint(20) NOT NULL DEFAULT 0,
  `stock_out_quantity` bigint(20) NOT NULL DEFAULT 0,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `entered_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_inventories`
--

INSERT INTO `product_inventories` (`id`, `product_id`, `variant_id`, `master_quantity`, `reserved_quantity`, `stock_out_quantity`, `is_approved`, `entered_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 8, 2, 0, 0, 1, '2022-03-25 10:52:04', '2022-03-28 07:13:08'),
(2, 1, 2, 9, 1, 0, 0, 1, '2022-03-25 10:54:23', '2022-03-28 06:26:13');

-- --------------------------------------------------------

--
-- Table structure for table `product_inventory_histories`
--

CREATE TABLE `product_inventory_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `operation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `running_quantity` int(11) NOT NULL,
  `actual_reserved_quantity` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processed_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_inventory_histories`
--

INSERT INTO `product_inventory_histories` (`id`, `product_id`, `variant_id`, `operation`, `quantity`, `running_quantity`, `actual_reserved_quantity`, `order_id`, `order_number`, `processed_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'initial', 0, 0, 0, NULL, NULL, 1, '2022-03-25 10:52:04', '2022-03-25 10:52:04'),
(2, 1, 2, 'initial', 0, 0, 0, NULL, NULL, 1, '2022-03-25 10:54:23', '2022-03-25 10:54:23'),
(3, 1, 1, 'stock-in', 10, 10, 0, NULL, NULL, 1, '2022-03-25 11:04:04', '2022-03-25 11:04:04'),
(4, 1, 2, 'stock-in', 10, 10, 0, NULL, NULL, 1, '2022-03-28 05:32:25', '2022-03-28 05:32:25'),
(5, 1, 1, 'reserve', -1, 9, 1, 1, 'ORD202203281156131', 1, '2022-03-28 06:26:13', '2022-03-28 06:26:13'),
(6, 1, 2, 'reserve', -1, 9, 1, 1, 'ORD202203281156131', 1, '2022-03-28 06:26:13', '2022-03-28 06:26:13'),
(7, 1, 1, 'reserve', -1, 8, 1, 2, 'ORD202203281243072', 1, '2022-03-28 07:13:08', '2022-03-28 07:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0 COMMENT '0 => Other, 1 => Flash Deals',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promotion_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_type` int(11) NOT NULL DEFAULT 0 COMMENT '0 => amount, 1=> percentage',
  `discount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 => inactive, 1=> active',
  `starts_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `type`, `title`, `description`, `promotion_tag`, `discount_type`, `discount`, `status`, `starts_at`, `ends_at`, `created_at`, `updated_at`) VALUES
(1, 0, 'Christmas Offer', 'Christmas Offer', 'Christmas Offer', 1, '10.00', 1, '2022-03-24 10:49:00', '2022-03-31 10:49:00', '2022-03-03 23:39:08', '2022-03-24 10:49:29'),
(3, 1, 'Flash deal', 'Flash deal', 'Flash Deal', 0, '100.00', 1, '2022-03-15 18:31:00', '2022-03-31 12:03:06', '2022-03-16 07:37:16', '2022-03-24 11:18:29'),
(4, 2, 'Stock Clearance', 'Stock Clearance', 'Stock Clearance', 1, '20.00', 1, '2022-03-24 10:50:00', '2022-03-31 10:50:00', '2022-03-24 10:50:55', '2022-03-24 10:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

CREATE TABLE `quotations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reference_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quotation_total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `weight` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotations`
--

INSERT INTO `quotations` (`id`, `reference_number`, `user_id`, `customer_name`, `company_name`, `address`, `email_address`, `quotation_total`, `weight`, `created_at`, `updated_at`) VALUES
(1, 'QUO2022032410363553', 1, 'test name', 'GUI', 'address', 'admin@gmail.com', '3000.00', '0.50', '2022-03-24 05:06:35', '2022-03-24 05:06:35'),
(2, 'QUO2022032410410331', 1, 'test name', 'GUI', 'address', 'admin@gmail.com', '3000.00', '0.50', '2022-03-24 05:11:03', '2022-03-24 05:11:03'),
(3, 'QUO2022032410412022', 1, 'test name', 'GUI', 'address', 'admin@gmail.com', '3000.00', '0.50', '2022-03-24 05:11:20', '2022-03-24 05:11:20'),
(4, 'QUO2022032410465573', 1, 'test name', 'GUI', 'address', 'admin@gmail.com', '3000.00', '0.50', '2022-03-24 05:16:55', '2022-03-24 05:16:55'),
(5, 'QUO2022032410471511', 1, 'test name', 'GUI', 'address', 'admin@gmail.com', '3000.00', '0.50', '2022-03-24 05:17:15', '2022-03-24 05:17:15'),
(6, 'QUO2022032410490479', 1, 'test name', 'GUI', 'address', 'admin@gmail.com', '3000.00', '0.50', '2022-03-24 05:19:04', '2022-03-24 05:19:05'),
(7, 'QUO2022032410493098', 1, 'test name', 'GUI', 'address', 'admin@gmail.com', '3000.00', '0.50', '2022-03-24 05:19:30', '2022-03-24 05:19:30'),
(8, 'QUO2022032411175674', 1, 'test name', 'GUI', 'address', 'admin@gmail.com', '3000.00', '0.50', '2022-03-24 05:47:56', '2022-03-24 05:47:56'),
(9, 'QUO2022032411210733', 1, 'test name', 'GUI', 'address', 'admin@gmail.com', '3000.00', '0.50', '2022-03-24 05:51:07', '2022-03-24 05:51:07'),
(10, 'QUO2022032411240187', 1, 'test name', 'GUI', 'address', 'admin@gmail.com', '3000.00', '0.50', '2022-03-24 05:54:01', '2022-03-24 05:54:02'),
(11, 'QUO2022032411250380', 1, 'test name', 'GUI', 'address', 'admin@gmail.com', '3000.00', '0.50', '2022-03-24 05:55:03', '2022-03-24 05:55:03'),
(12, 'QUO2022032411260691', 1, 'test name', 'GUI', 'address', 'admin@gmail.com', '3000.00', '0.50', '2022-03-24 05:56:06', '2022-03-24 05:56:06'),
(13, 'QUO2022032411263535', 1, 'test name', 'GUI', 'address', 'admin@gmail.com', '3000.00', '0.50', '2022-03-24 05:56:35', '2022-03-24 05:56:35'),
(14, 'QUO2022032411272868', 1, 'test name', 'GUI', 'address', 'admin@gmail.com', '3000.00', '0.50', '2022-03-24 05:57:28', '2022-03-24 05:57:28'),
(15, 'QUO2022032411285595', 1, 'test name', 'GUI', 'address', 'admin@gmail.com', '3000.00', '0.50', '2022-03-24 05:58:55', '2022-03-24 05:58:55'),
(16, 'QUO2022032411301168', 1, 'GUI', 'GUI', 'Address', 'admin@gmail.com', '6000.00', '0.50', '2022-03-24 06:00:11', '2022-03-24 06:00:11'),
(17, 'QUO2022032412275040', 1, 'GUI', 'GUI', 'Address', 'admin@gmail.com', '6000.00', '0.50', '2022-03-24 06:57:50', '2022-03-24 06:57:50'),
(18, 'QUO2022032412281182', 1, 'GUI', 'GUI', 'Address', 'admin@gmail.com', '6000.00', '0.50', '2022-03-24 06:58:11', '2022-03-24 06:58:11'),
(19, 'QUO2022032412284374', 1, 'GUI', 'GUI', 'Address', 'admin@gmail.com', '6000.00', '0.50', '2022-03-24 06:58:43', '2022-03-24 06:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `quotation_items`
--

CREATE TABLE `quotation_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quotation_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `sub_total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotation_items`
--

INSERT INTO `quotation_items` (`id`, `quotation_id`, `product_id`, `product_name`, `unit_price`, `quantity`, `sub_total`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Product 2', '3000.00', 1, '3000.00', '2022-03-24 05:06:35', '2022-03-24 05:06:35'),
(2, 2, 2, 'Product 2', '3000.00', 1, '3000.00', '2022-03-24 05:11:03', '2022-03-24 05:11:03'),
(3, 3, 2, 'Product 2', '3000.00', 1, '3000.00', '2022-03-24 05:11:20', '2022-03-24 05:11:20'),
(4, 4, 2, 'Product 2', '3000.00', 1, '3000.00', '2022-03-24 05:16:55', '2022-03-24 05:16:55'),
(5, 5, 2, 'Product 2', '3000.00', 1, '3000.00', '2022-03-24 05:17:15', '2022-03-24 05:17:15'),
(6, 6, 2, 'Product 2', '3000.00', 1, '3000.00', '2022-03-24 05:19:05', '2022-03-24 05:19:05'),
(7, 7, 2, 'Product 2', '3000.00', 1, '3000.00', '2022-03-24 05:19:30', '2022-03-24 05:19:30'),
(8, 8, 2, 'Product 2', '3000.00', 1, '3000.00', '2022-03-24 05:47:56', '2022-03-24 05:47:56'),
(9, 9, 2, 'Product 2', '3000.00', 1, '3000.00', '2022-03-24 05:51:07', '2022-03-24 05:51:07'),
(10, 10, 2, 'Product 2', '3000.00', 1, '3000.00', '2022-03-24 05:54:02', '2022-03-24 05:54:02'),
(11, 11, 2, 'Product 2', '3000.00', 1, '3000.00', '2022-03-24 05:55:03', '2022-03-24 05:55:03'),
(12, 12, 2, 'Product 2', '3000.00', 1, '3000.00', '2022-03-24 05:56:06', '2022-03-24 05:56:06'),
(13, 13, 2, 'Product 2', '3000.00', 1, '3000.00', '2022-03-24 05:56:35', '2022-03-24 05:56:35'),
(14, 14, 2, 'Product 2', '3000.00', 1, '3000.00', '2022-03-24 05:57:28', '2022-03-24 05:57:28'),
(15, 15, 2, 'Product 2', '3000.00', 1, '3000.00', '2022-03-24 05:58:55', '2022-03-24 05:58:55'),
(16, 16, 2, 'Product 2', '3000.00', 2, '6000.00', '2022-03-24 06:00:11', '2022-03-24 06:00:11'),
(17, 17, 2, 'Product 2', '3000.00', 2, '6000.00', '2022-03-24 06:57:50', '2022-03-24 06:57:50'),
(18, 18, 2, 'Product 2', '3000.00', 2, '6000.00', '2022-03-24 06:58:11', '2022-03-24 06:58:11'),
(19, 19, 2, 'Product 2', '3000.00', 2, '6000.00', '2022-03-24 06:58:43', '2022-03-24 06:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `review_rating` int(11) NOT NULL DEFAULT 0,
  `score` int(11) NOT NULL DEFAULT 0,
  `review_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_status` int(11) NOT NULL DEFAULT 0 COMMENT '0 => no show, 1 => show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `customer_id`, `review_rating`, `score`, `review_description`, `review_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 252, 'dssd', 1, '2022-03-15 05:13:01', '2022-03-15 05:13:01'),
(2, 1, 1, 4, 124, 'test review', 1, '2022-03-15 05:15:48', '2022-03-15 05:15:48'),
(3, 1, 1, 2, 252, 'aaa', 1, '2022-03-15 06:37:27', '2022-03-15 06:37:27'),
(4, 1, 1, 2, 252, 'aabbbbb', 1, '2022-03-15 06:37:51', '2022-03-15 06:37:51'),
(5, 1, 1, 5, 252, 'test product review', 1, '2022-03-15 07:17:22', '2022-03-15 12:14:46'),
(6, 2, 1, 5, 252, 'test product review', 1, '2022-03-16 08:00:25', '2022-03-16 08:00:25'),
(7, 2, 1, 2, 29, 'test review 2', 1, '2022-03-16 08:00:45', '2022-03-16 08:00:45'),
(8, 1, 1, 1, 33, 'test rev', 1, '2022-03-24 08:40:41', '2022-03-24 08:40:41'),
(9, 1, 1, 2, 29, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2022-03-24 08:41:17', '2022-03-24 08:41:17'),
(10, 6, 1, 3, 40, 'test review', 1, '2022-03-24 12:27:25', '2022-03-24 12:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 => inactive, 1 => active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, NULL, NULL),
(2, 'User', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_settings`
--

CREATE TABLE `sidebar_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users` int(11) NOT NULL DEFAULT 0,
  `products` int(11) NOT NULL DEFAULT 0,
  `inventory` int(11) NOT NULL DEFAULT 0,
  `categories` int(11) NOT NULL DEFAULT 0,
  `tags` int(11) NOT NULL DEFAULT 0,
  `all_orders` int(11) NOT NULL DEFAULT 0,
  `posts` int(11) NOT NULL DEFAULT 0,
  `marketing` int(11) NOT NULL DEFAULT 0,
  `web_pages` int(11) NOT NULL DEFAULT 0,
  `zones` int(11) NOT NULL DEFAULT 0,
  `promotions` int(11) NOT NULL DEFAULT 0,
  `advertisement` int(11) NOT NULL DEFAULT 0,
  `inquiries` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sidebar_settings`
--

INSERT INTO `sidebar_settings` (`id`, `users`, `products`, `inventory`, `categories`, `tags`, `all_orders`, `posts`, `marketing`, `web_pages`, `zones`, `promotions`, `advertisement`, `inquiries`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, NULL, '2022-03-29 11:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_template` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_number` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `section`, `banner_template`, `template_number`, `created_at`, `updated_at`) VALUES
(1, 'header_template', NULL, 2, '2022-01-05 00:12:08', '2022-01-18 05:03:34'),
(2, 'slider_template', NULL, 1, '2022-01-05 00:12:08', '2022-01-18 05:03:34'),
(3, 'section1_template', NULL, 1, '2022-01-05 00:12:08', '2022-01-18 05:03:34'),
(4, 'section2_template', NULL, 1, '2022-01-05 00:12:08', '2022-01-18 05:03:34'),
(5, 'section3_template', NULL, 1, '2022-01-05 00:12:08', '2022-01-18 05:03:34'),
(6, 'footer_template', NULL, 2, '2022-01-05 00:12:08', '2022-01-18 05:03:34'),
(7, 'category_view_template', NULL, 1, '2022-01-05 00:12:08', '2022-01-18 05:03:34'),
(8, 'post_view_template', NULL, 1, '2022-01-05 00:12:08', '2022-01-18 05:01:45'),
(9, 'post_card_template', NULL, 2, '2022-01-05 00:12:08', '2022-01-18 05:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `site_templates`
--

CREATE TABLE `site_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_number` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_templates`
--

INSERT INTO `site_templates` (`id`, `section`, `template_image`, `template_number`, `created_at`, `updated_at`) VALUES
(1, 'header_template', 'images/uploads/template-images/1642742928.png', 1, '2022-01-05 00:12:08', '2022-01-20 23:58:48'),
(2, 'slider_template', 'images/uploads/template-images/1642742911.png', 1, '2022-01-05 00:12:08', '2022-01-20 23:58:31'),
(3, 'section1_template', 'images/uploads/template-images/1642742921.png', 1, '2022-01-05 00:12:08', '2022-01-20 23:58:41'),
(4, 'section2_template', 'images/uploads/template-images/1642742935.png', 1, '2022-01-05 00:12:08', '2022-01-20 23:58:55'),
(5, 'section3_template', 'images/uploads/template-images/1642742943.png', 1, '2022-01-05 00:12:08', '2022-01-20 23:59:03'),
(6, 'footer_template', 'images/uploads/template-images/1642742949.png', 1, '2022-01-05 00:12:08', '2022-01-20 23:59:09'),
(7, 'category_view_template', 'images/uploads/template-images/1642742956.png', 1, '2022-01-05 00:12:08', '2022-01-20 23:59:16'),
(8, 'post_view_template', 'images/uploads/template-images/1642742964.png', 1, '2022-01-05 00:12:08', '2022-01-20 23:59:24'),
(9, 'post_card_template', 'images/uploads/template-images/1642742971.png', 1, '2022-01-05 00:12:08', '2022-01-20 23:59:31'),
(10, 'header_template', 'images/uploads/template-images/1642742978.png', 2, '2022-01-05 00:16:52', '2022-01-20 23:59:38'),
(11, 'footer_template', 'images/uploads/template-images/1642742987.png', 2, '2022-01-05 03:04:53', '2022-01-20 23:59:47'),
(12, 'post_card_template', 'images/uploads/template-images/1642742997.png', 2, '2022-01-05 03:19:03', '2022-01-20 23:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `sub_category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 => inactive, 1 => active',
  `sub_category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canonical_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `sub_category_name`, `sub_category_description`, `slug`, `status`, `sub_category_image`, `canonical_url`, `meta_keywords`, `meta_tag_description`, `page_title`, `created_at`, `updated_at`) VALUES
(2, 1, 'Test sub category 1', 'Test sub category 1', 'test-sub-cat1', 1, 'images/uploads/categories/1642743646.png', 'http://127.0.0.1:8000/admin/categories', 'keywords', 'description', 'test title', '2022-01-10 03:31:59', '2022-03-29 10:28:52'),
(3, 2, 'Test sub category 3', 'Test sub category 3', 'sub-cat-1', 1, 'images/uploads/categories/1648016179.png', 'sub-cat-1', 'sub-cat-1', 'sub-cat-1', 'sub-cat-1', '2022-03-23 06:16:19', '2022-03-29 10:52:27'),
(4, 2, 'Test sub category 2', 'Test sub category 2', 'sub-cat-2', 1, 'images/uploads/categories/1648016247.png', 'sub-cat-2', 'sub-cat-2', 'sub-cat-2', 'sub-cat-2', '2022-03-23 06:17:27', '2022-03-23 06:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL COMMENT '0 => Post, 1 => Product',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'tag 1', 0, '2021-12-23 01:33:11', '2021-12-23 01:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '0 => inactive, 1 => active',
  `role_id` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_reset_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `phone`, `last_name`, `first_name`, `username`, `dob`, `status`, `role_id`, `email_verified_at`, `password`, `remember_token`, `password_reset_token`, `user_image`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '0712222222', 'Dev', 'GUI', 'admin@gmail.com', '2021-12-01', 1, 1, NULL, '$2y$10$rS50Tvs9ABJVLmnQKqnCQ.lKZZHezcMOj4Xo6KeGCmh9PQseOC/ym', NULL, NULL, 'images/uploads/users/1648192106.png', '2021-12-23 00:28:35', '2022-03-25 07:08:26'),
(2, 'user@gmail.com', '0725555555', 'Dev', 'User', 'user@gmail.com', '2021-12-03', 1, 2, NULL, '$2y$10$MSONw8fDCLusSClKnuxQwu1RZvN7XLA4ESfyDLzBYqKnxq.De3sRm', NULL, NULL, NULL, '2021-12-24 00:17:42', '2021-12-24 00:17:42'),
(3, 'lahiru@guisrilanka.com', '0758888888', 'User', 'Test', 'lahiru@guisrilanka.com', '2021-12-04', 1, 1, NULL, '$2y$10$HlXkXRPSqdJCI8GLRdF6Oeh8wk0VC97qNITKWT8/HG9t3ux7VxCPW', NULL, NULL, NULL, '2021-12-24 00:20:00', '2022-01-18 02:03:14'),
(10, 'webuser@gmail.com', '0713213215', 'user', 'web', 'webuser@gmail.com', '2021-12-01', 1, 2, NULL, '$2y$10$W71Y17bAjSHGNziWuMYstO4iNu4xMc8rtGxKasulQLzk3OTkq.zi6', NULL, NULL, NULL, '2021-12-30 22:45:31', '2021-12-30 22:45:31'),
(12, 'testreg@gmail.com', '0715478985', 'reg', 'test', 'testreg@gmail.com', '2023-05-25', 1, 2, NULL, '$2y$10$rMg9s.VqIEcI.vQyEONAHeo0zsPSOT7/29e6micYZ8Midx6a2DIiq', NULL, NULL, NULL, '2022-01-17 23:49:09', '2022-01-17 23:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_permissions`
--

CREATE TABLE `user_has_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_has_permissions`
--

INSERT INTO `user_has_permissions` (`id`, `user_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(665, 3, 1, NULL, NULL),
(666, 3, 2, NULL, NULL),
(667, 3, 3, NULL, NULL),
(668, 3, 4, NULL, NULL),
(669, 3, 5, NULL, NULL),
(670, 3, 6, NULL, NULL),
(671, 3, 7, NULL, NULL),
(672, 3, 8, NULL, NULL),
(673, 3, 9, NULL, NULL),
(674, 3, 10, NULL, NULL),
(675, 3, 11, NULL, NULL),
(676, 3, 12, NULL, NULL),
(677, 3, 13, NULL, NULL),
(678, 3, 14, NULL, NULL),
(679, 3, 15, NULL, NULL),
(680, 3, 16, NULL, NULL),
(681, 3, 17, NULL, NULL),
(682, 3, 18, NULL, NULL),
(683, 3, 19, NULL, NULL),
(684, 3, 20, NULL, NULL),
(685, 3, 21, NULL, NULL),
(686, 3, 22, NULL, NULL),
(687, 3, 25, NULL, NULL),
(688, 3, 26, NULL, NULL),
(689, 3, 27, NULL, NULL),
(690, 3, 28, NULL, NULL),
(691, 3, 29, NULL, NULL),
(692, 3, 30, NULL, NULL),
(693, 3, 31, NULL, NULL),
(694, 3, 32, NULL, NULL),
(1173, 10, 1, NULL, NULL),
(1174, 10, 2, NULL, NULL),
(1175, 10, 3, NULL, NULL),
(1176, 10, 4, NULL, NULL),
(1177, 10, 5, NULL, NULL),
(1178, 10, 6, NULL, NULL),
(1179, 10, 7, NULL, NULL),
(1180, 10, 8, NULL, NULL),
(1181, 10, 9, NULL, NULL),
(1182, 10, 10, NULL, NULL),
(1183, 10, 11, NULL, NULL),
(1184, 10, 12, NULL, NULL),
(1185, 10, 13, NULL, NULL),
(1186, 10, 14, NULL, NULL),
(1187, 10, 15, NULL, NULL),
(1188, 10, 16, NULL, NULL),
(1189, 10, 17, NULL, NULL),
(1190, 10, 18, NULL, NULL),
(1191, 10, 19, NULL, NULL),
(1192, 10, 20, NULL, NULL),
(1193, 10, 21, NULL, NULL),
(1194, 10, 22, NULL, NULL),
(1195, 10, 25, NULL, NULL),
(1196, 10, 26, NULL, NULL),
(1197, 10, 27, NULL, NULL),
(1198, 10, 28, NULL, NULL),
(1199, 10, 29, NULL, NULL),
(1200, 10, 30, NULL, NULL),
(1201, 10, 31, NULL, NULL),
(1202, 10, 32, NULL, NULL),
(1203, 10, 33, NULL, NULL),
(1204, 10, 34, NULL, NULL),
(1205, 10, 35, NULL, NULL),
(1223, 12, 1, NULL, NULL),
(1224, 12, 2, NULL, NULL),
(1225, 12, 3, NULL, NULL),
(1226, 12, 4, NULL, NULL),
(1227, 12, 5, NULL, NULL),
(1228, 12, 6, NULL, NULL),
(1229, 12, 7, NULL, NULL),
(1230, 12, 8, NULL, NULL),
(1231, 12, 9, NULL, NULL),
(1232, 12, 10, NULL, NULL),
(1233, 12, 11, NULL, NULL),
(1234, 12, 12, NULL, NULL),
(1235, 12, 13, NULL, NULL),
(1236, 12, 14, NULL, NULL),
(1237, 12, 15, NULL, NULL),
(1238, 12, 16, NULL, NULL),
(1239, 12, 17, NULL, NULL),
(1240, 12, 18, NULL, NULL),
(1241, 12, 19, NULL, NULL),
(1242, 12, 20, NULL, NULL),
(1243, 12, 21, NULL, NULL),
(1244, 12, 22, NULL, NULL),
(1245, 12, 25, NULL, NULL),
(1246, 12, 26, NULL, NULL),
(1247, 12, 27, NULL, NULL),
(1248, 12, 28, NULL, NULL),
(1249, 12, 29, NULL, NULL),
(1250, 12, 30, NULL, NULL),
(1251, 12, 31, NULL, NULL),
(1252, 12, 32, NULL, NULL),
(1253, 12, 33, NULL, NULL),
(1254, 12, 34, NULL, NULL),
(1255, 12, 35, NULL, NULL),
(1256, 12, 36, NULL, NULL),
(1280, 2, 1, NULL, NULL),
(1281, 2, 2, NULL, NULL),
(1282, 2, 3, NULL, NULL),
(1283, 2, 4, NULL, NULL),
(1284, 2, 12, NULL, NULL),
(1285, 2, 15, NULL, NULL),
(1286, 2, 16, NULL, NULL),
(1287, 2, 17, NULL, NULL),
(1288, 2, 19, NULL, NULL),
(1289, 2, 28, NULL, NULL),
(1290, 2, 29, NULL, NULL),
(2432, 1, 1, NULL, NULL),
(2433, 1, 2, NULL, NULL),
(2434, 1, 3, NULL, NULL),
(2435, 1, 4, NULL, NULL),
(2436, 1, 18, NULL, NULL),
(2437, 1, 5, NULL, NULL),
(2438, 1, 6, NULL, NULL),
(2439, 1, 7, NULL, NULL),
(2440, 1, 8, NULL, NULL),
(2441, 1, 9, NULL, NULL),
(2442, 1, 10, NULL, NULL),
(2443, 1, 11, NULL, NULL),
(2444, 1, 12, NULL, NULL),
(2445, 1, 13, NULL, NULL),
(2446, 1, 14, NULL, NULL),
(2447, 1, 22, NULL, NULL),
(2448, 1, 25, NULL, NULL),
(2449, 1, 26, NULL, NULL),
(2450, 1, 27, NULL, NULL),
(2451, 1, 36, NULL, NULL),
(2452, 1, 77, NULL, NULL),
(2453, 1, 15, NULL, NULL),
(2454, 1, 16, NULL, NULL),
(2455, 1, 17, NULL, NULL),
(2456, 1, 19, NULL, NULL),
(2457, 1, 28, NULL, NULL),
(2458, 1, 29, NULL, NULL),
(2459, 1, 32, NULL, NULL),
(2460, 1, 20, NULL, NULL),
(2461, 1, 21, NULL, NULL),
(2462, 1, 30, NULL, NULL),
(2463, 1, 31, NULL, NULL),
(2464, 1, 33, NULL, NULL),
(2465, 1, 34, NULL, NULL),
(2466, 1, 35, NULL, NULL),
(2467, 1, 63, NULL, NULL),
(2468, 1, 64, NULL, NULL),
(2469, 1, 72, NULL, NULL),
(2470, 1, 37, NULL, NULL),
(2471, 1, 38, NULL, NULL),
(2472, 1, 39, NULL, NULL),
(2473, 1, 40, NULL, NULL),
(2474, 1, 78, NULL, NULL),
(2475, 1, 80, NULL, NULL),
(2476, 1, 41, NULL, NULL),
(2477, 1, 42, NULL, NULL),
(2478, 1, 43, NULL, NULL),
(2479, 1, 44, NULL, NULL),
(2480, 1, 45, NULL, NULL),
(2481, 1, 46, NULL, NULL),
(2482, 1, 47, NULL, NULL),
(2483, 1, 48, NULL, NULL),
(2484, 1, 49, NULL, NULL),
(2485, 1, 50, NULL, NULL),
(2486, 1, 51, NULL, NULL),
(2487, 1, 52, NULL, NULL),
(2488, 1, 53, NULL, NULL),
(2489, 1, 54, NULL, NULL),
(2490, 1, 55, NULL, NULL),
(2491, 1, 56, NULL, NULL),
(2492, 1, 57, NULL, NULL),
(2493, 1, 58, NULL, NULL),
(2494, 1, 59, NULL, NULL),
(2495, 1, 60, NULL, NULL),
(2496, 1, 61, NULL, NULL),
(2497, 1, 62, NULL, NULL),
(2498, 1, 65, NULL, NULL),
(2499, 1, 66, NULL, NULL),
(2500, 1, 79, NULL, NULL),
(2501, 1, 67, NULL, NULL),
(2502, 1, 68, NULL, NULL),
(2503, 1, 69, NULL, NULL),
(2504, 1, 70, NULL, NULL),
(2505, 1, 71, NULL, NULL),
(2506, 1, 73, NULL, NULL),
(2507, 1, 74, NULL, NULL),
(2508, 1, 75, NULL, NULL),
(2509, 1, 76, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_inquiries`
--

CREATE TABLE `user_inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `user_id`, `action`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'New single product added', 'New single product Product 2 added', '2022-03-03 02:25:43', '2022-03-03 02:25:43'),
(2, 1, 'Product inventory updated', 'Product Product 1 inventory updated', '2022-03-03 03:07:31', '2022-03-03 03:07:31'),
(3, 1, 'New promotion created', 'New promotion Christmas Offer created', '2022-03-03 23:39:08', '2022-03-03 23:39:08'),
(4, 1, 'Promotion status changed', 'Promotion Christmas Offer status changed to 1', '2022-03-03 23:39:24', '2022-03-03 23:39:24'),
(5, 1, 'Promotion assigned to product', 'Promotion Christmas Offer assigned to Product 2', '2022-03-03 23:39:33', '2022-03-03 23:39:33'),
(6, 1, 'Promotion updated', 'Promotion Christmas Offer updated', '2022-03-03 23:41:15', '2022-03-03 23:41:15'),
(7, 1, 'Promotion updated', 'Promotion Christmas Offer updated', '2022-03-03 23:42:00', '2022-03-03 23:42:00'),
(8, 1, 'New promotion created', 'New promotion New Year Offer created', '2022-03-03 23:42:43', '2022-03-03 23:42:43'),
(9, 1, 'Promotion status changed', 'Promotion New Year Offer status changed to 1', '2022-03-03 23:42:48', '2022-03-03 23:42:48'),
(10, 1, 'Promotion removed', 'Promotion New Year Offer removed', '2022-03-03 23:42:53', '2022-03-03 23:42:53'),
(11, 1, 'Promotion removed', 'Promotion New Year Offer removed', '2022-03-03 23:43:27', '2022-03-03 23:43:27'),
(12, 1, 'Promotion removed', 'Promotion New Year Offer removed', '2022-03-03 23:45:47', '2022-03-03 23:45:47'),
(13, 1, 'New order status created', 'New order status created. status Pending', '2022-03-07 03:17:03', '2022-03-07 03:17:03'),
(14, 1, 'New order status created', 'New order status created. status Confirmed', '2022-03-07 03:18:54', '2022-03-07 03:18:54'),
(15, 1, 'New order status created', 'New order status created. status In Process', '2022-03-07 03:19:23', '2022-03-07 03:19:23'),
(16, 1, 'New order status created', 'New order status created. status Dispatched', '2022-03-07 03:19:37', '2022-03-07 03:19:37'),
(17, 1, 'New order status created', 'New order status created. status Fulfilled', '2022-03-07 03:19:49', '2022-03-07 03:19:49'),
(18, 1, 'New order status created', 'New order status created. status Cancellation Requested', '2022-03-07 03:19:59', '2022-03-07 03:19:59'),
(19, 1, 'New order status created', 'New order status created. status Cancelled', '2022-03-07 03:20:07', '2022-03-07 03:20:07'),
(20, 1, 'Order cancellation requested', 'Order cancellation requested for order ORD202203030422451', '2022-03-07 05:08:25', '2022-03-07 05:08:25'),
(21, 1, 'Single product updated', 'Single product Product 2 updated', '2022-03-07 06:08:05', '2022-03-07 06:08:05'),
(22, 1, 'Product updated with related products', 'Product Product 2 updated with related products', '2022-03-07 06:12:16', '2022-03-07 06:12:16'),
(23, 1, 'New advertisement added', 'New advertisement Advertisement 1 added', '2022-03-07 23:56:40', '2022-03-07 23:56:40'),
(24, 1, 'Product status changed', 'Product Product 2 status changed to 0', '2022-03-08 00:05:18', '2022-03-08 00:05:18'),
(25, 1, 'Product status changed', 'Product Product 2 status changed to 0', '2022-03-08 00:06:04', '2022-03-08 00:06:04'),
(26, 1, 'Product status changed', 'Product Product 2 status changed to 1', '2022-03-08 00:06:08', '2022-03-08 00:06:08'),
(27, 1, 'Product status changed', 'Product Product 2 status changed to 0', '2022-03-08 01:05:01', '2022-03-08 01:05:01'),
(28, 1, 'Product status changed', 'Product Product 2 status changed to 1', '2022-03-08 01:05:07', '2022-03-08 01:05:07'),
(29, 1, 'New single product added', 'New single product Product 3 added', '2022-03-09 02:08:07', '2022-03-09 02:08:07'),
(30, 1, 'Single product updated', 'Single product Product 3 updated', '2022-03-09 02:10:23', '2022-03-09 02:10:23'),
(31, 1, 'Single product updated', 'Single product Product 3 updated', '2022-03-09 02:10:30', '2022-03-09 02:10:30'),
(32, 1, 'Single product updated', 'Single product Product 3 updated', '2022-03-09 02:10:40', '2022-03-09 02:10:40'),
(33, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-09 03:55:02', '2022-03-09 03:55:02'),
(34, 1, 'Add item to cart', 'Added Product 2 to cart', '2022-03-09 03:56:07', '2022-03-09 03:56:07'),
(35, 1, 'Remove item from cart', 'Removed Product 1 from cart', '2022-03-09 03:56:11', '2022-03-09 03:56:11'),
(36, 1, 'Remove item from cart', 'Removed Product 2 from cart', '2022-03-09 03:56:14', '2022-03-09 03:56:14'),
(37, 1, 'Add item to cart', 'Added Product 2 to cart', '2022-03-09 03:56:22', '2022-03-09 03:56:22'),
(38, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-09 03:58:11', '2022-03-09 03:58:11'),
(39, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-09 03:58:11', '2022-03-09 03:58:11'),
(40, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-09 04:10:46', '2022-03-09 04:10:46'),
(41, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-09 04:10:47', '2022-03-09 04:10:47'),
(42, 1, 'Remove item from cart', 'Removed Product 2 from cart', '2022-03-09 05:06:58', '2022-03-09 05:06:58'),
(43, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-09 05:07:01', '2022-03-09 05:07:01'),
(44, 1, 'Single product updated', 'Single product Product 3 updated', '2022-03-09 05:42:23', '2022-03-09 05:42:23'),
(45, 1, 'Single product updated', 'Single product Product 1 updated', '2022-03-09 05:57:47', '2022-03-09 05:57:47'),
(46, 1, 'Single product updated', 'Single product Product 2 updated', '2022-03-09 05:57:59', '2022-03-09 05:57:59'),
(47, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-09 06:13:29', '2022-03-09 06:13:29'),
(48, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-09 06:13:30', '2022-03-09 06:13:30'),
(49, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-11 00:33:26', '2022-03-11 00:33:26'),
(50, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-11 00:33:30', '2022-03-11 00:33:30'),
(51, 1, 'Remove item from cart', 'Removed Product 1 from cart', '2022-03-11 00:33:34', '2022-03-11 00:33:34'),
(52, 1, 'Added item to wishlist', 'Added Product 1 to wishlist', '2022-03-11 00:38:01', '2022-03-11 00:38:01'),
(53, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-11 00:41:58', '2022-03-11 00:41:58'),
(54, 1, 'Removed item from wishlist', 'Removed Product 1 from wishlist', '2022-03-11 00:43:18', '2022-03-11 00:43:18'),
(55, 1, 'Added item to wishlist', 'Added Product 1 to wishlist', '2022-03-11 00:43:33', '2022-03-11 00:43:33'),
(56, 1, 'Add item to cart', 'Added Product 2 to cart', '2022-03-11 00:44:22', '2022-03-11 00:44:22'),
(57, 1, 'Added item to wishlist', 'Added Product 2 to wishlist', '2022-03-11 00:44:28', '2022-03-11 00:44:28'),
(58, 1, 'Removed item from wishlist', 'Removed Product 1 from wishlist', '2022-03-11 00:44:38', '2022-03-11 00:44:38'),
(59, 1, 'Removed item from wishlist', 'Removed Product 2 from wishlist', '2022-03-11 00:44:39', '2022-03-11 00:44:39'),
(60, 1, 'Remove item from cart', 'Removed Product 1 from cart', '2022-03-11 00:45:48', '2022-03-11 00:45:48'),
(61, 1, 'Remove item from cart', 'Removed Product 2 from cart', '2022-03-11 00:45:49', '2022-03-11 00:45:49'),
(62, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-11 00:55:42', '2022-03-11 00:55:42'),
(63, 1, 'Add item to cart', 'Added Product 2 to cart', '2022-03-11 00:55:47', '2022-03-11 00:55:47'),
(64, 1, 'Remove item from cart', 'Removed Product 1 from cart', '2022-03-11 00:56:15', '2022-03-11 00:56:15'),
(65, 1, 'Remove item from cart', 'Removed Product 2 from cart', '2022-03-11 00:56:18', '2022-03-11 00:56:18'),
(66, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-11 00:56:25', '2022-03-11 00:56:25'),
(67, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-11 00:56:32', '2022-03-11 00:56:32'),
(68, 1, 'Remove item from cart', 'Removed Product 1 from cart', '2022-03-11 01:00:46', '2022-03-11 01:00:46'),
(69, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-11 01:00:56', '2022-03-11 01:00:56'),
(70, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-11 01:00:59', '2022-03-11 01:00:59'),
(71, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 01:08:06', '2022-03-11 01:08:06'),
(72, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 01:08:07', '2022-03-11 01:08:07'),
(73, 1, 'Remove item from cart', 'Removed Product 1 from cart', '2022-03-11 01:38:43', '2022-03-11 01:38:43'),
(74, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-11 01:38:54', '2022-03-11 01:38:54'),
(75, 1, 'Remove item from cart', 'Removed Product 1 from cart', '2022-03-11 02:24:34', '2022-03-11 02:24:34'),
(76, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-11 02:24:46', '2022-03-11 02:24:46'),
(77, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-11 02:25:08', '2022-03-11 02:25:08'),
(78, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 02:25:27', '2022-03-11 02:25:27'),
(79, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 02:25:27', '2022-03-11 02:25:27'),
(80, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 02:41:19', '2022-03-11 02:41:19'),
(81, 1, 'New address added', 'billing', '2022-03-11 02:43:09', '2022-03-11 02:43:09'),
(82, 1, 'Active address changed', 'billing', '2022-03-11 02:44:08', '2022-03-11 02:44:08'),
(83, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 02:44:17', '2022-03-11 02:44:17'),
(84, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 02:44:17', '2022-03-11 02:44:17'),
(85, 1, 'Checkout billing address added', 'billing', '2022-03-11 02:46:02', '2022-03-11 02:46:02'),
(86, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 02:48:03', '2022-03-11 02:48:03'),
(87, 1, 'Checkout billing address added', 'billing', '2022-03-11 02:48:09', '2022-03-11 02:48:09'),
(88, 1, 'Checkout shipping address added', 'billing', '2022-03-11 02:48:19', '2022-03-11 02:48:19'),
(89, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 02:48:39', '2022-03-11 02:48:39'),
(90, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 02:48:40', '2022-03-11 02:48:40'),
(91, 1, 'Checkout billing address added', 'billing', '2022-03-11 02:48:53', '2022-03-11 02:48:53'),
(92, 1, 'Checkout billing address added', 'billing', '2022-03-11 02:49:06', '2022-03-11 02:49:06'),
(93, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 02:50:15', '2022-03-11 02:50:15'),
(94, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 02:50:16', '2022-03-11 02:50:16'),
(95, 1, 'Checkout billing address added', 'billing', '2022-03-11 02:50:22', '2022-03-11 02:50:22'),
(96, 1, 'Checkout shipping address added', 'billing', '2022-03-11 02:50:36', '2022-03-11 02:50:36'),
(97, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 02:58:52', '2022-03-11 02:58:52'),
(98, 1, 'Checkout billing address added', 'billing', '2022-03-11 02:59:01', '2022-03-11 02:59:01'),
(99, 1, 'Checkout shipping address added', 'billing', '2022-03-11 02:59:05', '2022-03-11 02:59:05'),
(100, 1, 'Order placed', 'Placed customer order', '2022-03-11 02:59:16', '2022-03-11 02:59:16'),
(101, 1, 'Add item to cart', 'Added Product 2 to cart', '2022-03-11 03:27:44', '2022-03-11 03:27:44'),
(102, 1, 'Remove item from cart', 'Removed Product 2 from cart', '2022-03-11 03:28:13', '2022-03-11 03:28:13'),
(103, 1, 'Add item to cart', 'Added Product 2 to cart', '2022-03-11 03:28:19', '2022-03-11 03:28:19'),
(104, 1, 'Remove item from cart', 'Removed Product 2 from cart', '2022-03-11 03:36:11', '2022-03-11 03:36:11'),
(105, 1, 'Add item to cart', 'Added Product 2 to cart', '2022-03-11 03:36:21', '2022-03-11 03:36:21'),
(106, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 03:37:24', '2022-03-11 03:37:24'),
(107, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 03:37:24', '2022-03-11 03:37:24'),
(108, 1, 'Checkout billing address added', 'billing', '2022-03-11 03:37:34', '2022-03-11 03:37:34'),
(109, 1, 'Checkout shipping address added', 'billing', '2022-03-11 03:37:40', '2022-03-11 03:37:40'),
(110, 1, 'Order placed', 'Placed customer order', '2022-03-11 03:37:57', '2022-03-11 03:37:57'),
(111, 1, 'Product inventory updated', 'Product Product 1 inventory updated with 15 items', '2022-03-11 03:40:39', '2022-03-11 03:40:39'),
(112, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-11 03:53:14', '2022-03-11 03:53:14'),
(113, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 03:53:24', '2022-03-11 03:53:24'),
(114, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 03:53:24', '2022-03-11 03:53:24'),
(115, 1, 'Checkout billing address added', 'billing', '2022-03-11 03:53:29', '2022-03-11 03:53:29'),
(116, 1, 'Checkout shipping address added', 'billing', '2022-03-11 03:53:35', '2022-03-11 03:53:35'),
(117, 1, 'Order placed', 'Placed customer order', '2022-03-11 03:53:47', '2022-03-11 03:53:47'),
(118, 1, 'Billing address updated', 'Customer address updated', '2022-03-11 05:41:51', '2022-03-11 05:41:51'),
(119, 1, 'Billing address updated', 'Customer address updated', '2022-03-11 05:42:06', '2022-03-11 05:42:06'),
(120, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-11 05:53:22', '2022-03-11 05:53:22'),
(121, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 05:53:29', '2022-03-11 05:53:29'),
(122, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 06:02:44', '2022-03-11 06:02:44'),
(123, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 06:03:46', '2022-03-11 06:03:46'),
(124, 1, 'Checkout billing address added', 'billing', '2022-03-11 06:03:57', '2022-03-11 06:03:57'),
(125, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 06:04:27', '2022-03-11 06:04:27'),
(126, 1, 'Checkout billing address added', 'billing', '2022-03-11 06:04:41', '2022-03-11 06:04:41'),
(127, 1, 'Checkout shipping address added', 'billing', '2022-03-11 06:04:55', '2022-03-11 06:04:55'),
(128, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 06:06:05', '2022-03-11 06:06:05'),
(129, 1, 'Checkout billing address added', 'billing', '2022-03-11 06:06:19', '2022-03-11 06:06:19'),
(130, 1, 'Checkout shipping address added', 'billing', '2022-03-11 06:06:24', '2022-03-11 06:06:24'),
(131, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 06:07:18', '2022-03-11 06:07:18'),
(132, 1, 'Checkout billing address added', 'billing', '2022-03-11 06:07:26', '2022-03-11 06:07:26'),
(133, 1, 'Checkout shipping address added', 'billing', '2022-03-11 06:07:30', '2022-03-11 06:07:30'),
(134, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 06:16:50', '2022-03-11 06:16:50'),
(135, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 06:16:50', '2022-03-11 06:16:50'),
(136, 1, 'Checkout billing address added', 'billing', '2022-03-11 06:17:04', '2022-03-11 06:17:04'),
(137, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-11 06:17:35', '2022-03-11 06:17:35'),
(138, 1, 'Checkout billing address added', 'billing', '2022-03-11 06:18:28', '2022-03-11 06:18:28'),
(139, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-13 23:40:56', '2022-03-13 23:40:56'),
(140, 1, 'Single product updated', 'Single product Product 3 updated', '2022-03-14 05:57:13', '2022-03-14 05:57:13'),
(141, 1, 'Single product updated', 'Single product Product 1 updated', '2022-03-14 06:19:05', '2022-03-14 06:19:05'),
(142, 1, 'Single product updated', 'Single product Product 2 updated', '2022-03-14 06:19:18', '2022-03-14 06:19:18'),
(143, 1, 'Single product updated', 'Single product Product 1 updated', '2022-03-14 07:21:13', '2022-03-14 07:21:13'),
(144, 1, 'New order status created', 'New order status created. status Refund Requested', '2022-03-14 07:43:52', '2022-03-14 07:43:52'),
(145, 1, 'New order status created', 'New order status created. status Refunded', '2022-03-14 07:44:02', '2022-03-14 07:44:02'),
(146, 1, 'Add item to cart', 'Added Product 2 to cart', '2022-03-14 11:24:28', '2022-03-14 11:24:28'),
(147, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-15 04:34:55', '2022-03-15 04:34:55'),
(148, 1, 'Remove item from cart', 'Removed Product 1 from cart', '2022-03-15 04:34:57', '2022-03-15 04:34:57'),
(149, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-15 08:58:16', '2022-03-15 08:58:16'),
(150, 1, 'Remove item from cart', 'Removed Product 1 from cart', '2022-03-15 08:58:18', '2022-03-15 08:58:18'),
(151, 1, 'Review status changed', 'Review 5 status changed to 0', '2022-03-15 12:11:50', '2022-03-15 12:11:50'),
(152, 1, 'Review status changed', 'Review 5 status changed to 1', '2022-03-15 12:12:22', '2022-03-15 12:12:22'),
(153, 1, 'Review status changed', 'Review 5 status changed to 0', '2022-03-15 12:12:25', '2022-03-15 12:12:25'),
(154, 1, 'Review status changed', 'Review 5 status changed to 1', '2022-03-15 12:14:46', '2022-03-15 12:14:46'),
(155, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-16 05:22:25', '2022-03-16 05:22:25'),
(156, 1, 'New promotion created', 'New promotion Flash deal created', '2022-03-16 07:37:17', '2022-03-16 07:37:17'),
(157, 1, 'Promotion status changed', 'Promotion Flash deal status changed to 1', '2022-03-16 07:37:53', '2022-03-16 07:37:53'),
(158, 1, 'Promotion assigned to product', 'Promotion Flash deal assigned to Product 2', '2022-03-16 07:38:04', '2022-03-16 07:38:04'),
(159, 1, 'Promotion status changed', 'Promotion Flash deal status changed to 0', '2022-03-16 10:15:53', '2022-03-16 10:15:53'),
(160, 1, 'Promotion status changed', 'Promotion Flash deal status changed to 1', '2022-03-16 10:16:07', '2022-03-16 10:16:07'),
(161, 1, 'Promotion status changed', 'Promotion Flash deal status changed to 1', '2022-03-16 11:32:42', '2022-03-16 11:32:42'),
(162, 1, 'Add item to cart', 'Added Product 2 to cart', '2022-03-16 12:03:22', '2022-03-16 12:03:22'),
(163, 1, 'Remove item from cart', 'Removed Product 2 from cart', '2022-03-16 12:03:30', '2022-03-16 12:03:30'),
(164, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-18 03:54:43', '2022-03-18 03:54:43'),
(165, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 03:54:49', '2022-03-18 03:54:49'),
(166, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 03:54:50', '2022-03-18 03:54:50'),
(167, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 04:33:16', '2022-03-18 04:33:16'),
(168, 1, 'Checkout billing address added', 'billing', '2022-03-18 04:33:40', '2022-03-18 04:33:40'),
(169, 1, 'Checkout billing address added', 'billing', '2022-03-18 04:33:53', '2022-03-18 04:33:53'),
(170, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 04:45:01', '2022-03-18 04:45:01'),
(171, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 04:45:33', '2022-03-18 04:45:33'),
(172, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 04:45:57', '2022-03-18 04:45:57'),
(173, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 04:51:36', '2022-03-18 04:51:36'),
(174, 1, 'Checkout billing address added', 'billing', '2022-03-18 04:52:13', '2022-03-18 04:52:13'),
(175, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 04:56:22', '2022-03-18 04:56:22'),
(176, 1, 'Checkout billing address added', 'billing', '2022-03-18 04:56:33', '2022-03-18 04:56:33'),
(177, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 04:57:04', '2022-03-18 04:57:04'),
(178, 1, 'Checkout billing address added', 'billing', '2022-03-18 04:57:20', '2022-03-18 04:57:20'),
(179, 1, 'Checkout shipping address added', 'billing', '2022-03-18 04:57:35', '2022-03-18 04:57:35'),
(180, 1, 'Order placed', 'Placed customer order', '2022-03-18 05:00:18', '2022-03-18 05:00:18'),
(181, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-18 05:04:11', '2022-03-18 05:04:11'),
(182, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 05:04:16', '2022-03-18 05:04:16'),
(183, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 05:04:16', '2022-03-18 05:04:16'),
(184, 1, 'Checkout billing address added', 'billing', '2022-03-18 05:04:34', '2022-03-18 05:04:34'),
(185, 1, 'Checkout shipping address added', 'billing', '2022-03-18 05:04:37', '2022-03-18 05:04:37'),
(186, 1, 'Order placed', 'Placed customer order', '2022-03-18 05:04:54', '2022-03-18 05:04:54'),
(187, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-18 05:07:41', '2022-03-18 05:07:41'),
(188, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 05:07:46', '2022-03-18 05:07:46'),
(189, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 05:07:47', '2022-03-18 05:07:47'),
(190, 1, 'Checkout billing address added', 'billing', '2022-03-18 05:08:03', '2022-03-18 05:08:03'),
(191, 1, 'Checkout shipping address added', 'billing', '2022-03-18 05:08:06', '2022-03-18 05:08:06'),
(192, 1, 'Order placed', 'Placed customer order', '2022-03-18 05:08:26', '2022-03-18 05:08:26'),
(193, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-18 05:20:20', '2022-03-18 05:20:20'),
(194, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 05:20:26', '2022-03-18 05:20:26'),
(195, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 05:20:27', '2022-03-18 05:20:27'),
(196, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 05:21:55', '2022-03-18 05:21:55'),
(197, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 05:22:51', '2022-03-18 05:22:51'),
(198, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 05:23:18', '2022-03-18 05:23:18'),
(199, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-18 05:23:52', '2022-03-18 05:23:52'),
(200, 1, 'Checkout billing address added', 'billing', '2022-03-18 05:24:14', '2022-03-18 05:24:14'),
(201, 1, 'Checkout shipping address added', 'billing', '2022-03-18 05:24:32', '2022-03-18 05:24:32'),
(202, 1, 'Billing address updated', 'Customer address updated', '2022-03-18 05:48:03', '2022-03-18 05:48:03'),
(203, 1, 'Shipping address updated', 'Customer address updated', '2022-03-18 05:48:44', '2022-03-18 05:48:44'),
(204, 1, 'Shipping address updated', 'Customer address updated', '2022-03-18 05:48:58', '2022-03-18 05:48:58'),
(205, 1, 'Single product updated', 'Single product Product 3 updated', '2022-03-22 05:46:59', '2022-03-22 05:46:59'),
(206, 1, 'Single product updated', 'Single product Product 2 updated', '2022-03-22 07:38:57', '2022-03-22 07:38:57'),
(207, 1, 'Single product updated', 'Single product Product 1 updated', '2022-03-22 07:39:04', '2022-03-22 07:39:04'),
(208, 1, 'Single product updated', 'Single product Product 4 updated', '2022-03-22 07:41:48', '2022-03-22 07:41:48'),
(209, 1, 'Single product updated', 'Single product Product 3 updated', '2022-03-22 08:08:32', '2022-03-22 08:08:32'),
(210, 1, 'Add item to cart', 'Added Product 2 to cart', '2022-03-22 08:27:33', '2022-03-22 08:27:33'),
(211, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-22 08:29:39', '2022-03-22 08:29:39'),
(212, 1, 'Remove item from cart', 'Removed Product 2 from cart', '2022-03-22 10:15:32', '2022-03-22 10:15:32'),
(213, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-22 10:15:46', '2022-03-22 10:15:46'),
(214, 1, 'Add item to cart', 'Added Product 2 to cart', '2022-03-22 10:15:47', '2022-03-22 10:15:47'),
(215, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-22 10:15:49', '2022-03-22 10:15:49'),
(216, 1, 'Single product updated', 'Single product Product 4 updated', '2022-03-23 08:15:47', '2022-03-23 08:15:47'),
(217, 1, 'Single product updated', 'Single product Product 4 updated', '2022-03-23 08:15:58', '2022-03-23 08:15:58'),
(218, 1, 'Single product updated', 'Single product Product 4 updated', '2022-03-23 08:16:08', '2022-03-23 08:16:08'),
(219, 1, 'New single product added', 'New single product Product 5 added', '2022-03-23 08:25:41', '2022-03-23 08:25:41'),
(220, 1, 'Single product updated', 'Single product Product 5 updated', '2022-03-23 10:22:54', '2022-03-23 10:22:54'),
(221, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-23 10:37:28', '2022-03-23 10:37:28'),
(222, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-23 10:37:30', '2022-03-23 10:37:30'),
(223, 1, 'Add item to cart', 'Added Product 2 to cart', '2022-03-23 10:37:37', '2022-03-23 10:37:37'),
(224, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-23 10:37:59', '2022-03-23 10:37:59'),
(225, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-23 10:38:00', '2022-03-23 10:38:00'),
(226, 1, 'Checkout billing address added', 'billing', '2022-03-23 10:38:07', '2022-03-23 10:38:07'),
(227, 1, 'Remove item from cart', 'Removed Product 1 from cart', '2022-03-23 10:38:31', '2022-03-23 10:38:31'),
(228, 1, 'Remove item from cart', 'Removed Product 2 from cart', '2022-03-23 10:38:32', '2022-03-23 10:38:32'),
(229, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-23 11:43:09', '2022-03-23 11:43:09'),
(230, 1, 'Remove item from cart', 'Removed Product 1 from cart', '2022-03-23 11:43:11', '2022-03-23 11:43:11'),
(231, 1, 'Added item to wishlist', 'Added Product 1 to wishlist', '2022-03-23 11:43:41', '2022-03-23 11:43:41'),
(232, 1, 'Removed item from wishlist', 'Removed Product 1 from wishlist', '2022-03-23 11:43:51', '2022-03-23 11:43:51'),
(233, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-23 12:01:33', '2022-03-23 12:01:33'),
(234, 1, 'Add item to cart', 'Added Product 2 to cart', '2022-03-23 12:01:36', '2022-03-23 12:01:36'),
(235, 1, 'Add item to cart', 'Added Product 2 to cart', '2022-03-24 04:43:35', '2022-03-24 04:43:35'),
(236, 1, 'Promotion updated', 'Promotion Christmas Offer updated', '2022-03-24 10:49:29', '2022-03-24 10:49:29'),
(237, 1, 'New promotion created', 'New promotion Stock Clearance created', '2022-03-24 10:50:55', '2022-03-24 10:50:55'),
(238, 1, 'Promotion status changed', 'Promotion Stock Clearance status changed to 1', '2022-03-24 10:51:02', '2022-03-24 10:51:02'),
(239, 1, 'Promotion assigned to product', 'Promotion Stock Clearance assigned to Product 4', '2022-03-24 10:51:15', '2022-03-24 10:51:15'),
(240, 1, 'Promotion assigned to product', 'Promotion Stock Clearance assigned to Product 5', '2022-03-24 10:51:20', '2022-03-24 10:51:20'),
(241, 1, 'Single product updated', 'Single product Product 1 updated', '2022-03-24 11:09:45', '2022-03-24 11:09:45'),
(242, 1, 'Single product updated', 'Single product Product 1 updated', '2022-03-24 11:10:41', '2022-03-24 11:10:41'),
(243, 1, 'Single product updated', 'Single product Product 1 updated', '2022-03-24 11:14:31', '2022-03-24 11:14:31'),
(244, 1, 'Promotion updated', 'Promotion Flash deal updated', '2022-03-24 11:18:22', '2022-03-24 11:18:22'),
(245, 1, 'Promotion status changed', 'Promotion Flash deal status changed to 1', '2022-03-24 11:18:29', '2022-03-24 11:18:29'),
(246, 1, 'Add item to cart', 'Added Product 2 to cart', '2022-03-25 04:44:36', '2022-03-25 04:44:36'),
(247, 1, 'New variant created', 'Variant created with test variant 3', '2022-03-25 09:20:51', '2022-03-25 09:20:51'),
(248, 1, 'Variant status changed', 'Variant test variant status changed to 1', '2022-03-25 09:22:43', '2022-03-25 09:22:43'),
(249, 1, 'New single product added', 'New single product Product 1 added', '2022-03-25 10:48:25', '2022-03-25 10:48:25'),
(250, 1, 'New variant created', 'Variant created with Variant 1', '2022-03-25 10:51:18', '2022-03-25 10:51:18'),
(251, 1, 'New variant created', 'Variant created with Variant 1', '2022-03-25 10:52:04', '2022-03-25 10:52:04'),
(252, 1, 'New variant created', 'Variant created with Variant 2', '2022-03-25 10:54:23', '2022-03-25 10:54:23'),
(253, 1, 'Product inventory updated', 'Product Product 1 inventory updated with 10 items', '2022-03-25 11:04:04', '2022-03-25 11:04:04'),
(254, 1, 'Single product updated', 'Single product Product 1 updated', '2022-03-25 12:01:03', '2022-03-25 12:01:03'),
(255, 1, 'Variant status changed', 'Variant Variant 1 status changed to 1', '2022-03-28 04:45:52', '2022-03-28 04:45:52'),
(256, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-28 05:24:57', '2022-03-28 05:24:57'),
(257, 1, 'Remove item from cart', 'Removed Product 1 Variant 1 from cart', '2022-03-28 05:25:15', '2022-03-28 05:25:15'),
(258, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-28 05:25:31', '2022-03-28 05:25:31'),
(259, 1, 'Variant status changed', 'Variant Variant 2 status changed to 1', '2022-03-28 05:32:11', '2022-03-28 05:32:11'),
(260, 1, 'Product inventory updated', 'Product Product 1 inventory updated with 10 items', '2022-03-28 05:32:25', '2022-03-28 05:32:25'),
(261, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-28 05:32:42', '2022-03-28 05:32:42'),
(262, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-28 05:33:03', '2022-03-28 05:33:03'),
(263, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-28 05:35:06', '2022-03-28 05:35:06'),
(264, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-28 05:36:44', '2022-03-28 05:36:44'),
(265, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-28 05:37:25', '2022-03-28 05:37:25'),
(266, 1, 'Add item to cart', 'Added Product 1 to cart', '2022-03-28 05:38:03', '2022-03-28 05:38:03'),
(267, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-28 06:21:32', '2022-03-28 06:21:32'),
(268, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-28 06:21:33', '2022-03-28 06:21:33'),
(269, 1, 'Checkout billing address added', 'billing', '2022-03-28 06:23:40', '2022-03-28 06:23:40'),
(270, 1, 'Checkout shipping address added', 'billing', '2022-03-28 06:23:44', '2022-03-28 06:23:44'),
(271, 1, 'Order placed', 'Placed customer order', '2022-03-28 06:26:24', '2022-03-28 06:26:24'),
(272, 1, 'Add item to cart', 'Added Product 1 Variant 1 to cart', '2022-03-28 06:33:00', '2022-03-28 06:33:00'),
(273, 1, 'Add item to cart', 'Added Product 1 Variant 1 to cart', '2022-03-28 06:54:55', '2022-03-28 06:54:55'),
(274, 1, 'Remove item from cart', 'Removed Product 1 Variant 1 from cart', '2022-03-28 06:54:59', '2022-03-28 06:54:59'),
(275, 1, 'Add item to cart', 'Added Product 1 Variant 1 to cart', '2022-03-28 06:55:06', '2022-03-28 06:55:06'),
(276, 1, 'Add item to cart', 'Added Product 1 Variant 1 to cart', '2022-03-28 06:55:14', '2022-03-28 06:55:14'),
(277, 1, 'Remove item from cart', 'Removed Product 1 Variant 1 from cart', '2022-03-28 06:57:57', '2022-03-28 06:57:57'),
(278, 1, 'Add item to cart', 'Added Product 1 Variant 1 to cart', '2022-03-28 06:58:26', '2022-03-28 06:58:26'),
(279, 1, 'Add item to cart', 'Added Product 1 Variant 1 to cart', '2022-03-28 07:08:52', '2022-03-28 07:08:52'),
(280, 1, 'Remove item from cart', 'Removed Product 1 Variant 1 from cart', '2022-03-28 07:08:56', '2022-03-28 07:08:56'),
(281, 1, 'Add item to cart', 'Added Product 1 Variant 1 to cart', '2022-03-28 07:12:22', '2022-03-28 07:12:22'),
(282, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-28 07:12:33', '2022-03-28 07:12:33'),
(283, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-03-28 07:12:33', '2022-03-28 07:12:33'),
(284, 1, 'Checkout billing address added', 'billing', '2022-03-28 07:12:55', '2022-03-28 07:12:55'),
(285, 1, 'Checkout shipping address added', 'billing', '2022-03-28 07:13:02', '2022-03-28 07:13:02'),
(286, 1, 'Order placed', 'Placed customer order', '2022-03-28 07:13:14', '2022-03-28 07:13:14'),
(287, 1, 'Added item to wishlist', 'Added Product 1 to wishlist', '2022-03-28 07:43:34', '2022-03-28 07:43:34'),
(288, 1, 'Add item to cart', 'Added Product 1 Variant 1 to cart', '2022-03-28 08:24:30', '2022-03-28 08:24:30'),
(289, 1, 'Add item to cart', 'Added Product 1 Variant 2 to cart', '2022-03-28 08:24:37', '2022-03-28 08:24:37'),
(290, 1, 'Remove item from cart', 'Removed Product 1 Variant 1 from cart', '2022-03-28 08:24:43', '2022-03-28 08:24:43'),
(291, 1, 'Remove item from cart', 'Removed Product 1 Variant 2 from cart', '2022-03-28 08:24:46', '2022-03-28 08:24:46'),
(292, 1, 'Promotion assigned to product', 'Promotion Christmas Offer assigned to Product 1', '2022-03-28 09:38:25', '2022-03-28 09:38:25'),
(293, 1, 'Promotion removedfrom product', 'Promotion Christmas Offer removed from Product 1', '2022-03-28 09:43:17', '2022-03-28 09:43:17'),
(294, 1, 'Single product updated', 'Single product Product 1 updated', '2022-03-29 06:44:11', '2022-03-29 06:44:11'),
(295, 1, 'Single product updated', 'Single product Product 1 updated', '2022-03-30 09:34:56', '2022-03-30 09:34:56'),
(296, 1, 'Single product updated', 'Single product Product 1 updated', '2022-03-30 09:35:03', '2022-03-30 09:35:03'),
(297, 1, 'Add item to cart', 'Added Product 1 Variant 1 to cart', '2022-12-15 07:24:06', '2022-12-15 07:24:06'),
(298, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-12-15 07:24:25', '2022-12-15 07:24:25'),
(299, 1, 'Proceed to checkout', 'Proceeded to cart checkout', '2022-12-15 07:24:26', '2022-12-15 07:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_subscriptions`
--

CREATE TABLE `user_subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_subscriptions`
--

INSERT INTO `user_subscriptions` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'user@gmail.com', '2022-01-05 05:09:05', '2022-01-05 05:09:05'),
(2, 'admin@gmail.com', '2022-01-05 05:10:46', '2022-01-05 05:10:46'),
(3, 'test33@gmail.com', '2022-01-13 01:59:03', '2022-01-13 01:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `variants`
--

CREATE TABLE `variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=>inactive, 1=>active',
  `variant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `packing_cost` decimal(10,2) NOT NULL DEFAULT 0.00,
  `selling_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `weight` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variants`
--

INSERT INTO `variants` (`id`, `product_id`, `status`, `variant_name`, `description`, `unit_price`, `packing_cost`, `selling_price`, `weight`, `created_at`, `updated_at`) VALUES
(1, '1', 1, 'Variant 1', 'Variant 1', '1100.00', '100.00', '1200.00', '0.50', '2022-03-25 10:52:04', '2022-03-28 04:45:52'),
(2, '1', 1, 'Variant 2', 'Variant 2', '1200.00', '100.00', '1300.00', '0.60', '2022-03-25 10:54:23', '2022-03-28 05:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `customer_id`, `product_id`, `created_at`, `updated_at`) VALUES
(5, 1, 1, '2022-03-28 07:43:33', '2022-03-28 07:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `zone_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_cost` decimal(10,2) NOT NULL DEFAULT 0.00,
  `weight_margin` decimal(10,2) NOT NULL DEFAULT 0.00,
  `minimum_cost` decimal(10,2) NOT NULL DEFAULT 0.00,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 => inactive. 1 => active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `zone_name`, `zip_code`, `zone_description`, `shipping_cost`, `weight_margin`, `minimum_cost`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Akkaraipattu', '32400', 'Akkaraipattu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2, 'Ambagahawatta', '90326', 'Ambagahawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(3, 'Ampara', '32000', 'Ampara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(4, 'Bakmitiyawa', '32024', 'Bakmitiyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(5, 'Deegawapiya', '32006', 'Deegawapiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(6, 'Devalahinda', '32038', 'Devalahinda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(7, 'Digamadulla Weeragoda', '32008', 'Digamadulla Weeragoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(8, 'Dorakumbura', '32104', 'Dorakumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(9, 'Gonagolla', '32064', 'Gonagolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(10, 'Hulannuge', '32514', 'Hulannuge', '100.00', '5.00', '150.00', 0, NULL, NULL),
(11, 'Kalmunai', '32300', 'Kalmunai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(12, 'Kannakipuram', '32405', 'Kannakipuram', '100.00', '5.00', '150.00', 0, NULL, NULL),
(13, 'Karativu', '32250', 'Karativu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(14, 'Kekirihena', '32074', 'Kekirihena', '100.00', '5.00', '150.00', 0, NULL, NULL),
(15, 'Koknahara', '32035', 'Koknahara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(16, 'Kolamanthalawa', '32102', 'Kolamanthalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(17, 'Komari', '32418', 'Komari', '100.00', '5.00', '150.00', 0, NULL, NULL),
(18, 'Lahugala', '32512', 'Lahugala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(19, 'Irakkamam', '32450', 'Irakkamam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(20, 'Mahaoya', '32070', 'Mahaoya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(21, 'Marathamune', '32314', 'Marathamune', '100.00', '5.00', '150.00', 0, NULL, NULL),
(22, 'Namaloya', '32037', 'Namaloya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(23, 'Navithanveli', '32308', 'Navithanveli', '100.00', '5.00', '150.00', 0, NULL, NULL),
(24, 'Nintavur', '32340', 'Nintavur', '100.00', '5.00', '150.00', 0, NULL, NULL),
(25, 'Oluvil', '32360', 'Oluvil', '100.00', '5.00', '150.00', 0, NULL, NULL),
(26, 'Padiyatalawa', '32100', 'Padiyatalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(27, 'Pahalalanda', '32034', 'Pahalalanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(28, 'Panama', '32508', 'Panama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(29, 'Pannalagama', '32022', 'Pannalagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(30, 'Paragahakele', '32031', 'Paragahakele', '100.00', '5.00', '150.00', 0, NULL, NULL),
(31, 'Periyaneelavanai', '32316', 'Periyaneelavanai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(32, 'Polwaga Janapadaya', '32032', 'Polwaga Janapadaya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(33, 'Pottuvil', '32500', 'Pottuvil', '100.00', '5.00', '150.00', 0, NULL, NULL),
(34, 'Sainthamaruthu', '32280', 'Sainthamaruthu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(35, 'Samanthurai', '32200', 'Samanthurai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(36, 'Serankada', '32101', 'Serankada', '100.00', '5.00', '150.00', 0, NULL, NULL),
(37, 'Tempitiya', '32072', 'Tempitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(38, 'Thambiluvil', '32415', 'Thambiluvil', '100.00', '5.00', '150.00', 0, NULL, NULL),
(39, 'Tirukovil', '32420', 'Tirukovil', '100.00', '5.00', '150.00', 0, NULL, NULL),
(40, 'Uhana', '32060', 'Uhana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(41, 'Wadinagala', '32039', 'Wadinagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(42, 'Wanagamuwa', '32454', 'Wanagamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(43, 'Angamuwa', '50248', 'Angamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(44, 'Anuradhapura', '50000', 'Anuradhapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(45, 'Awukana', '50169', 'Awukana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(46, 'Bogahawewa', '50566', 'Bogahawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(47, 'Dematawewa', '50356', 'Dematawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(48, 'Dimbulagala', '51031', 'Dimbulagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(49, 'Dutuwewa', '50393', 'Dutuwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(50, 'Elayapattuwa', '50014', 'Elayapattuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(51, 'Ellewewa', '51034', 'Ellewewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(52, 'Eppawala', '50260', 'Eppawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(53, 'Etawatunuwewa', '50584', 'Etawatunuwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(54, 'Etaweeragollewa', '50518', 'Etaweeragollewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(55, 'Galapitagala', '32066', 'Galapitagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(56, 'Galenbindunuwewa', '50390', 'Galenbindunuwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(57, 'Galkadawala', '50006', 'Galkadawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(58, 'Galkiriyagama', '50120', 'Galkiriyagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(59, 'Galkulama', '50064', 'Galkulama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(60, 'Galnewa', '50170', 'Galnewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(61, 'Gambirigaswewa', '50057', 'Gambirigaswewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(62, 'Ganewalpola', '50142', 'Ganewalpola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(63, 'Gemunupura', '50224', 'Gemunupura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(64, 'Getalawa', '50392', 'Getalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(65, 'Gnanikulama', '50036', 'Gnanikulama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(66, 'Gonahaddenawa', '50554', 'Gonahaddenawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(67, 'Habarana', '50150', 'Habarana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(68, 'Halmillawa Dambulla', '50124', 'Halmillawa Dambulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(69, 'Halmillawetiya', '50552', 'Halmillawetiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(70, 'Hidogama', '50044', 'Hidogama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(71, 'Horawpatana', '50350', 'Horawpatana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(72, 'Horiwila', '50222', 'Horiwila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(73, 'Hurigaswewa', '50176', 'Hurigaswewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(74, 'Hurulunikawewa', '50394', 'Hurulunikawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(75, 'Ihala Puliyankulama', '61316', 'Ihala Puliyankulama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(76, 'Kagama', '50282', 'Kagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(77, 'Kahatagasdigiliya', '50320', 'Kahatagasdigiliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(78, 'Kahatagollewa', '50562', 'Kahatagollewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(79, 'Kalakarambewa', '50288', 'Kalakarambewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(80, 'Kalaoya', '50226', 'Kalaoya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(81, 'Kalawedi Ulpotha', '50556', 'Kalawedi Ulpotha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(82, 'Kallanchiya', '50454', 'Kallanchiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(83, 'Kalpitiya', '61360', 'Kalpitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(84, 'Kalukele Badanagala', '51037', 'Kalukele Badanagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(85, 'Kapugallawa', '50370', 'Kapugallawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(86, 'Karagahawewa', '50232', 'Karagahawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(87, 'Kashyapapura', '51032', 'Kashyapapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(88, 'Kebithigollewa', '50500', 'Kebithigollewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(89, 'Kekirawa', '50100', 'Kekirawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(90, 'Kendewa', '50452', 'Kendewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(91, 'Kiralogama', '50259', 'Kiralogama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(92, 'Kirigalwewa', '50511', 'Kirigalwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(93, 'Kirimundalama', '61362', 'Kirimundalama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(94, 'Kitulhitiyawa', '50132', 'Kitulhitiyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(95, 'Kurundankulama', '50062', 'Kurundankulama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(96, 'Labunoruwa', '50088', 'Labunoruwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(97, 'Ihalagama', '50304', 'Ihalagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(98, 'Ipologama', '50280', 'Ipologama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(99, 'Madatugama', '50130', 'Madatugama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(100, 'Maha Elagamuwa', '50126', 'Maha Elagamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(101, 'Mahabulankulama', '50196', 'Mahabulankulama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(102, 'Mahailluppallama', '50270', 'Mahailluppallama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(103, 'Mahakanadarawa', '50306', 'Mahakanadarawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(104, 'Mahapothana', '50327', 'Mahapothana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(105, 'Mahasenpura', '50574', 'Mahasenpura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(106, 'Mahawilachchiya', '50022', 'Mahawilachchiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(107, 'Mailagaswewa', '50384', 'Mailagaswewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(108, 'Malwanagama', '50236', 'Malwanagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(109, 'Maneruwa', '50182', 'Maneruwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(110, 'Maradankadawala', '50080', 'Maradankadawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(111, 'Maradankalla', '50308', 'Maradankalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(112, 'Medawachchiya', '50500', 'Medawachchiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(113, 'Megodawewa', '50334', 'Megodawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(114, 'Mihintale', '50300', 'Mihintale', '100.00', '5.00', '150.00', 0, NULL, NULL),
(115, 'Morakewa', '50349', 'Morakewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(116, 'Mulkiriyawa', '50324', 'Mulkiriyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(117, 'Muriyakadawala', '50344', 'Muriyakadawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(118, 'Colombo 15', '1500', 'Colombo 15', '100.00', '5.00', '150.00', 0, NULL, NULL),
(119, 'Nachchaduwa', '50046', 'Nachchaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(120, 'Namalpura', '50339', 'Namalpura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(121, 'Negampaha', '50180', 'Negampaha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(122, 'Nochchiyagama', '50200', 'Nochchiyagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(123, 'Nuwaragala', '51039', 'Nuwaragala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(124, 'Padavi Maithripura', '50572', 'Padavi Maithripura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(125, 'Padavi Parakramapura', '50582', 'Padavi Parakramapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(126, 'Padavi Sripura', '50587', 'Padavi Sripura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(127, 'Padavi Sritissapura', '50588', 'Padavi Sritissapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(128, 'Padaviya', '50570', 'Padaviya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(129, 'Padikaramaduwa', '50338', 'Padikaramaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(130, 'Pahala Halmillewa', '50206', 'Pahala Halmillewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(131, 'Pahala Maragahawe', '50220', 'Pahala Maragahawe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(132, 'Pahalagama', '50244', 'Pahalagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(133, 'Palugaswewa', '50144', 'Palugaswewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(134, 'Pandukabayapura', '50448', 'Pandukabayapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(135, 'Pandulagama', '50029', 'Pandulagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(136, 'Parakumpura', '50326', 'Parakumpura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(137, 'Parangiyawadiya', '50354', 'Parangiyawadiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(138, 'Parasangahawewa', '50055', 'Parasangahawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(139, 'Pelatiyawa', '51033', 'Pelatiyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(140, 'Pemaduwa', '50020', 'Pemaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(141, 'Perimiyankulama', '50004', 'Perimiyankulama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(142, 'Pihimbiyagolewa', '50512', 'Pihimbiyagolewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(143, 'Pubbogama', '50122', 'Pubbogama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(144, 'Punewa', '50506', 'Punewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(145, 'Rajanganaya', '50246', 'Rajanganaya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(146, 'Rambewa', '50450', 'Rambewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(147, 'Rampathwila', '50386', 'Rampathwila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(148, 'Rathmalgahawewa', '50514', 'Rathmalgahawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(149, 'Saliyapura', '50008', 'Saliyapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(150, 'Seeppukulama', '50380', 'Seeppukulama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(151, 'Senapura', '50284', 'Senapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(152, 'Sivalakulama', '50068', 'Sivalakulama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(153, 'Siyambalewa', '50184', 'Siyambalewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(154, 'Sravasthipura', '50042', 'Sravasthipura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(155, 'Talawa', '50230', 'Talawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(156, 'Tambuttegama', '50240', 'Tambuttegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(157, 'Tammennawa', '50104', 'Tammennawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(158, 'Tantirimale', '50016', 'Tantirimale', '100.00', '5.00', '150.00', 0, NULL, NULL),
(159, 'Telhiriyawa', '50242', 'Telhiriyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(160, 'Tirappane', '50072', 'Tirappane', '100.00', '5.00', '150.00', 0, NULL, NULL),
(161, 'Tittagonewa', '50558', 'Tittagonewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(162, 'Udunuwara Colony', '50207', 'Udunuwara Colony', '100.00', '5.00', '150.00', 0, NULL, NULL),
(163, 'Upuldeniya', '50382', 'Upuldeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(164, 'Uttimaduwa', '50067', 'Uttimaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(165, 'Vellamanal', '31053', 'Vellamanal', '100.00', '5.00', '150.00', 0, NULL, NULL),
(166, 'Viharapalugama', '50012', 'Viharapalugama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(167, 'Wahalkada', '50564', 'Wahalkada', '100.00', '5.00', '150.00', 0, NULL, NULL),
(168, 'Wahamalgollewa', '50492', 'Wahamalgollewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(169, 'Walagambahuwa', '50086', 'Walagambahuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(170, 'Walahaviddawewa', '50516', 'Walahaviddawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(171, 'Welimuwapotana', '50358', 'Welimuwapotana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(172, 'Welioya Project', '50586', 'Welioya Project', '100.00', '5.00', '150.00', 0, NULL, NULL),
(173, 'Akkarasiyaya', '90166', 'Akkarasiyaya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(174, 'Aluketiyawa', '90736', 'Aluketiyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(175, 'Aluttaramma', '90722', 'Aluttaramma', '100.00', '5.00', '150.00', 0, NULL, NULL),
(176, 'Ambadandegama', '90108', 'Ambadandegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(177, 'Ambagasdowa', '90300', 'Ambagasdowa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(178, 'Arawa', '90017', 'Arawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(179, 'Arawakumbura', '90532', 'Arawakumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(180, 'Arawatta', '90712', 'Arawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(181, 'Atakiriya', '90542', 'Atakiriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(182, 'Badulla', '90000', 'Badulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(183, 'Baduluoya', '90019', 'Baduluoya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(184, 'Ballaketuwa', '90092', 'Ballaketuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(185, 'Bambarapana', '90322', 'Bambarapana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(186, 'Bandarawela', '90100', 'Bandarawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(187, 'Beramada', '90066', 'Beramada', '100.00', '5.00', '150.00', 0, NULL, NULL),
(188, 'Bibilegama', '90502', 'Bibilegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(189, 'Boragas', '90362', 'Boragas', '100.00', '5.00', '150.00', 0, NULL, NULL),
(190, 'Boralanda', '90170', 'Boralanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(191, 'Bowela', '90302', 'Bowela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(192, 'Central Camp', '32050', 'Central Camp', '100.00', '5.00', '150.00', 0, NULL, NULL),
(193, 'Damanewela', '32126', 'Damanewela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(194, 'Dambana', '90714', 'Dambana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(195, 'Dehiattakandiya', '32150', 'Dehiattakandiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(196, 'Demodara', '90080', 'Demodara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(197, 'Diganatenna', '90132', 'Diganatenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(198, 'Dikkapitiya', '90214', 'Dikkapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(199, 'Dimbulana', '90324', 'Dimbulana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(200, 'Divulapelessa', '90726', 'Divulapelessa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(201, 'Diyatalawa', '90150', 'Diyatalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(202, 'Dulgolla', '90104', 'Dulgolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(203, 'Ekiriyankumbura', '91502', 'Ekiriyankumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(204, 'Ella', '90090', 'Ella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(205, 'Ettampitiya', '90140', 'Ettampitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(206, 'Galauda', '90065', 'Galauda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(207, 'Galporuyaya', '90752', 'Galporuyaya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(208, 'Gawarawela', '90082', 'Gawarawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(209, 'Girandurukotte', '90750', 'Girandurukotte', '100.00', '5.00', '150.00', 0, NULL, NULL),
(210, 'Godunna', '90067', 'Godunna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(211, 'Gurutalawa', '90208', 'Gurutalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(212, 'Haldummulla', '90180', 'Haldummulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(213, 'Hali Ela', '90060', 'Hali Ela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(214, 'Hangunnawa', '90224', 'Hangunnawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(215, 'Haputale', '90160', 'Haputale', '100.00', '5.00', '150.00', 0, NULL, NULL),
(216, 'Hebarawa', '90724', 'Hebarawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(217, 'Heeloya', '90112', 'Heeloya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(218, 'Helahalpe', '90122', 'Helahalpe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(219, 'Helapupula', '90094', 'Helapupula', '100.00', '5.00', '150.00', 0, NULL, NULL),
(220, 'Hopton', '90524', 'Hopton', '100.00', '5.00', '150.00', 0, NULL, NULL),
(221, 'Idalgashinna', '96167', 'Idalgashinna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(222, 'Kahataruppa', '90052', 'Kahataruppa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(223, 'Kalugahakandura', '90546', 'Kalugahakandura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(224, 'Kalupahana', '90186', 'Kalupahana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(225, 'Kebillawela', '90102', 'Kebillawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(226, 'Kendagolla', '90048', 'Kendagolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(227, 'Keselpotha', '90738', 'Keselpotha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(228, 'Ketawatta', '90016', 'Ketawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(229, 'Kiriwanagama', '90184', 'Kiriwanagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(230, 'Koslanda', '90190', 'Koslanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(231, 'Kuruwitenna', '90728', 'Kuruwitenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(232, 'Kuttiyagolla', '90046', 'Kuttiyagolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(233, 'Landewela', '90068', 'Landewela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(234, 'Liyangahawela', '90106', 'Liyangahawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(235, 'Lunugala', '90530', 'Lunugala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(236, 'Lunuwatta', '90310', 'Lunuwatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(237, 'Madulsima', '90535', 'Madulsima', '100.00', '5.00', '150.00', 0, NULL, NULL),
(238, 'Mahiyanganaya', '90700', 'Mahiyanganaya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(239, 'Makulella', '90114', 'Makulella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(240, 'Malgoda', '90754', 'Malgoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(241, 'Mapakadawewa', '90730', 'Mapakadawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(242, 'Maspanna', '90328', 'Maspanna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(243, 'Maussagolla', '90582', 'Maussagolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(244, 'Mawanagama', '32158', 'Mawanagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(245, 'Medawela Udukinda', '90218', 'Medawela Udukinda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(246, 'Meegahakiula', '90015', 'Meegahakiula', '100.00', '5.00', '150.00', 0, NULL, NULL),
(247, 'Metigahatenna', '90540', 'Metigahatenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(248, 'Mirahawatta', '90134', 'Mirahawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(249, 'Miriyabedda', '90504', 'Miriyabedda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(250, 'Nawamedagama', '32120', 'Nawamedagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(251, 'Nelumgama', '90042', 'Nelumgama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(252, 'Nikapotha', '90165', 'Nikapotha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(253, 'Nugatalawa', '90216', 'Nugatalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(254, 'Ohiya', '90168', 'Ohiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(255, 'Pahalarathkinda', '90756', 'Pahalarathkinda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(256, 'Pallekiruwa', '90534', 'Pallekiruwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(257, 'Passara', '90500', 'Passara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(258, 'Pattiyagedara', '90138', 'Pattiyagedara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(259, 'Pelagahatenna', '90522', 'Pelagahatenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(260, 'Perawella', '90222', 'Perawella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(261, 'Pitamaruwa', '90544', 'Pitamaruwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(262, 'Pitapola', '90171', 'Pitapola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(263, 'Puhulpola', '90212', 'Puhulpola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(264, 'Rajagalatenna', '32068', 'Rajagalatenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(265, 'Rathkarawwa', '90164', 'Rathkarawwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(266, 'Ridimaliyadda', '90704', 'Ridimaliyadda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(267, 'Silmiyapura', '90364', 'Silmiyapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(268, 'Sirimalgoda', '90044', 'Sirimalgoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(269, 'Siripura', '32155', 'Siripura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(270, 'Sorabora Colony', '90718', 'Sorabora Colony', '100.00', '5.00', '150.00', 0, NULL, NULL),
(271, 'Soragune', '90183', 'Soragune', '100.00', '5.00', '150.00', 0, NULL, NULL),
(272, 'Soranathota', '90008', 'Soranathota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(273, 'Taldena', '90014', 'Taldena', '100.00', '5.00', '150.00', 0, NULL, NULL),
(274, 'Timbirigaspitiya', '90012', 'Timbirigaspitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(275, 'Uduhawara', '90226', 'Uduhawara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(276, 'Uraniya', '90702', 'Uraniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(277, 'Uva Karandagolla', '90091', 'Uva Karandagolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(278, 'Uva Mawelagama', '90192', 'Uva Mawelagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(279, 'Uva Tenna', '90188', 'Uva Tenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(280, 'Uva Tissapura', '90734', 'Uva Tissapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(281, 'Welimada', '90200', 'Welimada', '100.00', '5.00', '150.00', 0, NULL, NULL),
(282, 'Weranketagoda', '32062', 'Weranketagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(283, 'Wewatta', '90716', 'Wewatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(284, 'Wineethagama', '90034', 'Wineethagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(285, 'Yalagamuwa', '90329', 'Yalagamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(286, 'Yalwela', '90706', 'Yalwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(287, 'Addalaichenai', '32350', 'Addalaichenai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(288, 'Ampilanthurai', '30162', 'Ampilanthurai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(289, 'Araipattai', '30150', 'Araipattai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(290, 'Ayithiyamalai', '30362', 'Ayithiyamalai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(291, 'Bakiella', '30206', 'Bakiella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(292, 'Batticaloa', '30000', 'Batticaloa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(293, 'Cheddipalayam', '30194', 'Cheddipalayam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(294, 'Chenkaladi', '30350', 'Chenkaladi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(295, 'Eravur', '30300', 'Eravur', '100.00', '5.00', '150.00', 0, NULL, NULL),
(296, 'Kaluwanchikudi', '30200', 'Kaluwanchikudi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(297, 'Kaluwankemy', '30372', 'Kaluwankemy', '100.00', '5.00', '150.00', 0, NULL, NULL),
(298, 'Kannankudah', '30016', 'Kannankudah', '100.00', '5.00', '150.00', 0, NULL, NULL),
(299, 'Karadiyanaru', '30354', 'Karadiyanaru', '100.00', '5.00', '150.00', 0, NULL, NULL),
(300, 'Kathiraveli', '30456', 'Kathiraveli', '100.00', '5.00', '150.00', 0, NULL, NULL),
(301, 'Kattankudi', '30100', 'Kattankudi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(302, 'Kiran', '30394', 'Kiran', '100.00', '5.00', '150.00', 0, NULL, NULL),
(303, 'Kirankulam', '30159', 'Kirankulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(304, 'Koddaikallar', '30249', 'Koddaikallar', '100.00', '5.00', '150.00', 0, NULL, NULL),
(305, 'Kokkaddicholai', '30160', 'Kokkaddicholai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(306, 'Kurukkalmadam', '30192', 'Kurukkalmadam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(307, 'Mandur', '30220', 'Mandur', '100.00', '5.00', '150.00', 0, NULL, NULL),
(308, 'Miravodai', '30426', 'Miravodai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(309, 'Murakottanchanai', '30392', 'Murakottanchanai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(310, 'Navagirinagar', '30238', 'Navagirinagar', '100.00', '5.00', '150.00', 0, NULL, NULL),
(311, 'Navatkadu', '30018', 'Navatkadu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(312, 'Oddamavadi', '30420', 'Oddamavadi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(313, 'Palamunai', '32354', 'Palamunai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(314, 'Pankudavely', '30352', 'Pankudavely', '100.00', '5.00', '150.00', 0, NULL, NULL),
(315, 'Periyaporativu', '30230', 'Periyaporativu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(316, 'Periyapullumalai', '30358', 'Periyapullumalai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(317, 'Pillaiyaradi', '30022', 'Pillaiyaradi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(318, 'Punanai', '30428', 'Punanai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(319, 'Thannamunai', '30024', 'Thannamunai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(320, 'Thettativu', '30196', 'Thettativu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(321, 'Thikkodai', '30236', 'Thikkodai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(322, 'Thirupalugamam', '30234', 'Thirupalugamam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(323, 'Unnichchai', '30364', 'Unnichchai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(324, 'Vakaneri', '30424', 'Vakaneri', '100.00', '5.00', '150.00', 0, NULL, NULL),
(325, 'Vakarai', '30450', 'Vakarai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(326, 'Valaichenai', '30400', 'Valaichenai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(327, 'Vantharumoolai', '30376', 'Vantharumoolai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(328, 'Vellavely', '30204', 'Vellavely', '100.00', '5.00', '150.00', 0, NULL, NULL),
(329, 'Akarawita', '10732', 'Akarawita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(330, 'Ambalangoda', '80300', 'Ambalangoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(331, 'Athurugiriya', '10150', 'Athurugiriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(332, 'Avissawella', '10700', 'Avissawella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(333, 'Batawala', '10513', 'Batawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(334, 'Battaramulla', '10120', 'Battaramulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(335, 'Biyagama', '11650', 'Biyagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(336, 'Bope', '10522', 'Bope', '100.00', '5.00', '150.00', 0, NULL, NULL),
(337, 'Boralesgamuwa', '10290', 'Boralesgamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(338, 'Colombo 8', '800', 'Colombo 8', '100.00', '5.00', '150.00', 0, NULL, NULL),
(339, 'Dedigamuwa', '10656', 'Dedigamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(340, 'Dehiwala', '10350', 'Dehiwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(341, 'Deltara', '10302', 'Deltara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(342, 'Habarakada', '10204', 'Habarakada', '100.00', '5.00', '150.00', 0, NULL, NULL),
(343, 'Hanwella', '10650', 'Hanwella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(344, 'Hiripitya', '10232', 'Hiripitya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(345, 'Hokandara', '10118', 'Hokandara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(346, 'Homagama', '10200', 'Homagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(347, 'Horagala', '10502', 'Horagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(348, 'Kaduwela', '10640', 'Kaduwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(349, 'Kaluaggala', '11224', 'Kaluaggala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(350, 'Kapugoda', '10662', 'Kapugoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(351, 'Kehelwatta', '12550', 'Kehelwatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(352, 'Kiriwattuduwa', '10208', 'Kiriwattuduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(353, 'Kolonnawa', '10600', 'Kolonnawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(354, 'Kosgama', '10730', 'Kosgama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(355, 'Madapatha', '10306', 'Madapatha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(356, 'Maharagama', '10280', 'Maharagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(357, 'Malabe', '10115', 'Malabe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(358, 'Moratuwa', '10400', 'Moratuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(359, 'Mount Lavinia', '10370', 'Mount Lavinia', '100.00', '5.00', '150.00', 0, NULL, NULL),
(360, 'Mullegama', '10202', 'Mullegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(361, 'Napawela', '10704', 'Napawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(362, 'Nugegoda', '10250', 'Nugegoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(363, 'Padukka', '10500', 'Padukka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(364, 'Pannipitiya', '10230', 'Pannipitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(365, 'Piliyandala', '10300', 'Piliyandala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(366, 'Pitipana Homagama', '10206', 'Pitipana Homagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(367, 'Polgasowita', '10320', 'Polgasowita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(368, 'Pugoda', '10660', 'Pugoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(369, 'Ranala', '10654', 'Ranala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(370, 'Siddamulla', '10304', 'Siddamulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(371, 'Siyambalagoda', '81462', 'Siyambalagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(372, 'Sri Jayawardenepura', '10100', 'Sri Jayawardenepura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(373, 'Talawatugoda', '10116', 'Talawatugoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(374, 'Tummodara', '10682', 'Tummodara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(375, 'Waga', '10680', 'Waga', '100.00', '5.00', '150.00', 0, NULL, NULL),
(376, 'Colombo 6', '600', 'Colombo 6', '100.00', '5.00', '150.00', 0, NULL, NULL),
(377, 'Agaliya', '80212', 'Agaliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(378, 'Ahangama', '80650', 'Ahangama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(379, 'Ahungalla', '80562', 'Ahungalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(380, 'Akmeemana', '80090', 'Akmeemana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(381, 'Alawatugoda', '20140', 'Alawatugoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(382, 'Aluthwala', '80332', 'Aluthwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(383, 'Ampegama', '80204', 'Ampegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(384, 'Amugoda', '80422', 'Amugoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(385, 'Anangoda', '80044', 'Anangoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(386, 'Angulugaha', '80122', 'Angulugaha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(387, 'Ankokkawala', '80048', 'Ankokkawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(388, 'Aselapura', '51072', 'Aselapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(389, 'Baddegama', '80200', 'Baddegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(390, 'Balapitiya', '80550', 'Balapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(391, 'Banagala', '80143', 'Banagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(392, 'Batapola', '80320', 'Batapola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(393, 'Bentota', '80500', 'Bentota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(394, 'Boossa', '80270', 'Boossa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(395, 'Dellawa', '81477', 'Dellawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(396, 'Dikkumbura', '80654', 'Dikkumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(397, 'Dodanduwa', '80250', 'Dodanduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(398, 'Ella Tanabaddegama', '80402', 'Ella Tanabaddegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(399, 'Elpitiya', '80400', 'Elpitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(400, 'Galle', '80000', 'Galle', '100.00', '5.00', '150.00', 0, NULL, NULL),
(401, 'Ginimellagaha', '80220', 'Ginimellagaha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(402, 'Gintota', '80280', 'Gintota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(403, 'Godahena', '80302', 'Godahena', '100.00', '5.00', '150.00', 0, NULL, NULL),
(404, 'Gonamulla Junction', '80054', 'Gonamulla Junction', '100.00', '5.00', '150.00', 0, NULL, NULL),
(405, 'Gonapinuwala', '80230', 'Gonapinuwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(406, 'Habaraduwa', '80630', 'Habaraduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(407, 'Haburugala', '80506', 'Haburugala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(408, 'Hikkaduwa', '80240', 'Hikkaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(409, 'Hiniduma', '80080', 'Hiniduma', '100.00', '5.00', '150.00', 0, NULL, NULL),
(410, 'Hiyare', '80056', 'Hiyare', '100.00', '5.00', '150.00', 0, NULL, NULL),
(411, 'Kahaduwa', '80460', 'Kahaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(412, 'Kahawa', '80312', 'Kahawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(413, 'Karagoda', '80151', 'Karagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(414, 'Karandeniya', '80360', 'Karandeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(415, 'Kosgoda', '80570', 'Kosgoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(416, 'Kottawagama', '80062', 'Kottawagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(417, 'Kottegoda', '81180', 'Kottegoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(418, 'Kuleegoda', '80328', 'Kuleegoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(419, 'Magedara', '80152', 'Magedara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(420, 'Mahawela Sinhapura', '51076', 'Mahawela Sinhapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(421, 'Mapalagama', '80112', 'Mapalagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(422, 'Mapalagama Central', '80116', 'Mapalagama Central', '100.00', '5.00', '150.00', 0, NULL, NULL),
(423, 'Mattaka', '80424', 'Mattaka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(424, 'Meda-Keembiya', '80092', 'Meda-Keembiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(425, 'Meetiyagoda', '80330', 'Meetiyagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(426, 'Nagoda', '80110', 'Nagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(427, 'Nakiyadeniya', '80064', 'Nakiyadeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(428, 'Nawandagala', '80416', 'Nawandagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(429, 'Neluwa', '80082', 'Neluwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(430, 'Nindana', '80318', 'Nindana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(431, 'Pahala Millawa', '81472', 'Pahala Millawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(432, 'Panangala', '80075', 'Panangala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(433, 'Pannimulla Panagoda', '80086', 'Pannimulla Panagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(434, 'Parana Thanayamgoda', '80114', 'Parana Thanayamgoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(435, 'Patana', '22012', 'Patana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(436, 'Pitigala', '80420', 'Pitigala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(437, 'Poddala', '80170', 'Poddala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(438, 'Polgampola', '12136', 'Polgampola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(439, 'Porawagama', '80408', 'Porawagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(440, 'Rantotuwila', '80354', 'Rantotuwila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(441, 'Talagampola', '80058', 'Talagampola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(442, 'Talgaspe', '80406', 'Talgaspe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(443, 'Talpe', '80615', 'Talpe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(444, 'Tawalama', '80148', 'Tawalama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(445, 'Tiranagama', '80244', 'Tiranagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(446, 'Udalamatta', '80108', 'Udalamatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(447, 'Udugama', '80070', 'Udugama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(448, 'Uluvitike', '80168', 'Uluvitike', '100.00', '5.00', '150.00', 0, NULL, NULL),
(449, 'Unawatuna', '80600', 'Unawatuna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(450, 'Unawitiya', '80214', 'Unawitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(451, 'Uragaha', '80352', 'Uragaha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(452, 'Uragasmanhandiya', '80350', 'Uragasmanhandiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(453, 'Wakwella', '80042', 'Wakwella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(454, 'Walahanduwa', '80046', 'Walahanduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(455, 'Wanchawela', '80120', 'Wanchawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(456, 'Wanduramba', '80100', 'Wanduramba', '100.00', '5.00', '150.00', 0, NULL, NULL),
(457, 'Warukandeniya', '80084', 'Warukandeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(458, 'Watugedara', '80340', 'Watugedara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(459, 'Weihena', '80216', 'Weihena', '100.00', '5.00', '150.00', 0, NULL, NULL),
(460, 'Welikanda', '51070', 'Welikanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(461, 'Wilanagama', '20142', 'Wilanagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(462, 'Yakkalamulla', '80150', 'Yakkalamulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(463, 'Yatalamatta', '80107', 'Yatalamatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(464, 'Akaragama', '11536', 'Akaragama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(465, 'Ambagaspitiya', '11052', 'Ambagaspitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(466, 'Ambepussa', '11212', 'Ambepussa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(467, 'Andiambalama', '11558', 'Andiambalama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(468, 'Attanagalla', '11120', 'Attanagalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(469, 'Badalgama', '11538', 'Badalgama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(470, 'Banduragoda', '11244', 'Banduragoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(471, 'Batuwatta', '11011', 'Batuwatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(472, 'Bemmulla', '11040', 'Bemmulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(473, 'Biyagama IPZ', '11672', 'Biyagama IPZ', '100.00', '5.00', '150.00', 0, NULL, NULL),
(474, 'Bokalagama', '11216', 'Bokalagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(475, 'Bollete (WP)', '11024', 'Bollete (WP)', '100.00', '5.00', '150.00', 0, NULL, NULL),
(476, 'Bopagama', '11134', 'Bopagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(477, 'Buthpitiya', '11720', 'Buthpitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(478, 'Dagonna', '11524', 'Dagonna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(479, 'Danowita', '11896', 'Danowita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(480, 'Debahera', '11889', 'Debahera', '100.00', '5.00', '150.00', 0, NULL, NULL),
(481, 'Dekatana', '11690', 'Dekatana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(482, 'Delgoda', '11700', 'Delgoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(483, 'Delwagura', '11228', 'Delwagura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(484, 'Demalagama', '11692', 'Demalagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(485, 'Demanhandiya', '11270', 'Demanhandiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(486, 'Dewalapola', '11102', 'Dewalapola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(487, 'Divulapitiya', '11250', 'Divulapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(488, 'Divuldeniya', '11208', 'Divuldeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(489, 'Dompe', '11680', 'Dompe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(490, 'Dunagaha', '11264', 'Dunagaha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(491, 'Ekala', '11380', 'Ekala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(492, 'Ellakkala', '11116', 'Ellakkala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(493, 'Essella', '11108', 'Essella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(494, 'Galedanda', '90206', 'Galedanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(495, 'Gampaha', '11000', 'Gampaha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(496, 'Ganemulla', '11020', 'Ganemulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(497, 'Giriulla', '60140', 'Giriulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(498, 'Gonawala', '11630', 'Gonawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(499, 'Halpe', '70145', 'Halpe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(500, 'Hapugastenna', '70164', 'Hapugastenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(501, 'Heiyanthuduwa', '11618', 'Heiyanthuduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(502, 'Hinatiyana Madawala', '11568', 'Hinatiyana Madawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(503, 'Hiswella', '11734', 'Hiswella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(504, 'Horampella', '11564', 'Horampella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(505, 'Hunumulla', '11262', 'Hunumulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(506, 'Hunupola', '60582', 'Hunupola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(507, 'Ihala Madampella', '11265', 'Ihala Madampella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(508, 'Imbulgoda', '11856', 'Imbulgoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(509, 'Ja-Ela', '11350', 'Ja-Ela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(510, 'Kadawatha', '11850', 'Kadawatha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(511, 'Kahatowita', '11144', 'Kahatowita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(512, 'Kalagedihena', '11875', 'Kalagedihena', '100.00', '5.00', '150.00', 0, NULL, NULL),
(513, 'Kaleliya', '11160', 'Kaleliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(514, 'Kandana', '11320', 'Kandana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(515, 'Katana', '11534', 'Katana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(516, 'Katudeniya', '21016', 'Katudeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(517, 'Katunayake', '11450', 'Katunayake', '100.00', '5.00', '150.00', 0, NULL, NULL),
(518, 'Katunayake Air Force Camp', '11440', 'Katunayake Air Force Camp', '100.00', '5.00', '150.00', 0, NULL, NULL),
(519, 'Katunayake(FTZ)', '11420', 'Katunayake(FTZ)', '100.00', '5.00', '150.00', 0, NULL, NULL),
(520, 'Katuwellegama', '11526', 'Katuwellegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(521, 'Kelaniya', '11600', 'Kelaniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(522, 'Kimbulapitiya', '11522', 'Kimbulapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(523, 'Kirindiwela', '11730', 'Kirindiwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(524, 'Kitalawalana', '11206', 'Kitalawalana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(525, 'Kochchikade', '11540', 'Kochchikade', '100.00', '5.00', '150.00', 0, NULL, NULL),
(526, 'Kotadeniyawa', '11232', 'Kotadeniyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(527, 'Kotugoda', '11390', 'Kotugoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(528, 'Kumbaloluwa', '11105', 'Kumbaloluwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(529, 'Loluwagoda', '11204', 'Loluwagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(530, 'Mabodale', '11114', 'Mabodale', '100.00', '5.00', '150.00', 0, NULL, NULL),
(531, 'Madelgamuwa', '11033', 'Madelgamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(532, 'Makewita', '11358', 'Makewita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(533, 'Makola', '11640', 'Makola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(534, 'Malwana', '11670', 'Malwana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(535, 'Mandawala', '11061', 'Mandawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(536, 'Marandagahamula', '11260', 'Marandagahamula', '100.00', '5.00', '150.00', 0, NULL, NULL),
(537, 'Mellawagedara', '11234', 'Mellawagedara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(538, 'Minuwangoda', '11550', 'Minuwangoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(539, 'Mirigama', '11200', 'Mirigama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(540, 'Miriswatta', '80508', 'Miriswatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(541, 'Mithirigala', '11742', 'Mithirigala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(542, 'Muddaragama', '11112', 'Muddaragama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(543, 'Mudungoda', '11056', 'Mudungoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(544, 'Mulleriyawa New Town', '10620', 'Mulleriyawa New Town', '100.00', '5.00', '150.00', 0, NULL, NULL),
(545, 'Naranwala', '11063', 'Naranwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(546, 'Nawana', '11222', 'Nawana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(547, 'Nedungamuwa', '11066', 'Nedungamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(548, 'Negombo', '11500', 'Negombo', '100.00', '5.00', '150.00', 0, NULL, NULL),
(549, 'Nikadalupotha', '60580', 'Nikadalupotha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(550, 'Nikahetikanda', '11128', 'Nikahetikanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(551, 'Nittambuwa', '11880', 'Nittambuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(552, 'Niwandama', '11354', 'Niwandama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(553, 'Opatha', '80142', 'Opatha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(554, 'Pamunugama', '11370', 'Pamunugama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(555, 'Pamunuwatta', '11214', 'Pamunuwatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(556, 'Panawala', '70612', 'Panawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(557, 'Pasyala', '11890', 'Pasyala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(558, 'Peliyagoda', '11830', 'Peliyagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(559, 'Pepiliyawala', '11741', 'Pepiliyawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(560, 'Pethiyagoda', '11043', 'Pethiyagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(561, 'Polpithimukulana', '11324', 'Polpithimukulana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(562, 'Puwakpitiya', '10712', 'Puwakpitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(563, 'Radawadunna', '11892', 'Radawadunna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(564, 'Radawana', '11725', 'Radawana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(565, 'Raddolugama', '11400', 'Raddolugama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(566, 'Ragama', '11010', 'Ragama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(567, 'Ruggahawila', '11142', 'Ruggahawila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(568, 'Seeduwa', '11410', 'Seeduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(569, 'Siyambalape', '11607', 'Siyambalape', '100.00', '5.00', '150.00', 0, NULL, NULL),
(570, 'Talahena', '11504', 'Talahena', '100.00', '5.00', '150.00', 0, NULL, NULL),
(571, 'Thambagalla', '60584', 'Thambagalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(572, 'Thimbirigaskatuwa', '11532', 'Thimbirigaskatuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(573, 'Tittapattara', '10664', 'Tittapattara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(574, 'Udathuthiripitiya', '11054', 'Udathuthiripitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(575, 'Udugampola', '11030', 'Udugampola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(576, 'Uggalboda', '11034', 'Uggalboda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(577, 'Urapola', '11126', 'Urapola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(578, 'Uswetakeiyawa', '11328', 'Uswetakeiyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(579, 'Veyangoda', '11100', 'Veyangoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(580, 'Walgammulla', '11146', 'Walgammulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(581, 'Walpita', '11226', 'Walpita', '100.00', '5.00', '150.00', 0, NULL, NULL);
INSERT INTO `zones` (`id`, `zone_name`, `zip_code`, `zone_description`, `shipping_cost`, `weight_margin`, `minimum_cost`, `status`, `created_at`, `updated_at`) VALUES
(582, 'Walpola (WP)', '11012', 'Walpola (WP)', '100.00', '5.00', '150.00', 0, NULL, NULL),
(583, 'Wathurugama', '11724', 'Wathurugama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(584, 'Watinapaha', '11104', 'Watinapaha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(585, 'Wattala', '11104', 'Wattala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(586, 'Weboda', '11858', 'Weboda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(587, 'Wegowwa', '11562', 'Wegowwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(588, 'Weweldeniya', '11894', 'Weweldeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(589, 'Yakkala', '11870', 'Yakkala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(590, 'Yatiyana', '11566', 'Yatiyana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(591, 'Ambalantota', '82100', 'Ambalantota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(592, 'Angunakolapelessa', '82220', 'Angunakolapelessa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(593, 'Angunakolawewa', '91302', 'Angunakolawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(594, 'Bandagiriya Colony', '82005', 'Bandagiriya Colony', '100.00', '5.00', '150.00', 0, NULL, NULL),
(595, 'Barawakumbuka', '82110', 'Barawakumbuka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(596, 'Beliatta', '82400', 'Beliatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(597, 'Beragama', '82102', 'Beragama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(598, 'Beralihela', '82618', 'Beralihela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(599, 'Bundala', '82002', 'Bundala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(600, 'Ellagala', '82619', 'Ellagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(601, 'Gangulandeniya', '82586', 'Gangulandeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(602, 'Getamanna', '82420', 'Getamanna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(603, 'Goda Koggalla', '82401', 'Goda Koggalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(604, 'Gonagamuwa Uduwila', '82602', 'Gonagamuwa Uduwila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(605, 'Gonnoruwa', '82006', 'Gonnoruwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(606, 'Hakuruwela', '82248', 'Hakuruwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(607, 'Hambantota', '82000', 'Hambantota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(608, 'Handugala', '81326', 'Handugala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(609, 'Hungama', '82120', 'Hungama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(610, 'Ihala Beligalla', '82412', 'Ihala Beligalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(611, 'Iththa Demaliya', '82462', 'Iththa Demaliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(612, 'Julampitiya', '82252', 'Julampitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(613, 'Kahandamodara', '82126', 'Kahandamodara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(614, 'Kariyamaditta', '82274', 'Kariyamaditta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(615, 'Katuwana', '82500', 'Katuwana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(616, 'Kawantissapura', '82622', 'Kawantissapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(617, 'Kirama', '82550', 'Kirama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(618, 'Kirinda', '82614', 'Kirinda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(619, 'Lunama', '82108', 'Lunama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(620, 'Lunugamwehera', '82634', 'Lunugamwehera', '100.00', '5.00', '150.00', 0, NULL, NULL),
(621, 'Magama', '82608', 'Magama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(622, 'Mahagalwewa', '82016', 'Mahagalwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(623, 'Mamadala', '82109', 'Mamadala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(624, 'Medamulana', '82254', 'Medamulana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(625, 'Middeniya', '82270', 'Middeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(626, 'Meegahajandura', '82014', 'Meegahajandura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(627, 'Modarawana', '82416', 'Modarawana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(628, 'Mulkirigala', '82242', 'Mulkirigala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(629, 'Nakulugamuwa', '82300', 'Nakulugamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(630, 'Netolpitiya', '82135', 'Netolpitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(631, 'Nihiluwa', '82414', 'Nihiluwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(632, 'Padawkema', '82636', 'Padawkema', '100.00', '5.00', '150.00', 0, NULL, NULL),
(633, 'Pahala Andarawewa', '82008', 'Pahala Andarawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(634, 'Rammalawarapitiya', '82554', 'Rammalawarapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(635, 'Ranakeliya', '82612', 'Ranakeliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(636, 'Ranmuduwewa', '82018', 'Ranmuduwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(637, 'Ranna', '82125', 'Ranna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(638, 'Ratmalwala', '82276', 'Ratmalwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(639, 'Ruhunu Ridiyagama', '82106', 'Ruhunu Ridiyagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(640, 'Sooriyawewa Town', '82010', 'Sooriyawewa Town', '100.00', '5.00', '150.00', 0, NULL, NULL),
(641, 'Tangalla', '82200', 'Tangalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(642, 'Tissamaharama', '82600', 'Tissamaharama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(643, 'Uda Gomadiya', '82504', 'Uda Gomadiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(644, 'Udamattala', '82638', 'Udamattala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(645, 'Uswewa', '82278', 'Uswewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(646, 'Vitharandeniya', '82232', 'Vitharandeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(647, 'Walasmulla', '82450', 'Walasmulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(648, 'Weeraketiya', '82240', 'Weeraketiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(649, 'Weerawila', '82632', 'Weerawila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(650, 'Weerawila NewTown', '82615', 'Weerawila NewTown', '100.00', '5.00', '150.00', 0, NULL, NULL),
(651, 'Wekandawela', '82246', 'Wekandawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(652, 'Weligatta', '82004', 'Weligatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(653, 'Yatigala', '82418', 'Yatigala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(654, 'Jaffna', '40000', 'Jaffna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(655, 'Agalawatta', '12200', 'Agalawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(656, 'Alubomulla', '12524', 'Alubomulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(657, 'Anguruwatota', '12320', 'Anguruwatota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(658, 'Atale', '71363', 'Atale', '100.00', '5.00', '150.00', 0, NULL, NULL),
(659, 'Baduraliya', '12230', 'Baduraliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(660, 'Bandaragama', '12530', 'Bandaragama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(661, 'Batugampola', '10526', 'Batugampola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(662, 'Bellana', '12224', 'Bellana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(663, 'Beruwala', '12070', 'Beruwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(664, 'Bolossagama', '12008', 'Bolossagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(665, 'Bombuwala', '12024', 'Bombuwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(666, 'Boralugoda', '12142', 'Boralugoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(667, 'Bulathsinhala', '12300', 'Bulathsinhala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(668, 'Danawala Thiniyawala', '12148', 'Danawala Thiniyawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(669, 'Delmella', '12304', 'Delmella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(670, 'Dharga Town', '12090', 'Dharga Town', '100.00', '5.00', '150.00', 0, NULL, NULL),
(671, 'Diwalakada', '12308', 'Diwalakada', '100.00', '5.00', '150.00', 0, NULL, NULL),
(672, 'Dodangoda', '12020', 'Dodangoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(673, 'Dombagoda', '12416', 'Dombagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(674, 'Ethkandura', '80458', 'Ethkandura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(675, 'Galpatha', '12005', 'Galpatha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(676, 'Gamagoda', '12016', 'Gamagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(677, 'Gonagalpura', '80502', 'Gonagalpura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(678, 'Gonapola Junction', '12410', 'Gonapola Junction', '100.00', '5.00', '150.00', 0, NULL, NULL),
(679, 'Govinna', '12310', 'Govinna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(680, 'Gurulubadda', '12236', 'Gurulubadda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(681, 'Halkandawila', '12055', 'Halkandawila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(682, 'Haltota', '12538', 'Haltota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(683, 'Halvitigala Colony', '80146', 'Halvitigala Colony', '100.00', '5.00', '150.00', 0, NULL, NULL),
(684, 'Halwala', '12118', 'Halwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(685, 'Halwatura', '12306', 'Halwatura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(686, 'Handapangoda', '10524', 'Handapangoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(687, 'Hedigalla Colony', '12234', 'Hedigalla Colony', '100.00', '5.00', '150.00', 0, NULL, NULL),
(688, 'Henegama', '11715', 'Henegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(689, 'Hettimulla', '71210', 'Hettimulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(690, 'Horana', '12400', 'Horana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(691, 'Ittapana', '12116', 'Ittapana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(692, 'Kahawala', '10508', 'Kahawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(693, 'Kalawila Kiranthidiya', '12078', 'Kalawila Kiranthidiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(694, 'Kalutara', '12000', 'Kalutara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(695, 'Kananwila', '12418', 'Kananwila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(696, 'Kandanagama', '12428', 'Kandanagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(697, 'Kelinkanda', '12218', 'Kelinkanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(698, 'Kitulgoda', '12222', 'Kitulgoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(699, 'Koholana', '12007', 'Koholana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(700, 'Kuda Uduwa', '12426', 'Kuda Uduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(701, 'Labbala', '60162', 'Labbala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(702, 'Ihalahewessa', '80432', 'Ihalahewessa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(703, 'Induruwa', '80510', 'Induruwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(704, 'Ingiriya', '12440', 'Ingiriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(705, 'Maggona', '12060', 'Maggona', '100.00', '5.00', '150.00', 0, NULL, NULL),
(706, 'Mahagama', '12210', 'Mahagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(707, 'Mahakalupahana', '12126', 'Mahakalupahana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(708, 'Maharangalla', '71211', 'Maharangalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(709, 'Malgalla Talangalla', '80144', 'Malgalla Talangalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(710, 'Matugama', '12100', 'Matugama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(711, 'Meegahatenna', '12130', 'Meegahatenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(712, 'Meegama', '12094', 'Meegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(713, 'Meegoda', '10504', 'Meegoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(714, 'Millaniya', '12412', 'Millaniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(715, 'Millewa', '12422', 'Millewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(716, 'Miwanapalana', '12424', 'Miwanapalana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(717, 'Molkawa', '12216', 'Molkawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(718, 'Morapitiya', '12232', 'Morapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(719, 'Morontuduwa', '12564', 'Morontuduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(720, 'Nawattuduwa', '12106', 'Nawattuduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(721, 'Neboda', '12030', 'Neboda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(722, 'Padagoda', '12074', 'Padagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(723, 'Pahalahewessa', '12144', 'Pahalahewessa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(724, 'Paiyagala', '12050', 'Paiyagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(725, 'Panadura', '12500', 'Panadura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(726, 'Pannala', '60160', 'Pannala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(727, 'Paragastota', '12414', 'Paragastota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(728, 'Paragoda', '12302', 'Paragoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(729, 'Paraigama', '12122', 'Paraigama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(730, 'Pelanda', '12214', 'Pelanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(731, 'Pelawatta', '12138', 'Pelawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(732, 'Pimbura', '70472', 'Pimbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(733, 'Pitagaldeniya', '71360', 'Pitagaldeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(734, 'Pokunuwita', '12404', 'Pokunuwita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(735, 'Poruwedanda', '12432', 'Poruwedanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(736, 'Ratmale', '81030', 'Ratmale', '100.00', '5.00', '150.00', 0, NULL, NULL),
(737, 'Remunagoda', '12009', 'Remunagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(738, 'Talgaswela', '80470', 'Talgaswela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(739, 'Tebuwana', '12025', 'Tebuwana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(740, 'Uduwara', '12322', 'Uduwara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(741, 'Utumgama', '12127', 'Utumgama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(742, 'Veyangalla', '12204', 'Veyangalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(743, 'Wadduwa', '12560', 'Wadduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(744, 'Walagedara', '12112', 'Walagedara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(745, 'Walallawita', '12134', 'Walallawita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(746, 'Waskaduwa', '12580', 'Waskaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(747, 'Welipenna', '12108', 'Welipenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(748, 'Weliveriya', '11710', 'Weliveriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(749, 'Welmilla Junction', '12534', 'Welmilla Junction', '100.00', '5.00', '150.00', 0, NULL, NULL),
(750, 'Weragala', '71622', 'Weragala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(751, 'Yagirala', '12124', 'Yagirala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(752, 'Yatadolawatta', '12104', 'Yatadolawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(753, 'Yatawara Junction', '12006', 'Yatawara Junction', '100.00', '5.00', '150.00', 0, NULL, NULL),
(754, 'Aludeniya', '20062', 'Aludeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(755, 'Ambagahapelessa', '20986', 'Ambagahapelessa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(756, 'Ambagamuwa Udabulathgama', '20678', 'Ambagamuwa Udabulathgama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(757, 'Ambatenna', '20136', 'Ambatenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(758, 'Ampitiya', '20160', 'Ampitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(759, 'Ankumbura', '20150', 'Ankumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(760, 'Atabage', '20574', 'Atabage', '100.00', '5.00', '150.00', 0, NULL, NULL),
(761, 'Balana', '20308', 'Balana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(762, 'Bambaragahaela', '20644', 'Bambaragahaela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(763, 'Batagolladeniya', '20154', 'Batagolladeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(764, 'Batugoda', '20132', 'Batugoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(765, 'Batumulla', '20966', 'Batumulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(766, 'Bawlana', '20218', 'Bawlana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(767, 'Bopana', '20932', 'Bopana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(768, 'Danture', '20465', 'Danture', '100.00', '5.00', '150.00', 0, NULL, NULL),
(769, 'Dedunupitiya', '20068', 'Dedunupitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(770, 'Dekinda', '20658', 'Dekinda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(771, 'Deltota', '20430', 'Deltota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(772, 'Divulankadawala', '51428', 'Divulankadawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(773, 'Dolapihilla', '20126', 'Dolapihilla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(774, 'Dolosbage', '20510', 'Dolosbage', '100.00', '5.00', '150.00', 0, NULL, NULL),
(775, 'Dunuwila', '20824', 'Dunuwila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(776, 'Etulgama', '20202', 'Etulgama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(777, 'Galaboda', '20664', 'Galaboda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(778, 'Galagedara', '20100', 'Galagedara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(779, 'Galaha', '20420', 'Galaha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(780, 'Galhinna', '20152', 'Galhinna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(781, 'Gampola', '20500', 'Gampola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(782, 'Gelioya', '20620', 'Gelioya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(783, 'Godamunna', '20214', 'Godamunna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(784, 'Gomagoda', '20184', 'Gomagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(785, 'Gonagantenna', '20712', 'Gonagantenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(786, 'Gonawalapatana', '20656', 'Gonawalapatana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(787, 'Gunnepana', '20270', 'Gunnepana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(788, 'Gurudeniya', '20189', 'Gurudeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(789, 'Hakmana', '81300', 'Hakmana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(790, 'Handaganawa', '20984', 'Handaganawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(791, 'Handawalapitiya', '20438', 'Handawalapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(792, 'Handessa', '20480', 'Handessa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(793, 'Hanguranketha', '20710', 'Hanguranketha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(794, 'Harangalagama', '20669', 'Harangalagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(795, 'Hataraliyadda', '20060', 'Hataraliyadda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(796, 'Hindagala', '20414', 'Hindagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(797, 'Hondiyadeniya', '20524', 'Hondiyadeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(798, 'Hunnasgiriya', '20948', 'Hunnasgiriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(799, 'Inguruwatta', '60064', 'Inguruwatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(800, 'Jambugahapitiya', '20822', 'Jambugahapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(801, 'Kadugannawa', '20300', 'Kadugannawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(802, 'Kahataliyadda', '20924', 'Kahataliyadda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(803, 'Kalugala', '20926', 'Kalugala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(804, 'Kandy', '20000', 'Kandy', '100.00', '5.00', '150.00', 0, NULL, NULL),
(805, 'Kapuliyadde', '20206', 'Kapuliyadde', '100.00', '5.00', '150.00', 0, NULL, NULL),
(806, 'Katugastota', '20800', 'Katugastota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(807, 'Katukitula', '20588', 'Katukitula', '100.00', '5.00', '150.00', 0, NULL, NULL),
(808, 'Kelanigama', '20688', 'Kelanigama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(809, 'Kengalla', '20186', 'Kengalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(810, 'Ketaboola', '20660', 'Ketaboola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(811, 'Ketakumbura', '20306', 'Ketakumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(812, 'Kobonila', '20928', 'Kobonila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(813, 'Kolabissa', '20212', 'Kolabissa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(814, 'Kolongoda', '20971', 'Kolongoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(815, 'Kulugammana', '20048', 'Kulugammana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(816, 'Kumbukkandura', '20902', 'Kumbukkandura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(817, 'Kumburegama', '20086', 'Kumburegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(818, 'Kundasale', '20168', 'Kundasale', '100.00', '5.00', '150.00', 0, NULL, NULL),
(819, 'Leemagahakotuwa', '20482', 'Leemagahakotuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(820, 'Ihala Kobbekaduwa', '20042', 'Ihala Kobbekaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(821, 'Lunugama', '11062', 'Lunugama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(822, 'Lunuketiya Maditta', '20172', 'Lunuketiya Maditta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(823, 'Madawala Bazaar', '20260', 'Madawala Bazaar', '100.00', '5.00', '150.00', 0, NULL, NULL),
(824, 'Madawalalanda', '32016', 'Madawalalanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(825, 'Madugalla', '20938', 'Madugalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(826, 'Madulkele', '20840', 'Madulkele', '100.00', '5.00', '150.00', 0, NULL, NULL),
(827, 'Mahadoraliyadda', '20945', 'Mahadoraliyadda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(828, 'Mahamedagama', '20216', 'Mahamedagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(829, 'Mahanagapura', '32018', 'Mahanagapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(830, 'Mailapitiya', '20702', 'Mailapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(831, 'Makkanigama', '20828', 'Makkanigama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(832, 'Makuldeniya', '20921', 'Makuldeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(833, 'Mangalagama', '32069', 'Mangalagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(834, 'Mapakanda', '20662', 'Mapakanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(835, 'Marassana', '20210', 'Marassana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(836, 'Marymount Colony', '20714', 'Marymount Colony', '100.00', '5.00', '150.00', 0, NULL, NULL),
(837, 'Mawatura', '20564', 'Mawatura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(838, 'Medamahanuwara', '20940', 'Medamahanuwara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(839, 'Medawala Harispattuwa', '20120', 'Medawala Harispattuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(840, 'Meetalawa', '20512', 'Meetalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(841, 'Megoda Kalugamuwa', '20409', 'Megoda Kalugamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(842, 'Menikdiwela', '20470', 'Menikdiwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(843, 'Menikhinna', '20170', 'Menikhinna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(844, 'Mimure', '20923', 'Mimure', '100.00', '5.00', '150.00', 0, NULL, NULL),
(845, 'Minigamuwa', '20109', 'Minigamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(846, 'Minipe', '20983', 'Minipe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(847, 'Moragahapallama', '32012', 'Moragahapallama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(848, 'Murutalawa', '20232', 'Murutalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(849, 'Muruthagahamulla', '20526', 'Muruthagahamulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(850, 'Nanuoya', '22150', 'Nanuoya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(851, 'Naranpanawa', '20176', 'Naranpanawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(852, 'Narawelpita', '81302', 'Narawelpita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(853, 'Nawalapitiya', '20650', 'Nawalapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(854, 'Nawathispane', '20670', 'Nawathispane', '100.00', '5.00', '150.00', 0, NULL, NULL),
(855, 'Nillambe', '20418', 'Nillambe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(856, 'Nugaliyadda', '20204', 'Nugaliyadda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(857, 'Ovilikanda', '21020', 'Ovilikanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(858, 'Pallekotuwa', '20084', 'Pallekotuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(859, 'Panwilatenna', '20544', 'Panwilatenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(860, 'Paradeka', '20578', 'Paradeka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(861, 'Pasbage', '20654', 'Pasbage', '100.00', '5.00', '150.00', 0, NULL, NULL),
(862, 'Pattitalawa', '20511', 'Pattitalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(863, 'Peradeniya', '20400', 'Peradeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(864, 'Pilimatalawa', '20450', 'Pilimatalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(865, 'Poholiyadda', '20106', 'Poholiyadda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(866, 'Pubbiliya', '21502', 'Pubbiliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(867, 'Pupuressa', '20546', 'Pupuressa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(868, 'Pussellawa', '20580', 'Pussellawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(869, 'Putuhapuwa', '20906', 'Putuhapuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(870, 'Rajawella', '20180', 'Rajawella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(871, 'Rambukpitiya', '20676', 'Rambukpitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(872, 'Rambukwella', '20128', 'Rambukwella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(873, 'Rangala', '20922', 'Rangala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(874, 'Rantembe', '20990', 'Rantembe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(875, 'Sangarajapura', '20044', 'Sangarajapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(876, 'Senarathwela', '20904', 'Senarathwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(877, 'Talatuoya', '20200', 'Talatuoya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(878, 'Teldeniya', '20900', 'Teldeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(879, 'Tennekumbura', '20166', 'Tennekumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(880, 'Uda Peradeniya', '20404', 'Uda Peradeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(881, 'Udahentenna', '20506', 'Udahentenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(882, 'Udatalawinna', '20802', 'Udatalawinna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(883, 'Udispattuwa', '20916', 'Udispattuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(884, 'Ududumbara', '20950', 'Ududumbara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(885, 'Uduwahinna', '20934', 'Uduwahinna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(886, 'Uduwela', '20164', 'Uduwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(887, 'Ulapane', '20562', 'Ulapane', '100.00', '5.00', '150.00', 0, NULL, NULL),
(888, 'Unuwinna', '20708', 'Unuwinna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(889, 'Velamboda', '20640', 'Velamboda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(890, 'Watagoda', '22110', 'Watagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(891, 'Watagoda Harispattuwa', '20134', 'Watagoda Harispattuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(892, 'Wattappola', '20454', 'Wattappola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(893, 'Weligampola', '20666', 'Weligampola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(894, 'Wendaruwa', '20914', 'Wendaruwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(895, 'Weragantota', '20982', 'Weragantota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(896, 'Werapitya', '20908', 'Werapitya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(897, 'Werellagama', '20080', 'Werellagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(898, 'Wettawa', '20108', 'Wettawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(899, 'Yahalatenna', '20234', 'Yahalatenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(900, 'Yatihalagala', '20034', 'Yatihalagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(901, 'Alawala', '11122', 'Alawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(902, 'Alawatura', '71204', 'Alawatura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(903, 'Alawwa', '60280', 'Alawwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(904, 'Algama', '71607', 'Algama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(905, 'Alutnuwara', '71508', 'Alutnuwara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(906, 'Ambalakanda', '71546', 'Ambalakanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(907, 'Ambulugala', '71503', 'Ambulugala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(908, 'Amitirigala', '71320', 'Amitirigala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(909, 'Ampagala', '71232', 'Ampagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(910, 'Anhandiya', '60074', 'Anhandiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(911, 'Anhettigama', '71403', 'Anhettigama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(912, 'Aranayaka', '71540', 'Aranayaka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(913, 'Aruggammana', '71041', 'Aruggammana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(914, 'Batuwita', '71321', 'Batuwita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(915, 'Beligala(Sab)', '71044', 'Beligala(Sab)', '100.00', '5.00', '150.00', 0, NULL, NULL),
(916, 'Belihuloya', '70140', 'Belihuloya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(917, 'Berannawa', '71706', 'Berannawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(918, 'Bopitiya', '60155', 'Bopitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(919, 'Bopitiya (SAB)', '71612', 'Bopitiya (SAB)', '100.00', '5.00', '150.00', 0, NULL, NULL),
(920, 'Boralankada', '71418', 'Boralankada', '100.00', '5.00', '150.00', 0, NULL, NULL),
(921, 'Bossella', '71208', 'Bossella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(922, 'Bulathkohupitiya', '71230', 'Bulathkohupitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(923, 'Damunupola', '71034', 'Damunupola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(924, 'Debathgama', '71037', 'Debathgama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(925, 'Dedugala', '71237', 'Dedugala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(926, 'Deewala Pallegama', '71022', 'Deewala Pallegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(927, 'Dehiowita', '71400', 'Dehiowita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(928, 'Deldeniya', '71009', 'Deldeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(929, 'Deloluwa', '71401', 'Deloluwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(930, 'Deraniyagala', '71430', 'Deraniyagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(931, 'Dewalegama', '71050', 'Dewalegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(932, 'Dewanagala', '71527', 'Dewanagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(933, 'Dombemada', '71115', 'Dombemada', '100.00', '5.00', '150.00', 0, NULL, NULL),
(934, 'Dorawaka', '71601', 'Dorawaka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(935, 'Dunumala', '71605', 'Dunumala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(936, 'Galapitamada', '71603', 'Galapitamada', '100.00', '5.00', '150.00', 0, NULL, NULL),
(937, 'Galatara', '71505', 'Galatara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(938, 'Galigamuwa Town', '71350', 'Galigamuwa Town', '100.00', '5.00', '150.00', 0, NULL, NULL),
(939, 'Gallella', '70062', 'Gallella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(940, 'Galpatha(Sab)', '71312', 'Galpatha(Sab)', '100.00', '5.00', '150.00', 0, NULL, NULL),
(941, 'Gantuna', '71222', 'Gantuna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(942, 'Getahetta', '70620', 'Getahetta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(943, 'Godagampola', '70556', 'Godagampola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(944, 'Gonagala', '71318', 'Gonagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(945, 'Hakahinna', '71352', 'Hakahinna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(946, 'Hakbellawaka', '71715', 'Hakbellawaka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(947, 'Halloluwa', '20032', 'Halloluwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(948, 'Hedunuwewa', '22024', 'Hedunuwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(949, 'Hemmatagama', '71530', 'Hemmatagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(950, 'Hewadiwela', '71108', 'Hewadiwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(951, 'Hingula', '71520', 'Hingula', '100.00', '5.00', '150.00', 0, NULL, NULL),
(952, 'Hinguralakanda', '71417', 'Hinguralakanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(953, 'Hingurana', '32010', 'Hingurana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(954, 'Hiriwadunna', '71014', 'Hiriwadunna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(955, 'Ihala Walpola', '80134', 'Ihala Walpola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(956, 'Ihalagama', '70144', 'Ihalagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(957, 'Imbulana', '71313', 'Imbulana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(958, 'Imbulgasdeniya', '71055', 'Imbulgasdeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(959, 'Kabagamuwa', '71202', 'Kabagamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(960, 'Kahapathwala', '60062', 'Kahapathwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(961, 'Kandaketya', '90020', 'Kandaketya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(962, 'Kannattota', '71372', 'Kannattota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(963, 'Karagahinna', '21014', 'Karagahinna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(964, 'Kegalle', '71000', 'Kegalle', '100.00', '5.00', '150.00', 0, NULL, NULL),
(965, 'Kehelpannala', '71533', 'Kehelpannala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(966, 'Ketawala Leula', '20198', 'Ketawala Leula', '100.00', '5.00', '150.00', 0, NULL, NULL),
(967, 'Kitulgala', '71720', 'Kitulgala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(968, 'Kondeniya', '71501', 'Kondeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(969, 'Kotiyakumbura', '71370', 'Kotiyakumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(970, 'Lewangama', '71315', 'Lewangama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(971, 'Mahabage', '71722', 'Mahabage', '100.00', '5.00', '150.00', 0, NULL, NULL),
(972, 'Makehelwala', '71507', 'Makehelwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(973, 'Malalpola', '71704', 'Malalpola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(974, 'Maldeniya', '22021', 'Maldeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(975, 'Maliboda', '71411', 'Maliboda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(976, 'Maliyadda', '90022', 'Maliyadda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(977, 'Malmaduwa', '71325', 'Malmaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(978, 'Marapana', '70041', 'Marapana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(979, 'Mawanella', '71500', 'Mawanella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(980, 'Meetanwala', '60066', 'Meetanwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(981, 'Migastenna Sabara', '71716', 'Migastenna Sabara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(982, 'Miyanawita', '71432', 'Miyanawita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(983, 'Molagoda', '71016', 'Molagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(984, 'Morontota', '71220', 'Morontota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(985, 'Narangala', '90064', 'Narangala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(986, 'Narangoda', '60152', 'Narangoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(987, 'Nattarampotha', '20194', 'Nattarampotha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(988, 'Nelundeniya', '71060', 'Nelundeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(989, 'Niyadurupola', '71602', 'Niyadurupola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(990, 'Noori', '71407', 'Noori', '100.00', '5.00', '150.00', 0, NULL, NULL),
(991, 'Pannila', '12114', 'Pannila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(992, 'Pattampitiya', '71130', 'Pattampitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(993, 'Pilawala', '20196', 'Pilawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(994, 'Pothukoladeniya', '71039', 'Pothukoladeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(995, 'Puswelitenna', '60072', 'Puswelitenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(996, 'Rambukkana', '71100', 'Rambukkana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(997, 'Rilpola', '90026', 'Rilpola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(998, 'Rukmale', '11129', 'Rukmale', '100.00', '5.00', '150.00', 0, NULL, NULL),
(999, 'Ruwanwella', '71300', 'Ruwanwella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1000, 'Samanalawewa', '70142', 'Samanalawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1001, 'Seaforth Colony', '71708', 'Seaforth Colony', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1002, 'Colombo 2', '200', 'Colombo 2', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1003, 'Spring Valley', '90028', 'Spring Valley', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1004, 'Talgaspitiya', '71541', 'Talgaspitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1005, 'Teligama', '71724', 'Teligama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1006, 'Tholangamuwa', '71619', 'Tholangamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1007, 'Thotawella', '71106', 'Thotawella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1008, 'Udaha Hawupe', '70154', 'Udaha Hawupe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1009, 'Udapotha', '71236', 'Udapotha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1010, 'Uduwa', '20052', 'Uduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1011, 'Undugoda', '71200', 'Undugoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1012, 'Ussapitiya', '71510', 'Ussapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1013, 'Wahakula', '71303', 'Wahakula', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1014, 'Waharaka', '71304', 'Waharaka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1015, 'Wanaluwewa', '11068', 'Wanaluwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1016, 'Warakapola', '71600', 'Warakapola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1017, 'Watura', '71035', 'Watura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1018, 'Weeoya', '71702', 'Weeoya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1019, 'Wegalla', '71234', 'Wegalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1020, 'Weligalla', '20610', 'Weligalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1021, 'Welihelatenna', '71712', 'Welihelatenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1022, 'Wewelwatta', '70066', 'Wewelwatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1023, 'Yatagama', '71116', 'Yatagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1024, 'Yatapana', '71326', 'Yatapana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1025, 'Yatiyantota', '71700', 'Yatiyantota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1026, 'Yattogoda', '71029', 'Yattogoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1027, 'Kandavalai', '42508', 'Kandavalai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1028, 'Karachchi', 'NULL', 'Karachchi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1029, 'Kilinochchi', '42400', 'Kilinochchi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1030, 'Pachchilaipalli', '42550', 'Pachchilaipalli', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1031, 'Poonakary', '42600', 'Poonakary', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1032, 'Akurana', '20850', 'Akurana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1033, 'Alahengama', '60416', 'Alahengama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1034, 'Alahitiyawa', '60182', 'Alahitiyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1035, 'Ambakote', '60036', 'Ambakote', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1036, 'Ambanpola', '60650', 'Ambanpola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1037, 'Andiyagala', '50112', 'Andiyagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1038, 'Anukkane', '60214', 'Anukkane', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1039, 'Aragoda', '60308', 'Aragoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1040, 'Ataragalla', '60706', 'Ataragalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1041, 'Awulegama', '60462', 'Awulegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1042, 'Balalla', '60604', 'Balalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1043, 'Bamunukotuwa', '60347', 'Bamunukotuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1044, 'Bandara Koswatta', '60424', 'Bandara Koswatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1045, 'Bingiriya', '60450', 'Bingiriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1046, 'Bogamulla', '60107', 'Bogamulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1047, 'Boraluwewa', '60437', 'Boraluwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1048, 'Boyagane', '60027', 'Boyagane', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1049, 'Bujjomuwa', '60291', 'Bujjomuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1050, 'Buluwala', '60076', 'Buluwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1051, 'Dadayamtalawa', '32046', 'Dadayamtalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1052, 'Dambadeniya', '60130', 'Dambadeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1053, 'Daraluwa', '60174', 'Daraluwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1054, 'Deegalla', '60228', 'Deegalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1055, 'Demataluwa', '60024', 'Demataluwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1056, 'Demuwatha', '70332', 'Demuwatha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1057, 'Diddeniya', '60544', 'Diddeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1058, 'Digannewa', '60485', 'Digannewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1059, 'Divullegoda', '60472', 'Divullegoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1060, 'Diyasenpura', '51504', 'Diyasenpura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1061, 'Dodangaslanda', '60530', 'Dodangaslanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1062, 'Doluwa', '20532', 'Doluwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1063, 'Doragamuwa', '20816', 'Doragamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1064, 'Doratiyawa', '60013', 'Doratiyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1065, 'Dunumadalawa', '50214', 'Dunumadalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1066, 'Dunuwilapitiya', '21538', 'Dunuwilapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1067, 'Ehetuwewa', '60716', 'Ehetuwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1068, 'Elibichchiya', '60156', 'Elibichchiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1069, 'Embogama', '60718', 'Embogama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1070, 'Etungahakotuwa', '60266', 'Etungahakotuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1071, 'Galadivulwewa', '50210', 'Galadivulwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1072, 'Galgamuwa', '60700', 'Galgamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1073, 'Gallellagama', '20095', 'Gallellagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1074, 'Gallewa', '60712', 'Gallewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1075, 'Ganegoda', '80440', 'Ganegoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1076, 'Girathalana', '60752', 'Girathalana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1077, 'Gokaralla', '60522', 'Gokaralla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1078, 'Gonawila', '60170', 'Gonawila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1079, 'Halmillawewa', '60441', 'Halmillawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1080, 'Handungamuwa', '21536', 'Handungamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1081, 'Harankahawa', '20092', 'Harankahawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1082, 'Helamada', '71046', 'Helamada', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1083, 'Hengamuwa', '60414', 'Hengamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1084, 'Hettipola', '60430', 'Hettipola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1085, 'Hewainna', '10714', 'Hewainna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1086, 'Hilogama', '60486', 'Hilogama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1087, 'Hindagolla', '60034', 'Hindagolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1088, 'Hiriyala Lenawa', '60546', 'Hiriyala Lenawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1089, 'Hiruwalpola', '60458', 'Hiruwalpola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1090, 'Horambawa', '60181', 'Horambawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1091, 'Hulogedara', '60474', 'Hulogedara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1092, 'Hulugalla', '60477', 'Hulugalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1093, 'Ihala Gomugomuwa', '60211', 'Ihala Gomugomuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1094, 'Ihala Katugampala', '60135', 'Ihala Katugampala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1095, 'Indulgodakanda', '60016', 'Indulgodakanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1096, 'Ithanawatta', '60025', 'Ithanawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1097, 'Kadigawa', '60492', 'Kadigawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1098, 'Kalankuttiya', '50174', 'Kalankuttiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1099, 'Kalatuwawa', '10718', 'Kalatuwawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1100, 'Kalugamuwa', '60096', 'Kalugamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1101, 'Kanadeniyawala', '60054', 'Kanadeniyawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1102, 'Kanattewewa', '60422', 'Kanattewewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1103, 'Kandegedara', '90070', 'Kandegedara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1104, 'Karagahagedara', '60106', 'Karagahagedara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1105, 'Karambe', '60602', 'Karambe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1106, 'Katiyawa', '50261', 'Katiyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1107, 'Katupota', '60350', 'Katupota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1108, 'Kawudulla', '51414', 'Kawudulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1109, 'Kawuduluwewa Stagell', '51514', 'Kawuduluwewa Stagell', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1110, 'Kekunagolla', '60183', 'Kekunagolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1111, 'Keppitiwalana', '60288', 'Keppitiwalana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1112, 'Kimbulwanaoya', '60548', 'Kimbulwanaoya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1113, 'Kirimetiyawa', '60184', 'Kirimetiyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1114, 'Kirindawa', '60212', 'Kirindawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1115, 'Kirindigalla', '60502', 'Kirindigalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1116, 'Kithalawa', '60188', 'Kithalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1117, 'Kitulwala', '11242', 'Kitulwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1118, 'Kobeigane', '60410', 'Kobeigane', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1119, 'Kohilagedara', '60028', 'Kohilagedara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1120, 'Konwewa', '60630', 'Konwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1121, 'Kosdeniya', '60356', 'Kosdeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1122, 'Kosgolla', '60029', 'Kosgolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1123, 'Kotagala', '22080', 'Kotagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1124, 'Colombo 13', '1300', 'Colombo 13', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1125, 'Kotawehera', '60483', 'Kotawehera', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1126, 'Kudagalgamuwa', '60003', 'Kudagalgamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1127, 'Kudakatnoruwa', '60754', 'Kudakatnoruwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1128, 'Kuliyapitiya', '60200', 'Kuliyapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1129, 'Kumaragama', '51412', 'Kumaragama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1130, 'Kumbukgeta', '60508', 'Kumbukgeta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1131, 'Kumbukwewa', '60506', 'Kumbukwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1132, 'Kuratihena', '60438', 'Kuratihena', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1133, 'Kurunegala', '60000', 'Kurunegala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1134, 'Ibbagamuwa', '60500', 'Ibbagamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1135, 'Ihala Kadigamuwa', '60238', 'Ihala Kadigamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1136, 'Lihiriyagama', '61138', 'Lihiriyagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1137, 'Illagolla', '20724', 'Illagolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1138, 'Ilukhena', '60232', 'Ilukhena', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1139, 'Lonahettiya', '60108', 'Lonahettiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1140, 'Madahapola', '60552', 'Madahapola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1141, 'Madakumburumulla', '60209', 'Madakumburumulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1142, 'Madalagama', '70158', 'Madalagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1143, 'Madawala Ulpotha', '21074', 'Madawala Ulpotha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1144, 'Maduragoda', '60532', 'Maduragoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1145, 'Maeliya', '60512', 'Maeliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1146, 'Magulagama', '60221', 'Magulagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1147, 'Maha Ambagaswewa', '51518', 'Maha Ambagaswewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1148, 'Mahagalkadawala', '60731', 'Mahagalkadawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1149, 'Mahagirilla', '60479', 'Mahagirilla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1150, 'Mahamukalanyaya', '60516', 'Mahamukalanyaya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1151, 'Mahananneriya', '60724', 'Mahananneriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1152, 'Mahapallegama', '71063', 'Mahapallegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1153, 'Maharachchimulla', '60286', 'Maharachchimulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1154, 'Mahatalakolawewa', '51506', 'Mahatalakolawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1155, 'Mahawewa', '61220', 'Mahawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1156, 'Maho', '60600', 'Maho', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1157, 'Makulewa', '60714', 'Makulewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1158, 'Makulpotha', '60514', 'Makulpotha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1159, 'Makulwewa', '60578', 'Makulwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1160, 'Malagane', '60404', 'Malagane', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1161, 'Mandapola', '60434', 'Mandapola', '100.00', '5.00', '150.00', 0, NULL, NULL);
INSERT INTO `zones` (`id`, `zone_name`, `zip_code`, `zone_description`, `shipping_cost`, `weight_margin`, `minimum_cost`, `status`, `created_at`, `updated_at`) VALUES
(1162, 'Maspotha', '60344', 'Maspotha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1163, 'Mawathagama', '60060', 'Mawathagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1164, 'Medirigiriya', '51500', 'Medirigiriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1165, 'Medivawa', '60612', 'Medivawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1166, 'Meegalawa', '60750', 'Meegalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1167, 'Meegaswewa', '51508', 'Meegaswewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1168, 'Meewellawa', '60484', 'Meewellawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1169, 'Melsiripura', '60540', 'Melsiripura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1170, 'Metikumbura', '60304', 'Metikumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1171, 'Metiyagane', '60121', 'Metiyagane', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1172, 'Minhettiya', '60004', 'Minhettiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1173, 'Minuwangete', '60406', 'Minuwangete', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1174, 'Mirihanagama', '60408', 'Mirihanagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1175, 'Monnekulama', '60495', 'Monnekulama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1176, 'Moragane', '60354', 'Moragane', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1177, 'Moragollagama', '60640', 'Moragollagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1178, 'Morathiha', '60038', 'Morathiha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1179, 'Munamaldeniya', '60218', 'Munamaldeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1180, 'Muruthenge', '60122', 'Muruthenge', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1181, 'Mutugala', '51064', 'Mutugala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1182, 'Nabadewa', '60482', 'Nabadewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1183, 'Nagollagama', '60590', 'Nagollagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1184, 'Nagollagoda', '60226', 'Nagollagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1185, 'Nakkawatta', '60186', 'Nakkawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1186, 'Narammala', '60100', 'Narammala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1187, 'Nawasenapura', '51066', 'Nawasenapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1188, 'Nawatalwatta', '60292', 'Nawatalwatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1189, 'Nelliya', '60549', 'Nelliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1190, 'Nikaweratiya', '60470', 'Nikaweratiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1191, 'Nugagolla', '21534', 'Nugagolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1192, 'Nugawela', '20072', 'Nugawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1193, 'Padeniya', '60461', 'Padeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1194, 'Padiwela', '60236', 'Padiwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1195, 'Pahalagiribawa', '60735', 'Pahalagiribawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1196, 'Pahamune', '60112', 'Pahamune', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1197, 'Palagala', '50111', 'Palagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1198, 'Palapathwela', '21070', 'Palapathwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1199, 'Palaviya', '61280', 'Palaviya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1200, 'Pallewela', '11150', 'Pallewela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1201, 'Palukadawala', '60704', 'Palukadawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1202, 'Panadaragama', '60348', 'Panadaragama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1203, 'Panagamuwa', '60052', 'Panagamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1204, 'Panaliya', '60312', 'Panaliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1205, 'Panapitiya', '70152', 'Panapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1206, 'Panliyadda', '60558', 'Panliyadda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1207, 'Pansiyagama', '60554', 'Pansiyagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1208, 'Parape', '71105', 'Parape', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1209, 'Pathanewatta', '90071', 'Pathanewatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1210, 'Pattiya Watta', '20118', 'Pattiya Watta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1211, 'Perakanatta', '21532', 'Perakanatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1212, 'Periyakadneluwa', '60518', 'Periyakadneluwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1213, 'Pihimbiya Ratmale', '60439', 'Pihimbiya Ratmale', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1214, 'Pihimbuwa', '60053', 'Pihimbuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1215, 'Pilessa', '60058', 'Pilessa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1216, 'Polgahawela', '60300', 'Polgahawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1217, 'Polgolla', '20250', 'Polgolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1218, 'Polpithigama', '60620', 'Polpithigama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1219, 'Pothuhera', '60330', 'Pothuhera', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1220, 'Pothupitiya', '70338', 'Pothupitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1221, 'Pujapitiya', '20112', 'Pujapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1222, 'Rakwana', '70300', 'Rakwana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1223, 'Ranorawa', '50212', 'Ranorawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1224, 'Rathukohodigala', '20818', 'Rathukohodigala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1225, 'Ridibendiella', '60606', 'Ridibendiella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1226, 'Ridigama', '60040', 'Ridigama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1227, 'Saliya Asokapura', '60736', 'Saliya Asokapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1228, 'Sandalankawa', '60176', 'Sandalankawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1229, 'Sevanapitiya', '51062', 'Sevanapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1230, 'Sirambiadiya', '61312', 'Sirambiadiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1231, 'Sirisetagama', '60478', 'Sirisetagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1232, 'Siyambalangamuwa', '60646', 'Siyambalangamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1233, 'Siyambalawewa', '32048', 'Siyambalawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1234, 'Solepura', '60737', 'Solepura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1235, 'Solewewa', '60738', 'Solewewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1236, 'Sunandapura', '60436', 'Sunandapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1237, 'Talawattegedara', '60306', 'Talawattegedara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1238, 'Tambutta', '60734', 'Tambutta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1239, 'Tennepanguwa', '90072', 'Tennepanguwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1240, 'Thalahitimulla', '60208', 'Thalahitimulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1241, 'Thalakolawewa', '60624', 'Thalakolawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1242, 'Thalwita', '60572', 'Thalwita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1243, 'Tharana Udawela', '60227', 'Tharana Udawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1244, 'Thimbiriyawa', '60476', 'Thimbiriyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1245, 'Tisogama', '60453', 'Tisogama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1246, 'Thorayaya', '60499', 'Thorayaya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1247, 'Tulhiriya', '71610', 'Tulhiriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1248, 'Tuntota', '71062', 'Tuntota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1249, 'Tuttiripitigama', '60426', 'Tuttiripitigama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1250, 'Udagaldeniya', '71113', 'Udagaldeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1251, 'Udahingulwala', '20094', 'Udahingulwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1252, 'Udawatta', '20722', 'Udawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1253, 'Udubaddawa', '60250', 'Udubaddawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1254, 'Udumulla', '71521', 'Udumulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1255, 'Uhumiya', '60094', 'Uhumiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1256, 'Ulpotha Pallekele', '60622', 'Ulpotha Pallekele', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1257, 'Ulpothagama', '20965', 'Ulpothagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1258, 'Usgala Siyabmalangamuwa', '60732', 'Usgala Siyabmalangamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1259, 'Vijithapura', '50110', 'Vijithapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1260, 'Wadakada', '60318', 'Wadakada', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1261, 'Wadumunnegedara', '60204', 'Wadumunnegedara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1262, 'Walakumburumulla', '60198', 'Walakumburumulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1263, 'Wannigama', '60465', 'Wannigama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1264, 'Wannikudawewa', '60721', 'Wannikudawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1265, 'Wannilhalagama', '60722', 'Wannilhalagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1266, 'Wannirasnayakapura', '60490', 'Wannirasnayakapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1267, 'Warawewa', '60739', 'Warawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1268, 'Wariyapola', '60400', 'Wariyapola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1269, 'Watareka', '10511', 'Watareka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1270, 'Wattegama', '20810', 'Wattegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1271, 'Watuwatta', '60262', 'Watuwatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1272, 'Weerapokuna', '60454', 'Weerapokuna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1273, 'Welawa Juncton', '60464', 'Welawa Juncton', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1274, 'Welipennagahamulla', '60240', 'Welipennagahamulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1275, 'Wellagala', '60402', 'Wellagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1276, 'Wellarawa', '60456', 'Wellarawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1277, 'Wellawa', '60570', 'Wellawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1278, 'Welpalla', '60206', 'Welpalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1279, 'Wennoruwa', '60284', 'Wennoruwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1280, 'Weuda', '60080', 'Weuda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1281, 'Wewagama', '60195', 'Wewagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1282, 'Wilgamuwa', '21530', 'Wilgamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1283, 'Yakwila', '60202', 'Yakwila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1284, 'Yatigaloluwa', '60314', 'Yatigaloluwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1285, 'Mannar', '41000', 'Mannar', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1286, 'Puthukudiyiruppu', '30158', 'Puthukudiyiruppu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1287, 'Akuramboda', '21142', 'Akuramboda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1288, 'Alawatuwala', '60047', 'Alawatuwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1289, 'Alwatta', '21004', 'Alwatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1290, 'Ambana', '21504', 'Ambana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1291, 'Aralaganwila', '51100', 'Aralaganwila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1292, 'Ataragallewa', '21512', 'Ataragallewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1293, 'Bambaragaswewa', '21212', 'Bambaragaswewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1294, 'Barawardhana Oya', '20967', 'Barawardhana Oya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1295, 'Beligamuwa', '21214', 'Beligamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1296, 'Damana', '32014', 'Damana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1297, 'Dambulla', '21100', 'Dambulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1298, 'Damminna', '51106', 'Damminna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1299, 'Dankanda', '21032', 'Dankanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1300, 'Delwite', '60044', 'Delwite', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1301, 'Devagiriya', '21552', 'Devagiriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1302, 'Dewahuwa', '21206', 'Dewahuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1303, 'Divuldamana', '51104', 'Divuldamana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1304, 'Dullewa', '21054', 'Dullewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1305, 'Dunkolawatta', '21046', 'Dunkolawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1306, 'Elkaduwa', '21012', 'Elkaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1307, 'Erawula Junction', '21108', 'Erawula Junction', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1308, 'Etanawala', '21402', 'Etanawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1309, 'Galewela', '21200', 'Galewela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1310, 'Galoya Junction', '51375', 'Galoya Junction', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1311, 'Gammaduwa', '21068', 'Gammaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1312, 'Gangala Puwakpitiya', '21404', 'Gangala Puwakpitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1313, 'Hasalaka', '20960', 'Hasalaka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1314, 'Hattota Amuna', '21514', 'Hattota Amuna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1315, 'Imbulgolla', '21064', 'Imbulgolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1316, 'Inamaluwa', '21124', 'Inamaluwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1317, 'Iriyagolla', '60045', 'Iriyagolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1318, 'Kaikawala', '21066', 'Kaikawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1319, 'Kalundawa', '21112', 'Kalundawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1320, 'Kandalama', '21106', 'Kandalama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1321, 'Kavudupelella', '21072', 'Kavudupelella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1322, 'Kibissa', '21122', 'Kibissa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1323, 'Kiwula', '21042', 'Kiwula', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1324, 'Kongahawela', '21500', 'Kongahawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1325, 'Laggala Pallegama', '21520', 'Laggala Pallegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1326, 'Leliambe', '21008', 'Leliambe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1327, 'Lenadora', '21094', 'Lenadora', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1328, 'Ihala Halmillewa', '50262', 'Ihala Halmillewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1329, 'Illukkumbura', '21406', 'Illukkumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1330, 'Madipola', '51108', 'Madipola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1331, 'Mahawela', '21140', 'Mahawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1332, 'Mananwatta', '21144', 'Mananwatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1333, 'Maraka', '21554', 'Maraka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1334, 'Matale', '21000', 'Matale', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1335, 'Melipitiya', '21055', 'Melipitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1336, 'Metihakka', '21062', 'Metihakka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1337, 'Millawana', '21154', 'Millawana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1338, 'Muwandeniya', '21044', 'Muwandeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1339, 'Nalanda', '21082', 'Nalanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1340, 'Naula', '21090', 'Naula', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1341, 'Opalgala', '21076', 'Opalgala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1342, 'Pallepola', '21152', 'Pallepola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1343, 'Pimburattewa', '51102', 'Pimburattewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1344, 'Pulastigama', '51050', 'Pulastigama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1345, 'Ranamuregama', '21524', 'Ranamuregama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1346, 'Rattota', '21400', 'Rattota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1347, 'Selagama', '21058', 'Selagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1348, 'Sigiriya', '21120', 'Sigiriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1349, 'Sinhagama', '51378', 'Sinhagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1350, 'Sungavila', '51052', 'Sungavila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1351, 'Talagoda Junction', '21506', 'Talagoda Junction', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1352, 'Talakiriyagama', '21116', 'Talakiriyagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1353, 'Tamankaduwa', '51089', 'Tamankaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1354, 'Udasgiriya', '21051', 'Udasgiriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1355, 'Udatenna', '21006', 'Udatenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1356, 'Ukuwela', '21300', 'Ukuwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1357, 'Wahacotte', '21160', 'Wahacotte', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1358, 'Walawela', '21048', 'Walawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1359, 'Wehigala', '21009', 'Wehigala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1360, 'Welangahawatte', '21408', 'Welangahawatte', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1361, 'Wewalawewa', '21114', 'Wewalawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1362, 'Yatawatta', '21056', 'Yatawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1363, 'Akuressa', '81400', 'Akuressa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1364, 'Alapaladeniya', '81475', 'Alapaladeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1365, 'Aparekka', '81032', 'Aparekka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1366, 'Athuraliya', '81402', 'Athuraliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1367, 'Bengamuwa', '81614', 'Bengamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1368, 'Bopagoda', '81412', 'Bopagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1369, 'Dampahala', '81612', 'Dampahala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1370, 'Deegala Lenama', '81452', 'Deegala Lenama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1371, 'Deiyandara', '81320', 'Deiyandara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1372, 'Denagama', '81314', 'Denagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1373, 'Denipitiya', '81730', 'Denipitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1374, 'Deniyaya', '81500', 'Deniyaya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1375, 'Derangala', '81454', 'Derangala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1376, 'Devinuwara (Dondra)', '81160', 'Devinuwara (Dondra)', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1377, 'Dikwella', '81200', 'Dikwella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1378, 'Diyagaha', '81038', 'Diyagaha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1379, 'Diyalape', '81422', 'Diyalape', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1380, 'Gandara', '81170', 'Gandara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1381, 'Godapitiya', '81408', 'Godapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1382, 'Gomilamawarala', '81072', 'Gomilamawarala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1383, 'Hawpe', '80132', 'Hawpe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1384, 'Horapawita', '81108', 'Horapawita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1385, 'Kalubowitiyana', '81478', 'Kalubowitiyana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1386, 'Kamburugamuwa', '81750', 'Kamburugamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1387, 'Kamburupitiya', '81100', 'Kamburupitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1388, 'Karagoda Uyangoda', '81082', 'Karagoda Uyangoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1389, 'Karaputugala', '81106', 'Karaputugala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1390, 'Karatota', '81318', 'Karatota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1391, 'Kekanadura', '81020', 'Kekanadura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1392, 'Kiriweldola', '81514', 'Kiriweldola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1393, 'Kiriwelkele', '81456', 'Kiriwelkele', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1394, 'Kolawenigama', '81522', 'Kolawenigama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1395, 'Kotapola', '81480', 'Kotapola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1396, 'Lankagama', '81526', 'Lankagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1397, 'Makandura', '81070', 'Makandura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1398, 'Maliduwa', '81424', 'Maliduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1399, 'Maramba', '81416', 'Maramba', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1400, 'Matara', '81000', 'Matara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1401, 'Mediripitiya', '81524', 'Mediripitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1402, 'Miella', '81312', 'Miella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1403, 'Mirissa', '81740', 'Mirissa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1404, 'Morawaka', '81470', 'Morawaka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1405, 'Mulatiyana Junction', '81071', 'Mulatiyana Junction', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1406, 'Nadugala', '81092', 'Nadugala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1407, 'Naimana', '81017', 'Naimana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1408, 'Palatuwa', '81050', 'Palatuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1409, 'Parapamulla', '81322', 'Parapamulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1410, 'Pasgoda', '81615', 'Pasgoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1411, 'Penetiyana', '81722', 'Penetiyana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1412, 'Pitabeddara', '81450', 'Pitabeddara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1413, 'Puhulwella', '81290', 'Puhulwella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1414, 'Radawela', '81316', 'Radawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1415, 'Ransegoda', '81064', 'Ransegoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1416, 'Rotumba', '81074', 'Rotumba', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1417, 'Sultanagoda', '81051', 'Sultanagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1418, 'Telijjawila', '81060', 'Telijjawila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1419, 'Thihagoda', '81280', 'Thihagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1420, 'Urubokka', '81600', 'Urubokka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1421, 'Urugamuwa', '81230', 'Urugamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1422, 'Urumutta', '81414', 'Urumutta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1423, 'Viharahena', '81508', 'Viharahena', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1424, 'Walakanda', '81294', 'Walakanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1425, 'Walasgala', '81220', 'Walasgala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1426, 'Waralla', '81479', 'Waralla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1427, 'Weligama', '81700', 'Weligama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1428, 'Wilpita', '81404', 'Wilpita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1429, 'Yatiyana', '81034', 'Yatiyana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1430, 'Ayiwela', '91516', 'Ayiwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1431, 'Badalkumbura', '91070', 'Badalkumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1432, 'Baduluwela', '91058', 'Baduluwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1433, 'Bakinigahawela', '91554', 'Bakinigahawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1434, 'Balaharuwa', '91295', 'Balaharuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1435, 'Bibile', '91500', 'Bibile', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1436, 'Buddama', '91038', 'Buddama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1437, 'Buttala', '91100', 'Buttala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1438, 'Dambagalla', '91050', 'Dambagalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1439, 'Diyakobala', '91514', 'Diyakobala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1440, 'Dombagahawela', '91010', 'Dombagahawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1441, 'Ethimalewewa', '91020', 'Ethimalewewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1442, 'Ettiliwewa', '91250', 'Ettiliwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1443, 'Galabedda', '91008', 'Galabedda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1444, 'Gamewela', '90512', 'Gamewela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1445, 'Hambegamuwa', '91308', 'Hambegamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1446, 'Hingurukaduwa', '90508', 'Hingurukaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1447, 'Hulandawa', '91004', 'Hulandawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1448, 'Inginiyagala', '91040', 'Inginiyagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1449, 'Kandaudapanguwa', '91032', 'Kandaudapanguwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1450, 'Kandawinna', '91552', 'Kandawinna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1451, 'Kataragama', '91400', 'Kataragama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1452, 'Kotagama', '91512', 'Kotagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1453, 'Kotamuduna', '90506', 'Kotamuduna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1454, 'Kotawehera Mankada', '91312', 'Kotawehera Mankada', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1455, 'Kudawewa', '61226', 'Kudawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1456, 'Kumbukkana', '91098', 'Kumbukkana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1457, 'Marawa', '91006', 'Marawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1458, 'Mariarawa', '91052', 'Mariarawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1459, 'Medagana', '91550', 'Medagana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1460, 'Medawelagama', '90518', 'Medawelagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1461, 'Miyanakandura', '90584', 'Miyanakandura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1462, 'Monaragala', '91000', 'Monaragala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1463, 'Moretuwegama', '91108', 'Moretuwegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1464, 'Nakkala', '91003', 'Nakkala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1465, 'Namunukula', '90580', 'Namunukula', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1466, 'Nannapurawa', '91519', 'Nannapurawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1467, 'Nelliyadda', '91042', 'Nelliyadda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1468, 'Nilgala', '91508', 'Nilgala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1469, 'Obbegoda', '91007', 'Obbegoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1470, 'Okkampitiya', '91060', 'Okkampitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1471, 'Pangura', '91002', 'Pangura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1472, 'Pitakumbura', '91505', 'Pitakumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1473, 'Randeniya', '91204', 'Randeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1474, 'Ruwalwela', '91056', 'Ruwalwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1475, 'Sella Kataragama', '91405', 'Sella Kataragama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1476, 'Siyambalagune', '91202', 'Siyambalagune', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1477, 'Siyambalanduwa', '91030', 'Siyambalanduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1478, 'Suriara', '91306', 'Suriara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1479, 'Thanamalwila', '91300', 'Thanamalwila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1480, 'Uva Gangodagama', '91054', 'Uva Gangodagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1481, 'Uva Kudaoya', '91298', 'Uva Kudaoya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1482, 'Uva Pelwatta', '91112', 'Uva Pelwatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1483, 'Warunagama', '91198', 'Warunagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1484, 'Wedikumbura', '91005', 'Wedikumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1485, 'Weherayaya Handapanagala', '91206', 'Weherayaya Handapanagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1486, 'Wellawaya', '91200', 'Wellawaya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1487, 'Wilaoya', '91022', 'Wilaoya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1488, 'Yudaganawa', '51424', 'Yudaganawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1489, 'Mullativu', '42000', 'Mullativu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1490, 'Agarapathana', '22094', 'Agarapathana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1491, 'Ambatalawa', '20686', 'Ambatalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1492, 'Ambewela', '22216', 'Ambewela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1493, 'Bogawantalawa', '22060', 'Bogawantalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1494, 'Bopattalawa', '22095', 'Bopattalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1495, 'Dagampitiya', '20684', 'Dagampitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1496, 'Dayagama Bazaar', '22096', 'Dayagama Bazaar', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1497, 'Dikoya', '22050', 'Dikoya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1498, 'Doragala', '20567', 'Doragala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1499, 'Dunukedeniya', '22002', 'Dunukedeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1500, 'Egodawela', '90013', 'Egodawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1501, 'Ekiriya', '20732', 'Ekiriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1502, 'Elamulla', '20742', 'Elamulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1503, 'Ginigathena', '20680', 'Ginigathena', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1504, 'Gonakele', '22226', 'Gonakele', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1505, 'Haggala', '22208', 'Haggala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1506, 'Halgranoya', '22240', 'Halgranoya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1507, 'Hangarapitiya', '22044', 'Hangarapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1508, 'Hapugasthalawa', '20668', 'Hapugasthalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1509, 'Harasbedda', '22262', 'Harasbedda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1510, 'Hatton', '22000', 'Hatton', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1511, 'Hewaheta', '20440', 'Hewaheta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1512, 'Hitigegama', '22046', 'Hitigegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1513, 'Jangulla', '90063', 'Jangulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1514, 'Kalaganwatta', '22282', 'Kalaganwatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1515, 'Kandapola', '22220', 'Kandapola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1516, 'Karandagolla', '20738', 'Karandagolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1517, 'Keerthi Bandarapura', '22274', 'Keerthi Bandarapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1518, 'Kiribathkumbura', '20442', 'Kiribathkumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1519, 'Kotiyagala', '91024', 'Kotiyagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1520, 'Kotmale', '20560', 'Kotmale', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1521, 'Kottellena', '22040', 'Kottellena', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1522, 'Kumbalgamuwa', '22272', 'Kumbalgamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1523, 'Kumbukwela', '22246', 'Kumbukwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1524, 'Kurupanawela', '22252', 'Kurupanawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1525, 'Labukele', '20592', 'Labukele', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1526, 'Laxapana', '22034', 'Laxapana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1527, 'Lindula', '22090', 'Lindula', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1528, 'Madulla', '22256', 'Madulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1529, 'Mandaram Nuwara', '20744', 'Mandaram Nuwara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1530, 'Maskeliya', '22070', 'Maskeliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1531, 'Maswela', '20566', 'Maswela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1532, 'Maturata', '20748', 'Maturata', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1533, 'Mipanawa', '22254', 'Mipanawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1534, 'Mipilimana', '22214', 'Mipilimana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1535, 'Morahenagama', '22036', 'Morahenagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1536, 'Munwatta', '20752', 'Munwatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1537, 'Nayapana Janapadaya', '20568', 'Nayapana Janapadaya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1538, 'Nildandahinna', '22280', 'Nildandahinna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1539, 'Nissanka Uyana', '22075', 'Nissanka Uyana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1540, 'Norwood', '22058', 'Norwood', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1541, 'Nuwara Eliya', '22200', 'Nuwara Eliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1542, 'Padiyapelella', '20750', 'Padiyapelella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1543, 'Pallebowala', '20734', 'Pallebowala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1544, 'Panvila', '20830', 'Panvila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1545, 'Pitawala', '20682', 'Pitawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1546, 'Pundaluoya', '22120', 'Pundaluoya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1547, 'Ramboda', '20590', 'Ramboda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1548, 'Rikillagaskada', '20730', 'Rikillagaskada', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1549, 'Rozella', '22008', 'Rozella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1550, 'Rupaha', '22245', 'Rupaha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1551, 'Ruwaneliya', '22212', 'Ruwaneliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1552, 'Santhipura', '22202', 'Santhipura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1553, 'Talawakele', '22100', 'Talawakele', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1554, 'Tawalantenna', '20838', 'Tawalantenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1555, 'Teripeha', '22287', 'Teripeha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1556, 'Udamadura', '22285', 'Udamadura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1557, 'Udapussallawa', '22250', 'Udapussallawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1558, 'Uva Deegalla', '90062', 'Uva Deegalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1559, 'Uva Uduwara', '90061', 'Uva Uduwara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1560, 'Uvaparanagama', '90230', 'Uvaparanagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1561, 'Walapane', '22270', 'Walapane', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1562, 'Watawala', '22010', 'Watawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1563, 'Widulipura', '22032', 'Widulipura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1564, 'Wijebahukanda', '22018', 'Wijebahukanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1565, 'Attanakadawala', '51235', 'Attanakadawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1566, 'Bakamuna', '51250', 'Bakamuna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1567, 'Diyabeduma', '51225', 'Diyabeduma', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1568, 'Elahera', '51258', 'Elahera', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1569, 'Giritale', '51026', 'Giritale', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1570, 'Hingurakdamana', '51408', 'Hingurakdamana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1571, 'Hingurakgoda', '51400', 'Hingurakgoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1572, 'Jayanthipura', '51024', 'Jayanthipura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1573, 'Kalingaela', '51002', 'Kalingaela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1574, 'Lakshauyana', '51006', 'Lakshauyana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1575, 'Mankemi', '30442', 'Mankemi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1576, 'Minneriya', '51410', 'Minneriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1577, 'Onegama', '51004', 'Onegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1578, 'Orubendi Siyambalawa', '51256', 'Orubendi Siyambalawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1579, 'Palugasdamana', '51046', 'Palugasdamana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1580, 'Panichankemi', '30444', 'Panichankemi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1581, 'Polonnaruwa', '51000', 'Polonnaruwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1582, 'Talpotha', '51044', 'Talpotha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1583, 'Tambala', '51049', 'Tambala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1584, 'Unagalavehera', '51008', 'Unagalavehera', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1585, 'Wijayabapura', '51042', 'Wijayabapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1586, 'Adippala', '61012', 'Adippala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1587, 'Alutgama', '12080', 'Alutgama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1588, 'Alutwewa', '51014', 'Alutwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1589, 'Ambakandawila', '61024', 'Ambakandawila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1590, 'Anamaduwa', '61500', 'Anamaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1591, 'Andigama', '61508', 'Andigama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1592, 'Angunawila', '61264', 'Angunawila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1593, 'Attawilluwa', '61328', 'Attawilluwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1594, 'Bangadeniya', '61238', 'Bangadeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1595, 'Baranankattuwa', '61262', 'Baranankattuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1596, 'Battuluoya', '61246', 'Battuluoya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1597, 'Bujjampola', '61136', 'Bujjampola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1598, 'Chilaw', '61000', 'Chilaw', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1599, 'Dalukana', '51092', 'Dalukana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1600, 'Dankotuwa', '61130', 'Dankotuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1601, 'Dewagala', '51094', 'Dewagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1602, 'Dummalasuriya', '60260', 'Dummalasuriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1603, 'Dunkannawa', '61192', 'Dunkannawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1604, 'Eluwankulama', '61308', 'Eluwankulama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1605, 'Ettale', '61343', 'Ettale', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1606, 'Galamuna', '51416', 'Galamuna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1607, 'Galmuruwa', '61233', 'Galmuruwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1608, 'Hansayapalama', '51098', 'Hansayapalama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1609, 'Ihala Kottaramulla', '61154', 'Ihala Kottaramulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1610, 'Ilippadeniya', '61018', 'Ilippadeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1611, 'Inginimitiya', '61514', 'Inginimitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1612, 'Ismailpuram', '61302', 'Ismailpuram', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1613, 'Jayasiripura', '51246', 'Jayasiripura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1614, 'Kakkapalliya', '61236', 'Kakkapalliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1615, 'Kalkudah', '30410', 'Kalkudah', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1616, 'Kalladiya', '61534', 'Kalladiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1617, 'Kandakuliya', '61358', 'Kandakuliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1618, 'Karathivu', '61307', 'Karathivu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1619, 'Karawitagara', '61022', 'Karawitagara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1620, 'Karuwalagaswewa', '61314', 'Karuwalagaswewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1621, 'Katuneriya', '61180', 'Katuneriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1622, 'Koswatta', '61158', 'Koswatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1623, 'Kottantivu', '61252', 'Kottantivu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1624, 'Kottapitiya', '51244', 'Kottapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1625, 'Kottukachchiya', '61532', 'Kottukachchiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1626, 'Kumarakattuwa', '61032', 'Kumarakattuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1627, 'Kurinjanpitiya', '61356', 'Kurinjanpitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1628, 'Kuruketiyawa', '61516', 'Kuruketiyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1629, 'Lunuwila', '61150', 'Lunuwila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1630, 'Madampe', '61230', 'Madampe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1631, 'Madurankuliya', '61270', 'Madurankuliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1632, 'Mahakumbukkadawala', '61272', 'Mahakumbukkadawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1633, 'Mahauswewa', '61512', 'Mahauswewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1634, 'Mampitiya', '51090', 'Mampitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1635, 'Mampuri', '61341', 'Mampuri', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1636, 'Mangalaeliya', '61266', 'Mangalaeliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1637, 'Marawila', '61210', 'Marawila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1638, 'Mudalakkuliya', '61506', 'Mudalakkuliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1639, 'Mugunuwatawana', '61014', 'Mugunuwatawana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1640, 'Mukkutoduwawa', '61274', 'Mukkutoduwawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1641, 'Mundel', '61250', 'Mundel', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1642, 'Muttibendiwila', '61195', 'Muttibendiwila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1643, 'Nainamadama', '61120', 'Nainamadama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1644, 'Nalladarankattuwa', '61244', 'Nalladarankattuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1645, 'Nattandiya', '61190', 'Nattandiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1646, 'Nawagattegama', '61520', 'Nawagattegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1647, 'Nelumwewa', '51096', 'Nelumwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1648, 'Norachcholai', '61342', 'Norachcholai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1649, 'Pallama', '61040', 'Pallama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1650, 'Palliwasalturai', '61354', 'Palliwasalturai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1651, 'Panirendawa', '61234', 'Panirendawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1652, 'Parakramasamudraya', '51016', 'Parakramasamudraya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1653, 'Pothuwatawana', '61162', 'Pothuwatawana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1654, 'Puttalam', '61300', 'Puttalam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1655, 'Puttalam Cement Factory', '61326', 'Puttalam Cement Factory', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1656, 'Rajakadaluwa', '61242', 'Rajakadaluwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1657, 'Saliyawewa Junction', '61324', 'Saliyawewa Junction', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1658, 'Serukele', '61042', 'Serukele', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1659, 'Siyambalagashene', '61504', 'Siyambalagashene', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1660, 'Tabbowa', '61322', 'Tabbowa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1661, 'Talawila Church', '61344', 'Talawila Church', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1662, 'Toduwawa', '61224', 'Toduwawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1663, 'Udappuwa', '61004', 'Udappuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1664, 'Uridyawa', '61502', 'Uridyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1665, 'Vanathawilluwa', '61306', 'Vanathawilluwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1666, 'Waikkal', '61110', 'Waikkal', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1667, 'Watugahamulla', '61198', 'Watugahamulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1668, 'Wennappuwa', '61170', 'Wennappuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1669, 'Wijeyakatupotha', '61006', 'Wijeyakatupotha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1670, 'Wilpotha', '61008', 'Wilpotha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1671, 'Yodaela', '51422', 'Yodaela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1672, 'Yogiyana', '61144', 'Yogiyana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1673, 'Akarella', '70082', 'Akarella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1674, 'Amunumulla', '90204', 'Amunumulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1675, 'Atakalanpanna', '70294', 'Atakalanpanna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1676, 'Ayagama', '70024', 'Ayagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1677, 'Balangoda', '70100', 'Balangoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1678, 'Batatota', '70504', 'Batatota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1679, 'Beralapanathara', '81541', 'Beralapanathara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1680, 'Bogahakumbura', '90354', 'Bogahakumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1681, 'Bolthumbe', '70131', 'Bolthumbe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1682, 'Bomluwageaina', '70344', 'Bomluwageaina', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1683, 'Bowalagama', '82458', 'Bowalagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1684, 'Bulutota', '70346', 'Bulutota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1685, 'Dambuluwana', '70019', 'Dambuluwana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1686, 'Daugala', '70455', 'Daugala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1687, 'Dela', '70042', 'Dela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1688, 'Delwala', '70046', 'Delwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1689, 'Dodampe', '70017', 'Dodampe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1690, 'Doloswalakanda', '70404', 'Doloswalakanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1691, 'Dumbara Manana', '70495', 'Dumbara Manana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1692, 'Eheliyagoda', '70600', 'Eheliyagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1693, 'Ekamutugama', '70254', 'Ekamutugama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1694, 'Elapatha', '70032', 'Elapatha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1695, 'Ellagawa', '70492', 'Ellagawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1696, 'Ellaulla', '70552', 'Ellaulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1697, 'Ellawala', '70606', 'Ellawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1698, 'Embilipitiya', '70200', 'Embilipitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1699, 'Eratna', '70506', 'Eratna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1700, 'Erepola', '70602', 'Erepola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1701, 'Gabbela', '70156', 'Gabbela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1702, 'Gangeyaya', '70195', 'Gangeyaya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1703, 'Gawaragiriya', '70026', 'Gawaragiriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1704, 'Gillimale', '70002', 'Gillimale', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1705, 'Godakawela', '70160', 'Godakawela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1706, 'Gurubewilagama', '70136', 'Gurubewilagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1707, 'Halwinna', '70171', 'Halwinna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1708, 'Handagiriya', '70106', 'Handagiriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1709, 'Hatangala', '70105', 'Hatangala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1710, 'Hatarabage', '70108', 'Hatarabage', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1711, 'Hewanakumbura', '90358', 'Hewanakumbura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1712, 'Hidellana', '70012', 'Hidellana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1713, 'Hiramadagama', '70296', 'Hiramadagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1714, 'Horewelagoda', '82456', 'Horewelagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1715, 'Ittakanda', '70342', 'Ittakanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1716, 'Kahangama', '70016', 'Kahangama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1717, 'Kahawatta', '70150', 'Kahawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1718, 'Kalawana', '70450', 'Kalawana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1719, 'Kaltota', '70122', 'Kaltota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1720, 'Kalubululanda', '90352', 'Kalubululanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1721, 'Kananke Bazaar', '80136', 'Kananke Bazaar', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1722, 'Kandepuhulpola', '90356', 'Kandepuhulpola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1723, 'Karandana', '70488', 'Karandana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1724, 'Karangoda', '70018', 'Karangoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1725, 'Kella Junction', '70352', 'Kella Junction', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1726, 'Keppetipola', '90350', 'Keppetipola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1727, 'Kiriella', '70480', 'Kiriella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1728, 'Kiriibbanwewa', '70252', 'Kiriibbanwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1729, 'Kolambage Ara', '70180', 'Kolambage Ara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1730, 'Kolombugama', '70403', 'Kolombugama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1731, 'Kolonna', '70350', 'Kolonna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1732, 'Kudawa', '70005', 'Kudawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1733, 'Kuruwita', '70500', 'Kuruwita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1734, 'Lellopitiya', '70056', 'Lellopitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1735, 'Imaduwa', '80130', 'Imaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1736, 'Imbulpe', '70134', 'Imbulpe', '100.00', '5.00', '150.00', 0, NULL, NULL);
INSERT INTO `zones` (`id`, `zone_name`, `zip_code`, `zone_description`, `shipping_cost`, `weight_margin`, `minimum_cost`, `status`, `created_at`, `updated_at`) VALUES
(1737, 'Mahagama Colony', '70256', 'Mahagama Colony', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1738, 'Mahawalatenna', '70112', 'Mahawalatenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1739, 'Makandura', '70298', 'Makandura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1740, 'Malwala Junction', '70001', 'Malwala Junction', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1741, 'Malwatta', '32198', 'Malwatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1742, 'Matuwagalagama', '70482', 'Matuwagalagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1743, 'Medagalature', '70021', 'Medagalature', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1744, 'Meddekanda', '70127', 'Meddekanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1745, 'Minipura Dumbara', '70494', 'Minipura Dumbara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1746, 'Mitipola', '70604', 'Mitipola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1747, 'Moragala Kirillapone', '81532', 'Moragala Kirillapone', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1748, 'Morahela', '70129', 'Morahela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1749, 'Mulendiyawala', '70212', 'Mulendiyawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1750, 'Mulgama', '70117', 'Mulgama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1751, 'Nawalakanda', '70469', 'Nawalakanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1752, 'Nawinnapinnakanda', '70165', 'Nawinnapinnakanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1753, 'Niralagama', '70038', 'Niralagama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1754, 'Nivitigala', '70400', 'Nivitigala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1755, 'Omalpe', '70215', 'Omalpe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1756, 'Opanayaka', '70080', 'Opanayaka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1757, 'Padalangala', '70230', 'Padalangala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1758, 'Pallebedda', '70170', 'Pallebedda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1759, 'Pallekanda', '82454', 'Pallekanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1760, 'Pambagolla', '70133', 'Pambagolla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1761, 'Panamura', '70218', 'Panamura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1762, 'Panapola', '70461', 'Panapola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1763, 'Paragala', '81474', 'Paragala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1764, 'Parakaduwa', '70550', 'Parakaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1765, 'Pebotuwa', '70045', 'Pebotuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1766, 'Pelmadulla', '70070', 'Pelmadulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1767, 'Pinnawala', '70130', 'Pinnawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1768, 'Pothdeniya', '81538', 'Pothdeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1769, 'Rajawaka', '70116', 'Rajawaka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1770, 'Ranwala', '70162', 'Ranwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1771, 'Rassagala', '70135', 'Rassagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1772, 'Rathgama', '80260', 'Rathgama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1773, 'Ratna Hangamuwa', '70036', 'Ratna Hangamuwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1774, 'Ratnapura', '70000', 'Ratnapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1775, 'Sewanagala', '70250', 'Sewanagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1776, 'Sri Palabaddala', '70004', 'Sri Palabaddala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1777, 'Sudagala', '70502', 'Sudagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1778, 'Thalakolahinna', '70101', 'Thalakolahinna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1779, 'Thanjantenna', '70118', 'Thanjantenna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1780, 'Theppanawa', '70512', 'Theppanawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1781, 'Thunkama', '70205', 'Thunkama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1782, 'Udakarawita', '70044', 'Udakarawita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1783, 'Udaniriella', '70034', 'Udaniriella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1784, 'Udawalawe', '70190', 'Udawalawe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1785, 'Ullinduwawa', '70345', 'Ullinduwawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1786, 'Veddagala', '70459', 'Veddagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1787, 'Vijeriya', '70348', 'Vijeriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1788, 'Waleboda', '70138', 'Waleboda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1789, 'Watapotha', '70408', 'Watapotha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1790, 'Waturawa', '70456', 'Waturawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1791, 'Weligepola', '70104', 'Weligepola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1792, 'Welipathayaya', '70124', 'Welipathayaya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1793, 'Wikiliya', '70114', 'Wikiliya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1794, 'Agbopura', '31304', 'Agbopura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1795, 'Buckmigama', '31028', 'Buckmigama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1796, 'China Bay', '31050', 'China Bay', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1797, 'Dehiwatte', '31226', 'Dehiwatte', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1798, 'Echchilampattai', '31236', 'Echchilampattai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1799, 'Galmetiyawa', '31318', 'Galmetiyawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1800, 'Gomarankadawala', '31026', 'Gomarankadawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1801, 'Kaddaiparichchan', '31212', 'Kaddaiparichchan', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1802, 'Kallar', '30250', 'Kallar', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1803, 'Kanniya', '31032', 'Kanniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1804, 'Kantalai', '31300', 'Kantalai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1805, 'Kantalai Sugar Factory', '31306', 'Kantalai Sugar Factory', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1806, 'Kiliveddy', '31220', 'Kiliveddy', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1807, 'Kinniya', '31100', 'Kinniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1808, 'Kuchchaveli', '31014', 'Kuchchaveli', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1809, 'Kumburupiddy', '31012', 'Kumburupiddy', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1810, 'Kurinchakerny', '31112', 'Kurinchakerny', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1811, 'Lankapatuna', '31234', 'Lankapatuna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1812, 'Mahadivulwewa', '31036', 'Mahadivulwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1813, 'Maharugiramam', '31106', 'Maharugiramam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1814, 'Mallikativu', '31224', 'Mallikativu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1815, 'Mawadichenai', '31238', 'Mawadichenai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1816, 'Mullipothana', '31312', 'Mullipothana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1817, 'Mutur', '31200', 'Mutur', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1818, 'Neelapola', '31228', 'Neelapola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1819, 'Nilaveli', '31010', 'Nilaveli', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1820, 'Pankulam', '31034', 'Pankulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1821, 'Pulmoddai', '50567', 'Pulmoddai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1822, 'Rottawewa', '31038', 'Rottawewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1823, 'Sampaltivu', '31006', 'Sampaltivu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1824, 'Sampoor', '31216', 'Sampoor', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1825, 'Serunuwara', '31232', 'Serunuwara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1826, 'Seruwila', '31260', 'Seruwila', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1827, 'Sirajnagar', '31314', 'Sirajnagar', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1828, 'Somapura', '31222', 'Somapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1829, 'Tampalakamam', '31046', 'Tampalakamam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1830, 'Thuraineelavanai', '30254', 'Thuraineelavanai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1831, 'Tiriyayi', '31016', 'Tiriyayi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1832, 'Toppur', '31250', 'Toppur', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1833, 'Trincomalee', '31000', 'Trincomalee', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1834, 'Wanela', '31308', 'Wanela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1835, 'Vavuniya', '43000', 'Vavuniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1836, 'Colombo 1', '100', 'Colombo 1', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1837, 'Colombo 3', '300', 'Colombo 3', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1838, 'Colombo 4', '400', 'Colombo 4', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1839, 'Colombo 5', '500', 'Colombo 5', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1840, 'Colombo 7', '700', 'Colombo 7', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1841, 'Colombo 9', '900', 'Colombo 9', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1842, 'Colombo 10', '1000', 'Colombo 10', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1843, 'Colombo 11', '1100', 'Colombo 11', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1844, 'Colombo 12', '1200', 'Colombo 12', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1845, 'Colombo 14', '1400', 'Colombo 14', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1846, 'Colombo Secretariant', '110', 'Colombo Secretariant', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1847, 'Melle Street', '276', 'Melle Street', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1848, 'Rifel Street', '279', 'Rifel Street', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1849, 'Gem & Jewelry', '370', 'Gem & Jewelry', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1850, 'Torington Square', '376', 'Torington Square', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1851, 'National Museum of Colombo', '377', 'National Museum of Colombo', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1852, 'Colombo Labour Sec', '510', 'Colombo Labour Sec', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1853, 'Polhengoda', '576', 'Polhengoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1854, 'Anderson Plats', '577', 'Anderson Plats', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1855, 'Keppetipola Mawatha', '579', 'Keppetipola Mawatha', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1856, 'Narahenpita', '582', 'Narahenpita', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1857, 'Kirulapana', '677', 'Kirulapana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1858, 'University of Colombo', '710', 'University of Colombo', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1859, 'Colombo General Hospital', '779', 'Colombo General Hospital', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1860, 'Gothami Road', '876', 'Gothami Road', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1861, 'Wanathamulla', '877', 'Wanathamulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1862, 'Baseline Road', '878', 'Baseline Road', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1863, 'Kopiyawatta', '879', 'Kopiyawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1864, 'Maligawatta', '1070', 'Maligawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1865, 'Panchikawatte', '1078', 'Panchikawatte', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1866, 'Sarasavipaya', '1079', 'Sarasavipaya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1867, 'Maligakanda', '1081', 'Maligakanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1868, 'Wolfendal Street', '1178', 'Wolfendal Street', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1869, 'Pettah Bus Stand', '1179', 'Pettah Bus Stand', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1870, 'Colombo Kachcheri', '1181', 'Colombo Kachcheri', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1871, 'Armour Street', '1182', 'Armour Street', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1872, 'St. Anthony\'s', '1183', 'St. Anthony\'s', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1873, 'Miraniya Street', '1276', 'Miraniya Street', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1874, 'Wasala Road', '1377', 'Wasala Road', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1875, 'Nagalagam Street', '1476', 'Nagalagam Street', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1876, 'Aluth Mawatha Road', '1478', 'Aluth Mawatha Road', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1877, 'Mutwal South', '1479', 'Mutwal South', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1878, 'Beddagana', '10101', 'Beddagana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1879, 'Madiwela', '10102', 'Madiwela', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1880, 'Sri Perakumpura', '10103', 'Sri Perakumpura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1881, 'Mirihana North', '10104', 'Mirihana North', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1882, 'Nawala-Koswatte', '10105', 'Nawala-Koswatte', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1883, 'Nawala', '10106', 'Nawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1884, 'Rajagiriya', '10107', 'Rajagiriya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1885, 'Parliament of Sri Lanka', '10110', 'Parliament of Sri Lanka', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1886, 'Obeysekarapura', '10111', 'Obeysekarapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1887, 'Kalapaluwawa', '10112', 'Kalapaluwawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1888, 'Talangama North', '10113', 'Talangama North', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1889, 'Talangama South', '10114', 'Talangama South', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1890, 'Jayawardhenegama', '10117', 'Jayawardhenegama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1891, 'Isurupaya', '10130', 'Isurupaya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1892, 'Sethsiripaya', '10140', 'Sethsiripaya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1893, 'Malabe', '10155', 'Malabe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1894, 'Oruwala', '10201', 'Oruwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1895, 'Panagoda Army Camp', '10203', 'Panagoda Army Camp', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1896, 'Magammana-Dolekade', '10207', 'Magammana-Dolekade', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1897, 'Homagama Town', '10209', 'Homagama Town', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1898, 'Godagama Junction', '10211', 'Godagama Junction', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1899, 'Panagoda', '10213', 'Panagoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1900, 'Galawilawaththa', '10217', 'Galawilawaththa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1901, 'Kottawa', '10220', 'Kottawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1902, 'Pelenwatta', '10231', 'Pelenwatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1903, 'Arawwala West', '10233', 'Arawwala West', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1904, 'Kottawa North', '10235', 'Kottawa North', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1905, 'Rukmale-Pannipitiya', '10237', 'Rukmale-Pannipitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1906, 'Malapalla', '10239', 'Malapalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1907, 'Mattegoda', '10240', 'Mattegoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1908, 'Mirihana', '10251', 'Mirihana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1909, 'Udahamulla', '10252', 'Udahamulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1910, 'Kohuwala', '10255', 'Kohuwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1911, 'Pamunuwa-Patiragoda', '10281', 'Pamunuwa-Patiragoda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1912, 'Sudanapura', '10282', 'Sudanapura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1913, 'Nawinna', '10283', 'Nawinna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1914, 'Vidyodaya University', '10284', 'Vidyodaya University', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1915, 'Pepiliyana', '10291', 'Pepiliyana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1916, 'Katuwawala', '10292', 'Katuwawala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1917, 'Suwarapola', '10301', 'Suwarapola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1918, 'Gorakapitiya', '10303', 'Gorakapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1919, 'Makandana', '10305', 'Makandana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1920, 'Kesbewa', '10307', 'Kesbewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1921, 'Bokundara', '10309', 'Bokundara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1922, 'Kahathuduwa', '10321', 'Kahathuduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1923, 'Ratmalana North', '10372', 'Ratmalana North', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1924, 'Sirimal Uyana', '10373', 'Sirimal Uyana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1925, 'Ratmalana', '10390', 'Ratmalana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1926, 'Koralawella', '10401', 'Koralawella', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1927, 'Egodauyana North', '10402', 'Egodauyana North', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1928, 'Egodauyana South', '10403', 'Egodauyana South', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1929, 'Indibedda', '10404', 'Indibedda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1930, 'Moratumulla', '10405', 'Moratumulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1931, 'Rawathawatta', '10406', 'Rawathawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1932, 'Willorawatta', '10407', 'Willorawatta', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1933, 'Lunawa', '10408', 'Lunawa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1934, 'Laksapatiya', '10409', 'Laksapatiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1935, 'Angulana', '10411', 'Angulana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1936, 'Kaldemulla', '10413', 'Kaldemulla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1937, 'Katubedda', '10414', 'Katubedda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1938, 'Liyanwala', '10501', 'Liyanwala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1939, 'Poregedara', '10503', 'Poregedara', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1940, 'Dampe', '10505', 'Dampe', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1941, 'Malagala', '10507', 'Malagala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1942, 'Meepe Junction', '10509', 'Meepe Junction', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1943, 'Pinnawala-Waga', '10515', 'Pinnawala-Waga', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1944, 'Angampitiya', '10517', 'Angampitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1945, 'Arukwathupura', '10519', 'Arukwathupura', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1946, 'Kandanapitiya', '10523', 'Kandanapitiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1947, 'Gurulana', '10527', 'Gurulana', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1948, 'Udugamkanda', '10529', 'Udugamkanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1949, 'Wattala', '11300', 'Wattala', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1950, 'Bulnewa', '50172', 'Bulnewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1951, 'Kebithigollewa', '50550', 'Kebithigollewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1952, 'Madipola', '21156', 'Madipola', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1953, 'Karatota', '81308', 'Karatota', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1954, 'Gangulandeniya', '82506', 'Gangulandeniya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1955, 'Idalgashinna', '90167', 'Idalgashinna', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1956, 'Allaipiddi', '40048', 'Allaipiddi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1957, 'Allaveddi', '40120', 'Allaveddi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1958, 'Alvai', '40635', 'Alvai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1959, 'Anaikoddai', '40198', 'Anaikoddai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1960, 'Analaitivu', '40280', 'Analaitivu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1961, 'Araly', '40221', 'Araly', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1962, 'Atchuveli', '40150', 'Atchuveli', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1963, 'Chankanai', '40212', 'Chankanai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1964, 'Chavakachcheri', '40500', 'Chavakachcheri', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1965, 'Chullipuram', '40230', 'Chullipuram', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1966, 'Chundikuli', '40020', 'Chundikuli', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1967, 'Chunnakam', '40075', 'Chunnakam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1968, 'Delft West', '40378', 'Delft West', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1969, 'Delft', '40370', 'Delft', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1970, 'Eluvaitivu', '40275', 'Eluvaitivu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1971, 'Erialai', '40080', 'Erialai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1972, 'Ilavalai', '40108', 'Ilavalai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1973, 'Kankesanthurai', '40190', 'Kankesanthurai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1974, 'Karainagar', '40250', 'Karainagar', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1975, 'Karaveddi', '40520', 'Karaveddi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1976, 'Kayts', '40270', 'Kayts', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1977, 'Kodikamam', '40700', 'Kodikamam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1978, 'Kokuvil', '40060', 'Kokuvil', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1979, 'Kondavil', '40062', 'Kondavil', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1980, 'Kopay', '40170', 'Kopay', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1981, 'Kudatanai', '40620', 'Kudatanai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1982, 'Mallakam', '40142', 'Mallakam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1983, 'Mandaitivu', '40045', 'Mandaitivu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1984, 'Manipay', '40200', 'Manipay', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1985, 'Mathagal', '40110', 'Mathagal', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1986, 'Meesalai', '40510', 'Meesalai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1987, 'Mahiyampathy', 'NULL', 'Mahiyampathy', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1988, 'Mirusuvil', '40750', 'Mirusuvil', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1989, 'Nagarkovil', '40630', 'Nagarkovil', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1990, 'Nagendramadam', '40223', 'Nagendramadam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1991, 'Nainathivu', '40360', 'Nainathivu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1992, 'Neervely', '40165', 'Neervely', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1993, 'Pandaterippu', '40100', 'Pandaterippu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1994, 'Point Pedro', '40600', 'Point Pedro', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1995, 'Puloly', '40615', 'Puloly', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1996, 'Pungudutivu', '40330', 'Pungudutivu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1997, 'Puttur', '40158', 'Puttur', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1998, 'Sandilipay', '40098', 'Sandilipay', '100.00', '5.00', '150.00', 0, NULL, NULL),
(1999, 'Sangarathai', '40225', 'Sangarathai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2000, 'Sithankerny', '40229', 'Sithankerny', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2001, 'Sivankovilady', '40227', 'Sivankovilady', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2002, 'Thellippallai', '40130', 'Thellippallai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2003, 'Thondamanaru', '40545', 'Thondamanaru', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2004, 'Urumpirai', '40180', 'Urumpirai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2005, 'Vaddukoddai', '40220', 'Vaddukoddai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2006, 'Valvettithurai', '40540', 'Valvettithurai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2007, 'Varany', '40640', 'Varany', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2008, 'Vasavilan', '40145', 'Vasavilan', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2009, 'Velanai', '40300', 'Velanai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2010, 'Gurunagar', 'NULL', 'Gurunagar', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2011, 'Kaitadi', 'NULL', 'Kaitadi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2012, 'Nallur', 'NULL', 'Nallur', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2013, 'Thirunelvely', 'NULL', 'Thirunelvely', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2014, 'Vannarponnai', 'NULL', 'Vannarponnai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2015, 'Akkarayankulam', '42640', 'Akkarayankulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2016, 'Aliyawalai', '42565', 'Aliyawalai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2017, 'Chempiyanpattu', '42560', 'Chempiyanpattu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2018, 'Elephant Pass', '42510', 'Elephant Pass', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2019, 'Eluthumadduval', '42580', 'Eluthumadduval', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2020, 'Iranaitiv', '42630', 'Iranaitiv', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2021, 'Iyyakachchi', '42520', 'Iyyakachchi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2022, 'Kavutharimunai', '42608', 'Kavutharimunai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2023, 'Konavil', '42645', 'Konavil', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2024, 'Mulliyan', '42570', 'Mulliyan', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2025, 'Murasumoddai', '42505', 'Murasumoddai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2026, 'Pallavarayankaddu', '42615', 'Pallavarayankaddu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2027, 'Paranthan', '42500', 'Paranthan', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2028, 'Puliyampokkanai', '42509', 'Puliyampokkanai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2029, 'Punakari-Nallur', '42606', 'Punakari-Nallur', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2030, 'Ramanathapuram', '42408', 'Ramanathapuram', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2031, 'Sivapuram', '42618', 'Sivapuram', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2032, 'Skanthapuram', '42638', 'Skanthapuram', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2033, 'Thalaiyadi', '42563', 'Thalaiyadi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2034, 'Tharmapuram', '42512', 'Tharmapuram', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2035, 'Uruthirapuram', '42502', 'Uruthirapuram', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2036, 'Vaddakachchi', '42405', 'Vaddakachchi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2037, 'Vannerikkulam', '42635', 'Vannerikkulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2038, 'Veravil', '42620', 'Veravil', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2039, 'Vinayagapuram', '42625', 'Vinayagapuram', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2040, 'Ambalnagar', 'NULL', 'Ambalnagar', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2041, 'Cheddiyakurichchi', 'NULL', 'Cheddiyakurichchi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2042, 'Chundikulam', 'NULL', 'Chundikulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2043, 'Kalmadunagar', 'NULL', 'Kalmadunagar', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2044, 'Karadipokku', 'NULL', 'Karadipokku', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2045, 'Kilay', 'NULL', 'Kilay', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2046, 'Kunchuparanthan', 'NULL', 'Kunchuparanthan', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2047, 'Muhamalai', 'NULL', 'Muhamalai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2048, 'Pallai', '42550', 'Pallai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2049, 'Sivanagar', 'NULL', 'Sivanagar', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2050, 'Soranpattu', 'NULL', 'Soranpattu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2051, 'Thirunagar', 'NULL', 'Thirunagar', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2052, 'Thiruvaiaru', 'NULL', 'Thiruvaiaru', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2053, 'Alampil', '42005', 'Alampil', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2054, 'Karuppaddamurippu', '42220', 'Karuppaddamurippu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2055, 'Mankulam', '42300', 'Mankulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2056, 'Mullivaikkal', '42540', 'Mullivaikkal', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2057, 'Mulliyawalai', '42100', 'Mulliyawalai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2058, 'Muththaiyankaddukulam', '42210', 'Muththaiyankaddukulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2059, 'Naddankandal', '42308', 'Naddankandal', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2060, 'Oddusudan', '42200', 'Oddusudan', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2061, 'Puthukkudiyiruppu', '42530', 'Puthukkudiyiruppu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2062, 'Puthuvedduvan', '42330', 'Puthuvedduvan', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2063, 'Thunukkai', '42320', 'Thunukkai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2064, 'Udayarkaddu', '42518', 'Udayarkaddu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2065, 'Vavunakkulam', '42305', 'Vavunakkulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2066, 'Visvamadukulam', '42515', 'Visvamadukulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2067, 'Yogapuram', '42315', 'Yogapuram', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2068, 'Ampalavanpokkanai', 'NULL', 'Ampalavanpokkanai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2069, 'Ananthapuram', 'NULL', 'Ananthapuram', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2070, 'Ethawetunuwewa', '50584', 'Ethawetunuwewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2071, 'Kokkilai', 'NULL', 'Kokkilai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2072, 'Kokkuthuoduvai', 'NULL', 'Kokkuthuoduvai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2073, 'Kumulamunai', 'NULL', 'Kumulamunai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2074, 'Mullathivu', '42000', 'Mullathivu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2075, 'Murukandy', 'NULL', 'Murukandy', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2076, 'Welioya', '50586', 'Welioya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2077, 'Nedunkerny', '42250', 'Nedunkerny', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2078, 'Neriyakulam', '43300', 'Neriyakulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2079, 'Alagalla', 'NULL', 'Alagalla', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2080, 'Andiyapuliyankulam', 'NULL', 'Andiyapuliyankulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2081, 'Asikulam', 'NULL', 'Asikulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2082, 'Cheddikulam', 'NULL', 'Cheddikulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2083, 'Chemamadukulam', 'NULL', 'Chemamadukulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2084, 'Iranai lluppaikulam', 'NULL', 'Iranai lluppaikulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2085, 'Kalmadhu', 'NULL', 'Kalmadhu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2086, 'Iratta Periyakulama', 'NULL', 'Iratta Periyakulama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2087, 'Kanagarayankulam', 'NULL', 'Kanagarayankulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2088, 'Kannaddi', 'NULL', 'Kannaddi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2089, 'Kela Bogaswewa', 'NULL', 'Kela Bogaswewa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2090, 'Kovilkulam', 'NULL', 'Kovilkulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2091, 'Madukanda', 'NULL', 'Madukanda', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2092, 'Mahakachchakodiya', 'NULL', 'Mahakachchakodiya', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2093, 'Mamaduwa', 'NULL', 'Mamaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2094, 'Maradammaduwa', 'NULL', 'Maradammaduwa', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2095, 'Maraiyadithakulam', 'NULL', 'Maraiyadithakulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2096, 'Maruthodai', 'NULL', 'Maruthodai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2097, 'Mathavuvaithakulam', 'NULL', 'Mathavuvaithakulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2098, 'Nainamadu', 'NULL', 'Nainamadu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2099, 'Nelukkulam', 'NULL', 'Nelukkulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2100, 'Nochchimoddai', 'NULL', 'Nochchimoddai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2101, 'Omanthai', 'NULL', 'Omanthai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2102, 'Palamoddai', 'NULL', 'Palamoddai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2103, 'Pampaimadu', 'NULL', 'Pampaimadu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2104, 'Pavakkulama Unit 1', 'NULL', 'Pavakkulama Unit 1', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2105, 'Pavakkulama Unit 2', 'NULL', 'Pavakkulama Unit 2', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2106, 'Periyathambanai', 'NULL', 'Periyathambanai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2107, 'Periya Ulukkulama', 'NULL', 'Periya Ulukkulama', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2108, 'Poovarasankulam', 'NULL', 'Poovarasankulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2109, 'Puliyankulam', 'NULL', 'Puliyankulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2110, 'Sathirikulankulam', 'NULL', 'Sathirikulankulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2111, 'Sinnasippikulam', 'NULL', 'Sinnasippikulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2112, 'Thandikulam', 'NULL', 'Thandikulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2113, 'Vaarikkuttiyoor', 'NULL', 'Vaarikkuttiyoor', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2114, 'Aandankulam', 'NULL', 'Aandankulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2115, 'Adampan', 'NULL', 'Adampan', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2116, 'Arippu', 'NULL', 'Arippu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2117, 'Athimottai', 'NULL', 'Athimottai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2118, 'Chilavathurai', 'NULL', 'Chilavathurai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2119, 'Erukkalampiddy', 'NULL', 'Erukkalampiddy', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2120, 'Illuppaikadavai', 'NULL', 'Illuppaikadavai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2121, 'Karisal', 'NULL', 'Karisal', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2122, 'Kokkupadayan', 'NULL', 'Kokkupadayan', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2123, 'Madhu Church', 'NULL', 'Madhu Church', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2124, 'Madhu Road', 'NULL', 'Madhu Road', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2125, 'Marichchikaddi', 'NULL', 'Marichchikaddi', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2126, 'Mullikulam', 'NULL', 'Mullikulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2127, 'Murunkan', 'NULL', 'Murunkan', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2128, 'Nanattan', 'NULL', 'Nanattan', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2129, 'Palampiddy', 'NULL', 'Palampiddy', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2130, 'Pallimunai', 'NULL', 'Pallimunai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2131, 'Pandaraveli', 'NULL', 'Pandaraveli', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2132, 'Pappamoddai', 'NULL', 'Pappamoddai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2133, 'Parappankandal', 'NULL', 'Parappankandal', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2134, 'Parappukadanthan', 'NULL', 'Parappukadanthan', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2135, 'Periyakunchikulam', 'NULL', 'Periyakunchikulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2136, 'Periyamadhu', 'NULL', 'Periyamadhu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2137, 'Periyapandivirichchan', 'NULL', 'Periyapandivirichchan', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2138, 'Pesalai', 'NULL', 'Pesalai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2139, 'Potkerny', 'NULL', 'Potkerny', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2140, 'Puthuveli', 'NULL', 'Puthuveli', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2141, 'Sooriyakaddaikadhu', 'NULL', 'Sooriyakaddaikadhu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2142, 'Thalaimannar', 'NULL', 'Thalaimannar', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2143, 'Thalaimannar Pier', 'NULL', 'Thalaimannar Pier', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2144, 'Thalaimannar West', 'NULL', 'Thalaimannar West', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2145, 'Thalvupadu', 'NULL', 'Thalvupadu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2146, 'Tharapuram', 'NULL', 'Tharapuram', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2147, 'Thiruketheeswaram', 'NULL', 'Thiruketheeswaram', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2148, 'Uyilankulam', 'NULL', 'Uyilankulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2149, 'Uyirtharasankulam', 'NULL', 'Uyirtharasankulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2150, 'Vaddakandal', 'NULL', 'Vaddakandal', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2151, 'Vankalai', 'NULL', 'Vankalai', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2152, 'Vellankulam', 'NULL', 'Vellankulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2153, 'Veppankulam', 'NULL', 'Veppankulam', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2154, 'Vidataltivu', 'NULL', 'Vidataltivu', '100.00', '5.00', '150.00', 0, NULL, NULL),
(2155, 'Mabola', '11104', 'Mabola', '100.00', '5.00', '150.00', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `linked_products`
--
ALTER TABLE `linked_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measurement_units`
--
ALTER TABLE `measurement_units`
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
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status_histories`
--
ALTER TABLE `order_status_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_descriptions`
--
ALTER TABLE `page_descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_meta_data`
--
ALTER TABLE `page_meta_data`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_name_unique` (`product_name`),
  ADD UNIQUE KEY `products_product_code_unique` (`product_code`);

--
-- Indexes for table `product_has_categories`
--
ALTER TABLE `product_has_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_images_src_unique` (`src`);

--
-- Indexes for table `product_inventories`
--
ALTER TABLE `product_inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_inventory_histories`
--
ALTER TABLE `product_inventory_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotations`
--
ALTER TABLE `quotations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation_items`
--
ALTER TABLE `quotation_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar_settings`
--
ALTER TABLE `sidebar_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_templates`
--
ALTER TABLE `site_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_has_permissions_user_id_foreign` (`user_id`),
  ADD KEY `user_has_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `user_inquiries`
--
ALTER TABLE `user_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `child_categories`
--
ALTER TABLE `child_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comment_replies`
--
ALTER TABLE `comment_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `linked_products`
--
ALTER TABLE `linked_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `measurement_units`
--
ALTER TABLE `measurement_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_status_histories`
--
ALTER TABLE `order_status_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page_descriptions`
--
ALTER TABLE `page_descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page_meta_data`
--
ALTER TABLE `page_meta_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_has_categories`
--
ALTER TABLE `product_has_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_inventories`
--
ALTER TABLE `product_inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_inventory_histories`
--
ALTER TABLE `product_inventory_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quotations`
--
ALTER TABLE `quotations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `quotation_items`
--
ALTER TABLE `quotation_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sidebar_settings`
--
ALTER TABLE `sidebar_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `site_templates`
--
ALTER TABLE `site_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2510;

--
-- AUTO_INCREMENT for table `user_inquiries`
--
ALTER TABLE `user_inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2156;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD CONSTRAINT `user_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `user_has_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
