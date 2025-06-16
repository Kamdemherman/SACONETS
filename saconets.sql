-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 05:41 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saconets`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `short` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `short`, `short_en`, `libelle`, `libelle_en`, `image`, `image2`, `created_at`, `updated_at`) VALUES
(1, 'SACONETS SA est l’un des principaux acteurs du marché des télécommunications et réseaux au Cameroun. Créé en 2001, nous accompagnons les entreprises locales et de la sous-région Afrique Centrale dans leur processus de transformation numérique grâce à notre large gamme de produits et services tels que : sécurité des systèmes d’information, intégration des services, internet et interconnexion via différentes technologies, Téléphonie mobile par satellite, sécurité physique des locaux.', 'SACONETS SA is one of the main players in the telecommunications and networks market in Cameroon. Created in 2001, we accompany local companies and the Central African sub-region in their digital transformation process thanks to our wide range of products and services such as: information systems security, services integration, internet and interconnection via different technologies, mobile telephony by satellite, physical security of premises.', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\"><strong>SACONETS SA</strong> est l&rsquo;un des principaux acteurs du march&eacute; des t&eacute;l&eacute;communications et r&eacute;seaux au Cameroun. Cr&eacute;&eacute; en 2001, nous accompagnons les entreprises locales et de la sous-r&eacute;gion Afrique Centrale dans leur processus de transformation num&eacute;rique gr&acirc;ce &agrave; notre large gamme de produits et services tels que&nbsp;: s&eacute;curit&eacute; des syst&egrave;mes d&rsquo;information, int&eacute;gration des services, internet et interconnexion via diff&eacute;rentes technologies, T&eacute;l&eacute;phonie mobile par satellite, s&eacute;curit&eacute; physique des locaux. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\">Depuis plusieurs ann&eacute;es, SACONETS SA accompagne les &eacute;tablissements bancaires dans la facilitation des op&eacute;rations de caisse par la fourniture et la maintenance des compteuses et trieuses de billets de banque. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\">Nous restons &agrave; l&rsquo;&eacute;coute permanente de nos clients afin de toujours apporter des solutions aux diff&eacute;rents besoins &agrave; travers nos diff&eacute;rents partenaires internationaux et notre &eacute;quipe de recherche locale. </span></span></span></p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\"><strong>SACONETS SA</strong> is one of the main players in the telecommunications and networks market in Cameroon. Created in 2001, we accompany local companies and the Central African sub-region in their digital transformation process thanks to our wide range of products and services such as: information systems security, services integration, internet and interconnection via different technologies, mobile telephony by satellite, physical security of premises.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\">For several years, SACONETS SA has been supporting banking institutions in facilitating cash operations by supplying and maintaining banknote counters and sorters.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\">We are always listening to our customers in order to bring solutions to their different needs through our different international partners and our local research team.</span></span></span></p>', '1663777928_image8.jpg', '1663777929_image7.jpg', '2022-05-23 14:03:54', '2022-10-20 09:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
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
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'gervais', 'gervais@gmail.com', NULL, '$2y$10$HaZfBNbOhzRjy2MPDl/76OkSxM5H.EyhQlHIXpbyYNEnugCvsCZZi', 'rm97q7vdM6TaqA8V7TeZ7toRB10vhzouQvcybTGrsCeinaPykyRhor9YoSsR', NULL, NULL),
(2, 'herman', 'herman@gmail.com', NULL, '$2y$10$KfeuP6gRLidsP2t4uvi1.eTmrLol3begZCJuJsGm3x1IkKeRkprfm', NULL, '2023-05-06 15:30:45', '2023-05-06 15:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `arivages`
--

CREATE TABLE `arivages` (
  `id` int(10) UNSIGNED NOT NULL,
  `prix` int(11) DEFAULT NULL,
  `prod_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arivages`
--

INSERT INTO `arivages` (`id`, `prix`, `prod_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 4, '2022-11-15 13:06:30', '2022-11-15 13:08:21'),
(2, NULL, 7, '2022-11-15 13:06:43', '2022-11-15 13:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `candidatures`
--

CREATE TABLE `candidatures` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lettre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emploi_id` int(10) UNSIGNED NOT NULL,
  `dates` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidatures`
--

INSERT INTO `candidatures` (`id`, `name`, `email`, `ville`, `adresse`, `motivation`, `cv`, `lettre`, `emploi_id`, `dates`, `created_at`, `updated_at`) VALUES
(6, 'Observatoire', 'admin@gmail.com', 'Yaoundé', 'Jouvence', 'Bonjour je suis', '1661847160_ICSP_2021_CE.pdf', '1661847161_ICSP_2021_LI.pdf', 1, '2022-08-30', '2022-08-30 07:12:41', '2022-08-30 07:12:41'),
(7, 'Observatoire', 'admin@gmail.com', 'Yaoundé', 'Jouvence', 'Bonjour je suis', '1661847240_ICSP_2021_CE.pdf', '1661847240_ICSP_2021_LI.pdf', 1, '2022-08-30', '2022-08-30 07:14:00', '2022-08-30 07:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `candidature_spontanees`
--

CREATE TABLE `candidature_spontanees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lettre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dates` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidature_spontanees`
--

INSERT INTO `candidature_spontanees` (`id`, `name`, `email`, `ville`, `adresse`, `objet`, `cv`, `lettre`, `dates`, `created_at`, `updated_at`) VALUES
(2, 'gervais fogang', 'fogangndie@gmail.com', 'Yaoundé', 'Jouvence', 'Bonjour Mr', '1661788665_bulletin.pdf', '1661788666_bulletin.pdf', '2022-08-29', '2022-08-29 14:57:46', '2022-08-29 14:57:46'),
(3, 'gervais fogang', 'fogangndie@gmail.com', 'Yaoundé', 'Jouvence', 'Bonjour', '1661789008_bulletin.pdf', '1661789008_bulletin.pdf', '2022-08-29', '2022-08-29 15:03:28', '2022-08-29 15:03:28'),
(4, 'gervais fogang', 'fogangndie@gmail.com', 'Yaoundé', 'Jouvence', 'Bonjour', '1661789148_bulletin.pdf', '1661789148_bulletin.pdf', '2022-08-29', '2022-08-29 15:05:48', '2022-08-29 15:05:48'),
(5, 'gervais fogang', 'fogangndie@gmail.com', 'Yaoundé', 'Jouvence', 'Bonjour', '1661789424_bulletin.pdf', '1661789424_bulletin.pdf', '2022-08-29', '2022-08-29 15:10:24', '2022-08-29 15:10:24'),
(6, 'gervais fogang', 'fogangndie@gmail.com', 'Yaoundé', 'Jouvence', 'Bonjour', '1661790034_bulletin.pdf', '1661790034_bulletin.pdf', '2022-08-29', '2022-08-29 15:20:34', '2022-08-29 15:20:34'),
(7, 'gervais fogang', 'fogangndie@gmail.com', 'Yaoundé', 'Jouvence', 'Bonjour Mr', '1661790276_bulletin.pdf', '1661790276_bulletin.pdf', '2022-08-29', '2022-08-29 15:24:36', '2022-08-29 15:24:36'),
(8, 'gervais fogang', 'fogangndie@gmail.com', 'Yaoundé', 'Jouvence', 'Bonjour Mr', '1661790322_bulletin.pdf', '1661790322_bulletin.pdf', '2022-08-29', '2022-08-29 15:25:22', '2022-08-29 15:25:22'),
(9, 'gervais fogang', 'gervais@gmail.com', 'Yaoundé', 'Jouvence', 'Bonjour', '1661790552_bulletin.pdf', '1661790552_bulletin.pdf', '2022-08-29', '2022-08-29 15:29:12', '2022-08-29 15:29:12'),
(10, 'gervais fogang', 'fogangndie@gmail.com', 'Yaoundé', 'Jouvence', 'Bonjour', '1661790669_bulletin.pdf', '1661790669_bulletin.pdf', '2022-08-29', '2022-08-29 15:31:09', '2022-08-29 15:31:09'),
(11, 'gervais fogang', 'fogangndie@gmail.com', 'Yaoundé', 'Jouvence', 'Bonjour Mr', '1661791668_bulletin.pdf', '1661791668_bulletin.pdf', '2022-08-29', '2022-08-29 15:47:48', '2022-08-29 15:47:48'),
(12, 'gervais fogang', 'fogangndie@gmail.com', 'Yaoundé', 'Jouvence', 'Bonjour MR', '1661791847_bulletin.pdf', '1661791847_bulletin.pdf', '2022-08-29', '2022-08-29 15:50:47', '2022-08-29 15:50:47'),
(13, 'talla', 'gervais@gmail.com', 'Yaoundé', 'Jouvence', 'Bonjour', '1661792066_bulletin.pdf', '1661792066_ICSP_2021_ES.pdf', '2022-08-29', '2022-08-29 15:54:26', '2022-08-29 15:54:26'),
(14, 'talla', 'gervais@gmail.com', 'Yaoundé', 'Jouvence', 'Bonjour', '1661792190_bulletin.pdf', '1661792190_ICSP_2021_ES.pdf', '2022-08-29', '2022-08-29 15:56:30', '2022-08-29 15:56:30'),
(15, 'gervais fogang', 'gervais@gmail.com', 'Yaoundé', 'Jouvence', 'Bonsoir', '1661792430_bulletin.pdf', '1661792430_ICSP_2021_ND.pdf', '2022-08-29', '2022-08-29 16:00:30', '2022-08-29 16:00:30'),
(16, 'gervais fogang', 'gervais@gmail.com', 'Yaoundé', 'Jouvence', 'Bonsoir', '1661792525_bulletin.pdf', '1661792525_ICSP_2021_ND.pdf', '2022-08-29', '2022-08-29 16:02:05', '2022-08-29 16:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `categorie_shops`
--

CREATE TABLE `categorie_shops` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorie_shops`
--

INSERT INTO `categorie_shops` (`id`, `libelle`, `libelle_en`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Compteuses et Trieuses de Billets de Banque', 'Banknote Counters and Sorters', 'compteuses-et-trieuses-de-billets-de-banque', '2022-05-11 14:03:11', '2022-12-13 08:54:23'),
(2, 'Machine de Fabrication et Personnalisation des Chéquiers', 'Checkbook Manufacturing and Personalization Machine', 'machine-de-fabrication-et-personnalisation-des-chequiers', '2022-05-11 14:08:45', '2022-12-13 08:54:15'),
(3, 'Téléphone Thuraya', 'Thuraya phone', 'telephone-thuraya', '2022-08-24 09:19:37', '2022-12-13 08:53:45'),
(4, 'Téléphone Satellitaire Iridium', 'Iridium Satellite Phone', 'telephone-satellitaire-iridium', '2022-12-13 08:46:20', '2022-12-13 08:53:53'),
(5, 'Téléphone Inmarsat', 'Inmarsat phone', 'telephone-inmarsat', '2022-12-13 08:56:13', '2022-12-13 08:56:13'),
(6, 'Visioconférence', 'Videoconferencing', 'visioconference', '2022-12-13 08:56:49', '2022-12-13 08:56:49'),
(7, 'Vidéosurveillance', 'Videosurveillance', 'videosurveillance', '2022-12-13 08:57:47', '2022-12-13 08:57:47');

-- --------------------------------------------------------

--
-- Table structure for table `commendes`
--

CREATE TABLE `commendes` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_intent_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` int(11) NOT NULL,
  `payment_created_at` datetime NOT NULL,
  `produits` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commendes`
--

INSERT INTO `commendes` (`id`, `payment_intent_id`, `montant`, `payment_created_at`, `produits`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'pi_3L0S8aIPKVIU8ML60PTgQnEr', 834750, '2022-05-17 15:17:16', 'a:2:{s:9:\"product_0\";a:3:{i:0;s:25:\"Compteuse G&D ProNote 1.5\";i:1;i:250000;i:2;s:1:\"2\";}s:9:\"product_1\";a:3:{i:0;s:24:\"Compteuse Kisan Newton A\";i:1;i:200000;i:2;i:1;}}', 1, '2022-05-17 14:17:16', '2022-05-17 14:17:16'),
(2, 'pi_3L0SDiIPKVIU8ML60B600juy', 715500, '2022-05-17 15:22:26', 'a:3:{s:9:\"product_0\";a:3:{i:0;s:25:\"Compteuse G&D ProNote 1.5\";i:1;i:250000;i:2;i:1;}s:9:\"product_1\";a:3:{i:0;s:29:\"Compteuse et Trieuse Kisan K5\";i:1;i:150000;i:2;i:1;}s:9:\"product_2\";a:3:{i:0;s:24:\"Compteuse Kisan Newton A\";i:1;i:200000;i:2;i:1;}}', 1, '2022-05-17 14:22:26', '2022-05-17 14:22:26'),
(3, 'pi_3L0kjYIPKVIU8ML60pAgHF7y', 596250, '2022-05-18 11:08:30', 'a:2:{s:9:\"product_0\";a:3:{i:0;s:29:\"Compteuse et Trieuse Kisan K5\";i:1;i:150000;i:2;s:1:\"2\";}s:9:\"product_1\";a:3:{i:0;s:24:\"Compteuse Kisan Newton A\";i:1;i:200000;i:2;i:1;}}', 2, '2022-05-18 10:08:30', '2022-05-18 10:08:30'),
(4, 'pi_3L0knQIPKVIU8ML61GU5LIGG', 178875, '2022-05-18 11:12:25', 'a:1:{s:9:\"product_0\";a:3:{i:0;s:29:\"Compteuse et Trieuse Kisan K5\";i:1;i:150000;i:2;i:1;}}', 1, '2022-05-18 10:12:25', '2022-05-18 10:12:25'),
(5, 'pi_3L0obMIPKVIU8ML61Y5TjqOs', 1013625, '2022-05-18 15:16:32', 'a:2:{s:9:\"product_0\";a:3:{i:0;s:25:\"Compteuse G&D ProNote 1.5\";i:1;i:250000;i:2;s:1:\"1\";}s:9:\"product_1\";a:3:{i:0;s:29:\"Compteuse et Trieuse Kisan K5\";i:1;i:150000;i:2;s:1:\"4\";}}', 1, '2022-05-18 14:16:32', '2022-05-18 14:16:32'),
(6, 'pi_3L0poQIPKVIU8ML61zKmawV1', 238500, '2022-05-18 16:37:11', 'a:1:{s:9:\"product_0\";a:3:{i:0;s:24:\"Compteuse Kisan Newton A\";i:1;i:200000;i:2;i:1;}}', 1, '2022-05-18 15:37:12', '2022-05-18 15:37:12'),
(7, 'pi_3L0pvhIPKVIU8ML61yoUbenY', 715500, '2022-05-18 16:42:28', 'a:1:{s:9:\"product_0\";a:3:{i:0;s:29:\"Compteuse et Trieuse Kisan K5\";i:1;i:150000;i:2;s:1:\"4\";}}', 1, '2022-05-18 15:42:28', '2022-05-18 15:42:28'),
(8, 'PAYID-MKDF43I0B416954N82662720', 300000, '2022-05-19 15:12:51', 'a:1:{s:9:\"product_0\";a:3:{i:0;s:25:\"Compteuse G&D ProNote 1.5\";i:1;i:250000;i:2;i:1;}}', 1, '2022-05-19 14:12:51', '2022-05-19 14:12:51'),
(9, 'PAYID-MKDF5XY8J816370K3244112C', 300000, '2022-05-19 15:14:50', 'a:1:{s:9:\"product_0\";a:3:{i:0;s:25:\"Compteuse G&D ProNote 1.5\";i:1;i:250000;i:2;i:1;}}', 1, '2022-05-19 14:14:50', '2022-05-19 14:14:50'),
(10, 'PAYID-MKDF6XA76Y40719L4829301E', 240000, '2022-05-19 15:16:49', 'a:1:{s:9:\"product_0\";a:3:{i:0;s:24:\"Compteuse Kisan Newton A\";i:1;i:200000;i:2;i:1;}}', 1, '2022-05-19 14:16:49', '2022-05-19 14:16:49'),
(12, 'PAYID-MKDF7TQ72C2671661615431N', 240000, '2022-05-19 15:18:52', 'a:1:{s:9:\"product_0\";a:3:{i:0;s:24:\"Compteuse Kisan Newton A\";i:1;i:200000;i:2;i:1;}}', 1, '2022-05-19 14:18:52', '2022-05-19 14:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `devis`
--

CREATE TABLE `devis` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `object` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dates` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devis`
--

INSERT INTO `devis` (`id`, `name`, `email`, `ville`, `company`, `object`, `phone`, `dates`, `created_at`, `updated_at`) VALUES
(7, 'gervais fogang', 'fogangndie@gmail.com', 'Yaoundé', 'Donsyl', 'Bonjour, j\'aimerai avoir 5 thuraya FDU-XT', '655795370', '2022-09-08', '2022-09-08 14:14:40', '2022-09-08 14:14:40'),
(8, 'Gervais', 'gervais@gmail.com', 'Yaoundé', 'Forge', 'Je veux 10 thuraya FDU-XT', '655795370', '2022-09-08', '2022-09-08 14:19:45', '2022-09-08 14:19:45');

-- --------------------------------------------------------

--
-- Table structure for table `emplois`
--

CREATE TABLE `emplois` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre_en` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dates` date NOT NULL,
  `expire_date` date DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emplois`
--

INSERT INTO `emplois` (`id`, `titre`, `titre_en`, `type`, `lieu`, `description`, `description_en`, `image`, `dates`, `expire_date`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Assistant(e) de direction', 'Management assistant', 'CDI', 'Yaoundé', '<p style=\"text-align:justify\"><span style=\"font-size:18px\">Nous recherchons un(e) assistant(e) de direction dot&eacute; d&#39;une exp&eacute;rience de 3 ans</span></p>', '<p style=\"text-align:justify\"><span style=\"font-size:18px\">We are search an management assistant with 3 year of experience</span></p>', '/images/1658940671_secretaire.jpg', '2022-12-22', '2022-12-22', 'assistante-de-direction', '2022-07-27 15:51:11', '2022-12-22 12:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `equipes`
--

CREATE TABLE `equipes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_en` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipes`
--

INSERT INTO `equipes` (`id`, `nom`, `role`, `role_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Jean DOE', 'Directeur  Général', 'Directeur  Général', '1667298539_1663837638_Saconets.jpg', '2022-09-23 08:37:44', '2022-11-01 09:28:59'),
(2, 'Jean DOE', 'Directeur  Général', 'Directeur  Général', '1667298569_1663837638_Saconets.jpg', '2022-09-23 08:39:01', '2022-11-01 09:29:29'),
(3, 'Jean DOE', 'Directeur  Général', 'Directeur  Général', '1667298581_1663837638_Saconets.jpg', '2022-09-23 08:39:09', '2022-11-01 09:29:41'),
(4, 'Jean DOE', 'Directeur  Général', 'Directeur  Général', '1667298593_1663837638_Saconets.jpg', '2022-09-23 08:39:18', '2022-11-01 09:29:53');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponse_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `question_en`, `reponse`, `reponse_en`, `created_at`, `updated_at`) VALUES
(1, 'Design professionnel?', 'Professional Design?', 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes.', 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes.', '2022-07-29 11:51:18', '2022-07-29 11:51:18'),
(2, 'Support Top-Notch', 'Top-Notch Support', 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes.', 'Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes.', '2022-07-29 11:52:16', '2022-07-29 11:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `histoires`
--

CREATE TABLE `histoires` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investisseurs`
--

CREATE TABLE `investisseurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `Raison_sociale` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dates` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investisseurs`
--

INSERT INTO `investisseurs` (`id`, `Raison_sociale`, `email`, `pays`, `ville`, `adresse`, `phone`, `motivation`, `dates`, `created_at`, `updated_at`) VALUES
(1, 'DONSYL', 'donsyl5@yahoo.fr', 'Cameroun', 'Yaoundé', 'Jouvence', 'http://www.donsyl.com', NULL, '2022-07-29', '2022-07-29 14:52:33', '2022-07-29 14:52:33'),
(2, 'Forge', 'fogangndie@gmail.com', 'Cameroun', 'Yaoundé', 'Jouvence', 'http://www.donsyl.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2022-09-09', '2022-09-09 14:24:53', '2022-09-09 14:24:53'),
(3, 'Forge', 'ndiegervais@gmail.com', 'Cameroun', 'Yaoundé', 'Jouvence', 'http://www.donsyl.com', 'Je suis', '2022-09-09', '2022-09-09 14:26:07', '2022-09-09 14:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `marques`
--

CREATE TABLE `marques` (
  `id` int(10) UNSIGNED NOT NULL,
  `raison_sociale` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marques`
--

INSERT INTO `marques` (`id`, `raison_sociale`, `site`, `service_id`, `logo`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 1, '1664382181_internet1.jpg', '2022-09-28 15:23:01', '2022-09-28 15:23:01'),
(2, NULL, NULL, 1, '1664382197_internet2.jpg', '2022-09-28 15:23:17', '2022-09-28 15:23:17'),
(3, NULL, NULL, 1, '1664382209_internet3.jpg', '2022-09-28 15:23:29', '2022-09-28 15:23:29'),
(4, NULL, NULL, 1, '1664382222_internet4.jpg', '2022-09-28 15:23:42', '2022-09-28 15:23:42'),
(5, NULL, NULL, 1, '1664382231_internet5.jpg', '2022-09-28 15:23:51', '2022-09-28 15:23:51'),
(6, NULL, NULL, 1, '1664382244_internet6.jpg', '2022-09-28 15:24:04', '2022-09-28 15:24:04'),
(7, NULL, NULL, 3, '1664382299_video1.jpg', '2022-09-28 15:24:59', '2022-09-28 15:24:59'),
(8, NULL, NULL, 3, '1664382309_video2.jpg', '2022-09-28 15:25:09', '2022-09-28 15:26:15'),
(9, NULL, NULL, 3, '1664382320_video3.jpg', '2022-09-28 15:25:20', '2022-09-28 15:26:23'),
(10, NULL, NULL, 3, '1664382330_video4.jpg', '2022-09-28 15:25:30', '2022-09-28 15:26:31'),
(11, NULL, NULL, 10, '1664382437_logitech.png', '2022-09-28 15:27:17', '2022-09-28 15:27:17'),
(12, NULL, NULL, 10, '1664382448_grand.jpg', '2022-09-28 15:27:28', '2022-09-28 15:27:28'),
(13, NULL, NULL, 10, '1664382458_Poly.jpg', '2022-09-28 15:27:38', '2022-09-28 15:27:38'),
(14, NULL, NULL, 10, '1664382477_shure.png', '2022-09-28 15:27:57', '2022-09-28 15:27:57'),
(15, NULL, NULL, 10, '1664382488_aver.png', '2022-09-28 15:28:08', '2022-09-28 15:28:08'),
(16, NULL, NULL, 4, '1664382522_access1.jpg', '2022-09-28 15:28:42', '2022-09-28 15:28:42'),
(17, NULL, NULL, 4, '1664382533_access2.jpg', '2022-09-28 15:28:53', '2022-09-28 15:28:53'),
(18, NULL, NULL, 5, '1664382561_alarme1.jpg', '2022-09-28 15:29:21', '2022-09-28 15:29:21'),
(19, NULL, NULL, 5, '1664382572_alarme2.jpg', '2022-09-28 15:29:32', '2022-09-28 15:29:32'),
(20, NULL, NULL, 5, '1664382590_alarme3.jpg', '2022-09-28 15:29:50', '2022-09-28 15:29:50'),
(21, NULL, NULL, 6, '1664382613_incendit1.jpg', '2022-09-28 15:30:13', '2022-09-28 15:30:13'),
(22, NULL, NULL, 6, '1664382625_incendit2.jpg', '2022-09-28 15:30:25', '2022-09-28 15:30:25'),
(23, NULL, NULL, 7, '1664382651_telephone3.jpg', '2022-09-28 15:30:51', '2022-09-28 15:30:51'),
(24, NULL, NULL, 7, '1664382663_telephone1.jpg', '2022-09-28 15:31:03', '2022-09-28 15:31:03'),
(25, NULL, NULL, 7, '1664382673_telephone2.jpg', '2022-09-28 15:31:13', '2022-09-28 15:31:13');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_14_134433_create_admins_table', 2),
(6, '2022_05_06_121755_create_type_comptes_table', 3),
(7, '2022_05_11_142224_create_categorie_shops_table', 4),
(8, '2022_05_11_155032_create_shops_table', 5),
(9, '2022_05_17_140157_create_commendes_table', 6),
(10, '2022_05_18_122334_add_stock_column_to_shops_table', 7),
(11, '2022_05_23_143936_create_abouts_table', 8),
(12, '2022_06_01_123053_create_telecoms_table', 9),
(13, '2022_06_06_125845_create_securites_table', 10),
(14, '2022_06_29_103953_create_produit_turayas_table', 11),
(15, '2022_06_29_104321_create_produit__t_c_s_table', 11),
(16, '2022_06_29_104443_create_produit__m_c_s_table', 11),
(17, '2022_06_29_104535_create_produit__a_i_s_table', 11),
(18, '2022_06_29_104555_create_produit__a_a_s_table', 11),
(19, '2022_06_29_104617_create_produit__p_f_s_table', 11),
(20, '2022_06_29_104631_create_produit__a_v_c_s_table', 11),
(21, '2022_07_05_165334_create_solutions_table', 12),
(22, '2022_07_06_140940_create_news_table', 13),
(23, '2022_07_27_144648_create_emplois_table', 14),
(24, '2022_07_28_104436_create_candidatures_table', 15),
(25, '2022_07_29_083049_create_candidature_spontanees_table', 16),
(26, '2022_07_29_120943_create_faqs_table', 17),
(27, '2022_07_29_134730_create_partenaires_table', 18),
(28, '2022_07_29_151210_create_investisseurs_table', 19),
(29, '2022_08_10_104625_create_orders_table', 20),
(30, '2022_08_23_161656_create_savs_table', 21),
(31, '2022_08_30_111022_create_sliders_table', 21),
(32, '2022_09_01_111513_create_thuraya_documents_table', 22),
(33, '2022_09_01_165128_create_thuraya_accessoires_table', 23),
(34, '2022_09_08_094802_create_devis_table', 24),
(35, '2022_09_22_083830_create_nouses_table', 25),
(36, '2022_09_22_085034_create_histoires_table', 25),
(37, '2022_09_23_090809_create_equipes_table', 26),
(38, '2022_09_28_153905_create_marques_table', 27),
(39, '2022_11_01_094817_create_techniciens_table', 28),
(40, '2022_11_15_120426_create_arivages_table', 29),
(41, '2022_12_13_092027_create_sous_categories_table', 30);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_en` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auteur` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dates` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `libelle`, `libelle_en`, `short`, `short_en`, `description`, `description_en`, `image`, `auteur`, `slug`, `dates`, `created_at`, `updated_at`) VALUES
(1, 'SACONETS a signé des contrat de partenariat avec VIVOTEK', 'SACONETS has signed a partnership contract with VIVOTEK', 'SACONETS a signé des contrat de partenariat avec VIVOTEK et devient ainsi le revendeur...', 'SACONETS has signed a partnership contract with VIVOTEK and thus becomes the exclusive...', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">SACONETS&nbsp;a sign&eacute; des contrat de partenariat avec VIVOTEK et devient ainsi le revendeur exclusif de la Marque au Cameroun. Ce Partenariat est une preuve de notre engagement envers nos clients, notre objectif &eacute;tant de leur fournir des produits de bonne qualit&eacute; et de renforcer au mieux la s&eacute;curit&eacute; dans le pays.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">&Agrave; propos de VIVOTEK</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">Cr&eacute;&eacute;e en 2000, la Soci&eacute;t&eacute; VIVOTEK a rapidement pris une place de leader sur le march&eacute; de la s&eacute;curit&eacute;. Connue pour ses solutions de surveillance IP internationales, VIVOTEK s&rsquo;est sp&eacute;cialis&eacute; dans les syst&egrave;mes d&rsquo;applications et d&rsquo;int&eacute;grations. Gr&acirc;ce au travail de son D&eacute;partement Recherche &amp; D&eacute;veloppement sur les technologies de pointe codec, VIVOTEK propose une gamme &eacute;tendue de produits: cam&eacute;ras r&eacute;seau, serveurs vid&eacute;o, r&eacute;cepteurs vid&eacute;o, enregistreurs vid&eacute;o r&eacute;seau, logiciels de gestion vid&eacute;o et solutions PoE. Depuis 2011, VIVOTEK (TAIEX: 3454) est cot&eacute;e &agrave; la Bourse de Ta&iuml;wan. En 2008, une succursale a &eacute;t&eacute; ouverte en Californie. En 2013, un bureau pour l&rsquo;Europe a &eacute;t&eacute; ouvert &agrave; Almere, aux Pays-Bas, puis un bureau en Inde, &agrave; New-Delhi en 2014, et enfin un bureau pour le Moyen-Orient &agrave; Duba&iuml; en 2015.VIVOTEK travaille avec plus de 183 distributeurs officiels dans plus de 116 pays. Pour plus d&rsquo;informations, merci de vous rendre sur www.vivotek.com.</span></span></span></span></p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">SACONETS has signed a partnership contract with VIVOTEK and thus becomes the exclusive reseller of the brand in Cameroon. This Partnership is a proof of our commitment to our customers, our objective being to provide them with good quality products and to strengthen security in the country.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">About VIVOTEK</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">Founded in 2000, VIVOTEK has quickly become a leader in the security market. Known for its international IP surveillance solutions, VIVOTEK has specialized in application systems and integrations. Thanks to the work of its Research &amp; Development Department on advanced codec technologies, VIVOTEK offers a wide range of products: network cameras, video servers, video receivers, network video recorders, video management software and PoE solutions. Since 2011, VIVOTEK (TAIEX: 3454) is listed on the Taiwan Stock Exchange. In 2008, a branch office was opened in California. In 2013, an office for Europe was opened in Almere, the Netherlands, followed by an office for India in New-Delhi in 2014, and finally an office for the Middle East in Dubai in 2015.VIVOTEK works with more than 183 official distributors in over 116 countries. </span><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">For more information, please visit www.vivotek.com.</span></span></span></span></p>', '1661523600_Saconets.jpg', 'SACONETS has signed a partnership contract with VIVOTEK', 'saconets-a-signe-des-contrat-de-partenariat-avec-vivotek', '2023-01-05', '2022-07-06 15:38:55', '2023-01-05 08:22:56'),
(3, 'Thuraya Satsleeve Saconets', 'Thuraya Satsleeve Saconets', 'Le Hotspot SatSleeve répond aux besoins de communication de tous les utilisateurs de smartphones', 'Simply connect your smartphone via Wi-Fi to the satellite unit and stay connected', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\">Le Hotspot SatSleeve r&eacute;pond aux besoins de communication de tous les utilisateurs de smartphones, qu&#39;il s&#39;agisse de grands voyageurs, d&#39;explorateurs aventureux, d&#39;entreprises ou d&#39;ONG.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\">Cr&eacute;&eacute; pour les clients qui pr&eacute;f&egrave;rent utiliser leur smartphone s&eacute;par&eacute;ment de l&#39;unit&eacute; satellite. Avec le SatSleeve Hotspot, vous disposez de la port&eacute;e et de l&#39;espace n&eacute;cessaires pour vous d&eacute;placer tout en passant des appels, en utilisant le courrier &eacute;lectronique, en envoyant des messages ou en profitant de vos applications de m&eacute;dias sociaux pr&eacute;f&eacute;r&eacute;es, tout en restant confortablement &agrave; l&#39;int&eacute;rieur alors que le hotspot est &agrave; l&#39;ext&eacute;rieur, face au satellite. .</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\">Le Hotspot SatSleeve est livr&eacute; avec un support dans l&#39;emballage et est compatible avec divers mod&egrave;les iOS et Android.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><strong>APPELS ET SMS EN MODE SATELLITE</strong></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\">Utilisez votre smartphone en mode satellite lorsqu&#39;il n&#39;y a pas de r&eacute;seau terrestre disponible pour appeler et envoyer des SMS en utilisant votre liste de contacts existante.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\"><strong>FACILE &Agrave; UTILISER</strong></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\">Il suffit de connecter votre smartphone via le Wi-Fi &agrave; l&#39;unit&eacute; satellite pour rester connect&eacute;. Le son est d&eacute;sormais achemin&eacute; par le smartphone, ce qui permet aux utilisateurs de passer des appels directement depuis le smartphone.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\"><strong>DES FONCTIONS DE S&Eacute;CURIT&Eacute; AM&Eacute;LIOR&Eacute;ES</strong></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\">Le Hotspot SatSleeve est &eacute;quip&eacute; d&#39;un bouton d&#39;appel SOS qui fonctionne m&ecirc;me si le smartphone n&#39;est pas connect&eacute;. Le bouton SOS permet de passer un appel sortant vers un num&eacute;ro pr&eacute;d&eacute;fini par l&#39;utilisateur ou de recevoir un appel entrant.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><strong><span style=\"font-size:18px\">UN MONDE DE CHOIX</span></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\">Le r&eacute;seau satellite fiable et ininterrompu de Thuraya vous permet de rester connect&eacute; en mode satellite partout dans sa zone de couverture en Europe, Afrique, Asie et Australie. Thuraya SatSleeve Hotspot fonctionne avec une carte SIM Thuraya ou une carte SIM GSM de l&#39;un des 360+ partenaires d&#39;itin&eacute;rance de Thuraya dans le monde.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">The SatSleeve Hotspot supports the communication needs of all smartphone users - from frequent travelers and adventurous explorers to corporate and NGO users.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">Created for customers who prefer to use their smartphone separately from the satellite unit. With the SatSleeve Hotspot, you have the range and space to move around while you make calls, use email, send messages or enjoy your favorite social media apps from the comfort of being indoors while the hotspot is outside and facing the satellite. .</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">The SatSleeve Hotspot comes with a stand inside the package and is compatible with various iOS and Android models.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><strong><span style=\"font-size:18px\"><span style=\"background-color:white\">CALLS AND SMS IN SATELLITE MODE</span></span></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">Use your smartphone in satellite mode when there is no terrestrial network available to call and send SMS using your existing contact list.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\"><strong><span style=\"background-color:white\">EASY TO USE</span></strong></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">Simply connect your smartphone via Wi-Fi to the satellite unit and stay connected. Sound is now routed through the smartphone, allowing users to make calls directly from the smartphone.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\"><strong><span style=\"background-color:white\">ENHANCED SECURITY FEATURES</span></strong></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">SatSleeve Hotspot is equipped with an SOS call button that works even if the smartphone is not connected. The SOS button will make an outgoing call to a predefined user-defined number or receive an incoming call.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><strong><span style=\"font-size:18px\"><span style=\"background-color:white\">A WORLD OF CHOICE</span></span></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Roboto,Noto Sans KR,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">Thuraya&#39;s reliable and uninterrupted satellite network lets you stay connected via satellite mode anywhere in its coverage area across Europe, Africa, Asia and Australia. Thuraya SatSleeve Hotspot works with either a Thuraya SIM card or a GSM SIM card from one of Thuraya&#39;s 360+ roaming partners worldwide.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '1661523562_thuraya_satesleeve.png', 'Thuraya Satsleeve Saconets', 'thuraya-satsleeve-saconets', '2023-01-23', '2022-09-01 13:50:25', '2023-01-23 08:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `nouses`
--

CREATE TABLE `nouses` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_en` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nouses`
--

INSERT INTO `nouses` (`id`, `libelle`, `libelle_en`, `description`, `description_en`, `image`, `image2`, `created_at`, `updated_at`) VALUES
(1, 'Qui sommes-nous ?', 'Who we are ?', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>SACONETS SA</strong> est l&rsquo;un des principaux acteurs du march&eacute; des t&eacute;l&eacute;communications et r&eacute;seaux au Cameroun. Cr&eacute;&eacute; en 2001, nous accompagnons les entreprises locales et de la sous-r&eacute;gion Afrique Centrale dans leur processus de transformation num&eacute;rique gr&acirc;ce &agrave; notre large gamme de produits et services tels que&nbsp;: s&eacute;curit&eacute; des syst&egrave;mes d&rsquo;information, int&eacute;gration des services, internet et interconnexion via diff&eacute;rentes technologies, T&eacute;l&eacute;phonie mobile par satellite, s&eacute;curit&eacute; physique des locaux. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Depuis plusieurs ann&eacute;es, SACONETS SA accompagne les &eacute;tablissements bancaires dans la facilitation des op&eacute;rations de caisse par la fourniture et la maintenance des compteuses et trieuses de billets de banque. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Nous restons &agrave; l&rsquo;&eacute;coute permanente de nos clients afin de toujours apporter des solutions aux diff&eacute;rents besoins &agrave; travers nos diff&eacute;rents partenaires internationaux et notre &eacute;quipe de recherche locale. </span></span></span></p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><strong>SACONETS</strong> SA is one of the main players in the telecommunications and networks market in Cameroon. Created in 2001, we accompany local companies and the Central African sub-region in their digital transformation process thanks to our wide range of products and services such as: information systems security, services integration, internet and interconnection via different technologies, mobile telephony by satellite, physical security of premises.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">For several years, SACONETS SA has been supporting banking institutions in facilitating cash operations by supplying and maintaining banknote counters and sorters.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">We are always listening to our customers in order to bring solutions to their different needs through our different international partners and our local research team.</span></span></span></p>', '1663837638_about5.jpg', '1674838315_IMG_0939.jpg', '2022-09-22 08:07:19', '2023-01-27 15:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` int(11) NOT NULL,
  `tva` int(11) DEFAULT NULL,
  `order_date` date NOT NULL,
  `produits` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `etat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_name`, `montant`, `tva`, `order_date`, `produits`, `user_id`, `etat`, `created_at`, `updated_at`) VALUES
(3, 'admin', 238500, 38500, '2022-08-10', 'a:1:{s:9:\"product_0\";a:3:{i:0;s:24:\"Compteuse Kisan Newton A\";i:1;i:200000;i:2;i:1;}}', 1, 'Reglee', '2022-08-10 16:32:30', '2022-08-11 15:28:48'),
(4, 'admin', 298125, NULL, '2022-08-10', 'a:1:{s:9:\"product_0\";a:3:{i:0;s:25:\"Compteuse G&D ProNote 1.5\";i:1;i:250000;i:2;i:1;}}', 1, 'Annulee', '2022-08-10 16:35:35', '2023-01-05 12:26:13'),
(5, 'admin', 536625, NULL, '2022-08-10', 'a:2:{s:9:\"product_0\";a:3:{i:0;s:24:\"Compteuse Kisan Newton A\";i:1;i:200000;i:2;i:1;}s:9:\"product_1\";a:3:{i:0;s:25:\"Compteuse G&D ProNote 1.5\";i:1;i:250000;i:2;i:1;}}', 1, 'Non reglee', '2022-08-10 16:41:29', '2022-08-10 16:41:29'),
(6, 'admin', 238500, NULL, '2022-08-11', 'a:1:{s:9:\"product_0\";a:3:{i:0;s:24:\"Compteuse Kisan Newton A\";i:1;i:200000;i:2;i:1;}}', 1, 'Non reglee', '2022-08-11 08:51:53', '2022-08-11 08:51:53'),
(8, 'Saconets client', 298125, NULL, '2022-08-11', 'a:1:{s:9:\"product_0\";a:3:{i:0;s:25:\"Compteuse G&D ProNote 1.5\";i:1;i:250000;i:2;i:1;}}', 2, 'Non reglee', '2022-08-11 09:52:35', '2022-08-11 09:52:35'),
(9, 'Saconets client', 238500, NULL, '2022-08-11', 'a:1:{s:9:\"product_0\";a:3:{i:0;s:24:\"Compteuse Kisan Newton A\";i:1;i:200000;i:2;i:1;}}', 2, 'Non reglee', '2022-08-11 09:56:52', '2022-08-11 09:56:52'),
(10, 'Saconets client', 238500, NULL, '2022-08-11', 'a:1:{s:9:\"product_0\";a:3:{i:0;s:24:\"Compteuse Kisan Newton A\";i:1;i:200000;i:2;i:1;}}', 2, 'Non reglee', '2022-08-11 13:55:28', '2022-08-11 13:55:28'),
(11, 'Saconets client', 655875, NULL, '2022-08-11', 'a:3:{s:9:\"product_0\";a:3:{i:0;s:25:\"Compteuse G&D ProNote 1.5\";i:1;i:250000;i:2;i:1;}s:9:\"product_1\";a:3:{i:0;s:29:\"Compteuse et Trieuse Kisan K5\";i:1;i:150000;i:2;i:1;}s:9:\"product_2\";a:3:{i:0;s:7:\"CJD8000\";i:1;i:150000;i:2;i:1;}}', 2, 'Reglee', '2022-08-11 15:41:28', '2022-08-11 15:43:11'),
(12, 'admin', 417375, 77375, '2022-08-29', 'a:2:{s:9:\"product_0\";a:3:{i:0;s:7:\"CJD8000\";i:1;i:150000;i:2;i:1;}s:9:\"product_1\";a:3:{i:0;s:24:\"Compteuse Kisan Newton A\";i:1;i:200000;i:2;i:1;}}', 1, 'Reglee', '2022-08-29 14:14:14', '2022-09-23 14:47:10'),
(13, 'admin', 178875, NULL, '2022-08-29', 'a:1:{s:9:\"product_0\";a:3:{i:0;s:29:\"Compteuse et Trieuse Kisan K5\";i:1;i:150000;i:2;i:1;}}', 1, 'Non reglee', '2022-08-29 14:17:09', '2022-08-29 14:17:09'),
(14, 'admin', 178875, 28875, '2022-09-23', 'a:1:{s:9:\"product_0\";a:3:{i:0;s:7:\"CJD8000\";i:1;i:150000;i:2;i:1;}}', 1, 'Annulee', '2022-09-23 15:14:05', '2023-01-05 12:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `partenaires`
--

CREATE TABLE `partenaires` (
  `id` int(10) UNSIGNED NOT NULL,
  `raison_sociale` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dates` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partenaires`
--

INSERT INTO `partenaires` (`id`, `raison_sociale`, `site`, `type`, `logo`, `dates`, `created_at`, `updated_at`) VALUES
(1, 'Fortinet', 'https://www.fortinet.com/', 'Solutions de securite', '1661505673_Fortinet-Logo.png', '2022-09-22', '2022-07-29 13:28:26', '2022-09-22 08:39:03'),
(2, 'Kaspersky', 'https://afrique.kaspersky.com/', 'Solutions de securite', '1662130021_Kaspersky-Logo.jpg', '2022-09-22', '2022-09-02 13:47:02', '2022-09-22 08:41:46'),
(3, 'Thuraya', 'https://www.thuraya.com/', 'Telephonie mobile par satellite', '1661508146_thuraya-logo.png', '2022-09-22', '2022-08-26 09:00:20', '2022-09-22 08:40:05'),
(4, 'Vivotek', 'https://www.vivotek.com/', 'Videosurveillances', '1661508939_vivotek-logo-share.png', '2022-09-22', '2022-07-29 14:03:56', '2022-09-22 08:39:41'),
(5, 'ELKRON', 'https://www.elkron.it/', NULL, '1662130587_logo-Elkron.png', '2022-09-02', '2022-09-02 13:56:27', '2022-09-02 13:56:27'),
(6, 'Uniview', 'https://www.uniview.com/', 'Videosurveillances', '1661508767_uniview-unv-logo.png', '2022-09-22', '2022-08-26 09:12:47', '2022-09-22 08:41:21'),
(7, 'Cisco', 'https://www.cisco.com/', 'Materiel reseau informatiques', '1662130737_Symbole-Cisco.jpg', '2022-09-22', '2022-09-02 13:58:57', '2022-09-22 08:42:47'),
(8, 'Mikrotik', 'https://mikrotik.com/', 'Solution d’interconnexion Point a Point', '1662130958_mikrotik-2021.png', '2022-09-22', '2022-09-02 14:02:38', '2022-09-22 08:53:12'),
(9, 'FINSECUR', 'https://www.finsecur.com/', NULL, '1662131107_Logo-Finsecur-header.png', '2022-09-02', '2022-09-02 14:05:07', '2022-09-02 14:05:07'),
(10, 'Inmarsat', 'https://www.inmarsat.com/', 'Telephonie mobile par satellite', '1661508370_inmarsat-vector-logo.png', '2022-09-22', '2022-08-26 09:06:10', '2022-09-22 08:40:32'),
(11, 'Iridium', 'https://www.iridium.com/', 'Telephonie mobile par satellite', '1661508513_Iridium-logo.png', '2022-09-22', '2022-08-26 09:08:33', '2022-09-22 08:40:52'),
(12, 'MOBOTIX', 'https://www.mobotix.com/', 'Videosurveillances', '1663840092_mobotix.jpg', '2022-09-22', '2022-09-22 08:48:12', '2022-09-22 08:48:12'),
(13, 'SOPHOS', 'https://www.sophos.com/', 'Solutions de securite', '1663840217_Sophos-Logo.wine.png', '2022-09-22', '2022-09-22 08:50:17', '2022-09-22 08:50:17'),
(14, 'HPE', 'https://www.hpe.com/', 'Materiel reseau informatiques', '1663840349_Hewlett.png', '2022-09-22', '2022-09-22 08:52:30', '2022-09-22 08:52:30'),
(15, 'Ubiquiti', 'https://www.wifi-france.com/', 'Solution d’interconnexion Point a Point', '1663840647_ubiquiti.png', '2022-09-22', '2022-09-22 08:57:27', '2022-09-22 08:57:27'),
(16, 'Proxim', 'https://www.proxim.com/', 'Solution d’interconnexion Point a Point', '1663840726_logo-proxim.png', '2022-09-22', '2022-09-22 08:58:46', '2022-09-22 08:58:46'),
(17, 'Cambium', 'https://www.cambiumnetworks.com/', 'Solution d’interconnexion Point a Point', '1663840970_CN_logo.png', '2022-09-22', '2022-09-22 09:02:50', '2022-09-22 09:02:50'),
(18, 'Kisane', 'https://kisane.com/eng/main/main.html', 'Solution Monetique', '1663841064_logo.png', '2022-09-22', '2022-09-22 09:04:24', '2022-09-22 09:04:24'),
(19, 'Giesecke+Devrient', 'https://www.aegis.com.bn/', 'Solution Monetique', '1663841231_logo-only.png', '2022-09-22', '2022-09-22 09:07:11', '2022-09-22 09:07:11'),
(20, 'solarwinds', 'https://www.solarwinds.com/', 'Solution de Supervision', '1664285080_SOLARWINDS-LOGO-CARRE.png', '2022-09-27', '2022-09-27 12:24:40', '2022-09-27 12:24:40');

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
-- Table structure for table `produit_turayas`
--

CREATE TABLE `produit_turayas` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_en` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caracteristique` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sous_id` int(10) UNSIGNED NOT NULL,
  `sous_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produit_turayas`
--

INSERT INTO `produit_turayas` (`id`, `libelle`, `libelle_en`, `short`, `short_en`, `caracteristique`, `description`, `description_en`, `image`, `image2`, `image3`, `slug`, `cat_id`, `cat_name`, `sous_id`, `sous_name`, `created_at`, `updated_at`) VALUES
(1, 'Thuraya X5-TOUCH', 'Thuraya X5-TOUCH', 'Le Thuraya X5-Touch est le premier téléphone satellite et GSM basé sur Android au monde', 'The Thuraya X5-Touch is the world’s first Android based satellite & GSM phone offering unparalleled flexibility', '<table cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:12px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Size</strong>&nbsp;</span></span></span></td>\r\n			<td><span style=\"font-size:12px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\">145 x 78 x 24 mm</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:12px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Weight</strong>&nbsp;</span></span></span></td>\r\n			<td><span style=\"font-size:12px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\">262 g</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:12px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Operating System</strong>&nbsp;</span></span></span></td>\r\n			<td><span style=\"font-size:12px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Android</span></span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Le Thuraya X5-Touch est le premier t&eacute;l&eacute;phone satellite et GSM bas&eacute; sur Android au monde, offrant une flexibilit&eacute; in&eacute;gal&eacute;e. Il fonctionne sous le syst&egrave;me d&#39;exploitation Android et dispose d&#39;un &eacute;cran tactile Full HD de 5,2 pouces pour les utilisateurs qui se d&eacute;placent fr&eacute;quemment dans et hors de la couverture terrestre dans une gamme de secteurs du march&eacute;, y compris les missions gouvernementales, les projets &eacute;nerg&eacute;tiques, les communications d&#39;entreprise et les d&eacute;ploiements d&#39;ONG. Il offre une connectivit&eacute; rapide et simple en d&eacute;placement, dans des zones recul&eacute;es normalement hors de port&eacute;e des smartphones.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong><span style=\"font-size:18px\">Syst&egrave;me d&#39;exploitation Android</span></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Le dispositif Thuraya X5-Touch fonctionne sur la plateforme Android de Google. Une gamme d&#39;applications et de services Google est pr&eacute;install&eacute;e sur votre appareil, par exemple Gmail, Google Maps, Google Chrome, Google Search et le Google Play Store qui vous donne acc&egrave;s &agrave; une multitude d&#39;applications tierces disponibles.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong><span style=\"font-size:18px\">Affichage</span></strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Le X5-Touch est &eacute;quip&eacute; d&#39;un &eacute;cran tactile Full HD de 5,2 pouces en verre Gorilla&reg; r&eacute;sistant aux reflets. Le verre tremp&eacute; fonctionne &eacute;galement lorsque l&#39;&eacute;cran est mouill&eacute; ou lorsque vous portez des gants.</span></span></span></p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">The Thuraya X5-Touch is the world&rsquo;s first Android based satellite &amp; GSM phone offering unparalleled flexibility. It runs on the Android operating system and has a 5.2&rdquo; full HD touchscreen for users who frequently move in and out of terrestrial coverage across a range of market sectors including government missions, energy projects, enterprise communications, and NGO deployments. It offers fast and simple connectivity on the move, in remote areas normally beyond the reach of smartphones.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><strong>Android OS</strong></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">The Thuraya X5-Touch device runs on the Android platform from Google. A range of Google applications and services are preinstalled on your device, for example Gmail, Google Maps, Google Chrome, Google Search and the Google Play Store which gives you access to a multitude of available 3rd party apps</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><strong>Display</strong></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">The X5-Touch comes equipped with a 5.2&rdquo; full HD touchscreen made of glare resistant Gorilla&reg; glass. The toughened glass also works while the display is wet or while you are wearing gloves.</span></span></span></p>', '1661511414_touch1.png', '1661511414_X5-touch.png', '', 'thuraya-x5-touch', 3, 'telephone-thuraya', 0, '', '2022-08-24 09:28:14', '2022-12-13 09:54:39'),
(2, 'Thuraya XT-PRO DUAL', 'Thuraya XT-PRO DUAL', 'Le Thuraya XT-PRO DUAL est le premier téléphone bi-mode et bi-carte SIM au monde', 'The Thuraya XT-PRO DUAL is the world’s first dual-mode, dual-SIM phone', '<table cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:12px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Satellite and GSM</strong></span></span></span></td>\r\n			<td><span style=\"font-size:12px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Connect to Satellite and GSM networks to enjoy connectivity in any location</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:12px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Two SIM Card Slots</strong></span></span></span></td>\r\n			<td><span style=\"font-size:12px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Use any combination of satellite and GSM SIM cards with &lsquo;Always-on&rsquo; capability for both</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:12px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Navigation Systems</strong></span></span></span></td>\r\n			<td><span style=\"font-size:12px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Extensive combination of navigation systems</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"font-size:12px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Talk-Time</strong></span></span></span></td>\r\n			<td><span style=\"font-size:12px\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Up to 11 hours talk-time &amp; 100 hours standby time</span></span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Le Thuraya XT-PRO DUAL est le premier t&eacute;l&eacute;phone bi-mode et bi-carte SIM au monde, comblant le foss&eacute; entre les communications par satellite et terrestres. En utilisant &agrave; la fois une carte SIM satellite et une carte SIM GSM, vous pouvez maintenant vous d&eacute;placer dans et hors de la couverture terrestre avec facilit&eacute;, en profitant de la connectivit&eacute; o&ugrave; que vous soyez.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Hautement robuste avec un bo&icirc;tier r&eacute;sistant aux chocs, &agrave; l&#39;eau et &agrave; la poussi&egrave;re, le XT-PRO DUAL est &eacute;galement dot&eacute; de capacit&eacute;s de navigation avanc&eacute;es gr&acirc;ce aux technologies GPS, BeiDou, Glonass et Galileo pour une flexibilit&eacute; maximale dans toutes les r&eacute;gions.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Peu importe o&ugrave; vous &ecirc;tes ou &agrave; quelle distance vous vous trouvez, nous vous gardons connect&eacute;. Le r&eacute;seau satellitaire complet de Thuraya fournit des communications fiables, claires et ininterrompues dans plus de 160 pays &agrave; travers l&#39;Europe, l&#39;Afrique, l&#39;Asie et l&#39;Australie ; et en mode GSM le t&eacute;l&eacute;phone supporte la plupart des fr&eacute;quences 2G/3G &agrave; travers le monde.</span></span></p>', '<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">The Thuraya XT-PRO DUAL is the world&rsquo;s first dual-mode, dual-SIM phone, bridging the gap between satellite and terrestrial communications. By using both a satellite SIM card and a GSM SIM card, you can now move in and out of terrestrial coverage with ease, enjoying connectivity no matter where you are.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Highly ruggedized with a shockproof, water and dust resistant body, the XT-PRO DUAL also comes with advanced navigation capabilities through GPS, BeiDou, Glonass and Galileo for the highest flexibility in all regions.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">No matter where you are or how remote your location, we keep you connected. Thuraya&rsquo;s comprehensive satellite network provides reliable, clear and uninterrupted communications in more than 160 countries across Europe, Africa, Asia and Australia; and in GSM-mode the phone supports most 2G/3G frequencies across the world.</span></span></p>', '1662651808_XT-PRO-Dual-1.png', '1662651809_XT-PRO-Dual-2.png', '1662651809_XT-PRO-Dual-3.png', 'thuraya-xt-pro-dual', 3, 'telephone-thuraya', 0, '', '2022-08-24 11:55:23', '2022-12-13 09:56:15'),
(3, 'Thuraya XT-PRO', 'Thuraya XT-PRO', 'Le XT-PRO de Thuraya est le téléphone satellite le plus avancé au monde', 'Thuraya’s XT-PRO is the world’s most advanced satellite phone', '<table cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Size</strong></span></span></span></td>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Biggest display in industry (2.4 inch)</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Navigation Systems</strong></span></span></span></td>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Selectable navigation systems; GPS, BeiDou &amp; Glonass</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Talk-Time</strong></span></span></span></td>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Up to 9 hours talk-time &amp; 100 hours standby time</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>SOS &amp; Protection</strong></span></span></span></td>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">In-built SOS button. Jet water, &amp; dust resistant, shock proof</span></span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Le XT-PRO de Thuraya est le t&eacute;l&eacute;phone satellite le plus avanc&eacute; au monde. Con&ccedil;u pour les utilisateurs professionnels, ce combin&eacute; satellite robuste est &eacute;quip&eacute; d&#39;une batterie longue dur&eacute;e, vous assurant de rester connect&eacute; o&ugrave; que vous soyez.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Premier t&eacute;l&eacute;phone satellite sur le march&eacute; &agrave; proposer les trois principaux syst&egrave;mes de navigation, ce t&eacute;l&eacute;phone tr&egrave;s flexible est dot&eacute; de fonctions GPS, Beidou et Glonass. Dot&eacute; du plus grand &eacute;cran de tous les t&eacute;l&eacute;phones satellite du march&eacute;, ce combin&eacute; satellite est &eacute;quip&eacute; d&#39;un verre Gorilla&reg; durci pour s&#39;adapter aux environnements les plus difficiles. L&#39;&eacute;cran est antireflet, ce qui permet une visibilit&eacute; optimale en plein soleil, et un capteur de luminosit&eacute; ajuste automatiquement le r&eacute;tro&eacute;clairage de votre &eacute;cran.</span></span></span></p>', '<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Thuraya&rsquo;s XT-PRO is the world&rsquo;s most advanced satellite phone. Designed for professional users, this rugged and robust satellite handset is equipped with a long battery life, ensuring you stay connected wherever you are.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:18px\">The first satellite phone on the market that features all three major navigation systems, this highly flexible phone has GPS, Beidou and Glonass capability. Featuring the biggest display of any satellite phone on the market, this satellite handset comes with hardened Gorilla&reg; glass to suit the harshest of environments. The screen is glare resistant, allowing optimal visibility in bright sunlight and a brightness sensor automatically adjusts the backlight of your display.</span></span></span></p>', '1662652158_XT-PRO-1.png', '1662652158_XT-PRO-2.png', '1662652158_XT-PRO-3.png', 'thuraya-xt-pro', 3, 'telephone-thuraya', 0, '', '2022-08-24 12:10:10', '2022-12-13 09:57:17'),
(4, 'Thuraya XT-LITE', 'Thuraya XT-LITE', 'Le XT-LITE de Thuraya est le téléphone satellite le plus économique au monde', 'Thuraya’s XT-LITE is the world’s best-value satellite phone', '<table cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Best value</strong></span></span></span></td>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Satellite calls and text messages</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Reliable battery lifes</strong></span></span></span></td>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Up to 6 hours&#39; talk-time &amp; 80 hours&#39; standby time</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Multiple languages; Easy-to-use</strong></span></span></span></td>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Set your phone to any of 12 languages available; User-friendly menu and interface</span></span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Le XT-LITE de Thuraya est le t&eacute;l&eacute;phone satellite le plus &eacute;conomique au monde. Con&ccedil;u pour les utilisateurs soucieux des co&ucirc;ts, ce combin&eacute; satellite fiable offre une connexion claire et ininterrompue &agrave; un prix imbattable.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Ce t&eacute;l&eacute;phone satellite facile &agrave; utiliser permet aux utilisateurs de passer des appels t&eacute;l&eacute;phoniques et d&#39;envoyer des SMS en mode satellite. Si vous &ecirc;tes sur le point d&#39;embarquer pour un voyage d&#39;escalade en montagne ou de travers&eacute;e du d&eacute;sert, le XT-LITE de Thuraya est le meilleur choix sur le march&eacute; pour vous permettre de rester en contact avec vos amis et votre famille - &agrave; un prix abordable.</span></span></p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Thuraya&rsquo;s XT-LITE is the world&rsquo;s best-value satellite phone. Designed for cost-conscious users, this reliable satellite handset offers a clear and uninterrupted connection at an unbeatable price.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">An easy-to-use satellite phone, users can make phone calls and send SMS messages in satellite mode. If you&rsquo;re about to embark on a journey of mountain-climbing or desert crossings, Thuraya&rsquo;s XT-LITE is the best choice on the market for keeping you in touch with friends and family - at an affordable price.</span></span></p>', '1662652495_XT-LITE Angle.png', '1662652495_XT-LITE Front.png', '1662652495_XT-LITE Side.png', 'thuraya-xt-lite', 3, 'telephone-thuraya', 0, '', '2022-08-24 12:19:38', '2022-12-13 09:57:36'),
(5, 'Thuraya FDU-XT', 'Thuraya FDU-XT', 'Le FDU-XT est un adaptateur de docking pour la maison et le bureau qui vous permet d\'utiliser les téléphones', 'The FDU-XT is a home and office docking adaptor that allows you to use Thuraya XT and XT-PRO satellite', '<table cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Size</strong></span></span></span></td>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">221 x 176 mm</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Voice call</strong></span></span></span></td>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">External telephone connection, Auxiliary handset connection</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>FAX call</strong></span></span></span></td>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">External G3 fax connection</span></span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Power</strong></span></span></span></td>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Universal AC/DC power supply: 110 - 240V; Input power DC 12V/24V/34V</span></span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Le FDU-XT est un adaptateur de docking pour la maison et le bureau qui vous permet d&#39;utiliser les t&eacute;l&eacute;phones satellites Thuraya XT et XT-PRO &agrave; l&#39;int&eacute;rieur. Il suffit d&#39;installer les antennes, d&#39;ins&eacute;rer le XT ou XT-PRO dans le berceau et de commencer &agrave; profiter de la connectivit&eacute; du t&eacute;l&eacute;phone satellite imm&eacute;diatement.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Facile &agrave; installer et &agrave; utiliser, le FDU-XT prend en charge les transmissions de voix, de donn&eacute;es et de fax. Il est livr&eacute; complet avec des antennes satellite et GPS avec des c&acirc;bles de 25 m pour assurer une connectivit&eacute; satellite sans faille.</span></span></p>', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\">The FDU-XT is a home and office docking adaptor that allows you to use Thuraya XT and XT-PRO satellite phones indoors. Simply set up the antennas, dock the XT or XT-PRO into the cradle and start enjoying satellite phone connectivity immediately.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">Easy to install and operate, the FDU-XT supports Voice, Data and Fax transmissions. It comes complete with satellite and GPS antennas with 25m cables to ensure seamless satellite connectivity.</span></span></p>', '1662626360_FDU-XT FRONT.png', '1662626360_FDU-XT Docking Unit.png', NULL, 'thuraya-fdu-xt', 3, 'telephone-thuraya', 0, '', '2022-08-24 12:31:24', '2022-12-13 09:58:00'),
(6, 'Kisan Newton A', 'Kisan Newton A', 'Compteuse à discerner les faux billets à 2 poches le plus vendu en Corée', 'World Best 1+1 pocket Value Counter', NULL, '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Caract&eacute;ristique du produit</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Compteur &agrave; 2 poches le plus vendu en Cor&eacute;e</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Capacit&eacute; et fonction &eacute;prouv&eacute;es avec une solide durabilit&eacute;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Fonction de v&eacute;rification en temps r&eacute;el et stockage de l&#39;historique de comptage</span></span><span style=\"color:#000000\"><span style=\"font-size:18px\">historique de comptage en temps r&eacute;el</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Possibilit&eacute; de charger les billets d&#39;un maximum de 20 pays</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-size:18px\">Sp&eacute;cifications</span></span></strong></p>\r\n\r\n<table border=\"0\" cellspacing=\"20\" class=\"table table-striped\" style=\"margin-left:20px; text-align:left; width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"># of Pockets</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1+1</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Hopper Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">600</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Stacker Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">200</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Reject Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">50</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Normal Count</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1500 (at free count mode)</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Value Count</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1500</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">S/N Speed</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dimension(W/H/D)</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">314X288X310mm</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Weight</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">10 Kg</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Functions</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Value Count ｜ S/N<br />\r\n			Multi Curr. 20 Auto/Mix</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">S/N Reading</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">O</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Currency</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">20</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Sensor</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">CIS ｜ UV ｜ MG(18ch) ｜ IR ｜ US</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Connectivity/Interface</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Serial Port X 2<br />\r\n			LAN<br />\r\n			USB X 2</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">OS</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Linux</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Screen</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">4.3&quot; Touch Display<br />\r\n			(480 x 272 Pixels)</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Options &amp; Special Features</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Auto/Mix Currency<br />\r\n			Serial No. OCR<br />\r\n			Network Solution (KBMS)</span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<p style=\"text-align:justify\"><span style=\"font-size:20px\"><strong><span style=\"color:#000000\">Product features</span></strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Best-selling 2-pocket counter in Korea</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Proven capacity and function with solid durability</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Real-time verification function and count history storage</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">counting history in real time</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Tickets from up to 20 countries can be loaded</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><strong><span style=\"color:#000000\">Specifications</span></strong></span></p>\r\n\r\n<table border=\"0\" cellspacing=\"20\" class=\"table table-striped\" style=\"margin-left:20px; text-align:left; width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"># of Pockets</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1+1</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Hopper Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">600</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Stacker Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">200</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Reject Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">50</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Normal Count</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1500 (at free count mode)</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Value Count</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1500</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">S/N Speed</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dimension(W/H/D)</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">314X288X310mm</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Weight</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">10 Kg</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Functions</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Value Count ｜ S/N<br />\r\n			Multi Curr. 20 Auto/Mix</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">S/N Reading</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">O</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Currency</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">20</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Sensor</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">CIS ｜ UV ｜ MG(18ch) ｜ IR ｜ US</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Connectivity/Interface</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Serial Port X 2<br />\r\n			LAN<br />\r\n			USB X 2</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">OS</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Linux</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Screen</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">4.3&quot; Touch Display<br />\r\n			(480 x 272 Pixels)</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Options &amp; Special Features</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Auto/Mix Currency<br />\r\n			Serial No. OCR<br />\r\n			Network Solution (KBMS)</span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '1662657731_5_1.png', '1662657732_A.png', NULL, 'kisan-newton-a', 1, 'compteuses-et-trieuses-de-billets-de-banque', 3, 'kisan', '2022-06-29 12:26:28', '2022-12-13 09:59:57'),
(7, 'Kisan K5', 'Kisan K5', 'Machine à tri des billets à grande vitesse parmi les trieuses d’affaires', 'High speed banknote sorting machine among the business sorting machines', NULL, '<p style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-size:18px\">Sp&eacute;cifications</span></span></strong></p>\r\n\r\n<table border=\"0\" cellspacing=\"20\" style=\"margin-left:20px; text-align:left; width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"># of Pockets</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">4+1</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Hopper Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Stacker Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">200</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Reject Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">100</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Normal Count</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Value Count</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Fitness Speed</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">S/N Speed</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dimension(W/H/D)</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">338X575X415mm</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Weight</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">38&nbsp;Kg</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Functions</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Multi Curr. Auto/Mix(20), Face&amp;Orientation ｜ S/N (OCR) ｜ Fitness</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">S/N Reading</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">O</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Fitness(F type)</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">O</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Currency</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Upto 48</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Sensor</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dual CIS ｜ UV ｜ MG(18ch) ｜ IR ｜ US (21ch)</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Connectivity/Interface</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Serial Port x 3, LAN x 2 (Normal &amp; Debug), USB x 1, OP Port</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">OS</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Linux</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Screen</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">External 7&quot; Touch Display(800 x 480 Pixels)</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Options &amp; Special Features</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Small footprint, Rapid Face &amp; Orient, Network Solution (KBMS)</span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<p style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-size:18px\">Specifications</span></span></strong></p>\r\n\r\n<table border=\"0\" cellspacing=\"20\" style=\"margin-left:20px; text-align:left; width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"># of Pockets</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">4+1</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Hopper Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Stacker Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">200</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Reject Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">100</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Normal Count</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Value Count</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Fitness Speed</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">S/N Speed</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dimension(W/H/D)</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">338X575X415mm</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Weight</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">38&nbsp;Kg</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Functions</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Multi Curr. Auto/Mix(20), Face&amp;Orientation ｜ S/N (OCR) ｜ Fitness</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">S/N Reading</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">O</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Fitness(F type)</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">O</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Currency</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Upto 48</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Sensor</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dual CIS ｜ UV ｜ MG(18ch) ｜ IR ｜ US (21ch)</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Connectivity/Interface</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Serial Port x 3, LAN x 2 (Normal &amp; Debug), USB x 1, OP Port</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">OS</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Linux</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Screen</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">External 7&quot; Touch Display(800 x 480 Pixels)</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Options &amp; Special Features</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Small footprint, Rapid Face &amp; Orient, Network Solution (KBMS)</span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '1662660507_4_1.png', '1662660507_kisanK5.jpg', NULL, 'kisan-k5', 1, 'compteuses-et-trieuses-de-billets-de-banque', 3, 'kisan', '2022-06-29 13:00:30', '2022-12-13 10:01:40');
INSERT INTO `produit_turayas` (`id`, `libelle`, `libelle_en`, `short`, `short_en`, `caracteristique`, `description`, `description_en`, `image`, `image2`, `image3`, `slug`, `cat_id`, `cat_name`, `sous_id`, `sous_name`, `created_at`, `updated_at`) VALUES
(8, 'G&D ProNote 1.5', 'G&D ProNote 1.5', 'La Pronote 1.5 est une compteuse et trieuse de billets de banque dotée d’une technologie exceptionnelle...', 'The Pronote 1.5 is a banknote counter and sorter with exceptional technology...', NULL, '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">La <strong>Pronote&nbsp;1.5</strong> est une compteuse et trieuse de billets de banque dot&eacute;e d&rsquo;une technologie exceptionnelle. Elle est tr&egrave;s pratique &agrave; utiliser et permet d&rsquo;effectuer un comptage et une v&eacute;rification fiables des billets de banque. Les billets de banque contrefaits sont plac&eacute;s dans le compartiment de rejet pendant le processus de comptage&nbsp;; ce qui augmente la s&eacute;curit&eacute; et permet d&rsquo;obtenir un comptage continu. Parfaitement pr&eacute;par&eacute;e pour le comptage des billets de 10&nbsp;000 FCFA, gr&acirc;ce &agrave; des mises &agrave; jour simples et rapides.</span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">La ProNote&nbsp;1.5 r&eacute;pond aux exigences actuelles dans un petit format, elle est la plus compacte de sa cat&eacute;gorie. Fonctionnalit&eacute; exclusive&nbsp;: fonctionnement facile &agrave; comprendre gr&acirc;ce &agrave; la commande par molette de navigation et l&rsquo;interface utilisateur programmable.</span></span></span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">Test&eacute;e avec succ&egrave;s</span></span></span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">Compteuse multidevises</span></span></span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">Mises &agrave; jour simples par carte SD</span></span></span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">Poche de rejet permettant un comptage continu</span></span></span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">Interface utilisateur unique avec molette de navigation</span></span></span></span></span></li>\r\n</ul>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">The <strong>Pronote 1.5</strong> is a banknote counter and sorter with exceptional technology. It is very convenient to use and provides reliable counting and verification of banknotes. Counterfeit banknotes are placed in the reject compartment during the counting process; this increases security and allows for a continuous count. Perfectly prepared for the counting of 10,000 FCFA banknotes, thanks to quick and easy upgrades.</span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">The ProNote 1.5 meets today&#39;s requirements in a small format, it is the most compact in its class. Exclusive functionality: easy-to-understand operation thanks to the navigation wheel control and programmable user interface.</span></span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">Successfully tested</span></span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">&nbsp;Multi-currency counter</span></span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">Simple updates via SD card</span></span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">Reject pocket for continuous counting</span></span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">Unique user interface with navigation wheel</span></span></span></span></span></li>\r\n</ul>', '1661512297_pronote.jpg', NULL, NULL, 'gd-pronote-15', 1, 'compteuses-et-trieuses-de-billets-de-banque', 4, 'bps', '2022-06-29 13:19:06', '2022-12-13 10:00:24'),
(9, 'G&D BPS C2-2', 'G&D BPS C2-2', 'Dans le segment des tables compactes, la famille de produits BPS® C2 offre une productivité supérieure...', 'In the compact table segment, the BPS® C2 product family offers superior productivity...', NULL, '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">Dans le segment des tables compactes, la famille de produits BPS&reg; C2 offre une productivit&eacute; sup&eacute;rieure, une s&eacute;curit&eacute; maximale et un design compact et attrayant avec un tr&egrave;s haut niveau de convivialit&eacute;. En outre, un choix de trois variantes - ainsi qu&#39;un large &eacute;ventail de configurations - permet aux syst&egrave;mes de r&eacute;pondre &agrave; des exigences sp&eacute;cifiques qui porteront l&#39;efficacit&eacute; de votre processus de tr&eacute;sorerie &agrave; un tout autre niveau.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">La <strong>BPS&reg; C2-2</strong> offre une efficacit&eacute; dans sa forme la plus compacte. Deux compartiments de sortie offrent un &eacute;ventail d&#39;options de tri, par exemple par d&eacute;nomination, orientation ou forme physique et, si n&eacute;cessaire, des billets pour une application de casino. De plus, les meilleurs capteurs de leur cat&eacute;gorie garantissent une fiabilit&eacute; maximale pour l&rsquo;authentification et la d&eacute;tection de la condition physique.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">Cela fait du <strong>BPS&reg; C2-2</strong> le choix incontournable pour des performances optimales et un degr&eacute; &eacute;lev&eacute; de variabilit&eacute; pour les banques commerciales, les d&eacute;taillants, les soci&eacute;t&eacute;s de transfert d&#39;argent et les casinos.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">Pour son excellent design de produit et sa convivialit&eacute; in&eacute;gal&eacute;e, le BPS&reg; C2-2 a &eacute;t&eacute; r&eacute;compens&eacute; par le German Design Award 2018.</span></span></span></span></p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">In the compact table segment, the BPS&reg; C2 product family offers superior productivity, maximum security and an attractive, compact design with a high level of user-friendliness. In addition, a choice of three variants - as well as a wide range of configurations - allows the systems to meet specific requirements that will take the efficiency of your cash process to a whole new level.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">The <strong>BPS&reg; C2-2</strong> offers efficiency in its most compact form. Two output compartments offer a range of sorting options, such as by denomination, orientation or physical form and, if required, tickets for a casino application. In addition, best-in-class sensors ensure maximum reliability for authentication and fitness detection.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">This makes the <strong>BPS&reg; C2-2</strong> the obvious choice for optimal performance and a high degree of variability for commercial banks, retailers, money transfer companies and casinos.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Myriad Pro&quot;,sans-serif\">For its excellent product design and unmatched user-friendliness, the BPS&reg; C2-2 was awarded the German Design Award 2018.</span></span></span></span></p>', '1661512279_BPSC2-21.png', NULL, NULL, 'gd-bps-c2-2', 1, 'compteuses-et-trieuses-de-billets-de-banque', 4, 'bps', '2022-06-29 13:30:00', '2022-12-13 10:02:20'),
(10, 'Kisan K6', 'Kisan K6', 'Trieuse de taille moyenne de première qualité fabriquée localement avec structure d\'extension modulaire (double poches)', 'Locally manufactured premium quality medium size sorter with modular extension structure (double pockets)', NULL, '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Sp&eacute;cifications</strong></span></span></p>\r\n\r\n<table border=\"0\" cellspacing=\"20\" class=\"table\" style=\"margin-left:20px; text-align:left; width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"># of Pockets</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Main Module : 4+2, Expansion Module : 2 pocket/unit ｜ Max 16 + 2 pockets</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Hopper Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1500</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Stacker Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">500</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Reject Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Reject 1 : 100, Reject 2 : 200</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Normal Count</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Value Count</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Fitness Speed</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">S/N Speed</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dimension(W/H/D)</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Main : 731X534X392mm, Ext.(2P) : 276X348X392mm</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Weight</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Main 55kg ｜ Exp 10kg</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Functions</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Multi Curr. 20 Auto/Mix ｜ Batch Card, Face&amp;Orientation ｜ S/N (OCR) ｜ Fitness</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">S/N Reading</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">O</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Fitness(F type)</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">O</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Currency</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Upto 12</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Sensor</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dual CIS ｜ UV ｜ MG(18ch) ｜ IR ｜ US</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Connectivity/Interface</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Serial Port x 4, LAN x 2 (Normal &amp; Debug), USB x 1</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">OS</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Linux</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Screen</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">7&quot; Touch Display, (800 x 480 Pixels)</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Options&amp;Special Features</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dual Pocket Expansion Structure, Interactive Pocket Structure, Batch Card support, Support External Data Screen</span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Specifications</strong></span></span></p>\r\n\r\n<table border=\"0\" cellspacing=\"20\" class=\"table\" style=\"margin-left:20px; text-align:left; width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"># of Pockets</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Main Module : 4+2, Expansion Module : 2 pocket/unit ｜ Max 16 + 2 pockets</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Hopper Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1500</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Stacker Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">500</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Reject Capacity</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Reject 1 : 100, Reject 2 : 200</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Normal Count</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Value Count</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Fitness Speed</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">S/N Speed</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1000</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dimension(W/H/D)</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Main : 731X534X392mm, Ext.(2P) : 276X348X392mm</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Weight</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Main 55kg ｜ Exp 10kg</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Functions</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Multi Curr. 20 Auto/Mix ｜ Batch Card, Face&amp;Orientation ｜ S/N (OCR) ｜ Fitness</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">S/N Reading</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">O</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Fitness(F type)</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">O</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Currency</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Upto 12</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Sensor</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dual CIS ｜ UV ｜ MG(18ch) ｜ IR ｜ US</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Connectivity/Interface</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Serial Port x 4, LAN x 2 (Normal &amp; Debug), USB x 1</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">OS</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Linux</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Screen</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">7&quot; Touch Display, (800 x 480 Pixels)</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Options&amp;Special Features</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dual Pocket Expansion Structure, Interactive Pocket Structure, Batch Card support, Support External Data Screen</span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '1662713006_K6.png', '1662713007_K6_1.png', '1662713007_K6_2.jpg', 'kisan-k6', 1, 'compteuses-et-trieuses-de-billets-de-banque', 3, 'kisan', '2022-09-09 07:43:27', '2022-12-13 13:32:36'),
(11, 'Iridium 9555', 'Iridium 9555', 'L\'Iridium 9555 est compact, léger et facile à utiliser dès sa sortie de la boîte. Il a été conçu pour résister aux environnements difficiles et est connecté au seul réseau mobile véritablement mondial. Vous pouvez donc compter sur lui comme ligne de vie pour vos communications, où et quand vous le souhaitez.', 'Iridium 9555 is compact, light, and easy to use right out of the box. It’s engineered to withstand rugged environments and connected to the only truly global mobile network — so you can depend on it as a communications lifeline whenever and wherever it’s called for.', '<table align=\"left\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Two-Way SMS &amp; Email Messaging</th>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Weather-Resistant Keypad</th>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Intuitive User Interface</th>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Sp&eacute;cifications</strong></span></span></p>\r\n\r\n<table border=\"0\" cellspacing=\"20\" class=\"table\" style=\"margin-left:20px; text-align:left; width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Mechanical</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dimensions (L x W x H)</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">143mm x 55mm x 30mm</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Weight</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">266 g</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Environmental</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Operating Temperature Range</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">-10 to +55 ℃</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Operating Humidity Range</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">25 to 75 % RH</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Storage Temperature Range</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">-40 to +85 ℃</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Storage Humidity Range</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Battery</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Battery Life, Talk Time</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">4 hr</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Battery Life, Standy</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">30 hr</span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Specifications</strong></span></span></p>\r\n\r\n<table border=\"0\" cellspacing=\"20\" class=\"table\" style=\"margin-left:20px; text-align:left; width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Mechanical</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dimensions (L x W x H)</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">143mm x 55mm x 30mm</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Weight</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">266 g</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Environmental</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Operating Temperature Range</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">-10 to +55 ℃</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Operating Humidity Range</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">25 to 75 % RH</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Storage Temperature Range</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">-40 to +85 ℃</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Storage Humidity Range</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Battery</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Battery Life, Talk Time</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">4 hr</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Battery Life, Standy</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">30 hr</span></span></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '1670947416_IMG_PRD_Iridium9555.jpg', '1670947417_TLEPHONE-IRIDIUM-9555-1920x1920_1024x.png', NULL, 'iridium-9555', 4, 'telephone-satellitaire-iridium', 0, '', '2022-12-13 15:03:37', '2022-12-13 15:05:59'),
(12, 'Iridium Extreme', 'Iridium Extreme', 'L\'Iridium Extreme® combine une robustesse à la pointe du marché avec un ensemble de fonctions inégalées, notamment la localisation et un bouton SOS entièrement intégré avec un service d\'intervention d\'urgence, le tout dans un combiné compact.', 'Iridium Extreme® combines market-leading toughness with an unmatched feature set including location awareness and a fully integrated SOS button with emergency response service — all in one compact handset.', '<table align=\"left\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">Dust Proof, Shock Resistant, and Jet-Water Resistant</th>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">GPS and Location-Based Services</th>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">One-Touch SOS</th>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">Diamond Treaded Tapered Grip</th>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Sp&eacute;cifications</strong></span></span></p>\r\n\r\n<table border=\"0\" cellspacing=\"20\" class=\"table\" style=\"margin-left:20px; text-align:left; width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Mechanical</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dimensions (L x W x H)</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">140mm x 60mm x 27mm</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Weight</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">247 g</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Environmental</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Operating Temperature Range</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">-10 to 55 ℃</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Durability Standard</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">MIL-STD 810F</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Ingress Protection</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">IP65</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Storage Humidity Range</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Battery</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Battery Life, Talk Time</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">4 hr</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Battery Life, Standy</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">30 hr</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Network</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Telephony</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">Yes</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Location Based Services</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">Yes</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">User Experience</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">GEOS Support</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">Yes</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Sp&eacute;cifications</strong></span></span></p>\r\n\r\n<table border=\"0\" cellspacing=\"20\" class=\"table\" style=\"margin-left:20px; text-align:left; width:90%\">\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Mechanical</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dimensions (L x W x H)</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">140mm x 60mm x 27mm</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Weight</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">247 g</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Environmental</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Operating Temperature Range</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">-10 to 55 ℃</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Durability Standard</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">MIL-STD 810F</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Ingress Protection</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">IP65</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Storage Humidity Range</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Battery</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Battery Life, Talk Time</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">4 hr</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Battery Life, Standy</span></span></th>\r\n			<td style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">30 hr</span></span></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Network</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Telephony</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">Yes</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Location Based Services</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">Yes</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">User Experience</span></span></th>\r\n			<td style=\"text-align:justify\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\" style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">GEOS Support</span></span></th>\r\n			<td style=\"text-align:justify\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td><span style=\"color:#000000\"><span style=\"font-size:18px\">Yes</span></span></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '1670948719_7-4456.png', '1670948719_2348-2470.png', NULL, 'iridium-extreme', 4, 'telephone-satellitaire-iridium', 0, '', '2022-12-13 15:25:19', '2022-12-13 15:27:29');
INSERT INTO `produit_turayas` (`id`, `libelle`, `libelle_en`, `short`, `short_en`, `caracteristique`, `description`, `description_en`, `image`, `image2`, `image3`, `slug`, `cat_id`, `cat_name`, `sous_id`, `sous_name`, `created_at`, `updated_at`) VALUES
(13, 'ISATPHONE PRO', 'ISATPHONE PRO', 'Pour les utilisateurs de la version 5.3.0 ou supérieure, il s\'agit d\'une mise à jour recommandée, ce qui signifie', 'For users of 5.3.0 or higher this is a recommended upgrade, meaning that the features introduced by the', NULL, '<h4><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Recommandations pour l&#39;installation</strong></span></span></h4>\r\n\r\n<h4><br />\r\n<span style=\"color:#000000\"><span style=\"font-size:18px\">Pour les utilisateurs de la version 5.3.0 ou sup&eacute;rieure, il s&#39;agit d&#39;une mise &agrave; jour recommand&eacute;e, ce qui signifie que les fonctionnalit&eacute;s introduites par le firmware sont importantes mais pas critiques pour le service GSPS, y compris le r&eacute;seau et le combin&eacute; IsatPhone Pro.</span></span></h4>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">Pour les utilisateurs qui n&#39;ont pas encore effectu&eacute; la mise &agrave; jour vers la version 5.3.0 ou sup&eacute;rieure, cette mise &agrave; jour vers 5.17.2 est consid&eacute;r&eacute;e comme &quot;obligatoire&quot; pour &eacute;viter que le t&eacute;l&eacute;phone ne devienne non op&eacute;rationnel.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">Pour v&eacute;rifier que vous avez la derni&egrave;re version sur votre IsatPhone Pro, allez dans Menu &gt; Param&egrave;tres &gt; &Agrave; propos &gt; Version du micrologiciel.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">Veuillez contacter votre fournisseur de services pour la mise &agrave; jour, ou t&eacute;l&eacute;chargez le lien ci-dessous.</span></span></p>\r\n\r\n<h4><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Outil de mise &agrave; jour du micrologiciel</strong><br />\r\nDe temps en temps, il peut &ecirc;tre n&eacute;cessaire de mettre &agrave; jour votre t&eacute;l&eacute;phone afin d&#39;am&eacute;liorer ses fonctionnalit&eacute;s et son fonctionnement. Vous serez inform&eacute; par Inmarsat et/ou votre fournisseur de services lorsqu&#39;une mise &agrave; niveau du micrologiciel est n&eacute;cessaire.</span></span></h4>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">Veuillez noter que vous devez installer les pilotes USB avant d&#39;installer l&#39;outil de mise &agrave; niveau du micrologiciel. Les pilotes USB et le guide &quot; Comment installer les pilotes USB &quot; sont inclus dans le CD d&#39;assistance fourni avec votre IsatPhone Pro.</span></span></p>\r\n\r\n<h4><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Pilotes USB</strong><br />\r\nVous devrez installer les pilotes USB sur votre PC avant d&#39;installer les outils de synchronisation des contacts et de mise &agrave; niveau du micrologiciel. L&#39;installation des pilotes USB r&eacute;duit &eacute;galement le temps de charge de votre t&eacute;l&eacute;phone.</span></span></h4>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">Le guide &quot; Comment installer les pilotes USB &quot; est inclus dans le CD d&#39;assistance fourni avec votre IsatPhone Pro.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Les pilotes USB sont compatibles avec Windows XP, Windows Vista, Windows 7, 8 et 10.</strong></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>(Pour Windows 7, l&#39;USB 3.0 n&#39;est pas pris en charge).</strong></span></span></p>', '<h4><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Recommendations for installation</strong></span></span></h4>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">For users of 5.3.0 or higher this is a recommended upgrade, meaning that the features introduced by the firmware are important but not critical for the GSPS service, including the network and the IsatPhone Pro handset.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">For users that who have not yet upgraded to version 5.3.0 or higher, this upgrade to 5.17.2 is considered&nbsp; to be &lsquo;mandatory&rsquo; to avoid the phone becoming non-operational.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">To check you have the latest version on your IsatPhone Pro, go to Menu &gt; Settings &gt; About &gt; Firmware version.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">Please contact your Service Provider to upgrade, or download from the link below.</span></span></p>\r\n\r\n<h3><strong><span style=\"color:#000000\"><span style=\"font-size:18px\">Firmware Upgrade Tool</span></span></strong></h3>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">From time to time, it may be necessary to upgrade your phone in order to improve its functionality and operation. You will be notified by Inmarsat and/or your Service Provider when a firmware upgrade is required.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">Please note that you need to install the USB drivers before installing the Firmware Upgrade Tool. The USB drivers and the guide &lsquo;How to install USB drivers&rsquo; are included on the support CD supplied with your IsatPhone Pro.</span></span></p>\r\n\r\n<h4><strong><span style=\"color:#000000\"><span style=\"font-size:18px\">USB drivers</span></span></strong></h4>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">You will need to install the USB drivers on your PC before installing the contact synchronisation and firmware upgrade tools. Installing the USB drivers also reduces your phone&rsquo;s charging time.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">The guide &lsquo;How to install USB drivers&rsquo; is included on the support CD supplied with your IsatPhone Pro.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><u><em><strong>USB Drivers are compatible with Windows XP, Windows Vista, Windows 7, 8 and 10.</strong></em></u></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><u><em><strong>(For Windows 7, USB 3.0 is not supported.)</strong></em></u></span></span></p>', '1671011699_isatphone-pro.jpg', '1671011700_isatphone-pro-handset-english-keypad.jpg', NULL, 'isatphone-pro', 5, 'telephone-inmarsat', 0, '', '2022-12-14 08:55:00', '2022-12-14 08:55:00'),
(14, 'VIVOTEK FD9360H', 'VIVOTEK FD9360H', 'La FD9360-H de VIVOTEK est une caméra réseau dôme extérieure H.265 équipée d\'un capteur de 2 mégapixels,', 'VIVOTEK’s FD9360-H is a H.265 outdoor dome network camera equipped with a 2-Megapixel sensor,', '<table cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h5><span style=\"font-size:12px\"><span style=\"color:#000000\">2MP</span></span></h5>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<h5><span style=\"font-size:12px\"><span style=\"color:#000000\">H.265</span></span></h5>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<h5><span style=\"font-size:12px\"><span style=\"color:#000000\">2.8/3.6mm</span></span></h5>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<h5><span style=\"font-size:12px\"><span style=\"color:#000000\">30M IR</span></span></h5>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<h5><span style=\"font-size:12px\"><span style=\"color:#000000\">SNV</span></span></h5>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<h5><span style=\"font-size:12px\"><span style=\"color:#000000\">WDR Pro</span></span></h5>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\">La FD9360-H de VIVOTEK est une cam&eacute;ra r&eacute;seau d&ocirc;me ext&eacute;rieure H.265 &eacute;quip&eacute;e d&#39;un capteur de 2 m&eacute;gapixels, permettant une r&eacute;solution de 1920x1080 &agrave; 30 images par seconde. Dot&eacute;e des technologies SNV et WDR Pro de VIVOTEK, la FD9360-H est capable de capturer des images de haute qualit&eacute; dans des environnements &agrave; fort contraste et &agrave; faible luminosit&eacute;.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">La FD9360-H d&eacute;ploie un objectif de 2,8 mm/3,6 mm et est &eacute;quip&eacute;e d&#39;illuminateurs IR d&#39;une port&eacute;e effective de 30 m&egrave;tres pour une meilleure visibilit&eacute; de nuit. En outre, pour assurer une couverture fiable dans les environnements ext&eacute;rieurs difficiles, la FD9360-H est log&eacute;e dans un bo&icirc;tier IP66 et IK10.</span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\">Gr&acirc;ce &agrave; la technologie Smart Stream III de VIVOTEK et &agrave; la prise en charge du codec H.265, la FD9360-H est capable de r&eacute;duire l&#39;utilisation de la bande passante jusqu&#39;&agrave; 90 %* tout en maintenant une qualit&eacute; d&#39;image irr&eacute;prochable. En outre, la plate-forme de d&eacute;veloppement d&#39;applications VADP (VIVOTEK Application Development Platform) permet aux utilisateurs de personnaliser les applications pour le nombre toujours croissant de sc&eacute;narios d&#39;utilisation sur un march&eacute; de la surveillance qui se diversifie.</span></span></p>', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\">VIVOTEK&rsquo;s FD9360-H is a H.265 outdoor dome network camera equipped with a 2-Megapixel sensor, enabling resolution of 1920x1080 at 30 fps. Featuring VIVOTEK SNV and WDR Pro technology, the FD9360-H is capable of capturing high-quality imagery in both high contrast and low light environments.<br />\r\n<br />\r\nThe FD9360-H deploys a 2.8mm/3.6mm lens and is equipped with IR illuminators with a 30-meter effective range for better night visibility. Further, to provide reliable coverage in harsh outdoor environments, the FD9360-H is encased in IP66 and IK10 housing.<br />\r\n<br />\r\nBy employing VIVOTEK&#39;s Smart Stream III technology and H.265 codec support, the FD9360-H is able to reduce bandwidth usage by up to 90%* while maintaining supreme image quality. Additionally, the VADP (VIVOTEK Application Development Platform) allows users to customize applications for the ever-expanding number of user scenarios in a diversifying surveillance market.</span></span></p>', '1671712705_fd9360-h_.png', '1671712706_FD9189-H__88867.jpg', NULL, 'vivotek-fd9360h', 7, 'videosurveillance', 1, 'camera-vivotek', '2022-12-22 11:38:26', '2022-12-22 11:40:11'),
(15, 'ISATPHONE 2', 'ISATPHONE 2', 'Voici l\'IsatPhone 2 d\'Inmarsat, conçu pour le réseau de communication par satellite le plus fiable au monde', 'Introducing the IsatPhone 2 from Inmarsat, designed for the most reliable satellite communications network in the world.', '<table cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Size</strong>&nbsp;</span></span></span></td>\r\n			<td>\r\n			<p><span style=\"color:#000000\"><span style=\"font-size:12px\">169 mm (L) x 75 mm (W) x 29 mm (D)</span></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Weight</strong>&nbsp;</span></span></span></td>\r\n			<td>\r\n			<p>316 g- includding the battery</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><strong>Duration</strong></span></span></td>\r\n			<td>\r\n			<ul>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:12px\">Standby Time: Up to 160 hours</span></span></li>\r\n				<li><span style=\"color:#000000\"><span style=\"font-size:12px\">Talk Time: Up to 8 hours</span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><span style=\"color:#000000\"><span style=\"font-size:12px\"><strong>Screen</strong></span></span></td>\r\n			<td>\r\n			<p><span style=\"color:#000000\"><span style=\"font-size:12px\">High Visibility Colour Screen</span></span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Voici l&#39;IsatPhone 2 d&#39;Inmarsat, con&ccedil;u pour le r&eacute;seau de communication par satellite le plus fiable au monde. IsatPhone 2 est le dernier n&eacute; de notre gamme de t&eacute;l&eacute;phones portables par satellite, avec une s&eacute;rie de fonctions suppl&eacute;mentaires qui vous permettent de rester connect&eacute; dans les endroits les plus extr&ecirc;mes et les plus &eacute;loign&eacute;s.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">IsatPhone 2 est un t&eacute;l&eacute;phone solide pour un monde solide. Ce combin&eacute; robuste a &eacute;t&eacute; con&ccedil;u pour r&eacute;sister &agrave; tout ce que la nature peut lui faire subir - de la chaleur torride aux vents glac&eacute;s, des temp&ecirc;tes de sable du d&eacute;sert aux pluies de mousson. Et avec un enregistrement rapide du r&eacute;seau, une batterie d&#39;une autonomie in&eacute;gal&eacute;e offrant 8 heures de conversation et jusqu&#39;&agrave; 160 heures de veille, vous savez que vous pouvez toujours compter sur le IsatPhone 2.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">L&#39;IsatPhone 2 vous offre l&#39;excellente clart&eacute; vocale et la stabilit&eacute; des appels que vous &ecirc;tes en droit d&#39;attendre du r&eacute;seau Inmarsat.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Une connectivit&eacute; fiable<br />\r\nHaute qualit&eacute; vocale<br />\r\nMessagerie vocale, texte et e-mail<br />\r\nCapacit&eacute; de la batterie &eacute;tendue<br />\r\nBouton d&#39;assistance<br />\r\nEnvoie des donn&eacute;es de localisation GPS et un texte au num&eacute;ro d&#39;urgence pr&eacute;d&eacute;fini<br />\r\nSuivi - envoie des informations de localisation<br />\r\nBluetooth pour une utilisation mains libres<br />\r\nAlertes d&#39;appels entrants lorsque l&#39;antenne est rang&eacute;e<br />\r\nCombin&eacute; ergonomique et robuste<br />\r\nUn t&eacute;l&eacute;phone satellite puissant et fiable offrant une qualit&eacute; vocale &eacute;lev&eacute;e, une messagerie vocale, des messages textuels et &eacute;lectroniques, ainsi que des fonctions de suivi et d&#39;alerte d&#39;assistance. Le tout dans un combin&eacute; ergonomique et robuste.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Pr&ecirc;t : enregistrement rapide du r&eacute;seau en moins de 45 secondes et autonomie de la batterie in&eacute;gal&eacute;e, 8 heures de conversation et jusqu&#39;&agrave; 160 heures en veille.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Fiable : fonctionne sur des satellites g&eacute;ostationnaires mondiaux, ce qui garantit la stabilit&eacute; des appels et la fiabilit&eacute; de la connexion au r&eacute;seau.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Robuste : con&ccedil;u et fabriqu&eacute; pour r&eacute;sister aux conditions les plus extr&ecirc;mes ; fonctionne de -20&deg;c &agrave; +55&deg;c (clavier plus grand pour faciliter la num&eacute;rotation avec des gants) ; r&eacute;sistant &agrave; la poussi&egrave;re, aux &eacute;claboussures et aux chocs (IP65, IK04) ; tol&eacute;rance &agrave; l&#39;humidit&eacute; de 0 &agrave; 95%.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Rassurant : les services de localisation, y compris la touche de suivi et d&#39;assistance, permettent de tenir les gens au courant de vos coordonn&eacute;es GPS lorsque cela est important. Recevez des notifications d&#39;appels entrants m&ecirc;me lorsque l&#39;antenne est rang&eacute;e.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Lisible : interface facile &agrave; utiliser avec un grand &eacute;cran transflectif haute visibilit&eacute; et r&eacute;sistant aux rayures, qui est lisible m&ecirc;me en plein soleil.</span></span></p>', '<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Introducing the&nbsp;<strong>IsatPhone 2</strong>&nbsp;from Inmarsat, designed for the most reliable satellite communications network in the world. IsatPhone 2 is the latest addition to our handheld satellite phone portfolio with a range of additional features that help you to stay connected in the most extreme and remote locations.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">IsatPhone 2 is a tough phone for a tough world. The robust handset has been engineered to cope with anything that nature can throw at it &ndash; from searing heat to icy blasts; desert sandstorms or monsoon rain. And with fast network registration, an unrivaled battery life offering 8 hours of talk time and up to 160 hours of standby time, you know you can always depend on the IsatPhone 2.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">IsatPhone 2 gives you the excellent voice clarity and call stability you have come to expect from Inmarsat&rsquo;s network.</span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Dependable connectivity</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">High voice quality</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Voicemail, text and email messaging</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Extended battery capacity</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Assistance button</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Sends GPS location data and text to pre-set emergency number</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Tracking &ndash; sends location information</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Bluetooth for hands-free use</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Incoming call alerts with antenna stowed</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Ergonomic and ruggedised handset</span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">A powerful, dependable satellite phone delivering high voice quality, voicemail, text and email messaging, plus tracking and assistance alert features. All packaged in an ergonomically designed rugged handset.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\"><strong>Ready:</strong>&nbsp;fast network registration under 45 seconds and unrivaled battery life, 8 hours talk time and up to 160 hours of standby time</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\"><strong>Reliable:</strong>&nbsp;operates over global geostationary satellites ensuring reliable call stability and network connection</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\"><strong>Robust:</strong>&nbsp;designed and engineered to withstand the most extreme conditions; operates at -20&deg;c to +55&deg;c (larger keypad for easy dialing when wearing gloves); dust, splash and shock resistant (IP65, IK04); humidity tolerance from 0 to 95%</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\"><strong>Reassuring:</strong>&nbsp;location services, including tracking and assistance button, keep people updated of your GPS coordinates when it matters. Receive notification of inbound calls even with antenna stowed</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\"><strong>Readable:</strong>&nbsp;easy-to-use interface with large high-visibility, scratch-resistant transflective display that is readable even in bright sunlight.</span></span></p>', '1672851112_inmarsat-pro-2.png', '1672851113_Inmarsat_iSatPhone_2_aPanbo-thumb-465xauto-9711.jpg', '1672851113_inm-isatphone2-06__69646.png', 'isatphone-2', 5, 'telephone-inmarsat', 0, '', '2023-01-04 15:51:53', '2023-01-04 15:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `savs`
--

CREATE TABLE `savs` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `savs`
--

INSERT INTO `savs` (`id`, `titre`, `titre_en`, `libelle`, `libelle_en`, `created_at`, `updated_at`) VALUES
(1, 'Service après vente', 'After sales service', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Gr&acirc;ce &agrave; une &eacute;quipe d&rsquo;ing&eacute;nieurs qualifi&eacute;s dans divers domaines, SACONETS SA assure un service apr&egrave;s-vente de qualit&eacute; sur tous ses produits et service.&nbsp;<br />\r\nNous assurons : </span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Maintenance pr&eacute;ventive</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Maintenance curative</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Support Technique 24/24 et 7/7</span></span></span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Contactez notre support technique sur un des num&eacute;ros ci-dessous ou &eacute;crivez-nous.</span></span></span><br />\r\n<span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#000000\">&nbsp;</span><strong><span style=\"color:#000000\">(+237) 242 778 196, 696 658 378 /&nbsp;(+237) 242 069 978 ou&nbsp;</span><a href=\"http://localhost:8000/sav\"><span style=\"color:#000000\">info@saconets.com</span></a></strong></span></span></p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Thanks to a team of engineers qualified in various fields, SACONETS SA ensures a quality after-sales service on all its products and services.&nbsp;<br />\r\nWe provide : </span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Preventive maintenance</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Curative maintenance</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">24/7 Technical Support</span></span></span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Contact our technical support on one of the numbers below or write to us.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#000000\">&nbsp;</span><strong><span style=\"color:#000000\">(+237) 242 778 196, 696 658 378 /&nbsp;(+237) 242 069 978 or&nbsp;</span><a href=\"http://localhost:8000/sav\"><span style=\"color:#000000\">info@saconets.com</span></a></strong></span></span></p>', '2022-09-23 07:47:50', '2022-09-28 16:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `securites`
--

CREATE TABLE `securites` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_en` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre_en` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix` int(11) NOT NULL,
  `ancien_prix` int(11) DEFAULT NULL,
  `dates` date NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `qte_min` int(11) NOT NULL,
  `nb_like` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `titre`, `titre_en`, `description`, `description_en`, `prix`, `ancien_prix`, `dates`, `cat_id`, `image`, `image2`, `image3`, `slug`, `stock`, `qte_min`, `nb_like`, `created_at`, `updated_at`) VALUES
(1, 'Kisan Newton A', 'Kisan Newton A', '<p><span style=\"font-size:18px\">Notre relation de proximit&eacute; avec le fabricant nous permet de mettre r&eacute;guli&egrave;rement &agrave; disposition de nos clients le nouveau <span style=\"color:#2980b9\">KISAN Newton A</span> (Advanced) qui offre des performances plus avanc&eacute;es tel que d&eacute;crit ci-dessous :&nbsp;</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\">Valorisation de billets 2 poches (1+1)</span></li>\r\n	<li><span style=\"font-size:18px\">Valorisation des billets : 1500 billets/min.</span></li>\r\n	<li><span style=\"font-size:18px\">Mode comptage</span></li>\r\n	<li><span style=\"font-size:18px\">Tri des billets par coupure</span></li>\r\n	<li><span style=\"font-size:18px\">Trie des billets par orientation et par face</span></li>\r\n	<li><span style=\"font-size:18px\">D&eacute;tection des billets pr&eacute;sum&eacute;s faux</span></li>\r\n	<li><span style=\"font-size:18px\">Conditionnement par lot pour liasses</span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '<p><span style=\"font-size:18px\">Our close relationship with the manufacturer allows us to regularly make available to our customers the new <span style=\"color:#2980b9\">KISAN Newton A </span>(Advanced) which offers more advanced performance as described below:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\">Valuation of 2-pocket banknotes (1+1)</span></li>\r\n	<li><span style=\"font-size:18px\">Valuation of banknotes: 1500 banknotes/min.</span></li>\r\n	<li><span style=\"font-size:18px\">Count mode</span></li>\r\n	<li><span style=\"font-size:18px\">Sorting banknotes by denomination</span></li>\r\n	<li><span style=\"font-size:18px\">Sort banknotes by orientation and side</span></li>\r\n	<li><span style=\"font-size:18px\">Detection of presumed counterfeit banknotes</span></li>\r\n	<li><span style=\"font-size:18px\">Batch packaging for bundles</span></li>\r\n</ul>', 200000, 2, '2022-05-12', 1, '1662716816_5_1.png', '1662716816_A.png', '', 'kisan-newton-a', 10, 5, 3, '2022-05-12 11:37:32', '2023-10-14 12:02:27'),
(2, 'Kisan K5', 'Kisan K5', '<p style=\"margin-left:1px; margin-right:22px\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">La <span style=\"color:#2980b9\"><strong>&laquo; Kisan K5 &raquo;</strong></span> est une Compteuse/Trieuse de billets de Banque tr&egrave;s robuste, sp&eacute;cialement con&ccedil;ue pour les salles de coffre. Elle permet entre autres :&nbsp; </span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Le comptage de gros volume de billets &agrave; une vitesse de 1000 billets par minute. </span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Le comptage des billets m&eacute;lang&eacute;s, leur valorisation, leur division en liasses, la v&eacute;rification de leur authenticit&eacute;.&nbsp; </span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Le tri qualitatif : FIT/UNFIT qui permet de s&eacute;parer automatiquement les billets us&eacute;s et faciliter le tri des billets allant dans les GAB </span></span></li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost:8000/uploads/1652368446_Kisan K51.jpg\" style=\"height:389px; width:260px\" /><img alt=\"\" src=\"http://localhost:8000/uploads/1652368499_Kisan K52.jpg\" style=\"height:334px; width:258px\" /></p>', '<p><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">The &quot;Kisan K5&quot; is a very robust banknote counter/sorter, specially designed for safe rooms. It allows among other things:</span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">High volume banknote counting at a speed of 1000 banknotes per minute.</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">The counting of the mixed notes, their valuation, their division into bundles, the verification of their authenticity.</span></span></li>\r\n	<li><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Qualitative sorting: FIT/UNFIT which automatically separates used banknotes and facilitates the sorting of banknotes going to ATMs</span></span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://localhost:8000/uploads/1652368446_Kisan K51.jpg\" style=\"height:389px; width:260px\" /><img alt=\"\" src=\"http://localhost:8000/uploads/1652368499_Kisan K52.jpg\" style=\"height:334px; width:258px\" /></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>', 150000, NULL, '2022-05-12', 1, '1662660507_4_1.png', '1662660507_kisanK5.jpg', NULL, 'kisan-k5', 8, 5, 1, '2022-05-12 14:16:58', '2023-01-05 09:44:46'),
(3, 'G&D ProNote 1.5', 'G&D ProNote 1.5', '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">La </span><span style=\"color:#2980b9\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Pronote 1.5</span></strong></span><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"> est une compteuse et trieuse de billets de banque dot&eacute;e d&rsquo;une technologie exceptionnelle. Elle est tr&egrave;s pratique &agrave; utiliser et permet d&rsquo;effectuer un comptage et une v&eacute;rification fiables des billets de banque. Les billets de banque contrefaits sont plac&eacute;s dans le compartiment de rejet pendant le processus de comptage ; ce qui augmente la s&eacute;curit&eacute; et permet d&rsquo;obtenir un comptage continu. Parfaitement pr&eacute;par&eacute;e pour le comptage des billets de <span style=\"color:#2980b9\">10 000 FCFA</span>, gr&acirc;ce &agrave; des mises &agrave; jour simples et rapides.</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '<p><span style=\"font-size:18px\">The <span style=\"color:#2980b9\">Pronote 1.5</span> is a banknote counter and sorter equipped with exceptional technology. It is very convenient to use and allows reliable counting and verification of banknotes. Counterfeit banknotes are placed in the reject compartment during the counting process; which increases safety and enables continuous counting. Perfectly prepared for counting<span style=\"color:#2980b9\"> 10,000 FCFA</span> banknotes, thanks to simple and quick updates.</span></p>\r\n\r\n<p>&nbsp;</p>', 250000, NULL, '2022-05-12', 1, '1662729149_ProNote_1_5.png', NULL, NULL, 'gd-pronote-15', 13, 5, 2, '2022-05-12 14:46:48', '2023-01-05 09:45:07'),
(4, 'G&D BPS C2-2', 'G&D BPS C2-2', '<p><span style=\"font-size:18px\">Dans le segment des tables compactes, la famille de produits BPS&reg; C2 offre une productivit&eacute; sup&eacute;rieure, une s&eacute;curit&eacute; maximale et un design compact et attrayant avec un tr&egrave;s haut niveau de convivialit&eacute;. En outre, un choix de trois variantes - ainsi qu&#39;un large &eacute;ventail de configurations - permet aux syst&egrave;mes de r&eacute;pondre &agrave; des exigences sp&eacute;cifiques qui porteront l&#39;efficacit&eacute; de votre processus de tr&eacute;sorerie &agrave; un tout autre niveau.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">La <strong>BPS&reg; C2-2</strong> offre une efficacit&eacute; dans sa forme la plus compacte. Deux compartiments de sortie offrent un &eacute;ventail d&#39;options de tri, par exemple par d&eacute;nomination, orientation ou forme physique et, si n&eacute;cessaire, des billets pour une application de casino. De plus, les meilleurs capteurs de leur cat&eacute;gorie garantissent une fiabilit&eacute; maximale pour l&rsquo;authentification et la d&eacute;tection de la condition physique.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Cela fait du <strong>BPS&reg; C2-2</strong> le choix incontournable pour des performances optimales et un degr&eacute; &eacute;lev&eacute; de variabilit&eacute; pour les banques commerciales, les d&eacute;taillants, les soci&eacute;t&eacute;s de transfert d&#39;argent et les casinos.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Pour son excellent design de produit et sa convivialit&eacute; in&eacute;gal&eacute;e, le BPS&reg; C2-2 a &eacute;t&eacute; r&eacute;compens&eacute; par le German Design Award 2018.</span></p>', '<p><span style=\"font-size:18px\">In the compact table segment, the BPS&reg; C2 product family offers superior productivity, maximum security and an attractive, compact design with a high level of user-friendliness. In addition, a choice of three variants - as well as a wide range of configurations - allows the systems to meet specific requirements that will take the efficiency of your cash process to a whole new level.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">The <strong>BPS&reg; C2-2</strong> offers efficiency in its most compact form. Two output compartments offer a range of sorting options, such as by denomination, orientation or physical form and, if required, tickets for a casino application. In addition, best-in-class sensors ensure maximum reliability for authentication and fitness detection.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">This makes the <strong>BPS&reg; C2-2</strong> the obvious choice for optimal performance and a high degree of variability for commercial banks, retailers, money transfer companies and casinos.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">For its excellent product design and unmatched user-friendliness, the BPS&reg; C2-2 was awarded the German Design Award 2018.</span></p>', 300000, NULL, '2022-07-01', 1, '1662728262_bps_c2.png', NULL, NULL, 'gd-bps-c2-2', 0, 5, 0, '2022-07-01 07:48:24', '2023-01-05 09:45:22'),
(5, 'CJD8000', 'CJD8000', '<p><span style=\"font-size:18px\">Pour les banques o&ugrave; la rapidit&eacute; du service client est une priorit&eacute; absolue,</span></p>\r\n\r\n<p><span style=\"font-size:18px\">le CJD 8000 de Rototype permet aux banques d&#39;automatiser la fonction de distribution de ch&egrave;ques en assurant une &eacute;mission rapide de carnets enti&egrave;rement personnalisables par l&#39;agence ou l&#39;utilisateur, imprim&eacute;s avec une qualit&eacute; d&#39;impression haute r&eacute;solution.</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\">Deux cassettes d&#39;alimentation diff&eacute;rentes (jusqu&#39;&agrave; 1500 documents)</span></li>\r\n	<li><span style=\"font-size:18px\">Encodage MICR par transfert thermique</span></li>\r\n	<li><span style=\"font-size:18px\">Personnalisation des ch&egrave;ques par impression jet d&#39;encre haute r&eacute;solution</span></li>\r\n	<li><span style=\"font-size:18px\">V&eacute;rification de l&#39;exactitude et de la qualit&eacute; de la codification imprim&eacute;e</span></li>\r\n	<li><span style=\"font-size:18px\">Unit&eacute; d&#39;agrafage jusqu&#39;&agrave; 53 feuilles</span></li>\r\n	<li><span style=\"font-size:18px\">Unit&eacute; de reliure</span></li>\r\n	<li><span style=\"font-size:18px\">Kiosque conforme aux normes DDA</span></li>\r\n</ul>', '<p><span style=\"font-size:18px\">For Banks where quick customer service is top priority,</span></p>\r\n\r\n<p><span style=\"font-size:18px\">prototype CJD 8000 enables Banks to automate the cheque dispensing function ensuring fast issuing of high quality branch/user fully customizable booklets printed with high resolution printing quality.</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\">Two different feeding cassettes (up to 1500 documents)</span></li>\r\n	<li><span style=\"font-size:18px\">Thermal transfer MICR encoding</span></li>\r\n	<li><span style=\"font-size:18px\">Customisation of cheques through high resolution ink jet printing</span></li>\r\n	<li><span style=\"font-size:18px\">Verification of the accuracy and quality of printed codeline</span></li>\r\n	<li><span style=\"font-size:18px\">Stapling unit up to 53 sheets</span></li>\r\n	<li><span style=\"font-size:18px\">Binding unit</span></li>\r\n	<li><span style=\"font-size:18px\">DDA Compliant kiosk</span></li>\r\n</ul>', 150000, NULL, '2022-07-01', 1, '1662730258_CJD_8000.png', NULL, NULL, 'cjd8000', 7, 5, 0, '2022-07-01 08:31:34', '2023-01-05 09:45:40'),
(7, 'THURAYA XT-PRO DUAL', 'THURAYA XT-PRO DUAL', '<table cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Satellite and GSM</strong></td>\r\n			<td>Connect to Satellite and GSM networks to enjoy connectivity in any location</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Two SIM Card Slots</strong></td>\r\n			<td>Use any combination of satellite and GSM SIM cards with &lsquo;Always-on&rsquo; capability for both</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Navigation Systems</strong></td>\r\n			<td>Extensive combination of navigation systems</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Talk-Time</strong></td>\r\n			<td>Up to 11 hours talk-time &amp; 100 hours standby time</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '<table cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Satellite and GSM</strong></td>\r\n			<td>Connect to Satellite and GSM networks to enjoy connectivity in any location</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Two SIM Card Slots</strong></td>\r\n			<td>Use any combination of satellite and GSM SIM cards with &lsquo;Always-on&rsquo; capability for both</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Navigation Systems</strong></td>\r\n			<td>Extensive combination of navigation systems</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Talk-Time</strong></td>\r\n			<td>Up to 11 hours talk-time &amp; 100 hours standby time</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 50000, NULL, '2022-10-20', 3, '1666280591_1662651808_XT-PRO-Dual-1.png', NULL, NULL, 'thuraya-xt-pro-dual', 0, 5, 0, '2022-10-20 14:43:12', '2023-01-05 09:45:56'),
(8, 'THURAYA X5-TOUCH', 'THURAYA X5-TOUCH', '<table cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Size</strong>&nbsp;</td>\r\n			<td>145 x 78 x 24 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Weight</strong>&nbsp;</td>\r\n			<td>262 g</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Operating System</strong>&nbsp;</td>\r\n			<td>Android</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '<table cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Size</strong>&nbsp;</td>\r\n			<td>145 x 78 x 24 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Weight</strong>&nbsp;</td>\r\n			<td>262 g</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Operating System</strong>&nbsp;</td>\r\n			<td>Android</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 150000, NULL, '2022-10-20', 3, '1666281177_1661511414_touch1.png', NULL, NULL, 'thuraya-x5-touch', 0, 5, 0, '2022-10-20 14:52:57', '2023-01-05 09:46:13'),
(9, 'Portable', 'Phone', '<p>Teste&nbsp;</p>', '<p>Test</p>', 2500, NULL, '2023-08-08', 3, '1691488378_edigroup.png', NULL, NULL, 'portable', 0, 50, 0, '2023-08-08 08:52:58', '2023-08-08 08:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraphe` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraphe_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `titre`, `titre_en`, `paragraphe`, `paragraphe_en`, `lien`, `video`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Réseau informatique', 'Computer network', 'Confiez le câblage de votre réseau informatique à des professionnels', 'Entrust the cabling of your computer network to professionals', NULL, '', '1667324270_banner-slide.png', '2022-08-30 15:24:46', '2022-11-01 20:40:57'),
(2, 'Réseau informatique', 'Computer network', 'Confiez le câblage de votre réseau informatique à des professionnels.', 'Entrust the cabling of your computer network to professionals.', NULL, '1661863268_movie.mp4', '1667324651_banner-slide-1.png', '2022-08-30 15:26:01', '2022-11-01 20:44:11'),
(3, 'Connexion internet par satellite', 'Satellite internet connection', 'Profitez de notre connexion internet par satellite à des prix défiant toute concurrence', 'Take advantage of our satellite internet connection at unbeatable prices', NULL, NULL, '1667324772_banner-slide-2.png', '2022-08-30 15:43:38', '2022-11-01 20:46:13'),
(4, 'Boucles fibre optiques', 'Fiber optic loops', 'Profitez de nos boucles fibre optiques pour un accès à très haut débit à vos différents sites interconnectés.', 'Take advantage of our fiber optic loops for very high speed access to your various interconnected sites.', NULL, NULL, '1667324898_banner-slide-3.png', '2022-10-26 12:14:26', '2022-11-01 20:48:18'),
(5, 'Contrôle d\'accès', 'Access control', 'Contrôlez l\'accès aux zones sensibles de vos locaux et gérer les temps de présence des employés en toute quiétude.', 'Control access to sensitive areas of your premises and manage employee time and attendance with peace of mind.', NULL, NULL, '1667325076_banner-slide-4.png', '2022-10-26 12:15:48', '2022-11-01 20:51:16'),
(6, 'Restez en contact avec vos proches', 'Stay in touch with your loved ones', 'Gardez le contact avec vos proches quelque soit leur localisation, même en temps de crise.', 'Keep in touch with your loved ones wherever they are, even in times of crisis.', NULL, NULL, '1667325164_banner-slide-6.png', '2022-10-26 12:16:19', '2022-11-01 20:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `sous_categories`
--

CREATE TABLE `sous_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sous_categories`
--

INSERT INTO `sous_categories` (`id`, `libelle`, `libelle_en`, `slug`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'Caméra VIVOTEK', 'VIVOTEK camera', 'camera-vivotek', 7, '2022-12-13 08:59:45', '2022-12-13 08:59:45'),
(2, 'Caméra UNIVIEW', 'UNIVIEW camera', 'camera-uniview', 7, '2022-12-13 09:01:06', '2022-12-13 09:01:06'),
(3, 'Kisan', 'Kisan', 'kisan', 1, '2022-12-13 09:59:07', '2022-12-13 09:59:07'),
(4, 'BPS', 'BPS', 'bps', 1, '2022-12-13 09:59:18', '2022-12-13 09:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `techniciens`
--

CREATE TABLE `techniciens` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_en` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `techniciens`
--

INSERT INTO `techniciens` (`id`, `nom`, `role`, `role_en`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, '1674839028_IMG_0967.jpg', '2022-09-23 08:37:44', '2023-01-27 16:03:48'),
(2, NULL, NULL, NULL, '1674839769_IMG_0971.jpg', '2022-09-23 08:39:01', '2023-01-27 16:16:09'),
(3, NULL, NULL, NULL, '1674840346_IMG_0969.jpg', '2022-09-23 08:39:09', '2023-01-27 16:25:46'),
(4, NULL, NULL, NULL, '1674840453_IMG_0973.jpg', '2022-09-23 08:39:18', '2023-01-27 16:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `telecoms`
--

CREATE TABLE `telecoms` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_en` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `telecoms`
--

INSERT INTO `telecoms` (`id`, `libelle`, `libelle_en`, `short`, `short_en`, `description`, `description_en`, `lien`, `image`, `created_at`, `updated_at`) VALUES
(1, 'VSAT', 'VSAT', 'Grâce à ses différents partenaires internationaux et propriétaires de satellites', 'Thanks to its various international partners and satellite owners', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Gr&acirc;ce &agrave; ses diff&eacute;rents partenaires internationaux et propri&eacute;taires de satellites, SACONETS SA fournit des services sur diff&eacute;rentes bandes telles que&nbsp;:</span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><strong>Bande C</strong> pour les moyennes entreprises recherchant les services d&eacute;di&eacute;s &agrave; tr&egrave;s hautes disponibilit&eacute;</span></span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><strong>Bande Ku</strong> petites et moyenne entreprises</span></span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><strong>Bande Ka</strong> pour les r&eacute;sidences et petites entreprises</span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">&nbsp;Nous accompagnons nos clients sur: </span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Le dimensionnement</span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">L&#39;installation et la mise en service</span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Service apr&egrave;s-vente</span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Conseils</span></span></strong></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Ils nous font d&eacute;j&agrave; confiance&nbsp;: </span></span></span></p>', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Thanks to its various international partners and satellite owners, SACONETS SA provides services on different bands such as:</span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><strong>C-band</strong> for medium-sized companies looking for dedicated services with very high availability</span></span></span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><strong>Ku band</strong> for small and medium-sized businesses</span></span></span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><strong>Ka band</strong> for residences and small businesses</span></span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">&nbsp;We support our customers on:</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">Sizing</span></span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">Installation and commissioning</span></span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">After sales service</span></span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">Advices</span></span></span></strong></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">They already trust us:</span></span></span></span></p>', '/interconnexion-et-internet-VSAT', '1661509278_vsat-2.jpg', '2022-06-03 16:53:49', '2022-09-30 14:23:53'),
(2, 'Fibre Optique', 'Fiber Optic', 'Grâce à son équipe hautement qualifiée dans la manipulation des fibres optiques ainsi que des partenaires stratégiques', 'Thanks to its highly qualified team in the handling of optical fibers as well as strategic partners', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><strong>SACONETS SA</strong> dispose &agrave; ce jour d&rsquo;une boucle &agrave; fibre optique dans les villes de Douala et Yaound&eacute; permettant d&rsquo;interconnecter les diff&eacute;rents sites de ses clients avec des d&eacute;bits allant jusqu&rsquo;&agrave; 1Gbit/s. Afriland First Bank s&rsquo;appuie sur cette derni&egrave;re pour l&rsquo;interconnexion de ses diff&eacute;rentes Agence et ainsi assurer une disponibilit&eacute; en capacit&eacute; pour la gestion des services connexes tel que la vid&eacute;osurveillance tr&egrave;s gourmande en bande passante.&nbsp;</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Gr&acirc;ce &agrave; son &eacute;quipe hautement qualifi&eacute;e dans la manipulation des fibres optiques ainsi que des partenaires strat&eacute;giques, SACONETS SA offre principalement des services de&nbsp;: </span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Interconnexion de bout en bout (Boucle locale optique)</span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><strong>&nbsp;</strong><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Interconnexion MPLS</span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Internet haut d&eacute;bit</span></span></strong></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Nous accompagnons nos clients sur&nbsp;: </span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Etude et dimensionnement</span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Conception et r&eacute;alisation</span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><strong>&nbsp;</strong><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Maintenance</span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Conseil</span></span></strong></span></li>\r\n</ul>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\"><strong>SACONETS SA</strong> currently has a fiber optic loop in the cities of Douala and Yaounde allowing to interconnect the different sites of its customers with speeds up to 1Gbit/s. Afriland First Bank relies on this loop to interconnect its various branches and thus ensure capacity availability for the management of related services such as video surveillance, which requires a lot of bandwidth.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">Thanks to its highly qualified team in the handling of optical fibers as well as strategic partners, SACONETS SA offers mainly services of :</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">End-to-end interconnection (Optical Local Loop)</span></span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">MPLS Interconnection</span></span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">High speed Internet</span></span></span></strong></span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">We support our customers on :</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">Study and sizing</span></span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">Design and implementation</span></span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><strong>&nbsp;</strong><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">Maintenance</span></span></span></strong></span></li>\r\n	<li style=\"text-align: justify;\"><strong>&nbsp;</strong><span style=\"color:#000000\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"background-color:white\">Consulting</span></span></span></strong></span></li>\r\n</ul>', '/internet-et-interconnexion-fibre-optique', '1661509375_network1.jpg', '2022-06-06 13:50:59', '2022-09-30 14:25:24'),
(3, 'Vidéosurveillance', 'Videosurveillance', 'Sécurisez vos locaux grâce à nos systèmes de vidéosurveillance de dernière génération', 'Secure your premises with our latest generation video surveillance systems', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">S&eacute;curisez vos locaux gr&acirc;ce &agrave; nos syst&egrave;mes de vid&eacute;osurveillance de derni&egrave;re g&eacute;n&eacute;ration.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Nos &eacute;quipes vous accompagnent sur&nbsp;: </span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Etude et dimensionnement</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Proposition des offres</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Installation et mise en service</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Service apr&egrave;s-vente</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Conseil </span></span></span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:myriad pro regular; font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Nous commercialisons les produits de marque internationale telles que&nbsp;:</span> </span></span></span></p>', '<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Secure your premises with our latest generation video surveillance systems.</span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Our teams accompany you on :</span></span></span></p>\r\n\r\n<ul>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Study and sizing</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Proposal of offers</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Installation and commissioning</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">After-sales service</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Advice</span></span></span></strong></li>\r\n</ul>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">We market products of international brands such as :</span></span></span></p>', '/video-surveillance', '1661509400_videosurveillance1.jpg', '2022-06-06 17:23:09', '2022-09-23 01:09:28'),
(4, 'Contrôle d’accès', 'Access control', 'Sécurisez vos locaux grâce à nos systèmes de contrôle d’accès de dernière génération', 'Secure your premises with our latest generation access control systems.', '<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">S&eacute;curisez vos locaux gr&acirc;ce &agrave; nos syst&egrave;mes de contr&ocirc;le d&rsquo;acc&egrave;s de derni&egrave;re g&eacute;n&eacute;ration.</span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Nos &eacute;quipes vous accompagnent sur&nbsp;: </span></span></span></p>\r\n\r\n<ul>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Etude et dimensionnement</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Proposition des offres</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Installation et mise en service</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Service apr&egrave;s-vente</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Conseil </span></span></span></strong></li>\r\n</ul>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:myriad pro regular; font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Nous commercialisons les produits de marque internationale telles que&nbsp;:</span></span></span></span><span style=\"color:#000000\"><span style=\"font-family:myriad pro regular; font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"> </span></span></span></p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Secure your premises with our latest generation access control systems.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Our teams accompany you on :</span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Study and sizing</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Proposal of offers</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Installation and commissioning</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">After-sales service</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Advice</span></span></span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">We market products of international brands such as :</span></span></span></p>', '/controle-acces', '1662023550_Image2.jpg', '2022-06-07 08:48:35', '2022-09-23 01:25:08'),
(5, 'Alarme Anti intrusion', 'Anti intrusion alarm', 'Sécurisez vos locaux grâce à nos systèmes anti intrusion de dernière génération associant des détecteurs de mouvement', 'Secure your premises with our latest generation anti-intrusion systems combining motion detectors', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">S&eacute;curisez vos locaux gr&acirc;ce &agrave; nos syst&egrave;mes anti intrusion de derni&egrave;re g&eacute;n&eacute;ration associant des d&eacute;tecteurs de mouvement, contacts d&rsquo;ouverture de porte, barri&egrave;re infrarouge, etc.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Nos &eacute;quipes vous accompagnent sur&nbsp;: </span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Etude et dimensionnement</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Proposition des offres</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Installation et mise en service</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Service apr&egrave;s-vente</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Conseil </span></span></span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Nous commercialisons les produits de marque internationale telles que&nbsp;:</span></span></span></p>', '<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Secure your premises with our latest generation anti-intrusion systems combining motion detectors, door opening contacts, infrared barriers, etc.</span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Our teams accompany you on :</span></span></span></p>\r\n\r\n<ul>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Study and sizing</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Proposal of offers</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Installation and commissioning</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">After-sales service</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Advice</span></span></span></strong></li>\r\n</ul>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">We market products of international brands such as :</span></span></span></p>', '/alarme-anti-intrusion', '1662024109_ALARME.png', '2022-06-22 09:09:37', '2022-09-23 01:31:39'),
(6, 'Système de Sécurité Incendie', 'Fire Safety System', 'Equipez vos locaux des systèmes de détection incendie de dernière génération', 'Equip your premises with the latest generation of fire detection systems', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Equipez vos locaux des syst&egrave;mes de d&eacute;tection incendie de derni&egrave;re g&eacute;n&eacute;ration.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Nos &eacute;quipes vous accompagnent sur&nbsp;: </span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Etude et dimensionnement</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Proposition des offres</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Installation et mise en service</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Service apr&egrave;s-vente</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Conseil </span></span></span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Nous commercialisons les produits de marque internationale telles que&nbsp;:</span></span></span></p>', '<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Equip your premises with the latest generation of fire detection systems.</span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Our teams accompany you on :</span></span></span></p>\r\n\r\n<ul>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Study and sizing</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Proposal of offers</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Installation and commissioning</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">After-sales service</span></span></span></strong></li>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Advice</span></span></span></strong></li>\r\n</ul>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">We market products of international brands such as :</span></span></span></p>', '/systeme-de-securite-ncendie', '1662026207_Image4.jpg', '2022-06-22 10:05:29', '2022-09-27 08:55:25'),
(7, 'Téléphonie mobile par satellite', 'Mobile satellite telephony', 'Maintenez les communications avec vos équipes en mer, en forêt et en situation de crise', 'Maintain communications with your teams at sea, in the forest and in crisis situations', '<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Maintenez les communications avec vos &eacute;quipes en mer, en for&ecirc;t et en situation de crise gr&acirc;ce &agrave; nos terminaux mobiles de communication par satellite. </span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Nous offrons &agrave; nos clients des services&nbsp;pr&eacute;pay&eacute;s et post pay&eacute; et des produits tels que&nbsp;: </span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Terminaux de communications mobile </span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Carte SIM</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Cartes de recharges</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Accessoires</span></span></span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><span style=\"color:#000000\">&nbsp; Nous commercialisons les produits de marque internationale telles que&nbsp;:</span></span></span></p>', '<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Maintain communications with your teams at sea, in the forest and in crisis situations with our mobile satellite communication terminals.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:18px\">We offer our customers prepaid and postpaid services and products such as</span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Mobile communication terminals</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:18px\">SIM card</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Recharge cards</span></span></span></strong></li>\r\n	<li style=\"text-align:justify\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Accessories</span></span></span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#000000\"><span style=\"font-size:18px\">&nbsp;&nbsp;We market products of international brands such as :</span></span></span></p>', '/telephonie-mobile-par-satellite', '1661509510_saconets-image11.jpg', '2022-06-22 08:38:04', '2022-09-23 01:46:04'),
(8, 'Tracking', 'Tracking', 'Améliorez la gestion de votre flotte de véhicules en faisant un suivi permanent grâce à notre système de Tracking...', 'Improve the management of your fleet of vehicles by doing a permanent follow-up thanks to our Tracking system...', '<p style=\"margin-right:-1px; text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Am&eacute;liorez la gestion de votre flotte de v&eacute;hicules en faisant un suivi permanent gr&acirc;ce &agrave; notre syst&egrave;me de Tracking offrant de multiples services.&nbsp; </span></span></span></p>\r\n\r\n<p style=\"margin-left:1px; margin-right:-1px; text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">&nbsp;Quelques services de base &nbsp;</span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"margin-left: 1px; margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Suivi en temps r&eacute;el&nbsp; des v&eacute;hicules </span></span></span></strong></li>\r\n	<li style=\"margin-left: 1px; margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Immobilisation &agrave; distance </span></span></span></strong></li>\r\n	<li style=\"margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Rapport Kilom&eacute;trique </span></span></span></strong></li>\r\n	<li style=\"margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Historique des d&eacute;placements </span></span></span></strong></li>\r\n	<li style=\"margin-left: 1px; margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Calcul du Temps de Pause </span></span></span></strong></li>\r\n	<li style=\"margin-left: 1px; margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">G&eacute;ofencing </span></span></span></strong></li>\r\n	<li style=\"margin-left: 1px; margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Gestion du Carburant &middot; Production des Rapports </span></span></span></strong></li>\r\n	<li style=\"margin-left: 1px; margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Etc.<em>&nbsp;</em></span></span></span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Contactez notre &eacute;quipe pour une offre adapt&eacute;e &agrave; votre besoin. </span></span></span></p>', '<p style=\"margin-right:-1px; text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Improve the management of your fleet of vehicles by doing a permanent follow-up thanks to our Tracking system offering multiple services.</span></span></span></p>\r\n\r\n<p style=\"margin-left:1px; margin-right:-1px; text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">&nbsp;Some basic services &nbsp;</span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"margin-left: 1px; margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Real-time vehicle tracking </span></span></span></strong></li>\r\n	<li style=\"margin-left: 1px; margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Remote immobilization </span></span></span></strong></li>\r\n	<li style=\"margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Mileage Report </span></span></span></strong></li>\r\n	<li style=\"margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Travel history </span></span></span></strong></li>\r\n	<li style=\"margin-left: 1px; margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Break Time Calculation </span></span></span></strong></li>\r\n	<li style=\"margin-left: 1px; margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Geofencing </span></span></span></strong></li>\r\n	<li style=\"margin-left: 1px; margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Fuel Management</span></span></span></strong></li>\r\n	<li style=\"margin-left: 1px; margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Reporting </span></span></span></strong></li>\r\n	<li style=\"margin-left: 1px; margin-right: -1px; text-align: justify;\"><strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Etc.&nbsp; </span></span></span></strong></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:1px; margin-right:-1px; text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Contact our team for an offer adapted to your needs.</span></span></span></p>', '/tracking', '1663849334_tracking.jpg', '2022-06-13 08:37:52', '2022-09-30 16:15:54'),
(9, 'Réseaux informatiques et Conseils', 'Computer Networks and Consulting', 'Confiez la conception de votre système d’informations à des professionnels', 'Entrust the design of your information system to professionals. Our team of engineers specialized', '<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong><span style=\"font-size:18px\">R&eacute;seaux informatiques</span></strong></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Confiez la conception de votre syst&egrave;me d&rsquo;informations &agrave; des professionnels. Notre &eacute;quipe d&rsquo;ing&eacute;nieurs sp&eacute;cialis&eacute;e pour les syst&egrave;mes informatiques vous accompagne sur&nbsp;:</span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Conception et r&eacute;alisation des architectures r&eacute;seaux optimis&eacute;es LAN, MAN et WAN</span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Int&eacute;gration des firewall et renouvellement des licences</span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Solution de t&eacute;l&eacute;phonie d&rsquo;entreprise (ToIP)</span></span></span></li>\r\n	<li><strong>&nbsp;</strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Solution WIFI professionnelle</span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong><span style=\"font-size:18px\">Conseils</span></strong></span></span></p>\r\n\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" class=\"conseil\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Gr&acirc;ce &agrave; nos diff&eacute;rents partenaires internationaux et notre &eacute;quipe d&rsquo;ing&eacute;nieurs locale, nous accompagnons nos clients dans le processus de transformation digital sur plusieurs plans&nbsp;:</span></span></span></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ul>\r\n				<li style=\"text-align: justify;\"><strong>&nbsp;</strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Etude des projets</span></span></span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Choix des meilleures solutions </span></span></span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">D&eacute;ploiement </span></span></span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">SAV</span></span></span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Etc.</span></span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong><span style=\"font-size:18px\">Computer Networks</span></strong></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Entrust the design of your information system to professionals. Our team of engineers specialized in computer systems will accompany you on :</span></span></span></p>\r\n\r\n<ul>\r\n	<li><strong>&nbsp;</strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Design and implementation of optimized LAN, MAN and WAN network architectures</span></span></span></li>\r\n	<li><strong>&nbsp;</strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Firewall integration and license renewal</span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Enterprise telephony solution (ToIP)</span></span></span></li>\r\n	<li><strong>&nbsp;</strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Professional WIFI solution</span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong><span style=\"font-size:18px\">Advice</span></strong></span></span></p>\r\n\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" class=\"conseil\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Thanks to our various international partners and our local engineering team, we accompany our customers in the digital transformation process on several levels:</span></span></span></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<ul>\r\n				<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Study of the projects</span></span></span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Choosing the best solutions </span></span></span></li>\r\n				<li style=\"text-align: justify;\"><strong>&nbsp;</strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Deployment </span></span></span></li>\r\n				<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">SAV</span></span></span></li>\r\n				<li style=\"text-align: justify;\"><strong>&nbsp;</strong><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Etc.</span></span></span></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '/reseau-informatique-et-conseil', '1663851054_informatique2.jpg', '2022-08-23 09:38:41', '2022-09-30 14:30:42'),
(10, 'Visioconférence', 'Videoconferencing', 'La visioconférence rassemble un certain nombre de participants travaillant depuis différents', 'Video conferencing brings together a number of participants working from different locations', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">La visioconf&eacute;rence rassemble un certain nombre de participants travaillant depuis diff&eacute;rents endroits dans une salle de r&eacute;union virtuelle. De nos jours il existe plusieurs solutions de visioconf&eacute;rence.&nbsp;<br />\r\nNos &eacute;quipes vous accompagnent &agrave; choisir la meilleure solution parmi nos diff&eacute;rents partenaires en fonction de vos besoins. Nous vous aidons notamment sur :</span></span></span></p>\r\n\r\n<ul>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Le choix de la solution</span></span></span></strong></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>L&rsquo;am&eacute;nagement de l&rsquo;environnement</strong></span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>L&rsquo;installation et la configuration de l&rsquo;outil</strong></span></span></span></li>\r\n</ul>', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Video conferencing brings together a number of participants working from different locations in a virtual meeting room. Nowadays there are several video conferencing solutions.&nbsp;<br />\r\nOur teams will help you choose the best solution among our different partners according to your needs. We can help you with</span></span></span></p>\r\n\r\n<ul>\r\n	<li><strong><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">The choice of the solution</span></span></span></strong></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>The layout of the environment</strong></span></span></span></li>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Installation and configuration of the tool</strong></span></span></span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '/visioconference', '1664276443_visio.jpeg', '2022-09-27 10:00:44', '2022-09-30 14:26:26');
INSERT INTO `telecoms` (`id`, `libelle`, `libelle_en`, `short`, `short_en`, `description`, `description_en`, `lien`, `image`, `created_at`, `updated_at`) VALUES
(11, 'Compteuses et Trieuses de Billets de Banque', 'Banknote Counters and Sorters', 'Grâce à un partenariat de proximité avec le fabricant Coréen Kisan Electronics, nous mettons à la disposition des établissements bancaires', 'Thanks to a close partnership with the Korean manufacturer Kisan Electronics, we can provide banks', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Gr&acirc;ce &agrave; un partenariat de proximit&eacute; avec le fabricant Cor&eacute;en Kisan Electronics, nous mettons &agrave; la disposition des &eacute;tablissements bancaires et de cr&eacute;dit des compteuses et trieuses de billets de derni&egrave;res g&eacute;n&eacute;ration afin de leurs permettre d&rsquo;am&eacute;liorer leur productivit&eacute;.</span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-size:18px\">La Compteuse Kisan Newton A</span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Compteuse et Trieuse Kisan K5</span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Compteuses et trieuses G&amp;D</span></span></li>\r\n</ul>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Thanks to a close partnership with the Korean manufacturer Kisan Electronics, we can provide banks and credit institutions with the<br />\r\nbanking and credit institutions with the latest generation of banknote counters and sorters to improve their<br />\r\nto improve their productivity.&nbsp;</span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-size:18px\">The Kisan Newton A Counter</span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Kisan K5 Counter and Sorter</span></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"color:#000000\"><span style=\"font-size:18px\">G&amp;D Counters and Sorters</span></span></li>\r\n</ul>', '/compteuses-et-trieuses-de-billets-de-banque', '1674842560_pronote-15.jpg', '2023-01-27 17:02:40', '2023-01-27 17:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `thuraya_accessoires`
--

CREATE TABLE `thuraya_accessoires` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraphe` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraphe_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prod_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thuraya_accessoires`
--

INSERT INTO `thuraya_accessoires` (`id`, `titre`, `titre_en`, `paragraphe`, `paragraphe_en`, `prod_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Répéteurs intérieurs', 'Indoor Repeaters', 'Les répéteurs intérieurs utilisent une antenne intérieure pour transmettre les services satellitaires Thuraya à l\'intérieur des bâtiments.', 'Indoor repeaters use an indoor antenna to transmit Thuraya satellite services inside buildings.', 2, NULL, '2022-09-01 16:28:38', '2022-09-02 08:20:19'),
(2, 'Chargeurs solaires', 'Solar Chargers', 'Un chargeur solaire peut être utilisé pour charger le XT-PRO DUAL, supprimant ainsi la nécessité d\'un accès à l\'électricité.', 'A solar charger can be used to charge the XT-PRO DUAL, removing the need for access to electricity.', 2, NULL, '2022-09-01 16:30:08', '2022-09-02 08:20:42'),
(3, 'Batterie de rechange', 'Spare Battery', 'Une batterie supplémentaire sert de sauvegarde pour le X5-Touch et prolonge le temps d\'utilisation lorsque vous n\'avez pas accès à l\'électricité.', 'An additional battery serves as a backup for the X5-Touch and extends usage time when you have no access to electricity.', 2, NULL, '2022-09-01 16:33:00', '2022-09-01 16:33:00'),
(4, 'Chargeur de voiture', 'Car Charger', 'Un chargeur de voiture garantit que le X5-Touch n\'est jamais à court d\'énergie lorsque vous êtes en déplacement.', 'A car charger ensures that the X5-Touch is never out of power while you are on the move.', 2, NULL, '2022-09-02 08:14:01', '2022-09-02 08:14:01'),
(5, 'Chargeur de voyage', 'Travel Charger', 'Le chargeur de voyage permet de connecter votre téléphone à une prise de courant. Les fiches interchangeables permettent de le recharger dans la plupart des régions du monde.', 'The travel charger connects your phone to a mains socket. The exchangeable plugs allow charging in most parts of the world.', 2, NULL, '2022-09-02 08:19:17', '2022-09-02 08:19:17'),
(6, 'Répéteurs intérieurs', 'Indoor Repeaters', 'Les répéteurs intérieurs utilisent une antenne intérieure pour transmettre les services satellitaires Thuraya à l\'intérieur des bâtiments.', 'Indoor repeaters use an indoor antenna to transmit Thuraya satellite services inside buildings.', 1, NULL, '2022-09-02 08:26:22', '2022-09-02 08:26:22'),
(7, 'Batterie de rechange', 'Spare Battery', 'Une batterie supplémentaire sert de sauvegarde pour le X5-Touch et prolonge le temps d\'utilisation lorsque vous n\'avez pas accès à l\'électricité.', 'An additional battery serves as a backup for the X5-Touch and extends usage time when you have no access to electricity.', 1, NULL, '2022-09-01 16:33:00', '2022-09-01 16:33:00'),
(8, 'Chargeurs solaires', 'Solar Chargers', 'Un chargeur solaire peut être utilisé pour charger le XT-PRO DUAL, supprimant ainsi la nécessité d\'un accès à l\'électricité.', 'A solar charger can be used to charge the XT-PRO DUAL, removing the need for access to electricity.', 1, NULL, '2022-09-01 16:30:08', '2022-09-02 08:20:42'),
(9, 'Chargeur de voiture', 'Car Charger', 'Un chargeur de voiture garantit que le X5-Touch n\'est jamais à court d\'énergie lorsque vous êtes en déplacement.', 'A car charger ensures that the X5-Touch is never out of power while you are on the move.', 1, NULL, '2022-09-02 08:14:01', '2022-09-02 08:14:01'),
(10, 'Chargeur de voyage', 'Travel Charger', 'Le chargeur de voyage permet de connecter votre téléphone à une prise de courant. Les fiches interchangeables permettent de le recharger dans la plupart des régions du monde.', 'The travel charger connects your phone to a mains socket. The exchangeable plugs allow charging in most parts of the world.', 1, NULL, '2022-09-02 08:19:17', '2022-09-02 08:19:17'),
(11, 'Brochure sur les accessoires des combinés Thuraya', 'Thuraya Handset Accessories Brochure', 'Mettez à jour votre téléphone Thuraya avec les derniers accessoires. Consultez notre brochure.', 'Update your Thuraya phone with the latest accessories. Check out our brochure.', 3, NULL, '2022-09-02 11:59:38', '2022-09-02 11:59:38'),
(12, 'Antenne de combiné externe', 'External handset antenna', 'Pour une meilleure réception du signal satellite lorsqu\'il est utilisé en déplacement (par exemple dans des bateaux ou des voitures) ou dans des zones à la limite de la couverture Thuraya. Connectez simplement le câble d\'antenne (5 m de long) au XT-LITE et placez l\'antenne à montage magnétique (indice IP66) dans une position avec une ligne de visée directe vers le satellite Thuraya.', 'For better satellite signal reception when used on the move (e.g. in boats or cars) or in areas at the edge of Thuraya coverage. Simply connect the antenna cable (5 m long) to the XT-LITE and place the magnetic mount antenna (IP66 rated) in a position with a direct line of sight to the Thuraya satellite.', 3, NULL, '2022-09-02 12:01:38', '2022-09-02 12:01:38'),
(13, 'FDU-XT', 'FDU-XT', 'Convient pour une utilisation à la maison et au bureau, le FDU-XT vous permet d\'utiliser le Thuraya XT-PRO comme un téléphone de bureau dans un environnement intérieur.', 'Suitable for home and office use, the FDU-XT allows you to use the Thuraya XT-PRO as a desk phone in an indoor environment.', 3, NULL, '2022-09-02 12:02:33', '2022-09-02 12:02:33'),
(14, 'Répéteurs intérieurs', 'Indoor repeaters', 'Les répéteurs intérieurs utilisent une antenne intérieure pour transmettre les services par satellite Thuraya à l\'intérieur des bâtiments.', 'Indoor repeaters use an indoor antenna to transmit Thuraya satellite services inside buildings.', 3, NULL, '2022-09-02 12:03:44', '2022-09-02 12:03:44'),
(15, 'Station d\'accueil pour véhicule Sattrans (SAT-DOCKER)', 'Sattrans Vehicle Docking Station (SAT-DOCKER)', 'Garantissez des services satellites mains libres dans les véhicules, à l\'aide d\'un docker fiable et facile à installer', 'Ensure hands-free satellite services in vehicles with a reliable and easy-to-install docker', 3, NULL, '2022-09-02 12:04:57', '2022-09-02 12:04:57'),
(16, 'Kit d\'amarrage de véhicule Sattrans (SAT-VDA)', 'Sattrans Vehicle Docking Kit (SAT-VDA)', 'Assure des services satellites fiables lors de vos déplacements, avec haut-parleur et microphone intégrés pour des communications mains libres faciles', 'Provides reliable satellite services on the go, with built-in speaker and microphone for easy hands-free communication', 3, NULL, '2022-09-02 12:06:08', '2022-09-02 12:06:08'),
(17, 'Écouteurs', 'Headphones', 'Utilisez le Thuraya XT-LITE en mode mains libres avec un écouteur en option.', 'Use the Thuraya XT-LITE in hands-free mode with an optional earpiece.', 4, '1671704696_Earphones.png', '2022-09-02 12:14:00', '2022-12-22 09:24:56'),
(18, 'Brochure sur les accessoires des combinés Thuraya', 'Thuraya Handset Accessories Brochure', 'Mettez à jour votre téléphone Thuraya avec les derniers accessoires. Consultez notre brochure.', 'Update your Thuraya phone with the latest accessories. Check out our brochure.', 4, '1671704995_Wired-Primary-handset.png', '2022-09-02 11:59:38', '2022-12-22 09:29:55'),
(19, 'Antenne de combiné externe', 'External handset antenna', 'Pour une meilleure réception du signal satellite lorsqu\'il est utilisé en déplacement (par exemple dans des bateaux ou des voitures) ou dans des zones à la limite de la couverture Thuraya. Connectez simplement le câble d\'antenne (5 m de long) au XT-LITE et placez l\'antenne à montage magnétique (indice IP66) dans une position avec une ligne de visée directe vers le satellite Thuraya.', 'For better satellite signal reception when used on the move (e.g. in boats or cars) or in areas at the edge of Thuraya coverage. Simply connect the antenna cable (5 m long) to the XT-LITE and place the magnetic mount antenna (IP66 rated) in a position with a direct line of sight to the Thuraya satellite.', 4, '1671704899_External - Antenna.png', '2022-09-02 12:01:38', '2022-12-22 09:28:19'),
(20, 'Répéteurs intérieurs', 'Indoor repeaters', 'Les répéteurs intérieurs utilisent une antenne intérieure pour transmettre les services par satellite Thuraya à l\'intérieur des bâtiments.', 'Indoor repeaters use an indoor antenna to transmit Thuraya satellite services inside buildings.', 4, '1671704937_Indoor-Repeaters.png', '2022-09-02 12:03:44', '2022-12-22 09:28:57'),
(21, 'Thuraya Aquapac', 'Thuraya Aquapac', 'Imperméabilisez votre combiné Thuraya avec un Aquapac submersible ! Protégez en toute sécurité votre téléphone Thuraya de l\'eau, de la poussière, de la saleté, de la neige, du sable, de l\'huile et de tout ce que vous pourriez rencontrer. Lire la suite', 'Waterproof your Thuraya handset with a submersible Aquapac! Safely protect your Thuraya phone from water, dust, dirt, snow, sand, oil and anything else you might encounter. Read more', 4, '1671704672_SpaceCom-Thuraya-antenna.png', '2022-09-02 12:18:08', '2022-12-22 09:24:32'),
(22, 'Chargeur de voyage de rechange (avec prises EU/UK/CHN/AUS)', 'Spare travel charger (with EU/UK/CHN/AUS plugs)', 'Le chargeur de voyage connecte votre téléphone à une prise secteur. Les prises interchangeables permettent de recharger dans la plupart des régions du monde.', 'The travel charger connects your phone to a power outlet. Interchangeable plugs allow for charging in most parts of the world.', 4, '1671704644_Travel - charger.png', '2022-09-02 12:19:56', '2022-12-22 09:24:04'),
(23, 'Chargeurs solaires', 'Solar Chargers', 'Un chargeur solaire peut être utilisé pour charger le XT-PRO DUAL, supprimant ainsi la nécessité d\'un accès à l\'électricité.', 'A solar charger can be used to charge the XT-PRO DUAL, removing the need for access to electricity.', 4, '1671704834_solar charger.png', '2022-09-01 16:30:08', '2022-12-22 09:27:14'),
(24, 'Chargeur de voiture', 'Car Charger', 'Un chargeur de voiture garantit que le X5-Touch n\'est jamais à court d\'énergie lorsque vous êtes en déplacement.', 'A car charger ensures that the X5-Touch is never out of power while you are on the move.', 4, '1671704809_Car-Charger.png', '2022-09-02 08:14:01', '2022-12-22 09:26:49'),
(25, 'Piles de rechange', 'Spare batteries', 'Une batterie supplémentaire sert de sauvegarde pour le X5-Touch et prolonge le temps d\'utilisation lorsque vous n\'avez pas accès à l\'électricité.', 'An additional battery serves as a backup for the X5-Touch and extends the usage time when you don\'t have access to electricity.', 4, '1671704581_spare - Battery.png', '2022-09-02 12:22:11', '2022-12-22 09:23:01'),
(26, 'Câbles de données USB de rechange', 'Spare USB data cables', 'Avec un câble de données USB, vous pouvez facilement mettre à jour le logiciel du X5-Touch lorsque de nouvelles versions logicielles sont publiées.', 'With a USB data cable, you can easily update the X5-Touch software when new software versions are released.', 4, '1671704442_Spare USB Data Cables.png', '2022-09-02 12:23:06', '2022-12-22 09:20:42'),
(27, 'AM-21A (V02)', 'AM-21A (V02)', NULL, NULL, 14, '1671712922_am_21a.png', '2022-12-22 11:42:02', '2022-12-22 11:42:02'),
(28, 'AM-51G', 'AM-51G', NULL, NULL, 14, '1671712979_AM-51G.png', '2022-12-22 11:42:59', '2022-12-22 11:42:59'),
(29, 'AM-52E', 'AM-52E', NULL, NULL, 14, '1671713025_am-51e.png', '2022-12-22 11:43:45', '2022-12-22 11:43:45'),
(30, 'AM-71B', 'AM-71B', NULL, NULL, 14, '1671713072_AM-71B_v2.png', '2022-12-22 11:44:32', '2022-12-22 11:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `thuraya_documents`
--

CREATE TABLE `thuraya_documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `video` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prod_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thuraya_documents`
--

INSERT INTO `thuraya_documents` (`id`, `video`, `titre`, `titre_en`, `document`, `document_en`, `prod_id`, `created_at`, `updated_at`) VALUES
(10, '4J1Tt1gmGZI', 'Quick Start Guide Model-2.1_May-2018_FR', 'Quick Start Guide Model-2.1_May-2018_EN', '1672851187_IsatPhone-2_Quick-Start-Guide_Model-2.1_May-2018_EN.pdf.coredownload.pdf', '1672851852_IsatPhone-2_Quick-Start-Guide_Model-2.1_May-2018_EN.pdf.coredownload.pdf', 15, '2023-01-04 15:53:07', '2023-01-04 16:04:12'),
(11, NULL, 'Comment mettre à jour votre IsatPhone Model-2.1_May-2018', 'How To Upgrade Your IsatPhone Model-2.1_May-2018', '1672852084_IsatPhone-2_How-To-Upgrade-Your-IsatPhone_Model-2.1_May-2018_FR.pdf.coredownload.pdf', '1672852084_IsatPhone-2_How-To-Upgrade-Your-IsatPhone_Model-2.1_May-2018_EN.pdf.coredownload.pdf', 15, '2023-01-04 15:58:24', '2023-01-04 16:08:04'),
(12, NULL, 'Comment synchroniser vos contacts Model-2.1_May-2018_FR', 'How To Synchronise Your Contacts Model-2.1_May-2018_EN', '1672852275_IsatPhone-2_How-To-Synchronise-Your-Contacts_Model-2.1_May-2018_FR.pdf.coredownload.pdf', '1672852275_IsatPhone-2_How-To-Synchronise-Your-Contacts_Model-2.1_May-2018_EN.pdf.coredownload.pdf', 15, '2023-01-04 16:11:15', '2023-01-04 16:11:15'),
(13, NULL, 'User Guide (Model 2.1) Sept 2020_FR', 'User Guide (Model 2.1) Sept 2020_EN', '1672852497_IsatPhone 2 User Guide (Model 2.1) Sept 2020_FR.pdf.coredownload.pdf', '1672852497_IsatPhone 2 User Guide (Model 2.1) Sept 2020_EN.pdf.coredownload.pdf', 15, '2023-01-04 16:14:58', '2023-01-04 16:14:58'),
(14, NULL, 'QuikStartGuide-June-2010-FR', 'QuikStartGuide-June-2010-EN', '1672908714_IsatPhone-Pro-QuikStartGuide-June-2010-FR.pdf.coredownload.pdf', '1672908716_IsatPhone-Pro-QuikStartGuide-June-2010-EN.pdf.coredownload.pdf', 13, '2023-01-05 07:51:57', '2023-01-05 07:51:57'),
(15, NULL, 'User Guide Oct_2011_FR', 'User Guide Oct_2011_EN', '1672908803_IsatPhone_Pro_UserGuide_Oct_2011_FR.pdf.coredownload.pdf', '1672908803_IsatPhone_Pro_UserGuide_Oct_2011_EN.pdf.coredownload.pdf', 13, '2023-01-05 07:53:23', '2023-01-05 07:53:23'),
(16, NULL, NULL, 'How to synchronise contacts EN', NULL, '1672908978_IsatPhone_Pro_How_to_synchronise_contacts_EN.pdf.coredownload.pdf', 13, '2023-01-05 07:56:18', '2023-01-05 07:56:18'),
(17, 'RjkNPvzCRKg', NULL, 'Brochure ENG  NOV14', NULL, '1672909337_BR_Iridium 9555_Brochure_ENG_NOV14.pdf', 11, '2023-01-05 08:02:18', '2023-01-05 08:02:18'),
(18, 'WShl9z0HjHo', 'Brochure FR JUL12', 'Brochure EN JUL12', '1672909600_BR_Iridium Extreme_Brochure_FR_JUL12(1).pdf', '1672909600_BR_Iridium Extreme_Brochure_ENG_JUN15(1).pdf', 12, '2023-01-05 08:06:40', '2023-01-05 08:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `type_comptes`
--

CREATE TABLE `type_comptes` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_comptes`
--

INSERT INTO `type_comptes` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'Technicien', '2022-05-06 12:29:16', '2022-05-06 12:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeCompte_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `typeCompte_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'fogangndie@gmail.com', '655795370', NULL, '$2y$10$tg4iXKB.HAS0Eb9bqNH20.9YIr76DJNxkxNhZm571UlIROEq7fFpq', 1, NULL, '2022-05-06 16:54:57', '2022-05-06 16:54:57'),
(2, 'Saconets client', 'saconetsclient@gmail.com', '655795370', NULL, '$2y$10$HaqgnpV2Pljo3.nBOWTvdeoYHEWgfXsivkNHI3K83mG8uKnO3WNKS', 1, NULL, '2022-08-11 09:12:48', '2022-08-11 09:12:48'),
(3, 'talla', 'talla@gmail.com', '655795370', NULL, '$2y$10$YFrQcdNwtaxEy6MGXRutj.WR/OzvUKgWAioPmUJX4GKOFDPGELGGy', 1, NULL, '2022-09-26 05:19:13', '2022-09-26 05:19:13'),
(4, 'Herman', 'kamdemherman9@gmail.com', '655702447', NULL, '$2y$10$KfeuP6gRLidsP2t4uvi1.eTmrLol3begZCJuJsGm3x1IkKeRkprfm', 1, NULL, '2023-05-06 15:46:28', '2023-05-06 15:46:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `arivages`
--
ALTER TABLE `arivages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `arivages_prod_id_foreign` (`prod_id`);

--
-- Indexes for table `candidatures`
--
ALTER TABLE `candidatures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidatures_emploi_id_foreign` (`emploi_id`);

--
-- Indexes for table `candidature_spontanees`
--
ALTER TABLE `candidature_spontanees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorie_shops`
--
ALTER TABLE `categorie_shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commendes`
--
ALTER TABLE `commendes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `commendes_payment_intent_id_unique` (`payment_intent_id`);

--
-- Indexes for table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emplois`
--
ALTER TABLE `emplois`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histoires`
--
ALTER TABLE `histoires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investisseurs`
--
ALTER TABLE `investisseurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marques`
--
ALTER TABLE `marques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marques_service_id_foreign` (`service_id`);

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
-- Indexes for table `nouses`
--
ALTER TABLE `nouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partenaires`
--
ALTER TABLE `partenaires`
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
-- Indexes for table `produit_turayas`
--
ALTER TABLE `produit_turayas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produit_turayas_cat_id_foreign` (`cat_id`),
  ADD KEY `sous_id` (`sous_id`);

--
-- Indexes for table `savs`
--
ALTER TABLE `savs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `securites`
--
ALTER TABLE `securites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shops_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sous_categories_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `techniciens`
--
ALTER TABLE `techniciens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telecoms`
--
ALTER TABLE `telecoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thuraya_accessoires`
--
ALTER TABLE `thuraya_accessoires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thuraya_accessoires_prod_id_foreign` (`prod_id`);

--
-- Indexes for table `thuraya_documents`
--
ALTER TABLE `thuraya_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thuraya_documents_prod_id_foreign` (`prod_id`);

--
-- Indexes for table `type_comptes`
--
ALTER TABLE `type_comptes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`,`phone`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `arivages`
--
ALTER TABLE `arivages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidatures`
--
ALTER TABLE `candidatures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `candidature_spontanees`
--
ALTER TABLE `candidature_spontanees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categorie_shops`
--
ALTER TABLE `categorie_shops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `commendes`
--
ALTER TABLE `commendes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `devis`
--
ALTER TABLE `devis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `emplois`
--
ALTER TABLE `emplois`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equipes`
--
ALTER TABLE `equipes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `histoires`
--
ALTER TABLE `histoires`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investisseurs`
--
ALTER TABLE `investisseurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marques`
--
ALTER TABLE `marques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nouses`
--
ALTER TABLE `nouses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produit_turayas`
--
ALTER TABLE `produit_turayas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `savs`
--
ALTER TABLE `savs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `securites`
--
ALTER TABLE `securites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sous_categories`
--
ALTER TABLE `sous_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `techniciens`
--
ALTER TABLE `techniciens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `telecoms`
--
ALTER TABLE `telecoms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `thuraya_accessoires`
--
ALTER TABLE `thuraya_accessoires`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `thuraya_documents`
--
ALTER TABLE `thuraya_documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `type_comptes`
--
ALTER TABLE `type_comptes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arivages`
--
ALTER TABLE `arivages`
  ADD CONSTRAINT `arivages_prod_id_foreign` FOREIGN KEY (`prod_id`) REFERENCES `shops` (`id`);

--
-- Constraints for table `candidatures`
--
ALTER TABLE `candidatures`
  ADD CONSTRAINT `candidatures_emploi_id_foreign` FOREIGN KEY (`emploi_id`) REFERENCES `emplois` (`id`);

--
-- Constraints for table `marques`
--
ALTER TABLE `marques`
  ADD CONSTRAINT `marques_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `telecoms` (`id`);

--
-- Constraints for table `produit_turayas`
--
ALTER TABLE `produit_turayas`
  ADD CONSTRAINT `produit_turayas_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categorie_shops` (`id`);

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categorie_shops` (`id`);

--
-- Constraints for table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD CONSTRAINT `sous_categories_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categorie_shops` (`id`);

--
-- Constraints for table `thuraya_accessoires`
--
ALTER TABLE `thuraya_accessoires`
  ADD CONSTRAINT `thuraya_accessoires_prod_id_foreign` FOREIGN KEY (`prod_id`) REFERENCES `produit_turayas` (`id`);

--
-- Constraints for table `thuraya_documents`
--
ALTER TABLE `thuraya_documents`
  ADD CONSTRAINT `thuraya_documents_prod_id_foreign` FOREIGN KEY (`prod_id`) REFERENCES `produit_turayas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
