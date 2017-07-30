-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2017 at 04:12 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cfg_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `messages` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `user_id`, `messages`) VALUES
(1, 2, 'hello im teacher a');

-- --------------------------------------------------------

--
-- Table structure for table `lru`
--

CREATE TABLE `lru` (
  `lru_id` int(11) NOT NULL,
  `lru_string` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender` int(10) UNSIGNED NOT NULL,
  `receiver` int(10) UNSIGNED NOT NULL,
  `chats_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `receiver`, `chats_id`) VALUES
(1, 1, 3, '1');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2017_07_29_111025_create_subject_table', 1),
(3, '2017_07_29_111246_create_user_subject_table', 1),
(4, '2017_07_29_111638_create_units_table', 1),
(5, '2017_07_29_111936_create_chat_table', 1),
(6, '2017_07_29_112402_create_message_table', 1),
(7, '2017_07_29_112910_create_plan_table', 1),
(8, '2017_07_29_114413_create_videos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `otp_number` int(11) NOT NULL,
  `mobile_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `otp_number`, `mobile_number`) VALUES
(1, 408403, 2147483647),
(2, 907936, 2147483647),
(3, 4008, 9878),
(4, 58178, 1234),
(5, 772710, 2147483647),
(6, 840189, 2147483647),
(7, 349852, 2147483647),
(8, 394798, 2147483647),
(9, 854950, 2147483647),
(10, 429120, 2147483647),
(11, 817613, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(10) UNSIGNED NOT NULL,
  `documents` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_id` int(10) UNSIGNED NOT NULL,
  `chat_id` int(10) UNSIGNED NOT NULL,
  `approved_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `chat_string` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `documents`, `unit_id`, `chat_id`, `approved_status`, `user_id`, `chat_string`) VALUES
(1, 'custom/images/25858597d0741ea3ea.jpg', 1, 1, 1, 1, ''),
(2, 'test doc2', 2, 1, 0, 2, ''),
(3, 'custom/images/25858597d0741ea3ea.jpg', 1, 1, 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject`) VALUES
(1, 'Math'),
(2, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `subject_id`) VALUES
(1, 'algebra', 1),
(2, 'Macbeth', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile_number`, `type_of_user`, `created_at`, `updated_at`) VALUES
(1, 'a', 'sumeet.shahani108@gmail.com', 'a', '8767772212\r\n', 'admin', '2017-06-30 18:30:00', NULL),
(2, 'b', 'b@b.b', 'b', '1234', 'teacher', '2017-07-12 18:30:00', NULL),
(3, 'c', 'c@c.c', 'c', '123', 'teacher', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_subject`
--

CREATE TABLE `user_subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_subject`
--

INSERT INTO `user_subject` (`id`, `user_id`, `subject_id`) VALUES
(1, 2, 1),
(2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_id` int(10) UNSIGNED NOT NULL,
  `chat_id` int(10) UNSIGNED NOT NULL,
  `approved_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `chat_user_id_foreign` (`user_id`);

--
-- Indexes for table `lru`
--
ALTER TABLE `lru`
  ADD PRIMARY KEY (`lru_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_sender_foreign` (`sender`),
  ADD KEY `messages_receiver_foreign` (`receiver`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan_unit_id_foreign` (`unit_id`),
  ADD KEY `plan_chat_id_foreign` (`chat_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `units_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_subject`
--
ALTER TABLE `user_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_subject_user_id_foreign` (`user_id`),
  ADD KEY `user_subject_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_plan_id_foreign` (`plan_id`),
  ADD KEY `videos_chat_id_foreign` (`chat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_subject`
--
ALTER TABLE `user_subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_receiver_foreign` FOREIGN KEY (`receiver`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_sender_foreign` FOREIGN KEY (`sender`) REFERENCES `users` (`id`);

--
-- Constraints for table `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `plan_chat_id_foreign` FOREIGN KEY (`chat_id`) REFERENCES `chat` (`chat_id`),
  ADD CONSTRAINT `plan_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`);

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`);

--
-- Constraints for table `user_subject`
--
ALTER TABLE `user_subject`
  ADD CONSTRAINT `user_subject_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`),
  ADD CONSTRAINT `user_subject_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_chat_id_foreign` FOREIGN KEY (`chat_id`) REFERENCES `chat` (`chat_id`),
  ADD CONSTRAINT `videos_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
