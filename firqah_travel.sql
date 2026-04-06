-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2026 pada 16.29
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firqah_travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `body` longtext NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT 'Admin Karim Travel',
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `category`, `image`, `excerpt`, `body`, `author`, `views`, `created_at`, `updated_at`) VALUES
(1, 'Tips Persiapan Fisik Sebelum Umrah', 'tips-persiapan-fisik-sebelum-umrah', 'Tips & Trik', 'articles/TuNXlnETCB3XMRpVpgv5hQt1UhvX5kQoGxHuFgfC.jpg', 'Tips Persiapan Fisik Sebelum Umrah di tahun 2026', 'fbsdvfsdvfhgsdfvgsdvfgsd sdhcsdcskhsjdfv sfvs vfsdfs dfsfsfvsdj fvsd fsd fsfdsf vsdf  fdfvdsvfbdvfbsdvfetvfw  dfvdg fvdgfv ddgfvdg fvdg vdfvgd vdg fvd feogw gfvef wevof gbsdhsd\r\nasdnsa dasb das d\r\nsadsad', 'Admin Karim Travel', 4, '2026-03-26 02:08:37', '2026-04-01 00:53:03'),
(2, 'Panduan Lengkap Tata Cara Umrah Sesuai Sunnah bagi Pemula', 'panduan-lengkap-tata-cara-umrah-sesuai-sunnah-bagi-pemula', 'Panduan Ibadah', 'articles/igt44pOmn8LzqhsgkN2Tyfkpf3q2ZOZ6kENlZBNZ.jpg', 'Pelajari urutan ibadah Umrah mulai dari Miqat, Tawaf, Sa\'i hingga Tahallul. Panduan praktis ini dirancang khusus untuk membantu persiapan batin dan fisik Anda sebelum berangkat ke Tanah Suci.', 'Ibadah Umrah adalah perjalanan spiritual yang dirindukan setiap Muslim. Agar ibadah kita diterima (Maqbul), sangat penting untuk mengikuti manasik sesuai tuntunan Rasulullah SAW. Berikut adalah ringkasan langkah-langkah utamanya:\r\n\r\nMemakai Ihram & Niat di Miqat: Perjalanan dimulai dengan membersihkan diri (mandi besar), mengenakan pakaian ihram, dan melafalkan niat Labbayka Allahumma \'Umratan saat melewati batas Miqat.\r\n\r\nTawaf Mengelilingi Ka\'bah: Setibanya di Masjidil Haram, jamaah melakukan Tawaf sebanyak 7 putaran berlawanan arah jarum jam, dimulai dan diakhiri di Hajar Aswad.\r\n\r\nSa\'i antara Shofa dan Marwah: Setelah Tawaf dan shalat sunnah, jamaah berjalan kaki/berlari-lari kecil sebanyak 7 kali perjalanan antara bukit Shofa dan Marwah.\r\n\r\nTahallul (Mencukur Rambut): Sebagai penutup rangkaian ibadah, jamaah pria disunnahkan mencukur gundul atau memendekkan rambut, sementara wanita cukup memotong ujung rambut sepanjang satu ruas jari.\r\n\r\nDengan persiapan ilmu yang matang, insya Allah ibadah akan terasa lebih tenang dan khusyuk. Bersama Karim Travel, Anda akan didampingi oleh Muthawwif berpengalaman di setiap langkahnya.', 'Ustadz Ahmad Fauzi', 0, '2026-03-31 20:28:05', '2026-03-31 20:28:05'),
(3, '5 Barang Esensial yang Wajib Ada di Tas Kabin Jamaah Umrah', '5-barang-esensial-yang-wajib-ada-di-tas-kabin-jamaah-umrah', 'Tips & Trik', 'articles/qKYBc29DRPFrPDucCknNQTtXq64DSedBzGRJPNgI.webp', 'Jangan sampai perjalanan Anda terganggu karena barang penting tertinggal di koper bagasi. Simak daftar barang esensial yang harus selalu siaga di tas kabin Anda selama penerbangan menuju Jeddah.', 'Penerbangan menuju Jeddah atau Madinah memakan waktu sekitar 9 hingga 10 jam. Agar perjalanan di pesawat tetap nyaman, pastikan 5 barang esensial ini tidak masuk ke bagasi besar, melainkan tetap berada di tas kabin Anda:\r\n\r\nDokumen & Identitas: Paspor, visa, dan ID Card Karim Travel harus selalu mudah dijangkau untuk keperluan imigrasi.\r\n\r\nObat-obatan Pribadi: Bawa obat rutin Anda, vitamin, serta pelembab bibir (lip balm) karena udara di dalam pesawat sangat kering.\r\n\r\nBuku Doa & Al-Qur\'an Saku: Manfaatkan waktu di pesawat untuk berdzikir dan murojaah doa-doa manasik agar saat tiba di Makkah, Anda sudah siap sepenuhnya.\r\n\r\nPerangkat Elektronik: Powerbank dan kabel data sangat penting untuk memastikan smartphone Anda tetap menyala saat harus menghubungi tim penjemputan di bandara.\r\n\r\nKain Ihram Cadangan (Pria): Bagi jamaah pria yang mengambil Miqat di atas pesawat (Yalamlam), pastikan kain ihram sudah siap di tas kabin agar mudah berganti pakaian di toilet pesawat.\r\n\r\nPersiapan kecil ini akan membuat perjalanan panjang Anda terasa jauh lebih ringan dan terorganisir.', 'Tim Karim Travel', 4, '2026-03-31 20:29:51', '2026-04-01 17:55:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_03_25_010447_create_settings_table', 2),
(6, '2026_03_26_013232_create_sponsors_table', 4),
(8, '2026_03_26_020556_create_testimonials_table', 5),
(9, '2026_03_26_005934_create_packages_table', 6),
(10, '2026_03_26_063316_add_type_to_packages_table', 7),
(11, '2026_03_26_085335_create_articles_table', 8),
(12, '2026_03_26_092936_create_contact_messages_table', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'umrah',
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kategori_badge` varchar(255) DEFAULT NULL,
  `sisa_seat` int(11) NOT NULL DEFAULT 0,
  `deskripsi_singkat` text NOT NULL,
  `deskripsi_lengkap` longtext DEFAULT NULL,
  `tanggal_berangkat` varchar(255) NOT NULL,
  `hotel` varchar(255) NOT NULL,
  `maskapai` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `packages`
--

INSERT INTO `packages` (`id`, `type`, `nama`, `slug`, `gambar`, `kategori_badge`, `sisa_seat`, `deskripsi_singkat`, `deskripsi_lengkap`, `tanggal_berangkat`, `hotel`, `maskapai`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'umrah', 'Umrah Reguler 9 Hari', 'umrah-reguler-9-hari-06EzU', 'packages/8Ntp0TIWQagb5asgIOtD13QAiPiQ0v7ixs65masu.jpg', 'TERLARIS', 50, 'Program fokus ibadah dengan fasilitas hotel bintang 5 yang sangat dekat dari pelataran masjid.', 'Fasilitas (Daftar):\r\n\r\nCity Tour Istanbul & Cappadocia\r\n\r\nHotel Bintang 5 di Makkah & Madinah\r\n\r\nPesawat: Turkish Airlines\r\n\r\nMuthawwif & Tour Guide Lokal\r\n\r\nVisa Umrah & Visa Turki', '15 Jan 2027 (KNO -MED)', 'Hotel Bintang 5 (Makkah & Madinah)', 'Saudia Airlines (Direct)', 'Rp 39.000.000', '2026-03-25 22:29:52', '2026-03-31 22:02:55'),
(4, 'umrah', 'Umrah Itikaf Akhir Ramadhan 2026 (15 Hari)', 'umrah-itikaf-akhir-ramadhan-2026-15-hari-sqCnu', 'packages/FC5FVY309QkyKTjPff2olf2PNATH5fmtwNfwPOV2.jpg', 'BEST SELLER', 45, 'Rasakan kekhusyukan beribadah di 10 malam terakhir bulan Ramadhan. Paket ini dirancang khusus bagi jamaah yang ingin fokus beritikaf di Masjidil Haram dengan fasilitas hotel yang sangat dekat, sehingga memudahkan akses keluar-masuk masjid.', 'Fasilitas (Daftar):\r\n\r\nHotel Makkah: Pulman Zamzam (Pelataran)\r\n\r\nHotel Madinah: Al-Rawda Royal Inn\r\n\r\nPesawat: Saudi Arabian Airlines (Direct)\r\n\r\nBuka Puasa & Sahur Buffet\r\n\r\nFree Tahallul & Air Zamzam 5L', '22 Maret 2027 (KNO -MED)', 'Hotel Bintang 5 (Makkah & Madinah)', 'Saudia Airlines (Direct)', 'Rp 54.500.000', '2026-03-31 21:51:57', '2026-03-31 21:52:33'),
(5, 'umrah', 'Umrah Plus Jejak Rasul Turki (12 Hari)', 'umrah-plus-jejak-rasul-turki-12-hari-sYTc9', 'packages/G60IehuDe6ncLDuc6IAbGoCoL2i0TKGtnIXmzVvL.jpg', 'Limited Slot', 45, 'Kombinasi sempurna antara ibadah suci dan wisata sejarah Islam. Setelah menyelesaikan ibadah Umrah, jamaah akan diajak mengunjungi keajaiban dunia di Turki, mulai dari Hagia Sophia hingga menikmati keindahan Cappadocia. Perjalanan nyaman dengan maskapai terbaik di dunia.', 'Fasilitas (Daftar):\r\n\r\nCity Tour Istanbul & Cappadocia\r\n\r\nHotel Bintang 5 di Makkah & Madinah\r\n\r\nPesawat: Turkish Airlines\r\n\r\nMuthawwif & Tour Guide Lokal\r\n\r\nVisa Umrah & Visa Turki', '30 April 2027 (KNO -MED)', 'Hotel Bintang 5 (Makkah & Madinah)', 'Saudia Airlines (Direct)', 'Rp 46.800.000', '2026-03-31 22:01:05', '2026-03-31 22:02:28'),
(6, 'haji', 'Haji Khusus Masyair 2026 (22 Hari)', 'haji-khusus-masyair-2026-22-hari-cgjIX', 'packages/ST83B9qz420KPrCokE9ey5Pcbb1bQw6lLoBS4Mx5.jpg', 'PALING DICARI', 45, 'Fasilitas (Daftar):\r\n\r\nVisa Haji Resmi Kerajaan\r\n\r\nHotel Makkah: Hilton Convention\r\n\r\nHotel Madinah: Anwar Al Madinah Movenpick\r\n\r\nBus Luxury 2026 (Full AC & Toilet)\r\n\r\nKatering Menu Indonesia 3x Sehari', NULL, '22 Juni 2027 (KNO -MED)', 'Hotel Bintang 5 (Makkah & Madinah)', 'Saudia Airlines (Direct)', 'Rp 215.000.000', '2026-03-31 22:07:24', '2026-03-31 22:07:24'),
(7, 'haji', 'Haji Furoda Royal VIP 2026', 'haji-furoda-royal-vip-2026-U4PK6', 'packages/C0uAn1Oql7CnRyEgCCG74wUDvVSDVF1es1lQ3nNp.jpg', 'KUOTA TERBATAS', 20, 'Solusi keberangkatan Haji tanpa menunggu antrean tahunan. Nikmati fasilitas kelas sultan dengan hotel bintang 5 persis di depan Masjidil Haram dan tenda AC eksklusif di Mina. Pendampingan penuh oleh ustadz pembimbing nasional selama manasik hingga prosesi wukuf.', NULL, '22 Juni 2027 (KNO -MED)', 'Hotel Bintang 5 (Makkah & Madinah)', 'Saudia Airlines (Direct)', 'Rp 355.000.000', '2026-03-31 22:08:39', '2026-03-31 22:08:39'),
(8, 'umrah', 'UmrahPlatinum 20 hari', 'umrahplatinum-20-hari-IPKzy', 'packages/xSLnMtbo9mzKfDvqsUTSaAl6IrcvmPcz5ehVYMTu.jpg', 'Besty', 1, 'Rasakan kekhusyukan beribadah di 10 malam terakhir bulan Ramadhan. Paket ini dirancang khusus bagi jamaah yang ingin fokus beritikaf di Masjidil Haram dengan fasilitas hotel yang sangat dekat, sehingga memudahkan akses keluar-masuk masjid.', 'Fasilitas (Daftar):\r\n\r\n1. City Tour Istanbul & Cappadocia\r\nHotel Bintang 5 di Makkah & Madinah\r\nPesawat: Turkish Airlines\r\nMuthawwif & Tour Guide Lokal\r\nVisa Umrah & Visa Turki', '22 Maret 2027 (KNO -MED)', '22 Maret 2027 (KNO -MED)', 'Saudia Airlines (Direct)', 'Rp 80,000.000', '2026-04-01 02:15:05', '2026-04-01 02:17:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4Ky1ubCND5gl64LGdtnx65YY9rQFUdDuhZ0jWnQU', NULL, '103.154.148.38', 'WhatsApp/2.2607.106 W', 'eyJfdG9rZW4iOiJaRVZiOHg3NFB2SDU4NzVjT1YyNDZ4b3ZtUGNYWVBuS1oxcGJTRGROIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb20iLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775115460),
('5QzxYrtHAoWeA0pG7uwr03XovZbz1EQ39wQymAbN', NULL, '103.154.148.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJNWVRic2Z5eVRGNm5PRldJM1BpbmxlNXRnb0dkM1lzNnA3Qm0wSjNUIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb20iLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775124961),
('6iROQeHmU7xmiqn3RWj1CBjMezn9nTEALPu2hImd', 2, '103.154.148.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiI4Rk9tUHBlWTBMcm1JNnZRdnVSQXNic1J6THlidVlZY1FPUHVYYTd0IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb20iLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjJ9', 1775115877),
('6JPeAjUaViPGyMK8jrSVrLGClvkLUZVeRtL81hoD', NULL, '2a03:2880:3ff:50::', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'eyJfdG9rZW4iOiJ0RXNFSDd1S200TGJ1elI1WTJXU3hvMzFReTZwb3R0RWhOcURCYjBaIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3BhdGNoLW1hY3JvLWNvbnRlbnQtYmFieS50cnljbG91ZGZsYXJlLmNvbVwvbG9naW4iLCJyb3V0ZSI6ImxvZ2luIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775114878),
('9q6znEfzWHLrH8p7V662BIVJ7LdQD6eSgDlLzdJ4', NULL, '2a03:2880:30ff:4::', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJUWHBuZjFsNk12WUxqWG9EY3B0UkdBcDlxNDFjdEJuTWlMeFJYalVzIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb21cL2xvZ2luP2ZiY2xpZD1Jd1pYaDBiZ05oWlcwQ01URUFjM0owWXdaaGNIQmZhV1FNTWpVMk1qZ3hNRFF3TlRVNEFBRWVMM0FIVFFrWXVTdl9UeGxHZUo0b1o4VWJGbnRmbE9CME1tbnlDZC1qc2I0RlY2RGFkTE9yeEF5MTlLb19hZW1fMWlKZG9ldVNzZTB5V25kWnFQOW1IZyIsInJvdXRlIjoibG9naW4ifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1775115592),
('E7upumkaQO1BkUu1PoebEMX4Q3MFj8KWLGtTAA5s', NULL, '2a03:2880:32ff:9::', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'eyJfdG9rZW4iOiJUcWdNS1NadmlCTWx2Y2lQWnJNWExuRlhaMzAxTU9laFpOZUl6MW93IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb20iLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775114773),
('eeHp6uab6v4Bd0fNwkLK5YQQUCsNB6ZhJpyoWRRm', NULL, '2a03:2880:22ff:7::', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'eyJfdG9rZW4iOiJWWGJmS3ZNdWxyRXBPYXF1bDh4VXhsRE1XZjBiY3YwclBack9NQzUzIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb21cL2xvZ2luIiwicm91dGUiOiJsb2dpbiJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1775114878),
('hzLfBuQiTFPy7X7BjkX5I0H8BQ8SfZaGqcXAFCcy', NULL, '103.154.148.38', 'WhatsApp/2.2607.106 W', 'eyJfdG9rZW4iOiJsUFZxWGJPUHRFM01vUWRDV1FkanY5MjN0dVZVT0hmTEZlYmZtaFRwIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb21cL2xvZ2luIiwicm91dGUiOiJsb2dpbiJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1775121993),
('j3GhSf05ppk8W1weKinOdmfmRDd6FVUnc0SMOBNB', NULL, '114.122.78.45', 'Mozilla/5.0 (Linux; Android 10; RMX1851 Build/QKQ1.190918.001) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/146.0.7680.148 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/554.0.0.57.70;IABMV/1;]', 'eyJfdG9rZW4iOiIxV2RsQmJhRk94WlNBZ3NCYmRYY1RoR2VIZ3lFWDdtVlZsc2NpS0hzIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb20iLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775114754),
('k2QWvRdStw9whGull6j163Gi10ZmFdHrcu9g6l7X', NULL, '2a03:2880:24ff:9::', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'eyJfdG9rZW4iOiJiNkUyN2Q1N0tOSmhxMTNtakk0Yzk0bERVMkdETkhrUElCMG5pMHJ0IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb21cLz9mYmNsaWQ9SXdaWGgwYmdOaFpXMENNVEVBYzNKMFl3WmhjSEJmYVdRTU1qVTJNamd4TURRd05UVTRBQUVlemRXM2cwdFVTYjk3NVZueGxlaHg3R3duQ3Q4N0lJaFdYZ0JBeWp1MUZGaXlyb09mQnRhXzE5Y2xTNjBfYWVtX0FfWG9qMjJYRE9IcFliRmZVdVRjSEEiLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775115623),
('LeI4dSOTP4VL4PMMnelNr5EzHVIGdSOT1itpuGtJ', NULL, '103.154.148.38', 'WhatsApp/2.2607.106 W', 'eyJfdG9rZW4iOiJtejhaQmdlTnRiVjVUcFl3QVdzU3dyUUVFSE5oSEd3OXAwZUROaGpjIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb20iLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775117315),
('LrIKtAEeGki7qvYMOp1Zt8i3wLSFewiXrPhmDHf6', NULL, '2404:c0:b302:5096:8775:702e:d7ac:5247', 'WhatsApp/2.23.20.0', 'eyJfdG9rZW4iOiJwQzh4TjFXdVEwYTdkeGVYemZ4dzdmNVhPdmpWOTVuT2ZoUzVCNUxWIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb20iLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775121751),
('mYgUTVNLyXEqLPfk4h5HoaVK08Kavfprn16Ax7JA', NULL, '2404:c0:b302:5096:b028:6686:225c:1460', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/29.0 Chrome/136.0.0.0 Mobile Safari/537.36', 'eyJfdG9rZW4iOiJPUGJ3cjN2c0s0eTh1TFFLVDlRODZtcGMwRVlwdUd5Y2xldkpaR01IIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb20iLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775126012),
('nnY5KvKjvsuX6BahPYweapSYfOgNLXLVsVT5vLQv', NULL, '2a03:2880:ff:5::', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'eyJfdG9rZW4iOiI3TG1YcWo4aVlYb0hIakZxN2NBNTVDb1pkSWE5TEJ3dTlNbmlhUGJiIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3BhdGNoLW1hY3JvLWNvbnRlbnQtYmFieS50cnljbG91ZGZsYXJlLmNvbVwvbG9naW4iLCJyb3V0ZSI6ImxvZ2luIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775114877),
('OMJT6dgXIEOsvYcBJzrat91BY53G4zvWlhd2ed4C', NULL, '114.10.6.227', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/29.0 Chrome/136.0.0.0 Mobile Safari/537.36', 'eyJfdG9rZW4iOiJrbmwzdXVhRmNLRWdKbDRjY2FrUkpTb1NSVzBKMnFYRkZMRnlMQUpmIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb20iLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775124085),
('owKYTngBwNsxzK1J45v55FWuN8QxNOdEnsIFWlgo', NULL, '149.154.161.197', 'TelegramBot (like TwitterBot)', 'eyJfdG9rZW4iOiJwbWM5ZDA0Z3QzZUx3em5yT1VxSGp0TURIMTFxcGJ3SE1ueUJob0JBIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb20iLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775117333),
('PpTIHunp6bBAxvWkDkP1CxSjuq9tp53iBsx4aPkl', NULL, '2a03:2880:25ff:b::', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'eyJfdG9rZW4iOiJZSHhLd09tNmZ2clpuQ3lBektlWkNIZmVaanNaS0F1VW15WWl0T055IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3BhdGNoLW1hY3JvLWNvbnRlbnQtYmFieS50cnljbG91ZGZsYXJlLmNvbSIsInJvdXRlIjpudWxsfSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1775114773),
('qZXKq6HJTy7P9VC4qsOar9HjCMelIYIAypJkdoX7', NULL, '114.122.78.45', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Mobile Safari/537.36', 'eyJfdG9rZW4iOiJVOHVBVElXdjJiZ01KYkFzaWp5NW5PSzRCdDY5V0JLTnowV3Zud1hMIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb21cL2tvbnRhayIsInJvdXRlIjoiZnJvbnQua29udGFrIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775114886),
('r4f6i1A38QG3tdMrhN0wRmZt2s0bTYuxYEPddYi2', NULL, '118.99.123.37', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJLR0cyTWZzVGpOTlhGSU5IMXc2OGtOUG9PSGFqMEdNMUc3Vno3SzBvIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cHM6XC9cL3BhdGNoLW1hY3JvLWNvbnRlbnQtYmFieS50cnljbG91ZGZsYXJlLmNvbSIsInJvdXRlIjpudWxsfX0=', 1775117656),
('ro34lxX6rUIUI7DWJ6zbbNm0a0gx9AtxMjoeyBhX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJTOVBuZnRJdG9tOWJXZ0puUnNhMDhCYmhsVlZIQmxaWkZYOVBuSk5RIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwIiwicm91dGUiOm51bGx9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1775200838),
('sqNETwpN9gDynQ53DXxdr5JqXqcawON2MuW2DnuO', NULL, '2a03:2880:7ff:59::', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'eyJfdG9rZW4iOiJTdnpvMWVKSVJVM3hkRlZkWnkzUlhaTHFORzVHTEVtdml6ampoa3MyIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb20iLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775114773),
('TayFNmBY3YMXKlL1UrHNCZ1rR6HY5AvCGJbaPcGi', NULL, '114.122.78.45', 'Mozilla/5.0 (Linux; Android 10; RMX1851 Build/QKQ1.190918.001) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/146.0.7680.168 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/554.0.0.57.70;IABMV/1;]', 'eyJfdG9rZW4iOiJWcGM5Rm1YdEF5cEU2eXc4VXJrOHlkWVFWS25HSnZBSWJ5b3d4OEpEIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb20iLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775114866),
('ucg13lDceZ2cMczXZhYhjSCWovBIW97PysJDJBYN', NULL, '103.154.148.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJFUUlvZ2dzNWo4enFJT21FbVlhWDloTEdZZ0l2bUNvbjFkY1dPV3F4IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb21cL2xvZ2luIiwicm91dGUiOiJsb2dpbiJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1775114730),
('UHut6de0lfbcyeW7O29RH5wtK8mL9cd2KNxeBuMq', 2, '2404:c0:b302:5096:8775:702e:d7ac:5247', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Mobile Safari/537.36', 'eyJfdG9rZW4iOiJEUHJFbDFqMm5QN0lOY2JjQWNVaEVnRGtxbG1WRDhFODBGYWhKeTFNIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb21cL2FkbWluXC9oYWppXC9iYW5uZXIiLCJyb3V0ZSI6ImFkbWluLmhhamkuYmFubmVyIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjJ9', 1775122230),
('W1NsSFVdRCZuUgP1fyxdGOr0TSFPY8OJCYAKrsFj', NULL, '2404:c0:702e:6bf1:1:0:7870:b2ee', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Mobile Safari/537.36', 'eyJfdG9rZW4iOiJDanJnQWFxUHFMMk5ka3ZmMGpmbmlIanc5MGZWU3hscm1MclNqbUhWIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb20iLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775125997),
('w67BAistycsCklbx4T3DS0rcg8SeUxwyex0SiJTV', NULL, '2a03:2880:21ff:7e::', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJkNVlaUmtsdGJBVG1hS3F5WVRlVjh4cDFQT0piREtQVUg1MXF4em1mIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb21cLz9mYmNsaWQ9SXdaWGgwYmdOaFpXMENNVEVBYzNKMFl3WmhjSEJmYVdRTU1qVTJNamd4TURRd05UVTRBQUVlemRXM2cwdFVTYjk3NVZueGxlaHg3R3duQ3Q4N0lJaFdYZ0JBeWp1MUZGaXlyb09mQnRhXzE5Y2xTNjBfYWVtX0FfWG9qMjJYRE9IcFliRmZVdVRjSEEiLCJyb3V0ZSI6bnVsbH0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1775115592),
('YRspeFmrZNak7RL1iOm23lN7TJd6hmzfh11okPnd', NULL, '103.154.148.38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36 Edg/146.0.0.0', 'eyJfdG9rZW4iOiIxaXhFOEVLa2YyYlh1SFQyalcyUkJ4UGNtd0dZVVlmTXF0YXBEYVM2IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb21cL2xvZ2luIiwicm91dGUiOiJsb2dpbiJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1775122019),
('Z1gtkdcraaEOpjh78PeRQAXrPjxtEBURNhfRc08e', NULL, '2a03:2880:32ff:73::', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'eyJfdG9rZW4iOiJKSjdLRGtJZHV6RnpSYzMyV3ZRWml6OVpsY2ZCbEtWc0VsTFJaWlBDIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3BhdGNoLW1hY3JvLWNvbnRlbnQtYmFieS50cnljbG91ZGZsYXJlLmNvbSIsInJvdXRlIjpudWxsfSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1775114772),
('Zv0RQ27Sexh1Cf8J5nfZwoumlGXHaYtEgDvbZiyC', NULL, '2a03:2880:ff:5e::', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'eyJfdG9rZW4iOiJYYmdkUGl5YllOaUNzRlhEb3RhOWxMWEphSkRSRU1KV3JFa1RFVVZXIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9wYXRjaC1tYWNyby1jb250ZW50LWJhYnkudHJ5Y2xvdWRmbGFyZS5jb21cL2xvZ2luIiwicm91dGUiOiJsb2dpbiJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1775114878);

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'text',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, 'nama_brand', 'Karim Travel', 'text', '2026-03-25 17:52:22', '2026-04-02 00:24:16'),
(2, 'nomor_wa', '083133387676', 'text', '2026-03-25 17:52:22', '2026-03-25 17:57:37'),
(3, 'logo_header', 'pengaturan/UfuB2oqaUGfxF1nUWQEOOFzfQDMyYX2bMxDKSU9s.png', 'image', '2026-03-25 17:56:41', '2026-03-25 17:57:37'),
(4, 'hero_media', 'pengaturan/3kAlgwHJD0cszyc5n5xNbrPOt9FPDluuXpEf3GY3.mp4', 'image', '2026-03-25 19:55:10', '2026-04-01 00:44:20'),
(5, 'about_headline', 'We are award winning Hajj & Umrah Agency', 'text', '2026-03-25 20:12:08', '2026-03-25 20:20:07'),
(6, 'about_description', 'We have been worked within the hajj and umrah travel industry for over 20 years and we\'re confident enough to say that we know our stuff, capability and hospitality.', 'text', '2026-03-25 20:12:08', '2026-03-25 20:12:08'),
(7, 'about_img_bg', 'pengaturan/lPng6ViMJvBEMzTY3rX9y6jIYTM2AI9oluy7OuBy.jpg', 'image', '2026-03-25 20:12:08', '2026-03-25 20:12:08'),
(8, 'about_img_top', 'pengaturan/RtGHxWs83gWJ8U5uo01SomrFC5C4vaiM1Q9kvxUo.jpg', 'image', '2026-03-25 20:13:34', '2026-03-25 20:13:34'),
(9, 'about_img_bottom', 'pengaturan/bNKcXFrCwBxH8aCTpTsVWuodVse7BY2p7NreTeCc.jpg', 'image', '2026-03-25 20:13:34', '2026-03-25 20:13:34'),
(10, 'about_img_left', 'pengaturan/ni8QElUH8nMym6yKXJX3lEaaYjiOWNPEi0B129AO.jpg', 'image', '2026-03-25 20:13:34', '2026-03-25 20:13:34'),
(11, 'about_img_right', 'pengaturan/E5JkwTg5jBfHnVH4NONdZjCZawBCbEEEQ8SwkVMa.jpg', 'image', '2026-03-25 20:13:34', '2026-03-25 20:13:34'),
(12, 'pricing_1_name', 'Premium Haji', 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:54'),
(13, 'pricing_1_price', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(14, 'pricing_1_badge', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(15, 'pricing_1_feat_1', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(16, 'pricing_1_feat_2', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(17, 'pricing_1_feat_3', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(18, 'pricing_1_feat_4', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(19, 'pricing_1_feat_5', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(20, 'pricing_1_link', 'https://wa.me/6283133387676', 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(21, 'pricing_2_name', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(22, 'pricing_2_price', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(23, 'pricing_2_badge', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(24, 'pricing_2_feat_1', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(25, 'pricing_2_feat_2', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(26, 'pricing_2_feat_3', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(27, 'pricing_2_feat_4', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(28, 'pricing_2_feat_5', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(29, 'pricing_2_link', 'https://wa.me/6283133387676', 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(30, 'pricing_3_name', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(31, 'pricing_3_price', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(32, 'pricing_3_badge', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(33, 'pricing_3_feat_1', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(34, 'pricing_3_feat_2', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(35, 'pricing_3_feat_3', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(36, 'pricing_3_feat_4', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(37, 'pricing_3_feat_5', NULL, 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(38, 'pricing_3_link', 'https://wa.me/6283133387676', 'text', '2026-03-25 20:21:04', '2026-03-25 20:21:04'),
(39, 'why_us_title_1', 'Competent', 'text', '2026-03-25 20:22:24', '2026-03-25 20:22:38'),
(40, 'why_us_desc_1', 'The Guide are reliable in knowledge, wise, inteligent in presenting solutions so that they are able to provide calm and comfort in worship.', 'text', '2026-03-25 20:22:24', '2026-03-25 20:22:24'),
(41, 'why_us_title_2', 'Affordable Rates', 'text', '2026-03-25 20:22:24', '2026-03-25 20:22:24'),
(42, 'why_us_desc_2', 'The Guide are reliable in knowledge, wise, inteligent in presenting solutions so that they are able to provide calm and comfort in worship.', 'text', '2026-03-25 20:22:24', '2026-03-25 20:22:24'),
(43, 'why_us_title_3', 'Responsive', 'text', '2026-03-25 20:22:24', '2026-03-25 20:22:24'),
(44, 'why_us_desc_3', 'The Guide are reliable in knowledge, wise, inteligent in presenting solutions so that they are able to provide calm and comfort in worship.', 'text', '2026-03-25 20:22:24', '2026-03-25 20:22:24'),
(45, 'why_us_title_4', 'Trust & Safety', 'text', '2026-03-25 20:22:24', '2026-03-25 20:27:37'),
(46, 'why_us_desc_4', 'The Guide are reliable in knowledge, wise, inteligent in presenting solutions so that they are able to provide calm and comfort in worship.', 'text', '2026-03-25 20:22:24', '2026-03-25 20:22:24'),
(47, 'gallery_title', 'Our Pilgrimage Moments', 'text', '2026-03-25 20:32:01', '2026-03-25 20:32:01'),
(48, 'gallery_subtitle', 'Glimpses of peace and devotion from our recent journeys.', 'text', '2026-03-25 20:32:01', '2026-03-25 20:32:01'),
(49, 'gallery_img_1', 'pengaturan/ovJv5AdxWRO6CBFj6M5QeIQVtbKffWJnF8u4cP88.jpg', 'image', '2026-03-25 20:32:01', '2026-03-25 20:32:01'),
(50, 'gallery_img_2', 'pengaturan/JhcjFPogVEoROO1BImHxEd2iocl02pVfdzfO5xSY.jpg', 'image', '2026-03-25 20:32:01', '2026-03-25 20:32:01'),
(51, 'gallery_img_3', 'pengaturan/zqJ9xO6ZhCO1HW0E10RtcOaWEDWw7GbCcJBStovu.jpg', 'image', '2026-03-25 20:32:01', '2026-03-25 20:32:01'),
(52, 'gallery_img_4', 'pengaturan/9Sij0EBOHShYsOPn038SkwEcLQIE8v2zEbn6sLpk.jpg', 'image', '2026-03-25 20:32:01', '2026-03-25 20:32:01'),
(53, 'gallery_img_5', 'pengaturan/kz8sYbVObQSGWnb1dIIkUw3ZTuDPUzaXylOQ6ZKD.jpg', 'image', '2026-03-25 20:32:01', '2026-03-25 20:32:01'),
(54, 'edukasi_title', 'Panduan Manasik & Edukasi', 'text', '2026-03-25 20:57:50', '2026-03-25 20:57:50'),
(55, 'edukasi_subtitle', 'Persiapkan perjalanan suci Anda dengan bekal ilmu yang cukup. Pelajari tata cara ibadah Umrah dan Haji sesuai sunnah.', 'text', '2026-03-25 20:57:50', '2026-03-25 20:57:50'),
(56, 'edukasi_video_link', 'https://youtu.be/XJBibv9_FBI?si=-jVHwDsYrEwDABKx', 'text', '2026-03-25 20:57:50', '2026-03-25 20:57:50'),
(57, 'edukasi_video_title', 'Tata Cara Pelaksanaan Umrah Lengkap Sesuai Sunnah', 'text', '2026-03-25 20:57:50', '2026-03-25 20:57:50'),
(58, 'edukasi_video_meta', 'Durasi: 15 Menit • Oleh Ustadz Pembimbing Karim Travel', 'text', '2026-03-25 20:57:50', '2026-03-25 20:57:50'),
(59, 'edukasi_item_1_title', 'Kumpulan Doa Umrah', 'text', '2026-03-25 20:57:50', '2026-03-25 20:57:50'),
(60, 'edukasi_item_1_desc', 'Lengkap dengan tulisan Arab, latin, dan terjemahan.', 'text', '2026-03-25 20:57:50', '2026-03-25 20:57:50'),
(61, 'edukasi_item_2_title', 'Checklist Perlengkapan', 'text', '2026-03-25 20:57:50', '2026-03-25 20:57:50'),
(62, 'edukasi_item_2_desc', 'Barang esensial wajib bawa untuk jamaah pria & wanita.', 'text', '2026-03-25 20:57:50', '2026-03-25 20:57:50'),
(63, 'edukasi_item_3_title', 'Syarat & Larangan Ihram', 'text', '2026-03-25 20:57:50', '2026-03-25 20:57:50'),
(64, 'edukasi_item_3_desc', 'Hal-hal yang membatalkan dan wajib dihindari.', 'text', '2026-03-25 20:57:50', '2026-03-25 20:57:50'),
(65, 'umrah_why_title_1', 'Kepastian Berangkat', 'text', '2026-03-25 22:48:57', '2026-03-25 22:48:57'),
(66, 'umrah_why_desc_1', 'Tiket pesawat dan visa sudah kami blokir jauh hari. Tidak ada istilah gagal berangkat, *reschedule* sepihak, atau penelantaran jamaah.', 'text', '2026-03-25 22:48:57', '2026-03-25 22:48:57'),
(67, 'umrah_why_title_2', 'Muthawwif Profesional', 'text', '2026-03-25 22:48:57', '2026-03-25 22:48:57'),
(68, 'umrah_why_desc_2', 'Didampingi langsung oleh Ustadz berpengalaman lulusan universitas Timur Tengah yang paham sejarah dan tata cara ibadah murni sesuai sunnah.', 'text', '2026-03-25 22:48:57', '2026-03-25 22:48:57'),
(69, 'umrah_why_title_3', 'Hotel Jarak Dekat (Ring 1)', 'text', '2026-03-25 22:48:57', '2026-03-25 22:48:57'),
(70, 'umrah_why_desc_3', 'Kami mengutamakan hotel bintang 4 dan 5 di ring 1 agar jamaah (terutama lansia) tidak kelelahan berjalan kaki menuju masjid.', 'text', '2026-03-25 22:48:57', '2026-03-25 22:48:57'),
(71, 'umrah_faq_q_1', 'Apakah harga sudah termasuk Paspor?', 'text', '2026-03-25 22:48:57', '2026-03-25 22:48:57'),
(72, 'umrah_faq_a_1', 'Belum. Biaya pembuatan paspor dan vaksin meningitis ditanggung masing-masing jamaah. Namun, tim kami siap membantu memberikan surat rekomendasi resmi ke pihak imigrasi.', 'text', '2026-03-25 22:48:57', '2026-03-25 22:48:57'),
(73, 'umrah_faq_q_2', 'Apa saja perlengkapan yang didapat?', 'text', '2026-03-25 22:48:57', '2026-03-25 22:48:57'),
(74, 'umrah_faq_a_2', 'Paket sudah All-In. Anda akan mendapatkan koper bagasi premium, tas kabin, tas selempang/paspor, kain ihram (pria), mukena (wanita), seragam batik, buku panduan doa, dan ID Card.', 'text', '2026-03-25 22:48:57', '2026-03-25 22:48:57'),
(75, 'umrah_faq_q_3', 'Bisa request sekamar berdua (Double)?', 'text', '2026-03-25 22:48:57', '2026-03-25 22:48:57'),
(76, 'umrah_faq_a_3', 'Tentu bisa. Harga dasar kami menggunakan kamar tipe Quad (sekamar ber-4). Untuk *upgrade* ke kamar Triple (ber-3) atau Double (ber-2), akan ada sedikit penyesuaian biaya.', 'text', '2026-03-25 22:48:57', '2026-03-25 22:48:57'),
(77, 'umrah_banner_headline', 'Perjalanan Umroh Lebih Nyaman Bersama Karim Travel', 'text', '2026-03-25 23:12:14', '2026-03-25 23:12:14'),
(78, 'umrah_banner_quote', '\"Antara umrah yang satu dan umrah lainnya, itu akan menghapuskan dosa di antara keduanya. Dan haji mabrur tidak ada balasannya melainkan surga.\"', 'text', '2026-03-25 23:12:14', '2026-03-25 23:12:14'),
(79, 'umrah_banner_quote_source', '(HR. Bukhari dan Muslim)', 'text', '2026-03-25 23:12:14', '2026-03-25 23:12:14'),
(80, 'umrah_banner_badge', 'LEBIH NYAMAN', 'text', '2026-03-25 23:12:14', '2026-03-25 23:12:14'),
(81, 'umrah_banner_image', 'pengaturan/gDrxaji8bNJevqxNJO2DEM1m5FUErfRG5hVZ60kG.jpg', 'image', '2026-03-25 23:12:14', '2026-03-25 23:12:14'),
(82, 'article_banner_headline', 'Jurnal & Inspirasi Panduan Ibadah Karim Travel', 'text', '2026-03-26 02:11:11', '2026-03-26 02:11:11'),
(83, 'article_banner_quote', '\"Barangsiapa menempuh suatu jalan untuk menuntut ilmu agama, maka Allah akan mudahkan baginya jalan menuju surga.\"', 'text', '2026-03-26 02:11:11', '2026-03-26 02:11:11'),
(84, 'article_banner_quote_source', '(HR. Muslim)', 'text', '2026-03-26 02:11:11', '2026-03-26 02:11:11'),
(85, 'article_banner_badge', 'KABAR TERBARU', 'text', '2026-03-26 02:11:11', '2026-03-26 02:19:14'),
(86, 'contact_office_headline', 'Kunjungi Kami di Kantor', 'text', '2026-03-26 03:29:08', '2026-03-26 03:29:08'),
(87, 'contact_office_desc', 'Pintu kantor kami selalu terbuka untuk Anda yang ingin berkonsultasi mengenai persiapan ibadah Umrah dan Haji secara langsung sambil menikmati secangkir teh.', 'text', '2026-03-26 03:29:08', '2026-03-26 03:29:08'),
(88, 'contact_office_phone', '+62 831-3338-7676', 'text', '2026-03-26 03:29:08', '2026-03-26 03:29:08'),
(89, 'contact_office_email', 'info@karimtravel.com', 'text', '2026-03-26 03:29:08', '2026-03-26 03:29:08'),
(90, 'contact_office_hours', '(Senin - Sabtu, 08:00 - 17:00)', 'text', '2026-03-26 03:29:08', '2026-03-26 03:29:08'),
(91, 'contact_office_address', 'Jl. Jend. Sudirman No. 123, Pusat Kota, Medan, Sumatera Utara 20152', 'text', '2026-03-26 03:29:08', '2026-03-26 03:29:08'),
(92, 'contact_office_map', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.98496248025!2d98.62398347349006!3d3.590923350281272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e5002c783ab%3A0xf2a9d83981179038!2sManhattan%20Times%20Square!5e0!3m2!1sid!2sid!4v1774520974182!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'text', '2026-03-26 03:29:08', '2026-03-26 03:30:04'),
(93, 'contact_office_image', 'pengaturan/cleWBvS3Cd2keqhODP7RlXd24IWojGDW42MjTrGZ.jpg', 'image', '2026-03-26 03:29:08', '2026-03-26 03:37:31'),
(94, 'contact_banner_headline', 'Silaturahmi & Konsultasi Ibadah Karim Travel', 'text', '2026-03-26 03:33:53', '2026-03-26 03:33:53'),
(95, 'contact_banner_desc', 'Kami selalu siap mendengarkan dan melayani kebutuhan perjalanan ibadah Anda...', 'text', '2026-03-26 03:33:53', '2026-03-26 03:33:53'),
(96, 'contact_banner_badge', 'LAYANAN SEPENUH HATI', 'text', '2026-03-26 03:33:53', '2026-03-26 03:33:53'),
(97, 'contact_banner_image', 'pengaturan/u0bleFHbmjwkyOY7wkQPmVubKQwEkLtTqQNgkMBk.jpg', 'image', '2026-03-26 03:33:53', '2026-03-26 03:33:53'),
(98, 'footer_description', 'Pelopor Solusi Perjalanan Ibadah Terdepan untuk Meningkatkan Pengalaman Ziarah dan Kenyamanan Jamaah.', 'text', '2026-03-26 04:08:50', '2026-03-26 04:09:11'),
(99, 'social_facebook', 'https://www.facebook.com/RaffiAhmadLagi', 'text', '2026-03-26 04:08:50', '2026-03-26 04:10:59'),
(100, 'social_twitter', 'https://x.com/cristiano', 'text', '2026-03-26 04:08:50', '2026-03-26 04:10:59'),
(101, 'social_linkedin', 'https://www.linkedin.com/in/williamtanuwijaya', 'text', '2026-03-26 04:08:50', '2026-03-26 04:10:59'),
(102, 'social_instagram', 'https://www.instagram.com/raffinagita1717', 'text', '2026-03-26 04:08:50', '2026-03-26 04:10:59'),
(103, 'haji_why_title_1', 'Izin Resmi PPIU', 'text', '2026-03-31 22:22:42', '2026-03-31 22:22:56'),
(104, 'haji_why_desc_1', 'Kami adalah biro perjalanan umrah yang telah mengantongi izin resmi dari Kementerian Agama RI. Keamanan dan kenyamanan ibadah Anda adalah prioritas hukum dan moral bagi kami.', 'text', '2026-03-31 22:22:42', '2026-03-31 22:22:42'),
(105, 'haji_why_title_2', 'Pembimbing Sesuai Sunnah', 'text', '2026-03-31 22:22:42', '2026-03-31 22:22:42'),
(106, 'haji_why_desc_2', 'Setiap keberangkatan didampingi oleh Ustadz dan Muthawwif berpengalaman yang memahami fiqih ibadah secara mendalam, memastikan setiap rangkaian ibadah Anda sempurna sesuai tuntunan.', 'text', '2026-03-31 22:22:42', '2026-03-31 22:22:42'),
(107, 'haji_why_title_3', 'Akomodasi Premium', 'text', '2026-03-31 22:22:42', '2026-03-31 22:22:42'),
(108, 'haji_why_desc_3', 'Kami bekerja sama dengan hotel-hotel terbaik yang berjarak sangat dekat dengan pelataran Masjidil Haram dan Masjid Nabawi untuk memudahkan akses ibadah harian Anda.', 'text', '2026-03-31 22:22:42', '2026-03-31 22:22:42'),
(109, 'haji_faq_q_1', 'Apakah Karim Travel menjamin keberangkatan Haji Furoda tanpa antre?', 'text', '2026-03-31 22:22:42', '2026-03-31 22:22:42'),
(110, 'haji_faq_a_1', 'Ya, kami menjamin keberangkatan Haji Furoda menggunakan Visa Mujamalah yang diterbitkan langsung oleh Kerajaan Arab Saudi. Tim kami akan mengawal seluruh proses mulai dari penerbitan visa hingga keberangkatan, sehingga Anda tidak perlu menunggu antrean resmi pemerintah bertahun-tahun.', 'text', '2026-03-31 22:22:42', '2026-03-31 22:22:42'),
(111, 'haji_faq_q_2', 'Bagaimana sistem pendampingan jamaah selama prosesi Wukuf di Arafah?', 'text', '2026-03-31 22:22:42', '2026-03-31 22:22:42'),
(112, 'haji_faq_a_2', 'Setiap jamaah akan didampingi oleh Ustadz pembimbing yang ahli di bidang fiqih Haji serta tim medis siaga. Kami juga menyediakan Tenda Maktab VIP yang dilengkapi dengan AC dan katering masakan Indonesia, sehingga jamaah bisa fokus beribadah tanpa mengkhawatirkan kenyamanan fisik di tengah cuaca panas.', 'text', '2026-03-31 22:22:42', '2026-03-31 22:22:42'),
(113, 'haji_faq_q_3', 'Apa saja dokumen yang harus disiapkan untuk pendaftaran Haji Plus?', 'text', '2026-03-31 22:22:42', '2026-03-31 22:22:42'),
(114, 'haji_faq_a_3', 'Dokumen utama yang diperlukan adalah Paspor (masa berlaku min. 1 tahun), Fotokopi KTP & KK, Foto 4x6 latar belakang putih, serta setoran awal untuk mendapatkan nomor porsi haji dari Kementerian Agama (untuk Haji Plus) atau pembayaran DP untuk Haji Furoda.', 'text', '2026-03-31 22:22:42', '2026-03-31 22:22:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mitra` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sponsors`
--

INSERT INTO `sponsors` (`id`, `nama_mitra`, `logo`, `created_at`, `updated_at`) VALUES
(2, 'BSI', 'sponsors/2HAezxqJKYsjQeFGWHxfLQtxVTK6Mdc1HMgHwgZI.png', '2026-03-25 19:59:53', '2026-03-25 19:59:53'),
(3, 'Qatar Airliness', 'sponsors/FhaBkzXTyTmJwJaMHmiNU6R5Qg4KRzaNCnyVXJIC.png', '2026-03-25 20:01:39', '2026-03-25 20:01:39'),
(5, 'Garuda Indonesia', 'sponsors/dewmZc63PwDLPQIFuOZ2zH3P6uhyzd0n4LqxwkDw.png', '2026-03-25 20:03:45', '2026-03-25 20:03:45'),
(6, 'Bank Muamalat', 'sponsors/yNcGsLM6SeMxy70VfugrxuOwj3nWI6W49wVYDdF7.png', '2026-03-25 20:06:28', '2026-03-25 20:06:28'),
(7, 'Telkomsel', 'sponsors/ta3mKPzna8nsJkTGB85l4I4Y6p774kfS0KHud6Ih.png', '2026-03-25 20:08:55', '2026-03-25 20:08:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `profesi` varchar(255) DEFAULT NULL,
  `pesan` text NOT NULL,
  `rating` varchar(255) NOT NULL DEFAULT '5.0',
  `avatar` varchar(255) NOT NULL,
  `gambar_background` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonials`
--

INSERT INTO `testimonials` (`id`, `nama`, `profesi`, `pesan`, `rating`, `avatar`, `gambar_background`, `created_at`, `updated_at`) VALUES
(1, 'Ramadhan Rifki', 'Freelancer', 'Alhamdulillah, perjalanan Umrah Ramadhan kemarin menjadi momen terbaik dalam hidup keluarga kami. Pelayanan Karim Travel sangat detail, mulai dari bimbingan manasik yang mendalam sampai hotel yang benar-benar di depan pelataran Masjidil Haram. Muthawwif-nya pun sangat sabar membimbing kami.', '5.0', 'testimonials/avatars/9V57klXsZ3lVindjQrx0GU5WyZomkOPCMpiEOu77.jpg', 'testimonials/backgrounds/7joggNMeWJteWGTcUDmK613u8S8y0ceY50V9MecK.jpg', '2026-03-31 20:23:32', '2026-03-31 20:23:32'),
(2, 'Dr. Fatimah Zahra', 'Dokter Specialis', 'Sempat khawatir dengan persiapan Haji Furoda yang serba cepat, tapi tim Karim Travel membuktikan profesionalitas mereka. Semua dokumen diurus dengan rapi, tenda di Mina sangat nyaman, dan logistik makanan selalu terjamin. Sangat direkomendasikan bagi yang mencari kenyamanan ibadah.', '5.0', 'testimonials/avatars/rhWvBNzt0ZPQaUC7BvJGErX9BWWm1ZcMZzNl1SgH.jpg', 'testimonials/backgrounds/ivDVRNIGDEBakhIcrZlcoM42pZektnfpE5NIBkFp.jpg', '2026-03-31 20:24:28', '2026-03-31 20:24:28');

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
(1, 'Admin', 'admin@hajjtravel.id', NULL, '$2y$12$BjXUkfVxniBDU13uB86f9OprHgx17Y6AJRc/mt5csOCtLekm/FuCq', NULL, '2026-03-24 18:03:44', '2026-03-24 18:03:44'),
(2, 'Admin', 'admin@karimtravel.com', NULL, '$2y$12$tyd6FeKlVQ7Of5CYeKaTUO73mgqsDUHxFUmxe6zZBfEuzPWPfI8Di', NULL, '2026-03-25 17:35:32', '2026-03-25 17:35:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indeks untuk tabel `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `packages_slug_unique` (`slug`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indeks untuk tabel `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT untuk tabel `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
