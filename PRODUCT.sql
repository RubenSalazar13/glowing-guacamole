-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2021 at 06:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CATALOG`
--

-- --------------------------------------------------------

--
-- Table structure for table `PRODUCT`
--

CREATE TABLE `PRODUCT` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ProductPrice` float(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PRODUCT`
--

INSERT INTO `PRODUCT` (`ProductID`, `ProductName`, `Description`, `image`, `ProductPrice`) VALUES
(19, 'Cheese Burger', 'Albufeira is a coastal city in the southern Algarve region of Portugal. It’s a former fishing village that has become a major holiday destination, with sandy beaches and a busy nightlife strip.', './img/CheeseBurger.jpg', 699.99),
(20, 'Wales', 'Bristol is a city straddling the River Avon in the southwest of England with a prosperous maritime history. Its former city-centre port is now a cultural hub, the Harbourside, where the M Shed museum explores local social and industrial heritage. ', './img/bristol.jpg', 599.99),
(23, 'United Arab Emirates', 'Dubai is a city and emirate in the United Arab Emirates known for luxury shopping, ultramodern architecture and a lively nightlife scene. Burj Khalifa, an 830m-tall tower, dominates the skyscraper-filled skyline. At its foot lies Dubai Fountain, with jets and lights choreographed to music.', './img/dubai.jpg', 999.99),
(24, 'Spain (Sierra Nevada) ', 'Granada is a city in southern Spain’s Andalusia region, in the foothills of the Sierra Nevada mountains. It\'s known for grand examples of medieval architecture dating to the Moorish occupation, especially the Alhambra. ', './img/granada.jpg', 599.99),
(25, 'Turkey', 'Istanbul is a major city in Turkey that straddles Europe and Asia across the Bosphorus Strait. Its Old City reflects cultural influences of the many empires that once ruled here. In the Sultanahmet district, the open-air, Roman-era Hippodrome was for centuries the site of chariot races, and Egyptian obelisks also remain.', './img/istanbul.jpg', 899.99),
(26, 'Spain', 'Madrid, Spain\'s central capital, is a city of elegant boulevards and expansive, manicured parks such as the Buen Retiro. It’s renowned for its rich repositories of European art, including the Prado Museum’s works by Goya, Velázquez and other Spanish masters.', './img/madrid.jpg', 599.99),
(27, 'Morocco', 'Marrakesh, a former imperial city in western Morocco, is a major economic center and home to mosques, palaces and gardens. The medina is a densely packed, walled medieval city dating to the Berber Empire, with mazelike alleys where thriving souks (marketplaces) sell traditional textiles, pottery and jewelry.', './img/marrakech.jpg', 499.99),
(28, 'Tennessee', 'Nashville is the capital of the U.S. state of Tennessee and home to Vanderbilt University. Legendary country music venues include the Grand Ole Opry House, home of the famous “Grand Ole Opry” stage and radio show. The Country Music Hall of Fame and Museum and historic Ryman Auditorium are Downtown, as is the District, featuring honky-tonks with live music and the Johnny Cash Museum, celebrating the singer\'s life.', './img/nashville.jpg', 399.99),
(29, 'France', 'Paris, France\'s capital, is a major European city and a global center for art, fashion, gastronomy and culture. Its 19th-century cityscape is crisscrossed by wide boulevards and the River Seine. Beyond such landmarks as the Eiffel Tower and the 12th-century, Gothic Notre-Dame cathedral, the city is known for its cafe culture and designer boutiques along the Rue du Faubourg Saint-Honoré.', './img/paris.jpg', 899.99),
(30, 'Jordan', 'Petra is a famous archaeological site in Jordan\'s southwestern desert. Dating to around 300 B.C., it was the capital of the Nabatean Kingdom. Accessed via a narrow canyon called Al Siq, it contains tombs and temples carved into pink sandstone cliffs, earning its nickname, the \"Rose City.\"', './img/petra.jpg', 599.99),
(31, 'Thailand', 'Phuket, a rainforested, mountainous island in the Andaman Sea, has some of Thailand’s most popular beaches, mainly situated along the clear waters of the western shore. The island is home to many high-end seaside resorts, spas and restaurants. Phuket City, the capital, has old shophouses and busy markets. Patong, the main resort town, has many nightclubs, bars and discos.', './img/phuket.jpg', 499.99),
(32, 'The Czech Republic', 'Prague, capital city of the Czech Republic, is bisected by the Vltava River. Nicknamed “the City of a Hundred Spires,” it\'s known for its Old Town Square, the heart of its historic core, with colorful baroque buildings, Gothic churches and the medieval Astronomical Clock, which gives an animated hourly show. Completed in 1402, pedestrian Charles Bridge is lined with statues of Catholic saints.', './img/prague.jpg', 699.99),
(33, 'Italy', 'Rome, it is also the country\'s most populated comune. It is the third most populous city in the European Union by population within city limits.', './img/rome.jpg', 499.99),
(34, 'Southern Spain', 'Sevilla is the capital of southern Spain’s Andalusia region. It\'s famous for flamenco dancing, particularly in its Triana neighborhood. Major landmarks include the ornate Alcázar castle complex, built during the Moorish Almohad dynasty, and the 18th-century Plaza de Toros de la Maestranza bullring. The Gothic Seville Cathedral is the site of Christopher Columbus’s tomb and a minaret turned bell tower, the Giralda.', './img/sevilla.jpg', 599.99),
(35, 'Japan', 'Tokyo is Japan\'s capital and the world\'s most populous metropolis. It is also one of Japan\'s 47 prefectures, consisting of 23 central city wards and multiple cities, towns and villages west of the city center. The Izu and Ogasawara Islands are also part of Tokyo.\r\n\r\n', './img/tokyo.jpg', 799.99),
(36, 'British Columbia', 'Vancouver, a bustling west coast seaport in British Columbia, is among Canada’s densest, most ethnically diverse cities. A popular filming location, it’s surrounded by mountains, and also has thriving art, theatre and music scenes. Vancouver Art Gallery is known for its works by regional artists, while the Museum of Anthropology houses preeminent First Nations collections.', './img/vancover.jpg', 399.99),
(37, 'Ireland', 'Dublin, capital of the Republic of Ireland, is on Ireland’s east coast at the mouth of the River Liffey. Its historic buildings include Dublin Castle, dating to the 13th century, and imposing St Patrick’s Cathedral, founded in 1191. City parks include landscaped St Stephen’s Green and huge Phoenix Park, containing Dublin Zoo. The National Museum of Ireland explores Irish heritage and culture.', './img/dublin.jpg', 599.99),
(38, 'Germany', 'Munich, Bavaria’s capital, is home to centuries-old buildings and numerous museums. The city is known for its annual Oktoberfest celebration and its beer halls, including the famed Hofbräuhaus, founded in 1589. In the Altstadt (Old Town), central Marienplatz square contains landmarks such as Neo-Gothic Neues Rathaus (town hall), with a popular glockenspiel show that chimes and reenacts stories from the 16th century.', './img/munich.jpg', 699.99),
(39, 'Mexico', 'Chiapas is a southern Mexican state bordering Guatemala. Its mountainous highlands and dense rainforest are dotted with Mayan archaeological sites and Spanish colonial towns. In the colonial city of San Cristóbal de las Casas, the Templo y Ex-Convento Santo Domingo complex houses a baroque church and museum displaying regional artifacts. Surrounding it is a marketplace selling items such as colorful weavings.', './img/chiapas.jpg', 399.99),
(40, 'Greece', 'Chania is a city on the northwest coast of the Greek island of Crete. It’s known for its 14th-century Venetian harbor, narrow streets and waterfront restaurants. At the harbor entrance is a 16th-century lighthouse with Venetian, Egyptian and Ottoman influences.', './img/chania.jpg', 699.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PRODUCT`
--
ALTER TABLE `PRODUCT`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `PRODUCT`
--
ALTER TABLE `PRODUCT`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
