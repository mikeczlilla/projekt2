-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Nov 17. 10:27
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Adatbázis: `2-es csoport`
--
CREATE DATABASE '2-es csoport' CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
-- --------------------------------------------------------
--
-- Tábla szerkezet ehhez a táblához `tabla`
--

CREATE TABLE `tabla` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `vezeteknev` varchar(50) NOT NULL,
  `keresztnev` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jelszo` varchar(255) NOT NULL,
  `szdatum` date NOT NULL,
  `tszam` varchar(25) NOT NULL,
  `iranyitoszam` int(4) NOT NULL,
  `varos` varchar(50) NOT NULL,
  `utca` varchar(100) NOT NULL,
  `haz_szam` int(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_hungarian_ci;
--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `tabla`
--
ALTER TABLE `tabla`
ADD PRIMARY KEY (`id`);
--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `tabla`
--
ALTER TABLE `tabla`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;