-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 25, 2022 lúc 08:32 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `clothing_website`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quatity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(256) CHARACTER SET utf8mb4 DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_05_27_114522_create_sessions_table', 1),
(7, '2022_05_27_150323_create_products_table', 2),
(8, '2022_05_27_153824_create_products_table', 3),
(9, '2022_05_27_185111_create_carts_table', 4),
(10, '2022_05_28_110550_create_orders_table', 5),
(11, '2022_05_28_153458_create_messages_table', 6),
(12, '2022_05_28_165938_create_carts_table', 7),
(13, '2022_05_28_171609_create_products_table', 8),
(14, '2022_05_28_180941_create_products_table', 9),
(15, '2022_05_28_181720_create_products_table', 10),
(16, '2022_05_28_213925_create_orders_table', 11),
(17, '2022_05_29_075522_create_wishlists_table', 12),
(18, '2022_06_02_102845_create_feedback_table', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_expiration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_cvv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `items` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `category`, `gender`, `size`, `image1`, `image2`, `image3`, `created_at`, `updated_at`) VALUES
(13, 'Uniqlo U Flannel Work Jacket (Set Up)', '99', 'A comfortable, easy jacket. Workwear inspired design made with soft polyester-rayon flannel. Slightly brushed for extra warmth. Lining designed for easy layering. Perfect for working from home.', 'jacket', 'women', 'S, M, L', '165608655975.webp', '165608655991.webp', '165608655950.webp', '2022-06-24 09:02:39', '2022-06-24 20:09:47'),
(14, 'Fleece Half-Zip Long Sleeve Pullover', '39', 'A half-zip pullover for a sporty style. Designed with meticulous attention to detail. Pockets lined with micro fleece on the palm side to keep hands warm. Piping tape on the cuffs keeps cold air out and makes the sleeves easier to roll up.', 'jacket', 'men', 'S, M, L', '165608669415.webp', '165608669493.webp', '165608669457.webp', '2022-06-24 09:04:54', '2022-06-24 09:04:54'),
(15, 'Over Shirt Jacket', '79', 'A handy unisex layer with a relaxed fit. Light, soft, non-itchy fabric with a cozy wool-like feel. Relaxed fit with dropped shoulders.', 'jacket', 'men', 'S, M, L', '165608683787.webp', '165608683720.webp', '165608683720.webp', '2022-06-24 09:07:17', '2022-06-24 09:07:17'),
(16, 'Over Shirt Jacket Caro', '79', 'A handy unisex layer with a relaxed fit. Side pockets positioned for ease of use. Relaxed fit with dropped shoulders.', 'jacket', 'men', 'S, M, L', '165608693234.webp', '165608693223.webp', '165608693230.webp', '2022-06-24 09:08:52', '2022-06-24 09:08:52'),
(17, '+S Light Padded Stretch Jacket', '149', '“+S” is a product suitable for Sports, developed with top Swedish athletes in consideration of Sustainability. Jointly developed with top Swedish athletes. High-performance design for winter sports or everyday styling.', 'jacket', 'women', 'S, M, L', '165608716477.webp', '165608716459.webp', '165608716461.webp', '2022-06-24 09:12:44', '2022-06-24 09:12:44'),
(18, 'MEN Double Jersey Jacket', '99', 'An easy throw-on jacket in soft jersey fabric. Subtly dropped line from the shoulders to sleeves for a flat and natural fit. Boxy cut is roomy around the chest. Perfect for working from home or a casual weekend style.', 'jacket', 'men', 'S, M, L', '165608724338.webp', '165608724364.webp', '165608724381.webp', '2022-06-24 09:14:03', '2022-06-24 09:14:03'),
(19, 'Utility Work Pants', '49', 'Comfortable pants with an authentic vintage look based on old-school work pants. These pants are based on traditional work pants, with great care put into details such as pockets, belt loops, stitching, and thread count.', 'pant', 'men', 'S, M, L', '165608748138.webp', '165608748119.webp', '16560874819.webp', '2022-06-24 09:18:01', '2022-06-24 09:18:01'),
(20, 'Cargo jogger pants (wide fit)', '49', 'Classic military pants, now in an active jogger pants style. Cargo-type jogger pants with authentic design details plus stretch fabric and an easy waist for a relaxed fit.', 'pant', 'men', 'S, M, L', '165608755040.webp', '165608755053.webp', '165608755065.webp', '2022-06-24 09:19:10', '2022-06-24 09:19:10'),
(21, 'Brushed Jersey Straight Pants', '49', 'Straight pants with a cozy feel. Comfortable elasticated waistband. Elasticated at the back of the waist for comfort.', 'pant', 'women', 'S, M, L', '165608760770.webp', '165608760780.webp', '16560876071.webp', '2022-06-24 09:20:07', '2022-06-24 09:20:07'),
(22, 'MEN Smart Ankle Pants (Wool Like)', '49', 'Sophisticated yet comfortable. Versatile pants for any occasion. Resin processing ensures center creases stay crisp after washing.', 'pant', 'men', 'S, M, L', '165608766824.webp', '165608766854.webp', '165608766846.webp', '2022-06-24 09:21:08', '2022-06-24 09:21:08'),
(23, 'MEN HEATTECH Smart Slim Fit Pants', '59', 'Bio-warming and insulating HEATTECH keeps your legs toasty. Refined texture and cut. Comfortable stretch waist design.', 'pant', 'men', 'S, M, L', '165608775654.webp', '165608775619.webp', '165608775653.webp', '2022-06-24 09:22:36', '2022-06-24 09:22:36'),
(24, 'MEN Slim Fit Chino Pants', '49', 'Now in a more streamlined silhouette. These pants have fresh details that work for both business and casual settings.', 'pant', 'men', 'S, M, L', '165608780061.webp', '16560878008.webp', '165608780094.webp', '2022-06-24 09:23:20', '2022-06-24 09:23:20'),
(25, 'Uniqlo U Crew Neck Short Sleeve T-Shirt', '19', 'Carefully selected fabric, cut, and details. A stylish statement T-shirt.', 'shirt', 'men', 'S, M, L', '165608791268.webp', '165608791232.webp', '165608791285.webp', '2022-06-24 09:25:12', '2022-06-24 09:25:12'),
(26, 'WOMEN Striped Oversized Long Sleeve T-Shirt', '29', 'Breezy striped T-shirt in 100% cotton. Side slits allow for styling options.', 'shirt', 'women', 'S, M, L', '165608796090.webp', '165608796065.webp', '165608796050.webp', '2022-06-24 09:26:00', '2022-06-24 09:26:00'),
(27, 'Dry Crew Neck Short Sleeve Colour T-Shirt', '9', 'Simple and versatile. Stays dry, giving it a comfortable and dry feeling against the skin.', 'shirt', 'men', 'S, M, L', '16560880116.webp', '165608801197.webp', '165608801197.webp', '2022-06-24 09:26:51', '2022-06-24 09:26:51'),
(28, 'WOMEN AIRism Racer Back Tank Top', '19', 'Matte texture and a stylish hem line. Perfect for sports or casual wear.', 'shirt', 'women', 'S, M, L', '165608813141.webp', '165608813169.webp', '165608813124.webp', '2022-06-24 09:28:51', '2022-06-24 09:28:51'),
(29, 'WOMEN Ribbed Tank Top', '14', 'This tank top looks and feels great on its own. Ribbed fabric for a comfortable fit.', 'shirt', 'women', 'S, M, L', '165608817972.webp', '16560881792.webp', '165608817915.webp', '2022-06-24 09:29:39', '2022-06-24 09:29:39'),
(30, 'WOMEN +S Wool Blend Dry T-Shirt', '39', 'A warm wool blend T-shirt with DRY technology for stay-fresh comfort.', 'shirt', 'women', 'S, M, L', '16560882747.webp', '165608827456.webp', '165608827424.webp', '2022-06-24 09:31:14', '2022-06-24 09:31:14'),
(31, 'MEN Dry Pique Short Sleeve Polo Shirt', '29', 'A high-quality classic polo shirt Improved the cut and mobility. Many colors.', 'polo', 'men', 'S, M, L', '165608838766.webp', '16560883876.webp', '16560883876.webp', '2022-06-24 09:33:07', '2022-06-24 09:33:07'),
(32, 'MEN Dry-EX Short Sleeve Polo Shirt', '29', 'Designed to keep you cool and comfortable. Perfect for sports.', 'polo', 'men', 'S, M, L', '165608842633.webp', '165608842678.webp', '165608842648.webp', '2022-06-24 09:33:46', '2022-06-24 09:33:46'),
(33, 'MEN AIRism Fly Front Polo Shirt', '29', 'Silky and refreshing. A hidden placket creates a cleaner look.', 'polo', 'men', 'S, M, L', '165608846859.webp', '165608846844.webp', '16560884689.webp', '2022-06-24 09:34:28', '2022-06-24 09:34:28'),
(34, 'MEN AIRism Fly Front Polo Shirt', '19', 'Silky and refreshing. A hidden placket creates a cleaner look.', 'polo', 'men', 'S, M, L', '165608850440.webp', '165608850444.webp', '165608850425.webp', '2022-06-24 09:35:04', '2022-06-24 09:35:04'),
(35, 'Sweat Pullover Long Sleeve Hoodie', '49', 'The material, cut, and the details have all evolved. Vintage-inspired with a modern fit.', 'coat', 'men', 'S, M, L', '165608861658.webp', '165608861690.webp', '165608861642.webp', '2022-06-24 09:36:56', '2022-06-24 09:36:56'),
(36, 'MEN +J Wool Oversized Duffle Coat', '199', 'A sophisticated classic coat with excellent heat retention.', 'coat', 'men', 'S, M, L', '165608865874.webp', '165608865870.webp', '165608865862.webp', '2022-06-24 09:37:38', '2022-06-24 09:37:38'),
(37, 'MEN +J Padded Oversized Single Breasted Coat', '149', 'A versatile single breasted coat with a sophisticated matte finish.', 'coat', 'men', 'S, M, L', '165608869928.webp', '165608869923.webp', '165608869969.webp', '2022-06-24 09:38:19', '2022-06-24 09:38:19'),
(38, 'MEN Single Breasted Coat', '129', 'Our versatile classic coat. In a relaxed, modern cut. Durable water-repellent coating for light rain.', 'coat', 'men', 'S, M, L', '165608874791.webp', '165608874731.webp', '165608874740.webp', '2022-06-24 09:39:07', '2022-06-24 09:39:07'),
(39, 'Balmacaan Coat', '129', 'A knee-length coat that is perfect for business or casual wear. Comfortable and elegant.', 'coat', 'men', 'S, M, L', '165608884320.webp', '165608884356.webp', '165608884326.webp', '2022-06-24 09:40:43', '2022-06-24 09:40:43'),
(40, 'WOMEN Cashmere Crew Neck Cardigan', '129', 'Our sumptuous 100% cashmere knit. Now hand-washable.', 'cardigan', 'women', 'S, M, L', '165608899251.webp', '16560889929.webp', '165608899293.webp', '2022-06-24 09:43:12', '2022-06-24 09:43:12'),
(41, 'WOMEN Washable Mock Neck Striped Sweater', '49', 'Machine-washable and resistant to pilling. Comfortable knitwear you can wear anytime.', 'cardigan', 'women', 'S, M, L', '165608903562.webp', '165608903578.webp', '165608903516.webp', '2022-06-24 09:43:55', '2022-06-24 09:43:55'),
(42, 'Washable Crew Neck Vest', '29', 'Updated with a sleek silhouette and a lightweight feel. A versatile vest for any occasion.', 'cardigan', 'men', 'S, M, L', '16560891266.webp', '165608912655.webp', '165608912650.webp', '2022-06-24 09:45:26', '2022-06-24 09:45:26'),
(43, 'Washable V Neck Vest', '29', 'Vest accented with a colored stripe. Size up or down for a refined or casual look.', 'cardigan', 'men', 'S, M, L', '165608917613.webp', '165608917626.webp', '165608917670.webp', '2022-06-24 09:46:16', '2022-06-24 09:46:16'),
(44, '3D Knit Crew Neck Long Sleeve Sweater', '59', 'The unmistakable comfort of 3D knit. Simple and sophisticated design.', 'cardigan', 'men', 'S, M, L', '165608923486.webp', '16560892341.webp', '165608923497.webp', '2022-06-24 09:47:14', '2022-06-24 09:47:14'),
(45, 'HEATTECH Rib Beanie', '14', 'Super warm HEATTECH. Chunky hand-knitted look.', 'accessories', 'women', 'S, M, L', '165608945586.webp', '165608945551.webp', '165608945579.webp', '2022-06-24 09:50:55', '2022-06-24 09:50:55'),
(46, 'Cashmere Scarf (Checked)', '79', 'The luxurious warmth of 100% cashmere. New wider design to keep your neck cozy.', 'accessories', 'women', 'S, M, L', '165608952516.webp', '165608952593.webp', '16560895258.webp', '2022-06-24 09:52:05', '2022-06-24 09:52:05'),
(48, 'WOMEN Faux Leather Mini Tool Shoulder Bag', '29', 'A minimalist bag great for outings. In a square shape that allows easy storage.', 'accessories', 'women', 'S, M, L', '16560896313.webp', '165608963169.webp', '165608963114.webp', '2022-06-24 09:53:51', '2022-06-24 09:53:51'),
(49, 'Singlestrap Backpack', '29', 'Convenient bag with plenty of pockets. Versatile design for any occasion.', 'accessories', 'men', 'S, M, L', '165608968190.webp', '165608968160.webp', '165608968123.webp', '2022-06-24 09:54:41', '2022-06-24 09:54:41'),
(50, 'WOMEN Faux Leather Boat Tote Bag', '39', 'Stylish faux leather bag. Practical, compact size.', 'accessories', 'women', 'S, M, L', '16560897346.webp', '165608973412.webp', '165608973472.webp', '2022-06-24 09:55:34', '2022-06-24 09:55:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
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
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', '0', '123456789', 'Quận 7, Hồ Chí Minh', NULL, '$2y$10$iInnBIHtm4tmldFMabRoaO/EvgSNy5iqJurr8Os8c.zS7N6xIwIVe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 04:59:49', '2022-05-27 04:59:49'),
(2, 'admin', 'admin@gmail.com', '1', '0835709759', 'Quận 7, Hồ Chí Minh', NULL, '$2y$10$3UGIsUwWgPXAqpgXf7IC6OHvnwYY6NPIjPTr312BHX1ltfzoy5mT2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 05:01:12', '2022-06-02 02:52:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
