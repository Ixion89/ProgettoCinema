-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 05, 2018 alle 15:54
-- Versione del server: 10.1.30-MariaDB
-- Versione PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemadb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `film`
--

CREATE TABLE `film` (
  `titolo` char(70) NOT NULL,
  `regista` text NOT NULL,
  `anno` int(4) NOT NULL,
  `durata` int(3) NOT NULL,
  `generi` text NOT NULL,
  `cast` text NOT NULL,
  `casaproduzione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Ridefinire cast attori (array)';

--
-- Dump dei dati per la tabella `film`
--

INSERT INTO `film` (`titolo`, `regista`, `anno`, `durata`, `generi`, `cast`, `casaproduzione`) VALUES
('Madagascar', 'Eric Darnell', 2005, 86, 'Animazione,Commedia,Avventura', '', 'Dreamworks Animation'),
('Natale a New York', 'Neri Parenti', 2006, 111, 'Commedia', 'Christian De Sica,Massimo Ghini,Sabrina Ferilli', 'Aurelio De Laurentiis'),
('Natale sul Nilo', 'Neri Parenti', 2002, 103, 'Commedia,Avventura', 'Massimo Boldi,Christian De Sica,Biagio Izzo', 'Filmauro');

-- --------------------------------------------------------

--
-- Struttura della tabella `mappa`
--

CREATE TABLE `mappa` (
  `nomeschema` char(15) NOT NULL,
  `modello` text NOT NULL,
  `numero_file` int(3) NOT NULL,
  `numero_posti` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `mappa`
--

INSERT INTO `mappa` (`nomeschema`, `modello`, `numero_file`, `numero_posti`) VALUES
('Aurora', 'A-1-0#A-2-0#A-3-0#A-4-0#B-1-0#B-2-0#B-3-0#B-4-0#C-1-0#C-2-0#C-3-0#C-4-0#D-1-0#D-2-0#D-3-0#D-4-0#E-1-0#E-2-0#E-3-0#E-4-0#', 5, 4),
('Maestrale', 'A-1-0#A-2-0#A-3-0#A-4-0#A-5-0#B-1-0#B-2-0#B-3-0#B-4-0#B-5-0#C-1-0#C-2-0#C-3-0#C-4-0#C-5-0#', 3, 5),
('Zefiro', 'A-1-0#A-2-0#A-3-0#A-4-0#A-5-0#B-1-0#B-2-0#B-3-0#B-4-0#B-5-0#C-1-0#C-2-0#C-3-0#C-4-0#C-5-0#D-1-0#D-2-0#D-3-0#D-4-0#D-5-0#E-1-0#E-2-0#E-3-0#E-4-0#E-5-0#F-1-0#F-2-0#F-3-0#F-4-0#F-5-0#', 6, 5);

-- --------------------------------------------------------

--
-- Struttura della tabella `proiezione`
--

CREATE TABLE `proiezione` (
  `idProiezione` char(30) NOT NULL,
  `film` char(70) NOT NULL,
  `mappaproiezione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `proiezione`
--

INSERT INTO `proiezione` (`idProiezione`, `film`, `mappaproiezione`) VALUES
('180715#Aurora#16.00#2', 'Natale sul Nilo', 'A-1-0#A-2-0#A-3-0#A-4-0#B-1-0#B-2-0#B-3-0#B-4-0#C-1-0#C-2-0#C-3-0#C-4-0#D-1-0#D-2-0#D-3-0#D-4-0#E-1-0#E-2-0#E-3-0#E-4-0#'),
('180718#Zefiro#20.00#3', 'Madagascar', 'A-1-0#A-2-0#A-3-0#A-4-0#A-5-0#B-1-0#B-2-0#B-3-0#B-4-0#B-5-0#C-1-0#C-2-0#C-3-0#C-4-0#C-5-0#D-1-0#D-2-0#D-3-0#D-4-0#D-5-0#E-1-0#E-2-0#E-3-0#E-4-0#E-5-0#F-1-0#F-2-0#F-3-0#F-4-0#F-5-0#'),
('180720#Aurora#13.00#2', 'Madagascar', 'A-1-0#A-2-0#A-3-0#A-4-0#B-1-0#B-2-0#B-3-0#B-4-0#C-1-0#C-2-0#C-3-0#C-4-0#D-1-0#D-2-0#D-3-0#D-4-0#E-1-0#E-2-0#E-3-0#E-4-0#');

-- --------------------------------------------------------

--
-- Struttura della tabella `sala`
--

CREATE TABLE `sala` (
  `nomesala` char(15) NOT NULL,
  `numeroposti` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='nome schema lo abbiamo tolto x il momento';

--
-- Dump dei dati per la tabella `sala`
--

INSERT INTO `sala` (`nomesala`, `numeroposti`) VALUES
('Aurora', 20),
('Maestrale', 15),
('Zefiro', 30);

-- --------------------------------------------------------

--
-- Struttura della tabella `struttura`
--

CREATE TABLE `struttura` (
  `idfiliale` char(5) NOT NULL,
  `indirizzo` char(100) NOT NULL,
  `nome` char(20) NOT NULL,
  `telefono` char(12) NOT NULL,
  `email` char(30) NOT NULL,
  `orariapertura` text NOT NULL,
  `listasale` text NOT NULL,
  `idregistrazione` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `struttura`
--

INSERT INTO `struttura` (`idfiliale`, `indirizzo`, `nome`, `telefono`, `email`, `orariapertura`, `listasale`, `idregistrazione`) VALUES
('F0001', 'Via Roma 34, L\'Aquila', 'AstraAQ', '0862111111', 'astraaq@gmail.com', 'Dal Lunedì Al Martedì 16:00 - 22:00\r\nSabato e Domenica 10:00 - 24:00', 'Zefiro,Aurora', 1),
('F0002', 'Via Milano 85, Avezzano', 'AstraAZ', '0863222222', 'astraaz@yahoo.it', 'Dal Lunedì Al Martedì 16:00 - 22:00\r\nSabato e Domenica 10:00 - 24:00', 'Maestrale,Zefiro', 2);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`titolo`);

--
-- Indici per le tabelle `mappa`
--
ALTER TABLE `mappa`
  ADD PRIMARY KEY (`nomeschema`);

--
-- Indici per le tabelle `proiezione`
--
ALTER TABLE `proiezione`
  ADD PRIMARY KEY (`idProiezione`);

--
-- Indici per le tabelle `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`nomesala`);

--
-- Indici per le tabelle `struttura`
--
ALTER TABLE `struttura`
  ADD PRIMARY KEY (`idfiliale`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
