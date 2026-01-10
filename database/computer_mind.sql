-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2026 at 06:46 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer mind`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `icon`, `link`) VALUES
(1, 'Home', '<i class=\"fas fa-home\"></i>', 'index.php'),
(2, 'JavaScript', '<i class=\"fab fa-js\"></i>', 'js.php'),
(3, 'Python', '<i class=\"fab fa-python\"></i>', 'python.php'),
(4, 'Web design', '<i class=\"fab fa-html5\"></i>', 'webdesign.php'),
(5, 'PHP & SQL', '<i class=\"fab fa-php\"></i>', 'php_sql.php'),
(6, 'C++', '<i class=\"fas fa-code\"></i>', 'c++.php');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `message` text NOT NULL,
  `seen` enum('yes','no','','') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `question_text` text NOT NULL,
  `correct_answer` int NOT NULL,
  `difficulty` varchar(20) DEFAULT 'medium',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `category_id`, `question_text`, `correct_answer`, `difficulty`, `created_at`) VALUES
(1, 1, 'which space probe orbited Jupiter starting in 2016?', 3, 'medium', '2025-12-07 16:44:07'),
(2, 1, 'which space probe landed on a comet in 2014?', 1, 'medium', '2025-12-07 16:44:07'),
(3, 1, 'which space probe was the first to land on Mars successfully?', 0, 'hard', '2025-12-07 16:44:07'),
(4, 1, 'which Soviet probe was the first to reach Venus?', 2, 'hard', '2025-12-07 16:44:07'),
(5, 1, 'which spacecraft took the famous \'Pale Blue Dot\' photo?', 1, 'medium', '2025-12-07 16:44:07'),
(6, 1, 'which probe studied the asteroid Vesta and dwarf planet Ceres?', 2, 'medium', '2025-12-07 16:44:07'),
(7, 1, 'which Japanese probe collected samples from asteroid Ryugu?', 0, 'hard', '2025-12-07 16:44:07'),
(8, 1, 'which space probe studied Jupiter before Juno?', 3, 'medium', '2025-12-07 16:44:07'),
(9, 1, 'If a person weight 160 pounds, what is his favourite color?', 1, 'medium', '2025-12-14 16:50:54'),
(10, 2, 'which is the closest star to Earth after the Sun?', 2, 'medium', '2025-12-21 16:16:27'),
(11, 2, 'which star is known as the North Star?', 1, 'medium', '2025-12-21 16:16:27'),
(12, 2, 'which is the brightest star in the night sky?', 0, 'medium', '2025-12-21 16:16:27'),
(13, 2, 'what type of star is our Sun?', 2, 'medium', '2025-12-21 16:16:27'),
(14, 2, 'which star is a red supergiant?', 0, 'medium', '2025-12-21 16:16:27'),
(15, 2, 'which is the most luminous known star in our galaxy?', 2, 'medium', '2025-12-21 16:16:27'),
(16, 2, 'which star is considered the largest in terms of radius?', 0, 'medium', '2025-12-21 16:16:27'),
(17, 2, 'which type of star is thought to be the remnant core of a massive supernova?', 0, 'medium', '2025-12-21 16:16:27');

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

DROP TABLE IF EXISTS `question_options`;
CREATE TABLE IF NOT EXISTS `question_options` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question_id` int NOT NULL,
  `option_index` int NOT NULL,
  `option_text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_question_option` (`question_id`,`option_index`)
) ;

--
-- Dumping data for table `question_options`
--

