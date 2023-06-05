-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2023 pada 16.41
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lukisan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comunities`
--

CREATE TABLE `comunities` (
  `comunity_id` int(11) NOT NULL,
  `comunity_name` varchar(45) NOT NULL,
  `village_id` int(11) NOT NULL,
  `contact_name` varchar(45) NOT NULL,
  `comunity_desc` text NOT NULL,
  `comunity_logo` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `disc`
--

CREATE TABLE `disc` (
  `disc_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_end` date NOT NULL,
  `refferal_code` varchar(45) NOT NULL,
  `disc_percent` decimal(10,0) NOT NULL,
  `disc_nominal` decimal(10,0) NOT NULL,
  `min_transaction` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `lukisans`
--

CREATE TABLE `lukisans` (
  `kode_lukisan` varchar(255) NOT NULL,
  `judul_lukisan` varchar(255) NOT NULL,
  `nama_pelukis` varchar(255) NOT NULL,
  `uk_panjang` int(11) NOT NULL,
  `uk_lebar` int(11) NOT NULL,
  `material` varchar(255) NOT NULL,
  `tahun_dibuat` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `status_lukisan` varchar(255) NOT NULL,
  `status_pelelangan` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lukisans`
--

INSERT INTO `lukisans` (`kode_lukisan`, `judul_lukisan`, `nama_pelukis`, `uk_panjang`, `uk_lebar`, `material`, `tahun_dibuat`, `deskripsi`, `gambar`, `status_lukisan`, `status_pelelangan`, `keterangan`, `created_at`, `updated_at`) VALUES
('BL007', 'Bharatayudha Legend', 'I Ketut Roji', 82, 106, 'Canvas', 2007, 'Lukisan \"Bharatayudha Legend\" karya I Ketut Roji menggambarkan adegan dramatis dan epik dari kisah epik Mahabharata, khususnya Babad Bharatayudha.', '1685685615.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 22:00:15', '2023-06-01 22:00:15'),
('BL995', 'Balinese Life', 'I Ketut Soki', 130, 190, 'Canvas', 1995, 'Lukisan \"Balinese Life\" karya I Ketut Soki adalah sebuah karya seni yang menggambarkan kehidupan sehari-hari masyarakat Bali dengan keceriaan dan keindahan yang khas.', '1685684914.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 21:48:34', '2023-06-01 21:48:34'),
('BM007', 'Balinese Market', 'I Wayan Lantur', 97, 148, 'Canvas', 2007, 'Lukisan \"Balinese Market\" karya I Wayan Lantur adalah sebuah karya seni yang memperlihatkan kehidupan dan keberagaman budaya dalam sebuah pasar tradisional Bali.', '1685685520.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 21:58:40', '2023-06-01 21:58:40'),
('CC005', 'Cremation Ceremony', 'I Gusti Made Kwandji', 101, 63, 'Canvas', 2005, 'Lukisan \"Cremation Ceremony\" karya I Gusti Made Kwandji adalah sebuah karya seni yang memukau dan menggambarkan upacara kremasi dengan keanggunan dan keragaman budaya Bali.', '1685686614.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 22:16:54', '2023-06-01 22:16:54'),
('E007', 'Escape', 'Nyoman Sarta', 116, 150, 'Canvas', 2007, 'Lukisan \"Escape\" karya Nyoman Sarta adalah sebuah karya seni yang menggugah perasaan dan mengajak penonton untuk memasuki dunia imaginatif yang penuh misteri.', '1685685152.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 21:52:32', '2023-06-01 21:52:32'),
('FL007', 'A Fisherman\'s Life', 'I Nyoman Ridi', 80, 90, 'Canvas', 2007, 'Lukisan \"A Fisherman\'s Life\" karya I Nyoman Ridi adalah sebuah karya seni yang menggambarkan kehidupan seorang nelayan dengan keanggunan dan keindahan yang khas.', '1685685056.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 21:50:56', '2023-06-01 21:50:56'),
('GD007', 'Gabyug Dance', 'I Wayan Naya', 90, 110, 'Canvas', 2007, 'Lukisan \"Gebyug Dance\" karya I Wayan Naya adalah sebuah karya seni yang mempesona dan memperlihatkan keindahan tarian tradisional Bali, Gebyug.', '1685685244.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 21:54:04', '2023-06-01 21:54:04'),
('GL998', 'Green Life', 'Ida Bagus Made Nendra', 93, 139, 'Canvas', 1998, 'Lukisan \"Wedding Ceremony\" karya Mangku Daging adalah sebuah karya seni yang mempesona dan menggambarkan momen sakral dalam sebuah upacara pernikahan.', '1685684319.jpg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 21:38:39', '2023-06-01 21:39:02'),
('GR007', 'Green Rajapala', 'I Nyoman Sinom', 120, 64, 'Canvas', 2007, 'Lukisan \"Green Rajapala\" karya I Wayan Sinom adalah sebuah karya seni yang memukau dan memperlihatkan kekuatan serta keindahan mitologi dalam budaya Bali.', '1685686697.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 22:18:17', '2023-06-01 22:18:17'),
('H007', 'Heppiness', 'I Made Artawa', 60, 90, 'Canvas', 2007, 'Lukisan \"Happiness\" karya I Made Artawa adalah sebuah karya seni yang penuh kegembiraan dan keceriaan. Dalam lukisan ini, Artawa berhasil mengekspresikan esensi kebahagiaan melalui penggunaan warna-warna cerah dan komposisi yang dinamis.', '1685685329.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 21:55:29', '2023-06-01 21:55:29'),
('JD007', 'Jauk Dancer', 'I Wayan Djujul', 60, 64, 'Canvas', 2007, 'Lukisan \"Jauk Dancer\" karya I Wayan Djujul adalah sebuah karya seni yang memukau dan menggambarkan keindahan tari Jauk, tradisi budaya Bali yang kaya. Dengan keahliannya yang luar biasa, Djujul berhasil menangkap gerakan dan ekspresi yang unik dalam tarian ini.', '1685687022.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 22:23:43', '2023-06-01 22:23:43'),
('LMR007', 'Lontar Manuscript Reading', 'I Made Rasna', 84, 130, 'Canvas', 2007, 'Lukisan \"Lontar Manuscript Reading\" karya I Made Rasna menggambarkan adegan yang penuh keanggunan dan kecerdasan saat membaca manuskrip lontar, yang merupakan tulisan kuno dalam bahasa Bali.', '1685686960.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 22:22:40', '2023-06-01 22:22:40'),
('MC939', 'Mapada Ceremony', 'Mangku Nyoman Lesug', 71, 109, 'canvas', 1939, 'Lukisan \"Mapada Ceremony\" karya Mangku Nyoman Lesug adalah sebuah karya seni yang memukau dan memperlihatkan keindahan dan keragaman budaya Bali.', '1685684057.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 21:34:17', '2023-06-01 21:35:10'),
('PC007', 'Purification Ceremony', 'I Nyoman Suarta', 75, 105, 'Canvas', 2007, 'Lukisan \"Purification Ceremony\" karya I Nyoman Suarta menggambarkan adegan yang penuh kesucian dan kerohanian dari sebuah upacara pembersihan spiritual di Bali.', '1685686120.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 22:08:40', '2023-06-01 22:08:40'),
('PS007', 'Purification at Sea', 'I Wayan Dolik', 66, 85, 'Canvas', 2007, 'Lukisan \"Purification at Sea\" karya I Wayan Dolik menggambarkan adegan yang memukau dari ritual pembersihan spiritual yang dilakukan di laut di Bali.', '1685686023.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 22:07:03', '2023-06-01 22:07:03'),
('R007', 'Rajapala', 'Mangku Sayang', 70, 90, 'Canvas', 2007, 'Lukisan \"Rajapala\" karya Mangku Sayang adalah sebuah karya seni yang memukau dan menghadirkan mitologi Bali dengan penuh keanggunan.', '1685684697.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 21:44:57', '2023-06-01 21:44:57'),
('RE006', 'Ramayana Epic', 'I Wayan Tutur', 70, 10, 'Canvas', 2006, 'Lukisan \"Ramayana Epic\" karya I Wayan Tutur adalah sebuah karya seni yang memukau dan menggambarkan kisah epik Ramayana dengan keindahan dan kedalaman yang luar biasa.', '1685684800.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 21:46:40', '2023-06-01 21:46:40'),
('RE007', 'Ramayana Epic', 'I Wayan Asta', 70, 95, 'Canvas', 2007, 'Lukisan \"Ramayana Epic\" karya I Wayan Asta menghadirkan keindahan dan keagungan dari salah satu cerita epik terbesar dalam mitologi Hindu, yaitu Ramayana.', '1685685938.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 22:05:38', '2023-06-01 22:05:38'),
('RH006', 'Rice Harvest', 'I Wayan Gandera', 70, 100, 'Canvas', 2006, 'Lukisan \"Rice Harvest\" karya I Wayan Gandera adalah sebuah karya seni yang menggambarkan kehidupan dan kerja keras petani dalam panen padi.', '1685684602.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 21:43:22', '2023-06-01 21:43:22'),
('RH007', 'Rice Harvest', 'I Made Suta', 100, 150, 'canvas', 2007, 'Lukisan \"Rice Harvest\" karya I Made Suta menggambarkan adegan yang indah dan bersemangat dari panen padi, yang merupakan momen penting dalam kehidupan petani di Bali.', '1685685794.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 22:03:14', '2023-06-01 22:03:14'),
('S000', 'Scenery', 'I Gusti Ngurah KK', 87, 48, 'Canvas', 2000, 'Lukisan \"Scenery\" karya I Gusti Ngurah KK menghadirkan pemandangan alam yang menakjubkan dengan sentuhan seni yang memikat. Dalam lukisan ini, Ngurah KK berhasil mengekspresikan keindahan alam Bali dengan kepiawaian dan imajinasinya yang khas.', '1685686775.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 22:19:35', '2023-06-01 22:19:35'),
('SG005', 'Saraswati Goddess', 'I Ketut Ginarsa', 130, 65, 'Canvas', 2005, 'Lukisan \"Saraswati Goddess\" karya I Ketut Ginarsa merupakan sebuah representasi yang memukau dari Dewi Saraswati, dewi pengetahuan, seni, dan musik dalam tradisi Hindu di Bali.', '1685686515.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 22:15:15', '2023-06-01 22:15:15'),
('TA007', 'Temple Activites', 'I Ketut Purna', 96, 145, 'Canvas', 2007, 'Lukisan \"Temple Activities\" karya I Ketut Purna menggambarkan kegiatan yang terjadi di dalam sebuah kuil di Bali. Dalam lukisan ini, Purna berhasil menangkap suasana yang khas dan meriah saat pelaksanaan upacara keagamaan di kuil.', '1685685704.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 22:01:44', '2023-06-01 22:01:44'),
('TBD005', 'Three Balinese Dancers', 'I Ketut Kasta', 125, 75, 'Canvas', 2005, 'Lukisan \"Three Balinese Dancers\" karya I Ketut Kasta adalah sebuah karya seni yang memukau yang memperlihatkan tiga tarian tradisional Bali dengan keanggunan dan keindahan yang khas. Dalam lukisan ini, Kasta berhasil menangkap esensi tiga tarian Bali yang penuh dengan gerakan yang elegan dan simbolisme budaya yang kaya.', '1685686864.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 22:21:04', '2023-06-01 22:21:04'),
('TC007', 'Tample Ceremony', 'I Made Jiwa', 65, 90, 'Canvas', 2007, 'Lukisan \"Temple Ceremony\" karya I Made Jiwa menggambarkan adegan yang memukau dari sebuah upacara keagamaan di Bali. Dalam lukisan ini, Jiwa berhasil menangkap keindahan, kekhusyukan, dan keceriaan yang melingkupi acara tersebut.', '1685686228.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 22:10:28', '2023-06-01 22:10:28'),
('VS007', 'Village Scene', 'I Gusti Agung Kepakisan', 100, 150, 'Canvas', 2007, 'Lukisan \"Village Scene\" karya I Gusti Agung Kepakisan adalah sebuah karya seni yang memperlihatkan kehidupan sehari-hari dan pemandangan desa dengan keindahan alamnya.', '1685686304.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 21:57:14', '2023-06-01 22:11:44'),
('WC007', 'Wedding Ceremony', 'Mangku Daging', 70, 80, 'Canvas', 2007, 'Lukisan \"Wedding Ceremony\" karya Mangku Daging adalah sebuah karya seni yang mempesona dan menggambarkan momen sakral dalam sebuah upacara pernikahan.', '1685684486.jpeg', 'Tersedia', 'Belum Dilelang', '-', '2023-06-01 21:41:26', '2023-06-01 21:41:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_25_090537_create_rate_table', 1),
(6, '2022_12_25_092353_create_package_table', 1),
(7, '2022_12_25_094139_create_disc_table', 1),
(8, '2022_12_25_094939_create_comunity_table', 1),
(9, '2023_03_16_040810_create_posts_table', 1),
(10, '2023_05_09_061114_create_pelukis_table', 1),
(11, '2023_05_15_130551_create_lukisans_table', 1),
(12, '2023_05_15_140600_create_transaksis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `package_code` varchar(10) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `package_desc` text NOT NULL,
  `feature_img` varchar(45) NOT NULL,
  `location_id` int(11) NOT NULL,
  `comunity_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelukis`
--

CREATE TABLE `pelukis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelukis` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_kematian` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rates`
--

CREATE TABLE `rates` (
  `rate_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `rate_name` varchar(45) NOT NULL,
  `date_from` date NOT NULL,
  `date_end` date NOT NULL,
  `qty_per_day` int(11) NOT NULL,
  `adult_rate` decimal(10,0) NOT NULL,
  `child_rate` decimal(10,0) NOT NULL,
  `infant_rate` decimal(10,0) NOT NULL,
  `foreign_adult_rate` decimal(10,0) NOT NULL,
  `foreign_child_rate` decimal(10,0) NOT NULL,
  `foreign_infant_rate` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_lukisan` varchar(255) NOT NULL,
  `id_pegawai` varchar(255) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `kode_lukisan`, `id_pegawai`, `tanggal_transaksi`, `total`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 'abc1234', '1234', '2023-05-16', '1231.00', 'tes', '2023-05-21 05:37:56', '2023-05-21 05:40:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Darma Adiyaksa', 'darmaadiyaksa3@gmail.com', NULL, '$2y$10$n2EQ.JjvLymZZEW7V1q07Opr7YK/ImhcQNa1DKTr50yV3hZwSq6nu', NULL, '2023-05-21 05:48:56', '2023-05-21 05:48:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `lukisans`
--
ALTER TABLE `lukisans`
  ADD PRIMARY KEY (`kode_lukisan`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pelukis`
--
ALTER TABLE `pelukis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pelukis`
--
ALTER TABLE `pelukis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
