-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Set 20, 2021 alle 09:14
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anagrafica clienti`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `idCliente` int(11) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cellulare` varchar(20) NOT NULL,
  `residenza` varchar(20) NOT NULL,
  `comune` varchar(20) NOT NULL,
  `eta` int(11) NOT NULL,
  `idDipendente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `clienti`
--

INSERT INTO `clienti` (`idCliente`, `cognome`, `nome`, `cellulare`, `residenza`, `comune`, `eta`, `idDipendente`) VALUES
(3, 'tamussi', 'michele', '3248879608   ', 'via gabbiane 17', 'brescia   ', 19, 1),
(4, 'macchiato', 'quinto', '333678987', 'via roma', 'milano', 27, 1),
(6, 'tono', 'marcu', '445678234', 'via del gallo 4', 'verona', 25, 1),
(8, 'deCanis', 'Alberto', '2535243524', 'via teosa 1', 'brescia', 45, 1),
(9, 'gio', 'vanni', '123', 'via gambara 44', 'bolzano', 78, 1),
(10, 'rossi', 'aurelio', '2535243524 ', ' via roma', 'bolzano ', 89, 1),
(11, 'bianchi', 'gennaro', '1122334455', 'via della trombetta ', 'palermo', 33, 1),
(20, 'frigelli', 'andrea', '56642354', 'via gabbiane 17', 'brescia', 25, 1),
(22, 'grigio', 'luca', '817648641', 'via del colle 23', 'concesio', 15, 1),
(24, 'bettelli', ' angelo', '3339832671 ', ' via gabbiane 17', 'brescia ', 87, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `dipendenti`
--

CREATE TABLE `dipendenti` (
  `idDipendente` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `pw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `dipendenti`
--

INSERT INTO `dipendenti` (`idDipendente`, `nome`, `pw`) VALUES
(1, 'dipendente1', '*A4B6157319038724E3560894F7F93');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `idDipendente` (`idDipendente`);

--
-- Indici per le tabelle `dipendenti`
--
ALTER TABLE `dipendenti`
  ADD PRIMARY KEY (`idDipendente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `clienti`
--
ALTER TABLE `clienti`
  ADD CONSTRAINT `clienti_ibfk_1` FOREIGN KEY (`idDipendente`) REFERENCES `dipendenti` (`idDipendente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
