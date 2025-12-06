-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2025 at 06:14 PM
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
(2, 'user', 'Jane', 'Hernandez', 'jane.hernandez107@zoho.com', '259ec304150ba55550f466ed953084b6', 26, 'Mexico', '2024-01-15'),
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
(21, 'user', 'Abigail', 'Hernandez', 'abigail.hernandez402@gmail.com', 'f545685f248c63a7289b3d868e4776e4', 27, 'Kenya', '2024-11-12'),
(22, 'user', 'Lily', 'Harris', 'lily.harris121@protonmail.com', '01920517282de64712d819e09b3e478a', 43, 'Australia', '2024-08-30'),
(23, 'user', 'Jane', 'Scott', 'jane.scott858@yahoo.com', 'b90312572af05ae726337f75f543da09', 46, 'Turkey', '2025-03-28'),
(24, 'user', 'Isabella', 'Green', 'isabella.green577@icloud.com', '487b20f179d31cc9d5d8f69ee4a3af90', 59, 'Spain', '2025-08-21'),
(25, 'user', 'Jack', 'Rivera', 'jack.rivera375@icloud.com', 'a425594ec0dc545b65f98c9d6cb33858', 51, 'China', '2024-07-07'),
(26, 'user', 'Ava', 'Walker', 'ava.walker821@gmail.com', 'e9edb34919d9992e25d4107100f40b4d', 67, 'Spain', '2024-01-25'),
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
(54, 'user', 'Abigail', 'Robinson', 'abigail.robinson863@yahoo.com', '08ac82b9477654e189910b602409d199', 67, 'Singapore', '2023-10-03'),
(55, 'user', 'Alexander', 'Perez', 'alexander.perez412@gmail.com', '317881c553eaf1a06356243ab4432a16', 27, 'Indonesia', '2024-03-19'),
(56, 'user', 'Leo', 'Nguyen', 'leo.nguyen596@mail.com', '490121d529f185fbe5fdc85634ac169c', 48, 'Indonesia', '2024-04-28'),
(57, 'user', 'Alexander', 'Smith', 'alexander.smith422@gmail.com', 'ab95f4748809f685a71d29c9671328fd', 21, 'Philippines', '2024-09-08'),
(58, 'user', 'Oscar', 'Ramirez', 'oscar.ramirez697@zoho.com', '7f660680d83c0b0d08871ad91be98a8c', 30, 'Nigeria', '2025-04-08'),
(59, 'user', 'Leo', 'Wright', 'leo.wright580@mail.com', '0cc817dc77afc5302fc01e4d6a78c07a', 23, 'India', '2025-03-19'),
(60, 'user', 'Jack', 'King', 'jack.king623@hotmail.com', 'fb6d21b216a6d2fab647a1dd81d95e7e', 25, 'Italy', '2024-04-16'),
(61, 'user', 'Thomas', 'White', 'thomas.white59@yahoo.com', 'c1ecf537a26c6714c855f00326ac1644', 46, 'Saudi Arabia', '2023-09-09'),
(62, 'user', 'Oscar', 'King', 'oscar.king883@outlook.com', '4b8bef644031fd820a79e2cad0aaa19d', 61, 'Germany', '2025-07-13'),
(63, 'user', 'Jack', 'Davis', 'jack.davis975@icloud.com', 'ba7a1a99a02c3d77ca174e5d8205957f', 51, 'China', '2023-09-23'),
(64, 'user', 'Noah', 'Harris', 'noah.harris687@outlook.com', '0b4b1a256c82f09e41b4239d0117d7d0', 28, 'India', '2024-02-11'),
(65, 'user', 'Zoe', 'Smith', 'zoe.smith258@yahoo.com', '00c2aee3b24f1c98347cf2d941d1443a', 44, 'Mexico', '2024-06-15'),
(66, 'user', 'David', 'Harris', 'david.harris888@outlook.com', '0d5469b2e99857c7bf00c643524e0951', 37, 'Malaysia', '2025-02-02'),
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
(79, 'user', 'William', 'Green', 'william.green777@icloud.com', 'e99c271d21d82ae8534a73df28e0d75d', 57, 'Philippines', '2024-04-15'),
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
(137, 'admin', 'Alicia', 'Gottlieb', 'alicia.golltieb@gmail.com', '25d55ad283aa400af464c76d713c07ad', 56, 'Canada', '0000-00-00'),
(136, 'superadmin', 'Dexter', 'Schiller', 'dexter.schiller@yahoo.com', '25d55ad283aa400af464c76d713c07ad', 466, 'Mauritius', '0000-00-00'),
(141, 'user', 'Hoyt', 'Raynor', 'your.email+fakedata50439@gmail', 'fd59bc58a39c3c64b270a4fab5c5b063', 46, 'Haiti', '2025-12-06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