INSERT INTO `question_options` (`id`, `question_id`, `option_index`, `option_text`) VALUES
(1, 1, 0, 'Voyager 2'),
(2, 1, 1, 'Galileo'),
(3, 1, 2, 'Cassini'),
(4, 1, 3, 'Juno'),
(5, 2, 0, 'Pioneer'),
(6, 2, 1, 'Rosetta'),
(7, 2, 2, 'Juno'),
(8, 2, 3, 'New Horizons'),
(9, 3, 0, 'Viking 1'),
(10, 3, 1, 'Sojourner'),
(11, 3, 2, 'Spirit'),
(12, 3, 3, 'Curiosity'),
(13, 4, 0, 'Luna 2'),
(14, 4, 1, 'Venera 16'),
(15, 4, 2, 'Venera 7'),
(16, 4, 3, 'Mars 3'),
(17, 5, 0, 'Voyager 2'),
(18, 5, 1, 'Voyager 1'),
(19, 5, 2, 'New Horizons'),
(20, 5, 3, 'Hubble'),
(21, 6, 0, 'Juno'),
(22, 6, 1, 'Rosetta'),
(23, 6, 2, 'Dawn'),
(24, 6, 3, 'Voyager 2'),
(25, 7, 0, 'Hayabusa2'),
(26, 7, 1, 'OSIRIS-REx'),
(27, 7, 2, 'Pioneer'),
(28, 7, 3, 'Luna 3'),
(29, 8, 0, 'New Horizons'),
(30, 8, 1, 'Cassini'),
(31, 8, 2, 'Mariner 10'),
(32, 8, 3, 'Galileo'),
(33, 9, 0, 'Cat'),
(34, 9, 1, 'Coding'),
(35, 9, 2, 'Pizza'),
(36, 9, 3, 'Burger'),
(37, 10, 0, 'Sirius'),
(38, 10, 1, 'Alpha Centauri'),
(39, 10, 2, 'Proxima Centauri'),
(40, 10, 3, 'Vega'),
(41, 11, 0, 'Sirius'),
(42, 11, 1, 'Polaris'),
(43, 11, 2, 'Betelgeuse'),
(44, 11, 3, 'Rigel'),
(45, 12, 0, 'Sirius'),
(46, 12, 1, 'Vega'),
(47, 12, 2, 'Betelgeuse'),
(48, 12, 3, 'Rigel'),
(49, 13, 0, 'Red giant'),
(50, 13, 1, 'White dwarf'),
(51, 13, 2, 'Yellow dwarf'),
(52, 13, 3, 'Neutron star'),
(53, 14, 0, 'Betelgeuse'),
(54, 14, 1, 'Sirius'),
(55, 14, 2, 'Vega'),
(56, 14, 3, 'Proxima Centauri'),
(57, 15, 0, 'UY Scuti'),
(58, 15, 1, 'VY Canis Majoris'),
(59, 15, 2, 'R136a1'),
(60, 15, 3, 'Betelgeuse'),
(61, 16, 0, 'UY Scuti'),
(62, 16, 1, 'R136a1'),
(63, 16, 2, 'Vega'),
(64, 16, 3, 'Antares'),
(65, 17, 0, 'Neutron star'),
(66, 17, 1, 'Red dwarf'),
(67, 17, 2, 'Blue giant'),
(68, 17, 3, 'Yellow dwarf');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_categories`
--

DROP TABLE IF EXISTS `quiz_categories`;
CREATE TABLE IF NOT EXISTS `quiz_categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `description` text,
  `icon` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `quiz_categories`
--

