-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 11, 2018 alle 14:31
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
  `riepilogo` text NOT NULL,
  `idpagamento` char(100) NOT NULL,
  `idbiglietto` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `biglietto`
--

INSERT INTO `biglietto` (`riepilogo`, `idpagamento`, `idbiglietto`) VALUES
('', '1', '1');

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

--
-- Dump dei dati per la tabella `credenziale`
--

INSERT INTO `credenziale` (`circuitocarta`, `numerocarta`, `scadenza`, `idutente`) VALUES
('mastercard', 2147483647, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `filiale`
--

CREATE TABLE `filiale` (
  `idfiliale` char(10) NOT NULL,
  `idregistrazione` text NOT NULL,
  `email` text NOT NULL,
  `partitaiva` int(11) NOT NULL
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `film`
--

INSERT INTO `film` (`titolo`, `regista`, `anno`, `durata`, `generi`, `cast`, `casaproduzione`) VALUES
('Le pagine della nostra vita', 'Nicholas Sparks', 2006, 200, 'romantico,drammatico', 'ryan gosling,anna', 'Universal'),
('Le pagine della nostra vita', 'Nicholas Sparks', 2006, 200, 'romantico,drammatico', 'ryan gosling,anna', 'Universal'),
('Le pagine della nostra vita', 'Nicholas Sparks', 2006, 200, 'romantico,drammatico', 'ryan gosling,anna', 'Universal'),
('Le pagine della nostra vita', 'Nicholas Sparks', 2006, 200, 'romantico,drammatico', 'ryan gosling,anna', 'Universal'),
('Le pagine della nostra vita', 'Nicholas Sparks', 2006, 200, 'romantico,drammatico', 'ryan gosling,anna', 'Universal'),
('Le pagine della nostra vita', 'Nicholas Sparks', 2006, 200, 'romantico,drammatico', 'ryan gosling,anna', 'Universal'),
('Le pagine della nostra vita', 'Nicholas Sparks', 2006, 200, 'romantico,drammatico', 'ryan gosling,anna', 'Universal'),
('Le pagine della nostra vita', 'Nicholas Sparks', 2006, 200, 'romantico,drammatico', 'ryan gosling,anna', 'Universal'),
('Le pagine della nostra vita', 'Nicholas Sparks', 2006, 200, 'romantico,drammatico', 'ryan gosling,anna', 'Universal'),
('Le pagine della nostra vita', 'Nicholas Sparks', 2006, 200, 'romantico,drammatico', 'ryan gosling,anna', 'Universal'),
('Le pagine della nostra vita', 'Nicholas Sparks', 2006, 200, 'romantico,drammatico', 'ryan gosling,anna', 'Universal'),
('Le pagine della nostra vita', 'Nicholas Sparks', 2006, 200, 'romantico,drammatico', 'ryan gosling,anna', 'Universal'),
('Le pagine della nostra vita', 'Nicholas Sparks', 2006, 200, 'romantico,drammatico', 'ryan gosling,anna', 'Universal');

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
  `persona` char(20) NOT NULL,
  `totale` float NOT NULL,
  `idpagamento` char(6) NOT NULL,
  `listaitem` text NOT NULL,
  `pagato` tinyint(1) NOT NULL,
  `idutente` int(11) NOT NULL,
  `idfiliale` char(10) NOT NULL
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `registrazione`
--

CREATE TABLE `registrazione` (
  `Idregistrazione` int(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `registrazione`
--

INSERT INTO `registrazione` (`Idregistrazione`, `password`, `email`) VALUES
(1, 'tatta', 'teresa.4us@gmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `sala`
--

CREATE TABLE `sala` (
  `numeroposti` int(3) NOT NULL,
  `nomeschema` char(15) NOT NULL,
  `nomesala` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `sconto`
--

CREATE TABLE `sconto` (
  `idsconto` int(11) NOT NULL,
  `descrizione` text NOT NULL,
  `baseapplicazione` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `sconto`
--

INSERT INTO `sconto` (`idsconto`, `descrizione`, `baseapplicazione`) VALUES
(1, 'Sconto applicato a tutti i bambini con etÃ  max di 14 anni', 5);

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
-- Dump dei dati per la tabella `struttura`
--

INSERT INTO `struttura` (`idfiliale`, `indirizzo`, `nome`, `telefono`, `email`, `orariapertura`, `idregistrazione`) VALUES
('', 'nucleo industriale avezzano', 'astra', 863529354, 'astraaz@gmail.com', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
