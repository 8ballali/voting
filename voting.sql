-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 03:16 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `poling_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `visi`, `misi`, `alamat`, `ttl`, `gender`, `user_phone`, `user_id`, `file`, `created_at`, `updated_at`, `poling_id`) VALUES
(3, 'Mbak Karjo 2', 'kamxa', 'sdcs', 'sdcscs', 'Semarang', 'Laki', 22555, 2, '1623769513_Cyber-Security.jpg', '2021-06-15 07:37:31', '2021-06-15 08:05:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`id`, `name`, `description`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Retro Car Semarang', 'RCS', '321654', NULL, '2021-06-14 20:33:43'),
(2, 'WOW JATENG', 'WULING OWNER JAWA TENGAH', '0822405411254', NULL, '2021-06-14 23:43:14'),
(4, 'WCC CHAPSEMAR', 'WHITE CAR COMMUNITY CHAPTER SEMARANG', '087832225111', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(5, 'RCCI', 'Red Car Community Indonesia', '2111151', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(6, 'Maxxio', 'Maxxio(club granmax luxio indonesia)', '082138947216', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(7, 'CCC', 'Coudeta Car Club', '082292290777', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(8, 'SIC Semarang', 'Sirion Indonesia Club chapter Semarang', '081326688607', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(9, 'ACS', 'AYLA CLUB SEMARANG', '+6281325626088', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(10, '[TEVCI]', 'TOYOTA ETIOS VALCO CLUB INDONESIA', '+62816567217', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(11, 'Cityzen', 'Honda City Club Indonesia', '081228229905', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(12, 'DXIC', 'DAIHATSU XENIA INDONESIA CLUB', '081278370802', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(13, 'FIAT', 'FIAT', '2124', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(14, 'NLC', 'Nissan Livina Club', '081326470079', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(15, 'LOI SMG', 'Lancer of Indonesia Semarang', '081390214888', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(16, 'CCI Chapter Semarang', 'CRV Club Indonesia Chapter Semarang', '08112595566', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(17, 'X-MAN chapter semar ', 'Xenia mania club indonesia chapter semar', '081226868948', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(18, 'TKSM', 'TOYOTA KIJANG SUPER MANIA', '085773504020', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(19, 'AYCO', 'Ayla Community', '082226333255', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(20, 'HORAI', 'Honda Odyssey RA Indonesia', '08122922994', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(21, 'BWCI', 'BLACK WHITE CAR INDONESIA', '082149949919', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(22, 'VOC chap semarang', 'Veloz Owners Club (VOC) Chapt Semarang', '087832095689', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(23, 'TERJANG', 'TERIOS JAWA TENGAH', '085640366872', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(24, 'KCI', 'Karimun Club Indonesia Pengda Semarang', '+6281329199597', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(25, 'TYCI Chapter Semarang', 'Toyota Yaris Club Indonesia chapter Semarang', '081226474422', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(26, 'AXIC', 'AvanzaXenia Indonesia Club', '085640479997', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(27, 'TSVC Chapter Semarang', 'Toyota Soluna Vios Club Chapter Semarang', '082227089055', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(28, 'ICCS', 'INNOVA COMMUNITY Chapter Semawis (semarang dan wilayah sekitarnya)', '081332473838', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(29, 'TACS', 'Toyota Agya Club Semarang', '089682555333', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(30, 'IJT', 'INNOVA JATENG', '08181931988383', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(31, 'DXIC', 'Daihatsu Xenia Indonesia Club', '08156508911', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(32, 'TFC', 'Trajet Family Club - Chapter Japan USA', '08122887757', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(33, 'DTC', 'Daihatsu Taruna Club ', '085292196000', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(34, 'Mobility Mobser', 'Mobilio Indonesia Community (Mobility) Semarang', '081901266771', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(35, 'IGNITY', 'Indonesia Ignis Community', '081336583567', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(36, 'TKCI cab SMG', 'Toyota Kijang Club Indonesia cabang Semarang', '081393501444', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(37, 'KoPLAX Indonesia', 'Komunitas Paseduluran Avanza Xenia Indonesia', '081225588766', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(38, 'DGCI Chapter Semarang', 'Datsun Go+ Community Indonesia', '081275371262', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(39, 'TKSCI H-CHAPTER', 'Toyota Kijang Super Community Indonesia', '082247539988', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(40, 'AXFC', 'AVANZA XENIA FANS CLUB', '08128923598', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(41, 'ISC Semarang', 'Indonesian Starlet Club Chapter Semarang', '085712373883', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(42, '[TC2I] SEMARAYA', '[TC2I] Toyota Calya Club Indonesia Chapter Semaraya', '081226611153', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(43, 'CSF', 'Corolla GL-SE Saloon Community Semarang Family', '081325718853', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(44, 'TRCI Chapter Atlas', 'Toyota Rush Club Indonesia Chapter Atlas', '081212000540', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(45, 'NEC', 'Nissan Evalia Community', '087876216680', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(46, 'HOFOS SEMARANG ATLAS (HSA)', 'Honda Freed Owners Indonesia (Chapter Semarang Atlas)', '08122907997', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(47, 'CALSIC', 'Calya Sigra Club', '087832048225', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(48, 'KMS', 'Komunitas Mazda Semarang', '085740242114', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(49, 'TID Chapter SEMARKUTIGA', 'TERIOS INDONESIA', '081575734383', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(50, 'HCI', 'HR-V  Club Indonesia', '081252114841', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(51, 'HMRC', 'HONDA MAESTRO RIDERS CLUB', '085600007784', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(52, 'LCC', 'Ladies Car Community', '081229575776', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(53, 'HDI Semarang ', 'Hrv Devotee Chapter Semarang ', '082242182156', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(54, 'SU', 'Suzuki United', '081315850506', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(55, 'GRAVINCI', 'Grand Livina Club Indonesia', '085876323076', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(56, 'SCOCI', 'Sigra Calya Owners Comunity Indonesia', '087760697869', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(57, 'MOI chapter serasi', 'Mobilio Indonesia chapter serasi', '085640023955', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(58, 'S[T]iC', 'Semarang Timor Club', '085747717272', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(59, 'TKRCI', 'Toyota Kijang Rover Club Indonesia', '08571192699', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(60, 'SIRIONITY', 'SIRION COMMUNITY', '085950409545', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(61, 'PION Chpater Semarang', 'PICANTO OWNERS INDONESIA', '085290764154', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(62, 'DGCIS', 'Datsun Go Community Indonesia Semarang', '+6282327674090', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(63, 'ECONITY SEMARANG', 'ECONITY SEMARANG', '082220225207', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(64, 'Komunitas Toyota Calya Indonesia ( KTCI jawa tengah)', 'KOMUNITAS TOYOTA CALYA INDONESIA (KTCI)', '081326960602', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(65, 'Brisik Brionesia Semarang Asik ', 'Brisik Brionesia Chapter Semarang', '082245637521', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(66, 'SPINDO', 'Spiner Indonesia', '085879759700', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(67, 'KCSI', 'Komunitas Carnival Sedona Indonesia', '087832276104', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(68, 'ICSF', '( ICSF SEMAR ) indonesian calya sigra family semarang raya', '082147656577', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(69, 'SMC', 'Semarang Mirage Club', '081901343813', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(70, 'MIXI', 'Mitsubishi Xpander Indonesia', '081390118850', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(71, 'PICA', 'PICANTO CLUB INDONESIA', '081806958567', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(72, 'ESC', 'Eltitusi Semarang Community', '082136850612', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(73, 'TDU', 'Toyota Daihatsu United', '089505587775', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(74, 'INA', 'INNOVA NUSANTARA', '081226007005', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(75, 'HASCI', 'Hyundai Accent series Club Indonesia', '085640106357', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(76, 'PI-1 Semarang', 'Pajero Indonesia One Chap. Semarang', '081225338778', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(77, 'KDGI ATLAS', 'Komunitas Datsun Go&Go+ Indonesia Korwil Semarang/ATLAS', '082142554255', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(78, 'IGNITY', 'Indonesian ignis community', '085879817000', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(79, 'CTOC', 'Corolla Twincam Owners Club Sub Region Semarang', '081914646805', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(80, 'F1', 'FUTURA INDONESIA', '085727003637', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(81, 'VSC', 'Velozity Semarang Chapter', '081225117818', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(82, 'KISOC Chapter SEPURKUDA', 'Kijang Super Owner Community', '08562705267', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(83, 'G10 CHAPTER SEMARANG', 'G10 INDONESIA CHAPTER SEMARANG', '081225594719', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(84, 'Peugeot 206 comm Wilteng', 'Peugeot 206 Community Wilayah Tengah', '0811271289', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(85, 'IKSC', 'Indonesia Kijang Super Community', '083838055558', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(86, 'HJCI', 'Honda Jazz Club Indonesia ', '081326951972', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(87, 'ANC Semarang', 'All New Corolla Semarang', '081805953030', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(88, 'X-MOC', 'Xpander Mitsubishi Owner Club ', '081228118944', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(89, 'G10', 'Charade G10 Chapter Semarang', '087836054959', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(90, 'WOW JATENG', 'WULING OWNER JAWA TENGAH', '082240541121', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(91, 'ZEmarCo ', 'Zebra Semarang Community ', '081325522987', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(92, 'GARENG', 'Grand livina mania comunity jateng & diy', '085741050514', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(93, 'POC ID CJC', 'Pajero Owners Community Indonesia - Central Java Chapter', '081325042299', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(94, 'SYOG', 'Semarang Yaris Owner Group', '081325441440', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(95, 'BRV CHAPTER SEMARANG', 'BRAVER COMMUNITY CHAPTER SEMARANG', '085225271666', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(96, 'TKRCI Chapter Semarang', 'Toyota Kijang Rover Club Indonesia', '085711926399', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(97, 'Gravinci Plat H Crew', 'Grandlivina Plat H Cree', '085876323076', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(98, 'TRCI Chapter Atlas', 'Toyota Rush Club Indonesia Chapter Atlas', '081212000540', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(99, 'Altic Jateng', 'Altis Indonesia Community Chapter Jawa Tengah', '082135020305', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(100, 'EOC', 'ERTIGA Owners Community', '081219733063', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(101, 'Kijang+62', 'Kijang+62', '085225324314', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(102, 'AXOLD', 'Avanza Xenia Community', '081392553506', '2021-06-15 06:19:27', '2021-06-15 06:19:27'),
(103, 'LCGC Family', 'Low Cost Green Car Family', '081215778583', '2021-06-15 06:19:27', '2021-06-15 06:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generate_code`
--

