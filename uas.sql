-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2024 at 03:53 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id_buku` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` bigint UNSIGNED NOT NULL,
  `sinopsis` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_terbit` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id_buku`, `created_at`, `updated_at`, `judul`, `penulis`, `foto`, `id_kategori`, `sinopsis`, `tahun_terbit`) VALUES
(2, '2024-06-27 20:35:47', '2024-06-27 20:35:47', 'The Night Circus', 'Erin Morgenstern', 'buku2.jpg', 4, '\"The Night Circus\" adalah kisah tentang persaingan magis antara dua pesulap muda, Celia dan Marco, yang terjebak dalam pertarungan hidup dan mati di sebuah sirkus yang tampil hanya di malam hari. Sirkus ini menjadi latar bagi cinta yang tumbuh antara mereka, sementara mereka tidak menyadari bahwa hanya satu dari mereka yang bisa bertahan.', '1293'),
(3, '2024-06-27 20:36:20', '2024-06-27 20:36:20', 'Sapiens: A Brief History of Humankind', 'Yuval Noah Harari', 'buku3.jpg', 5, '\"Sapiens\" mengambil pembaca dalam perjalanan epik dari evolusi manusia, dari zaman Batu hingga Revolusi Industri. Buku ini mengeksplorasi pertanyaan besar tentang apa yang membuat Homo sapiens menjadi spesies dominan di planet ini, dan bagaimana kita mencapai posisi kita saat ini dalam sejarah.', '2001'),
(4, '2024-06-27 20:36:54', '2024-06-27 20:36:54', 'The Martian', 'Andy Weir', 'buku4.jpg', 6, '\"The Martian\" adalah cerita tentang seorang astronaut, Mark Watney, yang ditinggalkan secara tidak sengaja di Mars setelah misi ruang angkasa mereka berakhir tragis. Untuk bertahan hidup, Mark harus mengandalkan kecerdasannya dan sumber daya yang terbatas untuk menaklukkan tantangan besar yang menghadangnya di planet merah tersebut.', '1975'),
(5, '2024-06-27 20:37:28', '2024-06-27 20:37:28', 'Harry Potter and the Philosopher\'s Stone', 'J.K. Rowling', 'buku2.jpg', 4, 'Buku pertama dari seri fenomenal \"Harry Potter\", mengikuti perjalanan seorang anak yatim piatu yang menemukan bahwa dia sebenarnya adalah seorang penyihir. Bersama teman-temannya di Hogwarts School of Witchcraft and Wizardry, Harry belajar tentang dunia sihir yang menakjubkan sambil menghadapi kekuatan gelap yang mengancamnya.', '2009'),
(6, '2024-06-27 20:38:01', '2024-06-27 20:38:01', 'To Kill a Mockingbird', 'Harper Lee', 'buku1.jpg', 5, '\"To Kill a Mockingbird\" adalah kisah tentang keadilan dan rasisme di Amerika Selatan pada tahun 1930-an, diceritakan melalui sudut pandang seorang gadis kecil bernama Scout Finch. Ketika ayahnya, seorang pengacara bernama Atticus Finch, memutuskan untuk mempertahankan seorang pria kulit hitam yang dituduh melakukan pemerkosaan, Scout belajar tentang prasangka dan keberanian.', '1894'),
(7, '2024-06-27 20:38:33', '2024-06-27 20:38:33', 'The Great Gatsby', 'F. Scott Fitzgerald', 'buku3.jpg', 6, '\"The Great Gatsby\" mengisahkan tentang Jay Gatsby, seorang miliuner misterius yang tinggal di Long Island, New York, dan upayanya untuk merebut kembali cinta masa lalunya, Daisy Buchanan. Novel ini menggambarkan glamor dan kehampaan dari kehidupan high society pada era Roaring Twenties.', '1890'),
(8, '2024-06-27 20:39:03', '2024-06-27 20:39:03', '1984', 'George Orwell', 'buku4.jpg', 6, '\"1984\" adalah gambaran gelap tentang masyarakat totaliter di mana pemerintah mengawasi setiap gerakan dan pikiran warganya. Diceritakan melalui pengalaman Winston Smith, seorang pegawai pemerintah yang mulai meragukan kebenaran yang diimpor oleh rezim Oceania, novel ini menyoroti bahaya manipulasi informasi dan kontrol politik yang ekstrem.', '1890');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id_kategori` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id_kategori`, `created_at`, `updated_at`, `nama_kategori`, `deskripsi`) VALUES
(4, '2024-06-27 20:33:11', '2024-06-27 20:33:11', 'Novel', 'Kategori ini mencakup karya sastra prosa naratif yang panjang, menggambarkan karakter, alur cerita yang kompleks, dan seringkali menyelami aspek-aspek psikologis dan sosial manusia. Novel sering menjadi sarana untuk menggambarkan kehidupan dan pengalaman manusia dalam berbagai konteks.'),
(5, '2024-06-27 20:33:26', '2024-06-27 20:33:26', 'Sains', 'Kategori ini menyoroti buku-buku yang berfokus pada penelitian ilmiah, teori, eksperimen, dan penemuan dalam berbagai bidang sains, seperti fisika, kimia, biologi, astronomi, dan lainnya. Buku sains bertujuan untuk menyajikan pengetahuan dan pemahaman tentang fenomena alam dan dunia di sekitar kita.'),
(6, '2024-06-27 20:33:35', '2024-06-27 20:33:35', 'Komik', 'Kategori ini berisi buku-buku yang menggunakan kombinasi gambar dan teks untuk menceritakan cerita atau menyampaikan pesan secara visual. Komik sering kali menampilkan karakter fiksi atau humor, dan ada berbagai gaya dan genre, mulai dari superhero hingga cerita horor dan komedi.');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_16_091506_create_kategoris_table', 1),
(6, '2023_11_16_101318_create_bukus_table', 1),
(7, '2024_06_27_104316_create_pinjams_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pinjams`
--

CREATE TABLE `pinjams` (
  `id_pinjam` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `id_buku` bigint UNSIGNED NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pinjams`
--

INSERT INTO `pinjams` (`id_pinjam`, `id_user`, `id_buku`, `tanggal_pinjam`, `tanggal_kembali`, `created_at`, `updated_at`) VALUES
(1, 1, 6, '2024-06-04', '2024-06-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'Jasmine', 'jasmineaf04@gmail.com', NULL, '$2y$12$O7SrO4g4qWhhWt75yLrUCOr0tqtbLn4SQX.WUjsHhohQD87HH/iBS', NULL, '2024-06-27 19:30:35', '2024-06-27 19:30:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `bukus_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pinjams`
--
ALTER TABLE `pinjams`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `pinjams_id_user_foreign` (`id_user`),
  ADD KEY `pinjams_id_buku_foreign` (`id_buku`);

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
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id_buku` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id_kategori` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pinjams`
--
ALTER TABLE `pinjams`
  MODIFY `id_pinjam` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bukus`
--
ALTER TABLE `bukus`
  ADD CONSTRAINT `bukus_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id_kategori`);

--
-- Constraints for table `pinjams`
--
ALTER TABLE `pinjams`
  ADD CONSTRAINT `pinjams_id_buku_foreign` FOREIGN KEY (`id_buku`) REFERENCES `bukus` (`id_buku`) ON DELETE CASCADE,
  ADD CONSTRAINT `pinjams_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
