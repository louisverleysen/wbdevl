SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boekenbeurs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblboeken`
--

CREATE TABLE `tblboeken` (
  `BoekID` int(11) NOT NULL,
  `Schrijver` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Genre` varchar(50) DEFAULT NULL,
  `Internecode` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblboeken`
--

INSERT INTO `tblboeken` (`BoekID`, `Schrijver`, `Type`, `Genre`, `Internecode`) VALUES
(1, 'Karin Slaughter', 'Boek', 'Thriller', '9789402'),
(2, 'Dan Brown', 'Boek', 'Thriller', '9789024'),
(3, 'Lina Bengtsdotter', 'Boek', 'Thriller', '97894027'),
(4, 'Merho', 'Strip', 'Avontuurlijk', '9789002'),
(5, 'Hec Leemans', 'Strip', 'Avontuurlijk', ' 9789002'),
(6, 'Hans Andreus', 'Boek', 'poëzie', '9789025'),
(7, 'Stefan Hertmans', 'Boek', 'poëzie', '97894031'),
(8, 'Pascale Neassens', 'Boek', 'Koken', '9789401'),
(9, 'Sandra Bekkari', 'Boek', 'Koken', '9789089'),
(10, 'Lucinda Riley', 'Boek', 'Literiare fictie', '9789401');

-- --------------------------------------------------------

--
-- Table structure for table `tblboekinformatie`
--

CREATE TABLE `tblboekinformatie` (
  `BoekID` int(11) NOT NULL,
  `Titel` varchar(100) DEFAULT NULL,
  `internecode` int(11) DEFAULT NULL,
  `PrijsVoorBoek` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblboekinformatie`
--

INSERT INTO `tblboekinformatie` (`BoekID`, `Titel`, `internecode`, `PrijsVoorBoek`) VALUES
(0, 'Gespleten', NULL, 19.99),
(1, 'Het Bernini mysterie', NULL, 10.00),
(2, 'Je bent zo mooi anders', NULL, 17.50),
(3, 'Dédé en partner', NULL, 6.99),
(4, 'Boma Burgemeester', NULL, 6.50),
(5, 'Ik hoor het licht', NULL, 12.90),
(6, 'De bekeerlinge', NULL, 19.99),
(7, 'Nog eenvoudiger met 4 ingrediënten', NULL, 25.99),
(8, 'Nooit meer diëten ', NULL, 24.99),
(9, 'Les Sept Soeurs T.3 ; La Soeur De L\'ombre', NULL, 9.50);

-- --------------------------------------------------------

--
-- Table structure for table `tblklant`
--

CREATE TABLE `tblklant` (
  `KlantID` int(11) NOT NULL,
  `FNaam` varchar(50) DEFAULT NULL,
  `VNaam` varchar(50) DEFAULT NULL,
  `Straat` varchar(50) DEFAULT NULL,
  `Nummer` varchar(5) DEFAULT NULL,
  `Postcode` int(11) DEFAULT NULL,
  `Gemeente` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblklant`
--

INSERT INTO `tblklant` (`KlantID`, `FNaam`, `VNaam`, `Straat`, `Nummer`, `Postcode`, `Gemeente`) VALUES
(1, 'Verleysen', 'Louis', 'Neerbeekstaat', '66', 8501, 'Bissegem'),
(2, 'Jansen', 'Piet', 'Meensesteenweg', '10', 8501, 'Bissegem'),
(3, 'josson', 'Emma', 'Markebekesteenweg', '125', 8510, 'Marke'),
(4, 'Seinave', 'Janne', 'beuklaan', '55', 8770, 'Ingelmunster'),
(5, 'Vangeel', 'jos', 'lindelaan', '86', 8550, 'Zwevegem');

-- --------------------------------------------------------

--
-- Table structure for table `tblkostprijs`
--

CREATE TABLE `tblkostprijs` (
  `Type` int(20) NOT NULL,
  `HuidigePrijs` decimal(10,0) DEFAULT NULL,
  `omschrijving` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkostprijs`
--

INSERT INTO `tblkostprijs` (`Type`, `HuidigePrijs`, `omschrijving`) VALUES
(1, 10, 'goedkoop'),
(2, 20, 'prijzig'),
(3, 30, 'Duur');

-- --------------------------------------------------------

--
-- Table structure for table `tblverkoper`
--

CREATE TABLE `tblverkoper` (
  `VerkoperID` int(11) NOT NULL,
  `Naam` varchar(50) DEFAULT NULL,
  `winkelID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblverkoper`
--

INSERT INTO `tblverkoper` (`VerkoperID`, `Naam`, `winkelID`) VALUES
(1, 'standaard boeken handel', 1236),
(2, 'boeken voordeel', 1548),
(3, 'het goede boek', 1056),
(4, 'bol.com', 15678);

-- --------------------------------------------------------

--
-- Table structure for table `tblverkoperstype`
--

CREATE TABLE `tblverkoperstype` (
  `winkelID` int(11) NOT NULL,
  `Omschrijving` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblverkoperstype`
--

INSERT INTO `tblverkoperstype` (`winkelID`, `Omschrijving`) VALUES
(1, 'winkel'),
(2, 'winkel'),
(3, 'winkel'),
(4, 'webshop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblboeken`
--
ALTER TABLE `tblboeken`
  ADD PRIMARY KEY (`BoekID`),
  ADD KEY `Internecode` (`Internecode`),
  ADD KEY `Genre` (`Genre`);
ALTER TABLE `tblboeken` ADD FULLTEXT KEY `Internecode_2` (`Internecode`);

--
-- Indexes for table `tblboekinformatie`
--
ALTER TABLE `tblboekinformatie`
  ADD PRIMARY KEY (`BoekID`),
  ADD KEY `PrijsVoorBoek` (`PrijsVoorBoek`);

--
-- Indexes for table `tblklant`
--
ALTER TABLE `tblklant`
  ADD PRIMARY KEY (`KlantID`);

--
-- Indexes for table `tblkostprijs`
--
ALTER TABLE `tblkostprijs`
  ADD PRIMARY KEY (`Type`);

--
-- Indexes for table `tblverkoper`
--
ALTER TABLE `tblverkoper`
  ADD PRIMARY KEY (`VerkoperID`),
  ADD KEY `winkelID` (`winkelID`);

--
-- Indexes for table `tblverkoperstype`
--
ALTER TABLE `tblverkoperstype`
  ADD PRIMARY KEY (`winkelID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblboeken`
--
ALTER TABLE `tblboeken`
  MODIFY `BoekID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tblklant`
--
ALTER TABLE `tblklant`
  MODIFY `KlantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblkostprijs`
--
ALTER TABLE `tblkostprijs`
  MODIFY `Type` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblverkoper`
--
ALTER TABLE `tblverkoper`
  MODIFY `VerkoperID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblverkoperstype`
--
ALTER TABLE `tblverkoperstype`
  MODIFY `winkelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
