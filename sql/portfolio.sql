-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 13 apr 2018 om 21:44
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `webdev`
--

CREATE TABLE `webdev` (
  `webid` int(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `context` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `webdev`
--

INSERT INTO `webdev` (`webid`, `img`, `context`) VALUES
(1, 'images/calc.png', 'The first assignment we got for Web development and our first use of php, html and css'),
(2, 'images/rgindex.png', 'Our first website where we got to arrays and use php to echonames songs and pictures'),
(3, 'images/rgplay.jpg', 'In the actuel play song part we used javascript to hide 1/3 of the page, and used php to echo the songs and play the songs'),
(4, 'images/gwindex.jpg', 'The home page of the website, the 3 pictures rederect to its specific id and goes to the webpage that has the same id as the picture'),
(5, 'images/gwgames.jpg', 'The full on shoppage, there are 4 1 that has all 3 categories and 3 that are linked to their id from the database, all the prices pictures and names come from a database and is inserted via php'),
(6, 'images/aboutme.jpg', 'the page that should have information about the website put it has filling text'),
(7, 'images/gwcontact.jpg', 'A working contact page that sends you an e-mail'),
(8, 'images/checkout.jpg', 'Static checkout page, pictures are inserted from database with php '),
(9, 'images/dcgame.jpg', 'all pictures are inserted from a database, all 5 logos are connected to id\'s and it will show 3 people that have the same ID as the one you clicked, clicking on 1 hero will show the data with the same ID as the person you just clicked on, you can review every person. the data is sent to a database and gets sent back to the webpage'),
(10, 'images/port.png', 'The Home page of my portfolio with image slider and fully responsive webpages'),
(11, 'images/gb.png', 'A form that sends data to a database and pulls it out right afther'),
(12, 'images/vault.png', 'First project we made use of javascript, using the correct code wil make the green bar flash and if the code is wrong the red one will flash '),
(13, 'images/ccalc.png', 'Out first project a simple calculator'),
(14, 'images/mn.png', 'We leared a lot of diffrent things to use in our future projects and most importantly we learned how to use sounds'),
(15, 'images/cvaualt.png', 'First use of classes '),
(16, 'images/drag.png', 'We used a lot of diffrent things in this project from what we\'ve learned before'),
(17, 'images/tsl.png', 'Loading screen of tunestore'),
(18, 'images/tsi.png', 'The actual tunestore');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `webdev`
--
ALTER TABLE `webdev`
  ADD PRIMARY KEY (`webid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
