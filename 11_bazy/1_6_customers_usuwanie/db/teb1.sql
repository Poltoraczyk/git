-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Sty 2021, 11:25
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `teb1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `states_id` int(10) UNSIGNED NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `cities`
--

INSERT INTO `cities` (`id`, `states_id`, `city`) VALUES
(1, 1, 'Poznań'),
(2, 1, 'Gniezno'),
(3, 2, 'Legnica'),
(4, 3, 'Stargard'),
(5, 1, 'Jarocin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `cities_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `birthday` date DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `customers`
--

INSERT INTO `customers` (`id`, `cities_id`, `name`, `surname`, `birthday`, `height`) VALUES
(1, 2, 'Janusz', 'Kowalski', NULL, '175.00'),
(2, 3, 'Agnieszka', 'Nowak', '2000-08-02', '168.50'),
(3, 1, 'Paweł', 'Nowak', NULL, NULL),
(4, 1, 'Janusz', 'Kowalski', '1999-01-03', '180.00'),
(5, 1, 'Anna', 'Nowak', NULL, NULL),
(6, 1, 'Krystian', 'Nowak', '2021-01-03', '173.00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `states`
--

INSERT INTO `states` (`id`, `state`) VALUES
(1, 'Wielkopolskie'),
(2, 'Dolnośląskie'),
(3, 'Zachodniopomorskie'),
(4, 'Śląskie'),
(5, 'Pomorskie'),
(6, 'Lubuskie'),
(7, 'Małopolskie');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_id` (`states_id`);

--
-- Indeksy dla tabeli `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_id` (`cities_id`);

--
-- Indeksy dla tabeli `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`states_id`) REFERENCES `states` (`id`);

--
-- Ograniczenia dla tabeli `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`cities_id`) REFERENCES `cities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
