-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Hoszt: 127.0.0.1
-- Létrehozás ideje: 2016. Már 29. 21:25
-- Szerver verzió: 5.6.21
-- PHP verzió: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `wobprojekt`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
`bid` int(11) NOT NULL,
  `brandname` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `brands`
--

INSERT INTO `brands` (`bid`, `brandname`) VALUES
(1, 'Suzuki'),
(2, 'Trabant'),
(3, 'Opel Astra'),
(4, 'Citröen C4'),
(5, 'Dodge Viper'),
(6, 'Opel Vectra'),
(7, 'Volkswagen Golf'),
(8, 'Lada 1200');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
`cid` int(11) NOT NULL,
  `brandid` int(11) NOT NULL,
  `colorid` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `motorsize` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `cars`
--

INSERT INTO `cars` (`cid`, `brandid`, `colorid`, `type`, `motorsize`) VALUES
(1, 2, 1, 'Kabrió', 597),
(2, 5, 3, 'Kabrió', 8385),
(4, 4, 4, 'Terepjáró', 6500),
(5, 3, 1, 'Kombi', 2500),
(6, 2, 8, 'Kombi', 600),
(7, 1, 5, 'Teherautó', 7000),
(8, 4, 6, 'Sport Autó', 3500),
(9, 7, 9, 'Kombi', 2500),
(10, 2, 9, 'Kabrió', 580),
(11, 8, 9, 'Kabrió', 1500),
(12, 6, 1, 'Kabrió', 5500),
(13, 1, 6, 'Terepjáró', 3000),
(14, 6, 8, 'Kombi', 3500),
(15, 8, 9, 'Kombi', 800),
(16, 5, 7, 'Kabrió', 8329),
(17, 2, 6, 'Kombi', 500),
(18, 2, 9, 'Kabrió', 600),
(19, 3, 5, 'Egyterű', 6000),
(20, 7, 6, 'Kombi', 6500),
(21, 8, 2, 'Kabrió', 800),
(23, 5, 7, 'Kabrió', 8836);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
`id` int(11) NOT NULL,
  `colorname` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `colors`
--

INSERT INTO `colors` (`id`, `colorname`) VALUES
(1, 'Magenta'),
(2, 'Zöld'),
(3, 'Kék'),
(4, 'Fehér'),
(5, 'Ezüst'),
(6, 'Fekete'),
(7, 'Citromsárga'),
(8, 'Metálkék'),
(9, 'Pink');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
 ADD PRIMARY KEY (`bid`), ADD KEY `id` (`bid`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
