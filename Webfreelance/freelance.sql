-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 18 Mars 2018 à 10:02
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `freelance`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `name`, `parent`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lập trình web', 0, 1, '2018-02-06 17:00:00', '2018-02-21 15:02:05'),
(2, 'lập trình ASP.NET', 1, 1, '2018-02-18 14:32:47', '2018-02-18 15:08:02'),
(3, 'Lập trình web PHP', 1, 1, '2018-02-18 14:33:44', '2018-02-18 15:10:29'),
(5, 'Thiết kế ảnh', 0, 1, '2018-02-21 15:04:30', '2018-02-21 15:04:30');

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

CREATE TABLE `city` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `city`
--

INSERT INTO `city` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hà Nội', 1, '2018-02-21 14:06:06', '2018-02-21 15:04:56'),
(2, 'Hải Phòng', 1, '2018-02-21 14:19:37', '2018-02-21 14:19:37'),
(3, 'Hồ Chí Minh', 1, '2018-02-21 14:21:12', '2018-02-21 14:21:12');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_26_144425_create_table_category', 1),
(4, '2018_02_13_210608_create_table_work', 1),
(5, '2018_02_13_211239_create_table_takejob', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `takejob`
--

CREATE TABLE `takejob` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_work` int(11) NOT NULL,
  `id_nguoinhan` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tghoanthanh` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tailieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` float NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `takejob`
--

INSERT INTO `takejob` (`id`, `id_work`, `id_nguoinhan`, `content`, `tghoanthanh`, `tailieu`, `phone`, `skype`, `money`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'sdfasdfasfasf', '2018-02-28 13:29:36', '', '123456789', 'qưdqwdqd', 1300000, 1, '2018-02-27 17:00:00', '2018-02-27 17:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `chucdanh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `groups` tinyint(4) NOT NULL,
  `gioithieubt` text COLLATE utf8mb4_unicode_ci,
  `linhvuc` int(11) NOT NULL,
  `money` float DEFAULT NULL,
  `trinhdo` tinyint(4) DEFAULT NULL,
  `tailieu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `skype`, `phone`, `city`, `chucdanh`, `groups`, `gioithieubt`, `linhvuc`, `money`, `trinhdo`, `tailieu`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lê Quốc Huy', 'lequochuysv@gmail.com', '$2y$10$I7IQhM6dVChI1eOy1Rfq..lUtI2Rh71weQwK3XqO3wnjDt1lpgSTW', '2182.jpg', NULL, 1643844261, 0, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, '2018-02-06 17:00:00', '2018-02-22 14:00:40'),
(3, 'Tạ Minh Đức', 'minhduc@gmail.com', '$2y$10$c.L1Oae2VRrPsl5dCoj6ve8P.Tlrt80sFPrDSqnFga/R1.bkhIrSq', '2174.jpg', NULL, 164384426, 0, NULL, 2, NULL, 0, NULL, NULL, NULL, NULL, '2018-02-22 14:01:11', '2018-02-22 14:01:11'),
(4, 'Lê Văn Doanh', 'levandoanh@gmail.com', 's20041996', '2174.jpg', 'hunght', 1645674261, 1, 'CEO', 2, 'tOI LA AI', 2, 120000000000, 1, 'Test.ppt', NULL, '2018-02-20 17:00:00', '2018-02-14 17:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `work`
--

CREATE TABLE `work` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_nguoithue` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linhvuc` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tailieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tg_hethan` timestamp NULL DEFAULT NULL,
  `city` int(11) NOT NULL,
  `money` float NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `work`
--

INSERT INTO `work` (`id`, `id_nguoithue`, `content`, `linhvuc`, `name`, `tailieu`, `tg_hethan`, `city`, `money`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'ádfasdfsdfas', 2, 'lam test', '', '2018-02-27 17:00:00', 1, 1200000, 0, '2018-02-24 17:00:00', '2018-02-27 14:21:40'),
(2, 4, 'adfsasdfafs', 5, 'test tin tức đăng đăng', '', '2018-04-26 17:00:00', 2, 2300000, 1, '2018-02-25 17:00:00', '2018-02-25 17:00:00'),
(3, 3, 'sdafasdf', 5, 'ti het han', '', '2018-02-27 17:00:00', 2, 12333, 2, '2018-03-28 17:00:00', '2018-03-28 17:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `takejob`
--
ALTER TABLE `takejob`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `takejob`
--
ALTER TABLE `takejob`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
