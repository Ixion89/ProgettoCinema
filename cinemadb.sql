-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 14, 2018 alle 17:29
-- Versione del server: 10.1.28-MariaDB
-- Versione PHP: 7.1.11

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
-- Struttura della tabella `biglietto`
--

CREATE TABLE `biglietto` (
  `IdBiglietto` int(11) NOT NULL,
  `IdPagamento` int(11) NOT NULL,
  `IDCredenziale` int(11) NOT NULL,
  `IDUtente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `credenziale`
--

CREATE TABLE `credenziale` (
  `CircuitoCarta` text NOT NULL,
  `NumeroCarta` int(11) NOT NULL,
  `Scadenza` date NOT NULL,
  `IDUtente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `film`
--

CREATE TABLE `film` (
  `Titolo` text NOT NULL,
  `Regista` text NOT NULL,
  `Anno` int(11) NOT NULL,
  `Durata` time NOT NULL,
  `Genere` text NOT NULL,
  `CasaProduzione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Ridefinire cast attori (array)';

-- --------------------------------------------------------

--
-- Struttura della tabella `item`
--

CREATE TABLE `item` (
  `Nome` text NOT NULL,
  `Valore` float NOT NULL,
  `Sconto` float NOT NULL,
  `Risultato` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `mappa`
--

CREATE TABLE `mappa` (
  `NumeroFile` int(11) NOT NULL,
  `NumPostiaFila` int(11) NOT NULL,
  `NomeSchema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `pagamento`
--

CREATE TABLE `pagamento` (
  `IDPagamento` int(11) NOT NULL,
  `Totale` int(11) NOT NULL,
  `IDBiglietto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `posto`
--

CREATE TABLE `posto` (
  `Fila` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `Occupato` tinyint(1) NOT NULL,
  `NomeSala` int(11) NOT NULL,
  `NomeStruttura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `proiezione`
--

CREATE TABLE `proiezione` (
  `TitoloFilm` text NOT NULL,
  `NomeSala` text NOT NULL,
  `Oraio` time NOT NULL,
  `MappaProiezione` blob NOT NULL,
  `Tipologia` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tipologia o me lo metto 2d o 3d';

-- --------------------------------------------------------

--
-- Struttura della tabella `sala`
--

CREATE TABLE `sala` (
  `NumeroPosti` int(11) NOT NULL,
  `Nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='nome schema lo abbiamo tolto x il momento';

-- --------------------------------------------------------

--
-- Struttura della tabella `sconto`
--

CREATE TABLE `sconto` (
  `IDSconto` int(11) NOT NULL,
  `Descrizione` text NOT NULL,
  `ValoreApplicazione` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `struttura`
--

CREATE TABLE `struttura` (
  `IDFiliale` int(11) NOT NULL,
  `Indirizzo` text NOT NULL,
  `Nome` text NOT NULL,
  `Telefono` int(11) NOT NULL,
  `E-mail` text NOT NULL,
  `Apertura` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `utenteregistrato`
--

CREATE TABLE `utenteregistrato` (
  `IDUtente` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Cognome` text NOT NULL,
  `Indirizzo` text NOT NULL,
  `NatoIl` date NOT NULL,
  `Città` text NOT NULL,
  `Telefono` int(11) NOT NULL,
  `E-Mail` text NOT NULL,
  `IDCredenziali` int(11) NOT NULL,
  `IDSconti` int(11) NOT NULL,
  `Username` int(11) NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `biglietto`
--
ALTER TABLE `biglietto`
  ADD PRIMARY KEY (`IdBiglietto`);

--
-- Indici per le tabelle `utenteregistrato`
--
ALTER TABLE `utenteregistrato`
  ADD PRIMARY KEY (`IDUtente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `biglietto`
--
ALTER TABLE `biglietto`
  MODIFY `IdBiglietto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `utenteregistrato`
--
ALTER TABLE `utenteregistrato`
  MODIFY `IDUtente` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
