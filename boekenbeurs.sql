-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2018 at 05:29 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `tblbib`
--

CREATE TABLE `tblbib` (
  `BibID` int(11) NOT NULL,
  `Naambib` varchar(50) DEFAULT NULL,
  `straatbib` varchar(30) DEFAULT NULL,
  `postcodebib` varchar(5) DEFAULT NULL,
  `gemeentebib` varchar(25) DEFAULT NULL,
  `telofoonbib` varchar(10) DEFAULT NULL,
  `openingsurenbib` text,
  `imagebib` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbib`
--

INSERT INTO `tblbib` (`BibID`, `Naambib`, `straatbib`, `postcodebib`, `gemeentebib`, `telofoonbib`, `openingsurenbib`, `imagebib`) VALUES
(1, 'centrale biblotheek Kortrijk', 'Leiestraat 30', '8500', 'Kortrijk', '056277500', 'ma-10:00 - 18:30\r\ndi-13:00 - 18:30\r\nwo-10:00 - 18:30\r\ndo-10:00 - 18:30\r\nvr-10:00 - 17:00\r\nza-10:00 - 16:00\r\nzo-Gesloten\r\n', 'images/bib/bib-kortrijk.jpg'),
(2, 'buurbibliotheek De Bildings', 'De Jaegerelaan 62', '8500', 'Kortrijk', '056277529', 'ma-Gesloten\r\ndi-16:00 - 18:00\r\nwo-14:00 - 17:00\r\ndo-Gesloten\r\nvr-Gesloten\r\nza-10:00 - 12:00\r\nzo-Gesloten\r\n', 'images/bib/Buurtbibliotheek_Driehofsteden.jpg'),
(3, 'buurtbibliotheek Lange Munte', 'Beeklaan 81', '8500', 'Kortrijk', '056277530', 'ma-16:00 - 18:00\r\ndi-gesloten\r\nwo-14:00 - 17:00\r\ndo-Gesloten\r\nvr-Gesloten\r\nza-10:00 - 12:00\r\nzo-Gesloten\r\n', 'images/bib/bib-langemunte.jpg'),
(4, 'buurtbibliotheek Aalbeke', 'Moeskroensesteenweg 69', '8511', 'Aalbeke', '056277538', 'ma-16:00 - 18:00\r\ndi-gesloten\r\nwo-14:00 - 17:00\r\ndo-Gesloten\r\nvr-Gesloten\r\nza-10:00 - 12:00\r\nzo-Gesloten', 'images/bib/Buurtbibliotheek_Aalbeke.jpg'),
(5, 'buurtbibliotheek Bellegem', 'Processiestraat 6', '8510', 'Bellegem', '056 27 75 ', 'ma-gesloten\r\ndi-14:00 - 18:00\r\nwo-gesloten\r\ndo-Gesloten\r\nvr-Gesloten\r\nza-10:00 - 12:00\r\nzo-Gesloten', 'images/bib/buurtbib_Bellegem.jpg'),
(6, 'buurtbibliotheek Bissegem', 'Vlaswaagplein 3', '8501', 'Bissegem', '056277532', 'ma-16:00 - 18:00\r\ndi-gesloten\r\nwo-14:00 - 17:00\r\ndo-Gesloten\r\nvr-Gesloten\r\nza-10:00 - 12:00\r\nzo-Gesloten', 'images/bib/bib-Bissegem.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblboeken`
--

CREATE TABLE `tblboeken` (
  `BoekID` int(11) NOT NULL,
  `WinkelID` int(11) NOT NULL,
  `BibID` int(11) NOT NULL,
  `Schrijver` varchar(25) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Genre` varchar(50) DEFAULT NULL,
  `Internecode` varchar(50) DEFAULT NULL,
  `Titel` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblboeken`
--

INSERT INTO `tblboeken` (`BoekID`, `WinkelID`, `BibID`, `Schrijver`, `Type`, `Genre`, `Internecode`, `Titel`) VALUES
(1, 1, 2, 'Karin Slaughter', 'Boek', 'Thriller', '9789402', 'Gespleten'),
(2, 1, 2, 'Dan Brown', 'Boek', 'Thriller', '9789024', 'Het Bernini mysterie'),
(3, 1, 1, 'Lina Bengtsdotter', 'Boek', 'Thriller', '97894027', 'De vrouw die terug moest'),
(4, 4, 3, 'Merho', 'Strip', 'Avontuurlijk', '9789002', 'Dédé en partner'),
(5, 4, 3, 'Hec Leemans', 'Strip', 'Avontuurlijk', ' 9789002', 'Boma Burgemeester'),
(6, 4, 4, 'Hans Andreus', 'Boek', 'poëzie', '9789025', 'Ik hoor het licht'),
(7, 4, 5, 'Stefan Hertmans', 'Boek', 'poëzie', '97894031', 'De bekeerlinge'),
(8, 5, 5, 'Pascale Neassens', 'Kookboek', 'Koken', '9789401', 'Nog eenvoudiger met 4 ing'),
(9, 5, 6, 'Sandra Bekkari', 'Boek', 'Koken', '9789089', 'Nooit meer diëten '),
(10, 5, 6, 'Lucinda Riley', 'Boek', 'Literiare fictie', '9789401', 'Les Sept Soeurs');

-- --------------------------------------------------------

--
-- Table structure for table `tblboekeninfo`
--

CREATE TABLE `tblboekeninfo` (
  `BoekID` int(11) NOT NULL,
  `Publicatiedatum` date DEFAULT NULL,
  `Pagina` int(11) DEFAULT NULL,
  `Uitgever` varchar(55) DEFAULT NULL,
  `Ondertitel` text,
  `Uitvoering` varchar(50) DEFAULT NULL,
  `omschrijving` text,
  `image` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblboekeninfo`
--

INSERT INTO `tblboekeninfo` (`BoekID`, `Publicatiedatum`, `Pagina`, `Uitgever`, `Ondertitel`, `Uitvoering`, `omschrijving`, `image`) VALUES
(1, '2018-06-15', 496, 'HarperCollins', NULL, 'Met zachte kaft', 'Andrea Cooper kent haar moeder door en door. Ze weet dat Laura een onopvallend maar tevreden bestaan leidt en nooit iets voor haar verborgen zou houden.\r\n\r\nMaar wanneer het restaurant waar Andrea en Laura elke week lunchen onder vuur wordt genomen en een doodgewone middag verandert in een bloedbad, ziet Andrea een heel andere kant van haar. Een kant die mijlenver verwijderd is van de kalme zachtmoedigheid die ze van haar moeder kent. De koelbloedigheid waarmee Laura de schutter overmeestert en doodt, verbijstert Andrea.\r\n\r\nDan blijkt dat de schutter het op haar moeder gemunt had. De politie wil weten waarom, maar Laura weigert elke medewerking. Ze vraagt Andrea zelfs om haar te helpen allerlei sporen uit te wissen. Zo ontdekt Andrea dat haar moeder zich al dertig jaar schuilhoudt onder een andere naam en dat alles wat ze over haar verleden heeft verteld gelogen is.', 'images/boekenkaft/gespleten.jpg'),
(2, '2017-09-12', 480, 'Luitingh Sijthoff', 'Robert Langdon', 'Met zachte kaft', 'Het Bernini Mysterie van Dan Brown is het razend spannende boek met professor Robert Langdon in de hoofdrol. Een verhaal vol verrassende feiten over kunst, religie en wetenschap. Verfilmd met Tom Hanks. In het onderzoeksinstituut CERN in Zwitserland wordt het levenloze lichaam van een wetenschapper gevonden. Hij is vermoord en zijn borst is gebrandmerkt met een mysterieus symbool. Robert Langdon wordt verzocht het symbool te duiden en hij ontdekt het onmogelijke: het symbool is afkomstig van een eeuwenoude, uitgestorven gewaande broederschap die de vernietiging van het katholicisme nastreefde: de Illuminati. Dan wordt onthuld dat er een tijdbom in het Vaticaan verborgen is. De timing is perfect: de kerkleiders zijn bijeen om een nieuwe paus te kiezen en het wemelt van de pers. ', 'images/boekenkaft/danbrown.jpg'),
(3, '2018-05-01', 320, 'HarperCollins', 'Een Charlie Lager-thriller', 'Met zachte kaft', 'Fan van Lisbeth Salander uit de Millennium-trilogie, van Saga Norén uit The Bridge en van Sarah Linden uit The Killing? Dan raak je zeker verslaafd aan Charlie Lager Op een warme zomeravond verdwijnt de zeventienjarige Annabelle uit het afgelegen dorpje Gullspång. De politie kan geen enkele aanwijzing vinden, haar ouders zijn radeloos. In Stockholm krijgt de ervaren rechercheur Charline \'Charlie\' Lager te horen dat zij op de zaak wordt gezet. Met tegenzin gaat Charlie naar Gullspång - het dorp waar ze is geboren. Ze is er sinds haar veertiende niet meer geweest, en met reden. Charlie gedraagt zich namelijk niet zoals men van vrouwen verwacht: veel korte seksuele relaties, geen kinderwens en niet bezig met wat anderen van haar vinden.', 'images/boekenkaft/lina.jpg'),
(4, '2018-07-10', 48, 'Standaard Uitgeverij - Algemeen', 'de Kiekeboes', 'Met zachte kaft', 'De supergangster Dédé la Canaille koopt via zijn \'partner\' Balthazar een duur appartement in een luxeresort op Gran Penaria. Van de Kasseien is mede-investeerder in dit dubieuze bouwproject. En wie mag er de kastanjes uit het vuur halen wanneer alles dreigt mis te lopen... Marcel Kiekeboe.', 'images/boekenkaft/dede.jpg'),
(5, '2018-03-13', 98, 'Standaard Uitgeverij', 'F.C. De Kampioenen', 'Met zachte kaft', 'Er zijn verkiezingen op komst. Plots schrapt burgemeester Freddy Van Overloop de subsidie van de Kampioenen, terwijl hij die van De Schellekens verdubbelt. Dat maakt Boma zo razend, dat hij besluit deel te nemen aan de verkiezingen met het doel burgemeester te worden. Er ontstaat een heftige kiesstrijd tussen de aanhangers van Freddy en die van Boma. Tijdens het plakken van de verkiezingsaffiches ontaardt de rivaliteit in echte straatgevechten. Ciske en Maurice zijn in tweestrijd, want Maurice moet vanwege zijn werk als gemeenteambtenaar de affiches van de burgemeester aanplakken. Ciske verscheurt die weer onmiddellijk. Bieke vindt dat het genoeg is geweest en organiseert een televisiedebat tussen de kemphanen. Maar ook dat loopt verkeerd af. En intussen is Ciske ontvoerd. Door wie? En vinden Mark en Paulien hem terug?', 'images/boekenkaft/boma-burgemeester.jpg'),
(6, '2015-08-08', 128, 'Uitgeversmaatschappij Holland B.V', 'een bloemlezing uit de poezie van Hans Andreus', 'Met zachte kaft', 'Ik hoor het gefluit van de vogels cantate cantabile ik hoor het gefluit van de vogels op een doodgoeie dag door de week. Ik bezin mij niet meer op de logos ik vergeet alle fietsen en autoos ik zit op een tak als een anthropos en fluit met de vogels mee cantate cantabile. Hans Andreus is vaak en met reden de dichter van het licht genoemd. In allerlei tinten en uit verschillende bronnen schijnt het licht over zijn werk en geeft het er schittering aan. Deze bloemlezing, samengesteld door Jan van der Vegt, geeft een goed beeld van het gehele poëtische oeuvre van Hans Andreus.', 'images/boekenkaft/hoorhetlicht.jpg'),
(7, '2016-10-07', 288, 'De Bezige Bij', NULL, 'Met harde kaft', 'In een klein dorp in de Provence wordt sinds mensenheugenis over een pogrom en een verborgen schat gesproken. Eind negentiende eeuw vindt men in een synagoge in Caïro een hoeveelheid opzienbarende joodse documenten. Stefan Hertmans ontdekt de sporen van een voorname christelijke jonkvrouw uit de elfde eeuw, die haar leven vergooide uit liefde voor een joodse jongen. Hij gaat letterlijk achter deze vrouw aan, die samen met haar verboden liefde op de vlucht slaat en een duizelingwekkende tocht aflegt, opgejaagd door alles en iedereen. \r\nStefan Hertmans baseerde zich voor De bekeerlinge op historische bronnen. Dat brengt hem in een chaotische wereld van passie, haat, liefde en dood, en voert hem uiteindelijk van Caïro terug naar het kleine Provençaalse dorp, waar hij sinds decennia thuis is.', 'images/boekenkaft/bekeerlinge.jpg'),
(8, '2018-09-08', 222, 'Lannoo', NULL, 'Met harde kaft', 'Pascale Naessens is de leading lady als het gaat over eenvoudige en gezonde voeding. In haar tiende boek focust ze meer dan ooit op heerlijke recepten met een minimum aan ingrediënten en werk. Zo bewijst ze eens te meer dat gezonde voeding haalbaar is voor iedereen. \r\n\r\nDe gerechten worden gepresenteerd op mooi gedekte tafels en op een warme, sfeervolle manier in beeld gebracht.', 'images/boekenkaft/pascale.jpg'),
(9, '2018-10-13', 208, 'Borgerhoff & Lamberigts', NULL, 'Met harde kaft', 'Met vier succesvolle boeken op rij heeft de boekenreeks ‘Nooit meer diëten’ geen introductiemeer nodig. Auteur en voedingsdeskundige Sandra Bekkari inspireerde al duizenden mensen tot een gezondere levensstijl, dankzij haar eenvoudige maar eff ectieve Sana-methode. \r\n\r\nAls VTM-gezicht in het dagelijkse kookprogramma’ Open Keuken’ bereikt ze met haar aanstekelijk enthousiasme en heerlijke gerechten een breed publiek. In het vijfde en laatste deel deel van de ‘Nooit meer diëten’- reeks is het credo ‘schoonheid zit vanbinnen’. En dan bedoelen we niet alleen een sprankelende persoonlijkheid. Als je je vanbinnen goed en gezond voelt, dan straal je dat vanbuiten ook uit. ', 'images/boekenkaft/Nooit-meer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `adres_site` varchar(225) NOT NULL,
  `gsm_nr` text,
  `telefoon_nr` text,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`adres_site`, `gsm_nr`, `telefoon_nr`, `email`) VALUES
('http://localhost/Project_Oplossing/wbdevl/Project_Oplossing/index.php', '468203539', '566031555', 'louis.verleysen1@gmail.com'),
('http://localhost/Project_Oplossing/wbdevl/Project_Oplossing/index.php', '0468-20-35-35', '056-20-51-4110', 'louis.verleysen1@gmail.com'),
('http://localhost/Project_Oplossing/wbdevl/Project_Oplossing/index.php', '0468-20-35-35', '056-20-51-4110', 'louis.verleysen1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblhome`
--

CREATE TABLE `tblhome` (
  `homeID` int(11) NOT NULL,
  `titel` varchar(125) DEFAULT NULL,
  `image` varchar(125) DEFAULT NULL,
  `link` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhome`
--

INSERT INTO `tblhome` (`homeID`, `titel`, `image`, `link`) VALUES
(1, 'Boeken', 'images/home/boeken-Bieb.jpg', 'http://localhost/Project_Oplossing/wbdevl/Project_Oplossing/book_view.php'),
(2, 'bibliotheken', 'images/home/bib.jpg', 'http://localhost/Project_Oplossing/wbdevl/Project_Oplossing/show_bib.php'),
(3, 'Boeken winkels', 'images/home/Boekenvoordeel.jpg', 'http://localhost/Project_Oplossing/wbdevl/Project_Oplossing/show_boeken_winkel.php'),
(4, 'Nut van lezen', 'images/home/nut.jpg', 'http://localhost/Project_Oplossing/wbdevl/Project_Oplossing/nut_van_lezen.php'),
(5, 'boeken weetjes', 'images/home/wist-je-dat.jpg', 'http://localhost/Project_Oplossing/wbdevl/Project_Oplossing/weetjes.php'),
(6, 'Contact', 'images/home/contact.jpg', 'http://localhost/Project_Oplossing/wbdevl/Project_Oplossing/contact.php');

-- --------------------------------------------------------

--
-- Table structure for table `tblklant`
--

CREATE TABLE `tblklant` (
  `KlantID` int(11) NOT NULL,
  `FNaam` varchar(50) DEFAULT NULL,
  `VNaam` varchar(50) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblklant`
--

INSERT INTO `tblklant` (`KlantID`, `FNaam`, `VNaam`, `Email`, `password`) VALUES
(1, 'Verleysen', 'Louis', 'louis.verleysen1@gmail.com', 'azert'),
(2, 'Jansen', 'Piet', 'jansen.piet1@gmail.com', '123456'),
(3, 'josson', 'Emma', NULL, '123789'),
(4, 'debrouwere', 'Janne', NULL, '159357'),
(5, 'Vangeel', 'jos', 'jos.vangeel@hotmail.com', '258456'),
(7, 'de man', 'sara', 'sare.deman@gmail.com', '123456789'),
(8, 'de smul', 'sam', 'sam.desmul@hotmail.com', '159357'),
(9, 'huysentruyt', 'chari', 'chari.huysentruyt@hotmail.com', 'Chari'),
(10, 'jossegem', 'jos', 'jos.jossegem@gmail.com', '159357'),
(11, 'Verleysen', 'marc', 'marc.verleysen@gmail.com', 'kurki');

-- --------------------------------------------------------

--
-- Table structure for table `tbllezen`
--

CREATE TABLE `tbllezen` (
  `articleID` int(11) NOT NULL,
  `title` varchar(125) DEFAULT NULL,
  `inhoud` text,
  `image` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllezen`
--

INSERT INTO `tbllezen` (`articleID`, `title`, `inhoud`, `image`) VALUES
(0, 'Waarom is lezen en schrijven eigenlijk zo belangrijk?', 'Zo’n 5000 à 6000 jaar geleden zijn onze voorouders beginnen schrijven in Sumer (nu Irak). Toen kon slechts een minderheid lezen en schrijven. Vandaag wordt van iedereen verwacht dat je dat kan. Onze samenleving is zo gevormd dat het heel moeilijk voor je is wanneer je het schrift niet kent. Denk maar aan het invullen van officiële documenten, treinuren vinden, handleidingen en voorschriften begrijpen, smsen naar vrienden, …\r\n\r\nIs het dan echt nodig om boeken te lezen? Neen, niet om mee te kunnen in onze maatschappij. Maar toch raden we je aan dit wel te doen. Het lezen van boeken heeft namelijk zijn voordelen. Iemand die leest kent doorgaans meer woorden dan iemand die nooit een boek vastpakt. Je leert dan onze taal op een speelse manier. Naast een grotere woordenschat, leer je ook grammatica en zinsbouw, zonder dat je het door hebt. Iemand die een taal goed beheerst maakt indruk. Het betekent dat je meer woorden kent om te zeggen wat er op je lever ligt. Dat helpt je later, in je job, in je omgang met anderen of als je je lief het hof wil maken. Iemand die veel leest zou trouwens ook meer empathie hebben. \r\n\r\nLezen is ook goed voor je verbeelding. Een boek doet je helemaal opgaan in het verhaal, en leert je je eigen conclusies te trekken. Afhankelijk van de boeken die je kiest, kan je veel bijleren over verschillende onderwerpen: geschiedenis, wetenschap, dieren, mensen, techniek, ... Je krijgt meer informatie in een boek dan in een film. Bij een film moet je niet verder nadenken dan over de beelden die je ziet. \r\n\r\n', 'images/weetjes/dream.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblweetjes`
--

CREATE TABLE `tblweetjes` (
  `Titel` varchar(50) DEFAULT NULL,
  `inhoud` text,
  `image` varchar(250) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `hood_t` varchar(125) DEFAULT NULL,
  `weetjes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblweetjes`
--

INSERT INTO `tblweetjes` (`Titel`, `inhoud`, `image`, `id`, `hood_t`, `weetjes`) VALUES
(NULL, 'Elke zondag is het boekentijd en proberen we jullie te vermaken met een artikel over boeken. Dit kunnen reviews zijn, lijstjes of bijvoorbeeld de mooiste boekenwinkels. Vandaag deel ik 7 leuke weetjes over echte boekenverslaafden met jullie! Ik ben benieuwd of jullie jezelf hierin herkennen!', 'images/weetjes/Boekenverslaafden.jpg', 0, '7 LEUKE WEETJES OVER ECHTE BOEKENVERSLAAFDEN!', NULL),
('1. Stiekem meelezen', 'Zit je in de trein, bus of zie je ergens iemand een boek lezen? Je leest stiekem mee, want je wilt weten wat deze persoon nu precies aan het lezen is. Is het een goed boek, bekend, onbekend of wil je hem/haar liever afraden überhaupt verder te lezen? Maar hey, we’re not judging, right?!', NULL, 1, NULL, NULL),
('2. Jaloezie', 'Iemand vertelt je over het boek wat hij/zij momenteel aan het lezen is en je schreeuwt het uit! Het is namelijk jouw favoriete boek en je bent jaloers. Waarom? Omdat je weet hoe jij je voelde nadat je het boek voor de eerste keer gelezen had. Herken je dat gevoel? Want na 200 keer is het moeilijk om dat exacte gevoel weer te krijgen, dus ja, wij zijn jaloers wanneer dat gebeurt!', NULL, 3, NULL, NULL),
('3. Nog meer jaloezie', 'Je bent uitgenodigd op een verjaardag en je wordt overspoeld door jaloezie wanneer je ziet dat de jarige job een fortuin aan boekenbonnen cadeau krijgt. Zo.veel.boeken! Met al die bonnen wist je wel waar je moest beginnen. Helaas zijn deze voor de jarige. Je hoopt natuurlijk dat deze goed besteed worden (wie weet mag je ooit wel eens een boek lenen ;-)) .', NULL, 4, NULL, NULL),
('4. Plannen annuleren', 'Je schaamt je er niet voor. Je bent ertoe in staat om je plannen te annuleren wanneer je net een nieuw boek hebt. Ik bedoel, je kunt gewoon niet wachten om aan dit boek te beginnen. Het heeft al lang genoeg op je gewacht, al die tijd in de winkel, en nu is het tijd om gelezen te worden. Helaas, het etentje of avondje uit zal moeten schuiven. Prioriteiten!', 'images/weetjes/afspraken.jpg', 5, NULL, NULL),
('5. Sharing is caring', 'Jij en je boek zijn onafscheidelijk. Dat is ook duidelijk te merken op je Social Media. Je Instagram feed staat vol met je wekelijkse to-read lijstje. Je verzet hemel en aarde om de perfecte foto van je boek te maken zodat iedereen kan meegenieten (lees: jaloers kan zijn) van dit exemplaar!', NULL, 6, NULL, NULL),
('6. Paniek', 'Je bent zo geconcentreerd en je zit helemaal in het verhaal. Je grijpt naar je glas water, kopje koffie en voor je het weet… Jup, een gigantische vlek op je boek. Je raakt lichtelijk in paniek en probeert er alles aan te doen om ervoor te zorgen dat de inkt niet uitloopt of dat het papier helemaal verpest is. Om een vergelijking te maken: raak jij wel eens in paniek wanneer je je telefoon niet direct kunt vinden? Juist, dat gevoel.', NULL, 7, NULL, NULL),
('7. Zelf een boek schrijven', 'Je hebt zoveel ideeën, zoveel dingen die je wilt vertellen. Wat houd je tegen om zelf een boek te schrijven? Je hebt in ieder geval al genoeg titels opgeschreven die kans maken. Alle korte stukjes tekst die je verzonnen hebt, staan in je notitieboekje. Je blijft schrijven dus een volledig boek moet er ooit eens van komen. Dreams can come true! <3', 'images/weetjes/notitieboekje.jpg', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblwinkel`
--

CREATE TABLE `tblwinkel` (
  `WinkelID` int(11) NOT NULL,
  `Naam` varchar(50) DEFAULT NULL,
  `Description` text,
  `ImageUrl` varchar(128) NOT NULL,
  `aantal` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblwinkel`
--

INSERT INTO `tblwinkel` (`WinkelID`, `Naam`, `Description`, `ImageUrl`, `aantal`) VALUES
(1, 'standaard boeken handel', 'Standaard Boekhandel is een Belgische winkelketen die boeken verkoopt. Het aanbod omvat ook muziek-cd\'s, dvd\'s, kranten, tijdschriften, stripalbums, cartografie, reisgidsen, wenskaarten, bordspellen en bureauartikelen.', 'images/winkel/StandaardBoekhandel.jpg', 0),
(2, 'boeken voordeel', 'Boekenvoordeel is een Nederlandse winkelketen, die ook in België zijn intrek heeft gevonden.\r\n\r\nDe keten is ingeschreven bij de Kamer van Koophandel sinds 1983. Een aantal jaren daarvoor bestond Boekenvoordeel al. De eerste Boekenvoordeel winkel is gestart in Haarlem. Het assortiment bestond toen slechts uit boeken en wenskaarten. Later kwamen daarbij ook dvd\'s, video\'s en cd-roms.', 'images/winkel/boekenvoordeel.jpg', 5),
(3, 'het goede boek', 'Het Goede Boek voor de verspreiding van christelijke boeken, muziek, films en geschenkartikelen. Er zijn vier winkels in Genk, Gent, Kortrijk en Leuven. Deze zijn in de eerste plaats bedoeld om gelovigen op te bouwen in hun christelijk leven en om hen die meer willen weten van het christelijke geloof van materialen te voorzien.', 'images/winkel/het-goede-boek.jpg', 6),
(4, ' Boekenhuis Theoria', 'Doorheen het Boekenhuis zijn tal van plekjes om even op adem te komen.  \r\nKnusse zithoekjes , tafeltjes …\r\nU kan genieten van uw aankoop, even een boek bekijken of rustig uitblazen. U kan er keuvelen, kijken, lezen, vergaderen, bijpraten…', 'images/winkel/Theoria.jpg', 0),
(5, 'De Zondvloed', 'boekenhandel met koffie te vinden in\r\nMechelen en Roeselare.\r\nBlijf op de hoogte van onze activiteiten, abonneer je op de nieuwsbrief en volg ons op facebook.\r\nNIEUWE BOEKEN, TWEEDEHANDS & RAMSJ\r\nDe Zondvloed biedt een keuze uit meer dan 30 000 boeken\r\nNieuw, tweedehands en ramsj; een uniek concept.', 'images/winkel/zondvloed.jpg', 2),
(6, 'De Boekenwolf', 'Boeken zijn als vrienden, je kunt er altijd bij terecht!', 'images/winkel/boekenwolf.jpg', 0),
(7, 'Oxfam-Solidariteit Bookshop Kortrijk', 'Tweedehandsboekenwinkel met een solidaire meerwaarde waar je bovendien muziek en informatica terug kan vinden', 'images/winkel/oxfam.jpg', 8),
(8, 'Press Shop', 'Onze Press Shop-winkels verkopen naast het traditionele productgamma dat je in elke krantenwinkel vindt (pers, rookwaren, snoepgoed en Nationale Loterij) ook voorverpakte voeding', 'images/winkel/pressshop.jpg', 15),
(9, 'Fnac ', 'Fnac is een Franse warenhuisketen voor boeken, cd\'s, dvd\'s, software en consumentenelektronica. De naam stond oorspronkelijk voor Fédération Nationale d\'Achat des Cadres. Fnac maakte deel uit van de Franse distributiegroep Pinault-Printemps-Redoute, waartoe onder andere ook de Gucci-groep behoort.', 'images/winkel/download.jpg', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbib`
--
ALTER TABLE `tblbib`
  ADD PRIMARY KEY (`BibID`);

--
-- Indexes for table `tblboeken`
--
ALTER TABLE `tblboeken`
  ADD PRIMARY KEY (`BoekID`),
  ADD KEY `Internecode` (`Internecode`),
  ADD KEY `Genre` (`Genre`),
  ADD KEY `WinkelID` (`WinkelID`),
  ADD KEY `BibID` (`BibID`);
ALTER TABLE `tblboeken` ADD FULLTEXT KEY `Internecode_2` (`Internecode`);

--
-- Indexes for table `tblboekeninfo`
--
ALTER TABLE `tblboekeninfo`
  ADD PRIMARY KEY (`BoekID`);

--
-- Indexes for table `tblhome`
--
ALTER TABLE `tblhome`
  ADD PRIMARY KEY (`homeID`);

--
-- Indexes for table `tblklant`
--
ALTER TABLE `tblklant`
  ADD PRIMARY KEY (`KlantID`);

--
-- Indexes for table `tbllezen`
--
ALTER TABLE `tbllezen`
  ADD PRIMARY KEY (`articleID`);

--
-- Indexes for table `tblweetjes`
--
ALTER TABLE `tblweetjes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblwinkel`
--
ALTER TABLE `tblwinkel`
  ADD PRIMARY KEY (`WinkelID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbib`
--
ALTER TABLE `tblbib`
  MODIFY `BibID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblboeken`
--
ALTER TABLE `tblboeken`
  MODIFY `BoekID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tblboekeninfo`
--
ALTER TABLE `tblboekeninfo`
  MODIFY `BoekID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tblhome`
--
ALTER TABLE `tblhome`
  MODIFY `homeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblklant`
--
ALTER TABLE `tblklant`
  MODIFY `KlantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tblweetjes`
--
ALTER TABLE `tblweetjes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblwinkel`
--
ALTER TABLE `tblwinkel`
  MODIFY `WinkelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
