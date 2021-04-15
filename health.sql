-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 11:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$nlFKlPP1HMolxgHaUhxv1Ofm2FRDYLklZOT4sMEin.XC2guGt2ZHi', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogcategories`
--

CREATE TABLE `blogcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogcategories`
--

INSERT INTO `blogcategories` (`id`, `user_id`, `category_name`, `category_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'কভিড -১৯ সেফটি', 'test', 1, '2021-02-06 09:51:20', NULL),
(3, 9, 'মাতৃত্বকালীন যত্নে', 'test', 1, '2021-02-11 05:07:28', NULL),
(5, 9, 'খাদ্য ও পুষ্টি', 'খাদ্য ও পুষ্টি বিষয়ে', 1, '2021-02-23 06:53:47', NULL),
(6, 9, 'লাইফস্টাইল', 'লাইফস্টাইল', 1, '2021-02-23 06:55:35', NULL),
(7, 9, 'শরীরচর্চা', 'শরীরচর্চা', 1, '2021-02-23 06:56:40', NULL),
(8, 9, 'রোগতত্ত্ব', 'রোগতত্ত্ব', 1, '2021-02-23 06:57:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogcategory_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `view` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogcategory_id`, `user_id`, `post_title`, `short`, `post_body`, `image`, `status`, `view`, `created_at`, `updated_at`) VALUES
(3, 5, 9, 'ক্যালরি মেপে সকালের নাশতা', 'সকালের নাশতা বা ব্রেকফাস্ট সারা দিনের সুস্থতার জন্য গুরুত্বপূর্ণ। সকালে আমাদের মেটাবলিজম বা বিপাকক্রিয়ার শুরু, এ সময় সব ধরনের হরমোনও থাকে সক্রিয়।', '<p style=\"box-sizing: inherit; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">সকালের স্বাস্থ্যকর খাবার দিয়ে শুরু হবে দিনটা। সকালের নাশতা বাদ দিলে বা সময়মতো না খেলে সারা দিন ক্লান্ত লাগতে পারে। স্ট্যামিনা কমে যেতে পারে কাজের। কিন্তু ওদিকে আপনি হয়তো ডায়েট কন্ট্রোল করছেন, ক্যালরি মেপে খাচ্ছেন। তাহলে কেমন হওয়া উচিত আপনার স্বাস্থ্যকর নাশতা?</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">: যাঁরা ডায়েট করতে চান, তাঁদের উচিত হবে সকালের নাশতায় ২০০ থেকে ৩০০ ক্যালরি পরিমাণ খাবার গ্রহণ করা। এই খাবারে জটিল শর্করা ও আমিষ থাকতেই হবে। চর্বি বা তেল খুব কম পরিমাণে। সঙ্গে একটি তাজা ফল থাকা ভালো।</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">: বাড়িতে তৈরি রুটি এবং বাজারের গোটা শস্যের তৈরি ব্রাউন ব্রেড বা সিরিয়ালের চেয়ে পরোটা, নানরুটি বা সাদা পাউরুটিতে ক্যালরি ও চর্বির মাত্রা অনেক বেশি।</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">: সকালের নাশতায় খানিকটা আঁশ বা ফাইবার থাকলে কোষ্ঠকাঠিন্য দূর করা সহজ হবে। সকালের দিকেই কোষ্ঠ পরিষ্কার হবে।</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">স্বাস্থ্যকর নাশতা কেমন হতে পারে তার উদাহরণ</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">১</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">দুটি হাতে বেলা ছোট রুটি বা চাপাতি (প্রতিটি ৮০ ক্যালরি = ১৬০ ক্যালরি)</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">এক বাটি সবজি (১৫০ গ্রাম = ৮০ ক্যালরি)</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">অর্ধেক কলা (৬০ ক্যালরি)</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">২</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">১টা রুটি বা চাপাতি (৮০ ক্যালরি)</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">১টা ডিম (১৬০ ক্যালরি)</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">আধা বাটি ডাল (৮০ ক্যালরি)</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">৩</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">এক বোল পরিজ দুধ: ২১৭ ক্যালরি</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">৪</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">১ কাপ দুধ (১৫০ ক্যালরি)</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">২ স্লাইস ব্রাউন ব্রেড (১৫৫ ক্যালরি)</p>', 'frontend/img/blog/1692491046284168.jpg', 0, 0, '2021-02-23 07:00:41', '2021-02-23 07:03:41'),
(5, 7, 9, 'করোনাভাইরাস এড়িয়ে ব্যায়াম', 'শরীর সুস্থ-সবল রাখা, ওজন কমানো, রোগ প্রতিরোধ ক্ষমতা জোরদার করা ইত্যাদিসহ নিয়মিত শরীরচর্চায় আছে আরও অসংখ্য উপকারিতা।', '<p style=\"box-sizing: inherit; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\"><span style=\"box-sizing: inherit; font-weight: 700;\">করোনাভাইরাসের-কালে যে ব্যায়াম নিরাপদ</span></p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">ভারি ব্যায়াম বাদ দিতে বলা হলেও পুরোপুরি শরীরচর্চা বাদ দেওয়ার কথা কেউই বলছে না, বরং শারীরিক পরিশ্রমের মাঝে থাকার উৎসাহ দিচ্ছেন বিশেষজ্ঞরা।</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">হাঁটা, দৌড়ানো, উঠবস, বুকডন, ‘স্ট্রেচিং’, দড়িলাফ, ‘প্লাঙ্ক’, সাইকেল চালানো ইত্যাদি মৃদু পরিশ্রমের ব্যায়ামগুলো প্রতিদিন করলেই শরীর যথেষ্ট ফুরফুরে থাকবে।</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">ব্যায়ামাগারগুলো খুলেছে, সদস্যরা যাচ্ছেনও ব্যায়াম করতে। আপনিও যদি তাদের মধ্যে একজন হন, তবে মনে রাখতে হবে, আপনার নিরাপত্তা সম্পূর্ণ আপনার হাতে। ব্যায়ামাগার কতৃপক্ষ হয়ত কিছু ব্যবস্থা নেবেন, তবে তা কখনই পর্যাপ্ত হবে না।</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">তাই চেষ্টা করতে হবে যতটা সম্ভব অন্যদের কাছ থেকে দূরত্ব বজায় রাখার।</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">মাস্ক পরেই ব্যায়াম করা নিরাপদ হবে। সঙ্গে অবশ্যই হ্যান্ড স্যানিটাইজার রাখতে হবে। ব্যায়ামের সরঞ্জাম একাধিক মানুষ ব্যবহার করবে, তাই প্রত্যেকের উচিত হবে ব্যবহারের আগে ও পরে যতটুকু সম্ভব তা জীবাণুমুক্ত করা। ব্যায়ামের আগে ও পরে হাত সাবান দিয়ে ধুয়ে নিতে হবে।</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">ঘাম মোছার তোয়ালে পুরো সময়টা নিজের হাতে কিংবা ঘাড়ে রাখতে হবে, কোনো সরঞ্জামের ওপর রাখা যাবে না। অসুস্থ হলে ব্যায়ামাগারে যাবেন না।</p>', 'frontend/img/blog/1692495145413407.jpg', 0, 0, '2021-02-23 08:05:51', '2021-02-23 08:10:54'),
(6, 1, 9, 'শীতে ও করোনাকালে দীর্ঘস্থায়ী শ্বাসকষ্ট', 'ধীরে ধীরে শীত জাঁকিয়ে বসছে দেশজুড়ে। ২০২০ সালকে সারা বিশ্ব মনে রাখবে অতিমারির বছর হিসেবে। করোনা তথা কোভিড–১৯ ভাইরাসের বিরুদ্ধে মানবজাতির লড়াই এখনো শেষ হয়নি', '<p style=\"box-sizing: inherit; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">বাংলাদেশও করোনায় আক্রান্ত রোগীর সংখ্যা বাড়তে শুরু করেছে। কিন্তু মনে রাখতে হবে, সবার মনোযোগ করোনাভাইরাসের প্রতি থাকলেও মানবদেহের শ্বাসতন্ত্রের আরও নানাবিধ অসুখ রয়েছে, যেগুলো সারা বছরই কমবেশি থাকলেও শীতকালে প্রাদুর্ভাব ও তীব্রতা দুটিই বেড়ে যায়। ফুসফুসের দীর্ঘস্থায়ী শ্বাসকষ্টজনিত সমস্যা বা সিওপিডি এসবের অন্যতম। শ্বাসকষ্টজনিত আরেকটি সমস্যা অ্যাজমা বা হাঁপানির সঙ্গে সিওপিডির কিছুটা মিল থাকলেও এই রোগ আলাদাভাবে চিহ্নিত করা জরুরি। এই দুই রোগের কারণ জটিলতা এবং চিকিত্সাপদ্ধতির মধ্যে বেশ কিছু পার্থক্য রয়েছে।</p><h2 style=\"box-sizing: inherit; font-family: Raleway, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 16px; color: rgb(34, 34, 34);\">সিওপিডি কী?</h2><p style=\"box-sizing: inherit; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">সিওপিডি বা ক্রনিক অবস্ট্রাকটিভ পালমোনারি ডিজিজ হলো এক ধরনের শ্বাসকষ্টজনিত সমস্যা, যা সাধারণত চিরস্থায়ী এবং ক্রমবর্ধমান। এই রোগে আক্রান্ত ব্যক্তি যথাযথ চিকিত্সা না নিলে তাঁর ফুসফুসের কার্যক্ষমতা ধীরে ধীরে কমতে থাকে। তিনি শ্বাসকষ্টসহ নানা ধরনের শারীরিক জটিলতার সম্মুখীন হন। সিওপিডি হওয়ার পেছনে নানা কারণ থাকতে পারে, তবে ধূমপানই হলো প্রধান।</p><h2 style=\"box-sizing: inherit; font-family: Raleway, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 16px; color: rgb(34, 34, 34);\">কেন হয়?</h2><p style=\"box-sizing: inherit; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">সিওপিডি হওয়ার পেছনে সুনির্দিষ্ট একটি কারণ চিহ্নিত করা কঠিন। জন্মগত, অভ্যাসগত এবং পরিবেশগত কিছু বিষয় মিলেই একজন সিওপিডিতে আক্রান্ত হন। দীর্ঘমেয়াদি ধূমপান হলো সিওপিডির প্রধানতম কারণ। কিন্তু এটি ছাড়া আরও কিছু বিষয় সিওপিডিতে আক্রান্ত হওয়ার পেছনে ভূমিকা রাখতে পারে।</p><ul style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 26px; margin-left: 0px; padding: 0px 0px 0px 40px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\"><li style=\"box-sizing: inherit; list-style-type: disc;\">রান্নাসহ নানা কাজে জীবাশ্ম জ্বালানির ব্যবহার।</li><li style=\"box-sizing: inherit; list-style-type: disc;\">বায়ুদূষণ।</li><li style=\"box-sizing: inherit; list-style-type: disc;\">পেশাগত কারণে ধূলাবালি ও বায়ুদূষণের শিকার হওয়া।</li><li style=\"box-sizing: inherit; list-style-type: disc;\">ছোটবেলা থেকেই বারবার ফুসফুসের সংক্রামণে আক্রান্ত হওয়া।</li><li style=\"box-sizing: inherit; list-style-type: disc;\">অপুষ্টি এবং জন্মগতভাবে কম ওজনে জন্ম নেওয়া।</li></ul><h2 style=\"box-sizing: inherit; font-family: Raleway, sans-serif; line-height: 1.2; margin-top: 0px; margin-bottom: 16px; color: rgb(34, 34, 34);\">ব্রঙ্কাইটিস ও সিওপিডি কি এক?</h2><p style=\"box-sizing: inherit; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">প্রথাগতভাবে সিওপিডিকে দুই ভাগে ভাগ করা যায়।</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">১. ক্রনিক ব্রঙ্কাইটিস: অধিকাংশ দিন কাঁশির সঙ্গে ২ চামচ বা তার বেশি পরিমাণ কফ যায় এবং তা একনাগাড়ে ২ বছর বা তার বেশি সময় স্থায়ী হয়, তাহলে তাকে ক্রণিক ব্রঙ্কাইটিস নামে অবিহিত করা হয়।</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">২. এমফাইসিমা: এমফাইসিমা হলো শ্বাসনালি এবং ফুসফুসের কিছু গুণগত পরিবর্তন। যার ফলে রোগী দীর্ঘমেয়াদি শ্বাসকষ্টে ভুগে থাকে।</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">তাই বলা যায়, ব্রঙ্কাইটিস সিওপিডির একটি অংশ। বেশির ভাগ ক্ষেত্রেই সিওপিডি আক্রান্ত রোগী এই দুই ধরনের সমস্যা একসঙ্গে নিয়েই হাজির হয়।</p>', 'frontend/img/blog/1692495256108220.jpg', 0, 0, '2021-02-23 08:07:36', '2021-02-23 08:10:46'),
(7, 1, 9, 'করোনা ভাইরাস: উৎপত্তি, প্রতিকার ও সতর্কতা', 'চীনসহ বেশ কয়েকটি দেশে করোনা ভাইরাস সংক্রমণের ফলে আতঙ্ক তৈরি হয়েছে। এখন পর্যন্ত ১৭ জনের মৃত্যুর খবর পাওয়া গেছে। আক্রান্তের সংখ্যা পাঁচ শতাধিক। ইতোমধ্যে সতর্কতা জারি করেছে বিশ্ব স্বাস্থ্য সংস্থা।', '<p style=\"box-sizing: inherit; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\"><span style=\"box-sizing: inherit; font-weight: 700;\">করোনা ভাইরাস কী?</span></p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">করোনা ভাইরাসটির আরেক নাম ২০১৯-এনসিওভি। এটি এক ধরনের করোনা ভাইরাস। ভাইরাসটির অনেক রকম প্রজাতি আছে, কিন্তু এর মধ্যে মাত্র ৭টি মানুষের দেহে সংক্রমিত হতে পারে।</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">বিজ্ঞানীরা বলছেন, ভাইরাসটি হয়তো মানুষের দেহকোষের ভেতরে ইতোমধ্যে ‘মিউটেট করছে’, অর্থাৎ গঠন পরিবর্তন করে নতুন রূপ নিচ্ছে এবং সংখ্যাবৃদ্ধি করছে। ফলে এটি আরও বেশি বিপজ্জনক হয়ে উঠতে পারে। সোমবারই বিশেষজ্ঞরা নিশ্চিত করেছেন, এ ভাইরাস একজন মানুষের দেহ থেকে আরেকজন মানুষের দেহে ছড়াতে পারে।</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\"><span style=\"box-sizing: inherit; font-weight: 700;\">কতটা ভয়ংকর এই ভাইরাস</span></p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">এই ভাইরাস মানুষের ফুসফুসে সংক্রমণ ঘটায় এবং শ্বাসতন্ত্রের মাধ্যমেই এটি একজনের দেহ থেকে আরেকজনের দেহে ছড়ায়। সাধারণ ফ্লু বা ঠান্ডা লাগার মতো করেই এ ভাইরাস ছড়ায় হাঁচি-কাশির মাধ্যমে। তবে এর পরিণামে অরগ্যান ফেইলিওর বা দেহের বিভিন্ন প্রত্যঙ্গ বিকল হয়ে যাওয়া, নিউমোনিয়া এবং মৃত্যু ঘটারও আশঙ্কা রয়েছে। এখন পর্যন্ত আক্রান্তদের দুই শতাংশ মারা গেছেন, হয়তো আরও মৃত্যু হতে পারে। তাছাড়া এমন মৃত্যুও হয়ে থাকতে পারে যা চিহ্নিত হয়নি। তাই এ ভাইরাস ঠিক কতটা ভয়ংকর, তা এখনও স্পষ্ট নয়।</p><p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 26px; padding: 0px; color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 16px;\">এক দশক আগে সার্স (পুরো নাম সিভিয়ার অ্যাকিউট রেসপিরেটরি সিনড্রোম) নামে যে ভাইরাসের সংক্রমণে পৃথিবীতে ৮০০ লোকের মৃত্যু হয়েছিল সেটিও ছিল এক ধরনের করোনা ভাইরাস। এতে আক্রান্ত হয়েছিল ৮ হাজারের বেশি মানুষ। আর একটি ভাইরাসজনিত রোগ ছিল মিডল ইস্টার্ন রেসপিরেটরি সিনড্রোম বা মার্স। ২০১২ সালে এতে মৃত্যু হয় ৮৫৮ জনের।</p>', 'frontend/img/blog/1692495383532541.jpg', 0, 0, '2021-02-23 08:09:38', '2021-04-04 01:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `bloods`
--

CREATE TABLE `bloods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(191) NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bloods`
--

INSERT INTO `bloods` (`id`, `user_id`, `full_name`, `hospital_name`, `address`, `phone`, `blood_group`, `note`, `created_at`, `updated_at`) VALUES
(10, 7, 'Mahfuzar Rahman', 'Dhaka Medical College & Hospital', 'House- 1431-A, Snigdha Residential Area, Uposhohor', '01773841134', 'A+', 'test', '2021-04-04 20:53:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `user_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(10, 'category 4', 0, '2020-11-20 10:32:09', '2021-01-18 09:21:07'),
(18, 'category 3', 0, '2020-12-05 11:33:25', '2021-01-18 09:21:03'),
(22, 'category 2', 0, '2021-01-18 08:57:43', '2021-01-18 09:20:59'),
(23, 'ডায়াবেটিস', 1, '2021-01-18 09:11:13', '2021-01-18 10:36:06'),
(24, 'সৌন্দর্য চর্চায়', 1, '2021-01-18 09:11:53', '2021-01-18 09:14:57'),
(25, 'নারী স্বাস্থ্য', 1, '2021-01-18 09:12:04', '2021-01-18 09:14:40'),
(26, 'সাধারণ স্বাস্থ্য', 1, '2021-01-18 09:12:13', '2021-01-18 09:52:17'),
(27, 'মাতৃত্বকালীন যত্নে', 1, '2021-01-18 09:12:25', '2021-01-18 09:13:58'),
(28, 'কভিড -১৯ সেফটি', 1, '2021-01-18 09:12:35', '2021-01-18 09:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `consultants`
--

CREATE TABLE `consultants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultants`
--

INSERT INTO `consultants` (`id`, `name`, `email`, `password`, `phone_number`, `address`, `profession`, `specialist`, `institute`, `idn`, `reg`, `avatar`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Mahfuzar Rahman', 'consultant@gmail.com', '$2y$10$VCzwwzxK.CDcZIBC/NLZSuRYQdIq4ADjycBkUrFkcvHAcJdOEa4w.', '017738411343', 'Dhaka', 'Doctor', 'Medicin', 'Dhaka Medical College & Hospital', '458963589674', '4589634789596258', 'user.jpg', 0, '2021-01-31 09:01:01', '2021-04-08 03:42:43'),
(10, 'Dr. Hasnat', 'hasnat@gmail.com', '$2y$10$GLQ9f5f/m9E6VmfYE/upye3aYVvgp8usX1wAi1q7YzE8Eqj4hrh.2', '01773841134', 'Dhaka', 'Doctor', 'Child ', 'Dhaka Medical College & Hospital', '145698745896', '57896589347589', 'download (1).jpg', 0, '2021-02-06 10:10:27', '2021-04-08 03:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(200) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_code`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(2, 'add3', 30, 1, '2020-12-02 09:39:24', '2021-01-06 07:37:18');

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `consultant_id` int(11) NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `replay` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_seen` tinyint(4) DEFAULT NULL,
  `docs_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `consultant_id`, `question`, `replay`, `is_seen`, `docs_file`, `redirect_link`, `created_at`, `updated_at`) VALUES
(26, 7, 9, 'করোনাভাইরাস প্রতিরোধে আমাদের করনীয় কি ?', '<h5 style=\"margin-top: 0px; margin-bottom: 0.5rem; line-height: 1.2; font-size: 1.125rem; color: rgb(33, 37, 41); font-family: Nunito, sans-serif;\"><p class=\"MsoNormal\" style=\"margin-bottom: 1rem; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 10pt;\">বিশ্ব</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">স্বাস্থ্য</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">সংস্থা</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ও</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">সরকারের</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">রোগতত্ত্ব</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">,&nbsp;</span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">রোগনিয়ন্ত্রণ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ও</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">গবেষণা</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ইনস্টিটিউট</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">&nbsp;(</span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">আইইডিসিআর</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">) ,</span></p><p class=\"MsoNormal\" style=\"margin-top: 0px; margin-bottom: 1rem; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">এ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">বিষয়ে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">মানুষকে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">সচেতন</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">করতে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">কিছু</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">উপদেশ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">দিচ্ছে।</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">আসুন</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">,&nbsp;</span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">জেনে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">নেওয়া</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">যাক।</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top: 0px; margin-bottom: 1rem; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-style: italic;\"><span style=\"font-size: 10pt;\">১।</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">নিয়মিত</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">এবং</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ভালো</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">করে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">বারবার</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">হাত</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ধোবেন</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">&nbsp;(</span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">অন্তত</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">২০</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">সেকেন্ড</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">যাবৎ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">)<o:p></o:p></span></span></p><p class=\"MsoNormal\" style=\"margin-top: 0px; margin-bottom: 1rem; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-style: italic;\"><span style=\"font-size: 10pt;\">২।</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ইতিমধ্যে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">আক্রান্ত</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">এমন</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ব্যক্তিদের</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">সংস্পর্শ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">এড়িয়ে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">চলুন।</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">অসুস্থ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">পশুপাখি</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">থেকে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">দূরে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">থাকুন।</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"><o:p></o:p></span></span></p><p class=\"MsoNormal\" style=\"margin-top: 0px; margin-bottom: 1rem; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-style: italic;\"><span style=\"font-size: 10pt;\">৩।</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">অপরিষ্কার</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">হাত</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">দিয়ে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">কখনো</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">নাক</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">–</span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">মুখ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">–</span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">চোখ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">স্পর্শ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">করবেন</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">না।</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"><o:p></o:p></span></span></p><p class=\"MsoNormal\" style=\"margin-top: 0px; margin-bottom: 1rem; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-style: italic;\"><span style=\"font-size: 10pt;\">৪।</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">কাশি</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">বা</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">হাঁচি</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">দেওয়ার</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">সময়</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">নাক</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">,&nbsp;</span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">মুখ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">রুমাল</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">বা</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">টিস্যু</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">,&nbsp;</span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">কনুই</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">দিয়ে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ঢাকুন।</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">টিস্যুটি</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ঠিক</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">জায়গায়</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ফেলুন।</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"><o:p></o:p></span></span></p><p class=\"MsoNormal\" style=\"margin-top: 0px; margin-bottom: 1rem; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-style: italic;\"><span style=\"font-size: 10pt;\">৫।</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">অসুস্থ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">হলে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ঘরে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">থাকুন</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">,&nbsp;</span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">বাইরে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">যাওয়া</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">অত্যাবশ্যক</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">হলে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">নাক</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">-</span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">মুখ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ঢাকার</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">জন্য</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">মাস্ক</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ব্যবহার</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">করুন।</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"><o:p></o:p></span></span></p><p class=\"MsoNormal\" style=\"margin-top: 0px; margin-bottom: 1rem; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-style: italic;\"><span style=\"font-size: 10pt;\">৬।</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">কাঁচা</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">মাছ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">–</span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">মাংস</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">আর</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">রান্না</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">করা</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">খাবারের</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">জন্য</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">আলাদা</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">চপিং</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">বোর্ড</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">,&nbsp;</span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ছুরি</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ব্যবহার</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">করুন</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"><o:p></o:p></span></span></p><p class=\"MsoNormal\" style=\"margin-top: 0px; margin-bottom: 1rem; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-style: italic;\"><span style=\"font-size: 10pt;\">৭।</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">জরুরি</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">প্রয়োজন</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ছাড়া</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">বিদেশভ্রমণ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">করা</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">থেকে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">বিরত</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">থাকুন</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">এবং</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">অন্য</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">দেশ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">থেকে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">প্রয়োজন</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ছাড়া</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">বাংলাদেশ</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">ভ্রমণে</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">নিরুৎসাহিত</span><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\"></span><span style=\"font-size: 10pt; font-family: &quot;Nirmala UI&quot;, sans-serif;\">করুন</span></span></p></h5>', 1, NULL, 'http://localhost:8000/consultant/inbox', '2021-04-04 12:28:54', '2021-04-04 12:33:42'),
(29, 7, 9, 'Massage send by user', NULL, 1, NULL, 'http://localhost:8000/consultant/inbox', '2021-04-08 03:44:41', '2021-04-08 03:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2019_08_19_000000_create_failed_jobs_table', 1),
(37, '2020_11_13_142649_create_admins_table', 1),
(38, '2020_11_13_143734_create_consultants_table', 1),
(39, '2020_11_15_180212_create_categories_table', 1),
(41, '2020_11_22_191547_create_products_table', 2),
(42, '2020_12_02_151352_create_coupons_table', 3),
(43, '2020_12_03_133940_create_carts_table', 4),
(50, '2020_12_29_145837_create_orders_table', 5),
(51, '2020_12_29_150111_create_order_items_table', 5),
(52, '2020_12_29_150229_create_shippings_table', 5),
(53, '2021_01_08_145124_create_consultants_table', 6),
(56, '2021_01_23_151344_create_bloods_table', 7),
(60, '2021_02_06_144559_create_blogcategories_table', 8),
(71, '2021_02_11_080912_create_blogs_table', 9),
(72, '2021_02_26_101855_create_messages_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mahfuzar18@gmail.com', '$2y$10$3i7U33FZsSvjwxHcizxdHeHDjQ0bulN82Au2sb1n5iP2EtkNN8w9K', '2020-12-02 12:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_slug`, `product_code`, `product_quantity`, `price`, `short_description`, `description`, `image_1`, `image_2`, `image_3`, `status`, `created_at`, `updated_at`) VALUES
(11, 28, 'Infrared  Thermometer', 'infrared  thermometer', 'IT-1', '20', 2300, '<table style=\"width: 419px; table-layout: fixed; word-break: break-word; line-height: 21px; color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif; background-color: rgb(255, 255, 255);\"><tbody><tr><th width=\"160\" class=\"th-label\" style=\"margin: 0px; padding-right: 20px; padding-bottom: 15px; font-weight: 500; word-break: break-word; color: rgb(136, 136, 136); vertical-align: top;\">Usage:</th><td style=\"margin: 0px; padding-bottom: 15px; color: rgb(34, 34, 34); vertical-align: top; word-break: keep-all; overflow-wrap: break-word;\">Industrial</td></tr><tr><th width=\"160\" class=\"th-label\" style=\"margin: 0px; padding-right: 20px; padding-bottom: 15px; font-weight: 500; word-break: break-word; color: rgb(136, 136, 136); vertical-align: top;\">Display:</th><td style=\"margin: 0px; padding-bottom: 15px; color: rgb(34, 34, 34); vertical-align: top; word-break: keep-all; overflow-wrap: break-word;\">Digital</td></tr><tr><th width=\"160\" class=\"th-label\" style=\"margin: 0px; padding-right: 20px; padding-bottom: 15px; font-weight: 500; word-break: break-word; color: rgb(136, 136, 136); vertical-align: top;\">Material:</th><td style=\"margin: 0px; padding-bottom: 15px; color: rgb(34, 34, 34); vertical-align: top; word-break: keep-all; overflow-wrap: break-word;\">Optical Measurement</td></tr><tr><th width=\"160\" class=\"th-label\" style=\"margin: 0px; padding-right: 20px; padding-bottom: 15px; font-weight: 500; word-break: break-word; color: rgb(136, 136, 136); vertical-align: top;\">Hygrometer Type:</th><td style=\"margin: 0px; padding-bottom: 15px; color: rgb(34, 34, 34); vertical-align: top; word-break: keep-all; overflow-wrap: break-word;\">Lithium Chloride Hygrometer</td></tr></tbody></table>', '<strong style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\">Refrigeration digital thermometer TPM-10:&nbsp;</strong><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\"><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\">FUNCTION FEATURES:&nbsp;</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\">LCD show, insert design panel, measuring temperature at one site, two button batteries can be used for a&nbsp;long time.&nbsp;</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\">Power supply: DC1.5V AG13 or LR44</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\">Installing size: 46.2*26.7mm</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\">Resolution: -50ºC-- +70ºC(-58ºF-- +158ºF)</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\">Distinguishing: 0.1ºC</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\">Accuracy: ±1ºC(±2ºF)can be choice C/F function, Button realize</span><br style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\"><span style=\"color: rgb(34, 34, 34); font-family: Roboto, Arial, &quot;Microsoft YaHei&quot;, sans-serif;\">The color of case can be choice black or white</span>', 'frontend/img/product/1689238954675297.jpg', 'frontend/img/product/1689238955492190.jpg', 'frontend/img/product/1689238955559516.jpg', 1, '2021-01-18 09:30:06', NULL),
(12, 28, 'Surgical Mask Box', 'surgical mask box', 'SMB-1', '50', 200, '<span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Quantity: Each Box Contains 50 Pcs Mask</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Material: Non-woven Fabric</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Value Addition: 3 Layers Anti-Virus Mask</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">1st Layer- Non-woven: Effectively Block Visible Object Such as Droplets.&nbsp;</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">2nd Layer- Spunbond Non-woven: Filter Non-oily Particles in the Air.</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">3rd Layer- Superfine Soft Fabric: Absorb Hot Air Exhaled from the Body, Leaving Skin Dry &amp; Comfortable.&nbsp;</span>', '<span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Function: Anti-Virus&nbsp;</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Style: Ear loop</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Application: Personal Care</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Filter Rating: &gt;=95%</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Applicable People: All</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Dimension: 17.5 cm X 9.5 cm X 0.5 cm&nbsp;</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Measurement Unit: Cm</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Place of Origin: Bangladesh&nbsp;&nbsp;</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Usage: Personal Respiratory Protection. Suitable for Home, Indoor and Outdoor Use.&nbsp;</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Caution: Non-Sterile. Single Use Only.</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\"><span style=\"font-family: &quot;Noto Sans HK&quot;, sans-serif; background-color: rgb(245, 245, 245);\">Features: Anti-Virus, Bacterial Filtration Efficiency (BFE) 95%, Fine Material, Anti Dust, Comfortable &amp; Breathable, Adjustable Nose Bar.</span>', 'frontend/img/product/1689239214441498.jpg', 'frontend/img/product/1689239214507398.jpg', 'frontend/img/product/1689239214541017.jpg', 1, '2021-01-18 09:34:13', '2021-01-18 09:53:38'),
(13, 26, 'SMC ORSaline N', 'smc orsaline n', 'SMC-1', '20', 100, '<span class=\"text-sm text-gray-600 uppercase \" style=\"border: 0px solid rgb(224, 224, 224); font-family: &quot;Uni Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 0.875rem; --text-opacity:1; color: rgba(117,117,117,var(--text-opacity)); text-transform: uppercase; outline-style: initial !important; outline-width: 0px !important;\">BRAND :&nbsp;</span><span class=\"text-sm font-semibold text-gray-500 cursor-pointer\" style=\"border: 0px solid rgb(224, 224, 224); font-family: &quot;Uni Neue&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; cursor: pointer; font-weight: 600; font-size: 0.875rem; --text-opacity:1; color: rgba(158,158,158,var(--text-opacity)); outline-style: initial !important; outline-width: 0px !important;\"><a class=\"hover:underline\" href=\"https://evaly.com.bd/brands/social-marketing-company-smc-28f2c046a\" style=\"border: 0px solid rgb(224, 224, 224); color: inherit; text-decoration: inherit; outline-style: initial !important; outline-width: 0px !important;\">Social Marketing Company (SMC)</a>&nbsp; |&nbsp;<a class=\"hover:underline\" href=\"https://evaly.com.bd/brands/social-marketing-company-smc-28f2c046a?category=medicines-9d4b7b715\" style=\"border: 0px solid rgb(224, 224, 224); color: inherit; text-decoration: inherit; outline-style: initial !important; outline-width: 0px !important;\">&nbsp;More Medicines from Social Marketing Company (SMC)</a></span>', '<span style=\"color: rgb(65, 65, 65); font-family: poppinsregular; text-align: justify;\">SMC’s ORSaline-N is the number one choice in diarrhea and dehydration management and is the trusted brand available in every corner of Bangladesh. The market for ORS is being driven by growth in two areas: treatment of dehydration caused by diarrhea and dehydration caused by excessive sweating.</span>', 'frontend/img/product/1689239924276547.jpg', 'frontend/img/product/1689239924439149.jpg', 'frontend/img/product/1689239924849706.jpg', 1, '2021-01-18 09:45:30', '2021-01-18 09:53:22'),
(14, 26, 'Napa Syrup', 'napa syrup', 'NS-1', '20', 35, '<span style=\"color: rgb(102, 102, 102); font-family: &quot;Work Sans&quot;, Arial, sans-serif;\">Generic name :Paracetamol 120 mg/5 ml Type : Oral Suspension 1 Unit= 1 bottle 60 ml Beximco Pharmaceuticals Ltd.</span>', '<div style=\"font-family: &quot;Work Sans&quot;, Arial, sans-serif; font-size: 13px; text-align: justify;\"><div class=\"ac-body\"><div><div id=\"interaction\"><h4 class=\"ac-header\" style=\"font-family: inherit; line-height: 1.1; color: inherit;\">Interaction</h4></div><div class=\"ac-body\">Patients who have taken barbiturates, tricyclic antidepressants and alcohol may show diminished ability to metabolise large doses of Paracetamol. Alcohol can increase the hepatotoxicity of Paracetamol overdosage. Chronic ingestion of anticonvulsants or oral steroid contraceptives induce liver enzymes and may prevent attainment of therapeutic Paracetamol levels by increasing first-pass metabolism or clearance.</div></div><div><div id=\"contraindications\"><h4 class=\"ac-header\" style=\"font-family: inherit; line-height: 1.1; color: inherit;\">Contraindications</h4></div><div class=\"ac-body\">It is contraindicated in known hypersensitivity to Paracetamol.<br><div><div id=\"side_effects\"><h4 class=\"ac-header\" style=\"font-family: inherit; line-height: 1.1; color: inherit;\">Side Effects</h4></div><div class=\"ac-body\">Side effects of paracetamol are usually mild, though haematological reactions including thrombocytopenia, leucopenia, pancytopenia, neutropenia, and agranulocytosis have been reported. Pancreatitis, skin rashes, and other allergic reactions occur occasionally.</div></div><div><div id=\"pregnancy_cat\"><h4 class=\"ac-header\" style=\"font-family: inherit; line-height: 1.1; color: inherit;\">Pregnancy &amp; Lactation</h4></div><div class=\"ac-body\">Pregnancy category B according to USFDA. This drug should be used during pregnancy only if clearly needed</div></div><div><div id=\"precautions\"><h4 class=\"ac-header\" style=\"font-family: inherit; line-height: 1.1; color: inherit;\">Precautions &amp; Warnings</h4></div><div class=\"ac-body\">Paracetamol should be given with caution to patients with impaired kidney or liver function. Paracetamol should be given with care to patients taking other drugs that affect the liver.</div></div><div><div id=\"overdose_effects\"><h4 class=\"ac-header\" style=\"font-family: inherit; line-height: 1.1; color: inherit;\">Overdose Effects</h4></div><div class=\"ac-body\">Symptoms of Paracetamol overdose in the first 24 hours are pallor, nausea, vomiting, anorexia and abdominal pain. Liver damage may become apparent 12-48 hours after ingestion. Abnormalities of glucose metabolism and metabolic acidosis may occur.</div></div><div><div id=\"storage_conditions\"><h4 class=\"ac-header\" style=\"font-family: inherit; line-height: 1.1; color: inherit;\">Storage Conditions</h4></div><div class=\"ac-body\">Keep in a dry place away from light and heat. Keep out of the reach of children.<br></div></div></div></div></div></div>', 'frontend/img/product/1689240325350191.jpeg', 'frontend/img/product/1689240325398691.jpg', 'frontend/img/product/1689240325539053.jpg', 1, '2021-01-18 09:51:52', NULL),
(15, 25, 'Freedom Sanitary Napkin', 'freedom sanitary napkin', 'FSN-1', '20', 200, '<strong style=\"color: rgb(102, 102, 102); font-family: Lato; font-size: 13px;\">Title:&nbsp;&nbsp;</strong><span style=\"color: rgb(102, 102, 102); font-family: Lato; font-size: 13px; font-weight: 700;\">Freedom Sanitary Napkin</span><br style=\"color: rgb(102, 102, 102); font-family: Lato; font-size: 13px;\"><strong style=\"color: rgb(102, 102, 102); font-family: Lato; font-size: 13px;\">Quality: Super Dry</strong><br style=\"color: rgb(102, 102, 102); font-family: Lato; font-size: 13px;\"><strong style=\"color: rgb(102, 102, 102); font-family: Lato; font-size: 13px;\">Pad Quantity: 16 pads</strong>', '<span style=\"color: rgb(85, 85, 85); font-family: Lato;\">It has the Super Absorbent Polymer (SAP) that absorbs large volume of fluid instantly, converts fluid into GEL; locks inside the pad and ultimately ensure maximum dry-feel and protection.</span>', 'frontend/img/product/1689240970314902.jpg', 'frontend/img/product/1689240970427176.jpg', 'frontend/img/product/1689240970555286.jpg', 1, '2021-01-18 10:02:08', NULL),
(20, 24, 'Jovees  Face Wash', 'jovees  face wash', 'JFW-1', '20', 200, '<table class=\"a-normal a-spacing-micro\" style=\"width: 544px; color: rgb(15, 17, 17); font-family: Arial, sans-serif; background-color: rgb(255, 255, 255); margin-bottom: 4px !important;\"><tbody><tr class=\"a-spacing-small\" style=\"margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"vertical-align: top; padding-right: 3px; padding-bottom: 3px; margin-right: 0px; width: 130px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"font-weight: 700 !important; line-height: 20px !important;\">Scent</span></td><td class=\"a-span9\" style=\"vertical-align: top; padding-bottom: 3px; padding-left: 3px; margin-right: 0px; width: 414px; float: none !important;\"><span class=\"a-size-base\" style=\"line-height: 20px !important;\">Natural</span></td></tr><tr class=\"a-spacing-small\" style=\"margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"vertical-align: top; padding-top: 3px; padding-right: 3px; padding-bottom: 3px; margin-right: 0px; width: 130px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"font-weight: 700 !important; line-height: 20px !important;\">Brand</span></td><td class=\"a-span9\" style=\"vertical-align: top; padding-top: 3px; padding-bottom: 3px; padding-left: 3px; margin-right: 0px; width: 414px; float: none !important;\"><span class=\"a-size-base\" style=\"line-height: 20px !important;\">JOVEES</span></td></tr><tr class=\"a-spacing-small\" style=\"margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"vertical-align: top; padding-top: 3px; padding-right: 3px; padding-bottom: 3px; margin-right: 0px; width: 130px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"font-weight: 700 !important; line-height: 20px !important;\">Skin Type</span></td><td class=\"a-span9\" style=\"vertical-align: top; padding-top: 3px; padding-bottom: 3px; padding-left: 3px; margin-right: 0px; width: 414px; float: none !important;\"><span class=\"a-size-base\" style=\"line-height: 20px !important;\">Oily</span></td></tr><tr class=\"a-spacing-small\" style=\"margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"vertical-align: top; padding-top: 3px; padding-right: 3px; padding-bottom: 3px; margin-right: 0px; width: 130px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"font-weight: 700 !important; line-height: 20px !important;\">Target gender</span></td><td class=\"a-span9\" style=\"vertical-align: top; padding-top: 3px; padding-bottom: 3px; padding-left: 3px; margin-right: 0px; width: 414px; float: none !important;\"><span class=\"a-size-base\" style=\"line-height: 20px !important;\">Female</span></td></tr><tr class=\"a-spacing-small\" style=\"margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"vertical-align: top; padding-top: 3px; padding-right: 3px; padding-bottom: 3px; margin-right: 0px; width: 130px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"font-weight: 700 !important; line-height: 20px !important;\">Item Form</span></td><td class=\"a-span9\" style=\"vertical-align: top; padding-top: 3px; padding-bottom: 3px; padding-left: 3px; margin-right: 0px; width: 414px; float: none !important;\"><span class=\"a-size-base\" style=\"line-height: 20px !important;\">Gel</span></td></tr><tr class=\"a-spacing-small\" style=\"margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"vertical-align: top; padding-top: 3px; padding-right: 3px; padding-bottom: 3px; margin-right: 0px; width: 130px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"font-weight: 700 !important; line-height: 20px !important;\">Item Weight</span></td><td class=\"a-span9\" style=\"vertical-align: top; padding-top: 3px; padding-bottom: 3px; padding-left: 3px; margin-right: 0px; width: 414px; float: none !important;\"><span class=\"a-size-base\" style=\"line-height: 20px !important;\">120 Grams</span></td></tr><tr class=\"a-spacing-small\" style=\"margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"vertical-align: top; padding-top: 3px; padding-right: 3px; padding-bottom: 3px; margin-right: 0px; width: 130px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"font-weight: 700 !important; line-height: 20px !important;\">Item Dimensions LxWxH</span></td><td class=\"a-span9\" style=\"vertical-align: top; padding-top: 3px; padding-bottom: 3px; padding-left: 3px; margin-right: 0px; width: 414px; float: none !important;\"><span class=\"a-size-base\" style=\"line-height: 20px !important;\">41.1 x 11.2 x 10.1 Centimeters</span></td></tr><tr class=\"a-spacing-small\" style=\"margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"vertical-align: top; padding-top: 3px; padding-right: 3px; margin-right: 0px; width: 130px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"font-weight: 700 !important; line-height: 20px !important;\">Additional Item Information</span></td><td class=\"a-span9\" style=\"vertical-align: top; padding-top: 3px; padding-left: 3px; margin-right: 0px; width: 414px; float: none !important;\"><span class=\"a-size-base\" style=\"line-height: 20px !important;\">Natural</span></td></tr></tbody></table>', '<h1 class=\"a-size-base-plus a-text-bold\" style=\"padding: 0px 0px 4px; margin-top: 0px; margin-bottom: 0px; text-rendering: optimizelegibility; color: rgb(15, 17, 17); font-family: Arial, sans-serif; font-weight: 700 !important; font-size: 16px !important; line-height: 24px !important;\">About this item</h1><ul class=\"a-unordered-list a-vertical a-spacing-mini\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(17, 17, 17); padding: 0px; font-family: Arial, sans-serif;\"><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">This unique face wash developed to help mitigate pimples, help prevent new ones from forming through its natural therapeutic properties</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Moisten face. Squeeze out a small amount on your palm. Massage gently on the face and neck. Rinse well and pat dry</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Recommended For: Oily Skin</span></li></ul>', 'frontend/img/product/1689242862731546.jpg', 'frontend/img/product/1689242862810352.jpg', 'frontend/img/product/1689242862842167.jpg', 1, '2021-01-18 10:32:12', NULL),
(21, 23, 'Diabetes Testing Kit', 'diabetes testing kit', 'DTK-1', '15', 4500, '<h6 style=\"padding: 0px; margin-top: 0px; text-rendering: optimizelegibility; color: rgb(15, 17, 17); font-family: Arial, sans-serif; margin-bottom: 0px !important; font-size: 24px !important; line-height: 1.2;\"><span id=\"productTitle\" class=\"a-size-large product-title-word-break\" style=\"text-rendering: optimizelegibility; word-break: break-word; line-height: 32px !important;\">Diabetes Testing Kit, 50 Lancets, 50 Glucometer Strips, 1 Blood Glucose Meter, 1 Lancing Device, Blood Sugar Monitor Kit with Test Strips and Lancets, Sugar Machine for Diabetes, No Coding</span></h6>', '<ul class=\"a-unordered-list a-vertical a-spacing-mini\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(17, 17, 17); padding: 0px; font-family: Arial, sans-serif;\"><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Excellent Accuracy: metene blood glucose meter is produced with industry-leading chips and biosensor; The strips are equipped with temperature-aware, secondary verification test and hematocrit compensation technology to avoid interference from blood oxygen variations in the test</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Monitor in An All-round Way: 24-hour monitor your blood glucose anytime with modes of pre meal, post meal, any time of the day and you could set up to 4 reminder alarms throughout one day; 450 data storage, data export and the continuous 14/21/28/60/90 day average testing results help you track and manage your blood glucose better</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">User Friendly Design: The lancing device has 5 adjustable depth options to minimize wound and reduce pain; The glucose monitor takes just 7s and 0.7µl blood to read and large display make it easy for elders; Portable and easy to carry</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Easy to Use: No coding required, one touch design; The glucometer gets into measure status automatically once insert the blood sugar test strip to the bottom of the slot, no need to operate; It makes this diabetes testing kit easy to use for anybody</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Diabetes Testing Kit 107 Piece Set: You will get 50 blood glucose test strips, 50 sterile lancets,1 glucometer, 1 lancing device, 1 control solution, 2 batteries, 1 user manual and 1 protective wallet; Please feel free to contact us if any problem when using this blood sugar test kit, we will reach back as soon as possible and try our best to make you satisfied</span></li></ul>', 'frontend/img/product/1689243325153837.jpg', 'frontend/img/product/1689243325402960.jpg', 'frontend/img/product/1689243325440527.jpg', 1, '2021-01-18 10:39:33', NULL),
(23, 27, 'MOM AND ME', 'mom and me', 'MAM-1', '20', 350, '<ul class=\"info-product\" style=\"margin-bottom: 1rem; padding-left: 0px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li style=\"margin-bottom: 10px; list-style: none;\"><span style=\"font-size: 24px; text-transform: uppercase;\">MOM AND ME MATERNAL SUPPLEMENT</span><br></li><li style=\"margin-bottom: 10px; list-style: none;\"><a class=\"link product-name\" href=\"https://www.tryandreview.com/en/brand/nestle\" style=\"color: rgb(43, 103, 124); text-transform: uppercase;\">NESTLÉ</a></li><li style=\"margin-bottom: 10px; list-style: none;\"><a class=\"link product-category\" href=\"https://www.tryandreview.com/en/baby/maternity-nursing\" itemprop=\"category\" content=\"Maternity &amp; nursing\" style=\"color: rgb(43, 43, 60);\">Maternity &amp; nursing</a></li></ul>', '<ul class=\"info-product\" style=\"margin-bottom: 1rem; padding-left: 0px; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li style=\"margin-bottom: 10px; list-style: none;\"><p style=\"margin-bottom: 1rem; color: rgb(43, 43, 60); font-size: 14px;\">Pregnant and breastfeeding mums have a big job to grow and nourish a baby! NESTLÉ MOM &amp; ME is a premium milk supplement to support these extra nutritional needs. Here’s why it’s good for your baby:</p><p style=\"margin-top: 0px; margin-bottom: 1rem; color: rgb(43, 43, 60); font-size: 14px;\">BIFIDUS BL Probiotics High in Folic Acid High in Calcium and Vitamin D Contains the important nutrients DHA and Iron Reduced Fat</p></li><li style=\"margin-bottom: 10px; list-style: none;\"><br></li></ul>', 'frontend/img/product/1689244377592755.jpg', 'frontend/img/product/1689244377717695.jpg', 'frontend/img/product/1689244378282469.jpg', 1, '2021-01-18 10:56:18', '2021-02-11 08:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) NOT NULL,
  `order_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_grp` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `blood_grp`, `gender`, `birth`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Mahfuzar Rahman', 'mahfuzar@gmail.com', '01773841134', 'B+', 'Male', '1997-01-27', NULL, '$2y$10$NtLnSzdEJi0o6KFYnirNiuHwcK.dIoh9L4wH7Yau6l6nZ.58qScky', '91KLookW4tZQ4IC47LUJPWrQxNJHMR42QKP8ZVRJcRbOHlFIXvAab5jhGdFt', '2021-02-02 09:48:41', '2021-02-02 09:48:41'),
(8, 'Mr. Hasnat', 'hasnat@gmail.com', '01773841136', 'A+', 'Male', '1997-01-27', NULL, '$2y$10$KPin5GLF1amU2KEfcLKDte28xzhHhbVv1RXgRdzPQXMVT8JH8kvKq', NULL, '2021-02-06 16:09:01', '2021-02-06 16:09:01'),
(14, 'Mostafizur Rahman', 'mostafizur@gmail.com', '01773841135', 'O+', 'Male', '2001-06-05 00:00:00', NULL, '$2y$10$EFk6fkAMftOFAY0T8s4xIOh2jtfW2p7mdqWL5S17zA3OnZf3bMb5C', NULL, '2021-04-07 18:12:31', '2021-04-07 18:12:31'),
(15, 'Arif Hossain', 'arif@gmail.com', '01773841136', 'A-', 'Male', '1998-02-07 00:00:00', NULL, '$2y$10$JeTiti3jNVvupKlzFzO2AeMG9DOQG0WmrbX.i.NPfK0FiKAGRFUtu', NULL, '2021-04-07 18:15:29', '2021-04-07 18:15:29'),
(16, 'Arifa Sultana', 'arifa@gmail.com', '01773841137', 'B-', 'Female', '1999-02-07 00:00:00', NULL, '$2y$10$7oTnT6zcMIq5cZjPl9iMm.BGYHH/j1KY3MRaEEEUloc.ec2cdNY4i', NULL, '2021-04-07 18:17:40', '2021-04-07 18:17:40'),
(17, 'Nusrat Akther', 'nusrat@gmail.com', '01773841139', 'O-', 'Female', '1998-01-08 00:00:00', NULL, '$2y$10$i7PA.rfU08LQfHk6toxcD.2arT4hZq5WDmOOHYRjtrb9DPB2iKM26', NULL, '2021-04-07 18:20:22', '2021-04-07 18:20:22'),
(18, 'Jesmin Sultana', 'jesmin@gmail.com', '01773841140', 'AB+', 'Female', '2000-01-07 00:00:00', NULL, '$2y$10$nQ264uwYLIZ8cJrt2xiiMe.pnDHCOYuiFwXrom4hKvmg4kWwjV0Aq', NULL, '2021-04-07 18:22:25', '2021-04-07 18:22:25'),
(19, 'Habibur Rahman', 'habibur@gmail.com', '01773841150', 'AB-', 'Male', '1996-01-02 00:00:00', NULL, '$2y$10$jIDS5X4ceW4YV3GumhgSneV8ToGW2YM6JRy7T0I15JWhCPB3lfXo6', NULL, '2021-04-07 18:25:04', '2021-04-07 18:25:04');

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
-- Indexes for table `blogcategories`
--
ALTER TABLE `blogcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloods`
--
ALTER TABLE `bloods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultants`
--
ALTER TABLE `consultants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `consultants_email_unique` (`email`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogcategories`
--
ALTER TABLE `blogcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bloods`
--
ALTER TABLE `bloods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `consultants`
--
ALTER TABLE `consultants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
