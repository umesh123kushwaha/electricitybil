-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 04:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_mobno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_email`, `customer_mobno`, `customer_city`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Satish Kushwaha', 'satish@gmail.com', '6384031240', 'Jhansi', '2021-11-17 15:24:55', '2021-11-17 11:43:24', 0),
(6, 'YUVRAJ SINGH', 'singhyuvraj1721@gmail.com', '7880831950', 'ORAI', '2021-11-18 02:48:51', '2021-11-18 02:48:51', 0),
(9, 'UMESH KUMAR', 'umesh123kushwaha@gmail.com', '07617813393', 'Mahoba', '2021-11-18 02:51:05', '2021-11-18 02:51:05', 0),
(10, 'HARIRAM', 'hariram63060@gmail.com', '6306017853', 'JHANSI', '2021-11-18 02:52:27', '2021-11-18 02:52:27', 0),
(11, 'Rahul Kumar', 'rahulmohanjaiswal1@gmail.com', '07617813393', 'MAHOBA', '2021-11-18 02:52:57', '2021-11-18 02:52:57', 0),
(13, 'Freddie Waters', 'alessia32@gmail.com', '9312485542', 'Pacochaborough', NULL, NULL, 0),
(14, 'Mervin Dickinson', 'hrosenbaum@murphy.com', '9317122138', 'Antoninaside', NULL, NULL, 0),
(15, 'Ellie Macejkovic', 'kimberly.kris@glover.com', '9843339094', 'Jacobsonstad', NULL, NULL, 0),
(16, 'Chase Stanton I', 'cleta06@yahoo.com', '9297132332', 'Gorczanystad', NULL, NULL, 0),
(17, 'Dr. Taylor Pfannerstill', 'qgoyette@lueilwitz.biz', '9818445642', 'Fritzport', NULL, NULL, 0),
(18, 'Chester Oberbrunner', 'keara80@hotmail.com', '9684151386', 'North Newell', NULL, NULL, 0),
(19, 'Providenci Krajcik', 'nigel.stroman@green.net', '9584297578', 'North Daniela', NULL, NULL, 0),
(20, 'Pearline Batz', 'dewitt.roob@rosenbaum.com', '9168685393', 'McKenziefort', NULL, NULL, 0),
(21, 'Madelynn Wisoky DDS', 'nziemann@gmail.com', '9796359184', 'Treutelborough', NULL, NULL, 0),
(22, 'Torrance Sipes IV', 'kyra85@bode.com', '9891010949', 'East Baron', NULL, NULL, 0),
(23, 'Dr. Allison Lind', 'tatum.mitchell@lockman.com', '9669269278', 'Lake Louvenia', NULL, NULL, 0),
(24, 'Dorian Wolf', 'leonora.rolfson@yahoo.com', '9163667684', 'Lake Harleyville', NULL, NULL, 0),
(25, 'Dr. Alejandrin Wehner PhD', 'mkuphal@yahoo.com', '9654725194', 'Port Jefferystad', NULL, NULL, 0),
(26, 'Lexie Kuhn', 'oswald.mills@sawayn.com', '9882523278', 'Port Anna', NULL, NULL, 0),
(27, 'Adell Orn', 'sgutmann@vandervort.com', '9582985133', 'Kathlynhaven', NULL, NULL, 0),
(28, 'Maia Murazik', 'whoeger@gmail.com', '9954081363', 'Waelchimouth', NULL, NULL, 0),
(29, 'Ronny Pfannerstill', 'ava.wilkinson@yahoo.com', '9300529218', 'New Raphaellemouth', NULL, NULL, 0),
(30, 'Prof. Einar Lueilwitz', 'lucie44@crona.com', '9170845624', 'South Keiraside', NULL, NULL, 0),
(32, 'Dr. Sheldon Daniel MD', 'gabrielle.lowe@wilderman.com', '9773212842', 'Howeborough', NULL, NULL, 0),
(33, 'Josefina Wiza', 'hahn.marlin@gmail.com', '9414914034', 'Lake Gageport', NULL, NULL, 0),
(34, 'Dannie Russel MD', 'webster12@reilly.org', '9109428803', 'Hettingerview', NULL, NULL, 0),
(35, 'Clarabelle Kiehn', 'josh.casper@schoen.org', '9511914224', 'Pfannerstillhaven', NULL, NULL, 0),
(36, 'Dr. Hillard Grady', 'kim.eichmann@gmail.com', '9654129247', 'West Aliyah', NULL, NULL, 0),
(37, 'Beatrice Lebsack', 'mitchell.amira@hotmail.com', '9481748047', 'Bahringerchester', NULL, NULL, 0),
(38, 'Marcelina McCullough II', 'delia.erdman@kohler.net', '9319679710', 'Mathildeport', NULL, NULL, 0),
(39, 'Jeramy Bauch', 'lynch.noemi@hotmail.com', '9403441517', 'Port Taylor', NULL, NULL, 0),
(40, 'Devonte Rau', 'calista.lockman@yahoo.com', '9783997885', 'Svenview', NULL, NULL, 0),
(41, 'Haleigh Murazik', 'jflatley@gmail.com', '9271380069', 'Strosinburgh', NULL, NULL, 0),
(42, 'Harmon Ondricka', 'lortiz@gmail.com', '9574841647', 'West Maximilian', NULL, NULL, 0),
(43, 'Dr. Kasey Morissette I', 'viola75@gmail.com', '9817981289', 'South Krystinastad', NULL, NULL, 0),
(44, 'Dr. Vella Nitzsche PhD', 'theodora.hyatt@mitchell.com', '9604971312', 'Maritzafurt', NULL, NULL, 0),
(45, 'Caterina O\'Kon', 'hsporer@littel.com', '9948681532', 'Port Fritzland', NULL, NULL, 0),
(46, 'Dr. Damion Schroeder Sr.', 'magnus06@yahoo.com', '9880200635', 'Port Mikaylafort', NULL, NULL, 0),
(47, 'Aniya Fay', 'khalid22@hotmail.com', '9481641739', 'Port Adellabury', NULL, NULL, 0),
(48, 'Odie Wehner', 'lindgren.ivah@effertz.com', '9512976714', 'East Blakeland', NULL, NULL, 0),
(49, 'Linnea Gleason', 'jyundt@torp.com', '9252529923', 'Franeckiburgh', NULL, NULL, 0),
(50, 'Evan Schimmel', 'watson.crona@roberts.com', '9341130316', 'Port Zackery', NULL, NULL, 0),
(51, 'Dr. Zachariah Fay III', 'kris.ruby@yahoo.com', '9146806003', 'East Edytheview', NULL, NULL, 0),
(52, 'Jed Dach', 'priscilla.rowe@funk.com', '9756486483', 'Lake Liana', NULL, NULL, 0),
(53, 'Caleigh Stark', 'deckow.timmy@gmail.com', '9249996726', 'Treverville', NULL, NULL, 0),
(55, 'Renee Fritsch', 'chanel28@hotmail.com', '9288843238', 'New Cody', NULL, NULL, 0),
(56, 'Stanton Harvey', 'joanny.crona@hotmail.com', '9526324711', 'Swiftport', NULL, NULL, 0),
(57, 'Elda Borer IV', 'burley56@yahoo.com', '9362420256', 'Toyhaven', NULL, NULL, 0),
(58, 'Vivianne Turcotte', 'greenholt.durward@gmail.com', '9334564781', 'Sipesside', NULL, NULL, 0),
(59, 'Emery Wolff PhD', 'hermiston.tracy@bode.org', '9269709786', 'Eichmannmouth', NULL, NULL, 0),
(60, 'Celine Carroll', 'santa.berge@gmail.com', '9393634162', 'Howeborough', NULL, NULL, 0),
(61, 'Leanne Franecki', 'denis51@hotmail.com', '9712168461', 'Port Macport', NULL, NULL, 0),
(62, 'Nat Corwin DVM', 'lexus.bruen@shields.com', '9312380639', 'Howellmouth', NULL, NULL, 0),
(63, 'Dr. Wyatt Larkin I', 'bauch.rosa@hotmail.com', '9351250098', 'Blandaport', NULL, NULL, 0),
(64, 'Dr. Lindsay Connelly', 'dbins@smith.info', '9756876637', 'Lake Haskell', NULL, NULL, 0),
(65, 'Mr. Cleo Mohr', 'leonor.upton@hotmail.com', '9839697445', 'New Romaineton', NULL, NULL, 0),
(66, 'Frederik Gottlieb', 'vglover@gmail.com', '9676781941', 'Sanfordhaven', NULL, NULL, 0),
(67, 'Ms. Dannie Grimes', 'lempi97@yahoo.com', '9230843372', 'North Mireya', NULL, NULL, 0),
(68, 'Miss Vivianne Purdy PhD', 'daija.collier@fahey.com', '9385140786', 'Lindfort', NULL, NULL, 0),
(69, 'Gerald Monahan', 'ella.batz@hotmail.com', '9636876731', 'Lionelfort', NULL, NULL, 0),
(70, 'Dr. Lisette Ernser', 'kirlin.lavon@huel.com', '9591777731', 'Hoppeville', NULL, NULL, 0),
(71, 'Carol Parker DVM', 'arnaldo17@yahoo.com', '9253453692', 'South Buddy', NULL, NULL, 0),
(72, 'Prof. Pete Shanahan Sr.', 'qkessler@yahoo.com', '9573390511', 'Brownstad', NULL, NULL, 0),
(73, 'Hope Veum', 'moriah65@gmail.com', '9898817103', 'East Raheemview', NULL, NULL, 0),
(74, 'Mrs. Earlene Frami', 'mante.marian@schaefer.net', '9774194038', 'Laurelstad', NULL, NULL, 0),
(75, 'Magdalen Langworth', 'gcummerata@harris.com', '9461212985', 'Oceanemouth', NULL, NULL, 0),
(76, 'Dominic Legros', 'wskiles@hauck.org', '9589846993', 'Hahnmouth', NULL, NULL, 0),
(77, 'Elenor Schmeler MD', 'marjorie93@kiehn.com', '9809806128', 'New Brisa', NULL, NULL, 0),
(78, 'Dr. Dedrick Dickens PhD', 'constantin.senger@lubowitz.com', '9947336889', 'Leifton', NULL, NULL, 0),
(79, 'Rebecca Schamberger', 'gkilback@hotmail.com', '9328387524', 'Randallburgh', NULL, NULL, 0),
(80, 'Jalon Nicolas', 'ruecker.jenifer@hotmail.com', '9665758058', 'Jordaneport', NULL, NULL, 0),
(81, 'Angus Herzog', 'rau.frances@yahoo.com', '9653618998', 'Lake Easter', NULL, NULL, 0),
(82, 'Prof. Berneice Fadel', 'ruth.conn@homenick.org', '9682376092', 'Port Hardyland', NULL, NULL, 0),
(83, 'Monserrat Franecki', 'odie.schuppe@friesen.com', '9558471262', 'Emersontown', NULL, NULL, 0),
(84, 'Kade Welch', 'walter.alicia@sawayn.com', '9771179337', 'Connfort', NULL, NULL, 0),
(85, 'Winfield Hudson', 'blarkin@gmail.com', '9688087110', 'New Karenport', NULL, NULL, 0),
(86, 'Candido Howell', 'noemy.veum@altenwerth.com', '9524527977', 'Hammesfort', NULL, NULL, 0),
(87, 'Jeffery Harber', 'pollich.kacie@yahoo.com', '9706827667', 'South Laverneside', NULL, NULL, 0),
(88, 'Terrance Nikolaus', 'heller.marty@gmail.com', '9421354356', 'East Manuelberg', NULL, NULL, 0),
(89, 'Leslie Hyatt', 'corine40@wisozk.info', '9521500928', 'Lethamouth', NULL, NULL, 0),
(90, 'Mrs. Ora Rodriguez', 'schoen.benton@rutherford.info', '9163751951', 'Gregview', NULL, NULL, 0),
(91, 'Ms. Rylee Wehner III', 'irice@hotmail.com', '9372281386', 'South Anastacio', NULL, NULL, 0),
(92, 'Ms. Brandy Emard', 'esteban80@gmail.com', '9236589150', 'Kyleechester', NULL, NULL, 0),
(93, 'Kayden Hickle', 'destini.wiza@wolf.biz', '9863034753', 'Thielview', NULL, NULL, 0),
(94, 'Lionel Bednar', 'jerde.chaim@gmail.com', '9763467525', 'West Adrienstad', NULL, NULL, 0),
(95, 'Thurman Ankunding', 'fidel92@gmail.com', '9997438969', 'Lake Colin', NULL, NULL, 0),
(96, 'Ms. Natalia Borer', 'katharina82@konopelski.com', '9561713970', 'New Naomie', NULL, NULL, 0),
(97, 'Jayda Howell', 'jnader@murazik.com', '9414991936', 'Baumbachstad', NULL, NULL, 0),
(98, 'Prof. Randal Cummings', 'margaretta.ledner@lowe.net', '9339172688', 'West Archtown', NULL, NULL, 0),
(99, 'Florine Glover III', 'vivienne80@gmail.com', '9822569032', 'New Declanport', NULL, NULL, 0),
(100, 'Tyrel Murazik', 'satterfield.arch@braun.com', '9290110073', 'Fayebury', NULL, NULL, 0),
(101, 'Kailyn Glover', 'harmon.stamm@nienow.net', '9869264317', 'Feeneyfurt', NULL, NULL, 0),
(102, 'Yasmine Casper', 'vskiles@terry.info', '9461646494', 'Tillmanside', NULL, NULL, 0),
(103, 'Jamey McKenzie', 'ward.kieran@hotmail.com', '9944580741', 'South Alan', NULL, NULL, 0),
(104, 'Miss Elmira Rau', 'fausto83@yahoo.com', '9719157492', 'Port Yasminebury', NULL, NULL, 0),
(105, 'Prof. Demario Cummings', 'eleanore.bins@gmail.com', '9723098648', 'Port Brainberg', NULL, NULL, 0),
(106, 'Isabell Collins', 'marguerite.rolfson@glover.com', '9821831343', 'Lehnerstad', NULL, NULL, 0),
(107, 'Mrs. Delores Lang', 'wkeeling@yahoo.com', '9155518408', 'Roscoemouth', NULL, NULL, 0),
(108, 'Prof. Amy Weber', 'jerrod.collier@hotmail.com', '9663612550', 'Port Sylviafurt', NULL, NULL, 0),
(109, 'Maximillian Towne V', 'krystel09@yahoo.com', '9569501364', 'Olafmouth', NULL, NULL, 0),
(110, 'Dr. Ashleigh Gislason', 'west.janae@hotmail.com', '9463161542', 'Mohrstad', NULL, NULL, 0),
(111, 'Jensen Hand', 'johnston.cayla@gmail.com', '9494685036', 'Lake Harmonyside', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_bills`
--

