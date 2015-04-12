-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2015 at 09:37 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restoran`
--
CREATE DATABASE IF NOT EXISTS `restoran` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `restoran`;

-- --------------------------------------------------------

--
-- Table structure for table `jela`
--

CREATE TABLE IF NOT EXISTS `jela` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `image_url` varchar(50) NOT NULL,
  `Naziv_hr` varchar(50) CHARACTER SET cp1250 COLLATE cp1250_bin NOT NULL,
  `Opis_hr` varchar(1000) CHARACTER SET cp1250 COLLATE cp1250_bin NOT NULL,
  `Naziv_en` varchar(50) NOT NULL,
  `Opis_en` varchar(1000) NOT NULL,
  `Naziv_de` varchar(50) NOT NULL,
  `Opis_de` varchar(1000) NOT NULL,
  `Cijena` decimal(10,0) NOT NULL,
  `Popust` decimal(10,0) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `jela`
--

INSERT INTO `jela` (`ID`, `image_url`, `Naziv_hr`, `Opis_hr`, `Naziv_en`, `Opis_en`, `Naziv_de`, `Opis_de`, `Cijena`, `Popust`) VALUES
(1, 'becki', 'Bečki odrezak (svinjetina)', ' Najslavnije austrijsko jelo zapravo je netipično za austrijsku kuhinju: u Italiji se takav panirani odrezak naziva Cotoletta alla Milanese. Bilo kako bilo, sočan odrezak prihvaćen je u cijelome svijetu, a možete ga poslužiti i s krumpir-salatom.', 'Vienna steak (pork)', 'Wiener Schnitzel is a very thin, breaded and deep fried schnitzel made from veal. It is one of the best known specialities of Viennese cuisine. The Wiener Schnitzel is the national dish of Austria.', 'Wiener Schnitzel', 'Wiener Schnitzel ist eine sehr dünne, paniert und frittiert Schnitzel aus Kalbfleisch. Es ist eines der bekanntesten Spezialitäten der Wiener Küche. Das Wiener Schnitzel ist das Nationalgericht von Österreich.', '45', '0'),
(2, 'naravni', 'Naravni odrezak', 'Lijepo je vidjeti ukusan komad mesa na tanjuru, složit će se mnogi. Ovako pripremljen naravni odrezak brzo je i praktično rješenje za svakodnevne ručkove koje pripremamo gotovo rutinski. Vrijeme je da uvedemo pokoju novinu!\n', 'Pork steak', 'Nice to see a tasty piece of meat on a plate, many will agree. Thus prepared Steak quick and practical solution for everyday lunches are preparing almost routinely. It''s time to introduce the occasional novelty!', 'Schweinesteak', 'Schön, dass Sie ein leckeres Stück Fleisch auf einem Teller zu sehen, viele werden mir zustimmen. So vorbereitet Steak schnelle und praktische Lösung für das tägliche Mittagessen fast routinemäßig vorbereitet. Es ist Zeit, die gelegentliche Neuheit vorstellen!', '45', '0'),
(3, 'prutici', 'Pileći prutići', 'U sjeveroistočnom dijelu SAD, pileći prutiči koji se poslužuju u kineskim restoranima su često napravljeni sa jajima, tijestom i imaju glatku teksturu. Oni se obično poslužuju ili kao predjelo ili kao glavno jelo. Pileći prutiči su česta snack u SAD-u\n\nU drugim receptima, paniranje smjesu za pileće prutiće može nedostajati jaja i teksturu jelo sama često može biti vrlo grubo. Ova verzija je često služio uz razne umake porinuće. Na porinuće umacima može uključivati: kečap, plavi sir preljev, ranč preljev, umak za roštilj, med senf, Buffalo umak krila, maslac i češnjak, umak od šljiva, curry majoneze ili slatko i kiselo umak. Pileći prsti ove vrste često se služio u košari s pomfrit, služio na vrt salatu, ili u sendvič, kao što je folijom ili punđu.', 'Chicken stick', 'In the Northeastern United States, chicken fingers served in Chinese restaurants are often made with an egg batter and have a smooth texture. They are commonly served either as an appetizer or as a main dish. Chicken fingers are a common snack in the U.S.\n\nIn other recipes, the breading mixture for chicken fingers can lack eggs and the texture of the dish itself can often be rather coarse. This version is often served alongside various dipping sauces. The dipping sauces can include: ketchup, blue cheese dressing, ranch dressing, barbecue sauce, honey mustard, Buffalo wing sauce, butter and garlic, plum sauce, curry mayonnaise, or sweet and sour sauce. Chicken fingers of this kind are often served in a basket with French fries, served on a garden salad, or in a sandwich, such as a wrap or on a bun.\n\n', 'Hähnchen - Stick', 'Im Nordosten der USA, in China-Restaurants werden oft mit einem Ei Teig gemacht serviert Chicken Fingers und eine glatte Textur. Sie werden üblicherweise entweder als Vorspeise oder als Hauptgericht serviert. Chicken Fingers sind eine gemeinsame Snack in der US-\n\nMit anderen Rezepten, die Panade Mischung für Chicken Fingers Eier und die Textur der Schale selbst kann oft recht grob sein fehlt. Diese Version wird oft zusammen mit verschiedenen Dip-Saucen serviert. Die Dip-Saucen, dazu gehören Ketchup, Blauschimmelkäse-Dressing, Ranch Dressing, Barbecue-Sauce, Honig-Senf, Buffalo Wing Sauce, Butter und Knoblauch, Pflaumensauce, Currymayonnaise oder süß-saurer Sauce. Chicken Fingers dieser Art werden oft in einem Korb mit Französisch frites serviert, serviert auf einem grünen Salat oder in einem Sandwich, wie eine Folie oder auf einem Brötchen.', '30', '0'),
(4, 'pileciZar', 'Pileći file na žaru', 'Pileći file ili pileće bijelo meso predstavlja jednu od najzdravijih namirnica životinjskog podrijetla. Zbog malog sadržaja masti i visokog sadržaja proteina pileći file predstavlja odličan izbor za prehranu male dijece, sportaša, starijih osoba i svih ljudi koji vode računa o prehrani i količini kalorija koje unose u svoj organizam.\nPileći file je lak za pripremu, brzo se termički obrađuje, vrlo je ukusan i lako se kombinira sa različitim namirnicama pa je vrlo zastupljen u svim svjetskim kuhinjama.\n', 'Grilled chicken fillet', 'Chicken fillet or chicken white meat is one of the healthiest foods of animal origin. Because of the low fat content and high protein content, chicken fillet is a great choice for food small children, athletes, the elderly and all people who care about nutrition and your calories in your body.\nChicken fillet is easy to prepare, quick to heat treatment is very tasty and can be combined with different ingredients and is very present in all world cuisines.', 'Gegrillte Hähnchenfilet', 'Hähnchenfilet oder Hähnchenweißfleisch ist eine der gesündesten Lebensmittel tierischen Ursprungs. Aufgrund des geringen Fettgehalt und hohem Proteingehalt ist Hähnchenfilet eine gute Wahl für Lebensmittel kleine Kinder, Sportler, ältere Menschen und alle Menschen, die über Ernährung und Kalorien in Ihrem Körper zu kümmern.\nHähnchenfilet ist einfach zuzubereiten, ist schnell zu erwärmen Behandlung sehr schmackhaft und kann mit verschiedenen Zutaten kombiniert werden und ist in allen Küchen der Welt sehr präsent.', '40', '15'),
(5, 'janjetinaZar', 'Janjetina na žaru', 'Kraljica mesa u predivnoj marinadi pravi je specijalitet s roštilja. Miris i okusi platit će nam sav trud koji ćemo uložiti da bismo napravili ovo ukusno i sočno jelo. Malo rajčice, mladog luka i "feta" kruha dovoljni su za vrhunski gastronomski doživljaj.\n', 'Grilled turkey fillet', 'Queen of meat marinated in a beautiful real specialty is grilled. The scent and flavors will pay us all the effort that we make in order to make this tasty and juicy dish. Few tomatoes, spring onions and "feta" bread are sufficient for the ultimate gastronomic experience.', 'Gegrillte Schnitzel', 'Königin von Fleisch in einem schönen Spezialität mariniert wird gegrillt. Der Duft und Aromen wird uns zahlen alle die Mühe, die wir, um diese leckere und saftige Gericht zu machen zu machen. Einige Tomaten, Frühlingszwiebeln und "Feta" Brot reichen für die ultimative kulinarisches Erlebnis.', '40', '0'),
(6, 'przeneLignje', 'Pržene lignje', 'Želite li potpun, zdrav i lagan obrok u kojem će uživati članovi brojne obitelji, samci, pa i vaši „fancy“ prijatelji, ovo je rješenje za sve probleme. Pržene lignje s malo krumpir salate i sve to još s malo peršina za aromu i boju zadovoljit će sve prohtjeve.', 'Fried squids', 'Do you want a full, healthy and easy meal to be enjoyed members of numerous families, singles, and even your "fancy" friends, this is the solution to all problems. Fried calamari with a little potato salad and everything else with a little parsley for flavor and color will satisfy all appetites.', 'Gebratene Tintenfische', 'Möchten Sie eine vollständige, gesunde und leichte Mahlzeit zu genießen Mitglieder der zahlreichen Familien, Singles und sogar Ihre "fancy" Freunde, das ist die Lösung für alle Probleme. Gebratener Tintenfisch mit etwas Kartoffelsalat und alles, was mit ein wenig Petersilie für Geschmack und Farbe werden alle Gelüste zu befriedigen.', '40', '0'),
(7, 'lignjeZar', 'Lignje na žaru', 'Probali ste pržene lignje, i punjene, i brujet od liganja. Vrijeme je da probate lignje na žaru. Znalci jedu lignje baš na ovaj način, jer od svih načina priprave, baš ovako će najviše sačuvati svoje prirodne okuse i mirise.\n', 'Grilled Lamb', 'You''ve tried fried calamari, and stuffed, and brujet squid. It''s time to try the grilled calamari. Experts eat squid exactly in this way, because of all types of preparation, just like the most to preserve its natural flavors and aromas.', 'Gegrilltes Lamm', 'Sie haben versucht, gebratene Calamari, und gefüllt, und brujet Tintenfisch. Es ist Zeit, die gegrillten Calamari versuchen. Experten essen Tintenfisch genau auf diese Weise, weil von allen Arten von Vorbereitung, ebenso wie die meisten seiner natürlichen Geschmack und Aroma zu bewahren.', '40', '10'),
(8, 'lazanjeMeso', 'Lazanje s mesom', 'Lazanje su jedno od jela koje bi stvarno svatko trebao znati napraviti. Sastoje se od tri bitna dijela: umaka bešamel, punjenja (mesno, povrtno...) te mnogobrojnih "plahtica" tjestenine. Zapravo, baš se ta tjestenina naziva "lazanje", a po njoj je i samo jelo dobilo ime.\n', 'Meat lasagne', 'Lasagne are wide, flat-shaped pasta, and possibly one of the oldest types of pasta. The word "lasagne" and, in many non-Italian languages, the singular "lasagna", can also refer to a dish made with several layers of lasagne sheets alternated with sauces and various other ingredients.', 'Fleisch Lasagne', 'Lasagne sind breit, flach -Nudeln , und möglicherweise eine der ältesten Arten von Nudeln . Das Wort " Lasagne " und in vielen nicht- niederländischer Sprache, der Singular " Lasagne " , kann auch auf einem Teller mit mehreren Schichten aus Lasagneblätter mit Saucen und verschiedenen anderen Zutaten abwechselnd gemacht beziehen .\n', '35', '10'),
(9, 'palacinke', 'Palačinke', 'Palačinka je slastica obično napravljena od mlijeka, jaja, brašna i soli. Palačinkima se uglavnom dodaje šećer, začini itd. Može biti pržena na ulju ili bez ulja. Obično se palačinki dodaju i razni nadjevi poput čokolade, raznih čokoladnih namaza (Nutella, Eurocrem), marmelade, sira itd. Osim na uobičajeni način, palačinke mogu biti napravljene i bez sastojaka životinjskog podrijetla, gdje se kravlje mlijeko obično zamijeni sojinim, rižinim ili mlijekom od zobi.', 'Pancakes', 'They may be served at any time with a variety of toppings or fillings including jam, fruit, syrup, chocolate chips, or meat. In America, they are typically considered to be a breakfast food. In Britain and the Commonwealth, they are associated with Shrove Tuesday, commonly known as Pancake Day, when perishable ingredients had to be used up before the fasting period of Lent began.\n', 'Pfannkuchen', 'Sie können jederzeit mit einer Vielzahl von Belägen oder Füllungen mit Marmelade, Obst , Sirup, Schokolade-Chips , oder Fleisch serviert werden. In Amerika sind sie in der Regel als ein Frühstück Essen. In Großbritannien und den Commonwealth , werden sie mit Fastnacht verbunden , die gemeinhin als Pancake Day bekannt , bei verderblichen Zutaten hatte vor der Fastenzeit in der Fastenzeit zu nutzen begann .\n', '20', '5'),
(10, 'strukli', 'Štrukli', 'Štrukli ili Zagorski štruklji su tradicijsko hrvatsko jelo koje je dio kuhinje u većini kućanstava diljem Hrvatskog zagorja i Zagreba.\nŠtrukli se mogu pripremati na dva osnovna načina, kuhanjem i pečenjem.', 'Štrukli (homemade pastry)', 'Strukli  is a popular traditional Croatian dish served in households across Hrvatsko Zagorje and Zagreb regions in the north of the country, composed of dough and various types of filling which can be either cooked or baked.', 'Strudel', 'Zagorski Strukli ist eine beliebte traditionelle kroatische Gericht serviert in Haushalten in Zagorje und Zagreb Regionen im Norden des Landes , aus Teig und verschiedene Arten von Füllung , die entweder gekocht oder gebacken werden können, zusammen. Es ist eng verwandt mit Struklji , eine traditionelle slowenische Gericht.', '20', '5');

-- --------------------------------------------------------

--
-- Table structure for table `pica`
--

CREATE TABLE IF NOT EXISTS `pica` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `image_url` varchar(50) NOT NULL,
  `Naziv` varchar(50) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci NOT NULL,
  `Cijena` decimal(10,0) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `pica`
--

INSERT INTO `pica` (`ID`, `image_url`, `Naziv`, `Cijena`) VALUES
(1, 'cola', 'Coca Cola 0.25L', '15'),
(2, 'colaZero', 'Coca Cola Zero 0.25L', '15'),
(3, 'fanta', 'Fanta 0.25L', '15'),
(4, 'sprite', 'Sprite 0.25L', '15'),
(5, 'sLemon', 'Schweppes bitter lemon 0.25L', '15'),
(6, 'sTonic', 'Schweppes tonic water 0.25L', '15'),
(7, 'sTangerine', 'Schweppes tangerine 0.25L', '15'),
(8, 'orangina', 'Orangina 0.25L', '16'),
(9, 'cockta', 'Cockta 0.25L', '16'),
(10, 'cedevita', 'Cedevita 15g', '12'),
(11, 'redBull', 'Red Bull 0.25', '25'),
(12, 'espresso', 'Espresso', '7'),
(13, 'cappucino', 'Machiato / cappucino', '8'),
(14, 'cokolada', 'Topla cokolada', '13'),
(15, 'mlijeko', 'Mlijeko', '4');

-- --------------------------------------------------------

--
-- Table structure for table `prilozi`
--

CREATE TABLE IF NOT EXISTS `prilozi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Naziv_hr` varchar(100) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci NOT NULL,
  `Naziv_en` varchar(50) NOT NULL,
  `Naziv_de` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `prilozi`
--

INSERT INTO `prilozi` (`ID`, `Naziv_hr`, `Naziv_en`, `Naziv_de`) VALUES
(1, 'Kajmak', 'Kajmak (cheese spread)', 'Creme'),
(2, 'Kroketi', 'Croquettes', 'Kroketten'),
(3, 'Riža', 'Rice', 'Reis'),
(4, 'Pomfrit', 'French fries', 'Französisch frites'),
(5, 'Umak od gljiva', 'Mushroom sauce', 'Pilzsauce'),
(6, 'Pekarski krumpir', 'Sauted potatoes', 'Bratkartoffeln');

-- --------------------------------------------------------

--
-- Table structure for table `prilozi_list`
--

CREATE TABLE IF NOT EXISTS `prilozi_list` (
  `Jelo_id` int(11) NOT NULL,
  `Prilog_id` int(11) NOT NULL,
  KEY `Jelo_id` (`Jelo_id`),
  KEY `Prilog_id` (`Prilog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prilozi_list`
--

INSERT INTO `prilozi_list` (`Jelo_id`, `Prilog_id`) VALUES
(1, 2),
(1, 4),
(1, 6),
(2, 2),
(2, 4),
(2, 6),
(3, 5),
(4, 2),
(4, 4),
(4, 6),
(5, 2),
(5, 4),
(5, 6),
(6, 4),
(7, 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prilozi_list`
--
ALTER TABLE `prilozi_list`
  ADD CONSTRAINT `Prilog_idConstraint` FOREIGN KEY (`Prilog_id`) REFERENCES `prilozi` (`ID`),
  ADD CONSTRAINT `Jelo_idConstraint` FOREIGN KEY (`Jelo_id`) REFERENCES `jela` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
