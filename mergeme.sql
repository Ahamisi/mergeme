-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 03:54 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mergeme`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_applicants`
--

CREATE TABLE `job_applicants` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `job_owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applicants`
--

INSERT INTO `job_applicants` (`id`, `job_id`, `applicant_id`, `job_owner`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', '2019-12-14 18:21:38', '2019-12-14 18:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

CREATE TABLE `job_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `posted_by_id` int(11) NOT NULL,
  `job_type_id` int(11) NOT NULL,
  `job_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Negotiable',
  `is_active` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_company_name_hidden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_posts`
--

INSERT INTO `job_posts` (`id`, `posted_by_id`, `job_type_id`, `job_heading`, `job_description`, `job_location`, `pay`, `is_active`, `company_id`, `is_company_name_hidden`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Lead Fashion Designer', 'Mide Couture is looking for an experienced Fashion designer to manage her fashion household during this festive season.\r\nDuties\r\nFashion designers typically do the following:\r\n\r\nStudy fashion trends and anticipate designs that will appeal to consumers\r\nDecide on a theme for a collection\r\nUse computer-aided design programs (CAD) to create designs\r\nVisit manufacturers or trade shows to get fabric samples\r\nSelect fabrics, embellishments, colors, or style for each garment or accessory\r\nWork with other designers or team members to create a prototype design\r\nPresent design ideas to the creative director or showcase them in fashion or trade shows\r\nMarket designs to clothing retailers or directly to consumers\r\nOversee the final production of their designs\r\nLarger apparel companies typically employ a team of designers headed by a creative designer. Some fashion designers specialize in clothing, footwear, or accessory design, but others create designs in all three fashion categories.\r\n\r\nFor some fashion designers, the first step in creating a new design is researching current fashion and making predictions of future trends, using trend reports published by fashion industry trade groups. Other fashion designers create collections from inspirations they get from their regular surroundings, from the cultures they have experienced and places they have visited, or from various art media that inspire them.\r\n\r\nAfter they have an initial idea, fashion designers try out various fabrics and produce a prototype, often with less expensive material than will be used in the final product. They work with models to see how the design will look and adjust the designs as needed.\r\n\r\nAlthough most designers first sketch their designs by hand, many now also sketch their ideas digitally with computer-aided design (CAD) programs. CAD allows designers to see their work on virtual models. They can try out different colors, design, and shapes while making adjustments more easily than they can when working with real fabric on real people.\r\n\r\nThe designers produce samples with the actual materials that will be used in manufacturing. Samples that get good responses from editors or trade and fashion shows are then manufactured and sold to consumers.\r\n\r\nAlthough the design process may vary by specialty, in general it takes 6 months from initial design concept to final production, when either the spring or fall collection is released. Some companies may release new designs as frequently as every month, in addition to releases during the spring and fall.\r\n\r\nThe Internet and e-commerce allow fashion designers to offer their products outside of the traditional brick-and-mortar stores. Instead they can ship directly to the consumer, without having to invest in a physical shop to showcase their products lines.\r\n\r\nThe following are examples of types of fashion designers:\r\n\r\nClothing designers create and help produce men\'s, women\'s, and children\'s apparel, including casual wear, suits, sportswear, evening wear, outerwear, maternity, and intimate apparel.\r\n\r\nFootwear designers create and help produce different styles of shoes and boots. As new materials become available, such as lightweight synthetic materials used in shoe soles, footwear designers produce new designs that combine comfort, form, and function.\r\n\r\nAccessory designers design and produce items such as handbags, suitcases, belts, scarves, hats, hosiery, and eyewear.\r\n\r\nCostume designers design costumes for the performing arts and for motion picture and television productions. They research the styles worn during the period in which the performance takes place, or they work with directors to select and create appropriate attire. They also must stay within the costume budget for the particular production.\r\nWork Schedules\r\nMost fashion designers work full time; however, some work part time. Occasionally, fashion designers work long hours to meet production deadlines or prepare for fashion shows. Designers who freelance generally work under a contract and tend to work longer hours and adjust their workday to their clients’ schedules and deadlines.\r\n\r\nEducation and Training\r\nMost fashion designers have a bachelor’s degree in a related field, such as fashion design or fashion merchandising. Employers usually seek applicants with creativity, as well as a good technical understanding of the production process for clothing, accessories, or footwear.\r\n\r\nEducation\r\nMost fashion designers have a bachelor’s degree in fashion design or fashion merchandising. In these programs they learn about textiles and fabrics and how to use computer-aided design (CAD) technology. They are also able to work on designs that can be added to their portfolio.\r\n\r\nFor many artists, including fashion designers, developing a portfolio—a collection of design ideas that demonstrates their styles and abilities—is essential because employers rely heavily on a designer’s portfolio in deciding whether to hire the individual. For employers, it is an opportunity to gauge talent and creativity. Students studying fashion design often have opportunities to enter their designs in student or amateur contests, helping them to develop their portfolios.\r\n\r\nThe National Association of Schools of Art and Design accredits approximately 300 postsecondary institutions with programs in art and design, and many of these schools award degrees in fashion design. Many schools require students to have completed basic art and design courses before they enter a program. Applicants usually have to submit sketches and other examples of their artistic ability.\r\n\r\nOther Experience\r\nFashion designers often gain their initial experience in the fashion industry through internships or by working as an assistant designer. Internships provide aspiring fashion designers an opportunity to experience the design process, building their knowledge of textiles, colors, and how the industry works.\r\n\r\nAdvancement\r\nExperienced designers may advance to chief designer, design department head, creative director, or another supervisory position in which they oversee certain fashion lines or brands by a company.\r\n\r\nSome experienced designers may start their own design company or sell their designs in their own retail stores. A few of the most successful designers work for high-fashion design houses that offer personalized design services to their clients.\r\n\r\nPersonality and Interests\r\nFashion designers typically have an interest in the Building, Creating and Persuading interest areas, according to the Holland Code framework. The Building interest area indicates a focus on working with tools and machines, and making or fixing practical things. The Creating interest area indicates a focus on being original and imaginative, and working with artistic media. The Persuading interest area indicates a focus on influencing, motivating, and selling to other people.\r\n\r\nIf you are not sure whether you have a Building or Creating or Persuading interest which might fit with a career as a fashion designer, you can take a career test to measure your interests.\r\n\r\nFashion designers should also possess the following specific qualities:\r\n\r\nArtistic ability. Fashion designers sketch their initial design ideas, which are used later to create prototypes. Consequently, designers must be able to express their vision for the design through illustration.\r\n\r\nCommunication skills. Fashion designers often work in teams throughout the design process and therefore must be effective in communicating with their team members. For example, they may need to give instructions to sewers regarding how the garment should be constructed.\r\n\r\nComputer skills. Fashion designers use technology to design. They must be able to use computer-aided design (CAD) programs and be familiar with graphics editing software.\r\n\r\nCreativity. Fashion designers work with a variety of fabrics, shapes, and colors. Their ideas must be unique, functional, and stylish.\r\n\r\nDecision-making skills. Because they often work in teams, fashion designers are exposed to many ideas. They must be able to decide which ideas to incorporate into their designs.\r\n\r\nDetail oriented. Fashion designers must have a good eye for small differences in color and other details that can make a design successful.', 'Lagos , Nigeria', '62,000', '1', 'Mide Coutures', NULL, '2019-12-14 15:18:01', '2019-12-14 15:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE `job_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`id`, `job_type`, `created_at`, `updated_at`) VALUES
(1, 'Fulltime', NULL, NULL),
(2, 'Contract', NULL, NULL),
(3, 'Freelance', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_13_002408_create_job_posts_table', 1),
(4, '2019_12_13_003635_job_type', 1),
(5, '2019_12_14_183734_create_job_applicants_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_int` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sms_notification_active` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_notification_active` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `f_name`, `l_name`, `gender`, `contact_int`, `user_type_id`, `date_of_birth`, `is_active`, `email`, `password`, `sms_notification_active`, `email_notification_active`, `user_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Ahamisi', 'God\'sFavour', 'male', '+2348080957681', NULL, NULL, 'yes', 'ahamisivickzyjr@gmail.com', '$2y$10$H3HkKAWnM2KOCBov4iwPo.s9SKYPvcA.08hlVKMs62qMsxpP3vEcC', NULL, NULL, NULL, 'MXU0ABv0Zf8kmX18fVAVSmFa0pyOUKD11E4sZgrdlu9Mfg24RWlh2EOeGN7l', '2019-12-14 14:27:40', '2019-12-14 14:27:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_applicants`
--
ALTER TABLE `job_applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_types`
--
ALTER TABLE `job_types`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_applicants`
--
ALTER TABLE `job_applicants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
