-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Gegenereerd op: 01 nov 2020 om 19:27
-- Serverversie: 5.7.26
-- PHP-versie: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `fruits`
--
CREATE DATABASE IF NOT EXISTS `fruits` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fruits`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fruits`
--

CREATE TABLE `fruits` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `taste` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `fruits`
--

INSERT INTO `fruits` (`id`, `name`, `color`, `taste`) VALUES
(1, 'lemon', 'yellow', 'sour'),
(2, 'strawberry', 'red', 'sweet');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