INSERT INTO `quiz_categories` (`id`, `category_name`, `description`, `icon`, `created_at`) VALUES
(1, 'Probes', 'This quiz is about probes', '🚀', '2025-12-07 16:44:07'),
(2, 'Stars', 'This quiz is about stars', '⭐', '2025-12-21 16:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Role` enum('user','admin','superadmin','root') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Age` int NOT NULL,
  `Country` varchar(60) NOT NULL,
  `Joined` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=142 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Role`, `Firstname`, `Lastname`, `Email`, `Password`, `Age`, `Country`, `Joined`) VALUES
(1, 'root', 'Daniel', 'Janybekov', 'daniel.janybekov@hotmail.com', '25d55ad283aa400af464c76d713c07ad', 14, 'Canada', '0000-00-00'),
(2, 'user', 'Jane', 'Hernandez', 'jane.hernandez107@zoho.com', '25d55ad283aa400af464c76d713c07ad', 30, 'Mexico', '2024-01-15'),
(3, 'user', 'Grace', 'King', 'grace.king414@gmail.com', '35aeee2e88afe569e160e0cdbc48c2d7', 34, 'UAE', '2024-12-23'),
(4, 'user', 'Benjamin', 'Young', 'benjamin.young63@yahoo.com', '40630e5ef98c9dc704ef6da49c73f287', 18, 'China', '2024-01-06'),
(5, 'user', 'Grace', 'Jones', 'grace.jones198@mail.com', '1db708811aa63184f4cc724a93eb1455', 59, 'Japan', '2025-06-21'),
(6, 'user', 'Sofia', 'Robinson', 'sofia.robinson167@icloud.com', 'd4620b1886c7129cdacfd3c97a4d764b', 64, 'Argentina', '2024-08-06'),
(7, 'user', 'Victoria', 'Walker', 'victoria.walker548@aol.com', '3ddabd76f84b0e718ee12955d9eaea24', 21, 'Philippines', '2025-04-04'),
(8, 'user', 'Mason', 'White', 'mason.white491@zoho.com', 'e8dc89d1955adc2f412be3a9069bced1', 53, 'Malaysia', '2025-05-30'),
(9, 'user', 'Thomas', 'Hall', 'thomas.hall666@yahoo.com', 'caf077d53201efbfb0664f055568cf3c', 32, 'Brazil', '2024-09-28'),
(10, 'user', 'Scarlett', 'Walker', 'scarlett.walker364@icloud.com', 'f647ab912af0cd202b9b3b5dd5542b29', 50, 'Turkey', '2025-04-28'),
(11, 'user', 'Sofia', 'Hernandez', 'sofia.hernandez88@outlook.com', 'b093ff50b52db9185f33fee097368cb8', 38, 'Thailand', '2025-04-10'),
(12, 'user', 'David', 'Garcia', 'david.garcia372@icloud.com', 'a16167acf1408eaca2dbe295d41acab9', 37, 'UK', '2024-12-22'),
(13, 'user', 'Nora', 'Moore', 'nora.moore967@icloud.com', '0259ec77bb141851cdc3c26964827934', 62, 'Venezuela', '2024-07-02'),
(14, 'user', 'Sarah', 'Ramirez', 'sarah.ramirez231@hotmail.com', 'c7cb3070c9373c660908ad4337712905', 65, 'Saudi Arabia', '2024-09-20'),
(15, 'user', 'Daniel', 'Campbell', 'daniel.campbell286@outlook.com', 'f58c45334b87de3ff955ce64eb3124e3', 28, 'Egypt', '2025-06-20'),
(16, 'user', 'Laura', 'King', 'laura.king416@gmail.com', '5cd9c2d8ffa25e5287aff1e193080b05', 44, 'Indonesia', '2025-05-07'),
(17, 'user', 'Samuel', 'Thomas', 'samuel.thomas982@mail.com', '6b938685c2397d7d705a6b174a39e609', 33, 'Thailand', '2024-04-02'),
(18, 'user', 'Charles', 'Taylor', 'charles.taylor846@yahoo.com', 'fb0bfd3c7c347e7a2c87ab9a12d2c59b', 38, 'Argentina', '2025-05-11'),
(19, 'user', 'Charlotte', 'Adams', 'charlotte.adams614@gmail.com', 'aa92014100077ac041c53f06caa8afbf', 38, 'Thailand', '2024-10-05'),
(20, 'user', 'Lucas', 'Thompson', 'lucas.thompson778@mail.com', '7ab64f9113f600e466c6a46af6532df3', 66, 'Canada', '2024-10-14'),
(22, 'user', 'Lily', 'Harris', 'lily.harris121@protonmail.com', '01920517282de64712d819e09b3e478a', 43, 'Australia', '2024-08-30'),
(23, 'user', 'Jane', 'Scott', 'jane.scott858@yahoo.com', 'b90312572af05ae726337f75f543da09', 46, 'Turkey', '2025-03-28'),
(24, 'user', 'Isabella', 'Green', 'isabella.green577@icloud.com', '487b20f179d31cc9d5d8f69ee4a3af90', 59, 'Spain', '2025-08-21'),
(25, 'user', 'Jack', 'Rivera', 'jack.rivera375@icloud.com', 'a425594ec0dc545b65f98c9d6cb33858', 51, 'China', '2024-07-07'),
(26, 'admin', 'Ava', 'Walker', 'ava.walker821@gmail.com', '25d55ad283aa400af464c76d713c07ad', 67, 'Spain', '2024-01-25'),
(27, 'user', 'Mason', 'Robinson', 'mason.robinson991@mail.com', '46c48e2ef16dfc90cbd5dc7762a86da4', 25, 'Singapore', '2024-12-24'),
(28, 'user', 'Thomas', 'Jackson', 'thomas.jackson28@hotmail.com', '7cc11a5610fae59fbffb89b16ffa8950', 52, 'South Korea', '2024-07-10'),
(29, 'user', 'Zoe', 'Wilson', 'zoe.wilson108@zoho.com', '2b78db409a91d5e12fcde98b92df6805', 34, 'USA', '2024-09-25'),
(30, 'user', 'Ella', 'Robinson', 'ella.robinson781@mail.com', 'f8d5619071765d3781f6b23991bca10c', 28, 'Thailand', '2024-08-24'),
(31, 'user', 'Alexander', 'Martin', 'alexander.martin527@protonmail', 'd08d7a99e67f35385d39ba3ed08c323b', 24, 'Venezuela', '2024-01-27'),
(32, 'user', 'Logan', 'White', 'logan.white745@aol.com', '5e5957aa64d14749185e3271bee4fc33', 56, 'South Africa', '2024-04-11'),
(33, 'user', 'Ava', 'Green', 'ava.green713@protonmail.com', 'e05d10e4afff4c19ee58be8951b6bdd2', 56, 'Nigeria', '2024-01-30'),
(34, 'user', 'Natalie', 'Perez', 'natalie.perez944@aol.com', '2efd3427cfa44ffc4986dd78f108101a', 53, 'France', '2025-04-24'),
(35, 'user', 'Sarah', 'Martin', 'sarah.martin179@mail.com', '4dada1548f3910d528ce0c8b8684d9f4', 19, 'Japan', '2024-12-21'),
(36, 'user', 'Emma', 'Taylor', 'emma.taylor984@mail.com', '2d98f075840067c634fadc87d184fffa', 42, 'South Korea', '2024-09-18'),
(37, 'user', 'Sophia', 'Thompson', 'sophia.thompson876@outlook.com', '60ad954e4a85bba21957294afbe1fcc9', 27, 'Mexico', '2025-04-20'),
(38, 'user', 'Robert', 'Lopez', 'robert.lopez644@hotmail.com', '16b2fe457a58ed197dad0f4640c4d301', 27, 'China', '2024-11-07'),
(39, 'user', 'Olivia', 'Carter', 'olivia.carter384@mail.com', '719c20792a148a781e89bb1915759e7a', 40, 'Singapore', '2023-10-01'),
(40, 'user', 'Noah', 'Torres', 'noah.torres240@hotmail.com', '23cdaa4a0b511b027b2478ee2b8e9efe', 61, 'UAE', '2024-11-05'),
(41, 'user', 'Logan', 'Smith', 'logan.smith545@aol.com', 'bf952e18fc8e71d9975e3b0e48c4c8cb', 59, 'Kenya', '2025-05-12'),
(42, 'user', 'Emma', 'Perez', 'emma.perez571@icloud.com', 'aca635a81ebd3ee469823c5d8ccfd6b6', 32, 'Chile', '2024-03-25'),
(43, 'user', 'Noah', 'Allen', 'noah.allen156@icloud.com', '67c802db3a2707dfa393468e35677fb0', 59, 'Brazil', '2023-12-19'),
(44, 'user', 'Daniel', 'Torres', 'daniel.torres232@hotmail.com', '808929d581cbb154312ecee815d1692e', 22, 'Thailand', '2025-06-21'),
(45, 'user', 'Ethan', 'White', 'ethan.white800@mail.com', '621ed114ee9ea05a72675e58aa25f04e', 67, 'UAE', '2025-05-15'),
(46, 'user', 'Natalie', 'Torres', 'natalie.torres97@zoho.com', 'd9bb1c31df79aae3bb37894efe463dad', 30, 'France', '2024-01-20'),
(47, 'user', 'Isabella', 'Flores', 'isabella.flores84@outlook.com', '4e9bc0e96dd0fdddb6d4eff870cbf560', 67, 'Brazil', '2024-11-05'),
(48, 'user', 'Emma', 'Hernandez', 'emma.hernandez359@icloud.com', '30160440c50cd3f235bd7bc0d7443679', 24, 'South Korea', '2023-11-07'),
(49, 'user', 'Henry', 'Young', 'henry.young956@icloud.com', 'fc1ba479c0134e7a548ed188e5c199a9', 58, 'Chile', '2023-10-09'),
(50, 'user', 'Chloe', 'Hall', 'chloe.hall938@aol.com', '52ca102168a9d786849a933d206a0805', 25, 'France', '2024-01-12'),
(51, 'user', 'Victoria', 'Lee', 'victoria.lee653@yahoo.com', 'f094273986e6c28546ca62f35ce0e695', 20, 'Singapore', '2025-05-05'),
(52, 'user', 'Henry', 'Williams', 'henry.williams896@zoho.com', '357c3ddc286246dbfb6b57b22fee6335', 25, 'India', '2024-07-07'),
(53, 'user', 'Sophia', 'Scott', 'sophia.scott335@aol.com', '97a02fe62ad3b55d47fc65e185a37aea', 57, 'Indonesia', '2023-12-21'),
(55, 'user', 'Alexander', 'Perez', 'alexander.perez412@gmail.com', '317881c553eaf1a06356243ab4432a16', 27, 'Indonesia', '2024-03-19'),
(56, 'user', 'Leo', 'Nguyen', 'leo.nguyen596@mail.com', '490121d529f185fbe5fdc85634ac169c', 48, 'Indonesia', '2024-04-28'),
(58, 'user', 'Oscar', 'Ramirez', 'oscar.ramirez697@zoho.com', '7f660680d83c0b0d08871ad91be98a8c', 30, 'Nigeria', '2025-04-08'),
(59, 'user', 'Leo', 'Wright', 'leo.wright580@mail.com', '0cc817dc77afc5302fc01e4d6a78c07a', 23, 'India', '2025-03-19'),
(60, 'user', 'Jack', 'King', 'jack.king623@hotmail.com', 'fb6d21b216a6d2fab647a1dd81d95e7e', 25, 'Italy', '2024-04-16'),
(61, 'user', 'Thomas', 'White', 'thomas.white59@yahoo.com', 'c1ecf537a26c6714c855f00326ac1644', 46, 'Saudi Arabia', '2023-09-09'),
(62, 'user', 'Oscar', 'King', 'oscar.king883@outlook.com', '4b8bef644031fd820a79e2cad0aaa19d', 61, 'Germany', '2025-07-13'),
(63, 'user', 'Jack', 'Davis', 'jack.davis975@icloud.com', 'ba7a1a99a02c3d77ca174e5d8205957f', 51, 'China', '2023-09-23'),
(64, 'user', 'Noah', 'Harris', 'noah.harris687@outlook.com', '0b4b1a256c82f09e41b4239d0117d7d0', 28, 'India', '2024-02-11'),
(65, 'user', 'Zoe', 'Smith', 'zoe.smith258@yahoo.com', '00c2aee3b24f1c98347cf2d941d1443a', 44, 'Mexico', '2024-06-15'),
(67, 'user', 'Sophia', 'Rivera', 'sophia.rivera499@zoho.com', '19b1ace7f80f4fd73dd178baaf770b45', 38, 'Thailand', '2025-05-26'),
(68, 'user', 'Scarlett', 'Miller', 'scarlett.miller357@icloud.com', 'c49f9a8eab1a01474a12850ede7dd513', 61, 'Venezuela', '2024-01-24'),
(69, 'user', 'Olivia', 'Martinez', 'olivia.martinez394@mail.com', 'f9a2fd21896b0c4d1edf8ef7e1476c39', 40, 'Venezuela', '2025-04-16'),
(70, 'user', 'Nora', 'Taylor', 'nora.taylor824@hotmail.com', 'bbb6d75aa7e08fa97ae9a77092f35919', 31, 'UK', '2025-08-30'),
(71, 'user', 'Chloe', 'Walker', 'chloe.walker338@aol.com', '90f0f3261739e7100626567751015fbe', 24, 'Argentina', '2025-01-18'),
(72, 'user', 'Hannah', 'Nguyen', 'hannah.nguyen980@mail.com', 'e9c7c3ad4843ce1b2f3af493d0990726', 22, 'Australia', '2024-01-31'),
(73, 'user', 'Zoe', 'Thompson', 'zoe.thompson929@protonmail.com', '25d55ad283aa400af464c76d713c07ad', 29, 'Argentina', '2024-01-21'),
(74, 'user', 'Ava', 'Carter', 'ava.carter801@gmail.com', 'e47f2b431d3136bd5f9ef2f6273d5748', 22, 'Brazil', '2024-06-27'),
(75, 'user', 'Grace', 'Garcia', 'grace.garcia439@hotmail.com', '21d0089cb18a0fa16953befd06e68841', 54, 'Brazil', '2024-05-20'),
(76, 'user', 'Chloe', 'Campbell', 'chloe.campbell490@zoho.com', '5e0cb0f99ebbf60690dfd1332991ec03', 42, 'Singapore', '2025-05-12'),
(77, 'user', 'David', 'Hill', 'david.hill368@icloud.com', '6e45bce1e6520e8045ac13d9233690c9', 67, 'Germany', '2024-05-20'),
(78, 'user', 'Alexander', 'Gonzalez', 'alexander.gonzalez150@aol.com', 'c4d0e2c3fdd80860f27c0376750120bf', 32, 'South Africa', '2024-09-18'),
(80, 'user', 'Robert', 'Roberts', 'robert.roberts338@aol.com', 'ecb98755d2f31044f7aa3e2973ab51f5', 23, 'Russia', '2025-02-24'),
(81, 'user', 'Liam', 'Anderson', 'liam.anderson499@zoho.com', 'c76098ada09ddfef0fa7e9e117a7eafb', 36, 'Turkey', '2023-09-21'),
(82, 'user', 'Laura', 'Clark', 'laura.clark949@aol.com', 'e530cbcecabed659b539892431fb517a', 22, 'Argentina', '2023-12-13'),
(83, 'user', 'Zoe', 'Green', 'zoe.green204@gmail.com', '72fffb7f9983cc819ef9b6c3fc32892e', 36, 'Singapore', '2024-10-25'),
(84, 'user', 'Logan', 'Wright', 'logan.wright163@icloud.com', '01a2a99b4fc2db11ecc2799733a7eb54', 42, 'South Africa', '2024-04-29'),
(85, 'user', 'George', 'Brown', 'george.brown693@zoho.com', 'e2ee053f96878b102bc0d886cfa93da6', 60, 'Malaysia', '2024-09-03'),
(86, 'user', 'Emily', 'Mitchell', 'emily.mitchell276@outlook.com', 'd7e0347f1311b1de9893168fc9f19edf', 27, 'Singapore', '2024-03-27'),
(87, 'user', 'Noah', 'Baker', 'noah.baker259@yahoo.com', 'ce2016ab5d7bd3561aa24ad4fa9c5700', 45, 'Argentina', '2024-04-21'),
(88, 'user', 'Nora', 'Adams', 'nora.adams803@gmail.com', 'aa20b14f39650db1aebedf592521e043', 29, 'Chile', '2025-05-20'),
(89, 'user', 'Lily', 'White', 'lily.white84@outlook.com', '6b552bccf1ebc694c1daad1780c86d0a', 18, 'China', '2024-10-05'),
(90, 'user', 'Logan', 'Torres', 'logan.torres195@mail.com', '6ff04d373b0bccc10218be0394def5e0', 41, 'Egypt', '2024-08-07'),
(91, 'user', 'Grace', 'Campbell', 'grace.campbell212@gmail.com', '19bb4534c76ad4187e8ee4f0dcea5140', 21, 'Saudi Arabia', '2024-10-29'),
(92, 'user', 'Thomas', 'Flores', 'thomas.flores294@zoho.com', 'd59980dd380b34f1de6e2b956f15dd6b', 62, 'Italy', '2025-07-21'),
(93, 'user', 'Chloe', 'Nguyen', 'chloe.nguyen78@outlook.com', 'b5de79beeccbb567445770d79d656adf', 38, 'Australia', '2023-11-27'),
(94, 'user', 'Jacob', 'Mitchell', 'jacob.mitchell360@icloud.com', '8c75a48aab4f294b2b7251e952d0ed60', 25, 'South Africa', '2023-09-21'),
(95, 'user', 'Scarlett', 'Allen', 'scarlett.allen341@aol.com', '8dd641689101393521c354f0c92ae8ff', 37, 'France', '2024-10-12'),
(96, 'user', 'Scarlett', 'Miller', 'scarlett.miller524@protonmail.', '37b580a24c8432a5f31e84b58e96b279', 55, 'Germany', '2025-03-27'),
(97, 'user', 'Lily', 'Davis', 'lily.davis361@icloud.com', 'd3e78bea52415829e9e36c536c8ccbe0', 31, 'Chile', '2024-08-30'),
(98, 'user', 'Sofia', 'Hall', 'sofia.hall249@yahoo.com', '4736a8a51b37e423e0d9c1d2bf890a4c', 50, 'Turkey', '2023-12-24'),
(99, 'user', 'Madison', 'Martin', 'madison.martin245@hotmail.com', 'ae93219a9b0e979c0c7a15e857160267', 28, 'Kenya', '2023-10-31'),
(100, 'user', 'Robert', 'Lewis', 'robert.lewis486@outlook.com', 'efefbc2cb6209e8969bf7c43903fd20a', 24, 'Thailand', '2024-07-05'),
(136, 'superadmin', 'Dexter', 'Schiller', 'dexter.schiller@yahoo.com', '25d55ad283aa400af464c76d713c07ad', 38, 'Mauritius', '0000-00-00'),
(141, 'user', 'Hoyt', 'Raynor', 'your.email+fakedata50439@gmail', 'fd59bc58a39c3c64b270a4fab5c5b063', 46, 'Haiti', '2025-12-06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
