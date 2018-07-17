-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 22, 2018 alle 15:03
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
  `idbiglietto` char(2) NOT NULL,
  `idpagamento` char(6) NOT NULL,
  `riepilogo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `credenziale`
--

CREATE TABLE `credenziale` (
  `circuitocarta` text NOT NULL,
  `numerocarta` int(18) NOT NULL,
  `scadenza` date NOT NULL,
  `idutente` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Struttura della tabella `item`
--

CREATE TABLE `item` (
  `nome` char(35) NOT NULL,
  `valore` float NOT NULL,
  `idproiezione` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `mappa`
--

CREATE TABLE `mappa` (
  `nomeschema` char(11) NOT NULL,
  `modello` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `pagamento`
--

CREATE TABLE `pagamento` (
  `idpagamento` char(6) NOT NULL,
  `totale` float NOT NULL,
  `pagato` tinyint(1) NOT NULL,
  `idutente` int(11) NOT NULL,
  `listaitem` text NOT NULL,
  `idfiliale` char(10) NOT NULL,
  `persona` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `posto`
--

CREATE TABLE `posto` (
  `fila` char(2) NOT NULL,
  `numero` int(2) NOT NULL,
  `occupato` tinyint(1) NOT NULL,
  `proiezione` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `profilo`
--

CREATE TABLE `profilo` (
  `idutente` int(11) NOT NULL,
  `nome` text NOT NULL,
  `cognome` text NOT NULL,
  `indirizzo` text NOT NULL,
  `datadinascita` date NOT NULL,
  `citta` text NOT NULL,
  `telefono` int(12) NOT NULL,
  `listasconti` text NOT NULL,
  `IdRegistrazione` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `proiezione`
--

CREATE TABLE `proiezione` (
  `film` char(70) NOT NULL,
  `sala` char(15) NOT NULL,
  `giorno` date NOT NULL,
  `orario` time NOT NULL,
  `mappaproiezione` blob NOT NULL,
  `tipo` char(1) NOT NULL,
  `idproiezione` char(30) NOT NULL
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
  `numeroposti` int(3) NOT NULL,
  `nomeschema` char(15) NOT NULL,
  `nomesala` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='nome schema lo abbiamo tolto x il momento';

-- --------------------------------------------------------

--
-- Struttura della tabella `sconto`
--

CREATE TABLE `sconto` (
  `idsconto` int(11) NOT NULL,
  `descrizione` text NOT NULL,
  `baseapplicazione` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `struttura`
--

CREATE TABLE `struttura` (
  `idfiliale` char(10) NOT NULL,
  `indirizzo` char(100) NOT NULL,
  `nome` char(20) NOT NULL,
  `telefono` int(12) NOT NULL,
  `email` char(30) NOT NULL,
  `orariapertura` text NOT NULL,
  `idregistrazione` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `biglietto`
--
ALTER TABLE `biglietto`
  ADD PRIMARY KEY (`idbiglietto`,`idpagamento`),
  ADD KEY `IdPagamento` (`idpagamento`);

--
-- Indici per le tabelle `credenziale`
--
ALTER TABLE `credenziale`
  ADD PRIMARY KEY (`numerocarta`),
  ADD KEY `IDUtente` (`idutente`);

--
-- Indici per le tabelle `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`titolo`);

--
-- Indici per le tabelle `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`nome`),
  ADD KEY `IdProiezione` (`nome`);

--
-- Indici per le tabelle `mappa`
--
ALTER TABLE `mappa`
  ADD PRIMARY KEY (`nomeschema`);

--
-- Indici per le tabelle `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`idpagamento`),
  ADD KEY `IdUtente` (`idutente`),
  ADD KEY `IdFiliale` (`idfiliale`);

--
-- Indici per le tabelle `posto`
--
ALTER TABLE `posto`
  ADD PRIMARY KEY (`fila`,`numero`,`proiezione`),
  ADD KEY `Proiezione` (`proiezione`);

--
-- Indici per le tabelle `profilo`
--
ALTER TABLE `profilo`
  ADD PRIMARY KEY (`idutente`),
  ADD KEY `IdRegistrazione` (`IdRegistrazione`);

--
-- Indici per le tabelle `proiezione`
--
ALTER TABLE `proiezione`
  ADD PRIMARY KEY (`idproiezione`),
  ADD KEY `NomeSala` (`sala`),
  ADD KEY `TitoloFilm` (`film`);

--
-- Indici per le tabelle `registrazione`
--
ALTER TABLE `registrazione`
  ADD PRIMARY KEY (`IdRegistrazione`);

--
-- Indici per le tabelle `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`nomeschema`,`nomesala`),
  ADD KEY `IdFiliale` (`nomesala`);

--
-- Indici per le tabelle `sconto`
--
ALTER TABLE `sconto`
  ADD PRIMARY KEY (`idsconto`);

--
-- Indici per le tabelle `struttura`
--
ALTER TABLE `struttura`
  ADD PRIMARY KEY (`idfiliale`),
  ADD KEY `IdRegistrazione` (`idregistrazione`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `profilo`
--
ALTER TABLE `profilo`
  MODIFY `idutente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `registrazione`
--
ALTER TABLE `registrazione`
  MODIFY `IdRegistrazione` int(10) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `biglietto`
--
ALTER TABLE `biglietto`
  ADD CONSTRAINT `biglietto_ibfk_1` FOREIGN KEY (`idpagamento`) REFERENCES `pagamento` (`IDPagamento`);

--
-- Limiti per la tabella `proiezione`
--
ALTER TABLE `proiezione`
  ADD CONSTRAINT `proiezione_ibfk_1` FOREIGN KEY (`film`) REFERENCES `film` (`Titolo`),
  ADD CONSTRAINT `proiezione_ibfk_2` FOREIGN KEY (`sala`) REFERENCES `sala` (`nomeschema`),
  ADD CONSTRAINT `proiezione_ibfk_3` FOREIGN KEY (`film`) REFERENCES `film` (`Titolo`),
  ADD CONSTRAINT `proiezione_ibfk_4` FOREIGN KEY (`sala`) REFERENCES `sala` (`nomeschema`);

--
-- Limiti per la tabella `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `sala_ibfk_1` FOREIGN KEY (`nomesala`) REFERENCES `struttura` (`IDFiliale`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
