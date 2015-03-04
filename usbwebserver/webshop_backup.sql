-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 04 mrt 2015 om 08:22
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
CREATE DATABASE IF NOT EXISTS `webshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webshop`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `CATEGORIENAAM` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `categorie`
--

INSERT INTO `categorie` (`CATEGORIENAAM`) VALUES
('categorie AA'),
('categorie BB'),
('categorie CC'),
('categorie DD');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE IF NOT EXISTS `gebruiker` (
  `GEBRUIKERSNAAM` varchar(15) NOT NULL,
  `VOORNAAM` varchar(125) NOT NULL,
  `TUSSENVOEGSEL` varchar(30) DEFAULT NULL,
  `ACHTERNAAM` varchar(125) NOT NULL,
  `STRAATNAAM` varchar(125) NOT NULL,
  `HUISNUMMER` int(11) NOT NULL,
  `POSTCODE` char(6) NOT NULL,
  `WOONPLAATS` varchar(125) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `SEXE` char(1) NOT NULL,
  `WACHTWOORD` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `gebruiker`
--

INSERT INTO `gebruiker` (`GEBRUIKERSNAAM`, `VOORNAAM`, `TUSSENVOEGSEL`, `ACHTERNAAM`, `STRAATNAAM`, `HUISNUMMER`, `POSTCODE`, `WOONPLAATS`, `EMAIL`, `SEXE`, `WACHTWOORD`) VALUES
('barabas', 'Professor', NULL, 'Barabas', 'Bollebozen', 12, '9574EC', 'Amoras', 'barabase@vandersteen.be', 'm', 'teletijdmachine'),
('franka', 'Frank', NULL, 'Francesca Victoria', 'Museumstraat', 1, '4920DD', 'Groterdam', 'franka@striphelden.eu', 'v', 'Bars'),
('pietjepuk', 'Pietje', NULL, 'Puk', 'Postlaan', 6, '3453AA', 'Keteldorp ', 'pietjepuk@pttpost.nl', 'm', 'spitsoor'),
('wdviking', 'Wicky', 'de', 'Viking', 'Whalhalla', 87, '4326BB', 'Flake', 'wicky@halmar.com', 'm', 'ylvi'),
('test', 'Test', NULL, 'Test', 'Teststraat', 12, '1234AB', 'Testplaats', 'test@test.nl', 'm', 'test');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `PRODUCTNUMMER` int(11) NOT NULL AUTO_INCREMENT,
  `PRODUCTNAAM` varchar(100) NOT NULL,
  `OMSCHRIJVING` text NOT NULL,
  `CATEGORIE` varchar(15) NOT NULL,
  `PRIJS` decimal(8,2) NOT NULL,
  `VOORRAAD` int(11) DEFAULT NULL,
  `AFBEELDING_GROOT` varchar(1024) NOT NULL,
  `AFBEELDING_KLEIN` varchar(1024) NOT NULL,
  PRIMARY KEY (`PRODUCTNUMMER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Gegevens worden uitgevoerd voor tabel `product`
--

INSERT INTO `product` (`PRODUCTNUMMER`, `PRODUCTNAAM`, `OMSCHRIJVING`, `CATEGORIE`, `PRIJS`, `VOORRAAD`, `AFBEELDING_GROOT`, `AFBEELDING_KLEIN`) VALUES
(10, 'Product A', 'Phasellus volutpat tincidunt mi, nec laoreet metus sollicitudin at. Aenean vulputate consequat mauris vitae imperdiet. Phasellus vitae feugiat purus, vel viverra justo. Phasellus in ipsum quis augue tempor dapibus. Fusce porttitor lectus id tortor accumsan molestie. Donec ante orci, fermentum a dui et, tempus ', 'categorie CC', '40.00', NULL, 'plaatjes/afbeeldingA.jpg', 'plaatjes/afbeeldingA-klein.jpg'),
(11, 'Product B', 'Dit zijn blauwe naaldhakken. Sed vitae purus sit amet tortor porta gravida sed ut massa. Quisque non arcu ut lectus adipiscing adipiscing a vel elit. Quisque pharetra eget velit sed fringilla. Sed nisl elit, interdum in elit id, sollicitudin eleifend metus. Sed et venenatis purus, at fringilla leo. Maecenas vestibulum euismod enim, sollicitudin bibendum mi consectetur id. Donec a turpis ac lorem aliquam cursus eget ac sem. Mauris eu tellus augue. Phasellus non risus massa. Aliquam erat volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi a fermentum libero ', 'categorie CC', '33.00', 33, 'plaatjes/afbeeldingB.jpg', 'plaatjes/afbeeldingB-klein.jpg'),
(13, 'Product C', 'vestibulum dui. Maecenas condimentum purus eget ligula mollis volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum magna a metus venenatis, nec imperdiet mauris venenatis. Morbi ut placerat arcu, eget tempus leo. Nam aliquet sed ligula a gravida. Sed vitae purus sit amet tortor porta gravida sed ut massa. Quisque non arcu ut lectus adipiscing adipiscing a vel elit. Quisque pharetra eget velit sed fringilla. Sed nisl elit, interdum in elit id, sollicitudin eleifend metus. Sed et venenatis purus, at fringilla leo. Maecenas vestibulum euismod enim, sollicitudin bibendum mi consectetur id. Donec a turpis ac lorem aliquam cursus eget ac sem. Mauris eu tellus augue. Phasellus non risus massa. Aliquam erat volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi a fermentum libero. ', 'categorie CC', '333.00', 3, 'plaatjes/afbeeldingC.jpg', 'plaatjes/afbeeldingC-klein.jpg'),
(14, 'Product D', 'Phasellus volutpat tincidunt mi, nec laoreet metus sollicitudin at. Aenean vulputate consequat mauris vitae imperdiet. Phasellus vitae feugiat purus, vel viverra justo. Phasellus in ipsum quis augue tempor dapibus. Fusce porttitor lectus id tortor accumsan molestie. Donec ante orci, fermentum a dui et, tempus faucibus risus. Aenean porta dapibus quam sodales eleifend. Donec congue mauris sit amet neque sodales varius. Integer vehicula vel lacus in consequat. Pellentesque et magna pharetra, mollis dolor eu, consectetur turpis. Nam porttitor, leo ac mattis blandit', 'categorie CC', '526.00', 993, 'plaatjes/afbeeldingD.jpg', 'plaatjes/afbeeldingD-klein.jpg'),
(15, 'Product E', 'tempor suscipit enim ac rhoncus. Phasellus sit amet dapibus erat. Curabitur tempor auctor urna, quis luctus felis vestibulum sed. Vestibulum suscipit bibendum tincidunt. Sed ac condimentum eros. Fusce luctus convallis turpis eu tristique. Nunc metus tortor, imperdiet iaculis turpis sed, scelerisque hendrerit odio. Nunc sit amet ipsum ut turpis fringilla venenatis. Phasellus viverra molestie sagittis. Sed est odio, lacinia vel nisl et, vestibulum lacinia ', 'categorie DD', '44.00', 45, 'plaatjes/afbeeldingE.jpg', 'plaatjes/afbeeldingE-klein.jpg'),
(16, 'Product F', 'Cras tincidunt gravida dignissim. Mauris at commodo augue, ac tristique erat. Proin a adipiscing leo, et volutpat eros. Aenean eros arcu, cursus nec dolor non, aliquam pharetra lectus. Sed feugiat tristique risus eget tristique. Donec pharetra augue justo, sit amet vestibulum erat commodo id. Curabitur a molestie est. Sed a bibendum erat, quis vestibulum lorem. Duis interdum pulvinar enim, quis iaculis erat ullamcorper scelerisque. Nunc vel erat aliquam, vulputate nibh non, sagittis magna. Aliquam egestas posuere purus, vitae tristique risus porta a. Nunc nec elit iaculis, mattis purus nec, sagittis tellus. Maecenas auctor id urna id malesuada. Vivamus pellentesque turpis velit, quis bibendum tortor placerat vitae. Phasellus condimentum ligula vel dignissim tempus. ', 'categorie BB', '66.00', 47, 'plaatjes/afbeeldingF.jpg', 'plaatjes/afbeeldingF-klein.jpg'),
(17, 'Product G', 'Cras sodales placerat imperdiet. Nunc adipiscing, lectus a gravida pulvinar, sapien metus commodo ipsum, at cursus orci est vitae massa. Morbi at enim purus. Etiam luctus massa eu nisi bibendum blandit. Donec tincidunt lorem at justo lacinia viverra. Suspendisse semper nulla vel sollicitudin elementum. Vivamus ac augue urna. Ut et lorem malesuada, vestibulum tellus et, porttitor orci. Phasellus vitae pretium elit. Curabitur diam neque, aliquam quis nunc vel, placerat aliquet tortor. Morbi tempus est at lectus tincidunt, in malesuada nunc aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur malesuada gravida tortor eget iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec facilisis congue sem at fringilla. Quisque adipiscing ante ipsum, in condimentum felis varius eu. Sed ultricies, orci non scelerisque congue, lacus justo blandit felis, sit amet faucibus tellus massa vel libero. In vestibulum mi ut adipiscing vehicula. Aenean pulvinar, sem quis elementum porttitor, massa mauris ultricies risus, eget lobortis lacus turpis non erat. Quisque ornare bibendum aliquam. Sed laoreet ornare laoreet. Nullam et dui accumsan, vulputate mi non, tristique lectus. ', 'categorie BB', '5432.00', 996, 'plaatjes/afbeeldingG.jpg', 'plaatjes/afbeeldingG-klein.jpg'),
(34, 'Product H', 'Sed id ipsum in nisi tempus luctus quis ac mi. In hac habitasse platea dictumst. Donec dapibus sollicitudin quam, vel ultrices orci porttitor ut. Suspendisse potenti. Aliquam et lorem vitae ante porttitor pellentesque. Cras sit amet accumsan nisl. Phasellus quam magna, tincidunt non risus vitae, adipiscing pharetra sapien. In hac habitasse platea dictumst. Morbi lorem urna, luctus eget pellentesque euismod, rutrum a nulla. Curabitur imperdiet facilisis felis, sit amet tincidunt diam venenatis at. Etiam libero nulla, sagittis vitae tellus at, ornare varius ante. Nunc leo nisi, placerat non convallis id, fermentum in metus. Nunc sollicitudin eleifend hendrerit. Nam neque velit, vehicula vel egestas ac, blandit feugiat leo. Morbi ', 'categorie AA', '324.00', 5, 'plaatjes/afbeeldingH.jpg', 'plaatjes/afbeeldingH-klein.jpg'),
(35, 'Product I', 'Ut non sapien vel mauris varius gravida non et leo. Vestibulum vitae nibh porta, blandit nisi a, tincidunt neque. Sed a pretium leo, sit amet consequat felis. Quisque vehicula, mi at semper placerat, massa turpis elementum odio, in gravida lectus nisl eu metus. Duis scelerisque rutrum scelerisque. Sed in ornare mauris. Donec imperdiet, turpis a pellentesque tristique, magna sem tempus tortor, at pharetra libero velit at ante. Integer euismod dolor nec tellus bibendum, porttitor fermentum lectus placerat', 'categorie AA', '789.00', 33, 'plaatjes/afbeeldingI.jpg', 'plaatjes/afbeeldingI-klein.jpg'),
(36, 'Product J', 'Nunc imperdiet est a ligula malesuada, sit amet mollis nisl gravida. Etiam eget fringilla leo. Maecenas dolor eros, pretium eget commodo eget, sagittis aliquet lacus. In tempus suscipit velit sed gravida. Nulla id magna tincidunt, iaculis enim non, egestas mi. Praesent vel est iaculis, semper lacus id, suscipit odio. Phasellus nec lacus tempus, pharetra nunc vitae, congue risus. Nam ut ligula neque. Curabitur vel fermentum massa. Etiam iaculis egestas aliquet', 'categorie AA', '4.00', 25, 'plaatjes/afbeeldingJ.jpg', 'plaatjes/afbeeldingJ-klein.jpg'),
(37, 'Product K', 'Fusce eu lorem nunc. Ut sit amet massa ac est venenatis iaculis sed ut elit. In hac habitasse platea dictumst. Etiam mollis sit amet dolor id iaculis. Vivamus mattis odio eu ultrices elementum. Praesent ac quam turpis. Nulla at est quis dolor dignissim suscipit vitae at dui. Etiam scelerisque venenatis lorem a aliquam. Duis laoreet posuere eros non ultricies. Quisque tempus eu mi in feugiat. Mauris euismod ac sem ut volutpat.', 'categorie AA', '44.00', NULL, 'plaatjes/afbeeldingK.jpg', 'plaatjes/afbeeldingK-klein.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_gerelateerd_product`
--

CREATE TABLE IF NOT EXISTS `product_gerelateerd_product` (
  `PRODUCTNUMMER` int(11) NOT NULL,
  `PRODUCTNUMMER_GERELATEERD_PRODUCT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `product_gerelateerd_product`
--

INSERT INTO `product_gerelateerd_product` (`PRODUCTNUMMER`, `PRODUCTNUMMER_GERELATEERD_PRODUCT`) VALUES
(10, 11),
(10, 13),
(11, 10),
(11, 13),
(11, 16),
(17, 10),
(17, 11),
(17, 36),
(36, 34),
(36, 35),
(36, 37);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
