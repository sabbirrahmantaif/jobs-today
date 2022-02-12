-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 09:11 PM
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
(1, 'omnis ut aut', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(2, 'aliquid facere consequatur', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(3, 'est laboriosam quia', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(4, 'voluptatem impedit rem', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(5, 'officiis qui iusto', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(6, 'accusantium esse voluptas', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(7, 'est voluptatum quia', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(8, 'impedit qui libero', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(9, 'et quis dolorem', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(10, 'molestiae nulla consequuntur', '2022-02-12 14:10:26', '2022-02-12 14:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `phone`, `location`, `password`, `description`, `image`, `approved`, `created_at`, `updated_at`) VALUES
(1, 'Yasmin Kuhlman', 'lreilly@abernathy.com', '+1 (703) 889-6901', '3581 Arch Lock', 'password', 'Lb1qLDtxJ5QR5Bg8Ywtx0u3MqVUPla2QShzQZdy5uClqDQKbMzoMlKZDZ6EUEI9U5JllnwApO1uosos2', 'C:\\Users\\user\\AppData\\Local\\Temp\\d440a16825f6eee6e1fc6c0e1ef61ee9.png', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(2, 'Constantin Mertz', 'jewel20@gmail.com', '1-210-251-7235', '41874 Retta Pass Apt. 907', 'password', '7wKFfQHJ2G2cwKnd4RZEsH0ebHs4KSQiZyFJchomk1wUlvE2JBDOUTpUGIBfpczxYJPyywf3Ohlgvxao', 'C:\\Users\\user\\AppData\\Local\\Temp\\2b164375fb479af7797eea3066f51859.png', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(3, 'Spencer Frami', 'lind.agnes@gmail.com', '779-830-5325', '4445 Mckenzie Corner', 'password', 'idGZ5gIaQpd0VO2lKLBtKfXkrSOkgc0ALXFhED5CTOIOWgygRQfV21lLC0r3tXsJIKudQFM7JJawF69V', 'C:\\Users\\user\\AppData\\Local\\Temp\\c95a097e69134da304c5e8663759f5bc.png', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(4, 'Mia Heidenreich', 'annalise.frami@gmail.com', '1-520-526-0354', '49186 Brian Valley Apt. 194', 'password', 'X2kHW1gtGMUB3Zi0ojZ11J01Vjb03rdu7lAbAAn04421VfSU9r1OM9XbRq4vxYEd9MH2M9a83w0vwbKS', 'C:\\Users\\user\\AppData\\Local\\Temp\\d527f713233f2db55b8dfd063028463a.png', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(5, 'Alivia Zulauf IV', 'hammes.alia@auer.net', '689.224.8816', '935 Denesik Pines Suite 597', 'password', 'Qjq5JaadTYAhBpwTWfp50YqpRSBNcmxVLKOPgCSzSGDNzfBCMgvhZV5AmMz6UMxcgw1ssgG3FOb7bOu9', 'C:\\Users\\user\\AppData\\Local\\Temp\\a8dc221c9c3fce4b69012de956eeb102.png', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26');

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
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `title_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacancy` int(11) DEFAULT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirements` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_benefits` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_id`, `title_id`, `category_id`, `position`, `vacancy`, `deadline`, `salary`, `description`, `nature`, `education`, `experience`, `requirements`, `other_benefits`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 2, 1, 'Cartoonist', 8, '19-10-1981', '59546', 'I am I was going messages for a star-fish,\' thought Alice. \'I\'m getting so thin--and the Knave of.', 'I!\' he could keep.', 'Alice to.', '4 years', 'What WILL become.', 'Mock Turtle. \'Hold your.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(2, 1, 9, 2, 'Engineering', 5, '05-04-2025', '59802', 'Pat! Where CAN I was, or two, it was in the words: \'Where\'s the day; and Pepper For a conversation.', 'Cat, \'or I\'ll set.', 'She went.', '4 years', 'Alice\'s shoulder.', 'I vote the judge,\' she.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(3, 2, 2, 3, 'Art Director', 11, '25-09-2001', '75724', 'I can\'t help it,\' said the King, \'that they WOULD not escape again, and behind her. \'Collar that.', 'CAN have baked me.', 'Dormouse.', '6 years', 'Alice, \'as I don\'t.', 'Dormouse\'s place, with.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(4, 4, 4, 8, 'Aerospace Engineer', 6, '20-03-1992', '99856', 'Some of very queer things are they set to sell you join the smallest idea to get in?\' she should.', 'Yet you don\'t want.', 'Latitude.', '1 years', 'They were saying.\'.', 'THIS witness.\' And then.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(5, 4, 7, 5, 'Mail Machine Operator', 10, '26-11-1992', '83134', 'IS that Dormouse fell upon her or later. However, this time she had not do either!\' And the.', 'Paris is to-day!.', 'I do you.', '3 years', 'The Antipathies, I.', 'Gryphon. \'Of course it.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(6, 3, 5, 2, 'Horticultural Worker', 1, '18-06-1988', '45016', 'Gryphon. \'How fond of a long since her feet, to herself, \'I do,\' Alice again. \'I kept tossing her.', 'Hatter: and passed.', 'I\'ll set.', '6 years', 'I say it is very.', 'I\'m pleased, and went.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(7, 2, 6, 5, 'Counseling Psychologist', 14, '27-03-2008', '98469', 'Dinah my way of what they\'re called out the mouse to say pig, my tea and read fairy-tales, I.', 'English coast you.', 'Fainting.', '4 years', 'These were getting.', 'Alice, \'as the top of.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(8, 3, 9, 8, 'Psychologist', 7, '14-11-2008', '50756', 'Alice: \'--where\'s the door of the croquet-ground. The poor Alice, that squeaked. This time at the.', 'SOMEBODY ought to.', 'Cat: now.', '1 years', 'I don\'t know the.', 'Alice. \'Then it would.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(9, 3, 5, 3, 'Foreign Language Teacher', 1, '23-02-2004', '68318', 'And will you had to the rattle of green leaves that day. \'No, please your tongue, Ma!\' said Alice.', 'There was rather.', 'King was.', '1 years', 'NOT a hint to sit.', 'I am I? Ah, THAT\'S the.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(10, 3, 10, 2, 'Cabinetmaker', 8, '01-09-1990', '90074', 'I ever was! Good-bye, feet!\' (for when he kept doubling itself up and all for any direction, like.', 'She soon the well.', 'So Alice.', '4 years', 'I wish I was more.', 'Alice, (she couldn\'t.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(11, 5, 1, 9, 'Social Work Teacher', 7, '26-02-2007', '16262', 'The chief difficulty was, how funny it\'ll fetch it was as much overcome to Alice, who seemed to.', 'I\'m not even get.', 'And with.', '7 years', 'As soon made out.', 'Alice said the world.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(12, 3, 6, 7, 'Set and Exhibit Designer', 2, '19-05-2024', '40483', 'II. The poor little golden key, and the Dormouse into the Queen, tossing her to the day; and the.', 'I should it?\' said.', 'I shan\'t.', '5 years', 'Mock Turtle: \'why.', 'But the common way. \'I.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(13, 2, 6, 7, 'Mathematician', 6, '06-02-1999', '79079', 'Alice! when she went on each time Alice had become of rock, and, when you drink something out of.', 'Dormouse is it?\'.', 'She said.', '7 years', 'Yet you know, this.', 'But I\'d hardly room for.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(14, 1, 10, 8, 'Religious Worker', 8, '13-04-2003', '47023', 'I then? Tell us a mouse, come over at it further. So they had accidentally upset the Hatter was.', 'There was no doubt.', 'Alice in.', '5 years', 'Then she still it.', 'Rabbit just in a pun!\'.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(15, 1, 5, 8, 'Pump Operators', 14, '22-11-2008', '13911', 'Majesty,\' the top of sleep these came THE SLUGGARD,\"\' said the Caterpillar decidedly, and mustard.', 'I shall only took.', 'Cat. \'Do.', '9 years', 'FATHER WILLIAM,\'.', 'The Mouse was sitting.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(16, 3, 3, 7, 'Gaming Surveillance Officer', 4, '08-07-2023', '53839', 'The great emphasis, looking over the mushroom in bringing these three of Hearts, he was bristling.', 'I\'m quite hungry.', 'She said.', '7 years', 'Alice watched the.', 'ME,\' said Alice. \'Why?\'.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(17, 3, 10, 1, 'Manufacturing Sales Representative', 14, '21-11-1990', '82932', 'Mock Turtle is.\' \'It\'s a race-course, in a trial, dear Dinah! I don\'t be no mark; but I was over.', 'But do let Dinah.', 'Said his.', '8 years', 'Alice was walking.', 'She stretched herself.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(18, 3, 8, 8, 'Materials Scientist', 2, '18-07-2009', '69489', 'King, going back to find herself \'Now at the Cat. \'--so you weren\'t to drop the Mock Turtle; \'but.', 'Oh, my hair.\" As.', 'YOU like.', '3 years', 'I hate cats always.', 'You see her. There was.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(19, 2, 1, 7, 'Trainer', 15, '24-04-1994', '69626', 'I know whether you\'re wondering how she had begun to be angry about her, still just now run back.', 'Bill had made. \'He.', 'They all.', '7 years', 'Dormouse again as.', 'Conqueror, whose cause.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(20, 5, 3, 1, 'Manicurists', 9, '05-05-2001', '86982', 'Mouse\'s tail; \'but little glass table. \'Have some sense in a sea as it say to speak again. \'You.', 'No accounting for.', 'King was.', '1 years', 'Just as \"I passed.', 'I wish they gave to see.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(21, 4, 4, 6, 'Elementary and Secondary School Administrators', 1, '06-07-1972', '93321', 'Alice in a good reason, and she ought to play with its eyes: then Alice, the same, the use of.', 'I suppose it quite.', 'Don\'t go.', '4 years', 'But here, I THINK.', 'King was in asking such.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(22, 2, 10, 7, 'Home', 8, '01-01-1994', '51355', 'Turtle.\' These words did you must be getting up by this fit) An enormous puppy made her after all.', 'Mock Turtle: \'nine.', 'I\'m sure.', '5 years', 'Queen, in a game.', 'Alice, and say \"Who am.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(23, 3, 3, 10, 'Security Systems Installer OR Fire Alarm Systems Installer', 9, '10-04-1977', '47885', 'Ugh, Serpent!\' \'But I\'m somebody else\"--but, oh dear!\' cried Alice tried every moment that she is.', 'I only bowed low.', 'Dormouse.', '1 years', 'Because he spoke.', 'I\'m never before she.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(24, 1, 6, 9, 'Brattice Builder', 8, '29-08-1985', '14840', 'Miss, this moment, \'My dear! I don\'t think--\' (she was the spot.\' This speech caused some attempts.', 'Puss,\' she spoke.', 'And then.', '6 years', 'Allow me by this.', 'Elsie, Lacie, and the.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(25, 4, 3, 6, 'Heaters', 7, '24-10-2013', '70143', 'King put everything within her and days.\' \'But it\'s coming to, and, taking not come once crowded.', 'I can find another.', 'Run home.', '9 years', 'WOULD not feeling.', 'IS his head down, and.', 0, '2022-02-12 14:10:26', '2022-02-12 14:10:26');

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
(7, '2022_01_16_052155_create_titles_table', 1),
(8, '2022_01_16_053835_create_companies_table', 1),
(9, '2022_01_16_063847_create_jobs_table', 1),
(10, '2022_01_16_064650_create_c_v_s_table', 1);

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

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `category_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`, `created_at`, `updated_at`) VALUES
(1, 10, 'Impedit ullam nemo.', 'magni rem magni', 'officia aliquam aperiam', 'voluptas suscipit quis', 'cupiditate fugiat enim', 'option4', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(2, 3, 'Dolore nisi autem suscipit.', 'similique et et', 'iusto neque eius', 'hic totam libero', 'non quis placeat', 'option3', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(3, 7, 'Molestiae voluptas qui eos.', 'voluptatem officia velit', 'ad soluta est', 'placeat distinctio totam', 'nisi in et', 'option4', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(4, 1, 'Aspernatur a aut.', 'incidunt alias maiores', 'aut aut delectus', 'quia temporibus quam', 'qui dolor esse', 'option4', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(5, 7, 'Quaerat laboriosam aut eaque magni.', 'iusto et est', 'dicta et est', 'saepe eaque sint', 'pariatur beatae aut', 'option1', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(6, 7, 'Ea vel ullam praesentium.', 'et possimus et', 'dicta cum ratione', 'quas iusto assumenda', 'perspiciatis saepe voluptatum', 'option2', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(7, 5, 'Atque velit eaque voluptas consequatur.', 'doloribus qui similique', 'animi dignissimos cupiditate', 'ratione ea sint', 'perspiciatis ut consectetur', 'option3', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(8, 5, 'Nihil illum voluptatem itaque.', 'sit aut velit', 'voluptas asperiores est', 'nobis rerum consequatur', 'ipsa labore aut', 'option2', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(9, 4, 'Enim quod suscipit.', 'accusamus nesciunt reprehenderit', 'placeat pariatur beatae', 'facilis ipsum odio', 'dignissimos eveniet aliquid', 'option3', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(10, 7, 'Voluptates rerum qui quis rem modi.', 'animi nihil voluptatem', 'deserunt rerum quia', 'velit praesentium enim', 'magnam dolor enim', 'option2', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(11, 5, 'Consequatur sequi blanditiis.', 'temporibus molestiae quibusdam', 'nemo et velit', 'qui consequatur et', 'et incidunt ducimus', 'option3', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(12, 5, 'Quibusdam laudantium voluptatem nihil.', 'aut asperiores cum', 'omnis quis natus', 'magnam aut in', 'sed illo sit', 'option3', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(13, 3, 'Sint et fugit alias voluptatem veniam.', 'et sapiente aliquid', 'voluptatem dolorum nesciunt', 'eaque neque nostrum', 'perferendis numquam assumenda', 'option2', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(14, 6, 'Consequatur qui ad.', 'occaecati delectus harum', 'omnis sint ut', 'cupiditate labore unde', 'autem sit corporis', 'option1', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(15, 8, 'Quia ea voluptatem commodi.', 'iste odio dicta', 'commodi sapiente perferendis', 'blanditiis nesciunt quia', 'illum cum consequuntur', 'option2', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(16, 2, 'Repellat magnam illum.', 'in placeat voluptas', 'ut possimus non', 'laboriosam temporibus fugiat', 'aut et sint', 'option2', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(17, 4, 'Deserunt magni et eum.', 'ut perferendis dolorum', 'eos cupiditate quaerat', 'enim labore rem', 'quaerat sed consectetur', 'option2', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(18, 8, 'Repellendus qui similique eveniet.', 'est vero harum', 'expedita et et', 'laboriosam accusantium voluptatum', 'vel occaecati aut', 'option3', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(19, 2, 'Sed eius provident id et.', 'sit occaecati et', 'sapiente debitis minima', 'modi nam earum', 'dolorem consequuntur dolorem', 'option2', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(20, 6, 'Quisquam praesentium quae perferendis.', 'blanditiis accusamus excepturi', 'qui ipsam illum', 'est facere culpa', 'occaecati nam blanditiis', 'option2', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(21, 5, 'Quia praesentium nesciunt quo.', 'consequuntur reiciendis libero', 'velit iure sit', 'perspiciatis et tempora', 'quia impedit quasi', 'option2', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(22, 2, 'Quo exercitationem similique et.', 'ipsum consequatur voluptatem', 'aut iste vel', 'iure qui natus', 'ullam eligendi adipisci', 'option2', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(23, 6, 'Eos facere ut quo illo quia.', 'in sed deserunt', 'consequatur minima possimus', 'at aut praesentium', 'non aut et', 'option2', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(24, 10, 'Unde aliquid fugit perspiciatis.', 'id aperiam nobis', 'quibusdam facilis occaecati', 'ut odio maiores', 'voluptas in ut', 'option4', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(25, 6, 'Nihil deleniti quae est nostrum eum.', 'aut harum inventore', 'tempora dicta facilis', 'cum voluptas corrupti', 'non dolores officiis', 'option4', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(26, 7, 'Recusandae officiis in aliquid.', 'possimus suscipit minima', 'labore omnis ratione', 'sunt esse nesciunt', 'cumque nobis tempore', 'option4', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(27, 8, 'Temporibus voluptas et aperiam rerum eveniet.', 'autem dolor eum', 'aspernatur dolores laudantium', 'consequuntur nihil eveniet', 'ut optio est', 'option2', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(28, 1, 'Maiores cumque aut.', 'nihil numquam sint', 'provident minima unde', 'culpa distinctio temporibus', 'enim tempora sit', 'option3', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(29, 5, 'Non nulla tenetur dolores non.', 'veniam nulla fugiat', 'ipsa provident aspernatur', 'quo ut temporibus', 'atque autem fuga', 'option1', '2022-02-12 14:10:27', '2022-02-12 14:10:27'),
(30, 1, 'Omnis culpa ipsum id.', 'minus recusandae pariatur', 'quaerat reprehenderit quis', 'dolorem nihil nihil', 'magnam cum voluptatem', 'option3', '2022-02-12 14:10:27', '2022-02-12 14:10:27');

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
(1, 'Natus ipsum ut.', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(2, 'Est culpa.', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(3, 'Quo doloribus ab.', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(4, 'Ea praesentium.', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(5, 'Modi quaerat eum.', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(6, 'Libero hic autem.', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(7, 'Nulla beatae.', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(8, 'Voluptates maiores.', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(9, 'Beatae consequatur pariatur.', '2022-02-12 14:10:26', '2022-02-12 14:10:26'),
(10, 'Sed et.', '2022-02-12 14:10:26', '2022-02-12 14:10:26');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `birth_date`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sunny Cole', 'randi.koss@example.net', '+1-727-624-1679', '2017-01-18 02:53:42', 'https://via.placeholder.com/640x480.png/0099ff?text=itaque', '2022-02-12 14:10:24', 'password', 'xwXZoRpu2o', '2022-02-12 14:10:24', '2022-02-12 14:10:24'),
(2, 'Jalon Zboncak PhD', 'bonita.dickens@example.com', '1-520-729-7591', '1998-06-03 10:16:29', 'https://via.placeholder.com/640x480.png/0044dd?text=consequatur', '2022-02-12 14:10:24', 'password', 'WBCTrXflOc', '2022-02-12 14:10:24', '2022-02-12 14:10:24'),
(3, 'Blaze Goyette IV', 'ywiegand@example.net', '+1 (820) 314-9609', '2020-12-27 09:13:36', 'https://via.placeholder.com/640x480.png/003300?text=ipsam', '2022-02-12 14:10:24', 'password', 'TvL50h9jnX', '2022-02-12 14:10:24', '2022-02-12 14:10:24'),
(4, 'Leonard Larson', 'trantow.alvena@example.net', '+1.458.508.3191', '2003-10-28 15:04:29', 'https://via.placeholder.com/640x480.png/00ccdd?text=maiores', '2022-02-12 14:10:24', 'password', 'xHGtfT1ZMR', '2022-02-12 14:10:24', '2022-02-12 14:10:24'),
(5, 'Daniella Olson III', 'wmclaughlin@example.net', '(503) 310-7170', '2015-01-03 03:27:26', 'https://via.placeholder.com/640x480.png/006600?text=aspernatur', '2022-02-12 14:10:24', 'password', 'nUvj5ZbERR', '2022-02-12 14:10:24', '2022-02-12 14:10:24'),
(6, 'Hollie Jast', 'daryl67@example.com', '+1-332-502-2304', '2020-03-13 13:29:14', 'https://via.placeholder.com/640x480.png/004488?text=consequatur', '2022-02-12 14:10:24', 'password', 'nKjm4nh25M', '2022-02-12 14:10:24', '2022-02-12 14:10:24'),
(7, 'Miss Johanna Boyer', 'jones.margarete@example.com', '+19019243285', '2002-03-07 22:25:14', 'https://via.placeholder.com/640x480.png/002233?text=culpa', '2022-02-12 14:10:24', 'password', '9oJh6I1NI3', '2022-02-12 14:10:24', '2022-02-12 14:10:24'),
(8, 'Lawson Altenwerth I', 'ambrose.lehner@example.net', '1-551-920-3794', '2017-11-30 14:56:40', 'https://via.placeholder.com/640x480.png/001177?text=nihil', '2022-02-12 14:10:24', 'password', 'lA8lWW1lL6', '2022-02-12 14:10:24', '2022-02-12 14:10:24'),
(9, 'Jessica Blick', 'yazmin76@example.org', '(870) 610-1995', '1998-10-17 07:27:28', 'https://via.placeholder.com/640x480.png/0055aa?text=perferendis', '2022-02-12 14:10:24', 'password', 'LIoQB3f6fU', '2022-02-12 14:10:24', '2022-02-12 14:10:24'),
(10, 'Maria Funk', 'stark.icie@example.com', '(830) 251-2150', '2003-07-11 11:58:19', 'https://via.placeholder.com/640x480.png/009922?text=ut', '2022-02-12 14:10:24', 'password', 'KuixuRt31y', '2022-02-12 14:10:24', '2022-02-12 14:10:24');

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
  ADD KEY `jobs_company_id_foreign` (`company_id`),
  ADD KEY `jobs_title_id_foreign` (`title_id`),
  ADD KEY `jobs_category_id_foreign` (`category_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `c_v_s`
--
ALTER TABLE `c_v_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `jobs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_title_id_foreign` FOREIGN KEY (`title_id`) REFERENCES `titles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
