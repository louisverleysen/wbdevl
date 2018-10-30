SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


DROP TABLE IF EXISTS `tblbestemming`;

CREATE TABLE IF NOT EXISTS `tblbestemming` (
`BestemmingID` int(11) NOT NULL,
  `Afkorting` varchar(3) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Voluit` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Land` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `TypeVlucht` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=554 DEFAULT CHARSET=latin1;

INSERT INTO `tblbestemming` (`BestemmingID`, `Afkorting`, `Voluit`, `Land`, `TypeVlucht`) VALUES
(527, 'AMS', ' Amsterdam Airport Schiphol', 'Nederland', 1),
(528, 'BCN', ' Barcelona Airport', 'Spanje', 1),
(529, 'TXL', ' Berlijn Tegel Airport', 'Duitsland', 1),
(530, 'BKK', ' Bangkok International Airport ', 'Thailand ', 2),
(532, 'CAI', ' Cairo International Airport ', 'Egypte ', 2),
(533, 'CDG', ' Parijs Charles de Gaulle International Airport ', 'Frankrijk ', 1),
(534, 'CEB', ' Mactan- Cebu International Airport', 'Filipijnen', 2),
(535, 'CRL', ' Brussels South Charleroi Airport ', 'België ', 1),
(536, 'CUR', ' Hato Airport, Curaçao', 'Nederlandse Antillen', 2),
(537, 'DUB', ' Dublin International Airport', 'Ierland', 1),
(538, 'DXB', ' Dubai International Airport', 'Verenigde Arabische Emiraten', 2),
(539, 'EIN', ' Eindhoven Airport', 'Nederland', 1),
(540, 'ENS', ' Enschede Airport Twente', 'Nederland', 1),
(541, 'GRQ', ' Groningen Airport Eelde', 'Nederland', 1),
(542, 'HHN', ' Luchthaven Frankfurt- Hahn', 'Duitsland', 1),
(543, 'JFK', ' John F. Kennedy International Airport ', 'Verenigde Staten ', 2),
(544, 'LAX', ' Los Angeles International Airport', 'Verenigde Staten', 2),
(545, 'LCY', ' Londen City Airport ', 'Verenigd Koninkrijk', 1),
(546, 'LEY', ' Lelystad Airport', 'Nederland', 2),
(547, 'LHR', ' Londen Heathrow Airport', 'Verenigd Koninkrijk', 1),
(548, 'MST', ' Maastricht Aachen Airport', 'Nederland', 2),
(550, 'RTM', ' Rotterdam Airport ', 'Nederland ', 2),
(551, 'SBZ', ' Sibiu International Airport ', 'Roemenië ', 1),
(552, 'VIE', ' Vienna International Airport ', 'Wenen, Oostenrijk ', 1),
(553, 'WLG', ' Wellington International Airport ', 'Nieuw- Zeeland', 2);

DROP TABLE IF EXISTS `tblhuidigeprijssetting`;

CREATE TABLE IF NOT EXISTS `tblhuidigeprijssetting` (
`TypeVlucht` int(11) NOT NULL,
  `HuidigePrijsSetting` decimal(18,2) DEFAULT NULL,
  `omschrijving` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO `tblhuidigeprijssetting` (`TypeVlucht`, `HuidigePrijsSetting`, `omschrijving`) VALUES
(1, '99.00', 'korte vlucht'),
(2, '400.00', 'lange vlucht');

DROP TABLE IF EXISTS `tblklant`;

CREATE TABLE IF NOT EXISTS `tblklant` (
`KlantID` int(11) NOT NULL,
  `FNaam` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `VNaam` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Straat` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Nummer` varchar(5) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Postcode` int(11) DEFAULT NULL,
  `Gemeente` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1005 DEFAULT CHARSET=latin1;


INSERT INTO `tblklant` (`KlantID`, `FNaam`, `VNaam`, `Straat`, `Nummer`, `Postcode`, `Gemeente`) VALUES
(1000, 'Delcourt', 'Annick', 'Nederlandsestraat', '44b', 9000, 'Gent'),
(1001, 'Fiers', 'Wouter', 'Fransestraat', '2', 9030, 'Mariakerke'),
(1002, 'Aercus', 'Luc', 'Ballansstraat', '3', 9030, 'Mariakerke'),
(1003, 'Laprudence', 'Christophe', 'Technologiestraat', '88', 9000, 'Gent'),
(1004, 'Senave', 'Nadine', 'Breuklaan', '12b', 9030, 'Mariakerke');


DROP TABLE IF EXISTS `tblvliegtuig`;

CREATE TABLE IF NOT EXISTS `tblvliegtuig` (
`VliegtuigID` int(11) NOT NULL,
  `Vliegtuigbouwer` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Type` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `MaxAantalZitplaatsenInDitToestel` int(11) DEFAULT NULL,
  `InterneCode` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblvliegtuig`
--

INSERT INTO `tblvliegtuig` (`VliegtuigID`, `Vliegtuigbouwer`, `Type`, `MaxAantalZitplaatsenInDitToestel`, `InterneCode`) VALUES
(1, 'Airbus', 'A319-100', 20, 'OO-SSP'),
(2, 'Airbus', 'A330-300', 21, 'OO-SSG'),
(3, 'AVRO', 'RJ85', 12, 'OO-DWE '),
(4, 'AVRO', 'RJ85', 10, 'OO-DWF'),
(5, 'AVRO', 'RJ84', 12, 'OO-DWG'),
(6, 'Boeing', '737-300', 25, 'OO-VEK'),
(7, 'Boeing', '737-300', 25, 'OO-VEL'),
(8, 'Boeing', '737-400', 25, 'OO-VEM');

DROP TABLE IF EXISTS `tblvlucht`;

CREATE TABLE IF NOT EXISTS `tblvlucht` (
`VluchtNr` int(11) NOT NULL,
  `Vluchtdatum` varchar(20) DEFAULT NULL,
  `BestemmingID` int(11) DEFAULT NULL,
  `VliegtuigID` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11019 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblvlucht`
--

INSERT INTO `tblvlucht` (`VluchtNr`, `Vluchtdatum`, `BestemmingID`, `VliegtuigID`) VALUES
(11001, '2009-1', 528, 3),
(11002, '2009-1', 537, 4),
(11004, '2009-1', 527, 1),
(11005, '2009-1', 533, 1),
(11006, '2009-1', 543, 4),
(11007, '2009-1', 542, 5),
(11008, '2009-1', 527, 1),
(11009, '2010-0', 541, 3),
(11010, '2010-0', 528, 6),
(11011, '2010-0', 544, 4),
(11013, '2017-1', 538, 8),
(11014, '2017-1', 536, 8),
(11015, '2017-10-20', 539, 5),
(11017, '2017-10-28', 543, 4),
(11018, '2017-10-18', 528, 2);

DROP TABLE IF EXISTS `tblvluchtinformatie`;

CREATE TABLE IF NOT EXISTS `tblvluchtinformatie` (
  `VluchtNr` int(11) NOT NULL,
  `StoelNr` int(11) NOT NULL,
  `KlantID` int(11) DEFAULT NULL,
  `PrijsBetaaldVoorStoel` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblvluchtinformatie`
--

INSERT INTO `tblvluchtinformatie` (`VluchtNr`, `StoelNr`, `KlantID`, `PrijsBetaaldVoorStoel`) VALUES
(11001, 1, 1000, '99.00'),
(11001, 2, 1001, '99.00'),
(11001, 3, 1002, '99.00'),
(11001, 4, 1004, '99.00'),
(11001, 5, NULL, NULL),
(11001, 6, NULL, NULL),
(11001, 7, NULL, NULL),
(11001, 8, NULL, NULL),
(11001, 9, NULL, NULL),
(11001, 10, 1003, '99.00'),
(11001, 11, 1003, '99.00'),
(11001, 12, NULL, NULL),
(11002, 1, NULL, NULL),
(11002, 2, NULL, NULL),
(11002, 3, NULL, NULL),
(11002, 4, NULL, NULL),
(11002, 5, NULL, NULL),
(11002, 6, NULL, NULL),
(11002, 7, NULL, NULL),
(11002, 8, NULL, NULL),
(11002, 9, NULL, NULL),
(11002, 10, NULL, NULL),
(11004, 1, 1002, '99.00'),
(11004, 2, NULL, NULL),
(11004, 3, NULL, NULL),
(11004, 4, NULL, NULL),
(11004, 5, NULL, NULL),
(11004, 6, NULL, NULL),
(11004, 7, 1003, '99.00'),
(11004, 8, 1004, '99.00'),
(11004, 9, 1001, '99.00'),
(11004, 10, NULL, NULL),
(11004, 11, NULL, NULL),
(11004, 12, NULL, NULL),
(11004, 13, NULL, NULL),
(11004, 14, NULL, NULL),
(11004, 15, NULL, NULL),
(11004, 16, NULL, NULL),
(11004, 17, NULL, NULL),
(11004, 18, NULL, NULL),
(11004, 19, NULL, NULL),
(11004, 20, NULL, NULL),
(11005, 1, NULL, NULL),
(11005, 2, NULL, NULL),
(11005, 3, NULL, NULL),
(11005, 4, NULL, NULL),
(11005, 5, 1001, '99.00'),
(11005, 6, NULL, NULL),
(11005, 7, NULL, NULL),
(11005, 8, NULL, NULL),
(11005, 9, NULL, NULL),
(11005, 10, NULL, NULL),
(11005, 11, 1004, '99.00'),
(11005, 12, NULL, NULL),
(11005, 13, NULL, NULL),
(11005, 14, NULL, NULL),
(11005, 15, NULL, NULL),
(11005, 16, 1003, '99.00'),
(11005, 17, NULL, NULL),
(11005, 18, NULL, NULL),
(11005, 19, NULL, NULL),
(11005, 20, NULL, NULL),
(11006, 1, 1001, '400.00'),
(11006, 2, 1003, '400.00'),
(11006, 3, NULL, NULL),
(11006, 4, NULL, NULL),
(11006, 5, 1000, '400.00'),
(11006, 6, 1001, '400.00'),
(11006, 7, 1002, '400.00'),
(11006, 8, NULL, NULL),
(11006, 9, NULL, NULL),
(11006, 10, NULL, NULL),
(11007, 1, NULL, NULL),
(11007, 2, NULL, NULL),
(11007, 3, NULL, NULL),
(11007, 4, NULL, NULL),
(11007, 5, NULL, NULL),
(11007, 6, NULL, NULL),
(11007, 7, NULL, NULL),
(11007, 8, NULL, NULL),
(11007, 9, NULL, NULL),
(11007, 10, NULL, NULL),
(11007, 11, NULL, NULL),
(11007, 12, NULL, NULL),
(11009, 1, NULL, NULL),
(11009, 2, NULL, NULL),
(11009, 3, NULL, NULL),
(11009, 4, NULL, NULL),
(11009, 5, NULL, NULL),
(11009, 6, 1003, '99.00'),
(11009, 7, NULL, NULL),
(11009, 8, NULL, NULL),
(11009, 9, NULL, NULL),
(11009, 10, NULL, NULL),
(11009, 11, NULL, NULL),
(11009, 12, NULL, NULL),
(11010, 1, NULL, NULL),
(11010, 2, NULL, NULL),
(11010, 3, NULL, NULL),
(11010, 4, NULL, NULL),
(11010, 5, NULL, NULL),
(11010, 6, NULL, NULL),
(11010, 7, NULL, NULL),
(11010, 8, NULL, NULL),
(11010, 9, NULL, NULL),
(11010, 10, NULL, NULL),
(11010, 11, NULL, NULL),
(11010, 12, NULL, NULL),
(11010, 13, NULL, NULL),
(11010, 14, NULL, NULL),
(11010, 15, NULL, NULL),
(11010, 16, NULL, NULL),
(11010, 17, NULL, NULL),
(11010, 18, NULL, NULL),
(11010, 19, NULL, NULL),
(11010, 20, NULL, NULL),
(11010, 21, NULL, NULL),
(11010, 22, NULL, NULL),
(11010, 23, NULL, NULL),
(11010, 24, NULL, NULL),
(11010, 25, NULL, NULL),
(11011, 1, NULL, NULL),
(11011, 2, 1003, '400.00'),
(11011, 3, 1001, '400.00'),
(11011, 4, NULL, NULL),
(11011, 5, NULL, NULL),
(11011, 6, NULL, NULL),
(11011, 7, NULL, NULL),
(11011, 8, NULL, NULL),
(11011, 9, NULL, NULL),
(11011, 10, NULL, NULL);

DROP TABLE IF EXISTS `tblwerknemer`;

CREATE TABLE IF NOT EXISTS `tblwerknemer` (
`WerknemerID` int(11) NOT NULL,
  `Naam` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `TypeID` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `tblwerknemer` (`WerknemerID`, `Naam`, `TypeID`) VALUES
(1, 'Els', 1),
(2, 'An', 1),
(3, 'Ivo', 2);

DROP TABLE IF EXISTS `tblwerknemertypes`;

CREATE TABLE IF NOT EXISTS `tblwerknemertypes` (
`TypeID` int(11) NOT NULL,
  `Omschrijving` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tblwerknemertypes`
--

INSERT INTO `tblwerknemertypes` (`TypeID`, `Omschrijving`) VALUES
(1, 'Check In'),
(2, 'Flight organiser');

ALTER TABLE `tblbestemming`
 ADD PRIMARY KEY (`BestemmingID`);
ALTER TABLE `tblhuidigeprijssetting`
 ADD PRIMARY KEY (`TypeVlucht`);

ALTER TABLE `tblklant`
 ADD PRIMARY KEY (`KlantID`);

ALTER TABLE `tblvliegtuig`
 ADD PRIMARY KEY (`VliegtuigID`);

ALTER TABLE `tblvlucht`
 ADD PRIMARY KEY (`VluchtNr`), ADD KEY `FK_tblVlucht_tblBestemming` (`BestemmingID`), ADD KEY `FK_tblVlucht_tblVliegtuig` (`VliegtuigID`);

ALTER TABLE `tblvluchtinformatie`
 ADD PRIMARY KEY (`VluchtNr`,`StoelNr`), ADD KEY `FK_tblVluchtInformatie_tblKlant` (`KlantID`);

ALTER TABLE `tblwerknemer`
 ADD PRIMARY KEY (`WerknemerID`), ADD KEY `FK_tblWerknemer_tblWerknemerTypes` (`TypeID`);

ALTER TABLE `tblwerknemertypes`
 ADD PRIMARY KEY (`TypeID`);

ALTER TABLE `tblbestemming`
MODIFY `BestemmingID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=554;

ALTER TABLE `tblhuidigeprijssetting`
MODIFY `TypeVlucht` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;

ALTER TABLE `tblklant`
MODIFY `KlantID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1005;

ALTER TABLE `tblvliegtuig`
MODIFY `VliegtuigID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;

ALTER TABLE `tblvlucht`
MODIFY `VluchtNr` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11019;

ALTER TABLE `tblwerknemer`
MODIFY `WerknemerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;

ALTER TABLE `tblwerknemertypes`
MODIFY `TypeID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;

ALTER TABLE `tblvlucht`
ADD CONSTRAINT `FK_tblVlucht_tblBestemming` FOREIGN KEY (`BestemmingID`) REFERENCES `tblbestemming` (`BestemmingID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_tblVlucht_tblVliegtuig` FOREIGN KEY (`VliegtuigID`) REFERENCES `tblvliegtuig` (`VliegtuigID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `tblvluchtinformatie`
ADD CONSTRAINT `FK_tblVluchtInformatie_tblKlant` FOREIGN KEY (`KlantID`) REFERENCES `tblklant` (`KlantID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_tblVluchtInformatie_tblVlucht` FOREIGN KEY (`VluchtNr`) REFERENCES `tblvlucht` (`VluchtNr`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `tblwerknemer`
ADD CONSTRAINT `FK_tblWerknemer_tblWerknemerTypes` FOREIGN KEY (`TypeID`) REFERENCES `tblwerknemertypes` (`TypeID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
