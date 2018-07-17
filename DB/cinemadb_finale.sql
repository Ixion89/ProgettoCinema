-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 17, 2018 alle 17:18
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
  `riepilogo` text NOT NULL,
  `idbiglietto` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `biglietto`
--

INSERT INTO `biglietto` (`riepilogo`, `idbiglietto`) VALUES
('Data 15-07-18 Ora 20.00\nFilm in 3D: Madagascar\nSala Zefiro Posto 3A\nPrezzo: 10\n\nData 15-07-18 Ora 20.00\nFilm in 3D: Madagascar\nSala Zefiro Posto 3A\nPrezzo: 10\n\nTotale Pagato: 20', '51aff8c2'),
('Data 20-07-18 Ora 13.00\nFilm in 2D: Madagascar\nSala Aurora Posto 2B\nPrezzo: 5\n\nData 20-07-18 Ora 13.00\nFilm in 2D: Madagascar\nSala Aurora Posto 2B\nPrezzo: 5\n\nTotale Pagato: 10', '588c365d');

-- --------------------------------------------------------

--
-- Struttura della tabella `credenziale`
--

CREATE TABLE `credenziale` (
  `circuitocarta` text NOT NULL,
  `numerocarta` bigint(16) NOT NULL,
  `scadenza` char(7) NOT NULL,
  `id` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `credenziale`
--

INSERT INTO `credenziale` (`circuitocarta`, `numerocarta`, `scadenza`, `id`) VALUES
('cassa', 0, '0000-00', 'f3'),
('cassa', 0, '0000-00', 'f4'),
('mastercard', 1234567891111111, '2019-08', 'u1'),
('visa', 1234567892222222, '2018-03', 'u2');

-- --------------------------------------------------------

--
-- Struttura della tabella `filiale`
--

CREATE TABLE `filiale` (
  `idfiliale` char(11) NOT NULL,
  `indirizzo` char(100) NOT NULL,
  `nome` char(20) NOT NULL,
  `telefono` char(12) NOT NULL,
  `email` char(30) NOT NULL,
  `orariapertura` text NOT NULL,
  `listasale` text NOT NULL,
  `partitaiva` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `filiale`
--

INSERT INTO `filiale` (`idfiliale`, `indirizzo`, `nome`, `telefono`, `email`, `orariapertura`, `listasale`, `partitaiva`) VALUES
('f3', 'Via Roma 34, L\'Aquila', 'AstraAQ', '0862111111', 'astraaq@gmail.com', 'Dal Lunedì Al Martedì 16:00 - 22:00\r\nSabato e Domenica 10:00 - 24:00', 'Zefiro,Aurora', '12345678911'),
('f4', 'Via Milano 85, Avezzano', 'AstraAZ', '0863222222', 'astraaz@yahoo.it', 'Dal Lunedì Al Martedì 16:00 - 22:00\r\nSabato e Domenica 10:00 - 24:00', 'Maestrale,Zefiro', '12345678922');

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
-- Struttura della tabella `pagamento`
--

CREATE TABLE `pagamento` (
  `idpagamento` char(6) NOT NULL,
  `totale` float NOT NULL,
  `listaitem` text NOT NULL,
  `pagato` tinyint(1) NOT NULL,
  `persona` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `pagamento`
--

INSERT INTO `pagamento` (`idpagamento`, `totale`, `listaitem`, `pagato`, `persona`) VALUES
('229cfb', 10, '180720#Aurora#13.00#2#B#2#5-180720#Aurora#13.00#2#B#1#5-', 1, 'f3'),
('63b192', 10, '180720#Aurora#13.00#2#B#2#5-180720#Aurora#13.00#2#B#1#5-', 0, 'f4'),
('eeb6e2', 10, '180720#Aurora#13.00#2#B#2#5-180720#Aurora#13.00#2#B#1#5-', 0, 'u1');

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
('180715#Zefiro#20.00#3', 'Madagascar', 'A-1-0#A-2-0#A-3-0#A-4-0#A-5-0#B-1-0#B-2-0#B-3-0#B-4-0#B-5-0#C-1-0#C-2-0#C-3-0#C-4-0#C-5-0#D-1-0#D-2-0#D-3-0#D-4-0#D-5-0#E-1-0#E-2-0#E-3-0#E-4-0#E-5-0#F-1-0#F-2-0#F-3-0#F-4-0#F-5-0#'),
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
-- Struttura della tabella `sconto`
--

CREATE TABLE `sconto` (
  `idsconto` int(5) NOT NULL,
  `descrizione` text NOT NULL,
  `baseapplicazione` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `sconto`
--

INSERT INTO `sconto` (`idsconto`, `descrizione`, `baseapplicazione`) VALUES
(1, 'Sconto applicabile ai bambini di età inferiore ai 10 anni', 2),
(2, 'Sconto applicabile agli studenti universitari', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `Idregistrazione` bigint(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` char(40) NOT NULL,
  `validazione` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`Idregistrazione`, `password`, `email`, `validazione`) VALUES
(1, 'tatta', 'teresa.4us@gmail.com', 1),
(2, 'dadino', 'ultrad89@yahoo.it', 1),
(3, 'filialeaq', 'astraaq@gmail.com', 1),
(4, 'filialeaz', 'astraaz@yahoo.it', 1),
(10, 'prova', 'prova@gmail.com', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenteregistrato`
--

CREATE TABLE `utenteregistrato` (
  `nome` text NOT NULL,
  `cognome` text NOT NULL,
  `indirizzo` text NOT NULL,
  `datadinascita` date NOT NULL,
  `citta` text NOT NULL,
  `telefono` bigint(12) NOT NULL,
  `listasconti` text NOT NULL,
  `idutente` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenteregistrato`
--

INSERT INTO `utenteregistrato` (`nome`, `cognome`, `indirizzo`, `datadinascita`, `citta`, `telefono`, `listasconti`, `idutente`) VALUES
('Teresa', 'Bove', 'Via Avezzano 1', '1995-08-26', 'Avezzano', 863123456, '', 'u1'),
('Simone', 'Pagliariccio', 'Via Roma', '1991-07-18', 'LAquila', 1111111, '', 'u10'),
('Davide', 'Vincenzi', 'Via Tatozzi 26', '1989-03-07', 'San Demetrio Ne\' Vestini', 864123456, '', 'u2');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `biglietto`
--
ALTER TABLE `biglietto`
  ADD PRIMARY KEY (`idbiglietto`);

--
-- Indici per le tabelle `credenziale`
--
ALTER TABLE `credenziale`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `filiale`
--
ALTER TABLE `filiale`
  ADD PRIMARY KEY (`idfiliale`);

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
-- Indici per le tabelle `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`idpagamento`);

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
-- Indici per le tabelle `sconto`
--
ALTER TABLE `sconto`
  ADD PRIMARY KEY (`idsconto`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`Idregistrazione`);

--
-- Indici per le tabelle `utenteregistrato`
--
ALTER TABLE `utenteregistrato`
  ADD PRIMARY KEY (`idutente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `Idregistrazione` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
