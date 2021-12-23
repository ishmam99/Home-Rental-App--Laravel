-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 04:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homerentalappv`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '01234567890', 1, NULL, '$2y$10$stPE.KgqAMkJ7..9QUE5meQlb.tuxo8L5qUVQGTtIP.Q8OpxA/whm', NULL, NULL, NULL),
(2, 'Client 1', 'client1@mail.com', '01236547890', 3, NULL, '$2y$10$xVligUFO59cmEXSyZl6lPO/rK/LWd.cAcYC.adNeMW1TVUMZaUU6K', NULL, '2021-12-18 14:32:31', '2021-12-18 14:32:31'),
(3, 'Client 2', 'client2@mail.com', '01236547891', 3, NULL, '$2y$10$/AwB5squcFd1ChVJjKXcHeDxCxG3HrG0toNQoWua/jbGK.qtUFkBe', NULL, '2021-12-18 14:33:10', '2021-12-18 14:33:10'),
(4, 'Client 3', 'client3@mail.com', '01234567892', 3, NULL, '$2y$10$5IbHWlUxZaEuTt4fkq8Bn.Q36Q0TYE.Q27noh.y/sPY/0oDf6O1QC', NULL, '2021-12-18 14:33:46', '2021-12-18 14:33:46'),
(5, 'Client 4', 'client4@mail.com', '01234567896', 3, NULL, '$2y$10$W5oCM.RJQmnHu/NO6Ny9aOnTTjWT/d2IKjlvnuI9nYa1KAjLB5bnq', NULL, '2021-12-18 14:34:24', '2021-12-18 14:34:24'),
(6, 'Renter 1', 'rentar1@mail.com', '01236985470', 2, NULL, '$2y$10$D4aIEYArwWfOfAL7.bz4KOS/.VvgcVnGt9p9s6QbGX3ZSSF1/Dnau', NULL, '2021-12-18 14:34:59', '2021-12-18 14:34:59'),
(7, 'Rentar 2', 'rentar2@mail.com', '01236547896', 2, NULL, '$2y$10$p2kCbY36Dvgkqm9Kd6/GGOG4lqmfKBgPLKYaI1ypXWMXAcXj9QTjO', NULL, '2021-12-18 14:35:38', '2021-12-18 14:35:38'),
(8, 'Rentar 4', 'rentar4@mail.com', '01896542370', 2, NULL, '$2y$10$MExJHRnVWCQO9hzDfOI/jOEfOKg1kSvycn4SecZv5UVCOKAmn2nzK', NULL, '2021-12-18 14:42:38', '2021-12-18 14:42:38'),
(9, 'Rentar 3', 'rentar3@mail.com', '0145978230', 2, NULL, '$2y$10$KRTuX81m0uiLWcGCNj0UQuru.QxORDrG6LLmHfxIJGTr//kohzvn.', NULL, '2021-12-18 14:43:38', '2021-12-18 14:43:38');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
