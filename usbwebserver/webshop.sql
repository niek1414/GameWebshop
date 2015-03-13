-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 13 mrt 2015 om 12:40
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `webshop`
--
CREATE DATABASE IF NOT EXISTS `webshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `webshop`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `CATEGORIENUMMER` int(11) NOT NULL AUTO_INCREMENT,
  `CATEGORIENAAM` varchar(15) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`CATEGORIENUMMER`),
  UNIQUE KEY `CATEGORIENUMMER` (`CATEGORIENUMMER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `categorie`
--

INSERT INTO `categorie` (`CATEGORIENUMMER`, `CATEGORIENAAM`) VALUES
(1, '3DS Games'),
(2, 'Wii U Games'),
(3, 'Consoles'),
(4, 'Handhelds'),
(5, 'Accesoires');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE IF NOT EXISTS `gebruiker` (
  `GEBRUIKERSNAAM` varchar(15) CHARACTER SET utf8 NOT NULL,
  `VOORNAAM` varchar(125) CHARACTER SET utf8 NOT NULL,
  `TUSSENVOEGSEL` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `ACHTERNAAM` varchar(125) CHARACTER SET utf8 NOT NULL,
  `STRAATNAAM` varchar(125) CHARACTER SET utf8 NOT NULL,
  `HUISNUMMER` int(11) NOT NULL,
  `POSTCODE` char(6) CHARACTER SET utf8 NOT NULL,
  `WOONPLAATS` varchar(125) CHARACTER SET utf8 NOT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8 NOT NULL,
  `SEXE` char(1) CHARACTER SET utf8 NOT NULL,
  `WACHTWOORD` varchar(32) CHARACTER SET utf8 NOT NULL,
  UNIQUE KEY `GEBRUIKERSNAAM` (`GEBRUIKERSNAAM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `gebruiker`
--

INSERT INTO `gebruiker` (`GEBRUIKERSNAAM`, `VOORNAAM`, `TUSSENVOEGSEL`, `ACHTERNAAM`, `STRAATNAAM`, `HUISNUMMER`, `POSTCODE`, `WOONPLAATS`, `EMAIL`, `SEXE`, `WACHTWOORD`) VALUES
('barabas', 'Professor', NULL, 'Barabas', 'Bollebozen', 12, '9574EC', 'Amoras', 'barabase@vandersteen.be', 'm', 'c28248645e928852413918c4056a6b56'),
('erwin', 'Erwin', '', 'Noorlander', 'straat', 23, '1234AB', 'plaats', 'e@e.nl', 'M', '785f0b13d4daf8eee0d11195f58302a4'),
('franka', 'Frank', NULL, 'Francesca Victoria', 'Museumstraat', 1, '4920DD', 'Groterdam', 'franka@striphelden.eu', 'v', '226bea4d132b81f15f1bda87c76c6706'),
('Niek1414', 'Niek', ',', 'Knuiman', 'hoi', 78, '1234AB', 'gebruikerskerk', 'mag@je-niet.weten', 'M', '5e812e5dd07d0a30eea6592020901c44'),
('pietjepuk', 'Pietje', NULL, 'Puk', 'Postlaan', 6, '3453AA', 'Keteldorp ', 'pietjepuk@pttpost.nl', 'm', '9f682f7534178d5d10942f0d67468d56'),
('que', 'q', 'q', 'q', 'q', 0, 'q', 'q', 'q@q.nl', 'M', '7694f4a66316e53c8cdd9d9954bd611d'),
('test', 'Test', 'van der', 'Test', 'Teststraat', 12, '1234AB', 'Testplaats', 'test@test.nl', 'm', '098f6bcd4621d373cade4e832627b4f6'),
('wdviking', 'Wicky', 'de', 'Viking', 'Whalhalla', 87, '4326BB', 'Flake', 'wicky@halmar.com', 'm', 'c224573958d33e287f49b2ae1b3dd1e7');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `PRODUCTNUMMER` int(11) NOT NULL AUTO_INCREMENT,
  `PRODUCTNAAM` varchar(100) CHARACTER SET utf8 NOT NULL,
  `OMSCHRIJVING` text CHARACTER SET utf8 NOT NULL,
  `CATEGORIE` varchar(15) CHARACTER SET utf8 NOT NULL,
  `PRIJS` decimal(8,2) NOT NULL,
  `VOORRAAD` int(11) DEFAULT NULL,
  `AFBEELDING_GROOT` varchar(1024) CHARACTER SET utf8 NOT NULL,
  `AFBEELDING_KLEIN` varchar(1024) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`PRODUCTNUMMER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Gegevens worden uitgevoerd voor tabel `product`
--

INSERT INTO `product` (`PRODUCTNUMMER`, `PRODUCTNAAM`, `OMSCHRIJVING`, `CATEGORIE`, `PRIJS`, `VOORRAAD`, `AFBEELDING_GROOT`, `AFBEELDING_KLEIN`) VALUES
(1, 'Mario Kart 7', 'Mario Kart 7 wekt het raceplezier van Mushroom Kingdom tot leven met prachtige 3D-effecten. Geniet van nieuwe parkoersen, nieuwe strategische mogelijkheden, aanpasbare wagens en de spannendste races die je ooit beleefde. De nieuwe functies van de karts maken de dolle racepret nog leuker en gevarieerder. Tijdens grote sprongen verschijnt nu een vleugel aan de kart zodat je ermee kunt zweven. Eenmaal onder water verschijnt een propeller die de kart over de zeebodem stuwt. Je kunt je voertuig aanpassen aan je eigen tactiek en rijstijl. Met grote wielen kun je bijvoorbeeld sneller over onverharde wegen rijden, terwijl je met kleinere wielen op asfalt sneller kunt optrekken. Je kunt ook het frame en de vleugel van je kart aanpassen.', '1', '44.99', -8, 'items/mk7.jpg', 'items/mk7.jpg'),
(2, 'Super Mario 3D Land', 'Super Mario 3D Land bevat een unieke mix van bekende en gloednieuwe Mariogameplay. Prinses Peach heeft zich weer eens in de nesten gewerkt; Bowser heeft haar ontvoerd en er is maar één man die voor gerechtigheid kan zorgen.', '1', '44.99', 1, 'items/sm3dl.jpg', 'items/sm3dl.jpg'),
(3, 'New Super Mario Bros 2', 'De New Super Mario Bros.-serie sprint, stampt en komt via muursprongen terecht op de 3DS en 3DS XL. Dit gloednieuw deel biedt de klassieke gameplay, maar deze keer baadt de gameplay in een gouden licht... Het hele spel barstensvol munten om te verzamelen! Kun jij er een miljoen krijgen?\r\n\r\nDe game bevat talloze nieuwe power-ups - verander in een gouden Mario - en meer! Ren en spring door meer dan 80 levels, verdeeld over verschillende werelden. Met een vriend naast je kan je Local Play proberen waarin je samen zoveel mogelijk munten verzameld. Bovendien ondersteunt de game ook StreetPass en SpotPass connectiviteiten. Verbindt je 3DS met het internet en je ziet meteen hoeveel munten andere spelers verzameld hebben.', '1', '44.99', 3, 'items/nsmb2.jpg', 'items/nsmb2.jpg'),
(4, 'Zelda: Ocarina of Time 3D', 'Na een nachtmerrie over een zekere prinses en de kwaadaardige dief Ganondorf, ontwaakt Link in zijn dorp, dat verborgen ligt achter de mysterieuze Lost Woods. Als de enige Kokiri zonder een fee, ontmoet hij al gauw zijn nieuwe reisgezel, de gevleugende Navi, en vertrekt op het avontuur van zijn leven. Link begint aan een legendarische reis om te verhinderen dat de Gerudo-dievenkoning Ganondorf de Triforce, een heilig relikwie dat ultieme macht aan de bezitter kan schenken, in handen krijgt. De queeste, die onvermijdelijk uitmondt in een reddingsmissie voor Prinses Zelda, leidt de speler onder andere door donkere kerkers, pittoreske dorpjes, het hart van een vulkaan, de buik van een beest en zelfs doorheen de tijd.', '1', '44.95', 6, 'items/oot3d.jpg', 'items/oot3d.jpg'),
(5, 'Zelda: Majora''s Mask 3D', 'Race tegen de klok en red een vervloekt land van de ondergang in The Legend of Zelda: Majora s Mask 3D. In deze remake van de game voor de Nintendo 64 vind je verbeterde graphics en functies, terwijl het gevoel van de oorspronkelijke game bewaard blijft. Beleef een meeslepend en angstaanjagend avontuur in een geheimzinnige wereld.\r\n\r\nGa samen met Link op pad om het land Termina te behoeden voor een gruwelijk lot. Binnen drie dagen stort de maan op de aarde, waardoor alles en iedereen zal worden verwoest. Met de magische Ocarina of Time moet Link door de tijd reizen en dezelfde drie dagen steeds opnieuw beleven om een ramp te voorkomen en de wereld te redden. Verken iedere uithoek van Termina, waaronder gevaarlijke kerkers, verraderlijke bergen, giftige moerassen, een spookachtige woestijn en een uitgestrekte oceaan, om de plannen van de Skull Kid te dwarsbomen.', '1', '44.95', 8, 'items/mm3d.jpg', 'items/mm3d.jpg'),
(6, 'Super Mario 3D World', 'Reis met Mario, Luigi en de anderen naar Sprixieland in Super Mario 3D World! Bowser heeft de Sprixie-prinses ontvoerd en nu moeten Mario en zijn vrienden haar redden, al racend naar de vlaggenstok aan het einde van een keur aan levels! Sprixieland bevat allerlei listige valstrikken en interactieve voorwerpen, van doorzichtige buizen om doorheen te reizen tot ballen om te gooien en treinen om een ritje op te maken! Er zijn zelfs momenten waarop onze helden over een muur moeten klauteren, net als katten! Met een meerspelerstand voor vier spelers en speciale Wii U GamePad-besturing is Super Mario 3D World een gloednieuw avontuur, alleen voor Wii U!\r\n\r\nMario''s hoofddekselverzameling en zijn speciale vaardigheden blijven zich maar uitbreiden. Naast klassiekers als Tanuki-Mario en Boemerang-Mario, zijn er verscheidene nieuwe power-ups om te ontdekken. Als je de superbel pakt, verandert Mario in een murenbeklimmende, krabbende kat, met een kanondoos op je hoofd kun je kogels afvuren en de dubbele kers creëert een hulpvaardige kloon, waarmee je je vijanden dubbel kunt laten zien!', '2', '59.99', 5, 'items/sm3dw.jpg', 'items/sm3dw.jpg'),
(7, 'Hyrule Warriors', 'Dit spel combineert de wereld van The Legend of Zelda op kunstige manier met de stijl van Dynasty Warriors, wat resulteert in een legendarisch hack-and-slash-avontuur voor Wii U. Spelers kunnen kiezen voor de held Link of Princess Zelda, maar daarnaast zijn ook Impa en Midna voor het eerst speelbare personages. Bekende locaties uit de wereld van The Legend of Zelda veranderen subtiel om de vormgeving van de originele spellen te reflecteren.\r\n\r\nKruip in de huid van Link, Impa en andere personages uit The Legend of Zelda, en maak korte metten met enorme hordes vijanden door de sensationele, krachtige aanvallen te gebruiken waar Dynasty Warriors bekend om staat. Tijdens deze krachttoer door de mooiste plekken van Hyrule kom je de meest geduchte vijanden uit de Zelda-reeks tegen. Denk na over je tactiek en voltooi missies zo efficiënt mogelijk om Hyrule te redden!', '2', '59.99', 6, 'items/hw.jpg', 'items/hw.jpg'),
(8, 'Mario Kart 8', 'Trotseer de zwaartekracht in Mario Kart 8, exclusief op de Wii U! Ontdek duizelingwekkende circuits en speel tegen andere spelers naast je op de bank of aan de andere kant van de wereld!\r\n\r\nScheur over blauwe antizwaartekrachtspanelen om het wegdek achter je te laten en via adembenemde watervallen, langs gevels en andere sluipwegen de finish te bereiken. Het weggedrag is trouwens anders in de antizwaartekrachtstand: ram andere deelnemers voor een botsboost en om snelheid te winnen! Dankzij de antizwaartekracht, halsbrekende zweegvliegstunts en razendsnelle actie onder water, kun je over bijna ieder oppervlak racen in de 32 nieuwe en klassieke banen!', '2', '59.99', 4, 'items/mk8.jpg', 'items/mk8.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_gerelateerd_product`
--

CREATE TABLE IF NOT EXISTS `product_gerelateerd_product` (
  `PRODUCTNUMMER` int(11) NOT NULL,
  `PRODUCTNUMMER_GERELATEERD_PRODUCT` int(11) NOT NULL,
  PRIMARY KEY (`PRODUCTNUMMER`,`PRODUCTNUMMER_GERELATEERD_PRODUCT`),
  UNIQUE KEY `PRODUCTNUMMER` (`PRODUCTNUMMER`,`PRODUCTNUMMER_GERELATEERD_PRODUCT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `product_gerelateerd_product`
--

INSERT INTO `product_gerelateerd_product` (`PRODUCTNUMMER`, `PRODUCTNUMMER_GERELATEERD_PRODUCT`) VALUES
(1, 8),
(2, 3),
(2, 6),
(3, 2),
(3, 6),
(4, 5),
(5, 4),
(6, 2),
(6, 3),
(8, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
