-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Sty 2023, 10:50
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `car_brand`
--

CREATE TABLE `car_brand` (
  `id_car_brand` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `car_brand`
--

INSERT INTO `car_brand` (`id_car_brand`, `brand_name`) VALUES
(1, 'Mazda'),
(2, 'Volkswagen'),
(3, 'Mercedes'),
(4, 'BMW'),
(5, 'Honda'),
(6, 'Nissan'),
(7, 'Ford');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `car_type`
--

CREATE TABLE `car_type` (
  `id_car_type` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `car_type`
--

INSERT INTO `car_type` (`id_car_type`, `type_name`) VALUES
(1, 'Sportowe'),
(2, 'SUV'),
(3, 'Limuzyna'),
(4, 'Terenowe'),
(5, 'Kabriolet');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `katalog`
--

CREATE TABLE `katalog` (
  `car_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `id_car_type` int(11) NOT NULL,
  `id_car_brand` int(11) NOT NULL,
  `price` float NOT NULL,
  `horse_power` varchar(50) NOT NULL,
  `v_max` varchar(50) NOT NULL,
  `engine` varchar(50) NOT NULL,
  `fuel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `katalog`
--

INSERT INTO `katalog` (`car_id`, `name`, `image`, `id_car_type`, `id_car_brand`, `price`, `horse_power`, `v_max`, `engine`, `fuel`) VALUES
(1, 'Mustang', 'mustang', 1, 7, 250, '480', '250', '5.0', 'benzyna'),
(2, 'Passat', 'passat', 3, 2, 1000, '120', '300', '1.9', 'diesel'),
(3, 'CX-5', 'mazda', 2, 1, 200, '147', '220', '2.0', 'benzyna')
(6, 'M5', '', 1, 4, 4320, '552', '310', '3.0', 'benzyna'),
(7, 'Qashqai', '', 1, 6, 245, '150', '200', '2.0', 'benzyna'),
(8, 'klasa S', '', 3, 3, 750, '250', '210', '3.0', 'diesel'),
(9, 'CRV', '', 2, 5, 190, '230', '200', '1.8', 'hybryda'),
(10, 'Phaeton', '', 3, 2, 200, '330', '200', '4.0', 'diesel');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservations`
--

CREATE TABLE `reservations` (
  `res_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `collectDate` date NOT NULL,
  `returnDate` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `token` varchar(100) NOT NULL,
  `createDate` date NOT NULL DEFAULT current_timestamp(),
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `reservations`
--

INSERT INTO `reservations` (`res_id`, `car_id`, `city`, `collectDate`, `returnDate`, `name`, `phone`, `email`, `payment`, `user_id`, `token`, `createDate`, `total_price`) VALUES
(20, 2, 'Gdynia', '2023-01-28', '2023-02-03', 'Jan Kowalski', '526778560', 'test@gmail.com', 'cash', 1, '6532593514', '2023-01-27', 6000),
(21, 3, 'Kraków', '2023-01-28', '2023-02-03', 'Aleksander Test', '111111111', 'ggghhh@onet.pl', 'prepayment', 2, '6297521094', '2023-01-27', 1200),
(22, 2, 'fgdfg', '2023-01-29', '2023-02-02', 'sdf', '432567121', 'test@onet.pl', 'prepayment', NULL, '3763992247', '2023-01-28', 4000),
(23, 2, 'yyy', '2023-01-29', '2023-02-03', 'sdfs', '567890123', 'tetw@test.pl', 'prepayment', 1, '2167741549', '2023-01-28', 5000);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `roles`
--

INSERT INTO `roles` (`id_role`, `role_name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'sprzedawca');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `id_role` int(10) DEFAULT NULL,
  `creation_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`user_id`, `login`, `pass`, `id_role`, `creation_date`) VALUES
(1, 'admin', 'admin', 1, '2023-01-27'),
(2, 'user', 'user', 2, '2023-01-27'),
(3, 'sprzedawca', 'sprzedawca', 3, '2023-01-27');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `car_brand`
--
ALTER TABLE `car_brand`
  ADD PRIMARY KEY (`id_car_brand`);

--
-- Indeksy dla tabeli `car_type`
--
ALTER TABLE `car_type`
  ADD PRIMARY KEY (`id_car_type`);

--
-- Indeksy dla tabeli `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `id_car_type` (`id_car_type`),
  ADD KEY `id_car_brand` (`id_car_brand`);

--
-- Indeksy dla tabeli `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `reservations_FK` (`car_id`),
  ADD KEY `reservations_FK_1` (`user_id`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `car_brand`
--
ALTER TABLE `car_brand`
  MODIFY `id_car_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `car_type`
--
ALTER TABLE `car_type`
  MODIFY `id_car_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `katalog`
--
ALTER TABLE `katalog`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `reservations`
--
ALTER TABLE `reservations`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT dla tabeli `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `katalog`
--
ALTER TABLE `katalog`
  ADD CONSTRAINT `katalog_ibfk_1` FOREIGN KEY (`id_car_type`) REFERENCES `car_type` (`id_car_type`),
  ADD CONSTRAINT `katalog_ibfk_2` FOREIGN KEY (`id_car_brand`) REFERENCES `car_brand` (`id_car_brand`);

--
-- Ograniczenia dla tabeli `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_FK` FOREIGN KEY (`car_id`) REFERENCES `katalog` (`car_id`),
  ADD CONSTRAINT `reservations_FK_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
