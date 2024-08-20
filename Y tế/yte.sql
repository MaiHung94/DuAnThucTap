-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2023 lúc 07:49 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `yte`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `user_create` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `parent_id`, `status`, `user_create`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ENGLISH', 'english', 0, 0, 'Admin', NULL, '2023-09-26 05:25:01', '2023-10-13 09:26:30'),
(11, 'TRANG CHỦ', '/', 0, 0, 'Admin', NULL, '2023-10-10 08:52:52', '2023-10-13 09:26:37'),
(12, 'CHỈ PHẪU THUẬT', 'chi-phau-thuat', 0, 0, 'Admin', NULL, '2023-10-10 08:52:59', '2023-10-13 09:26:47'),
(13, 'VẬT TƯ Y TẾ', 'vat-tu-y-te', 0, 0, 'Admin', NULL, '2023-10-10 08:53:08', '2023-10-13 09:26:58'),
(14, 'TIN TỨC', 'tin-tuc', 0, 0, 'Admin', NULL, '2023-10-13 09:30:13', '2023-10-13 09:30:13'),
(15, 'LIÊN HỆ', 'lien-he', 0, 0, 'Admin', NULL, '2023-10-13 09:30:23', '2023-10-13 09:30:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_07_05_061151_create_menus_table', 1),
(5, '2023_03_01_114252_create_products_table', 2),
(6, '2023_09_18_210825_create_sliders_table', 2),
(7, '2023_09_20_020516_create_posts_table', 2),
(8, '2023_09_21_173505_create_pages_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `name`, `content`, `post_detail`, `post_image`, `category_id`, `slug`, `created_at`, `updated_at`, `status`) VALUES
(8, 'Khâu thẩm mỹ là gì? Cách khâu, chăm sóc vết thương thẩm mỹ', 'Khâu thẩm mỹ là phương pháp khâu bằng chỉ tự tiêu hoặc không tiêu giúp làm giảm, thậm chí có…', NULL, 'public/upload\\md4-5.jpg', 14, 'khau-tham-my-la-gi-cach-khau-cham-soc-vet-thuong-tham-my', '2023-10-10 09:07:18', '2023-10-13 09:32:38', '1'),
(9, 'Khâu thẩm mỹ là gì? Cách khâu, chăm sóc vết thương thẩm mỹ', 'Khâu thẩm mỹ là phương pháp khâu bằng chỉ tự tiêu hoặc không tiêu giúp làm giảm, thậm chí có…', NULL, 'public/upload\\md4-5.jpg', 14, 'khau-tham-my-la-gi-cach-khau-cham-soc-vet-thuong-tham-my', '2023-10-10 09:07:18', '2023-10-13 09:32:38', '1'),
(10, 'Khâu thẩm mỹ là gì? Cách khâu, chăm sóc vết thương thẩm mỹ', 'Khâu thẩm mỹ là phương pháp khâu bằng chỉ tự tiêu hoặc không tiêu giúp làm giảm, thậm chí có…', NULL, 'public/upload\\md4-5.jpg', 14, 'khau-tham-my-la-gi-cach-khau-cham-soc-vet-thuong-tham-my', '2023-10-10 09:07:18', '2023-10-13 09:32:38', '1'),
(11, 'Khâu thẩm mỹ là gì? Cách khâu, chăm sóc vết thương thẩm mỹ', 'Khâu thẩm mỹ là phương pháp khâu bằng chỉ tự tiêu hoặc không tiêu giúp làm giảm, thậm chí có…', NULL, 'public/upload\\md4-5.jpg', 14, 'khau-tham-my-la-gi-cach-khau-cham-soc-vet-thuong-tham-my', '2023-10-10 09:07:18', '2023-10-13 09:32:38', '1'),
(12, 'Khâu thẩm mỹ là gì? Cách khâu, chăm sóc vết thương thẩm mỹ', 'Khâu thẩm mỹ là phương pháp khâu bằng chỉ tự tiêu hoặc không tiêu giúp làm giảm, thậm chí có…', NULL, 'public/upload\\md4-5.jpg', 14, 'khau-tham-my-la-gi-cach-khau-cham-soc-vet-thuong-tham-my', '2023-10-10 09:07:18', '2023-10-13 09:32:38', '1'),
(13, 'Khâu thẩm mỹ là gì? Cách khâu, chăm sóc vết thương thẩm mỹ', 'Khâu thẩm mỹ là phương pháp khâu bằng chỉ tự tiêu hoặc không tiêu giúp làm giảm, thậm chí có…', NULL, 'public/upload\\md4-5.jpg', 14, 'khau-tham-my-la-gi-cach-khau-cham-soc-vet-thuong-tham-my', '2023-10-10 09:07:18', '2023-10-13 09:32:38', '1'),
(14, 'Khâu thẩm mỹ là gì? Cách khâu, chăm sóc vết thương thẩm mỹ', 'Khâu thẩm mỹ là phương pháp khâu bằng chỉ tự tiêu hoặc không tiêu giúp làm giảm, thậm chí có…', NULL, 'public/upload\\md4-5.jpg', 14, 'khau-tham-my-la-gi-cach-khau-cham-soc-vet-thuong-tham-my', '2023-10-10 09:07:18', '2023-10-13 09:32:38', '1'),
(15, 'Khâu thẩm mỹ là gì? Cách khâu, chăm sóc vết thương thẩm mỹ', 'Khâu thẩm mỹ là phương pháp khâu bằng chỉ tự tiêu hoặc không tiêu giúp làm giảm, thậm chí có…', NULL, 'public/upload\\md4-5.jpg', 14, 'khau-tham-my-la-gi-cach-khau-cham-soc-vet-thuong-tham-my', '2023-10-10 09:07:18', '2023-10-13 09:32:38', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_old` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `price_old`, `product_image`, `content`, `content_detail`, `category_id`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(16, 'PROTIBOND® POLYESTER', 'đ219.000', 'dd90.000', 'public/upload\\md4-2.jpg', 'Chỉ phẫu thuật tự tiêu (absorbable sutures) là loại chỉ sau một thời gian trong cơ thể sẽ bị phân hủy bởi quá trình thủy phân (chỉ tổng hợp: PGLA, PGA, PDO, PCL…) hoặc bởi tác động của enzyme (chỉ tự nhiên hoặc chỉ sinh học: Catgut, Collagen). Chỉ khâu tự tiêu có khả năng…', 'Đa sợi, sử dụng để khâu, nối các mô mềm bao gồm trong phẫu thuật tim mạch, mắt, ngoại thần kinh, làm chỉ buộc…', 1, 'protibond-polyester', 'option1', NULL, '2023-10-13 09:35:16'),
(17, 'PROTIBOND® POLYESTER', 'đ219.000', 'dd90.000', 'public/upload\\md4-1.jpg', 'Chỉ phẫu thuật tự tiêu (absorbable sutures) là loại chỉ sau một thời gian trong cơ thể sẽ bị phân hủy bởi quá trình thủy phân (chỉ tổng hợp: PGLA, PGA, PDO, PCL…) hoặc bởi tác động của enzyme (chỉ tự nhiên hoặc chỉ sinh học: Catgut, Collagen). Chỉ khâu tự tiêu có khả năng…', 'Đa sợi, sử dụng để khâu, nối các mô mềm bao gồm trong phẫu thuật tim mạch, mắt, ngoại thần kinh, làm chỉ buộc…', 1, 'protibond-polyester', 'option1', NULL, '2023-10-13 09:36:04'),
(18, 'PROTIBOND® POLYESTER', 'đ219.000', 'dd90.000', 'public/upload\\md3-2.jpg', 'Chỉ phẫu thuật tự tiêu (absorbable sutures) là loại chỉ sau một thời gian trong cơ thể sẽ bị phân hủy bởi quá trình thủy phân (chỉ tổng hợp: PGLA, PGA, PDO, PCL…) hoặc bởi tác động của enzyme (chỉ tự nhiên hoặc chỉ sinh học: Catgut, Collagen). Chỉ khâu tự tiêu có khả năng…', 'Đa sợi, sử dụng để khâu, nối các mô mềm bao gồm trong phẫu thuật tim mạch, mắt, ngoại thần kinh, làm chỉ buộc…', 12, 'protibond-polyester', 'option1', NULL, '2023-10-13 09:36:18'),
(19, 'PROTIBOND® POLYESTER', 'đ219.000', 'dd90.000', 'public/upload\\md4-4.jpg', 'Chỉ phẫu thuật tự tiêu (absorbable sutures) là loại chỉ sau một thời gian trong cơ thể sẽ bị phân hủy bởi quá trình thủy phân (chỉ tổng hợp: PGLA, PGA, PDO, PCL…) hoặc bởi tác động của enzyme (chỉ tự nhiên hoặc chỉ sinh học: Catgut, Collagen). Chỉ khâu tự tiêu có khả năng…', 'Đa sợi, sử dụng để khâu, nối các mô mềm bao gồm trong phẫu thuật tim mạch, mắt, ngoại thần kinh, làm chỉ buộc…', 13, 'protibond-polyester', 'option1', NULL, '2023-10-13 09:36:38'),
(20, 'PROTIBOND® POLYESTER', 'đ219.000', 'dd90.000', 'public/upload\\4-3.jpg', 'Chỉ phẫu thuật tự tiêu (absorbable sutures) là loại chỉ sau một thời gian trong cơ thể sẽ bị phân hủy bởi quá trình thủy phân (chỉ tổng hợp: PGLA, PGA, PDO, PCL…) hoặc bởi tác động của enzyme (chỉ tự nhiên hoặc chỉ sinh học: Catgut, Collagen). Chỉ khâu tự tiêu có khả năng…', 'Đa sợi, sử dụng để khâu, nối các mô mềm bao gồm trong phẫu thuật tim mạch, mắt, ngoại thần kinh, làm chỉ buộc…', 13, 'protibond-polyester', 'option2', NULL, '2023-10-13 09:36:51'),
(21, 'PROTIBOND® POLYESTER', 'đ219.000', 'dd90.000', 'public/upload\\md4-1.jpg', 'Chỉ phẫu thuật tự tiêu (absorbable sutures) là loại chỉ sau một thời gian trong cơ thể sẽ bị phân hủy bởi quá trình thủy phân (chỉ tổng hợp: PGLA, PGA, PDO, PCL…) hoặc bởi tác động của enzyme (chỉ tự nhiên hoặc chỉ sinh học: Catgut, Collagen). Chỉ khâu tự tiêu có khả năng…', 'Đa sợi, sử dụng để khâu, nối các mô mềm bao gồm trong phẫu thuật tim mạch, mắt, ngoại thần kinh, làm chỉ buộc…', 13, 'protibond-polyester', 'option1', NULL, '2023-10-13 09:37:01'),
(22, 'PROTIBOND® POLYESTER', 'đ219.000', 'dd90.000', 'public/upload\\md3-2.jpg', 'Chỉ phẫu thuật tự tiêu (absorbable sutures) là loại chỉ sau một thời gian trong cơ thể sẽ bị phân hủy bởi quá trình thủy phân (chỉ tổng hợp: PGLA, PGA, PDO, PCL…) hoặc bởi tác động của enzyme (chỉ tự nhiên hoặc chỉ sinh học: Catgut, Collagen). Chỉ khâu tự tiêu có khả năng…', 'Đa sợi, sử dụng để khâu, nối các mô mềm bao gồm trong phẫu thuật tim mạch, mắt, ngoại thần kinh, làm chỉ buộc…', 1, 'protibond-polyester', 'option1', NULL, '2023-10-13 09:37:15'),
(23, 'PROTIBOND® POLYESTER', 'đ219.000', 'dd90.000', 'public/upload\\md4-2.jpg', 'Chỉ phẫu thuật tự tiêu (absorbable sutures) là loại chỉ sau một thời gian trong cơ thể sẽ bị phân hủy bởi quá trình thủy phân (chỉ tổng hợp: PGLA, PGA, PDO, PCL…) hoặc bởi tác động của enzyme (chỉ tự nhiên hoặc chỉ sinh học: Catgut, Collagen). Chỉ khâu tự tiêu có khả năng…', 'Đa sợi, sử dụng để khâu, nối các mô mềm bao gồm trong phẫu thuật tim mạch, mắt, ngoại thần kinh, làm chỉ buộc…', 1, 'protibond-polyester', 'option1', NULL, '2023-10-13 09:37:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `slider_image`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Slider 1', 'public/upload\\slider_1.png', 'slider-1', 'option2', NULL, NULL),
(2, 'Slider 2', 'public/upload\\slider_2.png', 'slider-2', 'option1', NULL, NULL),
(3, 'Slider 3', 'public/upload\\slider_3.png', 'slider-3', 'option1', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'DungQuy', 'dn5678853@gmail.com', NULL, '$2y$10$GXtDC/w9sIMgOOn9wtalgOUDx5H8pJbz3ymIFzGdqN7/wTawfzWh.', NULL, '2023-09-21 03:13:46', '2023-09-21 03:13:46', 1),
(3, 'Nguyễn Văn Hân', 'dn56788@gmail.com', NULL, '$2y$10$m9Ut5kyzvX1BxEMzYqPIXu4vPBfmtnM1jRhFJca.IyOgnYXaAAqLm', NULL, NULL, NULL, 0),
(6, 'Toán Học', 'Tranvanduong90ln@gmail.com', NULL, '$2y$10$E1dmbxe2Qvw3qql2gXS5VONciaO3AIXf8ssLxvO9WwoBdMrKXPvty', NULL, '2023-09-21 18:05:10', '2023-09-21 18:05:10', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
