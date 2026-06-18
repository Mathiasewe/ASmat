-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 04, 2026 at 12:00 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbogeris`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie_sprzetu`
--

CREATE TABLE `kategorie_sprzetu` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `kategorie_sprzetu`
--

INSERT INTO `kategorie_sprzetu` (`id`, `nazwa`) VALUES
(1, 'narty'),
(2, 'snowboard'),
(3, 'lyzwy'),
(4, 'obuwie narciarskie'),
(5, 'obuwie snowboardowe'),
(6, 'kaski'),
(7, 'google');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `metody_platnosci`
--

CREATE TABLE `metody_platnosci` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `metody_platnosci`
--

INSERT INTO `metody_platnosci` (`id`, `nazwa`) VALUES
(1, 'przelew'),
(2, 'BLIK'),
(3, 'karta platnicza'),
(4, 'gotowka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `platnosc`
--

CREATE TABLE `platnosc` (
  `id` int(11) NOT NULL,
  `kwota` int(11) NOT NULL,
  `data_platnosc` datetime NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_rezerwacje` int(11) NOT NULL,
  `id_metoda_platnosci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacja`
--

CREATE TABLE `rezerwacja` (
  `id` int(11) NOT NULL,
  `id_sprzet` int(11) NOT NULL,
  `id_uzytkownik` int(11) NOT NULL,
  `data_od` date NOT NULL,
  `data_do` date NOT NULL,
  `koszt_calkowity` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rezerwacja`
--

INSERT INTO `rezerwacja` (`id`, `id_sprzet`, `id_uzytkownik`, `data_od`, `data_do`, `koszt_calkowity`) VALUES
(25, 1, 2, '2026-01-16', '2026-01-16', 100);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rola`
--

CREATE TABLE `rola` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `rola`
--

INSERT INTO `rola` (`id`, `nazwa`) VALUES
(1, 'administrator'),
(2, 'kierownik'),
(3, 'pracownik'),
(4, 'klient');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sprzet`
--

CREATE TABLE `sprzet` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(100) NOT NULL,
  `rozmiar` varchar(20) NOT NULL,
  `cena_za_dobe` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `opis` varchar(1000) NOT NULL,
  `id_kategorie_sprzetu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `sprzet`
--

INSERT INTO `sprzet` (`id`, `nazwa`, `rozmiar`, `cena_za_dobe`, `status`, `opis`, `id_kategorie_sprzetu`) VALUES
(1, 'Narty Zjazdowe Rossignol NOVA', '156 cm', 100, 'dostepne', 'Narty Rossignol NOVA 6 bez trudu dostarczają doznań carvingowych i mogą być używane przez narciarki o dowolnym poziomie zaawansowania. ', 1),
(3, 'SKULL DURA Marco ', 's', 50, 'dostepne', 'JUNIORSKI KASK NARCIARSKI POC SKULL DURA Marco Odermatt Ed. Argentite Silver 2026', 6),
(6, 'GOGLE JULBO LAUNCHER', 'uniwersalny', 30, 'serwis', '', 7),
(10, 'NARTY STOCKLI LASER SX', '173', 150, 'dostepne', 'NARTY STOCKLI LASER SX + Salomon SRT Carbon D20 + Salomon SRT 12 Black 2026', 1),
(11, 'Narty Zjazdowe Rossignol NOVA', '156 cm', 100, 'dostepne', 'Narty Rossignol NOVA 6 bez trudu dostarczają doznań carvingowych i mogą być używane przez narciarki o dowolnym poziomie zaawansowania. ', 1),
(12, 'NARTY STOCKLI LASER SX', '173', 150, 'dostepne', 'NARTY STOCKLI LASER SX + Salomon SRT Carbon D20 + Salomon SRT 12 Black 2026', 1),
(13, 'NARTY STOCKLI LASER SX', '173', 150, 'dostepne', 'NARTY STOCKLI LASER SX + Salomon SRT Carbon D20 + Salomon SRT 12 Black 2026', 1),
(14, 'NARTY STOCKLI LASER SX', '173', 150, 'dostepne', 'NARTY STOCKLI LASER SX + Salomon SRT Carbon D20 + Salomon SRT 12 Black 2026', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `telefon` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(30) NOT NULL,
  `haslo` varchar(40) NOT NULL,
  `id_rola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `imie`, `nazwisko`, `telefon`, `email`, `login`, `haslo`, `id_rola`) VALUES
(1, 'admin', 'admin', 999999999, 'admin@admin.com', 'admin', 'admin', 1),
(2, 'Jan', 'Kowalski', 837384921, 'jankowalski@gmail.com', 'jan', 'jankowalski', 4),
(3, 'Anna', 'Nowak', 0, 'anna@wp.pl', 'Anna', 'annahaslo', 2),
(4, 'Kamil', 'Kowalczyk', 0, 'test@o2.pl', 'Kamil', 'Kamilhaslo', 3),
(8, 'Mat', 'test', 0, 'test@o2.pl', 'mat', 'mattest', 3),
(14, 'aaa', 'aaa', 0, 'annaa@wp.pl', 'aaa', 'aaaa', 3),
(15, 'mat', 'test', 0, 'test@o2.pl', 'mat2', 'mat2', 4),
(16, 'test3', 'test3', 0, 'test3@test.com', 'test3', 'test.12345678', 4),
(17, 'test4', 'test4', 0, 'test@o2.pl', 'test33', 'test4', 4),
(18, 'ttttt', 'tttt', 0, 'tt@g.com', 'test5', 'test', 4),
(19, 'mmm', 'mmm', 0, 'mmm@wp.pl', 'mamm', 'test8', 4);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kategorie_sprzetu`
--
ALTER TABLE `kategorie_sprzetu`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `metody_platnosci`
--
ALTER TABLE `metody_platnosci`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `platnosc`
--
ALTER TABLE `platnosc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_metoda_platnosci` (`id_metoda_platnosci`),
  ADD KEY `id_rezerwacje` (`id_rezerwacje`);

--
-- Indeksy dla tabeli `rezerwacja`
--
ALTER TABLE `rezerwacja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sprzet` (`id_sprzet`),
  ADD KEY `id_uzytkownik` (`id_uzytkownik`);

--
-- Indeksy dla tabeli `rola`
--
ALTER TABLE `rola`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `sprzet`
--
ALTER TABLE `sprzet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategorie_sprzetu` (`id_kategorie_sprzetu`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rola` (`id_rola`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorie_sprzetu`
--
ALTER TABLE `kategorie_sprzetu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `metody_platnosci`
--
ALTER TABLE `metody_platnosci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `platnosc`
--
ALTER TABLE `platnosc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rezerwacja`
--
ALTER TABLE `rezerwacja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `rola`
--
ALTER TABLE `rola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sprzet`
--
ALTER TABLE `sprzet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `platnosc`
--
ALTER TABLE `platnosc`
  ADD CONSTRAINT `platnosc_ibfk_1` FOREIGN KEY (`id_metoda_platnosci`) REFERENCES `metody_platnosci` (`id`),
  ADD CONSTRAINT `platnosc_ibfk_2` FOREIGN KEY (`id_rezerwacje`) REFERENCES `rezerwacja` (`id`);

--
-- Constraints for table `rezerwacja`
--
ALTER TABLE `rezerwacja`
  ADD CONSTRAINT `rezerwacja_ibfk_1` FOREIGN KEY (`id_sprzet`) REFERENCES `sprzet` (`id`),
  ADD CONSTRAINT `rezerwacja_ibfk_2` FOREIGN KEY (`id_uzytkownik`) REFERENCES `uzytkownicy` (`id`);

--
-- Constraints for table `sprzet`
--
ALTER TABLE `sprzet`
  ADD CONSTRAINT `sprzet_ibfk_1` FOREIGN KEY (`id_kategorie_sprzetu`) REFERENCES `kategorie_sprzetu` (`id`);

--
-- Constraints for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD CONSTRAINT `uzytkownicy_ibfk_1` FOREIGN KEY (`id_rola`) REFERENCES `rola` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
