-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 15, 2018 alle 16:55
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
-- Struttura della tabella `biglietto`
--

CREATE TABLE `biglietto` (
  `IdBiglietto` char(2) NOT NULL,
  `IdPagamento` char(6) NOT NULL,
  `Riepilogo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `credenziale`
--

CREATE TABLE `credenziale` (
  `CircuitoCarta` text NOT NULL,
  `NumeroCarta` int(18) NOT NULL,
  `Scadenza` date NOT NULL,
  `IDUtente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `film`
--

CREATE TABLE `film` (
  `Titolo` char(70) NOT NULL,
  `Regista` text NOT NULL,
  `Anno` int(4) NOT NULL,
  `Durata` int(3) NOT NULL,
  `Genere` text NOT NULL,
  `CasaProduzione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Ridefinire cast attori (array)';

-- --------------------------------------------------------

--
-- Struttura della tabella `item`
--

CREATE TABLE `item` (
  `IdProiezione` char(30) NOT NULL,
  `IdItem` char(5) NOT NULL,
  `Valore` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `mappa`
--

CREATE TABLE `mappa` (
  `NomeSchema` char(11) NOT NULL,
  `Schema` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `pagamento`
--

CREATE TABLE `pagamento` (
  `IDPagamento` char(6) NOT NULL,
  `Totale` float NOT NULL,
  `Pagato` tinyint(1) NOT NULL,
  `IdUtente` int(11) NOT NULL,
  `ListaItem` text NOT NULL,
  `IdFiliale` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `posto`
--

CREATE TABLE `posto` (
  `Fila` char(2) NOT NULL,
  `Numero` int(2) NOT NULL,
  `Occupato` tinyint(1) NOT NULL,
  `Proiezione` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `proiezione`
--

CREATE TABLE `proiezione` (
  `TitoloFilm` char(70) NOT NULL,
  `NomeSala` char(15) NOT NULL,
  `Oraio` time NOT NULL,
  `MappaProiezione` blob NOT NULL,
  `Tipologia` char(1) NOT NULL,
  `IdProiezione` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tipologia o me lo metto 2d o 3d';

-- --------------------------------------------------------

--
-- Struttura della tabella `registrazione`
--

CREATE TABLE `registrazione` (
  `IdRegistrazione` int(10) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Email` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `sala`
--

CREATE TABLE `sala` (
  `NumeroPosti` int(3) NOT NULL,
  `Nome` char(15) NOT NULL,
  `IdFiliale` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='nome schema lo abbiamo tolto x il momento';

-- --------------------------------------------------------

--
-- Struttura della tabella `sconto`
--

CREATE TABLE `sconto` (
  `IDSconto` int(11) NOT NULL,
  `Descrizione` text NOT NULL,
  `ValoreApplicazione` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `struttura`
--

CREATE TABLE `struttura` (
  `IDFiliale` char(10) NOT NULL,
  `Indirizzo` char(100) NOT NULL,
  `Nome` char(20) NOT NULL,
  `Telefono` int(12) NOT NULL,
  `Email` char(30) NOT NULL,
  `Apertura` text NOT NULL,
  `IdRegistrazione` int(10) NOT NULL
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
  `Telefono` int(12) NOT NULL,
  `Email` char(30) NOT NULL,
  `IDSconti` text NOT NULL,
  `IdRegistrazione` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `biglietto`
--
ALTER TABLE `biglietto`
  ADD PRIMARY KEY (`IdBiglietto`,`IdPagamento`),
  ADD KEY `IdPagamento` (`IdPagamento`);

--
-- Indici per le tabelle `credenziale`
--
ALTER TABLE `credenziale`
  ADD PRIMARY KEY (`NumeroCarta`),
  ADD KEY `IDUtente` (`IDUtente`);

--
-- Indici per le tabelle `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`Titolo`);

--
-- Indici per le tabelle `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`IdProiezione`,`IdItem`),
  ADD KEY `IdProiezione` (`IdProiezione`);

--
-- Indici per le tabelle `mappa`
--
ALTER TABLE `mappa`
  ADD PRIMARY KEY (`NomeSchema`);

--
-- Indici per le tabelle `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`IDPagamento`),
  ADD KEY `IdUtente` (`IdUtente`),
  ADD KEY `IdFiliale` (`IdFiliale`);

--
-- Indici per le tabelle `posto`
--
ALTER TABLE `posto`
  ADD PRIMARY KEY (`Fila`,`Numero`,`Proiezione`),
  ADD KEY `Proiezione` (`Proiezione`);

--
-- Indici per le tabelle `proiezione`
--
ALTER TABLE `proiezione`
  ADD PRIMARY KEY (`IdProiezione`),
  ADD KEY `NomeSala` (`NomeSala`),
  ADD KEY `TitoloFilm` (`TitoloFilm`);

--
-- Indici per le tabelle `registrazione`
--
ALTER TABLE `registrazione`
  ADD PRIMARY KEY (`IdRegistrazione`);

--
-- Indici per le tabelle `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`Nome`,`IdFiliale`),
  ADD KEY `IdFiliale` (`IdFiliale`);

--
-- Indici per le tabelle `sconto`
--
ALTER TABLE `sconto`
  ADD PRIMARY KEY (`IDSconto`);

--
-- Indici per le tabelle `struttura`
--
ALTER TABLE `struttura`
  ADD PRIMARY KEY (`IDFiliale`),
  ADD KEY `IdRegistrazione` (`IdRegistrazione`);

--
-- Indici per le tabelle `utenteregistrato`
--
ALTER TABLE `utenteregistrato`
  ADD PRIMARY KEY (`IDUtente`),
  ADD KEY `IdRegistrazione` (`IdRegistrazione`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `registrazione`
--
ALTER TABLE `registrazione`
  MODIFY `IdRegistrazione` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `utenteregistrato`
--
ALTER TABLE `utenteregistrato`
  MODIFY `IDUtente` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `biglietto`
--
ALTER TABLE `biglietto`
  ADD CONSTRAINT `biglietto_ibfk_1` FOREIGN KEY (`IdPagamento`) REFERENCES `pagamento` (`IDPagamento`);

--
-- Limiti per la tabella `proiezione`
--
ALTER TABLE `proiezione`
  ADD CONSTRAINT `proiezione_ibfk_1` FOREIGN KEY (`TitoloFilm`) REFERENCES `film` (`Titolo`),
  ADD CONSTRAINT `proiezione_ibfk_2` FOREIGN KEY (`NomeSala`) REFERENCES `sala` (`Nome`),
  ADD CONSTRAINT `proiezione_ibfk_3` FOREIGN KEY (`TitoloFilm`) REFERENCES `film` (`Titolo`),
  ADD CONSTRAINT `proiezione_ibfk_4` FOREIGN KEY (`NomeSala`) REFERENCES `sala` (`Nome`);

--
-- Limiti per la tabella `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `sala_ibfk_1` FOREIGN KEY (`IdFiliale`) REFERENCES `struttura` (`IDFiliale`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
