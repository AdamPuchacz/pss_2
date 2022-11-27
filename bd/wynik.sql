-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Lis 2022, 20:23
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
-- Baza danych: `bazawynik`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wynik`
--

CREATE TABLE `wynik` (
  `id_wynik` int(11) NOT NULL,
  `wynik` float NOT NULL,
  `procent` float NOT NULL,
  `lata` float NOT NULL,
  `kwota` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `wynik`
--
ALTER TABLE `wynik`
  ADD PRIMARY KEY (`id_wynik`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `wynik`
--
ALTER TABLE `wynik`
  MODIFY `id_wynik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
