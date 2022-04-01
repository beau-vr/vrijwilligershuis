-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 apr 2022 om 15:16
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrijwilligershuis`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `indienen`
--

CREATE TABLE `indienen` (
  `id` int(11) NOT NULL,
  `naam` text NOT NULL,
  `tussenvoegsel` text NOT NULL,
  `achternaam` text NOT NULL,
  `e-mail` text NOT NULL,
  `vraag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reactie`
--

CREATE TABLE `reactie` (
  `id` int(11) NOT NULL,
  `naam` text NOT NULL,
  `tussenvoegsel` text DEFAULT NULL,
  `achternaam` text NOT NULL,
  `e-mail` text NOT NULL,
  `reactie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `indienen`
--
ALTER TABLE `indienen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reactie`
--
ALTER TABLE `reactie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `indienen`
--
ALTER TABLE `indienen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `reactie`
--
ALTER TABLE `reactie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