CREATE TABLE `customer_bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_bills`
--

INSERT INTO `customer_bills` (`id`, `customer_id`, `total_unit`, `total_amount`, `month_name`, `created_at`, `updated_at`) VALUES
(5, 15, '400', '4700', 'April', '2021-11-18 11:50:05', '2021-11-18 11:50:05'),
(10, 16, '123', '926', 'March', '2021-11-18 12:09:00', '2021-11-18 12:09:00'),
(12, 12, '250', '2450', 'January', '2021-11-19 03:14:18', '2021-11-19 03:14:18'),
(13, 11, '375', '4325', 'Febuary', '2021-11-19 03:16:19', '2021-11-19 03:16:19'),
(14, 10, '150', '1250', 'July', '2021-11-19 03:16:51', '2021-11-19 03:16:51');

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
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2021_11_16_182609_customer', 1),
(20, '2021_11_17_031036_create_customers_table', 1),
(21, '2021_11_17_031703_add_column_status_to_table', 1),
(22, '2021_11_18_094522_create_customer_bills_table', 2);

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
(1, 'Umesh Kumar', 'umesh@gmail.com', NULL, '$2y$10$zZX0CZ1wKx/0R2hJPcgOHOJEb.LpUTndCm0XSAgRU2Wsw.k.IWSgG', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_bills`
--
ALTER TABLE `customer_bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `customer_bills`
--
ALTER TABLE `customer_bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
