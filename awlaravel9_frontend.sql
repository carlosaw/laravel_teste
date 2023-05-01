-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Maio-2023 às 15:44
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `awlaravel9_frontend`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `street` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `addresses`
--

INSERT INTO `addresses` (`id`, `client_id`, `street`, `number`, `cep`, `district`, `city`, `state`) VALUES
(1, 21, 'Reiciendis quia.', '606', '19048-128', 'Vitae.', 'Placeat.', 'Qui.'),
(2, 5, 'Quas et doloremque.', '069', '88322-921', 'Rerum.', 'Minima.', 'Est.'),
(3, 2, 'Et repellendus.', '099', '29218-797', 'Qui et.', 'Sunt.', 'Est.'),
(4, 4, 'Corporis.', '411', '19203-139', 'Aut.', 'Sint.', 'Sunt.'),
(5, 11, 'Saepe.', '610', '46322-856', 'Quae.', 'Ipsam.', 'Id.'),
(6, 9, 'Veritatis aut.', '148', '77949-219', 'Ut.', 'Ut et.', 'Cum.'),
(7, 3, 'Sed pariatur est.', '227', '20082-870', 'Rerum.', 'Ducimus.', 'Non.'),
(8, 11, 'Odio voluptate.', '721', '09065-514', 'Sed a.', 'Vel.', 'Est.'),
(9, 6, 'Quia qui dolor.', '676', '34108-656', 'Nihil.', 'Autem.', 'Et.'),
(10, 9, 'Aliquam aliquam ut.', '079', '00147-583', 'In ad.', 'Nemo.', 'Ut.'),
(11, 15, 'Nostrum odit esse.', '667', '84810-531', 'Eum sit.', 'Eaque.', 'Non.'),
(12, 23, 'Consectetur iusto.', '444', '30746-575', 'Qui.', 'Iure.', 'Quos.'),
(13, 5, 'Iusto quisquam.', '610', '26988-515', 'Et qui.', 'Quia.', 'Sed.'),
(14, 20, 'Expedita fugiat.', '988', '29799-282', 'Ullam.', 'Ab sunt.', 'Est.'),
(15, 11, 'Culpa molestiae.', '552', '12115-293', 'Dolorum.', 'Id.', 'Esse.'),
(16, 19, 'Labore autem velit.', '053', '09058-827', 'Est.', 'Quia.', 'Ut.'),
(17, 9, 'Animi esse pariatur.', '399', '21334-383', 'Omnis.', 'Qui.', 'Non.'),
(18, 21, 'Quo dolor debitis.', '077', '25285-660', 'Dolor.', 'Tempore.', 'A.'),
(19, 2, 'Sed qui ut vel et.', '114', '56044-019', 'Rem.', 'Ea.', 'At.'),
(20, 8, 'Illo aut alias et.', '999', '90527-009', 'Ut qui.', 'Nihil.', 'Et.'),
(21, 19, 'Et corrupti impedit.', '717', '80318-445', 'Dolorem.', 'A.', 'Rem.'),
(22, 16, 'Alias explicabo hic.', '979', '36304-158', 'Autem.', 'Nulla.', 'Quia.'),
(23, 16, 'Doloremque ut qui.', '538', '18929-067', 'Vitae.', 'Unde ab.', 'Et.'),
(24, 19, 'Aut ab labore hic.', '784', '40832-783', 'Et.', 'Fugit.', 'Non.'),
(25, 5, 'Est molestias.', '600', '54013-347', 'Sint ut.', 'Commodi.', 'Et.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `fone` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clients`
--

INSERT INTO `clients` (`id`, `name`, `cpf`, `fone`, `email`) VALUES
(1, 'Adipisci.', '671.080.360-84', '9 0707-4197', 'elenor.kautzer@example.com'),
(2, 'Atque.', '069.768.635-27', '9 6468-9611', 'sadams@example.com'),
(3, 'Vero.', '636.642.892-16', '9 6588-6532', 'prosacco.howell@example.net'),
(4, 'Distinctio.', '473.861.167-18', '9 5771-8928', 'louvenia85@example.com'),
(5, 'Eos.', '797.848.219-53', '9 7510-0734', 'jayson09@example.net'),
(6, 'Odit.', '965.672.602-68', '9 5817-7380', 'ciara01@example.net'),
(7, 'Deleniti.', '157.995.585-79', '9 9169-2773', 'kasey83@example.org'),
(8, 'Accusamus.', '997.899.406-37', '9 3777-6502', 'koepp.christine@example.org'),
(9, 'Libero ut.', '691.791.195-02', '9 3434-6761', 'greyson94@example.net'),
(10, 'Voluptate.', '362.155.269-28', '9 9111-7849', 'jacinto38@example.com'),
(11, 'At rerum.', '584.821.945-19', '9 3983-7087', 'ellis89@example.net'),
(12, 'Sit.', '456.727.997-90', '9 9541-4151', 'drew.aufderhar@example.com'),
(13, 'Laboriosam.', '892.771.115-35', '9 8763-0374', 'giuseppe69@example.org'),
(14, 'Dolorem.', '290.805.354-42', '9 2365-4258', 'arthur00@example.net'),
(15, 'Quos rerum.', '239.303.812-55', '9 0866-7092', 'obotsford@example.net'),
(16, 'Et amet est.', '899.821.665-38', '9 6078-2801', 'kunde.gwendolyn@example.org'),
(17, 'Et fugiat.', '144.180.068-80', '9 1274-5672', 'pklocko@example.net'),
(18, 'Aliquid.', '059.845.852-53', '9 1807-3102', 'fay.dayne@example.com'),
(19, 'Ut autem.', '253.295.438-17', '9 3171-9973', 'vbraun@example.net'),
(20, 'Aut quo.', '258.500.165-92', '9 6228-0180', 'murphy.alice@example.com'),
(21, 'Qui.', '699.393.651-05', '9 6514-6336', 'ocassin@example.org'),
(22, 'Eos qui.', '582.637.316-94', '9 9273-4311', 'slangosh@example.com'),
(23, 'Et.', '471.293.711-52', '9 0513-5596', 'ida.emmerich@example.net'),
(24, 'Nesciunt.', '595.117.801-51', '9 0665-7105', 'mariah38@example.net'),
(25, 'Dolores.', '373.717.355-71', '9 6780-5064', 'veronica.legros@example.net');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mechanics`
--

CREATE TABLE `mechanics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `mechanics`
--

INSERT INTO `mechanics` (`id`, `name`, `phone`, `percentage`) VALUES
(1, 'Ex sint.', '4 6913-8621', '50'),
(2, 'Tempore.', '4 5468-5803', '52'),
(3, 'Est sunt.', '9 3020-9798', '55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_23_125440_create_clients_table', 1),
(6, '2023_03_23_125508_create_addresses_table', 1),
(7, '2023_03_23_142723_create_products_table', 1),
(8, '2023_03_23_143019_create_vehicles_table', 1),
(9, '2023_03_23_143216_create_mechanics_table', 1),
(10, '2023_04_21_082640_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `mechanic_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `orders`
--

INSERT INTO `orders` (`id`, `client_id`, `vehicle_id`, `mechanic_id`) VALUES
(1, 5, 3, 2),
(2, 8, 7, 3),
(3, 14, 5, 1),
(4, 20, 2, 3),
(5, 6, 11, 2),
(6, 17, 5, 1),
(7, 2, 14, 3),
(8, 12, 13, 2),
(9, 5, 13, 1),
(10, 15, 16, 2),
(11, 2, 20, 2),
(12, 19, 22, 1),
(13, 5, 11, 3),
(14, 24, 18, 1),
(15, 13, 8, 3),
(16, 22, 18, 3),
(17, 8, 20, 1),
(18, 15, 19, 3),
(19, 8, 18, 1),
(20, 11, 1, 2),
(21, 11, 9, 3),
(22, 22, 17, 1),
(23, 1, 20, 1),
(24, 8, 22, 3),
(25, 14, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` double(8,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `value`, `quantity`) VALUES
(1, 'Hic quis id aliquid iste.', 56.53, 5),
(2, 'Dolore non omnis occaecati.', 98.30, 20),
(3, 'Odio et eos aut.', 28.78, 8),
(4, 'Et est id placeat aperiam.', 65.11, 16),
(5, 'Veritatis et optio rerum.', 20.31, 1),
(6, 'Repellendus et ea totam et.', 99.07, 16),
(7, 'Est distinctio qui excepturi.', 19.14, 7),
(8, 'Nemo animi aut rem.', 29.22, 11),
(9, 'Aperiam ut earum et esse.', 68.70, 7),
(10, 'Est quasi aut aperiam nihil.', 84.61, 4),
(11, 'Et harum nisi ut quo est.', 82.58, 9),
(12, 'Voluptate at ab molestiae.', 95.55, 16),
(13, 'Et autem tempora fugiat.', 86.23, 18),
(14, 'Quia tempora ex illo iure.', 15.91, 13),
(15, 'Sint ullam in eum eum.', 40.96, 8),
(16, 'Delectus facilis omnis quis.', 55.64, 18),
(17, 'A recusandae ut sapiente.', 17.40, 3),
(18, 'Sed maxime vero est fugiat.', 75.08, 10),
(19, 'Ratione nihil autem eligendi.', 48.49, 9),
(20, 'Ut quos nisi ut.', 77.37, 14),
(21, 'Aut voluptas ipsam enim.', 64.14, 1),
(22, 'Natus quo sed earum rem.', 68.57, 15),
(23, 'Sit sequi nemo ullam.', 65.13, 1),
(24, 'Omnis rem quo eos libero.', 33.03, 5),
(25, 'Nihil in nam quo.', 78.88, 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2023-05-01 13:39:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cdVlLqNJv6', '2023-05-01 13:39:26', '2023-05-01 13:39:26'),
(2, 'Carlos Alberto', 'car@gmail.com', NULL, '$2y$10$V16mElVhikX18vdaePxt4O.EUqNy5ZB/5Eq6x22jrsOF/.MxjDCDW', NULL, '2023-05-01 13:40:57', '2023-05-01 13:40:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `plate` varchar(255) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `km` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `vehicles`
--

INSERT INTO `vehicles` (`id`, `client_id`, `plate`, `brand`, `model`, `color`, `year`, `km`) VALUES
(1, 25, 'Cum qui.', 'Saepe.', 'Ut.', 'gray', 1999, 71461),
(2, 2, 'Nobis.', 'Omnis.', 'Ea.', 'olive', 2021, 84109),
(3, 16, 'Cumque.', 'Quia.', 'Eveniet.', 'fuchsia', 2005, 66749),
(4, 8, 'Ut.', 'Nulla.', 'Iusto.', 'gray', 2012, 120225),
(5, 20, 'Porro.', 'Vitae.', 'Placeat.', 'aqua', 2012, 134450),
(6, 22, 'Autem.', 'Officia.', 'Et.', 'lime', 2018, 44505),
(7, 22, 'Et qui.', 'Ullam.', 'Est non.', 'maroon', 2021, 83457),
(8, 19, 'Nulla.', 'Et.', 'Molestias.', 'olive', 2021, 114380),
(9, 7, 'Ipsa.', 'Debitis.', 'Numquam.', 'blue', 2019, 42199),
(10, 24, 'Velit.', 'Ut.', 'Corporis.', 'lime', 2008, 115619),
(11, 24, 'Rerum.', 'Nobis.', 'Minima.', 'purple', 2014, 180890),
(12, 12, 'Non.', 'Fugit.', 'Eveniet.', 'black', 2007, 139985),
(13, 7, 'Et in.', 'A quia.', 'Commodi.', 'lime', 2006, 71500),
(14, 14, 'Id est.', 'Aut.', 'Iure.', 'black', 2019, 107713),
(15, 25, 'Quo.', 'Dolorum.', 'Sit et ut.', 'olive', 2015, 39328),
(16, 16, 'Ex.', 'Sunt et.', 'Officiis.', 'white', 2021, 66205),
(17, 16, 'Dolor.', 'Et.', 'Alias.', 'teal', 2020, 149030),
(18, 9, 'Quia.', 'Neque a.', 'Est sed.', 'lime', 2015, 114253),
(19, 15, 'Aut.', 'Ipsum.', 'Unde.', 'navy', 2022, 60695),
(20, 13, 'Dicta.', 'Quam.', 'Quam eos.', 'navy', 2016, 139877),
(21, 20, 'Facilis.', 'Ipsum.', 'Minus.', 'teal', 2007, 4763),
(22, 4, 'Sunt.', 'Alias.', 'Iste sint.', 'maroon', 2020, 125773),
(23, 10, 'Rerum.', 'Dolorem.', 'Sapiente.', 'navy', 2013, 59698),
(24, 9, 'Est.', 'Placeat.', 'Adipisci.', 'gray', 2002, 140361),
(25, 15, 'Aut.', 'Ab.', 'Nihil.', 'navy', 2018, 164857);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_client_id_foreign` (`client_id`);

--
-- Índices para tabela `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_cpf_unique` (`cpf`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `mechanics`
--
ALTER TABLE `mechanics`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_client_id_foreign` (`client_id`),
  ADD KEY `orders_vehicle_id_foreign` (`vehicle_id`),
  ADD KEY `orders_mechanic_id_foreign` (`mechanic_id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_client_id_foreign` (`client_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mechanics`
--
ALTER TABLE `mechanics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_mechanic_id_foreign` FOREIGN KEY (`mechanic_id`) REFERENCES `mechanics` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
