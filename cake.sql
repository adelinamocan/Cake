-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 02, 2022 la 06:38 PM
-- Versiune server: 8.0.26
-- Versiune PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `cake`
--

DELIMITER $$
--
-- Proceduri
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `procedura1` ()  begin
select nume, prenume 
from contact;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `procedura2` ()  begin
select lastName, firstName 
from user;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `procedura3` ()  begin
select denumire
from categori;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `cart`
--

CREATE TABLE `cart` (
  `id_comanda` int NOT NULL,
  `id_produs` int NOT NULL,
  `id_users` int NOT NULL,
  `nume` int NOT NULL,
  `pret` varchar(100) NOT NULL,
  `imagine` varchar(500) NOT NULL,
  `cantitate` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `categori`
--

CREATE TABLE `categori` (
  `id_categorie` int NOT NULL,
  `denumire` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Eliminarea datelor din tabel `categori`
--

INSERT INTO `categori` (`id_categorie`, `denumire`) VALUES
(1, 'Fanta'),
(2, 'Carpati'),
(3, 'Nuci'),
(4, 'Snickers');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int NOT NULL,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mesaj` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Eliminarea datelor din tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `nume`, `prenume`, `email`, `mesaj`) VALUES
(1, '', '', 'adelinamocan75@gmail.com', 0x61),
(2, 'A', 'A', 'adelinamocan75@gmail.com', 0x41),
(3, 'Pop', 'Maria', 'maria_pop@gmail.com', 0x42756e61207a69756121),
(14, 'Pop', 'Maria', 'maria_pop@gmail.com', 0x42756e61207a69756121),
(15, 'Pop', 'Maria', 'maria_pop@gmail.com', 0x42756e61207a69756121),
(16, 'Ionescu', 'Raluca', 'ionescu_raluca@gmail.com', 0x42756e61207a6975612120),
(17, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x42756e61207a6975612120),
(18, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x42756e61207a6975612120),
(19, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x42756e61207a6975612120),
(20, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x42756e61207a6975612120),
(21, 'John ', 'Ion', 'john_ion@gmail.com', 0x42756e61207a69756121),
(22, 'John ', 'Ion', 'john_ion@gmail.com', 0x42756e61207a69756121),
(23, 'John ', 'Ion', 'john_ion@gmail.com', 0x42756e61207a69756121),
(24, 'John ', 'Ion', 'john_ion@gmail.com', 0x42756e61207a69756121),
(25, 'John ', 'Ion', 'john_ion@gmail.com', 0x42756e61207a69756121),
(26, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x4164656c696e61),
(27, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x4164656c696e61),
(28, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x4164656c696e61),
(29, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x41),
(30, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x6b),
(31, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x61),
(32, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x61),
(33, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x61),
(34, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x61),
(35, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x61),
(36, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x61),
(37, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x61),
(38, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x61),
(39, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x61),
(40, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x61),
(41, 'Popa', 'Karla', 'popa_karla@gmail.com', 0x61),
(42, 'MOCAN', 'o', 'maria_pop@gmail.com', 0x6c),
(43, 'MOCAN', 'o', 'maria_pop@gmail.com', 0x6c),
(44, 'MOCAN', 'o', 'maria_pop@gmail.com', 0x6c),
(45, 'MOCAN', 'o', 'maria_pop@gmail.com', 0x6c),
(46, 'MOCAN', 'o', 'maria_pop@gmail.com', 0x6c),
(47, 'MOCAN', 'o', 'maria_pop@gmail.com', 0x6c),
(48, 'Popa', 'Karla', 'maria_pop@gmail.com', 0x42756e6121),
(49, 'a', 'a', 'adelinamocan75@gmail.com', 0x61),
(50, 'A', 'Q', 'Q@s', 0x51),
(51, 'Popa', 'p', 'adelinamocan75@gmail.com', 0x61),
(52, 'Popa', 'p', 'adelinamocan75@gmail.com', 0x61),
(53, 'Popa', 'p', 'adelinamocan75@gmail.com', 0x61),
(54, 'Popa', 'p', 'adelinamocan75@gmail.com', 0x61),
(55, 'Popa', 'p', 'adelinamocan75@gmail.com', 0x61),
(56, 'Popa', 'p', 'adelinamocan75@gmail.com', 0x61),
(57, 'Popa', 'p', 'adelinamocan75@gmail.com', 0x61),
(58, 'Popa', 'p', 'adelinamocan75@gmail.com', 0x61),
(59, 'Popa', 'p', 'adelinamocan75@gmail.com', 0x61);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `prajituri_imagine`
--

CREATE TABLE `prajituri_imagine` (
  `id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` varchar(100) NOT NULL,
  `id_produs` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Eliminarea datelor din tabel `prajituri_imagine`
--

INSERT INTO `prajituri_imagine` (`id`, `name`, `image`, `price`, `id_produs`) VALUES
(1, 'Carpati', 'img_prajituri/carpati.jpg', '41', NULL),
(2, 'Rulada', 'img_prajituri/rulada.jpg', '21', NULL),
(3, 'Nuci', 'img_prajituri/nuci.jpg', '57', NULL),
(4, 'Oreo', 'img_prajituri/oreo.jpg', '60', NULL),
(5, 'Kinder', 'img_prajituri/kinder.jpg', '70', NULL),
(7, 'Snickers', 'img_prajituri/snickers.jpg', '81', NULL),
(9, 'Fanta', 'img_prajituri/fanta.jpg', '7', NULL);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `produse`
--

CREATE TABLE `produse` (
  `id_produs` int NOT NULL,
  `produs_name` varchar(500) NOT NULL,
  `produs_den` varchar(500) NOT NULL,
  `produs_img` varchar(500) NOT NULL,
  `produs_cat` int NOT NULL,
  `id_categorie` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Eliminarea datelor din tabel `produse`
--

INSERT INTO `produse` (`id_produs`, `produs_name`, `produs_den`, `produs_img`, `produs_cat`, `id_categorie`) VALUES
(1, 'Fanta', 'Ingrediente', 'img_prajituri/fanta.jpg', 3, 1);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id_users` int NOT NULL,
  `lastName` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `firstName` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `emailAdress` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id_users`, `lastName`, `firstName`, `emailAdress`, `password`) VALUES
(1, 'das', 'adsa', 'dsa', '$2y$10$l/Rb12QGQNnThVRq1zR46uj7za972.w0nixcBdVp5cpEi7DSQCIGO'),
(2, 'user1', 'user1', 'user1', '$2y$10$CFRcbBKt9RAfJonNdAQPm.zFoxTuNDmjvvoQHqmnZew3MjkwxCnqC'),
(3, 'user1', 'user2', 'user2', '$2y$10$/BspCzl4L6nLW098kcF1HeY6gEsflKrFFwOJZVto0cLlv5R5v3Rri'),
(71, 'user3', 'user3', 'user3', '$2y$10$Hv8VenbeShzlZGtwNcQ6me/Z19wr3zv0ER936zK0T19uHNbVKMdA.'),
(72, 'admin', 'admin', 'admin', '$2y$10$mTq3CnkZZA74ZSYYAxzkq.fSAznzDL1pw3kIK9nI7BXLPnGWssxDu');

-- --------------------------------------------------------

--
-- Substitut structură pentru vizualizare `vedere1`
-- (Vezi mai jos vizualizarea actuală)
--
CREATE TABLE `vedere1` (
`lastName` varchar(8)
,`firstName` varchar(9)
);

-- --------------------------------------------------------

--
-- Substitut structură pentru vizualizare `vedere2`
-- (Vezi mai jos vizualizarea actuală)
--
CREATE TABLE `vedere2` (
`id_contact` int
,`nume` varchar(100)
,`prenume` varchar(100)
,`email` varchar(200)
,`mesaj` longblob
);

-- --------------------------------------------------------

--
-- Substitut structură pentru vizualizare `vedere3`
-- (Vezi mai jos vizualizarea actuală)
--
CREATE TABLE `vedere3` (
`id` int
,`name` text
,`image` varchar(200)
,`price` varchar(100)
,`id_produs` int
);

-- --------------------------------------------------------

--
-- Structură pentru vizualizare `vedere1`
--
DROP TABLE IF EXISTS `vedere1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vedere1`  AS SELECT 'lastName' AS `lastName`, 'firstName' AS `firstName` FROM `users` WHERE ('lastName' = 'Ana') ;

-- --------------------------------------------------------

--
-- Structură pentru vizualizare `vedere2`
--
DROP TABLE IF EXISTS `vedere2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vedere2`  AS SELECT `contact`.`id_contact` AS `id_contact`, `contact`.`nume` AS `nume`, `contact`.`prenume` AS `prenume`, `contact`.`email` AS `email`, `contact`.`mesaj` AS `mesaj` FROM `contact` ;

-- --------------------------------------------------------

--
-- Structură pentru vizualizare `vedere3`
--
DROP TABLE IF EXISTS `vedere3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vedere3`  AS SELECT `prajituri_imagine`.`id` AS `id`, `prajituri_imagine`.`name` AS `name`, `prajituri_imagine`.`image` AS `image`, `prajituri_imagine`.`price` AS `price`, `prajituri_imagine`.`id_produs` AS `id_produs` FROM `prajituri_imagine` ;

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_comanda`),
  ADD KEY `id_comanda` (`id_comanda`),
  ADD KEY `id_users` (`id_produs`),
  ADD KEY `id_produs` (`id_produs`);

--
-- Indexuri pentru tabele `categori`
--
ALTER TABLE `categori`
  ADD PRIMARY KEY (`id_categorie`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Indexuri pentru tabele `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexuri pentru tabele `prajituri_imagine`
--
ALTER TABLE `prajituri_imagine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_produs` (`id_produs`),
  ADD KEY `id_2` (`id`);

--
-- Indexuri pentru tabele `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`id_produs`),
  ADD KEY `id_categorie` (`id_categorie`),
  ADD KEY `id_produs` (`id_produs`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `emailAdress` (`emailAdress`),
  ADD KEY `id_users` (`id_users`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `cart`
--
ALTER TABLE `cart`
  MODIFY `id_comanda` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `categori`
--
ALTER TABLE `categori`
  MODIFY `id_categorie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pentru tabele `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pentru tabele `produse`
--
ALTER TABLE `produse`
  MODIFY `id_produs` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_produs`) REFERENCES `produse` (`id_produs`);

--
-- Constrângeri pentru tabele `prajituri_imagine`
--
ALTER TABLE `prajituri_imagine`
  ADD CONSTRAINT `prajituri_imagine_ibfk_1` FOREIGN KEY (`id_produs`) REFERENCES `produse` (`id_produs`);

--
-- Constrângeri pentru tabele `produse`
--
ALTER TABLE `produse`
  ADD CONSTRAINT `produse_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categori` (`id_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