CREATE TABLE `generate_code` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generate_code`
--

INSERT INTO `generate_code` (`id`, `code`, `deleted_at`, `created_at`, `updated_at`, `reg_id`) VALUES
(1, 'eyJpdiI6Ikd1WEthalVjQkJVVFFMcU5Pc0xmZ0E9PSIsInZhbHVlIjoiK2NIMks1UXNrblNZVGpxWUhTUDR3SzRRTGo4RW80SUIzNDVnK2JlN3dxNG45bTVXL2tZMVNaenIxczZ2UkxmOU53bUJycFR3R2R1akViSVdIZG9UaXc9PSIsIm1hYyI6IjUyYmM3Y2U0YTJiOThjYWQ3OGU3MThmZjE2YWVlZDBlMThkOTI1MTU2NDY3OTIwZTMwZTE2Mjg5NTEzZWMwMDEifQ==', NULL, '2021-06-14 07:37:42', '2021-06-14 07:37:42', 0),
(2, 'eyJpdiI6Im1id1o5aWIvd1UwTkJKdTJGMm1IZ3c9PSIsInZhbHVlIjoiS0Z2aktkTjM5OVRrbklCZjlTYXAycE85TFpZZnhaUnROMUFObWFPV1ZiYlIzazR1ZnNsaDc4RDVQTTNycnAzTGlsQzB0bUQrT05xYjlpVnJGSkFVcGc9PSIsIm1hYyI6IjM3Y2U2OTA4ODk5Y2IyZjg3MmZiNTlkMDBiMDNjZGRmNjA2N2UzZGZlNDk1MzM5Zjg3YmUxZjhjMTY5NmM3YzMifQ==', NULL, '2021-06-14 07:38:19', '2021-06-14 07:38:19', 0),
(3, 'eyJpdiI6Ik1Ycmw3VkFrQnRKdDY4Q3FueC82Q0E9PSIsInZhbHVlIjoiTVlVYkIySWd3NjIxWkdyaHloSTBaVllpSWhBdG0zcWZ4RHV4WTl6NlFTbit5TW1tenFpYlFicUxtRFBOYXNJbmc0akZQSTZUMFMydmNvY3dxV1I3dHc9PSIsIm1hYyI6IjEzNjhjNWRlOTU0YTM4NzUzZjNmOGFiOTQxMTc1ZTVlMzNjMDE1ZGY4MTk3M2IwZDkxZGQxMzMyMjJjN2Q1NTgifQ==', NULL, '2021-06-15 07:15:19', '2021-06-15 07:15:19', 1481);

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
(1, '2013_06_07_025110_create_community_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_06_07_025228_create_poling_table', 1),
(6, '2022_06_07_025422_create_vote_table', 2),
(8, '2021_06_14_131738_create_generate_code', 3),
(9, '2021_06_14_133845_add_poling_id_to_candidate_table', 4),
(10, '2021_06_15_135649_add_reg_id', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poling`
--

