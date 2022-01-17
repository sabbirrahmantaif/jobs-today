-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 10:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs_today`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'bFuES', NULL, NULL),
(2, 'It3Wh', NULL, NULL),
(3, 'sFxha', NULL, NULL),
(4, 'BDDQP', NULL, NULL),
(5, 'GgY6H', NULL, NULL),
(6, '0pdXF', NULL, NULL),
(7, '8a3AW', NULL, NULL),
(8, 'UUKd9', NULL, NULL),
(9, '2Jf8w', NULL, NULL),
(10, 'W7oCT', NULL, NULL),
(11, '8aWWY', NULL, NULL),
(12, '4rP3g', NULL, NULL),
(13, '8pQap', NULL, NULL),
(14, '15iSg', NULL, NULL),
(15, 'ikYgy', NULL, NULL),
(16, 'dKYUw', NULL, NULL),
(17, 'fhzFM', NULL, NULL),
(18, 'U0Ipw', NULL, NULL),
(19, '91VXH', NULL, NULL),
(20, 't7Giw', NULL, NULL),
(21, 'w9MYb', NULL, NULL),
(22, 'cMv04', NULL, NULL),
(23, 'LGIy6', NULL, NULL),
(24, 'I0wfo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `phone`, `category`, `location`, `title`, `password`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'BhFXr', 'Aq13u', 'IKgez', 'bFuES', 'aDR1m', 'dZI48', '123456', 'FWzc 4y1c1j 2MP 7Hw0 d0jV fdGh VbZO NQKA eAdX BuvR fUr0 trII OjMd 6qMd pCdl', NULL, NULL, NULL),
(2, 'LCnhL', 'lgBxo', 'eeLAm', 'It3Wh', 'Suxnh', '1FVCF', '123456', 'KQK2 5hBlku Xwu O5N4 e6Up loOV pPrJ y0SQ x6ZG UVrU bbff 8gEt WOfa MelG 897H', NULL, NULL, NULL),
(3, 'BnAuv', 'AnSi8', 'n03gv', 'sFxha', 'v9BwR', 'JlaiG', '123456', 'w6Th ZYqimp aGl 9zTP rMFh MqrQ I3uV fxKS Aer8 MUSE Lx7E fqLT lSeI czZi Lf9f', NULL, NULL, NULL),
(4, 'voSYg', 'q5J31', 'lE5YC', 'BDDQP', 'z5Kyi', 'WAsm8', '123456', '9p6l X8j7FZ eMD M23S GZaW yGjF Ddpn X612 Ddir wK26 fvBZ SfOp eyRf SsCX C95L', NULL, NULL, NULL),
(5, 'pk2C8', 'X44ED', 'NG354', 'GgY6H', 'LW0VC', '1bb2p', '123456', 'RESt aFZKDk xyM TPZA vGpa JUe1 GA2P WadA Kxje OvPd E0IX zL53 vXeq 7Jvo uS5D', NULL, NULL, NULL),
(6, 'eWusW', 'ijHfV', 'toQ1i', 'bFuES', 'aDR1m', 'dZI48', '123456', 'xBs0 89mpU4 ovB E12G swRX o52D 2pfh kq6b Pm5Z ApaO hDag QjmN mwKc s6Bk 8cqV', NULL, NULL, NULL),
(7, '11I1i', 'mSSdv', 'UkJHZ', 'It3Wh', 'Suxnh', '1FVCF', '123456', 'peWo SP9lJ2 qIz Szir m0pD ynI3 WCvj X2D9 hQTl 550q ypFX 6Am8 Keni fcU0 4ucN', NULL, NULL, NULL),
(8, 'SoCij', 'HYHOH', 'ByJGA', 'sFxha', 'v9BwR', 'JlaiG', '123456', 'aGNw oVSQQW 5jG wG06 zyFU FLtH jbRJ TCCl NppV A2Xb fhTd FwQI 9unR 8VY6 nfk8', NULL, NULL, NULL),
(9, 'hImLN', 'yzyjr', '8NvdI', 'BDDQP', 'z5Kyi', 'WAsm8', '123456', 'JJWx l9vMeq 1xA g18d JT21 UNwq V7W9 99E9 xMt1 dHan RZrF hOHc H7FG bOsu DC5K', NULL, NULL, NULL),
(10, 'Nk12Q', '2r9O3', 'FbeFq', 'GgY6H', 'LW0VC', '1bb2p', '123456', 'kSPY OmER0b dFh M9NQ Dhyx eVP9 XziU CAaH DiOr uPXZ cz7P lN8S vX2N ku0n hROg', NULL, NULL, NULL),
(11, 'tw8Vu', 'GA7NG', '94TuD', 'bFuES', 'aDR1m', 'dZI48', '123456', 'bHRo ju4HPy 3eV mSzK ec6e g1Jg P1Zy lOI7 FLT4 ANU5 Uodv JNqF gNSS yAXS S2K6', NULL, NULL, NULL),
(12, '2ZGsj', 'VHp3s', 'FlqoC', 'It3Wh', 'Suxnh', '1FVCF', '123456', 'eWGj qVrW0d EJT E36d MksA mHf7 1SHo pldz 3rhP QMDe Nakt 8unc d0oV ILib N5rI', NULL, NULL, NULL),
(13, 'S2X0S', 'W08Mq', 'KRIIr', 'sFxha', 'v9BwR', 'JlaiG', '123456', 'NZqZ TfVOKU xh5 2QaW 0b4L dwO7 FkoS 9bVY 6eC3 qkA8 eibk NNMn Yu6F yB7F aR6u', NULL, NULL, NULL),
(14, '6ZF4S', 'CWhHH', '6tNee', 'BDDQP', 'z5Kyi', 'WAsm8', '123456', 'fo9G 8mr1OF gr9 7bqG poHa AFDg w7Ar 2KHH wshZ 8G3a 6iKO ZVOz tatg pGUO DChJ', NULL, NULL, NULL),
(15, 'qKyKh', 'CiJqI', 'hnhdE', 'GgY6H', 'LW0VC', '1bb2p', '123456', 'YbEO 2cysNQ JT6 6o9V wiWM LwWv qLyy YseN I461 QIvn FblB kg4j a9mW XX8r zd9H', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `c_v_s`
--

CREATE TABLE `c_v_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `career_objective` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievements` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_proficiency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacancy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirements` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_benefits` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `position`, `company_id`, `location`, `title`, `category`, `vacancy`, `deadline`, `salary`, `description`, `nature`, `education`, `experience`, `requirements`, `other_benefits`, `created_at`, `updated_at`) VALUES
(1, 'wNoio', 1, 'aDR1m', 'dZI48', 'bFuES', 'P1Y', '12 march 2022', '58768', 'i4y7 0Ss4jI mj8 Txni RFl3 ntp8 ru4K ZakQ 0mAe W4yF BIPS hcQ7 HWiH ltql IRvT', 'Mtu2Fav', 'mP9N64auCpAEAxU', '6 years', 'VCalO5VvJCECY7sYGCYXztyTS5mrzZGLeyC39VES', 's9pd0epg53l5ttVorrV7', NULL, NULL),
(2, 'Am21x', 2, 'Suxnh', '1FVCF', 'It3Wh', 'I8c', '12 march 2022', '55322', 'Isko lTMKef JCa jiFm TKOa 95q4 UCSV QFCL GeBt Ojyg 33Bv P7Nr 3851 16N1 XaIn', 'ZLN3R46', 'MYDmrmZZ1MEonkp', '1 years', 'hWHUQJ4b8vxsDLUAqdOIF4xEJe8dyud3kL5FEfBz', 'vLhGTW7Cig838ZxdEQwT', NULL, NULL),
(3, 'IZW30', 3, 'v9BwR', 'JlaiG', 'sFxha', 'Fdo', '12 march 2022', '17670', 'V4NF VTbR0F DIO jtUg w2yW JzGU BlHz 1u6r kPCj FVLv Xfz7 4vFT Wifj efMz EDAg', 'wzYzNv6', 'iy25oB6Vlu8sCFB', '8 years', 'qAqIQ1xqYm3tEZbtaHyEED1ccPaQz1qJLNBcp00A', 'ZWuXkuVsQhcFQefaOZ6h', NULL, NULL),
(4, 'kuXWy', 4, 'z5Kyi', 'WAsm8', 'BDDQP', 'qns', '12 march 2022', '74167', 'ex3z OfjaMj JWN JXWp 23an frZb 6zSJ Pzck viME qXRQ 9fPk gdQj diRU vGMe vd1q', 'nxMT1rW', 'esWLi5ndcSPdxCF', '7 years', 'jsdGdg2FRQsfX7GLDuku3UxVKMIewTPV0wIZl1ik', 'zvMdng2plzTm6WryugQk', NULL, NULL),
(5, '6hjEA', 5, 'LW0VC', '1bb2p', 'GgY6H', 'uaM', '12 march 2022', '60571', '380M qQA6tq 5QP QaK3 43xg PsRz jwLD LpU6 bljc f6wS 4LKr 48ee U6ws 9Qlx Ziuq', 'IlISvb8', 'swHHtueSSKrYzjv', '5 years', 'AOvZb0CZZliabj8wOzAQtoDajAFaHbLzfTGoOYtE', 'dKBixlQbm2oaMLGqcGGA', NULL, NULL),
(6, 'oknvz', 1, 'aDR1m', 'dZI48', 'bFuES', 'hIV', '12 march 2022', '20460', 'QmfU CImq85 xJo g0aB rFdk 6V9j k4RU g3g1 EcQ7 XPqY RzSa Id6F Bibu xF3Q gWDl', 'Z5aZCwu', 'i57Mx9SA0bTZMHK', '7 years', 't8ZwqsVhgcJ65sER3VBcEqM2ynciesYP3ox5VYBq', '7jNDnoZcTTMGG4n11UmP', NULL, NULL),
(7, 'Rwtxu', 2, 'Suxnh', '1FVCF', 'It3Wh', 'Ba3', '12 march 2022', '16707', 'PkPd Q9GKyg zXz fnrd D4JJ o9LO yPSR qfYj 2oDP nJIH UBB8 97pc tnMZ dXfv Re6s', 'cD61zsQ', '9NB2grpuhB3roCS', '0 years', '3eekNSNmbmZX4bQPTcycAtpCCrXEfdGRLTZBll3V', 'sf4ikkUIdzIepOkC65hh', NULL, NULL),
(8, '3emzG', 3, 'v9BwR', 'JlaiG', 'sFxha', 'KfJ', '12 march 2022', '88185', '7OYW MLeryz Qw6 bwN2 nngH sFeb kNsS 3egm AVeP o6th sMlt U76G Zo3R jZYY nL3B', 'nvipl3T', 'gyLLXl7qUk34IFb', '5 years', 'jRXgdTXX7hqz3ZsxUsBazHh5vUCVrnPN4pe8TCwP', 'EzsCTzfCwJsNNQ5aNKkI', NULL, NULL),
(9, 'AOxN3', 4, 'z5Kyi', 'WAsm8', 'BDDQP', 'H1O', '12 march 2022', '23188', '7rnB iuVxDf 29l nNYq ma5L CS2A At7P rwqC kKHI jyFk 2B9A DEdJ YNAK kBXS zkYR', 'On21hzz', 'EXivFTHiY8GTOaz', '7 years', 'fdzmTjVnbnfATzS54DUykjTY2MoYRGCYlUNJ1ATK', 'yzntiyzJ1DnyVQZjwmiW', NULL, NULL),
(10, '1O8Hl', 5, 'LW0VC', '1bb2p', 'GgY6H', 'UzZ', '12 march 2022', '67035', 'QbW1 gmLGvt 7n8 t8Hx OHAn 6lFA hpSo HKsU NH2k 7PRd yx4A QtOl VvP8 kT2X Cnd1', 'nqFF8ln', 'kS78MXgMRVtqL4p', '9 years', 'Xg1Lsz9iD3vfzHHUis5ddQ6EiOqy8L4Z6aOvJPUf', '7qxPI0VEWT4yj5ccbThE', NULL, NULL),
(11, 'TXSIz', 1, 'aDR1m', 'dZI48', 'bFuES', '1l9', '12 march 2022', '89707', 'n2mb soCYfq zqL 3N12 Cgv9 4gxN 3l9j bKjz I56y HtqO 6945 wdK0 Yb0M EZ56 HH6C', 'jcSxuK2', 'f2lTLdUc20qK9DY', '0 years', 'bh8cf2zCrcQIyKEDC88TaPW57jh0CVdta94FYviS', 'BaNw9mrgc46k7PhS8XHn', NULL, NULL),
(12, 'Io4g7', 2, 'Suxnh', '1FVCF', 'It3Wh', 'iji', '12 march 2022', '44070', 'AjeH vC0Olr BVL M9uf hNzj OXrp 3Bls xJv2 nZwM 1rb0 zVrs 1dgE J9PW Q8ls 39TU', 'Iqz1iAx', 'I1vqViUZMcgGPmX', '2 years', 'Xv1bLrQBgDWM7JAIqH98QivhlLg6AR3TJXn2fMMH', 'fg4SYk1RikTOyZ4YVp98', NULL, NULL),
(13, 'cj42j', 3, 'v9BwR', 'JlaiG', 'sFxha', 'FhY', '12 march 2022', '88055', 'Hx7h gb7z02 nHc B7Hm 6zzt P737 K9F2 4qGO 4dVG WJ5q KPHb pMdF 5h3U TGPV bpuD', '9tOxvol', '6eLls7vWb5DWWuY', '1 years', 'E9TYlRPhArUa125fIydQattyOyhZW8tuzHjfAB4r', 'XDUhRJrcRc4z2Ugr7xBc', NULL, NULL),
(14, 'fSWm4', 4, 'z5Kyi', 'WAsm8', 'BDDQP', 'DIZ', '12 march 2022', '40928', 'A2Ef laAaVa tvM 1ybf wvWc wrtS zVA4 uHGB WXE8 Zame M1Hu PmOR rlMU bbSo pxrY', 'B5IJArL', 'MkExOhTTptM1OLv', '3 years', 'ohEMsTfg6TlJMUNJ5rs99Tqbzs4t7DwX4VhrY8Mu', 'gl7c0o1r30FCB1wRRY5J', NULL, NULL),
(15, 'd4wcM', 5, 'LW0VC', '1bb2p', 'GgY6H', '1Sq', '12 march 2022', '35525', 'etOr 87Kq9X NAn q5VJ vC7p sh4p 4tRI cQrl SIhz 3hvW 1iCg eERn qEWF iK2s m5Fc', 'npxibiP', '2pNfntecWFUJE3i', '7 years', 'mckztLfK9REYMNtleDiwLp8POnp9jM3dEiFyjQYK', 'XDS25D4KDh2aS3xjeARL', NULL, NULL),
(16, 'FYTiH', 1, 'aDR1m', 'dZI48', 'bFuES', '1Q2', '12 march 2022', '39621', 'au7b HYhH2F Kpk hGQy 1qod MhUZ 7e1j FQXY ber8 jDyz eZAY x2Z7 BSLR ziRg AmJh', 'OCwh5iE', 'CSGWWmubf6gnKQ2', '7 years', 'Bt8bGU2xQeRqiJXCvJCXRqqSkjT2HomwMel68kD7', '8s6MNg15oBp3qI5rmqI1', NULL, NULL),
(17, 'y8awZ', 2, 'Suxnh', '1FVCF', 'It3Wh', 'g5W', '12 march 2022', '14931', '1MnY QDPFTf K6f 77sC 5Bq1 a2ML DPil ts3d VDdZ Jnyt 1oYe VAoi SIxn ydkC LkWu', 'vyDiSPG', 'ilvvGmKzbGJNM6K', '6 years', 'BfINnxL3RBDpClICGhWU5PxTofEwVfMrwbsH40tC', 'YjiUecZmrpYXqXN5fzhh', NULL, NULL),
(18, 'EhKKr', 3, 'v9BwR', 'JlaiG', 'sFxha', 'kIT', '12 march 2022', '85261', '7pCc fJK1T5 CYD vX0b WIAM 2K4Z qg58 Qm3c Acl6 dywN kwBG WGTw 1eC1 68QI HlJh', 'piFOQZh', 'wEmZH9TonhOvZHe', '1 years', 'sRFNMZzEVerVoQljvt8NtYNkRkrQft0rJJcleQ2v', 'xH8YWU7mBoBHeaPR8BlD', NULL, NULL),
(19, 'IuP10', 4, 'z5Kyi', 'WAsm8', 'BDDQP', 'lSY', '12 march 2022', '72914', 'VYC5 wCutHI xmp 1zMm eVvY yK2Z Mw2W ZeLm oF2e Atc8 ZtZ6 5lHt 2pLt B1SV f5mG', 'fKelzov', 'D76BAfzUkqZexRJ', '7 years', 'Tbsaj5uEdD7wD2tYapydRjPZLTRddgT7anRzMXqb', 'uLdCteAo0NmZxPHqIoGr', NULL, NULL),
(20, '9dVgK', 5, 'LW0VC', '1bb2p', 'GgY6H', 'vba', '12 march 2022', '90134', 'i83I SAzMhA g21 W8Nn esg5 0qXu ySK1 1Mgw Pveb 5zDQ MBa6 r51L MdLn j6dS 9bkb', 'xECsrsx', 'T6zCKJ0iw1WBN2h', '5 years', 'zoIdZOXIXktbWnDqcxBbDykjwHRI2fos29J9cbzC', 'SjZYnGM4fJR491j1BIsr', NULL, NULL),
(21, 'lsbyN', 1, 'aDR1m', 'dZI48', 'bFuES', 'jdY', '12 march 2022', '77943', '0lnq TnvO6E N0H uZWo vT0i zx8J d4Lz d1jh X2hw AGeh awhJ pc6P 54jb JDRF ZiBy', 'RBlZEXq', 'ICLuhnNEWLNFOXF', '4 years', 'FbzZeW75SZqUSPO0DyuuiXA0f2jhOr5EiIenIUao', 'NoqClhAhahESDFXaUZOd', NULL, NULL),
(22, 'aia0V', 2, 'Suxnh', '1FVCF', 'It3Wh', 'xVc', '12 march 2022', '93036', 'J0NZ GfFCYD WUa tVNR LjuN ndWJ XONF Nlx3 STAS OPPP MqYt bQkG Hk8H NoMR 9QAV', '2czILog', 'qAm2yFKDzNoLGD4', '7 years', 'EajnMpfTghnD4ED8etRVRgD4Z9BsZhehUchJcZZQ', 'yOiLwfYiFqUJR0KN3gGo', NULL, NULL),
(23, 'MM52a', 3, 'v9BwR', 'JlaiG', 'sFxha', 'Dcn', '12 march 2022', '56801', '57Ob Zx3Xl6 L1w kSRh zKDV kYeY 6Rkd rBeh SAKC 1W0W meDi SjAx sdn2 W6gN pJXA', 'JONiO1Q', 'JEbgvOI7gkQX2Nx', '9 years', 'cmNy51eYApPKsn1oxRVWzTTI2bW7FzdBsBYww2yr', 'p9hH2y0KxrDjde8k1PDa', NULL, NULL),
(24, 'yJsqP', 4, 'z5Kyi', 'WAsm8', 'BDDQP', 'b25', '12 march 2022', '15685', 'NpeD X3RuwX slk VKBJ FMXv Ea0c eCB6 F4OU Ju18 giMj GyLp e7Jg XSYk gbpS VOaU', 'QJMYNxB', 'wBHEsyPuLLjSGzi', '9 years', '31VY39LShsNhg27pGDqWzqjMuymzNkpgiBkN46lM', 'BE95VlpJf0aixBFS03AC', NULL, NULL),
(25, 'Wd0Ud', 5, 'LW0VC', '1bb2p', 'GgY6H', 'Sx8', '12 march 2022', '64693', 'D2kX u4aubn xeV Q9SV ygoX V2Md MCtk Q7BA vSLQ 0D0y QP48 eYJq fvEA oXHf ErAH', '5LknWlq', '9BQwXamxxhNinAp', '8 years', 'vWWujhoq9fp0Zqiy9EQiT2xHicpbtohgw3stWxkz', '6wpTecuYys48AUYV0Djn', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location`, `created_at`, `updated_at`) VALUES
(1, 'aDR1m', NULL, NULL),
(2, 'Suxnh', NULL, NULL),
(3, 'v9BwR', NULL, NULL),
(4, 'z5Kyi', NULL, NULL),
(5, 'LW0VC', NULL, NULL),
(6, 'yEKzn', NULL, NULL),
(7, 'bD0MU', NULL, NULL),
(8, 'uPPqP', NULL, NULL),
(9, 'weEuE', NULL, NULL),
(10, '3V5ho', NULL, NULL),
(11, 'xYAwz', NULL, NULL),
(12, '9aq4p', NULL, NULL),
(13, 'OOFTE', NULL, NULL),
(14, 'gfyxc', NULL, NULL),
(15, 'SkJBU', NULL, NULL);

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
(5, '2022_01_16_025320_create_categories_table', 1),
(6, '2022_01_16_025603_create_quizzes_table', 1),
(7, '2022_01_16_052120_create_locations_table', 1),
(8, '2022_01_16_052155_create_titles_table', 1),
(9, '2022_01_16_053835_create_companies_table', 1),
(10, '2022_01_16_063847_create_jobs_table', 1),
(11, '2022_01_16_064650_create_c_v_s_table', 1);

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
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correct_answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'dZI48', NULL, NULL),
(2, '1FVCF', NULL, NULL),
(3, 'JlaiG', NULL, NULL),
(4, 'WAsm8', NULL, NULL),
(5, '1bb2p', NULL, NULL),
(6, 'aHhlw', NULL, NULL),
(7, 'fDIiO', NULL, NULL),
(8, 'R2RKG', NULL, NULL),
(9, 'NwSo5', NULL, NULL),
(10, 'uroo4', NULL, NULL),
(11, 'DVfet', NULL, NULL),
(12, 'cHOzq', NULL, NULL),
(13, 'nCpz0', NULL, NULL),
(14, 'OCpDo', NULL, NULL),
(15, 'E7574', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_v_s`
--
ALTER TABLE `c_v_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_v_s_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_company_id_foreign` (`company_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_category_id_foreign` (`category_id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `c_v_s`
--
ALTER TABLE `c_v_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `c_v_s`
--
ALTER TABLE `c_v_s`
  ADD CONSTRAINT `c_v_s_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
