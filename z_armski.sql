-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2019 at 01:46 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `z_armski`
--

-- --------------------------------------------------------

--
-- Table structure for table `armenia`
--

DROP TABLE IF EXISTS `armenia`;
CREATE TABLE IF NOT EXISTS `armenia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(244) NOT NULL,
  `header` varchar(255) NOT NULL,
  `meta_d` text NOT NULL,
  `describ` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `armenia`
--

INSERT INTO `armenia` (`id`, `name`, `title`, `img`, `header`, `meta_d`, `describ`) VALUES
(1, 'East Summit of Mount Aragats', 'East Summit of Mount Aragats', 'http://armski.am/assets/armenia-page/02.jpg', 'East Summit of Mount Aragats: Ski Run', 'http://armski.am/assets/armenia-page/pages/02_01.jpg', 'Description of the ski trail\r\nTo start skiing on the slopes of the East Summit of Mount Aragats, you need to set off to the Aragatsotn province. The nearest settlement is the village of Aragats (1,970m): this is where the skiing begins. The piste runs over a series of small hills that overlook deep gorges on the right hand side and stretch up to ‘merge’ into the Eastern Summit. When following this ski run, you will have reached the surroundings of the Aragats Summit. The Eastern Summit is the third highest peak of Mount Aragats.\r\n\r\nThe Aragats massif\r\nMount Aragats is considered the highest peak in Armenia (4,090m). It is an isolated shield-like massif of about 200km in circumference. Together with its fan-shaped slopes, it covers 4,000m², and is situated in both the Aragatsotn and Shirak provinces. Aragats used to be one of the world’s largest volcanos. It has a gigantic 400m-deep crater, 3km in diameter, and 4 peaks. The highest point is the North Summit- 4,090m; the West Summit is second with 3,995.3m and is followed by the East -3,908.2m and South Summits- 3,887.8m.\r\n\r\nNearby Attractions:\r\nTraveling between the East Summit of Aragats and Yerevan, you can visit:\r\n\r\nOhanavank (5th-13th centuries)\r\nOhanavank Monastery is located in the village of Ohanavan, within the Aragatsotn province of Armenia. It is beautifully perched on the edge of a gorge, high above the right bank of the Kasagh River. The monastery overlooks Mount Ara and the Geghama Mountain range from the southeast. In the past, the monastery owned vast plow-lands, gardens, pastures, oil mills, mills and villages. It also used to be a significant center of Armenian literature, containing a rich library; some of the manuscripts created there have been preserved up to this day.\r\n\r\nSaghmosavank\r\nSaghmosavank is located in Saghmosavan village, of Aragatsotn province, Armenia, at the edge of the deep Kasagh River gorge, and is ‘backed’ by gigantic Mount Ara from behind. On the other sides, the monastery overlooks Mount Aragats (4,095m) and Mount Ararat (5,165m). The monastery was built in the 13th century by Prince Vache I Vachutyan and his noble family. The complex is comprised of the Church of Zion, the Church of Holy Mother of God, a book depository and a narthex. The Church of Zion is the main church of the complex. It is a cross-shaped and domed church and differs from other churches built in that epoch by the layout of the narthex. The eastern part of the church features an altar and niches inside the walls. The Saghmosavank manuscript repository was built in 1,255. It neighbors the ancient khachkars (cross-stones) on the western facade of the church.\r\n\r\nThe Armenian Alphabet Monument after M. Mashtots\r\nThe Armenian Alphabet Monument is located on the eastern slope of Mount Aragats, near Artashavan village, in Aragatsotn province, on the left side of the Yerevan-Aparan highway. The Armenian alphabet was created between 405-406, by Mesrop Mashtots, a prominent linguist, religious and political leader, and has been used for Armenian writing ever since. The monument was built in 2,005 to commemorate the 1,600th anniversary of the creation of the Armenian alphabet. It features 39 beautifully ornamented letters of the alphabet and statues of key Armenian figures. Each letter is 1.5m-2m high. According to tradition, anyone who visits this monument takes a photo with the first letter of their name. By the Monument, you can see the statues of the great minds of Armenia – Mesrop Mashtots (with the letters in his hands), Grigor Lusavorich (holding the cross beyond), Anania Shirakatsi (a symbol of the earth and the universe in his left hand), Mkhitar Gosh (with “Datastanagirk”, the Book of Reprisal, in his hands), Khachatur Abovyan and Hovhannes Tumanyan.\r\n\r\nFauna\r\nOn the slopes of Mt. Aragats, animals rest under the thick layers of snow. While descending down the route, you are likely to see traces of animals more often than yours. While skiing in this territory, you’ll most probably come across evidence of wolves, foxes, wild rabbits and dogs in rural areas. Birds are also rare in this territory.\r\n\r\nSafety\r\nThe Ucom and VivaCell-MTS networks are almost always available between Geghadzor village and the Northern Summit of Mount Aragats. In case of emergency, call 911, a service available throughout Armenia.'),
(2, 'East Summit of Mount Aragats', 'East Summit of Mount Aragats', 'http://armski.am/assets/armenia-page/02.jpg', 'East Summit of Mount Aragats: Ski Run', 'http://armski.am/assets/armenia-page/pages/02_01.jpg', '<strong>Description of the ski trail</strong>\r\nTo start skiing on the slopes of the East Summit of Mount Aragats, you need to set off to the Aragatsotn province. The nearest settlement is the village of Aragats (1,970m): this is where the skiing begins. The piste runs over a series of small hills that overlook deep gorges on the right hand side and stretch up to \"merge\" into the Eastern Summit. When following this ski run, you will have reached the surroundings of the Aragats Summit. The Eastern Summit is the third highest peak of Mount Aragats.\r\n\r\nThe Aragats massif\r\nMount Aragats is considered the highest peak in Armenia (4,090m). It is an isolated shield-like massif of about 200km in circumference. Together with its fan-shaped slopes, it covers 4,000m², and is situated in both the Aragatsotn and Shirak provinces. Aragats used to be one of the world’s largest volcanos. It has a gigantic 400m-deep crater, 3km in diameter, and 4 peaks. The highest point is the North Summit- 4,090m; the West Summit is second with 3,995.3m and is followed by the East -3,908.2m and South Summits- 3,887.8m.\r\n\r\nNearby Attractions:\r\nTraveling between the East Summit of Aragats and Yerevan, you can visit:\r\n\r\nOhanavank (5th-13th centuries)\r\nOhanavank Monastery is located in the village of Ohanavan, within the Aragatsotn province of Armenia. It is beautifully perched on the edge of a gorge, high above the right bank of the Kasagh River. The monastery overlooks Mount Ara and the Geghama Mountain range from the southeast. In the past, the monastery owned vast plow-lands, gardens, pastures, oil mills, mills and villages. It also used to be a significant center of Armenian literature, containing a rich library; some of the manuscripts created there have been preserved up to this day.\r\n\r\nSaghmosavank\r\nSaghmosavank is located in Saghmosavan village, of Aragatsotn province, Armenia, at the edge of the deep Kasagh River gorge, and is ‘backed’ by gigantic Mount Ara from behind. On the other sides, the monastery overlooks Mount Aragats (4,095m) and Mount Ararat (5,165m). The monastery was built in the 13th century by Prince Vache I Vachutyan and his noble family. The complex is comprised of the Church of Zion, the Church of Holy Mother of God, a book depository and a narthex. The Church of Zion is the main church of the complex. It is a cross-shaped and domed church and differs from other churches built in that epoch by the layout of the narthex. The eastern part of the church features an altar and niches inside the walls. The Saghmosavank manuscript repository was built in 1,255. It neighbors the ancient khachkars (cross-stones) on the western facade of the church.\r\n\r\nThe Armenian Alphabet Monument after M. Mashtots\r\nThe Armenian Alphabet Monument is located on the eastern slope of Mount Aragats, near Artashavan village, in Aragatsotn province, on the left side of the Yerevan-Aparan highway. The Armenian alphabet was created between 405-406, by Mesrop Mashtots, a prominent linguist, religious and political leader, and has been used for Armenian writing ever since. The monument was built in 2,005 to commemorate the 1,600th anniversary of the creation of the Armenian alphabet. It features 39 beautifully ornamented letters of the alphabet and statues of key Armenian figures. Each letter is 1.5m-2m high. According to tradition, anyone who visits this monument takes a photo with the first letter of their name. By the Monument, you can see the statues of the great minds of Armenia – Mesrop Mashtots (with the letters in his hands), Grigor Lusavorich (holding the cross beyond), Anania Shirakatsi (a symbol of the earth and the universe in his left hand), Mkhitar Gosh (with “Datastanagirk”, the Book of Reprisal, in his hands), Khachatur Abovyan and Hovhannes Tumanyan.\r\n\r\nFauna\r\nOn the slopes of Mt. Aragats, animals rest under the thick layers of snow. While descending down the route, you are likely to see traces of animals more often than yours. While skiing in this territory, you\'ll most probably come across evidence of wolves, foxes, wild rabbits and dogs in rural areas. Birds are also rare in this territory.\r\n\r\nSafety\r\nThe Ucom and VivaCell-MTS networks are almost always available between Geghadzor village and the Northern Summit of Mount Aragats. In case of emergency, call 911, a service available throughout Armenia.');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_temp` varchar(255) NOT NULL,
  `describ` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `name`, `header`, `img`, `img_temp`, `describ`) VALUES
