-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 10, 2024 at 11:22 AM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drongose_habar`
--

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_pictures` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`project_pictures`)),
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `project_pictures`, `project_id`, `created_at`, `updated_at`) VALUES
(1, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\",\"4.jpg\",\"5.jpg\",\"6.jpg\",\"7.jpg\"]', 1, '2024-01-15 13:10:58', '2024-01-15 13:10:58'),
(2, '[\"0.jpg\",\"1.jpg\",\"2.jpg\"]', 2, '2024-01-24 12:20:57', '2024-01-24 12:20:57'),
(3, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\"]', 3, '2024-01-24 12:31:35', '2024-01-24 12:31:35'),
(4, '[\"0.jpg\",\"1.jpg\",\"2.jpg\"]', 4, '2024-01-24 12:40:41', '2024-01-24 12:40:41'),
(5, '[\"0.jpg\",\"1.jpg\",\"2.jpg\"]', 5, '2024-01-24 13:04:27', '2024-01-24 13:04:27'),
(6, '[\"0.jpg\",\"1.jpg\",\"2.jpg\"]', 6, '2024-01-25 11:51:34', '2024-01-25 11:51:34'),
(7, '[\"0.jpg\",\"1.jpg\",\"2.jpg\"]', 7, '2024-01-25 11:55:58', '2024-01-25 11:55:58'),
(8, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\",\"4.jpg\",\"5.jpg\",\"6.jpg\"]', 8, '2024-01-25 11:59:28', '2024-01-25 11:59:28'),
(9, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\"]', 9, '2024-01-25 12:04:46', '2024-01-25 12:04:46'),
(10, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\"]', 10, '2024-01-25 12:08:54', '2024-01-25 12:08:54'),
(11, '[\"0.jpg\",\"1.jpg\",\"2.jpg\"]', 11, '2024-01-25 14:45:55', '2024-01-25 14:45:55'),
(12, '[\"0.jpg\",\"1.jpg\",\"2.jpg\"]', 12, '2024-01-25 18:23:40', '2024-01-25 18:23:40'),
(13, '[\"0.jpg\",\"1.jpg\"]', 13, '2024-01-25 18:46:38', '2024-01-25 18:46:38'),
(14, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\",\"4.jpg\"]', 14, '2024-01-25 18:51:05', '2024-01-25 18:51:05'),
(15, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\",\"4.jpg\"]', 15, '2024-01-25 18:59:08', '2024-01-25 18:59:08'),
(16, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\"]', 16, '2024-01-25 19:01:24', '2024-01-25 19:01:24'),
(17, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\"]', 17, '2024-01-25 19:04:20', '2024-01-25 19:04:20'),
(18, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\",\"4.jpg\",\"5.jpg\"]', 18, '2024-01-25 19:07:29', '2024-01-25 19:07:29'),
(19, '[\"0.jpg\",\"1.jpg\"]', 19, '2024-01-25 19:10:41', '2024-01-25 19:10:41'),
(20, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\",\"4.jpg\",\"5.jpg\"]', 20, '2024-01-25 19:28:48', '2024-01-25 19:28:48'),
(21, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\"]', 21, '2024-01-25 19:31:24', '2024-01-25 19:31:24'),
(22, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\"]', 22, '2024-02-09 19:38:02', '2024-02-09 19:38:02'),
(23, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\"]', 23, '2024-02-09 19:44:01', '2024-02-09 19:44:01'),
(24, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\",\"4.jpg\"]', 24, '2024-02-09 19:48:08', '2024-02-09 19:48:08'),
(25, '[\"0.jpg\",\"1.jpg\",\"2.jpg\",\"3.jpg\",\"4.jpg\",\"5.jpg\",\"6.jpg\",\"7.jpg\",\"8.jpg\",\"9.jpg\"]', 25, '2024-02-20 23:16:09', '2024-02-20 23:16:09');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2022_11_22_093211_create_sessions_table', 1),
(8, '2022_12_23_141211_create_projects_table', 1),
(9, '2022_12_26_073215_create_images_table', 1),
(10, '2023_05_22_070910_create_news_table', 1),
(11, '2024_01_01_181435_create_roles_table', 1),
(12, '2024_01_01_181459_create_role_user_table', 1),
(13, '2024_01_01_181524_create_permissions_table', 1),
(14, '2024_01_01_181539_create_permission_role_table', 1),
(15, '2024_01_01_182821_alter_table_users', 1),
(16, '2024_02_01_060533_alter_table_news', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Addis Ababa',
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Ethiopia',
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Default',
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conclusion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `postedBy` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `city`, `country`, `category`, `budget`, `quote`, `description`, `image`, `heading1`, `exp1`, `heading2`, `exp2`, `heading3`, `exp3`, `conclusion`, `video`, `isActive`, `featured`, `postedBy`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'THE REBEL', 'Addis Ababa', 'Ethiopia', 'Default', NULL, 'Waste does not exist in nature because ecosystems reuse everything that grows in a never-ending cycle of efficiency and purpose', 'The collaboration between KiT Studio and Habar Architect for the International Evangelical Youth Centre.\r\n', 'image.jpg', 'Philosophy', 'The project focused on utilizing prefabrication and modularization techniques within the design of the youth center. This approach emphasizes the use of pre-made components and modules that can be easily assembled on-site, allowing for efficient construction and flexibility in design.', 'Methodology', 'The project aimed to integrate this concept into the central common space, plazas, and amphitheater of the youth center. This was achieved through the strategic arrangement of shipping containers, which served as the building blocks for these spaces. By juxtaposing the containers around the central area, the design created a dynamic and multifunctional environment.', 'Material', 'The shipping containers not only defined the gathering spaces but also provided private areas within the center. Additionally, their arrangement allowed for a seamless transition between indoor and outdoor spaces, promoting an inside-outside spatial play that enhances the overall experience of the center.', 'Furthermore, the use of shipping containers added texture and color to the architectural design, contributing to the visual appeal of the youth center. This approach not only showcased an innovative use of materials but also demonstrated a sustainable and creative solution for the project.', '2024-01-31 18.28.38.mp4', 1, 0, 1, NULL, NULL, NULL);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `created_at`, `updated_at`, `title`, `deleted_at`) VALUES
(1, NULL, NULL, 'user_access', NULL),
(2, NULL, NULL, 'projects_access', NULL),
(3, NULL, NULL, 'news_access', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 2),
(2, 3);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Addis Ababa',
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Ethiopia',
  `types` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '["Architectural", "Interior design"]' CHECK (json_valid(`types`)),
  `collaborators` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Nimonah Architetcs',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '2021',
  `site_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_num` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` decimal(14,2) DEFAULT 0.00,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'small',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Under Construction',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engineers` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '[]' CHECK (json_valid(`engineers`)),
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'ETB',
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `postedBy` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `code_name`, `city`, `country`, `types`, `collaborators`, `location`, `year`, `site_area`, `floor_area`, `story_num`, `client`, `budget`, `category`, `status`, `description`, `engineers`, `currency`, `isActive`, `featured`, `postedBy`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'TOP LUXURY APARTMENT', 'FIVE IN A ROW', 'Addis Ababa', 'Ethiopia', '[\"Architectural + Interior Design\"]', 'Nimonah Architetcs', 'Woreda 10 ,Bole Sub city, Addis Ababa,Ethiopia', '2020', '15000', '63730.1', '2B+G+11 (12)', 'Abebe Dinku', 3377690000.00, 'large', 'Under constrution', 'Top real estate, is positioned as a landmark residential development in the most desirable living areas                                    of the city containing other amenities, together with restaurants and retail shopping. The design of                                    this development uses the space efficiently and effectively with modern general look of the buildings                                    that will improve the environment as an urban development point of view.', '[\"Habar Architects\"]', 'Br', 1, 1, 2, '2024-01-15 13:10:58', '2024-01-15 13:10:58', NULL),
(2, 'AMIBARA MIXED COMPLEX', 'THE NEIGHBORHOOD', 'Addis Ababa', 'Ethiopia', '[\"Architectural + Interior Design\"]', 'Nimonah Architetcs', 'Arada Sub city, Addis Ababa, Ethiopia', '2022', '35000', '35000', '3B+G+35 (36) (Phase 1)', 'Amibara Properties', 1855000000.00, 'large', 'Under constrution', 'Amibara properties sets out to create a masterpiece complex at the center of Addis                                    Ababa which will be a bench mark for city’s development, having apartment                                    buildings, shopping malls, branded apartment as well as office building. In addition,                                    to influence the life style of our community and residents of Addis Ababa at                                    large. Following the design, it set out to create a maximum shopping experience                                    on the road side, where as a vehicle free zone on the prone zone of the complex..                                    * Project has 5 phases: Phase One : 2 residential Blocks | Phase Two : 3 residential Blocks |                                    Phase Three : 2 residential Blocks | Phase Four : Office Tower | Phase Five : Mall and Final                                    executive apartment./GGL', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-24 12:20:57', '2024-01-24 12:20:57', NULL),
(3, 'TOP HOTEL', 'THE CROWN', 'Addis Ababa', 'Ethiopia', '[\"Architectural + Interior Design\"]', 'Nimonah Architetcs', 'Woreda 11 , Kirkos Sub City, Addis Ababa, Ethiopia', '2021', '6275.55', '68703.8', '3B+G+21 (22)', 'Top Beverages Industries & Trading PLC', 3641301400.00, 'large', 'Under constrution', 'A luxury hotel, by Top water is set to be constructed at the heart of Addis Ababa havng the public                                    spaces such as bars, restaurants and meeting halls on the podium. The façade of the hotel is one of                                    the unique character it holds, reflecting idiosyncratic features and boldness of the architecture.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-24 12:31:35', '2024-01-24 12:31:35', NULL),
(4, 'AL-IMRAN MOSQUE', 'RAIN OF LIGHTS', 'Addis Ababa', 'Ethiopia', '[\"Architectural + Interior Design\"]', 'Nimonah Architetcs', 'Addis Ababa, Ethiopia', '2021', '5897', '5897', 'B+G+2 (3)', 'AL-IMRAN MOSQUE', 171013000.00, 'large', 'Under constrution', 'The mosque is the center of Muslim culture; a sacred place where people offer their obligatory fivetimes-                                    a-day prayers. Light allows one to see clearly the truth of the world. The solid wall and mass are                                    to represent the traditional Ethiopian architecture as well as the unique Arabic way of life to achieve                                    monumentality and sacred gist. Consequently opening perforations are designed to mimic nature in                                    its irregularity and randomness, the perforation permit daylight creates a rain of light into the interior                                    space.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-24 12:40:41', '2024-01-24 12:40:41', NULL),
(5, 'DE-VITA MIXED DEVLOPMENT', 'THE GIANTS', 'Addis Ababa', 'Ethiopia', '[\"Architectural Design\"]', '—', 'Arada and kirkos,Addis Ababa,Ethiopia', '2022', '54000', '230670', 'B+G+29 (30)', 'Salvatore De vita', 8248829134.15, 'large', 'Planning', 'De vitas properties sets out to develop high quality properties that meet the international                                    standards for both residential and commercial purposes by creating a mixed                                    urban complex design in the middle of Addis Ababa. The project includes permanent                                    re-development of the site into high density mixed residential, commercial and service                                    complex .The design extends the river as a major resource to the site by creating                                    different axis which accommodate open and interactive landscape. The towers are                                    cascading to the direction of the river to create a better pleasant views toward to the                                    site. The development will include an apartment complex, office, hotel, commercial                                    spaces, recreational space, parking, playground and greeneries .', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-24 13:04:27', '2024-01-24 13:04:27', NULL),
(6, 'DE-VITA MIXED DEVELOPMENT', 'THE INSIDE-OUT CUBE', 'Addis Ababa', 'Ethiopia', '[\"Architectural Design\"]', '—', 'Arada and kirkos,Addis Ababa,Ethiopia', '2022', '10000', '118662', 'B+G+11 (12)', 'Salvatore De vita', 8175811800.00, 'large', 'Planning', 'De vitas properties sets out to develop high standard mixed apartment complex on                                    an ideal site within the city of Addis Ababa where the specific location will be identified                                    in the further discussions with the city administrations. The design extends quality                                    architecture with vibrant and inclusive urban spaces where the central ingredients                                    used to create a livable community. The façade treatment is designed based on                                    the idea of inclusive and exclusive space where the outer part is treated using a simple                                    facade treatment and the inclusive which is the side facing the central urban                                    space by making it more livable treating it with balcony façade treatment. The development                                    will include an apartment complex, commercial shopping, various services,                                    recreational space, parking, playground and greeneries.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 11:51:34', '2024-01-25 11:51:34', NULL),
(7, 'HILL BOTTOM REAL ESTATE', 'THE DOMINO', 'Addis Ababa', 'Ethiopia', '[\"Architectural Design\"]', '—', 'Addis Ababa,Ethiopia', '2022', '10000', '118662', 'B+G+11 (12)', 'Salvatore De vita', 4191669300.00, 'large', 'Planning', 'Under the concept of a village neighborhood, the design envisioned to create a self-sufficient living quarter that accommodates a variety of amenities within it. With this regard, The estate aims to create a luxury lifestyle for its residents through the combination of modern amenities, health and sports facilities. This makes the project unique and original. This quality of the project will definitely insure sufficient achievement of economic returns of our investment.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 11:55:58', '2024-01-25 11:55:58', NULL),
(8, 'HORRA CORPORATION FACTORY', 'THE BEAN', 'Addis Ababa', 'Ethiopia', '[\"Fa\\u00e7ade Renovation + Interior Design\"]', 'KIT Studio', 'Addis Ababa,Ethiopia', '2021', '34300', '34300', 'G+0 (1)', 'Horra Corporate Group', 53000000.00, 'large', 'Finished', 'This new coffee processing facility is different. It takes the spirit of the surrounding natural                                    world and weaves it through the interior of an existing warehouse shell. We typically associate                                    with production facilities. Color, texture, and organic shapes create an uplifting and exciting                                    space, bringing a smile to employees’ and visitors’ faces alike. The scope included interior design                                    of the office areas, the front façade and entrance design, and service areas for the employees.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 11:59:28', '2024-01-25 11:59:28', NULL),
(9, 'AGANA INTERNATIONAL APT.', 'THE HOVERER', 'Addis Ababa', 'Ethiopia', '[\"Fa\\u00e7ade + Interior Design\"]', 'KIT Studio', 'Addis Ababa, Ethiopia', '2019', '0', '0', '2B+SB+G+16 (17)', 'Agena International', 0.00, 'large', 'Under constrution', 'The original design of the development is conceived to strengthen the area role as a center of commerce,                                    working space and residential area as one complex. To further achieve the intent of the design,                                    redefining the existing program considering the urban context of the site to make more vibrant and                                    viable business center. Having analyzed the context, provision of state of the art fitness center, spa                                    and office space at the commercial floors and redesign partition layout to the apartment units. Compositionally                                    the commercial floors resonate an open approach which invites customer to the building                                    using clear glass to the front side, while approaching the apartment floors with different color treatment                                    to the outside of the façade in order to create a vibrant exterior look that reflect the character                                    of the surrounding.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 12:04:46', '2024-01-25 12:04:46', NULL),
(10, 'MNS APARTMENT', 'THE LINE', 'Addis Ababa', 'Ethiopia', '[\"[\\\"Architectural + Interior Design\\\"]\"]', 'KIT Studio', 'Bole sub city, Addis Ababa, Ethiopia', '2019', '—', '—', 'B+G+14 (15)', 'MNS Property', 0.00, 'large', 'Under constrution', 'The development occupies a prominent position on wello-sefer to atlas street. The sleek,                                    modern vertical façade element of the 14 story apartment building creates a unique outdoor                                    balcony between the vertical lines gives access to visual vista to most of the bole area and                                    tropical garden to the front side of the building. The upper most area with its elongated façade                                    element create a modern pergola system which in turn gives shade to the communal area for                                    the residences at the roof top. The 14 story residential tower comprises 14 spacious residences                                    all of them are 3 bedroom typologies, and the ground space left for the car parking.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 12:08:54', '2024-01-25 12:08:54', NULL),
(11, 'RIVERSIDE APARTMENT', 'RIVERSIDE APARTMENT', 'Addis Ababa', 'Ethiopia', '[\"Architectural + Interior Design\"]', '—', 'Addis Ababa, Ethiopia', '2021', '350', '3021.9', '2B+G+M+9', 'Ato Yohannes Abreham Mebrahtu', 0.00, 'large', 'Planning', 'This residential project will be one of the most luxurious residences in the city, standing in one of the                                    most desired area if the city. Providing exceptional apartments and access to city views for all units.                                    The design of the luxury apartments begins as an experience of arrival and throughout the journey to                                    home. A key driver is to enhance a close connection to the natural surroundings of air, light, landscape                                    and river throughout the journey.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 14:45:55', '2024-01-25 14:45:55', NULL),
(12, 'GRAR INT.', 'MIXED BUILDING', 'Addis Ababa', 'Ethiopia', '[\"Fa\\u00e7ade Design + Interior Design\"]', 'KIT Studio', 'Bole sub city,Addis Ababa,Ethiopia', '2022', '0', '0', '—', 'GRAR International', 0.00, 'large', 'Under constrution', 'Buildings at this scale house a community of people who live, work, and play in what they consider home. This new lifestyle is formed by a building that is shaped to be flexible, creates strong connections, and allows for diverse activities. The stepped volumes also present the opportunity to organize extensive roof deck amenities for the residents at different levels with views of the city. The volume dedicated to residential programs, office floors and commercial spaces.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 18:23:40', '2024-01-25 18:23:40', NULL),
(13, 'IEC YOUTH CENTER', 'THE REBEL', 'Addis Ababa', 'Ethiopia', '[\"Architectural + Interior Design\"]', 'KIT Studio', 'Sar Bet, Addis Ababa, Ethiopia', '2022', '0', '0', 'G+2 (3) *TOPOGRAPHY BASED', 'Ethiopian Evangalical Church', 0.00, 'large', 'Finished', 'The youth center situated at the international evangelical church is a very unique project of ours. It is set out to be constructed by containers found at the site, promoting the use of material recycling. The youth center includes a minim library, performing area, games centers and an auditorium. The containers will be painted vibrant colors so as to reflect behavior of the youth, being full of energy and life adventures.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 18:46:38', '2024-01-25 18:46:38', NULL),
(14, 'HORRA HEAD OFFICE', 'THE WAFFLE', 'Addis Ababa', 'Ethiopia', '[\"Architectural Design\"]', 'KIT Studio', 'Addis Ababa, Ethiopia', '2021', '0', '0', '0', 'Hora Co', 0.00, 'large', 'Under constrution', 'The 14 story tower is located between wello-sefer to atlas street. The office tries to demonstrate                                    flexibility of its accommodation taking account of uplifting workspace which tries to adapt                                    changes in the workplace. compositionally the building can be thought as a framed cube, with                                    the services and circulation cores framing the office floor creating relaxed office space comfortable                                    for changes and different arrangement when it is needed. At ground level 5-meter high                                    glazed reception provides a transition from the street along with mezzanine floor of restaurant                                    provision for the employees. At the top of the building a double height office space gives the                                    executive manager with board room create symbolic expression of the company’s vision.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 18:51:05', '2024-01-25 18:51:05', NULL),
(15, 'BISET HOTEL', 'BISET HOTEL', 'Addis Ababa', 'Ethiopia', '[\"Modification + Interior Design\"]', '—', 'Bahirdar, Ethiopia', '2021', '869', '3197.2', 'G+6 (7)', 'Ato. Biset', 169451600.00, 'large', 'Under constrution', 'Standing in one of the most visited city in Ethiopia, Biset hotel composes a quality                                    service to its customers with unforgettable experience in the hotel. This is all made                                    possible by the architectural modifications and exceptional interior design works.                                    Now, it is one of the well-known and most preferred hotels in Bahir Dar. The clients                                    are happy and satisfied which is the firms first priority.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 18:59:08', '2024-01-25 18:59:08', NULL),
(16, 'LEM LEM HOTEL', 'LEM LEM HOTEL', 'Addis Ababa', 'Ethiopia', '[\"Architectural + Interior Design\"]', '—', 'Mekelle, Ethiopia', '2020', '0', '0', '0', 'Mekelle, Ethiopia', 0.00, 'large', 'Planning', 'With its modern Architectural look, Lemlem hotel is standing proud in the cityscape                                    of Meke le. Providing luxury accommodation that is one of a kind in the city. The design                                    of this hotel is well thought and made to be one that you can easily recognize.                                    For all the rooms of the hotel, natural light and ventilation is made accessible thus                                    reducing cost for energy. The space quality and standards were given the top priority.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 19:01:24', '2024-01-25 19:01:24', NULL),
(17, 'SENNA HOTEL', 'PENDENTIVES', 'Addis Ababa', 'Ethiopia', '[\"Architectural + Interior Design\"]', 'Nimonah Architetcs', 'Bole sub city, Addis Ababa, Ethiopia', '2021', '0', '0', '0', 'O\'clock General Trading P.L.C.', 0.00, 'large', 'Under constrution', 'Senea Hotel would be the city’s latest addition to the hospitality scene, with the                                    objective of providing our clients with the greatest experience of what classical                                    hotel design may be. Determined to break away from the pervasive dullness                                    of hotel appearance, the Hotel is developed with vernacular environment in                                    mind, where it wanted to represent Arabic Architectural touch displayed across                                    the façade as well as interiors. These can be evident in the use of classic components                                    such as arched windows. It may be a one-of-a-kind monument, a                                    well-constructed hotel complex, or a style classic from a timeless classic. Aside                                    from these features, the space articulation as well as the interior accents have                                    accomplished the objective of becoming a classic hotel while still having a modern                                    touch. All of these may have aided the designed Hotel Complex in maintaining                                    harmony with one another and refining the conceptual tale of the facility                                    for guests. Aside from the effort of becoming Vernacular, one or two pieces of                                    modern classic are added to the mix, boosting the quality and attaining the                                    targeted design objectives.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 19:04:20', '2024-01-25 19:04:20', NULL),
(18, 'HOSAE REAL ESTATE', 'HOSAE REAL ESTATE', 'Addis Ababa', 'Ethiopia', '[\"Master Planing + Interior Design\"]', 'KIT Studio', 'Yerer Bir, Addis Ababa, Ethiopia', '2017', '0', '0', 'G+1 Residence, G+4 Apartment', 'APMG Properties', 0.00, 'large', 'Under constrution', 'Hosae, the pioneer real estate company, aimed to project the ultimate purpose and the                                    mental image of sheltering through a mass housing, which is a safe and a secure place                                    that provides both privacy and protection from the elements and the temperature                                    extremes of the outside environment. Therefore, admittedly, this project achieved the                                    thermal comfort and making it pleasant for occupants.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 19:07:29', '2024-01-25 19:07:29', NULL),
(19, 'ABIY BEHILU RESIDENCE', 'MIRROR', 'Addis Ababa', 'Ethiopia', '[\"Architectural + Interior Design\"]', 'KIT Studio', 'Woreda 02, Bole Sub city, Addis Ababa, Ethiopia', '2021', '269', '921.6', 'B+G+2+Terrace (2)', 'Abiy Behilu', 26726400.00, 'large', 'Finished', 'The focus of this Residences careful design was on meeting the requirements and                                    desires of the user while also generating new daily routines. Open floor plans, a glass                                    façade, the option of shielding to provide solitude, and simplified sociability between                                    family members and neighbors, which have a definite modern touch expressed in                                    simplicity. It is also a design that challenged the perception of the stair as only a circulation                                    element, but rather as an ornament that adds aesthetic value to the interior                                    space experience. It also offers flexibility in terms of enclosures, human size, and how                                    the house interacts with its immediate surroundings, such as temperature, sound,                                    wind, and views, in addition to view-related elements. Last but not least, the collaboration                                    between the client and the architectural team to produce the design plan and                                    build the house are reflected in the masterpiece.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 19:10:41', '2024-01-25 19:10:41', NULL),
(20, 'ADEM KEDIR RESIDENCE', 'GLASS HOUSE', 'Addis Ababa', 'Ethiopia', '[\"Architectural + Interior Design\"]', '—', 'Addis Ababa, Ethiopia', '2020', '0', '0', 'G+2(3)', '—', 0.00, 'large', 'Finished', 'The design of this project, which aims to provide our customer with the greatest and most luxurious home experience,                                    required a great deal of human inventiveness. Alongside the projects, the private villas demonstrate how architects                                    create structures that mix context and utility in ways that support comfort, seclusion, and material detail to provide                                    a luxurious experience. The entire construction team was tasked with finding the most innovative ways to satisfy the                                    demands of the customer, which entailed conducting ongoing, constructive tests of various ways to employ building                                    materials for the structure, walls, flooring, and other finishes. Not to mention, interior spaces aim towards an                                    uncluttered, lightly planned spaciousness where significant, frequently endearingly simple moments might naturally arise.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 19:28:48', '2024-01-25 19:28:48', NULL),
(21, 'FEVEN SAHELE RESIDENCE', 'FEVEN SAHELE RESIDENCE', 'Addis Ababa', 'Ethiopia', '[\"Architectural + Interior Design\"]', '—', 'W02, Nifas Silk Lafto Sub City, Addis Ababa, Ethiopia', '2022', '175', '490.7', 'SB+G+2 (3)', 'W/o Feven Sahele Gebre', 14230300.00, 'large', 'Under constrution', 'Characterized by a luxury and home feel is the residence of w/ro Feven Sahle. It is                                    current in the final stages of the construction phase in “Jemo Michael” in “Nifas                                    silk” sub city. Up on its compilation, it will be the one that stands out as it features                                    a modern design approaches.', '[\"HABAR Architects\"]', 'Br', 1, 1, 2, '2024-01-25 19:31:24', '2024-01-25 19:31:24', NULL),
(22, 'WOSEN APARTMENT', 'WOSEN APARTMENT', 'Addis Ababa', 'Ethiopia', '[\"Architectural + Interior Design\"]', 'Kit Studio', 'Addis Ababa, Ethiopia', '2021', '284', '1410', 'B+G+5 (6)', 'Wosen & Mike', 74730000.00, 'large', 'Under constrution', 'Wosen apartment Is designed to accommodate the owners and people who rent                                    units in a single building. The circulations is design to be separated making the different                                    units not disturb each other. The exterior is treated with a limited number of                                    materials and textures resulting with an elegant look. The form is well put together                                    with careful attention to proportion and scale.', '[\"Habar architects\"]', 'Br', 1, 1, 2, '2024-02-09 19:38:02', '2024-02-09 19:38:02', NULL),
(23, 'VILLA YONATAN', 'VILLA YONATAN', 'Addis Ababa', 'Ethiopia', '[\"Architectural + Interior Design\"]', 'Kit Studio PLC', 'Addis Ababa, Ethiopia', '2021', '340', '500', 'B+G+2+Terrace', 'Ato Yonatan Kebede', 9860000.00, 'large', 'Planning', 'Villa Yonathan is a private residence of a family home in Addis Ababa consisting of 4                                    bedrooms, entertainment areas, and service rooms. The social and entertainment rooms                                    are design with carefully and much detail to make them have a better connection to the                                    outside environment to make them more enjoyable. With its modernist approach, villa                                    Yonathan is one the most well designed projects.', '[\"Habar architects\"]', 'Br', 1, 1, 2, '2024-02-09 19:44:01', '2024-02-09 19:44:58', NULL),
(24, 'HORRA COFFEE EXPERIENCE', 'THE APEX', 'Addis Ababa', 'Ethiopia', '[\"Architectural + Interior Design\"]', 'Kit Studio', 'Addis Ababa, Ethiopia', '2022', '811', '10952', 'G+0 (1)', 'Ethio-Gabana', 23519000.00, 'large', 'Under constrution', 'Ethio-Gabana ought to situate a coffee experience house at bole, which will a home                                    to both modern as well as traditional coffee experiences for users and occupants.                                    The interior space will have different spot to experience the taste of coffee. A minimal                                    gallery will be situated at the entrance explaining about company history. Company                                    products will be displayed on the walls as a decorative element. The overall formal                                    approach of the coffee shop is a paramedic approach of the site. Following the parallel                                    alignment of the access points, and reflecting it on the roof by angular manner.', '[\"Habar architects\"]', 'Br', 1, 1, 2, '2024-02-09 19:48:07', '2024-02-09 19:48:07', NULL),
(25, 'BETELHEM Y. RESIDENCE', 'Planes', 'Addis Ababa', 'Ethiopia', '[\"Architectural + Interior Design\"]', 'Habar Architects + Kit Studio', 'Ayat, Addis Ababa', '2022', '500', '1870', 'B+G+2 (3)', 'W/o Betelhem Yemane', 100230300.00, 'large', 'Under Construction', 'Step inside the “Planes”, and you’ll be greeted by an atmosphere of serene simplicity. Smooth, pristine white interiors create a canvas of calm, while accents of uniquely veined exposed concrete and dark wood trims add a touch of elegance. The contrast between the stark exterior and the delicate,\r\n well-balanced interior design is nothing short of artistry. Sustainability is at the core of this design. The self-shaded language, passive cooling strategies, extensive use of cantilevers and overhangs, and high- performance multi-glazed windows reduce heat gain and decrease reliance on active climate control. The central swimming pool and atrium act as heat sinks and enhance evaporative cooling.', '[\"HABAR ARCHITECTS\"]', 'Br', 1, 1, 2, '2024-02-20 23:16:09', '2024-02-21 14:15:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `created_at`, `updated_at`, `title`, `deleted_at`) VALUES
(1, NULL, NULL, 'Admin', NULL),
(2, NULL, NULL, 'Employee', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('04EdhPKHbTtDIirZ3IzVpuRhymxlU8TJ3NZzqNVC', NULL, '102.218.50.57', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZURjRkIzZEJRcTU0dm5RbUFiMmFENlowb3VZbUlKSnBraEJuMmxvSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721897452),
('1l9OI8xvXeAlSEZRAVXzuGsu2VAx1MjWnXksu3Xx', NULL, '185.191.171.1', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVkpWeG5RcjdZODcyVDhHS0MwMmg4aTZzZFF4YkJsMHQxdGQxakxFcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0LzEyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722108578),
('1yLmPDL12A74yy6uWRoV3FK1n43nlVzknMnN60VG', NULL, '84.88.154.173', 'got (https://github.com/sindresorhus/got)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWE5mTjhPZFJmeHc2ekhEMVBXeXM0RDNuZlJrOUJnUTFKN3BPSkNBSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722084652),
('28sdRPSTdj7sTCBKCpDckKxD4AD5Q0fNyMKO3sk2', NULL, '66.249.73.32', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOGFsUjdvOTh0OG9qWkJGVFRZUW5xcGdvT0g3WTVvYkFUWmNWa3JmeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722130895),
('2BJi3bzvVRXHaMyKNUwC6rZmw9Wx4VRNjXcNoThm', NULL, '149.154.161.250', 'TelegramBot (like TwitterBot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVjNUVXgwNWhQaUxkWXAycUhwcnVyYVZCNDF1aTlGYUt1NUc5THY5WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722064942),
('2kPTO1DGZ1YPXG0l4Kva3I9DXM7vRbz0tllBqvTI', NULL, '35.222.30.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS21kTG93RFhwYnNJNXpscFFSNUx0NEdxeHRKcTBtOEM0NHhBTVhTRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722157070),
('2KyCaqRFX5QvPRsddzdTo0JZQ7X0Ggr0BzcvOkwr', NULL, '52.167.144.214', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieHlMaUl1eWZBMnZHYkE1dU9sbGdENnhRR0s4QWRKS2FueGhxcmxnRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722068085),
('2mlE2UEHasIodafGEEdCt63T8vtrBTqR0FLjYZ1x', NULL, '78.46.85.208', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36 OPR/107.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN09YeVlIUUV5S1ZsUWNtVGVCc2VUdUVJczNacms0am5WM2FrMTNiNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721921008),
('2oEewrungSlnbJkTzaJ37NXKttip7MK0xSapG8dX', NULL, '68.66.226.116', 'python-requests/2.20.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUmxMVU5TZEpsVkdzb2Y2cThRTlFzSk9MQnBtSUNETXdJT25kcjhrNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS5kcm9uZ28uc2VydmljZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1721922339),
('2OnKqDrdhxeyybVJfkMfoyqhcNbE5kQ60FIsgETW', NULL, '196.188.139.178', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidEk1VWZCbk5rUHhSc3hXSkpSUUNXOFdhRkExQ1VGbVNKc2U2NVRhSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0L01JWEVEJTIwQlVJTERJTkciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722097405),
('3GvUWriSb3rUGl3Ki991X3m7deGUeyaqh0amjAAn', NULL, '66.249.73.34', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWlN3aGduMXpoakNKZkFKNlowaWpnSjJLaGJNWWN5VGZsU0ZGYnI3MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722074291),
('4qy8dIjGZlCM19cprDnKL5VFEbI4oAwID2O36T34', NULL, '49.0.202.164', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.64 Safari/537.36 Edg/101.0.1210.47', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaENHU1QyWHVrZ0JiOUZrS0E4RW41bWY2RFh0YlFDNkVGNkJZeG5VOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly93d3cuaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0L1RIRSUyMFdBRkZMRSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722076114),
('5cSg75x2PPVN1ulr5X7fnxI1pkdjyWhYV7t2LaJ6', NULL, '54.245.149.139', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUUhYTXZTYUVLQkt4WWpUR05qZ1M1NXBjTmtBRUVKMXVpRnV0bUlwRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722067130),
('5P13JBPkRqfBkP1i6EVJu7iY5jMM9TVO1seh76KL', NULL, '66.249.73.32', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTGl2cEEyNlFVaWZsOFZhdVdkUHdKM3dSVWFYMmxhMDI5dXpJZEV6ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721903422),
('5v7T68aVne87BiuVoT0FZD1PzAkXyn9M6tCS1PZk', NULL, '85.208.96.211', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2hwemZJT2tlSk9ONkN1d3NYR0NBRHNnR3ZzSDBabDlOMlZTRXM1YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0L0ZJVkUlMjBJTiUyMEElMjBST1ciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722120085),
('6CzoUwavClESGaxwHH1aI7Hv9bGEoFM3bl7gVmFX', NULL, '51.222.253.16', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUlJlRkVIZkQ3UUVhQUozM1htRkF6OHFFMnMzRXBFd200VUlOWXlxeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9uZXdzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722162452),
('6DrBoqbxEpiHY7eAB5BzBJAGLpUScuPGqeyg7NlJ', NULL, '66.249.73.32', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZDFYZ3N0MHZwbUFqaDlGTmhSQjBvVW1xQ2hNVUxEVmhXV1FtM0gyciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722162377),
('6kZDZj0cv1dZvQRJLHjGAZPerxPfJPJFYn6aDE6o', NULL, '51.222.253.12', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieDdDNUJQQ3JncEliMUJMSjZ4OG5RM1Y3d3FIYTF6VHg4OEI1Z0dwUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722082575),
('75G8NN0qt9JGxN6nl2xwoAQC5hoWHCLQ1JjK0RrZ', NULL, '185.191.171.18', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXNHd0wxOW1rMG1vcU41cU9VeEMzWEJjMVhYelIzWEgwZnNxYmhHcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0LzE0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722116896),
('7LEGnBRe8PJdOWX7uPLmslnqLseGvRUcr0f8QcKo', NULL, '137.184.125.202', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieE9VNDV2djlVUmNpcE9tWlRvckNQZVZWS0dmMkQ4cDYyOU1sZno1YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tLmRyb25nby5zZXJ2aWNlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722060754),
('7RrGQJiRTTXmycO0y2jKp3S2omuWGuTRpPlq4eVk', NULL, '159.223.195.21', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWW1JaHk4TTFjQ0V6U0MzVzI5N2VBZFRueVVmaE12YXhQVzBPOUVaQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721886399),
('852eX5dOpwzOK9Y3XhhUHXd0Ew2q5U4yLfh50c9C', NULL, '52.167.144.222', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzZERUdhM01NTDRpUnZjbjJCTFNsRDRQT3piYXhRaGswZmZXTU55ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721978465),
('8KQDKejYdedCFSnZJ89YGK3aUw3kBtsZjijnaDok', NULL, '66.249.73.34', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieUFtS0pkQW9TenQyTmNyYTZPSlJVRnpxZ1hzRnBGM2YyYXpVNzA0MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721986769),
('8sp7RuprgfNWHQAUPGdGZFlwSpUpzsgVcfDdl77v', NULL, '40.77.167.2', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZTNnd0x6ZGZ2d2NyWXFKSDhaR0pmQXM2UEQxWXl4bzBMekFzRTgwNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tL3Byb2plY3QvUGxhbmVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722087888),
('9mnhx8okdySvZosqRK0xh90Bz9liqcGhqRFUQVue', NULL, '196.190.60.129', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.5 Safari/605.1.15', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia2lpNWFIMWtWYzFTc0xhRUxqT3hPM2FKV21aSzI1bTJ1VzZoSHg0WCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721974706),
('aaTko5NqKPQhPpb40c4VBbb3tTwhVTdUUqy39BD5', NULL, '35.202.72.83', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUEhNbmp3R1dPZjJOaThYbGtqakxFUjlsVnBuNEpGbGlIdmk3ZU9GWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721975371),
('Au0IWGOJZ7hCROqdQ3UWd6MlXtWVQhPUNPHO3t3L', NULL, '193.46.243.66', 'Mozilla/5.0 (compatible; t3versionsBot/1.0; +https://www.t3versions.com/bot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQU5BZzRyb3FYbEp0R25pRjNiTlFRUE5nN2RsNjBsNWF3TUJlTXZ4ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722102227),
('AX23WWbrnj1cqdUZfxwsVg9ZqSn7ZPnCQeXdQiS4', NULL, '34.168.204.153', '', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoibmFhYkdINGV4ZmRPM1JRSHR5VHRGSEpDQnRjN0c3bGRjVnhwZ2pzMSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722033562),
('AXqNEoboYjEkwUrD28npUZ1vkyuGGr66yUX97ARN', NULL, '51.81.249.28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/111.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoickJqOTJxVHRuc1hZM0NiNXpLWFdSOEZSbFV1cjlIOFpiS3RadGN0MCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721911804),
('BAuqYUqaC5Ozpe3OisXOnMRvvK7FpmBKVm4hSRjs', NULL, '159.223.195.21', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ3l3Z2tnM2RVcG1vZ0RubU1PZ0pCcFlrYmZ6Wm9EbUlmWDQ0aDBRZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721886398),
('bIasGCRxYD5OoHGt6yhjhNr3QUzFoPAxopraoSbk', NULL, '78.46.85.208', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36 OPR/107.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibDJzNTBzQXhVZk1ydktEb2VpQWRXTzliS2FNVGpBbzlSbHNOcEZ5ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721921007),
('biONsQ2iBLwcsnPmuGXPcMmcapMhCIXe9JWJU4db', NULL, '17.241.227.213', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU1J5VzdERDRSWTF1aHR2Mk82ODNYYWdiY0JCQk1wSjBsZVhzcDNTcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vd3d3LmhhYmFyYXJjaGl0ZWN0cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722032865),
('BjlhO6fOP1PaPSTDNbHXNNctfMxW6y7RBf2fhIJp', NULL, '54.148.48.241', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidG54eVo5WVV6UFh2Y3hDMFZsZlZyb3dNaVNmeDJ6cXJxelRmYlFpNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722149508),
('BKO38ZiixPLv95XlWNQzt71v4GnqIUWfKVLden3G', NULL, '185.191.171.17', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWVA3TVRhSkRtQU9ZRzRwc1U1eEM0bUlRQWNQNkNZMUswZkhkR1JMNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0LzEwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722138421),
('C2oqDVVOSH9SinqAtxVmU0HXsnAD2cHTQO2h7fXe', NULL, '34.82.174.225', '', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiaVJMd0NpVUgxajNmcXZ6NmF1TEU3WlRPTlBlaGNMRUVMcE5tWWJHNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722001679),
('cAs7DL6N6bycpV6gHRLLfCzj7vvUhyonEVEssxhb', NULL, '84.88.154.173', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.5845.96 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidnYwYk0yMmhBWVA3WEoxZ1NESENiZFg4V3ltdnFOaWo2Qm84dFVnWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722084653),
('cIoaka5upOberuk3L1rbZ9dtC4VxTG4zlo5jASVU', NULL, '66.249.73.33', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRE01WTNsSmZjUjZCVzRjcGM3WTY1Y0t6ZnI4MktRbHk2ZWY3azd6MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721899843),
('clzYa64EdBxxnXZg0sgWuNfDBG4MjK5bnfL9yJ6h', NULL, '68.66.226.116', 'python-requests/2.20.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRUt6WHNOQWNJaVdjUkxFZ0dDUEkyRUNGS2NzYk9kV2NYNHFzUVZXSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721922339),
('CrujLsdxXPyFIneUISFYeEcbEUKQoRdnXVPVs92y', NULL, '185.79.101.21', 'Mozilla/5.0 (Linux; Android 12; Redmi Note 9 Pro Build/SKQ1.211019.001; wv) AppleWebKit/537.36 (KHTML, like Gecko)  Chrome/103.0.5060.129 YaBrowser/24.1.1.23 (lite) Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicE1odjhodlNqQnVCTW5USFdWQVJnaGI2ajhQTkU3dE1GU1hCUTVrNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tL3Byb2plY3RzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722065082),
('elptpqnkuzVGaB2En1ATomJLxwWi9if7dJBGFaGy', NULL, '52.167.144.18', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2NhMk5nbG0zRVBwbFh3c05JZ1d2NFpIVFJzUmlrQzl1M25RUmxEaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722042898),
('eWJcXNNobsqhP8KFUHOr5TLQX9MLJolqOUV79yt6', NULL, '66.249.73.33', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2FBVHRtTFVBdGhLTk9NaFJBU1VoenpDZEV6UVY0TFBqVUhIZVh5aCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721954879),
('fdKcKpeFFxIXSE7KaXfNaK4NieAYsdXdSEZe58pg', NULL, '67.205.166.8', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid0dtMmd4aFU5dVd4cDhUZU8xTjhHdWtaSWdIY1hVOGNKY1AxcWExUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722018716),
('FfVzpeAMAF1h6G3kBefWfDyZuHCpJEkXaSq2pJJX', NULL, '197.156.94.98', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM3h6cWt0bTZNbHVOYUhTZWx5ZWRHOWJMdFhmdzNxdHBPR3I0NFVtMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721981280),
('fTqK9DaI3ISQod0bSjrQaA5Q9zlsoWFA4x3hWnGe', NULL, '35.222.30.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZWs5YjVOQU9YaVdRNGpBajM1cEtwVTVDWEZ6ZW1UOTQyRG03UlBDNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722065757),
('G4jQBfzHHQP65N3A2pWnWsy2kDceDYj217CYbU7P', NULL, '35.202.72.83', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmU3clNLa1Roekg3RjBJVTFKWEI5NDhVeTBIUkVvQnNBZ3JSQ0dsdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721975371),
('GCR0rCU39ofMR6Vajej7MmpfKTYYC6H9lMdEjwu2', NULL, '84.88.154.173', 'python-requests/2.25.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUxPNXViTDJqSU40N1NyVjdwS1lCWGdrbFR4QUJrRTJyVVBBZ20xRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722084649),
('GjU7gEAlzibTyHHYluYdVZCdObPseWI7ETBlmZKd', NULL, '66.249.73.32', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVjRtS052TGRhWVNYeGx3Y0NsQThZY1Z6UUVaQkpHaktLdElvQTVtVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721958461),
('hOpGmjJxU7QTjHAoVcFBka7VTxzZlYjJzfiqtaHP', NULL, '185.191.171.17', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGVmdFptQWRxVHJpaUpVaXVISjJxclpObXVaTHYyODg4dVp0aGJadCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0L0dMQVNTJTIwSE9VU0UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722102291),
('hzmSvqlB1jJCGo8JVuXNzmPMEZM5UGsSxCPMD8HC', NULL, '212.102.33.73', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:114.0) Gecko/20100101 Firefox/114.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYnJUMFdWUmM2aVZrVG50T3ZNVEJDSDFwbGZTRTlscGphZGVJVGdMRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tL2NvbnRhY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722041076),
('I0sehmq1NBKEqEYRYM2Engo61XvcHG3WG6ImTwSr', NULL, '66.249.73.34', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXN6a240ZE5iUG9TN1hjT0ZrWlVCZGRGM3QwcG9tWWhqa25oNnoyOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722134490),
('iGj4oj8iDHUMOjbdmiFPdDzZeqmjiDh50Vg70u0I', NULL, '54.148.48.241', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRjRsZ2E1VHJoN3FobWpNZ0lFM1gyTGhHd0xjWlp3NEZnTTBNenBKWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722149508),
('IKVwQXzG83Uwa7aSiFLK2PEcWNRVO3e0zMo21wyf', NULL, '66.249.73.32', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS2ZmM3BxU2tERXlVblpjRHc3VlRUSjZUdzRnY2t2eHpkbWVYZlJuOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721928188),
('jd628RrHBXYcbB5TdzZ5Nwi0CRHzmRAu54L7yhNy', NULL, '35.202.72.83', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidEdMYkVhRHI3dDRkTlVNV1ZmQ1RTVEtYWUYwdnQza0k4NDNTY1o2WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721975381),
('JDPHqSxgQ7UC2STb5JBanlskqQjNkhPM2XU65kxO', NULL, '35.222.30.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMzdGUG9EV0tjejh0R3ZIbDZrcHBPdnhZb3k3czJsZTlNa1Y1R1lvTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721991354),
('jRa1WXuDbGIlEbdTZXQk7SkdmAunEPKcuUvqSb6V', NULL, '185.191.171.4', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicUVrYTFydUJ5c1hhVzRxazZjQVJtYmFvNEw5Qm9ZanNORzRyQUFETiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0LzMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722114005),
('K7Q0qvtQRqHE9exQdMcebIghceAftY4f0jReGSVz', NULL, '192.42.116.178', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:82.0) Gecko/20100101 Firefox/82.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQkYxZUVsV1VURENXRmlHamJJc00yaVJLNTQxbVFDeEFhTTMxYnRjWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721974705),
('KgcrX7ec2LVBJ1FFXQKnql7Q1khsGc099CLSDYSd', NULL, '85.208.96.197', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakRJMzg0ZjFOckh4VkJkeXBYbEpzSWdsdlRiWnBISU1vTUd5U0RzQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0LzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722140964),
('L5JQenPV25T13B2dU9v2Uu4AhJHCRHLAjpcKtGry', NULL, '66.249.73.32', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ3llT1BseGZCUUZsY2psanFjZDc5cTNJbGt1OG10alJYczNMNk1PRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722077847),
('lbM55AuO5VVY4Hy64lHL3FgITiIHNOLbbcGuYXLk', NULL, '35.222.30.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVHR2aFAyVUhhOHNBT3JYWHh5R2V6MExPc2gzZGZ2MHM5NklwdFZmNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722109880),
('lHMtoQ3hnTq053pgZI611SlAJqegGLBoAk9T5bGQ', NULL, '17.241.227.247', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoickNmRkJiWGYyYXRPQ1VFVnpOSkxqdjFybURrTzNvUjRPZDdtQkNseSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vd3d3LmhhYmFyYXJjaGl0ZWN0cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722001676),
('lIZ4bpgMf9OEpaguG2S94W5GEUwRfB4r4Va0QIwh', NULL, '35.222.30.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2tyUVVmbjJFbVJSNzRjYXM3dU9PN2pWd1h1MHNSazFoMVg0bnRadiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721977561),
('LnSHYoP2qXjHLUzej7DMwm3gGpN9p8uxpPwug83R', NULL, '104.28.252.16', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.5 Safari/605.1.15', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXZ0d092N3NkVkdnZVZ3NnVCcEFiSklrS3ZIVmQ4MmU5clVINWZSYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722162762),
('lP2FQAp7O8lqT8XrLXa7n2dHgXqeaKq1r2S5A6W6', NULL, '106.75.66.241', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/577.49 (KHTML, like Gecko) Chrome/79.0.833 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYkZZZW5TNHVPeEF3VGthc2F3dW90czN6QkZPenI0NTNIZ3MzMWFNTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721894581),
('LzXyAxlkAFuzrh8ivQjpo5EoIZGk3gKZyRG1tSMC', NULL, '54.226.163.233', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVkhmT1ZjOHRXRk0ybTJrbU9naGNHYWV1THIzVHpPdHh0dDh3RzB0VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721940715),
('MAkj60w1Ge3W6PD8gXRqUPkccsnAXoPhiqDQ8QDb', NULL, '44.213.62.232', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWNFdjk1OWN4SWFBRDcxYzdyZUhnZmpHMjRJb05wREVYck5MTWp3RyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tL3Byb2plY3RzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721952182),
('mcSg0SnOK04Wpi2qG5QCcxTqxvSqfr1zsqqJg7tu', NULL, '54.88.246.96', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVFlDSE04SXNvRDVsbUZNYW1OVDJSS2ZhUVVIYmxHZVZSdklpSHUzNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tL2Fib3V0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721945146),
('MJIad5FTdMqWlgvKvMWfHwpfV4mK3TvgX614jXtF', NULL, '62.122.184.194', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoickRmVzRXZFFFbEU2Q29QNDRlcXJFM1M5VkhINkZ2bmQyRGZpNmQ0dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tL2NvbnRhY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722163290),
('MKHvDKw4Uy1eEgMJWJhi4zGosQ8kqS8dUuu8cosE', NULL, '52.167.144.140', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSkpMUW9NNHZIeTVWMWJFbk0ySWFPUUZHSXVvVGwwSXRwT2NwZldoSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722029149),
('MqfC5QpxXuuVZm2Lm8NbXTgwYc3GJadODS0ZwW6k', NULL, '78.46.85.208', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36 OPR/107.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWGFKdm5zRDhnRWhZWXU5ZXYxdGtEVnhzWHVhYnhkOXUyZk8wd2tjMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721921006),
('mzjB4GnWJW4dOueHXuWQluu8BoTavlgoFOD1M6O5', NULL, '18.246.27.242', 'Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/20130405 Firefox/22.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoic05CZ3BySkx2S25LVnFYNHhCZllMWkNsRFg4S0NpSndwdFBUeVcxcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721889560),
('NI4s4yGrCS1BYMCTR84ZPpErZ49r9n2NimIizFCs', NULL, '185.191.171.7', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTmhlcm96aE5UbVlxR3cyZXFvUDBGd3RkQ21qOEVRaHhTMVlVQTNTZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0LzE2Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722099671),
('NuGhLxM95fmtUediPIcRjrMHiZrwoN4zKUD7b6PV', NULL, '137.184.125.202', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjUzOHg4eE9SRkVMYjU5ZGN0MXBuV05rQXpqeG9rNFRlU25CWmRrTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS5kcm9uZ28uc2VydmljZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722060754),
('Nws68pr0kiVFlV5ZhHXUPguF963AjohtAcsF4cx6', NULL, '35.222.30.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiblo1dVNwWUQwaVdIS2NHRm1ua090V1pEcE9kN0xQZXdFYmZNdEtXYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721890325),
('nZ4zsEyvHRYW0ETkQJpL1A3T8WGfNxdUM5Y6226o', NULL, '51.222.253.1', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZnI4TTlUWGpGQ0dQbVZER21BUGhzMkpsdzJBV05LVmlabkoxVzNwbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722158975),
('ofRSTCgmhbFutxT28ZxTVANssDptBcP3ey3rLEwL', NULL, '213.87.138.202', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1JBMDBQdGMzZUdxdXBCWGY5NUNvWDNqRGV1ZnhQbUN4NlRpelVxQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722064960),
('olfMrsYRxFs99NmMGbtlWSIPXbwZ5xakx43RUFbi', NULL, '78.46.85.208', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36 OPR/107.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWktiQTRGWG9ocHZRZVB3c0NsV01YbFBlc3F3a0JoazdRSkhLemRZMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721921007),
('oNlaZ9gs2uCFU3F5maZAaP5ARMFtOfN34U7sz5UR', NULL, '54.202.35.11', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUGFhOVVNVHlMQkNzOHM1RjdMQ2ZsM20yaWJ0RzRCRVFva2ZDOXZLRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721976539),
('op21TbEmMsu4qiuSXGpqk4lD8dfD34sRrb2qmV2K', NULL, '34.221.159.153', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakc4OWVhc3JWZmJyWGJmZDdoclFzOGFOV1pUSEI1UkZ0Vk1VeW43QSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722102720),
('OsKvzgaircH7Wva9vlm8HtcnGtH5mH2IlUZrrBSB', NULL, '52.12.251.113', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOFJXUlZSa2k2SEIzb05WYjQxSTNOTXV4Z0hwbHhpNlhyajMyWHZvMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722064055),
('p10cvzAF1krzm9a6r4JuAVAclM6er5Jp7ifcD6cs', NULL, '52.167.144.18', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia3VleXB6UXM1RmY2Z2tySEwzVEJ2c2lSclg3bm5ZdkFKUFZ3clF3WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721985205),
('P1r435NOr5sCvfFh41AM2x4zzh3vsplEzEDkRAyz', NULL, '66.249.73.33', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS0xYdnZUSHFNcDh2dFF4cWV3QkozcW1IN1dHZTR0TlNmdHhISWRxWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722103895),
('p2mKrpmjMF6hNrpJkb1ssmbe8IwNM0vKSkrZjAxI', NULL, '62.122.184.194', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Iron Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieXJmNUJCajlkanNpejlBTVh5SkZpc2dqd2RZYVNvV1E5eHQzSjVKcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tL2NvbnRhY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1721930626),
('pauyHo3OdQiJD1DldICPisM1oWwV8ciwV0mKEGcM', NULL, '149.154.161.196', 'TelegramBot (like TwitterBot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOGJPOGZxZWpacHFKemc5bHlrQjg1THpyRldrY2JNUWtwaEVZVzM5eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722064942),
('Pha0c8ConfwboC0MxtHfLd0h4bOkqFvaThh3zz8i', NULL, '185.191.171.4', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicDFDbTR2N2t6OXZpMHg5c1ZuSlVFaGFiOGxXd3g3bVV5VTY4QVE1OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0L0hPU0FFJTIwUkVBTCUyMEVTVEFURSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722108679),
('pHWGt6VtwpHQWVEZFGmtDHfuDoLvqyXdToTWr1yG', NULL, '34.216.211.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOHlkWE1XaVdTemk0aTU4RmZvU056QjZBN04xbWdNc2xIZXQyZUFuciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722102667),
('PLkxXDnF9jzlLbKuiraxjiVn1CueIrXc1whWT6Rf', NULL, '192.36.198.80', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.3.1 Mobile/15E148 Safari/604', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY2RJOFBIbk5mNWNIUGl6YkFha2JwYXdzeGQ3eWVlWmJwZG91MUhIRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722128082),
('Pt8gqO1iYIiFtbvS8GJ2QfJlEr0kRV1IzLD2nOAy', NULL, '84.88.154.173', 'got (https://github.com/sindresorhus/got)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZVljV1h4SHRpNVVCQTJ1cXhmaHFsVzBiZ0FqbG55RWw0STQ5ZGV5WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722084652),
('PZtrIFAqIFwjkpjmvW6nOYTKsGS2761vU5h4kg5W', NULL, '51.222.253.20', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTU41YVZ4QVJOeGZ3SkEzMEZoVkRqUTM3SDBSWG9rWFZOZVNqUVFpQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721910444),
('R0fi0F69qtkSa525mAclGRehj89mA1vhDd3WvUre', NULL, '40.77.167.70', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid3BQSk5HUXlqNHVKRW42a3l0MUhNRXhHd3J3azlvVGgzWWxSanJTcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722064553),
('riSGq08UNpxCnNhVh9vLO7mVQLiSdLSxF5fLONzp', NULL, '196.190.62.44', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZGRNdE1lZE1FS0hGckZwMkpxTXBheFJhSkVlTEZnWHdmcUlWRGhOSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tL2NvbnRhY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1721986950),
('rpsAPVPMr1FhQoKpjkwVyAzhOqiPYgSGnsXn6xmA', NULL, '51.222.253.5', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUG4wTk90bzB5WGNYYjJNVHd0QjVVSGU2TVVUQzZYbkNWZE40SmcybSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722141677),
('rsnej6Jr1CUjZOsBaGhZ0dza4UKtAaL6lY30kLRW', NULL, '54.88.246.96', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZFZXdG5BTE1ONmQ3R1VLNmtSMVM4bUNkcnhRVDNKVFloWWVHZlI3RiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tL2NvbnRhY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1721945148),
('RYpze335xbTB6riQfxTFvwYexT40vwBw4KXSbqY8', NULL, '34.213.147.223', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGZ1em5KS3dzMWhNejViTG40ZDFCbG1ENzJWT3Z2Z3hEVzhNYzB3SCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721976611),
('SBjYds3spmTYbF15QgfRttLAl7WLv9urXZlWVb6W', NULL, '35.209.68.128', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoia09zUHhib2JlSkZqZlB6ZmdYblRTT3cwTFJuR2RPUlNQalVlVUR3USI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722163866),
('ShS4nGjjlVSZfWPLdK4aOlQtDioAIXls0WW4CEuC', NULL, '40.77.167.27', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRzF6NDd5Q3BSVnBHR3VCbnRsSWpCclo4SGRaOU15UnlrQm9XWHh2QyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722096192),
('sWf8A0ALZLi1ZWVqTpk32JSyAF3A1XNKPEEX40F9', NULL, '119.8.166.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1poMWpvNGFKWTFyN1JWRnZ5ODZERlN4TEV6Z3dGOGJRSm1Sb3B6MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly93d3cuaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0L1RIRSUyMEdJQU5UUyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721900555),
('swKsB4EvsNVq1n9IPglpZeVvz600OQQtORYxUV28', NULL, '67.205.166.8', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV2VKeEh4dlhuOHZkRG5OU1hlV2xNV1dXVTNLQUVqSThPaXFUV1dJNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722018715),
('SZyUgQGgaZvXUCGbP1uDUIec0eMJGJlWQIL3z0cc', NULL, '43.131.44.218', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQkhVeDlpTkYxRkplTmlSUXV4bFZHVjZPOHZRUHo3NWNZZ3ZFWXRzcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly93d3cuaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722011620),
('TQRGYYnidOPoGOdZE1a8vvtqESoK76e2PnxFn2dQ', NULL, '35.222.30.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGtwM05VdDNHalprcjVOclA3SHhqcTVXZ1BQZm9ZRFdoV09rS2o3bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722156810),
('u6BfXUZh9oErHly2aHRD2n0rSXaOiBA3sdqzv7BB', NULL, '34.219.113.24', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXVlVHNobmRNNnJBbzludEpaenZhV1kybUthU2pVQVlKQm42RnJTRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722020158),
('UFGUA7swiASnQeH2J457mfkSQHvjrzHj3DwPVUgE', NULL, '66.249.73.33', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZmR4NUtvOFJ5WkJ1VnY1cnhaaXE2Zmhmd0pIdVRhc05BVmN1dW44NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722015914),
('Uo14TwOp6S0eZj3o9lTf8Xewvj88fvAjoPcy8K9B', NULL, '196.191.60.47', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 OPR/112.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSUVlbFNSWU1HQ2Vta1hxdGxuRjRZN3Z0TGI2SEIyZVJuUmMwQUlDViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9uZXdzLzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1721990828),
('uTdEwKUkPG7tn2EY6H0gmHEkRHevP3z4dsjTrtM5', NULL, '170.187.145.68', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaFhFM1dIU3RWU0hpeFlSdGFUa1BZMWVFalhYYnV0ZEJURVNJWkpFNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721972940),
('UwqxcGCBklqqYagHC1VJf0r5VzUnD0Hrqzj4rCAY', NULL, '51.222.253.9', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYUFBbnFwdWxrNWFXd25FUFRxV1NWNFhZZ05KR09sMXRoT2pXZ0tuWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9uZXdzLzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722146930),
('v303Soxo8XsgYAFCRl7TWqqNLC6udKr4DHCDfT3V', NULL, '66.249.73.33', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaDFUYm5Ed2lWaWRIeWRqNHE3dmhOdzczQkVBQzdvZUsxSXpGdWRvbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722166797),
('VW9ftoGEswFhHdkBLt2AQZ6Bc8Z2tlvZxH0AaRBw', NULL, '124.243.134.213', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.64 Safari/537.36 Edg/101.0.1210.47', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzVNSmVWOUxtN0l5RXhONnhlWHFNNXVxcXRyRzFPZ2tENGZGb0tnayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjA6Imh0dHA6Ly93d3cuaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0L1JJVkVSU0lERSUyMEFQQVJUTUVOVCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721900931),
('whmKrxuenQbYMG8UyhHx5lQqpjRBnfCGG5BKFh42', NULL, '34.168.145.170', '', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTHN6Ym4ySktsd2FQOUV6OFFkcFJkTXNZWTZrQTZXOE1MTFFmenM4ZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722032884),
('Whvyfhg5bUEcJzzbSR4VnWclYBKboLX47EfoI1x0', NULL, '185.191.171.18', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzhseVh1U28yN2Q1YVlKYlJqNXI4ZlZFam5Ua2lKallkQUQzRHNoQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0L01JWEVEJTIwQlVJTERJTkciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722093753),
('wJ7KjLsyVlCuBNjCtBEwhNWKvYQE8tc0m4nHt5cH', NULL, '190.92.201.153', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRFZVRFh4bDJUWUNQR09QeUdWU0Z2VVdUSXYwVHNmZWVDQ3FRRjlJSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly93d3cuaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0L1RIRSUyMEdJQU5UUyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722139111),
('wqViPVN9D78vysMj5ggaXS6esc5kqy5aXjdgbzIU', NULL, '51.81.249.28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/111.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicTFaVlFYMGNGelcxQnlUSjJqTEswTXVmbDFER24zVGxPSFlvYkZzYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9hYm91dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721911804),
('WyVXdWUmfeWhEL9yQTroT9WsjuqEXrMktHgWT5JU', NULL, '3.238.228.167', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMDFCV2YwZmd1S1BUaUk5YmFuQ3laT05qRVJZNXdZNHJSUmxhV1NOMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tL25ld3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1721960313),
('x2p6seARcvGtvrNlVHv6TQSCwwX7jGEAWwPqR3ik', NULL, '199.244.88.229', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQVZybVpvVW5vSFIxT3l2ME9nbjdkMkxaT1kxMVVZbUE1TnNxRUd4ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721984725),
('xqBMPWEBx7L0VXNxEt3dACIiom47j58fr9mK1Vi4', NULL, '35.222.30.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2ZHVWowREZHR0lWNTNCR3k1bXJGWWFJUDZVWmpJM2dXeFdNU0IwQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721983015),
('xW0M8nlTYWaUCU7CtMbLyeAIUr3YYx0hazjilgkc', NULL, '35.222.30.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVk9oNWl1Y1Fua0xHWWJqdWo4aXg0RnlFWmlqT2p6NXZGQUpXaEZOdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721933772);
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('xXtsUDPWcWskaqr2EYm6GwdRJOrgxbGmIi6MvpIn', NULL, '66.249.73.34', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSzZDS3JIMkNhcWFpSkk5UkpBVXRqZjJrMzVvYURMRFRKRHl5eTNJZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721992053),
('y2rk90XsEekYpSSb4E4BUHGQXmRK4YMy9YS1DQ1y', NULL, '119.8.189.50', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWEJlRWJVNWh0SW9TT044RzFjYXlLZEFKbE0xZHV1c2JJYnNSY0Y5YiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly93d3cuaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0L1RIRSUyMFdBRkZMRSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721981843),
('YD8Ika969el9kFVh68VjCTbLqgLmh10DKjZacmrv', NULL, '197.156.94.98', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMzdpYkVUdHN3S1I2TldJczVSM2hVa0NxdVdITWZ6T3VPV1hCbFRJZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1721891997),
('yFKU6PpjiZrLTxNLb1LHEBU4wplJ7qZkSR1oLl3V', NULL, '35.222.30.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSlBEMzM1TGxpOWR1TWZ2Q0RTQ3B5T0J5YmJ4T2RTTU91SmZvbjBZViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722060086),
('YR2CyZWM8yCquD3NvJMAEekiL1oQ88Ko8xX9rgqe', NULL, '35.89.227.217', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibUUxdlJaUDRPSGFxTUNnbXJLQ1RTamVReTVYcGZjMkJFZDVOVXBuUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721980039),
('z1YRTPjXJI3Ebn1CG7aa2slsLx43o7zmDODE2vSA', NULL, '66.249.73.33', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVpRVjNPc0lXSzkxTUM3YW5oeDk4amNKNENuWGtSQTJxUldQT0VmVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722045045),
('ZhTaBFrYUzKnTVVT0p2jbrDGPWIaTE9M5sm0kYva', NULL, '114.119.187.104', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.64 Safari/537.36 Edg/101.0.1210.47', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicVF0VnUxQ1R5Z2k1R1VMVWdhU2ZNS25jcTdENlNRaG9xWUY3b29VZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly93d3cuaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0L1RIRSUyMEFQRVgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1721936393),
('zk5K17BVALDFINUtRsexmchG170H37y12sIkCWkW', NULL, '185.191.171.13', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiREs2eDJGbnVsdUgxWnEzZU8xd01rZm8zNVJxa3pWUEl4dmhwa25ZRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbS9wcm9qZWN0LzkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1722126840),
('Zm0KqRQgoAJP5RBt20QKVlceVvbORsonCwKZ8GO8', NULL, '35.222.30.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicEVod1F0dzBiUTNvUmF2RTRYSXRkRWJ5aWttc3dmSTNRajB3M3A0VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vaGFiYXJhcmNoaXRlY3RzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1722021481),
('zqHYgbxQkH4rRE9SU3CdgdY7XBciJJCVoitXAnp1', NULL, '43.131.44.218', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia3hXZHlJdXhZTWlNR25iUnVlY1d6YWplUWNtQ0hMWnhKeExrQjFBbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721969941),
('ZStfYSVGmyJAT9CpnaAf0axpd830abHxPqhohkga', NULL, '54.148.48.241', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWQwRWJ2ZzlnNVJYaGcwR0xnM05HeTBwUmNSMU1UY0c0ZHpVMEozNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9oYWJhcmFyY2hpdGVjdHMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1722148819);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `username`, `job_title`, `location`, `phone_number`, `user_about`) VALUES
(1, 'Neud Tesfay', 'neud@drongo.vip', NULL, '$2y$10$3BdMF4CU8OhHfHeo4c2Bp.MPvdidIFqztdaIu4lHMHfFJegNy.KeG', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'ne\\\'ud', 'Developer', 'Addis Ababa, Ethiopia', '+251966018311', 'My name is Neud Tesfay, I designed and developed this website. Hope you like it!'),
(2, 'Elias Walalign', 'elias@habararchitects.com', NULL, '$2y$10$ryS0Vp3WnW80I9E0nIcEXO2lT.7dIZSuo/sira7Dt4uwi8kI1IxRu', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'admin', 'CEO', 'Addis Ababa, Ethiopia', '+251911566427', 'My name is Elias and I am the Chief Executive Officer of Habar Architects.'),
(3, 'Amanuel', 'amanuel@habararchitects.com', NULL, '$2y$10$zBx5ssjgi/LoHJ3sVjUUf.lkQN3rxAidadOfpxXb5Rr1RNNc0z026', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-02 17:35:57', '2024-02-02 17:35:57', 'Aman', 'Project Manager', 'Bole, Addis Ababa, Ethiopia', '+251920113123', 'About man');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_project_id_foreign` (`project_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_role_id_foreign` (`role_id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