CREATE TABLE `poling` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_at` date NOT NULL,
  `stop_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poling`
--

INSERT INTO `poling` (`id`, `title`, `description`, `start_at`, `stop_at`) VALUES
(1, 'Pemilihan Ketua', 'Pemilihan', '2021-06-14', '2021-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `community_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `community_id`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Iqbal', 'iqbal@admin.com', '2313153', 1, 'admin', NULL, '$2y$10$JRZjwC56oxJ0dSoev9GZIOZvpqgz67gSA2mYCp2M8UeM7ck7n9/p2', NULL, '2021-06-14 07:04:48', '2021-06-14 07:04:48'),
(2, 'Iqbal ali', 'iqbal@user.com', '32151', 2, 'user', NULL, '$2y$10$5LreXERdh0iUornYmfpOu.eg.L2SjUxcqGxD5XUrvJG9j6aZyTqtO', NULL, '2021-06-14 07:05:12', '2021-06-14 07:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidate_poling_id_foreign` (`poling_id`);

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generate_code`
--
ALTER TABLE `generate_code`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `poling`
--
ALTER TABLE `poling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_community_id_foreign` (`community_id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vote_candidate_id_foreign` (`candidate_id`),
  ADD KEY `vote_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generate_code`
--
ALTER TABLE `generate_code`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `poling`
--
ALTER TABLE `poling`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `candidate_poling_id_foreign` FOREIGN KEY (`poling_id`) REFERENCES `poling` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_community_id_foreign` FOREIGN KEY (`community_id`) REFERENCES `community` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidate` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vote_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
