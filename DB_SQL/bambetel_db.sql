-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.4:3306
-- Час створення: Гру 03 2025 р., 14:15
-- Версія сервера: 8.4.6
-- Версія PHP: 8.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `bambetel_db`
--

-- --------------------------------------------------------

--
-- Структура таблиці `assort`
--

CREATE TABLE `assort` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int DEFAULT NULL,
  `image_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `weight` decimal(8,2) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_publish` tinyint NOT NULL DEFAULT '0' COMMENT '0:not_publish; 1:publish',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:active; 1:inactive',
  `is_delete` tinyint NOT NULL DEFAULT '0' COMMENT '0:not delete; 1:deleted;',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `assort`
--

INSERT INTO `assort` (`id`, `user_id`, `title`, `slug`, `menu_id`, `image_file`, `price`, `weight`, `description`, `meta_title`, `meta_description`, `meta_keywords`, `is_publish`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(15, 21, 'Сирники', 'sirniki', 9, 'sirniki.jpg', 90.00, 100.00, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Сирники', 'Сирники', 'Сирники', 1, 0, 0, '2025-11-18 15:27:43', '2025-11-18 15:27:43'),
(16, 21, 'Млинці з м\'ясом', 'mlinci-z-miasom', 10, 'mlinci-z-miasom.jpg', 97.00, 200.00, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'Млинці з м\'ясом', 'Млинці з м\'ясом', 'Млинці з м\'ясом', 1, 0, 0, '2025-11-18 15:28:52', '2025-11-18 15:28:52'),
(17, 21, 'Домашні голубці', 'domasni', 11, 'domasni.jpg', 85.00, 200.00, '<p>&nbsp;the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem&nbsp;</p>', 'Голубці', 'Голубці', 'Голубці', 1, 0, 0, '2025-11-18 15:30:35', '2025-11-18 15:31:11'),
(18, 21, 'Круасани з ковбаскою', 'kruasani-z-kovbaskoiu', 12, 'kruasani-z-kovbaskoiu.jpg', 115.00, 280.00, '<p>combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'Круасани з ковбаскою', 'Круасани з ковбаскою', 'Круасани з ковбаскою', 1, 0, 0, '2025-11-18 15:32:08', '2025-11-18 15:32:08');

-- --------------------------------------------------------

--
-- Структура таблиці `assort_comment`
--

CREATE TABLE `assort_comment` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `assort_id` int DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `assort_comment`
--

INSERT INTO `assort_comment` (`id`, `user_id`, `assort_id`, `comment`, `created_at`, `updated_at`) VALUES
(11, 29, 15, 'Дуже смачні сирники', '2025-11-26 10:54:18', '2025-11-26 10:54:18'),
(12, 21, 15, 'Згідний дуже..', '2025-11-26 10:56:30', '2025-11-26 10:56:30'),
(13, 29, 15, 'Так, ви маєте рацію...)', '2025-11-26 11:10:32', '2025-11-26 11:10:32'),
(14, 29, 15, '\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"', '2025-11-26 11:36:54', '2025-11-26 11:36:54'),
(15, 29, 15, 'by accident, sometimes on purpose (injected humour and the like).', '2025-11-26 11:47:22', '2025-11-26 11:47:22');

-- --------------------------------------------------------

--
-- Структура таблиці `assort_comment_reply`
--

CREATE TABLE `assort_comment_reply` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `comment_id` int DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `assort_comment_reply`
--

INSERT INTO `assort_comment_reply` (`id`, `user_id`, `comment_id`, `comment`, `created_at`, `updated_at`) VALUES
(3, 21, 11, 'Donate: If you use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill. There is no minimum donation, any sum is appreciated - click here to donate using PayPal. Thank you for your support. Donate bitcoin: 16UQLq1HZ3CNwhvgrarV6pMoA2CDjb4tyF', '2025-11-26 13:19:52', '2025-11-26 13:19:52'),
(4, 21, 15, 'Translations: Can you help translate this site into a foreign language ? Please email us with details if you can help.', '2025-11-26 13:34:45', '2025-11-26 13:34:45');

-- --------------------------------------------------------

--
-- Структура таблиці `assort_tags`
--

CREATE TABLE `assort_tags` (
  `id` int NOT NULL,
  `assort_id` tinyint DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `assort_tags`
--

INSERT INTO `assort_tags` (`id`, `assort_id`, `name`, `created_at`, `updated_at`) VALUES
(39, 18, 'Круасани з ковбаскою', '2025-11-19 02:25:10', '2025-11-19 02:25:10'),
(40, 17, 'Домашні голубці', '2025-11-19 02:25:22', '2025-11-19 02:25:22'),
(41, 16, 'Млинці з м\'ясом', '2025-11-19 02:25:43', '2025-11-19 02:25:43'),
(42, 15, 'Сирники', '2025-11-19 02:26:05', '2025-11-19 02:26:05');

-- --------------------------------------------------------

--
-- Структура таблиці `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int NOT NULL,
  `user_id` tinyint DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `contact_us`
--

INSERT INTO `contact_us` (`id`, `user_id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 21, 'Lynn Hayden', 'xiruwul@mailinator.com', '+1 (232) 429-7792', 'Quis aut Nam eum des', 'Sed illo sed sed dol', '2025-12-01 10:45:24', '2025-12-01 10:45:24'),
(2, 21, 'Amir Stanley', 'buzosyrico@mailinator.com', '+1 (717) 939-4572', 'Debitis eveniet nec', 'Ut ab dolore atque h', '2025-12-01 10:47:30', '2025-12-01 10:47:30'),
(3, 21, 'Debra Rocha', 'xatadori@mailinator.com', '+1 (621) 553-6956', 'Quae voluptatum vel', 'Quaerat ad ex eum re', '2025-12-01 10:49:02', '2025-12-01 10:49:02'),
(4, 21, 'Guinevere Mcleod', 'jucew@mailinator.com', '+1 (256) 356-7088', 'Ullam excepturi aspe', 'Praesentium soluta e', '2025-12-02 13:28:13', '2025-12-02 13:28:13');

-- --------------------------------------------------------

--
-- Структура таблиці `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `forms_submissions`
--

CREATE TABLE `forms_submissions` (
  `id` bigint UNSIGNED NOT NULL,
  `form_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_keywords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_menu` tinyint NOT NULL DEFAULT '0' COMMENT '0:is_menu; 1:not_menu',
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0:active; 1:inactive',
  `is_delete` tinyint DEFAULT '0' COMMENT '0:not delete; 1:deleted',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `menu`
--

INSERT INTO `menu` (`id`, `name`, `slug`, `title`, `meta_title`, `meta_keywords`, `meta_description`, `is_menu`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(9, 'Сніданки', 'snidanki', 'Сніданки_Сніданки', 'Сніданки', 'Сніданки', 'Сніданки', 0, 0, 0, '2025-11-18 15:24:26', '2025-11-18 15:24:26'),
(10, 'Млинці', 'mlinci', 'Млинці_Млинці', 'Млинці', 'Млинці', 'Млинці', 0, 0, 0, '2025-11-18 15:24:52', '2025-11-18 15:24:52'),
(11, 'Голубці', 'golubci', 'Голубці_Голубці', 'Голубці', 'Голубці', 'Голубці', 0, 0, 0, '2025-11-18 15:25:07', '2025-11-18 15:25:07'),
(12, 'Круасани', 'kruasani', 'Круасани_Круасани', 'Круасани', 'Круасани', 'Круасани', 1, 0, 0, '2025-11-18 15:25:27', '2025-11-22 00:24:27');

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_12_01_132246_create_forms_submissions_table', 2);

-- --------------------------------------------------------

--
-- Структура таблиці `page`
--

CREATE TABLE `page` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` tinyint DEFAULT '0' COMMENT '0:not delete; 1:delete 	',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `page`
--

INSERT INTO `page` (`id`, `title`, `slug`, `description`, `meta_title`, `meta_description`, `meta_keywords`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Головна', 'golovna', '<p>Головна</p>', 'Головна', 'Головна', 'Головна', NULL, '2025-11-21 11:58:52', '2025-11-21 14:16:41'),
(2, 'Контакти', 'contacts', '<p>Контакти</p>', 'Контакти', 'Контакти', 'Контакти', 0, '2025-11-21 13:18:01', '2025-11-21 14:16:50'),
(3, 'Про кафе', 'about', '<div class=\"col-lg-6 aos-init aos-animate\" data-aos=\"fade-up\">\r\n<div class=\"about-content\">\r\n<h2>Відчуйте Нашу Атмосферу</h2>\r\n<p class=\"fst-italic\">Caf&eacute; Bambetel &mdash; це кафе, куди приходять за теплом, комфортом і душевністю.</p>\r\n<p class=\"fst-italic\">Ми створили простір, що дарує відчуття дому: м&rsquo;яке світло, приємний аромат кави та щирі усмішки команди.</p>\r\n<div class=\"row mt-4\">\r\n<div class=\"col-md-6\">\r\n<div class=\"feature-item aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"150\">\r\n<h4>Турбота у Кожній Деталі</h4>\r\n<p>Наше обслуговування &mdash; це увага до ваших потреб, доброзичливість і бажання зробити ваш день кращим..</p>\r\n</div>\r\n</div>\r\n<div class=\"col-md-6\">\r\n<div class=\"feature-item aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"200\">\r\n<h4>Улюблене Місце Гостей</h4>\r\n<p>Ми раді, що Caf&eacute; Bambetel стає місцем зустрічей, відпочинку та приємних спогадів для багатьох.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"signature mt-4 aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"250\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-6 aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"300\">\r\n<div class=\"about-gallery\">\r\n<div class=\"row g-3\">\r\n<div class=\"col-6\"><img class=\"img-fluid rounded\" src=\"assets/img/restaurant/showcase-3.webp\" alt=\"Restaurant Image\" /></div>\r\n<div class=\"col-6\"><img class=\"img-fluid rounded\" src=\"assets/img/restaurant/showcase-8.webp\" alt=\"Restaurant Image\" /></div>\r\n<div class=\"col-12 mt-3\">\r\n<div class=\"years-badge\"><span class=\"text\">Запрошуємо вас відчути цю атмосферу особисто!</span></div>\r\n<img class=\"img-fluid rounded\" src=\"assets/img/restaurant/showcase-6.webp\" alt=\"Restaurant Image\" /></div>\r\n</div>\r\n</div>\r\n</div>', 'Про кафе', 'Про кафе', 'Про кафе', 0, '2025-11-21 13:59:15', '2025-12-02 08:02:13'),
(4, 'Логін', 'login', '<p>Логін</p>', 'Логін', 'Логін', 'Логін', 0, '2025-11-21 14:37:28', '2025-11-21 14:37:28'),
(5, 'Реєстрація', 'register', '<p>Реєстрація</p>', 'Реєстрація', 'Реєстрація', 'Реєстрація', 0, '2025-11-21 16:06:37', '2025-11-21 16:06:37'),
(6, 'Відновлення паролю', 'reset', '<p>Відновлення паролю</p>', 'Відновлення паролю', 'Відновлення паролю', 'Відновлення паролю', 0, '2025-11-21 16:19:12', '2025-11-21 16:19:12'),
(7, 'Меню', 'menu', '<p>Меню</p>', 'Меню', 'Меню', 'Меню', 0, '2025-11-21 19:57:23', '2025-11-21 19:57:23'),
(8, 'Політика конфіденційності', 'privacy', '<p>Кафе \"BAMBETEL\" визнає важливість захисту особистої інформації та поважає конфіденційність відвідувачів нашого веб-сайту, і саме тому ми створили цю ПОЛІТИКУ КОНФІДЕНЦІЙНОСТІ, яка розповсюджується на Вас з моменту, коли Ви зайшли на цей веб-сайт.</p>\r\n<p>Для цілей даної ПОЛІТИКИ КОНФІДЕНЦІЙНОСТІ слід розрізняти поняття персональних та загальних даних.&nbsp;<strong>Персональні дані</strong>&nbsp;&ndash; це дані про фізичну особу, яка ідентифікована, або дані, за допомогою яких вона може бути конкретно ідентифікована.&nbsp;<strong class=\"h-color\">Права відвідувачів цього сайту охороняються Законом України &laquo;Про захист персональних даних&raquo; від 1 червня 2010 року N 2297-VI.</strong></p>\r\n<p><strong>Загальна інформація</strong>&nbsp;&ndash; це інформація, яка дозволяє нам краще налаштувати сайт до потреб користувачів і стосується таких даних: кількість відвідувачів сайту, статистика перегляду окремих сторінок та користування функціональними додатками, що розміщені на сайті, типи браузера та операційної системи, інформація про провайдера Інтернет-послуг тощо. Таку інформацію ми отримуємо автоматично та в узагальненому (не персоніфікованому) вигляді.</p>\r\n<p>Для збору зазначеної вище загальної інформації ми також можемо використовувати технологію &ldquo;Сookies&rdquo;, яка є певною інформацією, що залишається нашим веб-сайтом на комп&rsquo;ютері відвідувача. &ldquo;Cookies&rdquo; надсилаються назад тільки на сервер сайту, який їх залишив, коли відвідувач повертається на сайт. &ldquo;Cookies&rdquo; можуть сказати нам, як, коли і якою кількістю людей переглядались сторінки нашого веб-сайту. Технологія &ldquo;Cookies&rdquo; не містить особистої (персональної) інформації, не зчитує інформацію з Вашого жорсткого диску та не може жодним чином вносити зміни до Вашої операційної системи. Завдяки інформації, яку ми отримуємо шляхом використання технології &ldquo;Cookies&rdquo;, ми намагаємось постійно вдосконалювати наш веб-сайт. Зокрема, ми можемо використовувати цю інформацію для того, щоб зробити нашу інформацію більш доступною для Вас, а веб-сайт в цілому &ndash; зручнішим для користування. Для отримання додаткової інформації про &ldquo;Cookies&rdquo;, будь ласка, відвідайте сайт www.allaboutcookies.org. Крім того, у відповідному меню Вашого браузера (найчастіше, в меню HELP) Ви можете дізнатись, як заборонити Вашому браузеру отримувати нові &ldquo;Cookies&rdquo;, як налаштувати повідомлення від Вашого браузера, про те, що Ви отримали нові &ldquo;Cookies&rdquo;, або як відключити &ldquo;Cookies&rdquo; взагалі.</p>\r\n<p>Виключно Кафе \"BAMBETEL\" має доступ до зібраної інформації. Ми можемо користуватись послугами третіх осіб надавши доступ до загальної (не персоніфікованої) інформації для того, щоб досліджувати, обробляти дані та підтримувати наш веб-сайт, його зміст, або програми від нашого імені. В такому випадку, ми вимагаємо від них дотримання політики конфіденційності та забороняємо використовувати будь-яку інформацію сайту з іншою метою.</p>\r\n<p>Ця політика конфіденційності може бути змінена нами в будь-який час. Будь ласка, перевіряйте веб-сайт час від часу для того, щоб бути в курсі змін.</p>', 'Політика конфіденційності', 'Політика конфіденційності', 'Політика конфіденційності', 0, '2025-12-02 11:00:32', '2025-12-02 11:00:32'),
(9, 'Бронювання', 'reservation', '<div class=\"reservation-info-section\">\r\n<div class=\"hero-image\"><img class=\"img-fluid\" src=\"assets/img/restaurant/showcase-2.webp\" alt=\"Restaurant dining area\" />\r\n<div class=\"overlay-content\">\r\n<h4>Відчуйте вишукані страви</h4>\r\n<p>Справжня домашня кухня з любов&rsquo;ю та турботою</p>\r\n</div>\r\n</div>\r\n<div class=\"info-cards\">\r\n<div class=\"row g-3\">\r\n<div class=\"col-md-6 aos-init aos-animate\" data-aos=\"zoom-in\" data-aos-delay=\"400\">\r\n<div class=\"info-card\">\r\n<div class=\"card-icon\">⏱</div>\r\n<div class=\"card-content\">\r\n<h5>Працюємо:</h5>\r\n<p>Понеділок- Субота: 9:00&nbsp; - 18:00&nbsp;<br />Неділя - Вихідний</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-6 aos-init aos-animate\" data-aos=\"zoom-in\" data-aos-delay=\"450\">\r\n<div class=\"info-card\">\r\n<div class=\"card-icon\">➤</div>\r\n<div class=\"card-content\">\r\n<h5>Наша адреса:</h5>\r\n<p>Вулиця Леся Курбаса, 2; Городенка 78100</p>\r\n<p>Коломийський район</p>\r\n<p>Івано-Франківська обл</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-6 aos-init aos-animate\" data-aos=\"zoom-in\" data-aos-delay=\"500\">\r\n<div class=\"info-card\">\r\n<div class=\"card-icon\">☏</div>\r\n<div class=\"card-content\">\r\n<h5>Бронювання</h5>\r\n<p><span class=\"_ap3a _aaco _aacu _aacx _aad7 _aade\" dir=\"auto\">+380 (97) 882 05 90</span><br /><span style=\"font-size: 11.6667px;\">Приймаємо замовлення за робочим графіком</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-6 aos-init aos-animate\" data-aos=\"zoom-in\" data-aos-delay=\"550\">\r\n<div class=\"info-card\">\r\n<div class=\"card-icon\">✉</div>\r\n<div class=\"card-content\">\r\n<h5>Напишіть нам</h5>\r\n<p>reservations@example.com<br />Відповідь протягом 24 годин</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"additional-info aos-init aos-animate\" data-aos=\"fade-up\" data-aos-delay=\"600\">\r\n<div class=\"info-highlight\">Рекомендується бронювати столики за 2-3 дні</div>\r\n</div>\r\n</div>', 'Бронювання', 'Бронювання', 'Бронювання', 0, '2025-12-03 11:05:57', '2025-12-03 11:39:14');

-- --------------------------------------------------------

--
-- Структура таблиці `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `image_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_delete` tinyint DEFAULT '0' COMMENT 'not_delete 0; is_delete 1',
  `status` tinyint DEFAULT '0' COMMENT 'is_active 1; not_active 0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `portfolios`
--

INSERT INTO `portfolios` (`id`, `menu_id`, `image_name`, `button_name`, `button_link`, `title`, `description`, `is_delete`, `status`, `created_at`, `updated_at`) VALUES
(5, 11, 'xth5bbjylhmtqoou8s31.jpg', 'Guy Keller', 'https://bambetel.loc/domasni', 'Ducimus quis quos e', 'Aut odio ullam eum e', 0, 1, '2025-11-27 09:19:18', '2025-11-27 09:19:18'),
(6, 10, 'xfzdmbwvpzsyzpasmyu6.jpg', 'Casey Davidson', 'https://bambetel.loc/mlinci-z-miasom', 'Optio sint magnam', 'Minim reprehenderit', 0, 1, '2025-11-27 09:27:23', '2025-11-27 09:27:23');

-- --------------------------------------------------------

--
-- Структура таблиці `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `phone`, `email`, `page`, `created_at`, `updated_at`, `deleted_at`) VALUES
(25, 'Leah Burris', '+1 (708) 521-3469', 'mydikebys@mailinator.com', 'https://bambetel.loc/', '2025-12-03 07:23:04', '2025-12-03 07:23:04', NULL),
(26, 'Wylie Cox', '+1 (382) 421-7316', 'rihefyj@mailinator.com', 'https://bambetel.loc/domasni', '2025-12-03 07:23:24', '2025-12-03 07:23:24', NULL),
(27, 'Cora Daugherty', '+1 (569) 396-1179', 'tinojoqowy@mailinator.com', 'https://bambetel.loc/', '2025-12-03 07:25:08', '2025-12-03 09:00:35', '2025-12-03 09:00:35');

-- --------------------------------------------------------

--
-- Структура таблиці `section_hero`
--

CREATE TABLE `section_hero` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_pic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraph` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `button_start` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_end` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_start_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_end_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `section_hero`
--

INSERT INTO `section_hero` (`id`, `title`, `hero_pic`, `video`, `paragraph`, `button_start`, `button_end`, `button_start_link`, `button_end_link`, `created_at`, `updated_at`) VALUES
(1, 'Смачно, як удома, і затишно, як хотілося', NULL, NULL, 'Bambetel — це великий асортимент вареників (як удома, тільки ліпити не змусимо), сніданки до обіду, гофри, як у серіалі, і домашній суп, що нагадує про бабусю.\r\nЦе місце, де їжа — зі змістом, атмосфера — зі смаком, а ти — завжди бажаний гість.', 'Бронювання', 'Меню', '/reservation', '/assort', NULL, '2025-11-28 10:31:59');

-- --------------------------------------------------------

--
-- Структура таблиці `setting`
--

CREATE TABLE `setting` (
  `id` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worktime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `google_map_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `favicon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `setting`
--

INSERT INTO `setting` (`id`, `email`, `phone`, `instagram_link`, `logo`, `worktime`, `address`, `created_at`, `updated_at`, `google_map_link`, `favicon`) VALUES
(1, 'email@example.com', ' +380 (97) 882 05 90', 'https://www.instagram.com/cafe_bambetel_/', '', 'Пн–Сб: 09:00–18:00', 'вулиця Леся Курбаса, 2  Horodenka 78100', '2025-11-28 14:35:41', '2025-11-28 14:35:41', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2634.870794850429!2d25.5022186!3d48.669713699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4731470af55c0e2d%3A0x53b1f7fdcecd9499!2z0LLRg9C70LjRhtGPINCb0LXRgdGPINCa0YPRgNCx0LDRgdCwLCAyLCDQk9C-0YDQvtC00LXQvdC60LAsINCG0LLQsNC90L4t0KTRgNCw0L3QutGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgNzgxMDA!5e0!3m2!1suk!2sua!4v1764585703236!5m2!1suk!2sua', '');

-- --------------------------------------------------------

--
-- Структура таблиці `telegram`
--

CREATE TABLE `telegram` (
  `id` bigint UNSIGNED NOT NULL,
  `telegram_bot_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram_chat_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `site_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `telegram`
--

INSERT INTO `telegram` (`id`, `telegram_bot_token`, `telegram_chat_id`, `site_name`, `created_at`, `updated_at`) VALUES
(1, '7937620384:AAHpBIMGp2AGInmoifNp96Qz-9om2MA0K8c', '5161642820', 'bambetel', '2025-04-09 08:31:22', '2025-04-09 12:43:25');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint NOT NULL DEFAULT '0' COMMENT '0:user; 1:admin',
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0:not verify;1:verify',
  `is_delete` tinyint NOT NULL DEFAULT '0' COMMENT '0:not delete; 1:delete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_admin`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(21, 'Dolan Parrish', 'bohejogifi@mailinator.com', '2025-11-10 17:05:44', '$2y$12$fotnJugT.MRnSjytKalu6OLac8r9Sk/w0lXO/nZk9FZkmRtrggIEG', '5xM0Npk3eCBfKU6VQ8adgf1mDO4j5aWhjpL6PgGrEmyhXxf8tYCtEDe9JSkD', 1, 1, 0, '2025-11-10 17:05:21', '2025-11-21 14:19:33'),
(28, 'Kiona Sellers', 'lykoj@mailinator.com', '2025-11-25 12:00:34', '$2y$12$Bbs2Lh9vo7TlXYDUa3dbO.6OBc.Jb7p8FHS5BB6Tbvq3EhIo9xT7y', 'iXnsU3p1HmFGAMCSONUeRVWd365QIhoRE5Hrtsk5', 0, 0, 0, '2025-11-25 11:53:21', '2025-11-25 12:00:34'),
(29, 'Alfreda Wallace', 'loqegicyxi@mailinator.com', '2025-11-25 12:01:10', '$2y$12$o7K9RMmCoVzdhS7c7Em2DOWRBLPAEtKk77F/4YowxPMTfzFJfrxwm', 'tyz5Vc5DfDEYpDRCpSq2UEe000BGhhf45uiGBrz58C3K630G5Qhu8msMC93P', 0, 0, 0, '2025-11-25 12:00:58', '2025-11-25 12:01:10'),
(30, 'Jerome Crane', 'duqi@mailinator.com', '2025-11-27 08:53:53', '$2y$12$k636pK8tP.yp4b.ZCV4IhORJQuzakSn7PYIrCMYWPK3rMt24VTOzK', '2LG6zlIsR41fFXuN8ictmGOcZ8IY98cAuPmmyH4BETXHDkf923JyEwgVzu69', 0, 0, 0, '2025-11-27 08:52:56', '2025-11-27 08:53:53');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `assort`
--
ALTER TABLE `assort`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `assort_comment`
--
ALTER TABLE `assort_comment`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `assort_comment_reply`
--
ALTER TABLE `assort_comment_reply`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `assort_tags`
--
ALTER TABLE `assort_tags`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Індекси таблиці `forms_submissions`
--
ALTER TABLE `forms_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Індекси таблиці `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Індекси таблиці `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `section_hero`
--
ALTER TABLE `section_hero`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `telegram`
--
ALTER TABLE `telegram`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telegram_key_unique` (`telegram_bot_token`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `assort`
--
ALTER TABLE `assort`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблиці `assort_comment`
--
ALTER TABLE `assort_comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблиці `assort_comment_reply`
--
ALTER TABLE `assort_comment_reply`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `assort_tags`
--
ALTER TABLE `assort_tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблиці `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `forms_submissions`
--
ALTER TABLE `forms_submissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблиці `page`
--
ALTER TABLE `page`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблиці `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблиці `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблиці `section_hero`
--
ALTER TABLE `section_hero`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `telegram`
--
ALTER TABLE `telegram`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