(1, 'Armenian Currency and Prices', 'Armenian Currency and Prices', 'Armenian Currency and Prices', 'http://armski.am/assets/blog-page/pages/01_1.png', 'http://armski.am/assets/blog-page/01.jpg', 'Whether you are a tourist or in a long or short business trip, it is always useful to have some preliminary idea about the currency of the host country before you visit.\r\nIn order to understand how much you can spend on products or services in Armenia, or what is the cash value of this or that monetary unit, we have made this special article with visual appearances and appropriate values of each unit.\r\nAccording to the online reviews in different forums, Armenia is in the list of the most affordable countries of the worrld.\r\nSo let’s see what is the difference between Armenia and rest of the world in terms of prices.\r\n\r\nArmenian money is called Dram. Like any other country we have coins and banknotes. The first series of Armenian coins was introduced in 1994 including the smallest amount Luma. The second series was introduced in 2004 and excluded Lumas. The only coin unit since 1994 that remained in circulation till now is 10 AMD.\r\nThe first series of banknotes was issued in November 1993. It was withdrawn from circulation by 2005. The second series was issued from 1998 which is still in use at present.\r\n\r\n\r\n10 Drams\r\n10 AMD almost equals to 0.020 USD. Being the smallest unit, it is not of a great value and the only thing you will buy with it is the single match, that hasn’t changed its price for the last 20 years. We have two types of this coins both of which are in use and are made of aluminum alloy. The coin has been used since 1994 and on the obverse side there is the Armenian Coat of Arms.\r\n20 Drams\r\n20 AMD almost equals to 0.04 USD. It is the second smallest unit of Armenian Drams. There is nothing among products corresponding to this price, except 2 matches. :)It is made of copper plated steel and has the Armenian Coat of Arms on the obverse side. It has been in the circulation since 2004.\r\n50 Drams\r\n50 AMD equals to 10 cents. There are few thing with this price: a single chewing gum, or a balloon, disposable plates or cups. Usually this coin has the Armenian Coat of Arms on the obverse side, but the new editions have also come with cultural monuments like Khor Virap, a prominent Armenian monastery, or Sanahin monastery, as well as famous statues of Yerevan. The coin has been released in 2003 and is made of brass plated steel.\r\n\r\n100 Drams\r\n100 AMD equals to 20 cents. What can you do in Armenia with 100 AMD? First of all you can transfer from one place to another using public transportation inside the city. Both minibuses and metro will cost you 100 AMD per seat, per way and you will have the advantage to use them from early morning till late at night. The smallest size of bread, pies, cookies, a bottle of water, cold coffee or tea in supermarkets can also be bought for 100 AMD. It is made of nickel plated steel and on the obverse side has the Armenian Coat of Arms.\r\n200 Drams\r\n200 AMD equals to 40 cents. It is enough to buy soft drinks, yogurt, big size bread, candies, cookies, pack of chewing gum, pocket napkins wet or dry, round trip metro tickets, etc. It is in circulation since 2003 and is made of alloy of copper, aluminum and nickel. Like most of the coins it has the Coat of Arms from back.\r\n\r\n500 Drams\r\n500 Drams is the closest equivalent of 1 American dollar. It has a very unique design being made of different subtracts. The inner ring is a mixture of copper and nickel, the outer ring is an alloy of copper, aluminum and nickel. The best example of what you can buy with 500 AMD in Armenia will be either a regular pack of cigarette or a bottle of bear. A pack of rise, pasta, 1 kg of sugar, a milk, 6 eggs or a good candy bar will also be possible to buy with 500 AMD. You can order a portion of french fries in some cafes or have an ice cream in the ice cream shop. It is in use since 2003 and the coat of Arm covers only the inner ring of the coin.\r\n\r\n1000 Drams\r\nThe banknote equivalent to 1000 AMD is almost equal to 2 American Dollars. It will be enough to buy a Shawarma and a coke. The front page represents a picture of old Yerevan and on obverse side famous Armenian writer Yeghishe Charets is pictured. It was issued on 1999.\r\n\r\n5000 Drams\r\nThe banknote equivalent to 5000 AMD is almost equal to 10 American Dollars. A regular hostel with or without breakfast can be booked for this amount in Yerevan (per night per person). Among entertainment activities you can afford playing a bowling for an hour with 5000 AMD. On the front page you can see the picture of another prominent Armenian writer Hovhannes Toumanyan. The obverse side introduces a landscape from Lori from Martiros Saryan’s paintings. The banknote was issued on 2000.\r\n\r\n10000 Drams\r\nThe banknote equivalent to 10000 AMD is almost equal to 20 American Dollars. In the front page is the image of Avetik Isahakyan: a writer, story teller and a great Armenian poet. The obverse side is introduced through the glimpse of second largest Armenian city-Gyumri. The banknote is in use since late 2003.\r\n\r\n20000 Drams\r\nThe banknote equivalent to 20000 AMD is almost equal to 50 American Dollars. First page is covered with the image of famous Armenian painter Martiros Saryan, and the opposite side is introduced through an episode from his Armenia landscape. It was released on late 2003.\r\n\r\n50000 Drams\r\nThe banknote equivalent to 50000 AMD is almost equal to 100 American Dollars. On the first page you will see the Ejmiatsin Cathedral and symbols of Christianity. The obverse side is represented through the scene of St. Gregory the Illuminator and king Tiridates who rise up the Armenian Church and on the right you will notice a khachkar from Kecharis Monastery. The banknote was issued in 2001.\r\n\r\n100000 Drams\r\nThe banknote equivalent to 100.000 AMD is almost equal to 200 American Dollars. It the most recent released edition among all banknotes. The front page is represented by the picture of historical Armenian ruler Abgar V of the Edessa, and on the backward you will see a scene from bible, where St. Thaddeus transfers the painting of Jesus Christ (painted alive) to Abgar V of Edessa. The banknote was released on 2009.\r\n\r\n'),
(2, 'Armenian Currency and Prices', 'Armenian Currency and Prices', 'Armenian Currency and Prices', 'http://armski.am/assets/blog-page/pages/01_1.png', 'http://armski.am/assets/blog-page/01.jpg', 'Whether you are a tourist or in a long or short business trip, it is always useful to have some preliminary idea about the currency of the host country before you visit.\r\nIn order to understand how much you can spend on products or services in Armenia, or what is the cash value of this or that monetary unit, we have made this special article with visual appearances and appropriate values of each unit.\r\nAccording to the online reviews in different forums, Armenia is in the list of the most affordable countries of the worrld.\r\nSo let’s see what is the difference between Armenia and rest of the world in terms of prices.\r\n\r\nArmenian money is called Dram. Like any other country we have coins and banknotes. The first series of Armenian coins was introduced in 1994 including the smallest amount Luma. The second series was introduced in 2004 and excluded Lumas. The only coin unit since 1994 that remained in circulation till now is 10 AMD.\r\nThe first series of banknotes was issued in November 1993. It was withdrawn from circulation by 2005. The second series was issued from 1998 which is still in use at present.\r\n\r\n\r\n10 Drams\r\n10 AMD almost equals to 0.020 USD. Being the smallest unit, it is not of a great value and the only thing you will buy with it is the single match, that hasn’t changed its price for the last 20 years. We have two types of this coins both of which are in use and are made of aluminum alloy. The coin has been used since 1994 and on the obverse side there is the Armenian Coat of Arms.\r\n20 Drams\r\n20 AMD almost equals to 0.04 USD. It is the second smallest unit of Armenian Drams. There is nothing among products corresponding to this price, except 2 matches. :)It is made of copper plated steel and has the Armenian Coat of Arms on the obverse side. It has been in the circulation since 2004.\r\n50 Drams\r\n50 AMD equals to 10 cents. There are few thing with this price: a single chewing gum, or a balloon, disposable plates or cups. Usually this coin has the Armenian Coat of Arms on the obverse side, but the new editions have also come with cultural monuments like Khor Virap, a prominent Armenian monastery, or Sanahin monastery, as well as famous statues of Yerevan. The coin has been released in 2003 and is made of brass plated steel.\r\n\r\n100 Drams\r\n100 AMD equals to 20 cents. What can you do in Armenia with 100 AMD? First of all you can transfer from one place to another using public transportation inside the city. Both minibuses and metro will cost you 100 AMD per seat, per way and you will have the advantage to use them from early morning till late at night. The smallest size of bread, pies, cookies, a bottle of water, cold coffee or tea in supermarkets can also be bought for 100 AMD. It is made of nickel plated steel and on the obverse side has the Armenian Coat of Arms.\r\n200 Drams\r\n200 AMD equals to 40 cents. It is enough to buy soft drinks, yogurt, big size bread, candies, cookies, pack of chewing gum, pocket napkins wet or dry, round trip metro tickets, etc. It is in circulation since 2003 and is made of alloy of copper, aluminum and nickel. Like most of the coins it has the Coat of Arms from back.\r\n\r\n500 Drams\r\n500 Drams is the closest equivalent of 1 American dollar. It has a very unique design being made of different subtracts. The inner ring is a mixture of copper and nickel, the outer ring is an alloy of copper, aluminum and nickel. The best example of what you can buy with 500 AMD in Armenia will be either a regular pack of cigarette or a bottle of bear. A pack of rise, pasta, 1 kg of sugar, a milk, 6 eggs or a good candy bar will also be possible to buy with 500 AMD. You can order a portion of french fries in some cafes or have an ice cream in the ice cream shop. It is in use since 2003 and the coat of Arm covers only the inner ring of the coin.\r\n\r\n1000 Drams\r\nThe banknote equivalent to 1000 AMD is almost equal to 2 American Dollars. It will be enough to buy a Shawarma and a coke. The front page represents a picture of old Yerevan and on obverse side famous Armenian writer Yeghishe Charets is pictured. It was issued on 1999.\r\n\r\n5000 Drams\r\nThe banknote equivalent to 5000 AMD is almost equal to 10 American Dollars. A regular hostel with or without breakfast can be booked for this amount in Yerevan (per night per person). Among entertainment activities you can afford playing a bowling for an hour with 5000 AMD. On the front page you can see the picture of another prominent Armenian writer Hovhannes Toumanyan. The obverse side introduces a landscape from Lori from Martiros Saryan’s paintings. The banknote was issued on 2000.\r\n\r\n10000 Drams\r\nThe banknote equivalent to 10000 AMD is almost equal to 20 American Dollars. In the front page is the image of Avetik Isahakyan: a writer, story teller and a great Armenian poet. The obverse side is introduced through the glimpse of second largest Armenian city-Gyumri. The banknote is in use since late 2003.\r\n\r\n20000 Drams\r\nThe banknote equivalent to 20000 AMD is almost equal to 50 American Dollars. First page is covered with the image of famous Armenian painter Martiros Saryan, and the opposite side is introduced through an episode from his Armenia landscape. It was released on late 2003.\r\n\r\n50000 Drams\r\nThe banknote equivalent to 50000 AMD is almost equal to 100 American Dollars. On the first page you will see the Ejmiatsin Cathedral and symbols of Christianity. The obverse side is represented through the scene of St. Gregory the Illuminator and king Tiridates who rise up the Armenian Church and on the right you will notice a khachkar from Kecharis Monastery. The banknote was issued in 2001.\r\n\r\n100000 Drams\r\nThe banknote equivalent to 100.000 AMD is almost equal to 200 American Dollars. It the most recent released edition among all banknotes. The front page is represented by the picture of historical Armenian ruler Abgar V of the Edessa, and on the backward you will see a scene from bible, where St. Thaddeus transfers the painting of Jesus Christ (painted alive) to Abgar V of Edessa. The banknote was released on 2009.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `header` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `title`, `meta_d`, `descr`, `header`, `paragraph`, `img`) VALUES
(1, 'home', 'Home', 'Armenian Ski Mountaineers Association', 'Armenian ski mountaineer’s association has been established in 2016, although he has been working as a club for more than 10 years․ The Association seeks to promote and ensure a large influx of people into the mountains of Armenia.', 'Feel Advantage of Descent', 'Armenian Ski Mountaineers Association', 'main/header\r\n'),
(2, 'about', 'About Us', 'Learn More About Armenian Ski Mountaineers Association', 'Armenian ski mountaineer’s association has been established in 2016, although he has been working as a club for more than 10 years․ The Association seeks to promote and ensure a large influx of people into the mountains of Armenia.', 'About Us', 'Learn More About ASMA', 'main/header\r\n'),
(3, 'armenia', 'Armenia', 'Learn More About Armenia', 'Armenia is a nation, and former Soviet republic, in the mountainous Caucasus region between Asia and Europe. Among the earliest Christian civilizations, it’s defined by religious sites including the Greco-Roman Temple of Garni and 4th-century Etchmiadzin Cathedral, headquarters of the Armenian Church. Khor Virap Monastery is a pilgrimage site near Mount Ararat, a dormant volcano just across the border in Turkey.', 'Armenia', 'Learn More About Armenia\r\n', 'main/header\r\n'),
(4, 'blog', 'Blog', 'Latest News in Travel and Tourism', 'Armenia is a nation, and former Soviet republic, in the mountainous Caucasus region between Asia and Europe. Among the earliest Christian civilizations, it’s defined by religious sites including the Greco-Roman Temple of Garni and 4th-century Etchmiadzin Cathedral, headquarters of the Armenian Church. Khor Virap Monastery is a pilgrimage site near Mount Ararat, a dormant volcano just across the border in Turkey.', 'Our Blog', 'Latest News in Travel and Tourism', 'main/header\r\n'),
(5, 'gallery', 'Gallery', 'Photos of Our Destinations', 'About US\r\nArmenian ski mountaineer’s association has been established in 2016, although he has been working as a club for more than 10 years․ The Association seeks to promote and ensure a large influx of people into the mountains of Armenia.', 'Gallery', 'Photos of Our Destinations\r\n', 'main/header\r\n'),
(6, 'tours', 'Tours', 'All Tours For You', 'Armenian ski mountaineer’s association has been established in 2016, although he has been working as a club for more than 10 years․ The Association seeks to promote and ensure a large influx of people into the mountains of Armenia.', 'All Tours For You', 'Tours Found', 'main/header'),
(7, 'videos', 'Videos', 'Videos From Our Latest Tours', 'Armenian ski mountaineer’s association has been established in 2016, although he has been working as a club for more than 10 years․ The Association seeks to promote and ensure a large influx of people into the mountains of Armenia.', 'Videos', 'Videos From Our Latest Tours', 'main/header');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

DROP TABLE IF EXISTS `tours`;
CREATE TABLE IF NOT EXISTS `tours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `img-temp` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `begin` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `accom` varchar(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `travelMod` varchar(255) NOT NULL,
  `peopleNum` varchar(255) NOT NULL,
  `include` text NOT NULL,
  `exclude` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `name`, `title`, `meta_d`, `img-temp`, `img`, `price`, `duration`, `location`, `descr`, `begin`, `end`, `season`, `accom`, `food`, `travelMod`, `peopleNum`, `include`, `exclude`) VALUES
(1, 'Hiking Tour in Central and Northern Armenia', 'Hiking Tour in Central and Northern Armenia', '', 'https://i.imgur.com/TDf495M.jpg', 'http://natoura.am/wp-content/uploads/2016/11/DSC08920-620x245.jpg', 820, '10 days / 9 nights ', 'Armenia', 'Hiking tour is always an adventure and the natural surrounding in Armenia will make this kind of tour here almost unforgettable. Armenia is considered to be the land of stones and mountains. The amazing view of our highlands will remain in your memory. We give you a chance to visit all the amazing places of Armenia: Sevan lake, the beauty heart of Armenia, Aragats mountain, the highest mountain in Armenia. We give you an opportunity to stay in the hotels of Yerevan, the capital of Armenia, to get the needed rest for the new adventures. We will be very happy to see you in Armenia.', 'Yerevan', 'Yerevan', 'From June to September', 'Tourist hotels', 'Breakfasts, Lunches', '4WD vehicles, minibuses/biking', 'Tour is available starting from 1 person', 'Accommodation for tourist hotels Breakfasts, lunches\r\nAll transfers,\r\nAll activities as per itinerary with all entry fees\r\nTravel permits in protected areas\r\nGuiding service, local guides in museums', 'Optional activities'),
(2, 'Trekking Tour in Artsakh', 'Hiking Tour in Central and Northern Armenia', '', 'https://i.imgur.com/TDf495M.jpg', 'http://natoura.am/wp-content/uploads/2016/04/IMG_5480-1_resize-620x245.jpg', 820, '10 days / 9 nights ', 'Armenia', 'Hiking tour is always an adventure and the natural surrounding in Armenia will make this kind of tour here almost unforgettable. Armenia is considered to be the land of stones and mountains. The amazing view of our highlands will remain in your memory. We give you a chance to visit all the amazing places of Armenia: Sevan lake, the beauty heart of Armenia, Aragats mountain, the highest mountain in Armenia. We give you an opportunity to stay in the hotels of Yerevan, the capital of Armenia, to get the needed rest for the new adventures. We will be very happy to see you in Armenia.', 'Yerevan', 'Yerevan', 'From June to September', 'Tourist hotels', 'Breakfasts, Lunches', '4WD vehicles, minibuses/biking', 'Tour is available starting from 1 person', 'Accommodation for tourist hotels Breakfasts, lunches\r\nAll transfers,\r\nAll activities as per itinerary with all entry fees\r\nTravel permits in protected areas\r\nGuiding service, local guides in museums', 'Optional activities');

-- --------------------------------------------------------

--
-- Table structure for table `tour_details`
--

DROP TABLE IF EXISTS `tour_details`;
CREATE TABLE IF NOT EXISTS `tour_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tourId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `weight` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_details`
--

INSERT INTO `tour_details` (`id`, `tourId`, `title`, `description`, `weight`) VALUES
(1, 1, 'Day 1', 'Some text.', 1),
(2, 1, 'Day 2', 'Some other text.', 2),
(3, 2, 'Day 1', 'Some other text.', 0),
(4, 1, 'Day 3', 'Some other text 3.', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
